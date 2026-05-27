<?php

// @codingStandardsIgnoreFile
// @codeCoverageIgnoreStart

declare(strict_types = 1);


    namespace AdCP\MediaBuy;



    use PHPModelGenerator\Interfaces\BuilderInterface;

    use PHPModelGenerator\Exception\ErrorRegistryException;

    use AdCP\MediaBuy\Enums\PostalCodeSystem;


/**
 * Builder class for GetMediaBuysResponse_ItemOfArrayGeo_Postal_Areasc1e0690a73eca4c9d7bc20213faf3b0b
 */
class GetMediaBuysResponse_ItemOfArrayGeo_Postal_Areasc1e0690a73eca4c9d7bc20213faf3b0bBuilder implements BuilderInterface
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
     * Set up a new instance of GetMediaBuysResponse_ItemOfArrayGeo_Postal_Areasc1e0690a73eca4c9d7bc20213faf3b0b with fully validated properties
     */
    public function validate(): GetMediaBuysResponse_ItemOfArrayGeo_Postal_Areasc1e0690a73eca4c9d7bc20213faf3b0b
    {
        $this->_array_walk_recursive_real(
            $this->_rawModelDataInput,
            function (&$property): void {
                if ($property instanceof BuilderInterface) {
                    $property = $property->getRawModelDataInput();
                }
            },
        );

        return new GetMediaBuysResponse_ItemOfArrayGeo_Postal_Areasc1e0690a73eca4c9d7bc20213faf3b0b($this->_rawModelDataInput);
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
             * Postal code system (e.g., 'us_zip', 'gb_outward'). System name encodes country and precision.
             *
             * @return string|PostalCodeSystem|null
             */
            public function getSystem(): string | PostalCodeSystem | UnitEnum | null
            {
                return $this->_rawModelDataInput['system'] ?? null;
            }

            /**
             * Set the value of system.
             *
             * @param string|PostalCodeSystem $system Postal code system (e.g., 'us_zip', 'gb_outward'). System name encodes country and precision.
             *
             * {@link GetMediaBuysResponse_ItemOfArrayGeo_Postal_Areasc1e0690a73eca4c9d7bc20213faf3b0b::processSystem}
             * 
             *
             * @return static
             */
            public function setSystem(
                string | PostalCodeSystem | UnitEnum $system
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
             * Get the value of values.
             *
             * Postal codes within the system (e.g., ['10001', '10002'] for us_zip)
             *
             * @return string[]|null
             */
            public function getValues(): ?array
            {
                return $this->_rawModelDataInput['values'] ?? null;
            }

            /**
             * Set the value of values.
             *
             * @param string[] $values Postal codes within the system (e.g., ['10001', '10002'] for us_zip)
             *
             * {@link GetMediaBuysResponse_ItemOfArrayGeo_Postal_Areasc1e0690a73eca4c9d7bc20213faf3b0b::processValues}
             * 
             *
             * @return static
             */
            public function setValues(
                array $values
            ): static {
                if (array_key_exists('values', $this->_rawModelDataInput)
                    && $this->_rawModelDataInput['values'] === $values
                ) {
                    return $this;
                }

                $value = $modelData['values'] = $values;

                

                

                $this->_rawModelDataInput['values'] = $value;

                return $this;
            }
        
    
}

// @codeCoverageIgnoreEnd
