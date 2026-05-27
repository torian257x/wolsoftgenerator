<?php

// @codingStandardsIgnoreFile
// @codeCoverageIgnoreStart

declare(strict_types = 1);


    namespace AdCP\MediaBuy;



    use PHPModelGenerator\Interfaces\JSONModelInterface;

    use UnitEnum;

    use AdCP\MediaBuy\Enums\MatchType;

    use PHPModelGenerator\Traits\SerializableTrait;

    use JsonSerializable;

    use PHPModelGenerator\Interfaces\SerializationInterface;

    use PHPModelGenerator\Attributes\JsonPointer;

    use PHPModelGenerator\Attributes\SchemaName;

    use PHPModelGenerator\Attributes\Required;

    use PHPModelGenerator\Attributes\Internal;

    use PHPModelGenerator\Exception\ErrorRegistryException;


/**
 * Class GetProductsRequest_ItemOfArrayKeywords59f003c5a6f57cf899b79e85aa512ac5
 * @package AdCP\MediaBuy 
 *

 * This is an auto-implemented class implemented by the php-json-schema-model-generator.
 * If you need to implement something in this class use inheritance. Else you will lose your changes if the classes
 * are re-generated.
 */

#[JsonPointer('/properties/filters/properties/keywords/items')]

class GetProductsRequest_ItemOfArrayKeywords59f003c5a6f57cf899b79e85aa512ac5 implements JSONModelInterface, JsonSerializable, SerializationInterface
{
    use SerializableTrait;

    
        
            #[JsonPointer('/properties/filters/properties/keywords/items/properties/keyword')]
        
            #[SchemaName('keyword')]
        
            #[Required]
        
        /** @var string The keyword to target */
        protected $keyword;
    
        
            #[JsonPointer('/properties/filters/properties/keywords/items/properties/match_type')]
        
            #[SchemaName('match_type')]
        
        /** @var MatchType|null Keyword targeting match type. broad: ads may serve on queries semantically related to the keyword. phrase: ads serve when the query contains the keyword phrase. exact: ads serve only when the query matches the keyword exactly. */
        protected $matchType = MatchType::Broad;
    
        
            #[Internal]
        
        /** @var array Values which might be skipped for serialization if not provided */
        private $_skipNotProvidedPropertiesMap = array (
);
    
    #[Internal]
    /** @var array */
    protected $_rawModelDataInput = [];

    
        #[Internal]
        /** @var ErrorRegistryException Collect all validation errors */
        protected $_errorRegistry;
    

    /**
     * GetProductsRequest_ItemOfArrayKeywords59f003c5a6f57cf899b79e85aa512ac5 constructor.
     *
     * @param array $rawModelDataInput
     *
     * @throws ErrorRegistryException
     */
    public function __construct(array $rawModelDataInput = [])
    {
        
            $this->_errorRegistry = new ErrorRegistryException();
        

        

        
            $this->executeBaseValidators($rawModelDataInput);
        

        
            
                $this->processKeyword($rawModelDataInput);
            
        
            
                $this->processMatchType($rawModelDataInput);
            
        
            
        

        
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
   'keyword',
   'match_type',
));

    

    return $additionalProperties;
})()) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Object\AdditionalPropertiesException($value ?? null, ...array (
  0 => 'GetProductsRequest_ItemOfArrayKeywords59f003c5a6f57cf899b79e85aa512ac5',
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
                 * Get the value of keyword.
                 *
                 * The keyword to target
                 *
                 * @return string
                 */
                public function getKeyword(): string
                {
                    

                    return $this->keyword;
                }
            

            
                /**
                 * Set the value of keyword.
                 *
                 * @param string $keyword The keyword to target
                 *
                 * @throws ErrorRegistryException
                 *
                 * @return static
                 */
                public function setKeyword(
                    string $keyword
                ): static {
                    if ($this->keyword === $keyword) {
                        return $this;
                    }

                    $value = $modelData['keyword'] = $keyword;

                    
                        $this->_errorRegistry = new ErrorRegistryException();
                    

                    

                    $value = $this->validateKeyword($value, $modelData);

                    
                        if ($this->_errorRegistry->getErrors()) {
                            throw $this->_errorRegistry;
                        }
                    

                    $this->keyword = $value;
                    $this->_rawModelDataInput['keyword'] = $keyword;

                    

                    return $this;
                }
            

            /**
             * Extract the value, perform validations and set the property keyword
             *
             * @param array $modelData
             *
             * @throws ErrorRegistryException
             */
            protected function processKeyword(array $modelData): void
            {
                

                $value = array_key_exists('keyword', $modelData) ? $modelData['keyword'] : $this->keyword;

                

                $this->keyword = $this->validateKeyword($value, $modelData);
            }

            /**
             * Execute all validators for the property keyword
             */
            protected function validateKeyword($value, array $modelData)
            {
                
                    

if (!array_key_exists('keyword', $modelData)) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Object\RequiredValueException($value ?? null, ...array (
  0 => 'keyword',
)));
}

                
                    

if ((!is_string($value) && !$value instanceof UnitEnum) ) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Generic\InvalidTypeException($value ?? null, ...array (
  0 => 'keyword',
  1 => 'string',
)));
}

                
                    

if (is_string($value) && mb_strlen($value) < 1) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\String\MinLengthException($value ?? null, ...array (
  0 => 'keyword',
  1 => 1,
)));
}

                

                return $value;
            }
        
    
        
            
                /**
                 * Get the value of match_type.
                 *
                 * Keyword targeting match type. broad: ads may serve on queries semantically related to the keyword. phrase: ads serve when the query contains the keyword phrase. exact: ads serve only when the query matches the keyword exactly.
                 *
                 * @return MatchType|null
                 */
                public function getMatchType(): ?MatchType
                {
                    

                    return $this->matchType;
                }
            

            
                /**
                 * Set the value of match_type.
                 *
                 * @param string|MatchType|null $matchType Keyword targeting match type. broad: ads may serve on queries semantically related to the keyword. phrase: ads serve when the query contains the keyword phrase. exact: ads serve only when the query matches the keyword exactly.
                 *
                 * @throws ErrorRegistryException
                 *
                 * @return static
                 */
                public function setMatchType(
                    string | MatchType | null $matchType
                ): static {
                    if ($this->matchType === $matchType) {
                        return $this;
                    }

                    $value = $modelData['match_type'] = $matchType;

                    
                        $this->_errorRegistry = new ErrorRegistryException();
                    

                    

                    $value = $this->validateMatchType($value, $modelData);

                    
                        if ($this->_errorRegistry->getErrors()) {
                            throw $this->_errorRegistry;
                        }
                    

                    $this->matchType = $value;
                    $this->_rawModelDataInput['match_type'] = $matchType;

                    

                    return $this;
                }
            

            /**
             * Extract the value, perform validations and set the property matchType
             *
             * @param array $modelData
             *
             * @throws ErrorRegistryException
             */
            protected function processMatchType(array $modelData): void
            {
                
                    if (!array_key_exists('match_type', $modelData) && $this->matchType === null) {
                        return;
                    }
                

                $value = array_key_exists('match_type', $modelData) ? $modelData['match_type'] : $this->matchType;

                

                $this->matchType = $this->validateMatchType($value, $modelData);
            }

            /**
             * Execute all validators for the property matchType
             */
            protected function validateMatchType($value, array $modelData)
            {
                
                    

if ($value instanceof UnitEnum && !($value instanceof MatchType)) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Generic\InvalidTypeException($value ?? null, ...array (
  0 => 'match_type',
  1 => 'MatchType',
)));
}

                
                    

if ((!is_string($value) && !$value instanceof UnitEnum) ) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Generic\InvalidTypeException($value ?? null, ...array (
  0 => 'match_type',
  1 => 'string',
)));
}

                
                    

if (!($value instanceof UnitEnum) && !in_array($value, array (
   'broad',
   'phrase',
   'exact',
), true)) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Generic\EnumException($value ?? null, ...array (
  0 => 'match_type',
  1 => 
  array (
    0 => 'broad',
    1 => 'phrase',
    2 => 'exact',
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
  'fqcn' => 'AdCP\\MediaBuy\\Enums\\MatchType',
));
        } catch (\Throwable $filterException) {
            
                $transformationFailed = true;
            

            $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Filter\InvalidFilterValueException($value ?? null, ...array (
  0 => 'match_type',
  1 => 'php_model_generator_enum',
  2 => $filterException,
)));
        }

        return false;
    })($value)
)) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Filter\IncompatibleFilterException($value ?? null, ...array (
  0 => 'match_type',
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
    

    
        
            if (array_key_exists('keyword', $modelData) &&
                $modelData['keyword'] !== $this->keyword
            ) {
                

                $rollbackValues['keyword'] = $this->keyword;
                $this->processKeyword($modelData);
            }
        
    
        
            if (array_key_exists('match_type', $modelData) &&
                $modelData['match_type'] !== $this->matchType
            ) {
                

                $rollbackValues['matchType'] = $this->matchType;
                $this->processMatchType($modelData);
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
 * serialize the property matchType
 */
protected function serializeMatchType()
{
    return \PHPModelGenerator\Filter\Enum::serialize($this->matchType, array (
  'fqcn' => 'AdCP\\MediaBuy\\Enums\\MatchType',
));
}





}

// @codeCoverageIgnoreEnd
