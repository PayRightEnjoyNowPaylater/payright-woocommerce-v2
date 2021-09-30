# Change Log
All notable changes to the Payright plugin will be documented in this file.

The format is based on **Keep a Changelog** and this project adheres to Semantic Versioning (`semver`).

# How to use
In each changelog record, we use these keywords as part of the template description:
1. `recommended` - to notify plugin user that it is a `stable` plugin version, we highly recommend downloading and use.
2. `optional` - to notify plugin user that it is not necessary to download this plugin version, `optional` to download and use.

Why are we following these keywords? Our `semver` practices interpreted differently, our `minor` and `patch` versions are "mixed".

# Testing
Update this section with the latest testing information and details, of the platform / plugins tested on. 

Please see README.md, for minimum WordPress & WooCommerce platform versions.

<p>WordPress: 5.7.2</p>
<p>WooCommerce: 5.4.1</p>

## [2.1.0] - 2021-09-30
This is a `recommended` release to download and update your plugin version with.

## Fixed
1. Hotfix: Fixed 'display term' copy text, only for 'checkout page'. For example, in plugin settings > toggle 'display term' selection > save settings, then proceed to 'checkout page' and select Payright as 'payment method'.

## [2.0.11] - 2021-09-17
This is a `optional` release to download and update your plugin version with.

## Changed
1. Feature: Changed "Display Term" feature, to only allow WooCommerce AU stores to have "Fortnightly" and "Monthly" term only. Thus:
   1. If store is AU region, display term options = \['Fortnightly', 'Monthly'\]
   2. If store is NZ region, display term options = \['Weekly', 'Fortnightly', 'Monthly'\]

## Fixed
1. Hotfix: Fixed 'display term' copytext. For example, see 'single product item page' now shows 'selected term' in plugin settings.

## [2.0.10] - 2021-07-27
This is a `optional` release to download and update your plugin version with.

## Changed
1. Feature: Changed "Display Term" feature, to only allow WooCommerce AU stores to have "Fortnightly" term only. Thus:
   1. If store is AU region, display term options = \['Fortnightly'\]
   2. If store is NZ region, display term options = \['Weekly', 'Fortnightly'\]
2. Refactor: Additional codebase refactoring.

## [2.0.9] - 2021-07-21
This is a `optional` release to download and update your plugin version with.

## Changed
1. Refactor: Minor codebase refactoring, and spelling corrections.

## [2.0.8] - 2021-07-13
This is a `optional` release to download and update your plugin version with.

> Important: The "Display Term" feature has been changed, see `v2.0.10` for more information.

## Added
1. Feature: Added new configuration dropdown field, called "Display Term" (default - Fortnightly, Weekly).
2. Documentation: Added new markdown files - license, readme and changelog (this file, here).
## Changed
1. Refactor: Minor codebase refactoring, and spelling corrections.
## Fixed
1. Hotfix: Fixed plugin version to bump to v2.0.8 version.

## [2.0.7] - 2021-07-08
This is a `recommended` release to download and update your plugin version with.

## Added
1. Feature: Uploaded new Payright SVG files.
## Changed
1. Feature: Changed the default Payright PNG files to SVG files.
2. Refactor: Separation of the PNG and SVG files usage.

## [2.0.6] - 2021-06-07
This is a `optional` release to download and update your plugin version with.

## Fixed
1. Hotfix: Changed CSS properties to fix PNG and SVG files rendered on front-end.
2. Hotfix: Cleared loading cache of CSS files.

## [2.0.5] - 2021-03-24
This is a `recommended` release to download and update your plugin version with.

## Fixed
1. Hotfix: Fixed instalments display logic.

## [2.0.4] - 2021-03-23
This is a `recommended` release to download and update your plugin version with.

## Fixed
1. Hotfix: Fix for the session stalling issue caused by open session.