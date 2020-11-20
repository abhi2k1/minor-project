<?php
 include "header.php";
 include "../connection.php";
 $id=$_GET["id"];
 $sql="SELECT category FROM exam_category  WHERE id='$id'";
 $result=$mysqli->query($sql);
 while($row=mysqli_fetch_array($result, MYSQLI_NUM)){
     $exam_category=$row[0];
 }
?>
        <!-- Header-->

        <div class="breadcrumbs">
            <div class="col-sm-4">
                <div class="page-header float-left">
                    <div class="page-title">
                        <h1>Add Question inside <?php /*"<font color='blue'>" .*/echo $exam_category/*. "</font>"*/;?></h1>
                    </div>
                </div>
            </div>
            
        </div>

        <div class="content mt-3">
            <div class="animated fadeIn">


                <div class="row">
                    <div class="col-lg-12">
                    <form name="form1" action="" method="POST" enctype="multipart/form-data">
                        <div class="card">
                            <div class="card-body">
                                    <div class="col-lg-6">
                                        <div class="card">
                                            
                                            <div class="card-header"><strong>Add New Question with text</strong></div>
                                            <div class="card-body card-block">
                                            <div class="form-group"><label for="company" class=" form-control-label">Add Question</label><input type="text"  name="question" placeholder="Question" class="form-control" required></div>
                                            <div class="form-group"><label for="company" class=" form-control-label">Add Option 1</label><input type="text"  name="opt1" placeholder="Option 1" class="form-control"></div>
                                            <div class="form-group"><label for="company" class=" form-control-label">Add Option 2</label><input type="text"  name="opt2" placeholder="Option 2" class="form-control"></div>
                                            <div class="form-group"><label for="company" class=" form-control-label">Add Option 3</label><input type="text"  name="opt3" placeholder="Option 3" class="form-control"></div>
                                            <div class="form-group"><label for="company" class=" form-control-label">Add Option 4</label><input type="text"  name="opt4" placeholder="Option 4" class="form-control"></div>
                                            <div class="form-group"><label for="company" class=" form-control-label">Add correct Answer</label><input type="text"  name="answer" placeholder="Correct Answer" class="form-control"></div>
                                            <div class="form-group">
                                            <button class="btn btn-success btn-block loginbtn col-3" type="submit" name="submit1">Add Question</button>
                                            </form>
                                        </div>    
                                    </div>
                                    
                                </div>
                                
                            </div>
                            <div class="col-lg-6">
                                        <div class="card">
                                            <div class="card-header"><strong>Add New Question with images</strong></div>
                                            <div class="card-body card-block">
                                            <div class="form-group"><label for="company" class=" form-control-label">Add Question</label><input type="text"  name="fquestion" placeholder="Question" class="form-control"></div>
                                            <div class="form-group"><label for="company" class=" form-control-label">Add Option 1</label><input type="file"  name="fopt1" placeholder="Option 1" class="form-control" style="padding-bottom:35px;"></div>
                                            <div class="form-group"><label for="company" class=" form-control-label">Add Option 2</label><input type="file"  name="fopt2" placeholder="Option 2" class="form-control" style="padding-bottom:35px;"></div>
                                            <div class="form-group"><label for="company" class=" form-control-label">Add Option 3</label><input type="file"  name="fopt3" placeholder="Option 3" class="form-control" style="padding-bottom:35px;"></div>
                                            <div class="form-group"><label for="company" class=" form-control-label">Add Option 4</label><input type="file"  name="fopt4" placeholder="Option 4" class="form-control" style="padding-bottom:35px;"></div>
                                            <div class="form-group"><label for="company" class=" form-control-label">Add correct Answer</label><input type="file"  name="fanswer" placeholder="Correct Answer" class="form-control"></div>
                                            <div class="form-group">
                                            <button class="btn btn-success btn-block loginbtn col-3" type="submit" name="submit2">Add Question</button>
                                        </div>    
                            </div>
                        </div>
                        </form>
                    </div>

                </div>
                <div class="row">
                    <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            <table class="table table-bordered">
                              <thead>
                                <tr>
                                    <td>Number</td>
                                    <td>Question</td>
                                    <td>Option 1</td>
                                    <td>Option 2</td>
                                    <td>Option 3</td>
                                    <td>Option 4</td>
                                    <td>Correct Answer</td>
                                    <td>Edit</td>
                                    <td>Delete</td>
                                </tr>
                              </thead>
                              <tbody>

                            <?php
                             $sql="SELECT * FROM question WHERE category='$exam_category' ORDER BY question_no ASC";
                             $result=$mysqli->query($sql);
                             while($row=mysqli_fetch_array($result, MYSQLI_NUM)){

                                echo "<tr>";
                                echo "<td>"; echo $row[1]; echo "</td>";
                                echo "<td>"; echo $row[2]; echo "</td>";
                                echo "<td>";
                                if(strpos($row[3],'opt_images/')!==FALSE){
                                    ?>
                                      <img src="<?php echo $row[3]; ?>" height="50" width="50">
                                    <?php
                                }
                                else{
    
                                    echo $row[3];
                                }
                                echo "</td>";

                                //option 2
                                echo "<td>";
                                if(strpos($row[4],'opt_images/')!==FALSE){
                                    ?>
                                      <img src="<?php echo $row[4]; ?>" height="50" width="50">
                                    <?php
                                }
                                else{
    
                                    echo $row[4];
                                }
                                echo "</td>";

                                //option 3
                                echo "<td>";
                                if(strpos($row[5],'opt_images/')!==FALSE){
                                    ?>
                                      <img src="<?php echo $row[5]; ?>" height="50" width="50">
                                    <?php
                                }
                                else{
    
                                    echo $row[5];
                                }
                                echo "</td>";

                                // option 4
                                echo "<td>";
                                if(strpos($row[6],'opt_images/')!==FALSE){
                                    ?>
                                      <img src="<?php echo $row[6]; ?>" height="50" width="50">
                                    <?php
                                }
                                else{
    
                                    echo $row[6];
                                }
                                echo "</td>";

                                //correct answer
                                echo "<td>";
                                if(strpos($row[7],'opt_images/')!==FALSE){
                                    ?>
                                      <img src="<?php echo $row[7]; ?>" height="50" width="50">
                                    <?php
                                }
                                else{
    
                                    echo $row[7];
                                }
                                echo "</td>";
                                echo "<td>";
                                if(strpos($row[7],'opt_images/')!==FALSE){
                                    ?>
                                      <a href="edit_option_images.php?id=<?php echo $row[0];?>&id1=<?php echo $id;?>">Edit</a>
                                    <?php
                                }
                                else{

                                    ?>
                                      <a href="edit_option.php?id=<?php echo $row[0];?>&id1=<?php echo $id;?>">Edit</a>
                                    <?php
    
                                    
                                }
                                echo "</td>";
                                echo "<td>";
                                ?>
                                <a href="delete_option.php?id=<?php echo $row[0];?>&id1=<?php echo $id;?>">Delete</a>
                                <?php
                                echo "</td>";
                                echo "</tr>";

                             }

                            ?>
                            </tbody>
                            </table>
                        </div>
                    </div>
                    </div>
                <div>
            </div>

        </div>
                   

<?php
    if(isset($_POST["submit1"])){
        //echo "testing";
        $loop=0;
        $count=0;
        $sql="SELECT * FROM question WHERE category='$exam_category' ORDER BY id ASC";
        $result=$mysqli->query($sql);
        $count=mysqli_num_rows($result);
        if($count==0){

        }else{
            while($row=mysqli_fetch_array($result, MYSQLI_NUM)){
                $loop=$loop+1;
                $sql="UPDATE question SET question_no='$loop' WHERE id ='$row[0]'";
                $r1=$mysqli->query($sql);

            }
        }
        $loop=$loop+1;
        $sql="INSERT INTO question VALUES(NULL,'$loop','$_POST[question]','$_POST[opt1]','$_POST[opt2]','$_POST[opt3]','$_POST[opt4]','$_POST[answer]','$exam_category')";
        $result=$mysqli->query($sql);
        if($result==TRUE){
            //work properly;
            ?>
            <script type="text/javascript">
                alert("question added successfully");
            </script>
            <?php
        }else {
            echo "Error: " . $sql . "<br>" . $mysqli->error;
        }
    }
    elseif(isset($_POST["submit2"])){
        //echo "testing...";
        $loop=0;
        $count=0;
        $sql="SELECT * FROM question WHERE category='$exam_category' ORDER BY id ASC";
        $result=$mysqli->query($sql);
        $count=mysqli_num_rows($result);
        if($count==0){

        }else{
            while($row=mysqli_fetch_array($result, MYSQLI_NUM)){
                $loop=$loop+1;
                $sql="UPDATE question SET question_no='$loop' WHERE id ='$row[0]'";
                $r1=$mysqli->query($sql);

            }
        }
        $loop=$loop+1;
        $tm=md5(time());

        // option 1
        $fnm1=$_FILES["fopt1"]["name"];
        //echo $fnm1;
        $dst1="opt_images/".$tm.$fnm1;
        $dst_db1="opt_images/".$tm.$fnm1;
        move_uploaded_file($_FILES["fopt1"]["tmp_name"],$dst1);

        //option 2
        $fnm2=$_FILES["fopt2"]["name"];
        $dst2="opt_images/".$tm.$fnm2;
        $dst_db2="opt_images/".$tm.$fnm2;
        move_uploaded_file($_FILES["fopt2"]["tmp_name"],$dst2);

        //option 3
        $fnm3=$_FILES["fopt3"]["name"];
        $dst3="opt_images/".$tm.$fnm3;
        $dst_db3="opt_images/".$tm.$fnm3;
        move_uploaded_file($_FILES["fopt3"]["tmp_name"],$dst3);

        //option 4
        $fnm4=$_FILES["fopt4"]["name"];
        $dst4="opt_images/".$tm.$fnm4;
        $dst_db4="opt_images/".$tm.$fnm4;
        move_uploaded_file($_FILES["fopt4"]["tmp_name"],$dst4);

        //correct option
        $fnm5=$_FILES["fanswer"]["name"];
        $dst5="opt_images/".$tm.$fnm5;
        $dst_db5="opt_images/".$tm.$fnm5;
        move_uploaded_file($_FILES["fanswer"]["tmp_name"],$dst5);

        $sql="INSERT INTO question VALUES(NULL,'$loop','$_POST[fquestion]','$dst_db1','$dst_db2','$dst_db3','$dst_db4','$dst_db5','$exam_category')";
        $result=$mysqli->query($sql);
        if($result==TRUE){
            //work properly;
            ?>
            <script type="text/javascript">
                alert("question added successfully");
            </script>
            <?php
        }else {
            echo "Error: " . $sql . "<br>" . $mysqli->error;
        }
    }
?>

<?php
 include "footer.php";
?>
