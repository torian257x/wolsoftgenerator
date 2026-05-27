<?php

// @codingStandardsIgnoreFile
// @codeCoverageIgnoreStart

declare(strict_types = 1);


    namespace AdCP\MediaBuy;



    use PHPModelGenerator\Interfaces\BuilderInterface;

    use PHPModelGenerator\Exception\ErrorRegistryException;


/**
 * Builder class for GetMediaBuysResponse_BusinessEntity
 */
class GetMediaBuysResponse_BusinessEntityBuilder implements BuilderInterface
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
     * Set up a new instance of GetMediaBuysResponse_BusinessEntity with fully validated properties
     */
    public function validate(): GetMediaBuysResponse_BusinessEntity
    {
        $this->_array_walk_recursive_real(
            $this->_rawModelDataInput,
            function (&$property): void {
                if ($property instanceof BuilderInterface) {
                    $property = $property->getRawModelDataInput();
                }
            },
        );

        return new GetMediaBuysResponse_BusinessEntity($this->_rawModelDataInput);
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
             * Get the value of legal_name.
             *
             * Registered legal name of the business entity
             *
             * @return string|null
             */
            public function getLegalName(): ?string
            {
                return $this->_rawModelDataInput['legal_name'] ?? null;
            }

            /**
             * Set the value of legal_name.
             *
             * @param string $legalName Registered legal name of the business entity
             *
             * {@link GetMediaBuysResponse_BusinessEntity::processLegalName}
             * 
             *
             * @return static
             */
            public function setLegalName(
                string $legalName
            ): static {
                if (array_key_exists('legal_name', $this->_rawModelDataInput)
                    && $this->_rawModelDataInput['legal_name'] === $legalName
                ) {
                    return $this;
                }

                $value = $modelData['legal_name'] = $legalName;

                

                

                $this->_rawModelDataInput['legal_name'] = $value;

                return $this;
            }
        
    
        
            /**
             * Get the value of vat_id.
             *
             * VAT identification number (e.g., DE123456789 for Germany, FR12345678901 for France). Required for B2B invoicing in the EU. Must be normalized: no spaces, dots, or dashes.
             *
             * @return string|null
             */
            public function getVatId(): ?string
            {
                return $this->_rawModelDataInput['vat_id'] ?? null;
            }

            /**
             * Set the value of vat_id.
             *
             * @param string $vatId VAT identification number (e.g., DE123456789 for Germany, FR12345678901 for France). Required for B2B invoicing in the EU. Must be normalized: no spaces, dots, or dashes.
             *
             * {@link GetMediaBuysResponse_BusinessEntity::processVatId}
             * 
             *
             * @return static
             */
            public function setVatId(
                string $vatId
            ): static {
                if (array_key_exists('vat_id', $this->_rawModelDataInput)
                    && $this->_rawModelDataInput['vat_id'] === $vatId
                ) {
                    return $this;
                }

                $value = $modelData['vat_id'] = $vatId;

                

                

                $this->_rawModelDataInput['vat_id'] = $value;

                return $this;
            }
        
    
        
            /**
             * Get the value of tax_id.
             *
             * Tax identification number for jurisdictions that do not use VAT (e.g., US EIN)
             *
             * @return string|null
             */
            public function getTaxId(): ?string
            {
                return $this->_rawModelDataInput['tax_id'] ?? null;
            }

            /**
             * Set the value of tax_id.
             *
             * @param string $taxId Tax identification number for jurisdictions that do not use VAT (e.g., US EIN)
             *
             * {@link GetMediaBuysResponse_BusinessEntity::processTaxId}
             * 
             *
             * @return static
             */
            public function setTaxId(
                string $taxId
            ): static {
                if (array_key_exists('tax_id', $this->_rawModelDataInput)
                    && $this->_rawModelDataInput['tax_id'] === $taxId
                ) {
                    return $this;
                }

                $value = $modelData['tax_id'] = $taxId;

                

                

                $this->_rawModelDataInput['tax_id'] = $value;

                return $this;
            }
        
    
        
            /**
             * Get the value of registration_number.
             *
             * Company registration number (e.g., HRB 12345 for German Handelsregister)
             *
             * @return string|null
             */
            public function getRegistrationNumber(): ?string
            {
                return $this->_rawModelDataInput['registration_number'] ?? null;
            }

            /**
             * Set the value of registration_number.
             *
             * @param string $registrationNumber Company registration number (e.g., HRB 12345 for German Handelsregister)
             *
             * {@link GetMediaBuysResponse_BusinessEntity::processRegistrationNumber}
             * 
             *
             * @return static
             */
            public function setRegistrationNumber(
                string $registrationNumber
            ): static {
                if (array_key_exists('registration_number', $this->_rawModelDataInput)
                    && $this->_rawModelDataInput['registration_number'] === $registrationNumber
                ) {
                    return $this;
                }

                $value = $modelData['registration_number'] = $registrationNumber;

                

                

                $this->_rawModelDataInput['registration_number'] = $value;

                return $this;
            }
        
    
        
            /**
             * Get the value of address.
             *
             * Postal address for invoicing and legal correspondence
             *
             * @return GetMediaBuysResponse_Address0a7b3632e3bb5fc1c86c7e16697775ea|GetMediaBuysResponse_Address0a7b3632e3bb5fc1c86c7e16697775eaBuilder|array|null
             */
            public function getAddress(): mixed
            {
                return $this->_rawModelDataInput['address'] ?? null;
            }

            /**
             * Set the value of address.
             *
             * @param GetMediaBuysResponse_Address0a7b3632e3bb5fc1c86c7e16697775ea|GetMediaBuysResponse_Address0a7b3632e3bb5fc1c86c7e16697775eaBuilder|array $address Postal address for invoicing and legal correspondence
             *
             * {@link GetMediaBuysResponse_BusinessEntity::processAddress}
             * 
             *
             * @return static
             */
            public function setAddress(
                mixed $address
            ): static {
                if (array_key_exists('address', $this->_rawModelDataInput)
                    && $this->_rawModelDataInput['address'] === $address
                ) {
                    return $this;
                }

                $value = $modelData['address'] = $address;

                

                

                $this->_rawModelDataInput['address'] = $value;

                return $this;
            }
        
    
        
            /**
             * Get the value of contacts.
             *
             * Contacts for billing, legal, and operational matters. Contains personal data subject to GDPR and equivalent regulations. Implementations MUST use this data only for invoicing and account management.
             *
             * @return GetMediaBuysResponse_ItemOfArrayContacts68bbcda7e3595439f5fe2c3176810b51[]|GetMediaBuysResponse_ItemOfArrayContacts68bbcda7e3595439f5fe2c3176810b51Builder[]|array|null
             */
            public function getContacts(): mixed
            {
                return $this->_rawModelDataInput['contacts'] ?? null;
            }

            /**
             * Set the value of contacts.
             *
             * @param GetMediaBuysResponse_ItemOfArrayContacts68bbcda7e3595439f5fe2c3176810b51[]|GetMediaBuysResponse_ItemOfArrayContacts68bbcda7e3595439f5fe2c3176810b51Builder[]|array $contacts Contacts for billing, legal, and operational matters. Contains personal data subject to GDPR and equivalent regulations. Implementations MUST use this data only for invoicing and account management.
             *
             * {@link GetMediaBuysResponse_BusinessEntity::processContacts}
             * 
             *
             * @return static
             */
            public function setContacts(
                mixed $contacts
            ): static {
                if (array_key_exists('contacts', $this->_rawModelDataInput)
                    && $this->_rawModelDataInput['contacts'] === $contacts
                ) {
                    return $this;
                }

                $value = $modelData['contacts'] = $contacts;

                

                

                $this->_rawModelDataInput['contacts'] = $value;

                return $this;
            }
        
    
        
            /**
             * Get the value of bank.
             *
             * Bank account details for payment processing. Write-only: included in requests to provide payment coordinates, but MUST NOT be echoed in responses. Sellers store these details and confirm receipt without returning them.
             *
             * @return GetMediaBuysResponse_Banke8908433f3ff603c931cb623bb3be765|GetMediaBuysResponse_Banke8908433f3ff603c931cb623bb3be765Builder|array|null
             */
            public function getBank(): mixed
            {
                return $this->_rawModelDataInput['bank'] ?? null;
            }

            /**
             * Set the value of bank.
             *
             * @param GetMediaBuysResponse_Banke8908433f3ff603c931cb623bb3be765|GetMediaBuysResponse_Banke8908433f3ff603c931cb623bb3be765Builder|array $bank Bank account details for payment processing. Write-only: included in requests to provide payment coordinates, but MUST NOT be echoed in responses. Sellers store these details and confirm receipt without returning them.
             *
             * {@link GetMediaBuysResponse_BusinessEntity::processBank}
             * 
             *
             * @return static
             */
            public function setBank(
                mixed $bank
            ): static {
                if (array_key_exists('bank', $this->_rawModelDataInput)
                    && $this->_rawModelDataInput['bank'] === $bank
                ) {
                    return $this;
                }

                $value = $modelData['bank'] = $bank;

                

                

                $this->_rawModelDataInput['bank'] = $value;

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
             * {@link GetMediaBuysResponse_BusinessEntity::processExt}
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
