<?php

// @codingStandardsIgnoreFile
// @codeCoverageIgnoreStart

declare(strict_types = 1);


    namespace AdCP\MediaBuy;



    use PHPModelGenerator\Interfaces\BuilderInterface;

    use PHPModelGenerator\Exception\ErrorRegistryException;

    use AdCP\MediaBuy\Enums\GetMediaBuysResponse_ItemOfArrayContacts68bbcda7e3595439f5fe2c3176810b51Role;


/**
 * Builder class for GetMediaBuysResponse_ItemOfArrayContacts68bbcda7e3595439f5fe2c3176810b51
 */
class GetMediaBuysResponse_ItemOfArrayContacts68bbcda7e3595439f5fe2c3176810b51Builder implements BuilderInterface
{
    /** @var array */
    protected $_rawModelDataInput = [];

    
        /** @var ErrorRegistryException */
        protected $_errorRegistry;
    

    public function __construct(array $rawModelDataInput = [])
    {
        $this->_rawModelDataInput = $rawModelDataInput;

        
            $this->_errorRegistry = new ErrorRegistryException();
        
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
     * Set up a new instance of GetMediaBuysResponse_ItemOfArrayContacts68bbcda7e3595439f5fe2c3176810b51 with fully validated properties
     */
    public function validate(): GetMediaBuysResponse_ItemOfArrayContacts68bbcda7e3595439f5fe2c3176810b51
    {
        $this->_array_walk_recursive_real(
            $this->_rawModelDataInput,
            function (&$property): void {
                if ($property instanceof BuilderInterface) {
                    $property = $property->getRawModelDataInput();
                }
            },
        );

        return new GetMediaBuysResponse_ItemOfArrayContacts68bbcda7e3595439f5fe2c3176810b51($this->_rawModelDataInput);
    }

    // PHPs builtin array_walk_recursive doesn't handle newly inserted arrays which we need to visit
    private function _array_walk_recursive_real(array &$array, callable $callback): void
    {
        foreach ($array as &$value) {
            $callback($value);

            if (is_array($value)) {
                $this->_array_walk_recursive_real($value, $callback);
            }
        }
    }

    
        
            /**
             * Get the value of role.
             *
             * Contact's functional role in the business relationship
             *
             * @return string|GetMediaBuysResponse_ItemOfArrayContacts68bbcda7e3595439f5fe2c3176810b51Role|null
             */
            public function getRole(): string | GetMediaBuysResponse_ItemOfArrayContacts68bbcda7e3595439f5fe2c3176810b51Role | null
            {
                return $this->_rawModelDataInput['role'] ?? null;
            }

            /**
             * Set the value of role.
             *
             * @param string|GetMediaBuysResponse_ItemOfArrayContacts68bbcda7e3595439f5fe2c3176810b51Role $role Contact's functional role in the business relationship
             *
             * {@link GetMediaBuysResponse_ItemOfArrayContacts68bbcda7e3595439f5fe2c3176810b51::processRole}
             * 
             *
             * @return static
             */
            public function setRole(
                string | GetMediaBuysResponse_ItemOfArrayContacts68bbcda7e3595439f5fe2c3176810b51Role $role
            ): static {
                if (array_key_exists('role', $this->_rawModelDataInput)
                    && $this->_rawModelDataInput['role'] === $role
                ) {
                    return $this;
                }

                $value = $modelData['role'] = $role;

                

                

                $this->_rawModelDataInput['role'] = $value;

                return $this;
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
                return $this->_rawModelDataInput['name'] ?? null;
            }

            /**
             * Set the value of name.
             *
             * @param string $name Full name of the contact
             *
             * {@link GetMediaBuysResponse_ItemOfArrayContacts68bbcda7e3595439f5fe2c3176810b51::processName}
             * 
             *
             * @return static
             */
            public function setName(
                string $name
            ): static {
                if (array_key_exists('name', $this->_rawModelDataInput)
                    && $this->_rawModelDataInput['name'] === $name
                ) {
                    return $this;
                }

                $value = $modelData['name'] = $name;

                

                

                $this->_rawModelDataInput['name'] = $value;

                return $this;
            }
        
    
        
            /**
             * Get the value of email.
             *
             * 
             *
             * @return string|null
             */
            public function getEmail(): ?string
            {
                return $this->_rawModelDataInput['email'] ?? null;
            }

            /**
             * Set the value of email.
             *
             * @param string $email
             *
             * {@link GetMediaBuysResponse_ItemOfArrayContacts68bbcda7e3595439f5fe2c3176810b51::processEmail}
             * 
             *
             * @return static
             */
            public function setEmail(
                string $email
            ): static {
                if (array_key_exists('email', $this->_rawModelDataInput)
                    && $this->_rawModelDataInput['email'] === $email
                ) {
                    return $this;
                }

                $value = $modelData['email'] = $email;

                

                

                $this->_rawModelDataInput['email'] = $value;

                return $this;
            }
        
    
        
            /**
             * Get the value of phone.
             *
             * 
             *
             * @return string|null
             */
            public function getPhone(): ?string
            {
                return $this->_rawModelDataInput['phone'] ?? null;
            }

            /**
             * Set the value of phone.
             *
             * @param string $phone
             *
             * {@link GetMediaBuysResponse_ItemOfArrayContacts68bbcda7e3595439f5fe2c3176810b51::processPhone}
             * 
             *
             * @return static
             */
            public function setPhone(
                string $phone
            ): static {
                if (array_key_exists('phone', $this->_rawModelDataInput)
                    && $this->_rawModelDataInput['phone'] === $phone
                ) {
                    return $this;
                }

                $value = $modelData['phone'] = $phone;

                

                

                $this->_rawModelDataInput['phone'] = $value;

                return $this;
            }
        
    
}

// @codeCoverageIgnoreEnd
