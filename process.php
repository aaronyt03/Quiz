<?php include 'database.php' ?>
<?php session_start(); ?>
<?php  
// check score
if(!isset($_SESSION['score'])){
    $_SESSION['score'] = 0;
}

if($_POST){
    $number = $_POST['number'];
    $selected_choice = $_POST['choice'];
    $next = $number+1;

    // get total questions
    $query = "SELECT * FROM `questions`";
    // get result
    $results = $mysqli -> query($query) or die($mysqli -> error.__LINE__);
    $total = $results -> num_rows;

    // get correct choice
    $query = "SELECT * FROM `choices`
    WHERE question_number = $number AND is_correct = 1";
    
    // get result
    $result = $mysqli -> query($query) or die($mysqli -> error.__LINE__);

    // get row
    $row = $result -> fetch_assoc();

    // set correct choice
    $correct_choice = $row['id'];

    // check answer choice
    if($correct_choice == $selected_choice){
        // Answer is correct
        $_SESSION['score']++;
    }
    // echo $number;
    // die();

    // check final question
    if($number === $total){
        header("Location: final.php");
        exit();
    }else{
        header("Location: question.php?n=".$next);
    }
}
?>