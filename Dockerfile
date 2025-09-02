# Usar la imagen oficial de PHP (versión 8.2) con el servidor web Apache
FROM php:8.2-apache

# Habilitar el módulo mod_rewrite de Apache
RUN a2enmod rewrite

# Copiar todos los archivos de tu proyecto a la carpeta pública del servidor
COPY . /var/www/html/

# Asegurarse de que el servidor Apache tenga permiso para leer los archivos
RUN chown -R www-data:www-data /var/www/html

# Configurar Apache para permitir .htaccess
RUN sed -i '/<Directory \/var\/www\/>/,/<\/Directory>/ s/AllowOverride None/AllowOverride All/' /etc/apache2/apache2.conf