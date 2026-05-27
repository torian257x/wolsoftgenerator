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

    use PHPModelGenerator\Attributes\Required;

    use PHPModelGenerator\Attributes\Internal;

    use PHPModelGenerator\Exception\ErrorRegistryException;


/**
 * Class GetProductsResponse_ItemOfArrayPublisher_Properties356f954b5f22f2cf551a8fa9ab8cc127
 * @package AdCP\MediaBuy 
 *
 * Select all properties from one publisher domain, or from each publisher domain when `publisher_domains` is used. Consumers MAY satisfy the selector from the parent file's top-level `properties[]` when those properties carry a `publisher_domain` matching one of the listed domains (see Resolution paths in the spec).
 *
 * This is an auto-implemented class implemented by the php-json-schema-model-generator.
 * If you need to implement something in this class use inheritance. Else you will lose your changes if the classes
 * are re-generated.
 */

#[JsonPointer('/properties/products/items/properties/publisher_properties/items/allOf/0/oneOf/0')]

class GetProductsResponse_ItemOfArrayPublisher_Properties356f954b5f22f2cf551a8fa9ab8cc127 implements JSONModelInterface, JsonSerializable, SerializationInterface
{
    use SerializableTrait;

    
        
            #[JsonPointer('/properties/products/items/properties/publisher_properties/items/allOf/0/oneOf/0/properties/publisher_domain')]
        
            #[SchemaName('publisher_domain')]
        
        /** @var string|null Domain where publisher's adagents.json is hosted (e.g., 'cnn.com'). XOR with `publisher_domains` — exactly one MUST be present on each `publisher_properties[]` entry; both-present and neither-present both fail validation. */
        protected $publisherDomain;
    
        
            #[JsonPointer('/properties/products/items/properties/publisher_properties/items/allOf/0/oneOf/0/properties/publisher_domains')]
        
            #[SchemaName('publisher_domains')]
        
        /** @var string[]|null Compact form for fanning the same selector across many publishers (e.g., a managed network listing every publisher it represents). Each entry is the domain where that publisher's adagents.json is hosted. Each listed domain MUST be canonicalized to lowercase (the `pattern` already rejects uppercase). Mutually exclusive with `publisher_domain`. Each listed domain counts as explicitly scoped for the `managerdomain` fallback safety rule. */
        protected $publisherDomains;
    
        
            #[JsonPointer('/properties/products/items/properties/publisher_properties/items/allOf/0/oneOf/0/properties/selection_type')]
        
            #[SchemaName('selection_type')]
        
            #[Required]
        
        /** @var string Discriminator indicating all properties from each addressed publisher are included */
        protected $selectionType;
    
        
            #[Internal]
        
        /** @var array Track the internal validation state of composed validations */
        private $_propertyValidationState = array (
  0 => 
  array (
  ),
);
    
        
            #[Internal]
        
        /** @var array Collect all additional properties provided to the schema */
        private $_additionalProperties = array (
);
    
        
            #[Internal]
        
        /** @var array Values which might be skipped for serialization if not provided */
        private $_skipNotProvidedPropertiesMap = array (
  0 => 'publisher_domain',
  1 => 'publisher_domains',
);
    
    #[Internal]
    /** @var array */
    protected $_rawModelDataInput = [];

    
        #[Internal]
        /** @var ErrorRegistryException Collect all validation errors */
        protected $_errorRegistry;
    

    /**
     * GetProductsResponse_ItemOfArrayPublisher_Properties356f954b5f22f2cf551a8fa9ab8cc127 constructor.
     *
     * @param array $rawModelDataInput
     *
     * @throws ErrorRegistryException
     */
    public function __construct(array $rawModelDataInput = [])
    {
        
            $this->_errorRegistry = new ErrorRegistryException();
        

        

        
            $this->executeBaseValidators($rawModelDataInput);
        

        
            
                $this->processPublisherDomain($rawModelDataInput);
            
        
            
                $this->processPublisherDomains($rawModelDataInput);
            
        
            
                $this->processSelectionType($rawModelDataInput);
            
        
            
        
            
        
            
        

        
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
   'publisher_domain',
   'publisher_domains',
   'selection_type',
)) as $propertyKey) {
        

        $this->_additionalProperties[$propertyKey] = $value[$propertyKey];
    }

    return false;
})()) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Object\InvalidAdditionalPropertiesException($value ?? null, ...array (
  0 => 'GetProductsResponse_ItemOfArrayPublisher_Properties356f954b5f22f2cf551a8fa9ab8cc127',
)));
}

            

            
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
                 * Get the value of publisher_domain.
                 *
                 * Domain where publisher's adagents.json is hosted (e.g., 'cnn.com'). XOR with `publisher_domains` — exactly one MUST be present on each `publisher_properties[]` entry; both-present and neither-present both fail validation.
                 *
                 * @return string|null
                 */
                public function getPublisherDomain(): ?string
                {
                    

                    return $this->publisherDomain;
                }
            

            
                /**
                 * Set the value of publisher_domain.
                 *
                 * @param string $publisherDomain Domain where publisher's adagents.json is hosted (e.g., 'cnn.com'). XOR with `publisher_domains` — exactly one MUST be present on each `publisher_properties[]` entry; both-present and neither-present both fail validation.
                 *
                 * @throws ErrorRegistryException
                 *
                 * @return static
                 */
                public function setPublisherDomain(
                    string $publisherDomain
                ): static {
                    if ($this->publisherDomain === $publisherDomain) {
                        return $this;
                    }

                    $value = $modelData['publisher_domain'] = $publisherDomain;

                    
                        $this->_errorRegistry = new ErrorRegistryException();
                    

                    $this->validateComposition_0($modelData);



                    $value = $this->validatePublisherDomain($value, $modelData);

                    
                        if ($this->_errorRegistry->getErrors()) {
                            throw $this->_errorRegistry;
                        }
                    

                    $this->publisherDomain = $value;
                    $this->_rawModelDataInput['publisher_domain'] = $publisherDomain;

                    

                    return $this;
                }
            

            /**
             * Extract the value, perform validations and set the property publisherDomain
             *
             * @param array $modelData
             *
             * @throws ErrorRegistryException
             */
            protected function processPublisherDomain(array $modelData): void
            {
                
                    if (!array_key_exists('publisher_domain', $modelData) && $this->publisherDomain === null) {
                        return;
                    }
                

                $value = array_key_exists('publisher_domain', $modelData) ? $modelData['publisher_domain'] : $this->publisherDomain;

                

                $this->publisherDomain = $this->validatePublisherDomain($value, $modelData);
            }

            /**
             * Execute all validators for the property publisherDomain
             */
            protected function validatePublisherDomain($value, array $modelData)
            {
                
                    

if ((!is_string($value) && !$value instanceof UnitEnum) ) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Generic\InvalidTypeException($value ?? null, ...array (
  0 => 'publisher_domain',
  1 => 'string',
)));
}

                
                    

if (is_string($value) && !preg_match(base64_decode('L15bYS16MC05XShbYS16MC05LV0qW2EtejAtOV0pPyhcLlthLXowLTldKFthLXowLTktXSpbYS16MC05XSk/KSokLw=='), $value)) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\String\PatternException($value ?? null, ...array (
  0 => 'publisher_domain',
  1 => '^[a-z0-9]([a-z0-9-]*[a-z0-9])?(\\.[a-z0-9]([a-z0-9-]*[a-z0-9])?)*$',
)));
}

                

                return $value;
            }
        
    
        
            
                /**
                 * Get the value of publisher_domains.
                 *
                 * Compact form for fanning the same selector across many publishers (e.g., a managed network listing every publisher it represents). Each entry is the domain where that publisher's adagents.json is hosted. Each listed domain MUST be canonicalized to lowercase (the `pattern` already rejects uppercase). Mutually exclusive with `publisher_domain`. Each listed domain counts as explicitly scoped for the `managerdomain` fallback safety rule.
                 *
                 * @return string[]|null
                 */
                public function getPublisherDomains(): ?array
                {
                    

                    return $this->publisherDomains;
                }
            

            
                /**
                 * Set the value of publisher_domains.
                 *
                 * @param string[] $publisherDomains Compact form for fanning the same selector across many publishers (e.g., a managed network listing every publisher it represents). Each entry is the domain where that publisher's adagents.json is hosted. Each listed domain MUST be canonicalized to lowercase (the `pattern` already rejects uppercase). Mutually exclusive with `publisher_domain`. Each listed domain counts as explicitly scoped for the `managerdomain` fallback safety rule.
                 *
                 * @throws ErrorRegistryException
                 *
                 * @return static
                 */
                public function setPublisherDomains(
                    array $publisherDomains
                ): static {
                    if ($this->publisherDomains === $publisherDomains) {
                        return $this;
                    }

                    $value = $modelData['publisher_domains'] = $publisherDomains;

                    
                        $this->_errorRegistry = new ErrorRegistryException();
                    

                    $this->validateComposition_0($modelData);



                    $value = $this->validatePublisherDomains($value, $modelData);

                    
                        if ($this->_errorRegistry->getErrors()) {
                            throw $this->_errorRegistry;
                        }
                    

                    $this->publisherDomains = $value;
                    $this->_rawModelDataInput['publisher_domains'] = $publisherDomains;

                    

                    return $this;
                }
            

            /**
             * Extract the value, perform validations and set the property publisherDomains
             *
             * @param array $modelData
             *
             * @throws ErrorRegistryException
             */
            protected function processPublisherDomains(array $modelData): void
            {
                
                    if (!array_key_exists('publisher_domains', $modelData) && $this->publisherDomains === null) {
                        return;
                    }
                

                $value = array_key_exists('publisher_domains', $modelData) ? $modelData['publisher_domains'] : $this->publisherDomains;

                

                $this->publisherDomains = $this->validatePublisherDomains($value, $modelData);
            }

            /**
             * Execute all validators for the property publisherDomains
             */
            protected function validatePublisherDomains($value, array $modelData)
            {
                
                    

if ((!is_array($value) && !$value instanceof UnitEnum) ) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Generic\InvalidTypeException($value ?? null, ...array (
  0 => 'publisher_domains',
  1 => 'array',
)));
}

                
                    $this->validatePublisherDomains_ArrayItem_2f3a5c57a6158e24bdec0d3f3ce2cd4a($value, $modelData);
                
                    

if (is_array($value) && count($value) < 1) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Arrays\MinItemsException($value ?? null, ...array (
  0 => 'publisher_domains',
  1 => 1,
)));
}

                
                    

if (is_array($value) && (static function (array $items): bool {
    if (empty($items)) {
        return false;
    }

    asort($items);
    $lastSeen = array_shift($items);

    foreach ($items as $value) {
        if ($value === $lastSeen) {
            return true;
        }

        $lastSeen = $value;
    }

    return false;
})($value)) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Arrays\UniqueItemsException($value ?? null, ...array (
  0 => 'publisher_domains',
)));
}

                

                return $value;
            }
        
    
        
            
                /**
                 * Get the value of selection_type.
                 *
                 * Discriminator indicating all properties from each addressed publisher are included
                 *
                 * @return string
                 */
                public function getSelectionType(): string
                {
                    

                    return $this->selectionType;
                }
            

            
                /**
                 * Set the value of selection_type.
                 *
                 * @param string $selectionType Discriminator indicating all properties from each addressed publisher are included
                 *
                 * @throws ErrorRegistryException
                 *
                 * @return static
                 */
                public function setSelectionType(
                    string $selectionType
                ): static {
                    if ($this->selectionType === $selectionType) {
                        return $this;
                    }

                    $value = $modelData['selection_type'] = $selectionType;

                    
                        $this->_errorRegistry = new ErrorRegistryException();
                    

                    



                    $value = $this->validateSelectionType($value, $modelData);

                    
                        if ($this->_errorRegistry->getErrors()) {
                            throw $this->_errorRegistry;
                        }
                    

                    $this->selectionType = $value;
                    $this->_rawModelDataInput['selection_type'] = $selectionType;

                    

                    return $this;
                }
            

            /**
             * Extract the value, perform validations and set the property selectionType
             *
             * @param array $modelData
             *
             * @throws ErrorRegistryException
             */
            protected function processSelectionType(array $modelData): void
            {
                

                $value = array_key_exists('selection_type', $modelData) ? $modelData['selection_type'] : $this->selectionType;

                

                $this->selectionType = $this->validateSelectionType($value, $modelData);
            }

            /**
             * Execute all validators for the property selectionType
             */
            protected function validateSelectionType($value, array $modelData)
            {
                
                    

if (!array_key_exists('selection_type', $modelData)) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Object\RequiredValueException($value ?? null, ...array (
  0 => 'selection_type',
)));
}

                
                    

if ((!is_string($value) && !$value instanceof UnitEnum) ) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Generic\InvalidTypeException($value ?? null, ...array (
  0 => 'selection_type',
  1 => 'string',
)));
}

                
                    

if ($value !== 'all') {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Generic\InvalidConstException($value ?? null, ...array (
  0 => 'selection_type',
  1 => 'all',
)));
}

                

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
    $succeededCompositionElements = 2;
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
        return is_array($value) ? new GetProductsResponse_GetProductsResponse_ItemOfArrayPublisher_Properties356f954b5f22f2cf551a8fa9ab8cc12703f868fa5f53a2303f3ad893d57ebc13($value) : $value;
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
  0 => 'GetProductsResponse_ItemOfArrayPublisher_Properties356f954b5f22f2cf551a8fa9ab8cc127',
  1 => 'object',
)));
}

                
                    

if (is_object($value) && !($value instanceof \Exception) && !($value instanceof GetProductsResponse_GetProductsResponse_ItemOfArrayPublisher_Properties356f954b5f22f2cf551a8fa9ab8cc12703f868fa5f53a2303f3ad893d57ebc13)) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Object\InvalidInstanceOfException($value ?? null, ...array (
  0 => 'GetProductsResponse_ItemOfArrayPublisher_Properties356f954b5f22f2cf551a8fa9ab8cc127',
  1 => 'GetProductsResponse_GetProductsResponse_ItemOfArrayPublisher_Properties356f954b5f22f2cf551a8fa9ab8cc12703f868fa5f53a2303f3ad893d57ebc13',
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
                    $modifiedValues = array_merge($modifiedValues, $this->_getModifiedValues_d6d12($originalModelData, $value));
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
                            
                                'publisher_domain',
                            
                                'publisher_domains',
                            
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
        return is_array($value) ? new GetProductsResponse_GetProductsResponse_ItemOfArrayPublisher_Properties356f954b5f22f2cf551a8fa9ab8cc127dc6e656ecaff6f5672cab18055a60228($value) : $value;
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
  0 => 'GetProductsResponse_ItemOfArrayPublisher_Properties356f954b5f22f2cf551a8fa9ab8cc127',
  1 => 'object',
)));
}

                
                    

if (is_object($value) && !($value instanceof \Exception) && !($value instanceof GetProductsResponse_GetProductsResponse_ItemOfArrayPublisher_Properties356f954b5f22f2cf551a8fa9ab8cc127dc6e656ecaff6f5672cab18055a60228)) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Object\InvalidInstanceOfException($value ?? null, ...array (
  0 => 'GetProductsResponse_ItemOfArrayPublisher_Properties356f954b5f22f2cf551a8fa9ab8cc127',
  1 => 'GetProductsResponse_GetProductsResponse_ItemOfArrayPublisher_Properties356f954b5f22f2cf551a8fa9ab8cc127dc6e656ecaff6f5672cab18055a60228',
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
                    $modifiedValues = array_merge($modifiedValues, $this->_getModifiedValues_d6d12($originalModelData, $value));
                }
            
                
            }
            
        } catch (\Exception $e) {
            

            $succeededCompositionElements--;
        }

        $value = $originalModelData;
        $validatorComponentIndex++;
    

    
        $value = $proposedValue;
    

    
        $this->_errorRegistry = $originalErrorRegistry;
    

    $result = !($succeededCompositionElements === 2);

    
        if ($result) {
            $this->_propertyValidationState = $originalPropertyValidationState;
        }
    

    return $result;
})($value)
) {
        $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\ComposedValue\AllOfException($value ?? null, ...array (
  0 => 'GetProductsResponse_ItemOfArrayPublisher_Properties356f954b5f22f2cf551a8fa9ab8cc127',
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
    

    
        
            if (array_key_exists('publisher_domain', $modelData) &&
                $modelData['publisher_domain'] !== $this->publisherDomain
            ) {
                $this->validateComposition_0($modelData);



                $rollbackValues['publisherDomain'] = $this->publisherDomain;
                $this->processPublisherDomain($modelData);
            }
        
    
        
            if (array_key_exists('publisher_domains', $modelData) &&
                $modelData['publisher_domains'] !== $this->publisherDomains
            ) {
                $this->validateComposition_0($modelData);



                $rollbackValues['publisherDomains'] = $this->publisherDomains;
                $this->processPublisherDomains($modelData);
            }
        
    
        
            if (array_key_exists('selection_type', $modelData) &&
                $modelData['selection_type'] !== $this->selectionType
            ) {
                



                $rollbackValues['selectionType'] = $this->selectionType;
                $this->processSelectionType($modelData);
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


private function validatePublisherDomains_ArrayItem_2f3a5c57a6158e24bdec0d3f3ce2cd4a(&$value, $modelData): void {
                    $invalidItems_397e033b4d544cda34433f225ce4f410 = [];
                    
                    if (is_array($value) && (function (&$items) use (&$invalidItems_397e033b4d544cda34433f225ce4f410, $modelData) {
    
        $originalErrorRegistry = $this->_errorRegistry;
    

    foreach ($items as $index => &$value) {
        
            $this->_errorRegistry = new ErrorRegistryException();
        

        try {
            

            
                

if ((!is_string($value) && !$value instanceof UnitEnum) ) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Generic\InvalidTypeException($value ?? null, ...array (
  0 => 'item of array publisher_domains',
  1 => 'string',
)));
}

            
                

if (is_string($value) && !preg_match(base64_decode('L15bYS16MC05XShbYS16MC05LV0qW2EtejAtOV0pPyhcLlthLXowLTldKFthLXowLTktXSpbYS16MC05XSk/KSokLw=='), $value)) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\String\PatternException($value ?? null, ...array (
  0 => 'item of array publisher_domains',
  1 => '^[a-z0-9]([a-z0-9-]*[a-z0-9])?(\\.[a-z0-9]([a-z0-9-]*[a-z0-9])?)*$',
)));
}

            

            
                if ($this->_errorRegistry->getErrors()) {
                    $invalidItems_397e033b4d544cda34433f225ce4f410[$index] = $this->_errorRegistry->getErrors();
                }
            
        } catch (\Exception $e) {
            // collect all errors concerning invalid items
            isset($invalidItems_397e033b4d544cda34433f225ce4f410[$index])
                ? $invalidItems_397e033b4d544cda34433f225ce4f410[$index][] = $e
                : $invalidItems_397e033b4d544cda34433f225ce4f410[$index] = [$e];
        }
    }

    
        $this->_errorRegistry = $originalErrorRegistry;
    

    return !empty($invalidItems_397e033b4d544cda34433f225ce4f410);
})($value)) {
                        $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Arrays\InvalidItemException($value ?? null, ...array (
  0 => 'publisher_domains',
  1 => $invalidItems_397e033b4d544cda34433f225ce4f410,
)));
                    }
                }


                        private function _getModifiedValues_d6d12(array $originalModelData, object $nestedCompositionObject): array {
                            $modifiedValues = [];
                            $defaultValueMap = array (
  0 => 'propertyValidationState',
  1 => 'skipNotProvidedPropertiesMap',
  2 => 'propertyValidationState',
  3 => 'skipNotProvidedPropertiesMap',
);
    
                            foreach (array (
  'propertyValidationState' => 'get_propertyValidationState',
  'skipNotProvidedPropertiesMap' => 'get_skipNotProvidedPropertiesMap',
  'publisher_domain' => 'getPublisherDomain',
  'publisher_domains' => 'getPublisherDomains',
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
