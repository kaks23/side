<?php 
    !isset($_GET['page']) || !isset($_GET['k']) ? header("Location: offer.php?k=0&page=1"):''; //check sessien kategory and page exist 
?>

<div id="menu_offer">
    <div id="kategory">
        <ul>
            <li><a href="../../subpage_root/offer.php?k=1&page=1">Bajki</a></li>
            <li><a href="../../subpage_root/offer.php?k=2&page=1">Biografie</a></li>
            <li><a href="../../subpage_root/offer.php?k=3&page=1">Fantasy</a></li>
            <li><a href="../../subpage_root/offer.php?k=4&page=1">Filozofia</a></li>
            <li><a href="../../subpage_root/offer.php?k=5&page=1">Horror</a></li>
            <li><a href="../../subpage_root/offer.php?k=6&page=1">Kryminał</a></li>
            <li><a href="../../subpage_root/offer.php?k=7&page=1">Lektura</a></li>
            <li><a href="../../subpage_root/offer.php?k=8&page=1">Lit. faktu</a></li>
            <li><a href="../../subpage_root/offer.php?k=9&page=1">Lit. młodzieżowa</a></li>
            <li><a href="../../subpage_root/offer.php?k=10&page=1">Lit. obyczajowa</a></li>
            <li><a href="../../subpage_root/offer.php?k=11&page=1">Lit. piękna</a></li>
            <li><a href="../../subpage_root/offer.php?k=12&page=1">Manga</a></li>
            <li><a href="../../subpage_root/offer.php?k=13&page=1">Motoryzacja</a></li>
            <li><a href="../../subpage_root/offer.php?k=14&page=1">Poezja</a></li>
            <li><a href="../../subpage_root/offer.php?k=15&page=1">Reportarz</a></li>
            <li><a href="../../subpage_root/offer.php?k=16&page=1">Rozwój</a></li>
            <li><a href="../../subpage_root/offer.php?k=17&page=1">Science</a></li>
            <li><a href="../../subpage_root/offer.php?k=18&page=1">Sensacja</a></li>
            <li><a href="../../subpage_root/offer.php?k=19&page=1">Thiller</a></li>
            <li><a href="../../subpage_root/offer.php?k=0&page=1">Wszystko</a></li>
        </ul>
    </div>
    <div id="books">
        <table>
            <tr>
                <?php
                    include 'mine_page_offer_exec.php';
                    $new = new offer(htmlspecialchars($_GET['k']), htmlspecialchars($_GET['page'])); //create new object
                    $max_page = $new->max_page(); //call to max page function
                ?>
            </tr>
        </table>
        <?php
            new pages(htmlspecialchars($_GET['page']), htmlspecialchars($_GET['k']), $max_page);//create new object and send params
        ?>
    </div>
</div>