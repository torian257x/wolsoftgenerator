<?php

// @codingStandardsIgnoreFile
// @codeCoverageIgnoreStart

declare(strict_types = 1);


    namespace AdCP\MediaBuy;



    use PHPModelGenerator\Interfaces\BuilderInterface;

    use PHPModelGenerator\Exception\ErrorRegistryException;

    use AdCP\MediaBuy\Enums\CatalogType;

    use AdCP\MediaBuy\Enums\FeedFormat;

    use AdCP\MediaBuy\Enums\UpdateFrequency;

    use AdCP\MediaBuy\Enums\EventType;

    use AdCP\MediaBuy\Enums\ContentIDType;


/**
 * Builder class for GetProductsRequest_Catalog
 */
class GetProductsRequest_CatalogBuilder implements BuilderInterface
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
     * Set up a new instance of GetProductsRequest_Catalog with fully validated properties
     */
    public function validate(): GetProductsRequest_Catalog
    {
        $this->_array_walk_recursive_real(
            $this->_rawModelDataInput,
            function (&$property): void {
                if ($property instanceof BuilderInterface) {
                    $property = $property->getRawModelDataInput();
                }
            },
        );

        return new GetProductsRequest_Catalog($this->_rawModelDataInput);
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
             * Get the value of catalog_id.
             *
             * Buyer's identifier for this catalog. Required when syncing via sync_catalogs. When used in creatives, references a previously synced catalog on the account.
             *
             * @return string|null
             */
            public function getCatalogId(): ?string
            {
                return $this->_rawModelDataInput['catalog_id'] ?? null;
            }

            /**
             * Set the value of catalog_id.
             *
             * @param string $catalogId Buyer's identifier for this catalog. Required when syncing via sync_catalogs. When used in creatives, references a previously synced catalog on the account.
             *
             * {@link GetProductsRequest_Catalog::processCatalogId}
             * 
             *
             * @return static
             */
            public function setCatalogId(
                string $catalogId
            ): static {
                if (array_key_exists('catalog_id', $this->_rawModelDataInput)
                    && $this->_rawModelDataInput['catalog_id'] === $catalogId
                ) {
                    return $this;
                }

                $value = $modelData['catalog_id'] = $catalogId;

                

                

                $this->_rawModelDataInput['catalog_id'] = $value;

                return $this;
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
                return $this->_rawModelDataInput['name'] ?? null;
            }

            /**
             * Set the value of name.
             *
             * @param string $name Human-readable name for this catalog (e.g., 'Summer Products 2025', 'Amsterdam Store Locations').
             *
             * {@link GetProductsRequest_Catalog::processName}
             * 
             *
             * @return static
             */
            public function setName(
                string $name
            ): static {
                if (array_key_exists('name', $this->_rawModelDataInput)
                    && $this->_rawModelDataInput['name'] === $name
                ) {
                    return $this;
                }

                $value = $modelData['name'] = $name;

                

                

                $this->_rawModelDataInput['name'] = $value;

                return $this;
            }
        
    
        
            /**
             * Get the value of type.
             *
             * Catalog type. Structural types: 'offering' (AdCP Offering objects), 'product' (ecommerce entries), 'inventory' (stock per location), 'store' (physical locations), 'promotion' (deals and pricing). Vertical types: 'hotel', 'flight', 'job', 'vehicle', 'real_estate', 'education', 'destination', 'app' — each with an industry-specific item schema.
             *
             * @return string|CatalogType|null
             */
            public function getType(): string | CatalogType | null
            {
                return $this->_rawModelDataInput['type'] ?? null;
            }

            /**
             * Set the value of type.
             *
             * @param string|CatalogType $type Catalog type. Structural types: 'offering' (AdCP Offering objects), 'product' (ecommerce entries), 'inventory' (stock per location), 'store' (physical locations), 'promotion' (deals and pricing). Vertical types: 'hotel', 'flight', 'job', 'vehicle', 'real_estate', 'education', 'destination', 'app' — each with an industry-specific item schema.
             *
             * {@link GetProductsRequest_Catalog::processType}
             * 
             *
             * @return static
             */
            public function setType(
                string | CatalogType $type
            ): static {
                if (array_key_exists('type', $this->_rawModelDataInput)
                    && $this->_rawModelDataInput['type'] === $type
                ) {
                    return $this;
                }

                $value = $modelData['type'] = $type;

                

                

                $this->_rawModelDataInput['type'] = $value;

                return $this;
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
                return $this->_rawModelDataInput['url'] ?? null;
            }

            /**
             * Set the value of url.
             *
             * @param string $url URL to an external catalog feed. The platform fetches and resolves items from this URL. For offering-type catalogs, the feed contains an array of Offering objects. For other types, the feed format is determined by feed_format. When omitted with type 'product', the platform uses its synced copy of the brand's product catalog.
             *
             * {@link GetProductsRequest_Catalog::processUrl}
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
             * Get the value of feed_format.
             *
             * Format of the external feed at url. Required when url points to a non-AdCP feed (e.g., Google Merchant Center XML, Meta Product Catalog). Omit for offering-type catalogs where the feed is native AdCP JSON.
             *
             * @return string|FeedFormat|null
             */
            public function getFeedFormat(): string | FeedFormat | null
            {
                return $this->_rawModelDataInput['feed_format'] ?? null;
            }

            /**
             * Set the value of feed_format.
             *
             * @param string|FeedFormat|null $feedFormat Format of the external feed at url. Required when url points to a non-AdCP feed (e.g., Google Merchant Center XML, Meta Product Catalog). Omit for offering-type catalogs where the feed is native AdCP JSON.
             *
             * {@link GetProductsRequest_Catalog::processFeedFormat}
             * 
             *
             * @return static
             */
            public function setFeedFormat(
                string | FeedFormat | null $feedFormat
            ): static {
                if (array_key_exists('feed_format', $this->_rawModelDataInput)
                    && $this->_rawModelDataInput['feed_format'] === $feedFormat
                ) {
                    return $this;
                }

                $value = $modelData['feed_format'] = $feedFormat;

                

                

                $this->_rawModelDataInput['feed_format'] = $value;

                return $this;
            }
        
    
        
            /**
             * Get the value of update_frequency.
             *
             * How often the platform should re-fetch the feed from url. Only applicable when url is provided. Platforms may use this as a hint for polling schedules.
             *
             * @return string|UpdateFrequency|null
             */
            public function getUpdateFrequency(): string | UpdateFrequency | null
            {
                return $this->_rawModelDataInput['update_frequency'] ?? null;
            }

            /**
             * Set the value of update_frequency.
             *
             * @param string|UpdateFrequency|null $updateFrequency How often the platform should re-fetch the feed from url. Only applicable when url is provided. Platforms may use this as a hint for polling schedules.
             *
             * {@link GetProductsRequest_Catalog::processUpdateFrequency}
             * 
             *
             * @return static
             */
            public function setUpdateFrequency(
                string | UpdateFrequency | null $updateFrequency
            ): static {
                if (array_key_exists('update_frequency', $this->_rawModelDataInput)
                    && $this->_rawModelDataInput['update_frequency'] === $updateFrequency
                ) {
                    return $this;
                }

                $value = $modelData['update_frequency'] = $updateFrequency;

                

                

                $this->_rawModelDataInput['update_frequency'] = $value;

                return $this;
            }
        
    
        
            /**
             * Get the value of items.
             *
             * Inline catalog data. The item schema depends on the catalog type: Offering objects for 'offering', StoreItem for 'store', HotelItem for 'hotel', FlightItem for 'flight', JobItem for 'job', VehicleItem for 'vehicle', RealEstateItem for 'real_estate', EducationItem for 'education', DestinationItem for 'destination', AppItem for 'app', or freeform objects for 'product', 'inventory', and 'promotion'. Mutually exclusive with url — provide one or the other, not both. Implementations should validate items against the type-specific schema.
             *
             * @return GetProductsRequest_ItemOfArrayItems01fc056eed58c88fe1c507fcd84dd4b7[]|GetProductsRequest_ItemOfArrayItems01fc056eed58c88fe1c507fcd84dd4b7Builder[]|array|null
             */
            public function getItems(): mixed
            {
                return $this->_rawModelDataInput['items'] ?? null;
            }

            /**
             * Set the value of items.
             *
             * @param GetProductsRequest_ItemOfArrayItems01fc056eed58c88fe1c507fcd84dd4b7[]|GetProductsRequest_ItemOfArrayItems01fc056eed58c88fe1c507fcd84dd4b7Builder[]|array $items Inline catalog data. The item schema depends on the catalog type: Offering objects for 'offering', StoreItem for 'store', HotelItem for 'hotel', FlightItem for 'flight', JobItem for 'job', VehicleItem for 'vehicle', RealEstateItem for 'real_estate', EducationItem for 'education', DestinationItem for 'destination', AppItem for 'app', or freeform objects for 'product', 'inventory', and 'promotion'. Mutually exclusive with url — provide one or the other, not both. Implementations should validate items against the type-specific schema.
             *
             * {@link GetProductsRequest_Catalog::processItems}
             * 
             *
             * @return static
             */
            public function setItems(
                mixed $items
            ): static {
                if (array_key_exists('items', $this->_rawModelDataInput)
                    && $this->_rawModelDataInput['items'] === $items
                ) {
                    return $this;
                }

                $value = $modelData['items'] = $items;

                

                

                $this->_rawModelDataInput['items'] = $value;

                return $this;
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
                return $this->_rawModelDataInput['ids'] ?? null;
            }

            /**
             * Set the value of ids.
             *
             * @param string[] $ids Filter catalog to specific item IDs. For offering-type catalogs, these are offering_id values. For product-type catalogs, these are SKU identifiers.
             *
             * {@link GetProductsRequest_Catalog::processIds}
             * 
             *
             * @return static
             */
            public function setIds(
                array $ids
            ): static {
                if (array_key_exists('ids', $this->_rawModelDataInput)
                    && $this->_rawModelDataInput['ids'] === $ids
                ) {
                    return $this;
                }

                $value = $modelData['ids'] = $ids;

                

                

                $this->_rawModelDataInput['ids'] = $value;

                return $this;
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
                return $this->_rawModelDataInput['gtins'] ?? null;
            }

            /**
             * Set the value of gtins.
             *
             * @param string[] $gtins Filter product-type catalogs by GTIN identifiers for cross-retailer catalog matching. Accepts standard GTIN formats (GTIN-8, UPC-A/GTIN-12, EAN-13/GTIN-13, GTIN-14). Only applicable when type is 'product'.
             *
             * {@link GetProductsRequest_Catalog::processGtins}
             * 
             *
             * @return static
             */
            public function setGtins(
                array $gtins
            ): static {
                if (array_key_exists('gtins', $this->_rawModelDataInput)
                    && $this->_rawModelDataInput['gtins'] === $gtins
                ) {
                    return $this;
                }

                $value = $modelData['gtins'] = $gtins;

                

                

                $this->_rawModelDataInput['gtins'] = $value;

                return $this;
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
                return $this->_rawModelDataInput['tags'] ?? null;
            }

            /**
             * Set the value of tags.
             *
             * @param string[] $tags Filter catalog to items with these tags. Tags are matched using OR logic — items matching any tag are included.
             *
             * {@link GetProductsRequest_Catalog::processTags}
             * 
             *
             * @return static
             */
            public function setTags(
                array $tags
            ): static {
                if (array_key_exists('tags', $this->_rawModelDataInput)
                    && $this->_rawModelDataInput['tags'] === $tags
                ) {
                    return $this;
                }

                $value = $modelData['tags'] = $tags;

                

                

                $this->_rawModelDataInput['tags'] = $value;

                return $this;
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
                return $this->_rawModelDataInput['category'] ?? null;
            }

            /**
             * Set the value of category.
             *
             * @param string $category Filter catalog to items in this category (e.g., 'beverages/soft-drinks', 'chef-positions').
             *
             * {@link GetProductsRequest_Catalog::processCategory}
             * 
             *
             * @return static
             */
            public function setCategory(
                string $category
            ): static {
                if (array_key_exists('category', $this->_rawModelDataInput)
                    && $this->_rawModelDataInput['category'] === $category
                ) {
                    return $this;
                }

                $value = $modelData['category'] = $category;

                

                

                $this->_rawModelDataInput['category'] = $value;

                return $this;
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
                return $this->_rawModelDataInput['query'] ?? null;
            }

            /**
             * Set the value of query.
             *
             * @param string $query Natural language filter for catalog items (e.g., 'all pasta sauces under $5', 'amsterdam vacancies').
             *
             * {@link GetProductsRequest_Catalog::processQuery}
             * 
             *
             * @return static
             */
            public function setQuery(
                string $query
            ): static {
                if (array_key_exists('query', $this->_rawModelDataInput)
                    && $this->_rawModelDataInput['query'] === $query
                ) {
                    return $this;
                }

                $value = $modelData['query'] = $query;

                

                

                $this->_rawModelDataInput['query'] = $value;

                return $this;
            }
        
    
        
            /**
             * Get the value of conversion_events.
             *
             * Event types that represent conversions for items in this catalog. Declares what events the platform should attribute to catalog items — e.g., a job catalog converts via submit_application, a product catalog via purchase. The event's content_ids field carries the item IDs that connect back to catalog items. Use content_id_type to declare what identifier type content_ids values represent.
             *
             * @return string[]|EventType[]|null
             */
            public function getConversionEvents(): array | EventType | null
            {
                return $this->_rawModelDataInput['conversion_events'] ?? null;
            }

            /**
             * Set the value of conversion_events.
             *
             * @param string[]|EventType[]|null $conversionEvents Event types that represent conversions for items in this catalog. Declares what events the platform should attribute to catalog items — e.g., a job catalog converts via submit_application, a product catalog via purchase. The event's content_ids field carries the item IDs that connect back to catalog items. Use content_id_type to declare what identifier type content_ids values represent.
             *
             * {@link GetProductsRequest_Catalog::processConversionEvents}
             * 
             *
             * @return static
             */
            public function setConversionEvents(
                array | EventType | null $conversionEvents
            ): static {
                if (array_key_exists('conversion_events', $this->_rawModelDataInput)
                    && $this->_rawModelDataInput['conversion_events'] === $conversionEvents
                ) {
                    return $this;
                }

                $value = $modelData['conversion_events'] = $conversionEvents;

                

                

                $this->_rawModelDataInput['conversion_events'] = $value;

                return $this;
            }
        
    
        
            /**
             * Get the value of content_id_type.
             *
             * Identifier type that the event's content_ids field should be matched against for items in this catalog. For example, 'gtin' means content_ids values are Global Trade Item Numbers, 'sku' means retailer SKUs. Omit when using a custom identifier scheme not listed in the enum.
             *
             * @return string|ContentIDType|null
             */
            public function getContentIdType(): string | ContentIDType | null
            {
                return $this->_rawModelDataInput['content_id_type'] ?? null;
            }

            /**
             * Set the value of content_id_type.
             *
             * @param string|ContentIDType|null $contentIdType Identifier type that the event's content_ids field should be matched against for items in this catalog. For example, 'gtin' means content_ids values are Global Trade Item Numbers, 'sku' means retailer SKUs. Omit when using a custom identifier scheme not listed in the enum.
             *
             * {@link GetProductsRequest_Catalog::processContentIdType}
             * 
             *
             * @return static
             */
            public function setContentIdType(
                string | ContentIDType | null $contentIdType
            ): static {
                if (array_key_exists('content_id_type', $this->_rawModelDataInput)
                    && $this->_rawModelDataInput['content_id_type'] === $contentIdType
                ) {
                    return $this;
                }

                $value = $modelData['content_id_type'] = $contentIdType;

                

                

                $this->_rawModelDataInput['content_id_type'] = $value;

                return $this;
            }
        
    
        
            /**
             * Get the value of feed_field_mappings.
             *
             * Declarative normalization rules for external feeds. Maps non-standard feed field names, date formats, price encodings, and image URLs to the AdCP catalog item schema. Applied during sync_catalogs ingestion. Supports field renames, named transforms (date, divide, boolean, split), static literal injection, and assignment of image URLs to typed asset pools.
             *
             * @return GetProductsRequest_CatalogFieldMapping[]|GetProductsRequest_CatalogFieldMappingBuilder[]|array|null
             */
            public function getFeedFieldMappings(): mixed
            {
                return $this->_rawModelDataInput['feed_field_mappings'] ?? null;
            }

            /**
             * Set the value of feed_field_mappings.
             *
             * @param GetProductsRequest_CatalogFieldMapping[]|GetProductsRequest_CatalogFieldMappingBuilder[]|array $feedFieldMappings Declarative normalization rules for external feeds. Maps non-standard feed field names, date formats, price encodings, and image URLs to the AdCP catalog item schema. Applied during sync_catalogs ingestion. Supports field renames, named transforms (date, divide, boolean, split), static literal injection, and assignment of image URLs to typed asset pools.
             *
             * {@link GetProductsRequest_Catalog::processFeedFieldMappings}
             * 
             *
             * @return static
             */
            public function setFeedFieldMappings(
                mixed $feedFieldMappings
            ): static {
                if (array_key_exists('feed_field_mappings', $this->_rawModelDataInput)
                    && $this->_rawModelDataInput['feed_field_mappings'] === $feedFieldMappings
                ) {
                    return $this;
                }

                $value = $modelData['feed_field_mappings'] = $feedFieldMappings;

                

                

                $this->_rawModelDataInput['feed_field_mappings'] = $value;

                return $this;
            }
        
    
}

// @codeCoverageIgnoreEnd
