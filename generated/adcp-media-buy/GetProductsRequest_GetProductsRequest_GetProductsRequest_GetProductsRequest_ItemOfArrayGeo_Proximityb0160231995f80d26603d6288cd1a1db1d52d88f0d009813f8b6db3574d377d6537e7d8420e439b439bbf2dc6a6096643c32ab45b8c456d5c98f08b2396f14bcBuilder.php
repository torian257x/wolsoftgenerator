<?php

// @codingStandardsIgnoreFile
// @codeCoverageIgnoreStart

declare(strict_types = 1);


    namespace AdCP\MediaBuy;



    use PHPModelGenerator\Interfaces\BuilderInterface;

    use PHPModelGenerator\Exception\ErrorRegistryException;


/**
 * Builder class for GetProductsRequest_GetProductsRequest_GetProductsRequest_GetProductsRequest_ItemOfArrayGeo_Proximityb0160231995f80d26603d6288cd1a1db1d52d88f0d009813f8b6db3574d377d6537e7d8420e439b439bbf2dc6a6096643c32ab45b8c456d5c98f08b2396f14bc
 */
class GetProductsRequest_GetProductsRequest_GetProductsRequest_GetProductsRequest_ItemOfArrayGeo_Proximityb0160231995f80d26603d6288cd1a1db1d52d88f0d009813f8b6db3574d377d6537e7d8420e439b439bbf2dc6a6096643c32ab45b8c456d5c98f08b2396f14bcBuilder implements BuilderInterface
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
     * Set up a new instance of GetProductsRequest_GetProductsRequest_GetProductsRequest_GetProductsRequest_ItemOfArrayGeo_Proximityb0160231995f80d26603d6288cd1a1db1d52d88f0d009813f8b6db3574d377d6537e7d8420e439b439bbf2dc6a6096643c32ab45b8c456d5c98f08b2396f14bc with fully validated properties
     */
    public function validate(): GetProductsRequest_GetProductsRequest_GetProductsRequest_GetProductsRequest_ItemOfArrayGeo_Proximityb0160231995f80d26603d6288cd1a1db1d52d88f0d009813f8b6db3574d377d6537e7d8420e439b439bbf2dc6a6096643c32ab45b8c456d5c98f08b2396f14bc
    {
        $this->_array_walk_recursive_real(
            $this->_rawModelDataInput,
            function (&$property): void {
                if ($property instanceof BuilderInterface) {
                    $property = $property->getRawModelDataInput();
                }
            },
        );

        return new GetProductsRequest_GetProductsRequest_GetProductsRequest_GetProductsRequest_ItemOfArrayGeo_Proximityb0160231995f80d26603d6288cd1a1db1d52d88f0d009813f8b6db3574d377d6537e7d8420e439b439bbf2dc6a6096643c32ab45b8c456d5c98f08b2396f14bc($this->_rawModelDataInput);
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
             * Get the value of travel_time.
             *
             * 
             *
             * @return mixed
             */
            public function getTravelTime(): mixed
            {
                return $this->_rawModelDataInput['travel_time'] ?? null;
            }

            /**
             * Set the value of travel_time.
             *
             * @param mixed $travelTime
             *
             * {@link GetProductsRequest_GetProductsRequest_GetProductsRequest_GetProductsRequest_ItemOfArrayGeo_Proximityb0160231995f80d26603d6288cd1a1db1d52d88f0d009813f8b6db3574d377d6537e7d8420e439b439bbf2dc6a6096643c32ab45b8c456d5c98f08b2396f14bc::processTravelTime}
             * 
             *
             * @return static
             */
            public function setTravelTime(
                mixed $travelTime
            ): static {
                if (array_key_exists('travel_time', $this->_rawModelDataInput)
                    && $this->_rawModelDataInput['travel_time'] === $travelTime
                ) {
                    return $this;
                }

                $value = $modelData['travel_time'] = $travelTime;

                

                

                $this->_rawModelDataInput['travel_time'] = $value;

                return $this;
            }
        
    
}

// @codeCoverageIgnoreEnd
