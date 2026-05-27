<?php

// @codingStandardsIgnoreFile
// @codeCoverageIgnoreStart

declare(strict_types = 1);


    namespace AdCP\MediaBuy;



    use PHPModelGenerator\Interfaces\BuilderInterface;

    use PHPModelGenerator\Exception\ErrorRegistryException;

    use AdCP\MediaBuy\Enums\MetroAreaSystem;


/**
 * Builder class for GetMediaBuysResponse_ItemOfArrayGeo_Metros6f0aaa0fc5b789ffaf488638fb98921e
 */
class GetMediaBuysResponse_ItemOfArrayGeo_Metros6f0aaa0fc5b789ffaf488638fb98921eBuilder implements BuilderInterface
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
     * Set up a new instance of GetMediaBuysResponse_ItemOfArrayGeo_Metros6f0aaa0fc5b789ffaf488638fb98921e with fully validated properties
     */
    public function validate(): GetMediaBuysResponse_ItemOfArrayGeo_Metros6f0aaa0fc5b789ffaf488638fb98921e
    {
        $this->_array_walk_recursive_real(
            $this->_rawModelDataInput,
            function (&$property): void {
                if ($property instanceof BuilderInterface) {
                    $property = $property->getRawModelDataInput();
                }
            },
        );

        return new GetMediaBuysResponse_ItemOfArrayGeo_Metros6f0aaa0fc5b789ffaf488638fb98921e($this->_rawModelDataInput);
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
             * Metro area classification system (e.g., 'nielsen_dma', 'uk_itl2')
             *
             * @return string|MetroAreaSystem|null
             */
            public function getSystem(): string | MetroAreaSystem | UnitEnum | null
            {
                return $this->_rawModelDataInput['system'] ?? null;
            }

            /**
             * Set the value of system.
             *
             * @param string|MetroAreaSystem $system Metro area classification system (e.g., 'nielsen_dma', 'uk_itl2')
             *
             * {@link GetMediaBuysResponse_ItemOfArrayGeo_Metros6f0aaa0fc5b789ffaf488638fb98921e::processSystem}
             * 
             *
             * @return static
             */
            public function setSystem(
                string | MetroAreaSystem | UnitEnum $system
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
             * Metro codes within the system (e.g., ['501', '602'] for Nielsen DMAs)
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
             * @param string[] $values Metro codes within the system (e.g., ['501', '602'] for Nielsen DMAs)
             *
             * {@link GetMediaBuysResponse_ItemOfArrayGeo_Metros6f0aaa0fc5b789ffaf488638fb98921e::processValues}
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
