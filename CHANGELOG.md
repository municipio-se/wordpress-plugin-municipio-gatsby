## [3.0.0](https://github.com/municipio-se/wordpress-plugin-municipio-gatsby/compare/v2.0.0...v3.0.0) (2023-11-13)


### ⚠ BREAKING CHANGES

* Remove landing page template and add `whitespace_a11ystack_page_templates` filter
* Move code to whitespace-a11ystack plugin
* Move menu item fields to a11ystack plugin
* Remove theme color from manually input posts

### Features

* Add "Hide title" field to page appearance ([c924648](https://github.com/municipio-se/wordpress-plugin-municipio-gatsby/commit/c9246482415417736783917014ffafea66c0727d))
* Move menu item fields to a11ystack plugin ([5059171](https://github.com/municipio-se/wordpress-plugin-municipio-gatsby/commit/505917103afb5ea8d646b8ba5964783f505a1c3f))
* Remove landing page template and add `whitespace_a11ystack_page_templates` filter ([62b7842](https://github.com/municipio-se/wordpress-plugin-municipio-gatsby/commit/62b7842c9251c196c0275af24e7e951c0f721cc8))
* Remove theme color from manually input posts ([a437c99](https://github.com/municipio-se/wordpress-plugin-municipio-gatsby/commit/a437c9983af988fe0ea3a225cd0b66024d99d50c))


### Bug Fixes

* Remove theme color from manually input posts ([a763e58](https://github.com/municipio-se/wordpress-plugin-municipio-gatsby/commit/a763e5872aed01b3a8a89830ffdb1326333e81dc))


### Code Refactoring

* Move code to whitespace-a11ystack plugin ([e5fc409](https://github.com/municipio-se/wordpress-plugin-municipio-gatsby/commit/e5fc409c60c3b02410ec99b4db5a30f3bbbc1701))

## [2.0.0](https://github.com/municipio-se/wordpress-plugin-municipio-gatsby/compare/v1.3.1...v2.0.0) (2023-06-08)


### ⚠ BREAKING CHANGES

* Re-add image field on manual posts
* Remove simplified_mod_posts_layouts option
* Remove brand color settings

### Features

* Add `municipio-gatsby/color-choices` filter ([fd63151](https://github.com/municipio-se/wordpress-plugin-municipio-gatsby/commit/fd63151db227740ceee595767093e99103c4db62))
* Re-add image field on manual posts ([055c722](https://github.com/municipio-se/wordpress-plugin-municipio-gatsby/commit/055c72239fe52d7075899c7b933c42720f21e2c8))
* Remove brand color settings ([81b37e6](https://github.com/municipio-se/wordpress-plugin-municipio-gatsby/commit/81b37e6ae6a4cdfe2b3aada7843aaa9808be1bd8))
* Remove simplified_mod_posts_layouts option ([86c704d](https://github.com/municipio-se/wordpress-plugin-municipio-gatsby/commit/86c704de97ab40b415e8d38b4b4ecf8ffec49029))


### Bug Fixes

* Re-add brand color to gql schema for backwards compatibility ([b4a1a4e](https://github.com/municipio-se/wordpress-plugin-municipio-gatsby/commit/b4a1a4e62759af39ad4a13a2366de4adce3b078f))
* Remove color field instructions ([9551c07](https://github.com/municipio-se/wordpress-plugin-municipio-gatsby/commit/9551c079d3cb2f0fb4e183556aec2cf1de132034))
* Remove unimplemented fields from image module ([b36a14c](https://github.com/municipio-se/wordpress-plugin-municipio-gatsby/commit/b36a14c9424580bcfc372b7ac0dd1bf6dd59af9e))

### [1.3.1](https://github.com/municipio-se/wordpress-plugin-municipio-gatsby/compare/v1.3.0...v1.3.1) (2023-05-06)


### Bug Fixes

* Broken municipio-gatsby/mod-posts/data_display/fields/display_as/choices filter ([0987a0c](https://github.com/municipio-se/wordpress-plugin-municipio-gatsby/commit/0987a0c03ee16d14cf7e71228312379f519a7748))

## [1.3.0](https://github.com/municipio-se/wordpress-plugin-municipio-gatsby/compare/v1.2.5...v1.3.0) (2023-05-06)


### Features

* Add `municipio_gatsby_feature_enabled` function ([af1980a](https://github.com/municipio-se/wordpress-plugin-municipio-gatsby/commit/af1980a150f3491eac882771e80b92fe3f99c08f))
* Add `simplified_mod_posts_layouts` feature flag ([3e37f88](https://github.com/municipio-se/wordpress-plugin-municipio-gatsby/commit/3e37f88c54a69f137a9864ef86319e9127cb4489))

### [1.2.5](https://github.com/municipio-se/wordpress-plugin-municipio-gatsby/compare/v1.2.4...v1.2.5) (2023-03-07)


### Bug Fixes

* Runtime error in `graphql_return_field_from_model` ([f4a028c](https://github.com/municipio-se/wordpress-plugin-municipio-gatsby/commit/f4a028c0ea9ffc6f5100c88e866c1b42bdec69ad))

### [1.2.4](https://github.com/municipio-se/wordpress-plugin-municipio-gatsby/compare/v1.2.3...v1.2.4) (2022-11-21)


### Bug Fixes

* Handle db_storage field properly for form module ([636dd2e](https://github.com/municipio-se/wordpress-plugin-municipio-gatsby/commit/636dd2ef9615006d3de082f654664292c0ca8539))

### [1.2.3](https://github.com/municipio-se/wordpress-plugin-municipio-gatsby/compare/v1.2.2...v1.2.3) (2022-10-31)


### Bug Fixes

* add instructions to Link and Theme color for Manual input ([7935ab2](https://github.com/municipio-se/wordpress-plugin-municipio-gatsby/commit/7935ab290e50e7e6fb15c0853d7249fea3957789))

### [1.2.2](https://github.com/municipio-se/wordpress-plugin-municipio-gatsby/compare/v1.2.1...v1.2.2) (2022-10-31)


### Bug Fixes

* Disable error message about missing color scheme ([f0328db](https://github.com/municipio-se/wordpress-plugin-municipio-gatsby/commit/f0328db66f82e388f7ef4218fd28324de1d55141))
* Disable theme color for expandable list ([293c9af](https://github.com/municipio-se/wordpress-plugin-municipio-gatsby/commit/293c9af4cba299f5d39d30a05f12581eeec29f79))

### [1.2.1](https://github.com/municipio-se/wordpress-plugin-municipio-gatsby/compare/v1.2.0...v1.2.1) (2022-09-26)


### Bug Fixes

* Nested Pages not bootstrapped correctly ([606ec76](https://github.com/municipio-se/wordpress-plugin-municipio-gatsby/commit/606ec7651bf25f27c7d8de88307345b906abe378))

## [1.2.0](https://github.com/municipio-se/wordpress-plugin-municipio-gatsby/compare/v1.1.1...v1.2.0) (2022-09-25)


### Features

* Expose Nested Pages redirects in GraphQL ([f04e893](https://github.com/municipio-se/wordpress-plugin-municipio-gatsby/commit/f04e893e8ac088a853f018680844bf8a9d20a019))
* Hide Icon field in Notice module ([dca76b2](https://github.com/municipio-se/wordpress-plugin-municipio-gatsby/commit/dca76b20fdd6068402398e5e66f02f7421f51334))


### Bug Fixes

* Nested Pages bootstrap called to early ([0984389](https://github.com/municipio-se/wordpress-plugin-municipio-gatsby/commit/09843890c02d9707f4ec0be56b11f2a8f2b2c8a3))

### [1.1.1](https://github.com/municipio-se/wordpress-plugin-municipio-gatsby/compare/v1.1.0...v1.1.1) (2022-09-12)


### Bug Fixes

* "Front End taxonomy filtering" field not visible for all post types ([99d9d40](https://github.com/municipio-se/wordpress-plugin-municipio-gatsby/commit/99d9d403cb2b74692a6795c32d748313fdb4f67b))

## [1.1.0](https://github.com/municipio-se/wordpress-plugin-municipio-gatsby/compare/v1.0.1...v1.1.0) (2022-07-04)


### Features

* Add page fields ([edaaf8e](https://github.com/municipio-se/wordpress-plugin-municipio-gatsby/commit/edaaf8efdfa01049dd8cf250b4d10c2ca70f9b4e))


### Bug Fixes

* load language files when used as mu-plugin ([f9cbd5b](https://github.com/municipio-se/wordpress-plugin-municipio-gatsby/commit/f9cbd5b2c741527386db0186244137917a3a5b62))
* split textdomain loading strategies into separate hooks ([adb3a5f](https://github.com/municipio-se/wordpress-plugin-municipio-gatsby/commit/adb3a5fcd00768175d89f0df45c20888715a97b4))

### [1.0.1](https://github.com/municipio-se/wordpress-plugin-municipio-gatsby/compare/v1.0.0...v1.0.1) (2022-02-11)


### Bug Fixes

* Warning on missing brand colors ([677bc9c](https://github.com/municipio-se/wordpress-plugin-municipio-gatsby/commit/677bc9c4289d1dad8063a992759259bd2a2524d7))

## [1.0.0](https://github.com/municipio-se/wordpress-plugin-municipio-gatsby/compare/v0.8.3...v1.0.0) (2022-01-25)


### Bug Fixes

* Typo ([c60c18b](https://github.com/municipio-se/wordpress-plugin-municipio-gatsby/commit/c60c18b7f78661cd6c4dda8e696cd0cee9c0a8fd))

### [0.8.3](https://github.com/municipio-se/wordpress-plugin-municipio-gatsby/compare/v0.8.2...v0.8.3) (2021-12-21)


### Features

* parse hex codes in brand color yaml ([f7ed2bb](https://github.com/municipio-se/wordpress-plugin-municipio-gatsby/commit/f7ed2bbe4581f7129e2daad2f4d2cbaf3fae2257))

### [0.8.2](https://github.com/municipio-se/wordpress-plugin-municipio-gatsby/compare/v0.8.1...v0.8.2) (2021-12-21)


### Features

* add "municipio-gatsby/mod-form/mod-form-options/fields/disabled-layouts" filter ([e56cfbf](https://github.com/municipio-se/wordpress-plugin-municipio-gatsby/commit/e56cfbf806af2d7db5d27735afcce5385f499b5e))
* Improve parsing of brand colors ([67fe38c](https://github.com/municipio-se/wordpress-plugin-municipio-gatsby/commit/67fe38c74dad855fa6b756ad759de181540c1fe9))


### Bug Fixes

* Do not parse brand color name field ([7bf836c](https://github.com/municipio-se/wordpress-plugin-municipio-gatsby/commit/7bf836c6d46a62794380668b45f1a87860c9b380))

### [0.8.1](https://github.com/municipio-se/wordpress-plugin-municipio-gatsby/compare/v0.8.0...v0.8.1) (2021-11-08)


### Features

* add display settings to Gallery module ([c096069](https://github.com/municipio-se/wordpress-plugin-municipio-gatsby/commit/c096069ba811a364a1e240f7920a84c5b6710df4))


### Bug Fixes

* field key not matching name ([0c594c6](https://github.com/municipio-se/wordpress-plugin-municipio-gatsby/commit/0c594c640d63e56d484740eacf82e4948d98c5a4))
* restore translations ([44aaef4](https://github.com/municipio-se/wordpress-plugin-municipio-gatsby/commit/44aaef4a58a2d9d5786bfeaa841f09e6b6651189))
* translations ([f0067c4](https://github.com/municipio-se/wordpress-plugin-municipio-gatsby/commit/f0067c4edad1540045363b78f7c40d06f633d7dc))

## [0.8.0](https://github.com/municipio-se/wordpress-plugin-municipio-gatsby/compare/v0.7.0...v0.8.0) (2021-11-03)


### ⚠ BREAKING CHANGES

* re-add "Front End taxonomy filtering" field

### Features

* re-add "Front End taxonomy filtering" field ([88f3745](https://github.com/municipio-se/wordpress-plugin-municipio-gatsby/commit/88f3745de06f0bf6eeba9dc90fb509e434838f53))

## [0.7.0](https://github.com/municipio-se/wordpress-plugin-municipio-gatsby/compare/v0.6.2...v0.7.0) (2021-10-13)


### Features

* add "Icon" field to menu items ([2600007](https://github.com/municipio-se/wordpress-plugin-municipio-gatsby/commit/2600007557faf54e5e37b557fa56570a3fe05a4f))

### [0.6.2](https://github.com/municipio-se/wordpress-plugin-municipio-gatsby/compare/v0.6.1...v0.6.2) (2021-10-04)


### Features

* Disable unimplemented options on Video module ([46be83e](https://github.com/municipio-se/wordpress-plugin-municipio-gatsby/commit/46be83efa366b5ab9d6ea9ab6357d0e4d4717e5d))

### [0.6.1](https://github.com/municipio-se/wordpress-plugin-municipio-gatsby/compare/v0.6.0...v0.6.1) (2021-09-20)


### Features

* Add ability to post form module submissions via REST ([c5fa515](https://github.com/municipio-se/wordpress-plugin-municipio-gatsby/commit/c5fa5156017ca1a927f04064a6b17138df75c9fc))
* Disable unimplemented options on Form module ([73fbd1e](https://github.com/municipio-se/wordpress-plugin-municipio-gatsby/commit/73fbd1e6df958b889263e3c14e49f1733b8b960a))

## [0.6.0](https://github.com/municipio-se/wordpress-plugin-municipio-gatsby/compare/v0.5.7...v0.6.0) (2021-09-13)


### ⚠ BREAKING CHANGES

* remove unimplemented fields for Table module
* replace "Link" and "Link url" fields in image module with an actual link field
* replace permalink field with a link field
* move "blocks" option from layout to display mode

### Features

* change label for "index" display mode ([b0bc459](https://github.com/municipio-se/wordpress-plugin-municipio-gatsby/commit/b0bc459d1bed53843fe57e24dfea1f9a3f59760c))
* disable "Font size" field on text module ([f297e99](https://github.com/municipio-se/wordpress-plugin-municipio-gatsby/commit/f297e99f83bdb7023791b78aa0b08634e83d1171))
* hide "Theme color" field in text modules with hidden box frame ([6a85286](https://github.com/municipio-se/wordpress-plugin-municipio-gatsby/commit/6a85286fc35606be94529344a4703b27e843b715))
* move "blocks" option from layout to display mode ([739556b](https://github.com/municipio-se/wordpress-plugin-municipio-gatsby/commit/739556b5441d6c826e02e94da089f6237cf8f438))
* re-enable "Link to post type archive" field ([589089f](https://github.com/municipio-se/wordpress-plugin-municipio-gatsby/commit/589089f61d8ed56297a859097eaa882bf3d499f9))
* remove unimplemented fields for Table module ([0b446ea](https://github.com/municipio-se/wordpress-plugin-municipio-gatsby/commit/0b446eacd5ef52c7145a04f04041133dcd443fbc))
* replace "Link" and "Link url" fields in image module with an actual link field ([bf65c51](https://github.com/municipio-se/wordpress-plugin-municipio-gatsby/commit/bf65c51f65f652e9f440dd86fde6ff16fd3aaf4b))
* replace permalink field with a link field ([8906635](https://github.com/municipio-se/wordpress-plugin-municipio-gatsby/commit/8906635240dd03b72354c404b5d025e3e9dbe1af))

### [0.5.7](https://github.com/municipio-se/wordpress-plugin-municipio-gatsby/compare/v0.5.6...v0.5.7) (2021-09-10)


### Features

* add new layout type blocks ([d83d756](https://github.com/municipio-se/wordpress-plugin-municipio-gatsby/commit/d83d75691680057f7907b549772a68acc6aa7cdc))
* update translation strings ([6f9b46c](https://github.com/municipio-se/wordpress-plugin-municipio-gatsby/commit/6f9b46c069c937541d28964132cb20b847645d4d))


### Bug Fixes

* singularize layout blocks machine name ([0d5929e](https://github.com/municipio-se/wordpress-plugin-municipio-gatsby/commit/0d5929ecba4300601e0628e0131b2561770581b0))

### [0.5.6](https://github.com/municipio-se/wordpress-plugin-municipio-gatsby/compare/v0.5.5...v0.5.6) (2021-09-07)


### Features

* add theme colores to mod table ([199e31b](https://github.com/municipio-se/wordpress-plugin-municipio-gatsby/commit/199e31b3eb1931f4cddf387bcae5177400db2954))


### Bug Fixes

* put back permalink field ([096493a](https://github.com/municipio-se/wordpress-plugin-municipio-gatsby/commit/096493a5c8ff455a81e2470e0da137ebbe76a335))

### [0.5.5](https://github.com/municipio-se/wordpress-plugin-municipio-gatsby/compare/v0.5.4...v0.5.5) (2021-09-03)


### Features

* remove unimplemented fields for the fileslist module ([8e11d40](https://github.com/municipio-se/wordpress-plugin-municipio-gatsby/commit/8e11d401a23d800f9181c98a49099b65277b017a))

### [0.5.4](https://github.com/municipio-se/wordpress-plugin-municipio-gatsby/compare/v0.5.3...v0.5.4) (2021-08-27)


### Features

* automatically adapt fresh wp install for gatsby ([c8abceb](https://github.com/municipio-se/wordpress-plugin-municipio-gatsby/commit/c8abceb928935472b88b559e501d33afdc550e57)), closes [#1](https://github.com/municipio-se/wordpress-plugin-municipio-gatsby/issues/1)


### Bug Fixes

* activation hook did not fire ([00dc638](https://github.com/municipio-se/wordpress-plugin-municipio-gatsby/commit/00dc638ea997dcc58fc06d86f95615f94698439f))
* activation hook did not fire ([16a0b42](https://github.com/municipio-se/wordpress-plugin-municipio-gatsby/commit/16a0b428143a8468a880187c31a4332a8d91ef08))

### [0.5.3](https://github.com/municipio-se/wordpress-plugin-municipio-gatsby/compare/v0.5.2...v0.5.3) (2021-08-21)


### Bug Fixes

* correctly load textdomain ([41f05b5](https://github.com/municipio-se/wordpress-plugin-municipio-gatsby/commit/41f05b5c33fcf71e0077d4d8f0ac9048c5da0281))

### [0.5.2](https://github.com/municipio-se/wordpress-plugin-municipio-gatsby/compare/v0.5.1...v0.5.2) (2021-08-21)


### Features

* add translations ([fe50243](https://github.com/municipio-se/wordpress-plugin-municipio-gatsby/commit/fe5024370776ab827fc5d479dcec72a0c7914a5c))
* rename post to "news" ([84209e9](https://github.com/municipio-se/wordpress-plugin-municipio-gatsby/commit/84209e928e11223cff36a71ae78103dc7b6d204c))

### [0.5.1](https://github.com/municipio-se/wordpress-plugin-municipio-gatsby/compare/v0.5.0...v0.5.1) (2021-08-20)


### Bug Fixes

* broken brand colors field ([ea8b0c4](https://github.com/municipio-se/wordpress-plugin-municipio-gatsby/commit/ea8b0c40ec35580807b34322ef85efa04e0b6078))

## [0.5.0](https://github.com/municipio-se/wordpress-plugin-municipio-gatsby/compare/v0.4.0...v0.5.0) (2021-08-20)


### ⚠ BREAKING CHANGES

* show page display settings in graphql
* change name of color scheme field group
* change name of header options field group
* change name of search display settings field group

### Features

* update label and default value for layout on mod posts ([9649bdc](https://github.com/municipio-se/wordpress-plugin-municipio-gatsby/commit/9649bdc09a028616968dc725d159dff9c2c59813))


### Bug Fixes

* change name of color scheme field group ([d367199](https://github.com/municipio-se/wordpress-plugin-municipio-gatsby/commit/d367199b4261f208fecf3b5d3709b6df37b599a8))
* change name of header options field group ([e5b3519](https://github.com/municipio-se/wordpress-plugin-municipio-gatsby/commit/e5b35195af11c4c18fd404222aa0cd82a5604884))
* change name of search display settings field group ([3324535](https://github.com/municipio-se/wordpress-plugin-municipio-gatsby/commit/3324535d4a8a61c387741d0c5cf23d29a2a24097))
* show page display settings in graphql ([4092438](https://github.com/municipio-se/wordpress-plugin-municipio-gatsby/commit/40924387a7dd3114085bcaf5c647d924975e0156))

## [0.4.0](https://github.com/municipio-se/wordpress-plugin-municipio-gatsby/compare/v0.3.0...v0.4.0) (2021-06-22)


### Features

* add brand and theme colors ([789ad96](https://github.com/municipio-se/wordpress-plugin-municipio-gatsby/commit/789ad967ade5f9830e4ba0d4b9ad9676bc44bb9b))

## [0.3.0](https://github.com/municipio-se/wordpress-plugin-municipio-gatsby/compare/v0.2.1...v0.3.0) (2021-06-16)


### ⚠ BREAKING CHANGES

* replace page templates with acf field

### Features

* replace page templates with acf field ([030f814](https://github.com/municipio-se/wordpress-plugin-municipio-gatsby/commit/030f814c0af63dd101dc4f75acf53d8fb0db801b))

### [0.2.1](https://github.com/municipio-se/wordpress-plugin-municipio-gatsby/compare/v0.2.0...v0.2.1) (2021-06-16)

## [0.2.0](https://github.com/municipio-se/wordpress-plugin-municipio-gatsby/compare/v0.1.0...v0.2.0) (2021-06-16)


### Features

* add 16-by-9 image sizes ([2626a3e](https://github.com/municipio-se/wordpress-plugin-municipio-gatsby/commit/2626a3e9fd8c4b07eb59fca31dac871292a830f8))

## [0.1.0](https://github.com/municipio-se/wordpress-plugin-municipio-gatsby/compare/d88bfc29d807d392837c3a1ed5f0ca596ef0c0e4...v0.1.0) (2021-06-16)


### Features

* adapt posts module ([d88bfc2](https://github.com/municipio-se/wordpress-plugin-municipio-gatsby/commit/d88bfc29d807d392837c3a1ed5f0ca596ef0c0e4))
* disable news item display option ([887b59f](https://github.com/municipio-se/wordpress-plugin-municipio-gatsby/commit/887b59f825854730be122498bf4245daeb563757))

