<?php
 include "header.php";
 include "../connection.php";
?>
        <!-- Header-->

<div class="breadcrumbs">
    <div class="col-sm-4">
        <div class="page-header float-left">
            <div class="page-title">
                <h1>Dashboard</h1>
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
                    <div class="card-header"><strong>Add Exam</strong></div>
                        <div class="card-body card-block">
                            <div class="form-group"><label for="company" class=" form-control-label">New Exam Category</label><input type="text" id="company" name="examCategory" placeholder="Exam Category" class="form-control"></div>
                            <div class="form-group"><label for="vat" class=" form-control-label">Exam Time(in minutes)</label><input type="text" id="vat"  name="examTime" placeholder="Time(in min.)" class="form-control"></div>
                            <div class="form-group">
                            <button class="btn btn-success btn-block loginbtn" type="submit" name="submit1">Submit</button>
                        </div>    
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="card">
                    <div class="card-header">
                        <strong class="card-title">Exam Categories</strong>
                    </div>
                    <div class="card-body">
                        <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Exam Name</th>
                                <th scope="col">Exam Time</th>
                                <th scope="col">Edit</th>
                                <th scope="col">Delete</th>
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
                                      <td><a href="edit_exam.php?id=<?php echo $row[0];?>">Edit</a></td>
                                      <td><a href="delete.php?id=<?php echo $row[0];?>">Delete</a></td>
                                </tr>

                                <?php
                                $count=$count+1;
                            }
                            

                            ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </form>
        </div>
</div>

<?php
 if(isset($_POST["submit1"])){
     //echo "testing ...";
     $sql="INSERT INTO exam_category VALUE(NULL,'$_POST[examCategory]',$_POST[examTime])";
     $result=$mysqli->query($sql);
    if ($result === TRUE) {
        //echo "New record created successfully";
        ?>
        <script type="text/javascript">
            alert("exam added successfully");
            window.location.href=window.location.href;
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
