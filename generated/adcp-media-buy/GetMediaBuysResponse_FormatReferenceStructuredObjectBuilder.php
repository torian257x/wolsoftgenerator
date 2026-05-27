<?php

// @codingStandardsIgnoreFile
// @codeCoverageIgnoreStart

declare(strict_types = 1);


    namespace AdCP\MediaBuy;



    use PHPModelGenerator\Interfaces\BuilderInterface;

    use PHPModelGenerator\Exception\ErrorRegistryException;


/**
 * Builder class for GetMediaBuysResponse_FormatReferenceStructuredObject
 */
class GetMediaBuysResponse_FormatReferenceStructuredObjectBuilder implements BuilderInterface
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
     * Set up a new instance of GetMediaBuysResponse_FormatReferenceStructuredObject with fully validated properties
     */
    public function validate(): GetMediaBuysResponse_FormatReferenceStructuredObject
    {
        $this->_array_walk_recursive_real(
            $this->_rawModelDataInput,
            function (&$property): void {
                if ($property instanceof BuilderInterface) {
                    $property = $property->getRawModelDataInput();
                }
            },
        );

        return new GetMediaBuysResponse_FormatReferenceStructuredObject($this->_rawModelDataInput);
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
             * Get the value of agent_url.
             *
             * URL of the agent that defines this format (e.g., 'https://creative.adcontextprotocol.org' for standard formats, or 'https://publisher.com/.well-known/adcp/sales' for custom formats). Callers comparing two `format-id` values MUST canonicalize `agent_url` per the AdCP URL canonicalization rules before treating two formats as the same. See docs/reference/url-canonicalization.
             *
             * @return string|null
             */
            public function getAgentUrl(): ?string
            {
                return $this->_rawModelDataInput['agent_url'] ?? null;
            }

            /**
             * Set the value of agent_url.
             *
             * @param string $agentUrl URL of the agent that defines this format (e.g., 'https://creative.adcontextprotocol.org' for standard formats, or 'https://publisher.com/.well-known/adcp/sales' for custom formats). Callers comparing two `format-id` values MUST canonicalize `agent_url` per the AdCP URL canonicalization rules before treating two formats as the same. See docs/reference/url-canonicalization.
             *
             * {@link GetMediaBuysResponse_FormatReferenceStructuredObject::processAgentUrl}
             * 
             *
             * @return static
             */
            public function setAgentUrl(
                string $agentUrl
            ): static {
                if (array_key_exists('agent_url', $this->_rawModelDataInput)
                    && $this->_rawModelDataInput['agent_url'] === $agentUrl
                ) {
                    return $this;
                }

                $value = $modelData['agent_url'] = $agentUrl;

                

                

                $this->_rawModelDataInput['agent_url'] = $value;

                return $this;
            }
        
    
        
            /**
             * Get the value of id.
             *
             * Format identifier within the agent's namespace (e.g., 'display_static', 'video_hosted', 'audio_standard'). When used alone, references a template format. When combined with dimension/duration fields, creates a parameterized format ID for a specific variant.
             *
             * @return string|null
             */
            public function getId(): ?string
            {
                return $this->_rawModelDataInput['id'] ?? null;
            }

            /**
             * Set the value of id.
             *
             * @param string $id Format identifier within the agent's namespace (e.g., 'display_static', 'video_hosted', 'audio_standard'). When used alone, references a template format. When combined with dimension/duration fields, creates a parameterized format ID for a specific variant.
             *
             * {@link GetMediaBuysResponse_FormatReferenceStructuredObject::processId}
             * 
             *
             * @return static
             */
            public function setId(
                string $id
            ): static {
                if (array_key_exists('id', $this->_rawModelDataInput)
                    && $this->_rawModelDataInput['id'] === $id
                ) {
                    return $this;
                }

                $value = $modelData['id'] = $id;

                

                

                $this->_rawModelDataInput['id'] = $value;

                return $this;
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
                return $this->_rawModelDataInput['width'] ?? null;
            }

            /**
             * Set the value of width.
             *
             * @param int $width Width in pixels for visual formats. When specified, height must also be specified. Both fields together create a parameterized format ID for dimension-specific variants.
             *
             * {@link GetMediaBuysResponse_FormatReferenceStructuredObject::processWidth}
             * 
             *
             * @return static
             */
            public function setWidth(
                int $width
            ): static {
                if (array_key_exists('width', $this->_rawModelDataInput)
                    && $this->_rawModelDataInput['width'] === $width
                ) {
                    return $this;
                }

                $value = $modelData['width'] = $width;

                

                

                $this->_rawModelDataInput['width'] = $value;

                return $this;
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
                return $this->_rawModelDataInput['height'] ?? null;
            }

            /**
             * Set the value of height.
             *
             * @param int $height Height in pixels for visual formats. When specified, width must also be specified. Both fields together create a parameterized format ID for dimension-specific variants.
             *
             * {@link GetMediaBuysResponse_FormatReferenceStructuredObject::processHeight}
             * 
             *
             * @return static
             */
            public function setHeight(
                int $height
            ): static {
                if (array_key_exists('height', $this->_rawModelDataInput)
                    && $this->_rawModelDataInput['height'] === $height
                ) {
                    return $this;
                }

                $value = $modelData['height'] = $height;

                

                

                $this->_rawModelDataInput['height'] = $value;

                return $this;
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
                return $this->_rawModelDataInput['duration_ms'] ?? null;
            }

            /**
             * Set the value of duration_ms.
             *
             * @param float $durationMs Duration in milliseconds for time-based formats (video, audio). When specified, creates a parameterized format ID. Omit to reference a template format without parameters.
             *
             * {@link GetMediaBuysResponse_FormatReferenceStructuredObject::processDurationMs}
             * 
             *
             * @return static
             */
            public function setDurationMs(
                float $durationMs
            ): static {
                if (array_key_exists('duration_ms', $this->_rawModelDataInput)
                    && $this->_rawModelDataInput['duration_ms'] === $durationMs
                ) {
                    return $this;
                }

                $value = $modelData['duration_ms'] = $durationMs;

                

                

                $this->_rawModelDataInput['duration_ms'] = $value;

                return $this;
            }
        
    
}

// @codeCoverageIgnoreEnd
