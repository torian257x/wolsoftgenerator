<?php

// @codingStandardsIgnoreFile
// @codeCoverageIgnoreStart

declare(strict_types = 1);


    namespace AdCP\MediaBuy;



    use PHPModelGenerator\Interfaces\BuilderInterface;

    use PHPModelGenerator\Exception\ErrorRegistryException;


/**
 * Builder class for GetMediaBuyDeliveryRequest_Reporting_Dimensions7c4f0163bf4d11d5c1a1fd493980b6cb
 */
class GetMediaBuyDeliveryRequest_Reporting_Dimensions7c4f0163bf4d11d5c1a1fd493980b6cbBuilder implements BuilderInterface
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
     * Set up a new instance of GetMediaBuyDeliveryRequest_Reporting_Dimensions7c4f0163bf4d11d5c1a1fd493980b6cb with fully validated properties
     */
    public function validate(): GetMediaBuyDeliveryRequest_Reporting_Dimensions7c4f0163bf4d11d5c1a1fd493980b6cb
    {
        $this->_array_walk_recursive_real(
            $this->_rawModelDataInput,
            function (&$property): void {
                if ($property instanceof BuilderInterface) {
                    $property = $property->getRawModelDataInput();
                }
            },
        );

        return new GetMediaBuyDeliveryRequest_Reporting_Dimensions7c4f0163bf4d11d5c1a1fd493980b6cb($this->_rawModelDataInput);
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
             * Get the value of geo.
             *
             * Request geographic breakdown. Check reporting_capabilities.supports_geo_breakdown for available levels and systems.
             *
             * @return GetMediaBuyDeliveryRequest_Geo180e7041b8a6f1e027269e9aa3ad91c2|GetMediaBuyDeliveryRequest_Geo180e7041b8a6f1e027269e9aa3ad91c2Builder|array|null
             */
            public function getGeo(): mixed
            {
                return $this->_rawModelDataInput['geo'] ?? null;
            }

            /**
             * Set the value of geo.
             *
             * @param GetMediaBuyDeliveryRequest_Geo180e7041b8a6f1e027269e9aa3ad91c2|GetMediaBuyDeliveryRequest_Geo180e7041b8a6f1e027269e9aa3ad91c2Builder|array $geo Request geographic breakdown. Check reporting_capabilities.supports_geo_breakdown for available levels and systems.
             *
             * {@link GetMediaBuyDeliveryRequest_Reporting_Dimensions7c4f0163bf4d11d5c1a1fd493980b6cb::processGeo}
             * 
             *
             * @return static
             */
            public function setGeo(
                mixed $geo
            ): static {
                if (array_key_exists('geo', $this->_rawModelDataInput)
                    && $this->_rawModelDataInput['geo'] === $geo
                ) {
                    return $this;
                }

                $value = $modelData['geo'] = $geo;

                

                

                $this->_rawModelDataInput['geo'] = $value;

                return $this;
            }
        
    
        
            /**
             * Get the value of device_type.
             *
             * Request device type breakdown.
             *
             * @return GetMediaBuyDeliveryRequest_Device_Typecec5fc3cc49e91951e025e419dc689e4|GetMediaBuyDeliveryRequest_Device_Typecec5fc3cc49e91951e025e419dc689e4Builder|array|null
             */
            public function getDeviceType(): mixed
            {
                return $this->_rawModelDataInput['device_type'] ?? null;
            }

            /**
             * Set the value of device_type.
             *
             * @param GetMediaBuyDeliveryRequest_Device_Typecec5fc3cc49e91951e025e419dc689e4|GetMediaBuyDeliveryRequest_Device_Typecec5fc3cc49e91951e025e419dc689e4Builder|array $deviceType Request device type breakdown.
             *
             * {@link GetMediaBuyDeliveryRequest_Reporting_Dimensions7c4f0163bf4d11d5c1a1fd493980b6cb::processDeviceType}
             * 
             *
             * @return static
             */
            public function setDeviceType(
                mixed $deviceType
            ): static {
                if (array_key_exists('device_type', $this->_rawModelDataInput)
                    && $this->_rawModelDataInput['device_type'] === $deviceType
                ) {
                    return $this;
                }

                $value = $modelData['device_type'] = $deviceType;

                

                

                $this->_rawModelDataInput['device_type'] = $value;

                return $this;
            }
        
    
        
            /**
             * Get the value of device_platform.
             *
             * Request device platform breakdown.
             *
             * @return GetMediaBuyDeliveryRequest_Device_Typecec5fc3cc49e91951e025e419dc689e4|GetMediaBuyDeliveryRequest_Device_Typecec5fc3cc49e91951e025e419dc689e4Builder|array|null
             */
            public function getDevicePlatform(): mixed
            {
                return $this->_rawModelDataInput['device_platform'] ?? null;
            }

            /**
             * Set the value of device_platform.
             *
             * @param GetMediaBuyDeliveryRequest_Device_Typecec5fc3cc49e91951e025e419dc689e4|GetMediaBuyDeliveryRequest_Device_Typecec5fc3cc49e91951e025e419dc689e4Builder|array $devicePlatform Request device platform breakdown.
             *
             * {@link GetMediaBuyDeliveryRequest_Reporting_Dimensions7c4f0163bf4d11d5c1a1fd493980b6cb::processDevicePlatform}
             * 
             *
             * @return static
             */
            public function setDevicePlatform(
                mixed $devicePlatform
            ): static {
                if (array_key_exists('device_platform', $this->_rawModelDataInput)
                    && $this->_rawModelDataInput['device_platform'] === $devicePlatform
                ) {
                    return $this;
                }

                $value = $modelData['device_platform'] = $devicePlatform;

                

                

                $this->_rawModelDataInput['device_platform'] = $value;

                return $this;
            }
        
    
        
            /**
             * Get the value of audience.
             *
             * Request audience segment breakdown.
             *
             * @return GetMediaBuyDeliveryRequest_Audienceb74ab1a9578935027e487e0c94dde617|GetMediaBuyDeliveryRequest_Audienceb74ab1a9578935027e487e0c94dde617Builder|array|null
             */
            public function getAudience(): mixed
            {
                return $this->_rawModelDataInput['audience'] ?? null;
            }

            /**
             * Set the value of audience.
             *
             * @param GetMediaBuyDeliveryRequest_Audienceb74ab1a9578935027e487e0c94dde617|GetMediaBuyDeliveryRequest_Audienceb74ab1a9578935027e487e0c94dde617Builder|array $audience Request audience segment breakdown.
             *
             * {@link GetMediaBuyDeliveryRequest_Reporting_Dimensions7c4f0163bf4d11d5c1a1fd493980b6cb::processAudience}
             * 
             *
             * @return static
             */
            public function setAudience(
                mixed $audience
            ): static {
                if (array_key_exists('audience', $this->_rawModelDataInput)
                    && $this->_rawModelDataInput['audience'] === $audience
                ) {
                    return $this;
                }

                $value = $modelData['audience'] = $audience;

                

                

                $this->_rawModelDataInput['audience'] = $value;

                return $this;
            }
        
    
        
            /**
             * Get the value of placement.
             *
             * Request placement breakdown.
             *
             * @return GetMediaBuyDeliveryRequest_Audienceb74ab1a9578935027e487e0c94dde617|GetMediaBuyDeliveryRequest_Audienceb74ab1a9578935027e487e0c94dde617Builder|array|null
             */
            public function getPlacement(): mixed
            {
                return $this->_rawModelDataInput['placement'] ?? null;
            }

            /**
             * Set the value of placement.
             *
             * @param GetMediaBuyDeliveryRequest_Audienceb74ab1a9578935027e487e0c94dde617|GetMediaBuyDeliveryRequest_Audienceb74ab1a9578935027e487e0c94dde617Builder|array $placement Request placement breakdown.
             *
             * {@link GetMediaBuyDeliveryRequest_Reporting_Dimensions7c4f0163bf4d11d5c1a1fd493980b6cb::processPlacement}
             * 
             *
             * @return static
             */
            public function setPlacement(
                mixed $placement
            ): static {
                if (array_key_exists('placement', $this->_rawModelDataInput)
                    && $this->_rawModelDataInput['placement'] === $placement
                ) {
                    return $this;
                }

                $value = $modelData['placement'] = $placement;

                

                

                $this->_rawModelDataInput['placement'] = $value;

                return $this;
            }
        
    
}

// @codeCoverageIgnoreEnd
