<?php
    require "../php/connect.php";
    
    if(isset($_POST['search'])){
        $query = $_POST['search'];
        $min_length = 3;
     
    if(strlen($query) >= $min_length){
         
        $query = htmlspecialchars($query); 
         
        $query = mysqli_real_escape_string($connection, $query);
         
        $raw_results = mysqli_query($connection, "SELECT title FROM topics
            WHERE (itemName LIKE '%".$query."%')" or die(mysql_error())); 
        $row = mysqli_fetch_array($raw_results, MYSQLI_ASSOC);
        echo "help";
        echo "results $raw_results";
             
         
        if($row > 0){ 
             
            while($results = mysql_fetch_array($raw_results)){
             
                echo "<p><h3>".$results['title']."</h3>".$results['text']."</p>";
            }
             
        }
        else{
            echo "No results";
        }
         
    }
    else{
        echo "Minimum length is ".$min_length;
    }
    }
?>

<!DOCTYPE html>
<html>
<head>
    <title>Search</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
</head>
<body>
    content
</body>
</html>

//https://owlcation.com/stem/Simple-search-PHP-MySQL