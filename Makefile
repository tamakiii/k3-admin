
install: \
	.env

.env:
	touch $@
	echo "ENVIRONMENT=production" >> $@

clean:
	rm -rf .env
