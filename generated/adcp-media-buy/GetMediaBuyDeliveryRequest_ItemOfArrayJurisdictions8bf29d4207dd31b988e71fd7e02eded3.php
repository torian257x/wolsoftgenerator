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

    use AdCP\MediaBuy\Enums\DisclosurePersistence;

    use AdCP\MediaBuy\Enums\DisclosurePosition;

    use PHPModelGenerator\Attributes\JsonPointer;

    use PHPModelGenerator\Attributes\SchemaName;

    use PHPModelGenerator\Attributes\Required;

    use PHPModelGenerator\Attributes\Internal;

    use PHPModelGenerator\Exception\ErrorRegistryException;


/**
 * Class GetMediaBuyDeliveryRequest_ItemOfArrayJurisdictions8bf29d4207dd31b988e71fd7e02eded3
 * @package AdCP\MediaBuy 
 *

 * This is an auto-implemented class implemented by the php-json-schema-model-generator.
 * If you need to implement something in this class use inheritance. Else you will lose your changes if the classes
 * are re-generated.
 */

#[JsonPointer('/properties/account/oneOf/1/properties/brand/properties/brand_kit_override/properties/logo/properties/provenance/properties/disclosure/properties/jurisdictions/items')]

class GetMediaBuyDeliveryRequest_ItemOfArrayJurisdictions8bf29d4207dd31b988e71fd7e02eded3 implements JSONModelInterface, JsonSerializable, SerializationInterface
{
    use SerializableTrait;

    
        
            #[JsonPointer('/properties/account/oneOf/1/properties/brand/properties/brand_kit_override/properties/logo/properties/provenance/properties/disclosure/properties/jurisdictions/items/properties/country')]
        
            #[SchemaName('country')]
        
            #[Required]
        
        /** @var string ISO 3166-1 alpha-2 country code (e.g., 'US', 'DE', 'CN') */
        protected $country;
    
        
            #[JsonPointer('/properties/account/oneOf/1/properties/brand/properties/brand_kit_override/properties/logo/properties/provenance/properties/disclosure/properties/jurisdictions/items/properties/region')]
        
            #[SchemaName('region')]
        
        /** @var string|null Sub-national region code (e.g., 'CA' for California, 'BY' for Bavaria) */
        protected $region;
    
        
            #[JsonPointer('/properties/account/oneOf/1/properties/brand/properties/brand_kit_override/properties/logo/properties/provenance/properties/disclosure/properties/jurisdictions/items/properties/regulation')]
        
            #[SchemaName('regulation')]
        
            #[Required]
        
        /** @var string Regulation identifier (e.g., 'eu_ai_act_article_50', 'ca_sb_942', 'cn_deep_synthesis') */
        protected $regulation;
    
        
            #[JsonPointer('/properties/account/oneOf/1/properties/brand/properties/brand_kit_override/properties/logo/properties/provenance/properties/disclosure/properties/jurisdictions/items/properties/label_text')]
        
            #[SchemaName('label_text')]
        
        /** @var string|null Required disclosure label text for this jurisdiction, in the local language */
        protected $labelText;
    
        
            #[JsonPointer('/properties/account/oneOf/1/properties/brand/properties/brand_kit_override/properties/logo/properties/provenance/properties/disclosure/properties/jurisdictions/items/properties/render_guidance')]
        
            #[SchemaName('render_guidance')]
        
        /** @var GetMediaBuyDeliveryRequest_Render_Guidancebcdccbac33ae7c709062a325470f8bda|null How the disclosure should be rendered for this jurisdiction. Expresses the declaring party's intent for persistence and position based on regulatory requirements. Publishers control actual rendering but governance agents can audit whether guidance was followed. */
        protected $renderGuidance;
    
        
            #[Internal]
        
        /** @var array Collect all additional properties provided to the schema */
        private $_additionalProperties = array (
);
    
        
            #[Internal]
        
        /** @var array Values which might be skipped for serialization if not provided */
        private $_skipNotProvidedPropertiesMap = array (
  1 => 'region',
  3 => 'label_text',
  4 => 'render_guidance',
);
    
    #[Internal]
    /** @var array */
    protected $_rawModelDataInput = [];

    
        #[Internal]
        /** @var ErrorRegistryException Collect all validation errors */
        protected $_errorRegistry;
    

    /**
     * GetMediaBuyDeliveryRequest_ItemOfArrayJurisdictions8bf29d4207dd31b988e71fd7e02eded3 constructor.
     *
     * @param array $rawModelDataInput
     *
     * @throws ErrorRegistryException
     */
    public function __construct(array $rawModelDataInput = [])
    {
        
            $this->_errorRegistry = new ErrorRegistryException();
        

        

        
            $this->executeBaseValidators($rawModelDataInput);
        

        
            
                $this->processCountry($rawModelDataInput);
            
        
            
                $this->processRegion($rawModelDataInput);
            
        
            
                $this->processRegulation($rawModelDataInput);
            
        
            
                $this->processLabelText($rawModelDataInput);
            
        
            
                $this->processRenderGuidance($rawModelDataInput);
            
        
            
        
            
        

        
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
   'country',
   'region',
   'regulation',
   'label_text',
   'render_guidance',
)) as $propertyKey) {
        

        $this->_additionalProperties[$propertyKey] = $value[$propertyKey];
    }

    return false;
})()) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Object\InvalidAdditionalPropertiesException($value ?? null, ...array (
  0 => 'GetMediaBuyDeliveryRequest_ItemOfArrayJurisdictions8bf29d4207dd31b988e71fd7e02eded3',
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
                 * Get the value of country.
                 *
                 * ISO 3166-1 alpha-2 country code (e.g., 'US', 'DE', 'CN')
                 *
                 * @return string
                 */
                public function getCountry(): string
                {
                    

                    return $this->country;
                }
            

            
                /**
                 * Set the value of country.
                 *
                 * @param string $country ISO 3166-1 alpha-2 country code (e.g., 'US', 'DE', 'CN')
                 *
                 * @throws ErrorRegistryException
                 *
                 * @return static
                 */
                public function setCountry(
                    string $country
                ): static {
                    if ($this->country === $country) {
                        return $this;
                    }

                    $value = $modelData['country'] = $country;

                    
                        $this->_errorRegistry = new ErrorRegistryException();
                    

                    

                    $value = $this->validateCountry($value, $modelData);

                    
                        if ($this->_errorRegistry->getErrors()) {
                            throw $this->_errorRegistry;
                        }
                    

                    $this->country = $value;
                    $this->_rawModelDataInput['country'] = $country;

                    

                    return $this;
                }
            

            /**
             * Extract the value, perform validations and set the property country
             *
             * @param array $modelData
             *
             * @throws ErrorRegistryException
             */
            protected function processCountry(array $modelData): void
            {
                

                $value = array_key_exists('country', $modelData) ? $modelData['country'] : $this->country;

                

                $this->country = $this->validateCountry($value, $modelData);
            }

            /**
             * Execute all validators for the property country
             */
            protected function validateCountry($value, array $modelData)
            {
                
                    

if (!array_key_exists('country', $modelData)) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Object\RequiredValueException($value ?? null, ...array (
  0 => 'country',
)));
}

                
                    

if ((!is_string($value) && !$value instanceof UnitEnum) ) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Generic\InvalidTypeException($value ?? null, ...array (
  0 => 'country',
  1 => 'string',
)));
}

                

                return $value;
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
                    

                    return $this->region;
                }
            

            
                /**
                 * Set the value of region.
                 *
                 * @param string $region Sub-national region code (e.g., 'CA' for California, 'BY' for Bavaria)
                 *
                 * @throws ErrorRegistryException
                 *
                 * @return static
                 */
                public function setRegion(
                    string $region
                ): static {
                    if ($this->region === $region) {
                        return $this;
                    }

                    $value = $modelData['region'] = $region;

                    
                        $this->_errorRegistry = new ErrorRegistryException();
                    

                    

                    $value = $this->validateRegion($value, $modelData);

                    
                        if ($this->_errorRegistry->getErrors()) {
                            throw $this->_errorRegistry;
                        }
                    

                    $this->region = $value;
                    $this->_rawModelDataInput['region'] = $region;

                    

                    return $this;
                }
            

            /**
             * Extract the value, perform validations and set the property region
             *
             * @param array $modelData
             *
             * @throws ErrorRegistryException
             */
            protected function processRegion(array $modelData): void
            {
                
                    if (!array_key_exists('region', $modelData) && $this->region === null) {
                        return;
                    }
                

                $value = array_key_exists('region', $modelData) ? $modelData['region'] : $this->region;

                

                $this->region = $this->validateRegion($value, $modelData);
            }

            /**
             * Execute all validators for the property region
             */
            protected function validateRegion($value, array $modelData)
            {
                
                    

if ((!is_string($value) && !$value instanceof UnitEnum) ) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Generic\InvalidTypeException($value ?? null, ...array (
  0 => 'region',
  1 => 'string',
)));
}

                

                return $value;
            }
        
    
        
            
                /**
                 * Get the value of regulation.
                 *
                 * Regulation identifier (e.g., 'eu_ai_act_article_50', 'ca_sb_942', 'cn_deep_synthesis')
                 *
                 * @return string
                 */
                public function getRegulation(): string
                {
                    

                    return $this->regulation;
                }
            

            
                /**
                 * Set the value of regulation.
                 *
                 * @param string $regulation Regulation identifier (e.g., 'eu_ai_act_article_50', 'ca_sb_942', 'cn_deep_synthesis')
                 *
                 * @throws ErrorRegistryException
                 *
                 * @return static
                 */
                public function setRegulation(
                    string $regulation
                ): static {
                    if ($this->regulation === $regulation) {
                        return $this;
                    }

                    $value = $modelData['regulation'] = $regulation;

                    
                        $this->_errorRegistry = new ErrorRegistryException();
                    

                    

                    $value = $this->validateRegulation($value, $modelData);

                    
                        if ($this->_errorRegistry->getErrors()) {
                            throw $this->_errorRegistry;
                        }
                    

                    $this->regulation = $value;
                    $this->_rawModelDataInput['regulation'] = $regulation;

                    

                    return $this;
                }
            

            /**
             * Extract the value, perform validations and set the property regulation
             *
             * @param array $modelData
             *
             * @throws ErrorRegistryException
             */
            protected function processRegulation(array $modelData): void
            {
                

                $value = array_key_exists('regulation', $modelData) ? $modelData['regulation'] : $this->regulation;

                

                $this->regulation = $this->validateRegulation($value, $modelData);
            }

            /**
             * Execute all validators for the property regulation
             */
            protected function validateRegulation($value, array $modelData)
            {
                
                    

if (!array_key_exists('regulation', $modelData)) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Object\RequiredValueException($value ?? null, ...array (
  0 => 'regulation',
)));
}

                
                    

if ((!is_string($value) && !$value instanceof UnitEnum) ) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Generic\InvalidTypeException($value ?? null, ...array (
  0 => 'regulation',
  1 => 'string',
)));
}

                

                return $value;
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
                    

                    return $this->labelText;
                }
            

            
                /**
                 * Set the value of label_text.
                 *
                 * @param string $labelText Required disclosure label text for this jurisdiction, in the local language
                 *
                 * @throws ErrorRegistryException
                 *
                 * @return static
                 */
                public function setLabelText(
                    string $labelText
                ): static {
                    if ($this->labelText === $labelText) {
                        return $this;
                    }

                    $value = $modelData['label_text'] = $labelText;

                    
                        $this->_errorRegistry = new ErrorRegistryException();
                    

                    

                    $value = $this->validateLabelText($value, $modelData);

                    
                        if ($this->_errorRegistry->getErrors()) {
                            throw $this->_errorRegistry;
                        }
                    

                    $this->labelText = $value;
                    $this->_rawModelDataInput['label_text'] = $labelText;

                    

                    return $this;
                }
            

            /**
             * Extract the value, perform validations and set the property labelText
             *
             * @param array $modelData
             *
             * @throws ErrorRegistryException
             */
            protected function processLabelText(array $modelData): void
            {
                
                    if (!array_key_exists('label_text', $modelData) && $this->labelText === null) {
                        return;
                    }
                

                $value = array_key_exists('label_text', $modelData) ? $modelData['label_text'] : $this->labelText;

                

                $this->labelText = $this->validateLabelText($value, $modelData);
            }

            /**
             * Execute all validators for the property labelText
             */
            protected function validateLabelText($value, array $modelData)
            {
                
                    

if ((!is_string($value) && !$value instanceof UnitEnum) ) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Generic\InvalidTypeException($value ?? null, ...array (
  0 => 'label_text',
  1 => 'string',
)));
}

                

                return $value;
            }
        
    
        
            
                /**
                 * Get the value of render_guidance.
                 *
                 * How the disclosure should be rendered for this jurisdiction. Expresses the declaring party's intent for persistence and position based on regulatory requirements. Publishers control actual rendering but governance agents can audit whether guidance was followed.
                 *
                 * @return GetMediaBuyDeliveryRequest_Render_Guidancebcdccbac33ae7c709062a325470f8bda|null
                 */
                public function getRenderGuidance(): ?GetMediaBuyDeliveryRequest_Render_Guidancebcdccbac33ae7c709062a325470f8bda
                {
                    

                    return $this->renderGuidance;
                }
            

            
                /**
                 * Set the value of render_guidance.
                 *
                 * @param GetMediaBuyDeliveryRequest_Render_Guidancebcdccbac33ae7c709062a325470f8bda $renderGuidance How the disclosure should be rendered for this jurisdiction. Expresses the declaring party's intent for persistence and position based on regulatory requirements. Publishers control actual rendering but governance agents can audit whether guidance was followed.
                 *
                 * @throws ErrorRegistryException
                 *
                 * @return static
                 */
                public function setRenderGuidance(
                    GetMediaBuyDeliveryRequest_Render_Guidancebcdccbac33ae7c709062a325470f8bda $renderGuidance
                ): static {
                    if ($this->renderGuidance === $renderGuidance) {
                        return $this;
                    }

                    $value = $modelData['render_guidance'] = $renderGuidance;

                    
                        $this->_errorRegistry = new ErrorRegistryException();
                    

                    

                    $value = $this->validateRenderGuidance($value, $modelData);

                    
                        if ($this->_errorRegistry->getErrors()) {
                            throw $this->_errorRegistry;
                        }
                    

                    $this->renderGuidance = $value;
                    $this->_rawModelDataInput['render_guidance'] = $renderGuidance;

                    

                    return $this;
                }
            

            /**
             * Extract the value, perform validations and set the property renderGuidance
             *
             * @param array $modelData
             *
             * @throws ErrorRegistryException
             */
            protected function processRenderGuidance(array $modelData): void
            {
                
                    if (!array_key_exists('render_guidance', $modelData) && $this->renderGuidance === null) {
                        return;
                    }
                

                $value = array_key_exists('render_guidance', $modelData) ? $modelData['render_guidance'] : $this->renderGuidance;

                $value = (function ($value) {
    try {
        return is_array($value) ? new GetMediaBuyDeliveryRequest_Render_Guidancebcdccbac33ae7c709062a325470f8bda($value) : $value;
    } catch (\Exception $instantiationException) {
        
            $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Object\NestedObjectException($value ?? null, ...array (
  0 => 'render_guidance',
  1 => $instantiationException,
)));
        

        
            return $instantiationException;
        
    }
})($value)
;

                $this->renderGuidance = $this->validateRenderGuidance($value, $modelData);
            }

            /**
             * Execute all validators for the property renderGuidance
             */
            protected function validateRenderGuidance($value, array $modelData)
            {
                
                    

if ((!is_object($value) && !$value instanceof UnitEnum) ) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Generic\InvalidTypeException($value ?? null, ...array (
  0 => 'render_guidance',
  1 => 'object',
)));
}

                
                    

if (is_object($value) && !($value instanceof \Exception) && !($value instanceof GetMediaBuyDeliveryRequest_Render_Guidancebcdccbac33ae7c709062a325470f8bda)) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Object\InvalidInstanceOfException($value ?? null, ...array (
  0 => 'render_guidance',
  1 => 'GetMediaBuyDeliveryRequest_Render_Guidancebcdccbac33ae7c709062a325470f8bda',
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
    

    
        
            if (array_key_exists('country', $modelData) &&
                $modelData['country'] !== $this->country
            ) {
                

                $rollbackValues['country'] = $this->country;
                $this->processCountry($modelData);
            }
        
    
        
            if (array_key_exists('region', $modelData) &&
                $modelData['region'] !== $this->region
            ) {
                

                $rollbackValues['region'] = $this->region;
                $this->processRegion($modelData);
            }
        
    
        
            if (array_key_exists('regulation', $modelData) &&
                $modelData['regulation'] !== $this->regulation
            ) {
                

                $rollbackValues['regulation'] = $this->regulation;
                $this->processRegulation($modelData);
            }
        
    
        
            if (array_key_exists('label_text', $modelData) &&
                $modelData['label_text'] !== $this->labelText
            ) {
                

                $rollbackValues['labelText'] = $this->labelText;
                $this->processLabelText($modelData);
            }
        
    
        
            if (array_key_exists('render_guidance', $modelData) &&
                $modelData['render_guidance'] !== $this->renderGuidance
            ) {
                

                $rollbackValues['renderGuidance'] = $this->renderGuidance;
                $this->processRenderGuidance($modelData);
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
