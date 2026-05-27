<?php

// @codingStandardsIgnoreFile
// @codeCoverageIgnoreStart

declare(strict_types = 1);


    namespace AdCP\MediaBuy;



    use PHPModelGenerator\Interfaces\JSONModelInterface;

    use UnitEnum;

    use AdCP\MediaBuy\Enums\MediaBuyValidAction;

    use AdCP\MediaBuy\Enums\MediaBuyActionMode;

    use PHPModelGenerator\Traits\SerializableTrait;

    use JsonSerializable;

    use PHPModelGenerator\Interfaces\SerializationInterface;

    use AdCP\MediaBuy\Enums\AccountStatus;

    use AdCP\MediaBuy\Enums\BillingParty;

    use AdCP\MediaBuy\Enums\PaymentTerms;

    use AdCP\MediaBuy\Enums\AccountScope;

    use AdCP\MediaBuy\Enums\DigitalSourceType;

    use AdCP\MediaBuy\Enums\GetMediaBuysResponse_ProvenanceHuman_Oversight;

    use AdCP\MediaBuy\Enums\GetMediaBuysResponse_Declared_By13c986791ce55365e13a7cd5ff90f7dcRole;

    use AdCP\MediaBuy\Enums\EmbeddedProvenanceMethod;

    use AdCP\MediaBuy\Enums\WatermarkMediaType;

    use AdCP\MediaBuy\Enums\C2PAWatermarkAction;

    use AdCP\MediaBuy\Enums\DisclosurePersistence;

    use AdCP\MediaBuy\Enums\DisclosurePosition;

    use AdCP\MediaBuy\Enums\GetMediaBuysResponse_ItemOfArrayVerificationab0379bc9ff851960f9f645c9916029eResult;

    use AdCP\MediaBuy\Enums\GetMediaBuysResponse_ItemOfArrayContacts68bbcda7e3595439f5fe2c3176810b51Role;

    use AdCP\MediaBuy\Enums\CloudStorageProtocol;

    use AdCP\MediaBuy\Enums\GetMediaBuysResponse_Reporting_Bucket637c6849430a3f89084a3d42202a1d68Format;

    use AdCP\MediaBuy\Enums\GetMediaBuysResponse_Reporting_Bucket637c6849430a3f89084a3d42202a1d68Compression;

    use AdCP\MediaBuy\Enums\NotificationType;

    use AdCP\MediaBuy\Enums\AuthenticationScheme;

    use AdCP\MediaBuy\Enums\GetMediaBuysResponse_ImpairmentResource_Type;

    use AdCP\MediaBuy\Enums\ImpairmentReasonCode;

    use AdCP\MediaBuy\Enums\ImpairmentOfflineState;

    use AdCP\MediaBuy\Enums\CanceledBy;

    use PHPModelGenerator\Attributes\JsonPointer;

    use PHPModelGenerator\Attributes\SchemaName;

    use PHPModelGenerator\Attributes\Required;

    use PHPModelGenerator\Attributes\Internal;

    use PHPModelGenerator\Exception\ErrorRegistryException;


/**
 * Class GetMediaBuysResponse_MediaBuyAvailableAction
 * @package AdCP\MediaBuy 
 *
 * An action currently available on a media buy, resolved against the buy's current status, negotiated terms, account tier, and any buy-level overrides. Authoritative per-buy capability — buyer SDKs MUST read this rather than re-deriving from the product's `allowed_actions[]`, because divergence from the product template is expected (negotiated terms and IO addenda live on the deal, not the product SKU). The containing `available_actions[]` array is uniquely keyed by `action`; sellers MUST NOT emit two entries with the same `action` value (this is a contract-level invariant — JSON Schema `uniqueItems` only catches structurally identical objects, so validators MUST enforce action-uniqueness separately). Predicate evaluators consuming dotted paths like `available_actions.extend_flight.sla.response_max` MUST index by `action` rather than by array position. The `mode` and `sla` values are advisory at the moment of emission; sellers MAY resolve to a different mode by the time the mutation arrives (state can change), in which case the request is rejected with `ACTION_NOT_ALLOWED` (`reason: mode_mismatch`).
 *
 * This is an auto-implemented class implemented by the php-json-schema-model-generator.
 * If you need to implement something in this class use inheritance. Else you will lose your changes if the classes
 * are re-generated.
 */

#[JsonPointer('/properties/media_buys/items/properties/available_actions/items')]

class GetMediaBuysResponse_MediaBuyAvailableAction implements JSONModelInterface, JsonSerializable, SerializationInterface
{
    use SerializableTrait;

    
        
            #[JsonPointer('/$defs/MediaBuyValidAction')]
        
            #[SchemaName('action')]
        
            #[Required]
        
        /** @var MediaBuyValidAction Actions the buyer can perform on a media buy. Used as the action identifier in both the legacy flat `valid_actions[]` field (string array) and the structured `available_actions[]` field on buy responses, and in `allowed_actions[]` on Product. The coarse values (`update_budget`, `update_dates`, `update_packages`, `sync_creatives`) predate the finer-grained vocabulary and are retained for backwards compatibility — see `x-deprecated-enum-values`. Sellers SHOULD declare the finer-grained values where their platform distinguishes them; the coarse values roll up to the finer set per `enumMetadata[<value>].rollup`. See action-to-field mapping table in docs/media-buy/task-reference/update_media_buy.mdx for the normative binding between each action and the fields it covers on update_media_buy. */
        protected $action;
    
        
            #[JsonPointer('/properties/media_buys/items/properties/available_actions/items/properties/mode')]
        
            #[SchemaName('mode')]
        
            #[Required]
        
        /** @var MediaBuyActionMode The single mode that applies right now on this buy for this action. Singular because the buy has a concrete state, exactly one mode applies. Buyer SDKs branch on this to decide whether to expect a synchronous response, a proposal task, or an asynchronous approval callback. */
        protected $mode;
    
        
            #[JsonPointer('/properties/media_buys/items/properties/available_actions/items/properties/sla')]
        
            #[SchemaName('sla')]
        
        /** @var GetMediaBuysResponse_SLAWindow|null Optional SLA commitment for this action on this buy. Absence means no commitment, not zero commitment. */
        protected $sla;
    
        
            #[JsonPointer('/properties/media_buys/items/properties/available_actions/items/properties/terms_ref')]
        
            #[SchemaName('terms_ref')]
        
        /** @var string|null Optional pointer into buy-terms negotiation (forward-references the buy-terms namespace landing via separate RFC). Schema accepts any string for now and will tighten to a structured reference when the buy-terms RFC ships. */
        protected $termsRef;
    
        
            #[Internal]
        
        /** @var array Values which might be skipped for serialization if not provided */
        private $_skipNotProvidedPropertiesMap = array (
  2 => 'sla',
  3 => 'terms_ref',
);
    
    #[Internal]
    /** @var array */
    protected $_rawModelDataInput = [];

    
        #[Internal]
        /** @var ErrorRegistryException Collect all validation errors */
        protected $_errorRegistry;
    

    /**
     * GetMediaBuysResponse_MediaBuyAvailableAction constructor.
     *
     * @param array $rawModelDataInput
     *
     * @throws ErrorRegistryException
     */
    public function __construct(array $rawModelDataInput = [])
    {
        
            $this->_errorRegistry = new ErrorRegistryException();
        

        

        
            $this->executeBaseValidators($rawModelDataInput);
        

        
            
                $this->processAction($rawModelDataInput);
            
        
            
                $this->processMode($rawModelDataInput);
            
        
            
                $this->processSla($rawModelDataInput);
            
        
            
                $this->processTermsRef($rawModelDataInput);
            
        
            
        

        
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
   'action',
   'mode',
   'sla',
   'terms_ref',
));

    

    return $additionalProperties;
})()) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Object\AdditionalPropertiesException($value ?? null, ...array (
  0 => 'GetMediaBuysResponse_MediaBuyAvailableAction',
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
                 * Get the value of action.
                 *
                 * Actions the buyer can perform on a media buy. Used as the action identifier in both the legacy flat `valid_actions[]` field (string array) and the structured `available_actions[]` field on buy responses, and in `allowed_actions[]` on Product. The coarse values (`update_budget`, `update_dates`, `update_packages`, `sync_creatives`) predate the finer-grained vocabulary and are retained for backwards compatibility — see `x-deprecated-enum-values`. Sellers SHOULD declare the finer-grained values where their platform distinguishes them; the coarse values roll up to the finer set per `enumMetadata[<value>].rollup`. See action-to-field mapping table in docs/media-buy/task-reference/update_media_buy.mdx for the normative binding between each action and the fields it covers on update_media_buy.
                 *
                 * @return MediaBuyValidAction
                 */
                public function getAction(): MediaBuyValidAction
                {
                    

                    return $this->action;
                }
            

            
                /**
                 * Set the value of action.
                 *
                 * @param string|MediaBuyValidAction $action Actions the buyer can perform on a media buy. Used as the action identifier in both the legacy flat `valid_actions[]` field (string array) and the structured `available_actions[]` field on buy responses, and in `allowed_actions[]` on Product. The coarse values (`update_budget`, `update_dates`, `update_packages`, `sync_creatives`) predate the finer-grained vocabulary and are retained for backwards compatibility — see `x-deprecated-enum-values`. Sellers SHOULD declare the finer-grained values where their platform distinguishes them; the coarse values roll up to the finer set per `enumMetadata[<value>].rollup`. See action-to-field mapping table in docs/media-buy/task-reference/update_media_buy.mdx for the normative binding between each action and the fields it covers on update_media_buy.
                 *
                 * @throws ErrorRegistryException
                 *
                 * @return static
                 */
                public function setAction(
                    string | MediaBuyValidAction $action
                ): static {
                    if ($this->action === $action) {
                        return $this;
                    }

                    $value = $modelData['action'] = $action;

                    
                        $this->_errorRegistry = new ErrorRegistryException();
                    

                    

                    $value = $this->validateAction($value, $modelData);

                    
                        if ($this->_errorRegistry->getErrors()) {
                            throw $this->_errorRegistry;
                        }
                    

                    $this->action = $value;
                    $this->_rawModelDataInput['action'] = $action;

                    

                    return $this;
                }
            

            /**
             * Extract the value, perform validations and set the property action
             *
             * @param array $modelData
             *
             * @throws ErrorRegistryException
             */
            protected function processAction(array $modelData): void
            {
                

                $value = array_key_exists('action', $modelData) ? $modelData['action'] : $this->action;

                

                $this->action = $this->validateAction($value, $modelData);
            }

            /**
             * Execute all validators for the property action
             */
            protected function validateAction($value, array $modelData)
            {
                
                    

if ($value instanceof UnitEnum && !($value instanceof MediaBuyValidAction)) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Generic\InvalidTypeException($value ?? null, ...array (
  0 => 'action',
  1 => 'MediaBuyValidAction',
)));
}

                
                    

if (!array_key_exists('action', $modelData)) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Object\RequiredValueException($value ?? null, ...array (
  0 => 'action',
)));
}

                
                    

if ((!is_string($value) && !$value instanceof UnitEnum) ) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Generic\InvalidTypeException($value ?? null, ...array (
  0 => 'action',
  1 => 'string',
)));
}

                
                    

if (!($value instanceof UnitEnum) && !in_array($value, array (
   'pause',
   'resume',
   'cancel',
   'extend_flight',
   'shorten_flight',
   'update_flight_dates',
   'increase_budget',
   'decrease_budget',
   'reallocate_budget',
   'update_targeting',
   'update_pacing',
   'update_frequency_caps',
   'replace_creative',
   'update_creative_assignments',
   'remove_creative',
   'add_packages',
   'remove_packages',
   'update_budget',
   'update_dates',
   'update_packages',
   'sync_creatives',
), true)) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Generic\EnumException($value ?? null, ...array (
  0 => 'action',
  1 => 
  array (
    0 => 'pause',
    1 => 'resume',
    2 => 'cancel',
    3 => 'extend_flight',
    4 => 'shorten_flight',
    5 => 'update_flight_dates',
    6 => 'increase_budget',
    7 => 'decrease_budget',
    8 => 'reallocate_budget',
    9 => 'update_targeting',
    10 => 'update_pacing',
    11 => 'update_frequency_caps',
    12 => 'replace_creative',
    13 => 'update_creative_assignments',
    14 => 'remove_creative',
    15 => 'add_packages',
    16 => 'remove_packages',
    17 => 'update_budget',
    18 => 'update_dates',
    19 => 'update_packages',
    20 => 'sync_creatives',
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
  'fqcn' => 'AdCP\\MediaBuy\\Enums\\MediaBuyValidAction',
));
        } catch (\Throwable $filterException) {
            
                $transformationFailed = true;
            

            $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Filter\InvalidFilterValueException($value ?? null, ...array (
  0 => 'action',
  1 => 'php_model_generator_enum',
  2 => $filterException,
)));
        }

        return false;
    })($value)
)) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Filter\IncompatibleFilterException($value ?? null, ...array (
  0 => 'action',
  1 => 'php_model_generator_enum',
)));
}

                

                return $value;
            }
        
    
        
            
                /**
                 * Get the value of mode.
                 *
                 * The single mode that applies right now on this buy for this action. Singular because the buy has a concrete state, exactly one mode applies. Buyer SDKs branch on this to decide whether to expect a synchronous response, a proposal task, or an asynchronous approval callback.
                 *
                 * @return MediaBuyActionMode
                 */
                public function getMode(): MediaBuyActionMode
                {
                    

                    return $this->mode;
                }
            

            
                /**
                 * Set the value of mode.
                 *
                 * @param string|MediaBuyActionMode $mode The single mode that applies right now on this buy for this action. Singular because the buy has a concrete state, exactly one mode applies. Buyer SDKs branch on this to decide whether to expect a synchronous response, a proposal task, or an asynchronous approval callback.
                 *
                 * @throws ErrorRegistryException
                 *
                 * @return static
                 */
                public function setMode(
                    string | MediaBuyActionMode $mode
                ): static {
                    if ($this->mode === $mode) {
                        return $this;
                    }

                    $value = $modelData['mode'] = $mode;

                    
                        $this->_errorRegistry = new ErrorRegistryException();
                    

                    

                    $value = $this->validateMode($value, $modelData);

                    
                        if ($this->_errorRegistry->getErrors()) {
                            throw $this->_errorRegistry;
                        }
                    

                    $this->mode = $value;
                    $this->_rawModelDataInput['mode'] = $mode;

                    

                    return $this;
                }
            

            /**
             * Extract the value, perform validations and set the property mode
             *
             * @param array $modelData
             *
             * @throws ErrorRegistryException
             */
            protected function processMode(array $modelData): void
            {
                

                $value = array_key_exists('mode', $modelData) ? $modelData['mode'] : $this->mode;

                

                $this->mode = $this->validateMode($value, $modelData);
            }

            /**
             * Execute all validators for the property mode
             */
            protected function validateMode($value, array $modelData)
            {
                
                    

if ($value instanceof UnitEnum && !($value instanceof MediaBuyActionMode)) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Generic\InvalidTypeException($value ?? null, ...array (
  0 => 'mode',
  1 => 'MediaBuyActionMode',
)));
}

                
                    

if (!array_key_exists('mode', $modelData)) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Object\RequiredValueException($value ?? null, ...array (
  0 => 'mode',
)));
}

                
                    

if ((!is_string($value) && !$value instanceof UnitEnum) ) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Generic\InvalidTypeException($value ?? null, ...array (
  0 => 'mode',
  1 => 'string',
)));
}

                
                    

if (!($value instanceof UnitEnum) && !in_array($value, array (
   'self_serve',
   'conditional_self_serve',
   'requires_proposal',
   'requires_approval',
), true)) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Generic\EnumException($value ?? null, ...array (
  0 => 'mode',
  1 => 
  array (
    0 => 'self_serve',
    1 => 'conditional_self_serve',
    2 => 'requires_proposal',
    3 => 'requires_approval',
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
  'fqcn' => 'AdCP\\MediaBuy\\Enums\\MediaBuyActionMode',
));
        } catch (\Throwable $filterException) {
            
                $transformationFailed = true;
            

            $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Filter\InvalidFilterValueException($value ?? null, ...array (
  0 => 'mode',
  1 => 'php_model_generator_enum',
  2 => $filterException,
)));
        }

        return false;
    })($value)
)) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Filter\IncompatibleFilterException($value ?? null, ...array (
  0 => 'mode',
  1 => 'php_model_generator_enum',
)));
}

                

                return $value;
            }
        
    
        
            
                /**
                 * Get the value of sla.
                 *
                 * Optional SLA commitment for this action on this buy. Absence means no commitment, not zero commitment.
                 *
                 * @return GetMediaBuysResponse_SLAWindow|null
                 */
                public function getSla(): ?GetMediaBuysResponse_SLAWindow
                {
                    

                    return $this->sla;
                }
            

            
                /**
                 * Set the value of sla.
                 *
                 * @param GetMediaBuysResponse_SLAWindow $sla Optional SLA commitment for this action on this buy. Absence means no commitment, not zero commitment.
                 *
                 * @throws ErrorRegistryException
                 *
                 * @return static
                 */
                public function setSla(
                    GetMediaBuysResponse_SLAWindow $sla
                ): static {
                    if ($this->sla === $sla) {
                        return $this;
                    }

                    $value = $modelData['sla'] = $sla;

                    
                        $this->_errorRegistry = new ErrorRegistryException();
                    

                    

                    $value = $this->validateSla($value, $modelData);

                    
                        if ($this->_errorRegistry->getErrors()) {
                            throw $this->_errorRegistry;
                        }
                    

                    $this->sla = $value;
                    $this->_rawModelDataInput['sla'] = $sla;

                    

                    return $this;
                }
            

            /**
             * Extract the value, perform validations and set the property sla
             *
             * @param array $modelData
             *
             * @throws ErrorRegistryException
             */
            protected function processSla(array $modelData): void
            {
                
                    if (!array_key_exists('sla', $modelData) && $this->sla === null) {
                        return;
                    }
                

                $value = array_key_exists('sla', $modelData) ? $modelData['sla'] : $this->sla;

                $value = (function ($value) {
    try {
        return is_array($value) ? new GetMediaBuysResponse_SLAWindow($value) : $value;
    } catch (\Exception $instantiationException) {
        
            $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Object\NestedObjectException($value ?? null, ...array (
  0 => 'sla',
  1 => $instantiationException,
)));
        

        
            return $instantiationException;
        
    }
})($value)
;

                $this->sla = $this->validateSla($value, $modelData);
            }

            /**
             * Execute all validators for the property sla
             */
            protected function validateSla($value, array $modelData)
            {
                
                    

if ((!is_object($value) && !$value instanceof UnitEnum) ) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Generic\InvalidTypeException($value ?? null, ...array (
  0 => 'sla',
  1 => 'object',
)));
}

                
                    

if (is_object($value) && !($value instanceof \Exception) && !($value instanceof GetMediaBuysResponse_SLAWindow)) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Object\InvalidInstanceOfException($value ?? null, ...array (
  0 => 'sla',
  1 => 'GetMediaBuysResponse_SLAWindow',
)));
}

                

                return $value;
            }
        
    
        
            
                /**
                 * Get the value of terms_ref.
                 *
                 * Optional pointer into buy-terms negotiation (forward-references the buy-terms namespace landing via separate RFC). Schema accepts any string for now and will tighten to a structured reference when the buy-terms RFC ships.
                 *
                 * @return string|null
                 */
                public function getTermsRef(): ?string
                {
                    

                    return $this->termsRef;
                }
            

            
                /**
                 * Set the value of terms_ref.
                 *
                 * @param string $termsRef Optional pointer into buy-terms negotiation (forward-references the buy-terms namespace landing via separate RFC). Schema accepts any string for now and will tighten to a structured reference when the buy-terms RFC ships.
                 *
                 * @throws ErrorRegistryException
                 *
                 * @return static
                 */
                public function setTermsRef(
                    string $termsRef
                ): static {
                    if ($this->termsRef === $termsRef) {
                        return $this;
                    }

                    $value = $modelData['terms_ref'] = $termsRef;

                    
                        $this->_errorRegistry = new ErrorRegistryException();
                    

                    

                    $value = $this->validateTermsRef($value, $modelData);

                    
                        if ($this->_errorRegistry->getErrors()) {
                            throw $this->_errorRegistry;
                        }
                    

                    $this->termsRef = $value;
                    $this->_rawModelDataInput['terms_ref'] = $termsRef;

                    

                    return $this;
                }
            

            /**
             * Extract the value, perform validations and set the property termsRef
             *
             * @param array $modelData
             *
             * @throws ErrorRegistryException
             */
            protected function processTermsRef(array $modelData): void
            {
                
                    if (!array_key_exists('terms_ref', $modelData) && $this->termsRef === null) {
                        return;
                    }
                

                $value = array_key_exists('terms_ref', $modelData) ? $modelData['terms_ref'] : $this->termsRef;

                

                $this->termsRef = $this->validateTermsRef($value, $modelData);
            }

            /**
             * Execute all validators for the property termsRef
             */
            protected function validateTermsRef($value, array $modelData)
            {
                
                    

if ((!is_string($value) && !$value instanceof UnitEnum) ) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Generic\InvalidTypeException($value ?? null, ...array (
  0 => 'terms_ref',
  1 => 'string',
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
    

    
        
            if (array_key_exists('action', $modelData) &&
                $modelData['action'] !== $this->action
            ) {
                

                $rollbackValues['action'] = $this->action;
                $this->processAction($modelData);
            }
        
    
        
            if (array_key_exists('mode', $modelData) &&
                $modelData['mode'] !== $this->mode
            ) {
                

                $rollbackValues['mode'] = $this->mode;
                $this->processMode($modelData);
            }
        
    
        
            if (array_key_exists('sla', $modelData) &&
                $modelData['sla'] !== $this->sla
            ) {
                

                $rollbackValues['sla'] = $this->sla;
                $this->processSla($modelData);
            }
        
    
        
            if (array_key_exists('terms_ref', $modelData) &&
                $modelData['terms_ref'] !== $this->termsRef
            ) {
                

                $rollbackValues['termsRef'] = $this->termsRef;
                $this->processTermsRef($modelData);
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
 * serialize the property action
 */
protected function serializeAction()
{
    return \PHPModelGenerator\Filter\Enum::serialize($this->action, array (
  'fqcn' => 'AdCP\\MediaBuy\\Enums\\MediaBuyValidAction',
));
}


/**
 * serialize the property mode
 */
protected function serializeMode()
{
    return \PHPModelGenerator\Filter\Enum::serialize($this->mode, array (
  'fqcn' => 'AdCP\\MediaBuy\\Enums\\MediaBuyActionMode',
));
}





}

// @codeCoverageIgnoreEnd
