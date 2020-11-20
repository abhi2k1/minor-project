<?php
 include "header.php";
 include "../connection.php";
 $id=$_GET["id"];
 $id1=$_GET["id1"];
 $sql="SELECT * FROM question WHERE id='$id'";
 $result=$mysqli->query($sql);
 $question="";
 $opt1="";
 $opt2="";
 $opt3="";
 $opt4="";
 $answer="";
 while($row=mysqli_fetch_array($result, MYSQLI_NUM)){
    $question=$row[2];
    $opt1=$row[3];
    $opt2=$row[4];
    $opt3=$row[5];
    $opt4=$row[6];
    $answer=$row[7];
 }
?>
        <!-- Header-->

        <div class="breadcrumbs">
            <div class="col-sm-4">
                <div class="page-header float-left">
                    <div class="page-title">
                        <h1>Update question with images</h1>
                    </div>
                </div>
            </div>
            
        </div>

        <div class="content mt-3">
            <div class="animated fadeIn">


                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                          <form name="form1" action="" method="POST" enctype="multipart/form-data">
                            <div class="card-body">
                                <!-- Credit Card -->
                                <div id="pay-invoice">
                                    <div class="card-body">
                                    <div class="col-lg-6">
                                        <div class="card">
                                            <div class="card-header"><strong>Update Question with images</strong></div>
                                            <div class="card-body card-block">
                                            <div class="form-group"><label for="company" class=" form-control-label">Add Question</label><input type="text"  name="fquestion"  class="form-control" value="<?php echo $question;?>"></div>
                                            <div class="form-group"><img src="<?php echo $opt1;?>" height="50" width="50"><br><label for="company" class=" form-control-label">Add Option 1</label><input type="file"  name="fopt1" placeholder="Option 1" class="form-control" style="padding-bottom:35px;"></div>
                                            <div class="form-group"><img src="<?php echo $opt2;?>" height="50" width="50"><br><label for="company" class=" form-control-label">Add Option 2</label><input type="file"  name="fopt2" placeholder="Option 2" class="form-control" style="padding-bottom:35px;"></div>
                                            <div class="form-group"><img src="<?php echo $opt3;?>" height="50" width="50"><br><label for="company" class=" form-control-label">Add Option 3</label><input type="file"  name="fopt3" placeholder="Option 3" class="form-control" style="padding-bottom:35px;"></div>
                                            <div class="form-group"><img src="<?php echo $opt4;?>" height="50" width="50"><br><label for="company" class=" form-control-label">Add Option 4</label><input type="file"  name="fopt4" placeholder="Option 4" class="form-control" style="padding-bottom:35px;"></div>
                                            <div class="form-group"><img src="<?php echo $answer;?>" height="50" width="50"><br><label for="company" class=" form-control-label">Add correct Answer</label><input type="file"  name="fanswer" placeholder="Correct Answer" class="form-control"></div>
                                            <div class="form-group">
                                            <button class="btn btn-success btn-block loginbtn col-3" type="submit" name="submit1">Update Question</button>
                                        </div>    
                                    </div>
                                    </div>
                                </div>

                            </div>
                          </form>
                        </div>

                    </div>
                    <!--/.col-->
                </div><!-- .animated -->
            </div><!-- .content -->
        </div><!-- /#right-panel -->
</div> <!-- Right Panel -->


<?php
 if(isset($_POST["submit1"])){
     //echo "testing";
     $fnm1=$_FILES["fopt1"]["name"];
     //echo $fnm1;
     $fnm2=$_FILES["fopt2"]["name"];
     $fnm3=$_FILES["fopt3"]["name"];
     $fnm4=$_FILES["fopt4"]["name"];
     $fnm5=$_FILES["fanswer"]["name"];

     $tm=md5(time());

     if($fnm1!=""){
        $dst1="opt_images/".$tm.$fnm1;
        $dst_db1="opt_images/".$tm.$fnm1;
        move_uploaded_file($_FILES["fopt1"]["tmp_name"],$dst1);
        $sql="UPDATE question SET question='$_POST[fquestion]',option1='$dst_db1' WHERE id='$id'";
        $result=$mysqli->query($sql);
        if ($result === TRUE) {
            //echo "New record created successfully";
            ?>
            <script type="text/javascript">
                //alert("exam updated successfully");
                //window.location.href="add_edit_question.php?id=<?php echo $id1;?>";
            </script>
            <?php
            } else {
                echo "Error: " . $sql . "<br>" . $mysqli->error;
            }
     }
     if($fnm2!=""){
        $dst2="opt_images/".$tm.$fnm2;
        $dst_db2="opt_images/".$tm.$fnm2;
        move_uploaded_file($_FILES["fopt2"]["tmp_name"],$dst2);
        $sql="UPDATE question SET question='$_POST[fquestion]',option2='$dst_db2' WHERE id='$id'";
        $result=$mysqli->query($sql);
        if ($result === TRUE) {
            //echo "New record created successfully";
            ?>
            <script type="text/javascript">
                //alert("exam updated successfully");
                //window.location.href="add_edit_question.php?id=<?php echo $id1;?>";
            </script>
            <?php
            } else {
                echo "Error: " . $sql . "<br>" . $mysqli->error;
            }
     }
     if($fnm3!=""){
        $dst3="opt_images/".$tm.$fnm3;
        $dst_db3="opt_images/".$tm.$fnm3;
        move_uploaded_file($_FILES["fopt3"]["tmp_name"],$dst3);
        $sql="UPDATE question SET question='$_POST[fquestion]',option3='$dst_db3' WHERE id='$id'";
        $result=$mysqli->query($sql);
        if ($result === TRUE) {
            //echo "New record created successfully";
            ?>
            <script type="text/javascript">
                //alert("exam updated successfully");
                //window.location.href="add_edit_question.php?id=<?php echo $id1;?>";
            </script>
            <?php
            } else {
                echo "Error: " . $sql . "<br>" . $mysqli->error;
            }
     }
     if($fnm4!=""){
        $dst4="opt_images/".$tm.$fnm4;
        $dst_db4="opt_images/".$tm.$fnm4;
        move_uploaded_file($_FILES["fopt4"]["tmp_name"],$dst4);
        $sql="UPDATE question SET question='$_POST[fquestion]',option4='$dst_db4' WHERE id='$id'";
        $result=$mysqli->query($sql);
        if ($result === TRUE) {
            //echo "New record created successfully";
            ?>
            <script type="text/javascript">
                //alert("exam updated successfully");
                //window.location.href="add_edit_question.php?id=<?php echo $id1;?>";
            </script>
            <?php
            } else {
                echo "Error: " . $sql . "<br>" . $mysqli->error;
            }
     }
     if($fnm5!=""){
        $dst5="opt_images/".$tm.$fnm5;
        $dst_db5="opt_images/".$tm.$fnm5;
        move_uploaded_file($_FILES["fanswer"]["tmp_name"],$dst5);
        $sql="UPDATE question SET question='$_POST[fquestion]',answer='$dst_db5' WHERE id='$id'";
        $result=$mysqli->query($sql);
        if ($result === TRUE) {
            //echo "New record created successfully";
            ?>
            <script type="text/javascript">
                //alert("exam updated successfully");
                //window.location.href="add_edit_question.php?id=<?php echo $id1;?>";
            </script>
            <?php
            } else {
                echo "Error: " . $sql . "<br>" . $mysqli->error;
            }
     }
     $sql="UPDATE question SET question='$_POST[fquestion]' WHERE id='$id'";
     $result=$mysqli->query($sql);
     if ($result === TRUE) {
        //echo "New record created successfully";
        ?>
        <script type="text/javascript">
            alert("exam updated successfully");
            window.location.href="add_edit_question.php?id=<?php echo $id1;?>";
        </script>
        <?php
        } else {
            echo "Error: " . $sql . "<br>" . $mysqli->error;
        }
 }

?>



<?php
 include "footer.php";
?>
