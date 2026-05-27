<?php

// @codingStandardsIgnoreFile
// @codeCoverageIgnoreStart

declare(strict_types = 1);


    namespace AdCP\MediaBuy;



    use PHPModelGenerator\Interfaces\BuilderInterface;

    use PHPModelGenerator\Exception\ErrorRegistryException;


/**
 * Builder class for GetProductsRequest_GetProductsRequest_Budget_Range9a5faf71cc0e8f31ae0cf0b4eca9f2ea3c5a3c0c3a4d0ed54c2e059584512a1c
 */
class GetProductsRequest_GetProductsRequest_Budget_Range9a5faf71cc0e8f31ae0cf0b4eca9f2ea3c5a3c0c3a4d0ed54c2e059584512a1cBuilder implements BuilderInterface
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
     * Set up a new instance of GetProductsRequest_GetProductsRequest_Budget_Range9a5faf71cc0e8f31ae0cf0b4eca9f2ea3c5a3c0c3a4d0ed54c2e059584512a1c with fully validated properties
     */
    public function validate(): GetProductsRequest_GetProductsRequest_Budget_Range9a5faf71cc0e8f31ae0cf0b4eca9f2ea3c5a3c0c3a4d0ed54c2e059584512a1c
    {
        $this->_array_walk_recursive_real(
            $this->_rawModelDataInput,
            function (&$property): void {
                if ($property instanceof BuilderInterface) {
                    $property = $property->getRawModelDataInput();
                }
            },
        );

        return new GetProductsRequest_GetProductsRequest_Budget_Range9a5faf71cc0e8f31ae0cf0b4eca9f2ea3c5a3c0c3a4d0ed54c2e059584512a1c($this->_rawModelDataInput);
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
             * Get the value of min.
             *
             * 
             *
             * @return mixed
             */
            public function getMin(): mixed
            {
                return $this->_rawModelDataInput['min'] ?? null;
            }

            /**
             * Set the value of min.
             *
             * @param mixed $min
             *
             * {@link GetProductsRequest_GetProductsRequest_Budget_Range9a5faf71cc0e8f31ae0cf0b4eca9f2ea3c5a3c0c3a4d0ed54c2e059584512a1c::processMin}
             * 
             *
             * @return static
             */
            public function setMin(
                mixed $min
            ): static {
                if (array_key_exists('min', $this->_rawModelDataInput)
                    && $this->_rawModelDataInput['min'] === $min
                ) {
                    return $this;
                }

                $value = $modelData['min'] = $min;

                

                

                $this->_rawModelDataInput['min'] = $value;

                return $this;
            }
        
    
}

// @codeCoverageIgnoreEnd
