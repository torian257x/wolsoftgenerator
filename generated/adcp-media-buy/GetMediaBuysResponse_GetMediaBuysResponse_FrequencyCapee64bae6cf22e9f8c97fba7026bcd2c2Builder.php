<?php

// @codingStandardsIgnoreFile
// @codeCoverageIgnoreStart

declare(strict_types = 1);


    namespace AdCP\MediaBuy;



    use PHPModelGenerator\Interfaces\BuilderInterface;

    use PHPModelGenerator\Exception\ErrorRegistryException;


/**
 * Builder class for GetMediaBuysResponse_GetMediaBuysResponse_FrequencyCapee64bae6cf22e9f8c97fba7026bcd2c2
 */
class GetMediaBuysResponse_GetMediaBuysResponse_FrequencyCapee64bae6cf22e9f8c97fba7026bcd2c2Builder implements BuilderInterface
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
     * Set up a new instance of GetMediaBuysResponse_GetMediaBuysResponse_FrequencyCapee64bae6cf22e9f8c97fba7026bcd2c2 with fully validated properties
     */
    public function validate(): GetMediaBuysResponse_GetMediaBuysResponse_FrequencyCapee64bae6cf22e9f8c97fba7026bcd2c2
    {
        $this->_array_walk_recursive_real(
            $this->_rawModelDataInput,
            function (&$property): void {
                if ($property instanceof BuilderInterface) {
                    $property = $property->getRawModelDataInput();
                }
            },
        );

        return new GetMediaBuysResponse_GetMediaBuysResponse_FrequencyCapee64bae6cf22e9f8c97fba7026bcd2c2($this->_rawModelDataInput);
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
             * Get the value of suppress.
             *
             * 
             *
             * @return mixed
             */
            public function getSuppress(): mixed
            {
                return $this->_rawModelDataInput['suppress'] ?? null;
            }

            /**
             * Set the value of suppress.
             *
             * @param mixed $suppress
             *
             * {@link GetMediaBuysResponse_GetMediaBuysResponse_FrequencyCapee64bae6cf22e9f8c97fba7026bcd2c2::processSuppress}
             * 
             *
             * @return static
             */
            public function setSuppress(
                mixed $suppress
            ): static {
                if (array_key_exists('suppress', $this->_rawModelDataInput)
                    && $this->_rawModelDataInput['suppress'] === $suppress
                ) {
                    return $this;
                }

                $value = $modelData['suppress'] = $suppress;

                

                

                $this->_rawModelDataInput['suppress'] = $value;

                return $this;
            }
        
    
}

// @codeCoverageIgnoreEnd
