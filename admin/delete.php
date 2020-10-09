<?php
include "../connection.php";
$id = $_GET["id"];
$sql="DELETE FROM exam_category where id =$id";
$res=$mysqli->query($sql);
if($res==TRUE){
    //delete successfully;
}else{
    echo "Error: " . $sql . "<br>" . $mysqli->error;
}
?>
<script type="text/javascript">
   window.location="exam-category.php";
</script>