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
 * Class GetProductsRequest_Signal_Idc051d99d9bca014b860d0fddcd4e1653
 * @package AdCP\MediaBuy 
 *
 * Catalog signal - references a signal from a data provider's published catalog. Buyers can verify authorization by checking the data provider's adagents.json.
 *
 * This is an auto-implemented class implemented by the php-json-schema-model-generator.
 * If you need to implement something in this class use inheritance. Else you will lose your changes if the classes
 * are re-generated.
 */

#[JsonPointer('/properties/filters/properties/signal_targeting/items/oneOf/0/properties/signal_id/oneOf/0')]

class GetProductsRequest_Signal_Idc051d99d9bca014b860d0fddcd4e1653 implements JSONModelInterface, JsonSerializable, SerializationInterface
{
    use SerializableTrait;

    
        
            #[JsonPointer('/properties/filters/properties/signal_targeting/items/oneOf/0/properties/signal_id/oneOf/0/properties/source')]
        
            #[SchemaName('source')]
        
            #[Required]
        
        /** @var string Discriminator indicating this signal is from a data provider's published catalog */
        protected $source;
    
        
            #[JsonPointer('/properties/filters/properties/signal_targeting/items/oneOf/0/properties/signal_id/oneOf/0/properties/data_provider_domain')]
        
            #[SchemaName('data_provider_domain')]
        
            #[Required]
        
        /** @var string Domain of the data provider that owns this signal (e.g., 'polk.com', 'experian.com'). The signal definition is published at this domain's /.well-known/adagents.json */
        protected $dataProviderDomain;
    
        
            #[JsonPointer('/properties/filters/properties/signal_targeting/items/oneOf/0/properties/signal_id/oneOf/0/properties/id')]
        
            #[SchemaName('id')]
        
            #[Required]
        
        /** @var string Signal identifier within the data provider's catalog (e.g., 'likely_tesla_buyers', 'income_100k_plus') */
        protected $id;
    
        
            #[Internal]
        
        /** @var array Collect all additional properties provided to the schema */
        private $_additionalProperties = array (
);
    
        
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
     * GetProductsRequest_Signal_Idc051d99d9bca014b860d0fddcd4e1653 constructor.
     *
     * @param array $rawModelDataInput
     *
     * @throws ErrorRegistryException
     */
    public function __construct(array $rawModelDataInput = [])
    {
        
            $this->_errorRegistry = new ErrorRegistryException();
        

        

        
            $this->executeBaseValidators($rawModelDataInput);
        

        
            
                $this->processSource($rawModelDataInput);
            
        
            
                $this->processDataProviderDomain($rawModelDataInput);
            
        
            
                $this->processId($rawModelDataInput);
            
        
            
        
            
        

        
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
   'source',
   'data_provider_domain',
   'id',
)) as $propertyKey) {
        

        $this->_additionalProperties[$propertyKey] = $value[$propertyKey];
    }

    return false;
})()) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Object\InvalidAdditionalPropertiesException($value ?? null, ...array (
  0 => 'GetProductsRequest_Signal_Idc051d99d9bca014b860d0fddcd4e1653',
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
                 * Get the value of source.
                 *
                 * Discriminator indicating this signal is from a data provider's published catalog
                 *
                 * @return string
                 */
                public function getSource(): string
                {
                    

                    return $this->source;
                }
            

            
                /**
                 * Set the value of source.
                 *
                 * @param string $source Discriminator indicating this signal is from a data provider's published catalog
                 *
                 * @throws ErrorRegistryException
                 *
                 * @return static
                 */
                public function setSource(
                    string $source
                ): static {
                    if ($this->source === $source) {
                        return $this;
                    }

                    $value = $modelData['source'] = $source;

                    
                        $this->_errorRegistry = new ErrorRegistryException();
                    

                    

                    $value = $this->validateSource($value, $modelData);

                    
                        if ($this->_errorRegistry->getErrors()) {
                            throw $this->_errorRegistry;
                        }
                    

                    $this->source = $value;
                    $this->_rawModelDataInput['source'] = $source;

                    

                    return $this;
                }
            

            /**
             * Extract the value, perform validations and set the property source
             *
             * @param array $modelData
             *
             * @throws ErrorRegistryException
             */
            protected function processSource(array $modelData): void
            {
                

                $value = array_key_exists('source', $modelData) ? $modelData['source'] : $this->source;

                

                $this->source = $this->validateSource($value, $modelData);
            }

            /**
             * Execute all validators for the property source
             */
            protected function validateSource($value, array $modelData)
            {
                
                    

if (!array_key_exists('source', $modelData)) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Object\RequiredValueException($value ?? null, ...array (
  0 => 'source',
)));
}

                
                    

if ((!is_string($value) && !$value instanceof UnitEnum) ) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Generic\InvalidTypeException($value ?? null, ...array (
  0 => 'source',
  1 => 'string',
)));
}

                
                    

if ($value !== 'catalog') {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Generic\InvalidConstException($value ?? null, ...array (
  0 => 'source',
  1 => 'catalog',
)));
}

                

                return $value;
            }
        
    
        
            
                /**
                 * Get the value of data_provider_domain.
                 *
                 * Domain of the data provider that owns this signal (e.g., 'polk.com', 'experian.com'). The signal definition is published at this domain's /.well-known/adagents.json
                 *
                 * @return string
                 */
                public function getDataProviderDomain(): string
                {
                    

                    return $this->dataProviderDomain;
                }
            

            
                /**
                 * Set the value of data_provider_domain.
                 *
                 * @param string $dataProviderDomain Domain of the data provider that owns this signal (e.g., 'polk.com', 'experian.com'). The signal definition is published at this domain's /.well-known/adagents.json
                 *
                 * @throws ErrorRegistryException
                 *
                 * @return static
                 */
                public function setDataProviderDomain(
                    string $dataProviderDomain
                ): static {
                    if ($this->dataProviderDomain === $dataProviderDomain) {
                        return $this;
                    }

                    $value = $modelData['data_provider_domain'] = $dataProviderDomain;

                    
                        $this->_errorRegistry = new ErrorRegistryException();
                    

                    

                    $value = $this->validateDataProviderDomain($value, $modelData);

                    
                        if ($this->_errorRegistry->getErrors()) {
                            throw $this->_errorRegistry;
                        }
                    

                    $this->dataProviderDomain = $value;
                    $this->_rawModelDataInput['data_provider_domain'] = $dataProviderDomain;

                    

                    return $this;
                }
            

            /**
             * Extract the value, perform validations and set the property dataProviderDomain
             *
             * @param array $modelData
             *
             * @throws ErrorRegistryException
             */
            protected function processDataProviderDomain(array $modelData): void
            {
                

                $value = array_key_exists('data_provider_domain', $modelData) ? $modelData['data_provider_domain'] : $this->dataProviderDomain;

                

                $this->dataProviderDomain = $this->validateDataProviderDomain($value, $modelData);
            }

            /**
             * Execute all validators for the property dataProviderDomain
             */
            protected function validateDataProviderDomain($value, array $modelData)
            {
                
                    

if (!array_key_exists('data_provider_domain', $modelData)) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Object\RequiredValueException($value ?? null, ...array (
  0 => 'data_provider_domain',
)));
}

                
                    

if ((!is_string($value) && !$value instanceof UnitEnum) ) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Generic\InvalidTypeException($value ?? null, ...array (
  0 => 'data_provider_domain',
  1 => 'string',
)));
}

                
                    

if (is_string($value) && !preg_match(base64_decode('L15bYS16MC05XShbYS16MC05LV0qW2EtejAtOV0pPyhcLlthLXowLTldKFthLXowLTktXSpbYS16MC05XSk/KSokLw=='), $value)) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\String\PatternException($value ?? null, ...array (
  0 => 'data_provider_domain',
  1 => '^[a-z0-9]([a-z0-9-]*[a-z0-9])?(\\.[a-z0-9]([a-z0-9-]*[a-z0-9])?)*$',
)));
}

                

                return $value;
            }
        
    
        
            
                /**
                 * Get the value of id.
                 *
                 * Signal identifier within the data provider's catalog (e.g., 'likely_tesla_buyers', 'income_100k_plus')
                 *
                 * @return string
                 */
                public function getId(): string
                {
                    

                    return $this->id;
                }
            

            
                /**
                 * Set the value of id.
                 *
                 * @param string $id Signal identifier within the data provider's catalog (e.g., 'likely_tesla_buyers', 'income_100k_plus')
                 *
                 * @throws ErrorRegistryException
                 *
                 * @return static
                 */
                public function setId(
                    string $id
                ): static {
                    if ($this->id === $id) {
                        return $this;
                    }

                    $value = $modelData['id'] = $id;

                    
                        $this->_errorRegistry = new ErrorRegistryException();
                    

                    

                    $value = $this->validateId($value, $modelData);

                    
                        if ($this->_errorRegistry->getErrors()) {
                            throw $this->_errorRegistry;
                        }
                    

                    $this->id = $value;
                    $this->_rawModelDataInput['id'] = $id;

                    

                    return $this;
                }
            

            /**
             * Extract the value, perform validations and set the property id
             *
             * @param array $modelData
             *
             * @throws ErrorRegistryException
             */
            protected function processId(array $modelData): void
            {
                

                $value = array_key_exists('id', $modelData) ? $modelData['id'] : $this->id;

                

                $this->id = $this->validateId($value, $modelData);
            }

            /**
             * Execute all validators for the property id
             */
            protected function validateId($value, array $modelData)
            {
                
                    

if (!array_key_exists('id', $modelData)) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Object\RequiredValueException($value ?? null, ...array (
  0 => 'id',
)));
}

                
                    

if ((!is_string($value) && !$value instanceof UnitEnum) ) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Generic\InvalidTypeException($value ?? null, ...array (
  0 => 'id',
  1 => 'string',
)));
}

                
                    

if (is_string($value) && !preg_match(base64_decode('L15bYS16QS1aMC05Xy1dKyQv'), $value)) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\String\PatternException($value ?? null, ...array (
  0 => 'id',
  1 => '^[a-zA-Z0-9_-]+$',
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
    

    
        
            if (array_key_exists('source', $modelData) &&
                $modelData['source'] !== $this->source
            ) {
                

                $rollbackValues['source'] = $this->source;
                $this->processSource($modelData);
            }
        
    
        
            if (array_key_exists('data_provider_domain', $modelData) &&
                $modelData['data_provider_domain'] !== $this->dataProviderDomain
            ) {
                

                $rollbackValues['dataProviderDomain'] = $this->dataProviderDomain;
                $this->processDataProviderDomain($modelData);
            }
        
    
        
            if (array_key_exists('id', $modelData) &&
                $modelData['id'] !== $this->id
            ) {
                

                $rollbackValues['id'] = $this->id;
                $this->processId($modelData);
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



}

// @codeCoverageIgnoreEnd
