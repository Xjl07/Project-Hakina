FROM php:8.2-apache

RUN docker-php-ext-install mysqli pdo pdo_mysql \
    && rm -f /etc/apache2/mods-enabled/mpm_event.* /etc/apache2/mods-enabled/mpm_worker.* \
    && a2enmod mpm_prefork rewrite headers \
    && sed -ri 's!/var/www/html!/var/www/html/hakina!g' /etc/apache2/sites-available/000-default.conf \
    && printf '<Directory /var/www/html/hakina>\nAllowOverride All\nRequire all granted\n</Directory>\nServerName localhost\n' > /etc/apache2/conf-available/hakina.conf \
    && a2enconf hakina \
    && apache2ctl configtest

COPY . /var/www/html/
COPY docker-entrypoint.sh /usr/local/bin/hakina-entrypoint
RUN chmod +x /usr/local/bin/hakina-entrypoint

EXPOSE 80
ENTRYPOINT ["hakina-entrypoint"]
