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
 * Class GetMediaBuysResponse_Data_Subject_Contestation6ce85a378238546858b122363ebca078
 * @package AdCP\MediaBuy 
 *
 * Inline override for the brand's contestation contact point. Useful when the operator does not control brand.json but needs to discharge Art 22(3) for this plan. brand.json is canonical; when omitted, governance agents resolve brand → house → missing.
 *
 * This is an auto-implemented class implemented by the php-json-schema-model-generator.
 * If you need to implement something in this class use inheritance. Else you will lose your changes if the classes
 * are re-generated.
 */

#[JsonPointer('/properties/media_buys/items/properties/account/properties/brand/properties/data_subject_contestation')]

class GetMediaBuysResponse_Data_Subject_Contestation6ce85a378238546858b122363ebca078 implements JSONModelInterface, JsonSerializable, SerializationInterface
{
    use SerializableTrait;

    
        
            #[JsonPointer('/properties/media_buys/items/properties/account/properties/brand/properties/data_subject_contestation/properties/url')]
        
            #[SchemaName('url')]
        
        /** @var string|null */
        protected $url;
    
        
            #[JsonPointer('/properties/media_buys/items/properties/account/properties/brand/properties/data_subject_contestation/properties/email')]
        
            #[SchemaName('email')]
        
        /** @var string|null */
        protected $email;
    
        
            #[JsonPointer('/properties/media_buys/items/properties/account/properties/brand/properties/data_subject_contestation/properties/languages')]
        
            #[SchemaName('languages')]
        
        /** @var string[]|null */
        protected $languages;
    
        
            #[Internal]
        
        /** @var array Track the internal validation state of composed validations */
        private $_propertyValidationState = array (
  1 => 
  array (
  ),
);
    
        
            #[Internal]
        
        /** @var array Values which might be skipped for serialization if not provided */
        private $_skipNotProvidedPropertiesMap = array (
  0 => 'url',
  1 => 'email',
  2 => 'languages',
);
    
    #[Internal]
    /** @var array */
    protected $_rawModelDataInput = [];

    
        #[Internal]
        /** @var ErrorRegistryException Collect all validation errors */
        protected $_errorRegistry;
    

    /**
     * GetMediaBuysResponse_Data_Subject_Contestation6ce85a378238546858b122363ebca078 constructor.
     *
     * @param array $rawModelDataInput
     *
     * @throws ErrorRegistryException
     */
    public function __construct(array $rawModelDataInput = [])
    {
        
            $this->_errorRegistry = new ErrorRegistryException();
        

        

        
            $this->executeBaseValidators($rawModelDataInput);
        

        
            
                $this->processUrl($rawModelDataInput);
            
        
            
                $this->processEmail($rawModelDataInput);
            
        
            
                $this->processLanguages($rawModelDataInput);
            
        
            
        
            
        

        
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
   'url',
   'email',
   'languages',
));

    

    return $additionalProperties;
})()) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Object\AdditionalPropertiesException($value ?? null, ...array (
  0 => 'GetMediaBuysResponse_Data_Subject_Contestation6ce85a378238546858b122363ebca078',
  1 => $additionalProperties,
)));
}

            

            
                $this->validateComposition_1($modelData);
            
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
                 * Get the value of url.
                 *
                 *
                 * @return string|null
                 */
                public function getUrl(): ?string
                {
                    

                    return $this->url;
                }
            

            
                /**
                 * Set the value of url.
                 *
                 * @param string $url
                 *
                 * @throws ErrorRegistryException
                 *
                 * @return static
                 */
                public function setUrl(
                    string $url
                ): static {
                    if ($this->url === $url) {
                        return $this;
                    }

                    $value = $modelData['url'] = $url;

                    
                        $this->_errorRegistry = new ErrorRegistryException();
                    

                    $this->validateComposition_1($modelData);



                    $value = $this->validateUrl($value, $modelData);

                    
                        if ($this->_errorRegistry->getErrors()) {
                            throw $this->_errorRegistry;
                        }
                    

                    $this->url = $value;
                    $this->_rawModelDataInput['url'] = $url;

                    

                    return $this;
                }
            

            /**
             * Extract the value, perform validations and set the property url
             *
             * @param array $modelData
             *
             * @throws ErrorRegistryException
             */
            protected function processUrl(array $modelData): void
            {
                
                    if (!array_key_exists('url', $modelData) && $this->url === null) {
                        return;
                    }
                

                $value = array_key_exists('url', $modelData) ? $modelData['url'] : $this->url;

                

                $this->url = $this->validateUrl($value, $modelData);
            }

            /**
             * Execute all validators for the property url
             */
            protected function validateUrl($value, array $modelData)
            {
                
                    

if ((!is_string($value) && !$value instanceof UnitEnum) ) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Generic\InvalidTypeException($value ?? null, ...array (
  0 => 'url',
  1 => 'string',
)));
}

                
                    

if (is_string($value) && !preg_match(base64_decode('L15odHRwczpcL1wvLw=='), $value)) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\String\PatternException($value ?? null, ...array (
  0 => 'url',
  1 => '^https://',
)));
}

                
                    

if (!\PHPModelGenerator\Format\UriFormatValidator::validate($value)) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\String\FormatException($value ?? null, ...array (
  0 => 'url',
  1 => 'uri',
)));
}

                

                return $value;
            }
        
    
        
            
                /**
                 * Get the value of email.
                 *
                 *
                 * @return string|null
                 */
                public function getEmail(): ?string
                {
                    

                    return $this->email;
                }
            

            
                /**
                 * Set the value of email.
                 *
                 * @param string $email
                 *
                 * @throws ErrorRegistryException
                 *
                 * @return static
                 */
                public function setEmail(
                    string $email
                ): static {
                    if ($this->email === $email) {
                        return $this;
                    }

                    $value = $modelData['email'] = $email;

                    
                        $this->_errorRegistry = new ErrorRegistryException();
                    

                    $this->validateComposition_1($modelData);



                    $value = $this->validateEmail($value, $modelData);

                    
                        if ($this->_errorRegistry->getErrors()) {
                            throw $this->_errorRegistry;
                        }
                    

                    $this->email = $value;
                    $this->_rawModelDataInput['email'] = $email;

                    

                    return $this;
                }
            

            /**
             * Extract the value, perform validations and set the property email
             *
             * @param array $modelData
             *
             * @throws ErrorRegistryException
             */
            protected function processEmail(array $modelData): void
            {
                
                    if (!array_key_exists('email', $modelData) && $this->email === null) {
                        return;
                    }
                

                $value = array_key_exists('email', $modelData) ? $modelData['email'] : $this->email;

                

                $this->email = $this->validateEmail($value, $modelData);
            }

            /**
             * Execute all validators for the property email
             */
            protected function validateEmail($value, array $modelData)
            {
                
                    

if ((!is_string($value) && !$value instanceof UnitEnum) ) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Generic\InvalidTypeException($value ?? null, ...array (
  0 => 'email',
  1 => 'string',
)));
}

                
                    

if (!\PHPModelGenerator\Format\FormatValidatorFromRegEx::validate($value, '/^[a-zA-Z0-9._%+\\-]+@[a-zA-Z0-9.\\-]+\\.[a-zA-Z]{2,}$/')) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\String\FormatException($value ?? null, ...array (
  0 => 'email',
  1 => 'email',
)));
}

                

                return $value;
            }
        
    
        
            
                /**
                 * Get the value of languages.
                 *
                 *
                 * @return string[]|null
                 */
                public function getLanguages(): ?array
                {
                    

                    return $this->languages;
                }
            

            
                /**
                 * Set the value of languages.
                 *
                 * @param string[] $languages
                 *
                 * @throws ErrorRegistryException
                 *
                 * @return static
                 */
                public function setLanguages(
                    array $languages
                ): static {
                    if ($this->languages === $languages) {
                        return $this;
                    }

                    $value = $modelData['languages'] = $languages;

                    
                        $this->_errorRegistry = new ErrorRegistryException();
                    

                    



                    $value = $this->validateLanguages($value, $modelData);

                    
                        if ($this->_errorRegistry->getErrors()) {
                            throw $this->_errorRegistry;
                        }
                    

                    $this->languages = $value;
                    $this->_rawModelDataInput['languages'] = $languages;

                    

                    return $this;
                }
            

            /**
             * Extract the value, perform validations and set the property languages
             *
             * @param array $modelData
             *
             * @throws ErrorRegistryException
             */
            protected function processLanguages(array $modelData): void
            {
                
                    if (!array_key_exists('languages', $modelData) && $this->languages === null) {
                        return;
                    }
                

                $value = array_key_exists('languages', $modelData) ? $modelData['languages'] : $this->languages;

                

                $this->languages = $this->validateLanguages($value, $modelData);
            }

            /**
             * Execute all validators for the property languages
             */
            protected function validateLanguages($value, array $modelData)
            {
                
                    

if ((!is_array($value) && !$value instanceof UnitEnum) ) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Generic\InvalidTypeException($value ?? null, ...array (
  0 => 'languages',
  1 => 'array',
)));
}

                
                    $this->validateLanguages_ArrayItem_d98264cbbbcfb6b301bd754c28b7483e($value, $modelData);
                

                return $value;
            }
        
    
        
    
        
    

    /**
 * Validate updated properties which are part of a composition validation
 *
 * @param array $modifiedModelData An array containing all updated data as key-value pairs
 *
 * 
 */
private function validateComposition_1(array &$modifiedModelData): void
{
    $validatorIndex = 1;
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
                            
                                'url',
                            
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
        return is_array($value) ? new GetMediaBuysResponse_GetMediaBuysResponse_Data_Subject_Contestation6ce85a378238546858b122363ebca0788e14c97c9beaed8b96c9902df29ab5cb($value) : $value;
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
  0 => 'GetMediaBuysResponse_Data_Subject_Contestation6ce85a378238546858b122363ebca078',
  1 => 'object',
)));
}

                
                    

if (is_object($value) && !($value instanceof \Exception) && !($value instanceof GetMediaBuysResponse_GetMediaBuysResponse_Data_Subject_Contestation6ce85a378238546858b122363ebca0788e14c97c9beaed8b96c9902df29ab5cb)) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Object\InvalidInstanceOfException($value ?? null, ...array (
  0 => 'GetMediaBuysResponse_Data_Subject_Contestation6ce85a378238546858b122363ebca078',
  1 => 'GetMediaBuysResponse_GetMediaBuysResponse_Data_Subject_Contestation6ce85a378238546858b122363ebca0788e14c97c9beaed8b96c9902df29ab5cb',
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
                    $modifiedValues = array_merge($modifiedValues, $this->_getModifiedValues_0a21c($originalModelData, $value));
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
                            
                                'email',
                            
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
        return is_array($value) ? new GetMediaBuysResponse_GetMediaBuysResponse_Data_Subject_Contestation6ce85a378238546858b122363ebca078e1890aaf821322237928d62a94d5f101($value) : $value;
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
  0 => 'GetMediaBuysResponse_Data_Subject_Contestation6ce85a378238546858b122363ebca078',
  1 => 'object',
)));
}

                
                    

if (is_object($value) && !($value instanceof \Exception) && !($value instanceof GetMediaBuysResponse_GetMediaBuysResponse_Data_Subject_Contestation6ce85a378238546858b122363ebca078e1890aaf821322237928d62a94d5f101)) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Object\InvalidInstanceOfException($value ?? null, ...array (
  0 => 'GetMediaBuysResponse_Data_Subject_Contestation6ce85a378238546858b122363ebca078',
  1 => 'GetMediaBuysResponse_GetMediaBuysResponse_Data_Subject_Contestation6ce85a378238546858b122363ebca078e1890aaf821322237928d62a94d5f101',
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
                    $modifiedValues = array_merge($modifiedValues, $this->_getModifiedValues_0a21c($originalModelData, $value));
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
  0 => 'GetMediaBuysResponse_Data_Subject_Contestation6ce85a378238546858b122363ebca078',
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
    

    
        
            if (array_key_exists('url', $modelData) &&
                $modelData['url'] !== $this->url
            ) {
                $this->validateComposition_1($modelData);



                $rollbackValues['url'] = $this->url;
                $this->processUrl($modelData);
            }
        
    
        
            if (array_key_exists('email', $modelData) &&
                $modelData['email'] !== $this->email
            ) {
                $this->validateComposition_1($modelData);



                $rollbackValues['email'] = $this->email;
                $this->processEmail($modelData);
            }
        
    
        
            if (array_key_exists('languages', $modelData) &&
                $modelData['languages'] !== $this->languages
            ) {
                



                $rollbackValues['languages'] = $this->languages;
                $this->processLanguages($modelData);
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




private function validateLanguages_ArrayItem_d98264cbbbcfb6b301bd754c28b7483e(&$value, $modelData): void {
                    $invalidItems_48c48fb0dab81726d73986a71c0eb336 = [];
                    
                    if (is_array($value) && (function (&$items) use (&$invalidItems_48c48fb0dab81726d73986a71c0eb336, $modelData) {
    
        $originalErrorRegistry = $this->_errorRegistry;
    

    foreach ($items as $index => &$value) {
        
            $this->_errorRegistry = new ErrorRegistryException();
        

        try {
            

            
                

if ((!is_string($value) && !$value instanceof UnitEnum) ) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Generic\InvalidTypeException($value ?? null, ...array (
  0 => 'item of array languages',
  1 => 'string',
)));
}

            

            
                if ($this->_errorRegistry->getErrors()) {
                    $invalidItems_48c48fb0dab81726d73986a71c0eb336[$index] = $this->_errorRegistry->getErrors();
                }
            
        } catch (\Exception $e) {
            // collect all errors concerning invalid items
            isset($invalidItems_48c48fb0dab81726d73986a71c0eb336[$index])
                ? $invalidItems_48c48fb0dab81726d73986a71c0eb336[$index][] = $e
                : $invalidItems_48c48fb0dab81726d73986a71c0eb336[$index] = [$e];
        }
    }

    
        $this->_errorRegistry = $originalErrorRegistry;
    

    return !empty($invalidItems_48c48fb0dab81726d73986a71c0eb336);
})($value)) {
                        $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Arrays\InvalidItemException($value ?? null, ...array (
  0 => 'languages',
  1 => $invalidItems_48c48fb0dab81726d73986a71c0eb336,
)));
                    }
                }


                        private function _getModifiedValues_0a21c(array $originalModelData, object $nestedCompositionObject): array {
                            $modifiedValues = [];
                            $defaultValueMap = array (
  0 => 'skipNotProvidedPropertiesMap',
  1 => 'skipNotProvidedPropertiesMap',
);
    
                            foreach (array (
  'url' => 'getUrl',
  'skipNotProvidedPropertiesMap' => 'get_skipNotProvidedPropertiesMap',
  'email' => 'getEmail',
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
