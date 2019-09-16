
install: \
	.env

.env:
	touch $@
	echo "ENVIRONMENT=development" >> $@

up:
	docker-compose up -d
	docker-compose exec php make install

down:
	docker-compose down

