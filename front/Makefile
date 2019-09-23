all:
	cat Makefile

build: node_modules
	npx --no-install parcel build src/index.html

test:
	npx --no-install jest

node_modules:
	npm install

clean:
	rm -rf node_modules
