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

    use AdCP\MediaBuy\Enums\GetMediaBuyDeliveryRequest_DurationUnit;

    use PHPModelGenerator\Attributes\JsonPointer;

    use PHPModelGenerator\Attributes\SchemaName;

    use PHPModelGenerator\Attributes\Internal;

    use PHPModelGenerator\Exception\ErrorRegistryException;


/**
 * Class GetMediaBuyDeliveryRequest_Attribution_Window4e5e31487f48a00d0d769200411eb3a0
 * @package AdCP\MediaBuy 
 *
 * Attribution window to apply for conversion metrics. When provided, the seller returns conversion data using the requested lookback windows instead of their platform default. The seller echoes the applied window in the response. Sellers that do not support configurable windows ignore this field and return their default. Check get_adcp_capabilities conversion_tracking.attribution_windows for available options.
 *
 * This is an auto-implemented class implemented by the php-json-schema-model-generator.
 * If you need to implement something in this class use inheritance. Else you will lose your changes if the classes
 * are re-generated.
 */

#[JsonPointer('/properties/attribution_window')]

class GetMediaBuyDeliveryRequest_Attribution_Window4e5e31487f48a00d0d769200411eb3a0 implements JSONModelInterface, JsonSerializable, SerializationInterface
{
    use SerializableTrait;

    
        
            #[JsonPointer('/properties/attribution_window/properties/post_click')]
        
            #[SchemaName('post_click')]
        
        /** @var GetMediaBuyDeliveryRequest_Duration|null Post-click attribution window to apply. */
        protected $postClick;
    
        
            #[JsonPointer('/properties/attribution_window/properties/post_view')]
        
            #[SchemaName('post_view')]
        
        /** @var GetMediaBuyDeliveryRequest_Duration|null Post-view attribution window to apply. */
        protected $postView;
    
        
            #[JsonPointer('/properties/attribution_window/properties/model')]
        
            #[SchemaName('model')]
        
        /** @var AttributionModel|null Attribution model to use. When omitted, the seller applies their default model. */
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
     * GetMediaBuyDeliveryRequest_Attribution_Window4e5e31487f48a00d0d769200411eb3a0 constructor.
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
  0 => 'GetMediaBuyDeliveryRequest_Attribution_Window4e5e31487f48a00d0d769200411eb3a0',
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
                 * Post-click attribution window to apply.
                 *
                 * @return GetMediaBuyDeliveryRequest_Duration|null
                 */
                public function getPostClick(): mixed
                {
                    

                    return $this->postClick;
                }
            

            
                /**
                 * Set the value of post_click.
                 *
                 * @param GetMediaBuyDeliveryRequest_Duration $postClick Post-click attribution window to apply.
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
                
                    $this->validatePostClick_ComposedProperty_873522f43dbb76987cb12cd5d9337a8b($value, $modelData);
                

                return $value;
            }
        
    
        
            
                /**
                 * Get the value of post_view.
                 *
                 * Post-view attribution window to apply.
                 *
                 * @return GetMediaBuyDeliveryRequest_Duration|null
                 */
                public function getPostView(): mixed
                {
                    

                    return $this->postView;
                }
            

            
                /**
                 * Set the value of post_view.
                 *
                 * @param GetMediaBuyDeliveryRequest_Duration $postView Post-view attribution window to apply.
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
                
                    $this->validatePostView_ComposedProperty_639c53b067d851e989e1bef2ede7bf0b($value, $modelData);
                

                return $value;
            }
        
    
        
            
                /**
                 * Get the value of model.
                 *
                 * Attribution model to use. When omitted, the seller applies their default model.
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
                 * @param string|AttributionModel|null $model Attribution model to use. When omitted, the seller applies their default model.
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


private function validatePostClick_ComposedProperty_873522f43dbb76987cb12cd5d9337a8b(&$value, $modelData): void {
                    
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
        return is_array($value) ? new GetMediaBuyDeliveryRequest_Duration($value) : $value;
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

                
                    

if (is_object($value) && !($value instanceof \Exception) && !($value instanceof GetMediaBuyDeliveryRequest_Duration)) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Object\InvalidInstanceOfException($value ?? null, ...array (
  0 => 'post_click',
  1 => 'GetMediaBuyDeliveryRequest_Duration',
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
                    $modifiedValues = array_merge($modifiedValues, $this->_getModifiedValues_9a2f4($originalModelData, $value));
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
        return is_array($value) ? new GetMediaBuyDeliveryRequest_Duration($value) : $value;
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

private function validatePostView_ComposedProperty_639c53b067d851e989e1bef2ede7bf0b(&$value, $modelData): void {
                    
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
        return is_array($value) ? new GetMediaBuyDeliveryRequest_Duration($value) : $value;
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

                
                    

if (is_object($value) && !($value instanceof \Exception) && !($value instanceof GetMediaBuyDeliveryRequest_Duration)) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Object\InvalidInstanceOfException($value ?? null, ...array (
  0 => 'post_view',
  1 => 'GetMediaBuyDeliveryRequest_Duration',
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
                    $modifiedValues = array_merge($modifiedValues, $this->_getModifiedValues_af8bb($originalModelData, $value));
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
        return is_array($value) ? new GetMediaBuyDeliveryRequest_Duration($value) : $value;
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


                        private function _getModifiedValues_9a2f4(array $originalModelData, object $nestedCompositionObject): array {
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


                        private function _getModifiedValues_af8bb(array $originalModelData, object $nestedCompositionObject): array {
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
