<?php

// @codingStandardsIgnoreFile
// @codeCoverageIgnoreStart

declare(strict_types = 1);


    namespace AdCP\MediaBuy;



    use PHPModelGenerator\Interfaces\BuilderInterface;

    use PHPModelGenerator\Exception\ErrorRegistryException;


/**
 * Builder class for GetMediaBuysRequest_Ai_Tool866c3fd929909158c718664e57db4355
 */
class GetMediaBuysRequest_Ai_Tool866c3fd929909158c718664e57db4355Builder implements BuilderInterface
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
     * Set up a new instance of GetMediaBuysRequest_Ai_Tool866c3fd929909158c718664e57db4355 with fully validated properties
     */
    public function validate(): GetMediaBuysRequest_Ai_Tool866c3fd929909158c718664e57db4355
    {
        $this->_array_walk_recursive_real(
            $this->_rawModelDataInput,
            function (&$property): void {
                if ($property instanceof BuilderInterface) {
                    $property = $property->getRawModelDataInput();
                }
            },
        );

        return new GetMediaBuysRequest_Ai_Tool866c3fd929909158c718664e57db4355($this->_rawModelDataInput);
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
             * Get the value of name.
             *
             * Name of the AI tool or model (e.g., 'DALL-E 3', 'Stable Diffusion XL', 'Gemini')
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
             * @param string $name Name of the AI tool or model (e.g., 'DALL-E 3', 'Stable Diffusion XL', 'Gemini')
             *
             * {@link GetMediaBuysRequest_Ai_Tool866c3fd929909158c718664e57db4355::processName}
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
             * Get the value of version.
             *
             * Version identifier for the AI tool or model (e.g., '25.1', '0125', '2.1'). For generative models, use the model version rather than the API version.
             *
             * @return string|null
             */
            public function getVersion(): ?string
            {
                return $this->_rawModelDataInput['version'] ?? null;
            }

            /**
             * Set the value of version.
             *
             * @param string $version Version identifier for the AI tool or model (e.g., '25.1', '0125', '2.1'). For generative models, use the model version rather than the API version.
             *
             * {@link GetMediaBuysRequest_Ai_Tool866c3fd929909158c718664e57db4355::processVersion}
             * 
             *
             * @return static
             */
            public function setVersion(
                string $version
            ): static {
                if (array_key_exists('version', $this->_rawModelDataInput)
                    && $this->_rawModelDataInput['version'] === $version
                ) {
                    return $this;
                }

                $value = $modelData['version'] = $version;

                

                

                $this->_rawModelDataInput['version'] = $value;

                return $this;
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
                return $this->_rawModelDataInput['provider'] ?? null;
            }

            /**
             * Set the value of provider.
             *
             * @param string $provider Organization that provides the AI tool (e.g., 'OpenAI', 'Stability AI', 'Google')
             *
             * {@link GetMediaBuysRequest_Ai_Tool866c3fd929909158c718664e57db4355::processProvider}
             * 
             *
             * @return static
             */
            public function setProvider(
                string $provider
            ): static {
                if (array_key_exists('provider', $this->_rawModelDataInput)
                    && $this->_rawModelDataInput['provider'] === $provider
                ) {
                    return $this;
                }

                $value = $modelData['provider'] = $provider;

                

                

                $this->_rawModelDataInput['provider'] = $value;

                return $this;
            }
        
    
}

// @codeCoverageIgnoreEnd
