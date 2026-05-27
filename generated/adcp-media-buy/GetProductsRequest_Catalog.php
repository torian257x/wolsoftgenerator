<?php

// @codingStandardsIgnoreFile
// @codeCoverageIgnoreStart

declare(strict_types = 1);


    namespace AdCP\MediaBuy;



    use PHPModelGenerator\Interfaces\JSONModelInterface;

    use UnitEnum;

    use AdCP\MediaBuy\Enums\CatalogType;

    use AdCP\MediaBuy\Enums\FeedFormat;

    use AdCP\MediaBuy\Enums\UpdateFrequency;

    use AdCP\MediaBuy\Enums\ContentIDType;

    use AdCP\MediaBuy\Enums\EventType;

    use PHPModelGenerator\Traits\SerializableTrait;

    use JsonSerializable;

    use PHPModelGenerator\Interfaces\SerializationInterface;

    use AdCP\MediaBuy\Enums\GetProductsRequest_CatalogFieldMappingTransform;

    use PHPModelGenerator\Attributes\JsonPointer;

    use PHPModelGenerator\Attributes\SchemaName;

    use PHPModelGenerator\Attributes\Required;

    use PHPModelGenerator\Attributes\Internal;

    use PHPModelGenerator\Exception\ErrorRegistryException;


/**
 * Class GetProductsRequest_Catalog
 * @package AdCP\MediaBuy 
 *
 * Catalog of items the buyer wants to promote. The seller matches catalog items against its inventory and returns products where matches exist. Supports all catalog types: a job catalog finds job ad products, a product catalog finds sponsored product slots. Reference a synced catalog by catalog_id, or provide inline items.
 *
 * This is an auto-implemented class implemented by the php-json-schema-model-generator.
 * If you need to implement something in this class use inheritance. Else you will lose your changes if the classes
 * are re-generated.
 */

#[JsonPointer('/properties/catalog')]

class GetProductsRequest_Catalog implements JSONModelInterface, JsonSerializable, SerializationInterface
{
    use SerializableTrait;

    
        
            #[JsonPointer('/properties/catalog/properties/catalog_id')]
        
            #[SchemaName('catalog_id')]
        
        /** @var string|null Buyer's identifier for this catalog. Required when syncing via sync_catalogs. When used in creatives, references a previously synced catalog on the account. */
        protected $catalogId;
    
        
            #[JsonPointer('/properties/catalog/properties/name')]
        
            #[SchemaName('name')]
        
        /** @var string|null Human-readable name for this catalog (e.g., 'Summer Products 2025', 'Amsterdam Store Locations'). */
        protected $name;
    
        
            #[JsonPointer('/properties/catalog/properties/type')]
        
            #[SchemaName('type')]
        
            #[Required]
        
        /** @var CatalogType Catalog type. Structural types: 'offering' (AdCP Offering objects), 'product' (ecommerce entries), 'inventory' (stock per location), 'store' (physical locations), 'promotion' (deals and pricing). Vertical types: 'hotel', 'flight', 'job', 'vehicle', 'real_estate', 'education', 'destination', 'app' — each with an industry-specific item schema. */
        protected $type;
    
        
            #[JsonPointer('/properties/catalog/properties/url')]
        
            #[SchemaName('url')]
        
        /** @var string|null URL to an external catalog feed. The platform fetches and resolves items from this URL. For offering-type catalogs, the feed contains an array of Offering objects. For other types, the feed format is determined by feed_format. When omitted with type 'product', the platform uses its synced copy of the brand's product catalog. */
        protected $url;
    
        
            #[JsonPointer('/properties/catalog/properties/feed_format')]
        
            #[SchemaName('feed_format')]
        
        /** @var FeedFormat|null Format of the external feed at url. Required when url points to a non-AdCP feed (e.g., Google Merchant Center XML, Meta Product Catalog). Omit for offering-type catalogs where the feed is native AdCP JSON. */
        protected $feedFormat;
    
        
            #[JsonPointer('/properties/catalog/properties/update_frequency')]
        
            #[SchemaName('update_frequency')]
        
        /** @var UpdateFrequency|null How often the platform should re-fetch the feed from url. Only applicable when url is provided. Platforms may use this as a hint for polling schedules. */
        protected $updateFrequency;
    
        
            #[JsonPointer('/properties/catalog/properties/items')]
        
            #[SchemaName('items')]
        
        /** @var GetProductsRequest_ItemOfArrayItems01fc056eed58c88fe1c507fcd84dd4b7[]|null Inline catalog data. The item schema depends on the catalog type: Offering objects for 'offering', StoreItem for 'store', HotelItem for 'hotel', FlightItem for 'flight', JobItem for 'job', VehicleItem for 'vehicle', RealEstateItem for 'real_estate', EducationItem for 'education', DestinationItem for 'destination', AppItem for 'app', or freeform objects for 'product', 'inventory', and 'promotion'. Mutually exclusive with url — provide one or the other, not both. Implementations should validate items against the type-specific schema. */
        protected $items;
    
        
            #[JsonPointer('/properties/catalog/properties/ids')]
        
            #[SchemaName('ids')]
        
        /** @var string[]|null Filter catalog to specific item IDs. For offering-type catalogs, these are offering_id values. For product-type catalogs, these are SKU identifiers. */
        protected $ids;
    
        
            #[JsonPointer('/properties/catalog/properties/gtins')]
        
            #[SchemaName('gtins')]
        
        /** @var string[]|null Filter product-type catalogs by GTIN identifiers for cross-retailer catalog matching. Accepts standard GTIN formats (GTIN-8, UPC-A/GTIN-12, EAN-13/GTIN-13, GTIN-14). Only applicable when type is 'product'. */
        protected $gtins;
    
        
            #[JsonPointer('/properties/catalog/properties/tags')]
        
            #[SchemaName('tags')]
        
        /** @var string[]|null Filter catalog to items with these tags. Tags are matched using OR logic — items matching any tag are included. */
        protected $tags;
    
        
            #[JsonPointer('/properties/catalog/properties/category')]
        
            #[SchemaName('category')]
        
        /** @var string|null Filter catalog to items in this category (e.g., 'beverages/soft-drinks', 'chef-positions'). */
        protected $category;
    
        
            #[JsonPointer('/properties/catalog/properties/query')]
        
            #[SchemaName('query')]
        
        /** @var string|null Natural language filter for catalog items (e.g., 'all pasta sauces under $5', 'amsterdam vacancies'). */
        protected $query;
    
        
            #[JsonPointer('/properties/catalog/properties/conversion_events')]
        
            #[SchemaName('conversion_events')]
        
        /** @var EventType[]|null Event types that represent conversions for items in this catalog. Declares what events the platform should attribute to catalog items — e.g., a job catalog converts via submit_application, a product catalog via purchase. The event's content_ids field carries the item IDs that connect back to catalog items. Use content_id_type to declare what identifier type content_ids values represent. */
        protected $conversionEvents;
    
        
            #[JsonPointer('/properties/catalog/properties/content_id_type')]
        
            #[SchemaName('content_id_type')]
        
        /** @var ContentIDType|null Identifier type that the event's content_ids field should be matched against for items in this catalog. For example, 'gtin' means content_ids values are Global Trade Item Numbers, 'sku' means retailer SKUs. Omit when using a custom identifier scheme not listed in the enum. */
        protected $contentIdType;
    
        
            #[JsonPointer('/properties/catalog/properties/feed_field_mappings')]
        
            #[SchemaName('feed_field_mappings')]
        
        /** @var GetProductsRequest_CatalogFieldMapping[]|null Declarative normalization rules for external feeds. Maps non-standard feed field names, date formats, price encodings, and image URLs to the AdCP catalog item schema. Applied during sync_catalogs ingestion. Supports field renames, named transforms (date, divide, boolean, split), static literal injection, and assignment of image URLs to typed asset pools. */
        protected $feedFieldMappings;
    
        
            #[Internal]
        
        /** @var array Collect all additional properties provided to the schema */
        private $_additionalProperties = array (
);
    
        
            #[Internal]
        
        /** @var array Values which might be skipped for serialization if not provided */
        private $_skipNotProvidedPropertiesMap = array (
  0 => 'catalog_id',
  1 => 'name',
  3 => 'url',
  4 => 'feed_format',
  5 => 'update_frequency',
  6 => 'items',
  7 => 'ids',
  8 => 'gtins',
  9 => 'tags',
  10 => 'category',
  11 => 'query',
  12 => 'conversion_events',
  13 => 'content_id_type',
  14 => 'feed_field_mappings',
);
    
    #[Internal]
    /** @var array */
    protected $_rawModelDataInput = [];

    
        #[Internal]
        /** @var ErrorRegistryException Collect all validation errors */
        protected $_errorRegistry;
    

    /**
     * GetProductsRequest_Catalog constructor.
     *
     * @param array $rawModelDataInput
     *
     * @throws ErrorRegistryException
     */
    public function __construct(array $rawModelDataInput = [])
    {
        
            $this->_errorRegistry = new ErrorRegistryException();
        

        

        
            $this->executeBaseValidators($rawModelDataInput);
        

        
            
                $this->processCatalogId($rawModelDataInput);
            
        
            
                $this->processName($rawModelDataInput);
            
        
            
                $this->processType($rawModelDataInput);
            
        
            
                $this->processUrl($rawModelDataInput);
            
        
            
                $this->processFeedFormat($rawModelDataInput);
            
        
            
                $this->processUpdateFrequency($rawModelDataInput);
            
        
            
                $this->processItems($rawModelDataInput);
            
        
            
                $this->processIds($rawModelDataInput);
            
        
            
                $this->processGtins($rawModelDataInput);
            
        
            
                $this->processTags($rawModelDataInput);
            
        
            
                $this->processCategory($rawModelDataInput);
            
        
            
                $this->processQuery($rawModelDataInput);
            
        
            
                $this->processConversionEvents($rawModelDataInput);
            
        
            
                $this->processContentIdType($rawModelDataInput);
            
        
            
                $this->processFeedFieldMappings($rawModelDataInput);
            
        
            
        
            
        

        
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
   'catalog_id',
   'name',
   'type',
   'url',
   'feed_format',
   'update_frequency',
   'items',
   'ids',
   'gtins',
   'tags',
   'category',
   'query',
   'conversion_events',
   'content_id_type',
   'feed_field_mappings',
)) as $propertyKey) {
        

        $this->_additionalProperties[$propertyKey] = $value[$propertyKey];
    }

    return false;
})()) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Object\InvalidAdditionalPropertiesException($value ?? null, ...array (
  0 => 'GetProductsRequest_Catalog',
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
                 * Get the value of catalog_id.
                 *
                 * Buyer's identifier for this catalog. Required when syncing via sync_catalogs. When used in creatives, references a previously synced catalog on the account.
                 *
                 * @return string|null
                 */
                public function getCatalogId(): ?string
                {
                    

                    return $this->catalogId;
                }
            

            
                /**
                 * Set the value of catalog_id.
                 *
                 * @param string $catalogId Buyer's identifier for this catalog. Required when syncing via sync_catalogs. When used in creatives, references a previously synced catalog on the account.
                 *
                 * @throws ErrorRegistryException
                 *
                 * @return static
                 */
                public function setCatalogId(
                    string $catalogId
                ): static {
                    if ($this->catalogId === $catalogId) {
                        return $this;
                    }

                    $value = $modelData['catalog_id'] = $catalogId;

                    
                        $this->_errorRegistry = new ErrorRegistryException();
                    

                    

                    $value = $this->validateCatalogId($value, $modelData);

                    
                        if ($this->_errorRegistry->getErrors()) {
                            throw $this->_errorRegistry;
                        }
                    

                    $this->catalogId = $value;
                    $this->_rawModelDataInput['catalog_id'] = $catalogId;

                    

                    return $this;
                }
            

            /**
             * Extract the value, perform validations and set the property catalogId
             *
             * @param array $modelData
             *
             * @throws ErrorRegistryException
             */
            protected function processCatalogId(array $modelData): void
            {
                
                    if (!array_key_exists('catalog_id', $modelData) && $this->catalogId === null) {
                        return;
                    }
                

                $value = array_key_exists('catalog_id', $modelData) ? $modelData['catalog_id'] : $this->catalogId;

                

                $this->catalogId = $this->validateCatalogId($value, $modelData);
            }

            /**
             * Execute all validators for the property catalogId
             */
            protected function validateCatalogId($value, array $modelData)
            {
                
                    

if ((!is_string($value) && !$value instanceof UnitEnum) ) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Generic\InvalidTypeException($value ?? null, ...array (
  0 => 'catalog_id',
  1 => 'string',
)));
}

                

                return $value;
            }
        
    
        
            
                /**
                 * Get the value of name.
                 *
                 * Human-readable name for this catalog (e.g., 'Summer Products 2025', 'Amsterdam Store Locations').
                 *
                 * @return string|null
                 */
                public function getName(): ?string
                {
                    

                    return $this->name;
                }
            

            
                /**
                 * Set the value of name.
                 *
                 * @param string $name Human-readable name for this catalog (e.g., 'Summer Products 2025', 'Amsterdam Store Locations').
                 *
                 * @throws ErrorRegistryException
                 *
                 * @return static
                 */
                public function setName(
                    string $name
                ): static {
                    if ($this->name === $name) {
                        return $this;
                    }

                    $value = $modelData['name'] = $name;

                    
                        $this->_errorRegistry = new ErrorRegistryException();
                    

                    

                    $value = $this->validateName($value, $modelData);

                    
                        if ($this->_errorRegistry->getErrors()) {
                            throw $this->_errorRegistry;
                        }
                    

                    $this->name = $value;
                    $this->_rawModelDataInput['name'] = $name;

                    

                    return $this;
                }
            

            /**
             * Extract the value, perform validations and set the property name
             *
             * @param array $modelData
             *
             * @throws ErrorRegistryException
             */
            protected function processName(array $modelData): void
            {
                
                    if (!array_key_exists('name', $modelData) && $this->name === null) {
                        return;
                    }
                

                $value = array_key_exists('name', $modelData) ? $modelData['name'] : $this->name;

                

                $this->name = $this->validateName($value, $modelData);
            }

            /**
             * Execute all validators for the property name
             */
            protected function validateName($value, array $modelData)
            {
                
                    

if ((!is_string($value) && !$value instanceof UnitEnum) ) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Generic\InvalidTypeException($value ?? null, ...array (
  0 => 'name',
  1 => 'string',
)));
}

                

                return $value;
            }
        
    
        
            
                /**
                 * Get the value of type.
                 *
                 * Catalog type. Structural types: 'offering' (AdCP Offering objects), 'product' (ecommerce entries), 'inventory' (stock per location), 'store' (physical locations), 'promotion' (deals and pricing). Vertical types: 'hotel', 'flight', 'job', 'vehicle', 'real_estate', 'education', 'destination', 'app' — each with an industry-specific item schema.
                 *
                 * @return CatalogType
                 */
                public function getType(): CatalogType
                {
                    

                    return $this->type;
                }
            

            
                /**
                 * Set the value of type.
                 *
                 * @param string|CatalogType $type Catalog type. Structural types: 'offering' (AdCP Offering objects), 'product' (ecommerce entries), 'inventory' (stock per location), 'store' (physical locations), 'promotion' (deals and pricing). Vertical types: 'hotel', 'flight', 'job', 'vehicle', 'real_estate', 'education', 'destination', 'app' — each with an industry-specific item schema.
                 *
                 * @throws ErrorRegistryException
                 *
                 * @return static
                 */
                public function setType(
                    string | CatalogType $type
                ): static {
                    if ($this->type === $type) {
                        return $this;
                    }

                    $value = $modelData['type'] = $type;

                    
                        $this->_errorRegistry = new ErrorRegistryException();
                    

                    

                    $value = $this->validateType($value, $modelData);

                    
                        if ($this->_errorRegistry->getErrors()) {
                            throw $this->_errorRegistry;
                        }
                    

                    $this->type = $value;
                    $this->_rawModelDataInput['type'] = $type;

                    

                    return $this;
                }
            

            /**
             * Extract the value, perform validations and set the property type
             *
             * @param array $modelData
             *
             * @throws ErrorRegistryException
             */
            protected function processType(array $modelData): void
            {
                

                $value = array_key_exists('type', $modelData) ? $modelData['type'] : $this->type;

                

                $this->type = $this->validateType($value, $modelData);
            }

            /**
             * Execute all validators for the property type
             */
            protected function validateType($value, array $modelData)
            {
                
                    

if ($value instanceof UnitEnum && !($value instanceof CatalogType)) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Generic\InvalidTypeException($value ?? null, ...array (
  0 => 'type',
  1 => 'CatalogType',
)));
}

                
                    

if (!array_key_exists('type', $modelData)) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Object\RequiredValueException($value ?? null, ...array (
  0 => 'type',
)));
}

                
                    

if ((!is_string($value) && !$value instanceof UnitEnum) ) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Generic\InvalidTypeException($value ?? null, ...array (
  0 => 'type',
  1 => 'string',
)));
}

                
                    

if (!($value instanceof UnitEnum) && !in_array($value, array (
   'offering',
   'product',
   'inventory',
   'store',
   'promotion',
   'hotel',
   'flight',
   'job',
   'vehicle',
   'real_estate',
   'education',
   'destination',
   'app',
), true)) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Generic\EnumException($value ?? null, ...array (
  0 => 'type',
  1 => 
  array (
    0 => 'offering',
    1 => 'product',
    2 => 'inventory',
    3 => 'store',
    4 => 'promotion',
    5 => 'hotel',
    6 => 'flight',
    7 => 'job',
    8 => 'vehicle',
    9 => 'real_estate',
    10 => 'education',
    11 => 'destination',
    12 => 'app',
  ),
)));
}

                
                    
$transformationFailed = false;
if (!($value instanceof UnitEnum) && 
(
    
    (function (&$value) use (&$transformationFailed): bool {
        // make sure exceptions from the filter are caught and added to the error handling
        try {
            $value = \PHPModelGenerator\Filter\Enum::filter($value, array (
  'fqcn' => 'AdCP\\MediaBuy\\Enums\\CatalogType',
));
        } catch (\Throwable $filterException) {
            
                $transformationFailed = true;
            

            $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Filter\InvalidFilterValueException($value ?? null, ...array (
  0 => 'type',
  1 => 'php_model_generator_enum',
  2 => $filterException,
)));
        }

        return false;
    })($value)
)) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Filter\IncompatibleFilterException($value ?? null, ...array (
  0 => 'type',
  1 => 'php_model_generator_enum',
)));
}

                

                return $value;
            }
        
    
        
            
                /**
                 * Get the value of url.
                 *
                 * URL to an external catalog feed. The platform fetches and resolves items from this URL. For offering-type catalogs, the feed contains an array of Offering objects. For other types, the feed format is determined by feed_format. When omitted with type 'product', the platform uses its synced copy of the brand's product catalog.
                 *
                 * @return string|null
                 */
                public function getUrl(): ?string
                {
                    

                    return $this->url;
                }
            

            
                /**
                 * Set the value of url.
                 *
                 * @param string $url URL to an external catalog feed. The platform fetches and resolves items from this URL. For offering-type catalogs, the feed contains an array of Offering objects. For other types, the feed format is determined by feed_format. When omitted with type 'product', the platform uses its synced copy of the brand's product catalog.
                 *
                 * @throws ErrorRegistryException
                 *
                 * @return static
                 */
                public function setUrl(
                    string $url
                ): static {
                    if ($this->url === $url) {
                        return $this;
                    }

                    $value = $modelData['url'] = $url;

                    
                        $this->_errorRegistry = new ErrorRegistryException();
                    

                    

                    $value = $this->validateUrl($value, $modelData);

                    
                        if ($this->_errorRegistry->getErrors()) {
                            throw $this->_errorRegistry;
                        }
                    

                    $this->url = $value;
                    $this->_rawModelDataInput['url'] = $url;

                    

                    return $this;
                }
            

            /**
             * Extract the value, perform validations and set the property url
             *
             * @param array $modelData
             *
             * @throws ErrorRegistryException
             */
            protected function processUrl(array $modelData): void
            {
                
                    if (!array_key_exists('url', $modelData) && $this->url === null) {
                        return;
                    }
                

                $value = array_key_exists('url', $modelData) ? $modelData['url'] : $this->url;

                

                $this->url = $this->validateUrl($value, $modelData);
            }

            /**
             * Execute all validators for the property url
             */
            protected function validateUrl($value, array $modelData)
            {
                
                    

if ((!is_string($value) && !$value instanceof UnitEnum) ) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Generic\InvalidTypeException($value ?? null, ...array (
  0 => 'url',
  1 => 'string',
)));
}

                
                    

if (!\PHPModelGenerator\Format\UriFormatValidator::validate($value)) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\String\FormatException($value ?? null, ...array (
  0 => 'url',
  1 => 'uri',
)));
}

                

                return $value;
            }
        
    
        
            
                /**
                 * Get the value of feed_format.
                 *
                 * Format of the external feed at url. Required when url points to a non-AdCP feed (e.g., Google Merchant Center XML, Meta Product Catalog). Omit for offering-type catalogs where the feed is native AdCP JSON.
                 *
                 * @return FeedFormat|null
                 */
                public function getFeedFormat(): ?FeedFormat
                {
                    

                    return $this->feedFormat;
                }
            

            
                /**
                 * Set the value of feed_format.
                 *
                 * @param string|FeedFormat|null $feedFormat Format of the external feed at url. Required when url points to a non-AdCP feed (e.g., Google Merchant Center XML, Meta Product Catalog). Omit for offering-type catalogs where the feed is native AdCP JSON.
                 *
                 * @throws ErrorRegistryException
                 *
                 * @return static
                 */
                public function setFeedFormat(
                    string | FeedFormat | null $feedFormat
                ): static {
                    if ($this->feedFormat === $feedFormat) {
                        return $this;
                    }

                    $value = $modelData['feed_format'] = $feedFormat;

                    
                        $this->_errorRegistry = new ErrorRegistryException();
                    

                    

                    $value = $this->validateFeedFormat($value, $modelData);

                    
                        if ($this->_errorRegistry->getErrors()) {
                            throw $this->_errorRegistry;
                        }
                    

                    $this->feedFormat = $value;
                    $this->_rawModelDataInput['feed_format'] = $feedFormat;

                    

                    return $this;
                }
            

            /**
             * Extract the value, perform validations and set the property feedFormat
             *
             * @param array $modelData
             *
             * @throws ErrorRegistryException
             */
            protected function processFeedFormat(array $modelData): void
            {
                
                    if (!array_key_exists('feed_format', $modelData) && $this->feedFormat === null) {
                        return;
                    }
                

                $value = array_key_exists('feed_format', $modelData) ? $modelData['feed_format'] : $this->feedFormat;

                

                $this->feedFormat = $this->validateFeedFormat($value, $modelData);
            }

            /**
             * Execute all validators for the property feedFormat
             */
            protected function validateFeedFormat($value, array $modelData)
            {
                
                    

if ($value instanceof UnitEnum && !($value instanceof FeedFormat)) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Generic\InvalidTypeException($value ?? null, ...array (
  0 => 'feed_format',
  1 => 'FeedFormat',
)));
}

                
                    

if ((!is_string($value) && !$value instanceof UnitEnum) ) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Generic\InvalidTypeException($value ?? null, ...array (
  0 => 'feed_format',
  1 => 'string',
)));
}

                
                    

if (!($value instanceof UnitEnum) && !in_array($value, array (
   'google_merchant_center',
   'facebook_catalog',
   'shopify',
   'linkedin_jobs',
   'custom',
), true)) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Generic\EnumException($value ?? null, ...array (
  0 => 'feed_format',
  1 => 
  array (
    0 => 'google_merchant_center',
    1 => 'facebook_catalog',
    2 => 'shopify',
    3 => 'linkedin_jobs',
    4 => 'custom',
  ),
)));
}

                
                    
$transformationFailed = false;
if (!($value instanceof UnitEnum) && 
(
    
    (function (&$value) use (&$transformationFailed): bool {
        // make sure exceptions from the filter are caught and added to the error handling
        try {
            $value = \PHPModelGenerator\Filter\Enum::filter($value, array (
  'fqcn' => 'AdCP\\MediaBuy\\Enums\\FeedFormat',
));
        } catch (\Throwable $filterException) {
            
                $transformationFailed = true;
            

            $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Filter\InvalidFilterValueException($value ?? null, ...array (
  0 => 'feed_format',
  1 => 'php_model_generator_enum',
  2 => $filterException,
)));
        }

        return false;
    })($value)
)) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Filter\IncompatibleFilterException($value ?? null, ...array (
  0 => 'feed_format',
  1 => 'php_model_generator_enum',
)));
}

                

                return $value;
            }
        
    
        
            
                /**
                 * Get the value of update_frequency.
                 *
                 * How often the platform should re-fetch the feed from url. Only applicable when url is provided. Platforms may use this as a hint for polling schedules.
                 *
                 * @return UpdateFrequency|null
                 */
                public function getUpdateFrequency(): ?UpdateFrequency
                {
                    

                    return $this->updateFrequency;
                }
            

            
                /**
                 * Set the value of update_frequency.
                 *
                 * @param string|UpdateFrequency|null $updateFrequency How often the platform should re-fetch the feed from url. Only applicable when url is provided. Platforms may use this as a hint for polling schedules.
                 *
                 * @throws ErrorRegistryException
                 *
                 * @return static
                 */
                public function setUpdateFrequency(
                    string | UpdateFrequency | null $updateFrequency
                ): static {
                    if ($this->updateFrequency === $updateFrequency) {
                        return $this;
                    }

                    $value = $modelData['update_frequency'] = $updateFrequency;

                    
                        $this->_errorRegistry = new ErrorRegistryException();
                    

                    

                    $value = $this->validateUpdateFrequency($value, $modelData);

                    
                        if ($this->_errorRegistry->getErrors()) {
                            throw $this->_errorRegistry;
                        }
                    

                    $this->updateFrequency = $value;
                    $this->_rawModelDataInput['update_frequency'] = $updateFrequency;

                    

                    return $this;
                }
            

            /**
             * Extract the value, perform validations and set the property updateFrequency
             *
             * @param array $modelData
             *
             * @throws ErrorRegistryException
             */
            protected function processUpdateFrequency(array $modelData): void
            {
                
                    if (!array_key_exists('update_frequency', $modelData) && $this->updateFrequency === null) {
                        return;
                    }
                

                $value = array_key_exists('update_frequency', $modelData) ? $modelData['update_frequency'] : $this->updateFrequency;

                

                $this->updateFrequency = $this->validateUpdateFrequency($value, $modelData);
            }

            /**
             * Execute all validators for the property updateFrequency
             */
            protected function validateUpdateFrequency($value, array $modelData)
            {
                
                    

if ($value instanceof UnitEnum && !($value instanceof UpdateFrequency)) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Generic\InvalidTypeException($value ?? null, ...array (
  0 => 'update_frequency',
  1 => 'UpdateFrequency',
)));
}

                
                    

if ((!is_string($value) && !$value instanceof UnitEnum) ) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Generic\InvalidTypeException($value ?? null, ...array (
  0 => 'update_frequency',
  1 => 'string',
)));
}

                
                    

if (!($value instanceof UnitEnum) && !in_array($value, array (
   'realtime',
   'hourly',
   'daily',
   'weekly',
), true)) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Generic\EnumException($value ?? null, ...array (
  0 => 'update_frequency',
  1 => 
  array (
    0 => 'realtime',
    1 => 'hourly',
    2 => 'daily',
    3 => 'weekly',
  ),
)));
}

                
                    
$transformationFailed = false;
if (!($value instanceof UnitEnum) && 
(
    
    (function (&$value) use (&$transformationFailed): bool {
        // make sure exceptions from the filter are caught and added to the error handling
        try {
            $value = \PHPModelGenerator\Filter\Enum::filter($value, array (
  'fqcn' => 'AdCP\\MediaBuy\\Enums\\UpdateFrequency',
));
        } catch (\Throwable $filterException) {
            
                $transformationFailed = true;
            

            $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Filter\InvalidFilterValueException($value ?? null, ...array (
  0 => 'update_frequency',
  1 => 'php_model_generator_enum',
  2 => $filterException,
)));
        }

        return false;
    })($value)
)) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Filter\IncompatibleFilterException($value ?? null, ...array (
  0 => 'update_frequency',
  1 => 'php_model_generator_enum',
)));
}

                

                return $value;
            }
        
    
        
            
                /**
                 * Get the value of items.
                 *
                 * Inline catalog data. The item schema depends on the catalog type: Offering objects for 'offering', StoreItem for 'store', HotelItem for 'hotel', FlightItem for 'flight', JobItem for 'job', VehicleItem for 'vehicle', RealEstateItem for 'real_estate', EducationItem for 'education', DestinationItem for 'destination', AppItem for 'app', or freeform objects for 'product', 'inventory', and 'promotion'. Mutually exclusive with url — provide one or the other, not both. Implementations should validate items against the type-specific schema.
                 *
                 * @return GetProductsRequest_ItemOfArrayItems01fc056eed58c88fe1c507fcd84dd4b7[]|null
                 */
                public function getItems(): ?array
                {
                    

                    return $this->items;
                }
            

            
                /**
                 * Set the value of items.
                 *
                 * @param GetProductsRequest_ItemOfArrayItems01fc056eed58c88fe1c507fcd84dd4b7[] $items Inline catalog data. The item schema depends on the catalog type: Offering objects for 'offering', StoreItem for 'store', HotelItem for 'hotel', FlightItem for 'flight', JobItem for 'job', VehicleItem for 'vehicle', RealEstateItem for 'real_estate', EducationItem for 'education', DestinationItem for 'destination', AppItem for 'app', or freeform objects for 'product', 'inventory', and 'promotion'. Mutually exclusive with url — provide one or the other, not both. Implementations should validate items against the type-specific schema.
                 *
                 * @throws ErrorRegistryException
                 *
                 * @return static
                 */
                public function setItems(
                    array $items
                ): static {
                    if ($this->items === $items) {
                        return $this;
                    }

                    $value = $modelData['items'] = $items;

                    
                        $this->_errorRegistry = new ErrorRegistryException();
                    

                    

                    $value = $this->validateItems($value, $modelData);

                    
                        if ($this->_errorRegistry->getErrors()) {
                            throw $this->_errorRegistry;
                        }
                    

                    $this->items = $value;
                    $this->_rawModelDataInput['items'] = $items;

                    

                    return $this;
                }
            

            /**
             * Extract the value, perform validations and set the property items
             *
             * @param array $modelData
             *
             * @throws ErrorRegistryException
             */
            protected function processItems(array $modelData): void
            {
                
                    if (!array_key_exists('items', $modelData) && $this->items === null) {
                        return;
                    }
                

                $value = array_key_exists('items', $modelData) ? $modelData['items'] : $this->items;

                

                $this->items = $this->validateItems($value, $modelData);
            }

            /**
             * Execute all validators for the property items
             */
            protected function validateItems($value, array $modelData)
            {
                
                    

if ((!is_array($value) && !$value instanceof UnitEnum) ) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Generic\InvalidTypeException($value ?? null, ...array (
  0 => 'items',
  1 => 'array',
)));
}

                
                    $this->validateItems_ArrayItem_3705821cae4b50bbe66638268c036f0c($value, $modelData);
                
                    

if (is_array($value) && count($value) < 1) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Arrays\MinItemsException($value ?? null, ...array (
  0 => 'items',
  1 => 1,
)));
}

                

                return $value;
            }
        
    
        
            
                /**
                 * Get the value of ids.
                 *
                 * Filter catalog to specific item IDs. For offering-type catalogs, these are offering_id values. For product-type catalogs, these are SKU identifiers.
                 *
                 * @return string[]|null
                 */
                public function getIds(): ?array
                {
                    

                    return $this->ids;
                }
            

            
                /**
                 * Set the value of ids.
                 *
                 * @param string[] $ids Filter catalog to specific item IDs. For offering-type catalogs, these are offering_id values. For product-type catalogs, these are SKU identifiers.
                 *
                 * @throws ErrorRegistryException
                 *
                 * @return static
                 */
                public function setIds(
                    array $ids
                ): static {
                    if ($this->ids === $ids) {
                        return $this;
                    }

                    $value = $modelData['ids'] = $ids;

                    
                        $this->_errorRegistry = new ErrorRegistryException();
                    

                    

                    $value = $this->validateIds($value, $modelData);

                    
                        if ($this->_errorRegistry->getErrors()) {
                            throw $this->_errorRegistry;
                        }
                    

                    $this->ids = $value;
                    $this->_rawModelDataInput['ids'] = $ids;

                    

                    return $this;
                }
            

            /**
             * Extract the value, perform validations and set the property ids
             *
             * @param array $modelData
             *
             * @throws ErrorRegistryException
             */
            protected function processIds(array $modelData): void
            {
                
                    if (!array_key_exists('ids', $modelData) && $this->ids === null) {
                        return;
                    }
                

                $value = array_key_exists('ids', $modelData) ? $modelData['ids'] : $this->ids;

                

                $this->ids = $this->validateIds($value, $modelData);
            }

            /**
             * Execute all validators for the property ids
             */
            protected function validateIds($value, array $modelData)
            {
                
                    

if ((!is_array($value) && !$value instanceof UnitEnum) ) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Generic\InvalidTypeException($value ?? null, ...array (
  0 => 'ids',
  1 => 'array',
)));
}

                
                    $this->validateIds_ArrayItem_a9e18e650bced7200095c12fa19d2e97($value, $modelData);
                
                    

if (is_array($value) && count($value) < 1) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Arrays\MinItemsException($value ?? null, ...array (
  0 => 'ids',
  1 => 1,
)));
}

                

                return $value;
            }
        
    
        
            
                /**
                 * Get the value of gtins.
                 *
                 * Filter product-type catalogs by GTIN identifiers for cross-retailer catalog matching. Accepts standard GTIN formats (GTIN-8, UPC-A/GTIN-12, EAN-13/GTIN-13, GTIN-14). Only applicable when type is 'product'.
                 *
                 * @return string[]|null
                 */
                public function getGtins(): ?array
                {
                    

                    return $this->gtins;
                }
            

            
                /**
                 * Set the value of gtins.
                 *
                 * @param string[] $gtins Filter product-type catalogs by GTIN identifiers for cross-retailer catalog matching. Accepts standard GTIN formats (GTIN-8, UPC-A/GTIN-12, EAN-13/GTIN-13, GTIN-14). Only applicable when type is 'product'.
                 *
                 * @throws ErrorRegistryException
                 *
                 * @return static
                 */
                public function setGtins(
                    array $gtins
                ): static {
                    if ($this->gtins === $gtins) {
                        return $this;
                    }

                    $value = $modelData['gtins'] = $gtins;

                    
                        $this->_errorRegistry = new ErrorRegistryException();
                    

                    

                    $value = $this->validateGtins($value, $modelData);

                    
                        if ($this->_errorRegistry->getErrors()) {
                            throw $this->_errorRegistry;
                        }
                    

                    $this->gtins = $value;
                    $this->_rawModelDataInput['gtins'] = $gtins;

                    

                    return $this;
                }
            

            /**
             * Extract the value, perform validations and set the property gtins
             *
             * @param array $modelData
             *
             * @throws ErrorRegistryException
             */
            protected function processGtins(array $modelData): void
            {
                
                    if (!array_key_exists('gtins', $modelData) && $this->gtins === null) {
                        return;
                    }
                

                $value = array_key_exists('gtins', $modelData) ? $modelData['gtins'] : $this->gtins;

                

                $this->gtins = $this->validateGtins($value, $modelData);
            }

            /**
             * Execute all validators for the property gtins
             */
            protected function validateGtins($value, array $modelData)
            {
                
                    

if ((!is_array($value) && !$value instanceof UnitEnum) ) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Generic\InvalidTypeException($value ?? null, ...array (
  0 => 'gtins',
  1 => 'array',
)));
}

                
                    $this->validateGtins_ArrayItem_943b68ae5b801a9d9e8d8a9b7aece9c3($value, $modelData);
                
                    

if (is_array($value) && count($value) < 1) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Arrays\MinItemsException($value ?? null, ...array (
  0 => 'gtins',
  1 => 1,
)));
}

                

                return $value;
            }
        
    
        
            
                /**
                 * Get the value of tags.
                 *
                 * Filter catalog to items with these tags. Tags are matched using OR logic — items matching any tag are included.
                 *
                 * @return string[]|null
                 */
                public function getTags(): ?array
                {
                    

                    return $this->tags;
                }
            

            
                /**
                 * Set the value of tags.
                 *
                 * @param string[] $tags Filter catalog to items with these tags. Tags are matched using OR logic — items matching any tag are included.
                 *
                 * @throws ErrorRegistryException
                 *
                 * @return static
                 */
                public function setTags(
                    array $tags
                ): static {
                    if ($this->tags === $tags) {
                        return $this;
                    }

                    $value = $modelData['tags'] = $tags;

                    
                        $this->_errorRegistry = new ErrorRegistryException();
                    

                    

                    $value = $this->validateTags($value, $modelData);

                    
                        if ($this->_errorRegistry->getErrors()) {
                            throw $this->_errorRegistry;
                        }
                    

                    $this->tags = $value;
                    $this->_rawModelDataInput['tags'] = $tags;

                    

                    return $this;
                }
            

            /**
             * Extract the value, perform validations and set the property tags
             *
             * @param array $modelData
             *
             * @throws ErrorRegistryException
             */
            protected function processTags(array $modelData): void
            {
                
                    if (!array_key_exists('tags', $modelData) && $this->tags === null) {
                        return;
                    }
                

                $value = array_key_exists('tags', $modelData) ? $modelData['tags'] : $this->tags;

                

                $this->tags = $this->validateTags($value, $modelData);
            }

            /**
             * Execute all validators for the property tags
             */
            protected function validateTags($value, array $modelData)
            {
                
                    

if ((!is_array($value) && !$value instanceof UnitEnum) ) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Generic\InvalidTypeException($value ?? null, ...array (
  0 => 'tags',
  1 => 'array',
)));
}

                
                    $this->validateTags_ArrayItem_318330d0a3d8501827d5ef8eafa86270($value, $modelData);
                
                    

if (is_array($value) && count($value) < 1) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Arrays\MinItemsException($value ?? null, ...array (
  0 => 'tags',
  1 => 1,
)));
}

                

                return $value;
            }
        
    
        
            
                /**
                 * Get the value of category.
                 *
                 * Filter catalog to items in this category (e.g., 'beverages/soft-drinks', 'chef-positions').
                 *
                 * @return string|null
                 */
                public function getCategory(): ?string
                {
                    

                    return $this->category;
                }
            

            
                /**
                 * Set the value of category.
                 *
                 * @param string $category Filter catalog to items in this category (e.g., 'beverages/soft-drinks', 'chef-positions').
                 *
                 * @throws ErrorRegistryException
                 *
                 * @return static
                 */
                public function setCategory(
                    string $category
                ): static {
                    if ($this->category === $category) {
                        return $this;
                    }

                    $value = $modelData['category'] = $category;

                    
                        $this->_errorRegistry = new ErrorRegistryException();
                    

                    

                    $value = $this->validateCategory($value, $modelData);

                    
                        if ($this->_errorRegistry->getErrors()) {
                            throw $this->_errorRegistry;
                        }
                    

                    $this->category = $value;
                    $this->_rawModelDataInput['category'] = $category;

                    

                    return $this;
                }
            

            /**
             * Extract the value, perform validations and set the property category
             *
             * @param array $modelData
             *
             * @throws ErrorRegistryException
             */
            protected function processCategory(array $modelData): void
            {
                
                    if (!array_key_exists('category', $modelData) && $this->category === null) {
                        return;
                    }
                

                $value = array_key_exists('category', $modelData) ? $modelData['category'] : $this->category;

                

                $this->category = $this->validateCategory($value, $modelData);
            }

            /**
             * Execute all validators for the property category
             */
            protected function validateCategory($value, array $modelData)
            {
                
                    

if ((!is_string($value) && !$value instanceof UnitEnum) ) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Generic\InvalidTypeException($value ?? null, ...array (
  0 => 'category',
  1 => 'string',
)));
}

                

                return $value;
            }
        
    
        
            
                /**
                 * Get the value of query.
                 *
                 * Natural language filter for catalog items (e.g., 'all pasta sauces under $5', 'amsterdam vacancies').
                 *
                 * @return string|null
                 */
                public function getQuery(): ?string
                {
                    

                    return $this->query;
                }
            

            
                /**
                 * Set the value of query.
                 *
                 * @param string $query Natural language filter for catalog items (e.g., 'all pasta sauces under $5', 'amsterdam vacancies').
                 *
                 * @throws ErrorRegistryException
                 *
                 * @return static
                 */
                public function setQuery(
                    string $query
                ): static {
                    if ($this->query === $query) {
                        return $this;
                    }

                    $value = $modelData['query'] = $query;

                    
                        $this->_errorRegistry = new ErrorRegistryException();
                    

                    

                    $value = $this->validateQuery($value, $modelData);

                    
                        if ($this->_errorRegistry->getErrors()) {
                            throw $this->_errorRegistry;
                        }
                    

                    $this->query = $value;
                    $this->_rawModelDataInput['query'] = $query;

                    

                    return $this;
                }
            

            /**
             * Extract the value, perform validations and set the property query
             *
             * @param array $modelData
             *
             * @throws ErrorRegistryException
             */
            protected function processQuery(array $modelData): void
            {
                
                    if (!array_key_exists('query', $modelData) && $this->query === null) {
                        return;
                    }
                

                $value = array_key_exists('query', $modelData) ? $modelData['query'] : $this->query;

                

                $this->query = $this->validateQuery($value, $modelData);
            }

            /**
             * Execute all validators for the property query
             */
            protected function validateQuery($value, array $modelData)
            {
                
                    

if ((!is_string($value) && !$value instanceof UnitEnum) ) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Generic\InvalidTypeException($value ?? null, ...array (
  0 => 'query',
  1 => 'string',
)));
}

                

                return $value;
            }
        
    
        
            
                /**
                 * Get the value of conversion_events.
                 *
                 * Event types that represent conversions for items in this catalog. Declares what events the platform should attribute to catalog items — e.g., a job catalog converts via submit_application, a product catalog via purchase. The event's content_ids field carries the item IDs that connect back to catalog items. Use content_id_type to declare what identifier type content_ids values represent.
                 *
                 * @return EventType[]|null
                 */
                public function getConversionEvents(): array | EventType | null
                {
                    

                    return $this->conversionEvents;
                }
            

            
                /**
                 * Set the value of conversion_events.
                 *
                 * @param string[]|EventType[]|null $conversionEvents Event types that represent conversions for items in this catalog. Declares what events the platform should attribute to catalog items — e.g., a job catalog converts via submit_application, a product catalog via purchase. The event's content_ids field carries the item IDs that connect back to catalog items. Use content_id_type to declare what identifier type content_ids values represent.
                 *
                 * @throws ErrorRegistryException
                 *
                 * @return static
                 */
                public function setConversionEvents(
                    array | EventType | null $conversionEvents
                ): static {
                    if ($this->conversionEvents === $conversionEvents) {
                        return $this;
                    }

                    $value = $modelData['conversion_events'] = $conversionEvents;

                    
                        $this->_errorRegistry = new ErrorRegistryException();
                    

                    

                    $value = $this->validateConversionEvents($value, $modelData);

                    
                        if ($this->_errorRegistry->getErrors()) {
                            throw $this->_errorRegistry;
                        }
                    

                    $this->conversionEvents = $value;
                    $this->_rawModelDataInput['conversion_events'] = $conversionEvents;

                    

                    return $this;
                }
            

            /**
             * Extract the value, perform validations and set the property conversionEvents
             *
             * @param array $modelData
             *
             * @throws ErrorRegistryException
             */
            protected function processConversionEvents(array $modelData): void
            {
                
                    if (!array_key_exists('conversion_events', $modelData) && $this->conversionEvents === null) {
                        return;
                    }
                

                $value = array_key_exists('conversion_events', $modelData) ? $modelData['conversion_events'] : $this->conversionEvents;

                

                $this->conversionEvents = $this->validateConversionEvents($value, $modelData);
            }

            /**
             * Execute all validators for the property conversionEvents
             */
            protected function validateConversionEvents($value, array $modelData)
            {
                
                    

if ((!is_array($value) && !$value instanceof UnitEnum) ) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Generic\InvalidTypeException($value ?? null, ...array (
  0 => 'conversion_events',
  1 => 'array',
)));
}

                
                    $this->validateConversionEvents_ArrayItem_699a6957285492e31fcf6faa3aa5606f($value, $modelData);
                
                    

if (is_array($value) && count($value) < 1) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Arrays\MinItemsException($value ?? null, ...array (
  0 => 'conversion_events',
  1 => 1,
)));
}

                
                    

if (is_array($value) && (static function (array $items): bool {
    if (empty($items)) {
        return false;
    }

    asort($items);
    $lastSeen = array_shift($items);

    foreach ($items as $value) {
        if ($value === $lastSeen) {
            return true;
        }

        $lastSeen = $value;
    }

    return false;
})($value)) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Arrays\UniqueItemsException($value ?? null, ...array (
  0 => 'conversion_events',
)));
}

                

                return $value;
            }
        
    
        
            
                /**
                 * Get the value of content_id_type.
                 *
                 * Identifier type that the event's content_ids field should be matched against for items in this catalog. For example, 'gtin' means content_ids values are Global Trade Item Numbers, 'sku' means retailer SKUs. Omit when using a custom identifier scheme not listed in the enum.
                 *
                 * @return ContentIDType|null
                 */
                public function getContentIdType(): ?ContentIDType
                {
                    

                    return $this->contentIdType;
                }
            

            
                /**
                 * Set the value of content_id_type.
                 *
                 * @param string|ContentIDType|null $contentIdType Identifier type that the event's content_ids field should be matched against for items in this catalog. For example, 'gtin' means content_ids values are Global Trade Item Numbers, 'sku' means retailer SKUs. Omit when using a custom identifier scheme not listed in the enum.
                 *
                 * @throws ErrorRegistryException
                 *
                 * @return static
                 */
                public function setContentIdType(
                    string | ContentIDType | null $contentIdType
                ): static {
                    if ($this->contentIdType === $contentIdType) {
                        return $this;
                    }

                    $value = $modelData['content_id_type'] = $contentIdType;

                    
                        $this->_errorRegistry = new ErrorRegistryException();
                    

                    

                    $value = $this->validateContentIdType($value, $modelData);

                    
                        if ($this->_errorRegistry->getErrors()) {
                            throw $this->_errorRegistry;
                        }
                    

                    $this->contentIdType = $value;
                    $this->_rawModelDataInput['content_id_type'] = $contentIdType;

                    

                    return $this;
                }
            

            /**
             * Extract the value, perform validations and set the property contentIdType
             *
             * @param array $modelData
             *
             * @throws ErrorRegistryException
             */
            protected function processContentIdType(array $modelData): void
            {
                
                    if (!array_key_exists('content_id_type', $modelData) && $this->contentIdType === null) {
                        return;
                    }
                

                $value = array_key_exists('content_id_type', $modelData) ? $modelData['content_id_type'] : $this->contentIdType;

                

                $this->contentIdType = $this->validateContentIdType($value, $modelData);
            }

            /**
             * Execute all validators for the property contentIdType
             */
            protected function validateContentIdType($value, array $modelData)
            {
                
                    

if ($value instanceof UnitEnum && !($value instanceof ContentIDType)) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Generic\InvalidTypeException($value ?? null, ...array (
  0 => 'content_id_type',
  1 => 'ContentIDType',
)));
}

                
                    

if ((!is_string($value) && !$value instanceof UnitEnum) ) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Generic\InvalidTypeException($value ?? null, ...array (
  0 => 'content_id_type',
  1 => 'string',
)));
}

                
                    

if (!($value instanceof UnitEnum) && !in_array($value, array (
   'sku',
   'gtin',
   'offering_id',
   'job_id',
   'hotel_id',
   'flight_id',
   'vehicle_id',
   'listing_id',
   'store_id',
   'program_id',
   'destination_id',
   'app_id',
), true)) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Generic\EnumException($value ?? null, ...array (
  0 => 'content_id_type',
  1 => 
  array (
    0 => 'sku',
    1 => 'gtin',
    2 => 'offering_id',
    3 => 'job_id',
    4 => 'hotel_id',
    5 => 'flight_id',
    6 => 'vehicle_id',
    7 => 'listing_id',
    8 => 'store_id',
    9 => 'program_id',
    10 => 'destination_id',
    11 => 'app_id',
  ),
)));
}

                
                    
$transformationFailed = false;
if (!($value instanceof UnitEnum) && 
(
    
    (function (&$value) use (&$transformationFailed): bool {
        // make sure exceptions from the filter are caught and added to the error handling
        try {
            $value = \PHPModelGenerator\Filter\Enum::filter($value, array (
  'fqcn' => 'AdCP\\MediaBuy\\Enums\\ContentIDType',
));
        } catch (\Throwable $filterException) {
            
                $transformationFailed = true;
            

            $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Filter\InvalidFilterValueException($value ?? null, ...array (
  0 => 'content_id_type',
  1 => 'php_model_generator_enum',
  2 => $filterException,
)));
        }

        return false;
    })($value)
)) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Filter\IncompatibleFilterException($value ?? null, ...array (
  0 => 'content_id_type',
  1 => 'php_model_generator_enum',
)));
}

                

                return $value;
            }
        
    
        
            
                /**
                 * Get the value of feed_field_mappings.
                 *
                 * Declarative normalization rules for external feeds. Maps non-standard feed field names, date formats, price encodings, and image URLs to the AdCP catalog item schema. Applied during sync_catalogs ingestion. Supports field renames, named transforms (date, divide, boolean, split), static literal injection, and assignment of image URLs to typed asset pools.
                 *
                 * @return GetProductsRequest_CatalogFieldMapping[]|null
                 */
                public function getFeedFieldMappings(): ?array
                {
                    

                    return $this->feedFieldMappings;
                }
            

            
                /**
                 * Set the value of feed_field_mappings.
                 *
                 * @param GetProductsRequest_CatalogFieldMapping[] $feedFieldMappings Declarative normalization rules for external feeds. Maps non-standard feed field names, date formats, price encodings, and image URLs to the AdCP catalog item schema. Applied during sync_catalogs ingestion. Supports field renames, named transforms (date, divide, boolean, split), static literal injection, and assignment of image URLs to typed asset pools.
                 *
                 * @throws ErrorRegistryException
                 *
                 * @return static
                 */
                public function setFeedFieldMappings(
                    array $feedFieldMappings
                ): static {
                    if ($this->feedFieldMappings === $feedFieldMappings) {
                        return $this;
                    }

                    $value = $modelData['feed_field_mappings'] = $feedFieldMappings;

                    
                        $this->_errorRegistry = new ErrorRegistryException();
                    

                    

                    $value = $this->validateFeedFieldMappings($value, $modelData);

                    
                        if ($this->_errorRegistry->getErrors()) {
                            throw $this->_errorRegistry;
                        }
                    

                    $this->feedFieldMappings = $value;
                    $this->_rawModelDataInput['feed_field_mappings'] = $feedFieldMappings;

                    

                    return $this;
                }
            

            /**
             * Extract the value, perform validations and set the property feedFieldMappings
             *
             * @param array $modelData
             *
             * @throws ErrorRegistryException
             */
            protected function processFeedFieldMappings(array $modelData): void
            {
                
                    if (!array_key_exists('feed_field_mappings', $modelData) && $this->feedFieldMappings === null) {
                        return;
                    }
                

                $value = array_key_exists('feed_field_mappings', $modelData) ? $modelData['feed_field_mappings'] : $this->feedFieldMappings;

                

                $this->feedFieldMappings = $this->validateFeedFieldMappings($value, $modelData);
            }

            /**
             * Execute all validators for the property feedFieldMappings
             */
            protected function validateFeedFieldMappings($value, array $modelData)
            {
                
                    

if ((!is_array($value) && !$value instanceof UnitEnum) ) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Generic\InvalidTypeException($value ?? null, ...array (
  0 => 'feed_field_mappings',
  1 => 'array',
)));
}

                
                    $this->validateFeedFieldMappings_ArrayItem_ff3ed29720c293863b0a38a6d77eac8f($value, $modelData);
                
                    

if (is_array($value) && count($value) < 1) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Arrays\MinItemsException($value ?? null, ...array (
  0 => 'feed_field_mappings',
  1 => 1,
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
    

    
        
            if (array_key_exists('catalog_id', $modelData) &&
                $modelData['catalog_id'] !== $this->catalogId
            ) {
                

                $rollbackValues['catalogId'] = $this->catalogId;
                $this->processCatalogId($modelData);
            }
        
    
        
            if (array_key_exists('name', $modelData) &&
                $modelData['name'] !== $this->name
            ) {
                

                $rollbackValues['name'] = $this->name;
                $this->processName($modelData);
            }
        
    
        
            if (array_key_exists('type', $modelData) &&
                $modelData['type'] !== $this->type
            ) {
                

                $rollbackValues['type'] = $this->type;
                $this->processType($modelData);
            }
        
    
        
            if (array_key_exists('url', $modelData) &&
                $modelData['url'] !== $this->url
            ) {
                

                $rollbackValues['url'] = $this->url;
                $this->processUrl($modelData);
            }
        
    
        
            if (array_key_exists('feed_format', $modelData) &&
                $modelData['feed_format'] !== $this->feedFormat
            ) {
                

                $rollbackValues['feedFormat'] = $this->feedFormat;
                $this->processFeedFormat($modelData);
            }
        
    
        
            if (array_key_exists('update_frequency', $modelData) &&
                $modelData['update_frequency'] !== $this->updateFrequency
            ) {
                

                $rollbackValues['updateFrequency'] = $this->updateFrequency;
                $this->processUpdateFrequency($modelData);
            }
        
    
        
            if (array_key_exists('items', $modelData) &&
                $modelData['items'] !== $this->items
            ) {
                

                $rollbackValues['items'] = $this->items;
                $this->processItems($modelData);
            }
        
    
        
            if (array_key_exists('ids', $modelData) &&
                $modelData['ids'] !== $this->ids
            ) {
                

                $rollbackValues['ids'] = $this->ids;
                $this->processIds($modelData);
            }
        
    
        
            if (array_key_exists('gtins', $modelData) &&
                $modelData['gtins'] !== $this->gtins
            ) {
                

                $rollbackValues['gtins'] = $this->gtins;
                $this->processGtins($modelData);
            }
        
    
        
            if (array_key_exists('tags', $modelData) &&
                $modelData['tags'] !== $this->tags
            ) {
                

                $rollbackValues['tags'] = $this->tags;
                $this->processTags($modelData);
            }
        
    
        
            if (array_key_exists('category', $modelData) &&
                $modelData['category'] !== $this->category
            ) {
                

                $rollbackValues['category'] = $this->category;
                $this->processCategory($modelData);
            }
        
    
        
            if (array_key_exists('query', $modelData) &&
                $modelData['query'] !== $this->query
            ) {
                

                $rollbackValues['query'] = $this->query;
                $this->processQuery($modelData);
            }
        
    
        
            if (array_key_exists('conversion_events', $modelData) &&
                $modelData['conversion_events'] !== $this->conversionEvents
            ) {
                

                $rollbackValues['conversionEvents'] = $this->conversionEvents;
                $this->processConversionEvents($modelData);
            }
        
    
        
            if (array_key_exists('content_id_type', $modelData) &&
                $modelData['content_id_type'] !== $this->contentIdType
            ) {
                

                $rollbackValues['contentIdType'] = $this->contentIdType;
                $this->processContentIdType($modelData);
            }
        
    
        
            if (array_key_exists('feed_field_mappings', $modelData) &&
                $modelData['feed_field_mappings'] !== $this->feedFieldMappings
            ) {
                

                $rollbackValues['feedFieldMappings'] = $this->feedFieldMappings;
                $this->processFeedFieldMappings($modelData);
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


/**
 * serialize the property type
 */
protected function serializeType()
{
    return \PHPModelGenerator\Filter\Enum::serialize($this->type, array (
  'fqcn' => 'AdCP\\MediaBuy\\Enums\\CatalogType',
));
}


/**
 * serialize the property feedFormat
 */
protected function serializeFeedFormat()
{
    return \PHPModelGenerator\Filter\Enum::serialize($this->feedFormat, array (
  'fqcn' => 'AdCP\\MediaBuy\\Enums\\FeedFormat',
));
}


/**
 * serialize the property updateFrequency
 */
protected function serializeUpdateFrequency()
{
    return \PHPModelGenerator\Filter\Enum::serialize($this->updateFrequency, array (
  'fqcn' => 'AdCP\\MediaBuy\\Enums\\UpdateFrequency',
));
}


/**
 * serialize the property contentIdType
 */
protected function serializeContentIdType()
{
    return \PHPModelGenerator\Filter\Enum::serialize($this->contentIdType, array (
  'fqcn' => 'AdCP\\MediaBuy\\Enums\\ContentIDType',
));
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


private function validateItems_ArrayItem_3705821cae4b50bbe66638268c036f0c(&$value, $modelData): void {
                    $invalidItems_87783801b7c4177609f3ee91c849a353 = [];
                    
                    if (is_array($value) && (function (&$items) use (&$invalidItems_87783801b7c4177609f3ee91c849a353, $modelData) {
    
        $originalErrorRegistry = $this->_errorRegistry;
    

    foreach ($items as $index => &$value) {
        
            $this->_errorRegistry = new ErrorRegistryException();
        

        try {
            $value = (function ($value) {
    try {
        return is_array($value) ? new GetProductsRequest_ItemOfArrayItems01fc056eed58c88fe1c507fcd84dd4b7($value) : $value;
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
  0 => 'item of array items',
  1 => 'object',
)));
}

            
                

if (is_object($value) && !($value instanceof \Exception) && !($value instanceof GetProductsRequest_ItemOfArrayItems01fc056eed58c88fe1c507fcd84dd4b7)) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Object\InvalidInstanceOfException($value ?? null, ...array (
  0 => 'item of array items',
  1 => 'GetProductsRequest_ItemOfArrayItems01fc056eed58c88fe1c507fcd84dd4b7',
)));
}

            

            
                if ($this->_errorRegistry->getErrors()) {
                    $invalidItems_87783801b7c4177609f3ee91c849a353[$index] = $this->_errorRegistry->getErrors();
                }
            
        } catch (\Exception $e) {
            // collect all errors concerning invalid items
            isset($invalidItems_87783801b7c4177609f3ee91c849a353[$index])
                ? $invalidItems_87783801b7c4177609f3ee91c849a353[$index][] = $e
                : $invalidItems_87783801b7c4177609f3ee91c849a353[$index] = [$e];
        }
    }

    
        $this->_errorRegistry = $originalErrorRegistry;
    

    return !empty($invalidItems_87783801b7c4177609f3ee91c849a353);
})($value)) {
                        $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Arrays\InvalidItemException($value ?? null, ...array (
  0 => 'items',
  1 => $invalidItems_87783801b7c4177609f3ee91c849a353,
)));
                    }
                }

private function validateIds_ArrayItem_a9e18e650bced7200095c12fa19d2e97(&$value, $modelData): void {
                    $invalidItems_7d06dbe028a53e69b59ce473eb441017 = [];
                    
                    if (is_array($value) && (function (&$items) use (&$invalidItems_7d06dbe028a53e69b59ce473eb441017, $modelData) {
    
        $originalErrorRegistry = $this->_errorRegistry;
    

    foreach ($items as $index => &$value) {
        
            $this->_errorRegistry = new ErrorRegistryException();
        

        try {
            

            
                

if ((!is_string($value) && !$value instanceof UnitEnum) ) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Generic\InvalidTypeException($value ?? null, ...array (
  0 => 'item of array ids',
  1 => 'string',
)));
}

            

            
                if ($this->_errorRegistry->getErrors()) {
                    $invalidItems_7d06dbe028a53e69b59ce473eb441017[$index] = $this->_errorRegistry->getErrors();
                }
            
        } catch (\Exception $e) {
            // collect all errors concerning invalid items
            isset($invalidItems_7d06dbe028a53e69b59ce473eb441017[$index])
                ? $invalidItems_7d06dbe028a53e69b59ce473eb441017[$index][] = $e
                : $invalidItems_7d06dbe028a53e69b59ce473eb441017[$index] = [$e];
        }
    }

    
        $this->_errorRegistry = $originalErrorRegistry;
    

    return !empty($invalidItems_7d06dbe028a53e69b59ce473eb441017);
})($value)) {
                        $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Arrays\InvalidItemException($value ?? null, ...array (
  0 => 'ids',
  1 => $invalidItems_7d06dbe028a53e69b59ce473eb441017,
)));
                    }
                }

private function validateGtins_ArrayItem_943b68ae5b801a9d9e8d8a9b7aece9c3(&$value, $modelData): void {
                    $invalidItems_d153e7dff72ec3f4d1eba7bb22b878ab = [];
                    
                    if (is_array($value) && (function (&$items) use (&$invalidItems_d153e7dff72ec3f4d1eba7bb22b878ab, $modelData) {
    
        $originalErrorRegistry = $this->_errorRegistry;
    

    foreach ($items as $index => &$value) {
        
            $this->_errorRegistry = new ErrorRegistryException();
        

        try {
            

            
                

if ((!is_string($value) && !$value instanceof UnitEnum) ) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Generic\InvalidTypeException($value ?? null, ...array (
  0 => 'item of array gtins',
  1 => 'string',
)));
}

            
                

if (is_string($value) && !preg_match(base64_decode('L15bMC05XXs4LDE0fSQv'), $value)) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\String\PatternException($value ?? null, ...array (
  0 => 'item of array gtins',
  1 => '^[0-9]{8,14}$',
)));
}

            

            
                if ($this->_errorRegistry->getErrors()) {
                    $invalidItems_d153e7dff72ec3f4d1eba7bb22b878ab[$index] = $this->_errorRegistry->getErrors();
                }
            
        } catch (\Exception $e) {
            // collect all errors concerning invalid items
            isset($invalidItems_d153e7dff72ec3f4d1eba7bb22b878ab[$index])
                ? $invalidItems_d153e7dff72ec3f4d1eba7bb22b878ab[$index][] = $e
                : $invalidItems_d153e7dff72ec3f4d1eba7bb22b878ab[$index] = [$e];
        }
    }

    
        $this->_errorRegistry = $originalErrorRegistry;
    

    return !empty($invalidItems_d153e7dff72ec3f4d1eba7bb22b878ab);
})($value)) {
                        $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Arrays\InvalidItemException($value ?? null, ...array (
  0 => 'gtins',
  1 => $invalidItems_d153e7dff72ec3f4d1eba7bb22b878ab,
)));
                    }
                }

private function validateTags_ArrayItem_318330d0a3d8501827d5ef8eafa86270(&$value, $modelData): void {
                    $invalidItems_d5bd6742cc2e9f5e7bf7d01ea3ddcf08 = [];
                    
                    if (is_array($value) && (function (&$items) use (&$invalidItems_d5bd6742cc2e9f5e7bf7d01ea3ddcf08, $modelData) {
    
        $originalErrorRegistry = $this->_errorRegistry;
    

    foreach ($items as $index => &$value) {
        
            $this->_errorRegistry = new ErrorRegistryException();
        

        try {
            

            
                

if ((!is_string($value) && !$value instanceof UnitEnum) ) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Generic\InvalidTypeException($value ?? null, ...array (
  0 => 'item of array tags',
  1 => 'string',
)));
}

            

            
                if ($this->_errorRegistry->getErrors()) {
                    $invalidItems_d5bd6742cc2e9f5e7bf7d01ea3ddcf08[$index] = $this->_errorRegistry->getErrors();
                }
            
        } catch (\Exception $e) {
            // collect all errors concerning invalid items
            isset($invalidItems_d5bd6742cc2e9f5e7bf7d01ea3ddcf08[$index])
                ? $invalidItems_d5bd6742cc2e9f5e7bf7d01ea3ddcf08[$index][] = $e
                : $invalidItems_d5bd6742cc2e9f5e7bf7d01ea3ddcf08[$index] = [$e];
        }
    }

    
        $this->_errorRegistry = $originalErrorRegistry;
    

    return !empty($invalidItems_d5bd6742cc2e9f5e7bf7d01ea3ddcf08);
})($value)) {
                        $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Arrays\InvalidItemException($value ?? null, ...array (
  0 => 'tags',
  1 => $invalidItems_d5bd6742cc2e9f5e7bf7d01ea3ddcf08,
)));
                    }
                }

private function validateConversionEvents_ArrayItem_699a6957285492e31fcf6faa3aa5606f(&$value, $modelData): void {
                    $invalidItems_2de9055857282b62bd3908a19eda0a0a = [];
                    
                    if (is_array($value) && (function (&$items) use (&$invalidItems_2de9055857282b62bd3908a19eda0a0a, $modelData) {
    
        $originalErrorRegistry = $this->_errorRegistry;
    

    foreach ($items as $index => &$value) {
        
            $this->_errorRegistry = new ErrorRegistryException();
        

        try {
            

            
                

if ($value instanceof UnitEnum && !($value instanceof EventType)) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Generic\InvalidTypeException($value ?? null, ...array (
  0 => 'item of array conversion_events',
  1 => 'EventType',
)));
}

            
                

if ((!is_string($value) && !$value instanceof UnitEnum) ) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Generic\InvalidTypeException($value ?? null, ...array (
  0 => 'item of array conversion_events',
  1 => 'string',
)));
}

            
                

if (!($value instanceof UnitEnum) && !in_array($value, array (
   'page_view',
   'view_content',
   'select_content',
   'select_item',
   'search',
   'share',
   'add_to_cart',
   'remove_from_cart',
   'viewed_cart',
   'add_to_wishlist',
   'initiate_checkout',
   'add_payment_info',
   'purchase',
   'refund',
   'lead',
   'qualify_lead',
   'close_convert_lead',
   'disqualify_lead',
   'complete_registration',
   'subscribe',
   'start_trial',
   'app_install',
   'app_launch',
   'contact',
   'schedule',
   'donate',
   'submit_application',
   'custom',
), true)) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Generic\EnumException($value ?? null, ...array (
  0 => 'item of array conversion_events',
  1 => 
  array (
    0 => 'page_view',
    1 => 'view_content',
    2 => 'select_content',
    3 => 'select_item',
    4 => 'search',
    5 => 'share',
    6 => 'add_to_cart',
    7 => 'remove_from_cart',
    8 => 'viewed_cart',
    9 => 'add_to_wishlist',
    10 => 'initiate_checkout',
    11 => 'add_payment_info',
    12 => 'purchase',
    13 => 'refund',
    14 => 'lead',
    15 => 'qualify_lead',
    16 => 'close_convert_lead',
    17 => 'disqualify_lead',
    18 => 'complete_registration',
    19 => 'subscribe',
    20 => 'start_trial',
    21 => 'app_install',
    22 => 'app_launch',
    23 => 'contact',
    24 => 'schedule',
    25 => 'donate',
    26 => 'submit_application',
    27 => 'custom',
  ),
)));
}

            
                
$transformationFailed = false;
if (!($value instanceof UnitEnum) && 
(
    
    (function (&$value) use (&$transformationFailed): bool {
        // make sure exceptions from the filter are caught and added to the error handling
        try {
            $value = \PHPModelGenerator\Filter\Enum::filter($value, array (
  'fqcn' => 'AdCP\\MediaBuy\\Enums\\EventType',
));
        } catch (\Throwable $filterException) {
            
                $transformationFailed = true;
            

            $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Filter\InvalidFilterValueException($value ?? null, ...array (
  0 => 'item of array conversion_events',
  1 => 'php_model_generator_enum',
  2 => $filterException,
)));
        }

        return false;
    })($value)
)) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Filter\IncompatibleFilterException($value ?? null, ...array (
  0 => 'item of array conversion_events',
  1 => 'php_model_generator_enum',
)));
}

            

            
                if ($this->_errorRegistry->getErrors()) {
                    $invalidItems_2de9055857282b62bd3908a19eda0a0a[$index] = $this->_errorRegistry->getErrors();
                }
            
        } catch (\Exception $e) {
            // collect all errors concerning invalid items
            isset($invalidItems_2de9055857282b62bd3908a19eda0a0a[$index])
                ? $invalidItems_2de9055857282b62bd3908a19eda0a0a[$index][] = $e
                : $invalidItems_2de9055857282b62bd3908a19eda0a0a[$index] = [$e];
        }
    }

    
        $this->_errorRegistry = $originalErrorRegistry;
    

    return !empty($invalidItems_2de9055857282b62bd3908a19eda0a0a);
})($value)) {
                        $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Arrays\InvalidItemException($value ?? null, ...array (
  0 => 'conversion_events',
  1 => $invalidItems_2de9055857282b62bd3908a19eda0a0a,
)));
                    }
                }

private function validateFeedFieldMappings_ArrayItem_ff3ed29720c293863b0a38a6d77eac8f(&$value, $modelData): void {
                    $invalidItems_b4374395f50bba586a9d4335d391a235 = [];
                    
                    if (is_array($value) && (function (&$items) use (&$invalidItems_b4374395f50bba586a9d4335d391a235, $modelData) {
    
        $originalErrorRegistry = $this->_errorRegistry;
    

    foreach ($items as $index => &$value) {
        
            $this->_errorRegistry = new ErrorRegistryException();
        

        try {
            $value = (function ($value) {
    try {
        return is_array($value) ? new GetProductsRequest_CatalogFieldMapping($value) : $value;
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
  0 => 'item of array feed_field_mappings',
  1 => 'object',
)));
}

            
                

if (is_object($value) && !($value instanceof \Exception) && !($value instanceof GetProductsRequest_CatalogFieldMapping)) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Object\InvalidInstanceOfException($value ?? null, ...array (
  0 => 'item of array feed_field_mappings',
  1 => 'GetProductsRequest_CatalogFieldMapping',
)));
}

            

            
                if ($this->_errorRegistry->getErrors()) {
                    $invalidItems_b4374395f50bba586a9d4335d391a235[$index] = $this->_errorRegistry->getErrors();
                }
            
        } catch (\Exception $e) {
            // collect all errors concerning invalid items
            isset($invalidItems_b4374395f50bba586a9d4335d391a235[$index])
                ? $invalidItems_b4374395f50bba586a9d4335d391a235[$index][] = $e
                : $invalidItems_b4374395f50bba586a9d4335d391a235[$index] = [$e];
        }
    }

    
        $this->_errorRegistry = $originalErrorRegistry;
    

    return !empty($invalidItems_b4374395f50bba586a9d4335d391a235);
})($value)) {
                        $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Arrays\InvalidItemException($value ?? null, ...array (
  0 => 'feed_field_mappings',
  1 => $invalidItems_b4374395f50bba586a9d4335d391a235,
)));
                    }
                }


}

// @codeCoverageIgnoreEnd
