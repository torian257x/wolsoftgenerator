<?php

// @codingStandardsIgnoreFile
// @codeCoverageIgnoreStart

declare(strict_types = 1);


    namespace AdCP\MediaBuy;



    use PHPModelGenerator\Interfaces\JSONModelInterface;

    use PHPModelGenerator\Traits\SerializableTrait;

    use JsonSerializable;

    use PHPModelGenerator\Interfaces\SerializationInterface;

    use PHPModelGenerator\Attributes\JsonPointer;

    use PHPModelGenerator\Attributes\SchemaName;

    use PHPModelGenerator\Attributes\Required;

    use PHPModelGenerator\Attributes\Internal;

    use PHPModelGenerator\Exception\ErrorRegistryException;


/**
 * Class GetProductsRequest_GetProductsRequest_ItemOfArrayRefineb01dc616de18c8735fba8f8095f1500175a6b9052c1cb2c23048f2815c28c25e
 * @package AdCP\MediaBuy 
 *

 * This is an auto-implemented class implemented by the php-json-schema-model-generator.
 * If you need to implement something in this class use inheritance. Else you will lose your changes if the classes
 * are re-generated.
 */

#[JsonPointer('/properties/refine/items/oneOf/0')]

class GetProductsRequest_GetProductsRequest_ItemOfArrayRefineb01dc616de18c8735fba8f8095f1500175a6b9052c1cb2c23048f2815c28c25e implements JSONModelInterface, JsonSerializable, SerializationInterface
{
    use SerializableTrait;

    
        
            #[JsonPointer('/properties/refine/items/oneOf/0/properties/scope')]
        
            #[SchemaName('scope')]
        
            #[Required]
        
        /** @var string Change scoped to the overall request — direction for the selection as a whole. */
        protected $scope;
    
        
            #[JsonPointer('/properties/refine/items/oneOf/0/properties/ask')]
        
            #[SchemaName('ask')]
        
            #[Required]
        
        /** @var string What the buyer is asking for at the request level (e.g., 'more video options and less display', 'suggest how to combine these products'). */
        protected $ask;
    
        
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
     * GetProductsRequest_GetProductsRequest_ItemOfArrayRefineb01dc616de18c8735fba8f8095f1500175a6b9052c1cb2c23048f2815c28c25e constructor.
     *
     * @param array $rawModelDataInput
     *
     * @throws ErrorRegistryException
     */
    public function __construct(array $rawModelDataInput = [])
    {
        
            $this->_errorRegistry = new ErrorRegistryException();
        

        

        
            $this->executeBaseValidators($rawModelDataInput);
        

        
            
                $this->processScope($rawModelDataInput);
            
        
            
                $this->processAsk($rawModelDataInput);
            
        
            
        

        
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
   'scope',
   'ask',
));

    

    return $additionalProperties;
})()) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Object\AdditionalPropertiesException($value ?? null, ...array (
  0 => 'GetProductsRequest_GetProductsRequest_ItemOfArrayRefineb01dc616de18c8735fba8f8095f1500175a6b9052c1cb2c23048f2815c28c25e',
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
                 * Get the value of scope.
                 *
                 * Change scoped to the overall request — direction for the selection as a whole.
                 *
                 * @return string
                 */
                public function getScope(): string
                {
                    

                    return $this->scope;
                }
            

            
                /**
                 * Set the value of scope.
                 *
                 * @param string $scope Change scoped to the overall request — direction for the selection as a whole.
                 *
                 * @throws ErrorRegistryException
                 *
                 * @return static
                 */
                public function setScope(
                    string $scope
                ): static {
                    if ($this->scope === $scope) {
                        return $this;
                    }

                    $value = $modelData['scope'] = $scope;

                    
                        $this->_errorRegistry = new ErrorRegistryException();
                    

                    

                    $value = $this->validateScope($value, $modelData);

                    
                        if ($this->_errorRegistry->getErrors()) {
                            throw $this->_errorRegistry;
                        }
                    

                    $this->scope = $value;
                    $this->_rawModelDataInput['scope'] = $scope;

                    

                    return $this;
                }
            

            /**
             * Extract the value, perform validations and set the property scope
             *
             * @param array $modelData
             *
             * @throws ErrorRegistryException
             */
            protected function processScope(array $modelData): void
            {
                

                $value = array_key_exists('scope', $modelData) ? $modelData['scope'] : $this->scope;

                

                $this->scope = $this->validateScope($value, $modelData);
            }

            /**
             * Execute all validators for the property scope
             */
            protected function validateScope($value, array $modelData)
            {
                
                    

if (!array_key_exists('scope', $modelData)) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Object\RequiredValueException($value ?? null, ...array (
  0 => 'scope',
)));
}

                
                    

if ((!is_string($value) && !$value instanceof UnitEnum) ) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Generic\InvalidTypeException($value ?? null, ...array (
  0 => 'scope',
  1 => 'string',
)));
}

                
                    

if ($value !== 'request') {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Generic\InvalidConstException($value ?? null, ...array (
  0 => 'scope',
  1 => 'request',
)));
}

                

                return $value;
            }
        
    
        
            
                /**
                 * Get the value of ask.
                 *
                 * What the buyer is asking for at the request level (e.g., 'more video options and less display', 'suggest how to combine these products').
                 *
                 * @return string
                 */
                public function getAsk(): string
                {
                    

                    return $this->ask;
                }
            

            
                /**
                 * Set the value of ask.
                 *
                 * @param string $ask What the buyer is asking for at the request level (e.g., 'more video options and less display', 'suggest how to combine these products').
                 *
                 * @throws ErrorRegistryException
                 *
                 * @return static
                 */
                public function setAsk(
                    string $ask
                ): static {
                    if ($this->ask === $ask) {
                        return $this;
                    }

                    $value = $modelData['ask'] = $ask;

                    
                        $this->_errorRegistry = new ErrorRegistryException();
                    

                    

                    $value = $this->validateAsk($value, $modelData);

                    
                        if ($this->_errorRegistry->getErrors()) {
                            throw $this->_errorRegistry;
                        }
                    

                    $this->ask = $value;
                    $this->_rawModelDataInput['ask'] = $ask;

                    

                    return $this;
                }
            

            /**
             * Extract the value, perform validations and set the property ask
             *
             * @param array $modelData
             *
             * @throws ErrorRegistryException
             */
            protected function processAsk(array $modelData): void
            {
                

                $value = array_key_exists('ask', $modelData) ? $modelData['ask'] : $this->ask;

                

                $this->ask = $this->validateAsk($value, $modelData);
            }

            /**
             * Execute all validators for the property ask
             */
            protected function validateAsk($value, array $modelData)
            {
                
                    

if (!array_key_exists('ask', $modelData)) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Object\RequiredValueException($value ?? null, ...array (
  0 => 'ask',
)));
}

                
                    

if ((!is_string($value) && !$value instanceof UnitEnum) ) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Generic\InvalidTypeException($value ?? null, ...array (
  0 => 'ask',
  1 => 'string',
)));
}

                
                    

if (is_string($value) && mb_strlen($value) < 1) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\String\MinLengthException($value ?? null, ...array (
  0 => 'ask',
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
    

    
        
            if (array_key_exists('scope', $modelData) &&
                $modelData['scope'] !== $this->scope
            ) {
                

                $rollbackValues['scope'] = $this->scope;
                $this->processScope($modelData);
            }
        
    
        
            if (array_key_exists('ask', $modelData) &&
                $modelData['ask'] !== $this->ask
            ) {
                

                $rollbackValues['ask'] = $this->ask;
                $this->processAsk($modelData);
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





}

// @codeCoverageIgnoreEnd
