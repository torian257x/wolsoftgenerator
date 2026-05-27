<?php

// @codingStandardsIgnoreFile
// @codeCoverageIgnoreStart

declare(strict_types = 1);


    namespace AdCP\MediaBuy;



    use PHPModelGenerator\Interfaces\BuilderInterface;

    use PHPModelGenerator\Exception\ErrorRegistryException;


/**
 * Builder class for GetMediaBuysResponse_ItemOfArrayHistorye30b0d87589f81ed4e27bbb6f1932e88
 */
class GetMediaBuysResponse_ItemOfArrayHistorye30b0d87589f81ed4e27bbb6f1932e88Builder implements BuilderInterface
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
     * Set up a new instance of GetMediaBuysResponse_ItemOfArrayHistorye30b0d87589f81ed4e27bbb6f1932e88 with fully validated properties
     */
    public function validate(): GetMediaBuysResponse_ItemOfArrayHistorye30b0d87589f81ed4e27bbb6f1932e88
    {
        $this->_array_walk_recursive_real(
            $this->_rawModelDataInput,
            function (&$property): void {
                if ($property instanceof BuilderInterface) {
                    $property = $property->getRawModelDataInput();
                }
            },
        );

        return new GetMediaBuysResponse_ItemOfArrayHistorye30b0d87589f81ed4e27bbb6f1932e88($this->_rawModelDataInput);
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
             * Get the value of revision.
             *
             * Revision number after this change was applied.
             *
             * @return int|null
             */
            public function getRevision(): ?int
            {
                return $this->_rawModelDataInput['revision'] ?? null;
            }

            /**
             * Set the value of revision.
             *
             * @param int $revision Revision number after this change was applied.
             *
             * {@link GetMediaBuysResponse_ItemOfArrayHistorye30b0d87589f81ed4e27bbb6f1932e88::processRevision}
             * 
             *
             * @return static
             */
            public function setRevision(
                int $revision
            ): static {
                if (array_key_exists('revision', $this->_rawModelDataInput)
                    && $this->_rawModelDataInput['revision'] === $revision
                ) {
                    return $this;
                }

                $value = $modelData['revision'] = $revision;

                

                

                $this->_rawModelDataInput['revision'] = $value;

                return $this;
            }
        
    
        
            /**
             * Get the value of timestamp.
             *
             * When this change occurred.
             *
             * @return string|null
             */
            public function getTimestamp(): ?string
            {
                return $this->_rawModelDataInput['timestamp'] ?? null;
            }

            /**
             * Set the value of timestamp.
             *
             * @param string $timestamp When this change occurred.
             *
             * {@link GetMediaBuysResponse_ItemOfArrayHistorye30b0d87589f81ed4e27bbb6f1932e88::processTimestamp}
             * 
             *
             * @return static
             */
            public function setTimestamp(
                string $timestamp
            ): static {
                if (array_key_exists('timestamp', $this->_rawModelDataInput)
                    && $this->_rawModelDataInput['timestamp'] === $timestamp
                ) {
                    return $this;
                }

                $value = $modelData['timestamp'] = $timestamp;

                

                

                $this->_rawModelDataInput['timestamp'] = $value;

                return $this;
            }
        
    
        
            /**
             * Get the value of actor.
             *
             * Identity of who made the change — derived from authentication context, not caller-provided. Format is seller-defined (e.g., agent URL, user email, API key label).
             *
             * @return string|null
             */
            public function getActor(): ?string
            {
                return $this->_rawModelDataInput['actor'] ?? null;
            }

            /**
             * Set the value of actor.
             *
             * @param string $actor Identity of who made the change — derived from authentication context, not caller-provided. Format is seller-defined (e.g., agent URL, user email, API key label).
             *
             * {@link GetMediaBuysResponse_ItemOfArrayHistorye30b0d87589f81ed4e27bbb6f1932e88::processActor}
             * 
             *
             * @return static
             */
            public function setActor(
                string $actor
            ): static {
                if (array_key_exists('actor', $this->_rawModelDataInput)
                    && $this->_rawModelDataInput['actor'] === $actor
                ) {
                    return $this;
                }

                $value = $modelData['actor'] = $actor;

                

                

                $this->_rawModelDataInput['actor'] = $value;

                return $this;
            }
        
    
        
            /**
             * Get the value of action.
             *
             * What happened. Standard actions: created, activated, paused, resumed, canceled, rejected, completed, updated_budget, updated_dates, updated_packages, package_canceled, package_paused, package_resumed. Sellers MAY use additional platform-specific actions (e.g., creative_approved, targeting_updated) — use ext on the history entry for structured metadata about custom actions.
             *
             * @return string|null
             */
            public function getAction(): ?string
            {
                return $this->_rawModelDataInput['action'] ?? null;
            }

            /**
             * Set the value of action.
             *
             * @param string $action What happened. Standard actions: created, activated, paused, resumed, canceled, rejected, completed, updated_budget, updated_dates, updated_packages, package_canceled, package_paused, package_resumed. Sellers MAY use additional platform-specific actions (e.g., creative_approved, targeting_updated) — use ext on the history entry for structured metadata about custom actions.
             *
             * {@link GetMediaBuysResponse_ItemOfArrayHistorye30b0d87589f81ed4e27bbb6f1932e88::processAction}
             * 
             *
             * @return static
             */
            public function setAction(
                string $action
            ): static {
                if (array_key_exists('action', $this->_rawModelDataInput)
                    && $this->_rawModelDataInput['action'] === $action
                ) {
                    return $this;
                }

                $value = $modelData['action'] = $action;

                

                

                $this->_rawModelDataInput['action'] = $value;

                return $this;
            }
        
    
        
            /**
             * Get the value of summary.
             *
             * Human-readable summary of the change (e.g., 'Budget increased from $5,000 to $7,500 on pkg_abc').
             *
             * @return string|null
             */
            public function getSummary(): ?string
            {
                return $this->_rawModelDataInput['summary'] ?? null;
            }

            /**
             * Set the value of summary.
             *
             * @param string $summary Human-readable summary of the change (e.g., 'Budget increased from $5,000 to $7,500 on pkg_abc').
             *
             * {@link GetMediaBuysResponse_ItemOfArrayHistorye30b0d87589f81ed4e27bbb6f1932e88::processSummary}
             * 
             *
             * @return static
             */
            public function setSummary(
                string $summary
            ): static {
                if (array_key_exists('summary', $this->_rawModelDataInput)
                    && $this->_rawModelDataInput['summary'] === $summary
                ) {
                    return $this;
                }

                $value = $modelData['summary'] = $summary;

                

                

                $this->_rawModelDataInput['summary'] = $value;

                return $this;
            }
        
    
        
            /**
             * Get the value of package_id.
             *
             * Package affected, when the change targeted a specific package.
             *
             * @return string|null
             */
            public function getPackageId(): ?string
            {
                return $this->_rawModelDataInput['package_id'] ?? null;
            }

            /**
             * Set the value of package_id.
             *
             * @param string $packageId Package affected, when the change targeted a specific package.
             *
             * {@link GetMediaBuysResponse_ItemOfArrayHistorye30b0d87589f81ed4e27bbb6f1932e88::processPackageId}
             * 
             *
             * @return static
             */
            public function setPackageId(
                string $packageId
            ): static {
                if (array_key_exists('package_id', $this->_rawModelDataInput)
                    && $this->_rawModelDataInput['package_id'] === $packageId
                ) {
                    return $this;
                }

                $value = $modelData['package_id'] = $packageId;

                

                

                $this->_rawModelDataInput['package_id'] = $value;

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
             * {@link GetMediaBuysResponse_ItemOfArrayHistorye30b0d87589f81ed4e27bbb6f1932e88::processExt}
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
