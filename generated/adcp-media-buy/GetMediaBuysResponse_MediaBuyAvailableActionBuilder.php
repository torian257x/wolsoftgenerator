<?php

// @codingStandardsIgnoreFile
// @codeCoverageIgnoreStart

declare(strict_types = 1);


    namespace AdCP\MediaBuy;



    use PHPModelGenerator\Interfaces\BuilderInterface;

    use PHPModelGenerator\Exception\ErrorRegistryException;

    use AdCP\MediaBuy\Enums\MediaBuyValidAction;

    use AdCP\MediaBuy\Enums\MediaBuyActionMode;


/**
 * Builder class for GetMediaBuysResponse_MediaBuyAvailableAction
 */
class GetMediaBuysResponse_MediaBuyAvailableActionBuilder implements BuilderInterface
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
     * Set up a new instance of GetMediaBuysResponse_MediaBuyAvailableAction with fully validated properties
     */
    public function validate(): GetMediaBuysResponse_MediaBuyAvailableAction
    {
        $this->_array_walk_recursive_real(
            $this->_rawModelDataInput,
            function (&$property): void {
                if ($property instanceof BuilderInterface) {
                    $property = $property->getRawModelDataInput();
                }
            },
        );

        return new GetMediaBuysResponse_MediaBuyAvailableAction($this->_rawModelDataInput);
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
             * Get the value of action.
             *
             * Actions the buyer can perform on a media buy. Used as the action identifier in both the legacy flat `valid_actions[]` field (string array) and the structured `available_actions[]` field on buy responses, and in `allowed_actions[]` on Product. The coarse values (`update_budget`, `update_dates`, `update_packages`, `sync_creatives`) predate the finer-grained vocabulary and are retained for backwards compatibility — see `x-deprecated-enum-values`. Sellers SHOULD declare the finer-grained values where their platform distinguishes them; the coarse values roll up to the finer set per `enumMetadata[<value>].rollup`. See action-to-field mapping table in docs/media-buy/task-reference/update_media_buy.mdx for the normative binding between each action and the fields it covers on update_media_buy.
             *
             * @return string|MediaBuyValidAction|null
             */
            public function getAction(): string | MediaBuyValidAction | null
            {
                return $this->_rawModelDataInput['action'] ?? null;
            }

            /**
             * Set the value of action.
             *
             * @param string|MediaBuyValidAction $action Actions the buyer can perform on a media buy. Used as the action identifier in both the legacy flat `valid_actions[]` field (string array) and the structured `available_actions[]` field on buy responses, and in `allowed_actions[]` on Product. The coarse values (`update_budget`, `update_dates`, `update_packages`, `sync_creatives`) predate the finer-grained vocabulary and are retained for backwards compatibility — see `x-deprecated-enum-values`. Sellers SHOULD declare the finer-grained values where their platform distinguishes them; the coarse values roll up to the finer set per `enumMetadata[<value>].rollup`. See action-to-field mapping table in docs/media-buy/task-reference/update_media_buy.mdx for the normative binding between each action and the fields it covers on update_media_buy.
             *
             * {@link GetMediaBuysResponse_MediaBuyAvailableAction::processAction}
             * 
             *
             * @return static
             */
            public function setAction(
                string | MediaBuyValidAction $action
            ): static {
                if (array_key_exists('action', $this->_rawModelDataInput)
                    && $this->_rawModelDataInput['action'] === $action
                ) {
                    return $this;
                }

                $value = $modelData['action'] = $action;

                

                

                $this->_rawModelDataInput['action'] = $value;

                return $this;
            }
        
    
        
            /**
             * Get the value of mode.
             *
             * The single mode that applies right now on this buy for this action. Singular because the buy has a concrete state, exactly one mode applies. Buyer SDKs branch on this to decide whether to expect a synchronous response, a proposal task, or an asynchronous approval callback.
             *
             * @return string|MediaBuyActionMode|null
             */
            public function getMode(): string | MediaBuyActionMode | null
            {
                return $this->_rawModelDataInput['mode'] ?? null;
            }

            /**
             * Set the value of mode.
             *
             * @param string|MediaBuyActionMode $mode The single mode that applies right now on this buy for this action. Singular because the buy has a concrete state, exactly one mode applies. Buyer SDKs branch on this to decide whether to expect a synchronous response, a proposal task, or an asynchronous approval callback.
             *
             * {@link GetMediaBuysResponse_MediaBuyAvailableAction::processMode}
             * 
             *
             * @return static
             */
            public function setMode(
                string | MediaBuyActionMode $mode
            ): static {
                if (array_key_exists('mode', $this->_rawModelDataInput)
                    && $this->_rawModelDataInput['mode'] === $mode
                ) {
                    return $this;
                }

                $value = $modelData['mode'] = $mode;

                

                

                $this->_rawModelDataInput['mode'] = $value;

                return $this;
            }
        
    
        
            /**
             * Get the value of sla.
             *
             * Optional SLA commitment for this action on this buy. Absence means no commitment, not zero commitment.
             *
             * @return GetMediaBuysResponse_SLAWindow|GetMediaBuysResponse_SLAWindowBuilder|array|null
             */
            public function getSla(): mixed
            {
                return $this->_rawModelDataInput['sla'] ?? null;
            }

            /**
             * Set the value of sla.
             *
             * @param GetMediaBuysResponse_SLAWindow|GetMediaBuysResponse_SLAWindowBuilder|array $sla Optional SLA commitment for this action on this buy. Absence means no commitment, not zero commitment.
             *
             * {@link GetMediaBuysResponse_MediaBuyAvailableAction::processSla}
             * 
             *
             * @return static
             */
            public function setSla(
                mixed $sla
            ): static {
                if (array_key_exists('sla', $this->_rawModelDataInput)
                    && $this->_rawModelDataInput['sla'] === $sla
                ) {
                    return $this;
                }

                $value = $modelData['sla'] = $sla;

                

                

                $this->_rawModelDataInput['sla'] = $value;

                return $this;
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
                return $this->_rawModelDataInput['terms_ref'] ?? null;
            }

            /**
             * Set the value of terms_ref.
             *
             * @param string $termsRef Optional pointer into buy-terms negotiation (forward-references the buy-terms namespace landing via separate RFC). Schema accepts any string for now and will tighten to a structured reference when the buy-terms RFC ships.
             *
             * {@link GetMediaBuysResponse_MediaBuyAvailableAction::processTermsRef}
             * 
             *
             * @return static
             */
            public function setTermsRef(
                string $termsRef
            ): static {
                if (array_key_exists('terms_ref', $this->_rawModelDataInput)
                    && $this->_rawModelDataInput['terms_ref'] === $termsRef
                ) {
                    return $this;
                }

                $value = $modelData['terms_ref'] = $termsRef;

                

                

                $this->_rawModelDataInput['terms_ref'] = $value;

                return $this;
            }
        
    
}

// @codeCoverageIgnoreEnd
