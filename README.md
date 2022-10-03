# Laravel Broadcasting Events

This project uses [Laravel WebSockets](https://beyondco.de/docs/laravel-websockets/getting-started/introduction) as an alternative package to use WebSockets in order to communicate the frontend and backend in real time.

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
4.Once the first three commands are running, you may open the application on your favorite web browser and then execute
the following command as many times as you want in order to see the changes in real time ⚡️: 
`php artisan user:change-color`


## Private Channel

If you want to see how private channel works, change to the branch `private-channel`. Once you are in there, run again the 4 steps explained above
and you'll see that the communication used is private. 

### How did it change? 
In order to make a private channel, Laravel uses authentication in order to communicate, thus we login the user in the route `/web` and then we changed the class
used in the `UserFavoriteColorChanged` file event to from `Channel` to `PrivateChannel` inside the method `broadcastOn()`.

Once that is done, we changed the `app.js` to subscribed and listen to the private channel created using `echo.private()` method instead of `echo.channel()`.

