<?php
    session_start(); //start session
?>   
   <div id="menu">
        <ol>
            <li><a href="../index.php">Strona Główna</a></li>
            <li><a href="#">Oferta</a>
                <ul>
                    <li><a href="../subpage_root/offer.php?k=3&page=1">Fantasy</a></li>
                    <li><a href="../subpage_root/offer.php?k=6&page=1">Kryminał</a></li>
                    <li><a href="../subpage_root/offer.php?k=7&page=1">Lektury</a></li>
                    <li><a href="../subpage_root/offer.php">Wszystkie</a></li>
                </ul>
            </li>    
            <li><a href="#">Kontakt</a>
                <ul>
                    <li><a href="podstrony/kontakt/napisz_od_nas.php">Napisz do nas</a></li>
                    <li><a href="podstrony/kontakt//telefon.php">Telefoniczny</a></li>
                    <li><a href="podstrony/kontakt//o_firmie.php">O firmie</a></li>
                </ul>
            </li>
            <?php
                if(isset($_SESSION['login'])) //togle button
                {
                    echo '<li><a href="../podstrony/konto/konto.php">Konto</a></li>';
                }else{
                    echo '<li><a href="../podstrony/konto/login.php">Zaloguj</a></li>';
                }
            ?>
        </ol>
    </div>