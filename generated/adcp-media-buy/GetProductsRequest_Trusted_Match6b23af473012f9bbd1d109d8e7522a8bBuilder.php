<?php

// @codingStandardsIgnoreFile
// @codeCoverageIgnoreStart

declare(strict_types = 1);


    namespace AdCP\MediaBuy;



    use PHPModelGenerator\Interfaces\BuilderInterface;

    use PHPModelGenerator\Exception\ErrorRegistryException;

    use AdCP\MediaBuy\Enums\TMPResponseType;


/**
 * Builder class for GetProductsRequest_Trusted_Match6b23af473012f9bbd1d109d8e7522a8b
 */
class GetProductsRequest_Trusted_Match6b23af473012f9bbd1d109d8e7522a8bBuilder implements BuilderInterface
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
     * Set up a new instance of GetProductsRequest_Trusted_Match6b23af473012f9bbd1d109d8e7522a8b with fully validated properties
     */
    public function validate(): GetProductsRequest_Trusted_Match6b23af473012f9bbd1d109d8e7522a8b
    {
        $this->_array_walk_recursive_real(
            $this->_rawModelDataInput,
            function (&$property): void {
                if ($property instanceof BuilderInterface) {
                    $property = $property->getRawModelDataInput();
                }
            },
        );

        return new GetProductsRequest_Trusted_Match6b23af473012f9bbd1d109d8e7522a8b($this->_rawModelDataInput);
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
             * Get the value of providers.
             *
             * Filter to products with specific TMP providers and match types. Each entry identifies a provider by agent_url and optionally requires specific match capabilities. Products must match at least one entry.
             *
             * @return GetProductsRequest_ItemOfArrayProviders1aae21f2a2f4e7d1b18a4961346ec6bf[]|GetProductsRequest_ItemOfArrayProviders1aae21f2a2f4e7d1b18a4961346ec6bfBuilder[]|array|null
             */
            public function getProviders(): mixed
            {
                return $this->_rawModelDataInput['providers'] ?? null;
            }

            /**
             * Set the value of providers.
             *
             * @param GetProductsRequest_ItemOfArrayProviders1aae21f2a2f4e7d1b18a4961346ec6bf[]|GetProductsRequest_ItemOfArrayProviders1aae21f2a2f4e7d1b18a4961346ec6bfBuilder[]|array $providers Filter to products with specific TMP providers and match types. Each entry identifies a provider by agent_url and optionally requires specific match capabilities. Products must match at least one entry.
             *
             * {@link GetProductsRequest_Trusted_Match6b23af473012f9bbd1d109d8e7522a8b::processProviders}
             * 
             *
             * @return static
             */
            public function setProviders(
                mixed $providers
            ): static {
                if (array_key_exists('providers', $this->_rawModelDataInput)
                    && $this->_rawModelDataInput['providers'] === $providers
                ) {
                    return $this;
                }

                $value = $modelData['providers'] = $providers;

                

                

                $this->_rawModelDataInput['providers'] = $value;

                return $this;
            }
        
    
        
            /**
             * Get the value of response_types.
             *
             * Filter to products supporting specific TMP response types (e.g., 'activation', 'creative', 'catalog_items'). Products must support at least one of the listed types.
             *
             * @return string[]|TMPResponseType[]|null
             */
            public function getResponseTypes(): array | TMPResponseType | null
            {
                return $this->_rawModelDataInput['response_types'] ?? null;
            }

            /**
             * Set the value of response_types.
             *
             * @param string[]|TMPResponseType[]|null $responseTypes Filter to products supporting specific TMP response types (e.g., 'activation', 'creative', 'catalog_items'). Products must support at least one of the listed types.
             *
             * {@link GetProductsRequest_Trusted_Match6b23af473012f9bbd1d109d8e7522a8b::processResponseTypes}
             * 
             *
             * @return static
             */
            public function setResponseTypes(
                array | TMPResponseType | null $responseTypes
            ): static {
                if (array_key_exists('response_types', $this->_rawModelDataInput)
                    && $this->_rawModelDataInput['response_types'] === $responseTypes
                ) {
                    return $this;
                }

                $value = $modelData['response_types'] = $responseTypes;

                

                

                $this->_rawModelDataInput['response_types'] = $value;

                return $this;
            }
        
    
}

// @codeCoverageIgnoreEnd
