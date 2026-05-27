<?php

// @codingStandardsIgnoreFile
// @codeCoverageIgnoreStart

declare(strict_types = 1);


    namespace AdCP\MediaBuy;



    use PHPModelGenerator\Interfaces\JSONModelInterface;

    use PHPModelGenerator\Traits\SerializableTrait;

    use JsonSerializable;

    use PHPModelGenerator\Interfaces\SerializationInterface;

    use UnitEnum;

    use AdCP\MediaBuy\Enums\DisclosurePersistence;

    use AdCP\MediaBuy\Enums\DisclosurePosition;

    use PHPModelGenerator\Attributes\JsonPointer;

    use PHPModelGenerator\Attributes\SchemaName;

    use PHPModelGenerator\Attributes\Required;

    use PHPModelGenerator\Attributes\Internal;

    use PHPModelGenerator\Exception\ErrorRegistryException;


/**
 * Class GetMediaBuysRequest_Disclosure0b892187b12d721c20d573c7ec349c30
 * @package AdCP\MediaBuy 
 *
 * Regulatory disclosure requirements for this content. Indicates whether AI disclosure is required and under which jurisdictions.
 *
 * This is an auto-implemented class implemented by the php-json-schema-model-generator.
 * If you need to implement something in this class use inheritance. Else you will lose your changes if the classes
 * are re-generated.
 */

#[JsonPointer('/properties/account/oneOf/1/properties/brand/properties/brand_kit_override/properties/logo/properties/provenance/properties/disclosure')]

class GetMediaBuysRequest_Disclosure0b892187b12d721c20d573c7ec349c30 implements JSONModelInterface, JsonSerializable, SerializationInterface
{
    use SerializableTrait;

    
        
            #[JsonPointer('/properties/account/oneOf/1/properties/brand/properties/brand_kit_override/properties/logo/properties/provenance/properties/disclosure/properties/required')]
        
            #[SchemaName('required')]
        
            #[Required]
        
        /** @var bool The declaring party's claim that AI disclosure is required for this content under applicable regulations. This is a declared signal carried through the supply chain — useful as a routing and audit input — not a regulatory determination made by the protocol. Receiving parties remain responsible for their own jurisdictional analysis and should not treat `required: false` as compliance cover. */
        protected $required;
    
        
            #[JsonPointer('/properties/account/oneOf/1/properties/brand/properties/brand_kit_override/properties/logo/properties/provenance/properties/disclosure/properties/jurisdictions')]
        
            #[SchemaName('jurisdictions')]
        
        /** @var GetMediaBuysRequest_ItemOfArrayJurisdictions8bf29d4207dd31b988e71fd7e02eded3[]|null Jurisdictions where disclosure obligations apply */
        protected $jurisdictions;
    
        
            #[Internal]
        
        /** @var array Collect all additional properties provided to the schema */
        private $_additionalProperties = array (
);
    
        
            #[Internal]
        
        /** @var array Values which might be skipped for serialization if not provided */
        private $_skipNotProvidedPropertiesMap = array (
  1 => 'jurisdictions',
);
    
    #[Internal]
    /** @var array */
    protected $_rawModelDataInput = [];

    
        #[Internal]
        /** @var ErrorRegistryException Collect all validation errors */
        protected $_errorRegistry;
    

    /**
     * GetMediaBuysRequest_Disclosure0b892187b12d721c20d573c7ec349c30 constructor.
     *
     * @param array $rawModelDataInput
     *
     * @throws ErrorRegistryException
     */
    public function __construct(array $rawModelDataInput = [])
    {
        
            $this->_errorRegistry = new ErrorRegistryException();
        

        

        
            $this->executeBaseValidators($rawModelDataInput);
        

        
            
                $this->processRequired($rawModelDataInput);
            
        
            
                $this->processJurisdictions($rawModelDataInput);
            
        
            
        
            
        

        
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
   'required',
   'jurisdictions',
)) as $propertyKey) {
        

        $this->_additionalProperties[$propertyKey] = $value[$propertyKey];
    }

    return false;
})()) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Object\InvalidAdditionalPropertiesException($value ?? null, ...array (
  0 => 'GetMediaBuysRequest_Disclosure0b892187b12d721c20d573c7ec349c30',
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
                 * Get the value of required.
                 *
                 * The declaring party's claim that AI disclosure is required for this content under applicable regulations. This is a declared signal carried through the supply chain — useful as a routing and audit input — not a regulatory determination made by the protocol. Receiving parties remain responsible for their own jurisdictional analysis and should not treat `required: false` as compliance cover.
                 *
                 * @return bool
                 */
                public function getRequired(): bool
                {
                    

                    return $this->required;
                }
            

            
                /**
                 * Set the value of required.
                 *
                 * @param bool $required The declaring party's claim that AI disclosure is required for this content under applicable regulations. This is a declared signal carried through the supply chain — useful as a routing and audit input — not a regulatory determination made by the protocol. Receiving parties remain responsible for their own jurisdictional analysis and should not treat `required: false` as compliance cover.
                 *
                 * @throws ErrorRegistryException
                 *
                 * @return static
                 */
                public function setRequired(
                    bool $required
                ): static {
                    if ($this->required === $required) {
                        return $this;
                    }

                    $value = $modelData['required'] = $required;

                    
                        $this->_errorRegistry = new ErrorRegistryException();
                    

                    

                    $value = $this->validateRequired($value, $modelData);

                    
                        if ($this->_errorRegistry->getErrors()) {
                            throw $this->_errorRegistry;
                        }
                    

                    $this->required = $value;
                    $this->_rawModelDataInput['required'] = $required;

                    

                    return $this;
                }
            

            /**
             * Extract the value, perform validations and set the property required
             *
             * @param array $modelData
             *
             * @throws ErrorRegistryException
             */
            protected function processRequired(array $modelData): void
            {
                

                $value = array_key_exists('required', $modelData) ? $modelData['required'] : $this->required;

                

                $this->required = $this->validateRequired($value, $modelData);
            }

            /**
             * Execute all validators for the property required
             */
            protected function validateRequired($value, array $modelData)
            {
                
                    

if (!array_key_exists('required', $modelData)) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Object\RequiredValueException($value ?? null, ...array (
  0 => 'required',
)));
}

                
                    

if ((!is_bool($value) && !$value instanceof UnitEnum) ) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Generic\InvalidTypeException($value ?? null, ...array (
  0 => 'required',
  1 => 'bool',
)));
}

                

                return $value;
            }
        
    
        
            
                /**
                 * Get the value of jurisdictions.
                 *
                 * Jurisdictions where disclosure obligations apply
                 *
                 * @return GetMediaBuysRequest_ItemOfArrayJurisdictions8bf29d4207dd31b988e71fd7e02eded3[]|null
                 */
                public function getJurisdictions(): ?array
                {
                    

                    return $this->jurisdictions;
                }
            

            
                /**
                 * Set the value of jurisdictions.
                 *
                 * @param GetMediaBuysRequest_ItemOfArrayJurisdictions8bf29d4207dd31b988e71fd7e02eded3[] $jurisdictions Jurisdictions where disclosure obligations apply
                 *
                 * @throws ErrorRegistryException
                 *
                 * @return static
                 */
                public function setJurisdictions(
                    array $jurisdictions
                ): static {
                    if ($this->jurisdictions === $jurisdictions) {
                        return $this;
                    }

                    $value = $modelData['jurisdictions'] = $jurisdictions;

                    
                        $this->_errorRegistry = new ErrorRegistryException();
                    

                    

                    $value = $this->validateJurisdictions($value, $modelData);

                    
                        if ($this->_errorRegistry->getErrors()) {
                            throw $this->_errorRegistry;
                        }
                    

                    $this->jurisdictions = $value;
                    $this->_rawModelDataInput['jurisdictions'] = $jurisdictions;

                    

                    return $this;
                }
            

            /**
             * Extract the value, perform validations and set the property jurisdictions
             *
             * @param array $modelData
             *
             * @throws ErrorRegistryException
             */
            protected function processJurisdictions(array $modelData): void
            {
                
                    if (!array_key_exists('jurisdictions', $modelData) && $this->jurisdictions === null) {
                        return;
                    }
                

                $value = array_key_exists('jurisdictions', $modelData) ? $modelData['jurisdictions'] : $this->jurisdictions;

                

                $this->jurisdictions = $this->validateJurisdictions($value, $modelData);
            }

            /**
             * Execute all validators for the property jurisdictions
             */
            protected function validateJurisdictions($value, array $modelData)
            {
                
                    

if ((!is_array($value) && !$value instanceof UnitEnum) ) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Generic\InvalidTypeException($value ?? null, ...array (
  0 => 'jurisdictions',
  1 => 'array',
)));
}

                
                    $this->validateJurisdictions_ArrayItem_c4ae9add62a81c9748f7f5f86e91c77f($value, $modelData);
                
                    

if (is_array($value) && count($value) < 1) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Arrays\MinItemsException($value ?? null, ...array (
  0 => 'jurisdictions',
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
    

    
        
            if (array_key_exists('required', $modelData) &&
                $modelData['required'] !== $this->required
            ) {
                

                $rollbackValues['required'] = $this->required;
                $this->processRequired($modelData);
            }
        
    
        
            if (array_key_exists('jurisdictions', $modelData) &&
                $modelData['jurisdictions'] !== $this->jurisdictions
            ) {
                

                $rollbackValues['jurisdictions'] = $this->jurisdictions;
                $this->processJurisdictions($modelData);
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


private function validateJurisdictions_ArrayItem_c4ae9add62a81c9748f7f5f86e91c77f(&$value, $modelData): void {
                    $invalidItems_7d02e51710114f03702d26ba1e5abbb2 = [];
                    
                    if (is_array($value) && (function (&$items) use (&$invalidItems_7d02e51710114f03702d26ba1e5abbb2, $modelData) {
    
        $originalErrorRegistry = $this->_errorRegistry;
    

    foreach ($items as $index => &$value) {
        
            $this->_errorRegistry = new ErrorRegistryException();
        

        try {
            $value = (function ($value) {
    try {
        return is_array($value) ? new GetMediaBuysRequest_ItemOfArrayJurisdictions8bf29d4207dd31b988e71fd7e02eded3($value) : $value;
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
  0 => 'item of array jurisdictions',
  1 => 'object',
)));
}

            
                

if (is_object($value) && !($value instanceof \Exception) && !($value instanceof GetMediaBuysRequest_ItemOfArrayJurisdictions8bf29d4207dd31b988e71fd7e02eded3)) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Object\InvalidInstanceOfException($value ?? null, ...array (
  0 => 'item of array jurisdictions',
  1 => 'GetMediaBuysRequest_ItemOfArrayJurisdictions8bf29d4207dd31b988e71fd7e02eded3',
)));
}

            

            
                if ($this->_errorRegistry->getErrors()) {
                    $invalidItems_7d02e51710114f03702d26ba1e5abbb2[$index] = $this->_errorRegistry->getErrors();
                }
            
        } catch (\Exception $e) {
            // collect all errors concerning invalid items
            isset($invalidItems_7d02e51710114f03702d26ba1e5abbb2[$index])
                ? $invalidItems_7d02e51710114f03702d26ba1e5abbb2[$index][] = $e
                : $invalidItems_7d02e51710114f03702d26ba1e5abbb2[$index] = [$e];
        }
    }

    
        $this->_errorRegistry = $originalErrorRegistry;
    

    return !empty($invalidItems_7d02e51710114f03702d26ba1e5abbb2);
})($value)) {
                        $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Arrays\InvalidItemException($value ?? null, ...array (
  0 => 'jurisdictions',
  1 => $invalidItems_7d02e51710114f03702d26ba1e5abbb2,
)));
                    }
                }


}

// @codeCoverageIgnoreEnd
