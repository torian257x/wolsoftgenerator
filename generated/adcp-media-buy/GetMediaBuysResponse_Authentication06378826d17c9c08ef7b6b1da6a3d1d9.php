<?php

// @codingStandardsIgnoreFile
// @codeCoverageIgnoreStart

declare(strict_types = 1);


    namespace AdCP\MediaBuy;



    use PHPModelGenerator\Interfaces\JSONModelInterface;

    use UnitEnum;

    use AdCP\MediaBuy\Enums\AuthenticationScheme;

    use PHPModelGenerator\Traits\SerializableTrait;

    use JsonSerializable;

    use PHPModelGenerator\Interfaces\SerializationInterface;

    use PHPModelGenerator\Attributes\JsonPointer;

    use PHPModelGenerator\Attributes\SchemaName;

    use PHPModelGenerator\Attributes\Required;

    use PHPModelGenerator\Attributes\Internal;

    use PHPModelGenerator\Exception\ErrorRegistryException;


/**
 * Class GetMediaBuysResponse_Authentication06378826d17c9c08ef7b6b1da6a3d1d9
 * @package AdCP\MediaBuy 
 *
 * Legacy authentication selector. Same precedence and semantics as `push-notification-config.authentication` — presence opts the seller into Bearer or HMAC-SHA256 signing; absence selects the default RFC 9421 webhook profile keyed off the seller's brand.json `agents[]` JWKS. Deprecated; removed in AdCP 4.0. Credentials are write-only and MUST NOT be echoed on `list_accounts` reads.
 *
 * This is an auto-implemented class implemented by the php-json-schema-model-generator.
 * If you need to implement something in this class use inheritance. Else you will lose your changes if the classes
 * are re-generated.
 */

#[JsonPointer('/properties/media_buys/items/properties/account/properties/notification_configs/items/properties/authentication')]

class GetMediaBuysResponse_Authentication06378826d17c9c08ef7b6b1da6a3d1d9 implements JSONModelInterface, JsonSerializable, SerializationInterface
{
    use SerializableTrait;

    
        
            #[JsonPointer('/properties/media_buys/items/properties/account/properties/notification_configs/items/properties/authentication/properties/schemes')]
        
            #[SchemaName('schemes')]
        
            #[Required]
        
        /** @var AuthenticationScheme[] */
        protected $schemes;
    
        
            #[JsonPointer('/properties/media_buys/items/properties/account/properties/notification_configs/items/properties/authentication/properties/credentials')]
        
            #[SchemaName('credentials')]
        
            #[Required]
        
        /** @var string Credentials for the legacy scheme. Bearer: token. HMAC-SHA256: shared secret. Minimum 32 characters. Exchanged out-of-band during onboarding. Write-only. */
        protected $credentials;
    
        
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
     * GetMediaBuysResponse_Authentication06378826d17c9c08ef7b6b1da6a3d1d9 constructor.
     *
     * @param array $rawModelDataInput
     *
     * @throws ErrorRegistryException
     */
    public function __construct(array $rawModelDataInput = [])
    {
        
            $this->_errorRegistry = new ErrorRegistryException();
        

        

        
            $this->executeBaseValidators($rawModelDataInput);
        

        
            
                $this->processSchemes($rawModelDataInput);
            
        
            
                $this->processCredentials($rawModelDataInput);
            
        
            
        

        
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
   'schemes',
   'credentials',
));

    

    return $additionalProperties;
})()) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Object\AdditionalPropertiesException($value ?? null, ...array (
  0 => 'GetMediaBuysResponse_Authentication06378826d17c9c08ef7b6b1da6a3d1d9',
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
                 * Get the value of schemes.
                 *
                 *
                 * @return AuthenticationScheme[]
                 */
                public function getSchemes(): array | AuthenticationScheme
                {
                    

                    return $this->schemes;
                }
            

            
                /**
                 * Set the value of schemes.
                 *
                 * @param string[]|AuthenticationScheme[] $schemes
                 *
                 * @throws ErrorRegistryException
                 *
                 * @return static
                 */
                public function setSchemes(
                    array | AuthenticationScheme $schemes
                ): static {
                    if ($this->schemes === $schemes) {
                        return $this;
                    }

                    $value = $modelData['schemes'] = $schemes;

                    
                        $this->_errorRegistry = new ErrorRegistryException();
                    

                    

                    $value = $this->validateSchemes($value, $modelData);

                    
                        if ($this->_errorRegistry->getErrors()) {
                            throw $this->_errorRegistry;
                        }
                    

                    $this->schemes = $value;
                    $this->_rawModelDataInput['schemes'] = $schemes;

                    

                    return $this;
                }
            

            /**
             * Extract the value, perform validations and set the property schemes
             *
             * @param array $modelData
             *
             * @throws ErrorRegistryException
             */
            protected function processSchemes(array $modelData): void
            {
                

                $value = array_key_exists('schemes', $modelData) ? $modelData['schemes'] : $this->schemes;

                

                $this->schemes = $this->validateSchemes($value, $modelData);
            }

            /**
             * Execute all validators for the property schemes
             */
            protected function validateSchemes($value, array $modelData)
            {
                
                    

if (!array_key_exists('schemes', $modelData)) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Object\RequiredValueException($value ?? null, ...array (
  0 => 'schemes',
)));
}

                
                    

if ((!is_array($value) && !$value instanceof UnitEnum) ) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Generic\InvalidTypeException($value ?? null, ...array (
  0 => 'schemes',
  1 => 'array',
)));
}

                
                    $this->validateSchemes_ArrayItem_55930f201f2e7c588e0987fcc5b26e59($value, $modelData);
                
                    

if (is_array($value) && count($value) < 1) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Arrays\MinItemsException($value ?? null, ...array (
  0 => 'schemes',
  1 => 1,
)));
}

                
                    

if (is_array($value) && count($value) > 1) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Arrays\MaxItemsException($value ?? null, ...array (
  0 => 'schemes',
  1 => 1,
)));
}

                

                return $value;
            }
        
    
        
            
                /**
                 * Get the value of credentials.
                 *
                 * Credentials for the legacy scheme. Bearer: token. HMAC-SHA256: shared secret. Minimum 32 characters. Exchanged out-of-band during onboarding. Write-only.
                 *
                 * @return string
                 */
                public function getCredentials(): string
                {
                    

                    return $this->credentials;
                }
            

            
                /**
                 * Set the value of credentials.
                 *
                 * @param string $credentials Credentials for the legacy scheme. Bearer: token. HMAC-SHA256: shared secret. Minimum 32 characters. Exchanged out-of-band during onboarding. Write-only.
                 *
                 * @throws ErrorRegistryException
                 *
                 * @return static
                 */
                public function setCredentials(
                    string $credentials
                ): static {
                    if ($this->credentials === $credentials) {
                        return $this;
                    }

                    $value = $modelData['credentials'] = $credentials;

                    
                        $this->_errorRegistry = new ErrorRegistryException();
                    

                    

                    $value = $this->validateCredentials($value, $modelData);

                    
                        if ($this->_errorRegistry->getErrors()) {
                            throw $this->_errorRegistry;
                        }
                    

                    $this->credentials = $value;
                    $this->_rawModelDataInput['credentials'] = $credentials;

                    

                    return $this;
                }
            

            /**
             * Extract the value, perform validations and set the property credentials
             *
             * @param array $modelData
             *
             * @throws ErrorRegistryException
             */
            protected function processCredentials(array $modelData): void
            {
                

                $value = array_key_exists('credentials', $modelData) ? $modelData['credentials'] : $this->credentials;

                

                $this->credentials = $this->validateCredentials($value, $modelData);
            }

            /**
             * Execute all validators for the property credentials
             */
            protected function validateCredentials($value, array $modelData)
            {
                
                    

if (!array_key_exists('credentials', $modelData)) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Object\RequiredValueException($value ?? null, ...array (
  0 => 'credentials',
)));
}

                
                    

if ((!is_string($value) && !$value instanceof UnitEnum) ) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Generic\InvalidTypeException($value ?? null, ...array (
  0 => 'credentials',
  1 => 'string',
)));
}

                
                    

if (is_string($value) && mb_strlen($value) < 32) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\String\MinLengthException($value ?? null, ...array (
  0 => 'credentials',
  1 => 32,
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
    

    
        
            if (array_key_exists('schemes', $modelData) &&
                $modelData['schemes'] !== $this->schemes
            ) {
                

                $rollbackValues['schemes'] = $this->schemes;
                $this->processSchemes($modelData);
            }
        
    
        
            if (array_key_exists('credentials', $modelData) &&
                $modelData['credentials'] !== $this->credentials
            ) {
                

                $rollbackValues['credentials'] = $this->credentials;
                $this->processCredentials($modelData);
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




private function validateSchemes_ArrayItem_55930f201f2e7c588e0987fcc5b26e59(&$value, $modelData): void {
                    $invalidItems_24bd64c131603a093961e558a5795738 = [];
                    
                    if (is_array($value) && (function (&$items) use (&$invalidItems_24bd64c131603a093961e558a5795738, $modelData) {
    
        $originalErrorRegistry = $this->_errorRegistry;
    

    foreach ($items as $index => &$value) {
        
            $this->_errorRegistry = new ErrorRegistryException();
        

        try {
            

            
                

if ($value instanceof UnitEnum && !($value instanceof AuthenticationScheme)) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Generic\InvalidTypeException($value ?? null, ...array (
  0 => 'item of array schemes',
  1 => 'AuthenticationScheme',
)));
}

            
                

if ((!is_string($value) && !$value instanceof UnitEnum) ) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Generic\InvalidTypeException($value ?? null, ...array (
  0 => 'item of array schemes',
  1 => 'string',
)));
}

            
                

if (!($value instanceof UnitEnum) && !in_array($value, array (
   'Bearer',
   'HMAC-SHA256',
), true)) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Generic\EnumException($value ?? null, ...array (
  0 => 'item of array schemes',
  1 => 
  array (
    0 => 'Bearer',
    1 => 'HMAC-SHA256',
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
  'fqcn' => 'AdCP\\MediaBuy\\Enums\\AuthenticationScheme',
));
        } catch (\Throwable $filterException) {
            
                $transformationFailed = true;
            

            $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Filter\InvalidFilterValueException($value ?? null, ...array (
  0 => 'item of array schemes',
  1 => 'php_model_generator_enum',
  2 => $filterException,
)));
        }

        return false;
    })($value)
)) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Filter\IncompatibleFilterException($value ?? null, ...array (
  0 => 'item of array schemes',
  1 => 'php_model_generator_enum',
)));
}

            

            
                if ($this->_errorRegistry->getErrors()) {
                    $invalidItems_24bd64c131603a093961e558a5795738[$index] = $this->_errorRegistry->getErrors();
                }
            
        } catch (\Exception $e) {
            // collect all errors concerning invalid items
            isset($invalidItems_24bd64c131603a093961e558a5795738[$index])
                ? $invalidItems_24bd64c131603a093961e558a5795738[$index][] = $e
                : $invalidItems_24bd64c131603a093961e558a5795738[$index] = [$e];
        }
    }

    
        $this->_errorRegistry = $originalErrorRegistry;
    

    return !empty($invalidItems_24bd64c131603a093961e558a5795738);
})($value)) {
                        $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Arrays\InvalidItemException($value ?? null, ...array (
  0 => 'schemes',
  1 => $invalidItems_24bd64c131603a093961e558a5795738,
)));
                    }
                }


}

// @codeCoverageIgnoreEnd
