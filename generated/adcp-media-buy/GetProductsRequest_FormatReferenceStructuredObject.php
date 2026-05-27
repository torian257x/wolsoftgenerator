<?php

// @codingStandardsIgnoreFile
// @codeCoverageIgnoreStart

declare(strict_types = 1);


    namespace AdCP\MediaBuy;



    use PHPModelGenerator\Interfaces\JSONModelInterface;

    use PHPModelGenerator\Traits\SerializableTrait;

    use JsonSerializable;

    use PHPModelGenerator\Interfaces\SerializationInterface;

    use PHPModelGenerator\Attributes\JsonPointer;

    use PHPModelGenerator\Attributes\SchemaName;

    use PHPModelGenerator\Attributes\Required;

    use PHPModelGenerator\Attributes\Internal;

    use PHPModelGenerator\Exception\ErrorRegistryException;


/**
 * Class GetProductsRequest_FormatReferenceStructuredObject
 * @package AdCP\MediaBuy 
 *
 * A JSON object — never a plain string — that identifies a creative format by its declaring agent and local slug. Required properties: agent_url (URI of the agent that owns the format) and id (slug matching [a-zA-Z0-9_-]+). Example: {"agent_url": "https://creative.adcontextprotocol.org", "id": "display_300x250"}. Can reference: (1) a concrete format with fixed dimensions (id only), (2) a template format without parameters (id only), or (3) a template format with parameters (id + dimensions/duration). Template formats accept parameters in format_id while concrete formats have fixed dimensions in their definition. Parameterized format IDs create unique, specific format variants. Using a plain string here is a schema violation.
 *
 * This is an auto-implemented class implemented by the php-json-schema-model-generator.
 * If you need to implement something in this class use inheritance. Else you will lose your changes if the classes
 * are re-generated.
 */

#[JsonPointer('/properties/filters/properties/format_ids/items')]

class GetProductsRequest_FormatReferenceStructuredObject implements JSONModelInterface, JsonSerializable, SerializationInterface
{
    use SerializableTrait;

    
        
            #[JsonPointer('/properties/filters/properties/format_ids/items/properties/agent_url')]
        
            #[SchemaName('agent_url')]
        
            #[Required]
        
        /** @var string URL of the agent that defines this format (e.g., 'https://creative.adcontextprotocol.org' for standard formats, or 'https://publisher.com/.well-known/adcp/sales' for custom formats). Callers comparing two `format-id` values MUST canonicalize `agent_url` per the AdCP URL canonicalization rules before treating two formats as the same. See docs/reference/url-canonicalization. */
        protected $agentUrl;
    
        
            #[JsonPointer('/properties/filters/properties/format_ids/items/properties/id')]
        
            #[SchemaName('id')]
        
            #[Required]
        
        /** @var string Format identifier within the agent's namespace (e.g., 'display_static', 'video_hosted', 'audio_standard'). When used alone, references a template format. When combined with dimension/duration fields, creates a parameterized format ID for a specific variant. */
        protected $id;
    
        
            #[JsonPointer('/properties/filters/properties/format_ids/items/properties/width')]
        
            #[SchemaName('width')]
        
        /** @var int|null Width in pixels for visual formats. When specified, height must also be specified. Both fields together create a parameterized format ID for dimension-specific variants. */
        protected $width;
    
        
            #[JsonPointer('/properties/filters/properties/format_ids/items/properties/height')]
        
            #[SchemaName('height')]
        
        /** @var int|null Height in pixels for visual formats. When specified, width must also be specified. Both fields together create a parameterized format ID for dimension-specific variants. */
        protected $height;
    
        
            #[JsonPointer('/properties/filters/properties/format_ids/items/properties/duration_ms')]
        
            #[SchemaName('duration_ms')]
        
        /** @var float|null Duration in milliseconds for time-based formats (video, audio). When specified, creates a parameterized format ID. Omit to reference a template format without parameters. */
        protected $durationMs;
    
        
            #[Internal]
        
        /** @var array Collect all additional properties provided to the schema */
        private $_additionalProperties = array (
);
    
        
            #[Internal]
        
        /** @var array Values which might be skipped for serialization if not provided */
        private $_skipNotProvidedPropertiesMap = array (
  2 => 'width',
  3 => 'height',
  4 => 'duration_ms',
);
    
    #[Internal]
    /** @var array */
    protected $_rawModelDataInput = [];

    
        #[Internal]
        /** @var ErrorRegistryException Collect all validation errors */
        protected $_errorRegistry;
    

    /**
     * GetProductsRequest_FormatReferenceStructuredObject constructor.
     *
     * @param array $rawModelDataInput
     *
     * @throws ErrorRegistryException
     */
    public function __construct(array $rawModelDataInput = [])
    {
        
            $this->_errorRegistry = new ErrorRegistryException();
        

        

        
            $this->executeBaseValidators($rawModelDataInput);
        

        
            
                $this->processAgentUrl($rawModelDataInput);
            
        
            
                $this->processId($rawModelDataInput);
            
        
            
                $this->processWidth($rawModelDataInput);
            
        
            
                $this->processHeight($rawModelDataInput);
            
        
            
                $this->processDurationMs($rawModelDataInput);
            
        
            
        
            
        

        
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
   'agent_url',
   'id',
   'width',
   'height',
   'duration_ms',
)) as $propertyKey) {
        

        $this->_additionalProperties[$propertyKey] = $value[$propertyKey];
    }

    return false;
})()) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Object\InvalidAdditionalPropertiesException($value ?? null, ...array (
  0 => 'GetProductsRequest_FormatReferenceStructuredObject',
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
                 * Get the value of agent_url.
                 *
                 * URL of the agent that defines this format (e.g., 'https://creative.adcontextprotocol.org' for standard formats, or 'https://publisher.com/.well-known/adcp/sales' for custom formats). Callers comparing two `format-id` values MUST canonicalize `agent_url` per the AdCP URL canonicalization rules before treating two formats as the same. See docs/reference/url-canonicalization.
                 *
                 * @return string
                 */
                public function getAgentUrl(): string
                {
                    

                    return $this->agentUrl;
                }
            

            
                /**
                 * Set the value of agent_url.
                 *
                 * @param string $agentUrl URL of the agent that defines this format (e.g., 'https://creative.adcontextprotocol.org' for standard formats, or 'https://publisher.com/.well-known/adcp/sales' for custom formats). Callers comparing two `format-id` values MUST canonicalize `agent_url` per the AdCP URL canonicalization rules before treating two formats as the same. See docs/reference/url-canonicalization.
                 *
                 * @throws ErrorRegistryException
                 *
                 * @return static
                 */
                public function setAgentUrl(
                    string $agentUrl
                ): static {
                    if ($this->agentUrl === $agentUrl) {
                        return $this;
                    }

                    $value = $modelData['agent_url'] = $agentUrl;

                    
                        $this->_errorRegistry = new ErrorRegistryException();
                    

                    

                    $value = $this->validateAgentUrl($value, $modelData);

                    
                        if ($this->_errorRegistry->getErrors()) {
                            throw $this->_errorRegistry;
                        }
                    

                    $this->agentUrl = $value;
                    $this->_rawModelDataInput['agent_url'] = $agentUrl;

                    

                    return $this;
                }
            

            /**
             * Extract the value, perform validations and set the property agentUrl
             *
             * @param array $modelData
             *
             * @throws ErrorRegistryException
             */
            protected function processAgentUrl(array $modelData): void
            {
                

                $value = array_key_exists('agent_url', $modelData) ? $modelData['agent_url'] : $this->agentUrl;

                

                $this->agentUrl = $this->validateAgentUrl($value, $modelData);
            }

            /**
             * Execute all validators for the property agentUrl
             */
            protected function validateAgentUrl($value, array $modelData)
            {
                
                    

if (!array_key_exists('agent_url', $modelData)) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Object\RequiredValueException($value ?? null, ...array (
  0 => 'agent_url',
)));
}

                
                    

if ((!is_string($value) && !$value instanceof UnitEnum) ) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Generic\InvalidTypeException($value ?? null, ...array (
  0 => 'agent_url',
  1 => 'string',
)));
}

                
                    

if (!\PHPModelGenerator\Format\UriFormatValidator::validate($value)) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\String\FormatException($value ?? null, ...array (
  0 => 'agent_url',
  1 => 'uri',
)));
}

                

                return $value;
            }
        
    
        
            
                /**
                 * Get the value of id.
                 *
                 * Format identifier within the agent's namespace (e.g., 'display_static', 'video_hosted', 'audio_standard'). When used alone, references a template format. When combined with dimension/duration fields, creates a parameterized format ID for a specific variant.
                 *
                 * @return string
                 */
                public function getId(): string
                {
                    

                    return $this->id;
                }
            

            
                /**
                 * Set the value of id.
                 *
                 * @param string $id Format identifier within the agent's namespace (e.g., 'display_static', 'video_hosted', 'audio_standard'). When used alone, references a template format. When combined with dimension/duration fields, creates a parameterized format ID for a specific variant.
                 *
                 * @throws ErrorRegistryException
                 *
                 * @return static
                 */
                public function setId(
                    string $id
                ): static {
                    if ($this->id === $id) {
                        return $this;
                    }

                    $value = $modelData['id'] = $id;

                    
                        $this->_errorRegistry = new ErrorRegistryException();
                    

                    

                    $value = $this->validateId($value, $modelData);

                    
                        if ($this->_errorRegistry->getErrors()) {
                            throw $this->_errorRegistry;
                        }
                    

                    $this->id = $value;
                    $this->_rawModelDataInput['id'] = $id;

                    

                    return $this;
                }
            

            /**
             * Extract the value, perform validations and set the property id
             *
             * @param array $modelData
             *
             * @throws ErrorRegistryException
             */
            protected function processId(array $modelData): void
            {
                

                $value = array_key_exists('id', $modelData) ? $modelData['id'] : $this->id;

                

                $this->id = $this->validateId($value, $modelData);
            }

            /**
             * Execute all validators for the property id
             */
            protected function validateId($value, array $modelData)
            {
                
                    

if (!array_key_exists('id', $modelData)) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Object\RequiredValueException($value ?? null, ...array (
  0 => 'id',
)));
}

                
                    

if ((!is_string($value) && !$value instanceof UnitEnum) ) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Generic\InvalidTypeException($value ?? null, ...array (
  0 => 'id',
  1 => 'string',
)));
}

                
                    

if (is_string($value) && !preg_match(base64_decode('L15bYS16QS1aMC05Xy1dKyQv'), $value)) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\String\PatternException($value ?? null, ...array (
  0 => 'id',
  1 => '^[a-zA-Z0-9_-]+$',
)));
}

                

                return $value;
            }
        
    
        
            
                /**
                 * Get the value of width.
                 *
                 * Width in pixels for visual formats. When specified, height must also be specified. Both fields together create a parameterized format ID for dimension-specific variants.
                 *
                 * @return int|null
                 */
                public function getWidth(): ?int
                {
                    

                    return $this->width;
                }
            

            
                /**
                 * Set the value of width.
                 *
                 * @param int $width Width in pixels for visual formats. When specified, height must also be specified. Both fields together create a parameterized format ID for dimension-specific variants.
                 *
                 * @throws ErrorRegistryException
                 *
                 * @return static
                 */
                public function setWidth(
                    int $width
                ): static {
                    if ($this->width === $width) {
                        return $this;
                    }

                    $value = $modelData['width'] = $width;

                    
                        $this->_errorRegistry = new ErrorRegistryException();
                    

                    

                    $value = $this->validateWidth($value, $modelData);

                    
                        if ($this->_errorRegistry->getErrors()) {
                            throw $this->_errorRegistry;
                        }
                    

                    $this->width = $value;
                    $this->_rawModelDataInput['width'] = $width;

                    

                    return $this;
                }
            

            /**
             * Extract the value, perform validations and set the property width
             *
             * @param array $modelData
             *
             * @throws ErrorRegistryException
             */
            protected function processWidth(array $modelData): void
            {
                
                    if (!array_key_exists('width', $modelData) && $this->width === null) {
                        return;
                    }
                

                $value = array_key_exists('width', $modelData) ? $modelData['width'] : $this->width;

                

                $this->width = $this->validateWidth($value, $modelData);
            }

            /**
             * Execute all validators for the property width
             */
            protected function validateWidth($value, array $modelData)
            {
                
                    

if ((!is_int($value) && !$value instanceof UnitEnum) ) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Generic\InvalidTypeException($value ?? null, ...array (
  0 => 'width',
  1 => 'int',
)));
}

                
                    

if (is_int($value) && $value < 1) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Number\MinimumException($value ?? null, ...array (
  0 => 'width',
  1 => 1,
)));
}

                
                    
$missingAttributes = [];
if (array_key_exists('width', $modelData) && (static function () use ($modelData, &$missingAttributes) {
    foreach (array (
   'height',
) as $dependency) {
        if (!array_key_exists($dependency, $modelData)) {
            $missingAttributes[] = $dependency;
        }
    }

    return !empty($missingAttributes);
})()) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Dependency\InvalidPropertyDependencyException($value ?? null, ...array (
  0 => 'width',
  1 => $missingAttributes,
)));
}

                

                return $value;
            }
        
    
        
            
                /**
                 * Get the value of height.
                 *
                 * Height in pixels for visual formats. When specified, width must also be specified. Both fields together create a parameterized format ID for dimension-specific variants.
                 *
                 * @return int|null
                 */
                public function getHeight(): ?int
                {
                    

                    return $this->height;
                }
            

            
                /**
                 * Set the value of height.
                 *
                 * @param int $height Height in pixels for visual formats. When specified, width must also be specified. Both fields together create a parameterized format ID for dimension-specific variants.
                 *
                 * @throws ErrorRegistryException
                 *
                 * @return static
                 */
                public function setHeight(
                    int $height
                ): static {
                    if ($this->height === $height) {
                        return $this;
                    }

                    $value = $modelData['height'] = $height;

                    
                        $this->_errorRegistry = new ErrorRegistryException();
                    

                    

                    $value = $this->validateHeight($value, $modelData);

                    
                        if ($this->_errorRegistry->getErrors()) {
                            throw $this->_errorRegistry;
                        }
                    

                    $this->height = $value;
                    $this->_rawModelDataInput['height'] = $height;

                    

                    return $this;
                }
            

            /**
             * Extract the value, perform validations and set the property height
             *
             * @param array $modelData
             *
             * @throws ErrorRegistryException
             */
            protected function processHeight(array $modelData): void
            {
                
                    if (!array_key_exists('height', $modelData) && $this->height === null) {
                        return;
                    }
                

                $value = array_key_exists('height', $modelData) ? $modelData['height'] : $this->height;

                

                $this->height = $this->validateHeight($value, $modelData);
            }

            /**
             * Execute all validators for the property height
             */
            protected function validateHeight($value, array $modelData)
            {
                
                    

if ((!is_int($value) && !$value instanceof UnitEnum) ) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Generic\InvalidTypeException($value ?? null, ...array (
  0 => 'height',
  1 => 'int',
)));
}

                
                    

if (is_int($value) && $value < 1) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Number\MinimumException($value ?? null, ...array (
  0 => 'height',
  1 => 1,
)));
}

                
                    
$missingAttributes = [];
if (array_key_exists('height', $modelData) && (static function () use ($modelData, &$missingAttributes) {
    foreach (array (
   'width',
) as $dependency) {
        if (!array_key_exists($dependency, $modelData)) {
            $missingAttributes[] = $dependency;
        }
    }

    return !empty($missingAttributes);
})()) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Dependency\InvalidPropertyDependencyException($value ?? null, ...array (
  0 => 'height',
  1 => $missingAttributes,
)));
}

                

                return $value;
            }
        
    
        
            
                /**
                 * Get the value of duration_ms.
                 *
                 * Duration in milliseconds for time-based formats (video, audio). When specified, creates a parameterized format ID. Omit to reference a template format without parameters.
                 *
                 * @return float|null
                 */
                public function getDurationMs(): ?float
                {
                    

                    return $this->durationMs;
                }
            

            
                /**
                 * Set the value of duration_ms.
                 *
                 * @param float $durationMs Duration in milliseconds for time-based formats (video, audio). When specified, creates a parameterized format ID. Omit to reference a template format without parameters.
                 *
                 * @throws ErrorRegistryException
                 *
                 * @return static
                 */
                public function setDurationMs(
                    float $durationMs
                ): static {
                    if ($this->durationMs === $durationMs) {
                        return $this;
                    }

                    $value = $modelData['duration_ms'] = $durationMs;

                    
                        $this->_errorRegistry = new ErrorRegistryException();
                    

                    

                    $value = $this->validateDurationMs($value, $modelData);

                    
                        if ($this->_errorRegistry->getErrors()) {
                            throw $this->_errorRegistry;
                        }
                    

                    $this->durationMs = $value;
                    $this->_rawModelDataInput['duration_ms'] = $durationMs;

                    

                    return $this;
                }
            

            /**
             * Extract the value, perform validations and set the property durationMs
             *
             * @param array $modelData
             *
             * @throws ErrorRegistryException
             */
            protected function processDurationMs(array $modelData): void
            {
                
                    if (!array_key_exists('duration_ms', $modelData) && $this->durationMs === null) {
                        return;
                    }
                

                $value = array_key_exists('duration_ms', $modelData) ? $modelData['duration_ms'] : $this->durationMs;

                $value = is_int($value) ? (float) $value : $value;

                $this->durationMs = $this->validateDurationMs($value, $modelData);
            }

            /**
             * Execute all validators for the property durationMs
             */
            protected function validateDurationMs($value, array $modelData)
            {
                
                    

if ((!is_float($value) && !$value instanceof UnitEnum) ) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Generic\InvalidTypeException($value ?? null, ...array (
  0 => 'duration_ms',
  1 => 'float',
)));
}

                
                    

if (is_float($value) && $value < 1) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Number\MinimumException($value ?? null, ...array (
  0 => 'duration_ms',
  1 => 1,
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
    

    
        
            if (array_key_exists('agent_url', $modelData) &&
                $modelData['agent_url'] !== $this->agentUrl
            ) {
                

                $rollbackValues['agentUrl'] = $this->agentUrl;
                $this->processAgentUrl($modelData);
            }
        
    
        
            if (array_key_exists('id', $modelData) &&
                $modelData['id'] !== $this->id
            ) {
                

                $rollbackValues['id'] = $this->id;
                $this->processId($modelData);
            }
        
    
        
            if (array_key_exists('width', $modelData) &&
                $modelData['width'] !== $this->width
            ) {
                

                $rollbackValues['width'] = $this->width;
                $this->processWidth($modelData);
            }
        
    
        
            if (array_key_exists('height', $modelData) &&
                $modelData['height'] !== $this->height
            ) {
                

                $rollbackValues['height'] = $this->height;
                $this->processHeight($modelData);
            }
        
    
        
            if (array_key_exists('duration_ms', $modelData) &&
                $modelData['duration_ms'] !== $this->durationMs
            ) {
                

                $rollbackValues['durationMs'] = $this->durationMs;
                $this->processDurationMs($modelData);
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
