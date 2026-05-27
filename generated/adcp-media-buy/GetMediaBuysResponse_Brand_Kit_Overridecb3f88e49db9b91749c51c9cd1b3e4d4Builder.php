<?php

// @codingStandardsIgnoreFile
// @codeCoverageIgnoreStart

declare(strict_types = 1);


    namespace AdCP\MediaBuy;



    use PHPModelGenerator\Interfaces\BuilderInterface;

    use PHPModelGenerator\Exception\ErrorRegistryException;


/**
 * Builder class for GetMediaBuysResponse_Brand_Kit_Overridecb3f88e49db9b91749c51c9cd1b3e4d4
 */
class GetMediaBuysResponse_Brand_Kit_Overridecb3f88e49db9b91749c51c9cd1b3e4d4Builder implements BuilderInterface
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
     * Set up a new instance of GetMediaBuysResponse_Brand_Kit_Overridecb3f88e49db9b91749c51c9cd1b3e4d4 with fully validated properties
     */
    public function validate(): GetMediaBuysResponse_Brand_Kit_Overridecb3f88e49db9b91749c51c9cd1b3e4d4
    {
        $this->_array_walk_recursive_real(
            $this->_rawModelDataInput,
            function (&$property): void {
                if ($property instanceof BuilderInterface) {
                    $property = $property->getRawModelDataInput();
                }
            },
        );

        return new GetMediaBuysResponse_Brand_Kit_Overridecb3f88e49db9b91749c51c9cd1b3e4d4($this->_rawModelDataInput);
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
             * Get the value of logo.
             *
             * Override logo asset.
             *
             * @return GetMediaBuysResponse_ImageAsset|GetMediaBuysResponse_ImageAssetBuilder|array|null
             */
            public function getLogo(): mixed
            {
                return $this->_rawModelDataInput['logo'] ?? null;
            }

            /**
             * Set the value of logo.
             *
             * @param GetMediaBuysResponse_ImageAsset|GetMediaBuysResponse_ImageAssetBuilder|array $logo Override logo asset.
             *
             * {@link GetMediaBuysResponse_Brand_Kit_Overridecb3f88e49db9b91749c51c9cd1b3e4d4::processLogo}
             * 
             *
             * @return static
             */
            public function setLogo(
                mixed $logo
            ): static {
                if (array_key_exists('logo', $this->_rawModelDataInput)
                    && $this->_rawModelDataInput['logo'] === $logo
                ) {
                    return $this;
                }

                $value = $modelData['logo'] = $logo;

                

                

                $this->_rawModelDataInput['logo'] = $value;

                return $this;
            }
        
    
        
            /**
             * Get the value of colors.
             *
             * Override brand colors (hex strings).
             *
             * @return GetMediaBuysResponse_Colors58142eaea10c7af98af1bebfac793b60|GetMediaBuysResponse_Colors58142eaea10c7af98af1bebfac793b60Builder|array|null
             */
            public function getColors(): mixed
            {
                return $this->_rawModelDataInput['colors'] ?? null;
            }

            /**
             * Set the value of colors.
             *
             * @param GetMediaBuysResponse_Colors58142eaea10c7af98af1bebfac793b60|GetMediaBuysResponse_Colors58142eaea10c7af98af1bebfac793b60Builder|array $colors Override brand colors (hex strings).
             *
             * {@link GetMediaBuysResponse_Brand_Kit_Overridecb3f88e49db9b91749c51c9cd1b3e4d4::processColors}
             * 
             *
             * @return static
             */
            public function setColors(
                mixed $colors
            ): static {
                if (array_key_exists('colors', $this->_rawModelDataInput)
                    && $this->_rawModelDataInput['colors'] === $colors
                ) {
                    return $this;
                }

                $value = $modelData['colors'] = $colors;

                

                

                $this->_rawModelDataInput['colors'] = $value;

                return $this;
            }
        
    
        
            /**
             * Get the value of voice.
             *
             * Override brand-voice description for surface-composed text/audio output.
             *
             * @return string|null
             */
            public function getVoice(): ?string
            {
                return $this->_rawModelDataInput['voice'] ?? null;
            }

            /**
             * Set the value of voice.
             *
             * @param string $voice Override brand-voice description for surface-composed text/audio output.
             *
             * {@link GetMediaBuysResponse_Brand_Kit_Overridecb3f88e49db9b91749c51c9cd1b3e4d4::processVoice}
             * 
             *
             * @return static
             */
            public function setVoice(
                string $voice
            ): static {
                if (array_key_exists('voice', $this->_rawModelDataInput)
                    && $this->_rawModelDataInput['voice'] === $voice
                ) {
                    return $this;
                }

                $value = $modelData['voice'] = $voice;

                

                

                $this->_rawModelDataInput['voice'] = $value;

                return $this;
            }
        
    
        
            /**
             * Get the value of tagline.
             *
             * Override tagline.
             *
             * @return string|null
             */
            public function getTagline(): ?string
            {
                return $this->_rawModelDataInput['tagline'] ?? null;
            }

            /**
             * Set the value of tagline.
             *
             * @param string $tagline Override tagline.
             *
             * {@link GetMediaBuysResponse_Brand_Kit_Overridecb3f88e49db9b91749c51c9cd1b3e4d4::processTagline}
             * 
             *
             * @return static
             */
            public function setTagline(
                string $tagline
            ): static {
                if (array_key_exists('tagline', $this->_rawModelDataInput)
                    && $this->_rawModelDataInput['tagline'] === $tagline
                ) {
                    return $this;
                }

                $value = $modelData['tagline'] = $tagline;

                

                

                $this->_rawModelDataInput['tagline'] = $value;

                return $this;
            }
        
    
}

// @codeCoverageIgnoreEnd
