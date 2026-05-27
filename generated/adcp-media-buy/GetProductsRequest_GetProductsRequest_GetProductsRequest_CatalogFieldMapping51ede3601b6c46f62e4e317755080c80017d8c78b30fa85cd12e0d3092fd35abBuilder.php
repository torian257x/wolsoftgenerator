<?php

// @codingStandardsIgnoreFile
// @codeCoverageIgnoreStart

declare(strict_types = 1);


    namespace AdCP\MediaBuy;



    use PHPModelGenerator\Interfaces\BuilderInterface;

    use PHPModelGenerator\Exception\ErrorRegistryException;


/**
 * Builder class for GetProductsRequest_GetProductsRequest_GetProductsRequest_CatalogFieldMapping51ede3601b6c46f62e4e317755080c80017d8c78b30fa85cd12e0d3092fd35ab
 */
class GetProductsRequest_GetProductsRequest_GetProductsRequest_CatalogFieldMapping51ede3601b6c46f62e4e317755080c80017d8c78b30fa85cd12e0d3092fd35abBuilder implements BuilderInterface
{
    /** @var array */
    protected $_rawModelDataInput = [];

    
        /** @var ErrorRegistryException */
        protected $_errorRegistry;
    

    public function __construct(array $rawModelDataInput = [])
    {
        $this->_rawModelDataInput = $rawModelDataInput;

        
            $this->_errorRegistry = new ErrorRegistryException();
        
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
     * Set up a new instance of GetProductsRequest_GetProductsRequest_GetProductsRequest_CatalogFieldMapping51ede3601b6c46f62e4e317755080c80017d8c78b30fa85cd12e0d3092fd35ab with fully validated properties
     */
    public function validate(): GetProductsRequest_GetProductsRequest_GetProductsRequest_CatalogFieldMapping51ede3601b6c46f62e4e317755080c80017d8c78b30fa85cd12e0d3092fd35ab
    {
        $this->_array_walk_recursive_real(
            $this->_rawModelDataInput,
            function (&$property): void {
                if ($property instanceof BuilderInterface) {
                    $property = $property->getRawModelDataInput();
                }
            },
        );

        return new GetProductsRequest_GetProductsRequest_GetProductsRequest_CatalogFieldMapping51ede3601b6c46f62e4e317755080c80017d8c78b30fa85cd12e0d3092fd35ab($this->_rawModelDataInput);
    }

    // PHPs builtin array_walk_recursive doesn't handle newly inserted arrays which we need to visit
    private function _array_walk_recursive_real(array &$array, callable $callback): void
    {
        foreach ($array as &$value) {
            $callback($value);

            if (is_array($value)) {
                $this->_array_walk_recursive_real($value, $callback);
            }
        }
    }

    
        
            /**
             * Get the value of feed_field.
             *
             * 
             *
             * @return mixed
             */
            public function getFeedField(): mixed
            {
                return $this->_rawModelDataInput['feed_field'] ?? null;
            }

            /**
             * Set the value of feed_field.
             *
             * @param mixed $feedField
             *
             * {@link GetProductsRequest_GetProductsRequest_GetProductsRequest_CatalogFieldMapping51ede3601b6c46f62e4e317755080c80017d8c78b30fa85cd12e0d3092fd35ab::processFeedField}
             * 
             *
             * @return static
             */
            public function setFeedField(
                mixed $feedField
            ): static {
                if (array_key_exists('feed_field', $this->_rawModelDataInput)
                    && $this->_rawModelDataInput['feed_field'] === $feedField
                ) {
                    return $this;
                }

                $value = $modelData['feed_field'] = $feedField;

                

                

                $this->_rawModelDataInput['feed_field'] = $value;

                return $this;
            }
        
    
        
            /**
             * Get the value of value.
             *
             * 
             *
             * @return mixed
             */
            public function getValue(): mixed
            {
                return $this->_rawModelDataInput['value'] ?? null;
            }

            /**
             * Set the value of value.
             *
             * @param mixed $value
             *
             * {@link GetProductsRequest_GetProductsRequest_GetProductsRequest_CatalogFieldMapping51ede3601b6c46f62e4e317755080c80017d8c78b30fa85cd12e0d3092fd35ab::processValue}
             * 
             *
             * @return static
             */
            public function setValue(
                mixed $value
            ): static {
                if (array_key_exists('value', $this->_rawModelDataInput)
                    && $this->_rawModelDataInput['value'] === $value
                ) {
                    return $this;
                }

                $value = $modelData['value'] = $value;

                

                

                $this->_rawModelDataInput['value'] = $value;

                return $this;
            }
        
    
}

// @codeCoverageIgnoreEnd
