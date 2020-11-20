<?php
    session_start();
    include "connection.php";
    include "header.php";
?>


        <div class="row" style="margin: 0px; padding:0px; margin-bottom: 50px;">

            <div class="col-lg-6 col-lg-push-3" style="min-height: 500px; background-color: white;">
                <center>
                <h1>Old Exam Results</h1>
                </center>
                <?php
                    $count=0;
                    $sql="SELECT * FROM exam_result where userName='$_SESSION[userName]' order by id desc";
                    $result=$mysqli->query($sql);
                    $count=mysqli_num_rows($result);

                    if($count==0){
                        ?>
                        <center>No Results</center>
                        <?php
                    }else{

                        echo "<table class='table table-bordered'>";
                        echo "<tr>";
                        echo "<th>"; echo "userName"; echo "</th>";
                        echo "<th>"; echo "exam type"; echo "</th>";
                        echo "<th>"; echo "total question"; echo "</th>";
                        echo "<th>"; echo "correct answer"; echo "</th>";
                        echo "<th>"; echo "wrong answer"; echo "</th>";
                        echo "<th>"; echo "exam time"; echo "</th>"; 
                        echo "</tr>";

                        while($row=mysqli_fetch_array($result)){
                            echo "<tr>";
                            echo "<td>"; echo $row[1]; echo "</td>";
                            echo "<td>"; echo $row[2]; echo "</td>";
                            echo "<td>"; echo $row[3]; echo "</td>";
                            echo "<td>"; echo $row[4]; echo "</td>";
                            echo "<td>"; echo $row[5]; echo "</td>";
                            echo "<td>"; echo $row[6]; echo "</td>"; 
                            echo "</tr>";
                        }

                        echo "</table>";
                    }

                ?>
            </div>

        </div>




<?php
    include "footer.php"
?>