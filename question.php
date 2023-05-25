<?php include 'database.php'; ?>
<?php 
// set question number
$number = (int) $_GET['n'];

// get question
$query = "SELECT * FROM questions
WHERE question_number = $number";

// get result
$result = $mysqli -> query($query) or die($mysqli -> error.__LINE__);

$question = $result->fetch_assoc();

// get choices
$query = "SELECT * FROM choices
WHERE question_number = $number";

// get result
$choices = $mysqli -> query($query) or die($mysqli -> error.__LINE__);

?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="css/styles.css" />
        <title>Pokemon</title>
        
    </head>
    <body>
        <header>
            <div class="container">
                <h1>Pokemon 1997</h1>
            </div>
        </header>
        <main>
            <div class="container">
                <div class="current">Question 1 of 5</div>
                <p class="question">
                    <?php echo $question['text']; ?>
                </p>
                <form method= "post" action="process.php">
                    <ul class="choices">
                        <?php while($row = $choices -> fetch_assoc()): ?>
                            <li><input name="choice" type="radio" value="<?php echo $row['id']; ?>"><?php echo $row['text']; ?></li>
                        <?php endwhile ?>
                        <!-- 
                        <li><input name="choice" type="radio" value="1">Meowth</li>
                        <li><input name="choice" type="radio" value="1">Squirtle</li>
                        <li><input name="choice" type="radio" value="1">Mew</li> -->
                    </ul>
                    <input type="submit" value="Submit">
                </form>
            </div>
        </main>
        <footer>
            <div class="container">
                Copyright &copy; 2023 Pokemon
            </div>
        </footer>
    </body>
</html>