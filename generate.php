<?php
declare(strict_types=1);

use PHPModelGenerator\ModelGenerator;
use PHPModelGenerator\Model\GeneratorConfiguration;
use PHPModelGenerator\SchemaProvider\SingleFileProvider;
use PHPModelGenerator\SchemaProcessor\PostProcessor\PopulatePostProcessor;
use PHPModelGenerator\SchemaProcessor\PostProcessor\EnumPostProcessor;
use PHPModelGenerator\SchemaProcessor\PostProcessor\BuilderClassPostProcessor;

require_once __DIR__ . '/vendor/autoload.php';

$namespace  = 'AdCP\\MediaBuy';
$schemaDir  = __DIR__ . '/schemas/adcp';
$baseOutputDir = __DIR__ . '/generated/adcp-media-buy';
$enumDir    = __DIR__ . '/generated/adcp-enums';

$schemaFiles = [
    'get-products-request.json',
    'get-products-response.json',
    'get-media-buy-delivery-request.json',
    'get-media-buy-delivery-response.json',
    'get-media-buys-request.json',
    'get-media-buys-response.json',
];

// Prepare output dirs (create if not exist, clean main dir)
$gen = new ModelGenerator();
$gen->generateModelDirectory($baseOutputDir);
@mkdir($enumDir, 0777, true);

// Create enumerated processors once and reuse to avoid wiping enum dir on each schema
$sharedEnumProcessor = new EnumPostProcessor($enumDir, $namespace . '\\Enums', true);
// After constructor creates/cleans the enum dir, we need to make sure subsequent
// schema processing doesn't wipe it. The constructor already ran, so the dir is clean now.

foreach ($schemaFiles as $schemaFile) {
    $schemaPath = $schemaDir . '/' . $schemaFile;
    $tmpDir = $baseOutputDir . '/.tmp-' . basename($schemaFile, '.json');

    @mkdir($tmpDir, 0777, true);

    $generator = new ModelGenerator(
        (new GeneratorConfiguration())
            ->setNamespacePrefix($namespace)
            ->setImmutable(false)
            ->setSerialization(true)
            ->setCollectErrors(true)
    );

    $generator
        ->addPostProcessor(new PopulatePostProcessor())
        // Use the same enum processor for all schemas
        ->addPostProcessor($sharedEnumProcessor)
        ->addPostProcessor(new BuilderClassPostProcessor())
        ->generateModelDirectory($tmpDir);

    echo "Processing $schemaFile...\n";
    try {
        $generator->generateModels(
            new SingleFileProvider($schemaPath),
            $tmpDir
        );
    } catch (\Throwable $e) {
        echo "  PARTIAL - " . $e->getMessage() . "\n";
    }

    // Copy all files from tmpDir
    foreach (new RecursiveIteratorIterator(
        new RecursiveDirectoryIterator($tmpDir, FilesystemIterator::SKIP_DOTS)
    ) as $f) {
        if ($f->getExtension() !== 'php') {
            continue;
        }
        $dest = $baseOutputDir . '/' . $f->getFilename();
        if (!file_exists($dest)) {
            copy($f->getRealPath(), $dest);
        }
    }

    // Cleanup tmp dir
    $di = new RecursiveDirectoryIterator($tmpDir, FilesystemIterator::SKIP_DOTS);
    $ri = new RecursiveIteratorIterator($di, RecursiveIteratorIterator::CHILD_FIRST);
    foreach ($ri as $f) {
        $f->isDir() ? rmdir($f->getRealPath()) : unlink($f->getRealPath());
    }
    rmdir($tmpDir);
}

$totalFiles = count(glob($baseOutputDir . '/*.php'));
$enumFiles = count(glob($enumDir . '/*.php'));
echo "\nTotal model files: $totalFiles\n";
echo "Total enum files: $enumFiles\n";
