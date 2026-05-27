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

    use AdCP\MediaBuy\Enums\GetMediaBuysResponse_ItemOfArrayContacts68bbcda7e3595439f5fe2c3176810b51Role;

    use PHPModelGenerator\Attributes\JsonPointer;

    use PHPModelGenerator\Attributes\SchemaName;

    use PHPModelGenerator\Attributes\Required;

    use PHPModelGenerator\Attributes\WriteOnlyProperty;

    use PHPModelGenerator\Attributes\Internal;

    use PHPModelGenerator\Exception\ErrorRegistryException;


/**
 * Class GetMediaBuysResponse_BusinessEntity
 * @package AdCP\MediaBuy 
 *
 * Business entity details for the party responsible for payment. Contains the legal name, tax IDs, address, and bank details needed for formal B2B invoicing. Corresponds to whoever billing points to (operator, agent, or advertiser). When this account appears in a response, bank details MUST be omitted (write-only).
 *
 * This is an auto-implemented class implemented by the php-json-schema-model-generator.
 * If you need to implement something in this class use inheritance. Else you will lose your changes if the classes
 * are re-generated.
 */

#[JsonPointer('/properties/media_buys/items/properties/account/properties/billing_entity')]

class GetMediaBuysResponse_BusinessEntity implements JSONModelInterface, JsonSerializable, SerializationInterface
{
    use SerializableTrait;

    
        
            #[JsonPointer('/properties/media_buys/items/properties/account/properties/billing_entity/properties/legal_name')]
        
            #[SchemaName('legal_name')]
        
            #[Required]
        
        /** @var string Registered legal name of the business entity */
        protected $legalName;
    
        
            #[JsonPointer('/properties/media_buys/items/properties/account/properties/billing_entity/properties/vat_id')]
        
            #[SchemaName('vat_id')]
        
        /** @var string|null VAT identification number (e.g., DE123456789 for Germany, FR12345678901 for France). Required for B2B invoicing in the EU. Must be normalized: no spaces, dots, or dashes. */
        protected $vatId;
    
        
            #[JsonPointer('/properties/media_buys/items/properties/account/properties/billing_entity/properties/tax_id')]
        
            #[SchemaName('tax_id')]
        
        /** @var string|null Tax identification number for jurisdictions that do not use VAT (e.g., US EIN) */
        protected $taxId;
    
        
            #[JsonPointer('/properties/media_buys/items/properties/account/properties/billing_entity/properties/registration_number')]
        
            #[SchemaName('registration_number')]
        
        /** @var string|null Company registration number (e.g., HRB 12345 for German Handelsregister) */
        protected $registrationNumber;
    
        
            #[JsonPointer('/properties/media_buys/items/properties/account/properties/billing_entity/properties/address')]
        
            #[SchemaName('address')]
        
        /** @var GetMediaBuysResponse_Address0a7b3632e3bb5fc1c86c7e16697775ea|null Postal address for invoicing and legal correspondence */
        protected $address;
    
        
            #[JsonPointer('/properties/media_buys/items/properties/account/properties/billing_entity/properties/contacts')]
        
            #[SchemaName('contacts')]
        
        /** @var GetMediaBuysResponse_ItemOfArrayContacts68bbcda7e3595439f5fe2c3176810b51[]|null Contacts for billing, legal, and operational matters. Contains personal data subject to GDPR and equivalent regulations. Implementations MUST use this data only for invoicing and account management. */
        protected $contacts;
    
        
            #[JsonPointer('/properties/media_buys/items/properties/account/properties/billing_entity/properties/bank')]
        
            #[SchemaName('bank')]
        
            #[WriteOnlyProperty]
        
        /** @var GetMediaBuysResponse_Banke8908433f3ff603c931cb623bb3be765|null Bank account details for payment processing. Write-only: included in requests to provide payment coordinates, but MUST NOT be echoed in responses. Sellers store these details and confirm receipt without returning them. */
        protected $bank;
    
        
            #[JsonPointer('/properties/media_buys/items/properties/account/properties/billing_entity/properties/ext')]
        
            #[SchemaName('ext')]
        
        /** @var GetMediaBuysResponse_ExtensionObject|null Extension object for platform-specific, vendor-namespaced parameters. Extensions are always optional and must be namespaced under a vendor/platform key (e.g., ext.gam, ext.roku). Used for custom capabilities, partner-specific configuration, and features being proposed for standardization. */
        protected $ext;
    
        
            #[Internal]
        
        /** @var array Values which might be skipped for serialization if not provided */
        private $_skipNotProvidedPropertiesMap = array (
  1 => 'vat_id',
  2 => 'tax_id',
  3 => 'registration_number',
  4 => 'address',
  5 => 'contacts',
  6 => 'bank',
  7 => 'ext',
);
    
    #[Internal]
    /** @var array */
    protected $_rawModelDataInput = [];

    
        #[Internal]
        /** @var ErrorRegistryException Collect all validation errors */
        protected $_errorRegistry;
    

    /**
     * GetMediaBuysResponse_BusinessEntity constructor.
     *
     * @param array $rawModelDataInput
     *
     * @throws ErrorRegistryException
     */
    public function __construct(array $rawModelDataInput = [])
    {
        
            $this->_errorRegistry = new ErrorRegistryException();
        

        

        
            $this->executeBaseValidators($rawModelDataInput);
        

        
            
                $this->processLegalName($rawModelDataInput);
            
        
            
                $this->processVatId($rawModelDataInput);
            
        
            
                $this->processTaxId($rawModelDataInput);
            
        
            
                $this->processRegistrationNumber($rawModelDataInput);
            
        
            
                $this->processAddress($rawModelDataInput);
            
        
            
                $this->processContacts($rawModelDataInput);
            
        
            
                $this->processBank($rawModelDataInput);
            
        
            
                $this->processExt($rawModelDataInput);
            
        
            
        

        
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
   'legal_name',
   'vat_id',
   'tax_id',
   'registration_number',
   'address',
   'contacts',
   'bank',
   'ext',
));

    

    return $additionalProperties;
})()) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Object\AdditionalPropertiesException($value ?? null, ...array (
  0 => 'GetMediaBuysResponse_BusinessEntity',
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
                 * Get the value of legal_name.
                 *
                 * Registered legal name of the business entity
                 *
                 * @return string
                 */
                public function getLegalName(): string
                {
                    

                    return $this->legalName;
                }
            

            
                /**
                 * Set the value of legal_name.
                 *
                 * @param string $legalName Registered legal name of the business entity
                 *
                 * @throws ErrorRegistryException
                 *
                 * @return static
                 */
                public function setLegalName(
                    string $legalName
                ): static {
                    if ($this->legalName === $legalName) {
                        return $this;
                    }

                    $value = $modelData['legal_name'] = $legalName;

                    
                        $this->_errorRegistry = new ErrorRegistryException();
                    

                    

                    $value = $this->validateLegalName($value, $modelData);

                    
                        if ($this->_errorRegistry->getErrors()) {
                            throw $this->_errorRegistry;
                        }
                    

                    $this->legalName = $value;
                    $this->_rawModelDataInput['legal_name'] = $legalName;

                    

                    return $this;
                }
            

            /**
             * Extract the value, perform validations and set the property legalName
             *
             * @param array $modelData
             *
             * @throws ErrorRegistryException
             */
            protected function processLegalName(array $modelData): void
            {
                

                $value = array_key_exists('legal_name', $modelData) ? $modelData['legal_name'] : $this->legalName;

                

                $this->legalName = $this->validateLegalName($value, $modelData);
            }

            /**
             * Execute all validators for the property legalName
             */
            protected function validateLegalName($value, array $modelData)
            {
                
                    

if (!array_key_exists('legal_name', $modelData)) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Object\RequiredValueException($value ?? null, ...array (
  0 => 'legal_name',
)));
}

                
                    

if ((!is_string($value) && !$value instanceof UnitEnum) ) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Generic\InvalidTypeException($value ?? null, ...array (
  0 => 'legal_name',
  1 => 'string',
)));
}

                
                    

if (is_string($value) && mb_strlen($value) > 200) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\String\MaxLengthException($value ?? null, ...array (
  0 => 'legal_name',
  1 => 200,
)));
}

                

                return $value;
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
                    

                    return $this->vatId;
                }
            

            
                /**
                 * Set the value of vat_id.
                 *
                 * @param string $vatId VAT identification number (e.g., DE123456789 for Germany, FR12345678901 for France). Required for B2B invoicing in the EU. Must be normalized: no spaces, dots, or dashes.
                 *
                 * @throws ErrorRegistryException
                 *
                 * @return static
                 */
                public function setVatId(
                    string $vatId
                ): static {
                    if ($this->vatId === $vatId) {
                        return $this;
                    }

                    $value = $modelData['vat_id'] = $vatId;

                    
                        $this->_errorRegistry = new ErrorRegistryException();
                    

                    

                    $value = $this->validateVatId($value, $modelData);

                    
                        if ($this->_errorRegistry->getErrors()) {
                            throw $this->_errorRegistry;
                        }
                    

                    $this->vatId = $value;
                    $this->_rawModelDataInput['vat_id'] = $vatId;

                    

                    return $this;
                }
            

            /**
             * Extract the value, perform validations and set the property vatId
             *
             * @param array $modelData
             *
             * @throws ErrorRegistryException
             */
            protected function processVatId(array $modelData): void
            {
                
                    if (!array_key_exists('vat_id', $modelData) && $this->vatId === null) {
                        return;
                    }
                

                $value = array_key_exists('vat_id', $modelData) ? $modelData['vat_id'] : $this->vatId;

                

                $this->vatId = $this->validateVatId($value, $modelData);
            }

            /**
             * Execute all validators for the property vatId
             */
            protected function validateVatId($value, array $modelData)
            {
                
                    

if ((!is_string($value) && !$value instanceof UnitEnum) ) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Generic\InvalidTypeException($value ?? null, ...array (
  0 => 'vat_id',
  1 => 'string',
)));
}

                
                    

if (is_string($value) && !preg_match(base64_decode('L15bQS1aXXsyfVtBLVowLTldezIsMTN9JC8='), $value)) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\String\PatternException($value ?? null, ...array (
  0 => 'vat_id',
  1 => '^[A-Z]{2}[A-Z0-9]{2,13}$',
)));
}

                

                return $value;
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
                    

                    return $this->taxId;
                }
            

            
                /**
                 * Set the value of tax_id.
                 *
                 * @param string $taxId Tax identification number for jurisdictions that do not use VAT (e.g., US EIN)
                 *
                 * @throws ErrorRegistryException
                 *
                 * @return static
                 */
                public function setTaxId(
                    string $taxId
                ): static {
                    if ($this->taxId === $taxId) {
                        return $this;
                    }

                    $value = $modelData['tax_id'] = $taxId;

                    
                        $this->_errorRegistry = new ErrorRegistryException();
                    

                    

                    $value = $this->validateTaxId($value, $modelData);

                    
                        if ($this->_errorRegistry->getErrors()) {
                            throw $this->_errorRegistry;
                        }
                    

                    $this->taxId = $value;
                    $this->_rawModelDataInput['tax_id'] = $taxId;

                    

                    return $this;
                }
            

            /**
             * Extract the value, perform validations and set the property taxId
             *
             * @param array $modelData
             *
             * @throws ErrorRegistryException
             */
            protected function processTaxId(array $modelData): void
            {
                
                    if (!array_key_exists('tax_id', $modelData) && $this->taxId === null) {
                        return;
                    }
                

                $value = array_key_exists('tax_id', $modelData) ? $modelData['tax_id'] : $this->taxId;

                

                $this->taxId = $this->validateTaxId($value, $modelData);
            }

            /**
             * Execute all validators for the property taxId
             */
            protected function validateTaxId($value, array $modelData)
            {
                
                    

if ((!is_string($value) && !$value instanceof UnitEnum) ) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Generic\InvalidTypeException($value ?? null, ...array (
  0 => 'tax_id',
  1 => 'string',
)));
}

                
                    

if (is_string($value) && mb_strlen($value) > 30) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\String\MaxLengthException($value ?? null, ...array (
  0 => 'tax_id',
  1 => 30,
)));
}

                

                return $value;
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
                    

                    return $this->registrationNumber;
                }
            

            
                /**
                 * Set the value of registration_number.
                 *
                 * @param string $registrationNumber Company registration number (e.g., HRB 12345 for German Handelsregister)
                 *
                 * @throws ErrorRegistryException
                 *
                 * @return static
                 */
                public function setRegistrationNumber(
                    string $registrationNumber
                ): static {
                    if ($this->registrationNumber === $registrationNumber) {
                        return $this;
                    }

                    $value = $modelData['registration_number'] = $registrationNumber;

                    
                        $this->_errorRegistry = new ErrorRegistryException();
                    

                    

                    $value = $this->validateRegistrationNumber($value, $modelData);

                    
                        if ($this->_errorRegistry->getErrors()) {
                            throw $this->_errorRegistry;
                        }
                    

                    $this->registrationNumber = $value;
                    $this->_rawModelDataInput['registration_number'] = $registrationNumber;

                    

                    return $this;
                }
            

            /**
             * Extract the value, perform validations and set the property registrationNumber
             *
             * @param array $modelData
             *
             * @throws ErrorRegistryException
             */
            protected function processRegistrationNumber(array $modelData): void
            {
                
                    if (!array_key_exists('registration_number', $modelData) && $this->registrationNumber === null) {
                        return;
                    }
                

                $value = array_key_exists('registration_number', $modelData) ? $modelData['registration_number'] : $this->registrationNumber;

                

                $this->registrationNumber = $this->validateRegistrationNumber($value, $modelData);
            }

            /**
             * Execute all validators for the property registrationNumber
             */
            protected function validateRegistrationNumber($value, array $modelData)
            {
                
                    

if ((!is_string($value) && !$value instanceof UnitEnum) ) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Generic\InvalidTypeException($value ?? null, ...array (
  0 => 'registration_number',
  1 => 'string',
)));
}

                
                    

if (is_string($value) && mb_strlen($value) > 50) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\String\MaxLengthException($value ?? null, ...array (
  0 => 'registration_number',
  1 => 50,
)));
}

                

                return $value;
            }
        
    
        
            
                /**
                 * Get the value of address.
                 *
                 * Postal address for invoicing and legal correspondence
                 *
                 * @return GetMediaBuysResponse_Address0a7b3632e3bb5fc1c86c7e16697775ea|null
                 */
                public function getAddress(): ?GetMediaBuysResponse_Address0a7b3632e3bb5fc1c86c7e16697775ea
                {
                    

                    return $this->address;
                }
            

            
                /**
                 * Set the value of address.
                 *
                 * @param GetMediaBuysResponse_Address0a7b3632e3bb5fc1c86c7e16697775ea $address Postal address for invoicing and legal correspondence
                 *
                 * @throws ErrorRegistryException
                 *
                 * @return static
                 */
                public function setAddress(
                    GetMediaBuysResponse_Address0a7b3632e3bb5fc1c86c7e16697775ea $address
                ): static {
                    if ($this->address === $address) {
                        return $this;
                    }

                    $value = $modelData['address'] = $address;

                    
                        $this->_errorRegistry = new ErrorRegistryException();
                    

                    

                    $value = $this->validateAddress($value, $modelData);

                    
                        if ($this->_errorRegistry->getErrors()) {
                            throw $this->_errorRegistry;
                        }
                    

                    $this->address = $value;
                    $this->_rawModelDataInput['address'] = $address;

                    

                    return $this;
                }
            

            /**
             * Extract the value, perform validations and set the property address
             *
             * @param array $modelData
             *
             * @throws ErrorRegistryException
             */
            protected function processAddress(array $modelData): void
            {
                
                    if (!array_key_exists('address', $modelData) && $this->address === null) {
                        return;
                    }
                

                $value = array_key_exists('address', $modelData) ? $modelData['address'] : $this->address;

                $value = (function ($value) {
    try {
        return is_array($value) ? new GetMediaBuysResponse_Address0a7b3632e3bb5fc1c86c7e16697775ea($value) : $value;
    } catch (\Exception $instantiationException) {
        
            $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Object\NestedObjectException($value ?? null, ...array (
  0 => 'address',
  1 => $instantiationException,
)));
        

        
            return $instantiationException;
        
    }
})($value)
;

                $this->address = $this->validateAddress($value, $modelData);
            }

            /**
             * Execute all validators for the property address
             */
            protected function validateAddress($value, array $modelData)
            {
                
                    

if ((!is_object($value) && !$value instanceof UnitEnum) ) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Generic\InvalidTypeException($value ?? null, ...array (
  0 => 'address',
  1 => 'object',
)));
}

                
                    

if (is_object($value) && !($value instanceof \Exception) && !($value instanceof GetMediaBuysResponse_Address0a7b3632e3bb5fc1c86c7e16697775ea)) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Object\InvalidInstanceOfException($value ?? null, ...array (
  0 => 'address',
  1 => 'GetMediaBuysResponse_Address0a7b3632e3bb5fc1c86c7e16697775ea',
)));
}

                

                return $value;
            }
        
    
        
            
                /**
                 * Get the value of contacts.
                 *
                 * Contacts for billing, legal, and operational matters. Contains personal data subject to GDPR and equivalent regulations. Implementations MUST use this data only for invoicing and account management.
                 *
                 * @return GetMediaBuysResponse_ItemOfArrayContacts68bbcda7e3595439f5fe2c3176810b51[]|null
                 */
                public function getContacts(): ?array
                {
                    

                    return $this->contacts;
                }
            

            
                /**
                 * Set the value of contacts.
                 *
                 * @param GetMediaBuysResponse_ItemOfArrayContacts68bbcda7e3595439f5fe2c3176810b51[] $contacts Contacts for billing, legal, and operational matters. Contains personal data subject to GDPR and equivalent regulations. Implementations MUST use this data only for invoicing and account management.
                 *
                 * @throws ErrorRegistryException
                 *
                 * @return static
                 */
                public function setContacts(
                    array $contacts
                ): static {
                    if ($this->contacts === $contacts) {
                        return $this;
                    }

                    $value = $modelData['contacts'] = $contacts;

                    
                        $this->_errorRegistry = new ErrorRegistryException();
                    

                    

                    $value = $this->validateContacts($value, $modelData);

                    
                        if ($this->_errorRegistry->getErrors()) {
                            throw $this->_errorRegistry;
                        }
                    

                    $this->contacts = $value;
                    $this->_rawModelDataInput['contacts'] = $contacts;

                    

                    return $this;
                }
            

            /**
             * Extract the value, perform validations and set the property contacts
             *
             * @param array $modelData
             *
             * @throws ErrorRegistryException
             */
            protected function processContacts(array $modelData): void
            {
                
                    if (!array_key_exists('contacts', $modelData) && $this->contacts === null) {
                        return;
                    }
                

                $value = array_key_exists('contacts', $modelData) ? $modelData['contacts'] : $this->contacts;

                

                $this->contacts = $this->validateContacts($value, $modelData);
            }

            /**
             * Execute all validators for the property contacts
             */
            protected function validateContacts($value, array $modelData)
            {
                
                    

if ((!is_array($value) && !$value instanceof UnitEnum) ) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Generic\InvalidTypeException($value ?? null, ...array (
  0 => 'contacts',
  1 => 'array',
)));
}

                
                    $this->validateContacts_ArrayItem_3b1fd34da9d35c7aab53dc064ce62e6e($value, $modelData);
                
                    

if (is_array($value) && count($value) > 10) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Arrays\MaxItemsException($value ?? null, ...array (
  0 => 'contacts',
  1 => 10,
)));
}

                

                return $value;
            }
        
    
        
            

            
                /**
                 * Set the value of bank.
                 *
                 * @param GetMediaBuysResponse_Banke8908433f3ff603c931cb623bb3be765 $bank Bank account details for payment processing. Write-only: included in requests to provide payment coordinates, but MUST NOT be echoed in responses. Sellers store these details and confirm receipt without returning them.
                 *
                 * @throws ErrorRegistryException
                 *
                 * @return static
                 */
                public function setBank(
                    GetMediaBuysResponse_Banke8908433f3ff603c931cb623bb3be765 $bank
                ): static {
                    if ($this->bank === $bank) {
                        return $this;
                    }

                    $value = $modelData['bank'] = $bank;

                    
                        $this->_errorRegistry = new ErrorRegistryException();
                    

                    

                    $value = $this->validateBank($value, $modelData);

                    
                        if ($this->_errorRegistry->getErrors()) {
                            throw $this->_errorRegistry;
                        }
                    

                    $this->bank = $value;
                    $this->_rawModelDataInput['bank'] = $bank;

                    

                    return $this;
                }
            

            /**
             * Extract the value, perform validations and set the property bank
             *
             * @param array $modelData
             *
             * @throws ErrorRegistryException
             */
            protected function processBank(array $modelData): void
            {
                
                    if (!array_key_exists('bank', $modelData) && $this->bank === null) {
                        return;
                    }
                

                $value = array_key_exists('bank', $modelData) ? $modelData['bank'] : $this->bank;

                $value = (function ($value) {
    try {
        return is_array($value) ? new GetMediaBuysResponse_Banke8908433f3ff603c931cb623bb3be765($value) : $value;
    } catch (\Exception $instantiationException) {
        
            $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Object\NestedObjectException($value ?? null, ...array (
  0 => 'bank',
  1 => $instantiationException,
)));
        

        
            return $instantiationException;
        
    }
})($value)
;

                $this->bank = $this->validateBank($value, $modelData);
            }

            /**
             * Execute all validators for the property bank
             */
            protected function validateBank($value, array $modelData)
            {
                
                    

if ((!is_object($value) && !$value instanceof UnitEnum) ) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Generic\InvalidTypeException($value ?? null, ...array (
  0 => 'bank',
  1 => 'object',
)));
}

                
                    

if (is_object($value) && !($value instanceof \Exception) && !($value instanceof GetMediaBuysResponse_Banke8908433f3ff603c931cb623bb3be765)) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Object\InvalidInstanceOfException($value ?? null, ...array (
  0 => 'bank',
  1 => 'GetMediaBuysResponse_Banke8908433f3ff603c931cb623bb3be765',
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
    

    
        
            if (array_key_exists('legal_name', $modelData) &&
                $modelData['legal_name'] !== $this->legalName
            ) {
                

                $rollbackValues['legalName'] = $this->legalName;
                $this->processLegalName($modelData);
            }
        
    
        
            if (array_key_exists('vat_id', $modelData) &&
                $modelData['vat_id'] !== $this->vatId
            ) {
                

                $rollbackValues['vatId'] = $this->vatId;
                $this->processVatId($modelData);
            }
        
    
        
            if (array_key_exists('tax_id', $modelData) &&
                $modelData['tax_id'] !== $this->taxId
            ) {
                

                $rollbackValues['taxId'] = $this->taxId;
                $this->processTaxId($modelData);
            }
        
    
        
            if (array_key_exists('registration_number', $modelData) &&
                $modelData['registration_number'] !== $this->registrationNumber
            ) {
                

                $rollbackValues['registrationNumber'] = $this->registrationNumber;
                $this->processRegistrationNumber($modelData);
            }
        
    
        
            if (array_key_exists('address', $modelData) &&
                $modelData['address'] !== $this->address
            ) {
                

                $rollbackValues['address'] = $this->address;
                $this->processAddress($modelData);
            }
        
    
        
            if (array_key_exists('contacts', $modelData) &&
                $modelData['contacts'] !== $this->contacts
            ) {
                

                $rollbackValues['contacts'] = $this->contacts;
                $this->processContacts($modelData);
            }
        
    
        
            if (array_key_exists('bank', $modelData) &&
                $modelData['bank'] !== $this->bank
            ) {
                

                $rollbackValues['bank'] = $this->bank;
                $this->processBank($modelData);
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



    protected function resolveSerializationHook(array $data, int $depth, array $except): array
    {
        foreach (array (
  0 => 'bank',
) as $_writeOnlyKey) { unset($data[$_writeOnlyKey]); }

        return $data;
    }


private function validateContacts_ArrayItem_3b1fd34da9d35c7aab53dc064ce62e6e(&$value, $modelData): void {
                    $invalidItems_3955ea92e4ddd8945f4be8503d2005cb = [];
                    
                    if (is_array($value) && (function (&$items) use (&$invalidItems_3955ea92e4ddd8945f4be8503d2005cb, $modelData) {
    
        $originalErrorRegistry = $this->_errorRegistry;
    

    foreach ($items as $index => &$value) {
        
            $this->_errorRegistry = new ErrorRegistryException();
        

        try {
            $value = (function ($value) {
    try {
        return is_array($value) ? new GetMediaBuysResponse_ItemOfArrayContacts68bbcda7e3595439f5fe2c3176810b51($value) : $value;
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
  0 => 'item of array contacts',
  1 => 'object',
)));
}

            
                

if (is_object($value) && !($value instanceof \Exception) && !($value instanceof GetMediaBuysResponse_ItemOfArrayContacts68bbcda7e3595439f5fe2c3176810b51)) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Object\InvalidInstanceOfException($value ?? null, ...array (
  0 => 'item of array contacts',
  1 => 'GetMediaBuysResponse_ItemOfArrayContacts68bbcda7e3595439f5fe2c3176810b51',
)));
}

            

            
                if ($this->_errorRegistry->getErrors()) {
                    $invalidItems_3955ea92e4ddd8945f4be8503d2005cb[$index] = $this->_errorRegistry->getErrors();
                }
            
        } catch (\Exception $e) {
            // collect all errors concerning invalid items
            isset($invalidItems_3955ea92e4ddd8945f4be8503d2005cb[$index])
                ? $invalidItems_3955ea92e4ddd8945f4be8503d2005cb[$index][] = $e
                : $invalidItems_3955ea92e4ddd8945f4be8503d2005cb[$index] = [$e];
        }
    }

    
        $this->_errorRegistry = $originalErrorRegistry;
    

    return !empty($invalidItems_3955ea92e4ddd8945f4be8503d2005cb);
})($value)) {
                        $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Arrays\InvalidItemException($value ?? null, ...array (
  0 => 'contacts',
  1 => $invalidItems_3955ea92e4ddd8945f4be8503d2005cb,
)));
                    }
                }


}

// @codeCoverageIgnoreEnd
