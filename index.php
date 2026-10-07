<?php
// Railpack PHP detection entrypoint.
// WordPress itself is installed into /app/wordpress during the build.
$target = __DIR__ . '/wordpress/index.php';
if (is_file($target)) {
    require $target;
    exit;
}
http_response_code(503);
header('Content-Type: text/plain; charset=utf-8');
echo "WordPress is not installed yet.";
