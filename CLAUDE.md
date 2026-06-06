# CLAUDE.md

## Clarification policy

Before starting any non-trivial task — one that has more than one degree of freedom, including
architectural choices, naming decisions, scope boundaries, approach selection, or any other point
where multiple valid implementations exist — Claude must identify every such ambiguity and ask the
user to resolve it.

Rules:

- When there are multiple clarifying questions to ask, ask them **one at a time**, in order of
  dependency (earlier answers may resolve later questions). Wait for the answer before asking the
  next question. This allows the user to discuss each point in depth without being overwhelmed by
  a wall of questions.
- If new ambiguities emerge during execution that were not foreseeable upfront, pause and ask
  follow-up questions before proceeding past that decision point.
- For high-stakes decisions (architecture, scope, data model, API shape, behaviour changes) always
  block and wait for an explicit answer.
- For low-stakes decisions (minor naming, formatting, trivially reversible choices) Claude may
  proceed with a clearly stated assumption rather than blocking, but must make the assumption
  visible so the user can correct it.
- There must be no silent interpretation or interpolation of under-specified tasks. If something is
  unclear, ask. Do not guess and proceed.
- For multi-phase implementations, **never start the next phase without an explicit go-ahead from
  the user**. After completing a phase, summarise what was done and wait for confirmation before
  proceeding.

---

This is a **test harness wrapper** for [php-json-schema-model-generator](https://github.com/wol-soft/php-json-schema-model-generator).
Its purpose is to write complex schema tests, find issues in the library, and create upstream PRs.

The actual library code lives in git submodules under `packages/`:
- `packages/php-json-schema-model-generator` — the main generator library (fork `torian257x/php-json-schema-model-generator`, branch `v3ready-ai-fixed`)
- `packages/php-json-schema-model-generator-production` — the runtime production library (fork `torian257x/php-json-schema-model-generator-production`)

## First-time setup

```bash
# Clone with submodules
git clone --recurse-submodules git@github.com:torian257x/wolsoftgenerator.git
# OR after a plain clone:
git submodule update --init --recursive

# Install dependencies
composer update
```

## Workflow

### Writing tests

All tests go inside the submodule at `packages/php-json-schema-model-generator/tests/`.
Follow the patterns in the submodule's `CLAUDE.md` (`packages/php-json-schema-model-generator/CLAUDE.md`).

### Running tests

```bash
# Run all tests (from root — uses submodule's phpunit config)
./vendor/bin/phpunit

# Run a specific test
./vendor/bin/phpunit --filter testMethodName

# Full test suite with output capture
php -d memory_limit=128M ./vendor/bin/phpunit --no-coverage --display-warnings 2>&1 | \
  sed 's/\x1b\[[0-9;]*m//g' > /tmp/phpunit-output.txt; \
  tail -5 /tmp/phpunit-output.txt && \
  grep -E "FAIL|ERROR|WARN|Tests:" /tmp/phpunit-output.txt
```

### Creating upstream PRs

1. Write tests in `packages/php-json-schema-model-generator/tests/`
2. If they reveal bugs, fix the code in `packages/php-json-schema-model-generator/src/`
3. Commit and push from within the submodule to your fork
4. Open a PR from your fork to `wol-soft/php-json-schema-model-generator`

```bash
# Work inside the submodule
cd packages/php-json-schema-model-generator
# Create a feature branch
git checkout -b fix/my-fix
# Commit changes
git add tests/ src/
git commit -m "Fix ..."
git push origin fix/my-fix
# Then open PR at https://github.com/torian257x/php-json-schema-model-generator
```

## Key paths

| What | Path |
|------|------|
| Main library code | `packages/php-json-schema-model-generator/src/` |
| Production library | `packages/php-json-schema-model-generator-production/src/` |
| Test files | `packages/php-json-schema-model-generator/tests/` |
| Test schema files | `packages/php-json-schema-model-generator/tests/Schema/` |
| Test bootstrap | `packages/php-json-schema-model-generator/tests/bootstrap.php` |

## Architecture

See `packages/php-json-schema-model-generator/CLAUDE.md` for the full architecture description.
