<!DOCTYPE html>
<html lang="de">

<head>
    <title>Nterslak</title>
    <?php include $_SERVER['DOCUMENT_ROOT'] . '/res/html/head.html'; ?>
    <link rel="stylesheet" href="/modules/maps/style.css">
    <link rel="stylesheet" href="/res/libraries/leaflet/leaflet.css" />
</head>

<body>
    <?php include $_SERVER['DOCUMENT_ROOT'] . '/res/html/header.html'; ?>
    <?php include $_SERVER['DOCUMENT_ROOT'] . '/res/html/nav.html'; ?>
    <main>
        <div class="map-controls">
            <a onclick="toggleLayer()">
                <!-- This icon is provided by Heroicons: https://heroicons.com/ -->
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                    stroke="currentColor" class="size-6">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="m20.893 13.393-1.135-1.135a2.252 2.252 0 0 1-.421-.585l-1.08-2.16a.414.414 0 0 0-.663-.107.827.827 0 0 1-.812.21l-1.273-.363a.89.89 0 0 0-.738 1.595l.587.39c.59.395.674 1.23.172 1.732l-.2.2c-.212.212-.33.498-.33.796v.41c0 .409-.11.809-.32 1.158l-1.315 2.191a2.11 2.11 0 0 1-1.81 1.025 1.055 1.055 0 0 1-1.055-1.055v-1.172c0-.92-.56-1.747-1.414-2.089l-.655-.261a2.25 2.25 0 0 1-1.383-2.46l.007-.042a2.25 2.25 0 0 1 .29-.787l.09-.15a2.25 2.25 0 0 1 2.37-1.048l1.178.236a1.125 1.125 0 0 0 1.302-.795l.208-.73a1.125 1.125 0 0 0-.578-1.315l-.665-.332-.091.091a2.25 2.25 0 0 1-1.591.659h-.18c-.249 0-.487.1-.662.274a.931.931 0 0 1-1.458-1.137l1.411-2.353a2.25 2.25 0 0 0 .286-.76m11.928 9.869A9 9 0 0 0 8.965 3.525m11.928 9.868A9 9 0 1 1 8.965 3.525" />
                </svg>
            </a>
            <a href="#">
                <!-- This icon is provided by Heroicons: https://heroicons.com/ -->
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                    stroke="currentColor" class="size-6">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M12 3c2.755 0 5.455.232 8.083.678.533.09.917.556.917 1.096v1.044a2.25 2.25 0 0 1-.659 1.591l-5.432 5.432a2.25 2.25 0 0 0-.659 1.591v2.927a2.25 2.25 0 0 1-1.244 2.013L9.75 21v-6.568a2.25 2.25 0 0 0-.659-1.591L3.659 7.409A2.25 2.25 0 0 1 3 5.818V4.774c0-.54.384-1.006.917-1.096A48.32 48.32 0 0 1 12 3Z" />
                </svg>
            </a>
        </div>
        <div class="map-area">
            <div id="map"></div>
        </div>
    </main>
    <style>
    #nav_entry_maps {
        background-color: var(--primaryColor);
        color: var(--black);
    }
    </style>
    <script>
    // Example data to be replaced with actual data
    const markers = [{
            lat: 51.962,
            lon: 7.625,
            title: "John Doe"
        },
        {
            lat: 48.8566,
            lon: 2.3522,
            title: "Marie Dubois"
        },
        {
            lat: 41.3851,
            lon: 2.1734,
            title: "Carlos Garcia"
        },
        {
            lat: 40.4168,
            lon: -3.7038,
            title: "Lucia Martinez"
        },
        {
            lat: 55.6761,
            lon: 12.5683,
            title: "Freja Hansen"
        },
        {
            lat: 59.9139,
            lon: 10.7522,
            title: "Oskar Larsen"
        },
        {
            lat: 60.1695,
            lon: 24.9354,
            title: "Aino Virtanen"
        },
        {
            lat: 52.3676,
            lon: 4.9041,
            title: "Sophie de Vries"
        },
        {
            lat: 50.8503,
            lon: 4.3517,
            title: "Lucas Janssens"
        },
        {
            lat: 48.8566,
            lon: 2.3522,
            title: "Chloe Martin"
        },
        {
            lat: 45.7640,
            lon: 4.8357,
            title: "Julien Bernard"
        },
        {
            lat: 43.7102,
            lon: 7.2620,
            title: "Camille Lefevre"
        },
        {
            lat: 51.1657,
            lon: 10.4515,
            title: "Nina Fischer"
        },
        {
            lat: 52.5200,
            lon: 13.4050,
            title: "Hans Müller"
        },
        {
            lat: 48.1351,
            lon: 11.5820,
            title: "Klaus Schmidt"
        },
        {
            lat: 50.1109,
            lon: 8.6821,
            title: "Anna Becker"
        },
        {
            lat: 53.5511,
            lon: 9.9937,
            title: "Peter Wagner"
        },
        {
            lat: 52.2297,
            lon: 21.0122,
            title: "Jan Kowalski"
        },
        {
            lat: 50.0647,
            lon: 19.9450,
            title: "Maria Nowak"
        },
        {
            lat: 41.9028,
            lon: 12.4964,
            title: "Giovanni Rossi"
        },
        {
            lat: 45.4642,
            lon: 9.1900,
            title: "Luca Bianchi"
        },
        {
            lat: 48.2082,
            lon: 16.3738,
            title: "Franz Bauer"
        },
        {
            lat: 47.0707,
            lon: 15.4395,
            title: "Elisabeth Huber"
        },
        {
            lat: 47.8095,
            lon: 13.0550,
            title: "Michael Gruber"
        },
        {
            lat: 46.2044,
            lon: 6.1432,
            title: "Sophie Dubois"
        },
        {
            lat: 49.4521,
            lon: 11.0767,
            title: "Maximilian Weber"
        },
        {
            lat: 51.3397,
            lon: 12.3731,
            title: "Lena Schneider"
        },
        {
            lat: 50.9375,
            lon: 6.9603,
            title: "Paul Neumann"
        },
        {
            lat: 51.0504,
            lon: 13.7373,
            title: "Laura Fischer"
        },
        {
            lat: 50.7753,
            lon: 6.0839,
            title: "Simon Meyer"
        },
        {
            lat: 49.4875,
            lon: 8.4660,
            title: "Sophia Wagner"
        }
    ];
    </script>
    <script src="/res/libraries/leaflet/leaflet.js"></script>
    <script src="map.js"></script>

</body>

</html>