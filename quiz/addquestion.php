<?php
include("../conn/conn.php");

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['quiz_qn'], $_POST['option_a'], $_POST['option_b'], $_POST['option_c'], $_POST['option_d'], $_POST['correct_answer'])) {
        $quizQuestion = $_POST['quiz_qn'];
        $optionA = $_POST['option_a'];
        $optionB = $_POST['option_b'];
        $optionC = $_POST['option_c'];
        $optionD = $_POST['option_d'];
        $correctAnswer = $_POST['correct_answer'];

        try {
            $stmt = $conn->prepare("INSERT INTO tablequiz (quiz_qn, option_a, option_b, option_c, option_d, correct_answer) 
            VALUES (:quiz_qn,:option_a, :option_b, :option_c, :option_d, :correct_answer)");

            $stmt->bindParam(':quiz_qn', $quizQuestion);
            $stmt->bindParam(':option_a', $optionA);
            $stmt->bindParam(':option_b', $optionB);
            $stmt->bindParam(':option_c', $optionC);
            $stmt->bindParam(':option_d', $optionD);
            $stmt->bindParam(':correct_answer', $correctAnswer);

            $stmt->execute();

            echo "
            <script>
                alert('Added Successfully!');
                window.location.href = 'http://localhost/quiz.php';
            </script>
            ";
            exit();
            

        } catch (PDOException $e) {
            echo 'Database Error: ' . $e->getMessage();
        }
    } else {
        echo "
        <script>
            alert('Please fill in both the title and content fields.');
            window.location.href = 'http://localhost/quiz.php';
        </script>
        ";
    }
}
?>
