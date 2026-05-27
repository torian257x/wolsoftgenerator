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
 * Class GetMediaBuysResponse_PaginationResponse
 * @package AdCP\MediaBuy 
 *
 * Pagination metadata for the media_buys array.
 *
 * This is an auto-implemented class implemented by the php-json-schema-model-generator.
 * If you need to implement something in this class use inheritance. Else you will lose your changes if the classes
 * are re-generated.
 */

#[JsonPointer('/properties/pagination')]

class GetMediaBuysResponse_PaginationResponse implements JSONModelInterface, JsonSerializable, SerializationInterface
{
    use SerializableTrait;

    
        
            #[JsonPointer('/properties/pagination/properties/has_more')]
        
            #[SchemaName('has_more')]
        
            #[Required]
        
        /** @var bool Whether more results are available beyond this page */
        protected $hasMore;
    
        
            #[JsonPointer('/properties/pagination/properties/cursor')]
        
            #[SchemaName('cursor')]
        
        /** @var string|null Opaque cursor to pass in the next request to fetch the next page. Only present when has_more is true. */
        protected $cursor;
    
        
            #[JsonPointer('/properties/pagination/properties/total_count')]
        
            #[SchemaName('total_count')]
        
        /** @var int|null Total number of items matching the query across all pages. Optional because not all backends can efficiently compute this. */
        protected $totalCount;
    
        
            #[Internal]
        
        /** @var array Values which might be skipped for serialization if not provided */
        private $_skipNotProvidedPropertiesMap = array (
  1 => 'cursor',
  2 => 'total_count',
);
    
    #[Internal]
    /** @var array */
    protected $_rawModelDataInput = [];

    
        #[Internal]
        /** @var ErrorRegistryException Collect all validation errors */
        protected $_errorRegistry;
    

    /**
     * GetMediaBuysResponse_PaginationResponse constructor.
     *
     * @param array $rawModelDataInput
     *
     * @throws ErrorRegistryException
     */
    public function __construct(array $rawModelDataInput = [])
    {
        
            $this->_errorRegistry = new ErrorRegistryException();
        

        

        
            $this->executeBaseValidators($rawModelDataInput);
        

        
            
                $this->processHasMore($rawModelDataInput);
            
        
            
                $this->processCursor($rawModelDataInput);
            
        
            
                $this->processTotalCount($rawModelDataInput);
            
        
            
        

        
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
   'has_more',
   'cursor',
   'total_count',
));

    

    return $additionalProperties;
})()) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Object\AdditionalPropertiesException($value ?? null, ...array (
  0 => 'GetMediaBuysResponse_PaginationResponse',
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
                 * Get the value of has_more.
                 *
                 * Whether more results are available beyond this page
                 *
                 * @return bool
                 */
                public function getHasMore(): bool
                {
                    

                    return $this->hasMore;
                }
            

            
                /**
                 * Set the value of has_more.
                 *
                 * @param bool $hasMore Whether more results are available beyond this page
                 *
                 * @throws ErrorRegistryException
                 *
                 * @return static
                 */
                public function setHasMore(
                    bool $hasMore
                ): static {
                    if ($this->hasMore === $hasMore) {
                        return $this;
                    }

                    $value = $modelData['has_more'] = $hasMore;

                    
                        $this->_errorRegistry = new ErrorRegistryException();
                    

                    

                    $value = $this->validateHasMore($value, $modelData);

                    
                        if ($this->_errorRegistry->getErrors()) {
                            throw $this->_errorRegistry;
                        }
                    

                    $this->hasMore = $value;
                    $this->_rawModelDataInput['has_more'] = $hasMore;

                    

                    return $this;
                }
            

            /**
             * Extract the value, perform validations and set the property hasMore
             *
             * @param array $modelData
             *
             * @throws ErrorRegistryException
             */
            protected function processHasMore(array $modelData): void
            {
                

                $value = array_key_exists('has_more', $modelData) ? $modelData['has_more'] : $this->hasMore;

                

                $this->hasMore = $this->validateHasMore($value, $modelData);
            }

            /**
             * Execute all validators for the property hasMore
             */
            protected function validateHasMore($value, array $modelData)
            {
                
                    

if (!array_key_exists('has_more', $modelData)) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Object\RequiredValueException($value ?? null, ...array (
  0 => 'has_more',
)));
}

                
                    

if ((!is_bool($value) && !$value instanceof UnitEnum) ) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Generic\InvalidTypeException($value ?? null, ...array (
  0 => 'has_more',
  1 => 'bool',
)));
}

                

                return $value;
            }
        
    
        
            
                /**
                 * Get the value of cursor.
                 *
                 * Opaque cursor to pass in the next request to fetch the next page. Only present when has_more is true.
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
                 * @param string $cursor Opaque cursor to pass in the next request to fetch the next page. Only present when has_more is true.
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
                 * Get the value of total_count.
                 *
                 * Total number of items matching the query across all pages. Optional because not all backends can efficiently compute this.
                 *
                 * @return int|null
                 */
                public function getTotalCount(): ?int
                {
                    

                    return $this->totalCount;
                }
            

            
                /**
                 * Set the value of total_count.
                 *
                 * @param int $totalCount Total number of items matching the query across all pages. Optional because not all backends can efficiently compute this.
                 *
                 * @throws ErrorRegistryException
                 *
                 * @return static
                 */
                public function setTotalCount(
                    int $totalCount
                ): static {
                    if ($this->totalCount === $totalCount) {
                        return $this;
                    }

                    $value = $modelData['total_count'] = $totalCount;

                    
                        $this->_errorRegistry = new ErrorRegistryException();
                    

                    

                    $value = $this->validateTotalCount($value, $modelData);

                    
                        if ($this->_errorRegistry->getErrors()) {
                            throw $this->_errorRegistry;
                        }
                    

                    $this->totalCount = $value;
                    $this->_rawModelDataInput['total_count'] = $totalCount;

                    

                    return $this;
                }
            

            /**
             * Extract the value, perform validations and set the property totalCount
             *
             * @param array $modelData
             *
             * @throws ErrorRegistryException
             */
            protected function processTotalCount(array $modelData): void
            {
                
                    if (!array_key_exists('total_count', $modelData) && $this->totalCount === null) {
                        return;
                    }
                

                $value = array_key_exists('total_count', $modelData) ? $modelData['total_count'] : $this->totalCount;

                

                $this->totalCount = $this->validateTotalCount($value, $modelData);
            }

            /**
             * Execute all validators for the property totalCount
             */
            protected function validateTotalCount($value, array $modelData)
            {
                
                    

if ((!is_int($value) && !$value instanceof UnitEnum) ) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Generic\InvalidTypeException($value ?? null, ...array (
  0 => 'total_count',
  1 => 'int',
)));
}

                
                    

if (is_int($value) && $value < 0) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Number\MinimumException($value ?? null, ...array (
  0 => 'total_count',
  1 => 0,
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
    

    
        
            if (array_key_exists('has_more', $modelData) &&
                $modelData['has_more'] !== $this->hasMore
            ) {
                

                $rollbackValues['hasMore'] = $this->hasMore;
                $this->processHasMore($modelData);
            }
        
    
        
            if (array_key_exists('cursor', $modelData) &&
                $modelData['cursor'] !== $this->cursor
            ) {
                

                $rollbackValues['cursor'] = $this->cursor;
                $this->processCursor($modelData);
            }
        
    
        
            if (array_key_exists('total_count', $modelData) &&
                $modelData['total_count'] !== $this->totalCount
            ) {
                

                $rollbackValues['totalCount'] = $this->totalCount;
                $this->processTotalCount($modelData);
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
