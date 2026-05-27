<?php

// @codingStandardsIgnoreFile
// @codeCoverageIgnoreStart

declare(strict_types = 1);


    namespace AdCP\MediaBuy;



    use PHPModelGenerator\Interfaces\BuilderInterface;

    use PHPModelGenerator\Exception\ErrorRegistryException;

    use AdCP\MediaBuy\Enums\TransportMode;


/**
 * Builder class for GetMediaBuysResponse_ItemOfArrayGeo_Proximity014570a07fc3e7d618cb16a2c40b339f
 */
class GetMediaBuysResponse_ItemOfArrayGeo_Proximity014570a07fc3e7d618cb16a2c40b339fBuilder implements BuilderInterface
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
     * Set up a new instance of GetMediaBuysResponse_ItemOfArrayGeo_Proximity014570a07fc3e7d618cb16a2c40b339f with fully validated properties
     */
    public function validate(): GetMediaBuysResponse_ItemOfArrayGeo_Proximity014570a07fc3e7d618cb16a2c40b339f
    {
        $this->_array_walk_recursive_real(
            $this->_rawModelDataInput,
            function (&$property): void {
                if ($property instanceof BuilderInterface) {
                    $property = $property->getRawModelDataInput();
                }
            },
        );

        return new GetMediaBuysResponse_ItemOfArrayGeo_Proximity014570a07fc3e7d618cb16a2c40b339f($this->_rawModelDataInput);
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
             * Get the value of lat.
             *
             * Latitude in decimal degrees (WGS 84). Required for travel_time and radius methods.
             *
             * @return float|null
             */
            public function getLat(): ?float
            {
                return $this->_rawModelDataInput['lat'] ?? null;
            }

            /**
             * Set the value of lat.
             *
             * @param float $lat Latitude in decimal degrees (WGS 84). Required for travel_time and radius methods.
             *
             * {@link GetMediaBuysResponse_ItemOfArrayGeo_Proximity014570a07fc3e7d618cb16a2c40b339f::processLat}
             * 
             *
             * @return static
             */
            public function setLat(
                float $lat
            ): static {
                if (array_key_exists('lat', $this->_rawModelDataInput)
                    && $this->_rawModelDataInput['lat'] === $lat
                ) {
                    return $this;
                }

                $value = $modelData['lat'] = $lat;

                

                

                $this->_rawModelDataInput['lat'] = $value;

                return $this;
            }
        
    
        
            /**
             * Get the value of lng.
             *
             * Longitude in decimal degrees (WGS 84). Required for travel_time and radius methods.
             *
             * @return float|null
             */
            public function getLng(): ?float
            {
                return $this->_rawModelDataInput['lng'] ?? null;
            }

            /**
             * Set the value of lng.
             *
             * @param float $lng Longitude in decimal degrees (WGS 84). Required for travel_time and radius methods.
             *
             * {@link GetMediaBuysResponse_ItemOfArrayGeo_Proximity014570a07fc3e7d618cb16a2c40b339f::processLng}
             * 
             *
             * @return static
             */
            public function setLng(
                float $lng
            ): static {
                if (array_key_exists('lng', $this->_rawModelDataInput)
                    && $this->_rawModelDataInput['lng'] === $lng
                ) {
                    return $this;
                }

                $value = $modelData['lng'] = $lng;

                

                

                $this->_rawModelDataInput['lng'] = $value;

                return $this;
            }
        
    
        
            /**
             * Get the value of label.
             *
             * Human-readable label for this entry (e.g., 'Düsseldorf', 'Heathrow Airport', 'Primary trade area').
             *
             * @return string|null
             */
            public function getLabel(): ?string
            {
                return $this->_rawModelDataInput['label'] ?? null;
            }

            /**
             * Set the value of label.
             *
             * @param string $label Human-readable label for this entry (e.g., 'Düsseldorf', 'Heathrow Airport', 'Primary trade area').
             *
             * {@link GetMediaBuysResponse_ItemOfArrayGeo_Proximity014570a07fc3e7d618cb16a2c40b339f::processLabel}
             * 
             *
             * @return static
             */
            public function setLabel(
                string $label
            ): static {
                if (array_key_exists('label', $this->_rawModelDataInput)
                    && $this->_rawModelDataInput['label'] === $label
                ) {
                    return $this;
                }

                $value = $modelData['label'] = $label;

                

                

                $this->_rawModelDataInput['label'] = $value;

                return $this;
            }
        
    
        
            /**
             * Get the value of travel_time.
             *
             * Travel time limit for isochrone calculation. The platform resolves this to a geographic boundary based on actual transportation networks.
             *
             * @return GetMediaBuysResponse_Travel_Time98d257bd606b10a40e852755129155fe|GetMediaBuysResponse_Travel_Time98d257bd606b10a40e852755129155feBuilder|array|null
             */
            public function getTravelTime(): mixed
            {
                return $this->_rawModelDataInput['travel_time'] ?? null;
            }

            /**
             * Set the value of travel_time.
             *
             * @param GetMediaBuysResponse_Travel_Time98d257bd606b10a40e852755129155fe|GetMediaBuysResponse_Travel_Time98d257bd606b10a40e852755129155feBuilder|array $travelTime Travel time limit for isochrone calculation. The platform resolves this to a geographic boundary based on actual transportation networks.
             *
             * {@link GetMediaBuysResponse_ItemOfArrayGeo_Proximity014570a07fc3e7d618cb16a2c40b339f::processTravelTime}
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
             * Get the value of transport_mode.
             *
             * Transportation mode for isochrone calculation. Required when travel_time is provided.
             *
             * @return string|TransportMode|null
             */
            public function getTransportMode(): string | TransportMode | null
            {
                return $this->_rawModelDataInput['transport_mode'] ?? null;
            }

            /**
             * Set the value of transport_mode.
             *
             * @param string|TransportMode|null $transportMode Transportation mode for isochrone calculation. Required when travel_time is provided.
             *
             * {@link GetMediaBuysResponse_ItemOfArrayGeo_Proximity014570a07fc3e7d618cb16a2c40b339f::processTransportMode}
             * 
             *
             * @return static
             */
            public function setTransportMode(
                string | TransportMode | null $transportMode
            ): static {
                if (array_key_exists('transport_mode', $this->_rawModelDataInput)
                    && $this->_rawModelDataInput['transport_mode'] === $transportMode
                ) {
                    return $this;
                }

                $value = $modelData['transport_mode'] = $transportMode;

                

                

                $this->_rawModelDataInput['transport_mode'] = $value;

                return $this;
            }
        
    
        
            /**
             * Get the value of radius.
             *
             * Simple radius from the point. The platform draws a circle of this distance around the coordinates.
             *
             * @return GetMediaBuysResponse_Radiuse8c9b5a7f3551f1231e0f89f1ef25e41|GetMediaBuysResponse_Radiuse8c9b5a7f3551f1231e0f89f1ef25e41Builder|array|null
             */
            public function getRadius(): mixed
            {
                return $this->_rawModelDataInput['radius'] ?? null;
            }

            /**
             * Set the value of radius.
             *
             * @param GetMediaBuysResponse_Radiuse8c9b5a7f3551f1231e0f89f1ef25e41|GetMediaBuysResponse_Radiuse8c9b5a7f3551f1231e0f89f1ef25e41Builder|array $radius Simple radius from the point. The platform draws a circle of this distance around the coordinates.
             *
             * {@link GetMediaBuysResponse_ItemOfArrayGeo_Proximity014570a07fc3e7d618cb16a2c40b339f::processRadius}
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
             * Pre-computed GeoJSON geometry defining the proximity boundary. Use when the buyer has already calculated isochrones (via TravelTime, Mapbox, etc.) or has custom boundaries. When geometry is provided, lat/lng are not required.
             *
             * @return GetMediaBuysResponse_Geometryd672d0526b0b5b3b9be11e6e707345f0|GetMediaBuysResponse_Geometryd672d0526b0b5b3b9be11e6e707345f0Builder|array|null
             */
            public function getGeometry(): mixed
            {
                return $this->_rawModelDataInput['geometry'] ?? null;
            }

            /**
             * Set the value of geometry.
             *
             * @param GetMediaBuysResponse_Geometryd672d0526b0b5b3b9be11e6e707345f0|GetMediaBuysResponse_Geometryd672d0526b0b5b3b9be11e6e707345f0Builder|array $geometry Pre-computed GeoJSON geometry defining the proximity boundary. Use when the buyer has already calculated isochrones (via TravelTime, Mapbox, etc.) or has custom boundaries. When geometry is provided, lat/lng are not required.
             *
             * {@link GetMediaBuysResponse_ItemOfArrayGeo_Proximity014570a07fc3e7d618cb16a2c40b339f::processGeometry}
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
        
    
        
            /**
             * Get the value of ext.
             *
             * Extension object for platform-specific, vendor-namespaced parameters. Extensions are always optional and must be namespaced under a vendor/platform key (e.g., ext.gam, ext.roku). Used for custom capabilities, partner-specific configuration, and features being proposed for standardization.
             *
             * @return GetMediaBuysResponse_ExtensionObject|GetMediaBuysResponse_ExtensionObjectBuilder|array|null
             */
            public function getExt(): mixed
            {
                return $this->_rawModelDataInput['ext'] ?? null;
            }

            /**
             * Set the value of ext.
             *
             * @param GetMediaBuysResponse_ExtensionObject|GetMediaBuysResponse_ExtensionObjectBuilder|array $ext Extension object for platform-specific, vendor-namespaced parameters. Extensions are always optional and must be namespaced under a vendor/platform key (e.g., ext.gam, ext.roku). Used for custom capabilities, partner-specific configuration, and features being proposed for standardization.
             *
             * {@link GetMediaBuysResponse_ItemOfArrayGeo_Proximity014570a07fc3e7d618cb16a2c40b339f::processExt}
             * 
             *
             * @return static
             */
            public function setExt(
                mixed $ext
            ): static {
                if (array_key_exists('ext', $this->_rawModelDataInput)
                    && $this->_rawModelDataInput['ext'] === $ext
                ) {
                    return $this;
                }

                $value = $modelData['ext'] = $ext;

                

                

                $this->_rawModelDataInput['ext'] = $value;

                return $this;
            }
        
    
}

// @codeCoverageIgnoreEnd
