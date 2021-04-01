<?php

$db = mysqli_connect("localhost", "root", "", "iblog");
if (isset($_POST['submit'])){
    $name=$_POST['name'];
    $email=$_POST['email'];
    $query=$_POST['query'];
    $sql=" INSERT INTO contact (name,email,query) VALUES ('$name','$email','$query') ";
    mysqli_query($db,$sql); 
}
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
      <HEADER> 
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
        </HEADER>
        <div class="blog">
            <div>
                <hr>
            </div>
            <h3>INDIA</h3>
            <p>India (Hindi: Bhārat), officially the Republic of India (Hindi: Bhārat Gaṇarājya),[23] is a country in South Asia. It is the second-most populous country, the seventh-largest country by land area, and the most populous democracy in the world. Bounded by the Indian Ocean on the south, the Arabian Sea on the southwest, and the Bay of Bengal on the southeast, it shares land borders with Pakistan to the west;[f] China, Nepal, and Bhutan to the north; and Bangladesh and Myanmar to the east. In the Indian Ocean, India is in the vicinity of Sri Lanka and the Maldives; its Andaman and Nicobar Islands share a maritime border with Thailand and Indonesia.
            Modern humans arrived on the Indian subcontinent from Africa no later than 55,000 years ago.[24] Their long occupation, initially in varying forms of isolation as hunter-gatherers, has made the region highly diverse, second only to Africa in human genetic diversity.[25] Settled life emerged on the subcontinent in the western margins of the Indus river basin 9,000 years ago, evolving gradually into the Indus Valley Civilisation of the third millennium BCE.[26] By 1200 BCE, an archaic form of Sanskrit, an Indo-European language, had diffused into India from the northwest, unfolding as the language of the Rigveda, and recording the dawning of Hinduism in India.[27] The Dravidian languages of India were supplanted in the northern and western regions.[28] By 400 BCE, stratification and exclusion by caste had emerged within Hinduism,[29] and Buddhism and Jainism had arisen, proclaiming social orders unlinked to heredity.[30] Early political consolidations gave rise to the loose-knit Maurya and Gupta Empires based in the Ganges Basin.[31] Their collective era was suffused with wide-ranging creativity,[32] but also marked by the declining status of women,[33] and the incorporation of untouchability into an organised system of belief.[g][34] In South India, the Middle kingdoms exported Dravidian-languages scripts and religious cultures to the kingdoms of Southeast Asia.[35]</p>
            <h5>INDIAN</h5>
            <img src="img/india1.webp" alt="">
        </div>
        <div class="blog">
            <div>
                <hr>
            </div>
            <h3>Rose</h3>
            <p>A rose is a woody perennial flowering plant of the genus Rosa, in the family Rosaceae, or the flower it bears.[1] There are over three hundred species and tens of thousands of cultivars.[1] They form a group of plants that can be erect shrubs, climbing, or trailing, with stems that are often armed with sharp prickles.[1] Flowers vary in size and shape and are usually large and showy, in colours ranging from white through yellows and reds.[1] Most species are native to Asia, with smaller numbers native to Europe, North America, and northwestern Africa.[1] Species, cultivars and hybrids are all widely grown for their beauty and often are fragrant. Roses have acquired cultural significance in many societies.[1] Rose plants range in size from compact, miniature roses, to climbers that can reach seven meters in height.[1] Different species hybridize easily, and this has been used in the development of the wide range of garden roses.[1]</p>
            <h5>pankaj jaiswal</h5>
            <img  src="img/rose.jfif" alt="">
        </div>
        <div class="blog">
            <div>
                <hr>
            </div>
            <h3>Raipur</h3>
            <p>Raipur is the capital city of Chhattisgarh state in central India. In the center, the ancient Dudhadhari Math temple is a sacred monument dedicated to Lord Rama, decorated with scenes from the epic poem “Ramayana.” Nearby, a statue of the Hindu monk Swami Vivekananda towers over Vivekananda Sarovar lake. Southeast, Purkhouti Muktangan is an open-air museum featuring landscaped grounds, statues and tribal artifacts.</p>
            <h5>raipurian</h5>
            <img src="img/raipur.jpg" alt="" >
            <div>
            <H3>
            <a href="post.php">read more articles...</a>
            </H3>
            </div>
        </div>
    </div>
    
</body>

</html>