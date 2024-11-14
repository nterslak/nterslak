<!DOCTYPE html>
<html lang="de">

<head>
    <title>Nterslak</title>
    <?php include $_SERVER['DOCUMENT_ROOT'] . '/res/html/head.html'; ?>
    <link rel="stylesheet" href="./style.css">
    <link rel="stylesheet" href="./containers.css">
</head>

<body>
    <?php include $_SERVER['DOCUMENT_ROOT'] . '/res/html/header.html'; ?>
    <?php include $_SERVER['DOCUMENT_ROOT'] . '/res/html/nav.html'; ?>
    <main>
        <div class="person-nav">
            <h1 class="person-name">John Doe</h1>
        </div>
        <div class="person-main">
            <div class="person-info masonry">
                <div class="info_container info_adress">
                    <h2>Adress</h2>
                    <p class="info_adress-title">
                        Heimadresse
                    </p>
                    <p>
                        Beispielstraße 123<br>
                        D-12345 Berlin
                    </p>
                    <div class="info_container-actions">
                        <a href="">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                                <path stroke-linecap="round" stroke-linejoin="round" d="m16.862 4.487 1.687-1.688a1.875 1.875 0 1 1 2.652 2.652L10.582 16.07a4.5 4.5 0 0 1-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 0 1 1.13-1.897l8.932-8.931Zm0 0L19.5 7.125M18 14v4.75A2.25 2.25 0 0 1 15.75 21H5.25A2.25 2.25 0 0 1 3 18.75V8.25A2.25 2.25 0 0 1 5.25 6H10" />
                            </svg>
                        </a>
                        <a href="">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                                <path stroke-linecap="round" stroke-linejoin="round" d="m14.74 9-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 0 1-2.244 2.077H8.084a2.25 2.25 0 0 1-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 0 0-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 0 1 3.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 0 0-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 0 0-7.5 0" />
                            </svg>
                        </a>
                    </div>
                </div>
                <p>Est eius impedit quo, assumenda similique cumque incidunt perspiciatis expedita aspernatur porro.
                    Perferendis dolores nobis, voluptas saepe delectus odio hic. Odio minima a ab qui at eum neque
                    laboriosam ea?</p>
                <p>Eaque eos alias itaque nesciunt quasi cupiditate odio, sed aliquam perspiciatis? Blanditiis ab,
                    sapiente suscipit esse nesciunt rem iure aperiam voluptatum omnis voluptas porro ut non! Facilis
                    iste temporibus vero.</p>
                <p>Repudiandae beatae consequuntur error fugiat.</p>
                <p>Corrupti modi eveniet rerum tenetur nobis natus unde eligendi obcaecati dolores cupiditate quo, quam
                    impedit repudiandae nostrum suscipit nisi iste quod minima et? Deserunt placeat corrupti porro non
                    quasi nisi!</p>
                <p>Illum, maiores optio temporibus labore alias cupiditate quo, pariatur dolorum aspernatur molestiae
                    nisi amet eum sed similique iure molestias suscipit animi minus sit voluptate dicta doloribus
                    eligendi recusandae? Et, laboriosam?</p>
                <p>Ab veritatis at non nostrum error odio libero cum itaque nam reiciendis, nulla neque fugit. Ab
                    ratione debitis modi! Quo debitis alias inventore quis fuga temporibus veritatis dolores nemo. Unde.
                </p>
            </div>
            <div class="person-footer">
                <a href="">+ Add information</a>
            </div>
        </div>
    </main>
    <style>
        #nav_entry_people {
            background-color: var(--primaryColor);
            color: var(--black);
        }
    </style>
</body>

</html>