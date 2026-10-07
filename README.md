# WordPress for Skalo / Railpack

Single-app WordPress deployment intended for platforms using Railpack/PHP.

## Skalo settings

- Builder: Railpack
- Port: 80
- Replicas: 1
- Branch: main

Create a MySQL/MariaDB database separately in Skalo and add these variables:

- WORDPRESS_DB_HOST
- WORDPRESS_DB_USER
- WORDPRESS_DB_PASSWORD
- WORDPRESS_DB_NAME

Optional:
- WORDPRESS_TABLE_PREFIX
- WORDPRESS_DEBUG

The app downloads the official WordPress release during the build and serves it with PHP's built-in web server.

IMPORTANT: WordPress core/plugins/themes/uploads need persistent storage if Skalo provides a persistent disk. Attach the disk to `/app/wordpress` (or configure the platform's persistent volume path accordingly).
