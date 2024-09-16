<!DOCTYPE html>
<html lang="de">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Nterslak</title>
    <link rel="stylesheet" href="/res/css/main.css" />
    <link rel="stylesheet" href="/res/css/grid.css" />
    <link rel="stylesheet" href="/res/css/nav.css" />
    <link rel="stylesheet" href="/settings/settings.css">
</head>

<body>
    <?php include $_SERVER['DOCUMENT_ROOT'] . '/res/html/header.html'; ?>
    <?php include $_SERVER['DOCUMENT_ROOT'] . '/res/html/nav.html'; ?>
    <main>
        <div class="category_container">
            <h1>Open-Source-Licenses</h1>
            <p>
                We use the following open-source projects:
            </p>
            <ul>
                <li>Most of the icons come from <a href="https://heroicons.com">Heroicons</a> (<a
                        href="https://raw.githubusercontent.com/tailwindlabs/heroicons/master/LICENSE">MIT
                        license</a>)</li>
            </ul>
        </div>
        <div class="category_container">
            <p style="text-align: center;">Made with ❤️ in Germany</p>
        </div>
    </main>
    <style>
    #nav_entry_settings {
        background-color: var(--primaryColor);
        border: 1px solid var(--primaryColor);
        color: var(--black);
    }
    </style>
</body>

</html>