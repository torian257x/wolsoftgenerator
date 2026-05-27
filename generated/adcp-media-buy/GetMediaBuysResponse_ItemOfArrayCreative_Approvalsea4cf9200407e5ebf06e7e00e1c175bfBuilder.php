<?php

// @codingStandardsIgnoreFile
// @codeCoverageIgnoreStart

declare(strict_types = 1);


    namespace AdCP\MediaBuy;



    use PHPModelGenerator\Interfaces\BuilderInterface;

    use PHPModelGenerator\Exception\ErrorRegistryException;

    use AdCP\MediaBuy\Enums\CreativeApprovalStatus;


/**
 * Builder class for GetMediaBuysResponse_ItemOfArrayCreative_Approvalsea4cf9200407e5ebf06e7e00e1c175bf
 */
class GetMediaBuysResponse_ItemOfArrayCreative_Approvalsea4cf9200407e5ebf06e7e00e1c175bfBuilder implements BuilderInterface
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
     * Set up a new instance of GetMediaBuysResponse_ItemOfArrayCreative_Approvalsea4cf9200407e5ebf06e7e00e1c175bf with fully validated properties
     */
    public function validate(): GetMediaBuysResponse_ItemOfArrayCreative_Approvalsea4cf9200407e5ebf06e7e00e1c175bf
    {
        $this->_array_walk_recursive_real(
            $this->_rawModelDataInput,
            function (&$property): void {
                if ($property instanceof BuilderInterface) {
                    $property = $property->getRawModelDataInput();
                }
            },
        );

        return new GetMediaBuysResponse_ItemOfArrayCreative_Approvalsea4cf9200407e5ebf06e7e00e1c175bf($this->_rawModelDataInput);
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
             * Get the value of creative_id.
             *
             * Creative identifier
             *
             * @return string|null
             */
            public function getCreativeId(): ?string
            {
                return $this->_rawModelDataInput['creative_id'] ?? null;
            }

            /**
             * Set the value of creative_id.
             *
             * @param string $creativeId Creative identifier
             *
             * {@link GetMediaBuysResponse_ItemOfArrayCreative_Approvalsea4cf9200407e5ebf06e7e00e1c175bf::processCreativeId}
             * 
             *
             * @return static
             */
            public function setCreativeId(
                string $creativeId
            ): static {
                if (array_key_exists('creative_id', $this->_rawModelDataInput)
                    && $this->_rawModelDataInput['creative_id'] === $creativeId
                ) {
                    return $this;
                }

                $value = $modelData['creative_id'] = $creativeId;

                

                

                $this->_rawModelDataInput['creative_id'] = $value;

                return $this;
            }
        
    
        
            /**
             * Get the value of approval_status.
             *
             * Approval state of a creative on a specific package
             *
             * @return string|CreativeApprovalStatus|null
             */
            public function getApprovalStatus(): string | CreativeApprovalStatus | null
            {
                return $this->_rawModelDataInput['approval_status'] ?? null;
            }

            /**
             * Set the value of approval_status.
             *
             * @param string|CreativeApprovalStatus $approvalStatus Approval state of a creative on a specific package
             *
             * {@link GetMediaBuysResponse_ItemOfArrayCreative_Approvalsea4cf9200407e5ebf06e7e00e1c175bf::processApprovalStatus}
             * 
             *
             * @return static
             */
            public function setApprovalStatus(
                string | CreativeApprovalStatus $approvalStatus
            ): static {
                if (array_key_exists('approval_status', $this->_rawModelDataInput)
                    && $this->_rawModelDataInput['approval_status'] === $approvalStatus
                ) {
                    return $this;
                }

                $value = $modelData['approval_status'] = $approvalStatus;

                

                

                $this->_rawModelDataInput['approval_status'] = $value;

                return $this;
            }
        
    
        
            /**
             * Get the value of rejection_reason.
             *
             * Human-readable explanation of why the creative was rejected. Present only when approval_status is 'rejected'.
             *
             * @return string|null
             */
            public function getRejectionReason(): ?string
            {
                return $this->_rawModelDataInput['rejection_reason'] ?? null;
            }

            /**
             * Set the value of rejection_reason.
             *
             * @param string $rejectionReason Human-readable explanation of why the creative was rejected. Present only when approval_status is 'rejected'.
             *
             * {@link GetMediaBuysResponse_ItemOfArrayCreative_Approvalsea4cf9200407e5ebf06e7e00e1c175bf::processRejectionReason}
             * 
             *
             * @return static
             */
            public function setRejectionReason(
                string $rejectionReason
            ): static {
                if (array_key_exists('rejection_reason', $this->_rawModelDataInput)
                    && $this->_rawModelDataInput['rejection_reason'] === $rejectionReason
                ) {
                    return $this;
                }

                $value = $modelData['rejection_reason'] = $rejectionReason;

                

                

                $this->_rawModelDataInput['rejection_reason'] = $value;

                return $this;
            }
        
    
}

// @codeCoverageIgnoreEnd
