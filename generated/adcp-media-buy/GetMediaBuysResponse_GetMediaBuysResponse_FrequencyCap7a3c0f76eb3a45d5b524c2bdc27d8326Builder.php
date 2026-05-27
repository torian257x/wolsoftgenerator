<?php

// @codingStandardsIgnoreFile
// @codeCoverageIgnoreStart

declare(strict_types = 1);


    namespace AdCP\MediaBuy;



    use PHPModelGenerator\Interfaces\BuilderInterface;

    use PHPModelGenerator\Exception\ErrorRegistryException;


/**
 * Builder class for GetMediaBuysResponse_GetMediaBuysResponse_FrequencyCap7a3c0f76eb3a45d5b524c2bdc27d8326
 */
class GetMediaBuysResponse_GetMediaBuysResponse_FrequencyCap7a3c0f76eb3a45d5b524c2bdc27d8326Builder implements BuilderInterface
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
     * Set up a new instance of GetMediaBuysResponse_GetMediaBuysResponse_FrequencyCap7a3c0f76eb3a45d5b524c2bdc27d8326 with fully validated properties
     */
    public function validate(): GetMediaBuysResponse_GetMediaBuysResponse_FrequencyCap7a3c0f76eb3a45d5b524c2bdc27d8326
    {
        $this->_array_walk_recursive_real(
            $this->_rawModelDataInput,
            function (&$property): void {
                if ($property instanceof BuilderInterface) {
                    $property = $property->getRawModelDataInput();
                }
            },
        );

        return new GetMediaBuysResponse_GetMediaBuysResponse_FrequencyCap7a3c0f76eb3a45d5b524c2bdc27d8326($this->_rawModelDataInput);
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
             * Get the value of max_impressions.
             *
             * 
             *
             * @return mixed
             */
            public function getMaxImpressions(): mixed
            {
                return $this->_rawModelDataInput['max_impressions'] ?? null;
            }

            /**
             * Set the value of max_impressions.
             *
             * @param mixed $maxImpressions
             *
             * {@link GetMediaBuysResponse_GetMediaBuysResponse_FrequencyCap7a3c0f76eb3a45d5b524c2bdc27d8326::processMaxImpressions}
             * 
             *
             * @return static
             */
            public function setMaxImpressions(
                mixed $maxImpressions
            ): static {
                if (array_key_exists('max_impressions', $this->_rawModelDataInput)
                    && $this->_rawModelDataInput['max_impressions'] === $maxImpressions
                ) {
                    return $this;
                }

                $value = $modelData['max_impressions'] = $maxImpressions;

                

                

                $this->_rawModelDataInput['max_impressions'] = $value;

                return $this;
            }
        
    
}

// @codeCoverageIgnoreEnd
