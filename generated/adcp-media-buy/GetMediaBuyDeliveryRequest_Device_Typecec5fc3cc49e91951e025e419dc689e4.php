<?php

// @codingStandardsIgnoreFile
// @codeCoverageIgnoreStart

declare(strict_types = 1);


    namespace AdCP\MediaBuy;



    use PHPModelGenerator\Interfaces\JSONModelInterface;

    use UnitEnum;

    use AdCP\MediaBuy\Enums\SortMetric;

    use PHPModelGenerator\Traits\SerializableTrait;

    use JsonSerializable;

    use PHPModelGenerator\Interfaces\SerializationInterface;

    use AdCP\MediaBuy\Enums\DigitalSourceType;

    use AdCP\MediaBuy\Enums\GetMediaBuyDeliveryRequest_ProvenanceHuman_Oversight;

    use AdCP\MediaBuy\Enums\GetMediaBuyDeliveryRequest_Declared_By13c986791ce55365e13a7cd5ff90f7dcRole;

    use AdCP\MediaBuy\Enums\EmbeddedProvenanceMethod;

    use AdCP\MediaBuy\Enums\WatermarkMediaType;

    use AdCP\MediaBuy\Enums\C2PAWatermarkAction;

    use AdCP\MediaBuy\Enums\DisclosurePersistence;

    use AdCP\MediaBuy\Enums\DisclosurePosition;

    use AdCP\MediaBuy\Enums\GetMediaBuyDeliveryRequest_ItemOfArrayVerificationab0379bc9ff851960f9f645c9916029eResult;

    use AdCP\MediaBuy\Enums\AttributionModel;

    use AdCP\MediaBuy\Enums\GetMediaBuyDeliveryRequest_DurationUnit;

    use AdCP\MediaBuy\Enums\GeographicTargetingLevel;

    use AdCP\MediaBuy\Enums\MetroAreaSystem;

    use AdCP\MediaBuy\Enums\PostalCodeSystem;

    use PHPModelGenerator\Attributes\JsonPointer;

    use PHPModelGenerator\Attributes\SchemaName;

    use PHPModelGenerator\Attributes\Internal;

    use PHPModelGenerator\Exception\ErrorRegistryException;


/**
 * Class GetMediaBuyDeliveryRequest_Device_Typecec5fc3cc49e91951e025e419dc689e4
 * @package AdCP\MediaBuy 
 *
 * Request device type breakdown.
 *
 * This is an auto-implemented class implemented by the php-json-schema-model-generator.
 * If you need to implement something in this class use inheritance. Else you will lose your changes if the classes
 * are re-generated.
 */

#[JsonPointer('/properties/reporting_dimensions/properties/device_type')]

class GetMediaBuyDeliveryRequest_Device_Typecec5fc3cc49e91951e025e419dc689e4 implements JSONModelInterface, JsonSerializable, SerializationInterface
{
    use SerializableTrait;

    
        
            #[JsonPointer('/properties/reporting_dimensions/properties/device_type/properties/limit')]
        
            #[SchemaName('limit')]
        
        /** @var int|null Maximum number of entries to return. When omitted, all entries are returned (the enum is small and bounded). */
        protected $limit;
    
        
            #[JsonPointer('/$defs/SortMetric')]
        
            #[SchemaName('sort_by')]
        
        /** @var SortMetric|null Metric to sort breakdown rows by (descending). Falls back to 'spend' if the seller does not report the requested metric. */
        protected $sortBy = SortMetric::Spend;
    
        
            #[Internal]
        
        /** @var array Collect all additional properties provided to the schema */
        private $_additionalProperties = array (
);
    
        
            #[Internal]
        
        /** @var array Values which might be skipped for serialization if not provided */
        private $_skipNotProvidedPropertiesMap = array (
  0 => 'limit',
);
    
    #[Internal]
    /** @var array */
    protected $_rawModelDataInput = [];

    
        #[Internal]
        /** @var ErrorRegistryException Collect all validation errors */
        protected $_errorRegistry;
    

    /**
     * GetMediaBuyDeliveryRequest_Device_Typecec5fc3cc49e91951e025e419dc689e4 constructor.
     *
     * @param array $rawModelDataInput
     *
     * @throws ErrorRegistryException
     */
    public function __construct(array $rawModelDataInput = [])
    {
        
            $this->_errorRegistry = new ErrorRegistryException();
        

        

        
            $this->executeBaseValidators($rawModelDataInput);
        

        
            
                $this->processLimit($rawModelDataInput);
            
        
            
                $this->processSortBy($rawModelDataInput);
            
        
            
        
            
        

        
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
   'limit',
   'sort_by',
)) as $propertyKey) {
        

        $this->_additionalProperties[$propertyKey] = $value[$propertyKey];
    }

    return false;
})()) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Object\InvalidAdditionalPropertiesException($value ?? null, ...array (
  0 => 'GetMediaBuyDeliveryRequest_Device_Typecec5fc3cc49e91951e025e419dc689e4',
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
                 * Get the value of limit.
                 *
                 * Maximum number of entries to return. When omitted, all entries are returned (the enum is small and bounded).
                 *
                 * @return int|null
                 */
                public function getLimit(): ?int
                {
                    

                    return $this->limit;
                }
            

            
                /**
                 * Set the value of limit.
                 *
                 * @param int $limit Maximum number of entries to return. When omitted, all entries are returned (the enum is small and bounded).
                 *
                 * @throws ErrorRegistryException
                 *
                 * @return static
                 */
                public function setLimit(
                    int $limit
                ): static {
                    if ($this->limit === $limit) {
                        return $this;
                    }

                    $value = $modelData['limit'] = $limit;

                    
                        $this->_errorRegistry = new ErrorRegistryException();
                    

                    

                    $value = $this->validateLimit($value, $modelData);

                    
                        if ($this->_errorRegistry->getErrors()) {
                            throw $this->_errorRegistry;
                        }
                    

                    $this->limit = $value;
                    $this->_rawModelDataInput['limit'] = $limit;

                    

                    return $this;
                }
            

            /**
             * Extract the value, perform validations and set the property limit
             *
             * @param array $modelData
             *
             * @throws ErrorRegistryException
             */
            protected function processLimit(array $modelData): void
            {
                
                    if (!array_key_exists('limit', $modelData) && $this->limit === null) {
                        return;
                    }
                

                $value = array_key_exists('limit', $modelData) ? $modelData['limit'] : $this->limit;

                

                $this->limit = $this->validateLimit($value, $modelData);
            }

            /**
             * Execute all validators for the property limit
             */
            protected function validateLimit($value, array $modelData)
            {
                
                    

if ((!is_int($value) && !$value instanceof UnitEnum) ) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Generic\InvalidTypeException($value ?? null, ...array (
  0 => 'limit',
  1 => 'int',
)));
}

                
                    

if (is_int($value) && $value < 1) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Number\MinimumException($value ?? null, ...array (
  0 => 'limit',
  1 => 1,
)));
}

                

                return $value;
            }
        
    
        
            
                /**
                 * Get the value of sort_by.
                 *
                 * Metric to sort breakdown rows by (descending). Falls back to 'spend' if the seller does not report the requested metric.
                 *
                 * @return SortMetric|null
                 */
                public function getSortBy(): ?SortMetric
                {
                    

                    return $this->sortBy;
                }
            

            
                /**
                 * Set the value of sort_by.
                 *
                 * @param string|SortMetric|null $sortBy Metric to sort breakdown rows by (descending). Falls back to 'spend' if the seller does not report the requested metric.
                 *
                 * @throws ErrorRegistryException
                 *
                 * @return static
                 */
                public function setSortBy(
                    string | SortMetric | UnitEnum | null $sortBy
                ): static {
                    if ($this->sortBy === $sortBy) {
                        return $this;
                    }

                    $value = $modelData['sort_by'] = $sortBy;

                    
                        $this->_errorRegistry = new ErrorRegistryException();
                    

                    

                    $value = $this->validateSortBy($value, $modelData);

                    
                        if ($this->_errorRegistry->getErrors()) {
                            throw $this->_errorRegistry;
                        }
                    

                    $this->sortBy = $value;
                    $this->_rawModelDataInput['sort_by'] = $sortBy;

                    

                    return $this;
                }
            

            /**
             * Extract the value, perform validations and set the property sortBy
             *
             * @param array $modelData
             *
             * @throws ErrorRegistryException
             */
            protected function processSortBy(array $modelData): void
            {
                
                    if (!array_key_exists('sort_by', $modelData) && $this->sortBy === null) {
                        return;
                    }
                

                $value = array_key_exists('sort_by', $modelData) ? $modelData['sort_by'] : $this->sortBy;

                

                $this->sortBy = $this->validateSortBy($value, $modelData);
            }

            /**
             * Execute all validators for the property sortBy
             */
            protected function validateSortBy($value, array $modelData)
            {
                
                    

if ($value instanceof UnitEnum && !($value instanceof SortMetric)) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Generic\InvalidTypeException($value ?? null, ...array (
  0 => 'sort_by',
  1 => 'SortMetric',
)));
}

                
                    

if ($value instanceof UnitEnum && !($value instanceof SortMetric)) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Generic\InvalidTypeException($value ?? null, ...array (
  0 => 'sort_by',
  1 => 'SortMetric',
)));
}

                
                    

if (!($value instanceof UnitEnum) && (!is_string($value) && !$value instanceof UnitEnum) ) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Generic\InvalidTypeException($value ?? null, ...array (
  0 => 'sort_by',
  1 => 
  array (
    0 => 'UnitEnum',
    1 => 'string',
  ),
)));
}

                
                    

if (!($value instanceof UnitEnum) && !in_array($value, array (
   'impressions',
   'spend',
   'clicks',
   'ctr',
   'views',
   'completed_views',
   'completion_rate',
   'conversions',
   'conversion_value',
   'roas',
   'cost_per_acquisition',
   'new_to_brand_rate',
   'leads',
   'grps',
   'reach',
   'frequency',
   'engagements',
   'follows',
   'saves',
   'profile_visits',
   'engagement_rate',
   'cost_per_click',
), true)) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Generic\EnumException($value ?? null, ...array (
  0 => 'sort_by',
  1 => 
  array (
    0 => 'impressions',
    1 => 'spend',
    2 => 'clicks',
    3 => 'ctr',
    4 => 'views',
    5 => 'completed_views',
    6 => 'completion_rate',
    7 => 'conversions',
    8 => 'conversion_value',
    9 => 'roas',
    10 => 'cost_per_acquisition',
    11 => 'new_to_brand_rate',
    12 => 'leads',
    13 => 'grps',
    14 => 'reach',
    15 => 'frequency',
    16 => 'engagements',
    17 => 'follows',
    18 => 'saves',
    19 => 'profile_visits',
    20 => 'engagement_rate',
    21 => 'cost_per_click',
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
  'fqcn' => 'AdCP\\MediaBuy\\Enums\\SortMetric',
));
        } catch (\Throwable $filterException) {
            
                $transformationFailed = true;
            

            $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Filter\InvalidFilterValueException($value ?? null, ...array (
  0 => 'sort_by',
  1 => 'php_model_generator_enum',
  2 => $filterException,
)));
        }

        return false;
    })($value)
)) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Filter\IncompatibleFilterException($value ?? null, ...array (
  0 => 'sort_by',
  1 => 'php_model_generator_enum',
)));
}

                
                    
$transformationFailed = false;
if (!($value instanceof UnitEnum) && 
(
    
    (function (&$value) use (&$transformationFailed): bool {
        // make sure exceptions from the filter are caught and added to the error handling
        try {
            $value = \PHPModelGenerator\Filter\Enum::filter($value, array (
  'fqcn' => 'AdCP\\MediaBuy\\Enums\\SortMetric',
));
        } catch (\Throwable $filterException) {
            
                $transformationFailed = true;
            

            $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Filter\InvalidFilterValueException($value ?? null, ...array (
  0 => 'sort_by',
  1 => 'php_model_generator_enum',
  2 => $filterException,
)));
        }

        return false;
    })($value)
)) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Filter\IncompatibleFilterException($value ?? null, ...array (
  0 => 'sort_by',
  1 => 'php_model_generator_enum',
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
    

    
        
            if (array_key_exists('limit', $modelData) &&
                $modelData['limit'] !== $this->limit
            ) {
                

                $rollbackValues['limit'] = $this->limit;
                $this->processLimit($modelData);
            }
        
    
        
            if (array_key_exists('sort_by', $modelData) &&
                $modelData['sort_by'] !== $this->sortBy
            ) {
                

                $rollbackValues['sortBy'] = $this->sortBy;
                $this->processSortBy($modelData);
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
 * serialize the property sortBy
 */
protected function serializeSortBy()
{
    return \PHPModelGenerator\Filter\Enum::serialize($this->sortBy, array (
  'fqcn' => 'AdCP\\MediaBuy\\Enums\\SortMetric',
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
