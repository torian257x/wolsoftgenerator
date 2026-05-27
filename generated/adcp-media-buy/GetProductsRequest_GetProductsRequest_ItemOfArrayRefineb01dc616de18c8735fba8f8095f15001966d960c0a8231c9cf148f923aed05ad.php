<?php

// @codingStandardsIgnoreFile
// @codeCoverageIgnoreStart

declare(strict_types = 1);


    namespace AdCP\MediaBuy;



    use PHPModelGenerator\Interfaces\JSONModelInterface;

    use UnitEnum;

    use AdCP\MediaBuy\Enums\GetProductsRequest_GetProductsRequest_ItemOfArrayRefineb01dc616de18c8735fba8f8095f15001966d960c0a8231c9cf148f923aed05adAction;

    use PHPModelGenerator\Traits\SerializableTrait;

    use JsonSerializable;

    use PHPModelGenerator\Interfaces\SerializationInterface;

    use PHPModelGenerator\Attributes\JsonPointer;

    use PHPModelGenerator\Attributes\SchemaName;

    use PHPModelGenerator\Attributes\Required;

    use PHPModelGenerator\Attributes\Internal;

    use PHPModelGenerator\Exception\ErrorRegistryException;


/**
 * Class GetProductsRequest_GetProductsRequest_ItemOfArrayRefineb01dc616de18c8735fba8f8095f15001966d960c0a8231c9cf148f923aed05ad
 * @package AdCP\MediaBuy 
 *

 * This is an auto-implemented class implemented by the php-json-schema-model-generator.
 * If you need to implement something in this class use inheritance. Else you will lose your changes if the classes
 * are re-generated.
 */

#[JsonPointer('/properties/refine/items/oneOf/2')]

class GetProductsRequest_GetProductsRequest_ItemOfArrayRefineb01dc616de18c8735fba8f8095f15001966d960c0a8231c9cf148f923aed05ad implements JSONModelInterface, JsonSerializable, SerializationInterface
{
    use SerializableTrait;

    
        
            #[JsonPointer('/properties/refine/items/oneOf/2/properties/scope')]
        
            #[SchemaName('scope')]
        
            #[Required]
        
        /** @var string Change scoped to a specific proposal. */
        protected $scope;
    
        
            #[JsonPointer('/properties/refine/items/oneOf/2/properties/proposal_id')]
        
            #[SchemaName('proposal_id')]
        
            #[Required]
        
        /** @var string Proposal ID from a previous get_products response. */
        protected $proposalId;
    
        
            #[JsonPointer('/properties/refine/items/oneOf/2/properties/action')]
        
            #[SchemaName('action')]
        
        /** @var GetProductsRequest_GetProductsRequest_ItemOfArrayRefineb01dc616de18c8735fba8f8095f15001966d960c0a8231c9cf148f923aed05adAction|null 'include' (default): return this proposal with updated allocations and pricing. 'omit': exclude this proposal from the response. 'finalize': request firm pricing and inventory hold — transitions a draft proposal to committed with an expires_at hold window. May trigger seller-side approval (HITL). The buyer should not set a time_budget for finalize requests — they represent a commitment to wait for the result. Optional — when omitted, the seller treats the entry as action: 'include'.

Finalize is exclusive within the parent `refine[]` array: see the array-level description for the finalize-exclusivity rule (mixing finalize with non-finalize entries is rejected) and multi-finalize atomicity contract. */
        protected $action = GetProductsRequest_GetProductsRequest_ItemOfArrayRefineb01dc616de18c8735fba8f8095f15001966d960c0a8231c9cf148f923aed05adAction::Include;
    
        
            #[JsonPointer('/properties/refine/items/oneOf/2/properties/ask')]
        
            #[SchemaName('ask')]
        
        /** @var string|null What the buyer is asking for on this proposal (e.g., 'shift more budget toward video', 'reduce total by 10%'). Ignored when action is 'omit'. */
        protected $ask;
    
        
            #[Internal]
        
        /** @var array Values which might be skipped for serialization if not provided */
        private $_skipNotProvidedPropertiesMap = array (
  3 => 'ask',
);
    
    #[Internal]
    /** @var array */
    protected $_rawModelDataInput = [];

    
        #[Internal]
        /** @var ErrorRegistryException Collect all validation errors */
        protected $_errorRegistry;
    

    /**
     * GetProductsRequest_GetProductsRequest_ItemOfArrayRefineb01dc616de18c8735fba8f8095f15001966d960c0a8231c9cf148f923aed05ad constructor.
     *
     * @param array $rawModelDataInput
     *
     * @throws ErrorRegistryException
     */
    public function __construct(array $rawModelDataInput = [])
    {
        
            $this->_errorRegistry = new ErrorRegistryException();
        

        

        
            $this->executeBaseValidators($rawModelDataInput);
        

        
            
                $this->processScope($rawModelDataInput);
            
        
            
                $this->processProposalId($rawModelDataInput);
            
        
            
                $this->processAction($rawModelDataInput);
            
        
            
                $this->processAsk($rawModelDataInput);
            
        
            
        

        
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
   'scope',
   'proposal_id',
   'action',
   'ask',
));

    

    return $additionalProperties;
})()) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Object\AdditionalPropertiesException($value ?? null, ...array (
  0 => 'GetProductsRequest_GetProductsRequest_ItemOfArrayRefineb01dc616de18c8735fba8f8095f15001966d960c0a8231c9cf148f923aed05ad',
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
                 * Get the value of scope.
                 *
                 * Change scoped to a specific proposal.
                 *
                 * @return string
                 */
                public function getScope(): string
                {
                    

                    return $this->scope;
                }
            

            
                /**
                 * Set the value of scope.
                 *
                 * @param string $scope Change scoped to a specific proposal.
                 *
                 * @throws ErrorRegistryException
                 *
                 * @return static
                 */
                public function setScope(
                    string $scope
                ): static {
                    if ($this->scope === $scope) {
                        return $this;
                    }

                    $value = $modelData['scope'] = $scope;

                    
                        $this->_errorRegistry = new ErrorRegistryException();
                    

                    

                    $value = $this->validateScope($value, $modelData);

                    
                        if ($this->_errorRegistry->getErrors()) {
                            throw $this->_errorRegistry;
                        }
                    

                    $this->scope = $value;
                    $this->_rawModelDataInput['scope'] = $scope;

                    

                    return $this;
                }
            

            /**
             * Extract the value, perform validations and set the property scope
             *
             * @param array $modelData
             *
             * @throws ErrorRegistryException
             */
            protected function processScope(array $modelData): void
            {
                

                $value = array_key_exists('scope', $modelData) ? $modelData['scope'] : $this->scope;

                

                $this->scope = $this->validateScope($value, $modelData);
            }

            /**
             * Execute all validators for the property scope
             */
            protected function validateScope($value, array $modelData)
            {
                
                    

if (!array_key_exists('scope', $modelData)) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Object\RequiredValueException($value ?? null, ...array (
  0 => 'scope',
)));
}

                
                    

if ((!is_string($value) && !$value instanceof UnitEnum) ) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Generic\InvalidTypeException($value ?? null, ...array (
  0 => 'scope',
  1 => 'string',
)));
}

                
                    

if ($value !== 'proposal') {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Generic\InvalidConstException($value ?? null, ...array (
  0 => 'scope',
  1 => 'proposal',
)));
}

                

                return $value;
            }
        
    
        
            
                /**
                 * Get the value of proposal_id.
                 *
                 * Proposal ID from a previous get_products response.
                 *
                 * @return string
                 */
                public function getProposalId(): string
                {
                    

                    return $this->proposalId;
                }
            

            
                /**
                 * Set the value of proposal_id.
                 *
                 * @param string $proposalId Proposal ID from a previous get_products response.
                 *
                 * @throws ErrorRegistryException
                 *
                 * @return static
                 */
                public function setProposalId(
                    string $proposalId
                ): static {
                    if ($this->proposalId === $proposalId) {
                        return $this;
                    }

                    $value = $modelData['proposal_id'] = $proposalId;

                    
                        $this->_errorRegistry = new ErrorRegistryException();
                    

                    

                    $value = $this->validateProposalId($value, $modelData);

                    
                        if ($this->_errorRegistry->getErrors()) {
                            throw $this->_errorRegistry;
                        }
                    

                    $this->proposalId = $value;
                    $this->_rawModelDataInput['proposal_id'] = $proposalId;

                    

                    return $this;
                }
            

            /**
             * Extract the value, perform validations and set the property proposalId
             *
             * @param array $modelData
             *
             * @throws ErrorRegistryException
             */
            protected function processProposalId(array $modelData): void
            {
                

                $value = array_key_exists('proposal_id', $modelData) ? $modelData['proposal_id'] : $this->proposalId;

                

                $this->proposalId = $this->validateProposalId($value, $modelData);
            }

            /**
             * Execute all validators for the property proposalId
             */
            protected function validateProposalId($value, array $modelData)
            {
                
                    

if (!array_key_exists('proposal_id', $modelData)) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Object\RequiredValueException($value ?? null, ...array (
  0 => 'proposal_id',
)));
}

                
                    

if ((!is_string($value) && !$value instanceof UnitEnum) ) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Generic\InvalidTypeException($value ?? null, ...array (
  0 => 'proposal_id',
  1 => 'string',
)));
}

                
                    

if (is_string($value) && mb_strlen($value) < 1) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\String\MinLengthException($value ?? null, ...array (
  0 => 'proposal_id',
  1 => 1,
)));
}

                

                return $value;
            }
        
    
        
            
                /**
                 * Get the value of action.
                 *
                 * 'include' (default): return this proposal with updated allocations and pricing. 'omit': exclude this proposal from the response. 'finalize': request firm pricing and inventory hold — transitions a draft proposal to committed with an expires_at hold window. May trigger seller-side approval (HITL). The buyer should not set a time_budget for finalize requests — they represent a commitment to wait for the result. Optional — when omitted, the seller treats the entry as action: 'include'.

Finalize is exclusive within the parent `refine[]` array: see the array-level description for the finalize-exclusivity rule (mixing finalize with non-finalize entries is rejected) and multi-finalize atomicity contract.
                 *
                 * @return GetProductsRequest_GetProductsRequest_ItemOfArrayRefineb01dc616de18c8735fba8f8095f15001966d960c0a8231c9cf148f923aed05adAction|null
                 */
                public function getAction(): ?GetProductsRequest_GetProductsRequest_ItemOfArrayRefineb01dc616de18c8735fba8f8095f15001966d960c0a8231c9cf148f923aed05adAction
                {
                    

                    return $this->action;
                }
            

            
                /**
                 * Set the value of action.
                 *
                 * @param string|GetProductsRequest_GetProductsRequest_ItemOfArrayRefineb01dc616de18c8735fba8f8095f15001966d960c0a8231c9cf148f923aed05adAction|null $action 'include' (default): return this proposal with updated allocations and pricing. 'omit': exclude this proposal from the response. 'finalize': request firm pricing and inventory hold — transitions a draft proposal to committed with an expires_at hold window. May trigger seller-side approval (HITL). The buyer should not set a time_budget for finalize requests — they represent a commitment to wait for the result. Optional — when omitted, the seller treats the entry as action: 'include'.

Finalize is exclusive within the parent `refine[]` array: see the array-level description for the finalize-exclusivity rule (mixing finalize with non-finalize entries is rejected) and multi-finalize atomicity contract.
                 *
                 * @throws ErrorRegistryException
                 *
                 * @return static
                 */
                public function setAction(
                    string | GetProductsRequest_GetProductsRequest_ItemOfArrayRefineb01dc616de18c8735fba8f8095f15001966d960c0a8231c9cf148f923aed05adAction | null $action
                ): static {
                    if ($this->action === $action) {
                        return $this;
                    }

                    $value = $modelData['action'] = $action;

                    
                        $this->_errorRegistry = new ErrorRegistryException();
                    

                    

                    $value = $this->validateAction($value, $modelData);

                    
                        if ($this->_errorRegistry->getErrors()) {
                            throw $this->_errorRegistry;
                        }
                    

                    $this->action = $value;
                    $this->_rawModelDataInput['action'] = $action;

                    

                    return $this;
                }
            

            /**
             * Extract the value, perform validations and set the property action
             *
             * @param array $modelData
             *
             * @throws ErrorRegistryException
             */
            protected function processAction(array $modelData): void
            {
                
                    if (!array_key_exists('action', $modelData) && $this->action === null) {
                        return;
                    }
                

                $value = array_key_exists('action', $modelData) ? $modelData['action'] : $this->action;

                

                $this->action = $this->validateAction($value, $modelData);
            }

            /**
             * Execute all validators for the property action
             */
            protected function validateAction($value, array $modelData)
            {
                
                    

if ($value instanceof UnitEnum && !($value instanceof GetProductsRequest_GetProductsRequest_ItemOfArrayRefineb01dc616de18c8735fba8f8095f15001966d960c0a8231c9cf148f923aed05adAction)) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Generic\InvalidTypeException($value ?? null, ...array (
  0 => 'action',
  1 => 'GetProductsRequest_GetProductsRequest_ItemOfArrayRefineb01dc616de18c8735fba8f8095f15001966d960c0a8231c9cf148f923aed05adAction',
)));
}

                
                    

if ((!is_string($value) && !$value instanceof UnitEnum) ) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Generic\InvalidTypeException($value ?? null, ...array (
  0 => 'action',
  1 => 'string',
)));
}

                
                    

if (!($value instanceof UnitEnum) && !in_array($value, array (
   'include',
   'omit',
   'finalize',
), true)) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Generic\EnumException($value ?? null, ...array (
  0 => 'action',
  1 => 
  array (
    0 => 'include',
    1 => 'omit',
    2 => 'finalize',
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
  'fqcn' => 'AdCP\\MediaBuy\\Enums\\GetProductsRequest_GetProductsRequest_ItemOfArrayRefineb01dc616de18c8735fba8f8095f15001966d960c0a8231c9cf148f923aed05adAction',
));
        } catch (\Throwable $filterException) {
            
                $transformationFailed = true;
            

            $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Filter\InvalidFilterValueException($value ?? null, ...array (
  0 => 'action',
  1 => 'php_model_generator_enum',
  2 => $filterException,
)));
        }

        return false;
    })($value)
)) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Filter\IncompatibleFilterException($value ?? null, ...array (
  0 => 'action',
  1 => 'php_model_generator_enum',
)));
}

                

                return $value;
            }
        
    
        
            
                /**
                 * Get the value of ask.
                 *
                 * What the buyer is asking for on this proposal (e.g., 'shift more budget toward video', 'reduce total by 10%'). Ignored when action is 'omit'.
                 *
                 * @return string|null
                 */
                public function getAsk(): ?string
                {
                    

                    return $this->ask;
                }
            

            
                /**
                 * Set the value of ask.
                 *
                 * @param string $ask What the buyer is asking for on this proposal (e.g., 'shift more budget toward video', 'reduce total by 10%'). Ignored when action is 'omit'.
                 *
                 * @throws ErrorRegistryException
                 *
                 * @return static
                 */
                public function setAsk(
                    string $ask
                ): static {
                    if ($this->ask === $ask) {
                        return $this;
                    }

                    $value = $modelData['ask'] = $ask;

                    
                        $this->_errorRegistry = new ErrorRegistryException();
                    

                    

                    $value = $this->validateAsk($value, $modelData);

                    
                        if ($this->_errorRegistry->getErrors()) {
                            throw $this->_errorRegistry;
                        }
                    

                    $this->ask = $value;
                    $this->_rawModelDataInput['ask'] = $ask;

                    

                    return $this;
                }
            

            /**
             * Extract the value, perform validations and set the property ask
             *
             * @param array $modelData
             *
             * @throws ErrorRegistryException
             */
            protected function processAsk(array $modelData): void
            {
                
                    if (!array_key_exists('ask', $modelData) && $this->ask === null) {
                        return;
                    }
                

                $value = array_key_exists('ask', $modelData) ? $modelData['ask'] : $this->ask;

                

                $this->ask = $this->validateAsk($value, $modelData);
            }

            /**
             * Execute all validators for the property ask
             */
            protected function validateAsk($value, array $modelData)
            {
                
                    

if ((!is_string($value) && !$value instanceof UnitEnum) ) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Generic\InvalidTypeException($value ?? null, ...array (
  0 => 'ask',
  1 => 'string',
)));
}

                
                    

if (is_string($value) && mb_strlen($value) < 1) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\String\MinLengthException($value ?? null, ...array (
  0 => 'ask',
  1 => 1,
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
    

    
        
            if (array_key_exists('scope', $modelData) &&
                $modelData['scope'] !== $this->scope
            ) {
                

                $rollbackValues['scope'] = $this->scope;
                $this->processScope($modelData);
            }
        
    
        
            if (array_key_exists('proposal_id', $modelData) &&
                $modelData['proposal_id'] !== $this->proposalId
            ) {
                

                $rollbackValues['proposalId'] = $this->proposalId;
                $this->processProposalId($modelData);
            }
        
    
        
            if (array_key_exists('action', $modelData) &&
                $modelData['action'] !== $this->action
            ) {
                

                $rollbackValues['action'] = $this->action;
                $this->processAction($modelData);
            }
        
    
        
            if (array_key_exists('ask', $modelData) &&
                $modelData['ask'] !== $this->ask
            ) {
                

                $rollbackValues['ask'] = $this->ask;
                $this->processAsk($modelData);
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
 * serialize the property action
 */
protected function serializeAction()
{
    return \PHPModelGenerator\Filter\Enum::serialize($this->action, array (
  'fqcn' => 'AdCP\\MediaBuy\\Enums\\GetProductsRequest_GetProductsRequest_ItemOfArrayRefineb01dc616de18c8735fba8f8095f15001966d960c0a8231c9cf148f923aed05adAction',
));
}





}

// @codeCoverageIgnoreEnd
