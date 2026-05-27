<?php

// @codingStandardsIgnoreFile
// @codeCoverageIgnoreStart

declare(strict_types = 1);


    namespace AdCP\MediaBuy;



    use PHPModelGenerator\Interfaces\JSONModelInterface;

    use UnitEnum;

    use AdCP\MediaBuy\Enums\TransportMode;

    use PHPModelGenerator\Traits\SerializableTrait;

    use JsonSerializable;

    use PHPModelGenerator\Interfaces\SerializationInterface;

    use AdCP\MediaBuy\Enums\TravelTimeUnit;

    use AdCP\MediaBuy\Enums\DistanceUnit;

    use AdCP\MediaBuy\Enums\GetMediaBuysResponse_Geometryd672d0526b0b5b3b9be11e6e707345f0Type;

    use PHPModelGenerator\Attributes\JsonPointer;

    use PHPModelGenerator\Attributes\SchemaName;

    use PHPModelGenerator\Attributes\Internal;

    use PHPModelGenerator\Exception\ErrorRegistryException;


/**
 * Class GetMediaBuysResponse_ItemOfArrayGeo_Proximity014570a07fc3e7d618cb16a2c40b339f
 * @package AdCP\MediaBuy 
 *

 * This is an auto-implemented class implemented by the php-json-schema-model-generator.
 * If you need to implement something in this class use inheritance. Else you will lose your changes if the classes
 * are re-generated.
 */

#[JsonPointer('/properties/media_buys/items/properties/packages/items/properties/targeting_overlay/properties/geo_proximity/items')]

class GetMediaBuysResponse_ItemOfArrayGeo_Proximity014570a07fc3e7d618cb16a2c40b339f implements JSONModelInterface, JsonSerializable, SerializationInterface
{
    use SerializableTrait;

    
        
            #[JsonPointer('/properties/media_buys/items/properties/packages/items/properties/targeting_overlay/properties/geo_proximity/items/properties/lat')]
        
            #[SchemaName('lat')]
        
        /** @var float|null Latitude in decimal degrees (WGS 84). Required for travel_time and radius methods. */
        protected $lat;
    
        
            #[JsonPointer('/properties/media_buys/items/properties/packages/items/properties/targeting_overlay/properties/geo_proximity/items/properties/lng')]
        
            #[SchemaName('lng')]
        
        /** @var float|null Longitude in decimal degrees (WGS 84). Required for travel_time and radius methods. */
        protected $lng;
    
        
            #[JsonPointer('/properties/media_buys/items/properties/packages/items/properties/targeting_overlay/properties/geo_proximity/items/properties/label')]
        
            #[SchemaName('label')]
        
        /** @var string|null Human-readable label for this entry (e.g., 'Düsseldorf', 'Heathrow Airport', 'Primary trade area'). */
        protected $label;
    
        
            #[JsonPointer('/properties/media_buys/items/properties/packages/items/properties/targeting_overlay/properties/geo_proximity/items/properties/travel_time')]
        
            #[SchemaName('travel_time')]
        
        /** @var GetMediaBuysResponse_Travel_Time98d257bd606b10a40e852755129155fe|null Travel time limit for isochrone calculation. The platform resolves this to a geographic boundary based on actual transportation networks. */
        protected $travelTime;
    
        
            #[JsonPointer('/properties/media_buys/items/properties/packages/items/properties/targeting_overlay/properties/geo_proximity/items/properties/transport_mode')]
        
            #[SchemaName('transport_mode')]
        
        /** @var TransportMode|null Transportation mode for isochrone calculation. Required when travel_time is provided. */
        protected $transportMode;
    
        
            #[JsonPointer('/properties/media_buys/items/properties/packages/items/properties/targeting_overlay/properties/geo_proximity/items/properties/radius')]
        
            #[SchemaName('radius')]
        
        /** @var GetMediaBuysResponse_Radiuse8c9b5a7f3551f1231e0f89f1ef25e41|null Simple radius from the point. The platform draws a circle of this distance around the coordinates. */
        protected $radius;
    
        
            #[JsonPointer('/properties/media_buys/items/properties/packages/items/properties/targeting_overlay/properties/geo_proximity/items/properties/geometry')]
        
            #[SchemaName('geometry')]
        
        /** @var GetMediaBuysResponse_Geometryd672d0526b0b5b3b9be11e6e707345f0|null Pre-computed GeoJSON geometry defining the proximity boundary. Use when the buyer has already calculated isochrones (via TravelTime, Mapbox, etc.) or has custom boundaries. When geometry is provided, lat/lng are not required. */
        protected $geometry;
    
        
            #[JsonPointer('/properties/media_buys/items/properties/packages/items/properties/targeting_overlay/properties/geo_proximity/items/properties/ext')]
        
            #[SchemaName('ext')]
        
        /** @var GetMediaBuysResponse_ExtensionObject|null Extension object for platform-specific, vendor-namespaced parameters. Extensions are always optional and must be namespaced under a vendor/platform key (e.g., ext.gam, ext.roku). Used for custom capabilities, partner-specific configuration, and features being proposed for standardization. */
        protected $ext;
    
        
            #[Internal]
        
        /** @var array Track the internal validation state of composed validations */
        private $_propertyValidationState = array (
  0 => 
  array (
  ),
);
    
        
            #[Internal]
        
        /** @var array Collect all additional properties provided to the schema */
        private $_additionalProperties = array (
);
    
        
            #[Internal]
        
        /** @var array Values which might be skipped for serialization if not provided */
        private $_skipNotProvidedPropertiesMap = array (
  0 => 'lat',
  1 => 'lng',
  2 => 'label',
  3 => 'travel_time',
  4 => 'transport_mode',
  5 => 'radius',
  6 => 'geometry',
  7 => 'ext',
);
    
    #[Internal]
    /** @var array */
    protected $_rawModelDataInput = [];

    
        #[Internal]
        /** @var ErrorRegistryException Collect all validation errors */
        protected $_errorRegistry;
    

    /**
     * GetMediaBuysResponse_ItemOfArrayGeo_Proximity014570a07fc3e7d618cb16a2c40b339f constructor.
     *
     * @param array $rawModelDataInput
     *
     * @throws ErrorRegistryException
     */
    public function __construct(array $rawModelDataInput = [])
    {
        
            $this->_errorRegistry = new ErrorRegistryException();
        

        

        
            $this->executeBaseValidators($rawModelDataInput);
        

        
            
                $this->processLat($rawModelDataInput);
            
        
            
                $this->processLng($rawModelDataInput);
            
        
            
                $this->processLabel($rawModelDataInput);
            
        
            
                $this->processTravelTime($rawModelDataInput);
            
        
            
                $this->processTransportMode($rawModelDataInput);
            
        
            
                $this->processRadius($rawModelDataInput);
            
        
            
                $this->processGeometry($rawModelDataInput);
            
        
            
                $this->processExt($rawModelDataInput);
            
        
            
        
            
        
            
        

        
            if (count($this->_errorRegistry->getErrors())) {
                throw $this->_errorRegistry;
            }
        

        $this->_rawModelDataInput = $rawModelDataInput;

        
    }

    
        protected function executeBaseValidators(array &$modelData): void
        {
            $value = &$modelData;

            
                

if ((function () use ($value) {
    foreach (array_diff(array_keys($value), array (
   'lat',
   'lng',
   'label',
   'travel_time',
   'transport_mode',
   'radius',
   'geometry',
   'ext',
)) as $propertyKey) {
        

        $this->_additionalProperties[$propertyKey] = $value[$propertyKey];
    }

    return false;
})()) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Object\InvalidAdditionalPropertiesException($value ?? null, ...array (
  0 => 'GetMediaBuysResponse_ItemOfArrayGeo_Proximity014570a07fc3e7d618cb16a2c40b339f',
)));
}

            

            
                $this->validateComposition_0($modelData);
            
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
                 * Get the value of lat.
                 *
                 * Latitude in decimal degrees (WGS 84). Required for travel_time and radius methods.
                 *
                 * @return float|null
                 */
                public function getLat(): ?float
                {
                    

                    return $this->lat;
                }
            

            
                /**
                 * Set the value of lat.
                 *
                 * @param float $lat Latitude in decimal degrees (WGS 84). Required for travel_time and radius methods.
                 *
                 * @throws ErrorRegistryException
                 *
                 * @return static
                 */
                public function setLat(
                    float $lat
                ): static {
                    if ($this->lat === $lat) {
                        return $this;
                    }

                    $value = $modelData['lat'] = $lat;

                    
                        $this->_errorRegistry = new ErrorRegistryException();
                    

                    $this->validateComposition_0($modelData);



                    $value = $this->validateLat($value, $modelData);

                    
                        if ($this->_errorRegistry->getErrors()) {
                            throw $this->_errorRegistry;
                        }
                    

                    $this->lat = $value;
                    $this->_rawModelDataInput['lat'] = $lat;

                    

                    return $this;
                }
            

            /**
             * Extract the value, perform validations and set the property lat
             *
             * @param array $modelData
             *
             * @throws ErrorRegistryException
             */
            protected function processLat(array $modelData): void
            {
                
                    if (!array_key_exists('lat', $modelData) && $this->lat === null) {
                        return;
                    }
                

                $value = array_key_exists('lat', $modelData) ? $modelData['lat'] : $this->lat;

                $value = is_int($value) ? (float) $value : $value;

                $this->lat = $this->validateLat($value, $modelData);
            }

            /**
             * Execute all validators for the property lat
             */
            protected function validateLat($value, array $modelData)
            {
                
                    

if ((!is_float($value) && !$value instanceof UnitEnum) ) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Generic\InvalidTypeException($value ?? null, ...array (
  0 => 'lat',
  1 => 'float',
)));
}

                
                    

if (is_float($value) && $value < -90) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Number\MinimumException($value ?? null, ...array (
  0 => 'lat',
  1 => -90,
)));
}

                
                    

if (is_float($value) && $value > 90) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Number\MaximumException($value ?? null, ...array (
  0 => 'lat',
  1 => 90,
)));
}

                

                return $value;
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
                    

                    return $this->lng;
                }
            

            
                /**
                 * Set the value of lng.
                 *
                 * @param float $lng Longitude in decimal degrees (WGS 84). Required for travel_time and radius methods.
                 *
                 * @throws ErrorRegistryException
                 *
                 * @return static
                 */
                public function setLng(
                    float $lng
                ): static {
                    if ($this->lng === $lng) {
                        return $this;
                    }

                    $value = $modelData['lng'] = $lng;

                    
                        $this->_errorRegistry = new ErrorRegistryException();
                    

                    $this->validateComposition_0($modelData);



                    $value = $this->validateLng($value, $modelData);

                    
                        if ($this->_errorRegistry->getErrors()) {
                            throw $this->_errorRegistry;
                        }
                    

                    $this->lng = $value;
                    $this->_rawModelDataInput['lng'] = $lng;

                    

                    return $this;
                }
            

            /**
             * Extract the value, perform validations and set the property lng
             *
             * @param array $modelData
             *
             * @throws ErrorRegistryException
             */
            protected function processLng(array $modelData): void
            {
                
                    if (!array_key_exists('lng', $modelData) && $this->lng === null) {
                        return;
                    }
                

                $value = array_key_exists('lng', $modelData) ? $modelData['lng'] : $this->lng;

                $value = is_int($value) ? (float) $value : $value;

                $this->lng = $this->validateLng($value, $modelData);
            }

            /**
             * Execute all validators for the property lng
             */
            protected function validateLng($value, array $modelData)
            {
                
                    

if ((!is_float($value) && !$value instanceof UnitEnum) ) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Generic\InvalidTypeException($value ?? null, ...array (
  0 => 'lng',
  1 => 'float',
)));
}

                
                    

if (is_float($value) && $value < -180) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Number\MinimumException($value ?? null, ...array (
  0 => 'lng',
  1 => -180,
)));
}

                
                    

if (is_float($value) && $value > 180) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Number\MaximumException($value ?? null, ...array (
  0 => 'lng',
  1 => 180,
)));
}

                

                return $value;
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
                    

                    return $this->label;
                }
            

            
                /**
                 * Set the value of label.
                 *
                 * @param string $label Human-readable label for this entry (e.g., 'Düsseldorf', 'Heathrow Airport', 'Primary trade area').
                 *
                 * @throws ErrorRegistryException
                 *
                 * @return static
                 */
                public function setLabel(
                    string $label
                ): static {
                    if ($this->label === $label) {
                        return $this;
                    }

                    $value = $modelData['label'] = $label;

                    
                        $this->_errorRegistry = new ErrorRegistryException();
                    

                    



                    $value = $this->validateLabel($value, $modelData);

                    
                        if ($this->_errorRegistry->getErrors()) {
                            throw $this->_errorRegistry;
                        }
                    

                    $this->label = $value;
                    $this->_rawModelDataInput['label'] = $label;

                    

                    return $this;
                }
            

            /**
             * Extract the value, perform validations and set the property label
             *
             * @param array $modelData
             *
             * @throws ErrorRegistryException
             */
            protected function processLabel(array $modelData): void
            {
                
                    if (!array_key_exists('label', $modelData) && $this->label === null) {
                        return;
                    }
                

                $value = array_key_exists('label', $modelData) ? $modelData['label'] : $this->label;

                

                $this->label = $this->validateLabel($value, $modelData);
            }

            /**
             * Execute all validators for the property label
             */
            protected function validateLabel($value, array $modelData)
            {
                
                    

if ((!is_string($value) && !$value instanceof UnitEnum) ) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Generic\InvalidTypeException($value ?? null, ...array (
  0 => 'label',
  1 => 'string',
)));
}

                

                return $value;
            }
        
    
        
            
                /**
                 * Get the value of travel_time.
                 *
                 * Travel time limit for isochrone calculation. The platform resolves this to a geographic boundary based on actual transportation networks.
                 *
                 * @return GetMediaBuysResponse_Travel_Time98d257bd606b10a40e852755129155fe|null
                 */
                public function getTravelTime(): ?GetMediaBuysResponse_Travel_Time98d257bd606b10a40e852755129155fe
                {
                    

                    return $this->travelTime;
                }
            

            
                /**
                 * Set the value of travel_time.
                 *
                 * @param GetMediaBuysResponse_Travel_Time98d257bd606b10a40e852755129155fe $travelTime Travel time limit for isochrone calculation. The platform resolves this to a geographic boundary based on actual transportation networks.
                 *
                 * @throws ErrorRegistryException
                 *
                 * @return static
                 */
                public function setTravelTime(
                    GetMediaBuysResponse_Travel_Time98d257bd606b10a40e852755129155fe $travelTime
                ): static {
                    if ($this->travelTime === $travelTime) {
                        return $this;
                    }

                    $value = $modelData['travel_time'] = $travelTime;

                    
                        $this->_errorRegistry = new ErrorRegistryException();
                    

                    $this->validateComposition_0($modelData);



                    $value = $this->validateTravelTime($value, $modelData);

                    
                        if ($this->_errorRegistry->getErrors()) {
                            throw $this->_errorRegistry;
                        }
                    

                    $this->travelTime = $value;
                    $this->_rawModelDataInput['travel_time'] = $travelTime;

                    

                    return $this;
                }
            

            /**
             * Extract the value, perform validations and set the property travelTime
             *
             * @param array $modelData
             *
             * @throws ErrorRegistryException
             */
            protected function processTravelTime(array $modelData): void
            {
                
                    if (!array_key_exists('travel_time', $modelData) && $this->travelTime === null) {
                        return;
                    }
                

                $value = array_key_exists('travel_time', $modelData) ? $modelData['travel_time'] : $this->travelTime;

                $value = (function ($value) {
    try {
        return is_array($value) ? new GetMediaBuysResponse_Travel_Time98d257bd606b10a40e852755129155fe($value) : $value;
    } catch (\Exception $instantiationException) {
        
            $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Object\NestedObjectException($value ?? null, ...array (
  0 => 'travel_time',
  1 => $instantiationException,
)));
        

        
            return $instantiationException;
        
    }
})($value)
;

                $this->travelTime = $this->validateTravelTime($value, $modelData);
            }

            /**
             * Execute all validators for the property travelTime
             */
            protected function validateTravelTime($value, array $modelData)
            {
                
                    

if ((!is_object($value) && !$value instanceof UnitEnum) ) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Generic\InvalidTypeException($value ?? null, ...array (
  0 => 'travel_time',
  1 => 'object',
)));
}

                
                    

if (is_object($value) && !($value instanceof \Exception) && !($value instanceof GetMediaBuysResponse_Travel_Time98d257bd606b10a40e852755129155fe)) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Object\InvalidInstanceOfException($value ?? null, ...array (
  0 => 'travel_time',
  1 => 'GetMediaBuysResponse_Travel_Time98d257bd606b10a40e852755129155fe',
)));
}

                

                return $value;
            }
        
    
        
            
                /**
                 * Get the value of transport_mode.
                 *
                 * Transportation mode for isochrone calculation. Required when travel_time is provided.
                 *
                 * @return TransportMode|null
                 */
                public function getTransportMode(): ?TransportMode
                {
                    

                    return $this->transportMode;
                }
            

            
                /**
                 * Set the value of transport_mode.
                 *
                 * @param string|TransportMode|null $transportMode Transportation mode for isochrone calculation. Required when travel_time is provided.
                 *
                 * @throws ErrorRegistryException
                 *
                 * @return static
                 */
                public function setTransportMode(
                    string | TransportMode | null $transportMode
                ): static {
                    if ($this->transportMode === $transportMode) {
                        return $this;
                    }

                    $value = $modelData['transport_mode'] = $transportMode;

                    
                        $this->_errorRegistry = new ErrorRegistryException();
                    

                    $this->validateComposition_0($modelData);



                    $value = $this->validateTransportMode($value, $modelData);

                    
                        if ($this->_errorRegistry->getErrors()) {
                            throw $this->_errorRegistry;
                        }
                    

                    $this->transportMode = $value;
                    $this->_rawModelDataInput['transport_mode'] = $transportMode;

                    

                    return $this;
                }
            

            /**
             * Extract the value, perform validations and set the property transportMode
             *
             * @param array $modelData
             *
             * @throws ErrorRegistryException
             */
            protected function processTransportMode(array $modelData): void
            {
                
                    if (!array_key_exists('transport_mode', $modelData) && $this->transportMode === null) {
                        return;
                    }
                

                $value = array_key_exists('transport_mode', $modelData) ? $modelData['transport_mode'] : $this->transportMode;

                

                $this->transportMode = $this->validateTransportMode($value, $modelData);
            }

            /**
             * Execute all validators for the property transportMode
             */
            protected function validateTransportMode($value, array $modelData)
            {
                
                    

if ($value instanceof UnitEnum && !($value instanceof TransportMode)) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Generic\InvalidTypeException($value ?? null, ...array (
  0 => 'transport_mode',
  1 => 'TransportMode',
)));
}

                
                    

if ((!is_string($value) && !$value instanceof UnitEnum) ) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Generic\InvalidTypeException($value ?? null, ...array (
  0 => 'transport_mode',
  1 => 'string',
)));
}

                
                    

if (!($value instanceof UnitEnum) && !in_array($value, array (
   'walking',
   'cycling',
   'driving',
   'public_transport',
), true)) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Generic\EnumException($value ?? null, ...array (
  0 => 'transport_mode',
  1 => 
  array (
    0 => 'walking',
    1 => 'cycling',
    2 => 'driving',
    3 => 'public_transport',
  ),
)));
}

                
                    
$transformationFailed = false;
if (!($value instanceof UnitEnum) && 
(
    
    (function (&$value) use (&$transformationFailed): bool {
        // make sure exceptions from the filter are caught and added to the error handling
        try {
            $value = \PHPModelGenerator\Filter\Enum::filter($value, array (
  'fqcn' => 'AdCP\\MediaBuy\\Enums\\TransportMode',
));
        } catch (\Throwable $filterException) {
            
                $transformationFailed = true;
            

            $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Filter\InvalidFilterValueException($value ?? null, ...array (
  0 => 'transport_mode',
  1 => 'php_model_generator_enum',
  2 => $filterException,
)));
        }

        return false;
    })($value)
)) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Filter\IncompatibleFilterException($value ?? null, ...array (
  0 => 'transport_mode',
  1 => 'php_model_generator_enum',
)));
}

                

                return $value;
            }
        
    
        
            
                /**
                 * Get the value of radius.
                 *
                 * Simple radius from the point. The platform draws a circle of this distance around the coordinates.
                 *
                 * @return GetMediaBuysResponse_Radiuse8c9b5a7f3551f1231e0f89f1ef25e41|null
                 */
                public function getRadius(): ?GetMediaBuysResponse_Radiuse8c9b5a7f3551f1231e0f89f1ef25e41
                {
                    

                    return $this->radius;
                }
            

            
                /**
                 * Set the value of radius.
                 *
                 * @param GetMediaBuysResponse_Radiuse8c9b5a7f3551f1231e0f89f1ef25e41 $radius Simple radius from the point. The platform draws a circle of this distance around the coordinates.
                 *
                 * @throws ErrorRegistryException
                 *
                 * @return static
                 */
                public function setRadius(
                    GetMediaBuysResponse_Radiuse8c9b5a7f3551f1231e0f89f1ef25e41 $radius
                ): static {
                    if ($this->radius === $radius) {
                        return $this;
                    }

                    $value = $modelData['radius'] = $radius;

                    
                        $this->_errorRegistry = new ErrorRegistryException();
                    

                    $this->validateComposition_0($modelData);



                    $value = $this->validateRadius($value, $modelData);

                    
                        if ($this->_errorRegistry->getErrors()) {
                            throw $this->_errorRegistry;
                        }
                    

                    $this->radius = $value;
                    $this->_rawModelDataInput['radius'] = $radius;

                    

                    return $this;
                }
            

            /**
             * Extract the value, perform validations and set the property radius
             *
             * @param array $modelData
             *
             * @throws ErrorRegistryException
             */
            protected function processRadius(array $modelData): void
            {
                
                    if (!array_key_exists('radius', $modelData) && $this->radius === null) {
                        return;
                    }
                

                $value = array_key_exists('radius', $modelData) ? $modelData['radius'] : $this->radius;

                $value = (function ($value) {
    try {
        return is_array($value) ? new GetMediaBuysResponse_Radiuse8c9b5a7f3551f1231e0f89f1ef25e41($value) : $value;
    } catch (\Exception $instantiationException) {
        
            $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Object\NestedObjectException($value ?? null, ...array (
  0 => 'radius',
  1 => $instantiationException,
)));
        

        
            return $instantiationException;
        
    }
})($value)
;

                $this->radius = $this->validateRadius($value, $modelData);
            }

            /**
             * Execute all validators for the property radius
             */
            protected function validateRadius($value, array $modelData)
            {
                
                    

if ((!is_object($value) && !$value instanceof UnitEnum) ) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Generic\InvalidTypeException($value ?? null, ...array (
  0 => 'radius',
  1 => 'object',
)));
}

                
                    

if (is_object($value) && !($value instanceof \Exception) && !($value instanceof GetMediaBuysResponse_Radiuse8c9b5a7f3551f1231e0f89f1ef25e41)) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Object\InvalidInstanceOfException($value ?? null, ...array (
  0 => 'radius',
  1 => 'GetMediaBuysResponse_Radiuse8c9b5a7f3551f1231e0f89f1ef25e41',
)));
}

                

                return $value;
            }
        
    
        
            
                /**
                 * Get the value of geometry.
                 *
                 * Pre-computed GeoJSON geometry defining the proximity boundary. Use when the buyer has already calculated isochrones (via TravelTime, Mapbox, etc.) or has custom boundaries. When geometry is provided, lat/lng are not required.
                 *
                 * @return GetMediaBuysResponse_Geometryd672d0526b0b5b3b9be11e6e707345f0|null
                 */
                public function getGeometry(): ?GetMediaBuysResponse_Geometryd672d0526b0b5b3b9be11e6e707345f0
                {
                    

                    return $this->geometry;
                }
            

            
                /**
                 * Set the value of geometry.
                 *
                 * @param GetMediaBuysResponse_Geometryd672d0526b0b5b3b9be11e6e707345f0 $geometry Pre-computed GeoJSON geometry defining the proximity boundary. Use when the buyer has already calculated isochrones (via TravelTime, Mapbox, etc.) or has custom boundaries. When geometry is provided, lat/lng are not required.
                 *
                 * @throws ErrorRegistryException
                 *
                 * @return static
                 */
                public function setGeometry(
                    GetMediaBuysResponse_Geometryd672d0526b0b5b3b9be11e6e707345f0 $geometry
                ): static {
                    if ($this->geometry === $geometry) {
                        return $this;
                    }

                    $value = $modelData['geometry'] = $geometry;

                    
                        $this->_errorRegistry = new ErrorRegistryException();
                    

                    $this->validateComposition_0($modelData);



                    $value = $this->validateGeometry($value, $modelData);

                    
                        if ($this->_errorRegistry->getErrors()) {
                            throw $this->_errorRegistry;
                        }
                    

                    $this->geometry = $value;
                    $this->_rawModelDataInput['geometry'] = $geometry;

                    

                    return $this;
                }
            

            /**
             * Extract the value, perform validations and set the property geometry
             *
             * @param array $modelData
             *
             * @throws ErrorRegistryException
             */
            protected function processGeometry(array $modelData): void
            {
                
                    if (!array_key_exists('geometry', $modelData) && $this->geometry === null) {
                        return;
                    }
                

                $value = array_key_exists('geometry', $modelData) ? $modelData['geometry'] : $this->geometry;

                $value = (function ($value) {
    try {
        return is_array($value) ? new GetMediaBuysResponse_Geometryd672d0526b0b5b3b9be11e6e707345f0($value) : $value;
    } catch (\Exception $instantiationException) {
        
            $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Object\NestedObjectException($value ?? null, ...array (
  0 => 'geometry',
  1 => $instantiationException,
)));
        

        
            return $instantiationException;
        
    }
})($value)
;

                $this->geometry = $this->validateGeometry($value, $modelData);
            }

            /**
             * Execute all validators for the property geometry
             */
            protected function validateGeometry($value, array $modelData)
            {
                
                    

if ((!is_object($value) && !$value instanceof UnitEnum) ) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Generic\InvalidTypeException($value ?? null, ...array (
  0 => 'geometry',
  1 => 'object',
)));
}

                
                    

if (is_object($value) && !($value instanceof \Exception) && !($value instanceof GetMediaBuysResponse_Geometryd672d0526b0b5b3b9be11e6e707345f0)) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Object\InvalidInstanceOfException($value ?? null, ...array (
  0 => 'geometry',
  1 => 'GetMediaBuysResponse_Geometryd672d0526b0b5b3b9be11e6e707345f0',
)));
}

                

                return $value;
            }
        
    
        
            
                /**
                 * Get the value of ext.
                 *
                 * Extension object for platform-specific, vendor-namespaced parameters. Extensions are always optional and must be namespaced under a vendor/platform key (e.g., ext.gam, ext.roku). Used for custom capabilities, partner-specific configuration, and features being proposed for standardization.
                 *
                 * @return GetMediaBuysResponse_ExtensionObject|null
                 */
                public function getExt(): ?GetMediaBuysResponse_ExtensionObject
                {
                    

                    return $this->ext;
                }
            

            
                /**
                 * Set the value of ext.
                 *
                 * @param GetMediaBuysResponse_ExtensionObject $ext Extension object for platform-specific, vendor-namespaced parameters. Extensions are always optional and must be namespaced under a vendor/platform key (e.g., ext.gam, ext.roku). Used for custom capabilities, partner-specific configuration, and features being proposed for standardization.
                 *
                 * @throws ErrorRegistryException
                 *
                 * @return static
                 */
                public function setExt(
                    GetMediaBuysResponse_ExtensionObject $ext
                ): static {
                    if ($this->ext === $ext) {
                        return $this;
                    }

                    $value = $modelData['ext'] = $ext;

                    
                        $this->_errorRegistry = new ErrorRegistryException();
                    

                    



                    $value = $this->validateExt($value, $modelData);

                    
                        if ($this->_errorRegistry->getErrors()) {
                            throw $this->_errorRegistry;
                        }
                    

                    $this->ext = $value;
                    $this->_rawModelDataInput['ext'] = $ext;

                    

                    return $this;
                }
            

            /**
             * Extract the value, perform validations and set the property ext
             *
             * @param array $modelData
             *
             * @throws ErrorRegistryException
             */
            protected function processExt(array $modelData): void
            {
                
                    if (!array_key_exists('ext', $modelData) && $this->ext === null) {
                        return;
                    }
                

                $value = array_key_exists('ext', $modelData) ? $modelData['ext'] : $this->ext;

                $value = (function ($value) {
    try {
        return is_array($value) ? new GetMediaBuysResponse_ExtensionObject($value) : $value;
    } catch (\Exception $instantiationException) {
        
            $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Object\NestedObjectException($value ?? null, ...array (
  0 => 'ext',
  1 => $instantiationException,
)));
        

        
            return $instantiationException;
        
    }
})($value)
;

                $this->ext = $this->validateExt($value, $modelData);
            }

            /**
             * Execute all validators for the property ext
             */
            protected function validateExt($value, array $modelData)
            {
                
                    

if ((!is_object($value) && !$value instanceof UnitEnum) ) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Generic\InvalidTypeException($value ?? null, ...array (
  0 => 'ext',
  1 => 'object',
)));
}

                
                    

if (is_object($value) && !($value instanceof \Exception) && !($value instanceof GetMediaBuysResponse_ExtensionObject)) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Object\InvalidInstanceOfException($value ?? null, ...array (
  0 => 'ext',
  1 => 'GetMediaBuysResponse_ExtensionObject',
)));
}

                

                return $value;
            }
        
    
        
    
        
    
        
    

    /**
 * Validate updated properties which are part of a composition validation
 *
 * @param array $modifiedModelData An array containing all updated data as key-value pairs
 *
 * 
 */
private function validateComposition_0(array &$modifiedModelData): void
{
    $validatorIndex = 0;
    $value = $modelData = array_merge($this->_rawModelDataInput, $modifiedModelData);

    
            $succeededCompositionElements = 0;
            $compositionErrorCollection = [];
        
    if (
(function (&$value) use (
    &$modelData,
    &$modifiedModelData,
    &$compositionErrorCollection,
    &$succeededCompositionElements,
    &$validatorIndex
) {
    $succeededCompositionElements = 3;
    $validatorComponentIndex = 0;
    $originalModelData = $value;
    $proposedValue = null;
    $modifiedValues = [];

    
        $originalPropertyValidationState = $this->_propertyValidationState ?? [];
    

    
        $originalErrorRegistry = $this->_errorRegistry;
    

    
        try {
            
                // check if the state of the validator is already known.
                // If none of the properties affected by the validator are changed the validator must not be re-evaluated
                if (isset($validatorIndex) &&
                    isset($this->_propertyValidationState[$validatorIndex][$validatorComponentIndex]) &&
                    !array_intersect(
                        array_keys($modifiedModelData),
                        [
                            
                                'lat',
                            
                                'lng',
                            
                                'travel_time',
                            
                                'transport_mode',
                            
                        ]
                    )
                ) {
                    
                        $compositionErrorCollection[] = $this->_propertyValidationState[$validatorIndex][$validatorComponentIndex];
                    

                    if (
                            $this->_propertyValidationState[$validatorIndex][$validatorComponentIndex]->getErrors()
                        
                    ) {
                        throw new \Exception();
                    }
                } else {
            

                
                    // collect errors for each composition element
                    $this->_errorRegistry = new ErrorRegistryException();
                

                

                $value = (function ($value) {
    try {
        return is_array($value) ? new GetMediaBuysResponse_GetMediaBuysResponse_ItemOfArrayGeo_Proximity014570a07fc3e7d618cb16a2c40b339f7b0485cc6ae67dccb91bdb62f50ca24f($value) : $value;
    } catch (\Exception $instantiationException) {
        
            
                foreach($instantiationException->getErrors() as $nestedValidationError) {
                    $this->_errorRegistry->addError($nestedValidationError);
                }
            
        

        
            return $instantiationException;
        
    }
})($value)
;

                
                    

if ((!is_object($value) && !$value instanceof UnitEnum) ) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Generic\InvalidTypeException($value ?? null, ...array (
  0 => 'GetMediaBuysResponse_ItemOfArrayGeo_Proximity014570a07fc3e7d618cb16a2c40b339f',
  1 => 'object',
)));
}

                
                    

if (is_object($value) && !($value instanceof \Exception) && !($value instanceof GetMediaBuysResponse_GetMediaBuysResponse_ItemOfArrayGeo_Proximity014570a07fc3e7d618cb16a2c40b339f7b0485cc6ae67dccb91bdb62f50ca24f)) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Object\InvalidInstanceOfException($value ?? null, ...array (
  0 => 'GetMediaBuysResponse_ItemOfArrayGeo_Proximity014570a07fc3e7d618cb16a2c40b339f',
  1 => 'GetMediaBuysResponse_GetMediaBuysResponse_ItemOfArrayGeo_Proximity014570a07fc3e7d618cb16a2c40b339f7b0485cc6ae67dccb91bdb62f50ca24f',
)));
}

                

                
                    $compositionErrorCollection[] = $this->_errorRegistry;

                    
                        if (isset($validatorIndex)) {
                            $this->_propertyValidationState[$validatorIndex][$validatorComponentIndex] = $this->_errorRegistry;
                        }
                    

                    // an error inside the composed validation occurred. Throw an exception to count the validity of the
                    // composition item
                    if ($this->_errorRegistry->getErrors()) {
                        throw new \Exception();
                    }
                

                
                    $proposedValue = $proposedValue ?? $value;
                

                if (is_object($value) && is_array($originalModelData)) {
                    $modifiedValues = array_merge($modifiedValues, $this->_getModifiedValues_a377f($originalModelData, $value));
                }
            
                
            }
            
        } catch (\Exception $e) {
            

            $succeededCompositionElements--;
        }

        $value = $originalModelData;
        $validatorComponentIndex++;
    
        try {
            
                // check if the state of the validator is already known.
                // If none of the properties affected by the validator are changed the validator must not be re-evaluated
                if (isset($validatorIndex) &&
                    isset($this->_propertyValidationState[$validatorIndex][$validatorComponentIndex]) &&
                    !array_intersect(
                        array_keys($modifiedModelData),
                        [
                            
                                'lat',
                            
                                'lng',
                            
                                'radius',
                            
                        ]
                    )
                ) {
                    
                        $compositionErrorCollection[] = $this->_propertyValidationState[$validatorIndex][$validatorComponentIndex];
                    

                    if (
                            $this->_propertyValidationState[$validatorIndex][$validatorComponentIndex]->getErrors()
                        
                    ) {
                        throw new \Exception();
                    }
                } else {
            

                
                    // collect errors for each composition element
                    $this->_errorRegistry = new ErrorRegistryException();
                

                

                $value = (function ($value) {
    try {
        return is_array($value) ? new GetMediaBuysResponse_GetMediaBuysResponse_ItemOfArrayGeo_Proximity014570a07fc3e7d618cb16a2c40b339f1d52d88f0d009813f8b6db3574d377d6($value) : $value;
    } catch (\Exception $instantiationException) {
        
            
                foreach($instantiationException->getErrors() as $nestedValidationError) {
                    $this->_errorRegistry->addError($nestedValidationError);
                }
            
        

        
            return $instantiationException;
        
    }
})($value)
;

                
                    

if ((!is_object($value) && !$value instanceof UnitEnum) ) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Generic\InvalidTypeException($value ?? null, ...array (
  0 => 'GetMediaBuysResponse_ItemOfArrayGeo_Proximity014570a07fc3e7d618cb16a2c40b339f',
  1 => 'object',
)));
}

                
                    

if (is_object($value) && !($value instanceof \Exception) && !($value instanceof GetMediaBuysResponse_GetMediaBuysResponse_ItemOfArrayGeo_Proximity014570a07fc3e7d618cb16a2c40b339f1d52d88f0d009813f8b6db3574d377d6)) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Object\InvalidInstanceOfException($value ?? null, ...array (
  0 => 'GetMediaBuysResponse_ItemOfArrayGeo_Proximity014570a07fc3e7d618cb16a2c40b339f',
  1 => 'GetMediaBuysResponse_GetMediaBuysResponse_ItemOfArrayGeo_Proximity014570a07fc3e7d618cb16a2c40b339f1d52d88f0d009813f8b6db3574d377d6',
)));
}

                

                
                    $compositionErrorCollection[] = $this->_errorRegistry;

                    
                        if (isset($validatorIndex)) {
                            $this->_propertyValidationState[$validatorIndex][$validatorComponentIndex] = $this->_errorRegistry;
                        }
                    

                    // an error inside the composed validation occurred. Throw an exception to count the validity of the
                    // composition item
                    if ($this->_errorRegistry->getErrors()) {
                        throw new \Exception();
                    }
                

                
                    $proposedValue = $proposedValue ?? $value;
                

                if (is_object($value) && is_array($originalModelData)) {
                    $modifiedValues = array_merge($modifiedValues, $this->_getModifiedValues_a377f($originalModelData, $value));
                }
            
                
            }
            
        } catch (\Exception $e) {
            

            $succeededCompositionElements--;
        }

        $value = $originalModelData;
        $validatorComponentIndex++;
    
        try {
            
                // check if the state of the validator is already known.
                // If none of the properties affected by the validator are changed the validator must not be re-evaluated
                if (isset($validatorIndex) &&
                    isset($this->_propertyValidationState[$validatorIndex][$validatorComponentIndex]) &&
                    !array_intersect(
                        array_keys($modifiedModelData),
                        [
                            
                                'geometry',
                            
                        ]
                    )
                ) {
                    
                        $compositionErrorCollection[] = $this->_propertyValidationState[$validatorIndex][$validatorComponentIndex];
                    

                    if (
                            $this->_propertyValidationState[$validatorIndex][$validatorComponentIndex]->getErrors()
                        
                    ) {
                        throw new \Exception();
                    }
                } else {
            

                
                    // collect errors for each composition element
                    $this->_errorRegistry = new ErrorRegistryException();
                

                

                $value = (function ($value) {
    try {
        return is_array($value) ? new GetMediaBuysResponse_GetMediaBuysResponse_ItemOfArrayGeo_Proximity014570a07fc3e7d618cb16a2c40b339fd281a22176f1113bb22e496c1989af5f($value) : $value;
    } catch (\Exception $instantiationException) {
        
            
                foreach($instantiationException->getErrors() as $nestedValidationError) {
                    $this->_errorRegistry->addError($nestedValidationError);
                }
            
        

        
            return $instantiationException;
        
    }
})($value)
;

                
                    

if ((!is_object($value) && !$value instanceof UnitEnum) ) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Generic\InvalidTypeException($value ?? null, ...array (
  0 => 'GetMediaBuysResponse_ItemOfArrayGeo_Proximity014570a07fc3e7d618cb16a2c40b339f',
  1 => 'object',
)));
}

                
                    

if (is_object($value) && !($value instanceof \Exception) && !($value instanceof GetMediaBuysResponse_GetMediaBuysResponse_ItemOfArrayGeo_Proximity014570a07fc3e7d618cb16a2c40b339fd281a22176f1113bb22e496c1989af5f)) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Object\InvalidInstanceOfException($value ?? null, ...array (
  0 => 'GetMediaBuysResponse_ItemOfArrayGeo_Proximity014570a07fc3e7d618cb16a2c40b339f',
  1 => 'GetMediaBuysResponse_GetMediaBuysResponse_ItemOfArrayGeo_Proximity014570a07fc3e7d618cb16a2c40b339fd281a22176f1113bb22e496c1989af5f',
)));
}

                

                
                    $compositionErrorCollection[] = $this->_errorRegistry;

                    
                        if (isset($validatorIndex)) {
                            $this->_propertyValidationState[$validatorIndex][$validatorComponentIndex] = $this->_errorRegistry;
                        }
                    

                    // an error inside the composed validation occurred. Throw an exception to count the validity of the
                    // composition item
                    if ($this->_errorRegistry->getErrors()) {
                        throw new \Exception();
                    }
                

                
                    $proposedValue = $proposedValue ?? $value;
                

                if (is_object($value) && is_array($originalModelData)) {
                    $modifiedValues = array_merge($modifiedValues, $this->_getModifiedValues_a377f($originalModelData, $value));
                }
            
                
            }
            
        } catch (\Exception $e) {
            

            $succeededCompositionElements--;
        }

        $value = $originalModelData;
        $validatorComponentIndex++;
    

    
        $value = $proposedValue;
    

    
        $this->_errorRegistry = $originalErrorRegistry;
    

    $result = !($succeededCompositionElements === 1);

    
        if ($result) {
            $this->_propertyValidationState = $originalPropertyValidationState;
        }
    

    return $result;
})($value)
) {
        $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\ComposedValue\OneOfException($value ?? null, ...array (
  0 => 'GetMediaBuysResponse_ItemOfArrayGeo_Proximity014570a07fc3e7d618cb16a2c40b339f',
  1 => $succeededCompositionElements,
  2 => $compositionErrorCollection,
)));
    }

    foreach (array_keys($modifiedModelData) as $property) {
        $modifiedModelData[$property] = $modelData[$property];
    }
}


/**
 * Update the model with the provided data. If the update fails due to any violations an exception will be thrown and
 * no properties of the model will be updated.
 *
 * @param array $modelData May contain any subset of the models properties
 *
 * @return self
 *
 * @throws ErrorRegistryException
 */
public function populate(array $modelData): self
{
    $rollbackValues = [];

    
        $this->_errorRegistry = new ErrorRegistryException();
    

    foreach (['_additionalProperties', '_patternProperties'] as $property) {
        if (isset($this->{$property})) {
            $rollbackValues[$property] = $this->{$property};
        }
    }

    
        $this->executeBaseValidators($modelData);
    

    
        
            if (array_key_exists('lat', $modelData) &&
                $modelData['lat'] !== $this->lat
            ) {
                $this->validateComposition_0($modelData);



                $rollbackValues['lat'] = $this->lat;
                $this->processLat($modelData);
            }
        
    
        
            if (array_key_exists('lng', $modelData) &&
                $modelData['lng'] !== $this->lng
            ) {
                $this->validateComposition_0($modelData);



                $rollbackValues['lng'] = $this->lng;
                $this->processLng($modelData);
            }
        
    
        
            if (array_key_exists('label', $modelData) &&
                $modelData['label'] !== $this->label
            ) {
                



                $rollbackValues['label'] = $this->label;
                $this->processLabel($modelData);
            }
        
    
        
            if (array_key_exists('travel_time', $modelData) &&
                $modelData['travel_time'] !== $this->travelTime
            ) {
                $this->validateComposition_0($modelData);



                $rollbackValues['travelTime'] = $this->travelTime;
                $this->processTravelTime($modelData);
            }
        
    
        
            if (array_key_exists('transport_mode', $modelData) &&
                $modelData['transport_mode'] !== $this->transportMode
            ) {
                $this->validateComposition_0($modelData);



                $rollbackValues['transportMode'] = $this->transportMode;
                $this->processTransportMode($modelData);
            }
        
    
        
            if (array_key_exists('radius', $modelData) &&
                $modelData['radius'] !== $this->radius
            ) {
                $this->validateComposition_0($modelData);



                $rollbackValues['radius'] = $this->radius;
                $this->processRadius($modelData);
            }
        
    
        
            if (array_key_exists('geometry', $modelData) &&
                $modelData['geometry'] !== $this->geometry
            ) {
                $this->validateComposition_0($modelData);



                $rollbackValues['geometry'] = $this->geometry;
                $this->processGeometry($modelData);
            }
        
    
        
            if (array_key_exists('ext', $modelData) &&
                $modelData['ext'] !== $this->ext
            ) {
                



                $rollbackValues['ext'] = $this->ext;
                $this->processExt($modelData);
            }
        
    
        
    
        
    
        
    

    
        if (count($this->_errorRegistry->getErrors())) {
            foreach ($rollbackValues as $property => $value) {
                $this->{$property} = $value;
            }

            throw $this->_errorRegistry;
        }
    

    $this->_rawModelDataInput = array_merge($this->_rawModelDataInput, $modelData);

    
        
    
        
    
        
    
        
    
        
    
        
    
        
    
        
    
        
    
        
    
        
    

    return $this;
}


/**
 * serialize the property transportMode
 */
protected function serializeTransportMode()
{
    return \PHPModelGenerator\Filter\Enum::serialize($this->transportMode, array (
  'fqcn' => 'AdCP\\MediaBuy\\Enums\\TransportMode',
));
}



    protected function resolveSerializationHook(array $data, int $depth, array $except): array
    {
        $data = array_merge($this->serializeAdditionalProperties($depth, $except), $data);

        return $data;
    }


protected function serializeAdditionalProperties(int $depth, array $except): array
{
    

    return $this->getSerializedValue(
        $this->_additionalProperties,
        $depth,
        $except
    );
}



                        private function _getModifiedValues_a377f(array $originalModelData, object $nestedCompositionObject): array {
                            $modifiedValues = [];
                            $defaultValueMap = array (
  0 => 'propertyValidationState',
  1 => 'skipNotProvidedPropertiesMap',
  2 => 'propertyValidationState',
  3 => 'skipNotProvidedPropertiesMap',
  4 => 'propertyValidationState',
  5 => 'skipNotProvidedPropertiesMap',
);
    
                            foreach (array (
  'lat' => 'getLat',
  'lng' => 'getLng',
  'travel_time' => 'getTravelTime',
  'transport_mode' => 'getTransportMode',
  'propertyValidationState' => 'get_propertyValidationState',
  'skipNotProvidedPropertiesMap' => 'get_skipNotProvidedPropertiesMap',
  'radius' => 'getRadius',
  'geometry' => 'getGeometry',
) as $key => $accessor) {
                                if ((isset($originalModelData[$key]) || in_array($key, $defaultValueMap))
                                    && method_exists($nestedCompositionObject, $accessor)
                                    && ($modifiedValue = $nestedCompositionObject->$accessor())
                                        !== ($originalModelData[$key] ?? !$modifiedValue)
                                ) {
                                    $modifiedValues[$key] = $modifiedValue;
                                }
                            }
    
                            return $modifiedValues;
                        }


}

// @codeCoverageIgnoreEnd
