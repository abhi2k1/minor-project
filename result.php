<?php
    session_start();
    include "header.php";
    include "connection.php";
    $date=date("Y-m-d H:i:s");
    $_SESSION["end_time"]=date("Y-m-d H:i:s",strtotime($date."+$_SESSION[exam_time] minutes"));
?>


        <div class="row" style="margin: 0px; padding:0px; margin-bottom: 50px;">

            <div class="col-lg-6 col-lg-push-3" style="min-height: 500px; background-color: white;">
                    <?php
                        $correct=0;
                        $wrong=0;

                        if(isset($_SESSION["answer"])){
                            for($i=1; $i<=sizeof($_SESSION["answer"]); $i++){
                                $answer="";
                                $sql="SELECT * FROM question WHERE category='$_SESSION[exam_category]' && question_no=$i";
                                $result=$mysqli->query($sql);
                                while($row=mysqli_fetch_array($result, MYSQLI_NUM)){
                                    $answer=$row[7];
                                }

                                if(isset($_SESSION["answer"][$i])){
                                    if($answer==$_SESSION["answer"][$i]){
                                        $correct=$correct+1;
                                    }
                                    else{
                                        $wrong=$wrong+1;
                                    }
                                }
                                else{
                                    $wrong=$wrong+1;
                                }
                            }
                        }

                        $count=0;
                        $sql="SELECT * FROM question WHERE category='$_SESSION[exam_category]'";
                        $result=$mysqli->query($sql);
                        $count=mysqli_num_rows($result);
                        $wrong=$count-$correct;

                        echo "<br>";
                        echo "<br>";
                        echo "<center>";
                        echo "Total Questions = ".$count;
                        echo "<br>";
                        echo "Correct Answer = ".$correct;
                        echo "<br>";
                        echo "Wrong answer = ".$wrong;
                        echo "</center>";
                    ?>
            </div>

        </div>

<?php
    if(isset($_SESSION["exam_start"])){
        $date=date("Y-m-d");
        $sql="INSERT INTO exam_result(id,userName,exam_type,total_question,correct_answer,wrong_answer,exam_time) values(NULL,'$_SESSION[userName]','$_SESSION[exam_category]','$count','$correct','$wrong',$date)";
        $result1=$mysqli->query($sql);
        if ($result1 === TRUE) {
            //echo "New record created successfully";
        }else{
            echo "Error: " . $sql . "<br>" . $mysqli->error;
        }
    }

    if(isset($_SESSION["exam_start"])){
        unset($_SESSION["exam_start"]);
        ?>
        <script type="text/javascript">
            window.location.href=window.location.href;
        </script>
        <?php
    }
?>


<?php
    include "footer.php"
?>