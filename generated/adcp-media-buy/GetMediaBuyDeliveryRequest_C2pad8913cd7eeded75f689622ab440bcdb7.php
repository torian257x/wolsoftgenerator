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
 * Class GetMediaBuyDeliveryRequest_C2pad8913cd7eeded75f689622ab440bcdb7
 * @package AdCP\MediaBuy 
 *
 * C2PA sidecar manifest reference. Links to a detached cryptographic provenance manifest for this content. Note: file-level C2PA bindings break when ad servers transcode, resize, or re-encode assets. For pipelines with intermediaries, consider embedded_provenance as the primary provenance mechanism.
 *
 * This is an auto-implemented class implemented by the php-json-schema-model-generator.
 * If you need to implement something in this class use inheritance. Else you will lose your changes if the classes
 * are re-generated.
 */

#[JsonPointer('/properties/account/oneOf/1/properties/brand/properties/brand_kit_override/properties/logo/properties/provenance/properties/c2pa')]

class GetMediaBuyDeliveryRequest_C2pad8913cd7eeded75f689622ab440bcdb7 implements JSONModelInterface, JsonSerializable, SerializationInterface
{
    use SerializableTrait;

    
        
            #[JsonPointer('/properties/account/oneOf/1/properties/brand/properties/brand_kit_override/properties/logo/properties/provenance/properties/c2pa/properties/manifest_url')]
        
            #[SchemaName('manifest_url')]
        
            #[Required]
        
        /** @var string URL to the C2PA manifest store for this content */
        protected $manifestUrl;
    
        
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
     * GetMediaBuyDeliveryRequest_C2pad8913cd7eeded75f689622ab440bcdb7 constructor.
     *
     * @param array $rawModelDataInput
     *
     * @throws ErrorRegistryException
     */
    public function __construct(array $rawModelDataInput = [])
    {
        
            $this->_errorRegistry = new ErrorRegistryException();
        

        

        
            $this->executeBaseValidators($rawModelDataInput);
        

        
            
                $this->processManifestUrl($rawModelDataInput);
            
        
            
        
            
        

        
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
   'manifest_url',
)) as $propertyKey) {
        

        $this->_additionalProperties[$propertyKey] = $value[$propertyKey];
    }

    return false;
})()) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Object\InvalidAdditionalPropertiesException($value ?? null, ...array (
  0 => 'GetMediaBuyDeliveryRequest_C2pad8913cd7eeded75f689622ab440bcdb7',
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
                 * Get the value of manifest_url.
                 *
                 * URL to the C2PA manifest store for this content
                 *
                 * @return string
                 */
                public function getManifestUrl(): string
                {
                    

                    return $this->manifestUrl;
                }
            

            
                /**
                 * Set the value of manifest_url.
                 *
                 * @param string $manifestUrl URL to the C2PA manifest store for this content
                 *
                 * @throws ErrorRegistryException
                 *
                 * @return static
                 */
                public function setManifestUrl(
                    string $manifestUrl
                ): static {
                    if ($this->manifestUrl === $manifestUrl) {
                        return $this;
                    }

                    $value = $modelData['manifest_url'] = $manifestUrl;

                    
                        $this->_errorRegistry = new ErrorRegistryException();
                    

                    

                    $value = $this->validateManifestUrl($value, $modelData);

                    
                        if ($this->_errorRegistry->getErrors()) {
                            throw $this->_errorRegistry;
                        }
                    

                    $this->manifestUrl = $value;
                    $this->_rawModelDataInput['manifest_url'] = $manifestUrl;

                    

                    return $this;
                }
            

            /**
             * Extract the value, perform validations and set the property manifestUrl
             *
             * @param array $modelData
             *
             * @throws ErrorRegistryException
             */
            protected function processManifestUrl(array $modelData): void
            {
                

                $value = array_key_exists('manifest_url', $modelData) ? $modelData['manifest_url'] : $this->manifestUrl;

                

                $this->manifestUrl = $this->validateManifestUrl($value, $modelData);
            }

            /**
             * Execute all validators for the property manifestUrl
             */
            protected function validateManifestUrl($value, array $modelData)
            {
                
                    

if (!array_key_exists('manifest_url', $modelData)) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Object\RequiredValueException($value ?? null, ...array (
  0 => 'manifest_url',
)));
}

                
                    

if ((!is_string($value) && !$value instanceof UnitEnum) ) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Generic\InvalidTypeException($value ?? null, ...array (
  0 => 'manifest_url',
  1 => 'string',
)));
}

                
                    

if (!\PHPModelGenerator\Format\UriFormatValidator::validate($value)) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\String\FormatException($value ?? null, ...array (
  0 => 'manifest_url',
  1 => 'uri',
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
    

    
        
            if (array_key_exists('manifest_url', $modelData) &&
                $modelData['manifest_url'] !== $this->manifestUrl
            ) {
                

                $rollbackValues['manifestUrl'] = $this->manifestUrl;
                $this->processManifestUrl($modelData);
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
