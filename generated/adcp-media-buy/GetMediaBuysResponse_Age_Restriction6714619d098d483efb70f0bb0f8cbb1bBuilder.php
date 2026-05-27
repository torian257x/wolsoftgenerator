<?php

// @codingStandardsIgnoreFile
// @codeCoverageIgnoreStart

declare(strict_types = 1);


    namespace AdCP\MediaBuy;



    use PHPModelGenerator\Interfaces\BuilderInterface;

    use PHPModelGenerator\Exception\ErrorRegistryException;

    use AdCP\MediaBuy\Enums\AgeVerificationMethod;


/**
 * Builder class for GetMediaBuysResponse_Age_Restriction6714619d098d483efb70f0bb0f8cbb1b
 */
class GetMediaBuysResponse_Age_Restriction6714619d098d483efb70f0bb0f8cbb1bBuilder implements BuilderInterface
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
     * Set up a new instance of GetMediaBuysResponse_Age_Restriction6714619d098d483efb70f0bb0f8cbb1b with fully validated properties
     */
    public function validate(): GetMediaBuysResponse_Age_Restriction6714619d098d483efb70f0bb0f8cbb1b
    {
        $this->_array_walk_recursive_real(
            $this->_rawModelDataInput,
            function (&$property): void {
                if ($property instanceof BuilderInterface) {
                    $property = $property->getRawModelDataInput();
                }
            },
        );

        return new GetMediaBuysResponse_Age_Restriction6714619d098d483efb70f0bb0f8cbb1b($this->_rawModelDataInput);
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
             * Get the value of min.
             *
             * Minimum age required
             *
             * @return int|null
             */
            public function getMin(): ?int
            {
                return $this->_rawModelDataInput['min'] ?? null;
            }

            /**
             * Set the value of min.
             *
             * @param int $min Minimum age required
             *
             * {@link GetMediaBuysResponse_Age_Restriction6714619d098d483efb70f0bb0f8cbb1b::processMin}
             * 
             *
             * @return static
             */
            public function setMin(
                int $min
            ): static {
                if (array_key_exists('min', $this->_rawModelDataInput)
                    && $this->_rawModelDataInput['min'] === $min
                ) {
                    return $this;
                }

                $value = $modelData['min'] = $min;

                

                

                $this->_rawModelDataInput['min'] = $value;

                return $this;
            }
        
    
        
            /**
             * Get the value of verification_required.
             *
             * Whether verified age (not inferred) is required for compliance
             *
             * @return bool|null
             */
            public function getVerificationRequired(): ?bool
            {
                return $this->_rawModelDataInput['verification_required'] ?? null;
            }

            /**
             * Set the value of verification_required.
             *
             * @param bool $verificationRequired Whether verified age (not inferred) is required for compliance
             *
             * {@link GetMediaBuysResponse_Age_Restriction6714619d098d483efb70f0bb0f8cbb1b::processVerificationRequired}
             * 
             *
             * @return static
             */
            public function setVerificationRequired(
                bool $verificationRequired
            ): static {
                if (array_key_exists('verification_required', $this->_rawModelDataInput)
                    && $this->_rawModelDataInput['verification_required'] === $verificationRequired
                ) {
                    return $this;
                }

                $value = $modelData['verification_required'] = $verificationRequired;

                

                

                $this->_rawModelDataInput['verification_required'] = $value;

                return $this;
            }
        
    
        
            /**
             * Get the value of accepted_methods.
             *
             * Accepted verification methods. If omitted, any method the platform supports is acceptable.
             *
             * @return string[]|AgeVerificationMethod[]|null
             */
            public function getAcceptedMethods(): array | AgeVerificationMethod | null
            {
                return $this->_rawModelDataInput['accepted_methods'] ?? null;
            }

            /**
             * Set the value of accepted_methods.
             *
             * @param string[]|AgeVerificationMethod[]|null $acceptedMethods Accepted verification methods. If omitted, any method the platform supports is acceptable.
             *
             * {@link GetMediaBuysResponse_Age_Restriction6714619d098d483efb70f0bb0f8cbb1b::processAcceptedMethods}
             * 
             *
             * @return static
             */
            public function setAcceptedMethods(
                array | AgeVerificationMethod | null $acceptedMethods
            ): static {
                if (array_key_exists('accepted_methods', $this->_rawModelDataInput)
                    && $this->_rawModelDataInput['accepted_methods'] === $acceptedMethods
                ) {
                    return $this;
                }

                $value = $modelData['accepted_methods'] = $acceptedMethods;

                

                

                $this->_rawModelDataInput['accepted_methods'] = $value;

                return $this;
            }
        
    
}

// @codeCoverageIgnoreEnd
