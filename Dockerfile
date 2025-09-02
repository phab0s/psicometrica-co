# Usar la imagen oficial de PHP (versión 8.2) con el servidor web Apache
FROM php:8.2-apache

# Copiar todos los archivos de tu proyecto a la carpeta pública del servidor
COPY . /var/www/html/

# Asegurarse de que el servidor Apache tenga permiso para leer los archivos
RUN chown -R www-data:www-data /var/www/html