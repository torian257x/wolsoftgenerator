<?php

// @codingStandardsIgnoreFile
// @codeCoverageIgnoreStart

declare(strict_types = 1);


    namespace AdCP\MediaBuy;



    use PHPModelGenerator\Interfaces\BuilderInterface;

    use PHPModelGenerator\Exception\ErrorRegistryException;


/**
 * Builder class for GetMediaBuysResponse_PaginationResponse
 */
class GetMediaBuysResponse_PaginationResponseBuilder implements BuilderInterface
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
     * Set up a new instance of GetMediaBuysResponse_PaginationResponse with fully validated properties
     */
    public function validate(): GetMediaBuysResponse_PaginationResponse
    {
        $this->_array_walk_recursive_real(
            $this->_rawModelDataInput,
            function (&$property): void {
                if ($property instanceof BuilderInterface) {
                    $property = $property->getRawModelDataInput();
                }
            },
        );

        return new GetMediaBuysResponse_PaginationResponse($this->_rawModelDataInput);
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
             * Get the value of has_more.
             *
             * Whether more results are available beyond this page
             *
             * @return bool|null
             */
            public function getHasMore(): ?bool
            {
                return $this->_rawModelDataInput['has_more'] ?? null;
            }

            /**
             * Set the value of has_more.
             *
             * @param bool $hasMore Whether more results are available beyond this page
             *
             * {@link GetMediaBuysResponse_PaginationResponse::processHasMore}
             * 
             *
             * @return static
             */
            public function setHasMore(
                bool $hasMore
            ): static {
                if (array_key_exists('has_more', $this->_rawModelDataInput)
                    && $this->_rawModelDataInput['has_more'] === $hasMore
                ) {
                    return $this;
                }

                $value = $modelData['has_more'] = $hasMore;

                

                

                $this->_rawModelDataInput['has_more'] = $value;

                return $this;
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
                return $this->_rawModelDataInput['cursor'] ?? null;
            }

            /**
             * Set the value of cursor.
             *
             * @param string $cursor Opaque cursor to pass in the next request to fetch the next page. Only present when has_more is true.
             *
             * {@link GetMediaBuysResponse_PaginationResponse::processCursor}
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
        
    
        
            /**
             * Get the value of total_count.
             *
             * Total number of items matching the query across all pages. Optional because not all backends can efficiently compute this.
             *
             * @return int|null
             */
            public function getTotalCount(): ?int
            {
                return $this->_rawModelDataInput['total_count'] ?? null;
            }

            /**
             * Set the value of total_count.
             *
             * @param int $totalCount Total number of items matching the query across all pages. Optional because not all backends can efficiently compute this.
             *
             * {@link GetMediaBuysResponse_PaginationResponse::processTotalCount}
             * 
             *
             * @return static
             */
            public function setTotalCount(
                int $totalCount
            ): static {
                if (array_key_exists('total_count', $this->_rawModelDataInput)
                    && $this->_rawModelDataInput['total_count'] === $totalCount
                ) {
                    return $this;
                }

                $value = $modelData['total_count'] = $totalCount;

                

                

                $this->_rawModelDataInput['total_count'] = $value;

                return $this;
            }
        
    
}

// @codeCoverageIgnoreEnd
