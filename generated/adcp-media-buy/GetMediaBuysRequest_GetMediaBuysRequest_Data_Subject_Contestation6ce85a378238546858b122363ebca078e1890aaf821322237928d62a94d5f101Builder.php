<?php

// @codingStandardsIgnoreFile
// @codeCoverageIgnoreStart

declare(strict_types = 1);


    namespace AdCP\MediaBuy;



    use PHPModelGenerator\Interfaces\BuilderInterface;

    use PHPModelGenerator\Exception\ErrorRegistryException;


/**
 * Builder class for GetMediaBuysRequest_GetMediaBuysRequest_Data_Subject_Contestation6ce85a378238546858b122363ebca078e1890aaf821322237928d62a94d5f101
 */
class GetMediaBuysRequest_GetMediaBuysRequest_Data_Subject_Contestation6ce85a378238546858b122363ebca078e1890aaf821322237928d62a94d5f101Builder implements BuilderInterface
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
     * Set up a new instance of GetMediaBuysRequest_GetMediaBuysRequest_Data_Subject_Contestation6ce85a378238546858b122363ebca078e1890aaf821322237928d62a94d5f101 with fully validated properties
     */
    public function validate(): GetMediaBuysRequest_GetMediaBuysRequest_Data_Subject_Contestation6ce85a378238546858b122363ebca078e1890aaf821322237928d62a94d5f101
    {
        $this->_array_walk_recursive_real(
            $this->_rawModelDataInput,
            function (&$property): void {
                if ($property instanceof BuilderInterface) {
                    $property = $property->getRawModelDataInput();
                }
            },
        );

        return new GetMediaBuysRequest_GetMediaBuysRequest_Data_Subject_Contestation6ce85a378238546858b122363ebca078e1890aaf821322237928d62a94d5f101($this->_rawModelDataInput);
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
             * Get the value of email.
             *
             * 
             *
             * @return mixed
             */
            public function getEmail(): mixed
            {
                return $this->_rawModelDataInput['email'] ?? null;
            }

            /**
             * Set the value of email.
             *
             * @param mixed $email
             *
             * {@link GetMediaBuysRequest_GetMediaBuysRequest_Data_Subject_Contestation6ce85a378238546858b122363ebca078e1890aaf821322237928d62a94d5f101::processEmail}
             * 
             *
             * @return static
             */
            public function setEmail(
                mixed $email
            ): static {
                if (array_key_exists('email', $this->_rawModelDataInput)
                    && $this->_rawModelDataInput['email'] === $email
                ) {
                    return $this;
                }

                $value = $modelData['email'] = $email;

                

                

                $this->_rawModelDataInput['email'] = $value;

                return $this;
            }
        
    
}

// @codeCoverageIgnoreEnd
