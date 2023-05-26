<?php include 'database.php'; ?>
<?php session_start(); ?>
<?php 
// set question number
$number = (int) $_GET['n'];

// get total questions
$query = "SELECT * FROM questions";
// get result
$results = $mysqli -> query($query) or die($mysqli -> error.__LINE__);
$total = $results -> num_rows;

// get question
$query = "SELECT * FROM `questions`
WHERE question_number = $number";

// get result
$result = $mysqli -> query($query) or die($mysqli -> error.__LINE__);

$question = $result->fetch_assoc();

// get choices
$query = "SELECT * FROM `choices`
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
                <div class="current">Question <?php echo $question['question_number']; ?> of <?php echo $total; ?></div>
                <p class="question">
                    <?php echo $question['text']; ?>
                </p>
                <form method= "post" action="process.php">
                    <ul class="choices">
                        <?php while($row = $choices -> fetch_assoc()): ?>
                            <li><input name="choice" type="radio" value="<?php echo $row['id']; ?>"><?php echo $row['text']; ?></li>
                        <?php endwhile ?>
                        
                    </ul>
                    <input type="submit" value="Submit">
                    <input type="hidden" name="number" value="<?php echo $number; ?>" >
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