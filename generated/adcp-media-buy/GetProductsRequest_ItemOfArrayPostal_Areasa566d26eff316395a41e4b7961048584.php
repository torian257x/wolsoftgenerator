<?php

// @codingStandardsIgnoreFile
// @codeCoverageIgnoreStart

declare(strict_types = 1);


    namespace AdCP\MediaBuy;



    use PHPModelGenerator\Interfaces\JSONModelInterface;

    use UnitEnum;

    use AdCP\MediaBuy\Enums\PostalCodeSystem;

    use PHPModelGenerator\Traits\SerializableTrait;

    use JsonSerializable;

    use PHPModelGenerator\Interfaces\SerializationInterface;

    use PHPModelGenerator\Attributes\JsonPointer;

    use PHPModelGenerator\Attributes\SchemaName;

    use PHPModelGenerator\Attributes\Required;

    use PHPModelGenerator\Attributes\Internal;

    use PHPModelGenerator\Exception\ErrorRegistryException;


/**
 * Class GetProductsRequest_ItemOfArrayPostal_Areasa566d26eff316395a41e4b7961048584
 * @package AdCP\MediaBuy 
 *

 * This is an auto-implemented class implemented by the php-json-schema-model-generator.
 * If you need to implement something in this class use inheritance. Else you will lose your changes if the classes
 * are re-generated.
 */

#[JsonPointer('/properties/filters/properties/postal_areas/items')]

class GetProductsRequest_ItemOfArrayPostal_Areasa566d26eff316395a41e4b7961048584 implements JSONModelInterface, JsonSerializable, SerializationInterface
{
    use SerializableTrait;

    
        
            #[JsonPointer('/properties/filters/properties/postal_areas/items/properties/system')]
        
            #[SchemaName('system')]
        
            #[Required]
        
        /** @var PostalCodeSystem Postal code system (e.g., 'us_zip', 'gb_outward') */
        protected $system;
    
        
            #[JsonPointer('/properties/filters/properties/postal_areas/items/properties/values')]
        
            #[SchemaName('values')]
        
            #[Required]
        
        /** @var string[] Postal codes within the system (e.g., ['10001', '10002'] for us_zip) */
        protected $values;
    
        
            #[Internal]
        
        /** @var array Values which might be skipped for serialization if not provided */
        private $_skipNotProvidedPropertiesMap = array (
);
    
    #[Internal]
    /** @var array */
    protected $_rawModelDataInput = [];

    
        #[Internal]
        /** @var ErrorRegistryException Collect all validation errors */
        protected $_errorRegistry;
    

    /**
     * GetProductsRequest_ItemOfArrayPostal_Areasa566d26eff316395a41e4b7961048584 constructor.
     *
     * @param array $rawModelDataInput
     *
     * @throws ErrorRegistryException
     */
    public function __construct(array $rawModelDataInput = [])
    {
        
            $this->_errorRegistry = new ErrorRegistryException();
        

        

        
            $this->executeBaseValidators($rawModelDataInput);
        

        
            
                $this->processSystem($rawModelDataInput);
            
        
            
                $this->processValues($rawModelDataInput);
            
        
            
        

        
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
   'system',
   'values',
));

    

    return $additionalProperties;
})()) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Object\AdditionalPropertiesException($value ?? null, ...array (
  0 => 'GetProductsRequest_ItemOfArrayPostal_Areasa566d26eff316395a41e4b7961048584',
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
                 * Get the value of system.
                 *
                 * Postal code system (e.g., 'us_zip', 'gb_outward')
                 *
                 * @return PostalCodeSystem
                 */
                public function getSystem(): PostalCodeSystem
                {
                    

                    return $this->system;
                }
            

            
                /**
                 * Set the value of system.
                 *
                 * @param string|PostalCodeSystem $system Postal code system (e.g., 'us_zip', 'gb_outward')
                 *
                 * @throws ErrorRegistryException
                 *
                 * @return static
                 */
                public function setSystem(
                    string | PostalCodeSystem $system
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
                

                $value = array_key_exists('system', $modelData) ? $modelData['system'] : $this->system;

                

                $this->system = $this->validateSystem($value, $modelData);
            }

            /**
             * Execute all validators for the property system
             */
            protected function validateSystem($value, array $modelData)
            {
                
                    

if ($value instanceof UnitEnum && !($value instanceof PostalCodeSystem)) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Generic\InvalidTypeException($value ?? null, ...array (
  0 => 'system',
  1 => 'PostalCodeSystem',
)));
}

                
                    

if (!array_key_exists('system', $modelData)) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Object\RequiredValueException($value ?? null, ...array (
  0 => 'system',
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

                

                return $value;
            }
        
    
        
            
                /**
                 * Get the value of values.
                 *
                 * Postal codes within the system (e.g., ['10001', '10002'] for us_zip)
                 *
                 * @return string[]
                 */
                public function getValues(): array
                {
                    

                    return $this->values;
                }
            

            
                /**
                 * Set the value of values.
                 *
                 * @param string[] $values Postal codes within the system (e.g., ['10001', '10002'] for us_zip)
                 *
                 * @throws ErrorRegistryException
                 *
                 * @return static
                 */
                public function setValues(
                    array $values
                ): static {
                    if ($this->values === $values) {
                        return $this;
                    }

                    $value = $modelData['values'] = $values;

                    
                        $this->_errorRegistry = new ErrorRegistryException();
                    

                    

                    $value = $this->validateValues($value, $modelData);

                    
                        if ($this->_errorRegistry->getErrors()) {
                            throw $this->_errorRegistry;
                        }
                    

                    $this->values = $value;
                    $this->_rawModelDataInput['values'] = $values;

                    

                    return $this;
                }
            

            /**
             * Extract the value, perform validations and set the property values
             *
             * @param array $modelData
             *
             * @throws ErrorRegistryException
             */
            protected function processValues(array $modelData): void
            {
                

                $value = array_key_exists('values', $modelData) ? $modelData['values'] : $this->values;

                

                $this->values = $this->validateValues($value, $modelData);
            }

            /**
             * Execute all validators for the property values
             */
            protected function validateValues($value, array $modelData)
            {
                
                    

if (!array_key_exists('values', $modelData)) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Object\RequiredValueException($value ?? null, ...array (
  0 => 'values',
)));
}

                
                    

if ((!is_array($value) && !$value instanceof UnitEnum) ) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Generic\InvalidTypeException($value ?? null, ...array (
  0 => 'values',
  1 => 'array',
)));
}

                
                    $this->validateValues_ArrayItem_2c2c789bfb38e7ea538f81b276858b5b($value, $modelData);
                
                    

if (is_array($value) && count($value) < 1) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Arrays\MinItemsException($value ?? null, ...array (
  0 => 'values',
  1 => 1,
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
    

    
        
            if (array_key_exists('system', $modelData) &&
                $modelData['system'] !== $this->system
            ) {
                

                $rollbackValues['system'] = $this->system;
                $this->processSystem($modelData);
            }
        
    
        
            if (array_key_exists('values', $modelData) &&
                $modelData['values'] !== $this->values
            ) {
                

                $rollbackValues['values'] = $this->values;
                $this->processValues($modelData);
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
 * serialize the property system
 */
protected function serializeSystem()
{
    return \PHPModelGenerator\Filter\Enum::serialize($this->system, array (
  'fqcn' => 'AdCP\\MediaBuy\\Enums\\PostalCodeSystem',
));
}




private function validateValues_ArrayItem_2c2c789bfb38e7ea538f81b276858b5b(&$value, $modelData): void {
                    $invalidItems_5c553cd2a126a222f1325f20e5aed51f = [];
                    
                    if (is_array($value) && (function (&$items) use (&$invalidItems_5c553cd2a126a222f1325f20e5aed51f, $modelData) {
    
        $originalErrorRegistry = $this->_errorRegistry;
    

    foreach ($items as $index => &$value) {
        
            $this->_errorRegistry = new ErrorRegistryException();
        

        try {
            

            
                

if ((!is_string($value) && !$value instanceof UnitEnum) ) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Generic\InvalidTypeException($value ?? null, ...array (
  0 => 'item of array values',
  1 => 'string',
)));
}

            

            
                if ($this->_errorRegistry->getErrors()) {
                    $invalidItems_5c553cd2a126a222f1325f20e5aed51f[$index] = $this->_errorRegistry->getErrors();
                }
            
        } catch (\Exception $e) {
            // collect all errors concerning invalid items
            isset($invalidItems_5c553cd2a126a222f1325f20e5aed51f[$index])
                ? $invalidItems_5c553cd2a126a222f1325f20e5aed51f[$index][] = $e
                : $invalidItems_5c553cd2a126a222f1325f20e5aed51f[$index] = [$e];
        }
    }

    
        $this->_errorRegistry = $originalErrorRegistry;
    

    return !empty($invalidItems_5c553cd2a126a222f1325f20e5aed51f);
})($value)) {
                        $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Arrays\InvalidItemException($value ?? null, ...array (
  0 => 'values',
  1 => $invalidItems_5c553cd2a126a222f1325f20e5aed51f,
)));
                    }
                }


}

// @codeCoverageIgnoreEnd
