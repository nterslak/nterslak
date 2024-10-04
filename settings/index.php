<!DOCTYPE html>
<html lang="de">

<head>
    <title>Settings &CenterDot; Nterslak</title>
    <?php include $_SERVER['DOCUMENT_ROOT'] . '/res/html/head.html'; ?>
    <link rel="stylesheet" href="/settings/settings.css">
</head>

<body>
    <?php include $_SERVER['DOCUMENT_ROOT'] . '/res/html/header.html'; ?>
    <?php include $_SERVER['DOCUMENT_ROOT'] . '/res/html/nav.html'; ?>
    <main>
        <div class="category_container">
            <h1>Login-Password</h1>
            <p>
                Currently this software is only meant to contain one dataset per Instance and therefore does not use
                standard accounts but only a password for login authentication.
            </p>
            <p>
                Here you can change the password:
            </p>
            <form action="/settings/change_password.php" method="post">
                <div class="input-container">
                    <input type="password" autocomplete="current-password" spellcheck="false" tabindex="0"
                        aria-label="Password" name="password" value="" autocapitalize="none" placeholder=" " required />
                    <div class="input-tooltip" aria-hidden="true">New Password</div>
                </div>
                <div class="input-container">
                    <input type="password" autocomplete="current-password" spellcheck="false" tabindex="0"
                        aria-label="Password" name="password" value="" autocapitalize="none" placeholder=" " required />
                    <div class="input-tooltip" aria-hidden="true">Repeat new Password</div>
                </div>
                <input type="submit" id="submit_button" value="Set new Password" />
            </form>
        </div>
        <div class="category_container">
            <h1>Open-Source-Licenses</h1>
            <p>
                We use the following open-source projects:
            </p>
            <ul>
                <li>
                    Most of the icons come from <a href="https://heroicons.com">Heroicons</a> (<a
                        href="https://raw.githubusercontent.com/tailwindlabs/heroicons/master/LICENSE">MIT
                        license</a>)
                </li>
                <li>
                    The Map is based on <a href="https://leafletjs.com/">Leaflet</a> (<a
                        href="https://raw.githubusercontent.com/Leaflet/Leaflet/master/LICENSE">BSD-2-Clause
                        license</a>)
                </li>
                <li>
                    Map tiles (the map images you see), are provided by:
                    <ul>
                        <li><a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> (<a
                                href="https://www.openstreetmap.org/copyright">ODbL license</a>)</li>
                        and
                        <li><a href="https://www.esri.com/en-us/home">Esri</a> (<a
                                href="https://www.esri.com/en-us/legal/overview">Esri License</a>)</li>
                    </ul>
                </li>
            </ul>
        </div>
        <div class="category_container">
            <p style="text-align: center;">Made with ❤️ in Germany</p>
        </div>
    </main>
    <style>
    #nav_entry_settings {
        background-color: var(--primaryColor);
        color: var(--black);
    }
    </style>
</body>

</html>