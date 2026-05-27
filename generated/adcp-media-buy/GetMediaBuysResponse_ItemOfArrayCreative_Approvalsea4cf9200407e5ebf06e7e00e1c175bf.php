<?php

// @codingStandardsIgnoreFile
// @codeCoverageIgnoreStart

declare(strict_types = 1);


    namespace AdCP\MediaBuy;



    use PHPModelGenerator\Interfaces\JSONModelInterface;

    use UnitEnum;

    use AdCP\MediaBuy\Enums\CreativeApprovalStatus;

    use PHPModelGenerator\Traits\SerializableTrait;

    use JsonSerializable;

    use PHPModelGenerator\Interfaces\SerializationInterface;

    use PHPModelGenerator\Attributes\JsonPointer;

    use PHPModelGenerator\Attributes\SchemaName;

    use PHPModelGenerator\Attributes\Required;

    use PHPModelGenerator\Attributes\Internal;

    use PHPModelGenerator\Exception\ErrorRegistryException;


/**
 * Class GetMediaBuysResponse_ItemOfArrayCreative_Approvalsea4cf9200407e5ebf06e7e00e1c175bf
 * @package AdCP\MediaBuy 
 *

 * This is an auto-implemented class implemented by the php-json-schema-model-generator.
 * If you need to implement something in this class use inheritance. Else you will lose your changes if the classes
 * are re-generated.
 */

#[JsonPointer('/properties/media_buys/items/properties/packages/items/properties/creative_approvals/items')]

class GetMediaBuysResponse_ItemOfArrayCreative_Approvalsea4cf9200407e5ebf06e7e00e1c175bf implements JSONModelInterface, JsonSerializable, SerializationInterface
{
    use SerializableTrait;

    
        
            #[JsonPointer('/properties/media_buys/items/properties/packages/items/properties/creative_approvals/items/properties/creative_id')]
        
            #[SchemaName('creative_id')]
        
            #[Required]
        
        /** @var string Creative identifier */
        protected $creativeId;
    
        
            #[JsonPointer('/properties/media_buys/items/properties/packages/items/properties/creative_approvals/items/properties/approval_status')]
        
            #[SchemaName('approval_status')]
        
            #[Required]
        
        /** @var CreativeApprovalStatus Approval state of a creative on a specific package */
        protected $approvalStatus;
    
        
            #[JsonPointer('/properties/media_buys/items/properties/packages/items/properties/creative_approvals/items/properties/rejection_reason')]
        
            #[SchemaName('rejection_reason')]
        
        /** @var string|null Human-readable explanation of why the creative was rejected. Present only when approval_status is 'rejected'. */
        protected $rejectionReason;
    
        
            #[Internal]
        
        /** @var array Collect all additional properties provided to the schema */
        private $_additionalProperties = array (
);
    
        
            #[Internal]
        
        /** @var array Values which might be skipped for serialization if not provided */
        private $_skipNotProvidedPropertiesMap = array (
  2 => 'rejection_reason',
);
    
    #[Internal]
    /** @var array */
    protected $_rawModelDataInput = [];

    
        #[Internal]
        /** @var ErrorRegistryException Collect all validation errors */
        protected $_errorRegistry;
    

    /**
     * GetMediaBuysResponse_ItemOfArrayCreative_Approvalsea4cf9200407e5ebf06e7e00e1c175bf constructor.
     *
     * @param array $rawModelDataInput
     *
     * @throws ErrorRegistryException
     */
    public function __construct(array $rawModelDataInput = [])
    {
        
            $this->_errorRegistry = new ErrorRegistryException();
        

        

        
            $this->executeBaseValidators($rawModelDataInput);
        

        
            
                $this->processCreativeId($rawModelDataInput);
            
        
            
                $this->processApprovalStatus($rawModelDataInput);
            
        
            
                $this->processRejectionReason($rawModelDataInput);
            
        
            
        
            
        

        
            if (count($this->_errorRegistry->getErrors())) {
                throw $this->_errorRegistry;
            }
        

        $this->_rawModelDataInput = $rawModelDataInput;

        
    }

    
        protected function executeBaseValidators(array &$modelData): void
        {
            $value = &$modelData;

            
                

if ((function () use ($value) {
    foreach (array_diff(array_keys($value), array (
   'creative_id',
   'approval_status',
   'rejection_reason',
)) as $propertyKey) {
        

        $this->_additionalProperties[$propertyKey] = $value[$propertyKey];
    }

    return false;
})()) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Object\InvalidAdditionalPropertiesException($value ?? null, ...array (
  0 => 'GetMediaBuysResponse_ItemOfArrayCreative_Approvalsea4cf9200407e5ebf06e7e00e1c175bf',
)));
}

            

            
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
                 * Get the value of creative_id.
                 *
                 * Creative identifier
                 *
                 * @return string
                 */
                public function getCreativeId(): string
                {
                    

                    return $this->creativeId;
                }
            

            
                /**
                 * Set the value of creative_id.
                 *
                 * @param string $creativeId Creative identifier
                 *
                 * @throws ErrorRegistryException
                 *
                 * @return static
                 */
                public function setCreativeId(
                    string $creativeId
                ): static {
                    if ($this->creativeId === $creativeId) {
                        return $this;
                    }

                    $value = $modelData['creative_id'] = $creativeId;

                    
                        $this->_errorRegistry = new ErrorRegistryException();
                    

                    

                    $value = $this->validateCreativeId($value, $modelData);

                    
                        if ($this->_errorRegistry->getErrors()) {
                            throw $this->_errorRegistry;
                        }
                    

                    $this->creativeId = $value;
                    $this->_rawModelDataInput['creative_id'] = $creativeId;

                    

                    return $this;
                }
            

            /**
             * Extract the value, perform validations and set the property creativeId
             *
             * @param array $modelData
             *
             * @throws ErrorRegistryException
             */
            protected function processCreativeId(array $modelData): void
            {
                

                $value = array_key_exists('creative_id', $modelData) ? $modelData['creative_id'] : $this->creativeId;

                

                $this->creativeId = $this->validateCreativeId($value, $modelData);
            }

            /**
             * Execute all validators for the property creativeId
             */
            protected function validateCreativeId($value, array $modelData)
            {
                
                    

if (!array_key_exists('creative_id', $modelData)) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Object\RequiredValueException($value ?? null, ...array (
  0 => 'creative_id',
)));
}

                
                    

if ((!is_string($value) && !$value instanceof UnitEnum) ) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Generic\InvalidTypeException($value ?? null, ...array (
  0 => 'creative_id',
  1 => 'string',
)));
}

                

                return $value;
            }
        
    
        
            
                /**
                 * Get the value of approval_status.
                 *
                 * Approval state of a creative on a specific package
                 *
                 * @return CreativeApprovalStatus
                 */
                public function getApprovalStatus(): CreativeApprovalStatus
                {
                    

                    return $this->approvalStatus;
                }
            

            
                /**
                 * Set the value of approval_status.
                 *
                 * @param string|CreativeApprovalStatus $approvalStatus Approval state of a creative on a specific package
                 *
                 * @throws ErrorRegistryException
                 *
                 * @return static
                 */
                public function setApprovalStatus(
                    string | CreativeApprovalStatus $approvalStatus
                ): static {
                    if ($this->approvalStatus === $approvalStatus) {
                        return $this;
                    }

                    $value = $modelData['approval_status'] = $approvalStatus;

                    
                        $this->_errorRegistry = new ErrorRegistryException();
                    

                    

                    $value = $this->validateApprovalStatus($value, $modelData);

                    
                        if ($this->_errorRegistry->getErrors()) {
                            throw $this->_errorRegistry;
                        }
                    

                    $this->approvalStatus = $value;
                    $this->_rawModelDataInput['approval_status'] = $approvalStatus;

                    

                    return $this;
                }
            

            /**
             * Extract the value, perform validations and set the property approvalStatus
             *
             * @param array $modelData
             *
             * @throws ErrorRegistryException
             */
            protected function processApprovalStatus(array $modelData): void
            {
                

                $value = array_key_exists('approval_status', $modelData) ? $modelData['approval_status'] : $this->approvalStatus;

                

                $this->approvalStatus = $this->validateApprovalStatus($value, $modelData);
            }

            /**
             * Execute all validators for the property approvalStatus
             */
            protected function validateApprovalStatus($value, array $modelData)
            {
                
                    

if ($value instanceof UnitEnum && !($value instanceof CreativeApprovalStatus)) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Generic\InvalidTypeException($value ?? null, ...array (
  0 => 'approval_status',
  1 => 'CreativeApprovalStatus',
)));
}

                
                    

if (!array_key_exists('approval_status', $modelData)) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Object\RequiredValueException($value ?? null, ...array (
  0 => 'approval_status',
)));
}

                
                    

if ((!is_string($value) && !$value instanceof UnitEnum) ) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Generic\InvalidTypeException($value ?? null, ...array (
  0 => 'approval_status',
  1 => 'string',
)));
}

                
                    

if (!($value instanceof UnitEnum) && !in_array($value, array (
   'pending_review',
   'approved',
   'rejected',
), true)) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Generic\EnumException($value ?? null, ...array (
  0 => 'approval_status',
  1 => 
  array (
    0 => 'pending_review',
    1 => 'approved',
    2 => 'rejected',
  ),
)));
}

                
                    
$transformationFailed = false;
if (!($value instanceof UnitEnum) && 
(
    
    (function (&$value) use (&$transformationFailed): bool {
        // make sure exceptions from the filter are caught and added to the error handling
        try {
            $value = \PHPModelGenerator\Filter\Enum::filter($value, array (
  'fqcn' => 'AdCP\\MediaBuy\\Enums\\CreativeApprovalStatus',
));
        } catch (\Throwable $filterException) {
            
                $transformationFailed = true;
            

            $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Filter\InvalidFilterValueException($value ?? null, ...array (
  0 => 'approval_status',
  1 => 'php_model_generator_enum',
  2 => $filterException,
)));
        }

        return false;
    })($value)
)) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Filter\IncompatibleFilterException($value ?? null, ...array (
  0 => 'approval_status',
  1 => 'php_model_generator_enum',
)));
}

                

                return $value;
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
                    

                    return $this->rejectionReason;
                }
            

            
                /**
                 * Set the value of rejection_reason.
                 *
                 * @param string $rejectionReason Human-readable explanation of why the creative was rejected. Present only when approval_status is 'rejected'.
                 *
                 * @throws ErrorRegistryException
                 *
                 * @return static
                 */
                public function setRejectionReason(
                    string $rejectionReason
                ): static {
                    if ($this->rejectionReason === $rejectionReason) {
                        return $this;
                    }

                    $value = $modelData['rejection_reason'] = $rejectionReason;

                    
                        $this->_errorRegistry = new ErrorRegistryException();
                    

                    

                    $value = $this->validateRejectionReason($value, $modelData);

                    
                        if ($this->_errorRegistry->getErrors()) {
                            throw $this->_errorRegistry;
                        }
                    

                    $this->rejectionReason = $value;
                    $this->_rawModelDataInput['rejection_reason'] = $rejectionReason;

                    

                    return $this;
                }
            

            /**
             * Extract the value, perform validations and set the property rejectionReason
             *
             * @param array $modelData
             *
             * @throws ErrorRegistryException
             */
            protected function processRejectionReason(array $modelData): void
            {
                
                    if (!array_key_exists('rejection_reason', $modelData) && $this->rejectionReason === null) {
                        return;
                    }
                

                $value = array_key_exists('rejection_reason', $modelData) ? $modelData['rejection_reason'] : $this->rejectionReason;

                

                $this->rejectionReason = $this->validateRejectionReason($value, $modelData);
            }

            /**
             * Execute all validators for the property rejectionReason
             */
            protected function validateRejectionReason($value, array $modelData)
            {
                
                    

if ((!is_string($value) && !$value instanceof UnitEnum) ) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Generic\InvalidTypeException($value ?? null, ...array (
  0 => 'rejection_reason',
  1 => 'string',
)));
}

                

                return $value;
            }
        
    
        
    
        
    

    /**
 * Update the model with the provided data. If the update fails due to any violations an exception will be thrown and
 * no properties of the model will be updated.
 *
 * @param array $modelData May contain any subset of the models properties
 *
 * @return self
 *
 * @throws ErrorRegistryException
 */
public function populate(array $modelData): self
{
    $rollbackValues = [];

    
        $this->_errorRegistry = new ErrorRegistryException();
    

    foreach (['_additionalProperties', '_patternProperties'] as $property) {
        if (isset($this->{$property})) {
            $rollbackValues[$property] = $this->{$property};
        }
    }

    
        $this->executeBaseValidators($modelData);
    

    
        
            if (array_key_exists('creative_id', $modelData) &&
                $modelData['creative_id'] !== $this->creativeId
            ) {
                

                $rollbackValues['creativeId'] = $this->creativeId;
                $this->processCreativeId($modelData);
            }
        
    
        
            if (array_key_exists('approval_status', $modelData) &&
                $modelData['approval_status'] !== $this->approvalStatus
            ) {
                

                $rollbackValues['approvalStatus'] = $this->approvalStatus;
                $this->processApprovalStatus($modelData);
            }
        
    
        
            if (array_key_exists('rejection_reason', $modelData) &&
                $modelData['rejection_reason'] !== $this->rejectionReason
            ) {
                

                $rollbackValues['rejectionReason'] = $this->rejectionReason;
                $this->processRejectionReason($modelData);
            }
        
    
        
    
        
    

    
        if (count($this->_errorRegistry->getErrors())) {
            foreach ($rollbackValues as $property => $value) {
                $this->{$property} = $value;
            }

            throw $this->_errorRegistry;
        }
    

    $this->_rawModelDataInput = array_merge($this->_rawModelDataInput, $modelData);

    
        
    
        
    
        
    
        
    
        
    

    return $this;
}


/**
 * serialize the property approvalStatus
 */
protected function serializeApprovalStatus()
{
    return \PHPModelGenerator\Filter\Enum::serialize($this->approvalStatus, array (
  'fqcn' => 'AdCP\\MediaBuy\\Enums\\CreativeApprovalStatus',
));
}



    protected function resolveSerializationHook(array $data, int $depth, array $except): array
    {
        $data = array_merge($this->serializeAdditionalProperties($depth, $except), $data);

        return $data;
    }


protected function serializeAdditionalProperties(int $depth, array $except): array
{
    

    return $this->getSerializedValue(
        $this->_additionalProperties,
        $depth,
        $except
    );
}



}

// @codeCoverageIgnoreEnd
