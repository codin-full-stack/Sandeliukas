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
            
            Antraštė: <br>
            <input class="input" type="text" style="width:800px;height:50px;" required readonly name="title" value="<?php echo $row['title'] ?>" required><br>
            Tekstas: <br>
           
            <textarea rows="30" name="content" id="content" cols="111" required><?php echo $row['content'] ?></textarea><br>
            Foto:<br>
                    <input type="file" name="img" src="<?php echo $row['postimg'] ?>"/><br>
                    <input type="hidden" name="existing_image" value="<?php echo $row['postimg'] ?>">
           
            <br>
            <button type="submit" class="button">Taip</button>       
            
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