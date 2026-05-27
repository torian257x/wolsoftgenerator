<?php

// @codingStandardsIgnoreFile
// @codeCoverageIgnoreStart

declare(strict_types = 1);


    namespace AdCP\MediaBuy;



    use PHPModelGenerator\Interfaces\BuilderInterface;

    use PHPModelGenerator\Exception\ErrorRegistryException;


/**
 * Builder class for GetMediaBuysResponse_ItemOfArrayJurisdictions8bf29d4207dd31b988e71fd7e02eded3
 */
class GetMediaBuysResponse_ItemOfArrayJurisdictions8bf29d4207dd31b988e71fd7e02eded3Builder implements BuilderInterface
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
     * Set up a new instance of GetMediaBuysResponse_ItemOfArrayJurisdictions8bf29d4207dd31b988e71fd7e02eded3 with fully validated properties
     */
    public function validate(): GetMediaBuysResponse_ItemOfArrayJurisdictions8bf29d4207dd31b988e71fd7e02eded3
    {
        $this->_array_walk_recursive_real(
            $this->_rawModelDataInput,
            function (&$property): void {
                if ($property instanceof BuilderInterface) {
                    $property = $property->getRawModelDataInput();
                }
            },
        );

        return new GetMediaBuysResponse_ItemOfArrayJurisdictions8bf29d4207dd31b988e71fd7e02eded3($this->_rawModelDataInput);
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
             * Get the value of country.
             *
             * ISO 3166-1 alpha-2 country code (e.g., 'US', 'DE', 'CN')
             *
             * @return string|null
             */
            public function getCountry(): ?string
            {
                return $this->_rawModelDataInput['country'] ?? null;
            }

            /**
             * Set the value of country.
             *
             * @param string $country ISO 3166-1 alpha-2 country code (e.g., 'US', 'DE', 'CN')
             *
             * {@link GetMediaBuysResponse_ItemOfArrayJurisdictions8bf29d4207dd31b988e71fd7e02eded3::processCountry}
             * 
             *
             * @return static
             */
            public function setCountry(
                string $country
            ): static {
                if (array_key_exists('country', $this->_rawModelDataInput)
                    && $this->_rawModelDataInput['country'] === $country
                ) {
                    return $this;
                }

                $value = $modelData['country'] = $country;

                

                

                $this->_rawModelDataInput['country'] = $value;

                return $this;
            }
        
    
        
            /**
             * Get the value of region.
             *
             * Sub-national region code (e.g., 'CA' for California, 'BY' for Bavaria)
             *
             * @return string|null
             */
            public function getRegion(): ?string
            {
                return $this->_rawModelDataInput['region'] ?? null;
            }

            /**
             * Set the value of region.
             *
             * @param string $region Sub-national region code (e.g., 'CA' for California, 'BY' for Bavaria)
             *
             * {@link GetMediaBuysResponse_ItemOfArrayJurisdictions8bf29d4207dd31b988e71fd7e02eded3::processRegion}
             * 
             *
             * @return static
             */
            public function setRegion(
                string $region
            ): static {
                if (array_key_exists('region', $this->_rawModelDataInput)
                    && $this->_rawModelDataInput['region'] === $region
                ) {
                    return $this;
                }

                $value = $modelData['region'] = $region;

                

                

                $this->_rawModelDataInput['region'] = $value;

                return $this;
            }
        
    
        
            /**
             * Get the value of regulation.
             *
             * Regulation identifier (e.g., 'eu_ai_act_article_50', 'ca_sb_942', 'cn_deep_synthesis')
             *
             * @return string|null
             */
            public function getRegulation(): ?string
            {
                return $this->_rawModelDataInput['regulation'] ?? null;
            }

            /**
             * Set the value of regulation.
             *
             * @param string $regulation Regulation identifier (e.g., 'eu_ai_act_article_50', 'ca_sb_942', 'cn_deep_synthesis')
             *
             * {@link GetMediaBuysResponse_ItemOfArrayJurisdictions8bf29d4207dd31b988e71fd7e02eded3::processRegulation}
             * 
             *
             * @return static
             */
            public function setRegulation(
                string $regulation
            ): static {
                if (array_key_exists('regulation', $this->_rawModelDataInput)
                    && $this->_rawModelDataInput['regulation'] === $regulation
                ) {
                    return $this;
                }

                $value = $modelData['regulation'] = $regulation;

                

                

                $this->_rawModelDataInput['regulation'] = $value;

                return $this;
            }
        
    
        
            /**
             * Get the value of label_text.
             *
             * Required disclosure label text for this jurisdiction, in the local language
             *
             * @return string|null
             */
            public function getLabelText(): ?string
            {
                return $this->_rawModelDataInput['label_text'] ?? null;
            }

            /**
             * Set the value of label_text.
             *
             * @param string $labelText Required disclosure label text for this jurisdiction, in the local language
             *
             * {@link GetMediaBuysResponse_ItemOfArrayJurisdictions8bf29d4207dd31b988e71fd7e02eded3::processLabelText}
             * 
             *
             * @return static
             */
            public function setLabelText(
                string $labelText
            ): static {
                if (array_key_exists('label_text', $this->_rawModelDataInput)
                    && $this->_rawModelDataInput['label_text'] === $labelText
                ) {
                    return $this;
                }

                $value = $modelData['label_text'] = $labelText;

                

                

                $this->_rawModelDataInput['label_text'] = $value;

                return $this;
            }
        
    
        
            /**
             * Get the value of render_guidance.
             *
             * How the disclosure should be rendered for this jurisdiction. Expresses the declaring party's intent for persistence and position based on regulatory requirements. Publishers control actual rendering but governance agents can audit whether guidance was followed.
             *
             * @return GetMediaBuysResponse_Render_Guidancebcdccbac33ae7c709062a325470f8bda|GetMediaBuysResponse_Render_Guidancebcdccbac33ae7c709062a325470f8bdaBuilder|array|null
             */
            public function getRenderGuidance(): mixed
            {
                return $this->_rawModelDataInput['render_guidance'] ?? null;
            }

            /**
             * Set the value of render_guidance.
             *
             * @param GetMediaBuysResponse_Render_Guidancebcdccbac33ae7c709062a325470f8bda|GetMediaBuysResponse_Render_Guidancebcdccbac33ae7c709062a325470f8bdaBuilder|array $renderGuidance How the disclosure should be rendered for this jurisdiction. Expresses the declaring party's intent for persistence and position based on regulatory requirements. Publishers control actual rendering but governance agents can audit whether guidance was followed.
             *
             * {@link GetMediaBuysResponse_ItemOfArrayJurisdictions8bf29d4207dd31b988e71fd7e02eded3::processRenderGuidance}
             * 
             *
             * @return static
             */
            public function setRenderGuidance(
                mixed $renderGuidance
            ): static {
                if (array_key_exists('render_guidance', $this->_rawModelDataInput)
                    && $this->_rawModelDataInput['render_guidance'] === $renderGuidance
                ) {
                    return $this;
                }

                $value = $modelData['render_guidance'] = $renderGuidance;

                

                

                $this->_rawModelDataInput['render_guidance'] = $value;

                return $this;
            }
        
    
}

// @codeCoverageIgnoreEnd
