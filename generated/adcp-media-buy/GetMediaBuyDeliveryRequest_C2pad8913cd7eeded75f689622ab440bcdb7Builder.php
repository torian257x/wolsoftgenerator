<?php

// @codingStandardsIgnoreFile
// @codeCoverageIgnoreStart

declare(strict_types = 1);


    namespace AdCP\MediaBuy;



    use PHPModelGenerator\Interfaces\BuilderInterface;

    use PHPModelGenerator\Exception\ErrorRegistryException;


/**
 * Builder class for GetMediaBuyDeliveryRequest_C2pad8913cd7eeded75f689622ab440bcdb7
 */
class GetMediaBuyDeliveryRequest_C2pad8913cd7eeded75f689622ab440bcdb7Builder implements BuilderInterface
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
     * Set up a new instance of GetMediaBuyDeliveryRequest_C2pad8913cd7eeded75f689622ab440bcdb7 with fully validated properties
     */
    public function validate(): GetMediaBuyDeliveryRequest_C2pad8913cd7eeded75f689622ab440bcdb7
    {
        $this->_array_walk_recursive_real(
            $this->_rawModelDataInput,
            function (&$property): void {
                if ($property instanceof BuilderInterface) {
                    $property = $property->getRawModelDataInput();
                }
            },
        );

        return new GetMediaBuyDeliveryRequest_C2pad8913cd7eeded75f689622ab440bcdb7($this->_rawModelDataInput);
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
             * Get the value of manifest_url.
             *
             * URL to the C2PA manifest store for this content
             *
             * @return string|null
             */
            public function getManifestUrl(): ?string
            {
                return $this->_rawModelDataInput['manifest_url'] ?? null;
            }

            /**
             * Set the value of manifest_url.
             *
             * @param string $manifestUrl URL to the C2PA manifest store for this content
             *
             * {@link GetMediaBuyDeliveryRequest_C2pad8913cd7eeded75f689622ab440bcdb7::processManifestUrl}
             * 
             *
             * @return static
             */
            public function setManifestUrl(
                string $manifestUrl
            ): static {
                if (array_key_exists('manifest_url', $this->_rawModelDataInput)
                    && $this->_rawModelDataInput['manifest_url'] === $manifestUrl
                ) {
                    return $this;
                }

                $value = $modelData['manifest_url'] = $manifestUrl;

                

                

                $this->_rawModelDataInput['manifest_url'] = $value;

                return $this;
            }
        
    
}

// @codeCoverageIgnoreEnd
