# wolsoftgenerator

Test harness for [php-json-schema-model-generator](https://github.com/wol-soft/php-json-schema-model-generator).

Write complex schema tests to find issues in the library, then create pull requests upstream to fix them.

## Setup

```bash
git clone --recurse-submodules git@github.com:torian257x/wolsoftgenerator.git
composer update
```

## Run tests

```bash
./vendor/bin/phpunit
```

## Workflow

1. Write tests in `packages/php-json-schema-model-generator/tests/`
2. If tests reveal bugs, fix code in `packages/php-json-schema-model-generator/src/`
3. Commit and push from within the submodule to your fork
4. Open a PR to `wol-soft/php-json-schema-model-generator`

See `CLAUDE.md` for full details.
