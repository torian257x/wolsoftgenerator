<?php

// @codingStandardsIgnoreFile
// @codeCoverageIgnoreStart

declare(strict_types = 1);


    namespace AdCP\MediaBuy;



    use PHPModelGenerator\Interfaces\JSONModelInterface;

    use PHPModelGenerator\Traits\SerializableTrait;

    use JsonSerializable;

    use PHPModelGenerator\Interfaces\SerializationInterface;

    use PHPModelGenerator\Attributes\JsonPointer;

    use PHPModelGenerator\Attributes\SchemaName;

    use PHPModelGenerator\Attributes\Required;

    use PHPModelGenerator\Attributes\Internal;

    use PHPModelGenerator\Exception\ErrorRegistryException;


/**
 * Class GetMediaBuysResponse_Banke8908433f3ff603c931cb623bb3be765
 * @package AdCP\MediaBuy 
 *
 * Bank account details for payment processing. Write-only: included in requests to provide payment coordinates, but MUST NOT be echoed in responses. Sellers store these details and confirm receipt without returning them.
 *
 * This is an auto-implemented class implemented by the php-json-schema-model-generator.
 * If you need to implement something in this class use inheritance. Else you will lose your changes if the classes
 * are re-generated.
 */

#[JsonPointer('/properties/media_buys/items/properties/account/properties/billing_entity/properties/bank')]

class GetMediaBuysResponse_Banke8908433f3ff603c931cb623bb3be765 implements JSONModelInterface, JsonSerializable, SerializationInterface
{
    use SerializableTrait;

    
        
            #[JsonPointer('/properties/media_buys/items/properties/account/properties/billing_entity/properties/bank/properties/account_holder')]
        
            #[SchemaName('account_holder')]
        
            #[Required]
        
        /** @var string Name on the bank account */
        protected $accountHolder;
    
        
            #[JsonPointer('/properties/media_buys/items/properties/account/properties/billing_entity/properties/bank/properties/iban')]
        
            #[SchemaName('iban')]
        
        /** @var string|null International Bank Account Number (SEPA markets) */
        protected $iban;
    
        
            #[JsonPointer('/properties/media_buys/items/properties/account/properties/billing_entity/properties/bank/properties/bic')]
        
            #[SchemaName('bic')]
        
        /** @var string|null Bank Identifier Code / SWIFT code (SEPA markets) */
        protected $bic;
    
        
            #[JsonPointer('/properties/media_buys/items/properties/account/properties/billing_entity/properties/bank/properties/routing_number')]
        
            #[SchemaName('routing_number')]
        
        /** @var string|null Bank routing number for non-SEPA markets (e.g., US ABA routing number, Canadian transit/institution number) */
        protected $routingNumber;
    
        
            #[JsonPointer('/properties/media_buys/items/properties/account/properties/billing_entity/properties/bank/properties/account_number')]
        
            #[SchemaName('account_number')]
        
        /** @var string|null Bank account number for non-SEPA markets */
        protected $accountNumber;
    
        
            #[Internal]
        
        /** @var array Values which might be skipped for serialization if not provided */
        private $_skipNotProvidedPropertiesMap = array (
  1 => 'iban',
  2 => 'bic',
  3 => 'routing_number',
  4 => 'account_number',
);
    
    #[Internal]
    /** @var array */
    protected $_rawModelDataInput = [];

    
        #[Internal]
        /** @var ErrorRegistryException Collect all validation errors */
        protected $_errorRegistry;
    

    /**
     * GetMediaBuysResponse_Banke8908433f3ff603c931cb623bb3be765 constructor.
     *
     * @param array $rawModelDataInput
     *
     * @throws ErrorRegistryException
     */
    public function __construct(array $rawModelDataInput = [])
    {
        
            $this->_errorRegistry = new ErrorRegistryException();
        

        

        
            $this->executeBaseValidators($rawModelDataInput);
        

        
            
                $this->processAccountHolder($rawModelDataInput);
            
        
            
                $this->processIban($rawModelDataInput);
            
        
            
                $this->processBic($rawModelDataInput);
            
        
            
                $this->processRoutingNumber($rawModelDataInput);
            
        
            
                $this->processAccountNumber($rawModelDataInput);
            
        
            
        

        
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
   'account_holder',
   'iban',
   'bic',
   'routing_number',
   'account_number',
));

    

    return $additionalProperties;
})()) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Object\AdditionalPropertiesException($value ?? null, ...array (
  0 => 'GetMediaBuysResponse_Banke8908433f3ff603c931cb623bb3be765',
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
                 * Get the value of account_holder.
                 *
                 * Name on the bank account
                 *
                 * @return string
                 */
                public function getAccountHolder(): string
                {
                    

                    return $this->accountHolder;
                }
            

            
                /**
                 * Set the value of account_holder.
                 *
                 * @param string $accountHolder Name on the bank account
                 *
                 * @throws ErrorRegistryException
                 *
                 * @return static
                 */
                public function setAccountHolder(
                    string $accountHolder
                ): static {
                    if ($this->accountHolder === $accountHolder) {
                        return $this;
                    }

                    $value = $modelData['account_holder'] = $accountHolder;

                    
                        $this->_errorRegistry = new ErrorRegistryException();
                    

                    

                    $value = $this->validateAccountHolder($value, $modelData);

                    
                        if ($this->_errorRegistry->getErrors()) {
                            throw $this->_errorRegistry;
                        }
                    

                    $this->accountHolder = $value;
                    $this->_rawModelDataInput['account_holder'] = $accountHolder;

                    

                    return $this;
                }
            

            /**
             * Extract the value, perform validations and set the property accountHolder
             *
             * @param array $modelData
             *
             * @throws ErrorRegistryException
             */
            protected function processAccountHolder(array $modelData): void
            {
                

                $value = array_key_exists('account_holder', $modelData) ? $modelData['account_holder'] : $this->accountHolder;

                

                $this->accountHolder = $this->validateAccountHolder($value, $modelData);
            }

            /**
             * Execute all validators for the property accountHolder
             */
            protected function validateAccountHolder($value, array $modelData)
            {
                
                    

if (!array_key_exists('account_holder', $modelData)) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Object\RequiredValueException($value ?? null, ...array (
  0 => 'account_holder',
)));
}

                
                    

if ((!is_string($value) && !$value instanceof UnitEnum) ) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Generic\InvalidTypeException($value ?? null, ...array (
  0 => 'account_holder',
  1 => 'string',
)));
}

                
                    

if (is_string($value) && mb_strlen($value) > 200) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\String\MaxLengthException($value ?? null, ...array (
  0 => 'account_holder',
  1 => 200,
)));
}

                

                return $value;
            }
        
    
        
            
                /**
                 * Get the value of iban.
                 *
                 * International Bank Account Number (SEPA markets)
                 *
                 * @return string|null
                 */
                public function getIban(): ?string
                {
                    

                    return $this->iban;
                }
            

            
                /**
                 * Set the value of iban.
                 *
                 * @param string $iban International Bank Account Number (SEPA markets)
                 *
                 * @throws ErrorRegistryException
                 *
                 * @return static
                 */
                public function setIban(
                    string $iban
                ): static {
                    if ($this->iban === $iban) {
                        return $this;
                    }

                    $value = $modelData['iban'] = $iban;

                    
                        $this->_errorRegistry = new ErrorRegistryException();
                    

                    

                    $value = $this->validateIban($value, $modelData);

                    
                        if ($this->_errorRegistry->getErrors()) {
                            throw $this->_errorRegistry;
                        }
                    

                    $this->iban = $value;
                    $this->_rawModelDataInput['iban'] = $iban;

                    

                    return $this;
                }
            

            /**
             * Extract the value, perform validations and set the property iban
             *
             * @param array $modelData
             *
             * @throws ErrorRegistryException
             */
            protected function processIban(array $modelData): void
            {
                
                    if (!array_key_exists('iban', $modelData) && $this->iban === null) {
                        return;
                    }
                

                $value = array_key_exists('iban', $modelData) ? $modelData['iban'] : $this->iban;

                

                $this->iban = $this->validateIban($value, $modelData);
            }

            /**
             * Execute all validators for the property iban
             */
            protected function validateIban($value, array $modelData)
            {
                
                    

if ((!is_string($value) && !$value instanceof UnitEnum) ) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Generic\InvalidTypeException($value ?? null, ...array (
  0 => 'iban',
  1 => 'string',
)));
}

                
                    

if (is_string($value) && !preg_match(base64_decode('L15bQS1aXXsyfVswLTldezJ9W0EtWjAtOV17NCwzMH0kLw=='), $value)) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\String\PatternException($value ?? null, ...array (
  0 => 'iban',
  1 => '^[A-Z]{2}[0-9]{2}[A-Z0-9]{4,30}$',
)));
}

                

                return $value;
            }
        
    
        
            
                /**
                 * Get the value of bic.
                 *
                 * Bank Identifier Code / SWIFT code (SEPA markets)
                 *
                 * @return string|null
                 */
                public function getBic(): ?string
                {
                    

                    return $this->bic;
                }
            

            
                /**
                 * Set the value of bic.
                 *
                 * @param string $bic Bank Identifier Code / SWIFT code (SEPA markets)
                 *
                 * @throws ErrorRegistryException
                 *
                 * @return static
                 */
                public function setBic(
                    string $bic
                ): static {
                    if ($this->bic === $bic) {
                        return $this;
                    }

                    $value = $modelData['bic'] = $bic;

                    
                        $this->_errorRegistry = new ErrorRegistryException();
                    

                    

                    $value = $this->validateBic($value, $modelData);

                    
                        if ($this->_errorRegistry->getErrors()) {
                            throw $this->_errorRegistry;
                        }
                    

                    $this->bic = $value;
                    $this->_rawModelDataInput['bic'] = $bic;

                    

                    return $this;
                }
            

            /**
             * Extract the value, perform validations and set the property bic
             *
             * @param array $modelData
             *
             * @throws ErrorRegistryException
             */
            protected function processBic(array $modelData): void
            {
                
                    if (!array_key_exists('bic', $modelData) && $this->bic === null) {
                        return;
                    }
                

                $value = array_key_exists('bic', $modelData) ? $modelData['bic'] : $this->bic;

                

                $this->bic = $this->validateBic($value, $modelData);
            }

            /**
             * Execute all validators for the property bic
             */
            protected function validateBic($value, array $modelData)
            {
                
                    

if ((!is_string($value) && !$value instanceof UnitEnum) ) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Generic\InvalidTypeException($value ?? null, ...array (
  0 => 'bic',
  1 => 'string',
)));
}

                
                    

if (is_string($value) && !preg_match(base64_decode('L15bQS1aXXs0fVtBLVpdezJ9W0EtWjAtOV17Mn0oW0EtWjAtOV17M30pPyQv'), $value)) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\String\PatternException($value ?? null, ...array (
  0 => 'bic',
  1 => '^[A-Z]{4}[A-Z]{2}[A-Z0-9]{2}([A-Z0-9]{3})?$',
)));
}

                

                return $value;
            }
        
    
        
            
                /**
                 * Get the value of routing_number.
                 *
                 * Bank routing number for non-SEPA markets (e.g., US ABA routing number, Canadian transit/institution number)
                 *
                 * @return string|null
                 */
                public function getRoutingNumber(): ?string
                {
                    

                    return $this->routingNumber;
                }
            

            
                /**
                 * Set the value of routing_number.
                 *
                 * @param string $routingNumber Bank routing number for non-SEPA markets (e.g., US ABA routing number, Canadian transit/institution number)
                 *
                 * @throws ErrorRegistryException
                 *
                 * @return static
                 */
                public function setRoutingNumber(
                    string $routingNumber
                ): static {
                    if ($this->routingNumber === $routingNumber) {
                        return $this;
                    }

                    $value = $modelData['routing_number'] = $routingNumber;

                    
                        $this->_errorRegistry = new ErrorRegistryException();
                    

                    

                    $value = $this->validateRoutingNumber($value, $modelData);

                    
                        if ($this->_errorRegistry->getErrors()) {
                            throw $this->_errorRegistry;
                        }
                    

                    $this->routingNumber = $value;
                    $this->_rawModelDataInput['routing_number'] = $routingNumber;

                    

                    return $this;
                }
            

            /**
             * Extract the value, perform validations and set the property routingNumber
             *
             * @param array $modelData
             *
             * @throws ErrorRegistryException
             */
            protected function processRoutingNumber(array $modelData): void
            {
                
                    if (!array_key_exists('routing_number', $modelData) && $this->routingNumber === null) {
                        return;
                    }
                

                $value = array_key_exists('routing_number', $modelData) ? $modelData['routing_number'] : $this->routingNumber;

                

                $this->routingNumber = $this->validateRoutingNumber($value, $modelData);
            }

            /**
             * Execute all validators for the property routingNumber
             */
            protected function validateRoutingNumber($value, array $modelData)
            {
                
                    

if ((!is_string($value) && !$value instanceof UnitEnum) ) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Generic\InvalidTypeException($value ?? null, ...array (
  0 => 'routing_number',
  1 => 'string',
)));
}

                
                    

if (is_string($value) && mb_strlen($value) > 30) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\String\MaxLengthException($value ?? null, ...array (
  0 => 'routing_number',
  1 => 30,
)));
}

                

                return $value;
            }
        
    
        
            
                /**
                 * Get the value of account_number.
                 *
                 * Bank account number for non-SEPA markets
                 *
                 * @return string|null
                 */
                public function getAccountNumber(): ?string
                {
                    

                    return $this->accountNumber;
                }
            

            
                /**
                 * Set the value of account_number.
                 *
                 * @param string $accountNumber Bank account number for non-SEPA markets
                 *
                 * @throws ErrorRegistryException
                 *
                 * @return static
                 */
                public function setAccountNumber(
                    string $accountNumber
                ): static {
                    if ($this->accountNumber === $accountNumber) {
                        return $this;
                    }

                    $value = $modelData['account_number'] = $accountNumber;

                    
                        $this->_errorRegistry = new ErrorRegistryException();
                    

                    

                    $value = $this->validateAccountNumber($value, $modelData);

                    
                        if ($this->_errorRegistry->getErrors()) {
                            throw $this->_errorRegistry;
                        }
                    

                    $this->accountNumber = $value;
                    $this->_rawModelDataInput['account_number'] = $accountNumber;

                    

                    return $this;
                }
            

            /**
             * Extract the value, perform validations and set the property accountNumber
             *
             * @param array $modelData
             *
             * @throws ErrorRegistryException
             */
            protected function processAccountNumber(array $modelData): void
            {
                
                    if (!array_key_exists('account_number', $modelData) && $this->accountNumber === null) {
                        return;
                    }
                

                $value = array_key_exists('account_number', $modelData) ? $modelData['account_number'] : $this->accountNumber;

                

                $this->accountNumber = $this->validateAccountNumber($value, $modelData);
            }

            /**
             * Execute all validators for the property accountNumber
             */
            protected function validateAccountNumber($value, array $modelData)
            {
                
                    

if ((!is_string($value) && !$value instanceof UnitEnum) ) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Generic\InvalidTypeException($value ?? null, ...array (
  0 => 'account_number',
  1 => 'string',
)));
}

                
                    

if (is_string($value) && mb_strlen($value) > 30) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\String\MaxLengthException($value ?? null, ...array (
  0 => 'account_number',
  1 => 30,
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
    

    
        
            if (array_key_exists('account_holder', $modelData) &&
                $modelData['account_holder'] !== $this->accountHolder
            ) {
                

                $rollbackValues['accountHolder'] = $this->accountHolder;
                $this->processAccountHolder($modelData);
            }
        
    
        
            if (array_key_exists('iban', $modelData) &&
                $modelData['iban'] !== $this->iban
            ) {
                

                $rollbackValues['iban'] = $this->iban;
                $this->processIban($modelData);
            }
        
    
        
            if (array_key_exists('bic', $modelData) &&
                $modelData['bic'] !== $this->bic
            ) {
                

                $rollbackValues['bic'] = $this->bic;
                $this->processBic($modelData);
            }
        
    
        
            if (array_key_exists('routing_number', $modelData) &&
                $modelData['routing_number'] !== $this->routingNumber
            ) {
                

                $rollbackValues['routingNumber'] = $this->routingNumber;
                $this->processRoutingNumber($modelData);
            }
        
    
        
            if (array_key_exists('account_number', $modelData) &&
                $modelData['account_number'] !== $this->accountNumber
            ) {
                

                $rollbackValues['accountNumber'] = $this->accountNumber;
                $this->processAccountNumber($modelData);
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





}

// @codeCoverageIgnoreEnd
