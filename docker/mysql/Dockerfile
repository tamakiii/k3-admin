FROM mysql:8.0.17 AS production

COPY docker/mysql/conf.d/mysql.cnf /etc/mysql/conf.d/mysql.cnf

# ---

FROM production AS development

# ---

FROM development AS debug
