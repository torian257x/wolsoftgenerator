<?php

// @codingStandardsIgnoreFile
// @codeCoverageIgnoreStart

declare(strict_types = 1);


    namespace AdCP\MediaBuy;



    use PHPModelGenerator\Interfaces\JSONModelInterface;

    use UnitEnum;

    use AdCP\MediaBuy\Enums\PerformanceStandardMetric;

    use AdCP\MediaBuy\Enums\ViewabilityStandard;

    use PHPModelGenerator\Traits\SerializableTrait;

    use JsonSerializable;

    use PHPModelGenerator\Interfaces\SerializationInterface;

    use AdCP\MediaBuy\Enums\GetProductsRequest_GetProductsRequest_ItemOfArrayRefineb01dc616de18c8735fba8f8095f15001d5b392d89eb0397d01ef36b451045a72Action;

    use AdCP\MediaBuy\Enums\GetProductsRequest_GetProductsRequest_ItemOfArrayRefineb01dc616de18c8735fba8f8095f15001966d960c0a8231c9cf148f923aed05adAction;

    use AdCP\MediaBuy\Enums\DigitalSourceType;

    use AdCP\MediaBuy\Enums\GetProductsRequest_ProvenanceHuman_Oversight;

    use AdCP\MediaBuy\Enums\GetProductsRequest_Declared_By13c986791ce55365e13a7cd5ff90f7dcRole;

    use AdCP\MediaBuy\Enums\EmbeddedProvenanceMethod;

    use AdCP\MediaBuy\Enums\WatermarkMediaType;

    use AdCP\MediaBuy\Enums\C2PAWatermarkAction;

    use AdCP\MediaBuy\Enums\DisclosurePersistence;

    use AdCP\MediaBuy\Enums\DisclosurePosition;

    use AdCP\MediaBuy\Enums\GetProductsRequest_ItemOfArrayVerificationab0379bc9ff851960f9f645c9916029eResult;

    use AdCP\MediaBuy\Enums\CatalogType;

    use AdCP\MediaBuy\Enums\FeedFormat;

    use AdCP\MediaBuy\Enums\UpdateFrequency;

    use AdCP\MediaBuy\Enums\ContentIDType;

    use AdCP\MediaBuy\Enums\EventType;

    use AdCP\MediaBuy\Enums\GetProductsRequest_CatalogFieldMappingTransform;

    use AdCP\MediaBuy\Enums\MetroAreaSystem;

    use AdCP\MediaBuy\Enums\TMPResponseType;

    use AdCP\MediaBuy\Enums\GeographicTargetingLevel;

    use AdCP\MediaBuy\Enums\PostalCodeSystem;

    use AdCP\MediaBuy\Enums\TransportMode;

    use AdCP\MediaBuy\Enums\TravelTimeUnit;

    use AdCP\MediaBuy\Enums\DistanceUnit;

    use AdCP\MediaBuy\Enums\GetProductsRequest_Geometry89c19613b4b641142039d1a7df56f98aType;

    use PHPModelGenerator\Attributes\JsonPointer;

    use PHPModelGenerator\Attributes\SchemaName;

    use PHPModelGenerator\Attributes\Required;

    use PHPModelGenerator\Attributes\Internal;

    use PHPModelGenerator\Exception\ErrorRegistryException;


/**
 * Class GetProductsRequest_PerformanceStandard
 * @package AdCP\MediaBuy 
 *
 * A rate threshold for a performance metric, measured by a specified vendor. The threshold is a floor or ceiling depending on the metric: viewability, completion_rate, brand_safety, and attention_score are floors (must exceed); ivt is a ceiling (must not exceed).
 *
 * This is an auto-implemented class implemented by the php-json-schema-model-generator.
 * If you need to implement something in this class use inheritance. Else you will lose your changes if the classes
 * are re-generated.
 */

#[JsonPointer('/properties/filters/properties/required_performance_standards/items')]

class GetProductsRequest_PerformanceStandard implements JSONModelInterface, JsonSerializable, SerializationInterface
{
    use SerializableTrait;

    
        
            #[JsonPointer('/properties/filters/properties/required_performance_standards/items/properties/metric')]
        
            #[SchemaName('metric')]
        
            #[Required]
        
        /** @var PerformanceStandardMetric The performance metric this standard applies to. */
        protected $metric;
    
        
            #[JsonPointer('/properties/filters/properties/required_performance_standards/items/properties/threshold')]
        
            #[SchemaName('threshold')]
        
            #[Required]
        
        /** @var float Rate threshold as a decimal (e.g., 0.70 for 70%). Whether this is a floor or ceiling depends on the metric: for viewability, completion_rate, brand_safety, attention_score the actual rate must be >= threshold; for ivt the actual rate must be <= threshold. */
        protected $threshold;
    
        
            #[JsonPointer('/properties/filters/properties/required_performance_standards/items/properties/standard')]
        
            #[SchemaName('standard')]
        
        /** @var ViewabilityStandard|null Measurement standard. Required when metric is 'viewability' (MRC and GroupM define materially different thresholds). Omit for other metrics. */
        protected $standard;
    
        
            #[JsonPointer('/properties/filters/properties/required_performance_standards/items/properties/vendor')]
        
            #[SchemaName('vendor')]
        
            #[Required]
        
        /** @var GetProductsRequest_BrandReference Vendor measuring this metric (e.g., { domain: 'doubleverify.com' }). The vendor's brand.json agents array (type: 'measurement') is the discovery point for their measurement agent. When specified on a confirmed package, creatives MUST include tracker_script or tracker_pixel assets from this vendor. */
        protected $vendor;
    
        
            #[Internal]
        
        /** @var array Collect all additional properties provided to the schema */
        private $_additionalProperties = array (
);
    
        
            #[Internal]
        
        /** @var array Values which might be skipped for serialization if not provided */
        private $_skipNotProvidedPropertiesMap = array (
  2 => 'standard',
);
    
    #[Internal]
    /** @var array */
    protected $_rawModelDataInput = [];

    
        #[Internal]
        /** @var ErrorRegistryException Collect all validation errors */
        protected $_errorRegistry;
    

    /**
     * GetProductsRequest_PerformanceStandard constructor.
     *
     * @param array $rawModelDataInput
     *
     * @throws ErrorRegistryException
     */
    public function __construct(array $rawModelDataInput = [])
    {
        
            $this->_errorRegistry = new ErrorRegistryException();
        

        

        
            $this->executeBaseValidators($rawModelDataInput);
        

        
            
                $this->processMetric($rawModelDataInput);
            
        
            
                $this->processThreshold($rawModelDataInput);
            
        
            
                $this->processStandard($rawModelDataInput);
            
        
            
                $this->processVendor($rawModelDataInput);
            
        
            
        
            
        

        
            if (count($this->_errorRegistry->getErrors())) {
                throw $this->_errorRegistry;
            }
        

        $this->_rawModelDataInput = $rawModelDataInput;

        
    }

    
        protected function executeBaseValidators(array &$modelData): void
        {
            $value = &$modelData;

            
                

if ((function () use ($value) {
    foreach (array_diff(array_keys($value), array (
   'metric',
   'threshold',
   'standard',
   'vendor',
)) as $propertyKey) {
        

        $this->_additionalProperties[$propertyKey] = $value[$propertyKey];
    }

    return false;
})()) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Object\InvalidAdditionalPropertiesException($value ?? null, ...array (
  0 => 'GetProductsRequest_PerformanceStandard',
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
                 * Get the value of metric.
                 *
                 * The performance metric this standard applies to.
                 *
                 * @return PerformanceStandardMetric
                 */
                public function getMetric(): PerformanceStandardMetric
                {
                    

                    return $this->metric;
                }
            

            
                /**
                 * Set the value of metric.
                 *
                 * @param string|PerformanceStandardMetric $metric The performance metric this standard applies to.
                 *
                 * @throws ErrorRegistryException
                 *
                 * @return static
                 */
                public function setMetric(
                    string | PerformanceStandardMetric $metric
                ): static {
                    if ($this->metric === $metric) {
                        return $this;
                    }

                    $value = $modelData['metric'] = $metric;

                    
                        $this->_errorRegistry = new ErrorRegistryException();
                    

                    

                    $value = $this->validateMetric($value, $modelData);

                    
                        if ($this->_errorRegistry->getErrors()) {
                            throw $this->_errorRegistry;
                        }
                    

                    $this->metric = $value;
                    $this->_rawModelDataInput['metric'] = $metric;

                    

                    return $this;
                }
            

            /**
             * Extract the value, perform validations and set the property metric
             *
             * @param array $modelData
             *
             * @throws ErrorRegistryException
             */
            protected function processMetric(array $modelData): void
            {
                

                $value = array_key_exists('metric', $modelData) ? $modelData['metric'] : $this->metric;

                

                $this->metric = $this->validateMetric($value, $modelData);
            }

            /**
             * Execute all validators for the property metric
             */
            protected function validateMetric($value, array $modelData)
            {
                
                    

if ($value instanceof UnitEnum && !($value instanceof PerformanceStandardMetric)) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Generic\InvalidTypeException($value ?? null, ...array (
  0 => 'metric',
  1 => 'PerformanceStandardMetric',
)));
}

                
                    

if (!array_key_exists('metric', $modelData)) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Object\RequiredValueException($value ?? null, ...array (
  0 => 'metric',
)));
}

                
                    

if ((!is_string($value) && !$value instanceof UnitEnum) ) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Generic\InvalidTypeException($value ?? null, ...array (
  0 => 'metric',
  1 => 'string',
)));
}

                
                    

if (!($value instanceof UnitEnum) && !in_array($value, array (
   'viewability',
   'ivt',
   'completion_rate',
   'brand_safety',
   'attention_score',
), true)) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Generic\EnumException($value ?? null, ...array (
  0 => 'metric',
  1 => 
  array (
    0 => 'viewability',
    1 => 'ivt',
    2 => 'completion_rate',
    3 => 'brand_safety',
    4 => 'attention_score',
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
  'fqcn' => 'AdCP\\MediaBuy\\Enums\\PerformanceStandardMetric',
));
        } catch (\Throwable $filterException) {
            
                $transformationFailed = true;
            

            $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Filter\InvalidFilterValueException($value ?? null, ...array (
  0 => 'metric',
  1 => 'php_model_generator_enum',
  2 => $filterException,
)));
        }

        return false;
    })($value)
)) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Filter\IncompatibleFilterException($value ?? null, ...array (
  0 => 'metric',
  1 => 'php_model_generator_enum',
)));
}

                

                return $value;
            }
        
    
        
            
                /**
                 * Get the value of threshold.
                 *
                 * Rate threshold as a decimal (e.g., 0.70 for 70%). Whether this is a floor or ceiling depends on the metric: for viewability, completion_rate, brand_safety, attention_score the actual rate must be >= threshold; for ivt the actual rate must be <= threshold.
                 *
                 * @return float
                 */
                public function getThreshold(): float
                {
                    

                    return $this->threshold;
                }
            

            
                /**
                 * Set the value of threshold.
                 *
                 * @param float $threshold Rate threshold as a decimal (e.g., 0.70 for 70%). Whether this is a floor or ceiling depends on the metric: for viewability, completion_rate, brand_safety, attention_score the actual rate must be >= threshold; for ivt the actual rate must be <= threshold.
                 *
                 * @throws ErrorRegistryException
                 *
                 * @return static
                 */
                public function setThreshold(
                    float $threshold
                ): static {
                    if ($this->threshold === $threshold) {
                        return $this;
                    }

                    $value = $modelData['threshold'] = $threshold;

                    
                        $this->_errorRegistry = new ErrorRegistryException();
                    

                    

                    $value = $this->validateThreshold($value, $modelData);

                    
                        if ($this->_errorRegistry->getErrors()) {
                            throw $this->_errorRegistry;
                        }
                    

                    $this->threshold = $value;
                    $this->_rawModelDataInput['threshold'] = $threshold;

                    

                    return $this;
                }
            

            /**
             * Extract the value, perform validations and set the property threshold
             *
             * @param array $modelData
             *
             * @throws ErrorRegistryException
             */
            protected function processThreshold(array $modelData): void
            {
                

                $value = array_key_exists('threshold', $modelData) ? $modelData['threshold'] : $this->threshold;

                $value = is_int($value) ? (float) $value : $value;

                $this->threshold = $this->validateThreshold($value, $modelData);
            }

            /**
             * Execute all validators for the property threshold
             */
            protected function validateThreshold($value, array $modelData)
            {
                
                    

if (!array_key_exists('threshold', $modelData)) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Object\RequiredValueException($value ?? null, ...array (
  0 => 'threshold',
)));
}

                
                    

if ((!is_float($value) && !$value instanceof UnitEnum) ) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Generic\InvalidTypeException($value ?? null, ...array (
  0 => 'threshold',
  1 => 'float',
)));
}

                
                    

if (is_float($value) && $value < 0) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Number\MinimumException($value ?? null, ...array (
  0 => 'threshold',
  1 => 0,
)));
}

                
                    

if (is_float($value) && $value > 1) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Number\MaximumException($value ?? null, ...array (
  0 => 'threshold',
  1 => 1,
)));
}

                

                return $value;
            }
        
    
        
            
                /**
                 * Get the value of standard.
                 *
                 * Measurement standard. Required when metric is 'viewability' (MRC and GroupM define materially different thresholds). Omit for other metrics.
                 *
                 * @return ViewabilityStandard|null
                 */
                public function getStandard(): ?ViewabilityStandard
                {
                    

                    return $this->standard;
                }
            

            
                /**
                 * Set the value of standard.
                 *
                 * @param string|ViewabilityStandard|null $standard Measurement standard. Required when metric is 'viewability' (MRC and GroupM define materially different thresholds). Omit for other metrics.
                 *
                 * @throws ErrorRegistryException
                 *
                 * @return static
                 */
                public function setStandard(
                    string | ViewabilityStandard | null $standard
                ): static {
                    if ($this->standard === $standard) {
                        return $this;
                    }

                    $value = $modelData['standard'] = $standard;

                    
                        $this->_errorRegistry = new ErrorRegistryException();
                    

                    

                    $value = $this->validateStandard($value, $modelData);

                    
                        if ($this->_errorRegistry->getErrors()) {
                            throw $this->_errorRegistry;
                        }
                    

                    $this->standard = $value;
                    $this->_rawModelDataInput['standard'] = $standard;

                    

                    return $this;
                }
            

            /**
             * Extract the value, perform validations and set the property standard
             *
             * @param array $modelData
             *
             * @throws ErrorRegistryException
             */
            protected function processStandard(array $modelData): void
            {
                
                    if (!array_key_exists('standard', $modelData) && $this->standard === null) {
                        return;
                    }
                

                $value = array_key_exists('standard', $modelData) ? $modelData['standard'] : $this->standard;

                

                $this->standard = $this->validateStandard($value, $modelData);
            }

            /**
             * Execute all validators for the property standard
             */
            protected function validateStandard($value, array $modelData)
            {
                
                    

if ($value instanceof UnitEnum && !($value instanceof ViewabilityStandard)) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Generic\InvalidTypeException($value ?? null, ...array (
  0 => 'standard',
  1 => 'ViewabilityStandard',
)));
}

                
                    

if ((!is_string($value) && !$value instanceof UnitEnum) ) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Generic\InvalidTypeException($value ?? null, ...array (
  0 => 'standard',
  1 => 'string',
)));
}

                
                    

if (!($value instanceof UnitEnum) && !in_array($value, array (
   'mrc',
   'groupm',
), true)) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Generic\EnumException($value ?? null, ...array (
  0 => 'standard',
  1 => 
  array (
    0 => 'mrc',
    1 => 'groupm',
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
  'fqcn' => 'AdCP\\MediaBuy\\Enums\\ViewabilityStandard',
));
        } catch (\Throwable $filterException) {
            
                $transformationFailed = true;
            

            $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Filter\InvalidFilterValueException($value ?? null, ...array (
  0 => 'standard',
  1 => 'php_model_generator_enum',
  2 => $filterException,
)));
        }

        return false;
    })($value)
)) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Filter\IncompatibleFilterException($value ?? null, ...array (
  0 => 'standard',
  1 => 'php_model_generator_enum',
)));
}

                

                return $value;
            }
        
    
        
            
                /**
                 * Get the value of vendor.
                 *
                 * Vendor measuring this metric (e.g., { domain: 'doubleverify.com' }). The vendor's brand.json agents array (type: 'measurement') is the discovery point for their measurement agent. When specified on a confirmed package, creatives MUST include tracker_script or tracker_pixel assets from this vendor.
                 * @example {"domain":"nova-brands.com","brand_id":"spark"}
                 * @example {"domain":"nova-brands.com","brand_id":"glow"}
                 * @example {"domain":"acme-corp.com"}
                 *
                 * @return GetProductsRequest_BrandReference
                 */
                public function getVendor(): GetProductsRequest_BrandReference
                {
                    

                    return $this->vendor;
                }
            

            
                /**
                 * Set the value of vendor.
                 *
                 * @param GetProductsRequest_BrandReference $vendor Vendor measuring this metric (e.g., { domain: 'doubleverify.com' }). The vendor's brand.json agents array (type: 'measurement') is the discovery point for their measurement agent. When specified on a confirmed package, creatives MUST include tracker_script or tracker_pixel assets from this vendor.
                 *
                 * @throws ErrorRegistryException
                 *
                 * @return static
                 */
                public function setVendor(
                    GetProductsRequest_BrandReference $vendor
                ): static {
                    if ($this->vendor === $vendor) {
                        return $this;
                    }

                    $value = $modelData['vendor'] = $vendor;

                    
                        $this->_errorRegistry = new ErrorRegistryException();
                    

                    

                    $value = $this->validateVendor($value, $modelData);

                    
                        if ($this->_errorRegistry->getErrors()) {
                            throw $this->_errorRegistry;
                        }
                    

                    $this->vendor = $value;
                    $this->_rawModelDataInput['vendor'] = $vendor;

                    

                    return $this;
                }
            

            /**
             * Extract the value, perform validations and set the property vendor
             *
             * @param array $modelData
             *
             * @throws ErrorRegistryException
             */
            protected function processVendor(array $modelData): void
            {
                

                $value = array_key_exists('vendor', $modelData) ? $modelData['vendor'] : $this->vendor;

                $value = (function ($value) {
    try {
        return is_array($value) ? new GetProductsRequest_BrandReference($value) : $value;
    } catch (\Exception $instantiationException) {
        
            $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Object\NestedObjectException($value ?? null, ...array (
  0 => 'vendor',
  1 => $instantiationException,
)));
        

        
            return $instantiationException;
        
    }
})($value)
;

                $this->vendor = $this->validateVendor($value, $modelData);
            }

            /**
             * Execute all validators for the property vendor
             */
            protected function validateVendor($value, array $modelData)
            {
                
                    

if (!array_key_exists('vendor', $modelData)) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Object\RequiredValueException($value ?? null, ...array (
  0 => 'vendor',
)));
}

                
                    

if ((!is_object($value) && !$value instanceof UnitEnum) ) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Generic\InvalidTypeException($value ?? null, ...array (
  0 => 'vendor',
  1 => 'object',
)));
}

                
                    

if (is_object($value) && !($value instanceof \Exception) && !($value instanceof GetProductsRequest_BrandReference)) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Object\InvalidInstanceOfException($value ?? null, ...array (
  0 => 'vendor',
  1 => 'GetProductsRequest_BrandReference',
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
    

    
        
            if (array_key_exists('metric', $modelData) &&
                $modelData['metric'] !== $this->metric
            ) {
                

                $rollbackValues['metric'] = $this->metric;
                $this->processMetric($modelData);
            }
        
    
        
            if (array_key_exists('threshold', $modelData) &&
                $modelData['threshold'] !== $this->threshold
            ) {
                

                $rollbackValues['threshold'] = $this->threshold;
                $this->processThreshold($modelData);
            }
        
    
        
            if (array_key_exists('standard', $modelData) &&
                $modelData['standard'] !== $this->standard
            ) {
                

                $rollbackValues['standard'] = $this->standard;
                $this->processStandard($modelData);
            }
        
    
        
            if (array_key_exists('vendor', $modelData) &&
                $modelData['vendor'] !== $this->vendor
            ) {
                

                $rollbackValues['vendor'] = $this->vendor;
                $this->processVendor($modelData);
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
 * serialize the property metric
 */
protected function serializeMetric()
{
    return \PHPModelGenerator\Filter\Enum::serialize($this->metric, array (
  'fqcn' => 'AdCP\\MediaBuy\\Enums\\PerformanceStandardMetric',
));
}


/**
 * serialize the property standard
 */
protected function serializeStandard()
{
    return \PHPModelGenerator\Filter\Enum::serialize($this->standard, array (
  'fqcn' => 'AdCP\\MediaBuy\\Enums\\ViewabilityStandard',
));
}



    protected function resolveSerializationHook(array $data, int $depth, array $except): array
    {
        $data = array_merge($this->serializeAdditionalProperties($depth, $except), $data);

        return $data;
    }


protected function serializeAdditionalProperties(int $depth, array $except): array
{
    

    return $this->getSerializedValue(
        $this->_additionalProperties,
        $depth,
        $except
    );
}



}

// @codeCoverageIgnoreEnd
