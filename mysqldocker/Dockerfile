FROM  mariadb:latest
LABEL maintainer="grupo1"
COPY *.sh /docker-entrypoint-initdb.d/
COPY *.sql /docker-entrypoint-initdb.d/
#Environment variable may store in .env file
