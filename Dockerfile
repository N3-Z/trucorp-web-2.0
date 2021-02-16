#ambil dari php:7.4-apache
FROM php:7.4-apache

#set maintainer adalah zi
MAINTAINER zi

#set owner dan group ke www-data pada directory /var/www/html
#set akses kontrol user dan group dapat read write dan execute
#sedangkan other hanya bisa read pada directory /var/www/html 
RUN chown www-data:www-data /var/www/html
RUN chmod u+rwx,g+rwx,o+r /var/www/html

#copy semua file .php ke /var/www/html
COPY *.php /var/www/html/

#install php extension dan mysqli
RUN docker-php-ext-install mysqli
