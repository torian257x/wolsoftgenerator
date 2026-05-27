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
 * Class GetMediaBuysResponse_ItemOfArrayGovernance_Agents18f58187ee1abde25033f0892dfed1fa
 * @package AdCP\MediaBuy 
 *

 * This is an auto-implemented class implemented by the php-json-schema-model-generator.
 * If you need to implement something in this class use inheritance. Else you will lose your changes if the classes
 * are re-generated.
 */

#[JsonPointer('/properties/media_buys/items/properties/account/properties/governance_agents/items')]

class GetMediaBuysResponse_ItemOfArrayGovernance_Agents18f58187ee1abde25033f0892dfed1fa implements JSONModelInterface, JsonSerializable, SerializationInterface
{
    use SerializableTrait;

    
        
            #[JsonPointer('/properties/media_buys/items/properties/account/properties/governance_agents/items/properties/url')]
        
            #[SchemaName('url')]
        
            #[Required]
        
        /** @var string Governance agent endpoint URL. Must use HTTPS. */
        protected $url;
    
        
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
     * GetMediaBuysResponse_ItemOfArrayGovernance_Agents18f58187ee1abde25033f0892dfed1fa constructor.
     *
     * @param array $rawModelDataInput
     *
     * @throws ErrorRegistryException
     */
    public function __construct(array $rawModelDataInput = [])
    {
        
            $this->_errorRegistry = new ErrorRegistryException();
        

        

        
            $this->executeBaseValidators($rawModelDataInput);
        

        
            
                $this->processUrl($rawModelDataInput);
            
        
            
        

        
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
   'url',
));

    

    return $additionalProperties;
})()) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Object\AdditionalPropertiesException($value ?? null, ...array (
  0 => 'GetMediaBuysResponse_ItemOfArrayGovernance_Agents18f58187ee1abde25033f0892dfed1fa',
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
                 * Get the value of url.
                 *
                 * Governance agent endpoint URL. Must use HTTPS.
                 *
                 * @return string
                 */
                public function getUrl(): string
                {
                    

                    return $this->url;
                }
            

            
                /**
                 * Set the value of url.
                 *
                 * @param string $url Governance agent endpoint URL. Must use HTTPS.
                 *
                 * @throws ErrorRegistryException
                 *
                 * @return static
                 */
                public function setUrl(
                    string $url
                ): static {
                    if ($this->url === $url) {
                        return $this;
                    }

                    $value = $modelData['url'] = $url;

                    
                        $this->_errorRegistry = new ErrorRegistryException();
                    

                    

                    $value = $this->validateUrl($value, $modelData);

                    
                        if ($this->_errorRegistry->getErrors()) {
                            throw $this->_errorRegistry;
                        }
                    

                    $this->url = $value;
                    $this->_rawModelDataInput['url'] = $url;

                    

                    return $this;
                }
            

            /**
             * Extract the value, perform validations and set the property url
             *
             * @param array $modelData
             *
             * @throws ErrorRegistryException
             */
            protected function processUrl(array $modelData): void
            {
                

                $value = array_key_exists('url', $modelData) ? $modelData['url'] : $this->url;

                

                $this->url = $this->validateUrl($value, $modelData);
            }

            /**
             * Execute all validators for the property url
             */
            protected function validateUrl($value, array $modelData)
            {
                
                    

if (!array_key_exists('url', $modelData)) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Object\RequiredValueException($value ?? null, ...array (
  0 => 'url',
)));
}

                
                    

if ((!is_string($value) && !$value instanceof UnitEnum) ) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Generic\InvalidTypeException($value ?? null, ...array (
  0 => 'url',
  1 => 'string',
)));
}

                
                    

if (is_string($value) && !preg_match(base64_decode('L15odHRwczpcL1wvLw=='), $value)) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\String\PatternException($value ?? null, ...array (
  0 => 'url',
  1 => '^https://',
)));
}

                
                    

if (!\PHPModelGenerator\Format\UriFormatValidator::validate($value)) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\String\FormatException($value ?? null, ...array (
  0 => 'url',
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
    

    
        
            if (array_key_exists('url', $modelData) &&
                $modelData['url'] !== $this->url
            ) {
                

                $rollbackValues['url'] = $this->url;
                $this->processUrl($modelData);
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
