<?php

declare(strict_types=1);

namespace PHPModelGenerator\SchemaProcessor;

use PHPModelGenerator\Exception\FileSystemException;
use PHPModelGenerator\Exception\RenderException;
use PHPModelGenerator\Model\GeneratorConfiguration;
use PHPModelGenerator\Model\RenderJob;
use PHPModelGenerator\SchemaProcessor\PostProcessor\PostProcessor;

/**
 * Class RenderQueue
 *
 * @package PHPModelGenerator\SchemaProcessor
 */
class RenderQueue
{
    /** @var RenderJob[] */
    protected $jobs = [];

    /** @var array<string, true> Tracks rendered filenames to skip duplicates */
    protected array $renderedFiles = [];

    /**
     * @return $this
     */
    public function addRenderJob(RenderJob $renderJob): self
    {
        $targetFile = $renderJob->getSchema()->getTargetFileName();
        if (isset($this->renderedFiles[$targetFile])) {
            return $this;
        }
        $this->renderedFiles[$targetFile] = true;
        $this->jobs[] = $renderJob;

        return $this;
    }

    /**
     * Render all collected jobs of the RenderQueue and clear the queue
     *
     * @param PostProcessor[] $postProcessors
     *
     * @throws FileSystemException
     * @throws RenderException
     */
    public function execute(GeneratorConfiguration $generatorConfiguration, array $postProcessors): void
    {
        foreach ($postProcessors as $postProcessor) {
            $postProcessor->preProcess();
        }

        foreach ($this->jobs as $job) {
            $job->executePostProcessors($postProcessors, $generatorConfiguration);
            $job->render($generatorConfiguration);
        }

        foreach ($postProcessors as $postProcessor) {
            $postProcessor->postProcess();
        }

        $this->jobs = [];
    }
}
