<?php

// @codingStandardsIgnoreFile
// @codeCoverageIgnoreStart

declare(strict_types = 1);


    namespace AdCP\MediaBuy;



    use PHPModelGenerator\Interfaces\BuilderInterface;

    use PHPModelGenerator\Exception\ErrorRegistryException;

    use AdCP\MediaBuy\Enums\GetMediaBuyDeliveryRequest_ItemOfArrayVerificationab0379bc9ff851960f9f645c9916029eResult;


/**
 * Builder class for GetMediaBuyDeliveryRequest_ItemOfArrayVerificationab0379bc9ff851960f9f645c9916029e
 */
class GetMediaBuyDeliveryRequest_ItemOfArrayVerificationab0379bc9ff851960f9f645c9916029eBuilder implements BuilderInterface
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
     * Set up a new instance of GetMediaBuyDeliveryRequest_ItemOfArrayVerificationab0379bc9ff851960f9f645c9916029e with fully validated properties
     */
    public function validate(): GetMediaBuyDeliveryRequest_ItemOfArrayVerificationab0379bc9ff851960f9f645c9916029e
    {
        $this->_array_walk_recursive_real(
            $this->_rawModelDataInput,
            function (&$property): void {
                if ($property instanceof BuilderInterface) {
                    $property = $property->getRawModelDataInput();
                }
            },
        );

        return new GetMediaBuyDeliveryRequest_ItemOfArrayVerificationab0379bc9ff851960f9f645c9916029e($this->_rawModelDataInput);
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
             * Get the value of verified_by.
             *
             * Name of the verification service (e.g., 'DoubleVerify', 'Hive Moderation', 'Reality Defender')
             *
             * @return string|null
             */
            public function getVerifiedBy(): ?string
            {
                return $this->_rawModelDataInput['verified_by'] ?? null;
            }

            /**
             * Set the value of verified_by.
             *
             * @param string $verifiedBy Name of the verification service (e.g., 'DoubleVerify', 'Hive Moderation', 'Reality Defender')
             *
             * {@link GetMediaBuyDeliveryRequest_ItemOfArrayVerificationab0379bc9ff851960f9f645c9916029e::processVerifiedBy}
             * 
             *
             * @return static
             */
            public function setVerifiedBy(
                string $verifiedBy
            ): static {
                if (array_key_exists('verified_by', $this->_rawModelDataInput)
                    && $this->_rawModelDataInput['verified_by'] === $verifiedBy
                ) {
                    return $this;
                }

                $value = $modelData['verified_by'] = $verifiedBy;

                

                

                $this->_rawModelDataInput['verified_by'] = $value;

                return $this;
            }
        
    
        
            /**
             * Get the value of verified_time.
             *
             * When the verification was performed (ISO 8601)
             *
             * @return string|null
             */
            public function getVerifiedTime(): ?string
            {
                return $this->_rawModelDataInput['verified_time'] ?? null;
            }

            /**
             * Set the value of verified_time.
             *
             * @param string $verifiedTime When the verification was performed (ISO 8601)
             *
             * {@link GetMediaBuyDeliveryRequest_ItemOfArrayVerificationab0379bc9ff851960f9f645c9916029e::processVerifiedTime}
             * 
             *
             * @return static
             */
            public function setVerifiedTime(
                string $verifiedTime
            ): static {
                if (array_key_exists('verified_time', $this->_rawModelDataInput)
                    && $this->_rawModelDataInput['verified_time'] === $verifiedTime
                ) {
                    return $this;
                }

                $value = $modelData['verified_time'] = $verifiedTime;

                

                

                $this->_rawModelDataInput['verified_time'] = $value;

                return $this;
            }
        
    
        
            /**
             * Get the value of result.
             *
             * Verification outcome
             *
             * @return string|GetMediaBuyDeliveryRequest_ItemOfArrayVerificationab0379bc9ff851960f9f645c9916029eResult|null
             */
            public function getResult(): string | GetMediaBuyDeliveryRequest_ItemOfArrayVerificationab0379bc9ff851960f9f645c9916029eResult | null
            {
                return $this->_rawModelDataInput['result'] ?? null;
            }

            /**
             * Set the value of result.
             *
             * @param string|GetMediaBuyDeliveryRequest_ItemOfArrayVerificationab0379bc9ff851960f9f645c9916029eResult $result Verification outcome
             *
             * {@link GetMediaBuyDeliveryRequest_ItemOfArrayVerificationab0379bc9ff851960f9f645c9916029e::processResult}
             * 
             *
             * @return static
             */
            public function setResult(
                string | GetMediaBuyDeliveryRequest_ItemOfArrayVerificationab0379bc9ff851960f9f645c9916029eResult $result
            ): static {
                if (array_key_exists('result', $this->_rawModelDataInput)
                    && $this->_rawModelDataInput['result'] === $result
                ) {
                    return $this;
                }

                $value = $modelData['result'] = $result;

                

                

                $this->_rawModelDataInput['result'] = $value;

                return $this;
            }
        
    
        
            /**
             * Get the value of confidence.
             *
             * Confidence score of the verification result (0.0 to 1.0)
             *
             * @return float|null
             */
            public function getConfidence(): ?float
            {
                return $this->_rawModelDataInput['confidence'] ?? null;
            }

            /**
             * Set the value of confidence.
             *
             * @param float $confidence Confidence score of the verification result (0.0 to 1.0)
             *
             * {@link GetMediaBuyDeliveryRequest_ItemOfArrayVerificationab0379bc9ff851960f9f645c9916029e::processConfidence}
             * 
             *
             * @return static
             */
            public function setConfidence(
                float $confidence
            ): static {
                if (array_key_exists('confidence', $this->_rawModelDataInput)
                    && $this->_rawModelDataInput['confidence'] === $confidence
                ) {
                    return $this;
                }

                $value = $modelData['confidence'] = $confidence;

                

                

                $this->_rawModelDataInput['confidence'] = $value;

                return $this;
            }
        
    
        
            /**
             * Get the value of details_url.
             *
             * URL to the full verification report
             *
             * @return string|null
             */
            public function getDetailsUrl(): ?string
            {
                return $this->_rawModelDataInput['details_url'] ?? null;
            }

            /**
             * Set the value of details_url.
             *
             * @param string $detailsUrl URL to the full verification report
             *
             * {@link GetMediaBuyDeliveryRequest_ItemOfArrayVerificationab0379bc9ff851960f9f645c9916029e::processDetailsUrl}
             * 
             *
             * @return static
             */
            public function setDetailsUrl(
                string $detailsUrl
            ): static {
                if (array_key_exists('details_url', $this->_rawModelDataInput)
                    && $this->_rawModelDataInput['details_url'] === $detailsUrl
                ) {
                    return $this;
                }

                $value = $modelData['details_url'] = $detailsUrl;

                

                

                $this->_rawModelDataInput['details_url'] = $value;

                return $this;
            }
        
    
}

// @codeCoverageIgnoreEnd
