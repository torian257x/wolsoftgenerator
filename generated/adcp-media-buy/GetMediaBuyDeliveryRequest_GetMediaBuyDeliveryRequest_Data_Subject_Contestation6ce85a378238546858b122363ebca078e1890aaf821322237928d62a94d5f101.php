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
 * Class GetMediaBuyDeliveryRequest_GetMediaBuyDeliveryRequest_Data_Subject_Contestation6ce85a378238546858b122363ebca078e1890aaf821322237928d62a94d5f101
 * @package AdCP\MediaBuy 
 *

 * This is an auto-implemented class implemented by the php-json-schema-model-generator.
 * If you need to implement something in this class use inheritance. Else you will lose your changes if the classes
 * are re-generated.
 */

#[JsonPointer('/properties/account/oneOf/1/properties/brand/properties/data_subject_contestation/anyOf/1')]

class GetMediaBuyDeliveryRequest_GetMediaBuyDeliveryRequest_Data_Subject_Contestation6ce85a378238546858b122363ebca078e1890aaf821322237928d62a94d5f101 implements JSONModelInterface, JsonSerializable, SerializationInterface
{
    use SerializableTrait;

    
        
            #[JsonPointer('/properties/account/oneOf/1/properties/brand/properties/data_subject_contestation/anyOf/1/properties/email')]
        
            #[SchemaName('email')]
        
            #[Required]
        
        /** @var mixed */
        protected $email;
    
        
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
     * GetMediaBuyDeliveryRequest_GetMediaBuyDeliveryRequest_Data_Subject_Contestation6ce85a378238546858b122363ebca078e1890aaf821322237928d62a94d5f101 constructor.
     *
     * @param array $rawModelDataInput
     *
     * @throws ErrorRegistryException
     */
    public function __construct(array $rawModelDataInput = [])
    {
        
            $this->_errorRegistry = new ErrorRegistryException();
        

        

        

        
            
                $this->processEmail($rawModelDataInput);
            
        
            
        

        
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
                 * Get the value of email.
                 *
                 *
                 * @return mixed
                 */
                public function getEmail(): mixed
                {
                    

                    return $this->email;
                }
            

            
                /**
                 * Set the value of email.
                 *
                 * @param mixed $email
                 *
                 * @throws ErrorRegistryException
                 *
                 * @return static
                 */
                public function setEmail(
                    mixed $email
                ): static {
                    if ($this->email === $email) {
                        return $this;
                    }

                    $value = $modelData['email'] = $email;

                    
                        $this->_errorRegistry = new ErrorRegistryException();
                    

                    

                    $value = $this->validateEmail($value, $modelData);

                    
                        if ($this->_errorRegistry->getErrors()) {
                            throw $this->_errorRegistry;
                        }
                    

                    $this->email = $value;
                    $this->_rawModelDataInput['email'] = $email;

                    

                    return $this;
                }
            

            /**
             * Extract the value, perform validations and set the property email
             *
             * @param array $modelData
             *
             * @throws ErrorRegistryException
             */
            protected function processEmail(array $modelData): void
            {
                

                $value = array_key_exists('email', $modelData) ? $modelData['email'] : $this->email;

                

                $this->email = $this->validateEmail($value, $modelData);
            }

            /**
             * Execute all validators for the property email
             */
            protected function validateEmail($value, array $modelData)
            {
                
                    

if (!array_key_exists('email', $modelData)) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Object\RequiredValueException($value ?? null, ...array (
  0 => 'email',
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

    

    
        
            if (array_key_exists('email', $modelData) &&
                $modelData['email'] !== $this->email
            ) {
                

                $rollbackValues['email'] = $this->email;
                $this->processEmail($modelData);
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
