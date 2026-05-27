<?php

// @codingStandardsIgnoreFile
// @codeCoverageIgnoreStart

declare(strict_types = 1);


    namespace AdCP\MediaBuy;



    use PHPModelGenerator\Interfaces\BuilderInterface;

    use PHPModelGenerator\Exception\ErrorRegistryException;

    use AdCP\MediaBuy\Enums\AuthenticationScheme;


/**
 * Builder class for GetMediaBuysResponse_Authentication06378826d17c9c08ef7b6b1da6a3d1d9
 */
class GetMediaBuysResponse_Authentication06378826d17c9c08ef7b6b1da6a3d1d9Builder implements BuilderInterface
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
     * Set up a new instance of GetMediaBuysResponse_Authentication06378826d17c9c08ef7b6b1da6a3d1d9 with fully validated properties
     */
    public function validate(): GetMediaBuysResponse_Authentication06378826d17c9c08ef7b6b1da6a3d1d9
    {
        $this->_array_walk_recursive_real(
            $this->_rawModelDataInput,
            function (&$property): void {
                if ($property instanceof BuilderInterface) {
                    $property = $property->getRawModelDataInput();
                }
            },
        );

        return new GetMediaBuysResponse_Authentication06378826d17c9c08ef7b6b1da6a3d1d9($this->_rawModelDataInput);
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
             * Get the value of schemes.
             *
             * 
             *
             * @return string[]|AuthenticationScheme[]|null
             */
            public function getSchemes(): array | AuthenticationScheme | null
            {
                return $this->_rawModelDataInput['schemes'] ?? null;
            }

            /**
             * Set the value of schemes.
             *
             * @param string[]|AuthenticationScheme[] $schemes
             *
             * {@link GetMediaBuysResponse_Authentication06378826d17c9c08ef7b6b1da6a3d1d9::processSchemes}
             * 
             *
             * @return static
             */
            public function setSchemes(
                array | AuthenticationScheme $schemes
            ): static {
                if (array_key_exists('schemes', $this->_rawModelDataInput)
                    && $this->_rawModelDataInput['schemes'] === $schemes
                ) {
                    return $this;
                }

                $value = $modelData['schemes'] = $schemes;

                

                

                $this->_rawModelDataInput['schemes'] = $value;

                return $this;
            }
        
    
        
            /**
             * Get the value of credentials.
             *
             * Credentials for the legacy scheme. Bearer: token. HMAC-SHA256: shared secret. Minimum 32 characters. Exchanged out-of-band during onboarding. Write-only.
             *
             * @return string|null
             */
            public function getCredentials(): ?string
            {
                return $this->_rawModelDataInput['credentials'] ?? null;
            }

            /**
             * Set the value of credentials.
             *
             * @param string $credentials Credentials for the legacy scheme. Bearer: token. HMAC-SHA256: shared secret. Minimum 32 characters. Exchanged out-of-band during onboarding. Write-only.
             *
             * {@link GetMediaBuysResponse_Authentication06378826d17c9c08ef7b6b1da6a3d1d9::processCredentials}
             * 
             *
             * @return static
             */
            public function setCredentials(
                string $credentials
            ): static {
                if (array_key_exists('credentials', $this->_rawModelDataInput)
                    && $this->_rawModelDataInput['credentials'] === $credentials
                ) {
                    return $this;
                }

                $value = $modelData['credentials'] = $credentials;

                

                

                $this->_rawModelDataInput['credentials'] = $value;

                return $this;
            }
        
    
}

// @codeCoverageIgnoreEnd
