<?php

// @codingStandardsIgnoreFile
// @codeCoverageIgnoreStart

declare(strict_types = 1);


    namespace AdCP\MediaBuy;



    use PHPModelGenerator\Interfaces\BuilderInterface;

    use PHPModelGenerator\Exception\ErrorRegistryException;


/**
 * Builder class for GetProductsRequest_Signal_Idc051d99d9bca014b860d0fddcd4e1653
 */
class GetProductsRequest_Signal_Idc051d99d9bca014b860d0fddcd4e1653Builder implements BuilderInterface
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
     * Set up a new instance of GetProductsRequest_Signal_Idc051d99d9bca014b860d0fddcd4e1653 with fully validated properties
     */
    public function validate(): GetProductsRequest_Signal_Idc051d99d9bca014b860d0fddcd4e1653
    {
        $this->_array_walk_recursive_real(
            $this->_rawModelDataInput,
            function (&$property): void {
                if ($property instanceof BuilderInterface) {
                    $property = $property->getRawModelDataInput();
                }
            },
        );

        return new GetProductsRequest_Signal_Idc051d99d9bca014b860d0fddcd4e1653($this->_rawModelDataInput);
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
             * Get the value of source.
             *
             * Discriminator indicating this signal is from a data provider's published catalog
             *
             * @return string|null
             */
            public function getSource(): ?string
            {
                return $this->_rawModelDataInput['source'] ?? null;
            }

            /**
             * Set the value of source.
             *
             * @param string $source Discriminator indicating this signal is from a data provider's published catalog
             *
             * {@link GetProductsRequest_Signal_Idc051d99d9bca014b860d0fddcd4e1653::processSource}
             * 
             *
             * @return static
             */
            public function setSource(
                string $source
            ): static {
                if (array_key_exists('source', $this->_rawModelDataInput)
                    && $this->_rawModelDataInput['source'] === $source
                ) {
                    return $this;
                }

                $value = $modelData['source'] = $source;

                

                

                $this->_rawModelDataInput['source'] = $value;

                return $this;
            }
        
    
        
            /**
             * Get the value of data_provider_domain.
             *
             * Domain of the data provider that owns this signal (e.g., 'polk.com', 'experian.com'). The signal definition is published at this domain's /.well-known/adagents.json
             *
             * @return string|null
             */
            public function getDataProviderDomain(): ?string
            {
                return $this->_rawModelDataInput['data_provider_domain'] ?? null;
            }

            /**
             * Set the value of data_provider_domain.
             *
             * @param string $dataProviderDomain Domain of the data provider that owns this signal (e.g., 'polk.com', 'experian.com'). The signal definition is published at this domain's /.well-known/adagents.json
             *
             * {@link GetProductsRequest_Signal_Idc051d99d9bca014b860d0fddcd4e1653::processDataProviderDomain}
             * 
             *
             * @return static
             */
            public function setDataProviderDomain(
                string $dataProviderDomain
            ): static {
                if (array_key_exists('data_provider_domain', $this->_rawModelDataInput)
                    && $this->_rawModelDataInput['data_provider_domain'] === $dataProviderDomain
                ) {
                    return $this;
                }

                $value = $modelData['data_provider_domain'] = $dataProviderDomain;

                

                

                $this->_rawModelDataInput['data_provider_domain'] = $value;

                return $this;
            }
        
    
        
            /**
             * Get the value of id.
             *
             * Signal identifier within the data provider's catalog (e.g., 'likely_tesla_buyers', 'income_100k_plus')
             *
             * @return string|null
             */
            public function getId(): ?string
            {
                return $this->_rawModelDataInput['id'] ?? null;
            }

            /**
             * Set the value of id.
             *
             * @param string $id Signal identifier within the data provider's catalog (e.g., 'likely_tesla_buyers', 'income_100k_plus')
             *
             * {@link GetProductsRequest_Signal_Idc051d99d9bca014b860d0fddcd4e1653::processId}
             * 
             *
             * @return static
             */
            public function setId(
                string $id
            ): static {
                if (array_key_exists('id', $this->_rawModelDataInput)
                    && $this->_rawModelDataInput['id'] === $id
                ) {
                    return $this;
                }

                $value = $modelData['id'] = $id;

                

                

                $this->_rawModelDataInput['id'] = $value;

                return $this;
            }
        
    
}

// @codeCoverageIgnoreEnd
