<?php
$msg="";
$db=mysqli_connect("localhost","root","","iblog");
if(isset($_POST['post']))
{   $name=$_POST['name'];
    $head=$_POST['heading'];
    $text=$_POST['content'];
    $image = $_FILES['image']['name'];
    $sql="INSERT INTO post (name,head,text,image) VALUES ('$name','$head','$text','$image')";
    mysqli_query($db,$sql);
    $target = "images/".basename($image);
    if (move_uploaded_file($_FILES['image']['tmp_name'], $target)) {
        $msg = "Image uploaded successfully";
    }else{
        $msg = "Failed to upload image";
    }
}
$sql="SELECT * FROM post";
$result=mysqli_query($db,$sql);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>IbloG</title>
    <link rel="stylesheet" href="main.css">
</head>

<body>
    <div class="main">
        <header>
        <div class="navbar">
          <div class="dropdown">
            <button class="dropbtn">MENU</button>
            <div class="dropdown-content">
              <a href="index.php">HOME</a>
              <a href="post.php">POST</a>
              <a href="about.php">ABOUT</a>
            </div>
          </div>
        </div>
        <br>
        <div>
        <h1>iBloG</h1>
        </div>
        </header>
        <?php
        while($row =mysqli_fetch_array($result))
        {
            echo "<div class='blog'>";
            echo "<div> <hr> </div>";
            echo " <h3>".$row[1]."</h3>";
            echo " <p>".$row[2]."</p>";
            echo " <h5>".$row[0]."</h5>";
            echo "<img src='images/".$row['3']."' alt='no photo' >";
            echo "</div>";
        }
        ?>
        <div class="form">
        <div>
                <hr>
            </div>
            <h2>Post your Article in few steps and share your knowledge...</h2>
            <form action="post.php" method="post" enctype="multipart/form-data">
                <div>
                    <div>

                        <input type=" text" name="name" placeholder="name">
                    </div>
                    <div>
                        <input type="text" name="heading" placeholder="heading">
                    </div>
                    <div>
                        <textarea name="content" cols="" rows="" placeholder="write here" ></textarea>
                    </div>
                    <DIV>
                       <input type="file" name="image">
                    </DIV>
                    <div>
                        <input  class="btn" type="submit" value="post" name="post">
                    </div>
                </div>
            </form>
            <h4>we are thankful to provide you servieces</h4>
        </div>
    </div>
        <!-- <footer>
            <div>
                <hr>
            </div>
            <h5>fill free for any query</h5>
            <div>
            <form action="contact.php" method="post">
                <div>
                    <input type="text" name="name" id="name" placeholder="your name">
                </div>
                <div>
                    <input type="email" name="email" id="email" placeholder="your email">
                </div>
                <div>
                    <input type="text" name="query" id="query" placeholder="your query">
                </div>
                <div>
                    <input type="submit" name="submit" id="submit" value="submit">
                </div>
            </form>
        </div>
        <div>
            <p>check in : 22X7 at pali bilaspur</p>
        </div>
        </footer>
     -->
</body>

</html>