<?php

// @codingStandardsIgnoreFile
// @codeCoverageIgnoreStart

declare(strict_types = 1);


    namespace AdCP\MediaBuy;



    use PHPModelGenerator\Interfaces\BuilderInterface;

    use PHPModelGenerator\Exception\ErrorRegistryException;

    use AdCP\MediaBuy\Enums\CanceledBy;


/**
 * Builder class for GetMediaBuysResponse_Cancellationa1dbdcb8720933d462d20c1567bfc370
 */
class GetMediaBuysResponse_Cancellationa1dbdcb8720933d462d20c1567bfc370Builder implements BuilderInterface
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
     * Set up a new instance of GetMediaBuysResponse_Cancellationa1dbdcb8720933d462d20c1567bfc370 with fully validated properties
     */
    public function validate(): GetMediaBuysResponse_Cancellationa1dbdcb8720933d462d20c1567bfc370
    {
        $this->_array_walk_recursive_real(
            $this->_rawModelDataInput,
            function (&$property): void {
                if ($property instanceof BuilderInterface) {
                    $property = $property->getRawModelDataInput();
                }
            },
        );

        return new GetMediaBuysResponse_Cancellationa1dbdcb8720933d462d20c1567bfc370($this->_rawModelDataInput);
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
             * Get the value of canceled_at.
             *
             * ISO 8601 timestamp when this media buy was canceled.
             *
             * @return string|null
             */
            public function getCanceledAt(): ?string
            {
                return $this->_rawModelDataInput['canceled_at'] ?? null;
            }

            /**
             * Set the value of canceled_at.
             *
             * @param string $canceledAt ISO 8601 timestamp when this media buy was canceled.
             *
             * {@link GetMediaBuysResponse_Cancellationa1dbdcb8720933d462d20c1567bfc370::processCanceledAt}
             * 
             *
             * @return static
             */
            public function setCanceledAt(
                string $canceledAt
            ): static {
                if (array_key_exists('canceled_at', $this->_rawModelDataInput)
                    && $this->_rawModelDataInput['canceled_at'] === $canceledAt
                ) {
                    return $this;
                }

                $value = $modelData['canceled_at'] = $canceledAt;

                

                

                $this->_rawModelDataInput['canceled_at'] = $value;

                return $this;
            }
        
    
        
            /**
             * Get the value of canceled_by.
             *
             * Which party initiated the cancellation.
             *
             * @return string|CanceledBy|null
             */
            public function getCanceledBy(): string | CanceledBy | UnitEnum | null
            {
                return $this->_rawModelDataInput['canceled_by'] ?? null;
            }

            /**
             * Set the value of canceled_by.
             *
             * @param string|CanceledBy $canceledBy Which party initiated the cancellation.
             *
             * {@link GetMediaBuysResponse_Cancellationa1dbdcb8720933d462d20c1567bfc370::processCanceledBy}
             * 
             *
             * @return static
             */
            public function setCanceledBy(
                string | CanceledBy | UnitEnum $canceledBy
            ): static {
                if (array_key_exists('canceled_by', $this->_rawModelDataInput)
                    && $this->_rawModelDataInput['canceled_by'] === $canceledBy
                ) {
                    return $this;
                }

                $value = $modelData['canceled_by'] = $canceledBy;

                

                

                $this->_rawModelDataInput['canceled_by'] = $value;

                return $this;
            }
        
    
        
            /**
             * Get the value of reason.
             *
             * Reason the media buy was canceled.
             *
             * @return string|null
             */
            public function getReason(): ?string
            {
                return $this->_rawModelDataInput['reason'] ?? null;
            }

            /**
             * Set the value of reason.
             *
             * @param string $reason Reason the media buy was canceled.
             *
             * {@link GetMediaBuysResponse_Cancellationa1dbdcb8720933d462d20c1567bfc370::processReason}
             * 
             *
             * @return static
             */
            public function setReason(
                string $reason
            ): static {
                if (array_key_exists('reason', $this->_rawModelDataInput)
                    && $this->_rawModelDataInput['reason'] === $reason
                ) {
                    return $this;
                }

                $value = $modelData['reason'] = $reason;

                

                

                $this->_rawModelDataInput['reason'] = $value;

                return $this;
            }
        
    
}

// @codeCoverageIgnoreEnd
