dc-u:
	docker-compose up --build -d

dc-d:
	docker-compose down

dc-ps:
	docker-compose ps

dc-fr:
	docker-compose up --build -d --force-recreate

dc-app:
	docker-compose exec app-efk bash