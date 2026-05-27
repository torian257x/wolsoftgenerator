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
 * Class GetMediaBuysResponse_ItemOfArrayHistorye30b0d87589f81ed4e27bbb6f1932e88
 * @package AdCP\MediaBuy 
 *

 * This is an auto-implemented class implemented by the php-json-schema-model-generator.
 * If you need to implement something in this class use inheritance. Else you will lose your changes if the classes
 * are re-generated.
 */

#[JsonPointer('/properties/media_buys/items/properties/history/items')]

class GetMediaBuysResponse_ItemOfArrayHistorye30b0d87589f81ed4e27bbb6f1932e88 implements JSONModelInterface, JsonSerializable, SerializationInterface
{
    use SerializableTrait;

    
        
            #[JsonPointer('/properties/media_buys/items/properties/history/items/properties/revision')]
        
            #[SchemaName('revision')]
        
            #[Required]
        
        /** @var int Revision number after this change was applied. */
        protected $revision;
    
        
            #[JsonPointer('/properties/media_buys/items/properties/history/items/properties/timestamp')]
        
            #[SchemaName('timestamp')]
        
            #[Required]
        
        /** @var string When this change occurred. */
        protected $timestamp;
    
        
            #[JsonPointer('/properties/media_buys/items/properties/history/items/properties/actor')]
        
            #[SchemaName('actor')]
        
        /** @var string|null Identity of who made the change — derived from authentication context, not caller-provided. Format is seller-defined (e.g., agent URL, user email, API key label). */
        protected $actor;
    
        
            #[JsonPointer('/properties/media_buys/items/properties/history/items/properties/action')]
        
            #[SchemaName('action')]
        
            #[Required]
        
        /** @var string What happened. Standard actions: created, activated, paused, resumed, canceled, rejected, completed, updated_budget, updated_dates, updated_packages, package_canceled, package_paused, package_resumed. Sellers MAY use additional platform-specific actions (e.g., creative_approved, targeting_updated) — use ext on the history entry for structured metadata about custom actions. */
        protected $action;
    
        
            #[JsonPointer('/properties/media_buys/items/properties/history/items/properties/summary')]
        
            #[SchemaName('summary')]
        
        /** @var string|null Human-readable summary of the change (e.g., 'Budget increased from $5,000 to $7,500 on pkg_abc'). */
        protected $summary;
    
        
            #[JsonPointer('/properties/media_buys/items/properties/history/items/properties/package_id')]
        
            #[SchemaName('package_id')]
        
        /** @var string|null Package affected, when the change targeted a specific package. */
        protected $packageId;
    
        
            #[JsonPointer('/properties/media_buys/items/properties/history/items/properties/ext')]
        
            #[SchemaName('ext')]
        
        /** @var GetMediaBuysResponse_ExtensionObject|null Extension object for platform-specific, vendor-namespaced parameters. Extensions are always optional and must be namespaced under a vendor/platform key (e.g., ext.gam, ext.roku). Used for custom capabilities, partner-specific configuration, and features being proposed for standardization. */
        protected $ext;
    
        
            #[Internal]
        
        /** @var array Collect all additional properties provided to the schema */
        private $_additionalProperties = array (
);
    
        
            #[Internal]
        
        /** @var array Values which might be skipped for serialization if not provided */
        private $_skipNotProvidedPropertiesMap = array (
  2 => 'actor',
  4 => 'summary',
  5 => 'package_id',
  6 => 'ext',
);
    
    #[Internal]
    /** @var array */
    protected $_rawModelDataInput = [];

    
        #[Internal]
        /** @var ErrorRegistryException Collect all validation errors */
        protected $_errorRegistry;
    

    /**
     * GetMediaBuysResponse_ItemOfArrayHistorye30b0d87589f81ed4e27bbb6f1932e88 constructor.
     *
     * @param array $rawModelDataInput
     *
     * @throws ErrorRegistryException
     */
    public function __construct(array $rawModelDataInput = [])
    {
        
            $this->_errorRegistry = new ErrorRegistryException();
        

        

        
            $this->executeBaseValidators($rawModelDataInput);
        

        
            
                $this->processRevision($rawModelDataInput);
            
        
            
                $this->processTimestamp($rawModelDataInput);
            
        
            
                $this->processActor($rawModelDataInput);
            
        
            
                $this->processAction($rawModelDataInput);
            
        
            
                $this->processSummary($rawModelDataInput);
            
        
            
                $this->processPackageId($rawModelDataInput);
            
        
            
                $this->processExt($rawModelDataInput);
            
        
            
        
            
        

        
            if (count($this->_errorRegistry->getErrors())) {
                throw $this->_errorRegistry;
            }
        

        $this->_rawModelDataInput = $rawModelDataInput;

        
    }

    
        protected function executeBaseValidators(array &$modelData): void
        {
            $value = &$modelData;

            
                

if ((function () use ($value) {
    foreach (array_diff(array_keys($value), array (
   'revision',
   'timestamp',
   'actor',
   'action',
   'summary',
   'package_id',
   'ext',
)) as $propertyKey) {
        

        $this->_additionalProperties[$propertyKey] = $value[$propertyKey];
    }

    return false;
})()) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Object\InvalidAdditionalPropertiesException($value ?? null, ...array (
  0 => 'GetMediaBuysResponse_ItemOfArrayHistorye30b0d87589f81ed4e27bbb6f1932e88',
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
                 * Get the value of revision.
                 *
                 * Revision number after this change was applied.
                 *
                 * @return int
                 */
                public function getRevision(): int
                {
                    

                    return $this->revision;
                }
            

            
                /**
                 * Set the value of revision.
                 *
                 * @param int $revision Revision number after this change was applied.
                 *
                 * @throws ErrorRegistryException
                 *
                 * @return static
                 */
                public function setRevision(
                    int $revision
                ): static {
                    if ($this->revision === $revision) {
                        return $this;
                    }

                    $value = $modelData['revision'] = $revision;

                    
                        $this->_errorRegistry = new ErrorRegistryException();
                    

                    

                    $value = $this->validateRevision($value, $modelData);

                    
                        if ($this->_errorRegistry->getErrors()) {
                            throw $this->_errorRegistry;
                        }
                    

                    $this->revision = $value;
                    $this->_rawModelDataInput['revision'] = $revision;

                    

                    return $this;
                }
            

            /**
             * Extract the value, perform validations and set the property revision
             *
             * @param array $modelData
             *
             * @throws ErrorRegistryException
             */
            protected function processRevision(array $modelData): void
            {
                

                $value = array_key_exists('revision', $modelData) ? $modelData['revision'] : $this->revision;

                

                $this->revision = $this->validateRevision($value, $modelData);
            }

            /**
             * Execute all validators for the property revision
             */
            protected function validateRevision($value, array $modelData)
            {
                
                    

if (!array_key_exists('revision', $modelData)) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Object\RequiredValueException($value ?? null, ...array (
  0 => 'revision',
)));
}

                
                    

if ((!is_int($value) && !$value instanceof UnitEnum) ) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Generic\InvalidTypeException($value ?? null, ...array (
  0 => 'revision',
  1 => 'int',
)));
}

                
                    

if (is_int($value) && $value < 1) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Number\MinimumException($value ?? null, ...array (
  0 => 'revision',
  1 => 1,
)));
}

                

                return $value;
            }
        
    
        
            
                /**
                 * Get the value of timestamp.
                 *
                 * When this change occurred.
                 *
                 * @return string
                 */
                public function getTimestamp(): string
                {
                    

                    return $this->timestamp;
                }
            

            
                /**
                 * Set the value of timestamp.
                 *
                 * @param string $timestamp When this change occurred.
                 *
                 * @throws ErrorRegistryException
                 *
                 * @return static
                 */
                public function setTimestamp(
                    string $timestamp
                ): static {
                    if ($this->timestamp === $timestamp) {
                        return $this;
                    }

                    $value = $modelData['timestamp'] = $timestamp;

                    
                        $this->_errorRegistry = new ErrorRegistryException();
                    

                    

                    $value = $this->validateTimestamp($value, $modelData);

                    
                        if ($this->_errorRegistry->getErrors()) {
                            throw $this->_errorRegistry;
                        }
                    

                    $this->timestamp = $value;
                    $this->_rawModelDataInput['timestamp'] = $timestamp;

                    

                    return $this;
                }
            

            /**
             * Extract the value, perform validations and set the property timestamp
             *
             * @param array $modelData
             *
             * @throws ErrorRegistryException
             */
            protected function processTimestamp(array $modelData): void
            {
                

                $value = array_key_exists('timestamp', $modelData) ? $modelData['timestamp'] : $this->timestamp;

                

                $this->timestamp = $this->validateTimestamp($value, $modelData);
            }

            /**
             * Execute all validators for the property timestamp
             */
            protected function validateTimestamp($value, array $modelData)
            {
                
                    

if (!array_key_exists('timestamp', $modelData)) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Object\RequiredValueException($value ?? null, ...array (
  0 => 'timestamp',
)));
}

                
                    

if ((!is_string($value) && !$value instanceof UnitEnum) ) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Generic\InvalidTypeException($value ?? null, ...array (
  0 => 'timestamp',
  1 => 'string',
)));
}

                
                    

if (!\PHPModelGenerator\Format\FormatValidatorFromRegEx::validate($value, '/^\\d{4}-\\d{2}-\\d{2}[Tt]\\d{2}:\\d{2}:\\d{2}(\\.\\d+)?([Zz]|[+\\-]\\d{2}:\\d{2})$/')) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\String\FormatException($value ?? null, ...array (
  0 => 'timestamp',
  1 => 'date-time',
)));
}

                

                return $value;
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
                    

                    return $this->actor;
                }
            

            
                /**
                 * Set the value of actor.
                 *
                 * @param string $actor Identity of who made the change — derived from authentication context, not caller-provided. Format is seller-defined (e.g., agent URL, user email, API key label).
                 *
                 * @throws ErrorRegistryException
                 *
                 * @return static
                 */
                public function setActor(
                    string $actor
                ): static {
                    if ($this->actor === $actor) {
                        return $this;
                    }

                    $value = $modelData['actor'] = $actor;

                    
                        $this->_errorRegistry = new ErrorRegistryException();
                    

                    

                    $value = $this->validateActor($value, $modelData);

                    
                        if ($this->_errorRegistry->getErrors()) {
                            throw $this->_errorRegistry;
                        }
                    

                    $this->actor = $value;
                    $this->_rawModelDataInput['actor'] = $actor;

                    

                    return $this;
                }
            

            /**
             * Extract the value, perform validations and set the property actor
             *
             * @param array $modelData
             *
             * @throws ErrorRegistryException
             */
            protected function processActor(array $modelData): void
            {
                
                    if (!array_key_exists('actor', $modelData) && $this->actor === null) {
                        return;
                    }
                

                $value = array_key_exists('actor', $modelData) ? $modelData['actor'] : $this->actor;

                

                $this->actor = $this->validateActor($value, $modelData);
            }

            /**
             * Execute all validators for the property actor
             */
            protected function validateActor($value, array $modelData)
            {
                
                    

if ((!is_string($value) && !$value instanceof UnitEnum) ) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Generic\InvalidTypeException($value ?? null, ...array (
  0 => 'actor',
  1 => 'string',
)));
}

                

                return $value;
            }
        
    
        
            
                /**
                 * Get the value of action.
                 *
                 * What happened. Standard actions: created, activated, paused, resumed, canceled, rejected, completed, updated_budget, updated_dates, updated_packages, package_canceled, package_paused, package_resumed. Sellers MAY use additional platform-specific actions (e.g., creative_approved, targeting_updated) — use ext on the history entry for structured metadata about custom actions.
                 *
                 * @return string
                 */
                public function getAction(): string
                {
                    

                    return $this->action;
                }
            

            
                /**
                 * Set the value of action.
                 *
                 * @param string $action What happened. Standard actions: created, activated, paused, resumed, canceled, rejected, completed, updated_budget, updated_dates, updated_packages, package_canceled, package_paused, package_resumed. Sellers MAY use additional platform-specific actions (e.g., creative_approved, targeting_updated) — use ext on the history entry for structured metadata about custom actions.
                 *
                 * @throws ErrorRegistryException
                 *
                 * @return static
                 */
                public function setAction(
                    string $action
                ): static {
                    if ($this->action === $action) {
                        return $this;
                    }

                    $value = $modelData['action'] = $action;

                    
                        $this->_errorRegistry = new ErrorRegistryException();
                    

                    

                    $value = $this->validateAction($value, $modelData);

                    
                        if ($this->_errorRegistry->getErrors()) {
                            throw $this->_errorRegistry;
                        }
                    

                    $this->action = $value;
                    $this->_rawModelDataInput['action'] = $action;

                    

                    return $this;
                }
            

            /**
             * Extract the value, perform validations and set the property action
             *
             * @param array $modelData
             *
             * @throws ErrorRegistryException
             */
            protected function processAction(array $modelData): void
            {
                

                $value = array_key_exists('action', $modelData) ? $modelData['action'] : $this->action;

                

                $this->action = $this->validateAction($value, $modelData);
            }

            /**
             * Execute all validators for the property action
             */
            protected function validateAction($value, array $modelData)
            {
                
                    

if (!array_key_exists('action', $modelData)) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Object\RequiredValueException($value ?? null, ...array (
  0 => 'action',
)));
}

                
                    

if ((!is_string($value) && !$value instanceof UnitEnum) ) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Generic\InvalidTypeException($value ?? null, ...array (
  0 => 'action',
  1 => 'string',
)));
}

                

                return $value;
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
                    

                    return $this->summary;
                }
            

            
                /**
                 * Set the value of summary.
                 *
                 * @param string $summary Human-readable summary of the change (e.g., 'Budget increased from $5,000 to $7,500 on pkg_abc').
                 *
                 * @throws ErrorRegistryException
                 *
                 * @return static
                 */
                public function setSummary(
                    string $summary
                ): static {
                    if ($this->summary === $summary) {
                        return $this;
                    }

                    $value = $modelData['summary'] = $summary;

                    
                        $this->_errorRegistry = new ErrorRegistryException();
                    

                    

                    $value = $this->validateSummary($value, $modelData);

                    
                        if ($this->_errorRegistry->getErrors()) {
                            throw $this->_errorRegistry;
                        }
                    

                    $this->summary = $value;
                    $this->_rawModelDataInput['summary'] = $summary;

                    

                    return $this;
                }
            

            /**
             * Extract the value, perform validations and set the property summary
             *
             * @param array $modelData
             *
             * @throws ErrorRegistryException
             */
            protected function processSummary(array $modelData): void
            {
                
                    if (!array_key_exists('summary', $modelData) && $this->summary === null) {
                        return;
                    }
                

                $value = array_key_exists('summary', $modelData) ? $modelData['summary'] : $this->summary;

                

                $this->summary = $this->validateSummary($value, $modelData);
            }

            /**
             * Execute all validators for the property summary
             */
            protected function validateSummary($value, array $modelData)
            {
                
                    

if ((!is_string($value) && !$value instanceof UnitEnum) ) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Generic\InvalidTypeException($value ?? null, ...array (
  0 => 'summary',
  1 => 'string',
)));
}

                
                    

if (is_string($value) && mb_strlen($value) > 500) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\String\MaxLengthException($value ?? null, ...array (
  0 => 'summary',
  1 => 500,
)));
}

                

                return $value;
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
                    

                    return $this->packageId;
                }
            

            
                /**
                 * Set the value of package_id.
                 *
                 * @param string $packageId Package affected, when the change targeted a specific package.
                 *
                 * @throws ErrorRegistryException
                 *
                 * @return static
                 */
                public function setPackageId(
                    string $packageId
                ): static {
                    if ($this->packageId === $packageId) {
                        return $this;
                    }

                    $value = $modelData['package_id'] = $packageId;

                    
                        $this->_errorRegistry = new ErrorRegistryException();
                    

                    

                    $value = $this->validatePackageId($value, $modelData);

                    
                        if ($this->_errorRegistry->getErrors()) {
                            throw $this->_errorRegistry;
                        }
                    

                    $this->packageId = $value;
                    $this->_rawModelDataInput['package_id'] = $packageId;

                    

                    return $this;
                }
            

            /**
             * Extract the value, perform validations and set the property packageId
             *
             * @param array $modelData
             *
             * @throws ErrorRegistryException
             */
            protected function processPackageId(array $modelData): void
            {
                
                    if (!array_key_exists('package_id', $modelData) && $this->packageId === null) {
                        return;
                    }
                

                $value = array_key_exists('package_id', $modelData) ? $modelData['package_id'] : $this->packageId;

                

                $this->packageId = $this->validatePackageId($value, $modelData);
            }

            /**
             * Execute all validators for the property packageId
             */
            protected function validatePackageId($value, array $modelData)
            {
                
                    

if ((!is_string($value) && !$value instanceof UnitEnum) ) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Generic\InvalidTypeException($value ?? null, ...array (
  0 => 'package_id',
  1 => 'string',
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
    

    
        
            if (array_key_exists('revision', $modelData) &&
                $modelData['revision'] !== $this->revision
            ) {
                

                $rollbackValues['revision'] = $this->revision;
                $this->processRevision($modelData);
            }
        
    
        
            if (array_key_exists('timestamp', $modelData) &&
                $modelData['timestamp'] !== $this->timestamp
            ) {
                

                $rollbackValues['timestamp'] = $this->timestamp;
                $this->processTimestamp($modelData);
            }
        
    
        
            if (array_key_exists('actor', $modelData) &&
                $modelData['actor'] !== $this->actor
            ) {
                

                $rollbackValues['actor'] = $this->actor;
                $this->processActor($modelData);
            }
        
    
        
            if (array_key_exists('action', $modelData) &&
                $modelData['action'] !== $this->action
            ) {
                

                $rollbackValues['action'] = $this->action;
                $this->processAction($modelData);
            }
        
    
        
            if (array_key_exists('summary', $modelData) &&
                $modelData['summary'] !== $this->summary
            ) {
                

                $rollbackValues['summary'] = $this->summary;
                $this->processSummary($modelData);
            }
        
    
        
            if (array_key_exists('package_id', $modelData) &&
                $modelData['package_id'] !== $this->packageId
            ) {
                

                $rollbackValues['packageId'] = $this->packageId;
                $this->processPackageId($modelData);
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
        $data = array_merge($this->serializeAdditionalProperties($depth, $except), $data);

        return $data;
    }


protected function serializeAdditionalProperties(int $depth, array $except): array
{
    

    return $this->getSerializedValue(
        $this->_additionalProperties,
        $depth,
        $except
    );
}



}

// @codeCoverageIgnoreEnd
