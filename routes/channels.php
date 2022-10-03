<?php

use Illuminate\Support\Facades\Broadcast;

Broadcast::channel('private-favorite-color', function ($user) {
    return (int)$user->id === 1;
});
