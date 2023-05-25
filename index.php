<?php include 'database.php'; ?>
<?php 
// get total questions
$query = "SELECT * FROM questions";

// get result
$results = $mysqli -> query($query) or die($mysqli -> error.__LINE__);
$total = $results -> num_rows;

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
                <h2>Gen 1 Knowledge</h2>
                <p>The following is multiple choice is to test your Generation 1 Pokemon knowledge!</p>
                <ul>
                    <li><strong>Number of Questions: </strong><?php echo $total; ?></li>
                    <li><strong>Type: </strong>Multiple Choice</li>
                    <li><strong>Estimated Time: </strong><?php echo $total * .5 ?> Minutes</li>
                </ul>
                <a href="question.php?n=1" class="start">Begin Quiz</a>
            </div>
        </main>
        <footer>
            <div class="container">
                Copyright &copy; 2023 Pokemon
            </div>
        </footer>
    </body>
</html>