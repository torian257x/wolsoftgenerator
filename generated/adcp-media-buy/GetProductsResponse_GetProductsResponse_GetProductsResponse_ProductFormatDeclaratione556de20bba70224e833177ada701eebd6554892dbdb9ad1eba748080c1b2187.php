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
 * Class GetProductsResponse_GetProductsResponse_GetProductsResponse_ProductFormatDeclaratione556de20bba70224e833177ada701eebd6554892dbdb9ad1eba748080c1b2187
 * @package AdCP\MediaBuy 
 *

 * This is an auto-implemented class implemented by the php-json-schema-model-generator.
 * If you need to implement something in this class use inheritance. Else you will lose your changes if the classes
 * are re-generated.
 */

#[JsonPointer('/properties/products/items/properties/format_options/items/allOf/0/then')]

class GetProductsResponse_GetProductsResponse_GetProductsResponse_ProductFormatDeclaratione556de20bba70224e833177ada701eebd6554892dbdb9ad1eba748080c1b2187 implements JSONModelInterface, JsonSerializable, SerializationInterface
{
    use SerializableTrait;

    
        
            #[JsonPointer('/properties/products/items/properties/format_options/items/allOf/0/then/properties/format_shape')]
        
            #[SchemaName('format_shape')]
        
            #[Required]
        
        /** @var mixed */
        protected $formatShape;
    
        
            #[JsonPointer('/properties/products/items/properties/format_options/items/allOf/0/then/properties/format_schema')]
        
            #[SchemaName('format_schema')]
        
            #[Required]
        
        /** @var mixed */
        protected $formatSchema;
    
        
            #[JsonPointer('/properties/products/items/properties/format_options/items/allOf/0/then/anyOf/0/properties/canonical_formats_only')]
        
            #[SchemaName('canonical_formats_only')]
        
            #[Required]
        
        /** @var mixed */
        protected $canonicalFormatsOnly;
    
        
            #[JsonPointer('/properties/products/items/properties/format_options/items/allOf/0/then/anyOf/1/properties/v1_format_ref')]
        
            #[SchemaName('v1_format_ref')]
        
            #[Required]
        
        /** @var mixed */
        protected $v1FormatRef;
    
        
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
  2 => 'canonical_formats_only',
  3 => 'v1_format_ref',
);
    
    #[Internal]
    /** @var array */
    protected $_rawModelDataInput = [];

    
        #[Internal]
        /** @var ErrorRegistryException Collect all validation errors */
        protected $_errorRegistry;
    

    /**
     * GetProductsResponse_GetProductsResponse_GetProductsResponse_ProductFormatDeclaratione556de20bba70224e833177ada701eebd6554892dbdb9ad1eba748080c1b2187 constructor.
     *
     * @param array $rawModelDataInput
     *
     * @throws ErrorRegistryException
     */
    public function __construct(array $rawModelDataInput = [])
    {
        
            $this->_errorRegistry = new ErrorRegistryException();
        

        

        
            $this->executeBaseValidators($rawModelDataInput);
        

        
            
                $this->processFormatShape($rawModelDataInput);
            
        
            
                $this->processFormatSchema($rawModelDataInput);
            
        
            
                $this->processCanonicalFormatsOnly($rawModelDataInput);
            
        
            
                $this->processV1FormatRef($rawModelDataInput);
            
        
            
        
            
        

        
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
                 * Get the value of format_shape.
                 *
                 *
                 * @return mixed
                 */
                public function getFormatShape(): mixed
                {
                    

                    return $this->formatShape;
                }
            

            
                /**
                 * Set the value of format_shape.
                 *
                 * @param mixed $formatShape
                 *
                 * @throws ErrorRegistryException
                 *
                 * @return static
                 */
                public function setFormatShape(
                    mixed $formatShape
                ): static {
                    if ($this->formatShape === $formatShape) {
                        return $this;
                    }

                    $value = $modelData['format_shape'] = $formatShape;

                    
                        $this->_errorRegistry = new ErrorRegistryException();
                    

                    



                    $value = $this->validateFormatShape($value, $modelData);

                    
                        if ($this->_errorRegistry->getErrors()) {
                            throw $this->_errorRegistry;
                        }
                    

                    $this->formatShape = $value;
                    $this->_rawModelDataInput['format_shape'] = $formatShape;

                    

                    return $this;
                }
            

            /**
             * Extract the value, perform validations and set the property formatShape
             *
             * @param array $modelData
             *
             * @throws ErrorRegistryException
             */
            protected function processFormatShape(array $modelData): void
            {
                

                $value = array_key_exists('format_shape', $modelData) ? $modelData['format_shape'] : $this->formatShape;

                

                $this->formatShape = $this->validateFormatShape($value, $modelData);
            }

            /**
             * Execute all validators for the property formatShape
             */
            protected function validateFormatShape($value, array $modelData)
            {
                
                    

if (!array_key_exists('format_shape', $modelData)) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Object\RequiredValueException($value ?? null, ...array (
  0 => 'format_shape',
)));
}

                

                return $value;
            }
        
    
        
            
                /**
                 * Get the value of format_schema.
                 *
                 *
                 * @return mixed
                 */
                public function getFormatSchema(): mixed
                {
                    

                    return $this->formatSchema;
                }
            

            
                /**
                 * Set the value of format_schema.
                 *
                 * @param mixed $formatSchema
                 *
                 * @throws ErrorRegistryException
                 *
                 * @return static
                 */
                public function setFormatSchema(
                    mixed $formatSchema
                ): static {
                    if ($this->formatSchema === $formatSchema) {
                        return $this;
                    }

                    $value = $modelData['format_schema'] = $formatSchema;

                    
                        $this->_errorRegistry = new ErrorRegistryException();
                    

                    



                    $value = $this->validateFormatSchema($value, $modelData);

                    
                        if ($this->_errorRegistry->getErrors()) {
                            throw $this->_errorRegistry;
                        }
                    

                    $this->formatSchema = $value;
                    $this->_rawModelDataInput['format_schema'] = $formatSchema;

                    

                    return $this;
                }
            

            /**
             * Extract the value, perform validations and set the property formatSchema
             *
             * @param array $modelData
             *
             * @throws ErrorRegistryException
             */
            protected function processFormatSchema(array $modelData): void
            {
                

                $value = array_key_exists('format_schema', $modelData) ? $modelData['format_schema'] : $this->formatSchema;

                

                $this->formatSchema = $this->validateFormatSchema($value, $modelData);
            }

            /**
             * Execute all validators for the property formatSchema
             */
            protected function validateFormatSchema($value, array $modelData)
            {
                
                    

if (!array_key_exists('format_schema', $modelData)) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Object\RequiredValueException($value ?? null, ...array (
  0 => 'format_schema',
)));
}

                

                return $value;
            }
        
    
        
            
                /**
                 * Get the value of canonical_formats_only.
                 *
                 *
                 * @return mixed
                 */
                public function getCanonicalFormatsOnly(): mixed
                {
                    

                    return $this->canonicalFormatsOnly;
                }
            

            
                /**
                 * Set the value of canonical_formats_only.
                 *
                 * @param mixed $canonicalFormatsOnly
                 *
                 * 
                 *
                 * @return static
                 */
                public function setCanonicalFormatsOnly(
                    mixed $canonicalFormatsOnly
                ): static {
                    if ($this->canonicalFormatsOnly === $canonicalFormatsOnly) {
                        return $this;
                    }

                    $value = $modelData['canonical_formats_only'] = $canonicalFormatsOnly;

                    
                        $this->_errorRegistry = new ErrorRegistryException();
                    

                    $this->validateComposition_0($modelData);



                    $value = $this->validateCanonicalFormatsOnly($value, $modelData);

                    
                        if ($this->_errorRegistry->getErrors()) {
                            throw $this->_errorRegistry;
                        }
                    

                    $this->canonicalFormatsOnly = $value;
                    $this->_rawModelDataInput['canonical_formats_only'] = $canonicalFormatsOnly;

                    

                    return $this;
                }
            

            /**
             * Extract the value, perform validations and set the property canonicalFormatsOnly
             *
             * @param array $modelData
             *
             * 
             */
            protected function processCanonicalFormatsOnly(array $modelData): void
            {
                
                    if (!array_key_exists('canonical_formats_only', $modelData) && $this->canonicalFormatsOnly === null) {
                        return;
                    }
                

                $value = array_key_exists('canonical_formats_only', $modelData) ? $modelData['canonical_formats_only'] : $this->canonicalFormatsOnly;

                

                $this->canonicalFormatsOnly = $this->validateCanonicalFormatsOnly($value, $modelData);
            }

            /**
             * Execute all validators for the property canonicalFormatsOnly
             */
            protected function validateCanonicalFormatsOnly($value, array $modelData)
            {
                

                return $value;
            }
        
    
        
            
                /**
                 * Get the value of v1_format_ref.
                 *
                 *
                 * @return mixed
                 */
                public function getV1FormatRef(): mixed
                {
                    

                    return $this->v1FormatRef;
                }
            

            
                /**
                 * Set the value of v1_format_ref.
                 *
                 * @param mixed $v1FormatRef
                 *
                 * 
                 *
                 * @return static
                 */
                public function setV1FormatRef(
                    mixed $v1FormatRef
                ): static {
                    if ($this->v1FormatRef === $v1FormatRef) {
                        return $this;
                    }

                    $value = $modelData['v1_format_ref'] = $v1FormatRef;

                    
                        $this->_errorRegistry = new ErrorRegistryException();
                    

                    $this->validateComposition_0($modelData);



                    $value = $this->validateV1FormatRef($value, $modelData);

                    
                        if ($this->_errorRegistry->getErrors()) {
                            throw $this->_errorRegistry;
                        }
                    

                    $this->v1FormatRef = $value;
                    $this->_rawModelDataInput['v1_format_ref'] = $v1FormatRef;

                    

                    return $this;
                }
            

            /**
             * Extract the value, perform validations and set the property v1FormatRef
             *
             * @param array $modelData
             *
             * 
             */
            protected function processV1FormatRef(array $modelData): void
            {
                
                    if (!array_key_exists('v1_format_ref', $modelData) && $this->v1FormatRef === null) {
                        return;
                    }
                

                $value = array_key_exists('v1_format_ref', $modelData) ? $modelData['v1_format_ref'] : $this->v1FormatRef;

                

                $this->v1FormatRef = $this->validateV1FormatRef($value, $modelData);
            }

            /**
             * Execute all validators for the property v1FormatRef
             */
            protected function validateV1FormatRef($value, array $modelData)
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
                            
                                'canonical_formats_only',
                            
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
        return is_array($value) ? new GetProductsResponse_GetProductsResponse_GetProductsResponse_GetProductsResponse_ProductFormatDeclaratione556de20bba70224e833177ada701eebd6554892dbdb9ad1eba748080c1b21874b7bc9ec872c3a70eff0f323947ad468($value) : $value;
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
  0 => 'GetProductsResponse_GetProductsResponse_GetProductsResponse_ProductFormatDeclaratione556de20bba70224e833177ada701eebd6554892dbdb9ad1eba748080c1b2187',
  1 => 'object',
)));
}

                
                    

if (is_object($value) && !($value instanceof \Exception) && !($value instanceof GetProductsResponse_GetProductsResponse_GetProductsResponse_GetProductsResponse_ProductFormatDeclaratione556de20bba70224e833177ada701eebd6554892dbdb9ad1eba748080c1b21874b7bc9ec872c3a70eff0f323947ad468)) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Object\InvalidInstanceOfException($value ?? null, ...array (
  0 => 'GetProductsResponse_GetProductsResponse_GetProductsResponse_ProductFormatDeclaratione556de20bba70224e833177ada701eebd6554892dbdb9ad1eba748080c1b2187',
  1 => 'GetProductsResponse_GetProductsResponse_GetProductsResponse_GetProductsResponse_ProductFormatDeclaratione556de20bba70224e833177ada701eebd6554892dbdb9ad1eba748080c1b21874b7bc9ec872c3a70eff0f323947ad468',
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
                    $modifiedValues = array_merge($modifiedValues, $this->_getModifiedValues_0776f($originalModelData, $value));
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
                            
                                'v1_format_ref',
                            
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
        return is_array($value) ? new GetProductsResponse_GetProductsResponse_GetProductsResponse_GetProductsResponse_ProductFormatDeclaratione556de20bba70224e833177ada701eebd6554892dbdb9ad1eba748080c1b2187eab2e4e68b1311140867c047abd2a761($value) : $value;
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
  0 => 'GetProductsResponse_GetProductsResponse_GetProductsResponse_ProductFormatDeclaratione556de20bba70224e833177ada701eebd6554892dbdb9ad1eba748080c1b2187',
  1 => 'object',
)));
}

                
                    

if (is_object($value) && !($value instanceof \Exception) && !($value instanceof GetProductsResponse_GetProductsResponse_GetProductsResponse_GetProductsResponse_ProductFormatDeclaratione556de20bba70224e833177ada701eebd6554892dbdb9ad1eba748080c1b2187eab2e4e68b1311140867c047abd2a761)) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Object\InvalidInstanceOfException($value ?? null, ...array (
  0 => 'GetProductsResponse_GetProductsResponse_GetProductsResponse_ProductFormatDeclaratione556de20bba70224e833177ada701eebd6554892dbdb9ad1eba748080c1b2187',
  1 => 'GetProductsResponse_GetProductsResponse_GetProductsResponse_GetProductsResponse_ProductFormatDeclaratione556de20bba70224e833177ada701eebd6554892dbdb9ad1eba748080c1b2187eab2e4e68b1311140867c047abd2a761',
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
                    $modifiedValues = array_merge($modifiedValues, $this->_getModifiedValues_0776f($originalModelData, $value));
                }
            
                
            }
            
        } catch (\Exception $e) {
            

            $succeededCompositionElements--;
        }

        $value = $originalModelData;
        $validatorComponentIndex++;
    

    
        $value = $proposedValue;
    

    
        $this->_errorRegistry = $originalErrorRegistry;
    

    $result = !($succeededCompositionElements > 0);

    
        if ($result) {
            $this->_propertyValidationState = $originalPropertyValidationState;
        }
    

    return $result;
})($value)
) {
        $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\ComposedValue\AnyOfException($value ?? null, ...array (
  0 => 'GetProductsResponse_GetProductsResponse_GetProductsResponse_ProductFormatDeclaratione556de20bba70224e833177ada701eebd6554892dbdb9ad1eba748080c1b2187',
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
    

    
        
            if (array_key_exists('format_shape', $modelData) &&
                $modelData['format_shape'] !== $this->formatShape
            ) {
                



                $rollbackValues['formatShape'] = $this->formatShape;
                $this->processFormatShape($modelData);
            }
        
    
        
            if (array_key_exists('format_schema', $modelData) &&
                $modelData['format_schema'] !== $this->formatSchema
            ) {
                



                $rollbackValues['formatSchema'] = $this->formatSchema;
                $this->processFormatSchema($modelData);
            }
        
    
        
            if (array_key_exists('canonical_formats_only', $modelData) &&
                $modelData['canonical_formats_only'] !== $this->canonicalFormatsOnly
            ) {
                $this->validateComposition_0($modelData);



                $rollbackValues['canonicalFormatsOnly'] = $this->canonicalFormatsOnly;
                $this->processCanonicalFormatsOnly($modelData);
            }
        
    
        
            if (array_key_exists('v1_format_ref', $modelData) &&
                $modelData['v1_format_ref'] !== $this->v1FormatRef
            ) {
                $this->validateComposition_0($modelData);



                $rollbackValues['v1FormatRef'] = $this->v1FormatRef;
                $this->processV1FormatRef($modelData);
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





                        private function _getModifiedValues_0776f(array $originalModelData, object $nestedCompositionObject): array {
                            $modifiedValues = [];
                            $defaultValueMap = array (
  0 => 'skipNotProvidedPropertiesMap',
  1 => 'skipNotProvidedPropertiesMap',
);
    
                            foreach (array (
  'canonical_formats_only' => 'getCanonicalFormatsOnly',
  'skipNotProvidedPropertiesMap' => 'get_skipNotProvidedPropertiesMap',
  'v1_format_ref' => 'getV1FormatRef',
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
