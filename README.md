
# Docker LAMP
Yeah, another Docker LAMP repository.

It's based on [docker-compose-lamp](https://github.com/sprintcube/docker-compose-lamp). Use the original one, if you need advanced solution.

I customized, removed and simplified parts that I don't need right now. It's definitely not production ready and not tested for it.

## Installation

    git clone https://github.com/ozgurg/docker-lamp.git
    cd docker-lamp
    docker-compose up -d

Webserver: http://localhost - [/pdo.php](http://localhost/pdo.php) & [/phpinfo.php](http://localhost/phpinfo.php)

phpMyAdmin: http://localhost:8001


## License
[![License: MIT](https://img.shields.io/badge/License-MIT-yellow.svg)](https://github.com/ozgurg/docker-lamp/blob/main/LICENSE)
