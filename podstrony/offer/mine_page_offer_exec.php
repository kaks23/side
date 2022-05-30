<?php 
    class offer
    {
        public $num_page; //max pages

        public function __construct($cat, $page)
        {
            try
            {
                include '../skrypty/connect.php';
                $conn = new conn\connect; //create new object
                
                $cat>0 ? $results = $conn->prepare("SELECT count(*) FROM towar WHERE kat=:kat") : $results = $conn->prepare("SELECT count(*) FROM towar"); //if category is zero prepare query without column cat, query to calculate pages
                $results->bindParam(':kat', $cat); //bind param cat
                $results->execute();
                $answers = $results->fetch(PDO::FETCH_ASSOC);
                $result = $answers['count(*)']; //get column name 'count(*)'
                $elemen_page = 12; //max elements in one page
                $this->num_page = ceil($result/$elemen_page); //sum how many pages is
                $before = $elemen_page * ($page-1); //parametr to mysql limit 'from'

                $cat>0 ? $results1 = $conn->prepare("SELECT * FROM towar WHERE kat=:kat LIMIT $before, $elemen_page") : $results1 = $conn->prepare("SELECT * FROM towar LIMIT $before, $elemen_page"); //if category is zero prepare query without column cat, query to print books offers
                $results1->bindParam(':kat', $cat); //bind param cat
                $results1->execute();
                $i=1; //parametr to increment in loop while

                while($answer = $results1 -> fetch(PDO::FETCH_ASSOC))
                {  
                    if($i==5 || $i==9) //break line
                    {
                        echo '</tr>'; //new row
                        echo '<tr>';
                    }
                    echo '<td><a href="#">'; //new cols and hyperlink
                    echo '<img src="../../'.$answer["path_img"].'.jpg" alt="'.$answer['name'].'">'; //add image in cell
                    echo '<h4>'.$answer['name'].'</h4></a>'; //add name books in header 4 and close hyperlink
                    echo '<a href="../podstrony/koszyk/koszyk.php?s='.$answer['id'].'" class="button">Dodaj do koszyka</a>'; //new hyperlink to add products to Shopping cart
                    echo '</td>'; //close cols
                    $i++; //increment variable
                }
                $conn = null; //close connect
            }catch(PDOException $e)
            {
                echo $e->getMessage(); //print possibly error
            }
        }
    }
    class pages extends offer
    {
        public function __construct($page, $cat)//calculate page on webside
        {
            try
            {
                $max = $this->num_page;
                echo '<div id="pages">'; //create div
                $i=0; //params increment in loop
                $a=2; //params to calculate number of pages
                $max>5 ? $m=5 : $m=$max; //if max pages < 5 then variable m is equal to variable max
                
                //switch to set paging
                switch($page)  
                {
                    case 1: $a=0; break;
                    case 2: $a=1; break;
                    case $max: $a=4; break;
                    case $page==$max-1 && $page>5: $a=0; break;
                }

                if($max==1){} //So as not print 'Poprzednia' params
                elseif($page==$max) //So as not  print 'Następna' params
                {
                    echo '<a href="offer.php?k='.$cat.'&page='.($page-1).'">Poprzednia</a>';
                    while($i<$m)
                    {
                        echo '<a href="offer.php?k='.$cat.'&page='.($page+$i-$a).'">'.($page+$i-$a).'</a>';
                        $i++;
                    }
                }
                else //print default params
                {
                    if($page!=1)
                    {
                        echo '<a href="offer.php?k='.$cat.'&page='.($page-1).'">Poprzednia</a>';
                    }

                    while($i<$m)
                    {
                        echo '<a href="offer.php?k='.$cat.'&page='.($page+$i-$a).'">'.($page+$i-$a).'</a>';
                        $i++;
                    }
                    echo '<a href="offer.php?k='.$cat.'&page='.($page+1).'">Następna</a>';
                }
                echo '</div>';
            }catch(PDOException $e)
            {
                echo $e->getMessage();
            }
        }
    }
?>