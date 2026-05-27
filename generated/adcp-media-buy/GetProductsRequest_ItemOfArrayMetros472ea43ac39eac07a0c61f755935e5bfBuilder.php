<?php

// @codingStandardsIgnoreFile
// @codeCoverageIgnoreStart

declare(strict_types = 1);


    namespace AdCP\MediaBuy;



    use PHPModelGenerator\Interfaces\BuilderInterface;

    use PHPModelGenerator\Exception\ErrorRegistryException;

    use AdCP\MediaBuy\Enums\MetroAreaSystem;


/**
 * Builder class for GetProductsRequest_ItemOfArrayMetros472ea43ac39eac07a0c61f755935e5bf
 */
class GetProductsRequest_ItemOfArrayMetros472ea43ac39eac07a0c61f755935e5bfBuilder implements BuilderInterface
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
     * Set up a new instance of GetProductsRequest_ItemOfArrayMetros472ea43ac39eac07a0c61f755935e5bf with fully validated properties
     */
    public function validate(): GetProductsRequest_ItemOfArrayMetros472ea43ac39eac07a0c61f755935e5bf
    {
        $this->_array_walk_recursive_real(
            $this->_rawModelDataInput,
            function (&$property): void {
                if ($property instanceof BuilderInterface) {
                    $property = $property->getRawModelDataInput();
                }
            },
        );

        return new GetProductsRequest_ItemOfArrayMetros472ea43ac39eac07a0c61f755935e5bf($this->_rawModelDataInput);
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
             * Get the value of system.
             *
             * Metro classification system
             *
             * @return string|MetroAreaSystem|null
             */
            public function getSystem(): string | MetroAreaSystem | null
            {
                return $this->_rawModelDataInput['system'] ?? null;
            }

            /**
             * Set the value of system.
             *
             * @param string|MetroAreaSystem $system Metro classification system
             *
             * {@link GetProductsRequest_ItemOfArrayMetros472ea43ac39eac07a0c61f755935e5bf::processSystem}
             * 
             *
             * @return static
             */
            public function setSystem(
                string | MetroAreaSystem $system
            ): static {
                if (array_key_exists('system', $this->_rawModelDataInput)
                    && $this->_rawModelDataInput['system'] === $system
                ) {
                    return $this;
                }

                $value = $modelData['system'] = $system;

                

                

                $this->_rawModelDataInput['system'] = $value;

                return $this;
            }
        
    
        
            /**
             * Get the value of code.
             *
             * Metro code within the system (e.g., '501' for NYC DMA)
             *
             * @return string|null
             */
            public function getCode(): ?string
            {
                return $this->_rawModelDataInput['code'] ?? null;
            }

            /**
             * Set the value of code.
             *
             * @param string $code Metro code within the system (e.g., '501' for NYC DMA)
             *
             * {@link GetProductsRequest_ItemOfArrayMetros472ea43ac39eac07a0c61f755935e5bf::processCode}
             * 
             *
             * @return static
             */
            public function setCode(
                string $code
            ): static {
                if (array_key_exists('code', $this->_rawModelDataInput)
                    && $this->_rawModelDataInput['code'] === $code
                ) {
                    return $this;
                }

                $value = $modelData['code'] = $code;

                

                

                $this->_rawModelDataInput['code'] = $value;

                return $this;
            }
        
    
}

// @codeCoverageIgnoreEnd
