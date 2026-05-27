<?php

// @codingStandardsIgnoreFile
// @codeCoverageIgnoreStart

declare(strict_types = 1);


    namespace AdCP\MediaBuy;



    use PHPModelGenerator\Interfaces\JSONModelInterface;

    use UnitEnum;

    use AdCP\MediaBuy\Enums\GetProductsRequest_ItemOfArrayVerificationab0379bc9ff851960f9f645c9916029eResult;

    use PHPModelGenerator\Traits\SerializableTrait;

    use JsonSerializable;

    use PHPModelGenerator\Interfaces\SerializationInterface;

    use PHPModelGenerator\Attributes\JsonPointer;

    use PHPModelGenerator\Attributes\SchemaName;

    use PHPModelGenerator\Attributes\Required;

    use PHPModelGenerator\Attributes\Internal;

    use PHPModelGenerator\Exception\ErrorRegistryException;


/**
 * Class GetProductsRequest_ItemOfArrayVerificationab0379bc9ff851960f9f645c9916029e
 * @package AdCP\MediaBuy 
 *

 * This is an auto-implemented class implemented by the php-json-schema-model-generator.
 * If you need to implement something in this class use inheritance. Else you will lose your changes if the classes
 * are re-generated.
 */

#[JsonPointer('/properties/brand/properties/brand_kit_override/properties/logo/properties/provenance/properties/verification/items')]

class GetProductsRequest_ItemOfArrayVerificationab0379bc9ff851960f9f645c9916029e implements JSONModelInterface, JsonSerializable, SerializationInterface
{
    use SerializableTrait;

    
        
            #[JsonPointer('/properties/brand/properties/brand_kit_override/properties/logo/properties/provenance/properties/verification/items/properties/verified_by')]
        
            #[SchemaName('verified_by')]
        
            #[Required]
        
        /** @var string Name of the verification service (e.g., 'DoubleVerify', 'Hive Moderation', 'Reality Defender') */
        protected $verifiedBy;
    
        
            #[JsonPointer('/properties/brand/properties/brand_kit_override/properties/logo/properties/provenance/properties/verification/items/properties/verified_time')]
        
            #[SchemaName('verified_time')]
        
        /** @var string|null When the verification was performed (ISO 8601) */
        protected $verifiedTime;
    
        
            #[JsonPointer('/properties/brand/properties/brand_kit_override/properties/logo/properties/provenance/properties/verification/items/properties/result')]
        
            #[SchemaName('result')]
        
            #[Required]
        
        /** @var GetProductsRequest_ItemOfArrayVerificationab0379bc9ff851960f9f645c9916029eResult Verification outcome */
        protected $result;
    
        
            #[JsonPointer('/properties/brand/properties/brand_kit_override/properties/logo/properties/provenance/properties/verification/items/properties/confidence')]
        
            #[SchemaName('confidence')]
        
        /** @var float|null Confidence score of the verification result (0.0 to 1.0) */
        protected $confidence;
    
        
            #[JsonPointer('/properties/brand/properties/brand_kit_override/properties/logo/properties/provenance/properties/verification/items/properties/details_url')]
        
            #[SchemaName('details_url')]
        
        /** @var string|null URL to the full verification report */
        protected $detailsUrl;
    
        
            #[Internal]
        
        /** @var array Collect all additional properties provided to the schema */
        private $_additionalProperties = array (
);
    
        
            #[Internal]
        
        /** @var array Values which might be skipped for serialization if not provided */
        private $_skipNotProvidedPropertiesMap = array (
  1 => 'verified_time',
  3 => 'confidence',
  4 => 'details_url',
);
    
    #[Internal]
    /** @var array */
    protected $_rawModelDataInput = [];

    
        #[Internal]
        /** @var ErrorRegistryException Collect all validation errors */
        protected $_errorRegistry;
    

    /**
     * GetProductsRequest_ItemOfArrayVerificationab0379bc9ff851960f9f645c9916029e constructor.
     *
     * @param array $rawModelDataInput
     *
     * @throws ErrorRegistryException
     */
    public function __construct(array $rawModelDataInput = [])
    {
        
            $this->_errorRegistry = new ErrorRegistryException();
        

        

        
            $this->executeBaseValidators($rawModelDataInput);
        

        
            
                $this->processVerifiedBy($rawModelDataInput);
            
        
            
                $this->processVerifiedTime($rawModelDataInput);
            
        
            
                $this->processResult($rawModelDataInput);
            
        
            
                $this->processConfidence($rawModelDataInput);
            
        
            
                $this->processDetailsUrl($rawModelDataInput);
            
        
            
        
            
        

        
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
   'verified_by',
   'verified_time',
   'result',
   'confidence',
   'details_url',
)) as $propertyKey) {
        

        $this->_additionalProperties[$propertyKey] = $value[$propertyKey];
    }

    return false;
})()) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Object\InvalidAdditionalPropertiesException($value ?? null, ...array (
  0 => 'GetProductsRequest_ItemOfArrayVerificationab0379bc9ff851960f9f645c9916029e',
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
                 * Get the value of verified_by.
                 *
                 * Name of the verification service (e.g., 'DoubleVerify', 'Hive Moderation', 'Reality Defender')
                 *
                 * @return string
                 */
                public function getVerifiedBy(): string
                {
                    

                    return $this->verifiedBy;
                }
            

            
                /**
                 * Set the value of verified_by.
                 *
                 * @param string $verifiedBy Name of the verification service (e.g., 'DoubleVerify', 'Hive Moderation', 'Reality Defender')
                 *
                 * @throws ErrorRegistryException
                 *
                 * @return static
                 */
                public function setVerifiedBy(
                    string $verifiedBy
                ): static {
                    if ($this->verifiedBy === $verifiedBy) {
                        return $this;
                    }

                    $value = $modelData['verified_by'] = $verifiedBy;

                    
                        $this->_errorRegistry = new ErrorRegistryException();
                    

                    

                    $value = $this->validateVerifiedBy($value, $modelData);

                    
                        if ($this->_errorRegistry->getErrors()) {
                            throw $this->_errorRegistry;
                        }
                    

                    $this->verifiedBy = $value;
                    $this->_rawModelDataInput['verified_by'] = $verifiedBy;

                    

                    return $this;
                }
            

            /**
             * Extract the value, perform validations and set the property verifiedBy
             *
             * @param array $modelData
             *
             * @throws ErrorRegistryException
             */
            protected function processVerifiedBy(array $modelData): void
            {
                

                $value = array_key_exists('verified_by', $modelData) ? $modelData['verified_by'] : $this->verifiedBy;

                

                $this->verifiedBy = $this->validateVerifiedBy($value, $modelData);
            }

            /**
             * Execute all validators for the property verifiedBy
             */
            protected function validateVerifiedBy($value, array $modelData)
            {
                
                    

if (!array_key_exists('verified_by', $modelData)) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Object\RequiredValueException($value ?? null, ...array (
  0 => 'verified_by',
)));
}

                
                    

if ((!is_string($value) && !$value instanceof UnitEnum) ) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Generic\InvalidTypeException($value ?? null, ...array (
  0 => 'verified_by',
  1 => 'string',
)));
}

                

                return $value;
            }
        
    
        
            
                /**
                 * Get the value of verified_time.
                 *
                 * When the verification was performed (ISO 8601)
                 *
                 * @return string|null
                 */
                public function getVerifiedTime(): ?string
                {
                    

                    return $this->verifiedTime;
                }
            

            
                /**
                 * Set the value of verified_time.
                 *
                 * @param string $verifiedTime When the verification was performed (ISO 8601)
                 *
                 * @throws ErrorRegistryException
                 *
                 * @return static
                 */
                public function setVerifiedTime(
                    string $verifiedTime
                ): static {
                    if ($this->verifiedTime === $verifiedTime) {
                        return $this;
                    }

                    $value = $modelData['verified_time'] = $verifiedTime;

                    
                        $this->_errorRegistry = new ErrorRegistryException();
                    

                    

                    $value = $this->validateVerifiedTime($value, $modelData);

                    
                        if ($this->_errorRegistry->getErrors()) {
                            throw $this->_errorRegistry;
                        }
                    

                    $this->verifiedTime = $value;
                    $this->_rawModelDataInput['verified_time'] = $verifiedTime;

                    

                    return $this;
                }
            

            /**
             * Extract the value, perform validations and set the property verifiedTime
             *
             * @param array $modelData
             *
             * @throws ErrorRegistryException
             */
            protected function processVerifiedTime(array $modelData): void
            {
                
                    if (!array_key_exists('verified_time', $modelData) && $this->verifiedTime === null) {
                        return;
                    }
                

                $value = array_key_exists('verified_time', $modelData) ? $modelData['verified_time'] : $this->verifiedTime;

                

                $this->verifiedTime = $this->validateVerifiedTime($value, $modelData);
            }

            /**
             * Execute all validators for the property verifiedTime
             */
            protected function validateVerifiedTime($value, array $modelData)
            {
                
                    

if ((!is_string($value) && !$value instanceof UnitEnum) ) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Generic\InvalidTypeException($value ?? null, ...array (
  0 => 'verified_time',
  1 => 'string',
)));
}

                
                    

if (!\PHPModelGenerator\Format\FormatValidatorFromRegEx::validate($value, '/^\\d{4}-\\d{2}-\\d{2}[Tt]\\d{2}:\\d{2}:\\d{2}(\\.\\d+)?([Zz]|[+\\-]\\d{2}:\\d{2})$/')) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\String\FormatException($value ?? null, ...array (
  0 => 'verified_time',
  1 => 'date-time',
)));
}

                

                return $value;
            }
        
    
        
            
                /**
                 * Get the value of result.
                 *
                 * Verification outcome
                 *
                 * @return GetProductsRequest_ItemOfArrayVerificationab0379bc9ff851960f9f645c9916029eResult
                 */
                public function getResult(): GetProductsRequest_ItemOfArrayVerificationab0379bc9ff851960f9f645c9916029eResult
                {
                    

                    return $this->result;
                }
            

            
                /**
                 * Set the value of result.
                 *
                 * @param string|GetProductsRequest_ItemOfArrayVerificationab0379bc9ff851960f9f645c9916029eResult $result Verification outcome
                 *
                 * @throws ErrorRegistryException
                 *
                 * @return static
                 */
                public function setResult(
                    string | GetProductsRequest_ItemOfArrayVerificationab0379bc9ff851960f9f645c9916029eResult $result
                ): static {
                    if ($this->result === $result) {
                        return $this;
                    }

                    $value = $modelData['result'] = $result;

                    
                        $this->_errorRegistry = new ErrorRegistryException();
                    

                    

                    $value = $this->validateResult($value, $modelData);

                    
                        if ($this->_errorRegistry->getErrors()) {
                            throw $this->_errorRegistry;
                        }
                    

                    $this->result = $value;
                    $this->_rawModelDataInput['result'] = $result;

                    

                    return $this;
                }
            

            /**
             * Extract the value, perform validations and set the property result
             *
             * @param array $modelData
             *
             * @throws ErrorRegistryException
             */
            protected function processResult(array $modelData): void
            {
                

                $value = array_key_exists('result', $modelData) ? $modelData['result'] : $this->result;

                

                $this->result = $this->validateResult($value, $modelData);
            }

            /**
             * Execute all validators for the property result
             */
            protected function validateResult($value, array $modelData)
            {
                
                    

if ($value instanceof UnitEnum && !($value instanceof GetProductsRequest_ItemOfArrayVerificationab0379bc9ff851960f9f645c9916029eResult)) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Generic\InvalidTypeException($value ?? null, ...array (
  0 => 'result',
  1 => 'GetProductsRequest_ItemOfArrayVerificationab0379bc9ff851960f9f645c9916029eResult',
)));
}

                
                    

if (!array_key_exists('result', $modelData)) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Object\RequiredValueException($value ?? null, ...array (
  0 => 'result',
)));
}

                
                    

if ((!is_string($value) && !$value instanceof UnitEnum) ) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Generic\InvalidTypeException($value ?? null, ...array (
  0 => 'result',
  1 => 'string',
)));
}

                
                    

if (!($value instanceof UnitEnum) && !in_array($value, array (
   'authentic',
   'ai_generated',
   'ai_modified',
   'inconclusive',
), true)) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Generic\EnumException($value ?? null, ...array (
  0 => 'result',
  1 => 
  array (
    0 => 'authentic',
    1 => 'ai_generated',
    2 => 'ai_modified',
    3 => 'inconclusive',
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
  'fqcn' => 'AdCP\\MediaBuy\\Enums\\GetProductsRequest_ItemOfArrayVerificationab0379bc9ff851960f9f645c9916029eResult',
));
        } catch (\Throwable $filterException) {
            
                $transformationFailed = true;
            

            $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Filter\InvalidFilterValueException($value ?? null, ...array (
  0 => 'result',
  1 => 'php_model_generator_enum',
  2 => $filterException,
)));
        }

        return false;
    })($value)
)) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Filter\IncompatibleFilterException($value ?? null, ...array (
  0 => 'result',
  1 => 'php_model_generator_enum',
)));
}

                

                return $value;
            }
        
    
        
            
                /**
                 * Get the value of confidence.
                 *
                 * Confidence score of the verification result (0.0 to 1.0)
                 *
                 * @return float|null
                 */
                public function getConfidence(): ?float
                {
                    

                    return $this->confidence;
                }
            

            
                /**
                 * Set the value of confidence.
                 *
                 * @param float $confidence Confidence score of the verification result (0.0 to 1.0)
                 *
                 * @throws ErrorRegistryException
                 *
                 * @return static
                 */
                public function setConfidence(
                    float $confidence
                ): static {
                    if ($this->confidence === $confidence) {
                        return $this;
                    }

                    $value = $modelData['confidence'] = $confidence;

                    
                        $this->_errorRegistry = new ErrorRegistryException();
                    

                    

                    $value = $this->validateConfidence($value, $modelData);

                    
                        if ($this->_errorRegistry->getErrors()) {
                            throw $this->_errorRegistry;
                        }
                    

                    $this->confidence = $value;
                    $this->_rawModelDataInput['confidence'] = $confidence;

                    

                    return $this;
                }
            

            /**
             * Extract the value, perform validations and set the property confidence
             *
             * @param array $modelData
             *
             * @throws ErrorRegistryException
             */
            protected function processConfidence(array $modelData): void
            {
                
                    if (!array_key_exists('confidence', $modelData) && $this->confidence === null) {
                        return;
                    }
                

                $value = array_key_exists('confidence', $modelData) ? $modelData['confidence'] : $this->confidence;

                $value = is_int($value) ? (float) $value : $value;

                $this->confidence = $this->validateConfidence($value, $modelData);
            }

            /**
             * Execute all validators for the property confidence
             */
            protected function validateConfidence($value, array $modelData)
            {
                
                    

if ((!is_float($value) && !$value instanceof UnitEnum) ) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Generic\InvalidTypeException($value ?? null, ...array (
  0 => 'confidence',
  1 => 'float',
)));
}

                
                    

if (is_float($value) && $value < 0) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Number\MinimumException($value ?? null, ...array (
  0 => 'confidence',
  1 => 0,
)));
}

                
                    

if (is_float($value) && $value > 1) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Number\MaximumException($value ?? null, ...array (
  0 => 'confidence',
  1 => 1,
)));
}

                

                return $value;
            }
        
    
        
            
                /**
                 * Get the value of details_url.
                 *
                 * URL to the full verification report
                 *
                 * @return string|null
                 */
                public function getDetailsUrl(): ?string
                {
                    

                    return $this->detailsUrl;
                }
            

            
                /**
                 * Set the value of details_url.
                 *
                 * @param string $detailsUrl URL to the full verification report
                 *
                 * @throws ErrorRegistryException
                 *
                 * @return static
                 */
                public function setDetailsUrl(
                    string $detailsUrl
                ): static {
                    if ($this->detailsUrl === $detailsUrl) {
                        return $this;
                    }

                    $value = $modelData['details_url'] = $detailsUrl;

                    
                        $this->_errorRegistry = new ErrorRegistryException();
                    

                    

                    $value = $this->validateDetailsUrl($value, $modelData);

                    
                        if ($this->_errorRegistry->getErrors()) {
                            throw $this->_errorRegistry;
                        }
                    

                    $this->detailsUrl = $value;
                    $this->_rawModelDataInput['details_url'] = $detailsUrl;

                    

                    return $this;
                }
            

            /**
             * Extract the value, perform validations and set the property detailsUrl
             *
             * @param array $modelData
             *
             * @throws ErrorRegistryException
             */
            protected function processDetailsUrl(array $modelData): void
            {
                
                    if (!array_key_exists('details_url', $modelData) && $this->detailsUrl === null) {
                        return;
                    }
                

                $value = array_key_exists('details_url', $modelData) ? $modelData['details_url'] : $this->detailsUrl;

                

                $this->detailsUrl = $this->validateDetailsUrl($value, $modelData);
            }

            /**
             * Execute all validators for the property detailsUrl
             */
            protected function validateDetailsUrl($value, array $modelData)
            {
                
                    

if ((!is_string($value) && !$value instanceof UnitEnum) ) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Generic\InvalidTypeException($value ?? null, ...array (
  0 => 'details_url',
  1 => 'string',
)));
}

                
                    

if (!\PHPModelGenerator\Format\UriFormatValidator::validate($value)) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\String\FormatException($value ?? null, ...array (
  0 => 'details_url',
  1 => 'uri',
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
    

    
        
            if (array_key_exists('verified_by', $modelData) &&
                $modelData['verified_by'] !== $this->verifiedBy
            ) {
                

                $rollbackValues['verifiedBy'] = $this->verifiedBy;
                $this->processVerifiedBy($modelData);
            }
        
    
        
            if (array_key_exists('verified_time', $modelData) &&
                $modelData['verified_time'] !== $this->verifiedTime
            ) {
                

                $rollbackValues['verifiedTime'] = $this->verifiedTime;
                $this->processVerifiedTime($modelData);
            }
        
    
        
            if (array_key_exists('result', $modelData) &&
                $modelData['result'] !== $this->result
            ) {
                

                $rollbackValues['result'] = $this->result;
                $this->processResult($modelData);
            }
        
    
        
            if (array_key_exists('confidence', $modelData) &&
                $modelData['confidence'] !== $this->confidence
            ) {
                

                $rollbackValues['confidence'] = $this->confidence;
                $this->processConfidence($modelData);
            }
        
    
        
            if (array_key_exists('details_url', $modelData) &&
                $modelData['details_url'] !== $this->detailsUrl
            ) {
                

                $rollbackValues['detailsUrl'] = $this->detailsUrl;
                $this->processDetailsUrl($modelData);
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
 * serialize the property result
 */
protected function serializeResult()
{
    return \PHPModelGenerator\Filter\Enum::serialize($this->result, array (
  'fqcn' => 'AdCP\\MediaBuy\\Enums\\GetProductsRequest_ItemOfArrayVerificationab0379bc9ff851960f9f645c9916029eResult',
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



}

// @codeCoverageIgnoreEnd
