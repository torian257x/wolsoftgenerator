<?php

// @codingStandardsIgnoreFile
// @codeCoverageIgnoreStart

declare(strict_types = 1);


    namespace AdCP\MediaBuy;



    use PHPModelGenerator\Interfaces\BuilderInterface;

    use PHPModelGenerator\Exception\ErrorRegistryException;


/**
 * Builder class for GetMediaBuysResponse_GetMediaBuysResponse_FrequencyCap7277ee0a63a2e453941e1b97362c6a3a
 */
class GetMediaBuysResponse_GetMediaBuysResponse_FrequencyCap7277ee0a63a2e453941e1b97362c6a3aBuilder implements BuilderInterface
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
     * Set up a new instance of GetMediaBuysResponse_GetMediaBuysResponse_FrequencyCap7277ee0a63a2e453941e1b97362c6a3a with fully validated properties
     */
    public function validate(): GetMediaBuysResponse_GetMediaBuysResponse_FrequencyCap7277ee0a63a2e453941e1b97362c6a3a
    {
        $this->_array_walk_recursive_real(
            $this->_rawModelDataInput,
            function (&$property): void {
                if ($property instanceof BuilderInterface) {
                    $property = $property->getRawModelDataInput();
                }
            },
        );

        return new GetMediaBuysResponse_GetMediaBuysResponse_FrequencyCap7277ee0a63a2e453941e1b97362c6a3a($this->_rawModelDataInput);
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
             * Get the value of suppress_minutes.
             *
             * 
             *
             * @return mixed
             */
            public function getSuppressMinutes(): mixed
            {
                return $this->_rawModelDataInput['suppress_minutes'] ?? null;
            }

            /**
             * Set the value of suppress_minutes.
             *
             * @param mixed $suppressMinutes
             *
             * {@link GetMediaBuysResponse_GetMediaBuysResponse_FrequencyCap7277ee0a63a2e453941e1b97362c6a3a::processSuppressMinutes}
             * 
             *
             * @return static
             */
            public function setSuppressMinutes(
                mixed $suppressMinutes
            ): static {
                if (array_key_exists('suppress_minutes', $this->_rawModelDataInput)
                    && $this->_rawModelDataInput['suppress_minutes'] === $suppressMinutes
                ) {
                    return $this;
                }

                $value = $modelData['suppress_minutes'] = $suppressMinutes;

                

                

                $this->_rawModelDataInput['suppress_minutes'] = $value;

                return $this;
            }
        
    
}

// @codeCoverageIgnoreEnd
