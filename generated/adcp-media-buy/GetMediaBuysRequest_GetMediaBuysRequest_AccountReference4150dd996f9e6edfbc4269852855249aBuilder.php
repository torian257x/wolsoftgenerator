<?php

// @codingStandardsIgnoreFile
// @codeCoverageIgnoreStart

declare(strict_types = 1);


    namespace AdCP\MediaBuy;



    use PHPModelGenerator\Interfaces\BuilderInterface;

    use PHPModelGenerator\Exception\ErrorRegistryException;


/**
 * Builder class for GetMediaBuysRequest_GetMediaBuysRequest_AccountReference4150dd996f9e6edfbc4269852855249a
 */
class GetMediaBuysRequest_GetMediaBuysRequest_AccountReference4150dd996f9e6edfbc4269852855249aBuilder implements BuilderInterface
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
     * Set up a new instance of GetMediaBuysRequest_GetMediaBuysRequest_AccountReference4150dd996f9e6edfbc4269852855249a with fully validated properties
     */
    public function validate(): GetMediaBuysRequest_GetMediaBuysRequest_AccountReference4150dd996f9e6edfbc4269852855249a
    {
        $this->_array_walk_recursive_real(
            $this->_rawModelDataInput,
            function (&$property): void {
                if ($property instanceof BuilderInterface) {
                    $property = $property->getRawModelDataInput();
                }
            },
        );

        return new GetMediaBuysRequest_GetMediaBuysRequest_AccountReference4150dd996f9e6edfbc4269852855249a($this->_rawModelDataInput);
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
             * Get the value of brand.
             *
             * Brand reference identifying the advertiser
             *
             * @return GetMediaBuysRequest_BrandReference|GetMediaBuysRequest_BrandReferenceBuilder|array|null
             */
            public function getBrand(): mixed
            {
                return $this->_rawModelDataInput['brand'] ?? null;
            }

            /**
             * Set the value of brand.
             *
             * @param GetMediaBuysRequest_BrandReference|GetMediaBuysRequest_BrandReferenceBuilder|array $brand Brand reference identifying the advertiser
             *
             * {@link GetMediaBuysRequest_GetMediaBuysRequest_AccountReference4150dd996f9e6edfbc4269852855249a::processBrand}
             * 
             *
             * @return static
             */
            public function setBrand(
                mixed $brand
            ): static {
                if (array_key_exists('brand', $this->_rawModelDataInput)
                    && $this->_rawModelDataInput['brand'] === $brand
                ) {
                    return $this;
                }

                $value = $modelData['brand'] = $brand;

                

                

                $this->_rawModelDataInput['brand'] = $value;

                return $this;
            }
        
    
        
            /**
             * Get the value of operator.
             *
             * Domain of the entity operating on the brand's behalf. When the brand operates directly, this is the brand's domain.
             *
             * @return string|null
             */
            public function getOperator(): ?string
            {
                return $this->_rawModelDataInput['operator'] ?? null;
            }

            /**
             * Set the value of operator.
             *
             * @param string $operator Domain of the entity operating on the brand's behalf. When the brand operates directly, this is the brand's domain.
             *
             * {@link GetMediaBuysRequest_GetMediaBuysRequest_AccountReference4150dd996f9e6edfbc4269852855249a::processOperator}
             * 
             *
             * @return static
             */
            public function setOperator(
                string $operator
            ): static {
                if (array_key_exists('operator', $this->_rawModelDataInput)
                    && $this->_rawModelDataInput['operator'] === $operator
                ) {
                    return $this;
                }

                $value = $modelData['operator'] = $operator;

                

                

                $this->_rawModelDataInput['operator'] = $value;

                return $this;
            }
        
    
        
            /**
             * Get the value of sandbox.
             *
             * When true, references the sandbox account for this brand/operator pair. Defaults to false (production account).
             *
             * @return bool|null
             */
            public function getSandbox(): ?bool
            {
                return $this->_rawModelDataInput['sandbox'] ?? null;
            }

            /**
             * Set the value of sandbox.
             *
             * @param bool $sandbox When true, references the sandbox account for this brand/operator pair. Defaults to false (production account).
             *
             * {@link GetMediaBuysRequest_GetMediaBuysRequest_AccountReference4150dd996f9e6edfbc4269852855249a::processSandbox}
             * 
             *
             * @return static
             */
            public function setSandbox(
                bool $sandbox
            ): static {
                if (array_key_exists('sandbox', $this->_rawModelDataInput)
                    && $this->_rawModelDataInput['sandbox'] === $sandbox
                ) {
                    return $this;
                }

                $value = $modelData['sandbox'] = $sandbox;

                

                

                $this->_rawModelDataInput['sandbox'] = $value;

                return $this;
            }
        
    
}

// @codeCoverageIgnoreEnd
