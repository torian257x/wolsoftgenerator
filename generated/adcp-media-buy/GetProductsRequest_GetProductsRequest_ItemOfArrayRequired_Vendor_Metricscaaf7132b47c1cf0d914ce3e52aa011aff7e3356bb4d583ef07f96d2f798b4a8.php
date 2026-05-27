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
 * Class GetProductsRequest_GetProductsRequest_ItemOfArrayRequired_Vendor_Metricscaaf7132b47c1cf0d914ce3e52aa011aff7e3356bb4d583ef07f96d2f798b4a8
 * @package AdCP\MediaBuy 
 *

 * This is an auto-implemented class implemented by the php-json-schema-model-generator.
 * If you need to implement something in this class use inheritance. Else you will lose your changes if the classes
 * are re-generated.
 */

#[JsonPointer('/properties/filters/properties/required_vendor_metrics/items/anyOf/0')]

class GetProductsRequest_GetProductsRequest_ItemOfArrayRequired_Vendor_Metricscaaf7132b47c1cf0d914ce3e52aa011aff7e3356bb4d583ef07f96d2f798b4a8 implements JSONModelInterface, JsonSerializable, SerializationInterface
{
    use SerializableTrait;

    
        
            #[JsonPointer('/properties/filters/properties/required_vendor_metrics/items/anyOf/0/properties/vendor')]
        
            #[SchemaName('vendor')]
        
            #[Required]
        
        /** @var mixed */
        protected $vendor;
    
        
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
     * GetProductsRequest_GetProductsRequest_ItemOfArrayRequired_Vendor_Metricscaaf7132b47c1cf0d914ce3e52aa011aff7e3356bb4d583ef07f96d2f798b4a8 constructor.
     *
     * @param array $rawModelDataInput
     *
     * @throws ErrorRegistryException
     */
    public function __construct(array $rawModelDataInput = [])
    {
        
            $this->_errorRegistry = new ErrorRegistryException();
        

        

        

        
            
                $this->processVendor($rawModelDataInput);
            
        
            
        

        
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
                 * Get the value of vendor.
                 *
                 *
                 * @return mixed
                 */
                public function getVendor(): mixed
                {
                    

                    return $this->vendor;
                }
            

            
                /**
                 * Set the value of vendor.
                 *
                 * @param mixed $vendor
                 *
                 * @throws ErrorRegistryException
                 *
                 * @return static
                 */
                public function setVendor(
                    mixed $vendor
                ): static {
                    if ($this->vendor === $vendor) {
                        return $this;
                    }

                    $value = $modelData['vendor'] = $vendor;

                    
                        $this->_errorRegistry = new ErrorRegistryException();
                    

                    

                    $value = $this->validateVendor($value, $modelData);

                    
                        if ($this->_errorRegistry->getErrors()) {
                            throw $this->_errorRegistry;
                        }
                    

                    $this->vendor = $value;
                    $this->_rawModelDataInput['vendor'] = $vendor;

                    

                    return $this;
                }
            

            /**
             * Extract the value, perform validations and set the property vendor
             *
             * @param array $modelData
             *
             * @throws ErrorRegistryException
             */
            protected function processVendor(array $modelData): void
            {
                

                $value = array_key_exists('vendor', $modelData) ? $modelData['vendor'] : $this->vendor;

                

                $this->vendor = $this->validateVendor($value, $modelData);
            }

            /**
             * Execute all validators for the property vendor
             */
            protected function validateVendor($value, array $modelData)
            {
                
                    

if (!array_key_exists('vendor', $modelData)) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Object\RequiredValueException($value ?? null, ...array (
  0 => 'vendor',
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

    

    
        
            if (array_key_exists('vendor', $modelData) &&
                $modelData['vendor'] !== $this->vendor
            ) {
                

                $rollbackValues['vendor'] = $this->vendor;
                $this->processVendor($modelData);
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
