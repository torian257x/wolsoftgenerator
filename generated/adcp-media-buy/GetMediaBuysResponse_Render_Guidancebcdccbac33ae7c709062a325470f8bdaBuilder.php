<?php

// @codingStandardsIgnoreFile
// @codeCoverageIgnoreStart

declare(strict_types = 1);


    namespace AdCP\MediaBuy;



    use PHPModelGenerator\Interfaces\BuilderInterface;

    use PHPModelGenerator\Exception\ErrorRegistryException;

    use AdCP\MediaBuy\Enums\DisclosurePersistence;

    use AdCP\MediaBuy\Enums\DisclosurePosition;


/**
 * Builder class for GetMediaBuysResponse_Render_Guidancebcdccbac33ae7c709062a325470f8bda
 */
class GetMediaBuysResponse_Render_Guidancebcdccbac33ae7c709062a325470f8bdaBuilder implements BuilderInterface
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
     * Set up a new instance of GetMediaBuysResponse_Render_Guidancebcdccbac33ae7c709062a325470f8bda with fully validated properties
     */
    public function validate(): GetMediaBuysResponse_Render_Guidancebcdccbac33ae7c709062a325470f8bda
    {
        $this->_array_walk_recursive_real(
            $this->_rawModelDataInput,
            function (&$property): void {
                if ($property instanceof BuilderInterface) {
                    $property = $property->getRawModelDataInput();
                }
            },
        );

        return new GetMediaBuysResponse_Render_Guidancebcdccbac33ae7c709062a325470f8bda($this->_rawModelDataInput);
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
             * Get the value of persistence.
             *
             * How long the disclosure must persist during content playback or display
             *
             * @return string|DisclosurePersistence|null
             */
            public function getPersistence(): string | DisclosurePersistence | null
            {
                return $this->_rawModelDataInput['persistence'] ?? null;
            }

            /**
             * Set the value of persistence.
             *
             * @param string|DisclosurePersistence|null $persistence How long the disclosure must persist during content playback or display
             *
             * {@link GetMediaBuysResponse_Render_Guidancebcdccbac33ae7c709062a325470f8bda::processPersistence}
             * 
             *
             * @return static
             */
            public function setPersistence(
                string | DisclosurePersistence | null $persistence
            ): static {
                if (array_key_exists('persistence', $this->_rawModelDataInput)
                    && $this->_rawModelDataInput['persistence'] === $persistence
                ) {
                    return $this;
                }

                $value = $modelData['persistence'] = $persistence;

                

                

                $this->_rawModelDataInput['persistence'] = $value;

                return $this;
            }
        
    
        
            /**
             * Get the value of min_duration_ms.
             *
             * Minimum display duration in milliseconds for initial persistence. Recommended when persistence is initial — without it, the duration is at the publisher's discretion. At serve time the publisher reads this from provenance since the brief is not available.
             *
             * @return int|null
             */
            public function getMinDurationMs(): ?int
            {
                return $this->_rawModelDataInput['min_duration_ms'] ?? null;
            }

            /**
             * Set the value of min_duration_ms.
             *
             * @param int $minDurationMs Minimum display duration in milliseconds for initial persistence. Recommended when persistence is initial — without it, the duration is at the publisher's discretion. At serve time the publisher reads this from provenance since the brief is not available.
             *
             * {@link GetMediaBuysResponse_Render_Guidancebcdccbac33ae7c709062a325470f8bda::processMinDurationMs}
             * 
             *
             * @return static
             */
            public function setMinDurationMs(
                int $minDurationMs
            ): static {
                if (array_key_exists('min_duration_ms', $this->_rawModelDataInput)
                    && $this->_rawModelDataInput['min_duration_ms'] === $minDurationMs
                ) {
                    return $this;
                }

                $value = $modelData['min_duration_ms'] = $minDurationMs;

                

                

                $this->_rawModelDataInput['min_duration_ms'] = $value;

                return $this;
            }
        
    
        
            /**
             * Get the value of positions.
             *
             * Preferred disclosure positions in priority order. The first position a format supports should be used.
             *
             * @return string[]|DisclosurePosition[]|null
             */
            public function getPositions(): array | DisclosurePosition | null
            {
                return $this->_rawModelDataInput['positions'] ?? null;
            }

            /**
             * Set the value of positions.
             *
             * @param string[]|DisclosurePosition[]|null $positions Preferred disclosure positions in priority order. The first position a format supports should be used.
             *
             * {@link GetMediaBuysResponse_Render_Guidancebcdccbac33ae7c709062a325470f8bda::processPositions}
             * 
             *
             * @return static
             */
            public function setPositions(
                array | DisclosurePosition | null $positions
            ): static {
                if (array_key_exists('positions', $this->_rawModelDataInput)
                    && $this->_rawModelDataInput['positions'] === $positions
                ) {
                    return $this;
                }

                $value = $modelData['positions'] = $positions;

                

                

                $this->_rawModelDataInput['positions'] = $value;

                return $this;
            }
        
    
        
            /**
             * Get the value of ext.
             *
             * Extension object for platform-specific, vendor-namespaced parameters. Extensions are always optional and must be namespaced under a vendor/platform key (e.g., ext.gam, ext.roku). Used for custom capabilities, partner-specific configuration, and features being proposed for standardization.
             *
             * @return GetMediaBuysResponse_ExtensionObject|GetMediaBuysResponse_ExtensionObjectBuilder|array|null
             */
            public function getExt(): mixed
            {
                return $this->_rawModelDataInput['ext'] ?? null;
            }

            /**
             * Set the value of ext.
             *
             * @param GetMediaBuysResponse_ExtensionObject|GetMediaBuysResponse_ExtensionObjectBuilder|array $ext Extension object for platform-specific, vendor-namespaced parameters. Extensions are always optional and must be namespaced under a vendor/platform key (e.g., ext.gam, ext.roku). Used for custom capabilities, partner-specific configuration, and features being proposed for standardization.
             *
             * {@link GetMediaBuysResponse_Render_Guidancebcdccbac33ae7c709062a325470f8bda::processExt}
             * 
             *
             * @return static
             */
            public function setExt(
                mixed $ext
            ): static {
                if (array_key_exists('ext', $this->_rawModelDataInput)
                    && $this->_rawModelDataInput['ext'] === $ext
                ) {
                    return $this;
                }

                $value = $modelData['ext'] = $ext;

                

                

                $this->_rawModelDataInput['ext'] = $value;

                return $this;
            }
        
    
}

// @codeCoverageIgnoreEnd
