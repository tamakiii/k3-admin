FROM node:12.10.0-alpine AS production

RUN apk add --update --no-cache bash make

WORKDIR /project/front

# ---

FROM production AS development

# ---

FROM development AS debug
