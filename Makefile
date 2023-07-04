up:
	docker-compose up
build:
	docker-compose build
build--no-cache:
	docker-compose build --no-cache
up-d:
	docker-compose up -d
down:
	docker-compose down
ssh:
	docker-compose exec -u www-data app bash
	