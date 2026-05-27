<?php

// @codingStandardsIgnoreFile
// @codeCoverageIgnoreStart

declare(strict_types = 1);


    namespace AdCP\MediaBuy;



    use PHPModelGenerator\Interfaces\JSONModelInterface;

    use UnitEnum;

    use AdCP\MediaBuy\Enums\DayOfWeek;

    use PHPModelGenerator\Traits\SerializableTrait;

    use JsonSerializable;

    use PHPModelGenerator\Interfaces\SerializationInterface;

    use PHPModelGenerator\Attributes\JsonPointer;

    use PHPModelGenerator\Attributes\SchemaName;

    use PHPModelGenerator\Attributes\Required;

    use PHPModelGenerator\Attributes\Internal;

    use PHPModelGenerator\Exception\ErrorRegistryException;


/**
 * Class GetMediaBuysResponse_DaypartTarget
 * @package AdCP\MediaBuy 
 *
 * A time window for daypart targeting. Specifies days of week and an hour range. start_hour is inclusive, end_hour is exclusive (e.g., 6-10 = 6:00am to 10:00am). Follows the Google Ads AdScheduleInfo / DV360 DayPartTargeting pattern.
 *
 * This is an auto-implemented class implemented by the php-json-schema-model-generator.
 * If you need to implement something in this class use inheritance. Else you will lose your changes if the classes
 * are re-generated.
 */

#[JsonPointer('/properties/media_buys/items/properties/packages/items/properties/targeting_overlay/properties/daypart_targets/items')]

class GetMediaBuysResponse_DaypartTarget implements JSONModelInterface, JsonSerializable, SerializationInterface
{
    use SerializableTrait;

    
        
            #[JsonPointer('/properties/media_buys/items/properties/packages/items/properties/targeting_overlay/properties/daypart_targets/items/properties/days')]
        
            #[SchemaName('days')]
        
            #[Required]
        
        /** @var DayOfWeek[] Days of week this window applies to. Use multiple days for compact targeting (e.g., monday-friday in one object). */
        protected $days;
    
        
            #[JsonPointer('/properties/media_buys/items/properties/packages/items/properties/targeting_overlay/properties/daypart_targets/items/properties/start_hour')]
        
            #[SchemaName('start_hour')]
        
            #[Required]
        
        /** @var int Start hour (inclusive), 0-23 in 24-hour format. 0 = midnight, 6 = 6:00am, 18 = 6:00pm. */
        protected $startHour;
    
        
            #[JsonPointer('/properties/media_buys/items/properties/packages/items/properties/targeting_overlay/properties/daypart_targets/items/properties/end_hour')]
        
            #[SchemaName('end_hour')]
        
            #[Required]
        
        /** @var int End hour (exclusive), 1-24 in 24-hour format. 10 = 10:00am, 24 = midnight. Must be greater than start_hour. */
        protected $endHour;
    
        
            #[JsonPointer('/properties/media_buys/items/properties/packages/items/properties/targeting_overlay/properties/daypart_targets/items/properties/label')]
        
            #[SchemaName('label')]
        
        /** @var string|null Optional human-readable name for this time window (e.g., 'Morning Drive', 'Prime Time') */
        protected $label;
    
        
            #[Internal]
        
        /** @var array Values which might be skipped for serialization if not provided */
        private $_skipNotProvidedPropertiesMap = array (
  3 => 'label',
);
    
    #[Internal]
    /** @var array */
    protected $_rawModelDataInput = [];

    
        #[Internal]
        /** @var ErrorRegistryException Collect all validation errors */
        protected $_errorRegistry;
    

    /**
     * GetMediaBuysResponse_DaypartTarget constructor.
     *
     * @param array $rawModelDataInput
     *
     * @throws ErrorRegistryException
     */
    public function __construct(array $rawModelDataInput = [])
    {
        
            $this->_errorRegistry = new ErrorRegistryException();
        

        

        
            $this->executeBaseValidators($rawModelDataInput);
        

        
            
                $this->processDays($rawModelDataInput);
            
        
            
                $this->processStartHour($rawModelDataInput);
            
        
            
                $this->processEndHour($rawModelDataInput);
            
        
            
                $this->processLabel($rawModelDataInput);
            
        
            
        

        
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
   'days',
   'start_hour',
   'end_hour',
   'label',
));

    

    return $additionalProperties;
})()) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Object\AdditionalPropertiesException($value ?? null, ...array (
  0 => 'GetMediaBuysResponse_DaypartTarget',
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
                 * Get the value of days.
                 *
                 * Days of week this window applies to. Use multiple days for compact targeting (e.g., monday-friday in one object).
                 *
                 * @return DayOfWeek[]
                 */
                public function getDays(): array | DayOfWeek
                {
                    

                    return $this->days;
                }
            

            
                /**
                 * Set the value of days.
                 *
                 * @param string[]|DayOfWeek[] $days Days of week this window applies to. Use multiple days for compact targeting (e.g., monday-friday in one object).
                 *
                 * @throws ErrorRegistryException
                 *
                 * @return static
                 */
                public function setDays(
                    array | DayOfWeek $days
                ): static {
                    if ($this->days === $days) {
                        return $this;
                    }

                    $value = $modelData['days'] = $days;

                    
                        $this->_errorRegistry = new ErrorRegistryException();
                    

                    

                    $value = $this->validateDays($value, $modelData);

                    
                        if ($this->_errorRegistry->getErrors()) {
                            throw $this->_errorRegistry;
                        }
                    

                    $this->days = $value;
                    $this->_rawModelDataInput['days'] = $days;

                    

                    return $this;
                }
            

            /**
             * Extract the value, perform validations and set the property days
             *
             * @param array $modelData
             *
             * @throws ErrorRegistryException
             */
            protected function processDays(array $modelData): void
            {
                

                $value = array_key_exists('days', $modelData) ? $modelData['days'] : $this->days;

                

                $this->days = $this->validateDays($value, $modelData);
            }

            /**
             * Execute all validators for the property days
             */
            protected function validateDays($value, array $modelData)
            {
                
                    

if (!array_key_exists('days', $modelData)) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Object\RequiredValueException($value ?? null, ...array (
  0 => 'days',
)));
}

                
                    

if ((!is_array($value) && !$value instanceof UnitEnum) ) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Generic\InvalidTypeException($value ?? null, ...array (
  0 => 'days',
  1 => 'array',
)));
}

                
                    $this->validateDays_ArrayItem_829fbb4c7e3612d9a7d5dd260866bd4b($value, $modelData);
                
                    

if (is_array($value) && count($value) < 1) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Arrays\MinItemsException($value ?? null, ...array (
  0 => 'days',
  1 => 1,
)));
}

                

                return $value;
            }
        
    
        
            
                /**
                 * Get the value of start_hour.
                 *
                 * Start hour (inclusive), 0-23 in 24-hour format. 0 = midnight, 6 = 6:00am, 18 = 6:00pm.
                 *
                 * @return int
                 */
                public function getStartHour(): int
                {
                    

                    return $this->startHour;
                }
            

            
                /**
                 * Set the value of start_hour.
                 *
                 * @param int $startHour Start hour (inclusive), 0-23 in 24-hour format. 0 = midnight, 6 = 6:00am, 18 = 6:00pm.
                 *
                 * @throws ErrorRegistryException
                 *
                 * @return static
                 */
                public function setStartHour(
                    int $startHour
                ): static {
                    if ($this->startHour === $startHour) {
                        return $this;
                    }

                    $value = $modelData['start_hour'] = $startHour;

                    
                        $this->_errorRegistry = new ErrorRegistryException();
                    

                    

                    $value = $this->validateStartHour($value, $modelData);

                    
                        if ($this->_errorRegistry->getErrors()) {
                            throw $this->_errorRegistry;
                        }
                    

                    $this->startHour = $value;
                    $this->_rawModelDataInput['start_hour'] = $startHour;

                    

                    return $this;
                }
            

            /**
             * Extract the value, perform validations and set the property startHour
             *
             * @param array $modelData
             *
             * @throws ErrorRegistryException
             */
            protected function processStartHour(array $modelData): void
            {
                

                $value = array_key_exists('start_hour', $modelData) ? $modelData['start_hour'] : $this->startHour;

                

                $this->startHour = $this->validateStartHour($value, $modelData);
            }

            /**
             * Execute all validators for the property startHour
             */
            protected function validateStartHour($value, array $modelData)
            {
                
                    

if (!array_key_exists('start_hour', $modelData)) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Object\RequiredValueException($value ?? null, ...array (
  0 => 'start_hour',
)));
}

                
                    

if ((!is_int($value) && !$value instanceof UnitEnum) ) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Generic\InvalidTypeException($value ?? null, ...array (
  0 => 'start_hour',
  1 => 'int',
)));
}

                
                    

if (is_int($value) && $value < 0) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Number\MinimumException($value ?? null, ...array (
  0 => 'start_hour',
  1 => 0,
)));
}

                
                    

if (is_int($value) && $value > 23) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Number\MaximumException($value ?? null, ...array (
  0 => 'start_hour',
  1 => 23,
)));
}

                

                return $value;
            }
        
    
        
            
                /**
                 * Get the value of end_hour.
                 *
                 * End hour (exclusive), 1-24 in 24-hour format. 10 = 10:00am, 24 = midnight. Must be greater than start_hour.
                 *
                 * @return int
                 */
                public function getEndHour(): int
                {
                    

                    return $this->endHour;
                }
            

            
                /**
                 * Set the value of end_hour.
                 *
                 * @param int $endHour End hour (exclusive), 1-24 in 24-hour format. 10 = 10:00am, 24 = midnight. Must be greater than start_hour.
                 *
                 * @throws ErrorRegistryException
                 *
                 * @return static
                 */
                public function setEndHour(
                    int $endHour
                ): static {
                    if ($this->endHour === $endHour) {
                        return $this;
                    }

                    $value = $modelData['end_hour'] = $endHour;

                    
                        $this->_errorRegistry = new ErrorRegistryException();
                    

                    

                    $value = $this->validateEndHour($value, $modelData);

                    
                        if ($this->_errorRegistry->getErrors()) {
                            throw $this->_errorRegistry;
                        }
                    

                    $this->endHour = $value;
                    $this->_rawModelDataInput['end_hour'] = $endHour;

                    

                    return $this;
                }
            

            /**
             * Extract the value, perform validations and set the property endHour
             *
             * @param array $modelData
             *
             * @throws ErrorRegistryException
             */
            protected function processEndHour(array $modelData): void
            {
                

                $value = array_key_exists('end_hour', $modelData) ? $modelData['end_hour'] : $this->endHour;

                

                $this->endHour = $this->validateEndHour($value, $modelData);
            }

            /**
             * Execute all validators for the property endHour
             */
            protected function validateEndHour($value, array $modelData)
            {
                
                    

if (!array_key_exists('end_hour', $modelData)) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Object\RequiredValueException($value ?? null, ...array (
  0 => 'end_hour',
)));
}

                
                    

if ((!is_int($value) && !$value instanceof UnitEnum) ) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Generic\InvalidTypeException($value ?? null, ...array (
  0 => 'end_hour',
  1 => 'int',
)));
}

                
                    

if (is_int($value) && $value < 1) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Number\MinimumException($value ?? null, ...array (
  0 => 'end_hour',
  1 => 1,
)));
}

                
                    

if (is_int($value) && $value > 24) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Number\MaximumException($value ?? null, ...array (
  0 => 'end_hour',
  1 => 24,
)));
}

                

                return $value;
            }
        
    
        
            
                /**
                 * Get the value of label.
                 *
                 * Optional human-readable name for this time window (e.g., 'Morning Drive', 'Prime Time')
                 *
                 * @return string|null
                 */
                public function getLabel(): ?string
                {
                    

                    return $this->label;
                }
            

            
                /**
                 * Set the value of label.
                 *
                 * @param string $label Optional human-readable name for this time window (e.g., 'Morning Drive', 'Prime Time')
                 *
                 * @throws ErrorRegistryException
                 *
                 * @return static
                 */
                public function setLabel(
                    string $label
                ): static {
                    if ($this->label === $label) {
                        return $this;
                    }

                    $value = $modelData['label'] = $label;

                    
                        $this->_errorRegistry = new ErrorRegistryException();
                    

                    

                    $value = $this->validateLabel($value, $modelData);

                    
                        if ($this->_errorRegistry->getErrors()) {
                            throw $this->_errorRegistry;
                        }
                    

                    $this->label = $value;
                    $this->_rawModelDataInput['label'] = $label;

                    

                    return $this;
                }
            

            /**
             * Extract the value, perform validations and set the property label
             *
             * @param array $modelData
             *
             * @throws ErrorRegistryException
             */
            protected function processLabel(array $modelData): void
            {
                
                    if (!array_key_exists('label', $modelData) && $this->label === null) {
                        return;
                    }
                

                $value = array_key_exists('label', $modelData) ? $modelData['label'] : $this->label;

                

                $this->label = $this->validateLabel($value, $modelData);
            }

            /**
             * Execute all validators for the property label
             */
            protected function validateLabel($value, array $modelData)
            {
                
                    

if ((!is_string($value) && !$value instanceof UnitEnum) ) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Generic\InvalidTypeException($value ?? null, ...array (
  0 => 'label',
  1 => 'string',
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
    

    
        
            if (array_key_exists('days', $modelData) &&
                $modelData['days'] !== $this->days
            ) {
                

                $rollbackValues['days'] = $this->days;
                $this->processDays($modelData);
            }
        
    
        
            if (array_key_exists('start_hour', $modelData) &&
                $modelData['start_hour'] !== $this->startHour
            ) {
                

                $rollbackValues['startHour'] = $this->startHour;
                $this->processStartHour($modelData);
            }
        
    
        
            if (array_key_exists('end_hour', $modelData) &&
                $modelData['end_hour'] !== $this->endHour
            ) {
                

                $rollbackValues['endHour'] = $this->endHour;
                $this->processEndHour($modelData);
            }
        
    
        
            if (array_key_exists('label', $modelData) &&
                $modelData['label'] !== $this->label
            ) {
                

                $rollbackValues['label'] = $this->label;
                $this->processLabel($modelData);
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




private function validateDays_ArrayItem_829fbb4c7e3612d9a7d5dd260866bd4b(&$value, $modelData): void {
                    $invalidItems_3ab55d221cf09f048afd38542f5f41c7 = [];
                    
                    if (is_array($value) && (function (&$items) use (&$invalidItems_3ab55d221cf09f048afd38542f5f41c7, $modelData) {
    
        $originalErrorRegistry = $this->_errorRegistry;
    

    foreach ($items as $index => &$value) {
        
            $this->_errorRegistry = new ErrorRegistryException();
        

        try {
            

            
                

if ($value instanceof UnitEnum && !($value instanceof DayOfWeek)) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Generic\InvalidTypeException($value ?? null, ...array (
  0 => 'item of array days',
  1 => 'DayOfWeek',
)));
}

            
                

if ((!is_string($value) && !$value instanceof UnitEnum) ) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Generic\InvalidTypeException($value ?? null, ...array (
  0 => 'item of array days',
  1 => 'string',
)));
}

            
                

if (!($value instanceof UnitEnum) && !in_array($value, array (
   'monday',
   'tuesday',
   'wednesday',
   'thursday',
   'friday',
   'saturday',
   'sunday',
), true)) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Generic\EnumException($value ?? null, ...array (
  0 => 'item of array days',
  1 => 
  array (
    0 => 'monday',
    1 => 'tuesday',
    2 => 'wednesday',
    3 => 'thursday',
    4 => 'friday',
    5 => 'saturday',
    6 => 'sunday',
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
  'fqcn' => 'AdCP\\MediaBuy\\Enums\\DayOfWeek',
));
        } catch (\Throwable $filterException) {
            
                $transformationFailed = true;
            

            $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Filter\InvalidFilterValueException($value ?? null, ...array (
  0 => 'item of array days',
  1 => 'php_model_generator_enum',
  2 => $filterException,
)));
        }

        return false;
    })($value)
)) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Filter\IncompatibleFilterException($value ?? null, ...array (
  0 => 'item of array days',
  1 => 'php_model_generator_enum',
)));
}

            

            
                if ($this->_errorRegistry->getErrors()) {
                    $invalidItems_3ab55d221cf09f048afd38542f5f41c7[$index] = $this->_errorRegistry->getErrors();
                }
            
        } catch (\Exception $e) {
            // collect all errors concerning invalid items
            isset($invalidItems_3ab55d221cf09f048afd38542f5f41c7[$index])
                ? $invalidItems_3ab55d221cf09f048afd38542f5f41c7[$index][] = $e
                : $invalidItems_3ab55d221cf09f048afd38542f5f41c7[$index] = [$e];
        }
    }

    
        $this->_errorRegistry = $originalErrorRegistry;
    

    return !empty($invalidItems_3ab55d221cf09f048afd38542f5f41c7);
})($value)) {
                        $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Arrays\InvalidItemException($value ?? null, ...array (
  0 => 'days',
  1 => $invalidItems_3ab55d221cf09f048afd38542f5f41c7,
)));
                    }
                }


}

// @codeCoverageIgnoreEnd
