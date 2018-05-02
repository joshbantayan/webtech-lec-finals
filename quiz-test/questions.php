<?php include 'database.php'; ?>
<?php
    $number = (int)$_GET['n'];

    $query = "SELECT * FROM `questions` 
    WHERE question_number = $number";

    $result = $mysqli->query($query) or die($mysqli->error.__LINE__);

    $question = $result->fetch_assoc();

//choices

    $query = "SELECT * FROM `choices` 
    WHERE question_number = $number";

    $choices = $mysqli->query($query) or die($mysqli->error.__LINE__);
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset='utf-8'/>
        <title> Sample quiz </title>
    </head>
</html>

<body>
    <header>
        <div class="container">
            <h1> Sample Quiz</h1>
        </div>
    </header>
    <main>
        <div class="container">
        <div class="current-page"> Question 1 of 5 </div>
        <p class="question"> 
            <?php echo $question['text']; ?>
        </p>
        <form method="post" action="process.php">
            <ul class="choices">
                <?php while($row = $choices->fetch_assoc()): ?>
                 <li> <input name="choice" type="radio" value="<?php  echo $row['id']; ?>" /> <?php echo $row['text']; ?></li>
                <?php endwhile; ?>
            </ul>
            <input name="submit" type="submit" value="submit" />
        </form>
        </div>
    </main>
    <footer>
        <div class="container">
            <p> Some text</p>
        </div>
    </footer>
</body>