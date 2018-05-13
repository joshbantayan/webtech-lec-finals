<?php
    require "connect.php";

    $output = '';

    if(isset($_POST['search'])){
        $search = mysqli_real_escape_string($connection, $_POST['search']);
    }

    $statement = "SELECT * FROM notes WHERE title LIKE '%$search%'";

    $result = mysqli_query($connection, $statement);

    $count = mysqli_num_rows($result);

    if($count > 0){
        while($row = mysqli_fetch_array($result)){
            $title = $row['title'];
            $content = $row['content'];
            $link = $row['link'];

            echo "<div id='content-container'>";
            echo "<a href=$link><p>$title</p></a>";
            echo "<p>$content</p>";
        }
    }
?>