import Echo from "laravel-echo";
import "./bootstrap";

let echo = new Echo({
    broadcaster: "pusher",
    key: import.meta.env.VITE_PUSHER_APP_KEY,
    wsHost: import.meta.env.VITE_PUSHER_HOST ??`ws-${import.meta.env.VITE_PUSHER_APP_CLUSTER}.pusher.com`,
    wsPort: import.meta.env.VITE_PUSHER_PORT ?? 80,
    wssPort: import.meta.env.VITE_PUSHER_PORT ?? 443,
    forceTLS: (import.meta.env.VITE_PUSHER_SCHEME ?? "https") === "https",
    enabledTransports: ["ws", "wss"],
});

echo.private("private-favorite-color").listen("UserFavoriteColorChanged", (event) => {
    const color = event.user.favorite_color.toLowerCase();

    document.getElementById("favorite_color").innerHTML = event.user.favorite_color;
    document.getElementById("favorite_color").className = 'font-bold ' + 'text-' + color + '-500'
});
