# Utiliza una imagen base de Ubuntu
FROM ubuntu:latest

# Actualiza los paquetes y configura variables de entorno básicas
ENV DEBIAN_FRONTEND=noninteractive
RUN apt-get update && apt-get upgrade -y

# Instala Apache
RUN apt-get install -y apache2

# Instala MySQL
RUN apt-get install -y mysql-server

# Instala Python y sus dependencias
RUN apt-get install -y python3 python3-pip
RUN pip3 install --upgrade pip

# Instala Java
RUN apt-get install -y openjdk-11-jdk

# Limpia la cache de apt para reducir el tamaño de la imagen
RUN apt-get clean

# Configura Apache para que se ejecute en primer plano
CMD ["apachectl", "-D", "FOREGROUND"]

# Exponemos los puertos necesarios:
# - 80: Apache HTTP
# - 3306: MySQL
EXPOSE 80 3306

# Configura el entorno de MySQL con una base de datos y usuario
ENV MYSQL_ROOT_PASSWORD=rootpassword
RUN service mysql start && \
    mysql -e "CREATE DATABASE bitwave_docs_db;" && \
    mysql -e "CREATE USER 'bitwave_user'@'%' IDENTIFIED BY 'password';" && \
    mysql -e "GRANT ALL PRIVILEGES ON bitwave_docs_db.* TO 'bitwave_user'@'%';" && \
    mysql -e "FLUSH PRIVILEGES;"

# Agrega archivos de la aplicación (opcional)
# COPY ./app /var/www/html/

# Define el punto de entrada
ENTRYPOINT service mysql start && apachectl -D FOREGROUND
