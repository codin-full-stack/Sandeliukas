<?php include 'header.php'; ?>
<div class="myP3">
<?php
$sql = "SELECT comments.commentid, comments.hintid, comments.comment, comments.usrid, person_information.name, person_information.surname, comments.commtime
FROM comments
JOIN person_information ON comments.usrid = person_information.id 
WHERE comments.commentid=".$_GET['commentid']." LIMIT 1";


if($result = mysqli_query($conn, $sql)){
    if(mysqli_num_rows($result) > 0){
                         
        $row = mysqli_fetch_assoc($result);


        ?>
        <form action="commeditfin.php?commentid=<?php echo $row['commentid'] ?>&&hintid=<?php echo $row['hintid'] ?>" method="post" enctype="multipart/form-data">
                   
            <p2>Komentaras: </p2><br>           
            <textarea rows="10" name="comment" id="comment" cols="111" class="inputfieldc" required><?php echo $row['comment'] ?></textarea><br>           
            <div class="submitblockpost">
            <button type="submit" class="submitbtnpost">Taip</button>       
            </div>
        </form>
        <?php

        mysqli_free_result($result);
    } else{
        echo "No records matching your query were found.";
    }
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
}


?>
</div>

<?php
include 'footer.php';
?>           