.PHONY : main build-image build-container start test shell stop clean
main: build-image build-container

build-image:
	docker build -t docker-php-boilerplate .

build-container:
	docker run -dt --name docker-php-ListaCompra -v .:/kataLC/ListaCompra docker-php-boilerplate
	docker exec docker-php-ListaCompra composer install

start:
	docker start docker-php-ListaCompra

test: start
	docker exec docker-php-ListaCompra ./vendor/bin/phpunit tests/$(target)

shell: start
	docker exec -it docker-php-ListaCompra /bin/bash

stop:
	docker stop docker-php-ListaCompra

clean: stop
	docker rm docker-php-ListaCompra
	rm -rf vendor
