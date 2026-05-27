<?php

// @codingStandardsIgnoreFile
// @codeCoverageIgnoreStart

declare(strict_types = 1);


    namespace AdCP\MediaBuy;



    use PHPModelGenerator\Interfaces\BuilderInterface;

    use PHPModelGenerator\Exception\ErrorRegistryException;


/**
 * Builder class for GetProductsRequest_PaginationRequest
 */
class GetProductsRequest_PaginationRequestBuilder implements BuilderInterface
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
     * Set up a new instance of GetProductsRequest_PaginationRequest with fully validated properties
     */
    public function validate(): GetProductsRequest_PaginationRequest
    {
        $this->_array_walk_recursive_real(
            $this->_rawModelDataInput,
            function (&$property): void {
                if ($property instanceof BuilderInterface) {
                    $property = $property->getRawModelDataInput();
                }
            },
        );

        return new GetProductsRequest_PaginationRequest($this->_rawModelDataInput);
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
             * Get the value of max_results.
             *
             * Maximum number of items to return per page
             *
             * @return int|null
             */
            public function getMaxResults(): ?int
            {
                return $this->_rawModelDataInput['max_results'] ?? null;
            }

            /**
             * Set the value of max_results.
             *
             * @param int $maxResults Maximum number of items to return per page
             *
             * {@link GetProductsRequest_PaginationRequest::processMaxResults}
             * 
             *
             * @return static
             */
            public function setMaxResults(
                int $maxResults
            ): static {
                if (array_key_exists('max_results', $this->_rawModelDataInput)
                    && $this->_rawModelDataInput['max_results'] === $maxResults
                ) {
                    return $this;
                }

                $value = $modelData['max_results'] = $maxResults;

                

                

                $this->_rawModelDataInput['max_results'] = $value;

                return $this;
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
                return $this->_rawModelDataInput['cursor'] ?? null;
            }

            /**
             * Set the value of cursor.
             *
             * @param string $cursor Opaque cursor from a previous response to fetch the next page
             *
             * {@link GetProductsRequest_PaginationRequest::processCursor}
             * 
             *
             * @return static
             */
            public function setCursor(
                string $cursor
            ): static {
                if (array_key_exists('cursor', $this->_rawModelDataInput)
                    && $this->_rawModelDataInput['cursor'] === $cursor
                ) {
                    return $this;
                }

                $value = $modelData['cursor'] = $cursor;

                

                

                $this->_rawModelDataInput['cursor'] = $value;

                return $this;
            }
        
    
}

// @codeCoverageIgnoreEnd
