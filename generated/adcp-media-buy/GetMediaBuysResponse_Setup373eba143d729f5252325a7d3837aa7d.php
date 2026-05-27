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
 * Class GetMediaBuysResponse_Setup373eba143d729f5252325a7d3837aa7d
 * @package AdCP\MediaBuy 
 *
 * Present when status is 'pending_approval'. Contains next steps for completing account activation.
 *
 * This is an auto-implemented class implemented by the php-json-schema-model-generator.
 * If you need to implement something in this class use inheritance. Else you will lose your changes if the classes
 * are re-generated.
 */

#[JsonPointer('/properties/media_buys/items/properties/account/properties/setup')]

class GetMediaBuysResponse_Setup373eba143d729f5252325a7d3837aa7d implements JSONModelInterface, JsonSerializable, SerializationInterface
{
    use SerializableTrait;

    
        
            #[JsonPointer('/properties/media_buys/items/properties/account/properties/setup/properties/url')]
        
            #[SchemaName('url')]
        
        /** @var string|null URL where the human can complete the required action (credit application, legal agreement, add funds). */
        protected $url;
    
        
            #[JsonPointer('/properties/media_buys/items/properties/account/properties/setup/properties/message')]
        
            #[SchemaName('message')]
        
            #[Required]
        
        /** @var string Human-readable description of what's needed. */
        protected $message;
    
        
            #[JsonPointer('/properties/media_buys/items/properties/account/properties/setup/properties/expires_at')]
        
            #[SchemaName('expires_at')]
        
        /** @var string|null When this setup link expires. */
        protected $expiresAt;
    
        
            #[Internal]
        
        /** @var array Collect all additional properties provided to the schema */
        private $_additionalProperties = array (
);
    
        
            #[Internal]
        
        /** @var array Values which might be skipped for serialization if not provided */
        private $_skipNotProvidedPropertiesMap = array (
  0 => 'url',
  2 => 'expires_at',
);
    
    #[Internal]
    /** @var array */
    protected $_rawModelDataInput = [];

    
        #[Internal]
        /** @var ErrorRegistryException Collect all validation errors */
        protected $_errorRegistry;
    

    /**
     * GetMediaBuysResponse_Setup373eba143d729f5252325a7d3837aa7d constructor.
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
            
        
            
                $this->processMessage($rawModelDataInput);
            
        
            
                $this->processExpiresAt($rawModelDataInput);
            
        
            
        
            
        

        
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
   'url',
   'message',
   'expires_at',
)) as $propertyKey) {
        

        $this->_additionalProperties[$propertyKey] = $value[$propertyKey];
    }

    return false;
})()) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Object\InvalidAdditionalPropertiesException($value ?? null, ...array (
  0 => 'GetMediaBuysResponse_Setup373eba143d729f5252325a7d3837aa7d',
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
                 * URL where the human can complete the required action (credit application, legal agreement, add funds).
                 *
                 * @return string|null
                 */
                public function getUrl(): ?string
                {
                    

                    return $this->url;
                }
            

            
                /**
                 * Set the value of url.
                 *
                 * @param string $url URL where the human can complete the required action (credit application, legal agreement, add funds).
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
                
                    if (!array_key_exists('url', $modelData) && $this->url === null) {
                        return;
                    }
                

                $value = array_key_exists('url', $modelData) ? $modelData['url'] : $this->url;

                

                $this->url = $this->validateUrl($value, $modelData);
            }

            /**
             * Execute all validators for the property url
             */
            protected function validateUrl($value, array $modelData)
            {
                
                    

if ((!is_string($value) && !$value instanceof UnitEnum) ) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Generic\InvalidTypeException($value ?? null, ...array (
  0 => 'url',
  1 => 'string',
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
                 * Get the value of message.
                 *
                 * Human-readable description of what's needed.
                 *
                 * @return string
                 */
                public function getMessage(): string
                {
                    

                    return $this->message;
                }
            

            
                /**
                 * Set the value of message.
                 *
                 * @param string $message Human-readable description of what's needed.
                 *
                 * @throws ErrorRegistryException
                 *
                 * @return static
                 */
                public function setMessage(
                    string $message
                ): static {
                    if ($this->message === $message) {
                        return $this;
                    }

                    $value = $modelData['message'] = $message;

                    
                        $this->_errorRegistry = new ErrorRegistryException();
                    

                    

                    $value = $this->validateMessage($value, $modelData);

                    
                        if ($this->_errorRegistry->getErrors()) {
                            throw $this->_errorRegistry;
                        }
                    

                    $this->message = $value;
                    $this->_rawModelDataInput['message'] = $message;

                    

                    return $this;
                }
            

            /**
             * Extract the value, perform validations and set the property message
             *
             * @param array $modelData
             *
             * @throws ErrorRegistryException
             */
            protected function processMessage(array $modelData): void
            {
                

                $value = array_key_exists('message', $modelData) ? $modelData['message'] : $this->message;

                

                $this->message = $this->validateMessage($value, $modelData);
            }

            /**
             * Execute all validators for the property message
             */
            protected function validateMessage($value, array $modelData)
            {
                
                    

if (!array_key_exists('message', $modelData)) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Object\RequiredValueException($value ?? null, ...array (
  0 => 'message',
)));
}

                
                    

if ((!is_string($value) && !$value instanceof UnitEnum) ) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Generic\InvalidTypeException($value ?? null, ...array (
  0 => 'message',
  1 => 'string',
)));
}

                

                return $value;
            }
        
    
        
            
                /**
                 * Get the value of expires_at.
                 *
                 * When this setup link expires.
                 *
                 * @return string|null
                 */
                public function getExpiresAt(): ?string
                {
                    

                    return $this->expiresAt;
                }
            

            
                /**
                 * Set the value of expires_at.
                 *
                 * @param string $expiresAt When this setup link expires.
                 *
                 * @throws ErrorRegistryException
                 *
                 * @return static
                 */
                public function setExpiresAt(
                    string $expiresAt
                ): static {
                    if ($this->expiresAt === $expiresAt) {
                        return $this;
                    }

                    $value = $modelData['expires_at'] = $expiresAt;

                    
                        $this->_errorRegistry = new ErrorRegistryException();
                    

                    

                    $value = $this->validateExpiresAt($value, $modelData);

                    
                        if ($this->_errorRegistry->getErrors()) {
                            throw $this->_errorRegistry;
                        }
                    

                    $this->expiresAt = $value;
                    $this->_rawModelDataInput['expires_at'] = $expiresAt;

                    

                    return $this;
                }
            

            /**
             * Extract the value, perform validations and set the property expiresAt
             *
             * @param array $modelData
             *
             * @throws ErrorRegistryException
             */
            protected function processExpiresAt(array $modelData): void
            {
                
                    if (!array_key_exists('expires_at', $modelData) && $this->expiresAt === null) {
                        return;
                    }
                

                $value = array_key_exists('expires_at', $modelData) ? $modelData['expires_at'] : $this->expiresAt;

                

                $this->expiresAt = $this->validateExpiresAt($value, $modelData);
            }

            /**
             * Execute all validators for the property expiresAt
             */
            protected function validateExpiresAt($value, array $modelData)
            {
                
                    

if ((!is_string($value) && !$value instanceof UnitEnum) ) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Generic\InvalidTypeException($value ?? null, ...array (
  0 => 'expires_at',
  1 => 'string',
)));
}

                
                    

if (!\PHPModelGenerator\Format\FormatValidatorFromRegEx::validate($value, '/^\\d{4}-\\d{2}-\\d{2}[Tt]\\d{2}:\\d{2}:\\d{2}(\\.\\d+)?([Zz]|[+\\-]\\d{2}:\\d{2})$/')) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\String\FormatException($value ?? null, ...array (
  0 => 'expires_at',
  1 => 'date-time',
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
        
    
        
            if (array_key_exists('message', $modelData) &&
                $modelData['message'] !== $this->message
            ) {
                

                $rollbackValues['message'] = $this->message;
                $this->processMessage($modelData);
            }
        
    
        
            if (array_key_exists('expires_at', $modelData) &&
                $modelData['expires_at'] !== $this->expiresAt
            ) {
                

                $rollbackValues['expiresAt'] = $this->expiresAt;
                $this->processExpiresAt($modelData);
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
