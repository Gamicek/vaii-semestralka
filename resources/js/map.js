
"use strict";

import L from "leaflet";

        const latitude = 40.764716;
        const longitude = -73.989379;

        const coords = [latitude, longitude];

        const map = L.map("map").setView(coords, 16);

        L.tileLayer("https://{s}.tile.openstreetmap.fr/hot/{z}/{x}/{y}.png", {
            attribution:
                '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors',
        }).addTo(map);

        L.marker([latitude, longitude]).addTo(map);

