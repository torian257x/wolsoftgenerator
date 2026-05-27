<?php

// @codingStandardsIgnoreFile
// @codeCoverageIgnoreStart

declare(strict_types = 1);


    namespace AdCP\MediaBuy;



    use PHPModelGenerator\Interfaces\JSONModelInterface;

    use UnitEnum;

    use AdCP\MediaBuy\Enums\GetMediaBuysResponse_ItemOfArrayContacts68bbcda7e3595439f5fe2c3176810b51Role;

    use PHPModelGenerator\Traits\SerializableTrait;

    use JsonSerializable;

    use PHPModelGenerator\Interfaces\SerializationInterface;

    use PHPModelGenerator\Attributes\JsonPointer;

    use PHPModelGenerator\Attributes\SchemaName;

    use PHPModelGenerator\Attributes\Required;

    use PHPModelGenerator\Attributes\Internal;

    use PHPModelGenerator\Exception\ErrorRegistryException;


/**
 * Class GetMediaBuysResponse_ItemOfArrayContacts68bbcda7e3595439f5fe2c3176810b51
 * @package AdCP\MediaBuy 
 *

 * This is an auto-implemented class implemented by the php-json-schema-model-generator.
 * If you need to implement something in this class use inheritance. Else you will lose your changes if the classes
 * are re-generated.
 */

#[JsonPointer('/properties/media_buys/items/properties/account/properties/billing_entity/properties/contacts/items')]

class GetMediaBuysResponse_ItemOfArrayContacts68bbcda7e3595439f5fe2c3176810b51 implements JSONModelInterface, JsonSerializable, SerializationInterface
{
    use SerializableTrait;

    
        
            #[JsonPointer('/properties/media_buys/items/properties/account/properties/billing_entity/properties/contacts/items/properties/role')]
        
            #[SchemaName('role')]
        
            #[Required]
        
        /** @var GetMediaBuysResponse_ItemOfArrayContacts68bbcda7e3595439f5fe2c3176810b51Role Contact's functional role in the business relationship */
        protected $role;
    
        
            #[JsonPointer('/properties/media_buys/items/properties/account/properties/billing_entity/properties/contacts/items/properties/name')]
        
            #[SchemaName('name')]
        
        /** @var string|null Full name of the contact */
        protected $name;
    
        
            #[JsonPointer('/properties/media_buys/items/properties/account/properties/billing_entity/properties/contacts/items/properties/email')]
        
            #[SchemaName('email')]
        
        /** @var string|null */
        protected $email;
    
        
            #[JsonPointer('/properties/media_buys/items/properties/account/properties/billing_entity/properties/contacts/items/properties/phone')]
        
            #[SchemaName('phone')]
        
        /** @var string|null */
        protected $phone;
    
        
            #[Internal]
        
        /** @var array Values which might be skipped for serialization if not provided */
        private $_skipNotProvidedPropertiesMap = array (
  1 => 'name',
  2 => 'email',
  3 => 'phone',
);
    
    #[Internal]
    /** @var array */
    protected $_rawModelDataInput = [];

    
        #[Internal]
        /** @var ErrorRegistryException Collect all validation errors */
        protected $_errorRegistry;
    

    /**
     * GetMediaBuysResponse_ItemOfArrayContacts68bbcda7e3595439f5fe2c3176810b51 constructor.
     *
     * @param array $rawModelDataInput
     *
     * @throws ErrorRegistryException
     */
    public function __construct(array $rawModelDataInput = [])
    {
        
            $this->_errorRegistry = new ErrorRegistryException();
        

        

        
            $this->executeBaseValidators($rawModelDataInput);
        

        
            
                $this->processRole($rawModelDataInput);
            
        
            
                $this->processName($rawModelDataInput);
            
        
            
                $this->processEmail($rawModelDataInput);
            
        
            
                $this->processPhone($rawModelDataInput);
            
        
            
        

        
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
   'role',
   'name',
   'email',
   'phone',
));

    

    return $additionalProperties;
})()) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Object\AdditionalPropertiesException($value ?? null, ...array (
  0 => 'GetMediaBuysResponse_ItemOfArrayContacts68bbcda7e3595439f5fe2c3176810b51',
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
                 * Get the value of role.
                 *
                 * Contact's functional role in the business relationship
                 *
                 * @return GetMediaBuysResponse_ItemOfArrayContacts68bbcda7e3595439f5fe2c3176810b51Role
                 */
                public function getRole(): GetMediaBuysResponse_ItemOfArrayContacts68bbcda7e3595439f5fe2c3176810b51Role
                {
                    

                    return $this->role;
                }
            

            
                /**
                 * Set the value of role.
                 *
                 * @param string|GetMediaBuysResponse_ItemOfArrayContacts68bbcda7e3595439f5fe2c3176810b51Role $role Contact's functional role in the business relationship
                 *
                 * @throws ErrorRegistryException
                 *
                 * @return static
                 */
                public function setRole(
                    string | GetMediaBuysResponse_ItemOfArrayContacts68bbcda7e3595439f5fe2c3176810b51Role $role
                ): static {
                    if ($this->role === $role) {
                        return $this;
                    }

                    $value = $modelData['role'] = $role;

                    
                        $this->_errorRegistry = new ErrorRegistryException();
                    

                    

                    $value = $this->validateRole($value, $modelData);

                    
                        if ($this->_errorRegistry->getErrors()) {
                            throw $this->_errorRegistry;
                        }
                    

                    $this->role = $value;
                    $this->_rawModelDataInput['role'] = $role;

                    

                    return $this;
                }
            

            /**
             * Extract the value, perform validations and set the property role
             *
             * @param array $modelData
             *
             * @throws ErrorRegistryException
             */
            protected function processRole(array $modelData): void
            {
                

                $value = array_key_exists('role', $modelData) ? $modelData['role'] : $this->role;

                

                $this->role = $this->validateRole($value, $modelData);
            }

            /**
             * Execute all validators for the property role
             */
            protected function validateRole($value, array $modelData)
            {
                
                    

if ($value instanceof UnitEnum && !($value instanceof GetMediaBuysResponse_ItemOfArrayContacts68bbcda7e3595439f5fe2c3176810b51Role)) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Generic\InvalidTypeException($value ?? null, ...array (
  0 => 'role',
  1 => 'GetMediaBuysResponse_ItemOfArrayContacts68bbcda7e3595439f5fe2c3176810b51Role',
)));
}

                
                    

if (!array_key_exists('role', $modelData)) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Object\RequiredValueException($value ?? null, ...array (
  0 => 'role',
)));
}

                
                    

if ((!is_string($value) && !$value instanceof UnitEnum) ) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Generic\InvalidTypeException($value ?? null, ...array (
  0 => 'role',
  1 => 'string',
)));
}

                
                    

if (!($value instanceof UnitEnum) && !in_array($value, array (
   'billing',
   'legal',
   'creative',
   'general',
), true)) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Generic\EnumException($value ?? null, ...array (
  0 => 'role',
  1 => 
  array (
    0 => 'billing',
    1 => 'legal',
    2 => 'creative',
    3 => 'general',
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
  'fqcn' => 'AdCP\\MediaBuy\\Enums\\GetMediaBuysResponse_ItemOfArrayContacts68bbcda7e3595439f5fe2c3176810b51Role',
));
        } catch (\Throwable $filterException) {
            
                $transformationFailed = true;
            

            $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Filter\InvalidFilterValueException($value ?? null, ...array (
  0 => 'role',
  1 => 'php_model_generator_enum',
  2 => $filterException,
)));
        }

        return false;
    })($value)
)) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Filter\IncompatibleFilterException($value ?? null, ...array (
  0 => 'role',
  1 => 'php_model_generator_enum',
)));
}

                

                return $value;
            }
        
    
        
            
                /**
                 * Get the value of name.
                 *
                 * Full name of the contact
                 *
                 * @return string|null
                 */
                public function getName(): ?string
                {
                    

                    return $this->name;
                }
            

            
                /**
                 * Set the value of name.
                 *
                 * @param string $name Full name of the contact
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
                
                    if (!array_key_exists('name', $modelData) && $this->name === null) {
                        return;
                    }
                

                $value = array_key_exists('name', $modelData) ? $modelData['name'] : $this->name;

                

                $this->name = $this->validateName($value, $modelData);
            }

            /**
             * Execute all validators for the property name
             */
            protected function validateName($value, array $modelData)
            {
                
                    

if ((!is_string($value) && !$value instanceof UnitEnum) ) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Generic\InvalidTypeException($value ?? null, ...array (
  0 => 'name',
  1 => 'string',
)));
}

                
                    

if (is_string($value) && mb_strlen($value) > 200) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\String\MaxLengthException($value ?? null, ...array (
  0 => 'name',
  1 => 200,
)));
}

                

                return $value;
            }
        
    
        
            
                /**
                 * Get the value of email.
                 *
                 *
                 * @return string|null
                 */
                public function getEmail(): ?string
                {
                    

                    return $this->email;
                }
            

            
                /**
                 * Set the value of email.
                 *
                 * @param string $email
                 *
                 * @throws ErrorRegistryException
                 *
                 * @return static
                 */
                public function setEmail(
                    string $email
                ): static {
                    if ($this->email === $email) {
                        return $this;
                    }

                    $value = $modelData['email'] = $email;

                    
                        $this->_errorRegistry = new ErrorRegistryException();
                    

                    

                    $value = $this->validateEmail($value, $modelData);

                    
                        if ($this->_errorRegistry->getErrors()) {
                            throw $this->_errorRegistry;
                        }
                    

                    $this->email = $value;
                    $this->_rawModelDataInput['email'] = $email;

                    

                    return $this;
                }
            

            /**
             * Extract the value, perform validations and set the property email
             *
             * @param array $modelData
             *
             * @throws ErrorRegistryException
             */
            protected function processEmail(array $modelData): void
            {
                
                    if (!array_key_exists('email', $modelData) && $this->email === null) {
                        return;
                    }
                

                $value = array_key_exists('email', $modelData) ? $modelData['email'] : $this->email;

                

                $this->email = $this->validateEmail($value, $modelData);
            }

            /**
             * Execute all validators for the property email
             */
            protected function validateEmail($value, array $modelData)
            {
                
                    

if ((!is_string($value) && !$value instanceof UnitEnum) ) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Generic\InvalidTypeException($value ?? null, ...array (
  0 => 'email',
  1 => 'string',
)));
}

                
                    

if (is_string($value) && mb_strlen($value) > 254) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\String\MaxLengthException($value ?? null, ...array (
  0 => 'email',
  1 => 254,
)));
}

                
                    

if (!\PHPModelGenerator\Format\FormatValidatorFromRegEx::validate($value, '/^[a-zA-Z0-9._%+\\-]+@[a-zA-Z0-9.\\-]+\\.[a-zA-Z]{2,}$/')) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\String\FormatException($value ?? null, ...array (
  0 => 'email',
  1 => 'email',
)));
}

                

                return $value;
            }
        
    
        
            
                /**
                 * Get the value of phone.
                 *
                 *
                 * @return string|null
                 */
                public function getPhone(): ?string
                {
                    

                    return $this->phone;
                }
            

            
                /**
                 * Set the value of phone.
                 *
                 * @param string $phone
                 *
                 * @throws ErrorRegistryException
                 *
                 * @return static
                 */
                public function setPhone(
                    string $phone
                ): static {
                    if ($this->phone === $phone) {
                        return $this;
                    }

                    $value = $modelData['phone'] = $phone;

                    
                        $this->_errorRegistry = new ErrorRegistryException();
                    

                    

                    $value = $this->validatePhone($value, $modelData);

                    
                        if ($this->_errorRegistry->getErrors()) {
                            throw $this->_errorRegistry;
                        }
                    

                    $this->phone = $value;
                    $this->_rawModelDataInput['phone'] = $phone;

                    

                    return $this;
                }
            

            /**
             * Extract the value, perform validations and set the property phone
             *
             * @param array $modelData
             *
             * @throws ErrorRegistryException
             */
            protected function processPhone(array $modelData): void
            {
                
                    if (!array_key_exists('phone', $modelData) && $this->phone === null) {
                        return;
                    }
                

                $value = array_key_exists('phone', $modelData) ? $modelData['phone'] : $this->phone;

                

                $this->phone = $this->validatePhone($value, $modelData);
            }

            /**
             * Execute all validators for the property phone
             */
            protected function validatePhone($value, array $modelData)
            {
                
                    

if ((!is_string($value) && !$value instanceof UnitEnum) ) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Generic\InvalidTypeException($value ?? null, ...array (
  0 => 'phone',
  1 => 'string',
)));
}

                
                    

if (is_string($value) && mb_strlen($value) > 30) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\String\MaxLengthException($value ?? null, ...array (
  0 => 'phone',
  1 => 30,
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
    

    
        
            if (array_key_exists('role', $modelData) &&
                $modelData['role'] !== $this->role
            ) {
                

                $rollbackValues['role'] = $this->role;
                $this->processRole($modelData);
            }
        
    
        
            if (array_key_exists('name', $modelData) &&
                $modelData['name'] !== $this->name
            ) {
                

                $rollbackValues['name'] = $this->name;
                $this->processName($modelData);
            }
        
    
        
            if (array_key_exists('email', $modelData) &&
                $modelData['email'] !== $this->email
            ) {
                

                $rollbackValues['email'] = $this->email;
                $this->processEmail($modelData);
            }
        
    
        
            if (array_key_exists('phone', $modelData) &&
                $modelData['phone'] !== $this->phone
            ) {
                

                $rollbackValues['phone'] = $this->phone;
                $this->processPhone($modelData);
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
 * serialize the property role
 */
protected function serializeRole()
{
    return \PHPModelGenerator\Filter\Enum::serialize($this->role, array (
  'fqcn' => 'AdCP\\MediaBuy\\Enums\\GetMediaBuysResponse_ItemOfArrayContacts68bbcda7e3595439f5fe2c3176810b51Role',
));
}





}

// @codeCoverageIgnoreEnd
