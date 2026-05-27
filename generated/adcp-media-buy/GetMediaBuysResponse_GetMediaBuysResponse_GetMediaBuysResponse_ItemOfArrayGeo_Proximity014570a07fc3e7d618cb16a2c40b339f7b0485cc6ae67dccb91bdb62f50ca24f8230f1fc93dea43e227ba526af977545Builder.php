<?php

// @codingStandardsIgnoreFile
// @codeCoverageIgnoreStart

declare(strict_types = 1);


    namespace AdCP\MediaBuy;



    use PHPModelGenerator\Interfaces\BuilderInterface;

    use PHPModelGenerator\Exception\ErrorRegistryException;


/**
 * Builder class for GetMediaBuysResponse_GetMediaBuysResponse_GetMediaBuysResponse_ItemOfArrayGeo_Proximity014570a07fc3e7d618cb16a2c40b339f7b0485cc6ae67dccb91bdb62f50ca24f8230f1fc93dea43e227ba526af977545
 */
class GetMediaBuysResponse_GetMediaBuysResponse_GetMediaBuysResponse_ItemOfArrayGeo_Proximity014570a07fc3e7d618cb16a2c40b339f7b0485cc6ae67dccb91bdb62f50ca24f8230f1fc93dea43e227ba526af977545Builder implements BuilderInterface
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
     * Set up a new instance of GetMediaBuysResponse_GetMediaBuysResponse_GetMediaBuysResponse_ItemOfArrayGeo_Proximity014570a07fc3e7d618cb16a2c40b339f7b0485cc6ae67dccb91bdb62f50ca24f8230f1fc93dea43e227ba526af977545 with fully validated properties
     */
    public function validate(): GetMediaBuysResponse_GetMediaBuysResponse_GetMediaBuysResponse_ItemOfArrayGeo_Proximity014570a07fc3e7d618cb16a2c40b339f7b0485cc6ae67dccb91bdb62f50ca24f8230f1fc93dea43e227ba526af977545
    {
        $this->_array_walk_recursive_real(
            $this->_rawModelDataInput,
            function (&$property): void {
                if ($property instanceof BuilderInterface) {
                    $property = $property->getRawModelDataInput();
                }
            },
        );

        return new GetMediaBuysResponse_GetMediaBuysResponse_GetMediaBuysResponse_ItemOfArrayGeo_Proximity014570a07fc3e7d618cb16a2c40b339f7b0485cc6ae67dccb91bdb62f50ca24f8230f1fc93dea43e227ba526af977545($this->_rawModelDataInput);
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
             * {@link GetMediaBuysResponse_GetMediaBuysResponse_GetMediaBuysResponse_ItemOfArrayGeo_Proximity014570a07fc3e7d618cb16a2c40b339f7b0485cc6ae67dccb91bdb62f50ca24f8230f1fc93dea43e227ba526af977545::processRadius}
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
        
    
        
            /**
             * Get the value of geometry.
             *
             * 
             *
             * @return mixed
             */
            public function getGeometry(): mixed
            {
                return $this->_rawModelDataInput['geometry'] ?? null;
            }

            /**
             * Set the value of geometry.
             *
             * @param mixed $geometry
             *
             * {@link GetMediaBuysResponse_GetMediaBuysResponse_GetMediaBuysResponse_ItemOfArrayGeo_Proximity014570a07fc3e7d618cb16a2c40b339f7b0485cc6ae67dccb91bdb62f50ca24f8230f1fc93dea43e227ba526af977545::processGeometry}
             * 
             *
             * @return static
             */
            public function setGeometry(
                mixed $geometry
            ): static {
                if (array_key_exists('geometry', $this->_rawModelDataInput)
                    && $this->_rawModelDataInput['geometry'] === $geometry
                ) {
                    return $this;
                }

                $value = $modelData['geometry'] = $geometry;

                

                

                $this->_rawModelDataInput['geometry'] = $value;

                return $this;
            }
        
    
}

// @codeCoverageIgnoreEnd
