all:
	cat Makefile

build: node_modules
	npx --no-install parcel build src/index.html

node_modules:
	npm install

clean:
	rm -rf node_modules
