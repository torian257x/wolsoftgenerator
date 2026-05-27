<?php

// @codingStandardsIgnoreFile
// @codeCoverageIgnoreStart

declare(strict_types = 1);


    namespace AdCP\MediaBuy;



    use PHPModelGenerator\Interfaces\BuilderInterface;

    use PHPModelGenerator\Exception\ErrorRegistryException;


/**
 * Builder class for GetMediaBuyDeliveryRequest_Disclosure0b892187b12d721c20d573c7ec349c30
 */
class GetMediaBuyDeliveryRequest_Disclosure0b892187b12d721c20d573c7ec349c30Builder implements BuilderInterface
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
     * Set up a new instance of GetMediaBuyDeliveryRequest_Disclosure0b892187b12d721c20d573c7ec349c30 with fully validated properties
     */
    public function validate(): GetMediaBuyDeliveryRequest_Disclosure0b892187b12d721c20d573c7ec349c30
    {
        $this->_array_walk_recursive_real(
            $this->_rawModelDataInput,
            function (&$property): void {
                if ($property instanceof BuilderInterface) {
                    $property = $property->getRawModelDataInput();
                }
            },
        );

        return new GetMediaBuyDeliveryRequest_Disclosure0b892187b12d721c20d573c7ec349c30($this->_rawModelDataInput);
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
             * Get the value of required.
             *
             * The declaring party's claim that AI disclosure is required for this content under applicable regulations. This is a declared signal carried through the supply chain — useful as a routing and audit input — not a regulatory determination made by the protocol. Receiving parties remain responsible for their own jurisdictional analysis and should not treat `required: false` as compliance cover.
             *
             * @return bool|null
             */
            public function getRequired(): ?bool
            {
                return $this->_rawModelDataInput['required'] ?? null;
            }

            /**
             * Set the value of required.
             *
             * @param bool $required The declaring party's claim that AI disclosure is required for this content under applicable regulations. This is a declared signal carried through the supply chain — useful as a routing and audit input — not a regulatory determination made by the protocol. Receiving parties remain responsible for their own jurisdictional analysis and should not treat `required: false` as compliance cover.
             *
             * {@link GetMediaBuyDeliveryRequest_Disclosure0b892187b12d721c20d573c7ec349c30::processRequired}
             * 
             *
             * @return static
             */
            public function setRequired(
                bool $required
            ): static {
                if (array_key_exists('required', $this->_rawModelDataInput)
                    && $this->_rawModelDataInput['required'] === $required
                ) {
                    return $this;
                }

                $value = $modelData['required'] = $required;

                

                

                $this->_rawModelDataInput['required'] = $value;

                return $this;
            }
        
    
        
            /**
             * Get the value of jurisdictions.
             *
             * Jurisdictions where disclosure obligations apply
             *
             * @return GetMediaBuyDeliveryRequest_ItemOfArrayJurisdictions8bf29d4207dd31b988e71fd7e02eded3[]|GetMediaBuyDeliveryRequest_ItemOfArrayJurisdictions8bf29d4207dd31b988e71fd7e02eded3Builder[]|array|null
             */
            public function getJurisdictions(): mixed
            {
                return $this->_rawModelDataInput['jurisdictions'] ?? null;
            }

            /**
             * Set the value of jurisdictions.
             *
             * @param GetMediaBuyDeliveryRequest_ItemOfArrayJurisdictions8bf29d4207dd31b988e71fd7e02eded3[]|GetMediaBuyDeliveryRequest_ItemOfArrayJurisdictions8bf29d4207dd31b988e71fd7e02eded3Builder[]|array $jurisdictions Jurisdictions where disclosure obligations apply
             *
             * {@link GetMediaBuyDeliveryRequest_Disclosure0b892187b12d721c20d573c7ec349c30::processJurisdictions}
             * 
             *
             * @return static
             */
            public function setJurisdictions(
                mixed $jurisdictions
            ): static {
                if (array_key_exists('jurisdictions', $this->_rawModelDataInput)
                    && $this->_rawModelDataInput['jurisdictions'] === $jurisdictions
                ) {
                    return $this;
                }

                $value = $modelData['jurisdictions'] = $jurisdictions;

                

                

                $this->_rawModelDataInput['jurisdictions'] = $value;

                return $this;
            }
        
    
}

// @codeCoverageIgnoreEnd
