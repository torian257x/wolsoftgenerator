<?php

// @codingStandardsIgnoreFile
// @codeCoverageIgnoreStart

declare(strict_types = 1);


    namespace AdCP\MediaBuy;



    use PHPModelGenerator\Interfaces\JSONModelInterface;

    use UnitEnum;

    use AdCP\MediaBuy\Enums\ViewabilityStandard;

    use AdCP\MediaBuy\Enums\CompletionSource;

    use AdCP\MediaBuy\Enums\AttributionMethodology;

    use AdCP\MediaBuy\Enums\LiftDimension;

    use PHPModelGenerator\Traits\SerializableTrait;

    use JsonSerializable;

    use PHPModelGenerator\Interfaces\SerializationInterface;

    use AdCP\MediaBuy\Enums\AttributionModel;

    use AdCP\MediaBuy\Enums\GetMediaBuyDeliveryResponse_DurationUnit;

    use PHPModelGenerator\Attributes\JsonPointer;

    use PHPModelGenerator\Attributes\SchemaName;

    use PHPModelGenerator\Attributes\Internal;

    use PHPModelGenerator\Exception\ErrorRegistryException;


/**
 * Class GetMediaBuyDeliveryResponse_Qualifier0879d97e381719da8b4e583e3466bdee
 * @package AdCP\MediaBuy 
 *
 * Qualifier keys disambiguating this row from sibling rows under the same `metric_id`. Symmetric with `committed_metrics.qualifier` today; expected to diverge in future minors as transparency disclosures buyers don't commit to ship delivery-only. Closed (`additionalProperties: false`) — new qualifier keys ship explicitly.
 *
 * This is an auto-implemented class implemented by the php-json-schema-model-generator.
 * If you need to implement something in this class use inheritance. Else you will lose your changes if the classes
 * are re-generated.
 */

#[JsonPointer('/properties/aggregated_totals/properties/metric_aggregates/items/oneOf/0/properties/qualifier')]

class GetMediaBuyDeliveryResponse_Qualifier0879d97e381719da8b4e583e3466bdee implements JSONModelInterface, JsonSerializable, SerializationInterface
{
    use SerializableTrait;

    
        
            #[JsonPointer('/$defs/ViewabilityStandard')]
        
            #[SchemaName('viewability_standard')]
        
        /** @var ViewabilityStandard|null Viewability standard under which this row was measured. MRC and GroupM define materially different thresholds; never sum across standards. */
        protected $viewabilityStandard;
    
        
            #[JsonPointer('/$defs/CompletionSource')]
        
            #[SchemaName('completion_source')]
        
        /** @var CompletionSource|null Source of `completion_rate` attestation for this row — `seller_attested` from player/ad server, `vendor_attested` from a third-party measurement vendor. The two paths can yield different rates; never sum across sources. */
        protected $completionSource;
    
        
            #[JsonPointer('/$defs/AttributionMethodology')]
        
            #[SchemaName('attribution_methodology')]
        
        /** @var AttributionMethodology|null Attribution methodology under which this outcome row was computed (`deterministic_purchase`, `probabilistic`, `panel_based`, `modeled`). Outcome metrics measured under different methodologies represent materially different numbers; never sum across methodologies. */
        protected $attributionMethodology;
    
        
            #[JsonPointer('/properties/aggregated_totals/properties/metric_aggregates/items/oneOf/0/properties/qualifier/properties/attribution_window')]
        
            #[SchemaName('attribution_window')]
        
        /** @var GetMediaBuyDeliveryResponse_Duration|null Attribution window for this outcome row. Object-valued duration (`{interval, unit}`), not a shorthand string. Outcome metrics measured over different windows represent the same metric over different time periods; the partition keeps them as separate rows so buyers don't accidentally aggregate. */
        protected $attributionWindow;
    
        
            #[JsonPointer('/$defs/LiftDimension')]
        
            #[SchemaName('lift_dimension')]
        
        /** @var LiftDimension|null Brand-lift dimension this row represents (awareness, consideration, favorability, purchase intent, or ad recall). Required when `metric_id` is `brand_lift`. Each dimension is a separate surveyed outcome with its own sample size and confidence interval; never sum across dimensions. */
        protected $liftDimension;
    
        
            #[Internal]
        
        /** @var array Values which might be skipped for serialization if not provided */
        private $_skipNotProvidedPropertiesMap = array (
  0 => 'viewability_standard',
  1 => 'completion_source',
  2 => 'attribution_methodology',
  3 => 'attribution_window',
  4 => 'lift_dimension',
);
    
    #[Internal]
    /** @var array */
    protected $_rawModelDataInput = [];

    
        #[Internal]
        /** @var ErrorRegistryException Collect all validation errors */
        protected $_errorRegistry;
    

    /**
     * GetMediaBuyDeliveryResponse_Qualifier0879d97e381719da8b4e583e3466bdee constructor.
     *
     * @param array $rawModelDataInput
     *
     * @throws ErrorRegistryException
     */
    public function __construct(array $rawModelDataInput = [])
    {
        
            $this->_errorRegistry = new ErrorRegistryException();
        

        

        
            $this->executeBaseValidators($rawModelDataInput);
        

        
            
                $this->processViewabilityStandard($rawModelDataInput);
            
        
            
                $this->processCompletionSource($rawModelDataInput);
            
        
            
                $this->processAttributionMethodology($rawModelDataInput);
            
        
            
                $this->processAttributionWindow($rawModelDataInput);
            
        
            
                $this->processLiftDimension($rawModelDataInput);
            
        
            
        

        
            if (count($this->_errorRegistry->getErrors())) {
                throw $this->_errorRegistry;
            }
        

        $this->_rawModelDataInput = $rawModelDataInput;

        
    }

    
        protected function executeBaseValidators(array &$modelData): void
        {
            $value = &$modelData;

            
                

if ($additionalProperties =  (static function () use ($modelData): array {
    $additionalProperties = array_diff(array_keys($modelData), array (
   'viewability_standard',
   'completion_source',
   'attribution_methodology',
   'attribution_window',
   'lift_dimension',
));

    

    return $additionalProperties;
})()) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Object\AdditionalPropertiesException($value ?? null, ...array (
  0 => 'GetMediaBuyDeliveryResponse_Qualifier0879d97e381719da8b4e583e3466bdee',
  1 => $additionalProperties,
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
                 * Get the value of viewability_standard.
                 *
                 * Viewability standard under which this row was measured. MRC and GroupM define materially different thresholds; never sum across standards.
                 *
                 * @return ViewabilityStandard|null
                 */
                public function getViewabilityStandard(): ?ViewabilityStandard
                {
                    

                    return $this->viewabilityStandard;
                }
            

            
                /**
                 * Set the value of viewability_standard.
                 *
                 * @param string|ViewabilityStandard|null $viewabilityStandard Viewability standard under which this row was measured. MRC and GroupM define materially different thresholds; never sum across standards.
                 *
                 * @throws ErrorRegistryException
                 *
                 * @return static
                 */
                public function setViewabilityStandard(
                    string | ViewabilityStandard | null $viewabilityStandard
                ): static {
                    if ($this->viewabilityStandard === $viewabilityStandard) {
                        return $this;
                    }

                    $value = $modelData['viewability_standard'] = $viewabilityStandard;

                    
                        $this->_errorRegistry = new ErrorRegistryException();
                    

                    

                    $value = $this->validateViewabilityStandard($value, $modelData);

                    
                        if ($this->_errorRegistry->getErrors()) {
                            throw $this->_errorRegistry;
                        }
                    

                    $this->viewabilityStandard = $value;
                    $this->_rawModelDataInput['viewability_standard'] = $viewabilityStandard;

                    

                    return $this;
                }
            

            /**
             * Extract the value, perform validations and set the property viewabilityStandard
             *
             * @param array $modelData
             *
             * @throws ErrorRegistryException
             */
            protected function processViewabilityStandard(array $modelData): void
            {
                
                    if (!array_key_exists('viewability_standard', $modelData) && $this->viewabilityStandard === null) {
                        return;
                    }
                

                $value = array_key_exists('viewability_standard', $modelData) ? $modelData['viewability_standard'] : $this->viewabilityStandard;

                

                $this->viewabilityStandard = $this->validateViewabilityStandard($value, $modelData);
            }

            /**
             * Execute all validators for the property viewabilityStandard
             */
            protected function validateViewabilityStandard($value, array $modelData)
            {
                
                    

if ($value instanceof UnitEnum && !($value instanceof ViewabilityStandard)) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Generic\InvalidTypeException($value ?? null, ...array (
  0 => 'viewability_standard',
  1 => 'ViewabilityStandard',
)));
}

                
                    

if ((!is_string($value) && !$value instanceof UnitEnum) ) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Generic\InvalidTypeException($value ?? null, ...array (
  0 => 'viewability_standard',
  1 => 'string',
)));
}

                
                    

if (!($value instanceof UnitEnum) && !in_array($value, array (
   'mrc',
   'groupm',
), true)) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Generic\EnumException($value ?? null, ...array (
  0 => 'viewability_standard',
  1 => 
  array (
    0 => 'mrc',
    1 => 'groupm',
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
  'fqcn' => 'AdCP\\MediaBuy\\Enums\\ViewabilityStandard',
));
        } catch (\Throwable $filterException) {
            
                $transformationFailed = true;
            

            $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Filter\InvalidFilterValueException($value ?? null, ...array (
  0 => 'viewability_standard',
  1 => 'php_model_generator_enum',
  2 => $filterException,
)));
        }

        return false;
    })($value)
)) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Filter\IncompatibleFilterException($value ?? null, ...array (
  0 => 'viewability_standard',
  1 => 'php_model_generator_enum',
)));
}

                

                return $value;
            }
        
    
        
            
                /**
                 * Get the value of completion_source.
                 *
                 * Source of `completion_rate` attestation for this row — `seller_attested` from player/ad server, `vendor_attested` from a third-party measurement vendor. The two paths can yield different rates; never sum across sources.
                 *
                 * @return CompletionSource|null
                 */
                public function getCompletionSource(): ?CompletionSource
                {
                    

                    return $this->completionSource;
                }
            

            
                /**
                 * Set the value of completion_source.
                 *
                 * @param string|CompletionSource|null $completionSource Source of `completion_rate` attestation for this row — `seller_attested` from player/ad server, `vendor_attested` from a third-party measurement vendor. The two paths can yield different rates; never sum across sources.
                 *
                 * @throws ErrorRegistryException
                 *
                 * @return static
                 */
                public function setCompletionSource(
                    string | CompletionSource | null $completionSource
                ): static {
                    if ($this->completionSource === $completionSource) {
                        return $this;
                    }

                    $value = $modelData['completion_source'] = $completionSource;

                    
                        $this->_errorRegistry = new ErrorRegistryException();
                    

                    

                    $value = $this->validateCompletionSource($value, $modelData);

                    
                        if ($this->_errorRegistry->getErrors()) {
                            throw $this->_errorRegistry;
                        }
                    

                    $this->completionSource = $value;
                    $this->_rawModelDataInput['completion_source'] = $completionSource;

                    

                    return $this;
                }
            

            /**
             * Extract the value, perform validations and set the property completionSource
             *
             * @param array $modelData
             *
             * @throws ErrorRegistryException
             */
            protected function processCompletionSource(array $modelData): void
            {
                
                    if (!array_key_exists('completion_source', $modelData) && $this->completionSource === null) {
                        return;
                    }
                

                $value = array_key_exists('completion_source', $modelData) ? $modelData['completion_source'] : $this->completionSource;

                

                $this->completionSource = $this->validateCompletionSource($value, $modelData);
            }

            /**
             * Execute all validators for the property completionSource
             */
            protected function validateCompletionSource($value, array $modelData)
            {
                
                    

if ($value instanceof UnitEnum && !($value instanceof CompletionSource)) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Generic\InvalidTypeException($value ?? null, ...array (
  0 => 'completion_source',
  1 => 'CompletionSource',
)));
}

                
                    

if ((!is_string($value) && !$value instanceof UnitEnum) ) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Generic\InvalidTypeException($value ?? null, ...array (
  0 => 'completion_source',
  1 => 'string',
)));
}

                
                    

if (!($value instanceof UnitEnum) && !in_array($value, array (
   'seller_attested',
   'vendor_attested',
), true)) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Generic\EnumException($value ?? null, ...array (
  0 => 'completion_source',
  1 => 
  array (
    0 => 'seller_attested',
    1 => 'vendor_attested',
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
  'fqcn' => 'AdCP\\MediaBuy\\Enums\\CompletionSource',
));
        } catch (\Throwable $filterException) {
            
                $transformationFailed = true;
            

            $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Filter\InvalidFilterValueException($value ?? null, ...array (
  0 => 'completion_source',
  1 => 'php_model_generator_enum',
  2 => $filterException,
)));
        }

        return false;
    })($value)
)) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Filter\IncompatibleFilterException($value ?? null, ...array (
  0 => 'completion_source',
  1 => 'php_model_generator_enum',
)));
}

                

                return $value;
            }
        
    
        
            
                /**
                 * Get the value of attribution_methodology.
                 *
                 * Attribution methodology under which this outcome row was computed (`deterministic_purchase`, `probabilistic`, `panel_based`, `modeled`). Outcome metrics measured under different methodologies represent materially different numbers; never sum across methodologies.
                 *
                 * @return AttributionMethodology|null
                 */
                public function getAttributionMethodology(): ?AttributionMethodology
                {
                    

                    return $this->attributionMethodology;
                }
            

            
                /**
                 * Set the value of attribution_methodology.
                 *
                 * @param string|AttributionMethodology|null $attributionMethodology Attribution methodology under which this outcome row was computed (`deterministic_purchase`, `probabilistic`, `panel_based`, `modeled`). Outcome metrics measured under different methodologies represent materially different numbers; never sum across methodologies.
                 *
                 * @throws ErrorRegistryException
                 *
                 * @return static
                 */
                public function setAttributionMethodology(
                    string | AttributionMethodology | null $attributionMethodology
                ): static {
                    if ($this->attributionMethodology === $attributionMethodology) {
                        return $this;
                    }

                    $value = $modelData['attribution_methodology'] = $attributionMethodology;

                    
                        $this->_errorRegistry = new ErrorRegistryException();
                    

                    

                    $value = $this->validateAttributionMethodology($value, $modelData);

                    
                        if ($this->_errorRegistry->getErrors()) {
                            throw $this->_errorRegistry;
                        }
                    

                    $this->attributionMethodology = $value;
                    $this->_rawModelDataInput['attribution_methodology'] = $attributionMethodology;

                    

                    return $this;
                }
            

            /**
             * Extract the value, perform validations and set the property attributionMethodology
             *
             * @param array $modelData
             *
             * @throws ErrorRegistryException
             */
            protected function processAttributionMethodology(array $modelData): void
            {
                
                    if (!array_key_exists('attribution_methodology', $modelData) && $this->attributionMethodology === null) {
                        return;
                    }
                

                $value = array_key_exists('attribution_methodology', $modelData) ? $modelData['attribution_methodology'] : $this->attributionMethodology;

                

                $this->attributionMethodology = $this->validateAttributionMethodology($value, $modelData);
            }

            /**
             * Execute all validators for the property attributionMethodology
             */
            protected function validateAttributionMethodology($value, array $modelData)
            {
                
                    

if ($value instanceof UnitEnum && !($value instanceof AttributionMethodology)) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Generic\InvalidTypeException($value ?? null, ...array (
  0 => 'attribution_methodology',
  1 => 'AttributionMethodology',
)));
}

                
                    

if ((!is_string($value) && !$value instanceof UnitEnum) ) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Generic\InvalidTypeException($value ?? null, ...array (
  0 => 'attribution_methodology',
  1 => 'string',
)));
}

                
                    

if (!($value instanceof UnitEnum) && !in_array($value, array (
   'deterministic_purchase',
   'probabilistic',
   'panel_based',
   'modeled',
), true)) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Generic\EnumException($value ?? null, ...array (
  0 => 'attribution_methodology',
  1 => 
  array (
    0 => 'deterministic_purchase',
    1 => 'probabilistic',
    2 => 'panel_based',
    3 => 'modeled',
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
  'fqcn' => 'AdCP\\MediaBuy\\Enums\\AttributionMethodology',
));
        } catch (\Throwable $filterException) {
            
                $transformationFailed = true;
            

            $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Filter\InvalidFilterValueException($value ?? null, ...array (
  0 => 'attribution_methodology',
  1 => 'php_model_generator_enum',
  2 => $filterException,
)));
        }

        return false;
    })($value)
)) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Filter\IncompatibleFilterException($value ?? null, ...array (
  0 => 'attribution_methodology',
  1 => 'php_model_generator_enum',
)));
}

                

                return $value;
            }
        
    
        
            
                /**
                 * Get the value of attribution_window.
                 *
                 * Attribution window for this outcome row. Object-valued duration (`{interval, unit}`), not a shorthand string. Outcome metrics measured over different windows represent the same metric over different time periods; the partition keeps them as separate rows so buyers don't accidentally aggregate.
                 *
                 * @return GetMediaBuyDeliveryResponse_Duration|null
                 */
                public function getAttributionWindow(): ?GetMediaBuyDeliveryResponse_Duration
                {
                    

                    return $this->attributionWindow;
                }
            

            
                /**
                 * Set the value of attribution_window.
                 *
                 * @param GetMediaBuyDeliveryResponse_Duration $attributionWindow Attribution window for this outcome row. Object-valued duration (`{interval, unit}`), not a shorthand string. Outcome metrics measured over different windows represent the same metric over different time periods; the partition keeps them as separate rows so buyers don't accidentally aggregate.
                 *
                 * @throws ErrorRegistryException
                 *
                 * @return static
                 */
                public function setAttributionWindow(
                    GetMediaBuyDeliveryResponse_Duration $attributionWindow
                ): static {
                    if ($this->attributionWindow === $attributionWindow) {
                        return $this;
                    }

                    $value = $modelData['attribution_window'] = $attributionWindow;

                    
                        $this->_errorRegistry = new ErrorRegistryException();
                    

                    

                    $value = $this->validateAttributionWindow($value, $modelData);

                    
                        if ($this->_errorRegistry->getErrors()) {
                            throw $this->_errorRegistry;
                        }
                    

                    $this->attributionWindow = $value;
                    $this->_rawModelDataInput['attribution_window'] = $attributionWindow;

                    

                    return $this;
                }
            

            /**
             * Extract the value, perform validations and set the property attributionWindow
             *
             * @param array $modelData
             *
             * @throws ErrorRegistryException
             */
            protected function processAttributionWindow(array $modelData): void
            {
                
                    if (!array_key_exists('attribution_window', $modelData) && $this->attributionWindow === null) {
                        return;
                    }
                

                $value = array_key_exists('attribution_window', $modelData) ? $modelData['attribution_window'] : $this->attributionWindow;

                $value = (function ($value) {
    try {
        return is_array($value) ? new GetMediaBuyDeliveryResponse_Duration($value) : $value;
    } catch (\Exception $instantiationException) {
        
            $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Object\NestedObjectException($value ?? null, ...array (
  0 => 'attribution_window',
  1 => $instantiationException,
)));
        

        
            return $instantiationException;
        
    }
})($value)
;

                $this->attributionWindow = $this->validateAttributionWindow($value, $modelData);
            }

            /**
             * Execute all validators for the property attributionWindow
             */
            protected function validateAttributionWindow($value, array $modelData)
            {
                
                    

if ((!is_object($value) && !$value instanceof UnitEnum) ) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Generic\InvalidTypeException($value ?? null, ...array (
  0 => 'attribution_window',
  1 => 'object',
)));
}

                
                    

if (is_object($value) && !($value instanceof \Exception) && !($value instanceof GetMediaBuyDeliveryResponse_Duration)) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Object\InvalidInstanceOfException($value ?? null, ...array (
  0 => 'attribution_window',
  1 => 'GetMediaBuyDeliveryResponse_Duration',
)));
}

                

                return $value;
            }
        
    
        
            
                /**
                 * Get the value of lift_dimension.
                 *
                 * Brand-lift dimension this row represents (awareness, consideration, favorability, purchase intent, or ad recall). Required when `metric_id` is `brand_lift`. Each dimension is a separate surveyed outcome with its own sample size and confidence interval; never sum across dimensions.
                 *
                 * @return LiftDimension|null
                 */
                public function getLiftDimension(): ?LiftDimension
                {
                    

                    return $this->liftDimension;
                }
            

            
                /**
                 * Set the value of lift_dimension.
                 *
                 * @param string|LiftDimension|null $liftDimension Brand-lift dimension this row represents (awareness, consideration, favorability, purchase intent, or ad recall). Required when `metric_id` is `brand_lift`. Each dimension is a separate surveyed outcome with its own sample size and confidence interval; never sum across dimensions.
                 *
                 * @throws ErrorRegistryException
                 *
                 * @return static
                 */
                public function setLiftDimension(
                    string | LiftDimension | null $liftDimension
                ): static {
                    if ($this->liftDimension === $liftDimension) {
                        return $this;
                    }

                    $value = $modelData['lift_dimension'] = $liftDimension;

                    
                        $this->_errorRegistry = new ErrorRegistryException();
                    

                    

                    $value = $this->validateLiftDimension($value, $modelData);

                    
                        if ($this->_errorRegistry->getErrors()) {
                            throw $this->_errorRegistry;
                        }
                    

                    $this->liftDimension = $value;
                    $this->_rawModelDataInput['lift_dimension'] = $liftDimension;

                    

                    return $this;
                }
            

            /**
             * Extract the value, perform validations and set the property liftDimension
             *
             * @param array $modelData
             *
             * @throws ErrorRegistryException
             */
            protected function processLiftDimension(array $modelData): void
            {
                
                    if (!array_key_exists('lift_dimension', $modelData) && $this->liftDimension === null) {
                        return;
                    }
                

                $value = array_key_exists('lift_dimension', $modelData) ? $modelData['lift_dimension'] : $this->liftDimension;

                

                $this->liftDimension = $this->validateLiftDimension($value, $modelData);
            }

            /**
             * Execute all validators for the property liftDimension
             */
            protected function validateLiftDimension($value, array $modelData)
            {
                
                    

if ($value instanceof UnitEnum && !($value instanceof LiftDimension)) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Generic\InvalidTypeException($value ?? null, ...array (
  0 => 'lift_dimension',
  1 => 'LiftDimension',
)));
}

                
                    

if ((!is_string($value) && !$value instanceof UnitEnum) ) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Generic\InvalidTypeException($value ?? null, ...array (
  0 => 'lift_dimension',
  1 => 'string',
)));
}

                
                    

if (!($value instanceof UnitEnum) && !in_array($value, array (
   'awareness',
   'consideration',
   'favorability',
   'purchase_intent',
   'ad_recall',
), true)) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Generic\EnumException($value ?? null, ...array (
  0 => 'lift_dimension',
  1 => 
  array (
    0 => 'awareness',
    1 => 'consideration',
    2 => 'favorability',
    3 => 'purchase_intent',
    4 => 'ad_recall',
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
  'fqcn' => 'AdCP\\MediaBuy\\Enums\\LiftDimension',
));
        } catch (\Throwable $filterException) {
            
                $transformationFailed = true;
            

            $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Filter\InvalidFilterValueException($value ?? null, ...array (
  0 => 'lift_dimension',
  1 => 'php_model_generator_enum',
  2 => $filterException,
)));
        }

        return false;
    })($value)
)) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Filter\IncompatibleFilterException($value ?? null, ...array (
  0 => 'lift_dimension',
  1 => 'php_model_generator_enum',
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
    

    
        
            if (array_key_exists('viewability_standard', $modelData) &&
                $modelData['viewability_standard'] !== $this->viewabilityStandard
            ) {
                

                $rollbackValues['viewabilityStandard'] = $this->viewabilityStandard;
                $this->processViewabilityStandard($modelData);
            }
        
    
        
            if (array_key_exists('completion_source', $modelData) &&
                $modelData['completion_source'] !== $this->completionSource
            ) {
                

                $rollbackValues['completionSource'] = $this->completionSource;
                $this->processCompletionSource($modelData);
            }
        
    
        
            if (array_key_exists('attribution_methodology', $modelData) &&
                $modelData['attribution_methodology'] !== $this->attributionMethodology
            ) {
                

                $rollbackValues['attributionMethodology'] = $this->attributionMethodology;
                $this->processAttributionMethodology($modelData);
            }
        
    
        
            if (array_key_exists('attribution_window', $modelData) &&
                $modelData['attribution_window'] !== $this->attributionWindow
            ) {
                

                $rollbackValues['attributionWindow'] = $this->attributionWindow;
                $this->processAttributionWindow($modelData);
            }
        
    
        
            if (array_key_exists('lift_dimension', $modelData) &&
                $modelData['lift_dimension'] !== $this->liftDimension
            ) {
                

                $rollbackValues['liftDimension'] = $this->liftDimension;
                $this->processLiftDimension($modelData);
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
 * serialize the property viewabilityStandard
 */
protected function serializeViewabilityStandard()
{
    return \PHPModelGenerator\Filter\Enum::serialize($this->viewabilityStandard, array (
  'fqcn' => 'AdCP\\MediaBuy\\Enums\\ViewabilityStandard',
));
}


/**
 * serialize the property completionSource
 */
protected function serializeCompletionSource()
{
    return \PHPModelGenerator\Filter\Enum::serialize($this->completionSource, array (
  'fqcn' => 'AdCP\\MediaBuy\\Enums\\CompletionSource',
));
}


/**
 * serialize the property attributionMethodology
 */
protected function serializeAttributionMethodology()
{
    return \PHPModelGenerator\Filter\Enum::serialize($this->attributionMethodology, array (
  'fqcn' => 'AdCP\\MediaBuy\\Enums\\AttributionMethodology',
));
}


/**
 * serialize the property liftDimension
 */
protected function serializeLiftDimension()
{
    return \PHPModelGenerator\Filter\Enum::serialize($this->liftDimension, array (
  'fqcn' => 'AdCP\\MediaBuy\\Enums\\LiftDimension',
));
}





}

// @codeCoverageIgnoreEnd
