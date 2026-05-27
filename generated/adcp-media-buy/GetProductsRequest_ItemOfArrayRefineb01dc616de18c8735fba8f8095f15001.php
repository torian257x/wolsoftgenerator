<?php

// @codingStandardsIgnoreFile
// @codeCoverageIgnoreStart

declare(strict_types = 1);


    namespace AdCP\MediaBuy;



    use PHPModelGenerator\Interfaces\JSONModelInterface;

    use UnitEnum;

    use AdCP\MediaBuy\Enums\GetProductsRequest_GetProductsRequest_ItemOfArrayRefineb01dc616de18c8735fba8f8095f15001d5b392d89eb0397d01ef36b451045a72Action;

    use PHPModelGenerator\Traits\SerializableTrait;

    use JsonSerializable;

    use PHPModelGenerator\Interfaces\SerializationInterface;

    use AdCP\MediaBuy\Enums\GetProductsRequest_GetProductsRequest_ItemOfArrayRefineb01dc616de18c8735fba8f8095f15001966d960c0a8231c9cf148f923aed05adAction;

    use PHPModelGenerator\Attributes\JsonPointer;

    use PHPModelGenerator\Attributes\SchemaName;

    use PHPModelGenerator\Attributes\Required;

    use PHPModelGenerator\Attributes\Internal;

    use PHPModelGenerator\Exception\ErrorRegistryException;


/**
 * Class GetProductsRequest_ItemOfArrayRefineb01dc616de18c8735fba8f8095f15001
 * @package AdCP\MediaBuy 
 *

 * This is an auto-implemented class implemented by the php-json-schema-model-generator.
 * If you need to implement something in this class use inheritance. Else you will lose your changes if the classes
 * are re-generated.
 */

#[JsonPointer('/properties/refine/items')]

class GetProductsRequest_ItemOfArrayRefineb01dc616de18c8735fba8f8095f15001 implements JSONModelInterface, JsonSerializable, SerializationInterface
{
    use SerializableTrait;

    
        
            #[JsonPointer('/properties/refine/items/oneOf/0/properties/scope')]
        
            #[SchemaName('scope')]
        
            #[Required]
        
        /** @var string Change scoped to the overall request — direction for the selection as a whole. */
        protected $scope;
    
        
            #[JsonPointer('/properties/refine/items/oneOf/0/properties/ask')]
        
            #[SchemaName('ask')]
        
            #[Required]
        
        /** @var string|null What the buyer is asking for at the request level (e.g., 'more video options and less display', 'suggest how to combine these products'). */
        protected $ask;
    
        
            #[JsonPointer('/properties/refine/items/oneOf/1/properties/product_id')]
        
            #[SchemaName('product_id')]
        
            #[Required]
        
        /** @var string|null Product ID from a previous get_products response. */
        protected $productId;
    
        
            #[JsonPointer('/properties/refine/items/oneOf/1/properties/action')]
        
            #[SchemaName('action')]
        
        /** @var GetProductsRequest_GetProductsRequest_ItemOfArrayRefineb01dc616de18c8735fba8f8095f15001d5b392d89eb0397d01ef36b451045a72Action|null 'include' (default): return this product with updated pricing and data. 'omit': exclude this product from the response. 'more_like_this': find additional products similar to this one (the original is also returned). Optional — when omitted, the seller treats the entry as action: 'include'. */
        protected $action = GetProductsRequest_GetProductsRequest_ItemOfArrayRefineb01dc616de18c8735fba8f8095f15001d5b392d89eb0397d01ef36b451045a72Action::Include;
    
        
            #[JsonPointer('/properties/refine/items/oneOf/2/properties/proposal_id')]
        
            #[SchemaName('proposal_id')]
        
            #[Required]
        
        /** @var string|null Proposal ID from a previous get_products response. */
        protected $proposalId;
    
        
            #[Internal]
        
        /** @var array Track the internal validation state of composed validations */
        private $_propertyValidationState = array (
  0 => 
  array (
  ),
);
    
        
            #[Internal]
        
        /** @var array Values which might be skipped for serialization if not provided */
        private $_skipNotProvidedPropertiesMap = array (
  0 => 'scope',
  1 => 'ask',
  2 => 'product_id',
  4 => 'proposal_id',
);
    
    #[Internal]
    /** @var array */
    protected $_rawModelDataInput = [];

    
        #[Internal]
        /** @var ErrorRegistryException Collect all validation errors */
        protected $_errorRegistry;
    

    /**
     * GetProductsRequest_ItemOfArrayRefineb01dc616de18c8735fba8f8095f15001 constructor.
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
            
        
            
                $this->processAsk($rawModelDataInput);
            
        
            
                $this->processProductId($rawModelDataInput);
            
        
            
                $this->processAction($rawModelDataInput);
            
        
            
                $this->processProposalId($rawModelDataInput);
            
        
            
        
            
        

        
            if (count($this->_errorRegistry->getErrors())) {
                throw $this->_errorRegistry;
            }
        

        $this->_rawModelDataInput = $rawModelDataInput;

        
    }

    
        protected function executeBaseValidators(array &$modelData): void
        {
            $value = &$modelData;

            

            
                $this->validateComposition_0($modelData);
            
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
                 * Change scoped to the overall request — direction for the selection as a whole.
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
                 * @param string $scope Change scoped to the overall request — direction for the selection as a whole.
                 *
                 * 
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
                    

                    $this->validateComposition_0($modelData);



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
             * 
             */
            protected function processScope(array $modelData): void
            {
                
                    if (!array_key_exists('scope', $modelData) && $this->scope === null) {
                        return;
                    }
                

                $value = array_key_exists('scope', $modelData) ? $modelData['scope'] : $this->scope;

                

                $this->scope = $this->validateScope($value, $modelData);
            }

            /**
             * Execute all validators for the property scope
             */
            protected function validateScope($value, array $modelData)
            {
                

                return $value;
            }
        
    
        
            
                /**
                 * Get the value of ask.
                 *
                 * What the buyer is asking for at the request level (e.g., 'more video options and less display', 'suggest how to combine these products').
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
                 * @param string|null $ask What the buyer is asking for at the request level (e.g., 'more video options and less display', 'suggest how to combine these products').
                 *
                 * 
                 *
                 * @return static
                 */
                public function setAsk(
                    ?string $ask
                ): static {
                    if ($this->ask === $ask) {
                        return $this;
                    }

                    $value = $modelData['ask'] = $ask;

                    
                        $this->_errorRegistry = new ErrorRegistryException();
                    

                    $this->validateComposition_0($modelData);



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
             * 
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
                

                return $value;
            }
        
    
        
            
                /**
                 * Get the value of product_id.
                 *
                 * Product ID from a previous get_products response.
                 *
                 * @return string|null
                 */
                public function getProductId(): ?string
                {
                    

                    return $this->productId;
                }
            

            
                /**
                 * Set the value of product_id.
                 *
                 * @param string|null $productId Product ID from a previous get_products response.
                 *
                 * 
                 *
                 * @return static
                 */
                public function setProductId(
                    ?string $productId
                ): static {
                    if ($this->productId === $productId) {
                        return $this;
                    }

                    $value = $modelData['product_id'] = $productId;

                    
                        $this->_errorRegistry = new ErrorRegistryException();
                    

                    $this->validateComposition_0($modelData);



                    $value = $this->validateProductId($value, $modelData);

                    
                        if ($this->_errorRegistry->getErrors()) {
                            throw $this->_errorRegistry;
                        }
                    

                    $this->productId = $value;
                    $this->_rawModelDataInput['product_id'] = $productId;

                    

                    return $this;
                }
            

            /**
             * Extract the value, perform validations and set the property productId
             *
             * @param array $modelData
             *
             * 
             */
            protected function processProductId(array $modelData): void
            {
                
                    if (!array_key_exists('product_id', $modelData) && $this->productId === null) {
                        return;
                    }
                

                $value = array_key_exists('product_id', $modelData) ? $modelData['product_id'] : $this->productId;

                

                $this->productId = $this->validateProductId($value, $modelData);
            }

            /**
             * Execute all validators for the property productId
             */
            protected function validateProductId($value, array $modelData)
            {
                

                return $value;
            }
        
    
        
            
                /**
                 * Get the value of action.
                 *
                 * 'include' (default): return this product with updated pricing and data. 'omit': exclude this product from the response. 'more_like_this': find additional products similar to this one (the original is also returned). Optional — when omitted, the seller treats the entry as action: 'include'.
                 *
                 * @return GetProductsRequest_GetProductsRequest_ItemOfArrayRefineb01dc616de18c8735fba8f8095f15001d5b392d89eb0397d01ef36b451045a72Action|null
                 */
                public function getAction(): ?GetProductsRequest_GetProductsRequest_ItemOfArrayRefineb01dc616de18c8735fba8f8095f15001d5b392d89eb0397d01ef36b451045a72Action
                {
                    

                    return $this->action;
                }
            

            
                /**
                 * Set the value of action.
                 *
                 * @param string|GetProductsRequest_GetProductsRequest_ItemOfArrayRefineb01dc616de18c8735fba8f8095f15001d5b392d89eb0397d01ef36b451045a72Action|null $action 'include' (default): return this product with updated pricing and data. 'omit': exclude this product from the response. 'more_like_this': find additional products similar to this one (the original is also returned). Optional — when omitted, the seller treats the entry as action: 'include'.
                 *
                 * @throws ErrorRegistryException
                 *
                 * @return static
                 */
                public function setAction(
                    string | GetProductsRequest_GetProductsRequest_ItemOfArrayRefineb01dc616de18c8735fba8f8095f15001d5b392d89eb0397d01ef36b451045a72Action | null $action
                ): static {
                    if ($this->action === $action) {
                        return $this;
                    }

                    $value = $modelData['action'] = $action;

                    
                        $this->_errorRegistry = new ErrorRegistryException();
                    

                    $this->validateComposition_0($modelData);



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
                
                    

if ($value instanceof UnitEnum && !($value instanceof GetProductsRequest_GetProductsRequest_ItemOfArrayRefineb01dc616de18c8735fba8f8095f15001d5b392d89eb0397d01ef36b451045a72Action)) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Generic\InvalidTypeException($value ?? null, ...array (
  0 => 'action',
  1 => 'GetProductsRequest_GetProductsRequest_ItemOfArrayRefineb01dc616de18c8735fba8f8095f15001d5b392d89eb0397d01ef36b451045a72Action',
)));
}

                
                    
$transformationFailed = false;
if (!($value instanceof UnitEnum) && 
(
    
    (function (&$value) use (&$transformationFailed): bool {
        // make sure exceptions from the filter are caught and added to the error handling
        try {
            $value = \PHPModelGenerator\Filter\Enum::filter($value, array (
  'fqcn' => 'AdCP\\MediaBuy\\Enums\\GetProductsRequest_GetProductsRequest_ItemOfArrayRefineb01dc616de18c8735fba8f8095f15001d5b392d89eb0397d01ef36b451045a72Action',
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
                 * Get the value of proposal_id.
                 *
                 * Proposal ID from a previous get_products response.
                 *
                 * @return string|null
                 */
                public function getProposalId(): ?string
                {
                    

                    return $this->proposalId;
                }
            

            
                /**
                 * Set the value of proposal_id.
                 *
                 * @param string|null $proposalId Proposal ID from a previous get_products response.
                 *
                 * 
                 *
                 * @return static
                 */
                public function setProposalId(
                    ?string $proposalId
                ): static {
                    if ($this->proposalId === $proposalId) {
                        return $this;
                    }

                    $value = $modelData['proposal_id'] = $proposalId;

                    
                        $this->_errorRegistry = new ErrorRegistryException();
                    

                    $this->validateComposition_0($modelData);



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
             * 
             */
            protected function processProposalId(array $modelData): void
            {
                
                    if (!array_key_exists('proposal_id', $modelData) && $this->proposalId === null) {
                        return;
                    }
                

                $value = array_key_exists('proposal_id', $modelData) ? $modelData['proposal_id'] : $this->proposalId;

                

                $this->proposalId = $this->validateProposalId($value, $modelData);
            }

            /**
             * Execute all validators for the property proposalId
             */
            protected function validateProposalId($value, array $modelData)
            {
                

                return $value;
            }
        
    
        
    
        
    

    /**
 * Validate updated properties which are part of a composition validation
 *
 * @param array $modifiedModelData An array containing all updated data as key-value pairs
 *
 * 
 */
private function validateComposition_0(array &$modifiedModelData): void
{
    $validatorIndex = 0;
    $value = $modelData = array_merge($this->_rawModelDataInput, $modifiedModelData);

    
            $succeededCompositionElements = 0;
            $compositionErrorCollection = [];
        
    if (
(function (&$value) use (
    &$modelData,
    &$modifiedModelData,
    &$compositionErrorCollection,
    &$succeededCompositionElements,
    &$validatorIndex
) {
    $succeededCompositionElements = 3;
    $validatorComponentIndex = 0;
    $originalModelData = $value;
    $proposedValue = null;
    $modifiedValues = [];

    
        $originalPropertyValidationState = $this->_propertyValidationState ?? [];
    

    
        $originalErrorRegistry = $this->_errorRegistry;
    

    
        try {
            
                // check if the state of the validator is already known.
                // If none of the properties affected by the validator are changed the validator must not be re-evaluated
                if (isset($validatorIndex) &&
                    isset($this->_propertyValidationState[$validatorIndex][$validatorComponentIndex]) &&
                    !array_intersect(
                        array_keys($modifiedModelData),
                        [
                            
                                'scope',
                            
                                'ask',
                            
                        ]
                    )
                ) {
                    
                        $compositionErrorCollection[] = $this->_propertyValidationState[$validatorIndex][$validatorComponentIndex];
                    

                    if (
                            $this->_propertyValidationState[$validatorIndex][$validatorComponentIndex]->getErrors()
                        
                    ) {
                        throw new \Exception();
                    }
                } else {
            

                
                    // collect errors for each composition element
                    $this->_errorRegistry = new ErrorRegistryException();
                

                

                $value = (function ($value) {
    try {
        return is_array($value) ? new GetProductsRequest_GetProductsRequest_ItemOfArrayRefineb01dc616de18c8735fba8f8095f1500175a6b9052c1cb2c23048f2815c28c25e($value) : $value;
    } catch (\Exception $instantiationException) {
        
            
                foreach($instantiationException->getErrors() as $nestedValidationError) {
                    $this->_errorRegistry->addError($nestedValidationError);
                }
            
        

        
            return $instantiationException;
        
    }
})($value)
;

                
                    

if ((!is_object($value) && !$value instanceof UnitEnum) ) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Generic\InvalidTypeException($value ?? null, ...array (
  0 => 'GetProductsRequest_ItemOfArrayRefineb01dc616de18c8735fba8f8095f15001',
  1 => 'object',
)));
}

                
                    

if (is_object($value) && !($value instanceof \Exception) && !($value instanceof GetProductsRequest_GetProductsRequest_ItemOfArrayRefineb01dc616de18c8735fba8f8095f1500175a6b9052c1cb2c23048f2815c28c25e)) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Object\InvalidInstanceOfException($value ?? null, ...array (
  0 => 'GetProductsRequest_ItemOfArrayRefineb01dc616de18c8735fba8f8095f15001',
  1 => 'GetProductsRequest_GetProductsRequest_ItemOfArrayRefineb01dc616de18c8735fba8f8095f1500175a6b9052c1cb2c23048f2815c28c25e',
)));
}

                

                
                    $compositionErrorCollection[] = $this->_errorRegistry;

                    
                        if (isset($validatorIndex)) {
                            $this->_propertyValidationState[$validatorIndex][$validatorComponentIndex] = $this->_errorRegistry;
                        }
                    

                    // an error inside the composed validation occurred. Throw an exception to count the validity of the
                    // composition item
                    if ($this->_errorRegistry->getErrors()) {
                        throw new \Exception();
                    }
                

                
                    $proposedValue = $proposedValue ?? $value;
                

                if (is_object($value) && is_array($originalModelData)) {
                    $modifiedValues = array_merge($modifiedValues, $this->_getModifiedValues_20121($originalModelData, $value));
                }
            
                
            }
            
        } catch (\Exception $e) {
            

            $succeededCompositionElements--;
        }

        $value = $originalModelData;
        $validatorComponentIndex++;
    
        try {
            
                // check if the state of the validator is already known.
                // If none of the properties affected by the validator are changed the validator must not be re-evaluated
                if (isset($validatorIndex) &&
                    isset($this->_propertyValidationState[$validatorIndex][$validatorComponentIndex]) &&
                    !array_intersect(
                        array_keys($modifiedModelData),
                        [
                            
                                'scope',
                            
                                'product_id',
                            
                                'action',
                            
                                'ask',
                            
                        ]
                    )
                ) {
                    
                        $compositionErrorCollection[] = $this->_propertyValidationState[$validatorIndex][$validatorComponentIndex];
                    

                    if (
                            $this->_propertyValidationState[$validatorIndex][$validatorComponentIndex]->getErrors()
                        
                    ) {
                        throw new \Exception();
                    }
                } else {
            

                
                    // collect errors for each composition element
                    $this->_errorRegistry = new ErrorRegistryException();
                

                

                $value = (function ($value) {
    try {
        return is_array($value) ? new GetProductsRequest_GetProductsRequest_ItemOfArrayRefineb01dc616de18c8735fba8f8095f15001d5b392d89eb0397d01ef36b451045a72($value) : $value;
    } catch (\Exception $instantiationException) {
        
            
                foreach($instantiationException->getErrors() as $nestedValidationError) {
                    $this->_errorRegistry->addError($nestedValidationError);
                }
            
        

        
            return $instantiationException;
        
    }
})($value)
;

                
                    

if ((!is_object($value) && !$value instanceof UnitEnum) ) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Generic\InvalidTypeException($value ?? null, ...array (
  0 => 'GetProductsRequest_ItemOfArrayRefineb01dc616de18c8735fba8f8095f15001',
  1 => 'object',
)));
}

                
                    

if (is_object($value) && !($value instanceof \Exception) && !($value instanceof GetProductsRequest_GetProductsRequest_ItemOfArrayRefineb01dc616de18c8735fba8f8095f15001d5b392d89eb0397d01ef36b451045a72)) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Object\InvalidInstanceOfException($value ?? null, ...array (
  0 => 'GetProductsRequest_ItemOfArrayRefineb01dc616de18c8735fba8f8095f15001',
  1 => 'GetProductsRequest_GetProductsRequest_ItemOfArrayRefineb01dc616de18c8735fba8f8095f15001d5b392d89eb0397d01ef36b451045a72',
)));
}

                

                
                    $compositionErrorCollection[] = $this->_errorRegistry;

                    
                        if (isset($validatorIndex)) {
                            $this->_propertyValidationState[$validatorIndex][$validatorComponentIndex] = $this->_errorRegistry;
                        }
                    

                    // an error inside the composed validation occurred. Throw an exception to count the validity of the
                    // composition item
                    if ($this->_errorRegistry->getErrors()) {
                        throw new \Exception();
                    }
                

                
                    $proposedValue = $proposedValue ?? $value;
                

                if (is_object($value) && is_array($originalModelData)) {
                    $modifiedValues = array_merge($modifiedValues, $this->_getModifiedValues_20121($originalModelData, $value));
                }
            
                
            }
            
        } catch (\Exception $e) {
            

            $succeededCompositionElements--;
        }

        $value = $originalModelData;
        $validatorComponentIndex++;
    
        try {
            
                // check if the state of the validator is already known.
                // If none of the properties affected by the validator are changed the validator must not be re-evaluated
                if (isset($validatorIndex) &&
                    isset($this->_propertyValidationState[$validatorIndex][$validatorComponentIndex]) &&
                    !array_intersect(
                        array_keys($modifiedModelData),
                        [
                            
                                'scope',
                            
                                'proposal_id',
                            
                                'action',
                            
                                'ask',
                            
                        ]
                    )
                ) {
                    
                        $compositionErrorCollection[] = $this->_propertyValidationState[$validatorIndex][$validatorComponentIndex];
                    

                    if (
                            $this->_propertyValidationState[$validatorIndex][$validatorComponentIndex]->getErrors()
                        
                    ) {
                        throw new \Exception();
                    }
                } else {
            

                
                    // collect errors for each composition element
                    $this->_errorRegistry = new ErrorRegistryException();
                

                

                $value = (function ($value) {
    try {
        return is_array($value) ? new GetProductsRequest_GetProductsRequest_ItemOfArrayRefineb01dc616de18c8735fba8f8095f15001966d960c0a8231c9cf148f923aed05ad($value) : $value;
    } catch (\Exception $instantiationException) {
        
            
                foreach($instantiationException->getErrors() as $nestedValidationError) {
                    $this->_errorRegistry->addError($nestedValidationError);
                }
            
        

        
            return $instantiationException;
        
    }
})($value)
;

                
                    

if ((!is_object($value) && !$value instanceof UnitEnum) ) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Generic\InvalidTypeException($value ?? null, ...array (
  0 => 'GetProductsRequest_ItemOfArrayRefineb01dc616de18c8735fba8f8095f15001',
  1 => 'object',
)));
}

                
                    

if (is_object($value) && !($value instanceof \Exception) && !($value instanceof GetProductsRequest_GetProductsRequest_ItemOfArrayRefineb01dc616de18c8735fba8f8095f15001966d960c0a8231c9cf148f923aed05ad)) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Object\InvalidInstanceOfException($value ?? null, ...array (
  0 => 'GetProductsRequest_ItemOfArrayRefineb01dc616de18c8735fba8f8095f15001',
  1 => 'GetProductsRequest_GetProductsRequest_ItemOfArrayRefineb01dc616de18c8735fba8f8095f15001966d960c0a8231c9cf148f923aed05ad',
)));
}

                

                
                    $compositionErrorCollection[] = $this->_errorRegistry;

                    
                        if (isset($validatorIndex)) {
                            $this->_propertyValidationState[$validatorIndex][$validatorComponentIndex] = $this->_errorRegistry;
                        }
                    

                    // an error inside the composed validation occurred. Throw an exception to count the validity of the
                    // composition item
                    if ($this->_errorRegistry->getErrors()) {
                        throw new \Exception();
                    }
                

                
                    $proposedValue = $proposedValue ?? $value;
                

                if (is_object($value) && is_array($originalModelData)) {
                    $modifiedValues = array_merge($modifiedValues, $this->_getModifiedValues_20121($originalModelData, $value));
                }
            
                
            }
            
        } catch (\Exception $e) {
            

            $succeededCompositionElements--;
        }

        $value = $originalModelData;
        $validatorComponentIndex++;
    

    
        $value = $proposedValue;
    

    
        $this->_errorRegistry = $originalErrorRegistry;
    

    $result = !($succeededCompositionElements === 1);

    
        if ($result) {
            $this->_propertyValidationState = $originalPropertyValidationState;
        }
    

    return $result;
})($value)
) {
        $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\ComposedValue\OneOfException($value ?? null, ...array (
  0 => 'GetProductsRequest_ItemOfArrayRefineb01dc616de18c8735fba8f8095f15001',
  1 => $succeededCompositionElements,
  2 => $compositionErrorCollection,
)));
    }

    foreach (array_keys($modifiedModelData) as $property) {
        $modifiedModelData[$property] = $modelData[$property];
    }
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
                $this->validateComposition_0($modelData);



                $rollbackValues['scope'] = $this->scope;
                $this->processScope($modelData);
            }
        
    
        
            if (array_key_exists('ask', $modelData) &&
                $modelData['ask'] !== $this->ask
            ) {
                $this->validateComposition_0($modelData);



                $rollbackValues['ask'] = $this->ask;
                $this->processAsk($modelData);
            }
        
    
        
            if (array_key_exists('product_id', $modelData) &&
                $modelData['product_id'] !== $this->productId
            ) {
                $this->validateComposition_0($modelData);



                $rollbackValues['productId'] = $this->productId;
                $this->processProductId($modelData);
            }
        
    
        
            if (array_key_exists('action', $modelData) &&
                $modelData['action'] !== $this->action
            ) {
                $this->validateComposition_0($modelData);



                $rollbackValues['action'] = $this->action;
                $this->processAction($modelData);
            }
        
    
        
            if (array_key_exists('proposal_id', $modelData) &&
                $modelData['proposal_id'] !== $this->proposalId
            ) {
                $this->validateComposition_0($modelData);



                $rollbackValues['proposalId'] = $this->proposalId;
                $this->processProposalId($modelData);
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
  'fqcn' => 'AdCP\\MediaBuy\\Enums\\GetProductsRequest_GetProductsRequest_ItemOfArrayRefineb01dc616de18c8735fba8f8095f15001d5b392d89eb0397d01ef36b451045a72Action',
));
}





                        private function _getModifiedValues_20121(array $originalModelData, object $nestedCompositionObject): array {
                            $modifiedValues = [];
                            $defaultValueMap = array (
  0 => 'skipNotProvidedPropertiesMap',
  1 => 'action',
  2 => 'skipNotProvidedPropertiesMap',
  3 => 'action',
  4 => 'skipNotProvidedPropertiesMap',
);
    
                            foreach (array (
  'scope' => 'getScope',
  'ask' => 'getAsk',
  'skipNotProvidedPropertiesMap' => 'get_skipNotProvidedPropertiesMap',
  'product_id' => 'getProductId',
  'action' => 'getAction',
  'proposal_id' => 'getProposalId',
) as $key => $accessor) {
                                if ((isset($originalModelData[$key]) || in_array($key, $defaultValueMap))
                                    && method_exists($nestedCompositionObject, $accessor)
                                    && ($modifiedValue = $nestedCompositionObject->$accessor())
                                        !== ($originalModelData[$key] ?? !$modifiedValue)
                                ) {
                                    $modifiedValues[$key] = $modifiedValue;
                                }
                            }
    
                            return $modifiedValues;
                        }


}

// @codeCoverageIgnoreEnd
