<?php
include "../connection.php";
$id = $_GET["id"];
$id1=$_GET["id1"];
$sql="DELETE FROM question where id =$id";
$res=$mysqli->query($sql);
if($res==TRUE){
    //delete successfully;
}else{
    echo "Error: " . $sql . "<br>" . $mysqli->error;
}
?>
<script type="text/javascript">
   window.location="add_edit_question.php?id=<?php echo $id1;?>";
</script>