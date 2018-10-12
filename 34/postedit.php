<?php include 'header.php'; ?>
<div class="myP3">
<?php
$sql = "SELECT hint.postid, hint.title, hint.content, hint.postimg, hint.userid, person_information.name, person_information.surname, hint.date
FROM hint 
JOIN person_information ON hint.userid = person_information.id 
WHERE hint.postid=".$_GET['postid']." LIMIT 1";


if($result = mysqli_query($conn, $sql)){
    if(mysqli_num_rows($result) > 0){
                         
        $row = mysqli_fetch_assoc($result);


        ?>
        <form action="posteditfin.php?postid=<?php echo $row['postid'] ?>" method="post" enctype="multipart/form-data">
                
            <div class="inputblockh"> 
            <p2>Antraštė: </p2><br>
            <input class="inputfieldh" type="text"  required readonly name="title" value="<?php echo $row['title'] ?>" required><br>
            </div>
            <p2>Tekstas: </p2><br>
           
            <textarea rows="30" name="content" id="content" cols="111" class="inputfieldp" required><?php echo $row['content'] ?></textarea><br>
            <div class="inputblockpost">
            <p2>Pasirinkti foto: </p2><br>
                <label class="cabinetpost">
                <input type="file" name="img" class="filepost" src="<?php echo $row['postimg'] ?>"/><br>
                <label >              
            </div>
                <input type="hidden" name="existing_image" value="<?php echo $row['postimg'] ?>"> 
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