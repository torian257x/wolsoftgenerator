<?php

// @codingStandardsIgnoreFile
// @codeCoverageIgnoreStart

declare(strict_types = 1);


    namespace AdCP\MediaBuy;



    use PHPModelGenerator\Interfaces\BuilderInterface;

    use PHPModelGenerator\Exception\ErrorRegistryException;


/**
 * Builder class for GetMediaBuysResponse_Setup373eba143d729f5252325a7d3837aa7d
 */
class GetMediaBuysResponse_Setup373eba143d729f5252325a7d3837aa7dBuilder implements BuilderInterface
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
     * Set up a new instance of GetMediaBuysResponse_Setup373eba143d729f5252325a7d3837aa7d with fully validated properties
     */
    public function validate(): GetMediaBuysResponse_Setup373eba143d729f5252325a7d3837aa7d
    {
        $this->_array_walk_recursive_real(
            $this->_rawModelDataInput,
            function (&$property): void {
                if ($property instanceof BuilderInterface) {
                    $property = $property->getRawModelDataInput();
                }
            },
        );

        return new GetMediaBuysResponse_Setup373eba143d729f5252325a7d3837aa7d($this->_rawModelDataInput);
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
             * Get the value of url.
             *
             * URL where the human can complete the required action (credit application, legal agreement, add funds).
             *
             * @return string|null
             */
            public function getUrl(): ?string
            {
                return $this->_rawModelDataInput['url'] ?? null;
            }

            /**
             * Set the value of url.
             *
             * @param string $url URL where the human can complete the required action (credit application, legal agreement, add funds).
             *
             * {@link GetMediaBuysResponse_Setup373eba143d729f5252325a7d3837aa7d::processUrl}
             * 
             *
             * @return static
             */
            public function setUrl(
                string $url
            ): static {
                if (array_key_exists('url', $this->_rawModelDataInput)
                    && $this->_rawModelDataInput['url'] === $url
                ) {
                    return $this;
                }

                $value = $modelData['url'] = $url;

                

                

                $this->_rawModelDataInput['url'] = $value;

                return $this;
            }
        
    
        
            /**
             * Get the value of message.
             *
             * Human-readable description of what's needed.
             *
             * @return string|null
             */
            public function getMessage(): ?string
            {
                return $this->_rawModelDataInput['message'] ?? null;
            }

            /**
             * Set the value of message.
             *
             * @param string $message Human-readable description of what's needed.
             *
             * {@link GetMediaBuysResponse_Setup373eba143d729f5252325a7d3837aa7d::processMessage}
             * 
             *
             * @return static
             */
            public function setMessage(
                string $message
            ): static {
                if (array_key_exists('message', $this->_rawModelDataInput)
                    && $this->_rawModelDataInput['message'] === $message
                ) {
                    return $this;
                }

                $value = $modelData['message'] = $message;

                

                

                $this->_rawModelDataInput['message'] = $value;

                return $this;
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
                return $this->_rawModelDataInput['expires_at'] ?? null;
            }

            /**
             * Set the value of expires_at.
             *
             * @param string $expiresAt When this setup link expires.
             *
             * {@link GetMediaBuysResponse_Setup373eba143d729f5252325a7d3837aa7d::processExpiresAt}
             * 
             *
             * @return static
             */
            public function setExpiresAt(
                string $expiresAt
            ): static {
                if (array_key_exists('expires_at', $this->_rawModelDataInput)
                    && $this->_rawModelDataInput['expires_at'] === $expiresAt
                ) {
                    return $this;
                }

                $value = $modelData['expires_at'] = $expiresAt;

                

                

                $this->_rawModelDataInput['expires_at'] = $value;

                return $this;
            }
        
    
}

// @codeCoverageIgnoreEnd
