<?php
require "/var/www/dos2/.secrets.php";

// $devSite = (($_COOKIE['dos2wiki_dev'] ?? '') === $devModePwd);

$devSite = true;

if ( $devSite ) {
	require 'LocalSettings.dev.php';
} else {
	require 'LocalSettings.prod.php';
}
