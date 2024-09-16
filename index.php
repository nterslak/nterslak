<!DOCTYPE html>
<html lang="de">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Nterslak</title>
    <link rel="stylesheet" href="/res/css/main.css" />
    <link rel="stylesheet" href="/res/css/grid.css" />
    <link rel="stylesheet" href="/res/css/nav.css" />
</head>

<body>
    <header>
        <div class="container nav-container">
            <div class="logo">
                <a href="/" aria-label="Zur Startseite">
                    <img src="/res/images/logo/nterslak.png" alt="" srcset="" />
                </a>
            </div>
            <div class="navbuttons">
                <a href="/account/logout">
                    <div class="navbutton">
                        <!-- This icon is provided by Heroicons: https://heroicons.com/ -->
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" class="w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M16.5 10.5V6.75a4.5 4.5 0 1 0-9 0v3.75m-.75 11.25h10.5a2.25 2.25 0 0 0 2.25-2.25v-6.75a2.25 2.25 0 0 0-2.25-2.25H6.75a2.25 2.25 0 0 0-2.25 2.25v6.75a2.25 2.25 0 0 0 2.25 2.25Z" />
                        </svg>
                    </div>
                </a>
            </div>
        </div>
    </header>
    <nav>
        <?php include $_SERVER['DOCUMENT_ROOT'] . '/res/html/nav.html'; ?>
    </nav>
    <main></main>
    <style>
    #nav_entry_home {
        background-color: var(--primaryColor);
        border: 1px solid var(--primaryColor);
        color: var(--black);
    }
    </style>
</body>

</html>