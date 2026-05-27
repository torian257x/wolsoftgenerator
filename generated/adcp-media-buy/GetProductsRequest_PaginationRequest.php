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
 * Class GetProductsRequest_PaginationRequest
 * @package AdCP\MediaBuy 
 *
 * Standard cursor-based pagination parameters for list operations
 *
 * This is an auto-implemented class implemented by the php-json-schema-model-generator.
 * If you need to implement something in this class use inheritance. Else you will lose your changes if the classes
 * are re-generated.
 */

#[JsonPointer('/properties/pagination')]

class GetProductsRequest_PaginationRequest implements JSONModelInterface, JsonSerializable, SerializationInterface
{
    use SerializableTrait;

    
        
            #[JsonPointer('/properties/pagination/properties/max_results')]
        
            #[SchemaName('max_results')]
        
        /** @var int Maximum number of items to return per page */
        protected $maxResults = 50;
    
        
            #[JsonPointer('/properties/pagination/properties/cursor')]
        
            #[SchemaName('cursor')]
        
        /** @var string|null Opaque cursor from a previous response to fetch the next page */
        protected $cursor;
    
        
            #[Internal]
        
        /** @var array Values which might be skipped for serialization if not provided */
        private $_skipNotProvidedPropertiesMap = array (
  1 => 'cursor',
);
    
    #[Internal]
    /** @var array */
    protected $_rawModelDataInput = [];

    
        #[Internal]
        /** @var ErrorRegistryException Collect all validation errors */
        protected $_errorRegistry;
    

    /**
     * GetProductsRequest_PaginationRequest constructor.
     *
     * @param array $rawModelDataInput
     *
     * @throws ErrorRegistryException
     */
    public function __construct(array $rawModelDataInput = [])
    {
        
            $this->_errorRegistry = new ErrorRegistryException();
        

        

        
            $this->executeBaseValidators($rawModelDataInput);
        

        
            
                $this->processMaxResults($rawModelDataInput);
            
        
            
                $this->processCursor($rawModelDataInput);
            
        
            
        

        
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
   'max_results',
   'cursor',
));

    

    return $additionalProperties;
})()) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Object\AdditionalPropertiesException($value ?? null, ...array (
  0 => 'GetProductsRequest_PaginationRequest',
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
                 * Get the value of max_results.
                 *
                 * Maximum number of items to return per page
                 *
                 * @return int
                 */
                public function getMaxResults(): int
                {
                    

                    return $this->maxResults;
                }
            

            
                /**
                 * Set the value of max_results.
                 *
                 * @param int $maxResults Maximum number of items to return per page
                 *
                 * @throws ErrorRegistryException
                 *
                 * @return static
                 */
                public function setMaxResults(
                    int $maxResults
                ): static {
                    if ($this->maxResults === $maxResults) {
                        return $this;
                    }

                    $value = $modelData['max_results'] = $maxResults;

                    
                        $this->_errorRegistry = new ErrorRegistryException();
                    

                    

                    $value = $this->validateMaxResults($value, $modelData);

                    
                        if ($this->_errorRegistry->getErrors()) {
                            throw $this->_errorRegistry;
                        }
                    

                    $this->maxResults = $value;
                    $this->_rawModelDataInput['max_results'] = $maxResults;

                    

                    return $this;
                }
            

            /**
             * Extract the value, perform validations and set the property maxResults
             *
             * @param array $modelData
             *
             * @throws ErrorRegistryException
             */
            protected function processMaxResults(array $modelData): void
            {
                
                    if (!array_key_exists('max_results', $modelData) && $this->maxResults === null) {
                        return;
                    }
                

                $value = array_key_exists('max_results', $modelData) ? $modelData['max_results'] : $this->maxResults;

                

                $this->maxResults = $this->validateMaxResults($value, $modelData);
            }

            /**
             * Execute all validators for the property maxResults
             */
            protected function validateMaxResults($value, array $modelData)
            {
                
                    

if ((!is_int($value) && !$value instanceof UnitEnum) ) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Generic\InvalidTypeException($value ?? null, ...array (
  0 => 'max_results',
  1 => 'int',
)));
}

                
                    

if (is_int($value) && $value < 1) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Number\MinimumException($value ?? null, ...array (
  0 => 'max_results',
  1 => 1,
)));
}

                
                    

if (is_int($value) && $value > 100) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Number\MaximumException($value ?? null, ...array (
  0 => 'max_results',
  1 => 100,
)));
}

                

                return $value;
            }
        
    
        
            
                /**
                 * Get the value of cursor.
                 *
                 * Opaque cursor from a previous response to fetch the next page
                 *
                 * @return string|null
                 */
                public function getCursor(): ?string
                {
                    

                    return $this->cursor;
                }
            

            
                /**
                 * Set the value of cursor.
                 *
                 * @param string $cursor Opaque cursor from a previous response to fetch the next page
                 *
                 * @throws ErrorRegistryException
                 *
                 * @return static
                 */
                public function setCursor(
                    string $cursor
                ): static {
                    if ($this->cursor === $cursor) {
                        return $this;
                    }

                    $value = $modelData['cursor'] = $cursor;

                    
                        $this->_errorRegistry = new ErrorRegistryException();
                    

                    

                    $value = $this->validateCursor($value, $modelData);

                    
                        if ($this->_errorRegistry->getErrors()) {
                            throw $this->_errorRegistry;
                        }
                    

                    $this->cursor = $value;
                    $this->_rawModelDataInput['cursor'] = $cursor;

                    

                    return $this;
                }
            

            /**
             * Extract the value, perform validations and set the property cursor
             *
             * @param array $modelData
             *
             * @throws ErrorRegistryException
             */
            protected function processCursor(array $modelData): void
            {
                
                    if (!array_key_exists('cursor', $modelData) && $this->cursor === null) {
                        return;
                    }
                

                $value = array_key_exists('cursor', $modelData) ? $modelData['cursor'] : $this->cursor;

                

                $this->cursor = $this->validateCursor($value, $modelData);
            }

            /**
             * Execute all validators for the property cursor
             */
            protected function validateCursor($value, array $modelData)
            {
                
                    

if ((!is_string($value) && !$value instanceof UnitEnum) ) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Generic\InvalidTypeException($value ?? null, ...array (
  0 => 'cursor',
  1 => 'string',
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
    

    
        
            if (array_key_exists('max_results', $modelData) &&
                $modelData['max_results'] !== $this->maxResults
            ) {
                

                $rollbackValues['maxResults'] = $this->maxResults;
                $this->processMaxResults($modelData);
            }
        
    
        
            if (array_key_exists('cursor', $modelData) &&
                $modelData['cursor'] !== $this->cursor
            ) {
                

                $rollbackValues['cursor'] = $this->cursor;
                $this->processCursor($modelData);
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





}

// @codeCoverageIgnoreEnd
