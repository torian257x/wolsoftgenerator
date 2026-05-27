<?php

// @codingStandardsIgnoreFile
// @codeCoverageIgnoreStart

declare(strict_types = 1);


    namespace AdCP\MediaBuy;



    use PHPModelGenerator\Interfaces\BuilderInterface;

    use PHPModelGenerator\Exception\ErrorRegistryException;


/**
 * Builder class for GetMediaBuysResponse_GetMediaBuysResponse_GetMediaBuysResponse_ItemOfArrayGeo_Proximity014570a07fc3e7d618cb16a2c40b339fd281a22176f1113bb22e496c1989af5f29f078ca886f318f71963ae6dce6cebf
 */
class GetMediaBuysResponse_GetMediaBuysResponse_GetMediaBuysResponse_ItemOfArrayGeo_Proximity014570a07fc3e7d618cb16a2c40b339fd281a22176f1113bb22e496c1989af5f29f078ca886f318f71963ae6dce6cebfBuilder implements BuilderInterface
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
     * Set up a new instance of GetMediaBuysResponse_GetMediaBuysResponse_GetMediaBuysResponse_ItemOfArrayGeo_Proximity014570a07fc3e7d618cb16a2c40b339fd281a22176f1113bb22e496c1989af5f29f078ca886f318f71963ae6dce6cebf with fully validated properties
     */
    public function validate(): GetMediaBuysResponse_GetMediaBuysResponse_GetMediaBuysResponse_ItemOfArrayGeo_Proximity014570a07fc3e7d618cb16a2c40b339fd281a22176f1113bb22e496c1989af5f29f078ca886f318f71963ae6dce6cebf
    {
        $this->_array_walk_recursive_real(
            $this->_rawModelDataInput,
            function (&$property): void {
                if ($property instanceof BuilderInterface) {
                    $property = $property->getRawModelDataInput();
                }
            },
        );

        return new GetMediaBuysResponse_GetMediaBuysResponse_GetMediaBuysResponse_ItemOfArrayGeo_Proximity014570a07fc3e7d618cb16a2c40b339fd281a22176f1113bb22e496c1989af5f29f078ca886f318f71963ae6dce6cebf($this->_rawModelDataInput);
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
             * {@link GetMediaBuysResponse_GetMediaBuysResponse_GetMediaBuysResponse_ItemOfArrayGeo_Proximity014570a07fc3e7d618cb16a2c40b339fd281a22176f1113bb22e496c1989af5f29f078ca886f318f71963ae6dce6cebf::processTravelTime}
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
        
    
        
            /**
             * Get the value of radius.
             *
             * 
             *
             * @return mixed
             */
            public function getRadius(): mixed
            {
                return $this->_rawModelDataInput['radius'] ?? null;
            }

            /**
             * Set the value of radius.
             *
             * @param mixed $radius
             *
             * {@link GetMediaBuysResponse_GetMediaBuysResponse_GetMediaBuysResponse_ItemOfArrayGeo_Proximity014570a07fc3e7d618cb16a2c40b339fd281a22176f1113bb22e496c1989af5f29f078ca886f318f71963ae6dce6cebf::processRadius}
             * 
             *
             * @return static
             */
            public function setRadius(
                mixed $radius
            ): static {
                if (array_key_exists('radius', $this->_rawModelDataInput)
                    && $this->_rawModelDataInput['radius'] === $radius
                ) {
                    return $this;
                }

                $value = $modelData['radius'] = $radius;

                

                

                $this->_rawModelDataInput['radius'] = $value;

                return $this;
            }
        
    
}

// @codeCoverageIgnoreEnd
