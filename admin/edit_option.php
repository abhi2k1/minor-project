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
                        <h1>Update Question</h1>
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
                                <div id="pay-invoice">
                                    <div class="card-body">
                                    <div class="col-lg-6">
                                        <div class="card">
                                            <form method="POST" action="" name="form1">
                                            <div class="card-header"><strong>Update Question with text</strong></div>
                                            <div class="card-body card-block">
                                            <div class="form-group"><label for="company" class=" form-control-label">Question</label><input type="text"  name="question"  class="form-control" required value="<?php echo $question;?>"></div>
                                            <div class="form-group"><label for="company" class=" form-control-label">Option 1</label><input type="text"  name="opt1"  class="form-control" value="<?php echo $opt1;?>"></div>
                                            <div class="form-group"><label for="company" class=" form-control-label">Option 2</label><input type="text"  name="opt2"  class="form-control" value="<?php echo $opt2;?>"></div>
                                            <div class="form-group"><label for="company" class=" form-control-label">Option 3</label><input type="text"  name="opt3"  class="form-control" value="<?php echo $opt3;?>"></div>
                                            <div class="form-group"><label for="company" class=" form-control-label">Option 4</label><input type="text"  name="opt4"  class="form-control" value="<?php echo $opt4;?>"></div>
                                            <div class="form-group"><label for="company" class=" form-control-label">Correct Answer</label><input type="text"  name="answer"  class="form-control" value="<?php echo $answer;?>"></div>
                                            <div class="form-group">
                                            <button class="btn btn-success btn-block loginbtn col-3" type="submit" name="submit1">Update Question</button>
                                            </form>
                                        </div>    
                                    </div>
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
 if(isset($_POST["submit1"])){
     //echo "testing ...";
     $sql="UPDATE question set question='$_POST[question]' ,option1='$_POST[opt1]',option2='$_POST[opt2]' ,option3='$_POST[opt3]' ,option4='$_POST[opt4]' ,answer='$_POST[answer]' WHERE id='$id'";
     $result=$mysqli->query($sql);
    if ($result === TRUE) {
        //echo "New record created successfully";
        ?>
        <script type="text/javascript">
            //alert("exam updated successfully");
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
