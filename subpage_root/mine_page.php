<div id="offer">
    <h1>BESTSELLER</h1>
    <table>
        
            <?php
            include 'skrypty/connect.php'; //include connect mysql
            $conn = new conn\connect;
            $results = $conn->prepare("SELECT * FROM towar ORDER BY sell DESC LIMIT 8;"); //query to bestseller
            $results->execute();
            $i=1;
            echo '<tr>';
            while($ob = $results->fetch(PDO::FETCH_ASSOC))//create table
            {
                if($i==5)
                {
                    echo '</tr>';
                    echo '<tr>';
                    echo '<td>';
                    echo '<a href="#"><img src="'.$ob['path_img'].'.jpg" alt="'.$ob['name'].'">';
                    echo '<span>'.$ob['name'].'</span></a>';
                    echo '</td>';
                }else{
                    echo '<td>';
                    echo '<a href="#"><img src="'.$ob['path_img'].'.jpg" alt="'.$ob['name'].'">';
                    echo '<span>'.$ob['name'].'</span></a>';
                    echo '</td>';
                }
                
                $i++;
            }
            echo '</tr>';
            $conn = null; //close connect
            ?>
        </tr>
    </table>
</div>