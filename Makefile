install: \
	app/vendor

app/vendor:
	make -C app vendor

clean:
	make -C app clean
