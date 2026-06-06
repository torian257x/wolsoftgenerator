# Development Status

## Purpose

This repository is a **test harness** for [php-json-schema-model-generator](https://github.com/wol-soft/php-json-schema-model-generator).
It generates PHP model classes from real-world [AdCP](https://github.com/adcontextprotocol/adcp) media-buy JSON schemas,
exercises them via builder/validate/serialize round-trips, and identifies bugs
to be fixed upstream via PRs to `wol-soft/php-json-schema-model-generator`.

The library code lives in git submodules:
- `packages/php-json-schema-model-generator` — main generator (fork `torian257x/php-json-schema-model-generator`, branch `v3ready-ai-fixed`)
- `packages/php-json-schema-model-generator-production` — runtime production library (fork `torian257x/php-json-schema-model-generator-production`, branch `v3ready`)

## Test Coverage

| Test | Status | Notes |
|------|--------|-------|
| `MediaBuySchemasTest::testGetMediaBuysRequestRoundTrip` | ✅ PASS | Full builder → validate → toArray → rehydrate round-trip with `get-media-buys-request.json` |

### Schema files

25 bundled AdCP media-buy schema files in `tests/Schema/MediaBuySchemasTest/`, all
`$ref`-resolved bundled versions from `adcp/dist/schemas/3.1.0-rc.9/bundled/media-buy/`.

## Known Bugs

### Fixed and Pushed

| ID | Description | Fix |
|----|-------------|-----|
| B1 | **Filter classes missing `getAcceptedTypes()`** — PHP 8.4 enforces abstract method implementation on `implements`, causing fatal errors for all 5 filter classes + `EnumFilter`. | Added `getAcceptedTypes()` returning relevant types. |
| B2 | **Filter callbacks reference non-existent runtime classes** — `GeneratorConfiguration` registered `MediaStringFilter` and `ImmutableMediaStringFilter` whose callable classes (`MediaString`, `ImmutableMediaString`) don't exist in the production library. | Removed the two broken registrations from `GeneratorConfiguration`. |
| B3 | **Format validators not null-safe** — `FormatValidatorInterface::validate()` declared `string` instead of `?string`, and all implementations rejected `null`. | Changed signature to `validate(?string)` and added null guards in `FormatValidatorFromRegEx`. |
| B8 | **Private methods inaccessible for serialization** — `SerializableTrait` declared `_getSerializedValue()` and `_getCustomSerializerMethod()` as `private`, but serialization templates call them as `public`. | Added `public` wrapper methods `getSerializedValue()` and `getCustomSerializerMethod()`. |
| B9 | **Missing format validator classes** — 7 format types declared in the generator (`ipv6`, `uri`, `uri-reference`, `uri-template`, `iri`, `iri-reference`, `regex`) had no corresponding validator class in the production library, causing runtime fatal errors. | Created all 7 classes extending `FormatValidatorFromRegEx`. |

### Unfixed — Generator Core Bugs

| ID | Description | Impact | Priority |
|----|-------------|--------|----------|
| B4 | **Merge class oneOf validation uses camelCase property names instead of schema snake_case keys** — When a oneOf merge class is generated, its `AdditionalProperties` validation checks against PHP camelCase names (e.g., `accountReference`) instead of schema keys (e.g., `account_reference`). This causes all valid data to be rejected. | All schemas with oneOf merge classes (e.g., `AccountReference` in `account` property, `pagination` with `page`/`pageSize`) | High |
| B5 | **Class name explosion for deeply nested objects** — Nested object class names compound the parent name repeatedly (e.g., `GetMediaBuysResponseRootPropertyDataItemsMediaBuyDeliveryStatus`), hitting filesystem/path limits on deep schemas. | Schemas with 5+ levels of nesting (`get-media-buys-response`, `get-products-request`, `sync-catalogs-response`, `build-creative-*`, `package-request`, etc.) | High |
| B6 | **Required child properties override parent oneOf composition** — When a property with `oneOf` subtypes also has required child properties, the generated model demands all subtypes validate simultaneously, causing validation to always fail. | Related to B4 — affected schemas with nested oneOf | Medium |
| B7 | **Root-level oneOf in protocol envelope unsupported by builder pattern** — Response schemas use a `success`/`errors` envelope via root-level oneOf, which the builder constructor does not handle correctly. | All response schemas | Medium |
| B11 | **`toArray()` output incompatible with constructor input** — `SerializableTrait::_getValues()` outputs PHP property names (camelCase, e.g., `includeSnapshot`), but the constructor expects schema property names (snake_case, e.g., `include_snapshot`). The `#[SchemaName]` attribute is ignored during serialization, breaking the round-trip. | All models with snake_case properties | High |

### Test Harness Issues

| ID | Description | Workaround |
|----|-------------|------------|
| B10 | **Memory exhaustion in batch runs** — PHP keeps all generated class definitions in memory across `@DataProvider` iterations. After 2–3 tests, PHP runs out of memory or hits internal class-table limits. | Use individual test methods, not data providers for large schemas. Run each test in isolation with `--filter`. |

## Unresolved Questions

1. **Class naming strategy for deeply nested objects** — Should use a deterministic hash like `Object_N` or a flat counter instead of compounding parent names. Needs discussion with upstream maintainer.
2. **toArray output format** — Should `toArray()` return schema keys (for constructor compatibility) or PHP property names (for internal consistency)? The `SerializableTrait` uses PHP property names, but the constructor needs schema keys. A fix could be using `#[SchemaName]` attribute in serialization.
3. **Root-level oneOf support** — How should the builder pattern handle response envelopes with `oneOf { success: ..., errors: ... }`? Options include a discriminated union or wrapper class.

## Next Steps

1. Fix B4: Make merge-class property validation use schema property names instead of PHP camelCase.
2. Fix B5: Replace compounded class naming with a deterministic hash scheme.
3. Fix B11: Make `toArray()` output schema-compatible keys (use `#[SchemaName]` attribute).
4. Fix B7: Support root-level oneOf in builder/constructor.
5. Add excluded large schemas back to data provider once B5/B7 are fixed.
6. Open PRs to `wol-soft/php-json-schema-model-generator` for each fix.

## Branches

| Branch | Purpose | Base |
|--------|---------|------|
| `pr-schemaname-fix` | Current work branch (root repo) | — |
| `v3ready-ai-fixed` | Generator submodule fork branch | `wol-soft/v3ready` |
| `v3ready` | Production submodule fork branch | `wol-soft/v3ready` |
