<!DOCTYPE html>
<html lang="de">

<head>
    <title>Nterslak</title>
    <link rel="apple-touch-icon" sizes="180x180" href="/res/images/favicon/apple-touch-icon.png" />
    <link rel="icon" type="image/png" sizes="32x32" href="/res/images/favicon/favicon-32x32.png" />
    <link rel="icon" type="image/png" sizes="192x192" href="/res/images/favicon/android-chrome-192x192.png" />
    <link rel="icon" type="image/png" sizes="16x16" href="/res/images/favicon/favicon-16x16.png" />
    <link rel="manifest" href="/res/images/favicon/site.webmanifest" />
    <link rel="mask-icon" href="/res/images/favicon/safari-pinned-tab.svg" color="#3ac2c2" />
    <link rel="shortcut icon" href="/res/images/favicon/favicon.ico" />
    <meta name="apple-mobile-web-app-title" content="Nterslak" />
    <meta name="application-name" content="Nterslak" />
    <meta name="msapplication-TileColor" content="#00aba9" />
    <meta name="msapplication-TileImage" content="/res/images/favicon/mstile-144x144.png" />
    <meta name="msapplication-config" content="/res/images/favicon/browserconfig.xml" />
    <meta name="theme-color" content="#ffffff" />
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="/res/css/main.css" />
    <link rel="stylesheet" href="/res/css/header.css" />
    <link rel="stylesheet" href="/account/style.css" />
</head>

<body>
    <header>
        <div class="container nav-container">
            <div class="logo">
                <a href="/" aria-label="Zur Startseite">
                    <img src="/res/images/logo/nterslak.png" alt="" srcset="" />
                </a>
            </div>
            <h1>Nterslak</h1>
        </div>
    </header>
    <main>
        <div class="account-container" id="login-container">
            <h1>Nterslak-Login</h1>
            <form action="login.php" method="post">
                <div class="input-container">
                    <input type="password" autocomplete="password" spellcheck="false" tabindex="0" aria-label="Password"
                        name="password" value="" autocapitalize="none" placeholder=" " required />
                    <div class="input-tooltip" aria-hidden="true">
                        New Password
                    </div>
                </div>
                <input type="submit" value="Login" />
            </form>
        </div>
    </main>
    <?php
    if (isset($_GET['logout'])) {
    ?>
        <footer>
            <h1>Logged out successfuly.</h1>
        </footer>
    <?php
    }
    ?>
</body>

</html>