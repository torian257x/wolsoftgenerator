<?php

// @codingStandardsIgnoreFile
// @codeCoverageIgnoreStart

declare(strict_types = 1);


    namespace AdCP\MediaBuy;



    use PHPModelGenerator\Interfaces\JSONModelInterface;

    use PHPModelGenerator\Traits\SerializableTrait;

    use JsonSerializable;

    use PHPModelGenerator\Interfaces\SerializationInterface;

    use PHPModelGenerator\Attributes\JsonPointer;

    use PHPModelGenerator\Attributes\SchemaName;

    use PHPModelGenerator\Attributes\Internal;

    use PHPModelGenerator\Exception\ErrorRegistryException;


/**
 * Class GetMediaBuysResponse_SLAWindow
 * @package AdCP\MediaBuy 
 *
 * Optional SLA commitment for this action on this buy. Absence means no commitment, not zero commitment.
 *
 * This is an auto-implemented class implemented by the php-json-schema-model-generator.
 * If you need to implement something in this class use inheritance. Else you will lose your changes if the classes
 * are re-generated.
 */

#[JsonPointer('/properties/media_buys/items/properties/available_actions/items/properties/sla')]

class GetMediaBuysResponse_SLAWindow implements JSONModelInterface, JsonSerializable, SerializationInterface
{
    use SerializableTrait;

    
        
            #[JsonPointer('/properties/media_buys/items/properties/available_actions/items/properties/sla/properties/response_max')]
        
            #[SchemaName('response_max')]
        
        /** @var string|null Maximum time from when the buyer issues the action to when the seller acknowledges receipt (mode-appropriate: synchronous response for self_serve, queue ack for requires_approval, proposal task creation for requires_proposal). ISO 8601 duration. */
        protected $responseMax;
    
        
            #[JsonPointer('/properties/media_buys/items/properties/available_actions/items/properties/sla/properties/completion_max')]
        
            #[SchemaName('completion_max')]
        
        /** @var string|null Maximum time from buyer issuing the action to the seller completing it (mutation applied, proposal finalized, approval resolved). ISO 8601 duration. */
        protected $completionMax;
    
        
            #[Internal]
        
        /** @var array Values which might be skipped for serialization if not provided */
        private $_skipNotProvidedPropertiesMap = array (
  0 => 'response_max',
  1 => 'completion_max',
);
    
    #[Internal]
    /** @var array */
    protected $_rawModelDataInput = [];

    
        #[Internal]
        /** @var ErrorRegistryException Collect all validation errors */
        protected $_errorRegistry;
    

    /**
     * GetMediaBuysResponse_SLAWindow constructor.
     *
     * @param array $rawModelDataInput
     *
     * @throws ErrorRegistryException
     */
    public function __construct(array $rawModelDataInput = [])
    {
        
            $this->_errorRegistry = new ErrorRegistryException();
        

        

        
            $this->executeBaseValidators($rawModelDataInput);
        

        
            
                $this->processResponseMax($rawModelDataInput);
            
        
            
                $this->processCompletionMax($rawModelDataInput);
            
        
            
        

        
            if (count($this->_errorRegistry->getErrors())) {
                throw $this->_errorRegistry;
            }
        

        $this->_rawModelDataInput = $rawModelDataInput;

        
    }

    
        protected function executeBaseValidators(array &$modelData): void
        {
            $value = &$modelData;

            
                

if ($additionalProperties =  (static function () use ($modelData): array {
    $additionalProperties = array_diff(array_keys($modelData), array (
   'response_max',
   'completion_max',
));

    

    return $additionalProperties;
})()) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Object\AdditionalPropertiesException($value ?? null, ...array (
  0 => 'GetMediaBuysResponse_SLAWindow',
  1 => $additionalProperties,
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
                 * Get the value of response_max.
                 *
                 * Maximum time from when the buyer issues the action to when the seller acknowledges receipt (mode-appropriate: synchronous response for self_serve, queue ack for requires_approval, proposal task creation for requires_proposal). ISO 8601 duration.
                 * @example PT5M
                 * @example PT4H
                 * @example P1D
                 *
                 * @return string|null
                 */
                public function getResponseMax(): ?string
                {
                    

                    return $this->responseMax;
                }
            

            
                /**
                 * Set the value of response_max.
                 *
                 * @param string $responseMax Maximum time from when the buyer issues the action to when the seller acknowledges receipt (mode-appropriate: synchronous response for self_serve, queue ack for requires_approval, proposal task creation for requires_proposal). ISO 8601 duration.
                 *
                 * @throws ErrorRegistryException
                 *
                 * @return static
                 */
                public function setResponseMax(
                    string $responseMax
                ): static {
                    if ($this->responseMax === $responseMax) {
                        return $this;
                    }

                    $value = $modelData['response_max'] = $responseMax;

                    
                        $this->_errorRegistry = new ErrorRegistryException();
                    

                    

                    $value = $this->validateResponseMax($value, $modelData);

                    
                        if ($this->_errorRegistry->getErrors()) {
                            throw $this->_errorRegistry;
                        }
                    

                    $this->responseMax = $value;
                    $this->_rawModelDataInput['response_max'] = $responseMax;

                    

                    return $this;
                }
            

            /**
             * Extract the value, perform validations and set the property responseMax
             *
             * @param array $modelData
             *
             * @throws ErrorRegistryException
             */
            protected function processResponseMax(array $modelData): void
            {
                
                    if (!array_key_exists('response_max', $modelData) && $this->responseMax === null) {
                        return;
                    }
                

                $value = array_key_exists('response_max', $modelData) ? $modelData['response_max'] : $this->responseMax;

                

                $this->responseMax = $this->validateResponseMax($value, $modelData);
            }

            /**
             * Execute all validators for the property responseMax
             */
            protected function validateResponseMax($value, array $modelData)
            {
                
                    

if ((!is_string($value) && !$value instanceof UnitEnum) ) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Generic\InvalidTypeException($value ?? null, ...array (
  0 => 'response_max',
  1 => 'string',
)));
}

                
                    

if (is_string($value) && !preg_match(base64_decode('L15QKD8hJCkoXGQrWSk/KFxkK00pPyhcZCtEKT8oVChcZCtIKT8oXGQrTSk/KFxkK1MpPyk/JC8='), $value)) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\String\PatternException($value ?? null, ...array (
  0 => 'response_max',
  1 => '^P(?!$)(\\d+Y)?(\\d+M)?(\\d+D)?(T(\\d+H)?(\\d+M)?(\\d+S)?)?$',
)));
}

                

                return $value;
            }
        
    
        
            
                /**
                 * Get the value of completion_max.
                 *
                 * Maximum time from buyer issuing the action to the seller completing it (mutation applied, proposal finalized, approval resolved). ISO 8601 duration.
                 * @example PT1H
                 * @example PT24H
                 * @example P2D
                 *
                 * @return string|null
                 */
                public function getCompletionMax(): ?string
                {
                    

                    return $this->completionMax;
                }
            

            
                /**
                 * Set the value of completion_max.
                 *
                 * @param string $completionMax Maximum time from buyer issuing the action to the seller completing it (mutation applied, proposal finalized, approval resolved). ISO 8601 duration.
                 *
                 * @throws ErrorRegistryException
                 *
                 * @return static
                 */
                public function setCompletionMax(
                    string $completionMax
                ): static {
                    if ($this->completionMax === $completionMax) {
                        return $this;
                    }

                    $value = $modelData['completion_max'] = $completionMax;

                    
                        $this->_errorRegistry = new ErrorRegistryException();
                    

                    

                    $value = $this->validateCompletionMax($value, $modelData);

                    
                        if ($this->_errorRegistry->getErrors()) {
                            throw $this->_errorRegistry;
                        }
                    

                    $this->completionMax = $value;
                    $this->_rawModelDataInput['completion_max'] = $completionMax;

                    

                    return $this;
                }
            

            /**
             * Extract the value, perform validations and set the property completionMax
             *
             * @param array $modelData
             *
             * @throws ErrorRegistryException
             */
            protected function processCompletionMax(array $modelData): void
            {
                
                    if (!array_key_exists('completion_max', $modelData) && $this->completionMax === null) {
                        return;
                    }
                

                $value = array_key_exists('completion_max', $modelData) ? $modelData['completion_max'] : $this->completionMax;

                

                $this->completionMax = $this->validateCompletionMax($value, $modelData);
            }

            /**
             * Execute all validators for the property completionMax
             */
            protected function validateCompletionMax($value, array $modelData)
            {
                
                    

if ((!is_string($value) && !$value instanceof UnitEnum) ) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Generic\InvalidTypeException($value ?? null, ...array (
  0 => 'completion_max',
  1 => 'string',
)));
}

                
                    

if (is_string($value) && !preg_match(base64_decode('L15QKD8hJCkoXGQrWSk/KFxkK00pPyhcZCtEKT8oVChcZCtIKT8oXGQrTSk/KFxkK1MpPyk/JC8='), $value)) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\String\PatternException($value ?? null, ...array (
  0 => 'completion_max',
  1 => '^P(?!$)(\\d+Y)?(\\d+M)?(\\d+D)?(T(\\d+H)?(\\d+M)?(\\d+S)?)?$',
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
    

    
        
            if (array_key_exists('response_max', $modelData) &&
                $modelData['response_max'] !== $this->responseMax
            ) {
                

                $rollbackValues['responseMax'] = $this->responseMax;
                $this->processResponseMax($modelData);
            }
        
    
        
            if (array_key_exists('completion_max', $modelData) &&
                $modelData['completion_max'] !== $this->completionMax
            ) {
                

                $rollbackValues['completionMax'] = $this->completionMax;
                $this->processCompletionMax($modelData);
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





}

// @codeCoverageIgnoreEnd
