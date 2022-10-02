# Laravel Broadcasting Events

## Installation

Execute the following commands:

```bash
> composer install
> yarn
```

## Setup

1. Createa database with the name of your choice.
2. Change database enviroment variables value with the credentials, for example:
```env
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=broadcast_events
DB_USERNAME=root
DB_PASSWORD=secret # if you don't have a password, set it to blank
```
3. Add arbitrary value to the pusher enviroment variables, for example:

```env
PUSHER_APP_ID=laravel
PUSHER_APP_KEY=key
PUSHER_APP_SECRET=secretsecretsecretsecretsecretsecretsecretsecret
PUSHER_HOST=127.0.0.1
PUSHER_PORT=6001
PUSHER_SCHEME=http
PUSHER_APP_CLUSTER=mt1
```
> _You can leave the values for PORT, HOST and SCHEME as they are in the environment example_

4. Execute the following command to run the migrations

```bash
> php artisan migrate --seed
```
## Run the application

Once previous steps are done, it's time to run the application. 

In separate terminals:

1. Execute `php artisan serve`
2. Execute `yarn dev`
3. Execute `php artisan websockets:serve`
4.Once the first three commands are running, you may open the application on your favorite web browser and then execute the following command as many times as you want in order to see the changes in real time ⚡️: `php artisan user:change-color`
