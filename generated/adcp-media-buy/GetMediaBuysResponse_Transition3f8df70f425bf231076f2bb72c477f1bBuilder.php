<?php

// @codingStandardsIgnoreFile
// @codeCoverageIgnoreStart

declare(strict_types = 1);


    namespace AdCP\MediaBuy;



    use PHPModelGenerator\Interfaces\BuilderInterface;

    use PHPModelGenerator\Exception\ErrorRegistryException;

    use AdCP\MediaBuy\Enums\ImpairmentOfflineState;


/**
 * Builder class for GetMediaBuysResponse_Transition3f8df70f425bf231076f2bb72c477f1b
 */
class GetMediaBuysResponse_Transition3f8df70f425bf231076f2bb72c477f1bBuilder implements BuilderInterface
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
     * Set up a new instance of GetMediaBuysResponse_Transition3f8df70f425bf231076f2bb72c477f1b with fully validated properties
     */
    public function validate(): GetMediaBuysResponse_Transition3f8df70f425bf231076f2bb72c477f1b
    {
        $this->_array_walk_recursive_real(
            $this->_rawModelDataInput,
            function (&$property): void {
                if ($property instanceof BuilderInterface) {
                    $property = $property->getRawModelDataInput();
                }
            },
        );

        return new GetMediaBuysResponse_Transition3f8df70f425bf231076f2bb72c477f1b($this->_rawModelDataInput);
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
             * Get the value of from.
             *
             * Prior status of the resource (e.g., 'ready', 'approved', 'good'). Optional — sellers SHOULD include when known, MAY omit when the resource was discovered already in an offline state (e.g., a property depublished via brand.json crawl with no prior snapshot). Open string at the schema layer because each resource_type has its own serviceable-state vocabulary; the pattern constraint blocks free-form garbage, and the impairment.coherence assertion validates that 'from' is a known serviceable value for the resource_type.
             *
             * @return string|null
             */
            public function getFrom(): ?string
            {
                return $this->_rawModelDataInput['from'] ?? null;
            }

            /**
             * Set the value of from.
             *
             * @param string $from Prior status of the resource (e.g., 'ready', 'approved', 'good'). Optional — sellers SHOULD include when known, MAY omit when the resource was discovered already in an offline state (e.g., a property depublished via brand.json crawl with no prior snapshot). Open string at the schema layer because each resource_type has its own serviceable-state vocabulary; the pattern constraint blocks free-form garbage, and the impairment.coherence assertion validates that 'from' is a known serviceable value for the resource_type.
             *
             * {@link GetMediaBuysResponse_Transition3f8df70f425bf231076f2bb72c477f1b::processFrom}
             * 
             *
             * @return static
             */
            public function setFrom(
                string $from
            ): static {
                if (array_key_exists('from', $this->_rawModelDataInput)
                    && $this->_rawModelDataInput['from'] === $from
                ) {
                    return $this;
                }

                $value = $modelData['from'] = $from;

                

                

                $this->_rawModelDataInput['from'] = $value;

                return $this;
            }
        
    
        
            /**
             * Get the value of to.
             *
             * Current (offline) status of the resource. Drawn from the resource_type's canonical lifecycle enum; see impairment-offline-state for per-value resource_type pairing. The pairing is validated by impairment.coherence.
             *
             * @return string|ImpairmentOfflineState|null
             */
            public function getTo(): string | ImpairmentOfflineState | null
            {
                return $this->_rawModelDataInput['to'] ?? null;
            }

            /**
             * Set the value of to.
             *
             * @param string|ImpairmentOfflineState $to Current (offline) status of the resource. Drawn from the resource_type's canonical lifecycle enum; see impairment-offline-state for per-value resource_type pairing. The pairing is validated by impairment.coherence.
             *
             * {@link GetMediaBuysResponse_Transition3f8df70f425bf231076f2bb72c477f1b::processTo}
             * 
             *
             * @return static
             */
            public function setTo(
                string | ImpairmentOfflineState $to
            ): static {
                if (array_key_exists('to', $this->_rawModelDataInput)
                    && $this->_rawModelDataInput['to'] === $to
                ) {
                    return $this;
                }

                $value = $modelData['to'] = $to;

                

                

                $this->_rawModelDataInput['to'] = $value;

                return $this;
            }
        
    
}

// @codeCoverageIgnoreEnd
