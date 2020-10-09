<?php
 include "header.php";
 include "../connection.php";
?>
        <!-- Header-->

        <div class="breadcrumbs">
            <div class="col-sm-4">
                <div class="page-header float-left">
                    <div class="page-title">
                        <h1>Select exam categories for add and edit questions</h1>
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
                                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Exam Name</th>
                                <th scope="col">Exam Time</th>
                                <th scope="col">Select</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $sql="SELECT * FROM exam_category";
                            $result=$mysqli->query($sql);
                            //echo $result;
                            $count=1;
                            while($row=mysqli_fetch_array($result, MYSQLI_NUM)){
                                ?>
                                <tr>
                                    <th scope="row"><?php echo $count?></th>
                                      <td><?php echo $row[1]?></td>
                                      <td><?php echo $row[2]?></td>
                                      <td><a href="add_edit_question.php?id=<?php echo $row[0];?>">Select</a></td>
                                </tr>

                                <?php
                                $count=$count+1;
                            }
                            

                            ?>
                        </tbody>
                    </table> 
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
