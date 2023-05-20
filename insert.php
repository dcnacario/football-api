<?php
  // Retrieve user input values
    $fixtureId = $_POST['fixture_id'];
    $userValue = $_POST['user_value'];
    $userMoney = $_POST['user_money'];
    $localhost = "localhost";
    $dbname = "football-api";
    $username = "root";
    $password = "";

    try {
        // Create a new PDO instance
        $pdo = new PDO("mysql:host=$localhost;dbname=$dbname", $username, $password);

        // Prepare the SQL statement
        $sql = "INSERT INTO user_odds (fixture_id, user_value, user_money, total_money) VALUES (:fixture_id, :user_value, :user_money, ($userValue * $userMoney))";
        $stmt = $pdo->prepare($sql);

        // Bind the user input values to the prepared statement parameters
        $stmt->bindParam(':fixture_id', $fixtureId);
        $stmt->bindParam(':user_value', $userValue);
        $stmt->bindParam(':user_money', $userMoney);

        // Execute the prepared statement
        if ($stmt->execute()) {
            echo "Data inserted successfully!";
        } else {
            echo "Error inserting data.";
        }
    } catch (PDOException $e) {
        echo "Database error: " . $e->getMessage();
    }
    header("Location: index.php");
?>