<?php

// @codingStandardsIgnoreFile
// @codeCoverageIgnoreStart

declare(strict_types = 1);


    namespace AdCP\MediaBuy;



    use PHPModelGenerator\Interfaces\JSONModelInterface;

    use UnitEnum;

    use AdCP\MediaBuy\Enums\AttributionModel;

    use PHPModelGenerator\Traits\SerializableTrait;

    use JsonSerializable;

    use PHPModelGenerator\Interfaces\SerializationInterface;

    use AdCP\MediaBuy\Enums\GetMediaBuyDeliveryResponse_DurationUnit;

    use PHPModelGenerator\Attributes\JsonPointer;

    use PHPModelGenerator\Attributes\SchemaName;

    use PHPModelGenerator\Attributes\Internal;

    use PHPModelGenerator\Exception\ErrorRegistryException;


/**
 * Class GetMediaBuyDeliveryResponse_AttributionWindow
 * @package AdCP\MediaBuy 
 *
 * Attribution methodology and lookback windows used for conversion metrics in this response. All media buys from a single seller share the same attribution methodology. Enables cross-platform comparison (e.g., Amazon 14-day click vs. Criteo 30-day click).
 *
 * This is an auto-implemented class implemented by the php-json-schema-model-generator.
 * If you need to implement something in this class use inheritance. Else you will lose your changes if the classes
 * are re-generated.
 */

#[JsonPointer('/properties/attribution_window')]

class GetMediaBuyDeliveryResponse_AttributionWindow implements JSONModelInterface, JsonSerializable, SerializationInterface
{
    use SerializableTrait;

    
        
            #[JsonPointer('/properties/attribution_window/properties/post_click')]
        
            #[SchemaName('post_click')]
        
        /** @var GetMediaBuyDeliveryResponse_Duration|null Post-click attribution window. Conversions occurring within this duration after a click are attributed to the ad. */
        protected $postClick;
    
        
            #[JsonPointer('/properties/attribution_window/properties/post_view')]
        
            #[SchemaName('post_view')]
        
        /** @var GetMediaBuyDeliveryResponse_Duration|null Post-view attribution window. Conversions occurring within this duration after an ad impression (without click) are attributed to the ad. */
        protected $postView;
    
        
            #[JsonPointer('/properties/attribution_window/properties/model')]
        
            #[SchemaName('model')]
        
        /** @var AttributionModel|null Attribution model used to assign credit when multiple touchpoints exist. SHOULD be populated when committing to a specific model; when absent, the seller's default applies. */
        protected $model;
    
        
            #[Internal]
        
        /** @var array Collect all additional properties provided to the schema */
        private $_additionalProperties = array (
);
    
        
            #[Internal]
        
        /** @var array Values which might be skipped for serialization if not provided */
        private $_skipNotProvidedPropertiesMap = array (
  0 => 'post_click',
  1 => 'post_view',
  2 => 'model',
);
    
    #[Internal]
    /** @var array */
    protected $_rawModelDataInput = [];

    
        #[Internal]
        /** @var ErrorRegistryException Collect all validation errors */
        protected $_errorRegistry;
    

    /**
     * GetMediaBuyDeliveryResponse_AttributionWindow constructor.
     *
     * @param array $rawModelDataInput
     *
     * @throws ErrorRegistryException
     */
    public function __construct(array $rawModelDataInput = [])
    {
        
            $this->_errorRegistry = new ErrorRegistryException();
        

        

        
            $this->executeBaseValidators($rawModelDataInput);
        

        
            
                $this->processPostClick($rawModelDataInput);
            
        
            
                $this->processPostView($rawModelDataInput);
            
        
            
                $this->processModel($rawModelDataInput);
            
        
            
        
            
        

        
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
   'post_click',
   'post_view',
   'model',
)) as $propertyKey) {
        

        $this->_additionalProperties[$propertyKey] = $value[$propertyKey];
    }

    return false;
})()) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Object\InvalidAdditionalPropertiesException($value ?? null, ...array (
  0 => 'GetMediaBuyDeliveryResponse_AttributionWindow',
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
                 * Get the value of post_click.
                 *
                 * Post-click attribution window. Conversions occurring within this duration after a click are attributed to the ad.
                 *
                 * @return GetMediaBuyDeliveryResponse_Duration|null
                 */
                public function getPostClick(): mixed
                {
                    

                    return $this->postClick;
                }
            

            
                /**
                 * Set the value of post_click.
                 *
                 * @param GetMediaBuyDeliveryResponse_Duration $postClick Post-click attribution window. Conversions occurring within this duration after a click are attributed to the ad.
                 *
                 * @throws ErrorRegistryException
                 *
                 * @return static
                 */
                public function setPostClick(
                    mixed $postClick
                ): static {
                    if ($this->postClick === $postClick) {
                        return $this;
                    }

                    $value = $modelData['post_click'] = $postClick;

                    
                        $this->_errorRegistry = new ErrorRegistryException();
                    

                    

                    $value = $this->validatePostClick($value, $modelData);

                    
                        if ($this->_errorRegistry->getErrors()) {
                            throw $this->_errorRegistry;
                        }
                    

                    $this->postClick = $value;
                    $this->_rawModelDataInput['post_click'] = $postClick;

                    

                    return $this;
                }
            

            /**
             * Extract the value, perform validations and set the property postClick
             *
             * @param array $modelData
             *
             * @throws ErrorRegistryException
             */
            protected function processPostClick(array $modelData): void
            {
                
                    if (!array_key_exists('post_click', $modelData) && $this->postClick === null) {
                        return;
                    }
                

                $value = array_key_exists('post_click', $modelData) ? $modelData['post_click'] : $this->postClick;

                

                $this->postClick = $this->validatePostClick($value, $modelData);
            }

            /**
             * Execute all validators for the property postClick
             */
            protected function validatePostClick($value, array $modelData)
            {
                
                    $this->validatePostClick_ComposedProperty_efdac8b034c2e7986f4446b6e4e56f14($value, $modelData);
                

                return $value;
            }
        
    
        
            
                /**
                 * Get the value of post_view.
                 *
                 * Post-view attribution window. Conversions occurring within this duration after an ad impression (without click) are attributed to the ad.
                 *
                 * @return GetMediaBuyDeliveryResponse_Duration|null
                 */
                public function getPostView(): mixed
                {
                    

                    return $this->postView;
                }
            

            
                /**
                 * Set the value of post_view.
                 *
                 * @param GetMediaBuyDeliveryResponse_Duration $postView Post-view attribution window. Conversions occurring within this duration after an ad impression (without click) are attributed to the ad.
                 *
                 * @throws ErrorRegistryException
                 *
                 * @return static
                 */
                public function setPostView(
                    mixed $postView
                ): static {
                    if ($this->postView === $postView) {
                        return $this;
                    }

                    $value = $modelData['post_view'] = $postView;

                    
                        $this->_errorRegistry = new ErrorRegistryException();
                    

                    

                    $value = $this->validatePostView($value, $modelData);

                    
                        if ($this->_errorRegistry->getErrors()) {
                            throw $this->_errorRegistry;
                        }
                    

                    $this->postView = $value;
                    $this->_rawModelDataInput['post_view'] = $postView;

                    

                    return $this;
                }
            

            /**
             * Extract the value, perform validations and set the property postView
             *
             * @param array $modelData
             *
             * @throws ErrorRegistryException
             */
            protected function processPostView(array $modelData): void
            {
                
                    if (!array_key_exists('post_view', $modelData) && $this->postView === null) {
                        return;
                    }
                

                $value = array_key_exists('post_view', $modelData) ? $modelData['post_view'] : $this->postView;

                

                $this->postView = $this->validatePostView($value, $modelData);
            }

            /**
             * Execute all validators for the property postView
             */
            protected function validatePostView($value, array $modelData)
            {
                
                    $this->validatePostView_ComposedProperty_8fccd8850678f260047bb9017d453a5b($value, $modelData);
                

                return $value;
            }
        
    
        
            
                /**
                 * Get the value of model.
                 *
                 * Attribution model used to assign credit when multiple touchpoints exist. SHOULD be populated when committing to a specific model; when absent, the seller's default applies.
                 *
                 * @return AttributionModel|null
                 */
                public function getModel(): ?AttributionModel
                {
                    

                    return $this->model;
                }
            

            
                /**
                 * Set the value of model.
                 *
                 * @param string|AttributionModel|null $model Attribution model used to assign credit when multiple touchpoints exist. SHOULD be populated when committing to a specific model; when absent, the seller's default applies.
                 *
                 * @throws ErrorRegistryException
                 *
                 * @return static
                 */
                public function setModel(
                    string | AttributionModel | null $model
                ): static {
                    if ($this->model === $model) {
                        return $this;
                    }

                    $value = $modelData['model'] = $model;

                    
                        $this->_errorRegistry = new ErrorRegistryException();
                    

                    

                    $value = $this->validateModel($value, $modelData);

                    
                        if ($this->_errorRegistry->getErrors()) {
                            throw $this->_errorRegistry;
                        }
                    

                    $this->model = $value;
                    $this->_rawModelDataInput['model'] = $model;

                    

                    return $this;
                }
            

            /**
             * Extract the value, perform validations and set the property model
             *
             * @param array $modelData
             *
             * @throws ErrorRegistryException
             */
            protected function processModel(array $modelData): void
            {
                
                    if (!array_key_exists('model', $modelData) && $this->model === null) {
                        return;
                    }
                

                $value = array_key_exists('model', $modelData) ? $modelData['model'] : $this->model;

                

                $this->model = $this->validateModel($value, $modelData);
            }

            /**
             * Execute all validators for the property model
             */
            protected function validateModel($value, array $modelData)
            {
                
                    

if ($value instanceof UnitEnum && !($value instanceof AttributionModel)) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Generic\InvalidTypeException($value ?? null, ...array (
  0 => 'model',
  1 => 'AttributionModel',
)));
}

                
                    

if ((!is_string($value) && !$value instanceof UnitEnum) ) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Generic\InvalidTypeException($value ?? null, ...array (
  0 => 'model',
  1 => 'string',
)));
}

                
                    

if (!($value instanceof UnitEnum) && !in_array($value, array (
   'last_touch',
   'first_touch',
   'linear',
   'time_decay',
   'data_driven',
), true)) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Generic\EnumException($value ?? null, ...array (
  0 => 'model',
  1 => 
  array (
    0 => 'last_touch',
    1 => 'first_touch',
    2 => 'linear',
    3 => 'time_decay',
    4 => 'data_driven',
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
  'fqcn' => 'AdCP\\MediaBuy\\Enums\\AttributionModel',
));
        } catch (\Throwable $filterException) {
            
                $transformationFailed = true;
            

            $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Filter\InvalidFilterValueException($value ?? null, ...array (
  0 => 'model',
  1 => 'php_model_generator_enum',
  2 => $filterException,
)));
        }

        return false;
    })($value)
)) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Filter\IncompatibleFilterException($value ?? null, ...array (
  0 => 'model',
  1 => 'php_model_generator_enum',
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
    

    
        
            if (array_key_exists('post_click', $modelData) &&
                $modelData['post_click'] !== $this->postClick
            ) {
                

                $rollbackValues['postClick'] = $this->postClick;
                $this->processPostClick($modelData);
            }
        
    
        
            if (array_key_exists('post_view', $modelData) &&
                $modelData['post_view'] !== $this->postView
            ) {
                

                $rollbackValues['postView'] = $this->postView;
                $this->processPostView($modelData);
            }
        
    
        
            if (array_key_exists('model', $modelData) &&
                $modelData['model'] !== $this->model
            ) {
                

                $rollbackValues['model'] = $this->model;
                $this->processModel($modelData);
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
 * serialize the property model
 */
protected function serializeModel()
{
    return \PHPModelGenerator\Filter\Enum::serialize($this->model, array (
  'fqcn' => 'AdCP\\MediaBuy\\Enums\\AttributionModel',
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


private function validatePostClick_ComposedProperty_efdac8b034c2e7986f4446b6e4e56f14(&$value, $modelData): void {
                    
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
    $succeededCompositionElements = 1;
    $validatorComponentIndex = 0;
    $originalModelData = $value;
    $proposedValue = null;
    $modifiedValues = [];

    

    
        $originalErrorRegistry = $this->_errorRegistry;
    

    
        try {
            

                
                    // collect errors for each composition element
                    $this->_errorRegistry = new ErrorRegistryException();
                

                

                $value = (function ($value) {
    try {
        return is_array($value) ? new GetMediaBuyDeliveryResponse_Duration($value) : $value;
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
  0 => 'post_click',
  1 => 'object',
)));
}

                
                    

if (is_object($value) && !($value instanceof \Exception) && !($value instanceof GetMediaBuyDeliveryResponse_Duration)) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Object\InvalidInstanceOfException($value ?? null, ...array (
  0 => 'post_click',
  1 => 'GetMediaBuyDeliveryResponse_Duration',
)));
}

                

                
                    $compositionErrorCollection[] = $this->_errorRegistry;

                    

                    // an error inside the composed validation occurred. Throw an exception to count the validity of the
                    // composition item
                    if ($this->_errorRegistry->getErrors()) {
                        throw new \Exception();
                    }
                

                
                    $proposedValue = $proposedValue ?? $value;
                

                if (is_object($value) && is_array($originalModelData)) {
                    $modifiedValues = array_merge($modifiedValues, $this->_getModifiedValues_9b1b7($originalModelData, $value));
                }
            
        } catch (\Exception $e) {
            

            $succeededCompositionElements--;
        }

        $value = $originalModelData;
        $validatorComponentIndex++;
    

    
        if (is_object($proposedValue)) {
            if ($modifiedValues) {
                $value = array_merge($value, $modifiedValues);
            }

            $value = (function ($value) {
    try {
        return is_array($value) ? new GetMediaBuyDeliveryResponse_Duration($value) : $value;
    } catch (\Exception $instantiationException) {
        
            
                foreach($instantiationException->getErrors() as $nestedValidationError) {
                    $this->_errorRegistry->addError($nestedValidationError);
                }
            
        

        
            return $instantiationException;
        
    }
})($value)
;
        } else {
            $value = $proposedValue;
        }
    

    
        $this->_errorRegistry = $originalErrorRegistry;
    

    $result = !($succeededCompositionElements === 1);

    

    return $result;
})($value)
) {
                        $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\ComposedValue\AllOfException($value ?? null, ...array (
  0 => 'post_click',
  1 => $succeededCompositionElements,
  2 => $compositionErrorCollection,
)));
                    }
                }

private function validatePostView_ComposedProperty_8fccd8850678f260047bb9017d453a5b(&$value, $modelData): void {
                    
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
    $succeededCompositionElements = 1;
    $validatorComponentIndex = 0;
    $originalModelData = $value;
    $proposedValue = null;
    $modifiedValues = [];

    

    
        $originalErrorRegistry = $this->_errorRegistry;
    

    
        try {
            

                
                    // collect errors for each composition element
                    $this->_errorRegistry = new ErrorRegistryException();
                

                

                $value = (function ($value) {
    try {
        return is_array($value) ? new GetMediaBuyDeliveryResponse_Duration($value) : $value;
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
  0 => 'post_view',
  1 => 'object',
)));
}

                
                    

if (is_object($value) && !($value instanceof \Exception) && !($value instanceof GetMediaBuyDeliveryResponse_Duration)) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Object\InvalidInstanceOfException($value ?? null, ...array (
  0 => 'post_view',
  1 => 'GetMediaBuyDeliveryResponse_Duration',
)));
}

                

                
                    $compositionErrorCollection[] = $this->_errorRegistry;

                    

                    // an error inside the composed validation occurred. Throw an exception to count the validity of the
                    // composition item
                    if ($this->_errorRegistry->getErrors()) {
                        throw new \Exception();
                    }
                

                
                    $proposedValue = $proposedValue ?? $value;
                

                if (is_object($value) && is_array($originalModelData)) {
                    $modifiedValues = array_merge($modifiedValues, $this->_getModifiedValues_0074e($originalModelData, $value));
                }
            
        } catch (\Exception $e) {
            

            $succeededCompositionElements--;
        }

        $value = $originalModelData;
        $validatorComponentIndex++;
    

    
        if (is_object($proposedValue)) {
            if ($modifiedValues) {
                $value = array_merge($value, $modifiedValues);
            }

            $value = (function ($value) {
    try {
        return is_array($value) ? new GetMediaBuyDeliveryResponse_Duration($value) : $value;
    } catch (\Exception $instantiationException) {
        
            
                foreach($instantiationException->getErrors() as $nestedValidationError) {
                    $this->_errorRegistry->addError($nestedValidationError);
                }
            
        

        
            return $instantiationException;
        
    }
})($value)
;
        } else {
            $value = $proposedValue;
        }
    

    
        $this->_errorRegistry = $originalErrorRegistry;
    

    $result = !($succeededCompositionElements === 1);

    

    return $result;
})($value)
) {
                        $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\ComposedValue\AllOfException($value ?? null, ...array (
  0 => 'post_view',
  1 => $succeededCompositionElements,
  2 => $compositionErrorCollection,
)));
                    }
                }


                        private function _getModifiedValues_9b1b7(array $originalModelData, object $nestedCompositionObject): array {
                            $modifiedValues = [];
                            $defaultValueMap = array (
  0 => 'skipNotProvidedPropertiesMap',
);
    
                            foreach (array (
  'interval' => 'getInterval',
  'unit' => 'getUnit',
  'skipNotProvidedPropertiesMap' => 'get_skipNotProvidedPropertiesMap',
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


                        private function _getModifiedValues_0074e(array $originalModelData, object $nestedCompositionObject): array {
                            $modifiedValues = [];
                            $defaultValueMap = array (
  0 => 'skipNotProvidedPropertiesMap',
);
    
                            foreach (array (
  'interval' => 'getInterval',
  'unit' => 'getUnit',
  'skipNotProvidedPropertiesMap' => 'get_skipNotProvidedPropertiesMap',
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
