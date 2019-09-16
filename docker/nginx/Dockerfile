FROM nginx:1.17.3-alpine AS production

RUN apk add --update --no-cache bash git make

COPY docker/nginx/conf.d/default.conf /etc/nginx/conf.d/default.conf

WORKDIR /project

# ---

FROM production AS development

# ---

FROM development AS debug
