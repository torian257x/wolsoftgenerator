<?php

// @codingStandardsIgnoreFile
// @codeCoverageIgnoreStart

declare(strict_types = 1);


    namespace AdCP\MediaBuy;



    use PHPModelGenerator\Interfaces\JSONModelInterface;

    use UnitEnum;

    use AdCP\MediaBuy\Enums\ReachUnit;

    use PHPModelGenerator\Traits\SerializableTrait;

    use JsonSerializable;

    use PHPModelGenerator\Interfaces\SerializationInterface;

    use AdCP\MediaBuy\Enums\GetMediaBuysResponse_DurationUnit;

    use PHPModelGenerator\Attributes\JsonPointer;

    use PHPModelGenerator\Attributes\SchemaName;

    use PHPModelGenerator\Attributes\Internal;

    use PHPModelGenerator\Exception\ErrorRegistryException;


/**
 * Class GetMediaBuysResponse_FrequencyCap
 * @package AdCP\MediaBuy 
 *
 * Frequency capping settings for package-level application. Two types of frequency control can be used independently or together: suppress enforces a cooldown between consecutive exposures; max_impressions + per + window caps total exposures per entity in a time window. When both suppress and max_impressions are set, an impression is delivered only if both constraints permit it (AND semantics). At least one of suppress, suppress_minutes, or max_impressions must be set.
 *
 * This is an auto-implemented class implemented by the php-json-schema-model-generator.
 * If you need to implement something in this class use inheritance. Else you will lose your changes if the classes
 * are re-generated.
 */

#[JsonPointer('/properties/media_buys/items/properties/packages/items/properties/targeting_overlay/properties/frequency_cap')]

class GetMediaBuysResponse_FrequencyCap implements JSONModelInterface, JsonSerializable, SerializationInterface
{
    use SerializableTrait;

    
        
            #[JsonPointer('/properties/media_buys/items/properties/packages/items/properties/targeting_overlay/properties/frequency_cap/properties/suppress')]
        
            #[SchemaName('suppress')]
        
        /** @var GetMediaBuysResponse_Duration|null Cooldown period between consecutive exposures to the same entity. Prevents back-to-back ad delivery (e.g. {"interval": 60, "unit": "minutes"} for a 1-hour cooldown). Preferred over suppress_minutes. */
        protected $suppress;
    
        
            #[JsonPointer('/properties/media_buys/items/properties/packages/items/properties/targeting_overlay/properties/frequency_cap/properties/suppress_minutes')]
        
            #[SchemaName('suppress_minutes')]
        
        /** @var float|null Deprecated — use suppress instead. Cooldown period in minutes between consecutive exposures to the same entity (e.g. 60 for a 1-hour cooldown). */
        protected $suppressMinutes;
    
        
            #[JsonPointer('/properties/media_buys/items/properties/packages/items/properties/targeting_overlay/properties/frequency_cap/properties/max_impressions')]
        
            #[SchemaName('max_impressions')]
        
        /** @var int|null Maximum number of impressions per entity per window. For duration windows, implementations typically use a rolling window; 'campaign' applies a fixed cap across the full flight. */
        protected $maxImpressions;
    
        
            #[JsonPointer('/properties/media_buys/items/properties/packages/items/properties/targeting_overlay/properties/frequency_cap/properties/per')]
        
            #[SchemaName('per')]
        
        /** @var ReachUnit|null Entity granularity for impression counting. Required when max_impressions is set. */
        protected $per;
    
        
            #[JsonPointer('/properties/media_buys/items/properties/packages/items/properties/targeting_overlay/properties/frequency_cap/properties/window')]
        
            #[SchemaName('window')]
        
        /** @var GetMediaBuysResponse_Duration|null Time window for the max_impressions cap (e.g. {"interval": 7, "unit": "days"} or {"interval": 1, "unit": "campaign"} for the full flight). Required when max_impressions is set. */
        protected $window;
    
        
            #[Internal]
        
        /** @var array Track the internal validation state of composed validations */
        private $_propertyValidationState = array (
  0 => 
  array (
  ),
);
    
        
            #[Internal]
        
        /** @var array Collect all additional properties provided to the schema */
        private $_additionalProperties = array (
);
    
        
            #[Internal]
        
        /** @var array Values which might be skipped for serialization if not provided */
        private $_skipNotProvidedPropertiesMap = array (
  0 => 'suppress',
  1 => 'suppress_minutes',
  2 => 'max_impressions',
  3 => 'per',
  4 => 'window',
);
    
    #[Internal]
    /** @var array */
    protected $_rawModelDataInput = [];

    
        #[Internal]
        /** @var ErrorRegistryException Collect all validation errors */
        protected $_errorRegistry;
    

    /**
     * GetMediaBuysResponse_FrequencyCap constructor.
     *
     * @param array $rawModelDataInput
     *
     * @throws ErrorRegistryException
     */
    public function __construct(array $rawModelDataInput = [])
    {
        
            $this->_errorRegistry = new ErrorRegistryException();
        

        

        
            $this->executeBaseValidators($rawModelDataInput);
        

        
            
                $this->processSuppress($rawModelDataInput);
            
        
            
                $this->processSuppressMinutes($rawModelDataInput);
            
        
            
                $this->processMaxImpressions($rawModelDataInput);
            
        
            
                $this->processPer($rawModelDataInput);
            
        
            
                $this->processWindow($rawModelDataInput);
            
        
            
        
            
        
            
        

        
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
   'suppress',
   'suppress_minutes',
   'max_impressions',
   'per',
   'window',
)) as $propertyKey) {
        

        $this->_additionalProperties[$propertyKey] = $value[$propertyKey];
    }

    return false;
})()) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Object\InvalidAdditionalPropertiesException($value ?? null, ...array (
  0 => 'GetMediaBuysResponse_FrequencyCap',
)));
}

            

            
                $this->validateComposition_0($modelData);
            
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
                 * Get the value of suppress.
                 *
                 * Cooldown period between consecutive exposures to the same entity. Prevents back-to-back ad delivery (e.g. {"interval": 60, "unit": "minutes"} for a 1-hour cooldown). Preferred over suppress_minutes.
                 *
                 * @return GetMediaBuysResponse_Duration|null
                 */
                public function getSuppress(): mixed
                {
                    

                    return $this->suppress;
                }
            

            
                /**
                 * Set the value of suppress.
                 *
                 * @param GetMediaBuysResponse_Duration $suppress Cooldown period between consecutive exposures to the same entity. Prevents back-to-back ad delivery (e.g. {"interval": 60, "unit": "minutes"} for a 1-hour cooldown). Preferred over suppress_minutes.
                 *
                 * @throws ErrorRegistryException
                 *
                 * @return static
                 */
                public function setSuppress(
                    mixed $suppress
                ): static {
                    if ($this->suppress === $suppress) {
                        return $this;
                    }

                    $value = $modelData['suppress'] = $suppress;

                    
                        $this->_errorRegistry = new ErrorRegistryException();
                    

                    $this->validateComposition_0($modelData);



                    $value = $this->validateSuppress($value, $modelData);

                    
                        if ($this->_errorRegistry->getErrors()) {
                            throw $this->_errorRegistry;
                        }
                    

                    $this->suppress = $value;
                    $this->_rawModelDataInput['suppress'] = $suppress;

                    

                    return $this;
                }
            

            /**
             * Extract the value, perform validations and set the property suppress
             *
             * @param array $modelData
             *
             * @throws ErrorRegistryException
             */
            protected function processSuppress(array $modelData): void
            {
                
                    if (!array_key_exists('suppress', $modelData) && $this->suppress === null) {
                        return;
                    }
                

                $value = array_key_exists('suppress', $modelData) ? $modelData['suppress'] : $this->suppress;

                

                $this->suppress = $this->validateSuppress($value, $modelData);
            }

            /**
             * Execute all validators for the property suppress
             */
            protected function validateSuppress($value, array $modelData)
            {
                
                    $this->validateSuppress_ComposedProperty_6b9cc5f09155e37d20e472e12c6d2e94($value, $modelData);
                

                return $value;
            }
        
    
        
            
                /**
                 * Get the value of suppress_minutes.
                 *
                 * Deprecated — use suppress instead. Cooldown period in minutes between consecutive exposures to the same entity (e.g. 60 for a 1-hour cooldown).
                 *
                 * @return float|null
                 */
                public function getSuppressMinutes(): ?float
                {
                    

                    return $this->suppressMinutes;
                }
            

            
                /**
                 * Set the value of suppress_minutes.
                 *
                 * @param float $suppressMinutes Deprecated — use suppress instead. Cooldown period in minutes between consecutive exposures to the same entity (e.g. 60 for a 1-hour cooldown).
                 *
                 * @throws ErrorRegistryException
                 *
                 * @return static
                 */
                public function setSuppressMinutes(
                    float $suppressMinutes
                ): static {
                    if ($this->suppressMinutes === $suppressMinutes) {
                        return $this;
                    }

                    $value = $modelData['suppress_minutes'] = $suppressMinutes;

                    
                        $this->_errorRegistry = new ErrorRegistryException();
                    

                    $this->validateComposition_0($modelData);



                    $value = $this->validateSuppressMinutes($value, $modelData);

                    
                        if ($this->_errorRegistry->getErrors()) {
                            throw $this->_errorRegistry;
                        }
                    

                    $this->suppressMinutes = $value;
                    $this->_rawModelDataInput['suppress_minutes'] = $suppressMinutes;

                    

                    return $this;
                }
            

            /**
             * Extract the value, perform validations and set the property suppressMinutes
             *
             * @param array $modelData
             *
             * @throws ErrorRegistryException
             */
            protected function processSuppressMinutes(array $modelData): void
            {
                
                    if (!array_key_exists('suppress_minutes', $modelData) && $this->suppressMinutes === null) {
                        return;
                    }
                

                $value = array_key_exists('suppress_minutes', $modelData) ? $modelData['suppress_minutes'] : $this->suppressMinutes;

                $value = is_int($value) ? (float) $value : $value;

                $this->suppressMinutes = $this->validateSuppressMinutes($value, $modelData);
            }

            /**
             * Execute all validators for the property suppressMinutes
             */
            protected function validateSuppressMinutes($value, array $modelData)
            {
                
                    

if ((!is_float($value) && !$value instanceof UnitEnum) ) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Generic\InvalidTypeException($value ?? null, ...array (
  0 => 'suppress_minutes',
  1 => 'float',
)));
}

                
                    

if (is_float($value) && $value < 0) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Number\MinimumException($value ?? null, ...array (
  0 => 'suppress_minutes',
  1 => 0,
)));
}

                

                return $value;
            }
        
    
        
            
                /**
                 * Get the value of max_impressions.
                 *
                 * Maximum number of impressions per entity per window. For duration windows, implementations typically use a rolling window; 'campaign' applies a fixed cap across the full flight.
                 *
                 * @return int|null
                 */
                public function getMaxImpressions(): ?int
                {
                    

                    return $this->maxImpressions;
                }
            

            
                /**
                 * Set the value of max_impressions.
                 *
                 * @param int $maxImpressions Maximum number of impressions per entity per window. For duration windows, implementations typically use a rolling window; 'campaign' applies a fixed cap across the full flight.
                 *
                 * @throws ErrorRegistryException
                 *
                 * @return static
                 */
                public function setMaxImpressions(
                    int $maxImpressions
                ): static {
                    if ($this->maxImpressions === $maxImpressions) {
                        return $this;
                    }

                    $value = $modelData['max_impressions'] = $maxImpressions;

                    
                        $this->_errorRegistry = new ErrorRegistryException();
                    

                    $this->validateComposition_0($modelData);



                    $value = $this->validateMaxImpressions($value, $modelData);

                    
                        if ($this->_errorRegistry->getErrors()) {
                            throw $this->_errorRegistry;
                        }
                    

                    $this->maxImpressions = $value;
                    $this->_rawModelDataInput['max_impressions'] = $maxImpressions;

                    

                    return $this;
                }
            

            /**
             * Extract the value, perform validations and set the property maxImpressions
             *
             * @param array $modelData
             *
             * @throws ErrorRegistryException
             */
            protected function processMaxImpressions(array $modelData): void
            {
                
                    if (!array_key_exists('max_impressions', $modelData) && $this->maxImpressions === null) {
                        return;
                    }
                

                $value = array_key_exists('max_impressions', $modelData) ? $modelData['max_impressions'] : $this->maxImpressions;

                

                $this->maxImpressions = $this->validateMaxImpressions($value, $modelData);
            }

            /**
             * Execute all validators for the property maxImpressions
             */
            protected function validateMaxImpressions($value, array $modelData)
            {
                
                    

if ((!is_int($value) && !$value instanceof UnitEnum) ) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Generic\InvalidTypeException($value ?? null, ...array (
  0 => 'max_impressions',
  1 => 'int',
)));
}

                
                    

if (is_int($value) && $value < 1) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Number\MinimumException($value ?? null, ...array (
  0 => 'max_impressions',
  1 => 1,
)));
}

                
                    
$missingAttributes = [];
if (array_key_exists('max_impressions', $modelData) && (static function () use ($modelData, &$missingAttributes) {
    foreach (array (
   'per',
   'window',
) as $dependency) {
        if (!array_key_exists($dependency, $modelData)) {
            $missingAttributes[] = $dependency;
        }
    }

    return !empty($missingAttributes);
})()) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Dependency\InvalidPropertyDependencyException($value ?? null, ...array (
  0 => 'max_impressions',
  1 => $missingAttributes,
)));
}

                

                return $value;
            }
        
    
        
            
                /**
                 * Get the value of per.
                 *
                 * Entity granularity for impression counting. Required when max_impressions is set.
                 *
                 * @return ReachUnit|null
                 */
                public function getPer(): string | ReachUnit | null
                {
                    

                    return $this->per;
                }
            

            
                /**
                 * Set the value of per.
                 *
                 * @param string|ReachUnit|null $per Entity granularity for impression counting. Required when max_impressions is set.
                 *
                 * @throws ErrorRegistryException
                 *
                 * @return static
                 */
                public function setPer(
                    string | ReachUnit | null $per
                ): static {
                    if ($this->per === $per) {
                        return $this;
                    }

                    $value = $modelData['per'] = $per;

                    
                        $this->_errorRegistry = new ErrorRegistryException();
                    

                    



                    $value = $this->validatePer($value, $modelData);

                    
                        if ($this->_errorRegistry->getErrors()) {
                            throw $this->_errorRegistry;
                        }
                    

                    $this->per = $value;
                    $this->_rawModelDataInput['per'] = $per;

                    

                    return $this;
                }
            

            /**
             * Extract the value, perform validations and set the property per
             *
             * @param array $modelData
             *
             * @throws ErrorRegistryException
             */
            protected function processPer(array $modelData): void
            {
                
                    if (!array_key_exists('per', $modelData) && $this->per === null) {
                        return;
                    }
                

                $value = array_key_exists('per', $modelData) ? $modelData['per'] : $this->per;

                

                $this->per = $this->validatePer($value, $modelData);
            }

            /**
             * Execute all validators for the property per
             */
            protected function validatePer($value, array $modelData)
            {
                
                    
$missingAttributes = [];
if (array_key_exists('per', $modelData) && (static function () use ($modelData, &$missingAttributes) {
    foreach (array (
   'max_impressions',
) as $dependency) {
        if (!array_key_exists($dependency, $modelData)) {
            $missingAttributes[] = $dependency;
        }
    }

    return !empty($missingAttributes);
})()) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Dependency\InvalidPropertyDependencyException($value ?? null, ...array (
  0 => 'per',
  1 => $missingAttributes,
)));
}

                
                    $this->validatePer_ComposedProperty_974da636454815481b34df6f5da8dd4a($value, $modelData);
                

                return $value;
            }
        
    
        
            
                /**
                 * Get the value of window.
                 *
                 * Time window for the max_impressions cap (e.g. {"interval": 7, "unit": "days"} or {"interval": 1, "unit": "campaign"} for the full flight). Required when max_impressions is set.
                 *
                 * @return GetMediaBuysResponse_Duration|null
                 */
                public function getWindow(): mixed
                {
                    

                    return $this->window;
                }
            

            
                /**
                 * Set the value of window.
                 *
                 * @param GetMediaBuysResponse_Duration $window Time window for the max_impressions cap (e.g. {"interval": 7, "unit": "days"} or {"interval": 1, "unit": "campaign"} for the full flight). Required when max_impressions is set.
                 *
                 * @throws ErrorRegistryException
                 *
                 * @return static
                 */
                public function setWindow(
                    mixed $window
                ): static {
                    if ($this->window === $window) {
                        return $this;
                    }

                    $value = $modelData['window'] = $window;

                    
                        $this->_errorRegistry = new ErrorRegistryException();
                    

                    



                    $value = $this->validateWindow($value, $modelData);

                    
                        if ($this->_errorRegistry->getErrors()) {
                            throw $this->_errorRegistry;
                        }
                    

                    $this->window = $value;
                    $this->_rawModelDataInput['window'] = $window;

                    

                    return $this;
                }
            

            /**
             * Extract the value, perform validations and set the property window
             *
             * @param array $modelData
             *
             * @throws ErrorRegistryException
             */
            protected function processWindow(array $modelData): void
            {
                
                    if (!array_key_exists('window', $modelData) && $this->window === null) {
                        return;
                    }
                

                $value = array_key_exists('window', $modelData) ? $modelData['window'] : $this->window;

                

                $this->window = $this->validateWindow($value, $modelData);
            }

            /**
             * Execute all validators for the property window
             */
            protected function validateWindow($value, array $modelData)
            {
                
                    
$missingAttributes = [];
if (array_key_exists('window', $modelData) && (static function () use ($modelData, &$missingAttributes) {
    foreach (array (
   'max_impressions',
) as $dependency) {
        if (!array_key_exists($dependency, $modelData)) {
            $missingAttributes[] = $dependency;
        }
    }

    return !empty($missingAttributes);
})()) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Dependency\InvalidPropertyDependencyException($value ?? null, ...array (
  0 => 'window',
  1 => $missingAttributes,
)));
}

                
                    $this->validateWindow_ComposedProperty_f6c43a9e2a7ed2703b48ffe153e0d9e1($value, $modelData);
                

                return $value;
            }
        
    
        
    
        
    
        
    

    /**
 * Validate updated properties which are part of a composition validation
 *
 * @param array $modifiedModelData An array containing all updated data as key-value pairs
 *
 * 
 */
private function validateComposition_0(array &$modifiedModelData): void
{
    $validatorIndex = 0;
    $value = $modelData = array_merge($this->_rawModelDataInput, $modifiedModelData);

    
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
    $succeededCompositionElements = 3;
    $validatorComponentIndex = 0;
    $originalModelData = $value;
    $proposedValue = null;
    $modifiedValues = [];

    
        $originalPropertyValidationState = $this->_propertyValidationState ?? [];
    

    
        $originalErrorRegistry = $this->_errorRegistry;
    

    
        try {
            
                // check if the state of the validator is already known.
                // If none of the properties affected by the validator are changed the validator must not be re-evaluated
                if (isset($validatorIndex) &&
                    isset($this->_propertyValidationState[$validatorIndex][$validatorComponentIndex]) &&
                    !array_intersect(
                        array_keys($modifiedModelData),
                        [
                            
                                'suppress',
                            
                        ]
                    )
                ) {
                    
                        $compositionErrorCollection[] = $this->_propertyValidationState[$validatorIndex][$validatorComponentIndex];
                    

                    if (
                            $this->_propertyValidationState[$validatorIndex][$validatorComponentIndex]->getErrors()
                        
                    ) {
                        throw new \Exception();
                    }
                } else {
            

                
                    // collect errors for each composition element
                    $this->_errorRegistry = new ErrorRegistryException();
                

                

                $value = (function ($value) {
    try {
        return is_array($value) ? new GetMediaBuysResponse_GetMediaBuysResponse_FrequencyCapee64bae6cf22e9f8c97fba7026bcd2c2($value) : $value;
    } catch (\Exception $instantiationException) {
        
            
                foreach($instantiationException->getErrors() as $nestedValidationError) {
                    $this->_errorRegistry->addError($nestedValidationError);
                }
            
        

        
            return $instantiationException;
        
    }
})($value)
;

                
                    

if ((!is_object($value) && !$value instanceof UnitEnum) ) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Generic\InvalidTypeException($value ?? null, ...array (
  0 => 'GetMediaBuysResponse_FrequencyCap',
  1 => 'object',
)));
}

                
                    

if (is_object($value) && !($value instanceof \Exception) && !($value instanceof GetMediaBuysResponse_GetMediaBuysResponse_FrequencyCapee64bae6cf22e9f8c97fba7026bcd2c2)) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Object\InvalidInstanceOfException($value ?? null, ...array (
  0 => 'GetMediaBuysResponse_FrequencyCap',
  1 => 'GetMediaBuysResponse_GetMediaBuysResponse_FrequencyCapee64bae6cf22e9f8c97fba7026bcd2c2',
)));
}

                

                
                    $compositionErrorCollection[] = $this->_errorRegistry;

                    
                        if (isset($validatorIndex)) {
                            $this->_propertyValidationState[$validatorIndex][$validatorComponentIndex] = $this->_errorRegistry;
                        }
                    

                    // an error inside the composed validation occurred. Throw an exception to count the validity of the
                    // composition item
                    if ($this->_errorRegistry->getErrors()) {
                        throw new \Exception();
                    }
                

                
                    $proposedValue = $proposedValue ?? $value;
                

                if (is_object($value) && is_array($originalModelData)) {
                    $modifiedValues = array_merge($modifiedValues, $this->_getModifiedValues_d70a6($originalModelData, $value));
                }
            
                
            }
            
        } catch (\Exception $e) {
            

            $succeededCompositionElements--;
        }

        $value = $originalModelData;
        $validatorComponentIndex++;
    
        try {
            
                // check if the state of the validator is already known.
                // If none of the properties affected by the validator are changed the validator must not be re-evaluated
                if (isset($validatorIndex) &&
                    isset($this->_propertyValidationState[$validatorIndex][$validatorComponentIndex]) &&
                    !array_intersect(
                        array_keys($modifiedModelData),
                        [
                            
                                'suppress_minutes',
                            
                        ]
                    )
                ) {
                    
                        $compositionErrorCollection[] = $this->_propertyValidationState[$validatorIndex][$validatorComponentIndex];
                    

                    if (
                            $this->_propertyValidationState[$validatorIndex][$validatorComponentIndex]->getErrors()
                        
                    ) {
                        throw new \Exception();
                    }
                } else {
            

                
                    // collect errors for each composition element
                    $this->_errorRegistry = new ErrorRegistryException();
                

                

                $value = (function ($value) {
    try {
        return is_array($value) ? new GetMediaBuysResponse_GetMediaBuysResponse_FrequencyCap7277ee0a63a2e453941e1b97362c6a3a($value) : $value;
    } catch (\Exception $instantiationException) {
        
            
                foreach($instantiationException->getErrors() as $nestedValidationError) {
                    $this->_errorRegistry->addError($nestedValidationError);
                }
            
        

        
            return $instantiationException;
        
    }
})($value)
;

                
                    

if ((!is_object($value) && !$value instanceof UnitEnum) ) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Generic\InvalidTypeException($value ?? null, ...array (
  0 => 'GetMediaBuysResponse_FrequencyCap',
  1 => 'object',
)));
}

                
                    

if (is_object($value) && !($value instanceof \Exception) && !($value instanceof GetMediaBuysResponse_GetMediaBuysResponse_FrequencyCap7277ee0a63a2e453941e1b97362c6a3a)) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Object\InvalidInstanceOfException($value ?? null, ...array (
  0 => 'GetMediaBuysResponse_FrequencyCap',
  1 => 'GetMediaBuysResponse_GetMediaBuysResponse_FrequencyCap7277ee0a63a2e453941e1b97362c6a3a',
)));
}

                

                
                    $compositionErrorCollection[] = $this->_errorRegistry;

                    
                        if (isset($validatorIndex)) {
                            $this->_propertyValidationState[$validatorIndex][$validatorComponentIndex] = $this->_errorRegistry;
                        }
                    

                    // an error inside the composed validation occurred. Throw an exception to count the validity of the
                    // composition item
                    if ($this->_errorRegistry->getErrors()) {
                        throw new \Exception();
                    }
                

                
                    $proposedValue = $proposedValue ?? $value;
                

                if (is_object($value) && is_array($originalModelData)) {
                    $modifiedValues = array_merge($modifiedValues, $this->_getModifiedValues_d70a6($originalModelData, $value));
                }
            
                
            }
            
        } catch (\Exception $e) {
            

            $succeededCompositionElements--;
        }

        $value = $originalModelData;
        $validatorComponentIndex++;
    
        try {
            
                // check if the state of the validator is already known.
                // If none of the properties affected by the validator are changed the validator must not be re-evaluated
                if (isset($validatorIndex) &&
                    isset($this->_propertyValidationState[$validatorIndex][$validatorComponentIndex]) &&
                    !array_intersect(
                        array_keys($modifiedModelData),
                        [
                            
                                'max_impressions',
                            
                        ]
                    )
                ) {
                    
                        $compositionErrorCollection[] = $this->_propertyValidationState[$validatorIndex][$validatorComponentIndex];
                    

                    if (
                            $this->_propertyValidationState[$validatorIndex][$validatorComponentIndex]->getErrors()
                        
                    ) {
                        throw new \Exception();
                    }
                } else {
            

                
                    // collect errors for each composition element
                    $this->_errorRegistry = new ErrorRegistryException();
                

                

                $value = (function ($value) {
    try {
        return is_array($value) ? new GetMediaBuysResponse_GetMediaBuysResponse_FrequencyCap7a3c0f76eb3a45d5b524c2bdc27d8326($value) : $value;
    } catch (\Exception $instantiationException) {
        
            
                foreach($instantiationException->getErrors() as $nestedValidationError) {
                    $this->_errorRegistry->addError($nestedValidationError);
                }
            
        

        
            return $instantiationException;
        
    }
})($value)
;

                
                    

if ((!is_object($value) && !$value instanceof UnitEnum) ) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Generic\InvalidTypeException($value ?? null, ...array (
  0 => 'GetMediaBuysResponse_FrequencyCap',
  1 => 'object',
)));
}

                
                    

if (is_object($value) && !($value instanceof \Exception) && !($value instanceof GetMediaBuysResponse_GetMediaBuysResponse_FrequencyCap7a3c0f76eb3a45d5b524c2bdc27d8326)) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Object\InvalidInstanceOfException($value ?? null, ...array (
  0 => 'GetMediaBuysResponse_FrequencyCap',
  1 => 'GetMediaBuysResponse_GetMediaBuysResponse_FrequencyCap7a3c0f76eb3a45d5b524c2bdc27d8326',
)));
}

                

                
                    $compositionErrorCollection[] = $this->_errorRegistry;

                    
                        if (isset($validatorIndex)) {
                            $this->_propertyValidationState[$validatorIndex][$validatorComponentIndex] = $this->_errorRegistry;
                        }
                    

                    // an error inside the composed validation occurred. Throw an exception to count the validity of the
                    // composition item
                    if ($this->_errorRegistry->getErrors()) {
                        throw new \Exception();
                    }
                

                
                    $proposedValue = $proposedValue ?? $value;
                

                if (is_object($value) && is_array($originalModelData)) {
                    $modifiedValues = array_merge($modifiedValues, $this->_getModifiedValues_d70a6($originalModelData, $value));
                }
            
                
            }
            
        } catch (\Exception $e) {
            

            $succeededCompositionElements--;
        }

        $value = $originalModelData;
        $validatorComponentIndex++;
    

    
        $value = $proposedValue;
    

    
        $this->_errorRegistry = $originalErrorRegistry;
    

    $result = !($succeededCompositionElements > 0);

    
        if ($result) {
            $this->_propertyValidationState = $originalPropertyValidationState;
        }
    

    return $result;
})($value)
) {
        $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\ComposedValue\AnyOfException($value ?? null, ...array (
  0 => 'GetMediaBuysResponse_FrequencyCap',
  1 => $succeededCompositionElements,
  2 => $compositionErrorCollection,
)));
    }

    foreach (array_keys($modifiedModelData) as $property) {
        $modifiedModelData[$property] = $modelData[$property];
    }
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
    

    
        
            if (array_key_exists('suppress', $modelData) &&
                $modelData['suppress'] !== $this->suppress
            ) {
                $this->validateComposition_0($modelData);



                $rollbackValues['suppress'] = $this->suppress;
                $this->processSuppress($modelData);
            }
        
    
        
            if (array_key_exists('suppress_minutes', $modelData) &&
                $modelData['suppress_minutes'] !== $this->suppressMinutes
            ) {
                $this->validateComposition_0($modelData);



                $rollbackValues['suppressMinutes'] = $this->suppressMinutes;
                $this->processSuppressMinutes($modelData);
            }
        
    
        
            if (array_key_exists('max_impressions', $modelData) &&
                $modelData['max_impressions'] !== $this->maxImpressions
            ) {
                $this->validateComposition_0($modelData);



                $rollbackValues['maxImpressions'] = $this->maxImpressions;
                $this->processMaxImpressions($modelData);
            }
        
    
        
            if (array_key_exists('per', $modelData) &&
                $modelData['per'] !== $this->per
            ) {
                



                $rollbackValues['per'] = $this->per;
                $this->processPer($modelData);
            }
        
    
        
            if (array_key_exists('window', $modelData) &&
                $modelData['window'] !== $this->window
            ) {
                



                $rollbackValues['window'] = $this->window;
                $this->processWindow($modelData);
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


private function validateSuppress_ComposedProperty_6b9cc5f09155e37d20e472e12c6d2e94(&$value, $modelData): void {
                    
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
    $succeededCompositionElements = 1;
    $validatorComponentIndex = 0;
    $originalModelData = $value;
    $proposedValue = null;
    $modifiedValues = [];

    

    
        $originalErrorRegistry = $this->_errorRegistry;
    

    
        try {
            

                
                    // collect errors for each composition element
                    $this->_errorRegistry = new ErrorRegistryException();
                

                

                $value = (function ($value) {
    try {
        return is_array($value) ? new GetMediaBuysResponse_Duration($value) : $value;
    } catch (\Exception $instantiationException) {
        
            
                foreach($instantiationException->getErrors() as $nestedValidationError) {
                    $this->_errorRegistry->addError($nestedValidationError);
                }
            
        

        
            return $instantiationException;
        
    }
})($value)
;

                
                    

if ((!is_object($value) && !$value instanceof UnitEnum) ) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Generic\InvalidTypeException($value ?? null, ...array (
  0 => 'suppress',
  1 => 'object',
)));
}

                
                    

if (is_object($value) && !($value instanceof \Exception) && !($value instanceof GetMediaBuysResponse_Duration)) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Object\InvalidInstanceOfException($value ?? null, ...array (
  0 => 'suppress',
  1 => 'GetMediaBuysResponse_Duration',
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
                    $modifiedValues = array_merge($modifiedValues, $this->_getModifiedValues_c272c($originalModelData, $value));
                }
            
        } catch (\Exception $e) {
            

            $succeededCompositionElements--;
        }

        $value = $originalModelData;
        $validatorComponentIndex++;
    

    
        if (is_object($proposedValue)) {
            if ($modifiedValues) {
                $value = array_merge($value, $modifiedValues);
            }

            $value = (function ($value) {
    try {
        return is_array($value) ? new GetMediaBuysResponse_Duration($value) : $value;
    } catch (\Exception $instantiationException) {
        
            
                foreach($instantiationException->getErrors() as $nestedValidationError) {
                    $this->_errorRegistry->addError($nestedValidationError);
                }
            
        

        
            return $instantiationException;
        
    }
})($value)
;
        } else {
            $value = $proposedValue;
        }
    

    
        $this->_errorRegistry = $originalErrorRegistry;
    

    $result = !($succeededCompositionElements === 1);

    

    return $result;
})($value)
) {
                        $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\ComposedValue\AllOfException($value ?? null, ...array (
  0 => 'suppress',
  1 => $succeededCompositionElements,
  2 => $compositionErrorCollection,
)));
                    }
                }

private function validatePer_ComposedProperty_974da636454815481b34df6f5da8dd4a(&$value, $modelData): void {
                    
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
    $succeededCompositionElements = 1;
    $validatorComponentIndex = 0;
    $originalModelData = $value;
    $proposedValue = null;
    $modifiedValues = [];

    

    
        $originalErrorRegistry = $this->_errorRegistry;
    

    
        try {
            

                
                    // collect errors for each composition element
                    $this->_errorRegistry = new ErrorRegistryException();
                

                

                

                
                    

if ($value instanceof UnitEnum && !($value instanceof ReachUnit)) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Generic\InvalidTypeException($value ?? null, ...array (
  0 => 'per',
  1 => 'ReachUnit',
)));
}

                
                    

if ((!is_string($value) && !$value instanceof UnitEnum) ) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Generic\InvalidTypeException($value ?? null, ...array (
  0 => 'per',
  1 => 'string',
)));
}

                
                    

if (!($value instanceof UnitEnum) && !in_array($value, array (
   'individuals',
   'households',
   'devices',
   'accounts',
   'cookies',
   'custom',
), true)) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Generic\EnumException($value ?? null, ...array (
  0 => 'per',
  1 => 
  array (
    0 => 'individuals',
    1 => 'households',
    2 => 'devices',
    3 => 'accounts',
    4 => 'cookies',
    5 => 'custom',
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
  'fqcn' => 'AdCP\\MediaBuy\\Enums\\ReachUnit',
));
        } catch (\Throwable $filterException) {
            
                $transformationFailed = true;
            

            $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Filter\InvalidFilterValueException($value ?? null, ...array (
  0 => 'per',
  1 => 'php_model_generator_enum',
  2 => $filterException,
)));
        }

        return false;
    })($value)
)) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Filter\IncompatibleFilterException($value ?? null, ...array (
  0 => 'per',
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
                    $modifiedValues = array_merge($modifiedValues, $this->_getModifiedValues_7a561($originalModelData, $value));
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
                        $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\ComposedValue\AllOfException($value ?? null, ...array (
  0 => 'per',
  1 => $succeededCompositionElements,
  2 => $compositionErrorCollection,
)));
                    }
                }

private function validateWindow_ComposedProperty_f6c43a9e2a7ed2703b48ffe153e0d9e1(&$value, $modelData): void {
                    
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
    $succeededCompositionElements = 1;
    $validatorComponentIndex = 0;
    $originalModelData = $value;
    $proposedValue = null;
    $modifiedValues = [];

    

    
        $originalErrorRegistry = $this->_errorRegistry;
    

    
        try {
            

                
                    // collect errors for each composition element
                    $this->_errorRegistry = new ErrorRegistryException();
                

                

                $value = (function ($value) {
    try {
        return is_array($value) ? new GetMediaBuysResponse_Duration($value) : $value;
    } catch (\Exception $instantiationException) {
        
            
                foreach($instantiationException->getErrors() as $nestedValidationError) {
                    $this->_errorRegistry->addError($nestedValidationError);
                }
            
        

        
            return $instantiationException;
        
    }
})($value)
;

                
                    

if ((!is_object($value) && !$value instanceof UnitEnum) ) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Generic\InvalidTypeException($value ?? null, ...array (
  0 => 'window',
  1 => 'object',
)));
}

                
                    

if (is_object($value) && !($value instanceof \Exception) && !($value instanceof GetMediaBuysResponse_Duration)) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Object\InvalidInstanceOfException($value ?? null, ...array (
  0 => 'window',
  1 => 'GetMediaBuysResponse_Duration',
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
                    $modifiedValues = array_merge($modifiedValues, $this->_getModifiedValues_f2836($originalModelData, $value));
                }
            
        } catch (\Exception $e) {
            

            $succeededCompositionElements--;
        }

        $value = $originalModelData;
        $validatorComponentIndex++;
    

    
        if (is_object($proposedValue)) {
            if ($modifiedValues) {
                $value = array_merge($value, $modifiedValues);
            }

            $value = (function ($value) {
    try {
        return is_array($value) ? new GetMediaBuysResponse_Duration($value) : $value;
    } catch (\Exception $instantiationException) {
        
            
                foreach($instantiationException->getErrors() as $nestedValidationError) {
                    $this->_errorRegistry->addError($nestedValidationError);
                }
            
        

        
            return $instantiationException;
        
    }
})($value)
;
        } else {
            $value = $proposedValue;
        }
    

    
        $this->_errorRegistry = $originalErrorRegistry;
    

    $result = !($succeededCompositionElements === 1);

    

    return $result;
})($value)
) {
                        $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\ComposedValue\AllOfException($value ?? null, ...array (
  0 => 'window',
  1 => $succeededCompositionElements,
  2 => $compositionErrorCollection,
)));
                    }
                }


                        private function _getModifiedValues_d70a6(array $originalModelData, object $nestedCompositionObject): array {
                            $modifiedValues = [];
                            $defaultValueMap = array (
  0 => 'skipNotProvidedPropertiesMap',
  1 => 'skipNotProvidedPropertiesMap',
  2 => 'skipNotProvidedPropertiesMap',
);
    
                            foreach (array (
  'suppress' => 'getSuppress',
  'skipNotProvidedPropertiesMap' => 'get_skipNotProvidedPropertiesMap',
  'suppress_minutes' => 'getSuppressMinutes',
  'max_impressions' => 'getMaxImpressions',
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


                        private function _getModifiedValues_c272c(array $originalModelData, object $nestedCompositionObject): array {
                            $modifiedValues = [];
                            $defaultValueMap = array (
  0 => 'skipNotProvidedPropertiesMap',
);
    
                            foreach (array (
  'interval' => 'getInterval',
  'unit' => 'getUnit',
  'skipNotProvidedPropertiesMap' => 'get_skipNotProvidedPropertiesMap',
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


                        private function _getModifiedValues_7a561(array $originalModelData, object $nestedCompositionObject): array {
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


                        private function _getModifiedValues_f2836(array $originalModelData, object $nestedCompositionObject): array {
                            $modifiedValues = [];
                            $defaultValueMap = array (
  0 => 'skipNotProvidedPropertiesMap',
);
    
                            foreach (array (
  'interval' => 'getInterval',
  'unit' => 'getUnit',
  'skipNotProvidedPropertiesMap' => 'get_skipNotProvidedPropertiesMap',
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
