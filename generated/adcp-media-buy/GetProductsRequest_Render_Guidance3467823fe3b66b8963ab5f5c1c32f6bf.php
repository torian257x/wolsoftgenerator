<?php

// @codingStandardsIgnoreFile
// @codeCoverageIgnoreStart

declare(strict_types = 1);


    namespace AdCP\MediaBuy;



    use PHPModelGenerator\Interfaces\JSONModelInterface;

    use UnitEnum;

    use AdCP\MediaBuy\Enums\DisclosurePersistence;

    use AdCP\MediaBuy\Enums\DisclosurePosition;

    use PHPModelGenerator\Traits\SerializableTrait;

    use JsonSerializable;

    use PHPModelGenerator\Interfaces\SerializationInterface;

    use AdCP\MediaBuy\Enums\GetProductsRequest_GetProductsRequest_ItemOfArrayRefineb01dc616de18c8735fba8f8095f15001d5b392d89eb0397d01ef36b451045a72Action;

    use AdCP\MediaBuy\Enums\GetProductsRequest_GetProductsRequest_ItemOfArrayRefineb01dc616de18c8735fba8f8095f15001966d960c0a8231c9cf148f923aed05adAction;

    use AdCP\MediaBuy\Enums\DigitalSourceType;

    use AdCP\MediaBuy\Enums\GetProductsRequest_ProvenanceHuman_Oversight;

    use AdCP\MediaBuy\Enums\GetProductsRequest_Declared_By13c986791ce55365e13a7cd5ff90f7dcRole;

    use AdCP\MediaBuy\Enums\EmbeddedProvenanceMethod;

    use AdCP\MediaBuy\Enums\WatermarkMediaType;

    use AdCP\MediaBuy\Enums\C2PAWatermarkAction;

    use AdCP\MediaBuy\Enums\GetProductsRequest_ItemOfArrayVerificationab0379bc9ff851960f9f645c9916029eResult;

    use AdCP\MediaBuy\Enums\CatalogType;

    use AdCP\MediaBuy\Enums\FeedFormat;

    use AdCP\MediaBuy\Enums\UpdateFrequency;

    use AdCP\MediaBuy\Enums\ContentIDType;

    use AdCP\MediaBuy\Enums\EventType;

    use AdCP\MediaBuy\Enums\GetProductsRequest_CatalogFieldMappingTransform;

    use PHPModelGenerator\Attributes\JsonPointer;

    use PHPModelGenerator\Attributes\SchemaName;

    use PHPModelGenerator\Attributes\Internal;

    use PHPModelGenerator\Exception\ErrorRegistryException;


/**
 * Class GetProductsRequest_Render_Guidance3467823fe3b66b8963ab5f5c1c32f6bf
 * @package AdCP\MediaBuy 
 *
 * How the disclosure should be rendered for this jurisdiction. Expresses the declaring party's intent for persistence and position based on regulatory requirements. Publishers control actual rendering but governance agents can audit whether guidance was followed.
 *
 * This is an auto-implemented class implemented by the php-json-schema-model-generator.
 * If you need to implement something in this class use inheritance. Else you will lose your changes if the classes
 * are re-generated.
 */

#[JsonPointer('/properties/account/oneOf/1/properties/brand/properties/brand_kit_override/properties/logo/properties/provenance/properties/disclosure/properties/jurisdictions/items/properties/render_guidance')]

class GetProductsRequest_Render_Guidance3467823fe3b66b8963ab5f5c1c32f6bf implements JSONModelInterface, JsonSerializable, SerializationInterface
{
    use SerializableTrait;

    
        
            #[JsonPointer('/$defs/DisclosurePersistence')]
        
            #[SchemaName('persistence')]
        
        /** @var DisclosurePersistence|null How long the disclosure must persist during content playback or display */
        protected $persistence;
    
        
            #[JsonPointer('/properties/account/oneOf/1/properties/brand/properties/brand_kit_override/properties/logo/properties/provenance/properties/disclosure/properties/jurisdictions/items/properties/render_guidance/properties/min_duration_ms')]
        
            #[SchemaName('min_duration_ms')]
        
        /** @var int|null Minimum display duration in milliseconds for initial persistence. Recommended when persistence is initial — without it, the duration is at the publisher's discretion. At serve time the publisher reads this from provenance since the brief is not available. */
        protected $minDurationMs;
    
        
            #[JsonPointer('/properties/account/oneOf/1/properties/brand/properties/brand_kit_override/properties/logo/properties/provenance/properties/disclosure/properties/jurisdictions/items/properties/render_guidance/properties/positions')]
        
            #[SchemaName('positions')]
        
        /** @var DisclosurePosition[]|null Preferred disclosure positions in priority order. The first position a format supports should be used. */
        protected $positions;
    
        
            #[JsonPointer('/properties/account/oneOf/1/properties/brand/properties/brand_kit_override/properties/logo/properties/provenance/properties/disclosure/properties/jurisdictions/items/properties/render_guidance/properties/ext')]
        
            #[SchemaName('ext')]
        
        /** @var GetProductsRequest_ExtensionObject|null Extension object for platform-specific, vendor-namespaced parameters. Extensions are always optional and must be namespaced under a vendor/platform key (e.g., ext.gam, ext.roku). Used for custom capabilities, partner-specific configuration, and features being proposed for standardization. */
        protected $ext;
    
        
            #[Internal]
        
        /** @var array Collect all additional properties provided to the schema */
        private $_additionalProperties = array (
);
    
        
            #[Internal]
        
        /** @var array Values which might be skipped for serialization if not provided */
        private $_skipNotProvidedPropertiesMap = array (
  0 => 'persistence',
  1 => 'min_duration_ms',
  2 => 'positions',
  3 => 'ext',
);
    
    #[Internal]
    /** @var array */
    protected $_rawModelDataInput = [];

    
        #[Internal]
        /** @var ErrorRegistryException Collect all validation errors */
        protected $_errorRegistry;
    

    /**
     * GetProductsRequest_Render_Guidance3467823fe3b66b8963ab5f5c1c32f6bf constructor.
     *
     * @param array $rawModelDataInput
     *
     * @throws ErrorRegistryException
     */
    public function __construct(array $rawModelDataInput = [])
    {
        
            $this->_errorRegistry = new ErrorRegistryException();
        

        

        
            $this->executeBaseValidators($rawModelDataInput);
        

        
            
                $this->processPersistence($rawModelDataInput);
            
        
            
                $this->processMinDurationMs($rawModelDataInput);
            
        
            
                $this->processPositions($rawModelDataInput);
            
        
            
                $this->processExt($rawModelDataInput);
            
        
            
        
            
        

        
            if (count($this->_errorRegistry->getErrors())) {
                throw $this->_errorRegistry;
            }
        

        $this->_rawModelDataInput = $rawModelDataInput;

        
    }

    
        protected function executeBaseValidators(array &$modelData): void
        {
            $value = &$modelData;

            
                

if (count(
            array_unique(
                array_merge(
                    array_keys($this->_rawModelDataInput),
                    array_keys($modelData),
                )
            ),
        ) < 1) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Object\MinPropertiesException($value ?? null, ...array (
  0 => 'GetProductsRequest_Render_Guidance3467823fe3b66b8963ab5f5c1c32f6bf',
  1 => 1,
)));
}

            
                

if ((function () use ($value) {
    foreach (array_diff(array_keys($value), array (
   'persistence',
   'min_duration_ms',
   'positions',
   'ext',
)) as $propertyKey) {
        

        $this->_additionalProperties[$propertyKey] = $value[$propertyKey];
    }

    return false;
})()) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Object\InvalidAdditionalPropertiesException($value ?? null, ...array (
  0 => 'GetProductsRequest_Render_Guidance3467823fe3b66b8963ab5f5c1c32f6bf',
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
                 * Get the value of persistence.
                 *
                 * How long the disclosure must persist during content playback or display
                 *
                 * @return DisclosurePersistence|null
                 */
                public function getPersistence(): ?DisclosurePersistence
                {
                    

                    return $this->persistence;
                }
            

            
                /**
                 * Set the value of persistence.
                 *
                 * @param string|DisclosurePersistence|null $persistence How long the disclosure must persist during content playback or display
                 *
                 * @throws ErrorRegistryException
                 *
                 * @return static
                 */
                public function setPersistence(
                    string | DisclosurePersistence | UnitEnum | null $persistence
                ): static {
                    if ($this->persistence === $persistence) {
                        return $this;
                    }

                    $value = $modelData['persistence'] = $persistence;

                    
                        $this->_errorRegistry = new ErrorRegistryException();
                    

                    

                    $value = $this->validatePersistence($value, $modelData);

                    
                        if ($this->_errorRegistry->getErrors()) {
                            throw $this->_errorRegistry;
                        }
                    

                    $this->persistence = $value;
                    $this->_rawModelDataInput['persistence'] = $persistence;

                    

                    return $this;
                }
            

            /**
             * Extract the value, perform validations and set the property persistence
             *
             * @param array $modelData
             *
             * @throws ErrorRegistryException
             */
            protected function processPersistence(array $modelData): void
            {
                
                    if (!array_key_exists('persistence', $modelData) && $this->persistence === null) {
                        return;
                    }
                

                $value = array_key_exists('persistence', $modelData) ? $modelData['persistence'] : $this->persistence;

                

                $this->persistence = $this->validatePersistence($value, $modelData);
            }

            /**
             * Execute all validators for the property persistence
             */
            protected function validatePersistence($value, array $modelData)
            {
                
                    

if ($value instanceof UnitEnum && !($value instanceof DisclosurePersistence)) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Generic\InvalidTypeException($value ?? null, ...array (
  0 => 'persistence',
  1 => 'DisclosurePersistence',
)));
}

                
                    

if ($value instanceof UnitEnum && !($value instanceof DisclosurePersistence)) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Generic\InvalidTypeException($value ?? null, ...array (
  0 => 'persistence',
  1 => 'DisclosurePersistence',
)));
}

                
                    

if (!($value instanceof UnitEnum) && (!is_string($value) && !$value instanceof UnitEnum) ) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Generic\InvalidTypeException($value ?? null, ...array (
  0 => 'persistence',
  1 => 
  array (
    0 => 'UnitEnum',
    1 => 'string',
  ),
)));
}

                
                    

if (!($value instanceof UnitEnum) && !in_array($value, array (
   'continuous',
   'initial',
   'flexible',
), true)) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Generic\EnumException($value ?? null, ...array (
  0 => 'persistence',
  1 => 
  array (
    0 => 'continuous',
    1 => 'initial',
    2 => 'flexible',
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
  'fqcn' => 'AdCP\\MediaBuy\\Enums\\DisclosurePersistence',
));
        } catch (\Throwable $filterException) {
            
                $transformationFailed = true;
            

            $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Filter\InvalidFilterValueException($value ?? null, ...array (
  0 => 'persistence',
  1 => 'php_model_generator_enum',
  2 => $filterException,
)));
        }

        return false;
    })($value)
)) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Filter\IncompatibleFilterException($value ?? null, ...array (
  0 => 'persistence',
  1 => 'php_model_generator_enum',
)));
}

                
                    
$transformationFailed = false;
if (!($value instanceof UnitEnum) && 
(
    
    (function (&$value) use (&$transformationFailed): bool {
        // make sure exceptions from the filter are caught and added to the error handling
        try {
            $value = \PHPModelGenerator\Filter\Enum::filter($value, array (
  'fqcn' => 'AdCP\\MediaBuy\\Enums\\DisclosurePersistence',
));
        } catch (\Throwable $filterException) {
            
                $transformationFailed = true;
            

            $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Filter\InvalidFilterValueException($value ?? null, ...array (
  0 => 'persistence',
  1 => 'php_model_generator_enum',
  2 => $filterException,
)));
        }

        return false;
    })($value)
)) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Filter\IncompatibleFilterException($value ?? null, ...array (
  0 => 'persistence',
  1 => 'php_model_generator_enum',
)));
}

                

                return $value;
            }
        
    
        
            
                /**
                 * Get the value of min_duration_ms.
                 *
                 * Minimum display duration in milliseconds for initial persistence. Recommended when persistence is initial — without it, the duration is at the publisher's discretion. At serve time the publisher reads this from provenance since the brief is not available.
                 *
                 * @return int|null
                 */
                public function getMinDurationMs(): ?int
                {
                    

                    return $this->minDurationMs;
                }
            

            
                /**
                 * Set the value of min_duration_ms.
                 *
                 * @param int $minDurationMs Minimum display duration in milliseconds for initial persistence. Recommended when persistence is initial — without it, the duration is at the publisher's discretion. At serve time the publisher reads this from provenance since the brief is not available.
                 *
                 * @throws ErrorRegistryException
                 *
                 * @return static
                 */
                public function setMinDurationMs(
                    int $minDurationMs
                ): static {
                    if ($this->minDurationMs === $minDurationMs) {
                        return $this;
                    }

                    $value = $modelData['min_duration_ms'] = $minDurationMs;

                    
                        $this->_errorRegistry = new ErrorRegistryException();
                    

                    

                    $value = $this->validateMinDurationMs($value, $modelData);

                    
                        if ($this->_errorRegistry->getErrors()) {
                            throw $this->_errorRegistry;
                        }
                    

                    $this->minDurationMs = $value;
                    $this->_rawModelDataInput['min_duration_ms'] = $minDurationMs;

                    

                    return $this;
                }
            

            /**
             * Extract the value, perform validations and set the property minDurationMs
             *
             * @param array $modelData
             *
             * @throws ErrorRegistryException
             */
            protected function processMinDurationMs(array $modelData): void
            {
                
                    if (!array_key_exists('min_duration_ms', $modelData) && $this->minDurationMs === null) {
                        return;
                    }
                

                $value = array_key_exists('min_duration_ms', $modelData) ? $modelData['min_duration_ms'] : $this->minDurationMs;

                

                $this->minDurationMs = $this->validateMinDurationMs($value, $modelData);
            }

            /**
             * Execute all validators for the property minDurationMs
             */
            protected function validateMinDurationMs($value, array $modelData)
            {
                
                    

if ((!is_int($value) && !$value instanceof UnitEnum) ) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Generic\InvalidTypeException($value ?? null, ...array (
  0 => 'min_duration_ms',
  1 => 'int',
)));
}

                
                    

if (is_int($value) && $value < 1) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Number\MinimumException($value ?? null, ...array (
  0 => 'min_duration_ms',
  1 => 1,
)));
}

                

                return $value;
            }
        
    
        
            
                /**
                 * Get the value of positions.
                 *
                 * Preferred disclosure positions in priority order. The first position a format supports should be used.
                 *
                 * @return DisclosurePosition[]|null
                 */
                public function getPositions(): array | DisclosurePosition | null
                {
                    

                    return $this->positions;
                }
            

            
                /**
                 * Set the value of positions.
                 *
                 * @param string[]|DisclosurePosition[]|null $positions Preferred disclosure positions in priority order. The first position a format supports should be used.
                 *
                 * @throws ErrorRegistryException
                 *
                 * @return static
                 */
                public function setPositions(
                    array | DisclosurePosition | null $positions
                ): static {
                    if ($this->positions === $positions) {
                        return $this;
                    }

                    $value = $modelData['positions'] = $positions;

                    
                        $this->_errorRegistry = new ErrorRegistryException();
                    

                    

                    $value = $this->validatePositions($value, $modelData);

                    
                        if ($this->_errorRegistry->getErrors()) {
                            throw $this->_errorRegistry;
                        }
                    

                    $this->positions = $value;
                    $this->_rawModelDataInput['positions'] = $positions;

                    

                    return $this;
                }
            

            /**
             * Extract the value, perform validations and set the property positions
             *
             * @param array $modelData
             *
             * @throws ErrorRegistryException
             */
            protected function processPositions(array $modelData): void
            {
                
                    if (!array_key_exists('positions', $modelData) && $this->positions === null) {
                        return;
                    }
                

                $value = array_key_exists('positions', $modelData) ? $modelData['positions'] : $this->positions;

                

                $this->positions = $this->validatePositions($value, $modelData);
            }

            /**
             * Execute all validators for the property positions
             */
            protected function validatePositions($value, array $modelData)
            {
                
                    

if ((!is_array($value) && !$value instanceof UnitEnum) ) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Generic\InvalidTypeException($value ?? null, ...array (
  0 => 'positions',
  1 => 'array',
)));
}

                
                    $this->validatePositions_ArrayItem_0079e3b7e668ba43b97eec6069d58685($value, $modelData);
                
                    

if (is_array($value) && count($value) < 1) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Arrays\MinItemsException($value ?? null, ...array (
  0 => 'positions',
  1 => 1,
)));
}

                
                    

if (is_array($value) && (static function (array $items): bool {
    if (empty($items)) {
        return false;
    }

    asort($items);
    $lastSeen = array_shift($items);

    foreach ($items as $value) {
        if ($value === $lastSeen) {
            return true;
        }

        $lastSeen = $value;
    }

    return false;
})($value)) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Arrays\UniqueItemsException($value ?? null, ...array (
  0 => 'positions',
)));
}

                

                return $value;
            }
        
    
        
            
                /**
                 * Get the value of ext.
                 *
                 * Extension object for platform-specific, vendor-namespaced parameters. Extensions are always optional and must be namespaced under a vendor/platform key (e.g., ext.gam, ext.roku). Used for custom capabilities, partner-specific configuration, and features being proposed for standardization.
                 *
                 * @return GetProductsRequest_ExtensionObject|null
                 */
                public function getExt(): ?GetProductsRequest_ExtensionObject
                {
                    

                    return $this->ext;
                }
            

            
                /**
                 * Set the value of ext.
                 *
                 * @param GetProductsRequest_ExtensionObject $ext Extension object for platform-specific, vendor-namespaced parameters. Extensions are always optional and must be namespaced under a vendor/platform key (e.g., ext.gam, ext.roku). Used for custom capabilities, partner-specific configuration, and features being proposed for standardization.
                 *
                 * @throws ErrorRegistryException
                 *
                 * @return static
                 */
                public function setExt(
                    GetProductsRequest_ExtensionObject $ext
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
        return is_array($value) ? new GetProductsRequest_ExtensionObject($value) : $value;
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

                
                    

if (is_object($value) && !($value instanceof \Exception) && !($value instanceof GetProductsRequest_ExtensionObject)) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Object\InvalidInstanceOfException($value ?? null, ...array (
  0 => 'ext',
  1 => 'GetProductsRequest_ExtensionObject',
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
    

    
        
            if (array_key_exists('persistence', $modelData) &&
                $modelData['persistence'] !== $this->persistence
            ) {
                

                $rollbackValues['persistence'] = $this->persistence;
                $this->processPersistence($modelData);
            }
        
    
        
            if (array_key_exists('min_duration_ms', $modelData) &&
                $modelData['min_duration_ms'] !== $this->minDurationMs
            ) {
                

                $rollbackValues['minDurationMs'] = $this->minDurationMs;
                $this->processMinDurationMs($modelData);
            }
        
    
        
            if (array_key_exists('positions', $modelData) &&
                $modelData['positions'] !== $this->positions
            ) {
                

                $rollbackValues['positions'] = $this->positions;
                $this->processPositions($modelData);
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
 * serialize the property persistence
 */
protected function serializePersistence()
{
    return \PHPModelGenerator\Filter\Enum::serialize($this->persistence, array (
  'fqcn' => 'AdCP\\MediaBuy\\Enums\\DisclosurePersistence',
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


private function validatePositions_ArrayItem_0079e3b7e668ba43b97eec6069d58685(&$value, $modelData): void {
                    $invalidItems_e3e7acf32dee57871a5c97b45bd7f2a9 = [];
                    
                    if (is_array($value) && (function (&$items) use (&$invalidItems_e3e7acf32dee57871a5c97b45bd7f2a9, $modelData) {
    
        $originalErrorRegistry = $this->_errorRegistry;
    

    foreach ($items as $index => &$value) {
        
            $this->_errorRegistry = new ErrorRegistryException();
        

        try {
            

            
                

if ($value instanceof UnitEnum && !($value instanceof DisclosurePosition)) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Generic\InvalidTypeException($value ?? null, ...array (
  0 => 'item of array positions',
  1 => 'DisclosurePosition',
)));
}

            
                

if ($value instanceof UnitEnum && !($value instanceof DisclosurePosition)) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Generic\InvalidTypeException($value ?? null, ...array (
  0 => 'item of array positions',
  1 => 'DisclosurePosition',
)));
}

            
                

if ((!is_string($value) && !$value instanceof UnitEnum) ) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Generic\InvalidTypeException($value ?? null, ...array (
  0 => 'item of array positions',
  1 => 'string',
)));
}

            
                

if (!($value instanceof UnitEnum) && !in_array($value, array (
   'prominent',
   'footer',
   'audio',
   'subtitle',
   'overlay',
   'end_card',
   'pre_roll',
   'companion',
), true)) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Generic\EnumException($value ?? null, ...array (
  0 => 'item of array positions',
  1 => 
  array (
    0 => 'prominent',
    1 => 'footer',
    2 => 'audio',
    3 => 'subtitle',
    4 => 'overlay',
    5 => 'end_card',
    6 => 'pre_roll',
    7 => 'companion',
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
  'fqcn' => 'AdCP\\MediaBuy\\Enums\\DisclosurePosition',
));
        } catch (\Throwable $filterException) {
            
                $transformationFailed = true;
            

            $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Filter\InvalidFilterValueException($value ?? null, ...array (
  0 => 'item of array positions',
  1 => 'php_model_generator_enum',
  2 => $filterException,
)));
        }

        return false;
    })($value)
)) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Filter\IncompatibleFilterException($value ?? null, ...array (
  0 => 'item of array positions',
  1 => 'php_model_generator_enum',
)));
}

            
                
$transformationFailed = false;
if (!($value instanceof UnitEnum) && 
(
    
    (function (&$value) use (&$transformationFailed): bool {
        // make sure exceptions from the filter are caught and added to the error handling
        try {
            $value = \PHPModelGenerator\Filter\Enum::filter($value, array (
  'fqcn' => 'AdCP\\MediaBuy\\Enums\\DisclosurePosition',
));
        } catch (\Throwable $filterException) {
            
                $transformationFailed = true;
            

            $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Filter\InvalidFilterValueException($value ?? null, ...array (
  0 => 'item of array positions',
  1 => 'php_model_generator_enum',
  2 => $filterException,
)));
        }

        return false;
    })($value)
)) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Filter\IncompatibleFilterException($value ?? null, ...array (
  0 => 'item of array positions',
  1 => 'php_model_generator_enum',
)));
}

            

            
                if ($this->_errorRegistry->getErrors()) {
                    $invalidItems_e3e7acf32dee57871a5c97b45bd7f2a9[$index] = $this->_errorRegistry->getErrors();
                }
            
        } catch (\Exception $e) {
            // collect all errors concerning invalid items
            isset($invalidItems_e3e7acf32dee57871a5c97b45bd7f2a9[$index])
                ? $invalidItems_e3e7acf32dee57871a5c97b45bd7f2a9[$index][] = $e
                : $invalidItems_e3e7acf32dee57871a5c97b45bd7f2a9[$index] = [$e];
        }
    }

    
        $this->_errorRegistry = $originalErrorRegistry;
    

    return !empty($invalidItems_e3e7acf32dee57871a5c97b45bd7f2a9);
})($value)) {
                        $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Arrays\InvalidItemException($value ?? null, ...array (
  0 => 'positions',
  1 => $invalidItems_e3e7acf32dee57871a5c97b45bd7f2a9,
)));
                    }
                }


}

// @codeCoverageIgnoreEnd
