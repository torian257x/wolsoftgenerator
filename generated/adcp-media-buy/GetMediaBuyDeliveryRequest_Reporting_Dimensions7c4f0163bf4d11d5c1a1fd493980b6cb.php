<?php

// @codingStandardsIgnoreFile
// @codeCoverageIgnoreStart

declare(strict_types = 1);


    namespace AdCP\MediaBuy;



    use PHPModelGenerator\Interfaces\JSONModelInterface;

    use PHPModelGenerator\Traits\SerializableTrait;

    use JsonSerializable;

    use PHPModelGenerator\Interfaces\SerializationInterface;

    use UnitEnum;

    use AdCP\MediaBuy\Enums\GeographicTargetingLevel;

    use AdCP\MediaBuy\Enums\SortMetric;

    use AdCP\MediaBuy\Enums\MetroAreaSystem;

    use AdCP\MediaBuy\Enums\PostalCodeSystem;

    use AdCP\MediaBuy\Enums\DigitalSourceType;

    use AdCP\MediaBuy\Enums\GetMediaBuyDeliveryRequest_ProvenanceHuman_Oversight;

    use AdCP\MediaBuy\Enums\GetMediaBuyDeliveryRequest_Declared_By13c986791ce55365e13a7cd5ff90f7dcRole;

    use AdCP\MediaBuy\Enums\EmbeddedProvenanceMethod;

    use AdCP\MediaBuy\Enums\WatermarkMediaType;

    use AdCP\MediaBuy\Enums\C2PAWatermarkAction;

    use AdCP\MediaBuy\Enums\DisclosurePersistence;

    use AdCP\MediaBuy\Enums\DisclosurePosition;

    use AdCP\MediaBuy\Enums\GetMediaBuyDeliveryRequest_ItemOfArrayVerificationab0379bc9ff851960f9f645c9916029eResult;

    use AdCP\MediaBuy\Enums\AttributionModel;

    use AdCP\MediaBuy\Enums\GetMediaBuyDeliveryRequest_DurationUnit;

    use PHPModelGenerator\Attributes\JsonPointer;

    use PHPModelGenerator\Attributes\SchemaName;

    use PHPModelGenerator\Attributes\Internal;

    use PHPModelGenerator\Exception\ErrorRegistryException;


/**
 * Class GetMediaBuyDeliveryRequest_Reporting_Dimensions7c4f0163bf4d11d5c1a1fd493980b6cb
 * @package AdCP\MediaBuy 
 *
 * Request dimensional breakdowns in delivery reporting. Each key enables a specific breakdown dimension within by_package — include as an empty object (e.g., "device_type": {}) to activate with defaults. Omit entirely for no breakdowns (backward compatible). Unsupported dimensions are silently omitted from the response. Note: keyword, catalog_item, and creative breakdowns are returned automatically when the seller supports them and are not controlled by this object.
 *
 * This is an auto-implemented class implemented by the php-json-schema-model-generator.
 * If you need to implement something in this class use inheritance. Else you will lose your changes if the classes
 * are re-generated.
 */

#[JsonPointer('/properties/reporting_dimensions')]

class GetMediaBuyDeliveryRequest_Reporting_Dimensions7c4f0163bf4d11d5c1a1fd493980b6cb implements JSONModelInterface, JsonSerializable, SerializationInterface
{
    use SerializableTrait;

    
        
            #[JsonPointer('/properties/reporting_dimensions/properties/geo')]
        
            #[SchemaName('geo')]
        
        /** @var GetMediaBuyDeliveryRequest_Geo180e7041b8a6f1e027269e9aa3ad91c2|null Request geographic breakdown. Check reporting_capabilities.supports_geo_breakdown for available levels and systems. */
        protected $geo;
    
        
            #[JsonPointer('/properties/reporting_dimensions/properties/device_type')]
        
            #[SchemaName('device_type')]
        
        /** @var GetMediaBuyDeliveryRequest_Device_Typecec5fc3cc49e91951e025e419dc689e4|null Request device type breakdown. */
        protected $deviceType;
    
        
            #[JsonPointer('/properties/reporting_dimensions/properties/device_platform')]
        
            #[SchemaName('device_platform')]
        
        /** @var GetMediaBuyDeliveryRequest_Device_Typecec5fc3cc49e91951e025e419dc689e4|null Request device platform breakdown. */
        protected $devicePlatform;
    
        
            #[JsonPointer('/properties/reporting_dimensions/properties/audience')]
        
            #[SchemaName('audience')]
        
        /** @var GetMediaBuyDeliveryRequest_Audienceb74ab1a9578935027e487e0c94dde617|null Request audience segment breakdown. */
        protected $audience;
    
        
            #[JsonPointer('/properties/reporting_dimensions/properties/placement')]
        
            #[SchemaName('placement')]
        
        /** @var GetMediaBuyDeliveryRequest_Audienceb74ab1a9578935027e487e0c94dde617|null Request placement breakdown. */
        protected $placement;
    
        
            #[Internal]
        
        /** @var array Collect all additional properties provided to the schema */
        private $_additionalProperties = array (
);
    
        
            #[Internal]
        
        /** @var array Values which might be skipped for serialization if not provided */
        private $_skipNotProvidedPropertiesMap = array (
  0 => 'geo',
  1 => 'device_type',
  2 => 'device_platform',
  3 => 'audience',
  4 => 'placement',
);
    
    #[Internal]
    /** @var array */
    protected $_rawModelDataInput = [];

    
        #[Internal]
        /** @var ErrorRegistryException Collect all validation errors */
        protected $_errorRegistry;
    

    /**
     * GetMediaBuyDeliveryRequest_Reporting_Dimensions7c4f0163bf4d11d5c1a1fd493980b6cb constructor.
     *
     * @param array $rawModelDataInput
     *
     * @throws ErrorRegistryException
     */
    public function __construct(array $rawModelDataInput = [])
    {
        
            $this->_errorRegistry = new ErrorRegistryException();
        

        

        
            $this->executeBaseValidators($rawModelDataInput);
        

        
            
                $this->processGeo($rawModelDataInput);
            
        
            
                $this->processDeviceType($rawModelDataInput);
            
        
            
                $this->processDevicePlatform($rawModelDataInput);
            
        
            
                $this->processAudience($rawModelDataInput);
            
        
            
                $this->processPlacement($rawModelDataInput);
            
        
            
        
            
        

        
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
   'geo',
   'device_type',
   'device_platform',
   'audience',
   'placement',
)) as $propertyKey) {
        

        $this->_additionalProperties[$propertyKey] = $value[$propertyKey];
    }

    return false;
})()) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Object\InvalidAdditionalPropertiesException($value ?? null, ...array (
  0 => 'GetMediaBuyDeliveryRequest_Reporting_Dimensions7c4f0163bf4d11d5c1a1fd493980b6cb',
)));
}

            

            
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
                 * Get the value of geo.
                 *
                 * Request geographic breakdown. Check reporting_capabilities.supports_geo_breakdown for available levels and systems.
                 *
                 * @return GetMediaBuyDeliveryRequest_Geo180e7041b8a6f1e027269e9aa3ad91c2|null
                 */
                public function getGeo(): ?GetMediaBuyDeliveryRequest_Geo180e7041b8a6f1e027269e9aa3ad91c2
                {
                    

                    return $this->geo;
                }
            

            
                /**
                 * Set the value of geo.
                 *
                 * @param GetMediaBuyDeliveryRequest_Geo180e7041b8a6f1e027269e9aa3ad91c2 $geo Request geographic breakdown. Check reporting_capabilities.supports_geo_breakdown for available levels and systems.
                 *
                 * @throws ErrorRegistryException
                 *
                 * @return static
                 */
                public function setGeo(
                    GetMediaBuyDeliveryRequest_Geo180e7041b8a6f1e027269e9aa3ad91c2 $geo
                ): static {
                    if ($this->geo === $geo) {
                        return $this;
                    }

                    $value = $modelData['geo'] = $geo;

                    
                        $this->_errorRegistry = new ErrorRegistryException();
                    

                    

                    $value = $this->validateGeo($value, $modelData);

                    
                        if ($this->_errorRegistry->getErrors()) {
                            throw $this->_errorRegistry;
                        }
                    

                    $this->geo = $value;
                    $this->_rawModelDataInput['geo'] = $geo;

                    

                    return $this;
                }
            

            /**
             * Extract the value, perform validations and set the property geo
             *
             * @param array $modelData
             *
             * @throws ErrorRegistryException
             */
            protected function processGeo(array $modelData): void
            {
                
                    if (!array_key_exists('geo', $modelData) && $this->geo === null) {
                        return;
                    }
                

                $value = array_key_exists('geo', $modelData) ? $modelData['geo'] : $this->geo;

                $value = (function ($value) {
    try {
        return is_array($value) ? new GetMediaBuyDeliveryRequest_Geo180e7041b8a6f1e027269e9aa3ad91c2($value) : $value;
    } catch (\Exception $instantiationException) {
        
            $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Object\NestedObjectException($value ?? null, ...array (
  0 => 'geo',
  1 => $instantiationException,
)));
        

        
            return $instantiationException;
        
    }
})($value)
;

                $this->geo = $this->validateGeo($value, $modelData);
            }

            /**
             * Execute all validators for the property geo
             */
            protected function validateGeo($value, array $modelData)
            {
                
                    

if ((!is_object($value) && !$value instanceof UnitEnum) ) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Generic\InvalidTypeException($value ?? null, ...array (
  0 => 'geo',
  1 => 'object',
)));
}

                
                    

if (is_object($value) && !($value instanceof \Exception) && !($value instanceof GetMediaBuyDeliveryRequest_Geo180e7041b8a6f1e027269e9aa3ad91c2)) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Object\InvalidInstanceOfException($value ?? null, ...array (
  0 => 'geo',
  1 => 'GetMediaBuyDeliveryRequest_Geo180e7041b8a6f1e027269e9aa3ad91c2',
)));
}

                

                return $value;
            }
        
    
        
            
                /**
                 * Get the value of device_type.
                 *
                 * Request device type breakdown.
                 *
                 * @return GetMediaBuyDeliveryRequest_Device_Typecec5fc3cc49e91951e025e419dc689e4|null
                 */
                public function getDeviceType(): ?GetMediaBuyDeliveryRequest_Device_Typecec5fc3cc49e91951e025e419dc689e4
                {
                    

                    return $this->deviceType;
                }
            

            
                /**
                 * Set the value of device_type.
                 *
                 * @param GetMediaBuyDeliveryRequest_Device_Typecec5fc3cc49e91951e025e419dc689e4 $deviceType Request device type breakdown.
                 *
                 * @throws ErrorRegistryException
                 *
                 * @return static
                 */
                public function setDeviceType(
                    GetMediaBuyDeliveryRequest_Device_Typecec5fc3cc49e91951e025e419dc689e4 $deviceType
                ): static {
                    if ($this->deviceType === $deviceType) {
                        return $this;
                    }

                    $value = $modelData['device_type'] = $deviceType;

                    
                        $this->_errorRegistry = new ErrorRegistryException();
                    

                    

                    $value = $this->validateDeviceType($value, $modelData);

                    
                        if ($this->_errorRegistry->getErrors()) {
                            throw $this->_errorRegistry;
                        }
                    

                    $this->deviceType = $value;
                    $this->_rawModelDataInput['device_type'] = $deviceType;

                    

                    return $this;
                }
            

            /**
             * Extract the value, perform validations and set the property deviceType
             *
             * @param array $modelData
             *
             * @throws ErrorRegistryException
             */
            protected function processDeviceType(array $modelData): void
            {
                
                    if (!array_key_exists('device_type', $modelData) && $this->deviceType === null) {
                        return;
                    }
                

                $value = array_key_exists('device_type', $modelData) ? $modelData['device_type'] : $this->deviceType;

                $value = (function ($value) {
    try {
        return is_array($value) ? new GetMediaBuyDeliveryRequest_Device_Typecec5fc3cc49e91951e025e419dc689e4($value) : $value;
    } catch (\Exception $instantiationException) {
        
            $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Object\NestedObjectException($value ?? null, ...array (
  0 => 'device_type',
  1 => $instantiationException,
)));
        

        
            return $instantiationException;
        
    }
})($value)
;

                $this->deviceType = $this->validateDeviceType($value, $modelData);
            }

            /**
             * Execute all validators for the property deviceType
             */
            protected function validateDeviceType($value, array $modelData)
            {
                
                    

if ((!is_object($value) && !$value instanceof UnitEnum) ) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Generic\InvalidTypeException($value ?? null, ...array (
  0 => 'device_type',
  1 => 'object',
)));
}

                
                    

if (is_object($value) && !($value instanceof \Exception) && !($value instanceof GetMediaBuyDeliveryRequest_Device_Typecec5fc3cc49e91951e025e419dc689e4)) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Object\InvalidInstanceOfException($value ?? null, ...array (
  0 => 'device_type',
  1 => 'GetMediaBuyDeliveryRequest_Device_Typecec5fc3cc49e91951e025e419dc689e4',
)));
}

                

                return $value;
            }
        
    
        
            
                /**
                 * Get the value of device_platform.
                 *
                 * Request device platform breakdown.
                 *
                 * @return GetMediaBuyDeliveryRequest_Device_Typecec5fc3cc49e91951e025e419dc689e4|null
                 */
                public function getDevicePlatform(): ?GetMediaBuyDeliveryRequest_Device_Typecec5fc3cc49e91951e025e419dc689e4
                {
                    

                    return $this->devicePlatform;
                }
            

            
                /**
                 * Set the value of device_platform.
                 *
                 * @param GetMediaBuyDeliveryRequest_Device_Typecec5fc3cc49e91951e025e419dc689e4 $devicePlatform Request device platform breakdown.
                 *
                 * @throws ErrorRegistryException
                 *
                 * @return static
                 */
                public function setDevicePlatform(
                    GetMediaBuyDeliveryRequest_Device_Typecec5fc3cc49e91951e025e419dc689e4 $devicePlatform
                ): static {
                    if ($this->devicePlatform === $devicePlatform) {
                        return $this;
                    }

                    $value = $modelData['device_platform'] = $devicePlatform;

                    
                        $this->_errorRegistry = new ErrorRegistryException();
                    

                    

                    $value = $this->validateDevicePlatform($value, $modelData);

                    
                        if ($this->_errorRegistry->getErrors()) {
                            throw $this->_errorRegistry;
                        }
                    

                    $this->devicePlatform = $value;
                    $this->_rawModelDataInput['device_platform'] = $devicePlatform;

                    

                    return $this;
                }
            

            /**
             * Extract the value, perform validations and set the property devicePlatform
             *
             * @param array $modelData
             *
             * @throws ErrorRegistryException
             */
            protected function processDevicePlatform(array $modelData): void
            {
                
                    if (!array_key_exists('device_platform', $modelData) && $this->devicePlatform === null) {
                        return;
                    }
                

                $value = array_key_exists('device_platform', $modelData) ? $modelData['device_platform'] : $this->devicePlatform;

                $value = (function ($value) {
    try {
        return is_array($value) ? new GetMediaBuyDeliveryRequest_Device_Typecec5fc3cc49e91951e025e419dc689e4($value) : $value;
    } catch (\Exception $instantiationException) {
        
            $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Object\NestedObjectException($value ?? null, ...array (
  0 => 'device_platform',
  1 => $instantiationException,
)));
        

        
            return $instantiationException;
        
    }
})($value)
;

                $this->devicePlatform = $this->validateDevicePlatform($value, $modelData);
            }

            /**
             * Execute all validators for the property devicePlatform
             */
            protected function validateDevicePlatform($value, array $modelData)
            {
                
                    

if ((!is_object($value) && !$value instanceof UnitEnum) ) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Generic\InvalidTypeException($value ?? null, ...array (
  0 => 'device_platform',
  1 => 'object',
)));
}

                
                    

if (is_object($value) && !($value instanceof \Exception) && !($value instanceof GetMediaBuyDeliveryRequest_Device_Typecec5fc3cc49e91951e025e419dc689e4)) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Object\InvalidInstanceOfException($value ?? null, ...array (
  0 => 'device_platform',
  1 => 'GetMediaBuyDeliveryRequest_Device_Typecec5fc3cc49e91951e025e419dc689e4',
)));
}

                

                return $value;
            }
        
    
        
            
                /**
                 * Get the value of audience.
                 *
                 * Request audience segment breakdown.
                 *
                 * @return GetMediaBuyDeliveryRequest_Audienceb74ab1a9578935027e487e0c94dde617|null
                 */
                public function getAudience(): ?GetMediaBuyDeliveryRequest_Audienceb74ab1a9578935027e487e0c94dde617
                {
                    

                    return $this->audience;
                }
            

            
                /**
                 * Set the value of audience.
                 *
                 * @param GetMediaBuyDeliveryRequest_Audienceb74ab1a9578935027e487e0c94dde617 $audience Request audience segment breakdown.
                 *
                 * @throws ErrorRegistryException
                 *
                 * @return static
                 */
                public function setAudience(
                    GetMediaBuyDeliveryRequest_Audienceb74ab1a9578935027e487e0c94dde617 $audience
                ): static {
                    if ($this->audience === $audience) {
                        return $this;
                    }

                    $value = $modelData['audience'] = $audience;

                    
                        $this->_errorRegistry = new ErrorRegistryException();
                    

                    

                    $value = $this->validateAudience($value, $modelData);

                    
                        if ($this->_errorRegistry->getErrors()) {
                            throw $this->_errorRegistry;
                        }
                    

                    $this->audience = $value;
                    $this->_rawModelDataInput['audience'] = $audience;

                    

                    return $this;
                }
            

            /**
             * Extract the value, perform validations and set the property audience
             *
             * @param array $modelData
             *
             * @throws ErrorRegistryException
             */
            protected function processAudience(array $modelData): void
            {
                
                    if (!array_key_exists('audience', $modelData) && $this->audience === null) {
                        return;
                    }
                

                $value = array_key_exists('audience', $modelData) ? $modelData['audience'] : $this->audience;

                $value = (function ($value) {
    try {
        return is_array($value) ? new GetMediaBuyDeliveryRequest_Audienceb74ab1a9578935027e487e0c94dde617($value) : $value;
    } catch (\Exception $instantiationException) {
        
            $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Object\NestedObjectException($value ?? null, ...array (
  0 => 'audience',
  1 => $instantiationException,
)));
        

        
            return $instantiationException;
        
    }
})($value)
;

                $this->audience = $this->validateAudience($value, $modelData);
            }

            /**
             * Execute all validators for the property audience
             */
            protected function validateAudience($value, array $modelData)
            {
                
                    

if ((!is_object($value) && !$value instanceof UnitEnum) ) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Generic\InvalidTypeException($value ?? null, ...array (
  0 => 'audience',
  1 => 'object',
)));
}

                
                    

if (is_object($value) && !($value instanceof \Exception) && !($value instanceof GetMediaBuyDeliveryRequest_Audienceb74ab1a9578935027e487e0c94dde617)) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Object\InvalidInstanceOfException($value ?? null, ...array (
  0 => 'audience',
  1 => 'GetMediaBuyDeliveryRequest_Audienceb74ab1a9578935027e487e0c94dde617',
)));
}

                

                return $value;
            }
        
    
        
            
                /**
                 * Get the value of placement.
                 *
                 * Request placement breakdown.
                 *
                 * @return GetMediaBuyDeliveryRequest_Audienceb74ab1a9578935027e487e0c94dde617|null
                 */
                public function getPlacement(): ?GetMediaBuyDeliveryRequest_Audienceb74ab1a9578935027e487e0c94dde617
                {
                    

                    return $this->placement;
                }
            

            
                /**
                 * Set the value of placement.
                 *
                 * @param GetMediaBuyDeliveryRequest_Audienceb74ab1a9578935027e487e0c94dde617 $placement Request placement breakdown.
                 *
                 * @throws ErrorRegistryException
                 *
                 * @return static
                 */
                public function setPlacement(
                    GetMediaBuyDeliveryRequest_Audienceb74ab1a9578935027e487e0c94dde617 $placement
                ): static {
                    if ($this->placement === $placement) {
                        return $this;
                    }

                    $value = $modelData['placement'] = $placement;

                    
                        $this->_errorRegistry = new ErrorRegistryException();
                    

                    

                    $value = $this->validatePlacement($value, $modelData);

                    
                        if ($this->_errorRegistry->getErrors()) {
                            throw $this->_errorRegistry;
                        }
                    

                    $this->placement = $value;
                    $this->_rawModelDataInput['placement'] = $placement;

                    

                    return $this;
                }
            

            /**
             * Extract the value, perform validations and set the property placement
             *
             * @param array $modelData
             *
             * @throws ErrorRegistryException
             */
            protected function processPlacement(array $modelData): void
            {
                
                    if (!array_key_exists('placement', $modelData) && $this->placement === null) {
                        return;
                    }
                

                $value = array_key_exists('placement', $modelData) ? $modelData['placement'] : $this->placement;

                $value = (function ($value) {
    try {
        return is_array($value) ? new GetMediaBuyDeliveryRequest_Audienceb74ab1a9578935027e487e0c94dde617($value) : $value;
    } catch (\Exception $instantiationException) {
        
            $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Object\NestedObjectException($value ?? null, ...array (
  0 => 'placement',
  1 => $instantiationException,
)));
        

        
            return $instantiationException;
        
    }
})($value)
;

                $this->placement = $this->validatePlacement($value, $modelData);
            }

            /**
             * Execute all validators for the property placement
             */
            protected function validatePlacement($value, array $modelData)
            {
                
                    

if ((!is_object($value) && !$value instanceof UnitEnum) ) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Generic\InvalidTypeException($value ?? null, ...array (
  0 => 'placement',
  1 => 'object',
)));
}

                
                    

if (is_object($value) && !($value instanceof \Exception) && !($value instanceof GetMediaBuyDeliveryRequest_Audienceb74ab1a9578935027e487e0c94dde617)) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Object\InvalidInstanceOfException($value ?? null, ...array (
  0 => 'placement',
  1 => 'GetMediaBuyDeliveryRequest_Audienceb74ab1a9578935027e487e0c94dde617',
)));
}

                

                return $value;
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
    

    
        
            if (array_key_exists('geo', $modelData) &&
                $modelData['geo'] !== $this->geo
            ) {
                

                $rollbackValues['geo'] = $this->geo;
                $this->processGeo($modelData);
            }
        
    
        
            if (array_key_exists('device_type', $modelData) &&
                $modelData['device_type'] !== $this->deviceType
            ) {
                

                $rollbackValues['deviceType'] = $this->deviceType;
                $this->processDeviceType($modelData);
            }
        
    
        
            if (array_key_exists('device_platform', $modelData) &&
                $modelData['device_platform'] !== $this->devicePlatform
            ) {
                

                $rollbackValues['devicePlatform'] = $this->devicePlatform;
                $this->processDevicePlatform($modelData);
            }
        
    
        
            if (array_key_exists('audience', $modelData) &&
                $modelData['audience'] !== $this->audience
            ) {
                

                $rollbackValues['audience'] = $this->audience;
                $this->processAudience($modelData);
            }
        
    
        
            if (array_key_exists('placement', $modelData) &&
                $modelData['placement'] !== $this->placement
            ) {
                

                $rollbackValues['placement'] = $this->placement;
                $this->processPlacement($modelData);
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



}

// @codeCoverageIgnoreEnd
