<?php

// @codingStandardsIgnoreFile
// @codeCoverageIgnoreStart

declare(strict_types = 1);


    namespace AdCP\MediaBuy;



    use PHPModelGenerator\Interfaces\JSONModelInterface;

    use UnitEnum;

    use AdCP\MediaBuy\Enums\AccountStatus;

    use AdCP\MediaBuy\Enums\BillingParty;

    use AdCP\MediaBuy\Enums\PaymentTerms;

    use AdCP\MediaBuy\Enums\AccountScope;

    use PHPModelGenerator\Traits\SerializableTrait;

    use JsonSerializable;

    use PHPModelGenerator\Interfaces\SerializationInterface;

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

    use PHPModelGenerator\Attributes\JsonPointer;

    use PHPModelGenerator\Attributes\SchemaName;

    use PHPModelGenerator\Attributes\Required;

    use PHPModelGenerator\Attributes\Internal;

    use PHPModelGenerator\Exception\ErrorRegistryException;


/**
 * Class GetMediaBuysResponse_Account
 * @package AdCP\MediaBuy 
 *
 * Account billed for this media buy
 *
 * This is an auto-implemented class implemented by the php-json-schema-model-generator.
 * If you need to implement something in this class use inheritance. Else you will lose your changes if the classes
 * are re-generated.
 */

#[JsonPointer('/properties/media_buys/items/properties/account')]

class GetMediaBuysResponse_Account implements JSONModelInterface, JsonSerializable, SerializationInterface
{
    use SerializableTrait;

    
        
            #[JsonPointer('/properties/media_buys/items/properties/account/properties/account_id')]
        
            #[SchemaName('account_id')]
        
            #[Required]
        
        /** @var string Unique identifier for this account */
        protected $accountId;
    
        
            #[JsonPointer('/properties/media_buys/items/properties/account/properties/name')]
        
            #[SchemaName('name')]
        
            #[Required]
        
        /** @var string Human-readable account name (e.g., 'Acme', 'Acme c/o Pinnacle') */
        protected $name;
    
        
            #[JsonPointer('/properties/media_buys/items/properties/account/properties/advertiser')]
        
            #[SchemaName('advertiser')]
        
        /** @var string|null The advertiser whose rates apply to this account */
        protected $advertiser;
    
        
            #[JsonPointer('/properties/media_buys/items/properties/account/properties/billing_proxy')]
        
            #[SchemaName('billing_proxy')]
        
        /** @var string|null Optional intermediary who receives invoices on behalf of the advertiser (e.g., agency) */
        protected $billingProxy;
    
        
            #[JsonPointer('/properties/media_buys/items/properties/account/properties/status')]
        
            #[SchemaName('status')]
        
            #[Required]
        
        /** @var AccountStatus Account lifecycle status. See the Accounts Protocol overview for the operations matrix showing which tasks are permitted in each state. */
        protected $status;
    
        
            #[JsonPointer('/properties/media_buys/items/properties/account/properties/brand')]
        
            #[SchemaName('brand')]
        
        /** @var GetMediaBuysResponse_BrandReference|null Brand reference identifying the advertiser */
        protected $brand;
    
        
            #[JsonPointer('/properties/media_buys/items/properties/account/properties/operator')]
        
            #[SchemaName('operator')]
        
        /** @var string|null Domain of the entity operating this account. When the brand operates directly, this is the brand's domain. */
        protected $operator;
    
        
            #[JsonPointer('/properties/media_buys/items/properties/account/properties/billing')]
        
            #[SchemaName('billing')]
        
        /** @var BillingParty|null Who is invoiced on this account. See billing_entity for the invoiced party's business details. */
        protected $billing;
    
        
            #[JsonPointer('/properties/media_buys/items/properties/account/properties/billing_entity')]
        
            #[SchemaName('billing_entity')]
        
        /** @var GetMediaBuysResponse_BusinessEntity|null Business entity details for the party responsible for payment. Contains the legal name, tax IDs, address, and bank details needed for formal B2B invoicing. Corresponds to whoever billing points to (operator, agent, or advertiser). When this account appears in a response, bank details MUST be omitted (write-only). */
        protected $billingEntity;
    
        
            #[JsonPointer('/properties/media_buys/items/properties/account/properties/rate_card')]
        
            #[SchemaName('rate_card')]
        
        /** @var string|null Identifier for the rate card applied to this account */
        protected $rateCard;
    
        
            #[JsonPointer('/properties/media_buys/items/properties/account/properties/payment_terms')]
        
            #[SchemaName('payment_terms')]
        
        /** @var PaymentTerms|null Payment terms agreed for this account. Binding for all invoices when the account is active. */
        protected $paymentTerms;
    
        
            #[JsonPointer('/properties/media_buys/items/properties/account/properties/credit_limit')]
        
            #[SchemaName('credit_limit')]
        
        /** @var GetMediaBuysResponse_Credit_Limitc3a7f9e1ace296bebae63362ef9328ca|null Maximum outstanding balance allowed */
        protected $creditLimit;
    
        
            #[JsonPointer('/properties/media_buys/items/properties/account/properties/setup')]
        
            #[SchemaName('setup')]
        
        /** @var GetMediaBuysResponse_Setup373eba143d729f5252325a7d3837aa7d|null Present when status is 'pending_approval'. Contains next steps for completing account activation. */
        protected $setup;
    
        
            #[JsonPointer('/properties/media_buys/items/properties/account/properties/account_scope')]
        
            #[SchemaName('account_scope')]
        
        /** @var AccountScope|null How the seller scoped a billing account relative to the operator and brand dimensions. */
        protected $accountScope;
    
        
            #[JsonPointer('/properties/media_buys/items/properties/account/properties/governance_agents')]
        
            #[SchemaName('governance_agents')]
        
        /** @var GetMediaBuysResponse_ItemOfArrayGovernance_Agents18f58187ee1abde25033f0892dfed1fa[]|null Governance agent endpoint registered on this account. Exactly one entry per sync_governance's one-agent-per-account invariant. The array shape is preserved for wire compatibility with 3.0; `maxItems: 1` is load-bearing and mirrors the singular `governance_context` on the protocol envelope. Authentication credentials are write-only and not included in responses — use sync_governance to set or update credentials. */
        protected $governanceAgents;
    
        
            #[JsonPointer('/properties/media_buys/items/properties/account/properties/reporting_bucket')]
        
            #[SchemaName('reporting_bucket')]
        
        /** @var GetMediaBuysResponse_Reporting_Bucket637c6849430a3f89084a3d42202a1d68|null Cloud storage bucket where the seller delivers offline reporting files for this account. Seller provisions a dedicated bucket or a per-account prefix within a shared bucket, and grants the buyer read access out-of-band. Access MUST be scoped at the IAM layer so each account can only read its own prefix — bucket-wide grants are non-compliant even with per-account prefixes. Seller MUST revoke access when the account's status transitions to inactive, suspended, or closed. See security considerations for offline delivery in docs/media-buy/media-buys/optimization-reporting. Only present when the seller supports offline delivery (reporting_delivery_methods includes 'offline' in capabilities). */
        protected $reportingBucket;
    
        
            #[JsonPointer('/properties/media_buys/items/properties/account/properties/sandbox')]
        
            #[SchemaName('sandbox')]
        
        /** @var bool|null When true, this is a sandbox account — no real platform calls, no real spend. For explicit accounts (require_operator_auth: true), sandbox accounts are pre-existing test accounts on the platform discovered via list_accounts. For implicit accounts, sandbox is part of the natural key: the same brand/operator pair can have both a production and sandbox account. */
        protected $sandbox;
    
        
            #[JsonPointer('/properties/media_buys/items/properties/account/properties/notification_configs')]
        
            #[SchemaName('notification_configs')]
        
        /** @var GetMediaBuysResponse_NotificationConfig[]|null Account-level webhook subscriptions for notifications whose lifecycle outlives any single media buy (e.g., `creative.status_changed`, `creative.purged`). Distinct from `push_notification_config` on individual operations, which anchors at a per-resource scope. Buyers register and update entries via `sync_accounts`; sellers echo the applied state here on `list_accounts` reads so buyers can verify what's active. `authentication.credentials` is write-only — sellers MUST NOT echo legacy auth credentials in this response. When two or more entries register the same `event_types`, each receives an independent fire — see #3009 multi-subscriber composition. */
        protected $notificationConfigs;
    
        
            #[JsonPointer('/properties/media_buys/items/properties/account/properties/ext')]
        
            #[SchemaName('ext')]
        
        /** @var GetMediaBuysResponse_ExtensionObject|null Extension object for platform-specific, vendor-namespaced parameters. Extensions are always optional and must be namespaced under a vendor/platform key (e.g., ext.gam, ext.roku). Used for custom capabilities, partner-specific configuration, and features being proposed for standardization. */
        protected $ext;
    
        
            #[Internal]
        
        /** @var array Collect all additional properties provided to the schema */
        private $_additionalProperties = array (
);
    
        
            #[Internal]
        
        /** @var array Values which might be skipped for serialization if not provided */
        private $_skipNotProvidedPropertiesMap = array (
  2 => 'advertiser',
  3 => 'billing_proxy',
  5 => 'brand',
  6 => 'operator',
  7 => 'billing',
  8 => 'billing_entity',
  9 => 'rate_card',
  10 => 'payment_terms',
  11 => 'credit_limit',
  12 => 'setup',
  13 => 'account_scope',
  14 => 'governance_agents',
  15 => 'reporting_bucket',
  16 => 'sandbox',
  17 => 'notification_configs',
  18 => 'ext',
);
    
    #[Internal]
    /** @var array */
    protected $_rawModelDataInput = [];

    
        #[Internal]
        /** @var ErrorRegistryException Collect all validation errors */
        protected $_errorRegistry;
    

    /**
     * GetMediaBuysResponse_Account constructor.
     *
     * @param array $rawModelDataInput
     *
     * @throws ErrorRegistryException
     */
    public function __construct(array $rawModelDataInput = [])
    {
        
            $this->_errorRegistry = new ErrorRegistryException();
        

        

        
            $this->executeBaseValidators($rawModelDataInput);
        

        
            
                $this->processAccountId($rawModelDataInput);
            
        
            
                $this->processName($rawModelDataInput);
            
        
            
                $this->processAdvertiser($rawModelDataInput);
            
        
            
                $this->processBillingProxy($rawModelDataInput);
            
        
            
                $this->processStatus($rawModelDataInput);
            
        
            
                $this->processBrand($rawModelDataInput);
            
        
            
                $this->processOperator($rawModelDataInput);
            
        
            
                $this->processBilling($rawModelDataInput);
            
        
            
                $this->processBillingEntity($rawModelDataInput);
            
        
            
                $this->processRateCard($rawModelDataInput);
            
        
            
                $this->processPaymentTerms($rawModelDataInput);
            
        
            
                $this->processCreditLimit($rawModelDataInput);
            
        
            
                $this->processSetup($rawModelDataInput);
            
        
            
                $this->processAccountScope($rawModelDataInput);
            
        
            
                $this->processGovernanceAgents($rawModelDataInput);
            
        
            
                $this->processReportingBucket($rawModelDataInput);
            
        
            
                $this->processSandbox($rawModelDataInput);
            
        
            
                $this->processNotificationConfigs($rawModelDataInput);
            
        
            
                $this->processExt($rawModelDataInput);
            
        
            
        
            
        

        
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
   'account_id',
   'name',
   'advertiser',
   'billing_proxy',
   'status',
   'brand',
   'operator',
   'billing',
   'billing_entity',
   'rate_card',
   'payment_terms',
   'credit_limit',
   'setup',
   'account_scope',
   'governance_agents',
   'reporting_bucket',
   'sandbox',
   'notification_configs',
   'ext',
)) as $propertyKey) {
        

        $this->_additionalProperties[$propertyKey] = $value[$propertyKey];
    }

    return false;
})()) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Object\InvalidAdditionalPropertiesException($value ?? null, ...array (
  0 => 'GetMediaBuysResponse_Account',
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
                 * Get the value of account_id.
                 *
                 * Unique identifier for this account
                 *
                 * @return string
                 */
                public function getAccountId(): string
                {
                    

                    return $this->accountId;
                }
            

            
                /**
                 * Set the value of account_id.
                 *
                 * @param string $accountId Unique identifier for this account
                 *
                 * @throws ErrorRegistryException
                 *
                 * @return static
                 */
                public function setAccountId(
                    string $accountId
                ): static {
                    if ($this->accountId === $accountId) {
                        return $this;
                    }

                    $value = $modelData['account_id'] = $accountId;

                    
                        $this->_errorRegistry = new ErrorRegistryException();
                    

                    

                    $value = $this->validateAccountId($value, $modelData);

                    
                        if ($this->_errorRegistry->getErrors()) {
                            throw $this->_errorRegistry;
                        }
                    

                    $this->accountId = $value;
                    $this->_rawModelDataInput['account_id'] = $accountId;

                    

                    return $this;
                }
            

            /**
             * Extract the value, perform validations and set the property accountId
             *
             * @param array $modelData
             *
             * @throws ErrorRegistryException
             */
            protected function processAccountId(array $modelData): void
            {
                

                $value = array_key_exists('account_id', $modelData) ? $modelData['account_id'] : $this->accountId;

                

                $this->accountId = $this->validateAccountId($value, $modelData);
            }

            /**
             * Execute all validators for the property accountId
             */
            protected function validateAccountId($value, array $modelData)
            {
                
                    

if (!array_key_exists('account_id', $modelData)) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Object\RequiredValueException($value ?? null, ...array (
  0 => 'account_id',
)));
}

                
                    

if ((!is_string($value) && !$value instanceof UnitEnum) ) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Generic\InvalidTypeException($value ?? null, ...array (
  0 => 'account_id',
  1 => 'string',
)));
}

                

                return $value;
            }
        
    
        
            
                /**
                 * Get the value of name.
                 *
                 * Human-readable account name (e.g., 'Acme', 'Acme c/o Pinnacle')
                 *
                 * @return string
                 */
                public function getName(): string
                {
                    

                    return $this->name;
                }
            

            
                /**
                 * Set the value of name.
                 *
                 * @param string $name Human-readable account name (e.g., 'Acme', 'Acme c/o Pinnacle')
                 *
                 * @throws ErrorRegistryException
                 *
                 * @return static
                 */
                public function setName(
                    string $name
                ): static {
                    if ($this->name === $name) {
                        return $this;
                    }

                    $value = $modelData['name'] = $name;

                    
                        $this->_errorRegistry = new ErrorRegistryException();
                    

                    

                    $value = $this->validateName($value, $modelData);

                    
                        if ($this->_errorRegistry->getErrors()) {
                            throw $this->_errorRegistry;
                        }
                    

                    $this->name = $value;
                    $this->_rawModelDataInput['name'] = $name;

                    

                    return $this;
                }
            

            /**
             * Extract the value, perform validations and set the property name
             *
             * @param array $modelData
             *
             * @throws ErrorRegistryException
             */
            protected function processName(array $modelData): void
            {
                

                $value = array_key_exists('name', $modelData) ? $modelData['name'] : $this->name;

                

                $this->name = $this->validateName($value, $modelData);
            }

            /**
             * Execute all validators for the property name
             */
            protected function validateName($value, array $modelData)
            {
                
                    

if (!array_key_exists('name', $modelData)) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Object\RequiredValueException($value ?? null, ...array (
  0 => 'name',
)));
}

                
                    

if ((!is_string($value) && !$value instanceof UnitEnum) ) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Generic\InvalidTypeException($value ?? null, ...array (
  0 => 'name',
  1 => 'string',
)));
}

                

                return $value;
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
                    

                    return $this->advertiser;
                }
            

            
                /**
                 * Set the value of advertiser.
                 *
                 * @param string $advertiser The advertiser whose rates apply to this account
                 *
                 * @throws ErrorRegistryException
                 *
                 * @return static
                 */
                public function setAdvertiser(
                    string $advertiser
                ): static {
                    if ($this->advertiser === $advertiser) {
                        return $this;
                    }

                    $value = $modelData['advertiser'] = $advertiser;

                    
                        $this->_errorRegistry = new ErrorRegistryException();
                    

                    

                    $value = $this->validateAdvertiser($value, $modelData);

                    
                        if ($this->_errorRegistry->getErrors()) {
                            throw $this->_errorRegistry;
                        }
                    

                    $this->advertiser = $value;
                    $this->_rawModelDataInput['advertiser'] = $advertiser;

                    

                    return $this;
                }
            

            /**
             * Extract the value, perform validations and set the property advertiser
             *
             * @param array $modelData
             *
             * @throws ErrorRegistryException
             */
            protected function processAdvertiser(array $modelData): void
            {
                
                    if (!array_key_exists('advertiser', $modelData) && $this->advertiser === null) {
                        return;
                    }
                

                $value = array_key_exists('advertiser', $modelData) ? $modelData['advertiser'] : $this->advertiser;

                

                $this->advertiser = $this->validateAdvertiser($value, $modelData);
            }

            /**
             * Execute all validators for the property advertiser
             */
            protected function validateAdvertiser($value, array $modelData)
            {
                
                    

if ((!is_string($value) && !$value instanceof UnitEnum) ) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Generic\InvalidTypeException($value ?? null, ...array (
  0 => 'advertiser',
  1 => 'string',
)));
}

                

                return $value;
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
                    

                    return $this->billingProxy;
                }
            

            
                /**
                 * Set the value of billing_proxy.
                 *
                 * @param string $billingProxy Optional intermediary who receives invoices on behalf of the advertiser (e.g., agency)
                 *
                 * @throws ErrorRegistryException
                 *
                 * @return static
                 */
                public function setBillingProxy(
                    string $billingProxy
                ): static {
                    if ($this->billingProxy === $billingProxy) {
                        return $this;
                    }

                    $value = $modelData['billing_proxy'] = $billingProxy;

                    
                        $this->_errorRegistry = new ErrorRegistryException();
                    

                    

                    $value = $this->validateBillingProxy($value, $modelData);

                    
                        if ($this->_errorRegistry->getErrors()) {
                            throw $this->_errorRegistry;
                        }
                    

                    $this->billingProxy = $value;
                    $this->_rawModelDataInput['billing_proxy'] = $billingProxy;

                    

                    return $this;
                }
            

            /**
             * Extract the value, perform validations and set the property billingProxy
             *
             * @param array $modelData
             *
             * @throws ErrorRegistryException
             */
            protected function processBillingProxy(array $modelData): void
            {
                
                    if (!array_key_exists('billing_proxy', $modelData) && $this->billingProxy === null) {
                        return;
                    }
                

                $value = array_key_exists('billing_proxy', $modelData) ? $modelData['billing_proxy'] : $this->billingProxy;

                

                $this->billingProxy = $this->validateBillingProxy($value, $modelData);
            }

            /**
             * Execute all validators for the property billingProxy
             */
            protected function validateBillingProxy($value, array $modelData)
            {
                
                    

if ((!is_string($value) && !$value instanceof UnitEnum) ) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Generic\InvalidTypeException($value ?? null, ...array (
  0 => 'billing_proxy',
  1 => 'string',
)));
}

                

                return $value;
            }
        
    
        
            
                /**
                 * Get the value of status.
                 *
                 * Account lifecycle status. See the Accounts Protocol overview for the operations matrix showing which tasks are permitted in each state.
                 *
                 * @return AccountStatus
                 */
                public function getStatus(): AccountStatus
                {
                    

                    return $this->status;
                }
            

            
                /**
                 * Set the value of status.
                 *
                 * @param string|AccountStatus $status Account lifecycle status. See the Accounts Protocol overview for the operations matrix showing which tasks are permitted in each state.
                 *
                 * @throws ErrorRegistryException
                 *
                 * @return static
                 */
                public function setStatus(
                    string | AccountStatus $status
                ): static {
                    if ($this->status === $status) {
                        return $this;
                    }

                    $value = $modelData['status'] = $status;

                    
                        $this->_errorRegistry = new ErrorRegistryException();
                    

                    

                    $value = $this->validateStatus($value, $modelData);

                    
                        if ($this->_errorRegistry->getErrors()) {
                            throw $this->_errorRegistry;
                        }
                    

                    $this->status = $value;
                    $this->_rawModelDataInput['status'] = $status;

                    

                    return $this;
                }
            

            /**
             * Extract the value, perform validations and set the property status
             *
             * @param array $modelData
             *
             * @throws ErrorRegistryException
             */
            protected function processStatus(array $modelData): void
            {
                

                $value = array_key_exists('status', $modelData) ? $modelData['status'] : $this->status;

                

                $this->status = $this->validateStatus($value, $modelData);
            }

            /**
             * Execute all validators for the property status
             */
            protected function validateStatus($value, array $modelData)
            {
                
                    

if ($value instanceof UnitEnum && !($value instanceof AccountStatus)) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Generic\InvalidTypeException($value ?? null, ...array (
  0 => 'status',
  1 => 'AccountStatus',
)));
}

                
                    

if (!array_key_exists('status', $modelData)) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Object\RequiredValueException($value ?? null, ...array (
  0 => 'status',
)));
}

                
                    

if ((!is_string($value) && !$value instanceof UnitEnum) ) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Generic\InvalidTypeException($value ?? null, ...array (
  0 => 'status',
  1 => 'string',
)));
}

                
                    

if (!($value instanceof UnitEnum) && !in_array($value, array (
   'active',
   'pending_approval',
   'rejected',
   'payment_required',
   'suspended',
   'closed',
), true)) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Generic\EnumException($value ?? null, ...array (
  0 => 'status',
  1 => 
  array (
    0 => 'active',
    1 => 'pending_approval',
    2 => 'rejected',
    3 => 'payment_required',
    4 => 'suspended',
    5 => 'closed',
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
  'fqcn' => 'AdCP\\MediaBuy\\Enums\\AccountStatus',
));
        } catch (\Throwable $filterException) {
            
                $transformationFailed = true;
            

            $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Filter\InvalidFilterValueException($value ?? null, ...array (
  0 => 'status',
  1 => 'php_model_generator_enum',
  2 => $filterException,
)));
        }

        return false;
    })($value)
)) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Filter\IncompatibleFilterException($value ?? null, ...array (
  0 => 'status',
  1 => 'php_model_generator_enum',
)));
}

                

                return $value;
            }
        
    
        
            
                /**
                 * Get the value of brand.
                 *
                 * Brand reference identifying the advertiser
                 * @example {"domain":"nova-brands.com","brand_id":"spark"}
                 * @example {"domain":"nova-brands.com","brand_id":"glow"}
                 * @example {"domain":"acme-corp.com"}
                 *
                 * @return GetMediaBuysResponse_BrandReference|null
                 */
                public function getBrand(): ?GetMediaBuysResponse_BrandReference
                {
                    

                    return $this->brand;
                }
            

            
                /**
                 * Set the value of brand.
                 *
                 * @param GetMediaBuysResponse_BrandReference $brand Brand reference identifying the advertiser
                 *
                 * @throws ErrorRegistryException
                 *
                 * @return static
                 */
                public function setBrand(
                    GetMediaBuysResponse_BrandReference $brand
                ): static {
                    if ($this->brand === $brand) {
                        return $this;
                    }

                    $value = $modelData['brand'] = $brand;

                    
                        $this->_errorRegistry = new ErrorRegistryException();
                    

                    

                    $value = $this->validateBrand($value, $modelData);

                    
                        if ($this->_errorRegistry->getErrors()) {
                            throw $this->_errorRegistry;
                        }
                    

                    $this->brand = $value;
                    $this->_rawModelDataInput['brand'] = $brand;

                    

                    return $this;
                }
            

            /**
             * Extract the value, perform validations and set the property brand
             *
             * @param array $modelData
             *
             * @throws ErrorRegistryException
             */
            protected function processBrand(array $modelData): void
            {
                
                    if (!array_key_exists('brand', $modelData) && $this->brand === null) {
                        return;
                    }
                

                $value = array_key_exists('brand', $modelData) ? $modelData['brand'] : $this->brand;

                $value = (function ($value) {
    try {
        return is_array($value) ? new GetMediaBuysResponse_BrandReference($value) : $value;
    } catch (\Exception $instantiationException) {
        
            $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Object\NestedObjectException($value ?? null, ...array (
  0 => 'brand',
  1 => $instantiationException,
)));
        

        
            return $instantiationException;
        
    }
})($value)
;

                $this->brand = $this->validateBrand($value, $modelData);
            }

            /**
             * Execute all validators for the property brand
             */
            protected function validateBrand($value, array $modelData)
            {
                
                    

if ((!is_object($value) && !$value instanceof UnitEnum) ) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Generic\InvalidTypeException($value ?? null, ...array (
  0 => 'brand',
  1 => 'object',
)));
}

                
                    

if (is_object($value) && !($value instanceof \Exception) && !($value instanceof GetMediaBuysResponse_BrandReference)) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Object\InvalidInstanceOfException($value ?? null, ...array (
  0 => 'brand',
  1 => 'GetMediaBuysResponse_BrandReference',
)));
}

                

                return $value;
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
                    

                    return $this->operator;
                }
            

            
                /**
                 * Set the value of operator.
                 *
                 * @param string $operator Domain of the entity operating this account. When the brand operates directly, this is the brand's domain.
                 *
                 * @throws ErrorRegistryException
                 *
                 * @return static
                 */
                public function setOperator(
                    string $operator
                ): static {
                    if ($this->operator === $operator) {
                        return $this;
                    }

                    $value = $modelData['operator'] = $operator;

                    
                        $this->_errorRegistry = new ErrorRegistryException();
                    

                    

                    $value = $this->validateOperator($value, $modelData);

                    
                        if ($this->_errorRegistry->getErrors()) {
                            throw $this->_errorRegistry;
                        }
                    

                    $this->operator = $value;
                    $this->_rawModelDataInput['operator'] = $operator;

                    

                    return $this;
                }
            

            /**
             * Extract the value, perform validations and set the property operator
             *
             * @param array $modelData
             *
             * @throws ErrorRegistryException
             */
            protected function processOperator(array $modelData): void
            {
                
                    if (!array_key_exists('operator', $modelData) && $this->operator === null) {
                        return;
                    }
                

                $value = array_key_exists('operator', $modelData) ? $modelData['operator'] : $this->operator;

                

                $this->operator = $this->validateOperator($value, $modelData);
            }

            /**
             * Execute all validators for the property operator
             */
            protected function validateOperator($value, array $modelData)
            {
                
                    

if ((!is_string($value) && !$value instanceof UnitEnum) ) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Generic\InvalidTypeException($value ?? null, ...array (
  0 => 'operator',
  1 => 'string',
)));
}

                
                    

if (is_string($value) && !preg_match(base64_decode('L15bYS16MC05XShbYS16MC05LV0qW2EtejAtOV0pPyhcLlthLXowLTldKFthLXowLTktXSpbYS16MC05XSk/KSokLw=='), $value)) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\String\PatternException($value ?? null, ...array (
  0 => 'operator',
  1 => '^[a-z0-9]([a-z0-9-]*[a-z0-9])?(\\.[a-z0-9]([a-z0-9-]*[a-z0-9])?)*$',
)));
}

                

                return $value;
            }
        
    
        
            
                /**
                 * Get the value of billing.
                 *
                 * Who is invoiced on this account. See billing_entity for the invoiced party's business details.
                 *
                 * @return BillingParty|null
                 */
                public function getBilling(): ?BillingParty
                {
                    

                    return $this->billing;
                }
            

            
                /**
                 * Set the value of billing.
                 *
                 * @param string|BillingParty|null $billing Who is invoiced on this account. See billing_entity for the invoiced party's business details.
                 *
                 * @throws ErrorRegistryException
                 *
                 * @return static
                 */
                public function setBilling(
                    string | BillingParty | null $billing
                ): static {
                    if ($this->billing === $billing) {
                        return $this;
                    }

                    $value = $modelData['billing'] = $billing;

                    
                        $this->_errorRegistry = new ErrorRegistryException();
                    

                    

                    $value = $this->validateBilling($value, $modelData);

                    
                        if ($this->_errorRegistry->getErrors()) {
                            throw $this->_errorRegistry;
                        }
                    

                    $this->billing = $value;
                    $this->_rawModelDataInput['billing'] = $billing;

                    

                    return $this;
                }
            

            /**
             * Extract the value, perform validations and set the property billing
             *
             * @param array $modelData
             *
             * @throws ErrorRegistryException
             */
            protected function processBilling(array $modelData): void
            {
                
                    if (!array_key_exists('billing', $modelData) && $this->billing === null) {
                        return;
                    }
                

                $value = array_key_exists('billing', $modelData) ? $modelData['billing'] : $this->billing;

                

                $this->billing = $this->validateBilling($value, $modelData);
            }

            /**
             * Execute all validators for the property billing
             */
            protected function validateBilling($value, array $modelData)
            {
                
                    

if ($value instanceof UnitEnum && !($value instanceof BillingParty)) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Generic\InvalidTypeException($value ?? null, ...array (
  0 => 'billing',
  1 => 'BillingParty',
)));
}

                
                    

if ((!is_string($value) && !$value instanceof UnitEnum) ) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Generic\InvalidTypeException($value ?? null, ...array (
  0 => 'billing',
  1 => 'string',
)));
}

                
                    

if (!($value instanceof UnitEnum) && !in_array($value, array (
   'operator',
   'agent',
   'advertiser',
), true)) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Generic\EnumException($value ?? null, ...array (
  0 => 'billing',
  1 => 
  array (
    0 => 'operator',
    1 => 'agent',
    2 => 'advertiser',
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
  'fqcn' => 'AdCP\\MediaBuy\\Enums\\BillingParty',
));
        } catch (\Throwable $filterException) {
            
                $transformationFailed = true;
            

            $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Filter\InvalidFilterValueException($value ?? null, ...array (
  0 => 'billing',
  1 => 'php_model_generator_enum',
  2 => $filterException,
)));
        }

        return false;
    })($value)
)) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Filter\IncompatibleFilterException($value ?? null, ...array (
  0 => 'billing',
  1 => 'php_model_generator_enum',
)));
}

                

                return $value;
            }
        
    
        
            
                /**
                 * Get the value of billing_entity.
                 *
                 * Business entity details for the party responsible for payment. Contains the legal name, tax IDs, address, and bank details needed for formal B2B invoicing. Corresponds to whoever billing points to (operator, agent, or advertiser). When this account appears in a response, bank details MUST be omitted (write-only).
                 * @example {"description":"German agency with full B2B details","data":{"legal_name":"Pinnacle Media GmbH","vat_id":"DE123456789","registration_number":"HRB 12345","address":{"street":"Friedrichstrasse 100","city":"Berlin","postal_code":"10117","country":"DE"},"contacts":[{"role":"billing","name":"Sam Adeyemi","email":"billing@pinnacle-media.com","phone":"+49 30 12345678"}],"bank":{"account_holder":"Pinnacle Media GmbH","iban":"DE89370400440532013000","bic":"COBADEFFXXX"}}}
                 * @example {"description":"US advertiser with EIN and domestic bank details","data":{"legal_name":"Acme Corporation","tax_id":"12-3456789","address":{"street":"123 Main St","city":"New York","postal_code":"10001","region":"NY","country":"US"},"contacts":[{"role":"billing","name":"AP Department","email":"ap@acme-corp.com"}],"bank":{"account_holder":"Acme Corporation","routing_number":"021000021","account_number":"123456789"}}}
                 *
                 * @return GetMediaBuysResponse_BusinessEntity|null
                 */
                public function getBillingEntity(): ?GetMediaBuysResponse_BusinessEntity
                {
                    

                    return $this->billingEntity;
                }
            

            
                /**
                 * Set the value of billing_entity.
                 *
                 * @param GetMediaBuysResponse_BusinessEntity $billingEntity Business entity details for the party responsible for payment. Contains the legal name, tax IDs, address, and bank details needed for formal B2B invoicing. Corresponds to whoever billing points to (operator, agent, or advertiser). When this account appears in a response, bank details MUST be omitted (write-only).
                 *
                 * @throws ErrorRegistryException
                 *
                 * @return static
                 */
                public function setBillingEntity(
                    GetMediaBuysResponse_BusinessEntity $billingEntity
                ): static {
                    if ($this->billingEntity === $billingEntity) {
                        return $this;
                    }

                    $value = $modelData['billing_entity'] = $billingEntity;

                    
                        $this->_errorRegistry = new ErrorRegistryException();
                    

                    

                    $value = $this->validateBillingEntity($value, $modelData);

                    
                        if ($this->_errorRegistry->getErrors()) {
                            throw $this->_errorRegistry;
                        }
                    

                    $this->billingEntity = $value;
                    $this->_rawModelDataInput['billing_entity'] = $billingEntity;

                    

                    return $this;
                }
            

            /**
             * Extract the value, perform validations and set the property billingEntity
             *
             * @param array $modelData
             *
             * @throws ErrorRegistryException
             */
            protected function processBillingEntity(array $modelData): void
            {
                
                    if (!array_key_exists('billing_entity', $modelData) && $this->billingEntity === null) {
                        return;
                    }
                

                $value = array_key_exists('billing_entity', $modelData) ? $modelData['billing_entity'] : $this->billingEntity;

                $value = (function ($value) {
    try {
        return is_array($value) ? new GetMediaBuysResponse_BusinessEntity($value) : $value;
    } catch (\Exception $instantiationException) {
        
            $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Object\NestedObjectException($value ?? null, ...array (
  0 => 'billing_entity',
  1 => $instantiationException,
)));
        

        
            return $instantiationException;
        
    }
})($value)
;

                $this->billingEntity = $this->validateBillingEntity($value, $modelData);
            }

            /**
             * Execute all validators for the property billingEntity
             */
            protected function validateBillingEntity($value, array $modelData)
            {
                
                    

if ((!is_object($value) && !$value instanceof UnitEnum) ) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Generic\InvalidTypeException($value ?? null, ...array (
  0 => 'billing_entity',
  1 => 'object',
)));
}

                
                    

if (is_object($value) && !($value instanceof \Exception) && !($value instanceof GetMediaBuysResponse_BusinessEntity)) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Object\InvalidInstanceOfException($value ?? null, ...array (
  0 => 'billing_entity',
  1 => 'GetMediaBuysResponse_BusinessEntity',
)));
}

                

                return $value;
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
                    

                    return $this->rateCard;
                }
            

            
                /**
                 * Set the value of rate_card.
                 *
                 * @param string $rateCard Identifier for the rate card applied to this account
                 *
                 * @throws ErrorRegistryException
                 *
                 * @return static
                 */
                public function setRateCard(
                    string $rateCard
                ): static {
                    if ($this->rateCard === $rateCard) {
                        return $this;
                    }

                    $value = $modelData['rate_card'] = $rateCard;

                    
                        $this->_errorRegistry = new ErrorRegistryException();
                    

                    

                    $value = $this->validateRateCard($value, $modelData);

                    
                        if ($this->_errorRegistry->getErrors()) {
                            throw $this->_errorRegistry;
                        }
                    

                    $this->rateCard = $value;
                    $this->_rawModelDataInput['rate_card'] = $rateCard;

                    

                    return $this;
                }
            

            /**
             * Extract the value, perform validations and set the property rateCard
             *
             * @param array $modelData
             *
             * @throws ErrorRegistryException
             */
            protected function processRateCard(array $modelData): void
            {
                
                    if (!array_key_exists('rate_card', $modelData) && $this->rateCard === null) {
                        return;
                    }
                

                $value = array_key_exists('rate_card', $modelData) ? $modelData['rate_card'] : $this->rateCard;

                

                $this->rateCard = $this->validateRateCard($value, $modelData);
            }

            /**
             * Execute all validators for the property rateCard
             */
            protected function validateRateCard($value, array $modelData)
            {
                
                    

if ((!is_string($value) && !$value instanceof UnitEnum) ) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Generic\InvalidTypeException($value ?? null, ...array (
  0 => 'rate_card',
  1 => 'string',
)));
}

                

                return $value;
            }
        
    
        
            
                /**
                 * Get the value of payment_terms.
                 *
                 * Payment terms agreed for this account. Binding for all invoices when the account is active.
                 *
                 * @return PaymentTerms|null
                 */
                public function getPaymentTerms(): ?PaymentTerms
                {
                    

                    return $this->paymentTerms;
                }
            

            
                /**
                 * Set the value of payment_terms.
                 *
                 * @param string|PaymentTerms|null $paymentTerms Payment terms agreed for this account. Binding for all invoices when the account is active.
                 *
                 * @throws ErrorRegistryException
                 *
                 * @return static
                 */
                public function setPaymentTerms(
                    string | PaymentTerms | null $paymentTerms
                ): static {
                    if ($this->paymentTerms === $paymentTerms) {
                        return $this;
                    }

                    $value = $modelData['payment_terms'] = $paymentTerms;

                    
                        $this->_errorRegistry = new ErrorRegistryException();
                    

                    

                    $value = $this->validatePaymentTerms($value, $modelData);

                    
                        if ($this->_errorRegistry->getErrors()) {
                            throw $this->_errorRegistry;
                        }
                    

                    $this->paymentTerms = $value;
                    $this->_rawModelDataInput['payment_terms'] = $paymentTerms;

                    

                    return $this;
                }
            

            /**
             * Extract the value, perform validations and set the property paymentTerms
             *
             * @param array $modelData
             *
             * @throws ErrorRegistryException
             */
            protected function processPaymentTerms(array $modelData): void
            {
                
                    if (!array_key_exists('payment_terms', $modelData) && $this->paymentTerms === null) {
                        return;
                    }
                

                $value = array_key_exists('payment_terms', $modelData) ? $modelData['payment_terms'] : $this->paymentTerms;

                

                $this->paymentTerms = $this->validatePaymentTerms($value, $modelData);
            }

            /**
             * Execute all validators for the property paymentTerms
             */
            protected function validatePaymentTerms($value, array $modelData)
            {
                
                    

if ($value instanceof UnitEnum && !($value instanceof PaymentTerms)) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Generic\InvalidTypeException($value ?? null, ...array (
  0 => 'payment_terms',
  1 => 'PaymentTerms',
)));
}

                
                    

if ((!is_string($value) && !$value instanceof UnitEnum) ) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Generic\InvalidTypeException($value ?? null, ...array (
  0 => 'payment_terms',
  1 => 'string',
)));
}

                
                    

if (!($value instanceof UnitEnum) && !in_array($value, array (
   'net_15',
   'net_30',
   'net_45',
   'net_60',
   'net_90',
   'prepay',
), true)) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Generic\EnumException($value ?? null, ...array (
  0 => 'payment_terms',
  1 => 
  array (
    0 => 'net_15',
    1 => 'net_30',
    2 => 'net_45',
    3 => 'net_60',
    4 => 'net_90',
    5 => 'prepay',
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
  'fqcn' => 'AdCP\\MediaBuy\\Enums\\PaymentTerms',
));
        } catch (\Throwable $filterException) {
            
                $transformationFailed = true;
            

            $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Filter\InvalidFilterValueException($value ?? null, ...array (
  0 => 'payment_terms',
  1 => 'php_model_generator_enum',
  2 => $filterException,
)));
        }

        return false;
    })($value)
)) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Filter\IncompatibleFilterException($value ?? null, ...array (
  0 => 'payment_terms',
  1 => 'php_model_generator_enum',
)));
}

                

                return $value;
            }
        
    
        
            
                /**
                 * Get the value of credit_limit.
                 *
                 * Maximum outstanding balance allowed
                 *
                 * @return GetMediaBuysResponse_Credit_Limitc3a7f9e1ace296bebae63362ef9328ca|null
                 */
                public function getCreditLimit(): ?GetMediaBuysResponse_Credit_Limitc3a7f9e1ace296bebae63362ef9328ca
                {
                    

                    return $this->creditLimit;
                }
            

            
                /**
                 * Set the value of credit_limit.
                 *
                 * @param GetMediaBuysResponse_Credit_Limitc3a7f9e1ace296bebae63362ef9328ca $creditLimit Maximum outstanding balance allowed
                 *
                 * @throws ErrorRegistryException
                 *
                 * @return static
                 */
                public function setCreditLimit(
                    GetMediaBuysResponse_Credit_Limitc3a7f9e1ace296bebae63362ef9328ca $creditLimit
                ): static {
                    if ($this->creditLimit === $creditLimit) {
                        return $this;
                    }

                    $value = $modelData['credit_limit'] = $creditLimit;

                    
                        $this->_errorRegistry = new ErrorRegistryException();
                    

                    

                    $value = $this->validateCreditLimit($value, $modelData);

                    
                        if ($this->_errorRegistry->getErrors()) {
                            throw $this->_errorRegistry;
                        }
                    

                    $this->creditLimit = $value;
                    $this->_rawModelDataInput['credit_limit'] = $creditLimit;

                    

                    return $this;
                }
            

            /**
             * Extract the value, perform validations and set the property creditLimit
             *
             * @param array $modelData
             *
             * @throws ErrorRegistryException
             */
            protected function processCreditLimit(array $modelData): void
            {
                
                    if (!array_key_exists('credit_limit', $modelData) && $this->creditLimit === null) {
                        return;
                    }
                

                $value = array_key_exists('credit_limit', $modelData) ? $modelData['credit_limit'] : $this->creditLimit;

                $value = (function ($value) {
    try {
        return is_array($value) ? new GetMediaBuysResponse_Credit_Limitc3a7f9e1ace296bebae63362ef9328ca($value) : $value;
    } catch (\Exception $instantiationException) {
        
            $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Object\NestedObjectException($value ?? null, ...array (
  0 => 'credit_limit',
  1 => $instantiationException,
)));
        

        
            return $instantiationException;
        
    }
})($value)
;

                $this->creditLimit = $this->validateCreditLimit($value, $modelData);
            }

            /**
             * Execute all validators for the property creditLimit
             */
            protected function validateCreditLimit($value, array $modelData)
            {
                
                    

if ((!is_object($value) && !$value instanceof UnitEnum) ) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Generic\InvalidTypeException($value ?? null, ...array (
  0 => 'credit_limit',
  1 => 'object',
)));
}

                
                    

if (is_object($value) && !($value instanceof \Exception) && !($value instanceof GetMediaBuysResponse_Credit_Limitc3a7f9e1ace296bebae63362ef9328ca)) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Object\InvalidInstanceOfException($value ?? null, ...array (
  0 => 'credit_limit',
  1 => 'GetMediaBuysResponse_Credit_Limitc3a7f9e1ace296bebae63362ef9328ca',
)));
}

                

                return $value;
            }
        
    
        
            
                /**
                 * Get the value of setup.
                 *
                 * Present when status is 'pending_approval'. Contains next steps for completing account activation.
                 *
                 * @return GetMediaBuysResponse_Setup373eba143d729f5252325a7d3837aa7d|null
                 */
                public function getSetup(): ?GetMediaBuysResponse_Setup373eba143d729f5252325a7d3837aa7d
                {
                    

                    return $this->setup;
                }
            

            
                /**
                 * Set the value of setup.
                 *
                 * @param GetMediaBuysResponse_Setup373eba143d729f5252325a7d3837aa7d $setup Present when status is 'pending_approval'. Contains next steps for completing account activation.
                 *
                 * @throws ErrorRegistryException
                 *
                 * @return static
                 */
                public function setSetup(
                    GetMediaBuysResponse_Setup373eba143d729f5252325a7d3837aa7d $setup
                ): static {
                    if ($this->setup === $setup) {
                        return $this;
                    }

                    $value = $modelData['setup'] = $setup;

                    
                        $this->_errorRegistry = new ErrorRegistryException();
                    

                    

                    $value = $this->validateSetup($value, $modelData);

                    
                        if ($this->_errorRegistry->getErrors()) {
                            throw $this->_errorRegistry;
                        }
                    

                    $this->setup = $value;
                    $this->_rawModelDataInput['setup'] = $setup;

                    

                    return $this;
                }
            

            /**
             * Extract the value, perform validations and set the property setup
             *
             * @param array $modelData
             *
             * @throws ErrorRegistryException
             */
            protected function processSetup(array $modelData): void
            {
                
                    if (!array_key_exists('setup', $modelData) && $this->setup === null) {
                        return;
                    }
                

                $value = array_key_exists('setup', $modelData) ? $modelData['setup'] : $this->setup;

                $value = (function ($value) {
    try {
        return is_array($value) ? new GetMediaBuysResponse_Setup373eba143d729f5252325a7d3837aa7d($value) : $value;
    } catch (\Exception $instantiationException) {
        
            $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Object\NestedObjectException($value ?? null, ...array (
  0 => 'setup',
  1 => $instantiationException,
)));
        

        
            return $instantiationException;
        
    }
})($value)
;

                $this->setup = $this->validateSetup($value, $modelData);
            }

            /**
             * Execute all validators for the property setup
             */
            protected function validateSetup($value, array $modelData)
            {
                
                    

if ((!is_object($value) && !$value instanceof UnitEnum) ) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Generic\InvalidTypeException($value ?? null, ...array (
  0 => 'setup',
  1 => 'object',
)));
}

                
                    

if (is_object($value) && !($value instanceof \Exception) && !($value instanceof GetMediaBuysResponse_Setup373eba143d729f5252325a7d3837aa7d)) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Object\InvalidInstanceOfException($value ?? null, ...array (
  0 => 'setup',
  1 => 'GetMediaBuysResponse_Setup373eba143d729f5252325a7d3837aa7d',
)));
}

                

                return $value;
            }
        
    
        
            
                /**
                 * Get the value of account_scope.
                 *
                 * How the seller scoped a billing account relative to the operator and brand dimensions.
                 *
                 * @return AccountScope|null
                 */
                public function getAccountScope(): ?AccountScope
                {
                    

                    return $this->accountScope;
                }
            

            
                /**
                 * Set the value of account_scope.
                 *
                 * @param string|AccountScope|null $accountScope How the seller scoped a billing account relative to the operator and brand dimensions.
                 *
                 * @throws ErrorRegistryException
                 *
                 * @return static
                 */
                public function setAccountScope(
                    string | AccountScope | null $accountScope
                ): static {
                    if ($this->accountScope === $accountScope) {
                        return $this;
                    }

                    $value = $modelData['account_scope'] = $accountScope;

                    
                        $this->_errorRegistry = new ErrorRegistryException();
                    

                    

                    $value = $this->validateAccountScope($value, $modelData);

                    
                        if ($this->_errorRegistry->getErrors()) {
                            throw $this->_errorRegistry;
                        }
                    

                    $this->accountScope = $value;
                    $this->_rawModelDataInput['account_scope'] = $accountScope;

                    

                    return $this;
                }
            

            /**
             * Extract the value, perform validations and set the property accountScope
             *
             * @param array $modelData
             *
             * @throws ErrorRegistryException
             */
            protected function processAccountScope(array $modelData): void
            {
                
                    if (!array_key_exists('account_scope', $modelData) && $this->accountScope === null) {
                        return;
                    }
                

                $value = array_key_exists('account_scope', $modelData) ? $modelData['account_scope'] : $this->accountScope;

                

                $this->accountScope = $this->validateAccountScope($value, $modelData);
            }

            /**
             * Execute all validators for the property accountScope
             */
            protected function validateAccountScope($value, array $modelData)
            {
                
                    

if ($value instanceof UnitEnum && !($value instanceof AccountScope)) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Generic\InvalidTypeException($value ?? null, ...array (
  0 => 'account_scope',
  1 => 'AccountScope',
)));
}

                
                    

if ((!is_string($value) && !$value instanceof UnitEnum) ) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Generic\InvalidTypeException($value ?? null, ...array (
  0 => 'account_scope',
  1 => 'string',
)));
}

                
                    

if (!($value instanceof UnitEnum) && !in_array($value, array (
   'operator',
   'brand',
   'operator_brand',
   'agent',
), true)) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Generic\EnumException($value ?? null, ...array (
  0 => 'account_scope',
  1 => 
  array (
    0 => 'operator',
    1 => 'brand',
    2 => 'operator_brand',
    3 => 'agent',
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
  'fqcn' => 'AdCP\\MediaBuy\\Enums\\AccountScope',
));
        } catch (\Throwable $filterException) {
            
                $transformationFailed = true;
            

            $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Filter\InvalidFilterValueException($value ?? null, ...array (
  0 => 'account_scope',
  1 => 'php_model_generator_enum',
  2 => $filterException,
)));
        }

        return false;
    })($value)
)) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Filter\IncompatibleFilterException($value ?? null, ...array (
  0 => 'account_scope',
  1 => 'php_model_generator_enum',
)));
}

                

                return $value;
            }
        
    
        
            
                /**
                 * Get the value of governance_agents.
                 *
                 * Governance agent endpoint registered on this account. Exactly one entry per sync_governance's one-agent-per-account invariant. The array shape is preserved for wire compatibility with 3.0; `maxItems: 1` is load-bearing and mirrors the singular `governance_context` on the protocol envelope. Authentication credentials are write-only and not included in responses — use sync_governance to set or update credentials.
                 *
                 * @return GetMediaBuysResponse_ItemOfArrayGovernance_Agents18f58187ee1abde25033f0892dfed1fa[]|null
                 */
                public function getGovernanceAgents(): ?array
                {
                    

                    return $this->governanceAgents;
                }
            

            
                /**
                 * Set the value of governance_agents.
                 *
                 * @param GetMediaBuysResponse_ItemOfArrayGovernance_Agents18f58187ee1abde25033f0892dfed1fa[] $governanceAgents Governance agent endpoint registered on this account. Exactly one entry per sync_governance's one-agent-per-account invariant. The array shape is preserved for wire compatibility with 3.0; `maxItems: 1` is load-bearing and mirrors the singular `governance_context` on the protocol envelope. Authentication credentials are write-only and not included in responses — use sync_governance to set or update credentials.
                 *
                 * @throws ErrorRegistryException
                 *
                 * @return static
                 */
                public function setGovernanceAgents(
                    array $governanceAgents
                ): static {
                    if ($this->governanceAgents === $governanceAgents) {
                        return $this;
                    }

                    $value = $modelData['governance_agents'] = $governanceAgents;

                    
                        $this->_errorRegistry = new ErrorRegistryException();
                    

                    

                    $value = $this->validateGovernanceAgents($value, $modelData);

                    
                        if ($this->_errorRegistry->getErrors()) {
                            throw $this->_errorRegistry;
                        }
                    

                    $this->governanceAgents = $value;
                    $this->_rawModelDataInput['governance_agents'] = $governanceAgents;

                    

                    return $this;
                }
            

            /**
             * Extract the value, perform validations and set the property governanceAgents
             *
             * @param array $modelData
             *
             * @throws ErrorRegistryException
             */
            protected function processGovernanceAgents(array $modelData): void
            {
                
                    if (!array_key_exists('governance_agents', $modelData) && $this->governanceAgents === null) {
                        return;
                    }
                

                $value = array_key_exists('governance_agents', $modelData) ? $modelData['governance_agents'] : $this->governanceAgents;

                

                $this->governanceAgents = $this->validateGovernanceAgents($value, $modelData);
            }

            /**
             * Execute all validators for the property governanceAgents
             */
            protected function validateGovernanceAgents($value, array $modelData)
            {
                
                    

if ((!is_array($value) && !$value instanceof UnitEnum) ) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Generic\InvalidTypeException($value ?? null, ...array (
  0 => 'governance_agents',
  1 => 'array',
)));
}

                
                    $this->validateGovernanceAgents_ArrayItem_0bd862c00e32f8724d8296ac651c688e($value, $modelData);
                
                    

if (is_array($value) && count($value) < 1) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Arrays\MinItemsException($value ?? null, ...array (
  0 => 'governance_agents',
  1 => 1,
)));
}

                
                    

if (is_array($value) && count($value) > 1) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Arrays\MaxItemsException($value ?? null, ...array (
  0 => 'governance_agents',
  1 => 1,
)));
}

                

                return $value;
            }
        
    
        
            
                /**
                 * Get the value of reporting_bucket.
                 *
                 * Cloud storage bucket where the seller delivers offline reporting files for this account. Seller provisions a dedicated bucket or a per-account prefix within a shared bucket, and grants the buyer read access out-of-band. Access MUST be scoped at the IAM layer so each account can only read its own prefix — bucket-wide grants are non-compliant even with per-account prefixes. Seller MUST revoke access when the account's status transitions to inactive, suspended, or closed. See security considerations for offline delivery in docs/media-buy/media-buys/optimization-reporting. Only present when the seller supports offline delivery (reporting_delivery_methods includes 'offline' in capabilities).
                 *
                 * @return GetMediaBuysResponse_Reporting_Bucket637c6849430a3f89084a3d42202a1d68|null
                 */
                public function getReportingBucket(): ?GetMediaBuysResponse_Reporting_Bucket637c6849430a3f89084a3d42202a1d68
                {
                    

                    return $this->reportingBucket;
                }
            

            
                /**
                 * Set the value of reporting_bucket.
                 *
                 * @param GetMediaBuysResponse_Reporting_Bucket637c6849430a3f89084a3d42202a1d68 $reportingBucket Cloud storage bucket where the seller delivers offline reporting files for this account. Seller provisions a dedicated bucket or a per-account prefix within a shared bucket, and grants the buyer read access out-of-band. Access MUST be scoped at the IAM layer so each account can only read its own prefix — bucket-wide grants are non-compliant even with per-account prefixes. Seller MUST revoke access when the account's status transitions to inactive, suspended, or closed. See security considerations for offline delivery in docs/media-buy/media-buys/optimization-reporting. Only present when the seller supports offline delivery (reporting_delivery_methods includes 'offline' in capabilities).
                 *
                 * @throws ErrorRegistryException
                 *
                 * @return static
                 */
                public function setReportingBucket(
                    GetMediaBuysResponse_Reporting_Bucket637c6849430a3f89084a3d42202a1d68 $reportingBucket
                ): static {
                    if ($this->reportingBucket === $reportingBucket) {
                        return $this;
                    }

                    $value = $modelData['reporting_bucket'] = $reportingBucket;

                    
                        $this->_errorRegistry = new ErrorRegistryException();
                    

                    

                    $value = $this->validateReportingBucket($value, $modelData);

                    
                        if ($this->_errorRegistry->getErrors()) {
                            throw $this->_errorRegistry;
                        }
                    

                    $this->reportingBucket = $value;
                    $this->_rawModelDataInput['reporting_bucket'] = $reportingBucket;

                    

                    return $this;
                }
            

            /**
             * Extract the value, perform validations and set the property reportingBucket
             *
             * @param array $modelData
             *
             * @throws ErrorRegistryException
             */
            protected function processReportingBucket(array $modelData): void
            {
                
                    if (!array_key_exists('reporting_bucket', $modelData) && $this->reportingBucket === null) {
                        return;
                    }
                

                $value = array_key_exists('reporting_bucket', $modelData) ? $modelData['reporting_bucket'] : $this->reportingBucket;

                $value = (function ($value) {
    try {
        return is_array($value) ? new GetMediaBuysResponse_Reporting_Bucket637c6849430a3f89084a3d42202a1d68($value) : $value;
    } catch (\Exception $instantiationException) {
        
            $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Object\NestedObjectException($value ?? null, ...array (
  0 => 'reporting_bucket',
  1 => $instantiationException,
)));
        

        
            return $instantiationException;
        
    }
})($value)
;

                $this->reportingBucket = $this->validateReportingBucket($value, $modelData);
            }

            /**
             * Execute all validators for the property reportingBucket
             */
            protected function validateReportingBucket($value, array $modelData)
            {
                
                    

if ((!is_object($value) && !$value instanceof UnitEnum) ) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Generic\InvalidTypeException($value ?? null, ...array (
  0 => 'reporting_bucket',
  1 => 'object',
)));
}

                
                    

if (is_object($value) && !($value instanceof \Exception) && !($value instanceof GetMediaBuysResponse_Reporting_Bucket637c6849430a3f89084a3d42202a1d68)) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Object\InvalidInstanceOfException($value ?? null, ...array (
  0 => 'reporting_bucket',
  1 => 'GetMediaBuysResponse_Reporting_Bucket637c6849430a3f89084a3d42202a1d68',
)));
}

                

                return $value;
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
                    

                    return $this->sandbox;
                }
            

            
                /**
                 * Set the value of sandbox.
                 *
                 * @param bool $sandbox When true, this is a sandbox account — no real platform calls, no real spend. For explicit accounts (require_operator_auth: true), sandbox accounts are pre-existing test accounts on the platform discovered via list_accounts. For implicit accounts, sandbox is part of the natural key: the same brand/operator pair can have both a production and sandbox account.
                 *
                 * @throws ErrorRegistryException
                 *
                 * @return static
                 */
                public function setSandbox(
                    bool $sandbox
                ): static {
                    if ($this->sandbox === $sandbox) {
                        return $this;
                    }

                    $value = $modelData['sandbox'] = $sandbox;

                    
                        $this->_errorRegistry = new ErrorRegistryException();
                    

                    

                    $value = $this->validateSandbox($value, $modelData);

                    
                        if ($this->_errorRegistry->getErrors()) {
                            throw $this->_errorRegistry;
                        }
                    

                    $this->sandbox = $value;
                    $this->_rawModelDataInput['sandbox'] = $sandbox;

                    

                    return $this;
                }
            

            /**
             * Extract the value, perform validations and set the property sandbox
             *
             * @param array $modelData
             *
             * @throws ErrorRegistryException
             */
            protected function processSandbox(array $modelData): void
            {
                
                    if (!array_key_exists('sandbox', $modelData) && $this->sandbox === null) {
                        return;
                    }
                

                $value = array_key_exists('sandbox', $modelData) ? $modelData['sandbox'] : $this->sandbox;

                

                $this->sandbox = $this->validateSandbox($value, $modelData);
            }

            /**
             * Execute all validators for the property sandbox
             */
            protected function validateSandbox($value, array $modelData)
            {
                
                    

if ((!is_bool($value) && !$value instanceof UnitEnum) ) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Generic\InvalidTypeException($value ?? null, ...array (
  0 => 'sandbox',
  1 => 'bool',
)));
}

                

                return $value;
            }
        
    
        
            
                /**
                 * Get the value of notification_configs.
                 *
                 * Account-level webhook subscriptions for notifications whose lifecycle outlives any single media buy (e.g., `creative.status_changed`, `creative.purged`). Distinct from `push_notification_config` on individual operations, which anchors at a per-resource scope. Buyers register and update entries via `sync_accounts`; sellers echo the applied state here on `list_accounts` reads so buyers can verify what's active. `authentication.credentials` is write-only — sellers MUST NOT echo legacy auth credentials in this response. When two or more entries register the same `event_types`, each receives an independent fire — see #3009 multi-subscriber composition.
                 *
                 * @return GetMediaBuysResponse_NotificationConfig[]|null
                 */
                public function getNotificationConfigs(): ?array
                {
                    

                    return $this->notificationConfigs;
                }
            

            
                /**
                 * Set the value of notification_configs.
                 *
                 * @param GetMediaBuysResponse_NotificationConfig[] $notificationConfigs Account-level webhook subscriptions for notifications whose lifecycle outlives any single media buy (e.g., `creative.status_changed`, `creative.purged`). Distinct from `push_notification_config` on individual operations, which anchors at a per-resource scope. Buyers register and update entries via `sync_accounts`; sellers echo the applied state here on `list_accounts` reads so buyers can verify what's active. `authentication.credentials` is write-only — sellers MUST NOT echo legacy auth credentials in this response. When two or more entries register the same `event_types`, each receives an independent fire — see #3009 multi-subscriber composition.
                 *
                 * @throws ErrorRegistryException
                 *
                 * @return static
                 */
                public function setNotificationConfigs(
                    array $notificationConfigs
                ): static {
                    if ($this->notificationConfigs === $notificationConfigs) {
                        return $this;
                    }

                    $value = $modelData['notification_configs'] = $notificationConfigs;

                    
                        $this->_errorRegistry = new ErrorRegistryException();
                    

                    

                    $value = $this->validateNotificationConfigs($value, $modelData);

                    
                        if ($this->_errorRegistry->getErrors()) {
                            throw $this->_errorRegistry;
                        }
                    

                    $this->notificationConfigs = $value;
                    $this->_rawModelDataInput['notification_configs'] = $notificationConfigs;

                    

                    return $this;
                }
            

            /**
             * Extract the value, perform validations and set the property notificationConfigs
             *
             * @param array $modelData
             *
             * @throws ErrorRegistryException
             */
            protected function processNotificationConfigs(array $modelData): void
            {
                
                    if (!array_key_exists('notification_configs', $modelData) && $this->notificationConfigs === null) {
                        return;
                    }
                

                $value = array_key_exists('notification_configs', $modelData) ? $modelData['notification_configs'] : $this->notificationConfigs;

                

                $this->notificationConfigs = $this->validateNotificationConfigs($value, $modelData);
            }

            /**
             * Execute all validators for the property notificationConfigs
             */
            protected function validateNotificationConfigs($value, array $modelData)
            {
                
                    

if ((!is_array($value) && !$value instanceof UnitEnum) ) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Generic\InvalidTypeException($value ?? null, ...array (
  0 => 'notification_configs',
  1 => 'array',
)));
}

                
                    $this->validateNotificationConfigs_ArrayItem_ed811b5d1e9e183522e89cba0c025439($value, $modelData);
                
                    

if (is_array($value) && count($value) > 16) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Arrays\MaxItemsException($value ?? null, ...array (
  0 => 'notification_configs',
  1 => 16,
)));
}

                

                return $value;
            }
        
    
        
            
                /**
                 * Get the value of ext.
                 *
                 * Extension object for platform-specific, vendor-namespaced parameters. Extensions are always optional and must be namespaced under a vendor/platform key (e.g., ext.gam, ext.roku). Used for custom capabilities, partner-specific configuration, and features being proposed for standardization.
                 *
                 * @return GetMediaBuysResponse_ExtensionObject|null
                 */
                public function getExt(): ?GetMediaBuysResponse_ExtensionObject
                {
                    

                    return $this->ext;
                }
            

            
                /**
                 * Set the value of ext.
                 *
                 * @param GetMediaBuysResponse_ExtensionObject $ext Extension object for platform-specific, vendor-namespaced parameters. Extensions are always optional and must be namespaced under a vendor/platform key (e.g., ext.gam, ext.roku). Used for custom capabilities, partner-specific configuration, and features being proposed for standardization.
                 *
                 * @throws ErrorRegistryException
                 *
                 * @return static
                 */
                public function setExt(
                    GetMediaBuysResponse_ExtensionObject $ext
                ): static {
                    if ($this->ext === $ext) {
                        return $this;
                    }

                    $value = $modelData['ext'] = $ext;

                    
                        $this->_errorRegistry = new ErrorRegistryException();
                    

                    

                    $value = $this->validateExt($value, $modelData);

                    
                        if ($this->_errorRegistry->getErrors()) {
                            throw $this->_errorRegistry;
                        }
                    

                    $this->ext = $value;
                    $this->_rawModelDataInput['ext'] = $ext;

                    

                    return $this;
                }
            

            /**
             * Extract the value, perform validations and set the property ext
             *
             * @param array $modelData
             *
             * @throws ErrorRegistryException
             */
            protected function processExt(array $modelData): void
            {
                
                    if (!array_key_exists('ext', $modelData) && $this->ext === null) {
                        return;
                    }
                

                $value = array_key_exists('ext', $modelData) ? $modelData['ext'] : $this->ext;

                $value = (function ($value) {
    try {
        return is_array($value) ? new GetMediaBuysResponse_ExtensionObject($value) : $value;
    } catch (\Exception $instantiationException) {
        
            $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Object\NestedObjectException($value ?? null, ...array (
  0 => 'ext',
  1 => $instantiationException,
)));
        

        
            return $instantiationException;
        
    }
})($value)
;

                $this->ext = $this->validateExt($value, $modelData);
            }

            /**
             * Execute all validators for the property ext
             */
            protected function validateExt($value, array $modelData)
            {
                
                    

if ((!is_object($value) && !$value instanceof UnitEnum) ) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Generic\InvalidTypeException($value ?? null, ...array (
  0 => 'ext',
  1 => 'object',
)));
}

                
                    

if (is_object($value) && !($value instanceof \Exception) && !($value instanceof GetMediaBuysResponse_ExtensionObject)) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Object\InvalidInstanceOfException($value ?? null, ...array (
  0 => 'ext',
  1 => 'GetMediaBuysResponse_ExtensionObject',
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
    

    
        
            if (array_key_exists('account_id', $modelData) &&
                $modelData['account_id'] !== $this->accountId
            ) {
                

                $rollbackValues['accountId'] = $this->accountId;
                $this->processAccountId($modelData);
            }
        
    
        
            if (array_key_exists('name', $modelData) &&
                $modelData['name'] !== $this->name
            ) {
                

                $rollbackValues['name'] = $this->name;
                $this->processName($modelData);
            }
        
    
        
            if (array_key_exists('advertiser', $modelData) &&
                $modelData['advertiser'] !== $this->advertiser
            ) {
                

                $rollbackValues['advertiser'] = $this->advertiser;
                $this->processAdvertiser($modelData);
            }
        
    
        
            if (array_key_exists('billing_proxy', $modelData) &&
                $modelData['billing_proxy'] !== $this->billingProxy
            ) {
                

                $rollbackValues['billingProxy'] = $this->billingProxy;
                $this->processBillingProxy($modelData);
            }
        
    
        
            if (array_key_exists('status', $modelData) &&
                $modelData['status'] !== $this->status
            ) {
                

                $rollbackValues['status'] = $this->status;
                $this->processStatus($modelData);
            }
        
    
        
            if (array_key_exists('brand', $modelData) &&
                $modelData['brand'] !== $this->brand
            ) {
                

                $rollbackValues['brand'] = $this->brand;
                $this->processBrand($modelData);
            }
        
    
        
            if (array_key_exists('operator', $modelData) &&
                $modelData['operator'] !== $this->operator
            ) {
                

                $rollbackValues['operator'] = $this->operator;
                $this->processOperator($modelData);
            }
        
    
        
            if (array_key_exists('billing', $modelData) &&
                $modelData['billing'] !== $this->billing
            ) {
                

                $rollbackValues['billing'] = $this->billing;
                $this->processBilling($modelData);
            }
        
    
        
            if (array_key_exists('billing_entity', $modelData) &&
                $modelData['billing_entity'] !== $this->billingEntity
            ) {
                

                $rollbackValues['billingEntity'] = $this->billingEntity;
                $this->processBillingEntity($modelData);
            }
        
    
        
            if (array_key_exists('rate_card', $modelData) &&
                $modelData['rate_card'] !== $this->rateCard
            ) {
                

                $rollbackValues['rateCard'] = $this->rateCard;
                $this->processRateCard($modelData);
            }
        
    
        
            if (array_key_exists('payment_terms', $modelData) &&
                $modelData['payment_terms'] !== $this->paymentTerms
            ) {
                

                $rollbackValues['paymentTerms'] = $this->paymentTerms;
                $this->processPaymentTerms($modelData);
            }
        
    
        
            if (array_key_exists('credit_limit', $modelData) &&
                $modelData['credit_limit'] !== $this->creditLimit
            ) {
                

                $rollbackValues['creditLimit'] = $this->creditLimit;
                $this->processCreditLimit($modelData);
            }
        
    
        
            if (array_key_exists('setup', $modelData) &&
                $modelData['setup'] !== $this->setup
            ) {
                

                $rollbackValues['setup'] = $this->setup;
                $this->processSetup($modelData);
            }
        
    
        
            if (array_key_exists('account_scope', $modelData) &&
                $modelData['account_scope'] !== $this->accountScope
            ) {
                

                $rollbackValues['accountScope'] = $this->accountScope;
                $this->processAccountScope($modelData);
            }
        
    
        
            if (array_key_exists('governance_agents', $modelData) &&
                $modelData['governance_agents'] !== $this->governanceAgents
            ) {
                

                $rollbackValues['governanceAgents'] = $this->governanceAgents;
                $this->processGovernanceAgents($modelData);
            }
        
    
        
            if (array_key_exists('reporting_bucket', $modelData) &&
                $modelData['reporting_bucket'] !== $this->reportingBucket
            ) {
                

                $rollbackValues['reportingBucket'] = $this->reportingBucket;
                $this->processReportingBucket($modelData);
            }
        
    
        
            if (array_key_exists('sandbox', $modelData) &&
                $modelData['sandbox'] !== $this->sandbox
            ) {
                

                $rollbackValues['sandbox'] = $this->sandbox;
                $this->processSandbox($modelData);
            }
        
    
        
            if (array_key_exists('notification_configs', $modelData) &&
                $modelData['notification_configs'] !== $this->notificationConfigs
            ) {
                

                $rollbackValues['notificationConfigs'] = $this->notificationConfigs;
                $this->processNotificationConfigs($modelData);
            }
        
    
        
            if (array_key_exists('ext', $modelData) &&
                $modelData['ext'] !== $this->ext
            ) {
                

                $rollbackValues['ext'] = $this->ext;
                $this->processExt($modelData);
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
 * serialize the property status
 */
protected function serializeStatus()
{
    return \PHPModelGenerator\Filter\Enum::serialize($this->status, array (
  'fqcn' => 'AdCP\\MediaBuy\\Enums\\AccountStatus',
));
}


/**
 * serialize the property billing
 */
protected function serializeBilling()
{
    return \PHPModelGenerator\Filter\Enum::serialize($this->billing, array (
  'fqcn' => 'AdCP\\MediaBuy\\Enums\\BillingParty',
));
}


/**
 * serialize the property paymentTerms
 */
protected function serializePaymentTerms()
{
    return \PHPModelGenerator\Filter\Enum::serialize($this->paymentTerms, array (
  'fqcn' => 'AdCP\\MediaBuy\\Enums\\PaymentTerms',
));
}


/**
 * serialize the property accountScope
 */
protected function serializeAccountScope()
{
    return \PHPModelGenerator\Filter\Enum::serialize($this->accountScope, array (
  'fqcn' => 'AdCP\\MediaBuy\\Enums\\AccountScope',
));
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


private function validateGovernanceAgents_ArrayItem_0bd862c00e32f8724d8296ac651c688e(&$value, $modelData): void {
                    $invalidItems_051b8e2b570a9c5eec9ea26a0ee2ffa7 = [];
                    
                    if (is_array($value) && (function (&$items) use (&$invalidItems_051b8e2b570a9c5eec9ea26a0ee2ffa7, $modelData) {
    
        $originalErrorRegistry = $this->_errorRegistry;
    

    foreach ($items as $index => &$value) {
        
            $this->_errorRegistry = new ErrorRegistryException();
        

        try {
            $value = (function ($value) {
    try {
        return is_array($value) ? new GetMediaBuysResponse_ItemOfArrayGovernance_Agents18f58187ee1abde25033f0892dfed1fa($value) : $value;
    } catch (\Exception $instantiationException) {
        
            
                foreach($instantiationException->getErrors() as $nestedValidationError) {
                    $this->_errorRegistry->addError($nestedValidationError);
                }
            
        

        
            return $instantiationException;
        
    }
})($value)
;

            
                

if ((!is_object($value) && !$value instanceof UnitEnum) ) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Generic\InvalidTypeException($value ?? null, ...array (
  0 => 'item of array governance_agents',
  1 => 'object',
)));
}

            
                

if (is_object($value) && !($value instanceof \Exception) && !($value instanceof GetMediaBuysResponse_ItemOfArrayGovernance_Agents18f58187ee1abde25033f0892dfed1fa)) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Object\InvalidInstanceOfException($value ?? null, ...array (
  0 => 'item of array governance_agents',
  1 => 'GetMediaBuysResponse_ItemOfArrayGovernance_Agents18f58187ee1abde25033f0892dfed1fa',
)));
}

            

            
                if ($this->_errorRegistry->getErrors()) {
                    $invalidItems_051b8e2b570a9c5eec9ea26a0ee2ffa7[$index] = $this->_errorRegistry->getErrors();
                }
            
        } catch (\Exception $e) {
            // collect all errors concerning invalid items
            isset($invalidItems_051b8e2b570a9c5eec9ea26a0ee2ffa7[$index])
                ? $invalidItems_051b8e2b570a9c5eec9ea26a0ee2ffa7[$index][] = $e
                : $invalidItems_051b8e2b570a9c5eec9ea26a0ee2ffa7[$index] = [$e];
        }
    }

    
        $this->_errorRegistry = $originalErrorRegistry;
    

    return !empty($invalidItems_051b8e2b570a9c5eec9ea26a0ee2ffa7);
})($value)) {
                        $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Arrays\InvalidItemException($value ?? null, ...array (
  0 => 'governance_agents',
  1 => $invalidItems_051b8e2b570a9c5eec9ea26a0ee2ffa7,
)));
                    }
                }

private function validateNotificationConfigs_ArrayItem_ed811b5d1e9e183522e89cba0c025439(&$value, $modelData): void {
                    $invalidItems_3b3c7649b9166ee6128e9e54ff8e2b60 = [];
                    
                    if (is_array($value) && (function (&$items) use (&$invalidItems_3b3c7649b9166ee6128e9e54ff8e2b60, $modelData) {
    
        $originalErrorRegistry = $this->_errorRegistry;
    

    foreach ($items as $index => &$value) {
        
            $this->_errorRegistry = new ErrorRegistryException();
        

        try {
            $value = (function ($value) {
    try {
        return is_array($value) ? new GetMediaBuysResponse_NotificationConfig($value) : $value;
    } catch (\Exception $instantiationException) {
        
            
                foreach($instantiationException->getErrors() as $nestedValidationError) {
                    $this->_errorRegistry->addError($nestedValidationError);
                }
            
        

        
            return $instantiationException;
        
    }
})($value)
;

            
                

if ((!is_object($value) && !$value instanceof UnitEnum) ) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Generic\InvalidTypeException($value ?? null, ...array (
  0 => 'item of array notification_configs',
  1 => 'object',
)));
}

            
                

if (is_object($value) && !($value instanceof \Exception) && !($value instanceof GetMediaBuysResponse_NotificationConfig)) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Object\InvalidInstanceOfException($value ?? null, ...array (
  0 => 'item of array notification_configs',
  1 => 'GetMediaBuysResponse_NotificationConfig',
)));
}

            

            
                if ($this->_errorRegistry->getErrors()) {
                    $invalidItems_3b3c7649b9166ee6128e9e54ff8e2b60[$index] = $this->_errorRegistry->getErrors();
                }
            
        } catch (\Exception $e) {
            // collect all errors concerning invalid items
            isset($invalidItems_3b3c7649b9166ee6128e9e54ff8e2b60[$index])
                ? $invalidItems_3b3c7649b9166ee6128e9e54ff8e2b60[$index][] = $e
                : $invalidItems_3b3c7649b9166ee6128e9e54ff8e2b60[$index] = [$e];
        }
    }

    
        $this->_errorRegistry = $originalErrorRegistry;
    

    return !empty($invalidItems_3b3c7649b9166ee6128e9e54ff8e2b60);
})($value)) {
                        $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Arrays\InvalidItemException($value ?? null, ...array (
  0 => 'notification_configs',
  1 => $invalidItems_3b3c7649b9166ee6128e9e54ff8e2b60,
)));
                    }
                }


}

// @codeCoverageIgnoreEnd
