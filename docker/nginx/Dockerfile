FROM nginx:1.17.3-alpine AS production

RUN apk add --update --no-cache bash git make

COPY conf.d/default.conf /etc/nginx/conf.d/default.conf

WORKDIR /app

# ---

FROM production AS development

# ---

FROM development AS debug
