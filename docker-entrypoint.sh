#!/bin/sh
set -eu

rm -f /etc/apache2/mods-enabled/mpm_event.* /etc/apache2/mods-enabled/mpm_worker.*
a2enmod mpm_prefork >/dev/null
php /var/www/html/scripts/initialize_database.php
exec apache2-foreground
