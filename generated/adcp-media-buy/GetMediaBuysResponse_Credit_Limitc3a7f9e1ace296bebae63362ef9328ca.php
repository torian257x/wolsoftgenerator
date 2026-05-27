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
 * Class GetMediaBuysResponse_Credit_Limitc3a7f9e1ace296bebae63362ef9328ca
 * @package AdCP\MediaBuy 
 *
 * Maximum outstanding balance allowed
 *
 * This is an auto-implemented class implemented by the php-json-schema-model-generator.
 * If you need to implement something in this class use inheritance. Else you will lose your changes if the classes
 * are re-generated.
 */

#[JsonPointer('/properties/media_buys/items/properties/account/properties/credit_limit')]

class GetMediaBuysResponse_Credit_Limitc3a7f9e1ace296bebae63362ef9328ca implements JSONModelInterface, JsonSerializable, SerializationInterface
{
    use SerializableTrait;

    
        
            #[JsonPointer('/properties/media_buys/items/properties/account/properties/credit_limit/properties/amount')]
        
            #[SchemaName('amount')]
        
            #[Required]
        
        /** @var float */
        protected $amount;
    
        
            #[JsonPointer('/properties/media_buys/items/properties/account/properties/credit_limit/properties/currency')]
        
            #[SchemaName('currency')]
        
            #[Required]
        
        /** @var string */
        protected $currency;
    
        
            #[Internal]
        
        /** @var array Values which might be skipped for serialization if not provided */
        private $_skipNotProvidedPropertiesMap = array (
);
    
    #[Internal]
    /** @var array */
    protected $_rawModelDataInput = [];

    
        #[Internal]
        /** @var ErrorRegistryException Collect all validation errors */
        protected $_errorRegistry;
    

    /**
     * GetMediaBuysResponse_Credit_Limitc3a7f9e1ace296bebae63362ef9328ca constructor.
     *
     * @param array $rawModelDataInput
     *
     * @throws ErrorRegistryException
     */
    public function __construct(array $rawModelDataInput = [])
    {
        
            $this->_errorRegistry = new ErrorRegistryException();
        

        

        

        
            
                $this->processAmount($rawModelDataInput);
            
        
            
                $this->processCurrency($rawModelDataInput);
            
        
            
        

        
            if (count($this->_errorRegistry->getErrors())) {
                throw $this->_errorRegistry;
            }
        

        $this->_rawModelDataInput = $rawModelDataInput;

        
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
                 * Get the value of amount.
                 *
                 *
                 * @return float
                 */
                public function getAmount(): float
                {
                    

                    return $this->amount;
                }
            

            
                /**
                 * Set the value of amount.
                 *
                 * @param float $amount
                 *
                 * @throws ErrorRegistryException
                 *
                 * @return static
                 */
                public function setAmount(
                    float $amount
                ): static {
                    if ($this->amount === $amount) {
                        return $this;
                    }

                    $value = $modelData['amount'] = $amount;

                    
                        $this->_errorRegistry = new ErrorRegistryException();
                    

                    

                    $value = $this->validateAmount($value, $modelData);

                    
                        if ($this->_errorRegistry->getErrors()) {
                            throw $this->_errorRegistry;
                        }
                    

                    $this->amount = $value;
                    $this->_rawModelDataInput['amount'] = $amount;

                    

                    return $this;
                }
            

            /**
             * Extract the value, perform validations and set the property amount
             *
             * @param array $modelData
             *
             * @throws ErrorRegistryException
             */
            protected function processAmount(array $modelData): void
            {
                

                $value = array_key_exists('amount', $modelData) ? $modelData['amount'] : $this->amount;

                $value = is_int($value) ? (float) $value : $value;

                $this->amount = $this->validateAmount($value, $modelData);
            }

            /**
             * Execute all validators for the property amount
             */
            protected function validateAmount($value, array $modelData)
            {
                
                    

if (!array_key_exists('amount', $modelData)) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Object\RequiredValueException($value ?? null, ...array (
  0 => 'amount',
)));
}

                
                    

if ((!is_float($value) && !$value instanceof UnitEnum) ) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Generic\InvalidTypeException($value ?? null, ...array (
  0 => 'amount',
  1 => 'float',
)));
}

                
                    

if (is_float($value) && $value < 0) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Number\MinimumException($value ?? null, ...array (
  0 => 'amount',
  1 => 0,
)));
}

                

                return $value;
            }
        
    
        
            
                /**
                 * Get the value of currency.
                 *
                 *
                 * @return string
                 */
                public function getCurrency(): string
                {
                    

                    return $this->currency;
                }
            

            
                /**
                 * Set the value of currency.
                 *
                 * @param string $currency
                 *
                 * @throws ErrorRegistryException
                 *
                 * @return static
                 */
                public function setCurrency(
                    string $currency
                ): static {
                    if ($this->currency === $currency) {
                        return $this;
                    }

                    $value = $modelData['currency'] = $currency;

                    
                        $this->_errorRegistry = new ErrorRegistryException();
                    

                    

                    $value = $this->validateCurrency($value, $modelData);

                    
                        if ($this->_errorRegistry->getErrors()) {
                            throw $this->_errorRegistry;
                        }
                    

                    $this->currency = $value;
                    $this->_rawModelDataInput['currency'] = $currency;

                    

                    return $this;
                }
            

            /**
             * Extract the value, perform validations and set the property currency
             *
             * @param array $modelData
             *
             * @throws ErrorRegistryException
             */
            protected function processCurrency(array $modelData): void
            {
                

                $value = array_key_exists('currency', $modelData) ? $modelData['currency'] : $this->currency;

                

                $this->currency = $this->validateCurrency($value, $modelData);
            }

            /**
             * Execute all validators for the property currency
             */
            protected function validateCurrency($value, array $modelData)
            {
                
                    

if (!array_key_exists('currency', $modelData)) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Object\RequiredValueException($value ?? null, ...array (
  0 => 'currency',
)));
}

                
                    

if ((!is_string($value) && !$value instanceof UnitEnum) ) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Generic\InvalidTypeException($value ?? null, ...array (
  0 => 'currency',
  1 => 'string',
)));
}

                
                    

if (is_string($value) && !preg_match(base64_decode('L15bQS1aXXszfSQv'), $value)) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\String\PatternException($value ?? null, ...array (
  0 => 'currency',
  1 => '^[A-Z]{3}$',
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

    

    
        
            if (array_key_exists('amount', $modelData) &&
                $modelData['amount'] !== $this->amount
            ) {
                

                $rollbackValues['amount'] = $this->amount;
                $this->processAmount($modelData);
            }
        
    
        
            if (array_key_exists('currency', $modelData) &&
                $modelData['currency'] !== $this->currency
            ) {
                

                $rollbackValues['currency'] = $this->currency;
                $this->processCurrency($modelData);
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
