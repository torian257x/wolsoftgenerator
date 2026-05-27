<?php

// @codingStandardsIgnoreFile
// @codeCoverageIgnoreStart

declare(strict_types = 1);


    namespace AdCP\MediaBuy;



    use PHPModelGenerator\Interfaces\BuilderInterface;

    use PHPModelGenerator\Exception\ErrorRegistryException;


/**
 * Builder class for GetProductsRequest_GetProductsRequest_Budget_Range9a5faf71cc0e8f31ae0cf0b4eca9f2ea82baf901b7cd78e9727f7514fc8227b9
 */
class GetProductsRequest_GetProductsRequest_Budget_Range9a5faf71cc0e8f31ae0cf0b4eca9f2ea82baf901b7cd78e9727f7514fc8227b9Builder implements BuilderInterface
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
     * Set up a new instance of GetProductsRequest_GetProductsRequest_Budget_Range9a5faf71cc0e8f31ae0cf0b4eca9f2ea82baf901b7cd78e9727f7514fc8227b9 with fully validated properties
     */
    public function validate(): GetProductsRequest_GetProductsRequest_Budget_Range9a5faf71cc0e8f31ae0cf0b4eca9f2ea82baf901b7cd78e9727f7514fc8227b9
    {
        $this->_array_walk_recursive_real(
            $this->_rawModelDataInput,
            function (&$property): void {
                if ($property instanceof BuilderInterface) {
                    $property = $property->getRawModelDataInput();
                }
            },
        );

        return new GetProductsRequest_GetProductsRequest_Budget_Range9a5faf71cc0e8f31ae0cf0b4eca9f2ea82baf901b7cd78e9727f7514fc8227b9($this->_rawModelDataInput);
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
             * Get the value of max.
             *
             * 
             *
             * @return mixed
             */
            public function getMax(): mixed
            {
                return $this->_rawModelDataInput['max'] ?? null;
            }

            /**
             * Set the value of max.
             *
             * @param mixed $max
             *
             * {@link GetProductsRequest_GetProductsRequest_Budget_Range9a5faf71cc0e8f31ae0cf0b4eca9f2ea82baf901b7cd78e9727f7514fc8227b9::processMax}
             * 
             *
             * @return static
             */
            public function setMax(
                mixed $max
            ): static {
                if (array_key_exists('max', $this->_rawModelDataInput)
                    && $this->_rawModelDataInput['max'] === $max
                ) {
                    return $this;
                }

                $value = $modelData['max'] = $max;

                

                

                $this->_rawModelDataInput['max'] = $value;

                return $this;
            }
        
    
}

// @codeCoverageIgnoreEnd
