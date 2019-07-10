<html lang="en">

<head>
    <title></title>
</head>

<body>

    <ul>
        <?php foreach ($names as $name) : ?>
            <li><?= $name->name; ?></li>
        <?php endforeach; ?>
    </ul>

    <h1>submit your name</h1>

    <form method="post" action="/names">

        <input name="name">
        <input name="email">
        <input type="submit">

    </form>
</body>

</html>