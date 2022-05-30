<!DOCTYPE html>
    <html lang="pl">
        <head>
            <title>Zamówienia</title>
            <meta charset="UTF-8">
            <link rel="icon" href="../../grafika/favicon.png">
            <meta name="author" content="Kacper Sradomski" >
            <meta name="copyright" content="ⓒ Księganet" >
            <link rel='icon' href='grafika/favicon.png'  sizes='200x200'>
            <link rel="stylesheet" href="../../css/default.css">
            <link rel="stylesheet" href="../../css/page.css">
            <link rel="stylesheet" href="../../css/menu.css">
            <link rel="stylesheet" href="../../css/default.css">
            <link rel="stylesheet" href="../../css/option_footer.css">
            <link rel="stylesheet" href="../../css/stopka.css">
        </head>
        <body>
        <div id="page">
            <?php include '../../subpage_root/baner.php';?>
            <?php include '../../subpage_root/menu.php';?>
            <div id="text">
                <form action="mailto:przyklad@gmail.com" method="post" id="fr" enctype="text/plain">
                    <input id="tx" type="text" value="Podaj imię...">
                    <textarea id="ar">Treść pytania...</textarea>
                    <input class="przycisk" type="submit" value="Wyślij">
                    <input class="przycisk" type="reset" value="Usuń">
                </form>
            </div>
            <?php include 'stopka_option.php';?>
        </div>
        </body>          
    </html>