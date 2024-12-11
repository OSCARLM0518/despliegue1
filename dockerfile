# Usa una imagen base oficial de PHP con Apache
FROM php:8.2.12-apache

# Habilita módulos adicionales de PHP si los necesitas (mysqli es común para MySQL)
RUN docker-php-ext-install mysqli

# Establece el directorio raíz del servidor Apache
WORKDIR /var/www/html

# Copia todos los archivos del proyecto al contenedor
COPY . .

# Configura Apache para servir la carpeta "public" como la raíz del servidor
RUN echo "DocumentRoot /var/www/html/public" > /etc/apache2/sites-available/000-default.conf

# Establece permisos para evitar problemas de acceso
RUN chown -R www-data:www-data /var/www/html

# Expone el puerto predeterminado de Apache
EXPOSE 80

# Inicia el servidor Apache
CMD ["apache2-foreground"]
