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
                <h2>Add A Question</h2>
                <form action="add.php" method="post">
                    <p>
                        <label for="">Question Number: </label>
                        <input type="number" name="question_number">
                    </p>
                    <p>
                        <label for="">Question Text:</label>
                        <input type="text" name="question_text">
                    </p>
                    <p>
                        <label for="">Choice #1:</label>
                        <input type="text" name="choice1">
                    </p>
                    <p>
                        <label for="">Choice #2:</label>
                        <input type="text" name="choice2">
                    </p>
                    <p>
                        <label for="">Choice #3:</label>
                        <input type="text" name="choice3">
                    </p>
                    <p>
                        <label for="">Choice #4:</label>
                        <input type="text" name="choice4">
                    </p>
                    <p>
                        <label for="">Choice #5:</label>
                        <input type="text" name="choice5">
                    </p>
                    <p>
                        <label for="">Correct Choice Number:</label>
                        <input type="number" name="correct_choice">
                    </p>
                    <p>
                        <input type="submit" name="submit" value="submit">
                    </p>
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