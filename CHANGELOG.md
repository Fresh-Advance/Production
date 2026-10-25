# Change Log for Fresh Advance Production base

All notable changes to this project will be documented in this file.
The format is based on [Keep a Changelog](http://keepachangelog.com/)
and this project adheres to [Semantic Versioning](http://semver.org/).

## [v1.1.0] - 2026-10-25

### Added
- Deflate module turned on and gzip compression enabled
- Preconfigure and enable HTTP/2
- PHP 8.4 and 8.5 base images for the PHP-FPM container, built alongside the existing 8.3 image

### Fixed
- PHP-FPM 8.3 base image build: `libavif15` renamed to `libavif16` and missing `libicu-dev` added so `gd` and `intl` compile against the current Debian base

## [v1.0.0] - 2025-05-02

[v1.1.0]: https://github.com/Fresh-Advance/Production/compare/v1.0.0...v1.1.0
[v1.0.0]: https://github.com/Fresh-Advance/Production/compare/64b5286d...v1.0.0