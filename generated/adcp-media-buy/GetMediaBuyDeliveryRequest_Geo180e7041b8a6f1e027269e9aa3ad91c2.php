<?php

// @codingStandardsIgnoreFile
// @codeCoverageIgnoreStart

declare(strict_types = 1);


    namespace AdCP\MediaBuy;



    use PHPModelGenerator\Interfaces\JSONModelInterface;

    use UnitEnum;

    use AdCP\MediaBuy\Enums\GeographicTargetingLevel;

    use AdCP\MediaBuy\Enums\SortMetric;

    use AdCP\MediaBuy\Enums\MetroAreaSystem;

    use AdCP\MediaBuy\Enums\PostalCodeSystem;

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

    use PHPModelGenerator\Attributes\JsonPointer;

    use PHPModelGenerator\Attributes\SchemaName;

    use PHPModelGenerator\Attributes\Required;

    use PHPModelGenerator\Attributes\Internal;

    use PHPModelGenerator\Exception\ErrorRegistryException;


/**
 * Class GetMediaBuyDeliveryRequest_Geo180e7041b8a6f1e027269e9aa3ad91c2
 * @package AdCP\MediaBuy 
 *
 * Request geographic breakdown. Check reporting_capabilities.supports_geo_breakdown for available levels and systems.
 *
 * This is an auto-implemented class implemented by the php-json-schema-model-generator.
 * If you need to implement something in this class use inheritance. Else you will lose your changes if the classes
 * are re-generated.
 */

#[JsonPointer('/properties/reporting_dimensions/properties/geo')]

class GetMediaBuyDeliveryRequest_Geo180e7041b8a6f1e027269e9aa3ad91c2 implements JSONModelInterface, JsonSerializable, SerializationInterface
{
    use SerializableTrait;

    
        
            #[JsonPointer('/properties/reporting_dimensions/properties/geo/properties/geo_level')]
        
            #[SchemaName('geo_level')]
        
            #[Required]
        
        /** @var GeographicTargetingLevel Geographic granularity level for the breakdown */
        protected $geoLevel;
    
        
            #[JsonPointer('/properties/reporting_dimensions/properties/geo/properties/system')]
        
            #[SchemaName('system')]
        
        /** @var MetroAreaSystem|PostalCodeSystem|null Classification system for metro or postal_area levels (e.g., 'nielsen_dma', 'us_zip'). Required when geo_level is 'metro' or 'postal_area'. */
        protected $system;
    
        
            #[JsonPointer('/properties/reporting_dimensions/properties/geo/properties/limit')]
        
            #[SchemaName('limit')]
        
        /** @var int Maximum number of geo entries to return. Defaults to 25. When truncated, by_geo_truncated is true in the response. */
        protected $limit = 25;
    
        
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
  1 => 'system',
);
    
    #[Internal]
    /** @var array */
    protected $_rawModelDataInput = [];

    
        #[Internal]
        /** @var ErrorRegistryException Collect all validation errors */
        protected $_errorRegistry;
    

    /**
     * GetMediaBuyDeliveryRequest_Geo180e7041b8a6f1e027269e9aa3ad91c2 constructor.
     *
     * @param array $rawModelDataInput
     *
     * @throws ErrorRegistryException
     */
    public function __construct(array $rawModelDataInput = [])
    {
        
            $this->_errorRegistry = new ErrorRegistryException();
        

        

        
            $this->executeBaseValidators($rawModelDataInput);
        

        
            
                $this->processGeoLevel($rawModelDataInput);
            
        
            
                $this->processSystem($rawModelDataInput);
            
        
            
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
   'geo_level',
   'system',
   'limit',
   'sort_by',
)) as $propertyKey) {
        

        $this->_additionalProperties[$propertyKey] = $value[$propertyKey];
    }

    return false;
})()) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Object\InvalidAdditionalPropertiesException($value ?? null, ...array (
  0 => 'GetMediaBuyDeliveryRequest_Geo180e7041b8a6f1e027269e9aa3ad91c2',
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
                 * Get the value of geo_level.
                 *
                 * Geographic granularity level for the breakdown
                 *
                 * @return GeographicTargetingLevel
                 */
                public function getGeoLevel(): GeographicTargetingLevel
                {
                    

                    return $this->geoLevel;
                }
            

            
                /**
                 * Set the value of geo_level.
                 *
                 * @param string|GeographicTargetingLevel $geoLevel Geographic granularity level for the breakdown
                 *
                 * @throws ErrorRegistryException
                 *
                 * @return static
                 */
                public function setGeoLevel(
                    string | GeographicTargetingLevel $geoLevel
                ): static {
                    if ($this->geoLevel === $geoLevel) {
                        return $this;
                    }

                    $value = $modelData['geo_level'] = $geoLevel;

                    
                        $this->_errorRegistry = new ErrorRegistryException();
                    

                    

                    $value = $this->validateGeoLevel($value, $modelData);

                    
                        if ($this->_errorRegistry->getErrors()) {
                            throw $this->_errorRegistry;
                        }
                    

                    $this->geoLevel = $value;
                    $this->_rawModelDataInput['geo_level'] = $geoLevel;

                    

                    return $this;
                }
            

            /**
             * Extract the value, perform validations and set the property geoLevel
             *
             * @param array $modelData
             *
             * @throws ErrorRegistryException
             */
            protected function processGeoLevel(array $modelData): void
            {
                

                $value = array_key_exists('geo_level', $modelData) ? $modelData['geo_level'] : $this->geoLevel;

                

                $this->geoLevel = $this->validateGeoLevel($value, $modelData);
            }

            /**
             * Execute all validators for the property geoLevel
             */
            protected function validateGeoLevel($value, array $modelData)
            {
                
                    

if ($value instanceof UnitEnum && !($value instanceof GeographicTargetingLevel)) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Generic\InvalidTypeException($value ?? null, ...array (
  0 => 'geo_level',
  1 => 'GeographicTargetingLevel',
)));
}

                
                    

if (!array_key_exists('geo_level', $modelData)) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Object\RequiredValueException($value ?? null, ...array (
  0 => 'geo_level',
)));
}

                
                    

if ((!is_string($value) && !$value instanceof UnitEnum) ) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Generic\InvalidTypeException($value ?? null, ...array (
  0 => 'geo_level',
  1 => 'string',
)));
}

                
                    

if (!($value instanceof UnitEnum) && !in_array($value, array (
   'country',
   'region',
   'metro',
   'postal_area',
), true)) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Generic\EnumException($value ?? null, ...array (
  0 => 'geo_level',
  1 => 
  array (
    0 => 'country',
    1 => 'region',
    2 => 'metro',
    3 => 'postal_area',
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
  'fqcn' => 'AdCP\\MediaBuy\\Enums\\GeographicTargetingLevel',
));
        } catch (\Throwable $filterException) {
            
                $transformationFailed = true;
            

            $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Filter\InvalidFilterValueException($value ?? null, ...array (
  0 => 'geo_level',
  1 => 'php_model_generator_enum',
  2 => $filterException,
)));
        }

        return false;
    })($value)
)) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Filter\IncompatibleFilterException($value ?? null, ...array (
  0 => 'geo_level',
  1 => 'php_model_generator_enum',
)));
}

                

                return $value;
            }
        
    
        
            
                /**
                 * Get the value of system.
                 *
                 * Classification system for metro or postal_area levels (e.g., 'nielsen_dma', 'us_zip'). Required when geo_level is 'metro' or 'postal_area'.
                 *
                 * @return MetroAreaSystem|PostalCodeSystem|null
                 */
                public function getSystem(): string | MetroAreaSystem | PostalCodeSystem | null
                {
                    

                    return $this->system;
                }
            

            
                /**
                 * Set the value of system.
                 *
                 * @param string|MetroAreaSystem|PostalCodeSystem|null $system Classification system for metro or postal_area levels (e.g., 'nielsen_dma', 'us_zip'). Required when geo_level is 'metro' or 'postal_area'.
                 *
                 * @throws ErrorRegistryException
                 *
                 * @return static
                 */
                public function setSystem(
                    string | MetroAreaSystem | PostalCodeSystem | null $system
                ): static {
                    if ($this->system === $system) {
                        return $this;
                    }

                    $value = $modelData['system'] = $system;

                    
                        $this->_errorRegistry = new ErrorRegistryException();
                    

                    

                    $value = $this->validateSystem($value, $modelData);

                    
                        if ($this->_errorRegistry->getErrors()) {
                            throw $this->_errorRegistry;
                        }
                    

                    $this->system = $value;
                    $this->_rawModelDataInput['system'] = $system;

                    

                    return $this;
                }
            

            /**
             * Extract the value, perform validations and set the property system
             *
             * @param array $modelData
             *
             * @throws ErrorRegistryException
             */
            protected function processSystem(array $modelData): void
            {
                
                    if (!array_key_exists('system', $modelData) && $this->system === null) {
                        return;
                    }
                

                $value = array_key_exists('system', $modelData) ? $modelData['system'] : $this->system;

                

                $this->system = $this->validateSystem($value, $modelData);
            }

            /**
             * Execute all validators for the property system
             */
            protected function validateSystem($value, array $modelData)
            {
                
                    $this->validateSystem_ComposedProperty_7d998b43b93b6df144cac8ec9ddb1f24($value, $modelData);
                

                return $value;
            }
        
    
        
            
                /**
                 * Get the value of limit.
                 *
                 * Maximum number of geo entries to return. Defaults to 25. When truncated, by_geo_truncated is true in the response.
                 *
                 * @return int
                 */
                public function getLimit(): int
                {
                    

                    return $this->limit;
                }
            

            
                /**
                 * Set the value of limit.
                 *
                 * @param int $limit Maximum number of geo entries to return. Defaults to 25. When truncated, by_geo_truncated is true in the response.
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
                    string | SortMetric | null $sortBy
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

                
                    

if ((!is_string($value) && !$value instanceof UnitEnum) ) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Generic\InvalidTypeException($value ?? null, ...array (
  0 => 'sort_by',
  1 => 'string',
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
    

    
        
            if (array_key_exists('geo_level', $modelData) &&
                $modelData['geo_level'] !== $this->geoLevel
            ) {
                

                $rollbackValues['geoLevel'] = $this->geoLevel;
                $this->processGeoLevel($modelData);
            }
        
    
        
            if (array_key_exists('system', $modelData) &&
                $modelData['system'] !== $this->system
            ) {
                

                $rollbackValues['system'] = $this->system;
                $this->processSystem($modelData);
            }
        
    
        
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
 * serialize the property geoLevel
 */
protected function serializeGeoLevel()
{
    return \PHPModelGenerator\Filter\Enum::serialize($this->geoLevel, array (
  'fqcn' => 'AdCP\\MediaBuy\\Enums\\GeographicTargetingLevel',
));
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


private function validateSystem_ComposedProperty_7d998b43b93b6df144cac8ec9ddb1f24(&$value, $modelData): void {
                    
            $succeededCompositionElements = 0;
            $compositionErrorCollection = [];
        
                    
                    if (
(function (&$value) use (
    &$modelData,
    &$modifiedModelData,
    &$compositionErrorCollection,
    &$succeededCompositionElements,
    &$validatorIndex
) {
    $succeededCompositionElements = 2;
    $validatorComponentIndex = 0;
    $originalModelData = $value;
    $proposedValue = null;
    $modifiedValues = [];

    

    
        $originalErrorRegistry = $this->_errorRegistry;
    

    
        try {
            

                
                    // collect errors for each composition element
                    $this->_errorRegistry = new ErrorRegistryException();
                

                

                

                
                    

if ($value instanceof UnitEnum && !($value instanceof MetroAreaSystem)) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Generic\InvalidTypeException($value ?? null, ...array (
  0 => 'system',
  1 => 'MetroAreaSystem',
)));
}

                
                    

if ((!is_string($value) && !$value instanceof UnitEnum) ) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Generic\InvalidTypeException($value ?? null, ...array (
  0 => 'system',
  1 => 'string',
)));
}

                
                    

if (!($value instanceof UnitEnum) && !in_array($value, array (
   'nielsen_dma',
   'uk_itl1',
   'uk_itl2',
   'eurostat_nuts2',
   'custom',
), true)) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Generic\EnumException($value ?? null, ...array (
  0 => 'system',
  1 => 
  array (
    0 => 'nielsen_dma',
    1 => 'uk_itl1',
    2 => 'uk_itl2',
    3 => 'eurostat_nuts2',
    4 => 'custom',
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
  'fqcn' => 'AdCP\\MediaBuy\\Enums\\MetroAreaSystem',
));
        } catch (\Throwable $filterException) {
            
                $transformationFailed = true;
            

            $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Filter\InvalidFilterValueException($value ?? null, ...array (
  0 => 'system',
  1 => 'php_model_generator_enum',
  2 => $filterException,
)));
        }

        return false;
    })($value)
)) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Filter\IncompatibleFilterException($value ?? null, ...array (
  0 => 'system',
  1 => 'php_model_generator_enum',
)));
}

                

                
                    $compositionErrorCollection[] = $this->_errorRegistry;

                    

                    // an error inside the composed validation occurred. Throw an exception to count the validity of the
                    // composition item
                    if ($this->_errorRegistry->getErrors()) {
                        throw new \Exception();
                    }
                

                
                    $proposedValue = $proposedValue ?? $value;
                

                if (is_object($value) && is_array($originalModelData)) {
                    $modifiedValues = array_merge($modifiedValues, $this->_getModifiedValues_85b0f($originalModelData, $value));
                }
            
        } catch (\Exception $e) {
            

            $succeededCompositionElements--;
        }

        $value = $originalModelData;
        $validatorComponentIndex++;
    
        try {
            

                
                    // collect errors for each composition element
                    $this->_errorRegistry = new ErrorRegistryException();
                

                

                

                
                    

if ($value instanceof UnitEnum && !($value instanceof PostalCodeSystem)) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Generic\InvalidTypeException($value ?? null, ...array (
  0 => 'system',
  1 => 'PostalCodeSystem',
)));
}

                
                    

if ((!is_string($value) && !$value instanceof UnitEnum) ) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Generic\InvalidTypeException($value ?? null, ...array (
  0 => 'system',
  1 => 'string',
)));
}

                
                    

if (!($value instanceof UnitEnum) && !in_array($value, array (
   'us_zip',
   'us_zip_plus_four',
   'gb_outward',
   'gb_full',
   'ca_fsa',
   'ca_full',
   'de_plz',
   'fr_code_postal',
   'au_postcode',
   'ch_plz',
   'at_plz',
), true)) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Generic\EnumException($value ?? null, ...array (
  0 => 'system',
  1 => 
  array (
    0 => 'us_zip',
    1 => 'us_zip_plus_four',
    2 => 'gb_outward',
    3 => 'gb_full',
    4 => 'ca_fsa',
    5 => 'ca_full',
    6 => 'de_plz',
    7 => 'fr_code_postal',
    8 => 'au_postcode',
    9 => 'ch_plz',
    10 => 'at_plz',
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
  'fqcn' => 'AdCP\\MediaBuy\\Enums\\PostalCodeSystem',
));
        } catch (\Throwable $filterException) {
            
                $transformationFailed = true;
            

            $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Filter\InvalidFilterValueException($value ?? null, ...array (
  0 => 'system',
  1 => 'php_model_generator_enum',
  2 => $filterException,
)));
        }

        return false;
    })($value)
)) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Filter\IncompatibleFilterException($value ?? null, ...array (
  0 => 'system',
  1 => 'php_model_generator_enum',
)));
}

                

                
                    $compositionErrorCollection[] = $this->_errorRegistry;

                    

                    // an error inside the composed validation occurred. Throw an exception to count the validity of the
                    // composition item
                    if ($this->_errorRegistry->getErrors()) {
                        throw new \Exception();
                    }
                

                
                    $proposedValue = $proposedValue ?? $value;
                

                if (is_object($value) && is_array($originalModelData)) {
                    $modifiedValues = array_merge($modifiedValues, $this->_getModifiedValues_85b0f($originalModelData, $value));
                }
            
        } catch (\Exception $e) {
            

            $succeededCompositionElements--;
        }

        $value = $originalModelData;
        $validatorComponentIndex++;
    

    
        $value = $proposedValue;
    

    
        $this->_errorRegistry = $originalErrorRegistry;
    

    $result = !($succeededCompositionElements === 1);

    

    return $result;
})($value)
) {
                        $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\ComposedValue\OneOfException($value ?? null, ...array (
  0 => 'system',
  1 => $succeededCompositionElements,
  2 => $compositionErrorCollection,
)));
                    }
                }


                        private function _getModifiedValues_85b0f(array $originalModelData, object $nestedCompositionObject): array {
                            $modifiedValues = [];
                            $defaultValueMap = array (
);
    
                            foreach (array (
) as $key => $accessor) {
                                if ((isset($originalModelData[$key]) || in_array($key, $defaultValueMap))
                                    && method_exists($nestedCompositionObject, $accessor)
                                    && ($modifiedValue = $nestedCompositionObject->$accessor())
                                        !== ($originalModelData[$key] ?? !$modifiedValue)
                                ) {
                                    $modifiedValues[$key] = $modifiedValue;
                                }
                            }
    
                            return $modifiedValues;
                        }


}

// @codeCoverageIgnoreEnd
