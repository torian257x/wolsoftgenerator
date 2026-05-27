<?php

// @codingStandardsIgnoreFile
// @codeCoverageIgnoreStart

declare(strict_types = 1);


    namespace AdCP\MediaBuy;



    use PHPModelGenerator\Interfaces\BuilderInterface;

    use PHPModelGenerator\Exception\ErrorRegistryException;


/**
 * Builder class for GetMediaBuysResponse_SLAWindow
 */
class GetMediaBuysResponse_SLAWindowBuilder implements BuilderInterface
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
     * Set up a new instance of GetMediaBuysResponse_SLAWindow with fully validated properties
     */
    public function validate(): GetMediaBuysResponse_SLAWindow
    {
        $this->_array_walk_recursive_real(
            $this->_rawModelDataInput,
            function (&$property): void {
                if ($property instanceof BuilderInterface) {
                    $property = $property->getRawModelDataInput();
                }
            },
        );

        return new GetMediaBuysResponse_SLAWindow($this->_rawModelDataInput);
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
             * Get the value of response_max.
             *
             * Maximum time from when the buyer issues the action to when the seller acknowledges receipt (mode-appropriate: synchronous response for self_serve, queue ack for requires_approval, proposal task creation for requires_proposal). ISO 8601 duration.
             *
             * @return string|null
             */
            public function getResponseMax(): ?string
            {
                return $this->_rawModelDataInput['response_max'] ?? null;
            }

            /**
             * Set the value of response_max.
             *
             * @param string $responseMax Maximum time from when the buyer issues the action to when the seller acknowledges receipt (mode-appropriate: synchronous response for self_serve, queue ack for requires_approval, proposal task creation for requires_proposal). ISO 8601 duration.
             *
             * {@link GetMediaBuysResponse_SLAWindow::processResponseMax}
             * 
             *
             * @return static
             */
            public function setResponseMax(
                string $responseMax
            ): static {
                if (array_key_exists('response_max', $this->_rawModelDataInput)
                    && $this->_rawModelDataInput['response_max'] === $responseMax
                ) {
                    return $this;
                }

                $value = $modelData['response_max'] = $responseMax;

                

                

                $this->_rawModelDataInput['response_max'] = $value;

                return $this;
            }
        
    
        
            /**
             * Get the value of completion_max.
             *
             * Maximum time from buyer issuing the action to the seller completing it (mutation applied, proposal finalized, approval resolved). ISO 8601 duration.
             *
             * @return string|null
             */
            public function getCompletionMax(): ?string
            {
                return $this->_rawModelDataInput['completion_max'] ?? null;
            }

            /**
             * Set the value of completion_max.
             *
             * @param string $completionMax Maximum time from buyer issuing the action to the seller completing it (mutation applied, proposal finalized, approval resolved). ISO 8601 duration.
             *
             * {@link GetMediaBuysResponse_SLAWindow::processCompletionMax}
             * 
             *
             * @return static
             */
            public function setCompletionMax(
                string $completionMax
            ): static {
                if (array_key_exists('completion_max', $this->_rawModelDataInput)
                    && $this->_rawModelDataInput['completion_max'] === $completionMax
                ) {
                    return $this;
                }

                $value = $modelData['completion_max'] = $completionMax;

                

                

                $this->_rawModelDataInput['completion_max'] = $value;

                return $this;
            }
        
    
}

// @codeCoverageIgnoreEnd
