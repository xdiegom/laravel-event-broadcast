<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Broadcast Events - Laravel</title>
    <script src="https://cdn.tailwindcss.com"></script>
    @vite(['resources/js/app.js'])
</head>

<body>
    <div class="min-h-screen flex justify-center items-center font-thin">
        <p>{{ $user->name }}'s favorite color is
            <span id="favorite_color" class="font-bold text-{{ strtolower($user->favorite_color) }}-500">{{ $user->favorite_color }}</span>
        </p>
    </div>
</body>

</html>
