<?php

// @codingStandardsIgnoreFile
// @codeCoverageIgnoreStart

declare(strict_types = 1);


    namespace AdCP\MediaBuy;



    use PHPModelGenerator\Interfaces\BuilderInterface;

    use PHPModelGenerator\Exception\ErrorRegistryException;


/**
 * Builder class for GetMediaBuyDeliveryRequest_Colors58142eaea10c7af98af1bebfac793b60
 */
class GetMediaBuyDeliveryRequest_Colors58142eaea10c7af98af1bebfac793b60Builder implements BuilderInterface
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
     * Set up a new instance of GetMediaBuyDeliveryRequest_Colors58142eaea10c7af98af1bebfac793b60 with fully validated properties
     */
    public function validate(): GetMediaBuyDeliveryRequest_Colors58142eaea10c7af98af1bebfac793b60
    {
        $this->_array_walk_recursive_real(
            $this->_rawModelDataInput,
            function (&$property): void {
                if ($property instanceof BuilderInterface) {
                    $property = $property->getRawModelDataInput();
                }
            },
        );

        return new GetMediaBuyDeliveryRequest_Colors58142eaea10c7af98af1bebfac793b60($this->_rawModelDataInput);
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
             * Get the value of primary.
             *
             * 
             *
             * @return string|null
             */
            public function getPrimary(): ?string
            {
                return $this->_rawModelDataInput['primary'] ?? null;
            }

            /**
             * Set the value of primary.
             *
             * @param string $primary
             *
             * {@link GetMediaBuyDeliveryRequest_Colors58142eaea10c7af98af1bebfac793b60::processPrimary}
             * 
             *
             * @return static
             */
            public function setPrimary(
                string $primary
            ): static {
                if (array_key_exists('primary', $this->_rawModelDataInput)
                    && $this->_rawModelDataInput['primary'] === $primary
                ) {
                    return $this;
                }

                $value = $modelData['primary'] = $primary;

                

                

                $this->_rawModelDataInput['primary'] = $value;

                return $this;
            }
        
    
        
            /**
             * Get the value of secondary.
             *
             * 
             *
             * @return string|null
             */
            public function getSecondary(): ?string
            {
                return $this->_rawModelDataInput['secondary'] ?? null;
            }

            /**
             * Set the value of secondary.
             *
             * @param string $secondary
             *
             * {@link GetMediaBuyDeliveryRequest_Colors58142eaea10c7af98af1bebfac793b60::processSecondary}
             * 
             *
             * @return static
             */
            public function setSecondary(
                string $secondary
            ): static {
                if (array_key_exists('secondary', $this->_rawModelDataInput)
                    && $this->_rawModelDataInput['secondary'] === $secondary
                ) {
                    return $this;
                }

                $value = $modelData['secondary'] = $secondary;

                

                

                $this->_rawModelDataInput['secondary'] = $value;

                return $this;
            }
        
    
        
            /**
             * Get the value of accent.
             *
             * 
             *
             * @return string|null
             */
            public function getAccent(): ?string
            {
                return $this->_rawModelDataInput['accent'] ?? null;
            }

            /**
             * Set the value of accent.
             *
             * @param string $accent
             *
             * {@link GetMediaBuyDeliveryRequest_Colors58142eaea10c7af98af1bebfac793b60::processAccent}
             * 
             *
             * @return static
             */
            public function setAccent(
                string $accent
            ): static {
                if (array_key_exists('accent', $this->_rawModelDataInput)
                    && $this->_rawModelDataInput['accent'] === $accent
                ) {
                    return $this;
                }

                $value = $modelData['accent'] = $accent;

                

                

                $this->_rawModelDataInput['accent'] = $value;

                return $this;
            }
        
    
}

// @codeCoverageIgnoreEnd
