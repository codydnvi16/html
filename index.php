<?php include 'db.php'; ?>
<!DOCTYPE html>
<html>
<head>
    <title>To-Do List</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1> My To-Do List</h1>

    <form action="add.php" method="POST">
        <input type="text" name="title" placeholder="Enter task" required>
        <button type="submit">Add Task</button>
    </form>

    <ul>
        <?php
        $result = $conn->query("SELECT * FROM tasks");
        while($row = $result->fetch_assoc()) {
            echo "<li>{$row['title']} 
                    <a href='delete.php?id={$row['id']}'></a>
                  </li>";
        }
        ?>
    </ul>
</body>
</html>
