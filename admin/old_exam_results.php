<?php
session_start();
include "../connection.php";
 include "header.php";
?>
        <!-- Header-->

        <div class="breadcrumbs">
            <div class="col-sm-4">
                <div class="page-header float-left">
                    <div class="page-title">
                        <h1>All Exam Results</h1>
                    </div>
                </div>
            </div>
            
        </div>

        <div class="content mt-3">
            <div class="animated fadeIn">


                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-body">
                                <!-- Credit Card -->
                                <div id="pay-invoice">
                                    <div class="card-body">
                                        <center>
                                            <h1>Old Exam Results</h1>
                                        </center>
                <?php
                    $count=0;
                    $sql="SELECT * FROM exam_result  order by id desc";
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

                            </div>
                        </div>

                    </div>
                    <!--/.col-->
                </div><!-- .animated -->
            </div><!-- .content -->
        </div><!-- /#right-panel -->
</div> <!-- Right Panel -->

<?php
 include "footer.php";
?>
