<?php
namespace WebSharks\Ubuntu\Bootstrap;

// @codingStandardsIgnoreFile
// This is loaded via INI `auto_prepend_file`.
// No strict types. This must be compatible w/ PHP v5.4+.

error_reporting(-1);
ini_set('display_errors', 'yes');

header('content-type: text/plain; charset=utf-8');
print_r(opcache_get_status());
