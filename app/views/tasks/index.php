<!DOCTYPE html>
<html>
<head>
    <title>To-Do List</title>
    <link rel="stylesheet" href="<?= BASE_URL ?>/css/style.css">
</head>
<body>
    <div class="container">
    <h1>Tasks</h1>
    <form method="POST" action="<?= BASE_URL ?>Task/create">
        <input type="text" name="name" required>
        <button type="submit">Add</button>
    </form>
    
    <table>
        <?php foreach ($tasks as $task): ?> 
        <tr>
            <td>
                <span><?= htmlspecialchars($task['name']) ?></span>
            </td>
            <td>
                 <a href="<?= BASE_URL ?>Task/delete/<?= $task['id'] ?>">
                    <button type="button" class="btn-delete">Delete</button>
                </a>
            </td>
            <td>
                <a href="<?= BASE_URL ?>Task/update/<?= $task['id'] ?>">
                    <button type="button" class="btn-update">Update</button>
                </a>
            </td>
        </tr>
        <?php endforeach; ?>
    </table>

   </div>
    
</body>
</html>
