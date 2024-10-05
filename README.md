<p align="center">
    <img src="public/web/img/logo.png"
        width=100
        height=100
        alt="interview preparation"
    >
    <h1 align="center">Tech Interview Self-Preparation</h1>
    <h3 align="center">project by Olga Marinina</h3>

<p align="center">
<img src="https://img.shields.io/badge/PHP-%5E8.3.12-blue" alt="php 8.3.12">
<img src="https://img.shields.io/badge/PostgreSQL-17--alpine-blue" alt="postgres 17">
<img src="https://img.shields.io/badge/Symfony-%5E7.1-lightgrey" alt="symfony 7.1">

[//]: # (<img src="https://img.shields.io/badge/sphinx-latest-blue">)
[//]: # (<img src="https://img.shields.io/badge/phpunit-~9.5.0-blue">)
[//]: # (<img src="https://img.shields.io/badge/redis-5-red">)
</p>

## Getting Started

Since I'm using [complete docker environment](https://github.com/dunglas/symfony-docker) by [Kévin Dunglas](https://dunglas.fr) here you should follow the recommendation to install:

1. If not already done, [install Docker Compose](https://docs.docker.com/compose/install/) (v2.10+)
2. Run `docker compose build --pull --no-cache` to build fresh images
3. Run `docker compose up -d` (the logs will be displayed in the current shell)
4. Open `https://localhost` in your favorite web browser and [accept the auto-generated TLS certificate](https://stackoverflow.com/a/15076602/1352334)
5. Run `docker compose down --remove-orphans` to stop the Docker containers.

To add all our composer dependencies, run `docker-compose run --rm php composer install`.
