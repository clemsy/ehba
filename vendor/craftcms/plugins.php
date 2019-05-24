<?php

$vendorDir = dirname(__DIR__);

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
