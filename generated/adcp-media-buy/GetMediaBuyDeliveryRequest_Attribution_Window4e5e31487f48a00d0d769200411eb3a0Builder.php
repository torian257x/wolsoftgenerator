<?php

// @codingStandardsIgnoreFile
// @codeCoverageIgnoreStart

declare(strict_types = 1);


    namespace AdCP\MediaBuy;



    use PHPModelGenerator\Interfaces\BuilderInterface;

    use PHPModelGenerator\Exception\ErrorRegistryException;

    use AdCP\MediaBuy\Enums\AttributionModel;


/**
 * Builder class for GetMediaBuyDeliveryRequest_Attribution_Window4e5e31487f48a00d0d769200411eb3a0
 */
class GetMediaBuyDeliveryRequest_Attribution_Window4e5e31487f48a00d0d769200411eb3a0Builder implements BuilderInterface
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
     * Set up a new instance of GetMediaBuyDeliveryRequest_Attribution_Window4e5e31487f48a00d0d769200411eb3a0 with fully validated properties
     */
    public function validate(): GetMediaBuyDeliveryRequest_Attribution_Window4e5e31487f48a00d0d769200411eb3a0
    {
        $this->_array_walk_recursive_real(
            $this->_rawModelDataInput,
            function (&$property): void {
                if ($property instanceof BuilderInterface) {
                    $property = $property->getRawModelDataInput();
                }
            },
        );

        return new GetMediaBuyDeliveryRequest_Attribution_Window4e5e31487f48a00d0d769200411eb3a0($this->_rawModelDataInput);
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
             * Get the value of post_click.
             *
             * Post-click attribution window to apply.
             *
             * @return GetMediaBuyDeliveryRequest_Duration|GetMediaBuyDeliveryRequest_DurationBuilder|array|null
             */
            public function getPostClick(): mixed
            {
                return $this->_rawModelDataInput['post_click'] ?? null;
            }

            /**
             * Set the value of post_click.
             *
             * @param GetMediaBuyDeliveryRequest_Duration|GetMediaBuyDeliveryRequest_DurationBuilder|array $postClick Post-click attribution window to apply.
             *
             * {@link GetMediaBuyDeliveryRequest_Attribution_Window4e5e31487f48a00d0d769200411eb3a0::processPostClick}
             * 
             *
             * @return static
             */
            public function setPostClick(
                mixed $postClick
            ): static {
                if (array_key_exists('post_click', $this->_rawModelDataInput)
                    && $this->_rawModelDataInput['post_click'] === $postClick
                ) {
                    return $this;
                }

                $value = $modelData['post_click'] = $postClick;

                

                

                $this->_rawModelDataInput['post_click'] = $value;

                return $this;
            }
        
    
        
            /**
             * Get the value of post_view.
             *
             * Post-view attribution window to apply.
             *
             * @return GetMediaBuyDeliveryRequest_Duration|GetMediaBuyDeliveryRequest_DurationBuilder|array|null
             */
            public function getPostView(): mixed
            {
                return $this->_rawModelDataInput['post_view'] ?? null;
            }

            /**
             * Set the value of post_view.
             *
             * @param GetMediaBuyDeliveryRequest_Duration|GetMediaBuyDeliveryRequest_DurationBuilder|array $postView Post-view attribution window to apply.
             *
             * {@link GetMediaBuyDeliveryRequest_Attribution_Window4e5e31487f48a00d0d769200411eb3a0::processPostView}
             * 
             *
             * @return static
             */
            public function setPostView(
                mixed $postView
            ): static {
                if (array_key_exists('post_view', $this->_rawModelDataInput)
                    && $this->_rawModelDataInput['post_view'] === $postView
                ) {
                    return $this;
                }

                $value = $modelData['post_view'] = $postView;

                

                

                $this->_rawModelDataInput['post_view'] = $value;

                return $this;
            }
        
    
        
            /**
             * Get the value of model.
             *
             * Attribution model to use. When omitted, the seller applies their default model.
             *
             * @return string|AttributionModel|null
             */
            public function getModel(): string | AttributionModel | null
            {
                return $this->_rawModelDataInput['model'] ?? null;
            }

            /**
             * Set the value of model.
             *
             * @param string|AttributionModel|null $model Attribution model to use. When omitted, the seller applies their default model.
             *
             * {@link GetMediaBuyDeliveryRequest_Attribution_Window4e5e31487f48a00d0d769200411eb3a0::processModel}
             * 
             *
             * @return static
             */
            public function setModel(
                string | AttributionModel | null $model
            ): static {
                if (array_key_exists('model', $this->_rawModelDataInput)
                    && $this->_rawModelDataInput['model'] === $model
                ) {
                    return $this;
                }

                $value = $modelData['model'] = $model;

                

                

                $this->_rawModelDataInput['model'] = $value;

                return $this;
            }
        
    
}

// @codeCoverageIgnoreEnd
