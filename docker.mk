
install: .env
	docker-compose run --rm php make install

.env:
	touch $@
	echo "ENVIRONMENT=development" >> $@

up:
	docker-compose up -d
	docker-compose exec php make install

down:
	docker-compose down

clear:
	docker-compose run --rm php bin/console cache:clear

clean:
	rm -rf .env
	docker-compose run --rm php make clean
