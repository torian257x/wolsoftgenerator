<?php

// @codingStandardsIgnoreFile
// @codeCoverageIgnoreStart

declare(strict_types = 1);


    namespace AdCP\MediaBuy;



    use PHPModelGenerator\Interfaces\BuilderInterface;

    use PHPModelGenerator\Exception\ErrorRegistryException;

    use AdCP\MediaBuy\Enums\MediaBuyStatus;

    use AdCP\MediaBuy\Enums\MediaBuyHealth;

    use AdCP\MediaBuy\Enums\MediaBuyValidAction;


/**
 * Builder class for GetMediaBuysResponse_ItemOfArrayMedia_Buysc7061807015269c9e91a3f7e8646b5dd
 */
class GetMediaBuysResponse_ItemOfArrayMedia_Buysc7061807015269c9e91a3f7e8646b5ddBuilder implements BuilderInterface
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
     * Set up a new instance of GetMediaBuysResponse_ItemOfArrayMedia_Buysc7061807015269c9e91a3f7e8646b5dd with fully validated properties
     */
    public function validate(): GetMediaBuysResponse_ItemOfArrayMedia_Buysc7061807015269c9e91a3f7e8646b5dd
    {
        $this->_array_walk_recursive_real(
            $this->_rawModelDataInput,
            function (&$property): void {
                if ($property instanceof BuilderInterface) {
                    $property = $property->getRawModelDataInput();
                }
            },
        );

        return new GetMediaBuysResponse_ItemOfArrayMedia_Buysc7061807015269c9e91a3f7e8646b5dd($this->_rawModelDataInput);
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
             * Get the value of media_buy_id.
             *
             * Seller's unique identifier for the media buy
             *
             * @return string|null
             */
            public function getMediaBuyId(): ?string
            {
                return $this->_rawModelDataInput['media_buy_id'] ?? null;
            }

            /**
             * Set the value of media_buy_id.
             *
             * @param string $mediaBuyId Seller's unique identifier for the media buy
             *
             * {@link GetMediaBuysResponse_ItemOfArrayMedia_Buysc7061807015269c9e91a3f7e8646b5dd::processMediaBuyId}
             * 
             *
             * @return static
             */
            public function setMediaBuyId(
                string $mediaBuyId
            ): static {
                if (array_key_exists('media_buy_id', $this->_rawModelDataInput)
                    && $this->_rawModelDataInput['media_buy_id'] === $mediaBuyId
                ) {
                    return $this;
                }

                $value = $modelData['media_buy_id'] = $mediaBuyId;

                

                

                $this->_rawModelDataInput['media_buy_id'] = $value;

                return $this;
            }
        
    
        
            /**
             * Get the value of account.
             *
             * Account billed for this media buy
             *
             * @return GetMediaBuysResponse_Account|GetMediaBuysResponse_AccountBuilder|array|null
             */
            public function getAccount(): mixed
            {
                return $this->_rawModelDataInput['account'] ?? null;
            }

            /**
             * Set the value of account.
             *
             * @param GetMediaBuysResponse_Account|GetMediaBuysResponse_AccountBuilder|array $account Account billed for this media buy
             *
             * {@link GetMediaBuysResponse_ItemOfArrayMedia_Buysc7061807015269c9e91a3f7e8646b5dd::processAccount}
             * 
             *
             * @return static
             */
            public function setAccount(
                mixed $account
            ): static {
                if (array_key_exists('account', $this->_rawModelDataInput)
                    && $this->_rawModelDataInput['account'] === $account
                ) {
                    return $this;
                }

                $value = $modelData['account'] = $account;

                

                

                $this->_rawModelDataInput['account'] = $value;

                return $this;
            }
        
    
        
            /**
             * Get the value of invoice_recipient.
             *
             * Per-buy invoice recipient when provided at creation. Confirms the seller accepted the billing override. Bank details are omitted (write-only).
             *
             * @return GetMediaBuysResponse_BusinessEntity|GetMediaBuysResponse_BusinessEntityBuilder|array|null
             */
            public function getInvoiceRecipient(): mixed
            {
                return $this->_rawModelDataInput['invoice_recipient'] ?? null;
            }

            /**
             * Set the value of invoice_recipient.
             *
             * @param GetMediaBuysResponse_BusinessEntity|GetMediaBuysResponse_BusinessEntityBuilder|array $invoiceRecipient Per-buy invoice recipient when provided at creation. Confirms the seller accepted the billing override. Bank details are omitted (write-only).
             *
             * {@link GetMediaBuysResponse_ItemOfArrayMedia_Buysc7061807015269c9e91a3f7e8646b5dd::processInvoiceRecipient}
             * 
             *
             * @return static
             */
            public function setInvoiceRecipient(
                mixed $invoiceRecipient
            ): static {
                if (array_key_exists('invoice_recipient', $this->_rawModelDataInput)
                    && $this->_rawModelDataInput['invoice_recipient'] === $invoiceRecipient
                ) {
                    return $this;
                }

                $value = $modelData['invoice_recipient'] = $invoiceRecipient;

                

                

                $this->_rawModelDataInput['invoice_recipient'] = $value;

                return $this;
            }
        
    
        
            /**
             * Get the value of status.
             *
             * Status of a media buy.
             *
             * @return string|MediaBuyStatus|null
             */
            public function getStatus(): string | MediaBuyStatus | null
            {
                return $this->_rawModelDataInput['status'] ?? null;
            }

            /**
             * Set the value of status.
             *
             * @param string|MediaBuyStatus $status Status of a media buy.
             *
             * {@link GetMediaBuysResponse_ItemOfArrayMedia_Buysc7061807015269c9e91a3f7e8646b5dd::processStatus}
             * 
             *
             * @return static
             */
            public function setStatus(
                string | MediaBuyStatus $status
            ): static {
                if (array_key_exists('status', $this->_rawModelDataInput)
                    && $this->_rawModelDataInput['status'] === $status
                ) {
                    return $this;
                }

                $value = $modelData['status'] = $status;

                

                

                $this->_rawModelDataInput['status'] = $value;

                return $this;
            }
        
    
        
            /**
             * Get the value of health.
             *
             * Dependency health of the media buy, orthogonal to `status`. `ok` (default) when no upstream resource that this buy depends on is in an offline state. `impaired` when at least one such resource (audience, creative, catalog_item, event_source, property) is offline and affects delivery for one or more packages — `impairments[]` MUST be non-empty in that case. On terminal-status buys, the seller MAY leave this field in whatever state held at the terminal transition. See lifecycle.mdx § Compliance and the impairment.coherence assertion.
             *
             * @return string|MediaBuyHealth|null
             */
            public function getHealth(): string | MediaBuyHealth | null
            {
                return $this->_rawModelDataInput['health'] ?? null;
            }

            /**
             * Set the value of health.
             *
             * @param string|MediaBuyHealth|null $health Dependency health of the media buy, orthogonal to `status`. `ok` (default) when no upstream resource that this buy depends on is in an offline state. `impaired` when at least one such resource (audience, creative, catalog_item, event_source, property) is offline and affects delivery for one or more packages — `impairments[]` MUST be non-empty in that case. On terminal-status buys, the seller MAY leave this field in whatever state held at the terminal transition. See lifecycle.mdx § Compliance and the impairment.coherence assertion.
             *
             * {@link GetMediaBuysResponse_ItemOfArrayMedia_Buysc7061807015269c9e91a3f7e8646b5dd::processHealth}
             * 
             *
             * @return static
             */
            public function setHealth(
                string | MediaBuyHealth | null $health
            ): static {
                if (array_key_exists('health', $this->_rawModelDataInput)
                    && $this->_rawModelDataInput['health'] === $health
                ) {
                    return $this;
                }

                $value = $modelData['health'] = $health;

                

                

                $this->_rawModelDataInput['health'] = $value;

                return $this;
            }
        
    
        
            /**
             * Get the value of impairments.
             *
             * Open impairments — upstream dependency state changes that affect delivery for at least one package on this buy. Empty when `health` is `ok`; non-empty iff `health` is `impaired` (health-iff rule on non-terminal buys). Sellers MUST add an entry on the next read after a referenced resource transitions to an offline state, and MUST remove the entry when the resource returns to a serviceable state or stops being a dependency (e.g., via assignment swap via update_media_buy). Staleness budget: the snapshot MUST reflect the impairment within 5 minutes of `impairment.observed_at` regardless of buyer poll cadence — sellers cannot rely on rare buyer polls to defer write propagation. See impairment.coherence assertion for the cross-resource invariant.
             *
             * @return GetMediaBuysResponse_Impairment[]|GetMediaBuysResponse_ImpairmentBuilder[]|array|null
             */
            public function getImpairments(): mixed
            {
                return $this->_rawModelDataInput['impairments'] ?? null;
            }

            /**
             * Set the value of impairments.
             *
             * @param GetMediaBuysResponse_Impairment[]|GetMediaBuysResponse_ImpairmentBuilder[]|array $impairments Open impairments — upstream dependency state changes that affect delivery for at least one package on this buy. Empty when `health` is `ok`; non-empty iff `health` is `impaired` (health-iff rule on non-terminal buys). Sellers MUST add an entry on the next read after a referenced resource transitions to an offline state, and MUST remove the entry when the resource returns to a serviceable state or stops being a dependency (e.g., via assignment swap via update_media_buy). Staleness budget: the snapshot MUST reflect the impairment within 5 minutes of `impairment.observed_at` regardless of buyer poll cadence — sellers cannot rely on rare buyer polls to defer write propagation. See impairment.coherence assertion for the cross-resource invariant.
             *
             * {@link GetMediaBuysResponse_ItemOfArrayMedia_Buysc7061807015269c9e91a3f7e8646b5dd::processImpairments}
             * 
             *
             * @return static
             */
            public function setImpairments(
                mixed $impairments
            ): static {
                if (array_key_exists('impairments', $this->_rawModelDataInput)
                    && $this->_rawModelDataInput['impairments'] === $impairments
                ) {
                    return $this;
                }

                $value = $modelData['impairments'] = $impairments;

                

                

                $this->_rawModelDataInput['impairments'] = $value;

                return $this;
            }
        
    
        
            /**
             * Get the value of rejection_reason.
             *
             * Reason provided by the seller when status is 'rejected'. Present only when status is 'rejected'.
             *
             * @return string|null
             */
            public function getRejectionReason(): ?string
            {
                return $this->_rawModelDataInput['rejection_reason'] ?? null;
            }

            /**
             * Set the value of rejection_reason.
             *
             * @param string $rejectionReason Reason provided by the seller when status is 'rejected'. Present only when status is 'rejected'.
             *
             * {@link GetMediaBuysResponse_ItemOfArrayMedia_Buysc7061807015269c9e91a3f7e8646b5dd::processRejectionReason}
             * 
             *
             * @return static
             */
            public function setRejectionReason(
                string $rejectionReason
            ): static {
                if (array_key_exists('rejection_reason', $this->_rawModelDataInput)
                    && $this->_rawModelDataInput['rejection_reason'] === $rejectionReason
                ) {
                    return $this;
                }

                $value = $modelData['rejection_reason'] = $rejectionReason;

                

                

                $this->_rawModelDataInput['rejection_reason'] = $value;

                return $this;
            }
        
    
        
            /**
             * Get the value of currency.
             *
             * ISO 4217 currency code (e.g., USD, EUR, GBP) for monetary values at this media buy level. total_budget is always denominated in this currency. Package-level fields may override with package.currency.
             *
             * @return string|null
             */
            public function getCurrency(): ?string
            {
                return $this->_rawModelDataInput['currency'] ?? null;
            }

            /**
             * Set the value of currency.
             *
             * @param string $currency ISO 4217 currency code (e.g., USD, EUR, GBP) for monetary values at this media buy level. total_budget is always denominated in this currency. Package-level fields may override with package.currency.
             *
             * {@link GetMediaBuysResponse_ItemOfArrayMedia_Buysc7061807015269c9e91a3f7e8646b5dd::processCurrency}
             * 
             *
             * @return static
             */
            public function setCurrency(
                string $currency
            ): static {
                if (array_key_exists('currency', $this->_rawModelDataInput)
                    && $this->_rawModelDataInput['currency'] === $currency
                ) {
                    return $this;
                }

                $value = $modelData['currency'] = $currency;

                

                

                $this->_rawModelDataInput['currency'] = $value;

                return $this;
            }
        
    
        
            /**
             * Get the value of total_budget.
             *
             * Total budget amount across all packages, denominated in media_buy.currency
             *
             * @return float|null
             */
            public function getTotalBudget(): ?float
            {
                return $this->_rawModelDataInput['total_budget'] ?? null;
            }

            /**
             * Set the value of total_budget.
             *
             * @param float $totalBudget Total budget amount across all packages, denominated in media_buy.currency
             *
             * {@link GetMediaBuysResponse_ItemOfArrayMedia_Buysc7061807015269c9e91a3f7e8646b5dd::processTotalBudget}
             * 
             *
             * @return static
             */
            public function setTotalBudget(
                float $totalBudget
            ): static {
                if (array_key_exists('total_budget', $this->_rawModelDataInput)
                    && $this->_rawModelDataInput['total_budget'] === $totalBudget
                ) {
                    return $this;
                }

                $value = $modelData['total_budget'] = $totalBudget;

                

                

                $this->_rawModelDataInput['total_budget'] = $value;

                return $this;
            }
        
    
        
            /**
             * Get the value of start_time.
             *
             * ISO 8601 flight start time for this media buy (earliest package start_time). Avoids requiring buyers to compute min(packages[].start_time).
             *
             * @return string|null
             */
            public function getStartTime(): ?string
            {
                return $this->_rawModelDataInput['start_time'] ?? null;
            }

            /**
             * Set the value of start_time.
             *
             * @param string $startTime ISO 8601 flight start time for this media buy (earliest package start_time). Avoids requiring buyers to compute min(packages[].start_time).
             *
             * {@link GetMediaBuysResponse_ItemOfArrayMedia_Buysc7061807015269c9e91a3f7e8646b5dd::processStartTime}
             * 
             *
             * @return static
             */
            public function setStartTime(
                string $startTime
            ): static {
                if (array_key_exists('start_time', $this->_rawModelDataInput)
                    && $this->_rawModelDataInput['start_time'] === $startTime
                ) {
                    return $this;
                }

                $value = $modelData['start_time'] = $startTime;

                

                

                $this->_rawModelDataInput['start_time'] = $value;

                return $this;
            }
        
    
        
            /**
             * Get the value of end_time.
             *
             * ISO 8601 flight end time for this media buy (latest package end_time). Avoids requiring buyers to compute max(packages[].end_time).
             *
             * @return string|null
             */
            public function getEndTime(): ?string
            {
                return $this->_rawModelDataInput['end_time'] ?? null;
            }

            /**
             * Set the value of end_time.
             *
             * @param string $endTime ISO 8601 flight end time for this media buy (latest package end_time). Avoids requiring buyers to compute max(packages[].end_time).
             *
             * {@link GetMediaBuysResponse_ItemOfArrayMedia_Buysc7061807015269c9e91a3f7e8646b5dd::processEndTime}
             * 
             *
             * @return static
             */
            public function setEndTime(
                string $endTime
            ): static {
                if (array_key_exists('end_time', $this->_rawModelDataInput)
                    && $this->_rawModelDataInput['end_time'] === $endTime
                ) {
                    return $this;
                }

                $value = $modelData['end_time'] = $endTime;

                

                

                $this->_rawModelDataInput['end_time'] = $value;

                return $this;
            }
        
    
        
            /**
             * Get the value of creative_deadline.
             *
             * ISO 8601 timestamp for creative upload deadline
             *
             * @return string|null
             */
            public function getCreativeDeadline(): ?string
            {
                return $this->_rawModelDataInput['creative_deadline'] ?? null;
            }

            /**
             * Set the value of creative_deadline.
             *
             * @param string $creativeDeadline ISO 8601 timestamp for creative upload deadline
             *
             * {@link GetMediaBuysResponse_ItemOfArrayMedia_Buysc7061807015269c9e91a3f7e8646b5dd::processCreativeDeadline}
             * 
             *
             * @return static
             */
            public function setCreativeDeadline(
                string $creativeDeadline
            ): static {
                if (array_key_exists('creative_deadline', $this->_rawModelDataInput)
                    && $this->_rawModelDataInput['creative_deadline'] === $creativeDeadline
                ) {
                    return $this;
                }

                $value = $modelData['creative_deadline'] = $creativeDeadline;

                

                

                $this->_rawModelDataInput['creative_deadline'] = $value;

                return $this;
            }
        
    
        
            /**
             * Get the value of confirmed_at.
             *
             * ISO 8601 timestamp when the seller confirmed this media buy. A successful create_media_buy response constitutes order confirmation.
             *
             * @return string|null
             */
            public function getConfirmedAt(): ?string
            {
                return $this->_rawModelDataInput['confirmed_at'] ?? null;
            }

            /**
             * Set the value of confirmed_at.
             *
             * @param string $confirmedAt ISO 8601 timestamp when the seller confirmed this media buy. A successful create_media_buy response constitutes order confirmation.
             *
             * {@link GetMediaBuysResponse_ItemOfArrayMedia_Buysc7061807015269c9e91a3f7e8646b5dd::processConfirmedAt}
             * 
             *
             * @return static
             */
            public function setConfirmedAt(
                string $confirmedAt
            ): static {
                if (array_key_exists('confirmed_at', $this->_rawModelDataInput)
                    && $this->_rawModelDataInput['confirmed_at'] === $confirmedAt
                ) {
                    return $this;
                }

                $value = $modelData['confirmed_at'] = $confirmedAt;

                

                

                $this->_rawModelDataInput['confirmed_at'] = $value;

                return $this;
            }
        
    
        
            /**
             * Get the value of cancellation.
             *
             * Cancellation metadata. Present only when status is 'canceled'.
             *
             * @return GetMediaBuysResponse_Cancellationa1dbdcb8720933d462d20c1567bfc370|GetMediaBuysResponse_Cancellationa1dbdcb8720933d462d20c1567bfc370Builder|array|null
             */
            public function getCancellation(): mixed
            {
                return $this->_rawModelDataInput['cancellation'] ?? null;
            }

            /**
             * Set the value of cancellation.
             *
             * @param GetMediaBuysResponse_Cancellationa1dbdcb8720933d462d20c1567bfc370|GetMediaBuysResponse_Cancellationa1dbdcb8720933d462d20c1567bfc370Builder|array $cancellation Cancellation metadata. Present only when status is 'canceled'.
             *
             * {@link GetMediaBuysResponse_ItemOfArrayMedia_Buysc7061807015269c9e91a3f7e8646b5dd::processCancellation}
             * 
             *
             * @return static
             */
            public function setCancellation(
                mixed $cancellation
            ): static {
                if (array_key_exists('cancellation', $this->_rawModelDataInput)
                    && $this->_rawModelDataInput['cancellation'] === $cancellation
                ) {
                    return $this;
                }

                $value = $modelData['cancellation'] = $cancellation;

                

                

                $this->_rawModelDataInput['cancellation'] = $value;

                return $this;
            }
        
    
        
            /**
             * Get the value of revision.
             *
             * Current revision number. Pass this in update_media_buy for optimistic concurrency.
             *
             * @return int|null
             */
            public function getRevision(): ?int
            {
                return $this->_rawModelDataInput['revision'] ?? null;
            }

            /**
             * Set the value of revision.
             *
             * @param int $revision Current revision number. Pass this in update_media_buy for optimistic concurrency.
             *
             * {@link GetMediaBuysResponse_ItemOfArrayMedia_Buysc7061807015269c9e91a3f7e8646b5dd::processRevision}
             * 
             *
             * @return static
             */
            public function setRevision(
                int $revision
            ): static {
                if (array_key_exists('revision', $this->_rawModelDataInput)
                    && $this->_rawModelDataInput['revision'] === $revision
                ) {
                    return $this;
                }

                $value = $modelData['revision'] = $revision;

                

                

                $this->_rawModelDataInput['revision'] = $value;

                return $this;
            }
        
    
        
            /**
             * Get the value of created_at.
             *
             * Creation timestamp
             *
             * @return string|null
             */
            public function getCreatedAt(): ?string
            {
                return $this->_rawModelDataInput['created_at'] ?? null;
            }

            /**
             * Set the value of created_at.
             *
             * @param string $createdAt Creation timestamp
             *
             * {@link GetMediaBuysResponse_ItemOfArrayMedia_Buysc7061807015269c9e91a3f7e8646b5dd::processCreatedAt}
             * 
             *
             * @return static
             */
            public function setCreatedAt(
                string $createdAt
            ): static {
                if (array_key_exists('created_at', $this->_rawModelDataInput)
                    && $this->_rawModelDataInput['created_at'] === $createdAt
                ) {
                    return $this;
                }

                $value = $modelData['created_at'] = $createdAt;

                

                

                $this->_rawModelDataInput['created_at'] = $value;

                return $this;
            }
        
    
        
            /**
             * Get the value of updated_at.
             *
             * Last update timestamp
             *
             * @return string|null
             */
            public function getUpdatedAt(): ?string
            {
                return $this->_rawModelDataInput['updated_at'] ?? null;
            }

            /**
             * Set the value of updated_at.
             *
             * @param string $updatedAt Last update timestamp
             *
             * {@link GetMediaBuysResponse_ItemOfArrayMedia_Buysc7061807015269c9e91a3f7e8646b5dd::processUpdatedAt}
             * 
             *
             * @return static
             */
            public function setUpdatedAt(
                string $updatedAt
            ): static {
                if (array_key_exists('updated_at', $this->_rawModelDataInput)
                    && $this->_rawModelDataInput['updated_at'] === $updatedAt
                ) {
                    return $this;
                }

                $value = $modelData['updated_at'] = $updatedAt;

                

                

                $this->_rawModelDataInput['updated_at'] = $value;

                return $this;
            }
        
    
        
            /**
             * Get the value of valid_actions.
             *
             * Flat-vocabulary actions the buyer can perform on this media buy in its current state. Eliminates the need for agents to internalize the state machine — the seller declares what is permitted right now. Deprecated in favor of `available_actions[]`, which carries `mode` (self_serve / conditional_self_serve / requires_proposal / requires_approval), optional SLA, and optional `terms_ref`. Sellers SHOULD populate both during the 3.x deprecation window; consumers MUST prefer `available_actions[]` when both are present. Removed in 4.0.
             *
             * @return string[]|MediaBuyValidAction[]|null
             */
            public function getValidActions(): array | MediaBuyValidAction | null
            {
                return $this->_rawModelDataInput['valid_actions'] ?? null;
            }

            /**
             * Set the value of valid_actions.
             *
             * @param string[]|MediaBuyValidAction[]|null $validActions Flat-vocabulary actions the buyer can perform on this media buy in its current state. Eliminates the need for agents to internalize the state machine — the seller declares what is permitted right now. Deprecated in favor of `available_actions[]`, which carries `mode` (self_serve / conditional_self_serve / requires_proposal / requires_approval), optional SLA, and optional `terms_ref`. Sellers SHOULD populate both during the 3.x deprecation window; consumers MUST prefer `available_actions[]` when both are present. Removed in 4.0.
             *
             * {@link GetMediaBuysResponse_ItemOfArrayMedia_Buysc7061807015269c9e91a3f7e8646b5dd::processValidActions}
             * 
             *
             * @return static
             */
            public function setValidActions(
                array | MediaBuyValidAction | null $validActions
            ): static {
                if (array_key_exists('valid_actions', $this->_rawModelDataInput)
                    && $this->_rawModelDataInput['valid_actions'] === $validActions
                ) {
                    return $this;
                }

                $value = $modelData['valid_actions'] = $validActions;

                

                

                $this->_rawModelDataInput['valid_actions'] = $value;

                return $this;
            }
        
    
        
            /**
             * Get the value of available_actions.
             *
             * Structured per-buy resolution of the actions buyer can perform right now. Authoritative — divergence from product `allowed_actions[]` is expected (negotiated terms, account tier, buy-level overrides live on the deal, not the product). Each entry carries the resolved `mode` (singular, since the buy has a concrete state), optional `sla` commitment, and optional `terms_ref`. Predicate queries via #4425's `requires` grammar address fields by dotted path, e.g. `available_actions.extend_flight.sla.response_max`. Absent SLA means no commitment, not zero commitment — callers composing duration predicates MUST also compose with `present: true` to avoid silently matching sellers who never declared one.
             *
             * @return GetMediaBuysResponse_MediaBuyAvailableAction[]|GetMediaBuysResponse_MediaBuyAvailableActionBuilder[]|array|null
             */
            public function getAvailableActions(): mixed
            {
                return $this->_rawModelDataInput['available_actions'] ?? null;
            }

            /**
             * Set the value of available_actions.
             *
             * @param GetMediaBuysResponse_MediaBuyAvailableAction[]|GetMediaBuysResponse_MediaBuyAvailableActionBuilder[]|array $availableActions Structured per-buy resolution of the actions buyer can perform right now. Authoritative — divergence from product `allowed_actions[]` is expected (negotiated terms, account tier, buy-level overrides live on the deal, not the product). Each entry carries the resolved `mode` (singular, since the buy has a concrete state), optional `sla` commitment, and optional `terms_ref`. Predicate queries via #4425's `requires` grammar address fields by dotted path, e.g. `available_actions.extend_flight.sla.response_max`. Absent SLA means no commitment, not zero commitment — callers composing duration predicates MUST also compose with `present: true` to avoid silently matching sellers who never declared one.
             *
             * {@link GetMediaBuysResponse_ItemOfArrayMedia_Buysc7061807015269c9e91a3f7e8646b5dd::processAvailableActions}
             * 
             *
             * @return static
             */
            public function setAvailableActions(
                mixed $availableActions
            ): static {
                if (array_key_exists('available_actions', $this->_rawModelDataInput)
                    && $this->_rawModelDataInput['available_actions'] === $availableActions
                ) {
                    return $this;
                }

                $value = $modelData['available_actions'] = $availableActions;

                

                

                $this->_rawModelDataInput['available_actions'] = $value;

                return $this;
            }
        
    
        
            /**
             * Get the value of webhook_activity.
             *
             * Recent reporting and health webhook fires for the calling principal, most-recent first. Present only when `include_webhook_activity` was true in the request AND the seller surfaces this debug capability for this buy. Three-state semantics: (a) field omitted — seller does not surface webhook activity (either does not persist fire history, or `capabilities.media_buy.propagation_surfaces` excludes webhook surfaces, or the buy has no registered `push_notification_config` for this principal); (b) empty array `[]` — seller persists fire history but has fired nothing recent for this principal; (c) non-empty array — actual fire records. Sellers whose declared `propagation_surfaces` does not include `webhook` MUST omit the field. **Retention (normative):** sellers that surface this field MUST retain records for at least 30 days from each record's `completed_at` (for records still in `pending` status the clock runs from `fired_at` until the attempt terminates, then resets to 30 days from `completed_at` — so retry trails do not age out mid-flight). Sellers that cannot honor the 30-day floor MUST omit the field entirely rather than return a shorter window. Sellers MAY return fewer than `webhook_activity_limit` records when fewer fire records exist within the retention window. Sellers MUST emit one record per attempt — single-attempt successes appear as a single record with `attempt: 1`. Record shape is canonical across resources: see [`/schemas/core/webhook-activity-record.json`](/schemas/v3/core/webhook-activity-record.json) and snapshot-and-log.mdx § Webhook activity log pattern.
             *
             * @return GetMediaBuysResponse_WebhookActivityRecord[]|GetMediaBuysResponse_WebhookActivityRecordBuilder[]|array|null
             */
            public function getWebhookActivity(): mixed
            {
                return $this->_rawModelDataInput['webhook_activity'] ?? null;
            }

            /**
             * Set the value of webhook_activity.
             *
             * @param GetMediaBuysResponse_WebhookActivityRecord[]|GetMediaBuysResponse_WebhookActivityRecordBuilder[]|array $webhookActivity Recent reporting and health webhook fires for the calling principal, most-recent first. Present only when `include_webhook_activity` was true in the request AND the seller surfaces this debug capability for this buy. Three-state semantics: (a) field omitted — seller does not surface webhook activity (either does not persist fire history, or `capabilities.media_buy.propagation_surfaces` excludes webhook surfaces, or the buy has no registered `push_notification_config` for this principal); (b) empty array `[]` — seller persists fire history but has fired nothing recent for this principal; (c) non-empty array — actual fire records. Sellers whose declared `propagation_surfaces` does not include `webhook` MUST omit the field. **Retention (normative):** sellers that surface this field MUST retain records for at least 30 days from each record's `completed_at` (for records still in `pending` status the clock runs from `fired_at` until the attempt terminates, then resets to 30 days from `completed_at` — so retry trails do not age out mid-flight). Sellers that cannot honor the 30-day floor MUST omit the field entirely rather than return a shorter window. Sellers MAY return fewer than `webhook_activity_limit` records when fewer fire records exist within the retention window. Sellers MUST emit one record per attempt — single-attempt successes appear as a single record with `attempt: 1`. Record shape is canonical across resources: see [`/schemas/core/webhook-activity-record.json`](/schemas/v3/core/webhook-activity-record.json) and snapshot-and-log.mdx § Webhook activity log pattern.
             *
             * {@link GetMediaBuysResponse_ItemOfArrayMedia_Buysc7061807015269c9e91a3f7e8646b5dd::processWebhookActivity}
             * 
             *
             * @return static
             */
            public function setWebhookActivity(
                mixed $webhookActivity
            ): static {
                if (array_key_exists('webhook_activity', $this->_rawModelDataInput)
                    && $this->_rawModelDataInput['webhook_activity'] === $webhookActivity
                ) {
                    return $this;
                }

                $value = $modelData['webhook_activity'] = $webhookActivity;

                

                

                $this->_rawModelDataInput['webhook_activity'] = $value;

                return $this;
            }
        
    
        
            /**
             * Get the value of history.
             *
             * Revision history entries, most recent first. Only present when include_history > 0 in the request. Each entry represents a state change or update to the media buy. Entries are append-only: sellers MUST NOT modify or delete previously emitted history entries. Callers MAY cache entries by revision number. Returns min(N, available entries) when include_history exceeds the total.
             *
             * @return GetMediaBuysResponse_ItemOfArrayHistorye30b0d87589f81ed4e27bbb6f1932e88[]|GetMediaBuysResponse_ItemOfArrayHistorye30b0d87589f81ed4e27bbb6f1932e88Builder[]|array|null
             */
            public function getHistory(): mixed
            {
                return $this->_rawModelDataInput['history'] ?? null;
            }

            /**
             * Set the value of history.
             *
             * @param GetMediaBuysResponse_ItemOfArrayHistorye30b0d87589f81ed4e27bbb6f1932e88[]|GetMediaBuysResponse_ItemOfArrayHistorye30b0d87589f81ed4e27bbb6f1932e88Builder[]|array $history Revision history entries, most recent first. Only present when include_history > 0 in the request. Each entry represents a state change or update to the media buy. Entries are append-only: sellers MUST NOT modify or delete previously emitted history entries. Callers MAY cache entries by revision number. Returns min(N, available entries) when include_history exceeds the total.
             *
             * {@link GetMediaBuysResponse_ItemOfArrayMedia_Buysc7061807015269c9e91a3f7e8646b5dd::processHistory}
             * 
             *
             * @return static
             */
            public function setHistory(
                mixed $history
            ): static {
                if (array_key_exists('history', $this->_rawModelDataInput)
                    && $this->_rawModelDataInput['history'] === $history
                ) {
                    return $this;
                }

                $value = $modelData['history'] = $history;

                

                

                $this->_rawModelDataInput['history'] = $value;

                return $this;
            }
        
    
        
            /**
             * Get the value of packages.
             *
             * Packages within this media buy, augmented with creative approval status and optional delivery snapshots
             *
             * @return GetMediaBuysResponse_PackageStatus[]|GetMediaBuysResponse_PackageStatusBuilder[]|array|null
             */
            public function getPackages(): mixed
            {
                return $this->_rawModelDataInput['packages'] ?? null;
            }

            /**
             * Set the value of packages.
             *
             * @param GetMediaBuysResponse_PackageStatus[]|GetMediaBuysResponse_PackageStatusBuilder[]|array $packages Packages within this media buy, augmented with creative approval status and optional delivery snapshots
             *
             * {@link GetMediaBuysResponse_ItemOfArrayMedia_Buysc7061807015269c9e91a3f7e8646b5dd::processPackages}
             * 
             *
             * @return static
             */
            public function setPackages(
                mixed $packages
            ): static {
                if (array_key_exists('packages', $this->_rawModelDataInput)
                    && $this->_rawModelDataInput['packages'] === $packages
                ) {
                    return $this;
                }

                $value = $modelData['packages'] = $packages;

                

                

                $this->_rawModelDataInput['packages'] = $value;

                return $this;
            }
        
    
        
            /**
             * Get the value of ext.
             *
             * Extension object for platform-specific, vendor-namespaced parameters. Extensions are always optional and must be namespaced under a vendor/platform key (e.g., ext.gam, ext.roku). Used for custom capabilities, partner-specific configuration, and features being proposed for standardization.
             *
             * @return GetMediaBuysResponse_ExtensionObject|GetMediaBuysResponse_ExtensionObjectBuilder|array|null
             */
            public function getExt(): mixed
            {
                return $this->_rawModelDataInput['ext'] ?? null;
            }

            /**
             * Set the value of ext.
             *
             * @param GetMediaBuysResponse_ExtensionObject|GetMediaBuysResponse_ExtensionObjectBuilder|array $ext Extension object for platform-specific, vendor-namespaced parameters. Extensions are always optional and must be namespaced under a vendor/platform key (e.g., ext.gam, ext.roku). Used for custom capabilities, partner-specific configuration, and features being proposed for standardization.
             *
             * {@link GetMediaBuysResponse_ItemOfArrayMedia_Buysc7061807015269c9e91a3f7e8646b5dd::processExt}
             * 
             *
             * @return static
             */
            public function setExt(
                mixed $ext
            ): static {
                if (array_key_exists('ext', $this->_rawModelDataInput)
                    && $this->_rawModelDataInput['ext'] === $ext
                ) {
                    return $this;
                }

                $value = $modelData['ext'] = $ext;

                

                

                $this->_rawModelDataInput['ext'] = $value;

                return $this;
            }
        
    
}

// @codeCoverageIgnoreEnd
