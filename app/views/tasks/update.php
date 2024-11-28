<!DOCTYPE html>
<html>
<head>
    <title>Update Task</title>
    <link rel="stylesheet" href="<?= BASE_URL ?>/css/style.css">
</head>
<body>
<div class="container">
        <h1>Update Task</h1>
        <form method="POST" action="<?= BASE_URL ?>Task/update/<?= $task['id'] ?>">
            <label for="name">Task Name</label>
            <input type="text" id="name" name="name" value="<?= htmlspecialchars($task['name']) ?>" required>
            <button type="submit">Update</button>
        </form>
        <a href="<?= BASE_URL ?>Task/index" class="btn-back">Back to Task List</a>
    </div>