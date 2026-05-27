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
 * Class GetMediaBuysResponse_Ai_Tool866c3fd929909158c718664e57db4355
 * @package AdCP\MediaBuy 
 *
 * AI system used to generate or modify this content. Aligns with IPTC 2025.1 AI metadata fields and C2PA claim_generator.
 *
 * This is an auto-implemented class implemented by the php-json-schema-model-generator.
 * If you need to implement something in this class use inheritance. Else you will lose your changes if the classes
 * are re-generated.
 */

#[JsonPointer('/properties/media_buys/items/properties/account/properties/brand/properties/brand_kit_override/properties/logo/properties/provenance/properties/ai_tool')]

class GetMediaBuysResponse_Ai_Tool866c3fd929909158c718664e57db4355 implements JSONModelInterface, JsonSerializable, SerializationInterface
{
    use SerializableTrait;

    
        
            #[JsonPointer('/properties/media_buys/items/properties/account/properties/brand/properties/brand_kit_override/properties/logo/properties/provenance/properties/ai_tool/properties/name')]
        
            #[SchemaName('name')]
        
            #[Required]
        
        /** @var string Name of the AI tool or model (e.g., 'DALL-E 3', 'Stable Diffusion XL', 'Gemini') */
        protected $name;
    
        
            #[JsonPointer('/properties/media_buys/items/properties/account/properties/brand/properties/brand_kit_override/properties/logo/properties/provenance/properties/ai_tool/properties/version')]
        
            #[SchemaName('version')]
        
        /** @var string|null Version identifier for the AI tool or model (e.g., '25.1', '0125', '2.1'). For generative models, use the model version rather than the API version. */
        protected $version;
    
        
            #[JsonPointer('/properties/media_buys/items/properties/account/properties/brand/properties/brand_kit_override/properties/logo/properties/provenance/properties/ai_tool/properties/provider')]
        
            #[SchemaName('provider')]
        
        /** @var string|null Organization that provides the AI tool (e.g., 'OpenAI', 'Stability AI', 'Google') */
        protected $provider;
    
        
            #[Internal]
        
        /** @var array Collect all additional properties provided to the schema */
        private $_additionalProperties = array (
);
    
        
            #[Internal]
        
        /** @var array Values which might be skipped for serialization if not provided */
        private $_skipNotProvidedPropertiesMap = array (
  1 => 'version',
  2 => 'provider',
);
    
    #[Internal]
    /** @var array */
    protected $_rawModelDataInput = [];

    
        #[Internal]
        /** @var ErrorRegistryException Collect all validation errors */
        protected $_errorRegistry;
    

    /**
     * GetMediaBuysResponse_Ai_Tool866c3fd929909158c718664e57db4355 constructor.
     *
     * @param array $rawModelDataInput
     *
     * @throws ErrorRegistryException
     */
    public function __construct(array $rawModelDataInput = [])
    {
        
            $this->_errorRegistry = new ErrorRegistryException();
        

        

        
            $this->executeBaseValidators($rawModelDataInput);
        

        
            
                $this->processName($rawModelDataInput);
            
        
            
                $this->processVersion($rawModelDataInput);
            
        
            
                $this->processProvider($rawModelDataInput);
            
        
            
        
            
        

        
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
   'name',
   'version',
   'provider',
)) as $propertyKey) {
        

        $this->_additionalProperties[$propertyKey] = $value[$propertyKey];
    }

    return false;
})()) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Object\InvalidAdditionalPropertiesException($value ?? null, ...array (
  0 => 'GetMediaBuysResponse_Ai_Tool866c3fd929909158c718664e57db4355',
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
                 * Get the value of name.
                 *
                 * Name of the AI tool or model (e.g., 'DALL-E 3', 'Stable Diffusion XL', 'Gemini')
                 *
                 * @return string
                 */
                public function getName(): string
                {
                    

                    return $this->name;
                }
            

            
                /**
                 * Set the value of name.
                 *
                 * @param string $name Name of the AI tool or model (e.g., 'DALL-E 3', 'Stable Diffusion XL', 'Gemini')
                 *
                 * @throws ErrorRegistryException
                 *
                 * @return static
                 */
                public function setName(
                    string $name
                ): static {
                    if ($this->name === $name) {
                        return $this;
                    }

                    $value = $modelData['name'] = $name;

                    
                        $this->_errorRegistry = new ErrorRegistryException();
                    

                    

                    $value = $this->validateName($value, $modelData);

                    
                        if ($this->_errorRegistry->getErrors()) {
                            throw $this->_errorRegistry;
                        }
                    

                    $this->name = $value;
                    $this->_rawModelDataInput['name'] = $name;

                    

                    return $this;
                }
            

            /**
             * Extract the value, perform validations and set the property name
             *
             * @param array $modelData
             *
             * @throws ErrorRegistryException
             */
            protected function processName(array $modelData): void
            {
                

                $value = array_key_exists('name', $modelData) ? $modelData['name'] : $this->name;

                

                $this->name = $this->validateName($value, $modelData);
            }

            /**
             * Execute all validators for the property name
             */
            protected function validateName($value, array $modelData)
            {
                
                    

if (!array_key_exists('name', $modelData)) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Object\RequiredValueException($value ?? null, ...array (
  0 => 'name',
)));
}

                
                    

if ((!is_string($value) && !$value instanceof UnitEnum) ) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Generic\InvalidTypeException($value ?? null, ...array (
  0 => 'name',
  1 => 'string',
)));
}

                

                return $value;
            }
        
    
        
            
                /**
                 * Get the value of version.
                 *
                 * Version identifier for the AI tool or model (e.g., '25.1', '0125', '2.1'). For generative models, use the model version rather than the API version.
                 *
                 * @return string|null
                 */
                public function getVersion(): ?string
                {
                    

                    return $this->version;
                }
            

            
                /**
                 * Set the value of version.
                 *
                 * @param string $version Version identifier for the AI tool or model (e.g., '25.1', '0125', '2.1'). For generative models, use the model version rather than the API version.
                 *
                 * @throws ErrorRegistryException
                 *
                 * @return static
                 */
                public function setVersion(
                    string $version
                ): static {
                    if ($this->version === $version) {
                        return $this;
                    }

                    $value = $modelData['version'] = $version;

                    
                        $this->_errorRegistry = new ErrorRegistryException();
                    

                    

                    $value = $this->validateVersion($value, $modelData);

                    
                        if ($this->_errorRegistry->getErrors()) {
                            throw $this->_errorRegistry;
                        }
                    

                    $this->version = $value;
                    $this->_rawModelDataInput['version'] = $version;

                    

                    return $this;
                }
            

            /**
             * Extract the value, perform validations and set the property version
             *
             * @param array $modelData
             *
             * @throws ErrorRegistryException
             */
            protected function processVersion(array $modelData): void
            {
                
                    if (!array_key_exists('version', $modelData) && $this->version === null) {
                        return;
                    }
                

                $value = array_key_exists('version', $modelData) ? $modelData['version'] : $this->version;

                

                $this->version = $this->validateVersion($value, $modelData);
            }

            /**
             * Execute all validators for the property version
             */
            protected function validateVersion($value, array $modelData)
            {
                
                    

if ((!is_string($value) && !$value instanceof UnitEnum) ) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Generic\InvalidTypeException($value ?? null, ...array (
  0 => 'version',
  1 => 'string',
)));
}

                

                return $value;
            }
        
    
        
            
                /**
                 * Get the value of provider.
                 *
                 * Organization that provides the AI tool (e.g., 'OpenAI', 'Stability AI', 'Google')
                 *
                 * @return string|null
                 */
                public function getProvider(): ?string
                {
                    

                    return $this->provider;
                }
            

            
                /**
                 * Set the value of provider.
                 *
                 * @param string $provider Organization that provides the AI tool (e.g., 'OpenAI', 'Stability AI', 'Google')
                 *
                 * @throws ErrorRegistryException
                 *
                 * @return static
                 */
                public function setProvider(
                    string $provider
                ): static {
                    if ($this->provider === $provider) {
                        return $this;
                    }

                    $value = $modelData['provider'] = $provider;

                    
                        $this->_errorRegistry = new ErrorRegistryException();
                    

                    

                    $value = $this->validateProvider($value, $modelData);

                    
                        if ($this->_errorRegistry->getErrors()) {
                            throw $this->_errorRegistry;
                        }
                    

                    $this->provider = $value;
                    $this->_rawModelDataInput['provider'] = $provider;

                    

                    return $this;
                }
            

            /**
             * Extract the value, perform validations and set the property provider
             *
             * @param array $modelData
             *
             * @throws ErrorRegistryException
             */
            protected function processProvider(array $modelData): void
            {
                
                    if (!array_key_exists('provider', $modelData) && $this->provider === null) {
                        return;
                    }
                

                $value = array_key_exists('provider', $modelData) ? $modelData['provider'] : $this->provider;

                

                $this->provider = $this->validateProvider($value, $modelData);
            }

            /**
             * Execute all validators for the property provider
             */
            protected function validateProvider($value, array $modelData)
            {
                
                    

if ((!is_string($value) && !$value instanceof UnitEnum) ) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Generic\InvalidTypeException($value ?? null, ...array (
  0 => 'provider',
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
    

    
        
            if (array_key_exists('name', $modelData) &&
                $modelData['name'] !== $this->name
            ) {
                

                $rollbackValues['name'] = $this->name;
                $this->processName($modelData);
            }
        
    
        
            if (array_key_exists('version', $modelData) &&
                $modelData['version'] !== $this->version
            ) {
                

                $rollbackValues['version'] = $this->version;
                $this->processVersion($modelData);
            }
        
    
        
            if (array_key_exists('provider', $modelData) &&
                $modelData['provider'] !== $this->provider
            ) {
                

                $rollbackValues['provider'] = $this->provider;
                $this->processProvider($modelData);
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
