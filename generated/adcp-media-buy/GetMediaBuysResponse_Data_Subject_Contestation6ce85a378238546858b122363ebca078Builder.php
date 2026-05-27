<?php

// @codingStandardsIgnoreFile
// @codeCoverageIgnoreStart

declare(strict_types = 1);


    namespace AdCP\MediaBuy;



    use PHPModelGenerator\Interfaces\BuilderInterface;

    use PHPModelGenerator\Exception\ErrorRegistryException;


/**
 * Builder class for GetMediaBuysResponse_Data_Subject_Contestation6ce85a378238546858b122363ebca078
 */
class GetMediaBuysResponse_Data_Subject_Contestation6ce85a378238546858b122363ebca078Builder implements BuilderInterface
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
     * Set up a new instance of GetMediaBuysResponse_Data_Subject_Contestation6ce85a378238546858b122363ebca078 with fully validated properties
     */
    public function validate(): GetMediaBuysResponse_Data_Subject_Contestation6ce85a378238546858b122363ebca078
    {
        $this->_array_walk_recursive_real(
            $this->_rawModelDataInput,
            function (&$property): void {
                if ($property instanceof BuilderInterface) {
                    $property = $property->getRawModelDataInput();
                }
            },
        );

        return new GetMediaBuysResponse_Data_Subject_Contestation6ce85a378238546858b122363ebca078($this->_rawModelDataInput);
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
             * Get the value of url.
             *
             * 
             *
             * @return string|null
             */
            public function getUrl(): ?string
            {
                return $this->_rawModelDataInput['url'] ?? null;
            }

            /**
             * Set the value of url.
             *
             * @param string $url
             *
             * {@link GetMediaBuysResponse_Data_Subject_Contestation6ce85a378238546858b122363ebca078::processUrl}
             * 
             *
             * @return static
             */
            public function setUrl(
                string $url
            ): static {
                if (array_key_exists('url', $this->_rawModelDataInput)
                    && $this->_rawModelDataInput['url'] === $url
                ) {
                    return $this;
                }

                $value = $modelData['url'] = $url;

                

                

                $this->_rawModelDataInput['url'] = $value;

                return $this;
            }
        
    
        
            /**
             * Get the value of email.
             *
             * 
             *
             * @return string|null
             */
            public function getEmail(): ?string
            {
                return $this->_rawModelDataInput['email'] ?? null;
            }

            /**
             * Set the value of email.
             *
             * @param string $email
             *
             * {@link GetMediaBuysResponse_Data_Subject_Contestation6ce85a378238546858b122363ebca078::processEmail}
             * 
             *
             * @return static
             */
            public function setEmail(
                string $email
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
        
    
        
            /**
             * Get the value of languages.
             *
             * 
             *
             * @return string[]|null
             */
            public function getLanguages(): ?array
            {
                return $this->_rawModelDataInput['languages'] ?? null;
            }

            /**
             * Set the value of languages.
             *
             * @param string[] $languages
             *
             * {@link GetMediaBuysResponse_Data_Subject_Contestation6ce85a378238546858b122363ebca078::processLanguages}
             * 
             *
             * @return static
             */
            public function setLanguages(
                array $languages
            ): static {
                if (array_key_exists('languages', $this->_rawModelDataInput)
                    && $this->_rawModelDataInput['languages'] === $languages
                ) {
                    return $this;
                }

                $value = $modelData['languages'] = $languages;

                

                

                $this->_rawModelDataInput['languages'] = $value;

                return $this;
            }
        
    
}

// @codeCoverageIgnoreEnd
