<?php

// @codingStandardsIgnoreFile
// @codeCoverageIgnoreStart

declare(strict_types = 1);


    namespace AdCP\MediaBuy;



    use PHPModelGenerator\Interfaces\JSONModelInterface;

    use UnitEnum;

    use AdCP\MediaBuy\Enums\CloudStorageProtocol;

    use AdCP\MediaBuy\Enums\GetMediaBuysResponse_Reporting_Bucket637c6849430a3f89084a3d42202a1d68Format;

    use AdCP\MediaBuy\Enums\GetMediaBuysResponse_Reporting_Bucket637c6849430a3f89084a3d42202a1d68Compression;

    use PHPModelGenerator\Traits\SerializableTrait;

    use JsonSerializable;

    use PHPModelGenerator\Interfaces\SerializationInterface;

    use PHPModelGenerator\Attributes\JsonPointer;

    use PHPModelGenerator\Attributes\SchemaName;

    use PHPModelGenerator\Attributes\Required;

    use PHPModelGenerator\Attributes\Internal;

    use PHPModelGenerator\Exception\ErrorRegistryException;


/**
 * Class GetMediaBuysResponse_Reporting_Bucket637c6849430a3f89084a3d42202a1d68
 * @package AdCP\MediaBuy 
 *
 * Cloud storage bucket where the seller delivers offline reporting files for this account. Seller provisions a dedicated bucket or a per-account prefix within a shared bucket, and grants the buyer read access out-of-band. Access MUST be scoped at the IAM layer so each account can only read its own prefix — bucket-wide grants are non-compliant even with per-account prefixes. Seller MUST revoke access when the account's status transitions to inactive, suspended, or closed. See security considerations for offline delivery in docs/media-buy/media-buys/optimization-reporting. Only present when the seller supports offline delivery (reporting_delivery_methods includes 'offline' in capabilities).
 *
 * This is an auto-implemented class implemented by the php-json-schema-model-generator.
 * If you need to implement something in this class use inheritance. Else you will lose your changes if the classes
 * are re-generated.
 */

#[JsonPointer('/properties/media_buys/items/properties/account/properties/reporting_bucket')]

class GetMediaBuysResponse_Reporting_Bucket637c6849430a3f89084a3d42202a1d68 implements JSONModelInterface, JsonSerializable, SerializationInterface
{
    use SerializableTrait;

    
        
            #[JsonPointer('/properties/media_buys/items/properties/account/properties/reporting_bucket/properties/protocol')]
        
            #[SchemaName('protocol')]
        
            #[Required]
        
        /** @var CloudStorageProtocol Cloud storage protocol */
        protected $protocol;
    
        
            #[JsonPointer('/properties/media_buys/items/properties/account/properties/reporting_bucket/properties/bucket')]
        
            #[SchemaName('bucket')]
        
            #[Required]
        
        /** @var string Bucket or container name */
        protected $bucket;
    
        
            #[JsonPointer('/properties/media_buys/items/properties/account/properties/reporting_bucket/properties/prefix')]
        
            #[SchemaName('prefix')]
        
        /** @var string|null Path prefix within the bucket. Seller appends date-based partitioning beneath this prefix. */
        protected $prefix;
    
        
            #[JsonPointer('/properties/media_buys/items/properties/account/properties/reporting_bucket/properties/region')]
        
            #[SchemaName('region')]
        
        /** @var string|null Cloud region for the bucket */
        protected $region;
    
        
            #[JsonPointer('/properties/media_buys/items/properties/account/properties/reporting_bucket/properties/format')]
        
            #[SchemaName('format')]
        
        /** @var GetMediaBuysResponse_Reporting_Bucket637c6849430a3f89084a3d42202a1d68Format|null File format for delivered files. Parquet, Avro, and ORC use internal compression (the top-level compression field is ignored for these formats). */
        protected $format = GetMediaBuysResponse_Reporting_Bucket637c6849430a3f89084a3d42202a1d68Format::Jsonl;
    
        
            #[JsonPointer('/properties/media_buys/items/properties/account/properties/reporting_bucket/properties/compression')]
        
            #[SchemaName('compression')]
        
        /** @var GetMediaBuysResponse_Reporting_Bucket637c6849430a3f89084a3d42202a1d68Compression|null Compression applied to delivered files */
        protected $compression = GetMediaBuysResponse_Reporting_Bucket637c6849430a3f89084a3d42202a1d68Compression::Gzip;
    
        
            #[JsonPointer('/properties/media_buys/items/properties/account/properties/reporting_bucket/properties/file_retention_days')]
        
            #[SchemaName('file_retention_days')]
        
            #[Required]
        
        /** @var int How long reporting files are retained in the bucket before deletion. Buyers must read files within this window. Minimum recommended: 14 days. */
        protected $fileRetentionDays;
    
        
            #[JsonPointer('/properties/media_buys/items/properties/account/properties/reporting_bucket/properties/setup_instructions')]
        
            #[SchemaName('setup_instructions')]
        
        /** @var string|null URL to documentation for configuring buyer read access to this bucket (IAM role, service account, etc.). Operator-facing documentation — buyer agents MUST NOT auto-fetch this URL; surface it to a human operator. If an implementation fetches it (for preview), apply webhook URL SSRF validation and do not pass the fetched content into an LLM context without indirect-prompt-injection guarding. See docs/media-buy/media-buys/optimization-reporting#security-considerations-for-offline-delivery. */
        protected $setupInstructions;
    
        
            #[Internal]
        
        /** @var array Values which might be skipped for serialization if not provided */
        private $_skipNotProvidedPropertiesMap = array (
  2 => 'prefix',
  3 => 'region',
  7 => 'setup_instructions',
);
    
    #[Internal]
    /** @var array */
    protected $_rawModelDataInput = [];

    
        #[Internal]
        /** @var ErrorRegistryException Collect all validation errors */
        protected $_errorRegistry;
    

    /**
     * GetMediaBuysResponse_Reporting_Bucket637c6849430a3f89084a3d42202a1d68 constructor.
     *
     * @param array $rawModelDataInput
     *
     * @throws ErrorRegistryException
     */
    public function __construct(array $rawModelDataInput = [])
    {
        
            $this->_errorRegistry = new ErrorRegistryException();
        

        

        
            $this->executeBaseValidators($rawModelDataInput);
        

        
            
                $this->processProtocol($rawModelDataInput);
            
        
            
                $this->processBucket($rawModelDataInput);
            
        
            
                $this->processPrefix($rawModelDataInput);
            
        
            
                $this->processRegion($rawModelDataInput);
            
        
            
                $this->processFormat($rawModelDataInput);
            
        
            
                $this->processCompression($rawModelDataInput);
            
        
            
                $this->processFileRetentionDays($rawModelDataInput);
            
        
            
                $this->processSetupInstructions($rawModelDataInput);
            
        
            
        

        
            if (count($this->_errorRegistry->getErrors())) {
                throw $this->_errorRegistry;
            }
        

        $this->_rawModelDataInput = $rawModelDataInput;

        
    }

    
        protected function executeBaseValidators(array &$modelData): void
        {
            $value = &$modelData;

            
                

if ($additionalProperties =  (static function () use ($modelData): array {
    $additionalProperties = array_diff(array_keys($modelData), array (
   'protocol',
   'bucket',
   'prefix',
   'region',
   'format',
   'compression',
   'file_retention_days',
   'setup_instructions',
));

    

    return $additionalProperties;
})()) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Object\AdditionalPropertiesException($value ?? null, ...array (
  0 => 'GetMediaBuysResponse_Reporting_Bucket637c6849430a3f89084a3d42202a1d68',
  1 => $additionalProperties,
)));
}

            

            
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
                 * Get the value of protocol.
                 *
                 * Cloud storage protocol
                 *
                 * @return CloudStorageProtocol
                 */
                public function getProtocol(): CloudStorageProtocol
                {
                    

                    return $this->protocol;
                }
            

            
                /**
                 * Set the value of protocol.
                 *
                 * @param string|CloudStorageProtocol $protocol Cloud storage protocol
                 *
                 * @throws ErrorRegistryException
                 *
                 * @return static
                 */
                public function setProtocol(
                    string | CloudStorageProtocol $protocol
                ): static {
                    if ($this->protocol === $protocol) {
                        return $this;
                    }

                    $value = $modelData['protocol'] = $protocol;

                    
                        $this->_errorRegistry = new ErrorRegistryException();
                    

                    

                    $value = $this->validateProtocol($value, $modelData);

                    
                        if ($this->_errorRegistry->getErrors()) {
                            throw $this->_errorRegistry;
                        }
                    

                    $this->protocol = $value;
                    $this->_rawModelDataInput['protocol'] = $protocol;

                    

                    return $this;
                }
            

            /**
             * Extract the value, perform validations and set the property protocol
             *
             * @param array $modelData
             *
             * @throws ErrorRegistryException
             */
            protected function processProtocol(array $modelData): void
            {
                

                $value = array_key_exists('protocol', $modelData) ? $modelData['protocol'] : $this->protocol;

                

                $this->protocol = $this->validateProtocol($value, $modelData);
            }

            /**
             * Execute all validators for the property protocol
             */
            protected function validateProtocol($value, array $modelData)
            {
                
                    

if ($value instanceof UnitEnum && !($value instanceof CloudStorageProtocol)) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Generic\InvalidTypeException($value ?? null, ...array (
  0 => 'protocol',
  1 => 'CloudStorageProtocol',
)));
}

                
                    

if (!array_key_exists('protocol', $modelData)) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Object\RequiredValueException($value ?? null, ...array (
  0 => 'protocol',
)));
}

                
                    

if ((!is_string($value) && !$value instanceof UnitEnum) ) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Generic\InvalidTypeException($value ?? null, ...array (
  0 => 'protocol',
  1 => 'string',
)));
}

                
                    

if (!($value instanceof UnitEnum) && !in_array($value, array (
   's3',
   'gcs',
   'azure_blob',
), true)) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Generic\EnumException($value ?? null, ...array (
  0 => 'protocol',
  1 => 
  array (
    0 => 's3',
    1 => 'gcs',
    2 => 'azure_blob',
  ),
)));
}

                
                    
$transformationFailed = false;
if (!($value instanceof UnitEnum) && 
(
    
    (function (&$value) use (&$transformationFailed): bool {
        // make sure exceptions from the filter are caught and added to the error handling
        try {
            $value = \PHPModelGenerator\Filter\Enum::filter($value, array (
  'fqcn' => 'AdCP\\MediaBuy\\Enums\\CloudStorageProtocol',
));
        } catch (\Throwable $filterException) {
            
                $transformationFailed = true;
            

            $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Filter\InvalidFilterValueException($value ?? null, ...array (
  0 => 'protocol',
  1 => 'php_model_generator_enum',
  2 => $filterException,
)));
        }

        return false;
    })($value)
)) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Filter\IncompatibleFilterException($value ?? null, ...array (
  0 => 'protocol',
  1 => 'php_model_generator_enum',
)));
}

                

                return $value;
            }
        
    
        
            
                /**
                 * Get the value of bucket.
                 *
                 * Bucket or container name
                 *
                 * @return string
                 */
                public function getBucket(): string
                {
                    

                    return $this->bucket;
                }
            

            
                /**
                 * Set the value of bucket.
                 *
                 * @param string $bucket Bucket or container name
                 *
                 * @throws ErrorRegistryException
                 *
                 * @return static
                 */
                public function setBucket(
                    string $bucket
                ): static {
                    if ($this->bucket === $bucket) {
                        return $this;
                    }

                    $value = $modelData['bucket'] = $bucket;

                    
                        $this->_errorRegistry = new ErrorRegistryException();
                    

                    

                    $value = $this->validateBucket($value, $modelData);

                    
                        if ($this->_errorRegistry->getErrors()) {
                            throw $this->_errorRegistry;
                        }
                    

                    $this->bucket = $value;
                    $this->_rawModelDataInput['bucket'] = $bucket;

                    

                    return $this;
                }
            

            /**
             * Extract the value, perform validations and set the property bucket
             *
             * @param array $modelData
             *
             * @throws ErrorRegistryException
             */
            protected function processBucket(array $modelData): void
            {
                

                $value = array_key_exists('bucket', $modelData) ? $modelData['bucket'] : $this->bucket;

                

                $this->bucket = $this->validateBucket($value, $modelData);
            }

            /**
             * Execute all validators for the property bucket
             */
            protected function validateBucket($value, array $modelData)
            {
                
                    

if (!array_key_exists('bucket', $modelData)) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Object\RequiredValueException($value ?? null, ...array (
  0 => 'bucket',
)));
}

                
                    

if ((!is_string($value) && !$value instanceof UnitEnum) ) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Generic\InvalidTypeException($value ?? null, ...array (
  0 => 'bucket',
  1 => 'string',
)));
}

                
                    

if (is_string($value) && !preg_match(base64_decode('L15bYS16MC05XVthLXowLTkuLV17MSw2MX1bYS16MC05XSQv'), $value)) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\String\PatternException($value ?? null, ...array (
  0 => 'bucket',
  1 => '^[a-z0-9][a-z0-9.-]{1,61}[a-z0-9]$',
)));
}

                
                    

if (is_string($value) && mb_strlen($value) < 3) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\String\MinLengthException($value ?? null, ...array (
  0 => 'bucket',
  1 => 3,
)));
}

                
                    

if (is_string($value) && mb_strlen($value) > 63) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\String\MaxLengthException($value ?? null, ...array (
  0 => 'bucket',
  1 => 63,
)));
}

                

                return $value;
            }
        
    
        
            
                /**
                 * Get the value of prefix.
                 *
                 * Path prefix within the bucket. Seller appends date-based partitioning beneath this prefix.
                 * @example accounts/pinnacle/adcp
                 * @example reporting/2024
                 *
                 * @return string|null
                 */
                public function getPrefix(): ?string
                {
                    

                    return $this->prefix;
                }
            

            
                /**
                 * Set the value of prefix.
                 *
                 * @param string $prefix Path prefix within the bucket. Seller appends date-based partitioning beneath this prefix.
                 *
                 * @throws ErrorRegistryException
                 *
                 * @return static
                 */
                public function setPrefix(
                    string $prefix
                ): static {
                    if ($this->prefix === $prefix) {
                        return $this;
                    }

                    $value = $modelData['prefix'] = $prefix;

                    
                        $this->_errorRegistry = new ErrorRegistryException();
                    

                    

                    $value = $this->validatePrefix($value, $modelData);

                    
                        if ($this->_errorRegistry->getErrors()) {
                            throw $this->_errorRegistry;
                        }
                    

                    $this->prefix = $value;
                    $this->_rawModelDataInput['prefix'] = $prefix;

                    

                    return $this;
                }
            

            /**
             * Extract the value, perform validations and set the property prefix
             *
             * @param array $modelData
             *
             * @throws ErrorRegistryException
             */
            protected function processPrefix(array $modelData): void
            {
                
                    if (!array_key_exists('prefix', $modelData) && $this->prefix === null) {
                        return;
                    }
                

                $value = array_key_exists('prefix', $modelData) ? $modelData['prefix'] : $this->prefix;

                

                $this->prefix = $this->validatePrefix($value, $modelData);
            }

            /**
             * Execute all validators for the property prefix
             */
            protected function validatePrefix($value, array $modelData)
            {
                
                    

if ((!is_string($value) && !$value instanceof UnitEnum) ) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Generic\InvalidTypeException($value ?? null, ...array (
  0 => 'prefix',
  1 => 'string',
)));
}

                
                    

if (is_string($value) && !preg_match(base64_decode('L15bYS16QS1aMC05XC9fLi1dKyQv'), $value)) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\String\PatternException($value ?? null, ...array (
  0 => 'prefix',
  1 => '^[a-zA-Z0-9/_.-]+$',
)));
}

                
                    

if (is_string($value) && mb_strlen($value) > 512) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\String\MaxLengthException($value ?? null, ...array (
  0 => 'prefix',
  1 => 512,
)));
}

                

                return $value;
            }
        
    
        
            
                /**
                 * Get the value of region.
                 *
                 * Cloud region for the bucket
                 * @example us-east-1
                 * @example europe-west1
                 *
                 * @return string|null
                 */
                public function getRegion(): ?string
                {
                    

                    return $this->region;
                }
            

            
                /**
                 * Set the value of region.
                 *
                 * @param string $region Cloud region for the bucket
                 *
                 * @throws ErrorRegistryException
                 *
                 * @return static
                 */
                public function setRegion(
                    string $region
                ): static {
                    if ($this->region === $region) {
                        return $this;
                    }

                    $value = $modelData['region'] = $region;

                    
                        $this->_errorRegistry = new ErrorRegistryException();
                    

                    

                    $value = $this->validateRegion($value, $modelData);

                    
                        if ($this->_errorRegistry->getErrors()) {
                            throw $this->_errorRegistry;
                        }
                    

                    $this->region = $value;
                    $this->_rawModelDataInput['region'] = $region;

                    

                    return $this;
                }
            

            /**
             * Extract the value, perform validations and set the property region
             *
             * @param array $modelData
             *
             * @throws ErrorRegistryException
             */
            protected function processRegion(array $modelData): void
            {
                
                    if (!array_key_exists('region', $modelData) && $this->region === null) {
                        return;
                    }
                

                $value = array_key_exists('region', $modelData) ? $modelData['region'] : $this->region;

                

                $this->region = $this->validateRegion($value, $modelData);
            }

            /**
             * Execute all validators for the property region
             */
            protected function validateRegion($value, array $modelData)
            {
                
                    

if ((!is_string($value) && !$value instanceof UnitEnum) ) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Generic\InvalidTypeException($value ?? null, ...array (
  0 => 'region',
  1 => 'string',
)));
}

                
                    

if (is_string($value) && !preg_match(base64_decode('L15bYS16MC05LV0rJC8='), $value)) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\String\PatternException($value ?? null, ...array (
  0 => 'region',
  1 => '^[a-z0-9-]+$',
)));
}

                
                    

if (is_string($value) && mb_strlen($value) > 64) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\String\MaxLengthException($value ?? null, ...array (
  0 => 'region',
  1 => 64,
)));
}

                

                return $value;
            }
        
    
        
            
                /**
                 * Get the value of format.
                 *
                 * File format for delivered files. Parquet, Avro, and ORC use internal compression (the top-level compression field is ignored for these formats).
                 *
                 * @return GetMediaBuysResponse_Reporting_Bucket637c6849430a3f89084a3d42202a1d68Format|null
                 */
                public function getFormat(): ?GetMediaBuysResponse_Reporting_Bucket637c6849430a3f89084a3d42202a1d68Format
                {
                    

                    return $this->format;
                }
            

            
                /**
                 * Set the value of format.
                 *
                 * @param string|GetMediaBuysResponse_Reporting_Bucket637c6849430a3f89084a3d42202a1d68Format|null $format File format for delivered files. Parquet, Avro, and ORC use internal compression (the top-level compression field is ignored for these formats).
                 *
                 * @throws ErrorRegistryException
                 *
                 * @return static
                 */
                public function setFormat(
                    string | GetMediaBuysResponse_Reporting_Bucket637c6849430a3f89084a3d42202a1d68Format | null $format
                ): static {
                    if ($this->format === $format) {
                        return $this;
                    }

                    $value = $modelData['format'] = $format;

                    
                        $this->_errorRegistry = new ErrorRegistryException();
                    

                    

                    $value = $this->validateFormat($value, $modelData);

                    
                        if ($this->_errorRegistry->getErrors()) {
                            throw $this->_errorRegistry;
                        }
                    

                    $this->format = $value;
                    $this->_rawModelDataInput['format'] = $format;

                    

                    return $this;
                }
            

            /**
             * Extract the value, perform validations and set the property format
             *
             * @param array $modelData
             *
             * @throws ErrorRegistryException
             */
            protected function processFormat(array $modelData): void
            {
                
                    if (!array_key_exists('format', $modelData) && $this->format === null) {
                        return;
                    }
                

                $value = array_key_exists('format', $modelData) ? $modelData['format'] : $this->format;

                

                $this->format = $this->validateFormat($value, $modelData);
            }

            /**
             * Execute all validators for the property format
             */
            protected function validateFormat($value, array $modelData)
            {
                
                    

if ($value instanceof UnitEnum && !($value instanceof GetMediaBuysResponse_Reporting_Bucket637c6849430a3f89084a3d42202a1d68Format)) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Generic\InvalidTypeException($value ?? null, ...array (
  0 => 'format',
  1 => 'GetMediaBuysResponse_Reporting_Bucket637c6849430a3f89084a3d42202a1d68Format',
)));
}

                
                    

if ((!is_string($value) && !$value instanceof UnitEnum) ) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Generic\InvalidTypeException($value ?? null, ...array (
  0 => 'format',
  1 => 'string',
)));
}

                
                    

if (!($value instanceof UnitEnum) && !in_array($value, array (
   'jsonl',
   'csv',
   'parquet',
   'avro',
   'orc',
), true)) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Generic\EnumException($value ?? null, ...array (
  0 => 'format',
  1 => 
  array (
    0 => 'jsonl',
    1 => 'csv',
    2 => 'parquet',
    3 => 'avro',
    4 => 'orc',
  ),
)));
}

                
                    
$transformationFailed = false;
if (!($value instanceof UnitEnum) && 
(
    
    (function (&$value) use (&$transformationFailed): bool {
        // make sure exceptions from the filter are caught and added to the error handling
        try {
            $value = \PHPModelGenerator\Filter\Enum::filter($value, array (
  'fqcn' => 'AdCP\\MediaBuy\\Enums\\GetMediaBuysResponse_Reporting_Bucket637c6849430a3f89084a3d42202a1d68Format',
));
        } catch (\Throwable $filterException) {
            
                $transformationFailed = true;
            

            $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Filter\InvalidFilterValueException($value ?? null, ...array (
  0 => 'format',
  1 => 'php_model_generator_enum',
  2 => $filterException,
)));
        }

        return false;
    })($value)
)) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Filter\IncompatibleFilterException($value ?? null, ...array (
  0 => 'format',
  1 => 'php_model_generator_enum',
)));
}

                

                return $value;
            }
        
    
        
            
                /**
                 * Get the value of compression.
                 *
                 * Compression applied to delivered files
                 *
                 * @return GetMediaBuysResponse_Reporting_Bucket637c6849430a3f89084a3d42202a1d68Compression|null
                 */
                public function getCompression(): ?GetMediaBuysResponse_Reporting_Bucket637c6849430a3f89084a3d42202a1d68Compression
                {
                    

                    return $this->compression;
                }
            

            
                /**
                 * Set the value of compression.
                 *
                 * @param string|GetMediaBuysResponse_Reporting_Bucket637c6849430a3f89084a3d42202a1d68Compression|null $compression Compression applied to delivered files
                 *
                 * @throws ErrorRegistryException
                 *
                 * @return static
                 */
                public function setCompression(
                    string | GetMediaBuysResponse_Reporting_Bucket637c6849430a3f89084a3d42202a1d68Compression | null $compression
                ): static {
                    if ($this->compression === $compression) {
                        return $this;
                    }

                    $value = $modelData['compression'] = $compression;

                    
                        $this->_errorRegistry = new ErrorRegistryException();
                    

                    

                    $value = $this->validateCompression($value, $modelData);

                    
                        if ($this->_errorRegistry->getErrors()) {
                            throw $this->_errorRegistry;
                        }
                    

                    $this->compression = $value;
                    $this->_rawModelDataInput['compression'] = $compression;

                    

                    return $this;
                }
            

            /**
             * Extract the value, perform validations and set the property compression
             *
             * @param array $modelData
             *
             * @throws ErrorRegistryException
             */
            protected function processCompression(array $modelData): void
            {
                
                    if (!array_key_exists('compression', $modelData) && $this->compression === null) {
                        return;
                    }
                

                $value = array_key_exists('compression', $modelData) ? $modelData['compression'] : $this->compression;

                

                $this->compression = $this->validateCompression($value, $modelData);
            }

            /**
             * Execute all validators for the property compression
             */
            protected function validateCompression($value, array $modelData)
            {
                
                    

if ($value instanceof UnitEnum && !($value instanceof GetMediaBuysResponse_Reporting_Bucket637c6849430a3f89084a3d42202a1d68Compression)) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Generic\InvalidTypeException($value ?? null, ...array (
  0 => 'compression',
  1 => 'GetMediaBuysResponse_Reporting_Bucket637c6849430a3f89084a3d42202a1d68Compression',
)));
}

                
                    

if ((!is_string($value) && !$value instanceof UnitEnum) ) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Generic\InvalidTypeException($value ?? null, ...array (
  0 => 'compression',
  1 => 'string',
)));
}

                
                    

if (!($value instanceof UnitEnum) && !in_array($value, array (
   'gzip',
   'none',
), true)) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Generic\EnumException($value ?? null, ...array (
  0 => 'compression',
  1 => 
  array (
    0 => 'gzip',
    1 => 'none',
  ),
)));
}

                
                    
$transformationFailed = false;
if (!($value instanceof UnitEnum) && 
(
    
    (function (&$value) use (&$transformationFailed): bool {
        // make sure exceptions from the filter are caught and added to the error handling
        try {
            $value = \PHPModelGenerator\Filter\Enum::filter($value, array (
  'fqcn' => 'AdCP\\MediaBuy\\Enums\\GetMediaBuysResponse_Reporting_Bucket637c6849430a3f89084a3d42202a1d68Compression',
));
        } catch (\Throwable $filterException) {
            
                $transformationFailed = true;
            

            $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Filter\InvalidFilterValueException($value ?? null, ...array (
  0 => 'compression',
  1 => 'php_model_generator_enum',
  2 => $filterException,
)));
        }

        return false;
    })($value)
)) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Filter\IncompatibleFilterException($value ?? null, ...array (
  0 => 'compression',
  1 => 'php_model_generator_enum',
)));
}

                

                return $value;
            }
        
    
        
            
                /**
                 * Get the value of file_retention_days.
                 *
                 * How long reporting files are retained in the bucket before deletion. Buyers must read files within this window. Minimum recommended: 14 days.
                 * @example 14
                 * @example 30
                 * @example 90
                 *
                 * @return int
                 */
                public function getFileRetentionDays(): int
                {
                    

                    return $this->fileRetentionDays;
                }
            

            
                /**
                 * Set the value of file_retention_days.
                 *
                 * @param int $fileRetentionDays How long reporting files are retained in the bucket before deletion. Buyers must read files within this window. Minimum recommended: 14 days.
                 *
                 * @throws ErrorRegistryException
                 *
                 * @return static
                 */
                public function setFileRetentionDays(
                    int $fileRetentionDays
                ): static {
                    if ($this->fileRetentionDays === $fileRetentionDays) {
                        return $this;
                    }

                    $value = $modelData['file_retention_days'] = $fileRetentionDays;

                    
                        $this->_errorRegistry = new ErrorRegistryException();
                    

                    

                    $value = $this->validateFileRetentionDays($value, $modelData);

                    
                        if ($this->_errorRegistry->getErrors()) {
                            throw $this->_errorRegistry;
                        }
                    

                    $this->fileRetentionDays = $value;
                    $this->_rawModelDataInput['file_retention_days'] = $fileRetentionDays;

                    

                    return $this;
                }
            

            /**
             * Extract the value, perform validations and set the property fileRetentionDays
             *
             * @param array $modelData
             *
             * @throws ErrorRegistryException
             */
            protected function processFileRetentionDays(array $modelData): void
            {
                

                $value = array_key_exists('file_retention_days', $modelData) ? $modelData['file_retention_days'] : $this->fileRetentionDays;

                

                $this->fileRetentionDays = $this->validateFileRetentionDays($value, $modelData);
            }

            /**
             * Execute all validators for the property fileRetentionDays
             */
            protected function validateFileRetentionDays($value, array $modelData)
            {
                
                    

if (!array_key_exists('file_retention_days', $modelData)) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Object\RequiredValueException($value ?? null, ...array (
  0 => 'file_retention_days',
)));
}

                
                    

if ((!is_int($value) && !$value instanceof UnitEnum) ) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Generic\InvalidTypeException($value ?? null, ...array (
  0 => 'file_retention_days',
  1 => 'int',
)));
}

                
                    

if (is_int($value) && $value < 1) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Number\MinimumException($value ?? null, ...array (
  0 => 'file_retention_days',
  1 => 1,
)));
}

                

                return $value;
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
                    

                    return $this->setupInstructions;
                }
            

            
                /**
                 * Set the value of setup_instructions.
                 *
                 * @param string $setupInstructions URL to documentation for configuring buyer read access to this bucket (IAM role, service account, etc.). Operator-facing documentation — buyer agents MUST NOT auto-fetch this URL; surface it to a human operator. If an implementation fetches it (for preview), apply webhook URL SSRF validation and do not pass the fetched content into an LLM context without indirect-prompt-injection guarding. See docs/media-buy/media-buys/optimization-reporting#security-considerations-for-offline-delivery.
                 *
                 * @throws ErrorRegistryException
                 *
                 * @return static
                 */
                public function setSetupInstructions(
                    string $setupInstructions
                ): static {
                    if ($this->setupInstructions === $setupInstructions) {
                        return $this;
                    }

                    $value = $modelData['setup_instructions'] = $setupInstructions;

                    
                        $this->_errorRegistry = new ErrorRegistryException();
                    

                    

                    $value = $this->validateSetupInstructions($value, $modelData);

                    
                        if ($this->_errorRegistry->getErrors()) {
                            throw $this->_errorRegistry;
                        }
                    

                    $this->setupInstructions = $value;
                    $this->_rawModelDataInput['setup_instructions'] = $setupInstructions;

                    

                    return $this;
                }
            

            /**
             * Extract the value, perform validations and set the property setupInstructions
             *
             * @param array $modelData
             *
             * @throws ErrorRegistryException
             */
            protected function processSetupInstructions(array $modelData): void
            {
                
                    if (!array_key_exists('setup_instructions', $modelData) && $this->setupInstructions === null) {
                        return;
                    }
                

                $value = array_key_exists('setup_instructions', $modelData) ? $modelData['setup_instructions'] : $this->setupInstructions;

                

                $this->setupInstructions = $this->validateSetupInstructions($value, $modelData);
            }

            /**
             * Execute all validators for the property setupInstructions
             */
            protected function validateSetupInstructions($value, array $modelData)
            {
                
                    

if ((!is_string($value) && !$value instanceof UnitEnum) ) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Generic\InvalidTypeException($value ?? null, ...array (
  0 => 'setup_instructions',
  1 => 'string',
)));
}

                
                    

if (is_string($value) && !preg_match(base64_decode('L15odHRwczpcL1wvLw=='), $value)) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\String\PatternException($value ?? null, ...array (
  0 => 'setup_instructions',
  1 => '^https://',
)));
}

                
                    

if (!\PHPModelGenerator\Format\UriFormatValidator::validate($value)) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\String\FormatException($value ?? null, ...array (
  0 => 'setup_instructions',
  1 => 'uri',
)));
}

                

                return $value;
            }
        
    
        
    

    /**
 * Update the model with the provided data. If the update fails due to any violations an exception will be thrown and
 * no properties of the model will be updated.
 *
 * @param array $modelData May contain any subset of the models properties
 *
 * @return self
 *
 * @throws ErrorRegistryException
 */
public function populate(array $modelData): self
{
    $rollbackValues = [];

    
        $this->_errorRegistry = new ErrorRegistryException();
    

    foreach (['_additionalProperties', '_patternProperties'] as $property) {
        if (isset($this->{$property})) {
            $rollbackValues[$property] = $this->{$property};
        }
    }

    
        $this->executeBaseValidators($modelData);
    

    
        
            if (array_key_exists('protocol', $modelData) &&
                $modelData['protocol'] !== $this->protocol
            ) {
                

                $rollbackValues['protocol'] = $this->protocol;
                $this->processProtocol($modelData);
            }
        
    
        
            if (array_key_exists('bucket', $modelData) &&
                $modelData['bucket'] !== $this->bucket
            ) {
                

                $rollbackValues['bucket'] = $this->bucket;
                $this->processBucket($modelData);
            }
        
    
        
            if (array_key_exists('prefix', $modelData) &&
                $modelData['prefix'] !== $this->prefix
            ) {
                

                $rollbackValues['prefix'] = $this->prefix;
                $this->processPrefix($modelData);
            }
        
    
        
            if (array_key_exists('region', $modelData) &&
                $modelData['region'] !== $this->region
            ) {
                

                $rollbackValues['region'] = $this->region;
                $this->processRegion($modelData);
            }
        
    
        
            if (array_key_exists('format', $modelData) &&
                $modelData['format'] !== $this->format
            ) {
                

                $rollbackValues['format'] = $this->format;
                $this->processFormat($modelData);
            }
        
    
        
            if (array_key_exists('compression', $modelData) &&
                $modelData['compression'] !== $this->compression
            ) {
                

                $rollbackValues['compression'] = $this->compression;
                $this->processCompression($modelData);
            }
        
    
        
            if (array_key_exists('file_retention_days', $modelData) &&
                $modelData['file_retention_days'] !== $this->fileRetentionDays
            ) {
                

                $rollbackValues['fileRetentionDays'] = $this->fileRetentionDays;
                $this->processFileRetentionDays($modelData);
            }
        
    
        
            if (array_key_exists('setup_instructions', $modelData) &&
                $modelData['setup_instructions'] !== $this->setupInstructions
            ) {
                

                $rollbackValues['setupInstructions'] = $this->setupInstructions;
                $this->processSetupInstructions($modelData);
            }
        
    
        
    

    
        if (count($this->_errorRegistry->getErrors())) {
            foreach ($rollbackValues as $property => $value) {
                $this->{$property} = $value;
            }

            throw $this->_errorRegistry;
        }
    

    $this->_rawModelDataInput = array_merge($this->_rawModelDataInput, $modelData);

    
        
    
        
    
        
    
        
    
        
    
        
    
        
    
        
    
        
    

    return $this;
}


/**
 * serialize the property protocol
 */
protected function serializeProtocol()
{
    return \PHPModelGenerator\Filter\Enum::serialize($this->protocol, array (
  'fqcn' => 'AdCP\\MediaBuy\\Enums\\CloudStorageProtocol',
));
}


/**
 * serialize the property format
 */
protected function serializeFormat()
{
    return \PHPModelGenerator\Filter\Enum::serialize($this->format, array (
  'fqcn' => 'AdCP\\MediaBuy\\Enums\\GetMediaBuysResponse_Reporting_Bucket637c6849430a3f89084a3d42202a1d68Format',
));
}


/**
 * serialize the property compression
 */
protected function serializeCompression()
{
    return \PHPModelGenerator\Filter\Enum::serialize($this->compression, array (
  'fqcn' => 'AdCP\\MediaBuy\\Enums\\GetMediaBuysResponse_Reporting_Bucket637c6849430a3f89084a3d42202a1d68Compression',
));
}





}

// @codeCoverageIgnoreEnd
