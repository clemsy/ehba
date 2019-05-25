<?php

$vendorDir = dirname(__DIR__);
$rootDir = dirname(dirname(__DIR__));

return array (
  'craftcms/redactor' => 
  array (
    'class' => 'craft\\redactor\\Plugin',
    'basePath' => $vendorDir . '/craftcms/redactor/src',
    'handle' => 'redactor',
    'aliases' => 
    array (
      '@craft/redactor' => $vendorDir . '/craftcms/redactor/src',
    ),
    'name' => 'Redactor',
    'version' => '2.3.3.2',
    'description' => 'Edit rich text content in Craft CMS using Redactor by Imperavi.',
    'developer' => 'Pixel & Tonic',
    'developerUrl' => 'https://pixelandtonic.com/',
    'developerEmail' => 'support@craftcms.com',
    'documentationUrl' => 'https://github.com/craftcms/redactor/blob/v2/README.md',
  ),
  'lukeyouell/craft-countryselect' => 
  array (
    'class' => 'lukeyouell\\countryselect\\CountrySelect',
    'basePath' => $vendorDir . '/lukeyouell/craft-countryselect/src',
    'handle' => 'country-select',
    'aliases' => 
    array (
      '@lukeyouell/countryselect' => $vendorDir . '/lukeyouell/craft-countryselect/src',
    ),
    'name' => 'Country Select',
    'version' => '1.1.2',
    'description' => 'Country select field type.',
    'developer' => 'Luke Youell',
    'developerUrl' => 'https://github.com/lukeyouell',
    'documentationUrl' => 'https://github.com/lukeyouell/craft-countryselect/blob/v1/README.md',
    'changelogUrl' => 'https://raw.githubusercontent.com/lukeyouell/craft-countryselect/v1/CHANGELOG.md',
    'hasCpSettings' => false,
    'hasCpSection' => false,
  ),
  'dolphiq/craft3-forms' => 
  array (
    'class' => 'plugins\\dolphiq\\form\\Plugin',
    'basePath' => $vendorDir . '/dolphiq/craft3-forms/src',
    'handle' => 'dolphiq-craft3-forms',
    'aliases' => 
    array (
      '@plugins/dolphiq/form' => $vendorDir . '/dolphiq/craft3-forms/src',
    ),
    'name' => 'Forms',
    'version' => '1.1.0',
    'schemaVersion' => '1.0.0',
    'description' => 'Craft form plugin that will let you use forms as you would when using the Yii 2 Framework',
    'developer' => 'Dolphiq',
    'developerUrl' => 'https://dolphiq.nl/',
    'documentationUrl' => 'https://github.com/Dolphiq/craft3-forms/blob/master/README.md',
    'changelogUrl' => 'https://raw.githubusercontent.com/Dolphiq/craft3-forms/master/CHANGELOG.md',
    'hasCpSettings' => true,
    'hasCpSection' => false,
  ),
  'craftcms/guest-entries' => 
  array (
    'class' => 'craft\\guestentries\\Plugin',
    'basePath' => $vendorDir . '/craftcms/guest-entries/src',
    'handle' => 'guest-entries',
    'aliases' => 
    array (
      '@craft/guestentries' => $vendorDir . '/craftcms/guest-entries/src',
    ),
    'name' => 'Guest Entries',
    'version' => '2.2.3',
    'description' => 'This plugin allows you to save guest entries from the front-end of your website.',
    'developer' => 'Pixel & Tonic',
    'developerUrl' => 'https://pixelandtonic.com/',
    'changelogUrl' => 'https://raw.githubusercontent.com/craftcms/guest-entries/v2/CHANGELOG.md',
    'downloadUrl' => 'https://github.com/craftcms/guest-entries/archive/v2.zip',
  ),
);
