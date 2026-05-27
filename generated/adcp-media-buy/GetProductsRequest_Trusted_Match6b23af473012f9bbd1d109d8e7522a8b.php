<?php

// @codingStandardsIgnoreFile
// @codeCoverageIgnoreStart

declare(strict_types = 1);


    namespace AdCP\MediaBuy;



    use PHPModelGenerator\Interfaces\JSONModelInterface;

    use UnitEnum;

    use AdCP\MediaBuy\Enums\TMPResponseType;

    use PHPModelGenerator\Traits\SerializableTrait;

    use JsonSerializable;

    use PHPModelGenerator\Interfaces\SerializationInterface;

    use PHPModelGenerator\Attributes\JsonPointer;

    use PHPModelGenerator\Attributes\SchemaName;

    use PHPModelGenerator\Attributes\Internal;

    use PHPModelGenerator\Exception\ErrorRegistryException;


/**
 * Class GetProductsRequest_Trusted_Match6b23af473012f9bbd1d109d8e7522a8b
 * @package AdCP\MediaBuy 
 *
 * Filter products by Trusted Match Protocol capabilities. Only products with matching TMP support are returned.
 *
 * This is an auto-implemented class implemented by the php-json-schema-model-generator.
 * If you need to implement something in this class use inheritance. Else you will lose your changes if the classes
 * are re-generated.
 */

#[JsonPointer('/properties/filters/properties/trusted_match')]

class GetProductsRequest_Trusted_Match6b23af473012f9bbd1d109d8e7522a8b implements JSONModelInterface, JsonSerializable, SerializationInterface
{
    use SerializableTrait;

    
        
            #[JsonPointer('/properties/filters/properties/trusted_match/properties/providers')]
        
            #[SchemaName('providers')]
        
        /** @var GetProductsRequest_ItemOfArrayProviders1aae21f2a2f4e7d1b18a4961346ec6bf[]|null Filter to products with specific TMP providers and match types. Each entry identifies a provider by agent_url and optionally requires specific match capabilities. Products must match at least one entry. */
        protected $providers;
    
        
            #[JsonPointer('/properties/filters/properties/trusted_match/properties/response_types')]
        
            #[SchemaName('response_types')]
        
        /** @var TMPResponseType[]|null Filter to products supporting specific TMP response types (e.g., 'activation', 'creative', 'catalog_items'). Products must support at least one of the listed types. */
        protected $responseTypes;
    
        
            #[Internal]
        
        /** @var array Values which might be skipped for serialization if not provided */
        private $_skipNotProvidedPropertiesMap = array (
  0 => 'providers',
  1 => 'response_types',
);
    
    #[Internal]
    /** @var array */
    protected $_rawModelDataInput = [];

    
        #[Internal]
        /** @var ErrorRegistryException Collect all validation errors */
        protected $_errorRegistry;
    

    /**
     * GetProductsRequest_Trusted_Match6b23af473012f9bbd1d109d8e7522a8b constructor.
     *
     * @param array $rawModelDataInput
     *
     * @throws ErrorRegistryException
     */
    public function __construct(array $rawModelDataInput = [])
    {
        
            $this->_errorRegistry = new ErrorRegistryException();
        

        

        
            $this->executeBaseValidators($rawModelDataInput);
        

        
            
                $this->processProviders($rawModelDataInput);
            
        
            
                $this->processResponseTypes($rawModelDataInput);
            
        
            
        

        
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
   'providers',
   'response_types',
));

    

    return $additionalProperties;
})()) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Object\AdditionalPropertiesException($value ?? null, ...array (
  0 => 'GetProductsRequest_Trusted_Match6b23af473012f9bbd1d109d8e7522a8b',
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
                 * Get the value of providers.
                 *
                 * Filter to products with specific TMP providers and match types. Each entry identifies a provider by agent_url and optionally requires specific match capabilities. Products must match at least one entry.
                 *
                 * @return GetProductsRequest_ItemOfArrayProviders1aae21f2a2f4e7d1b18a4961346ec6bf[]|null
                 */
                public function getProviders(): ?array
                {
                    

                    return $this->providers;
                }
            

            
                /**
                 * Set the value of providers.
                 *
                 * @param GetProductsRequest_ItemOfArrayProviders1aae21f2a2f4e7d1b18a4961346ec6bf[] $providers Filter to products with specific TMP providers and match types. Each entry identifies a provider by agent_url and optionally requires specific match capabilities. Products must match at least one entry.
                 *
                 * @throws ErrorRegistryException
                 *
                 * @return static
                 */
                public function setProviders(
                    array $providers
                ): static {
                    if ($this->providers === $providers) {
                        return $this;
                    }

                    $value = $modelData['providers'] = $providers;

                    
                        $this->_errorRegistry = new ErrorRegistryException();
                    

                    

                    $value = $this->validateProviders($value, $modelData);

                    
                        if ($this->_errorRegistry->getErrors()) {
                            throw $this->_errorRegistry;
                        }
                    

                    $this->providers = $value;
                    $this->_rawModelDataInput['providers'] = $providers;

                    

                    return $this;
                }
            

            /**
             * Extract the value, perform validations and set the property providers
             *
             * @param array $modelData
             *
             * @throws ErrorRegistryException
             */
            protected function processProviders(array $modelData): void
            {
                
                    if (!array_key_exists('providers', $modelData) && $this->providers === null) {
                        return;
                    }
                

                $value = array_key_exists('providers', $modelData) ? $modelData['providers'] : $this->providers;

                

                $this->providers = $this->validateProviders($value, $modelData);
            }

            /**
             * Execute all validators for the property providers
             */
            protected function validateProviders($value, array $modelData)
            {
                
                    

if ((!is_array($value) && !$value instanceof UnitEnum) ) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Generic\InvalidTypeException($value ?? null, ...array (
  0 => 'providers',
  1 => 'array',
)));
}

                
                    $this->validateProviders_ArrayItem_20c7780198bb9379bb67f56e07afda7c($value, $modelData);
                
                    

if (is_array($value) && count($value) < 1) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Arrays\MinItemsException($value ?? null, ...array (
  0 => 'providers',
  1 => 1,
)));
}

                

                return $value;
            }
        
    
        
            
                /**
                 * Get the value of response_types.
                 *
                 * Filter to products supporting specific TMP response types (e.g., 'activation', 'creative', 'catalog_items'). Products must support at least one of the listed types.
                 *
                 * @return TMPResponseType[]|null
                 */
                public function getResponseTypes(): array | TMPResponseType | null
                {
                    

                    return $this->responseTypes;
                }
            

            
                /**
                 * Set the value of response_types.
                 *
                 * @param string[]|TMPResponseType[]|null $responseTypes Filter to products supporting specific TMP response types (e.g., 'activation', 'creative', 'catalog_items'). Products must support at least one of the listed types.
                 *
                 * @throws ErrorRegistryException
                 *
                 * @return static
                 */
                public function setResponseTypes(
                    array | TMPResponseType | null $responseTypes
                ): static {
                    if ($this->responseTypes === $responseTypes) {
                        return $this;
                    }

                    $value = $modelData['response_types'] = $responseTypes;

                    
                        $this->_errorRegistry = new ErrorRegistryException();
                    

                    

                    $value = $this->validateResponseTypes($value, $modelData);

                    
                        if ($this->_errorRegistry->getErrors()) {
                            throw $this->_errorRegistry;
                        }
                    

                    $this->responseTypes = $value;
                    $this->_rawModelDataInput['response_types'] = $responseTypes;

                    

                    return $this;
                }
            

            /**
             * Extract the value, perform validations and set the property responseTypes
             *
             * @param array $modelData
             *
             * @throws ErrorRegistryException
             */
            protected function processResponseTypes(array $modelData): void
            {
                
                    if (!array_key_exists('response_types', $modelData) && $this->responseTypes === null) {
                        return;
                    }
                

                $value = array_key_exists('response_types', $modelData) ? $modelData['response_types'] : $this->responseTypes;

                

                $this->responseTypes = $this->validateResponseTypes($value, $modelData);
            }

            /**
             * Execute all validators for the property responseTypes
             */
            protected function validateResponseTypes($value, array $modelData)
            {
                
                    

if ((!is_array($value) && !$value instanceof UnitEnum) ) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Generic\InvalidTypeException($value ?? null, ...array (
  0 => 'response_types',
  1 => 'array',
)));
}

                
                    $this->validateResponseTypes_ArrayItem_a43f40213cf5c88f2de7481977231d8b($value, $modelData);
                
                    

if (is_array($value) && count($value) < 1) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Arrays\MinItemsException($value ?? null, ...array (
  0 => 'response_types',
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
    

    
        
            if (array_key_exists('providers', $modelData) &&
                $modelData['providers'] !== $this->providers
            ) {
                

                $rollbackValues['providers'] = $this->providers;
                $this->processProviders($modelData);
            }
        
    
        
            if (array_key_exists('response_types', $modelData) &&
                $modelData['response_types'] !== $this->responseTypes
            ) {
                

                $rollbackValues['responseTypes'] = $this->responseTypes;
                $this->processResponseTypes($modelData);
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




private function validateProviders_ArrayItem_20c7780198bb9379bb67f56e07afda7c(&$value, $modelData): void {
                    $invalidItems_1072e82c43d03d54042143d014c892d0 = [];
                    
                    if (is_array($value) && (function (&$items) use (&$invalidItems_1072e82c43d03d54042143d014c892d0, $modelData) {
    
        $originalErrorRegistry = $this->_errorRegistry;
    

    foreach ($items as $index => &$value) {
        
            $this->_errorRegistry = new ErrorRegistryException();
        

        try {
            $value = (function ($value) {
    try {
        return is_array($value) ? new GetProductsRequest_ItemOfArrayProviders1aae21f2a2f4e7d1b18a4961346ec6bf($value) : $value;
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
  0 => 'item of array providers',
  1 => 'object',
)));
}

            
                

if (is_object($value) && !($value instanceof \Exception) && !($value instanceof GetProductsRequest_ItemOfArrayProviders1aae21f2a2f4e7d1b18a4961346ec6bf)) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Object\InvalidInstanceOfException($value ?? null, ...array (
  0 => 'item of array providers',
  1 => 'GetProductsRequest_ItemOfArrayProviders1aae21f2a2f4e7d1b18a4961346ec6bf',
)));
}

            

            
                if ($this->_errorRegistry->getErrors()) {
                    $invalidItems_1072e82c43d03d54042143d014c892d0[$index] = $this->_errorRegistry->getErrors();
                }
            
        } catch (\Exception $e) {
            // collect all errors concerning invalid items
            isset($invalidItems_1072e82c43d03d54042143d014c892d0[$index])
                ? $invalidItems_1072e82c43d03d54042143d014c892d0[$index][] = $e
                : $invalidItems_1072e82c43d03d54042143d014c892d0[$index] = [$e];
        }
    }

    
        $this->_errorRegistry = $originalErrorRegistry;
    

    return !empty($invalidItems_1072e82c43d03d54042143d014c892d0);
})($value)) {
                        $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Arrays\InvalidItemException($value ?? null, ...array (
  0 => 'providers',
  1 => $invalidItems_1072e82c43d03d54042143d014c892d0,
)));
                    }
                }

private function validateResponseTypes_ArrayItem_a43f40213cf5c88f2de7481977231d8b(&$value, $modelData): void {
                    $invalidItems_25e22da907a2c4c9852daef351fb80b9 = [];
                    
                    if (is_array($value) && (function (&$items) use (&$invalidItems_25e22da907a2c4c9852daef351fb80b9, $modelData) {
    
        $originalErrorRegistry = $this->_errorRegistry;
    

    foreach ($items as $index => &$value) {
        
            $this->_errorRegistry = new ErrorRegistryException();
        

        try {
            

            
                

if ($value instanceof UnitEnum && !($value instanceof TMPResponseType)) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Generic\InvalidTypeException($value ?? null, ...array (
  0 => 'item of array response_types',
  1 => 'TMPResponseType',
)));
}

            
                

if ((!is_string($value) && !$value instanceof UnitEnum) ) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Generic\InvalidTypeException($value ?? null, ...array (
  0 => 'item of array response_types',
  1 => 'string',
)));
}

            
                

if (!($value instanceof UnitEnum) && !in_array($value, array (
   'activation',
   'catalog_items',
   'creative',
   'deal',
), true)) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Generic\EnumException($value ?? null, ...array (
  0 => 'item of array response_types',
  1 => 
  array (
    0 => 'activation',
    1 => 'catalog_items',
    2 => 'creative',
    3 => 'deal',
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
  'fqcn' => 'AdCP\\MediaBuy\\Enums\\TMPResponseType',
));
        } catch (\Throwable $filterException) {
            
                $transformationFailed = true;
            

            $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Filter\InvalidFilterValueException($value ?? null, ...array (
  0 => 'item of array response_types',
  1 => 'php_model_generator_enum',
  2 => $filterException,
)));
        }

        return false;
    })($value)
)) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Filter\IncompatibleFilterException($value ?? null, ...array (
  0 => 'item of array response_types',
  1 => 'php_model_generator_enum',
)));
}

            

            
                if ($this->_errorRegistry->getErrors()) {
                    $invalidItems_25e22da907a2c4c9852daef351fb80b9[$index] = $this->_errorRegistry->getErrors();
                }
            
        } catch (\Exception $e) {
            // collect all errors concerning invalid items
            isset($invalidItems_25e22da907a2c4c9852daef351fb80b9[$index])
                ? $invalidItems_25e22da907a2c4c9852daef351fb80b9[$index][] = $e
                : $invalidItems_25e22da907a2c4c9852daef351fb80b9[$index] = [$e];
        }
    }

    
        $this->_errorRegistry = $originalErrorRegistry;
    

    return !empty($invalidItems_25e22da907a2c4c9852daef351fb80b9);
})($value)) {
                        $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Arrays\InvalidItemException($value ?? null, ...array (
  0 => 'response_types',
  1 => $invalidItems_25e22da907a2c4c9852daef351fb80b9,
)));
                    }
                }


}

// @codeCoverageIgnoreEnd
