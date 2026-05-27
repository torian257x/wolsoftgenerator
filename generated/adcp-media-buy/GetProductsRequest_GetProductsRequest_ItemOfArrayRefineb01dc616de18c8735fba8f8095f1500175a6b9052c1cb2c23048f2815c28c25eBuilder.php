<?php

// @codingStandardsIgnoreFile
// @codeCoverageIgnoreStart

declare(strict_types = 1);


    namespace AdCP\MediaBuy;



    use PHPModelGenerator\Interfaces\BuilderInterface;

    use PHPModelGenerator\Exception\ErrorRegistryException;


/**
 * Builder class for GetProductsRequest_GetProductsRequest_ItemOfArrayRefineb01dc616de18c8735fba8f8095f1500175a6b9052c1cb2c23048f2815c28c25e
 */
class GetProductsRequest_GetProductsRequest_ItemOfArrayRefineb01dc616de18c8735fba8f8095f1500175a6b9052c1cb2c23048f2815c28c25eBuilder implements BuilderInterface
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
     * Set up a new instance of GetProductsRequest_GetProductsRequest_ItemOfArrayRefineb01dc616de18c8735fba8f8095f1500175a6b9052c1cb2c23048f2815c28c25e with fully validated properties
     */
    public function validate(): GetProductsRequest_GetProductsRequest_ItemOfArrayRefineb01dc616de18c8735fba8f8095f1500175a6b9052c1cb2c23048f2815c28c25e
    {
        $this->_array_walk_recursive_real(
            $this->_rawModelDataInput,
            function (&$property): void {
                if ($property instanceof BuilderInterface) {
                    $property = $property->getRawModelDataInput();
                }
            },
        );

        return new GetProductsRequest_GetProductsRequest_ItemOfArrayRefineb01dc616de18c8735fba8f8095f1500175a6b9052c1cb2c23048f2815c28c25e($this->_rawModelDataInput);
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
             * Get the value of scope.
             *
             * Change scoped to the overall request — direction for the selection as a whole.
             *
             * @return string|null
             */
            public function getScope(): ?string
            {
                return $this->_rawModelDataInput['scope'] ?? null;
            }

            /**
             * Set the value of scope.
             *
             * @param string $scope Change scoped to the overall request — direction for the selection as a whole.
             *
             * {@link GetProductsRequest_GetProductsRequest_ItemOfArrayRefineb01dc616de18c8735fba8f8095f1500175a6b9052c1cb2c23048f2815c28c25e::processScope}
             * 
             *
             * @return static
             */
            public function setScope(
                string $scope
            ): static {
                if (array_key_exists('scope', $this->_rawModelDataInput)
                    && $this->_rawModelDataInput['scope'] === $scope
                ) {
                    return $this;
                }

                $value = $modelData['scope'] = $scope;

                

                

                $this->_rawModelDataInput['scope'] = $value;

                return $this;
            }
        
    
        
            /**
             * Get the value of ask.
             *
             * What the buyer is asking for at the request level (e.g., 'more video options and less display', 'suggest how to combine these products').
             *
             * @return string|null
             */
            public function getAsk(): ?string
            {
                return $this->_rawModelDataInput['ask'] ?? null;
            }

            /**
             * Set the value of ask.
             *
             * @param string $ask What the buyer is asking for at the request level (e.g., 'more video options and less display', 'suggest how to combine these products').
             *
             * {@link GetProductsRequest_GetProductsRequest_ItemOfArrayRefineb01dc616de18c8735fba8f8095f1500175a6b9052c1cb2c23048f2815c28c25e::processAsk}
             * 
             *
             * @return static
             */
            public function setAsk(
                string $ask
            ): static {
                if (array_key_exists('ask', $this->_rawModelDataInput)
                    && $this->_rawModelDataInput['ask'] === $ask
                ) {
                    return $this;
                }

                $value = $modelData['ask'] = $ask;

                

                

                $this->_rawModelDataInput['ask'] = $value;

                return $this;
            }
        
    
}

// @codeCoverageIgnoreEnd
