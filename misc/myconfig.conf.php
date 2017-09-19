<?php
// vim:syn=php

return array(

  // Important! This will put Phabricator into setup mode to help you
  // configure things.
  'phabricator.setup' => true,

  // This will be the base domain for your install, and must be configured.
  // Use "https://" if you have SSL. See below for some notes.
  'phabricator.base-uri' => 'http://phabricator-asuite3.rhcloud.com/',

  // Connection information for MySQL.
  'mysql.host' => getenv('OPENSHIFT_MYSQL_DB_HOST'),
  'mysql.user' => getenv('OPENSHIFT_MYSQL_DB_USERNAME'),
  'mysql.pass' => getenv('OPENSHIFT_MYSQL_DB_PASSWORD'),

  // Basic email domain configuration.
  'metamta.default-address' => 'admin@ace.gov.rudolfschool.com',
  'metamta.domain'          => 'phabricator-asuite3.rhcloud.com',

  'pygments.enabled' => true,

  // Needed for non-standard location of Pygments.
  'environment.append-paths' => array(
    getenv('OPENSHIFT_GEAR_DIR').'/repo/pygments/bin',
  ),

  // NOTE: Check default.conf.php for detailed explanations of all the
  // configuration options, including these.

) + phabricator_read_config_file('production');
