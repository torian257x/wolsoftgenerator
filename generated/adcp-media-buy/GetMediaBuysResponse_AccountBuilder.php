<?php

// @codingStandardsIgnoreFile
// @codeCoverageIgnoreStart

declare(strict_types = 1);


    namespace AdCP\MediaBuy;



    use PHPModelGenerator\Interfaces\BuilderInterface;

    use PHPModelGenerator\Exception\ErrorRegistryException;

    use AdCP\MediaBuy\Enums\AccountStatus;

    use AdCP\MediaBuy\Enums\BillingParty;

    use AdCP\MediaBuy\Enums\PaymentTerms;

    use AdCP\MediaBuy\Enums\AccountScope;


/**
 * Builder class for GetMediaBuysResponse_Account
 */
class GetMediaBuysResponse_AccountBuilder implements BuilderInterface
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
     * Set up a new instance of GetMediaBuysResponse_Account with fully validated properties
     */
    public function validate(): GetMediaBuysResponse_Account
    {
        $this->_array_walk_recursive_real(
            $this->_rawModelDataInput,
            function (&$property): void {
                if ($property instanceof BuilderInterface) {
                    $property = $property->getRawModelDataInput();
                }
            },
        );

        return new GetMediaBuysResponse_Account($this->_rawModelDataInput);
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
             * Get the value of account_id.
             *
             * Unique identifier for this account
             *
             * @return string|null
             */
            public function getAccountId(): ?string
            {
                return $this->_rawModelDataInput['account_id'] ?? null;
            }

            /**
             * Set the value of account_id.
             *
             * @param string $accountId Unique identifier for this account
             *
             * {@link GetMediaBuysResponse_Account::processAccountId}
             * 
             *
             * @return static
             */
            public function setAccountId(
                string $accountId
            ): static {
                if (array_key_exists('account_id', $this->_rawModelDataInput)
                    && $this->_rawModelDataInput['account_id'] === $accountId
                ) {
                    return $this;
                }

                $value = $modelData['account_id'] = $accountId;

                

                

                $this->_rawModelDataInput['account_id'] = $value;

                return $this;
            }
        
    
        
            /**
             * Get the value of name.
             *
             * Human-readable account name (e.g., 'Acme', 'Acme c/o Pinnacle')
             *
             * @return string|null
             */
            public function getName(): ?string
            {
                return $this->_rawModelDataInput['name'] ?? null;
            }

            /**
             * Set the value of name.
             *
             * @param string $name Human-readable account name (e.g., 'Acme', 'Acme c/o Pinnacle')
             *
             * {@link GetMediaBuysResponse_Account::processName}
             * 
             *
             * @return static
             */
            public function setName(
                string $name
            ): static {
                if (array_key_exists('name', $this->_rawModelDataInput)
                    && $this->_rawModelDataInput['name'] === $name
                ) {
                    return $this;
                }

                $value = $modelData['name'] = $name;

                

                

                $this->_rawModelDataInput['name'] = $value;

                return $this;
            }
        
    
        
            /**
             * Get the value of advertiser.
             *
             * The advertiser whose rates apply to this account
             *
             * @return string|null
             */
            public function getAdvertiser(): ?string
            {
                return $this->_rawModelDataInput['advertiser'] ?? null;
            }

            /**
             * Set the value of advertiser.
             *
             * @param string $advertiser The advertiser whose rates apply to this account
             *
             * {@link GetMediaBuysResponse_Account::processAdvertiser}
             * 
             *
             * @return static
             */
            public function setAdvertiser(
                string $advertiser
            ): static {
                if (array_key_exists('advertiser', $this->_rawModelDataInput)
                    && $this->_rawModelDataInput['advertiser'] === $advertiser
                ) {
                    return $this;
                }

                $value = $modelData['advertiser'] = $advertiser;

                

                

                $this->_rawModelDataInput['advertiser'] = $value;

                return $this;
            }
        
    
        
            /**
             * Get the value of billing_proxy.
             *
             * Optional intermediary who receives invoices on behalf of the advertiser (e.g., agency)
             *
             * @return string|null
             */
            public function getBillingProxy(): ?string
            {
                return $this->_rawModelDataInput['billing_proxy'] ?? null;
            }

            /**
             * Set the value of billing_proxy.
             *
             * @param string $billingProxy Optional intermediary who receives invoices on behalf of the advertiser (e.g., agency)
             *
             * {@link GetMediaBuysResponse_Account::processBillingProxy}
             * 
             *
             * @return static
             */
            public function setBillingProxy(
                string $billingProxy
            ): static {
                if (array_key_exists('billing_proxy', $this->_rawModelDataInput)
                    && $this->_rawModelDataInput['billing_proxy'] === $billingProxy
                ) {
                    return $this;
                }

                $value = $modelData['billing_proxy'] = $billingProxy;

                

                

                $this->_rawModelDataInput['billing_proxy'] = $value;

                return $this;
            }
        
    
        
            /**
             * Get the value of status.
             *
             * Account lifecycle status. See the Accounts Protocol overview for the operations matrix showing which tasks are permitted in each state.
             *
             * @return string|AccountStatus|null
             */
            public function getStatus(): string | AccountStatus | null
            {
                return $this->_rawModelDataInput['status'] ?? null;
            }

            /**
             * Set the value of status.
             *
             * @param string|AccountStatus $status Account lifecycle status. See the Accounts Protocol overview for the operations matrix showing which tasks are permitted in each state.
             *
             * {@link GetMediaBuysResponse_Account::processStatus}
             * 
             *
             * @return static
             */
            public function setStatus(
                string | AccountStatus $status
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
             * Get the value of brand.
             *
             * Brand reference identifying the advertiser
             *
             * @return GetMediaBuysResponse_BrandReference|GetMediaBuysResponse_BrandReferenceBuilder|array|null
             */
            public function getBrand(): mixed
            {
                return $this->_rawModelDataInput['brand'] ?? null;
            }

            /**
             * Set the value of brand.
             *
             * @param GetMediaBuysResponse_BrandReference|GetMediaBuysResponse_BrandReferenceBuilder|array $brand Brand reference identifying the advertiser
             *
             * {@link GetMediaBuysResponse_Account::processBrand}
             * 
             *
             * @return static
             */
            public function setBrand(
                mixed $brand
            ): static {
                if (array_key_exists('brand', $this->_rawModelDataInput)
                    && $this->_rawModelDataInput['brand'] === $brand
                ) {
                    return $this;
                }

                $value = $modelData['brand'] = $brand;

                

                

                $this->_rawModelDataInput['brand'] = $value;

                return $this;
            }
        
    
        
            /**
             * Get the value of operator.
             *
             * Domain of the entity operating this account. When the brand operates directly, this is the brand's domain.
             *
             * @return string|null
             */
            public function getOperator(): ?string
            {
                return $this->_rawModelDataInput['operator'] ?? null;
            }

            /**
             * Set the value of operator.
             *
             * @param string $operator Domain of the entity operating this account. When the brand operates directly, this is the brand's domain.
             *
             * {@link GetMediaBuysResponse_Account::processOperator}
             * 
             *
             * @return static
             */
            public function setOperator(
                string $operator
            ): static {
                if (array_key_exists('operator', $this->_rawModelDataInput)
                    && $this->_rawModelDataInput['operator'] === $operator
                ) {
                    return $this;
                }

                $value = $modelData['operator'] = $operator;

                

                

                $this->_rawModelDataInput['operator'] = $value;

                return $this;
            }
        
    
        
            /**
             * Get the value of billing.
             *
             * Who is invoiced on this account. See billing_entity for the invoiced party's business details.
             *
             * @return string|BillingParty|null
             */
            public function getBilling(): string | BillingParty | null
            {
                return $this->_rawModelDataInput['billing'] ?? null;
            }

            /**
             * Set the value of billing.
             *
             * @param string|BillingParty|null $billing Who is invoiced on this account. See billing_entity for the invoiced party's business details.
             *
             * {@link GetMediaBuysResponse_Account::processBilling}
             * 
             *
             * @return static
             */
            public function setBilling(
                string | BillingParty | null $billing
            ): static {
                if (array_key_exists('billing', $this->_rawModelDataInput)
                    && $this->_rawModelDataInput['billing'] === $billing
                ) {
                    return $this;
                }

                $value = $modelData['billing'] = $billing;

                

                

                $this->_rawModelDataInput['billing'] = $value;

                return $this;
            }
        
    
        
            /**
             * Get the value of billing_entity.
             *
             * Business entity details for the party responsible for payment. Contains the legal name, tax IDs, address, and bank details needed for formal B2B invoicing. Corresponds to whoever billing points to (operator, agent, or advertiser). When this account appears in a response, bank details MUST be omitted (write-only).
             *
             * @return GetMediaBuysResponse_BusinessEntity|GetMediaBuysResponse_BusinessEntityBuilder|array|null
             */
            public function getBillingEntity(): mixed
            {
                return $this->_rawModelDataInput['billing_entity'] ?? null;
            }

            /**
             * Set the value of billing_entity.
             *
             * @param GetMediaBuysResponse_BusinessEntity|GetMediaBuysResponse_BusinessEntityBuilder|array $billingEntity Business entity details for the party responsible for payment. Contains the legal name, tax IDs, address, and bank details needed for formal B2B invoicing. Corresponds to whoever billing points to (operator, agent, or advertiser). When this account appears in a response, bank details MUST be omitted (write-only).
             *
             * {@link GetMediaBuysResponse_Account::processBillingEntity}
             * 
             *
             * @return static
             */
            public function setBillingEntity(
                mixed $billingEntity
            ): static {
                if (array_key_exists('billing_entity', $this->_rawModelDataInput)
                    && $this->_rawModelDataInput['billing_entity'] === $billingEntity
                ) {
                    return $this;
                }

                $value = $modelData['billing_entity'] = $billingEntity;

                

                

                $this->_rawModelDataInput['billing_entity'] = $value;

                return $this;
            }
        
    
        
            /**
             * Get the value of rate_card.
             *
             * Identifier for the rate card applied to this account
             *
             * @return string|null
             */
            public function getRateCard(): ?string
            {
                return $this->_rawModelDataInput['rate_card'] ?? null;
            }

            /**
             * Set the value of rate_card.
             *
             * @param string $rateCard Identifier for the rate card applied to this account
             *
             * {@link GetMediaBuysResponse_Account::processRateCard}
             * 
             *
             * @return static
             */
            public function setRateCard(
                string $rateCard
            ): static {
                if (array_key_exists('rate_card', $this->_rawModelDataInput)
                    && $this->_rawModelDataInput['rate_card'] === $rateCard
                ) {
                    return $this;
                }

                $value = $modelData['rate_card'] = $rateCard;

                

                

                $this->_rawModelDataInput['rate_card'] = $value;

                return $this;
            }
        
    
        
            /**
             * Get the value of payment_terms.
             *
             * Payment terms agreed for this account. Binding for all invoices when the account is active.
             *
             * @return string|PaymentTerms|null
             */
            public function getPaymentTerms(): string | PaymentTerms | null
            {
                return $this->_rawModelDataInput['payment_terms'] ?? null;
            }

            /**
             * Set the value of payment_terms.
             *
             * @param string|PaymentTerms|null $paymentTerms Payment terms agreed for this account. Binding for all invoices when the account is active.
             *
             * {@link GetMediaBuysResponse_Account::processPaymentTerms}
             * 
             *
             * @return static
             */
            public function setPaymentTerms(
                string | PaymentTerms | null $paymentTerms
            ): static {
                if (array_key_exists('payment_terms', $this->_rawModelDataInput)
                    && $this->_rawModelDataInput['payment_terms'] === $paymentTerms
                ) {
                    return $this;
                }

                $value = $modelData['payment_terms'] = $paymentTerms;

                

                

                $this->_rawModelDataInput['payment_terms'] = $value;

                return $this;
            }
        
    
        
            /**
             * Get the value of credit_limit.
             *
             * Maximum outstanding balance allowed
             *
             * @return GetMediaBuysResponse_Credit_Limitc3a7f9e1ace296bebae63362ef9328ca|GetMediaBuysResponse_Credit_Limitc3a7f9e1ace296bebae63362ef9328caBuilder|array|null
             */
            public function getCreditLimit(): mixed
            {
                return $this->_rawModelDataInput['credit_limit'] ?? null;
            }

            /**
             * Set the value of credit_limit.
             *
             * @param GetMediaBuysResponse_Credit_Limitc3a7f9e1ace296bebae63362ef9328ca|GetMediaBuysResponse_Credit_Limitc3a7f9e1ace296bebae63362ef9328caBuilder|array $creditLimit Maximum outstanding balance allowed
             *
             * {@link GetMediaBuysResponse_Account::processCreditLimit}
             * 
             *
             * @return static
             */
            public function setCreditLimit(
                mixed $creditLimit
            ): static {
                if (array_key_exists('credit_limit', $this->_rawModelDataInput)
                    && $this->_rawModelDataInput['credit_limit'] === $creditLimit
                ) {
                    return $this;
                }

                $value = $modelData['credit_limit'] = $creditLimit;

                

                

                $this->_rawModelDataInput['credit_limit'] = $value;

                return $this;
            }
        
    
        
            /**
             * Get the value of setup.
             *
             * Present when status is 'pending_approval'. Contains next steps for completing account activation.
             *
             * @return GetMediaBuysResponse_Setup373eba143d729f5252325a7d3837aa7d|GetMediaBuysResponse_Setup373eba143d729f5252325a7d3837aa7dBuilder|array|null
             */
            public function getSetup(): mixed
            {
                return $this->_rawModelDataInput['setup'] ?? null;
            }

            /**
             * Set the value of setup.
             *
             * @param GetMediaBuysResponse_Setup373eba143d729f5252325a7d3837aa7d|GetMediaBuysResponse_Setup373eba143d729f5252325a7d3837aa7dBuilder|array $setup Present when status is 'pending_approval'. Contains next steps for completing account activation.
             *
             * {@link GetMediaBuysResponse_Account::processSetup}
             * 
             *
             * @return static
             */
            public function setSetup(
                mixed $setup
            ): static {
                if (array_key_exists('setup', $this->_rawModelDataInput)
                    && $this->_rawModelDataInput['setup'] === $setup
                ) {
                    return $this;
                }

                $value = $modelData['setup'] = $setup;

                

                

                $this->_rawModelDataInput['setup'] = $value;

                return $this;
            }
        
    
        
            /**
             * Get the value of account_scope.
             *
             * How the seller scoped a billing account relative to the operator and brand dimensions.
             *
             * @return string|AccountScope|null
             */
            public function getAccountScope(): string | AccountScope | null
            {
                return $this->_rawModelDataInput['account_scope'] ?? null;
            }

            /**
             * Set the value of account_scope.
             *
             * @param string|AccountScope|null $accountScope How the seller scoped a billing account relative to the operator and brand dimensions.
             *
             * {@link GetMediaBuysResponse_Account::processAccountScope}
             * 
             *
             * @return static
             */
            public function setAccountScope(
                string | AccountScope | null $accountScope
            ): static {
                if (array_key_exists('account_scope', $this->_rawModelDataInput)
                    && $this->_rawModelDataInput['account_scope'] === $accountScope
                ) {
                    return $this;
                }

                $value = $modelData['account_scope'] = $accountScope;

                

                

                $this->_rawModelDataInput['account_scope'] = $value;

                return $this;
            }
        
    
        
            /**
             * Get the value of governance_agents.
             *
             * Governance agent endpoint registered on this account. Exactly one entry per sync_governance's one-agent-per-account invariant. The array shape is preserved for wire compatibility with 3.0; `maxItems: 1` is load-bearing and mirrors the singular `governance_context` on the protocol envelope. Authentication credentials are write-only and not included in responses — use sync_governance to set or update credentials.
             *
             * @return GetMediaBuysResponse_ItemOfArrayGovernance_Agents18f58187ee1abde25033f0892dfed1fa[]|GetMediaBuysResponse_ItemOfArrayGovernance_Agents18f58187ee1abde25033f0892dfed1faBuilder[]|array|null
             */
            public function getGovernanceAgents(): mixed
            {
                return $this->_rawModelDataInput['governance_agents'] ?? null;
            }

            /**
             * Set the value of governance_agents.
             *
             * @param GetMediaBuysResponse_ItemOfArrayGovernance_Agents18f58187ee1abde25033f0892dfed1fa[]|GetMediaBuysResponse_ItemOfArrayGovernance_Agents18f58187ee1abde25033f0892dfed1faBuilder[]|array $governanceAgents Governance agent endpoint registered on this account. Exactly one entry per sync_governance's one-agent-per-account invariant. The array shape is preserved for wire compatibility with 3.0; `maxItems: 1` is load-bearing and mirrors the singular `governance_context` on the protocol envelope. Authentication credentials are write-only and not included in responses — use sync_governance to set or update credentials.
             *
             * {@link GetMediaBuysResponse_Account::processGovernanceAgents}
             * 
             *
             * @return static
             */
            public function setGovernanceAgents(
                mixed $governanceAgents
            ): static {
                if (array_key_exists('governance_agents', $this->_rawModelDataInput)
                    && $this->_rawModelDataInput['governance_agents'] === $governanceAgents
                ) {
                    return $this;
                }

                $value = $modelData['governance_agents'] = $governanceAgents;

                

                

                $this->_rawModelDataInput['governance_agents'] = $value;

                return $this;
            }
        
    
        
            /**
             * Get the value of reporting_bucket.
             *
             * Cloud storage bucket where the seller delivers offline reporting files for this account. Seller provisions a dedicated bucket or a per-account prefix within a shared bucket, and grants the buyer read access out-of-band. Access MUST be scoped at the IAM layer so each account can only read its own prefix — bucket-wide grants are non-compliant even with per-account prefixes. Seller MUST revoke access when the account's status transitions to inactive, suspended, or closed. See security considerations for offline delivery in docs/media-buy/media-buys/optimization-reporting. Only present when the seller supports offline delivery (reporting_delivery_methods includes 'offline' in capabilities).
             *
             * @return GetMediaBuysResponse_Reporting_Bucket637c6849430a3f89084a3d42202a1d68|GetMediaBuysResponse_Reporting_Bucket637c6849430a3f89084a3d42202a1d68Builder|array|null
             */
            public function getReportingBucket(): mixed
            {
                return $this->_rawModelDataInput['reporting_bucket'] ?? null;
            }

            /**
             * Set the value of reporting_bucket.
             *
             * @param GetMediaBuysResponse_Reporting_Bucket637c6849430a3f89084a3d42202a1d68|GetMediaBuysResponse_Reporting_Bucket637c6849430a3f89084a3d42202a1d68Builder|array $reportingBucket Cloud storage bucket where the seller delivers offline reporting files for this account. Seller provisions a dedicated bucket or a per-account prefix within a shared bucket, and grants the buyer read access out-of-band. Access MUST be scoped at the IAM layer so each account can only read its own prefix — bucket-wide grants are non-compliant even with per-account prefixes. Seller MUST revoke access when the account's status transitions to inactive, suspended, or closed. See security considerations for offline delivery in docs/media-buy/media-buys/optimization-reporting. Only present when the seller supports offline delivery (reporting_delivery_methods includes 'offline' in capabilities).
             *
             * {@link GetMediaBuysResponse_Account::processReportingBucket}
             * 
             *
             * @return static
             */
            public function setReportingBucket(
                mixed $reportingBucket
            ): static {
                if (array_key_exists('reporting_bucket', $this->_rawModelDataInput)
                    && $this->_rawModelDataInput['reporting_bucket'] === $reportingBucket
                ) {
                    return $this;
                }

                $value = $modelData['reporting_bucket'] = $reportingBucket;

                

                

                $this->_rawModelDataInput['reporting_bucket'] = $value;

                return $this;
            }
        
    
        
            /**
             * Get the value of sandbox.
             *
             * When true, this is a sandbox account — no real platform calls, no real spend. For explicit accounts (require_operator_auth: true), sandbox accounts are pre-existing test accounts on the platform discovered via list_accounts. For implicit accounts, sandbox is part of the natural key: the same brand/operator pair can have both a production and sandbox account.
             *
             * @return bool|null
             */
            public function getSandbox(): ?bool
            {
                return $this->_rawModelDataInput['sandbox'] ?? null;
            }

            /**
             * Set the value of sandbox.
             *
             * @param bool $sandbox When true, this is a sandbox account — no real platform calls, no real spend. For explicit accounts (require_operator_auth: true), sandbox accounts are pre-existing test accounts on the platform discovered via list_accounts. For implicit accounts, sandbox is part of the natural key: the same brand/operator pair can have both a production and sandbox account.
             *
             * {@link GetMediaBuysResponse_Account::processSandbox}
             * 
             *
             * @return static
             */
            public function setSandbox(
                bool $sandbox
            ): static {
                if (array_key_exists('sandbox', $this->_rawModelDataInput)
                    && $this->_rawModelDataInput['sandbox'] === $sandbox
                ) {
                    return $this;
                }

                $value = $modelData['sandbox'] = $sandbox;

                

                

                $this->_rawModelDataInput['sandbox'] = $value;

                return $this;
            }
        
    
        
            /**
             * Get the value of notification_configs.
             *
             * Account-level webhook subscriptions for notifications whose lifecycle outlives any single media buy (e.g., `creative.status_changed`, `creative.purged`). Distinct from `push_notification_config` on individual operations, which anchors at a per-resource scope. Buyers register and update entries via `sync_accounts`; sellers echo the applied state here on `list_accounts` reads so buyers can verify what's active. `authentication.credentials` is write-only — sellers MUST NOT echo legacy auth credentials in this response. When two or more entries register the same `event_types`, each receives an independent fire — see #3009 multi-subscriber composition.
             *
             * @return GetMediaBuysResponse_NotificationConfig[]|GetMediaBuysResponse_NotificationConfigBuilder[]|array|null
             */
            public function getNotificationConfigs(): mixed
            {
                return $this->_rawModelDataInput['notification_configs'] ?? null;
            }

            /**
             * Set the value of notification_configs.
             *
             * @param GetMediaBuysResponse_NotificationConfig[]|GetMediaBuysResponse_NotificationConfigBuilder[]|array $notificationConfigs Account-level webhook subscriptions for notifications whose lifecycle outlives any single media buy (e.g., `creative.status_changed`, `creative.purged`). Distinct from `push_notification_config` on individual operations, which anchors at a per-resource scope. Buyers register and update entries via `sync_accounts`; sellers echo the applied state here on `list_accounts` reads so buyers can verify what's active. `authentication.credentials` is write-only — sellers MUST NOT echo legacy auth credentials in this response. When two or more entries register the same `event_types`, each receives an independent fire — see #3009 multi-subscriber composition.
             *
             * {@link GetMediaBuysResponse_Account::processNotificationConfigs}
             * 
             *
             * @return static
             */
            public function setNotificationConfigs(
                mixed $notificationConfigs
            ): static {
                if (array_key_exists('notification_configs', $this->_rawModelDataInput)
                    && $this->_rawModelDataInput['notification_configs'] === $notificationConfigs
                ) {
                    return $this;
                }

                $value = $modelData['notification_configs'] = $notificationConfigs;

                

                

                $this->_rawModelDataInput['notification_configs'] = $value;

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
             * {@link GetMediaBuysResponse_Account::processExt}
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
