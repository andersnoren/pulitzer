=== Pulitzer ===
Contributors: Anlino
Donate link: https://www.paypal.com/cgi-bin/webscr?cmd=_donations&business=anders%40andersnoren%2ese&lc=US&item_name=Free%20WordPress%20Themes%20from%20Anders%20Noren&currency_code=USD&bn=PP%2dDonationsBF%3abtn_donateCC_LG%2egif%3aNonHosted
Requires at least: 6.5
Requires PHP: 7.0
Tested up to: 6.5
Stable tag: trunk
License: GPLv2 or later
License URI: https://www.gnu.org/licenses/gpl-2.0.html

== Installation ==

1. Make sure you're running WordPress 6.5 or later.
2. Upload the theme.
3. Activate the theme.

== Copyright ==

Pulitzer WordPress Theme, (C) 2024 Anders Norén.
Pulitzer is distributed under the terms of the GNU GPL.

This program is free software: you can redistribute it and/or modify
it under the terms of the GNU General Public License as published by
the Free Software Foundation, either version 2 of the License, or
(at your option) any later version.

This program is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
GNU General Public License for more details.

== Licenses ==

Pulitzer is derived from the Twenty Twenty-Four WordPress Theme, (C) 2023 WordPress.org.
Pulitzer is derived from the Norrsken WordPress Theme, (C) 2024 Anders Norén.

Pulitzer includes or bases code from the following resources:

x3p0-ideas by Justin Tadlock
Description: Block bindings API structure and reading time code.
License: GNU General Public License, 3.0, https://www.gnu.org/licenses/gpl-3.0.html
Source: https://github.com/x3p0-dev/x3p0-ideas

Pulitzer bundles the following third-party resources:

Newsreader font
License: SIL Open Font License, 1.1, https://opensource.org/licenses/OFL-1.1
Source: https://github.com/productiontype/Newsreader

Comments icon
License: MIT License, https://opensource.org/license/mit
Source: https://phosphoricons.com

Checkmark icon by Anders Norén
License: Public Domain
Source: Created for the theme

=== Images in screenshot.png ===

Joseph Pulitzer photograph
License: CC0, https://creativecommons.org/public-domain/cc0/
Source: https://commons.wikimedia.org/wiki/File:JosephPulitzerPinceNeznpsgov.jpg

== Changelog ==

Version 1.0.2 (2024-05-13)
-------------------------
- Fixed the default RSS feed URL in the footer social icons.

Version 1.0.1 (2024-05-07)
-------------------------
- Fixed test output being included in pulitzer_block_binding_callback_post_reading_time().
- Added default vertical margins to embed and video blocks.
- Updated stylesheet enqueues to make sure the parent theme stylesheets are loaded even when a child theme is active.
- theme.json cleanup in styles:blocks.
- Post Terms: Outlined terms block style – fixed links overlapping when there are multiple rows.
- Jetpack Like button: Improved alignment with sharing buttons on single posts.
- Removed button hover styles.
- Removed negative letter-spacing from the H1 and H2 headings.
- Updated the default vertical spacing of the following blocks: Image, Video, Gallery, and Embed.
- Navigation: Set the current menu item to have the contrast text color.
- Header: Removed the background color, since it's the same as the body background color.
- Separator: Adjusted default vertical margins.
- Fixed specificity issue with overwriting default spacing between direct descendants of .wp-site-blocks.
- Single: Allow the row with like and share buttons to wrap.
- Pullquote: Bumped default vertical margin to 64px.
- Fixed height of styled comment reply and edit links.
- Footnotes: Improved styling.
- Page layout patterns: Wrapped the content in constrained groups to improve the pattern preview layout.
- Removed use of undefined `heading` fontFamily variable.
- Simplified the theme.json values for headings.
- Set a default font size for input styles.
- Block styles: Remove style_handle parameter, since the theme doesn't use it.
- List: Increased default vertical margin.
- List: Added "Checkmark icon" and "Circled checkmark list" block styles.
- Updated theme description.
- New theme styles: Humanist, Parchment.

Version 1.0.0 (2024-04-28)
-------------------------