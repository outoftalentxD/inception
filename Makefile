build:
	docker-compose -f srcs/docker-compose.yml up --build
up:
	docker-compose -f srcs/docker-compose.yml up
down:
	docker-compose -f srcs/docker-compose.yml down
start:
	docker-compose -f srcs/docker-compose.yml start
stop:
	docker-compose -f srcs/docker-compose.yml stop
volumes_rm:
	docker volume rm dbdata
	docker volume rm wordpress
	sudo rm -rf ~/data/dbdata/*
	sudo rm -rf ~/data/wordpress/*
delete_all:
	docker stop $$(docker ps -qa)
	docker rm $$(docker ps -qa);
	docker rmi $$(docker images -qa);
	docker volume rm $$(docker volume ls -q);
	docker network rm $$(docker network ls -q);