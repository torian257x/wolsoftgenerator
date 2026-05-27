<?php

declare(strict_types=1);

namespace PHPModelGenerator\Tests\PostProcessor;

use PHPModelGenerator\ModelGenerator;
use PHPModelGenerator\SchemaProcessor\PostProcessor\BuilderClassPostProcessor;
use PHPModelGenerator\SchemaProcessor\PostProcessor\EnumPostProcessor;
use PHPModelGenerator\Tests\AbstractPHPModelGeneratorTestCase;

class EnumAndBuilderSchemaNameTest extends AbstractPHPModelGeneratorTestCase
{
    public function testSchemaNameAndBuilderMethodCorrectWhenSameDefinitionReferencedFromArrayAndObject(): void
    {
        $enumDir = join(DIRECTORY_SEPARATOR, [sys_get_temp_dir(), 'PHPModelGeneratorTest', 'Enum_schema_test']);

        $this->modifyModelGenerator = static function (ModelGenerator $generator) use ($enumDir): void {
            $generator
                ->addPostProcessor(new BuilderClassPostProcessor())
                ->addPostProcessor(new EnumPostProcessor($enumDir, 'Enum'));
        };

        $this->generateClassFromFile('SchemaNameTest.json', null, false, true);

        $modelDir = sys_get_temp_dir() . '/PHPModelGeneratorTest/Models';
        $allFiles = glob($modelDir . '/*.php');
        $this->assertNotEmpty($allFiles, 'No PHP files found in ' . $modelDir);

        // Find all files and read them
        $nestedModelContent = null;
        $nestedBuilderContent = null;
        $rootModelContent = null;

        foreach ($allFiles as $path) {
            $base = basename($path);
            // Use endsWith to distinguish model from builder (Builder.php suffix)
            $isBuilder = str_ends_with($base, 'Builder.php');
            $isNested = str_contains($base, 'Nested');

            if ($isNested && !$isBuilder) {
                $nestedModelContent = file_get_contents($path);
            } elseif ($isNested && $isBuilder) {
                $nestedBuilderContent = file_get_contents($path);
            } elseif (!$isNested && !$isBuilder) {
                $rootModelContent = file_get_contents($path);
            }
        }

        $this->assertNotNull($nestedModelContent, 'Could not find nested model file');
        $this->assertNotNull($nestedBuilderContent, 'Could not find nested builder file');
        $this->assertNotNull($rootModelContent, 'Could not find root model file');

        // --- Check SchemaName in nested model ---
        $this->assertStringContainsString(
            "#[SchemaName('single_enum')]",
            $nestedModelContent,
            'SchemaName must be single_enum'
        );
        $this->assertStringNotContainsString(
            "#[SchemaName('item of array array_items')]",
            $nestedModelContent,
            'SchemaName must not be item of array array_items'
        );

        // --- Check nested builder method names ---
        $this->assertStringContainsString(
            'function setSingleEnum(',
            $nestedBuilderContent,
            'Builder must have setSingleEnum'
        );
        $this->assertStringContainsString(
            'function getSingleEnum(',
            $nestedBuilderContent,
            'Builder must have getSingleEnum'
        );
        $this->assertStringNotContainsString(
            'function setItemOfArrayArrayItems(',
            $nestedBuilderContent,
            'Builder must not have setItemOfArrayArrayItems'
        );
        $this->assertStringNotContainsString(
            'function getItemOfArrayArrayItems(',
            $nestedBuilderContent,
            'Builder must not have getItemOfArrayArrayItems'
        );

        // --- Check data keys in builder ---
        $this->assertStringContainsString(
            "['single_enum']",
            $nestedBuilderContent,
            'Builder must use single_enum as data key'
        );
        $this->assertStringNotContainsString(
            "['item of array array_items']",
            $nestedBuilderContent,
            'Builder must not use item of array array_items as data key'
        );

        // --- Check root model has correct SchemaNames ---
        $this->assertStringContainsString("#[SchemaName('array_items')]", $rootModelContent);
        $this->assertStringContainsString("#[SchemaName('nested')]", $rootModelContent);
    }
}
