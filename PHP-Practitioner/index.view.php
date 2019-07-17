<!Doctype html>

<html lang="en">

<head>
    <meta charset="UTF-8">

    <title>Document</title>
</head>
<body>
    <nav>
        <ul>
            <li><a href="about.php">About Page</a></li>
            <li><a href="contact.php">Contact Page</a></li>
        </ul>
    </nav>
    <ul>
        <?php foreach ($tasks as $task) : ?>
            <li>
                <?php if ($task->completed) : ?>
                    <b><?= $task->description; ?></b>
                <?php else: ?>
                    <?= $task->description; ?>
                <?php endif; ?>ontact
            </li>
        <?php endforeach; ?>
    </ul>
</body>
</html>