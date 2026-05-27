<?php

// @codingStandardsIgnoreFile
// @codeCoverageIgnoreStart

declare(strict_types = 1);


    namespace AdCP\MediaBuy;



    use PHPModelGenerator\Interfaces\BuilderInterface;

    use PHPModelGenerator\Exception\ErrorRegistryException;


/**
 * Builder class for GetMediaBuysResponse_GetMediaBuysResponse_Data_Subject_Contestation6ce85a378238546858b122363ebca0788e14c97c9beaed8b96c9902df29ab5cb
 */
class GetMediaBuysResponse_GetMediaBuysResponse_Data_Subject_Contestation6ce85a378238546858b122363ebca0788e14c97c9beaed8b96c9902df29ab5cbBuilder implements BuilderInterface
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
     * Set up a new instance of GetMediaBuysResponse_GetMediaBuysResponse_Data_Subject_Contestation6ce85a378238546858b122363ebca0788e14c97c9beaed8b96c9902df29ab5cb with fully validated properties
     */
    public function validate(): GetMediaBuysResponse_GetMediaBuysResponse_Data_Subject_Contestation6ce85a378238546858b122363ebca0788e14c97c9beaed8b96c9902df29ab5cb
    {
        $this->_array_walk_recursive_real(
            $this->_rawModelDataInput,
            function (&$property): void {
                if ($property instanceof BuilderInterface) {
                    $property = $property->getRawModelDataInput();
                }
            },
        );

        return new GetMediaBuysResponse_GetMediaBuysResponse_Data_Subject_Contestation6ce85a378238546858b122363ebca0788e14c97c9beaed8b96c9902df29ab5cb($this->_rawModelDataInput);
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
             * Get the value of url.
             *
             * 
             *
             * @return mixed
             */
            public function getUrl(): mixed
            {
                return $this->_rawModelDataInput['url'] ?? null;
            }

            /**
             * Set the value of url.
             *
             * @param mixed $url
             *
             * {@link GetMediaBuysResponse_GetMediaBuysResponse_Data_Subject_Contestation6ce85a378238546858b122363ebca0788e14c97c9beaed8b96c9902df29ab5cb::processUrl}
             * 
             *
             * @return static
             */
            public function setUrl(
                mixed $url
            ): static {
                if (array_key_exists('url', $this->_rawModelDataInput)
                    && $this->_rawModelDataInput['url'] === $url
                ) {
                    return $this;
                }

                $value = $modelData['url'] = $url;

                

                

                $this->_rawModelDataInput['url'] = $value;

                return $this;
            }
        
    
}

// @codeCoverageIgnoreEnd
