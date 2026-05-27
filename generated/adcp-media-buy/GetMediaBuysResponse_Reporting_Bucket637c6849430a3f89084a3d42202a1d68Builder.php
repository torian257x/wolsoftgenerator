<?php

// @codingStandardsIgnoreFile
// @codeCoverageIgnoreStart

declare(strict_types = 1);


    namespace AdCP\MediaBuy;



    use PHPModelGenerator\Interfaces\BuilderInterface;

    use PHPModelGenerator\Exception\ErrorRegistryException;

    use AdCP\MediaBuy\Enums\CloudStorageProtocol;

    use AdCP\MediaBuy\Enums\GetMediaBuysResponse_Reporting_Bucket637c6849430a3f89084a3d42202a1d68Format;

    use AdCP\MediaBuy\Enums\GetMediaBuysResponse_Reporting_Bucket637c6849430a3f89084a3d42202a1d68Compression;


/**
 * Builder class for GetMediaBuysResponse_Reporting_Bucket637c6849430a3f89084a3d42202a1d68
 */
class GetMediaBuysResponse_Reporting_Bucket637c6849430a3f89084a3d42202a1d68Builder implements BuilderInterface
{
    /** @var array */
    protected $_rawModelDataInput = [];

    
        /** @var ErrorRegistryException */
        protected $_errorRegistry;
    

    public function __construct(array $rawModelDataInput = [])
    {
        $this->_rawModelDataInput = $rawModelDataInput;

        
            $this->_errorRegistry = new ErrorRegistryException();
        
    }

    /**
     * Get the raw input used to set up the model
     *
     * @return array
     */
    public function getRawModelDataInput(): array
    {
        return $this->_rawModelDataInput;
    }

    /**
     * Set up a new instance of GetMediaBuysResponse_Reporting_Bucket637c6849430a3f89084a3d42202a1d68 with fully validated properties
     */
    public function validate(): GetMediaBuysResponse_Reporting_Bucket637c6849430a3f89084a3d42202a1d68
    {
        $this->_array_walk_recursive_real(
            $this->_rawModelDataInput,
            function (&$property): void {
                if ($property instanceof BuilderInterface) {
                    $property = $property->getRawModelDataInput();
                }
            },
        );

        return new GetMediaBuysResponse_Reporting_Bucket637c6849430a3f89084a3d42202a1d68($this->_rawModelDataInput);
    }

    // PHPs builtin array_walk_recursive doesn't handle newly inserted arrays which we need to visit
    private function _array_walk_recursive_real(array &$array, callable $callback): void
    {
        foreach ($array as &$value) {
            $callback($value);

            if (is_array($value)) {
                $this->_array_walk_recursive_real($value, $callback);
            }
        }
    }

    
        
            /**
             * Get the value of protocol.
             *
             * Cloud storage protocol
             *
             * @return string|CloudStorageProtocol|null
             */
            public function getProtocol(): string | CloudStorageProtocol | null
            {
                return $this->_rawModelDataInput['protocol'] ?? null;
            }

            /**
             * Set the value of protocol.
             *
             * @param string|CloudStorageProtocol $protocol Cloud storage protocol
             *
             * {@link GetMediaBuysResponse_Reporting_Bucket637c6849430a3f89084a3d42202a1d68::processProtocol}
             * 
             *
             * @return static
             */
            public function setProtocol(
                string | CloudStorageProtocol $protocol
            ): static {
                if (array_key_exists('protocol', $this->_rawModelDataInput)
                    && $this->_rawModelDataInput['protocol'] === $protocol
                ) {
                    return $this;
                }

                $value = $modelData['protocol'] = $protocol;

                

                

                $this->_rawModelDataInput['protocol'] = $value;

                return $this;
            }
        
    
        
            /**
             * Get the value of bucket.
             *
             * Bucket or container name
             *
             * @return string|null
             */
            public function getBucket(): ?string
            {
                return $this->_rawModelDataInput['bucket'] ?? null;
            }

            /**
             * Set the value of bucket.
             *
             * @param string $bucket Bucket or container name
             *
             * {@link GetMediaBuysResponse_Reporting_Bucket637c6849430a3f89084a3d42202a1d68::processBucket}
             * 
             *
             * @return static
             */
            public function setBucket(
                string $bucket
            ): static {
                if (array_key_exists('bucket', $this->_rawModelDataInput)
                    && $this->_rawModelDataInput['bucket'] === $bucket
                ) {
                    return $this;
                }

                $value = $modelData['bucket'] = $bucket;

                

                

                $this->_rawModelDataInput['bucket'] = $value;

                return $this;
            }
        
    
        
            /**
             * Get the value of prefix.
             *
             * Path prefix within the bucket. Seller appends date-based partitioning beneath this prefix.
             *
             * @return string|null
             */
            public function getPrefix(): ?string
            {
                return $this->_rawModelDataInput['prefix'] ?? null;
            }

            /**
             * Set the value of prefix.
             *
             * @param string $prefix Path prefix within the bucket. Seller appends date-based partitioning beneath this prefix.
             *
             * {@link GetMediaBuysResponse_Reporting_Bucket637c6849430a3f89084a3d42202a1d68::processPrefix}
             * 
             *
             * @return static
             */
            public function setPrefix(
                string $prefix
            ): static {
                if (array_key_exists('prefix', $this->_rawModelDataInput)
                    && $this->_rawModelDataInput['prefix'] === $prefix
                ) {
                    return $this;
                }

                $value = $modelData['prefix'] = $prefix;

                

                

                $this->_rawModelDataInput['prefix'] = $value;

                return $this;
            }
        
    
        
            /**
             * Get the value of region.
             *
             * Cloud region for the bucket
             *
             * @return string|null
             */
            public function getRegion(): ?string
            {
                return $this->_rawModelDataInput['region'] ?? null;
            }

            /**
             * Set the value of region.
             *
             * @param string $region Cloud region for the bucket
             *
             * {@link GetMediaBuysResponse_Reporting_Bucket637c6849430a3f89084a3d42202a1d68::processRegion}
             * 
             *
             * @return static
             */
            public function setRegion(
                string $region
            ): static {
                if (array_key_exists('region', $this->_rawModelDataInput)
                    && $this->_rawModelDataInput['region'] === $region
                ) {
                    return $this;
                }

                $value = $modelData['region'] = $region;

                

                

                $this->_rawModelDataInput['region'] = $value;

                return $this;
            }
        
    
        
            /**
             * Get the value of format.
             *
             * File format for delivered files. Parquet, Avro, and ORC use internal compression (the top-level compression field is ignored for these formats).
             *
             * @return string|GetMediaBuysResponse_Reporting_Bucket637c6849430a3f89084a3d42202a1d68Format|null
             */
            public function getFormat(): string | GetMediaBuysResponse_Reporting_Bucket637c6849430a3f89084a3d42202a1d68Format | null
            {
                return $this->_rawModelDataInput['format'] ?? null;
            }

            /**
             * Set the value of format.
             *
             * @param string|GetMediaBuysResponse_Reporting_Bucket637c6849430a3f89084a3d42202a1d68Format|null $format File format for delivered files. Parquet, Avro, and ORC use internal compression (the top-level compression field is ignored for these formats).
             *
             * {@link GetMediaBuysResponse_Reporting_Bucket637c6849430a3f89084a3d42202a1d68::processFormat}
             * 
             *
             * @return static
             */
            public function setFormat(
                string | GetMediaBuysResponse_Reporting_Bucket637c6849430a3f89084a3d42202a1d68Format | null $format
            ): static {
                if (array_key_exists('format', $this->_rawModelDataInput)
                    && $this->_rawModelDataInput['format'] === $format
                ) {
                    return $this;
                }

                $value = $modelData['format'] = $format;

                

                

                $this->_rawModelDataInput['format'] = $value;

                return $this;
            }
        
    
        
            /**
             * Get the value of compression.
             *
             * Compression applied to delivered files
             *
             * @return string|GetMediaBuysResponse_Reporting_Bucket637c6849430a3f89084a3d42202a1d68Compression|null
             */
            public function getCompression(): string | GetMediaBuysResponse_Reporting_Bucket637c6849430a3f89084a3d42202a1d68Compression | null
            {
                return $this->_rawModelDataInput['compression'] ?? null;
            }

            /**
             * Set the value of compression.
             *
             * @param string|GetMediaBuysResponse_Reporting_Bucket637c6849430a3f89084a3d42202a1d68Compression|null $compression Compression applied to delivered files
             *
             * {@link GetMediaBuysResponse_Reporting_Bucket637c6849430a3f89084a3d42202a1d68::processCompression}
             * 
             *
             * @return static
             */
            public function setCompression(
                string | GetMediaBuysResponse_Reporting_Bucket637c6849430a3f89084a3d42202a1d68Compression | null $compression
            ): static {
                if (array_key_exists('compression', $this->_rawModelDataInput)
                    && $this->_rawModelDataInput['compression'] === $compression
                ) {
                    return $this;
                }

                $value = $modelData['compression'] = $compression;

                

                

                $this->_rawModelDataInput['compression'] = $value;

                return $this;
            }
        
    
        
            /**
             * Get the value of file_retention_days.
             *
             * How long reporting files are retained in the bucket before deletion. Buyers must read files within this window. Minimum recommended: 14 days.
             *
             * @return int|null
             */
            public function getFileRetentionDays(): ?int
            {
                return $this->_rawModelDataInput['file_retention_days'] ?? null;
            }

            /**
             * Set the value of file_retention_days.
             *
             * @param int $fileRetentionDays How long reporting files are retained in the bucket before deletion. Buyers must read files within this window. Minimum recommended: 14 days.
             *
             * {@link GetMediaBuysResponse_Reporting_Bucket637c6849430a3f89084a3d42202a1d68::processFileRetentionDays}
             * 
             *
             * @return static
             */
            public function setFileRetentionDays(
                int $fileRetentionDays
            ): static {
                if (array_key_exists('file_retention_days', $this->_rawModelDataInput)
                    && $this->_rawModelDataInput['file_retention_days'] === $fileRetentionDays
                ) {
                    return $this;
                }

                $value = $modelData['file_retention_days'] = $fileRetentionDays;

                

                

                $this->_rawModelDataInput['file_retention_days'] = $value;

                return $this;
            }
        
    
        
            /**
             * Get the value of setup_instructions.
             *
             * URL to documentation for configuring buyer read access to this bucket (IAM role, service account, etc.). Operator-facing documentation — buyer agents MUST NOT auto-fetch this URL; surface it to a human operator. If an implementation fetches it (for preview), apply webhook URL SSRF validation and do not pass the fetched content into an LLM context without indirect-prompt-injection guarding. See docs/media-buy/media-buys/optimization-reporting#security-considerations-for-offline-delivery.
             *
             * @return string|null
             */
            public function getSetupInstructions(): ?string
            {
                return $this->_rawModelDataInput['setup_instructions'] ?? null;
            }

            /**
             * Set the value of setup_instructions.
             *
             * @param string $setupInstructions URL to documentation for configuring buyer read access to this bucket (IAM role, service account, etc.). Operator-facing documentation — buyer agents MUST NOT auto-fetch this URL; surface it to a human operator. If an implementation fetches it (for preview), apply webhook URL SSRF validation and do not pass the fetched content into an LLM context without indirect-prompt-injection guarding. See docs/media-buy/media-buys/optimization-reporting#security-considerations-for-offline-delivery.
             *
             * {@link GetMediaBuysResponse_Reporting_Bucket637c6849430a3f89084a3d42202a1d68::processSetupInstructions}
             * 
             *
             * @return static
             */
            public function setSetupInstructions(
                string $setupInstructions
            ): static {
                if (array_key_exists('setup_instructions', $this->_rawModelDataInput)
                    && $this->_rawModelDataInput['setup_instructions'] === $setupInstructions
                ) {
                    return $this;
                }

                $value = $modelData['setup_instructions'] = $setupInstructions;

                

                

                $this->_rawModelDataInput['setup_instructions'] = $value;

                return $this;
            }
        
    
}

// @codeCoverageIgnoreEnd
