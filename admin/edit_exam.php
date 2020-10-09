<?php
 include "header.php";
 include "../connection.php";

$id=$_GET["id"];
//echo $id;
$sql="SELECT * FROM exam_category where id=$id";
$result=$mysqli->query($sql);
while($row = mysqli_fetch_array($result, MYSQLI_NUM)){
 $exam_category=$row[1];
 $exam_Time=$row[2];
}

?>
        <!-- Header-->

<div class="breadcrumbs">
    <div class="col-sm-4">
        <div class="page-header float-left">
            <div class="page-title">
                <h1>Edit Exam</h1>
            </div>
        </div>
    </div>
            
</div>

<div class="content mt-3">
    <div class="animated fadeIn">
        <div class="row">
            <div class="col-lg-6">
                <div class="card">
                    <form name="form1" action="" method="POST">
                    <div class="card-header"><strong>Edit Exam</strong></div>
                        <div class="card-body card-block">
                            <div class="form-group"><label for="company" class=" form-control-label">Exam Category</label><input type="text" id="company" name="examCategory" value="<?php echo $exam_category;?>" class="form-control"></div>
                            <div class="form-group"><label for="vat" class=" form-control-label">Exam Time(in minutes)</label><input type="text" id="vat"  name="examTime" value="<?php echo $exam_Time;?>" class="form-control"></div>
                            <div class="form-group">
                            <button class="btn btn-success btn-block loginbtn" type="submit" name="submit1">Update Exam</button>
                        </div>    
                    </div>
                </div>
            </div>
        </form>
        </div>
</div>

<?php
 if(isset($_POST["submit1"])){
     //echo "testing ...";
     $sql="UPDATE exam_category set category='$_POST[examCategory]' ,exam_time_in_minutes='$_POST[examTime]' WHERE id='$id'";
     $result=$mysqli->query($sql);
    if ($result === TRUE) {
        //echo "New record created successfully";
        ?>
        <script type="text/javascript">
            //alert("exam updated successfully");
            window.location.href="exam-category.php";
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
