<?php

// @codingStandardsIgnoreFile
// @codeCoverageIgnoreStart

declare(strict_types = 1);


    namespace AdCP\MediaBuy;



    use PHPModelGenerator\Interfaces\BuilderInterface;

    use PHPModelGenerator\Exception\ErrorRegistryException;

    use AdCP\MediaBuy\Enums\MatchType;


/**
 * Builder class for GetProductsRequest_ItemOfArrayKeywords59f003c5a6f57cf899b79e85aa512ac5
 */
class GetProductsRequest_ItemOfArrayKeywords59f003c5a6f57cf899b79e85aa512ac5Builder implements BuilderInterface
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
     * Set up a new instance of GetProductsRequest_ItemOfArrayKeywords59f003c5a6f57cf899b79e85aa512ac5 with fully validated properties
     */
    public function validate(): GetProductsRequest_ItemOfArrayKeywords59f003c5a6f57cf899b79e85aa512ac5
    {
        $this->_array_walk_recursive_real(
            $this->_rawModelDataInput,
            function (&$property): void {
                if ($property instanceof BuilderInterface) {
                    $property = $property->getRawModelDataInput();
                }
            },
        );

        return new GetProductsRequest_ItemOfArrayKeywords59f003c5a6f57cf899b79e85aa512ac5($this->_rawModelDataInput);
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
             * Get the value of keyword.
             *
             * The keyword to target
             *
             * @return string|null
             */
            public function getKeyword(): ?string
            {
                return $this->_rawModelDataInput['keyword'] ?? null;
            }

            /**
             * Set the value of keyword.
             *
             * @param string $keyword The keyword to target
             *
             * {@link GetProductsRequest_ItemOfArrayKeywords59f003c5a6f57cf899b79e85aa512ac5::processKeyword}
             * 
             *
             * @return static
             */
            public function setKeyword(
                string $keyword
            ): static {
                if (array_key_exists('keyword', $this->_rawModelDataInput)
                    && $this->_rawModelDataInput['keyword'] === $keyword
                ) {
                    return $this;
                }

                $value = $modelData['keyword'] = $keyword;

                

                

                $this->_rawModelDataInput['keyword'] = $value;

                return $this;
            }
        
    
        
            /**
             * Get the value of match_type.
             *
             * Keyword targeting match type. broad: ads may serve on queries semantically related to the keyword. phrase: ads serve when the query contains the keyword phrase. exact: ads serve only when the query matches the keyword exactly.
             *
             * @return string|MatchType|null
             */
            public function getMatchType(): string | MatchType | null
            {
                return $this->_rawModelDataInput['match_type'] ?? null;
            }

            /**
             * Set the value of match_type.
             *
             * @param string|MatchType|null $matchType Keyword targeting match type. broad: ads may serve on queries semantically related to the keyword. phrase: ads serve when the query contains the keyword phrase. exact: ads serve only when the query matches the keyword exactly.
             *
             * {@link GetProductsRequest_ItemOfArrayKeywords59f003c5a6f57cf899b79e85aa512ac5::processMatchType}
             * 
             *
             * @return static
             */
            public function setMatchType(
                string | MatchType | null $matchType
            ): static {
                if (array_key_exists('match_type', $this->_rawModelDataInput)
                    && $this->_rawModelDataInput['match_type'] === $matchType
                ) {
                    return $this;
                }

                $value = $modelData['match_type'] = $matchType;

                

                

                $this->_rawModelDataInput['match_type'] = $value;

                return $this;
            }
        
    
}

// @codeCoverageIgnoreEnd
