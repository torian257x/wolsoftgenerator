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

    use PHPModelGenerator\Attributes\JsonPointer;

    use PHPModelGenerator\Attributes\SchemaName;

    use PHPModelGenerator\Attributes\Required;

    use PHPModelGenerator\Attributes\Internal;

    use PHPModelGenerator\Exception\ErrorRegistryException;


/**
 * Class GetProductsRequest_GetProductsRequest_ItemOfArrayRefineb01dc616de18c8735fba8f8095f15001d5b392d89eb0397d01ef36b451045a72
 * @package AdCP\MediaBuy 
 *

 * This is an auto-implemented class implemented by the php-json-schema-model-generator.
 * If you need to implement something in this class use inheritance. Else you will lose your changes if the classes
 * are re-generated.
 */

#[JsonPointer('/properties/refine/items/oneOf/1')]

class GetProductsRequest_GetProductsRequest_ItemOfArrayRefineb01dc616de18c8735fba8f8095f15001d5b392d89eb0397d01ef36b451045a72 implements JSONModelInterface, JsonSerializable, SerializationInterface
{
    use SerializableTrait;

    
        
            #[JsonPointer('/properties/refine/items/oneOf/1/properties/scope')]
        
            #[SchemaName('scope')]
        
            #[Required]
        
        /** @var string Change scoped to a specific product. */
        protected $scope;
    
        
            #[JsonPointer('/properties/refine/items/oneOf/1/properties/product_id')]
        
            #[SchemaName('product_id')]
        
            #[Required]
        
        /** @var string Product ID from a previous get_products response. */
        protected $productId;
    
        
            #[JsonPointer('/properties/refine/items/oneOf/1/properties/action')]
        
            #[SchemaName('action')]
        
        /** @var GetProductsRequest_GetProductsRequest_ItemOfArrayRefineb01dc616de18c8735fba8f8095f15001d5b392d89eb0397d01ef36b451045a72Action|null 'include' (default): return this product with updated pricing and data. 'omit': exclude this product from the response. 'more_like_this': find additional products similar to this one (the original is also returned). Optional — when omitted, the seller treats the entry as action: 'include'. */
        protected $action = GetProductsRequest_GetProductsRequest_ItemOfArrayRefineb01dc616de18c8735fba8f8095f15001d5b392d89eb0397d01ef36b451045a72Action::Include;
    
        
            #[JsonPointer('/properties/refine/items/oneOf/1/properties/ask')]
        
            #[SchemaName('ask')]
        
        /** @var string|null What the buyer is asking for on this product. For 'include': specific changes to request (e.g., 'add 16:9 format'). For 'more_like_this': what 'similar' means (e.g., 'same audience but video format'). Ignored when action is 'omit'. */
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
     * GetProductsRequest_GetProductsRequest_ItemOfArrayRefineb01dc616de18c8735fba8f8095f15001d5b392d89eb0397d01ef36b451045a72 constructor.
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
            
        
            
                $this->processProductId($rawModelDataInput);
            
        
            
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
   'product_id',
   'action',
   'ask',
));

    

    return $additionalProperties;
})()) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Object\AdditionalPropertiesException($value ?? null, ...array (
  0 => 'GetProductsRequest_GetProductsRequest_ItemOfArrayRefineb01dc616de18c8735fba8f8095f15001d5b392d89eb0397d01ef36b451045a72',
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
                 * Change scoped to a specific product.
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
                 * @param string $scope Change scoped to a specific product.
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

                
                    

if ($value !== 'product') {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Generic\InvalidConstException($value ?? null, ...array (
  0 => 'scope',
  1 => 'product',
)));
}

                

                return $value;
            }
        
    
        
            
                /**
                 * Get the value of product_id.
                 *
                 * Product ID from a previous get_products response.
                 *
                 * @return string
                 */
                public function getProductId(): string
                {
                    

                    return $this->productId;
                }
            

            
                /**
                 * Set the value of product_id.
                 *
                 * @param string $productId Product ID from a previous get_products response.
                 *
                 * @throws ErrorRegistryException
                 *
                 * @return static
                 */
                public function setProductId(
                    string $productId
                ): static {
                    if ($this->productId === $productId) {
                        return $this;
                    }

                    $value = $modelData['product_id'] = $productId;

                    
                        $this->_errorRegistry = new ErrorRegistryException();
                    

                    

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
             * @throws ErrorRegistryException
             */
            protected function processProductId(array $modelData): void
            {
                

                $value = array_key_exists('product_id', $modelData) ? $modelData['product_id'] : $this->productId;

                

                $this->productId = $this->validateProductId($value, $modelData);
            }

            /**
             * Execute all validators for the property productId
             */
            protected function validateProductId($value, array $modelData)
            {
                
                    

if (!array_key_exists('product_id', $modelData)) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Object\RequiredValueException($value ?? null, ...array (
  0 => 'product_id',
)));
}

                
                    

if ((!is_string($value) && !$value instanceof UnitEnum) ) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Generic\InvalidTypeException($value ?? null, ...array (
  0 => 'product_id',
  1 => 'string',
)));
}

                
                    

if (is_string($value) && mb_strlen($value) < 1) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\String\MinLengthException($value ?? null, ...array (
  0 => 'product_id',
  1 => 1,
)));
}

                

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

                
                    

if ((!is_string($value) && !$value instanceof UnitEnum) ) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Generic\InvalidTypeException($value ?? null, ...array (
  0 => 'action',
  1 => 'string',
)));
}

                
                    

if (!($value instanceof UnitEnum) && !in_array($value, array (
   'include',
   'omit',
   'more_like_this',
), true)) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Generic\EnumException($value ?? null, ...array (
  0 => 'action',
  1 => 
  array (
    0 => 'include',
    1 => 'omit',
    2 => 'more_like_this',
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
                 * Get the value of ask.
                 *
                 * What the buyer is asking for on this product. For 'include': specific changes to request (e.g., 'add 16:9 format'). For 'more_like_this': what 'similar' means (e.g., 'same audience but video format'). Ignored when action is 'omit'.
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
                 * @param string $ask What the buyer is asking for on this product. For 'include': specific changes to request (e.g., 'add 16:9 format'). For 'more_like_this': what 'similar' means (e.g., 'same audience but video format'). Ignored when action is 'omit'.
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
        
    
        
            if (array_key_exists('product_id', $modelData) &&
                $modelData['product_id'] !== $this->productId
            ) {
                

                $rollbackValues['productId'] = $this->productId;
                $this->processProductId($modelData);
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
  'fqcn' => 'AdCP\\MediaBuy\\Enums\\GetProductsRequest_GetProductsRequest_ItemOfArrayRefineb01dc616de18c8735fba8f8095f15001d5b392d89eb0397d01ef36b451045a72Action',
));
}





}

// @codeCoverageIgnoreEnd
