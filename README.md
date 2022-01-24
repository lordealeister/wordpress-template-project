# Wordpress template project
Wordpress template project with roots/sage

## Environment settings
In the root of the project there is a file called `.env`, which has all the important information in global variables of the `wp-config.php` file.

## Installing global dependencies
Follow the instructions before starting to develop on the project:

- Install [Docker Compose](https://docs.docker.com/compose/install) following the instructions in https://docs.docker.com/compose/install

## Configuring the project
Configure the project by following the steps:

1. Create a file called `auth.json` and add the snippet below, replacing it with a token from [github](https://github.com/settings/tokens):

        {
                "github-oauth": {
                        "github.com": "seu_token_aqui"
                }
        }

2. Set the `PROJECT_NAME` variable on `.env` file

3. Set the `WP_DEFAULT_THEME` variable on `.env` file

4. Set `SECRET KEYS` variables on `.env` file, getting from [secret keys](https://api.wordpress.org/secret-key/1.1/salt/)

5. Run the following command:

        docker-compose up -d

## Access
- Site: http://localhost/
- Dashboard: http://localhost/wp-admin/
- Site with hot reload: http://localhost:3000/
- Browsersync dashboard: http://localhost:3001/
- phpMyAdmin: http://localhost:8080/
- - Login: root
- - Password: root
