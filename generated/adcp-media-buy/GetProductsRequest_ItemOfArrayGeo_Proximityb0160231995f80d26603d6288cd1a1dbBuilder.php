<?php

// @codingStandardsIgnoreFile
// @codeCoverageIgnoreStart

declare(strict_types = 1);


    namespace AdCP\MediaBuy;



    use PHPModelGenerator\Interfaces\BuilderInterface;

    use PHPModelGenerator\Exception\ErrorRegistryException;

    use AdCP\MediaBuy\Enums\TransportMode;


/**
 * Builder class for GetProductsRequest_ItemOfArrayGeo_Proximityb0160231995f80d26603d6288cd1a1db
 */
class GetProductsRequest_ItemOfArrayGeo_Proximityb0160231995f80d26603d6288cd1a1dbBuilder implements BuilderInterface
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
     * Set up a new instance of GetProductsRequest_ItemOfArrayGeo_Proximityb0160231995f80d26603d6288cd1a1db with fully validated properties
     */
    public function validate(): GetProductsRequest_ItemOfArrayGeo_Proximityb0160231995f80d26603d6288cd1a1db
    {
        $this->_array_walk_recursive_real(
            $this->_rawModelDataInput,
            function (&$property): void {
                if ($property instanceof BuilderInterface) {
                    $property = $property->getRawModelDataInput();
                }
            },
        );

        return new GetProductsRequest_ItemOfArrayGeo_Proximityb0160231995f80d26603d6288cd1a1db($this->_rawModelDataInput);
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
             * Latitude in decimal degrees (WGS 84)
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
             * @param float $lat Latitude in decimal degrees (WGS 84)
             *
             * {@link GetProductsRequest_ItemOfArrayGeo_Proximityb0160231995f80d26603d6288cd1a1db::processLat}
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
             * Longitude in decimal degrees (WGS 84)
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
             * @param float $lng Longitude in decimal degrees (WGS 84)
             *
             * {@link GetProductsRequest_ItemOfArrayGeo_Proximityb0160231995f80d26603d6288cd1a1db::processLng}
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
             * Human-readable label (e.g., 'Düsseldorf', 'Heathrow Airport')
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
             * @param string $label Human-readable label (e.g., 'Düsseldorf', 'Heathrow Airport')
             *
             * {@link GetProductsRequest_ItemOfArrayGeo_Proximityb0160231995f80d26603d6288cd1a1db::processLabel}
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
             * Travel time limit for isochrone calculation
             *
             * @return GetProductsRequest_Travel_Time5468c3847cd002d185e0f8b767a586bb|GetProductsRequest_Travel_Time5468c3847cd002d185e0f8b767a586bbBuilder|array|null
             */
            public function getTravelTime(): mixed
            {
                return $this->_rawModelDataInput['travel_time'] ?? null;
            }

            /**
             * Set the value of travel_time.
             *
             * @param GetProductsRequest_Travel_Time5468c3847cd002d185e0f8b767a586bb|GetProductsRequest_Travel_Time5468c3847cd002d185e0f8b767a586bbBuilder|array $travelTime Travel time limit for isochrone calculation
             *
             * {@link GetProductsRequest_ItemOfArrayGeo_Proximityb0160231995f80d26603d6288cd1a1db::processTravelTime}
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
             * {@link GetProductsRequest_ItemOfArrayGeo_Proximityb0160231995f80d26603d6288cd1a1db::processTransportMode}
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
             * Simple radius from the point
             *
             * @return GetProductsRequest_Radiusb182478eefde64e29e45fea14280af83|GetProductsRequest_Radiusb182478eefde64e29e45fea14280af83Builder|array|null
             */
            public function getRadius(): mixed
            {
                return $this->_rawModelDataInput['radius'] ?? null;
            }

            /**
             * Set the value of radius.
             *
             * @param GetProductsRequest_Radiusb182478eefde64e29e45fea14280af83|GetProductsRequest_Radiusb182478eefde64e29e45fea14280af83Builder|array $radius Simple radius from the point
             *
             * {@link GetProductsRequest_ItemOfArrayGeo_Proximityb0160231995f80d26603d6288cd1a1db::processRadius}
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
             * Pre-computed GeoJSON geometry defining the proximity boundary
             *
             * @return GetProductsRequest_Geometry89c19613b4b641142039d1a7df56f98a|GetProductsRequest_Geometry89c19613b4b641142039d1a7df56f98aBuilder|array|null
             */
            public function getGeometry(): mixed
            {
                return $this->_rawModelDataInput['geometry'] ?? null;
            }

            /**
             * Set the value of geometry.
             *
             * @param GetProductsRequest_Geometry89c19613b4b641142039d1a7df56f98a|GetProductsRequest_Geometry89c19613b4b641142039d1a7df56f98aBuilder|array $geometry Pre-computed GeoJSON geometry defining the proximity boundary
             *
             * {@link GetProductsRequest_ItemOfArrayGeo_Proximityb0160231995f80d26603d6288cd1a1db::processGeometry}
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
