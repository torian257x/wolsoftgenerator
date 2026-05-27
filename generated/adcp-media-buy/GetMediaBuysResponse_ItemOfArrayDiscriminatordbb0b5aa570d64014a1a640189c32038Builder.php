<?php

// @codingStandardsIgnoreFile
// @codeCoverageIgnoreStart

declare(strict_types = 1);


    namespace AdCP\MediaBuy;



    use PHPModelGenerator\Interfaces\BuilderInterface;

    use PHPModelGenerator\Exception\ErrorRegistryException;


/**
 * Builder class for GetMediaBuysResponse_ItemOfArrayDiscriminatordbb0b5aa570d64014a1a640189c32038
 */
class GetMediaBuysResponse_ItemOfArrayDiscriminatordbb0b5aa570d64014a1a640189c32038Builder implements BuilderInterface
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
     * Set up a new instance of GetMediaBuysResponse_ItemOfArrayDiscriminatordbb0b5aa570d64014a1a640189c32038 with fully validated properties
     */
    public function validate(): GetMediaBuysResponse_ItemOfArrayDiscriminatordbb0b5aa570d64014a1a640189c32038
    {
        $this->_array_walk_recursive_real(
            $this->_rawModelDataInput,
            function (&$property): void {
                if ($property instanceof BuilderInterface) {
                    $property = $property->getRawModelDataInput();
                }
            },
        );

        return new GetMediaBuysResponse_ItemOfArrayDiscriminatordbb0b5aa570d64014a1a640189c32038($this->_rawModelDataInput);
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
             * Get the value of property_name.
             *
             * Discriminator property name (e.g., `type`, `value_type`). Aligns with OpenAPI 3.x `discriminator.propertyName`.
             *
             * @return string|null
             */
            public function getPropertyName(): ?string
            {
                return $this->_rawModelDataInput['property_name'] ?? null;
            }

            /**
             * Set the value of property_name.
             *
             * @param string $propertyName Discriminator property name (e.g., `type`, `value_type`). Aligns with OpenAPI 3.x `discriminator.propertyName`.
             *
             * {@link GetMediaBuysResponse_ItemOfArrayDiscriminatordbb0b5aa570d64014a1a640189c32038::processPropertyName}
             * 
             *
             * @return static
             */
            public function setPropertyName(
                string $propertyName
            ): static {
                if (array_key_exists('property_name', $this->_rawModelDataInput)
                    && $this->_rawModelDataInput['property_name'] === $propertyName
                ) {
                    return $this;
                }

                $value = $modelData['property_name'] = $propertyName;

                

                

                $this->_rawModelDataInput['property_name'] = $value;

                return $this;
            }
        
    
        
            /**
             * Get the value of value.
             *
             * Value the caller sent at `property_name`. Typically a string for const-discriminated unions; numeric/boolean/null permitted. Object and array values are forbidden — const discriminators are scalars, and emitting a structured value would conflate 'caller sent a complex shape' with 'validator inferred from a structural match'.
             *
             * @return string|float|bool|null
             */
            public function getValue(): string | float | bool | null
            {
                return $this->_rawModelDataInput['value'] ?? null;
            }

            /**
             * Set the value of value.
             *
             * @param string|float|bool|null $value Value the caller sent at `property_name`. Typically a string for const-discriminated unions; numeric/boolean/null permitted. Object and array values are forbidden — const discriminators are scalars, and emitting a structured value would conflate 'caller sent a complex shape' with 'validator inferred from a structural match'.
             *
             * {@link GetMediaBuysResponse_ItemOfArrayDiscriminatordbb0b5aa570d64014a1a640189c32038::processValue}
             * 
             *
             * @return static
             */
            public function setValue(
                string | float | bool | null $value
            ): static {
                if (array_key_exists('value', $this->_rawModelDataInput)
                    && $this->_rawModelDataInput['value'] === $value
                ) {
                    return $this;
                }

                $value = $modelData['value'] = $value;

                

                

                $this->_rawModelDataInput['value'] = $value;

                return $this;
            }
        
    
}

// @codeCoverageIgnoreEnd
