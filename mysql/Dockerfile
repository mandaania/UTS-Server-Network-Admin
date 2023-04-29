# MySQL image
FROM mysql:latest

COPY redlock-db.sql /docker-entrypoint-initdb.d/

ENV MYSQL_ROOT_PASSWORD=asdasd123
ENV MYSQL_DATABASE=Redlock

CMD ["mysqld"]