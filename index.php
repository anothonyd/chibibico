<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <title>Chi-bibi-Co</title>
</head>

<body>

    <main>
        <?php require_once('inc/header.php'); ?>
        <?php require_once('inc/hero.php'); ?>
        <?php require_once('inc/card.php'); ?>
        <?php require_once('inc/footer.php'); ?>
    </main>
</body>
<script>
    function toggleDarkMode() {
        const body = document.querySelector("body");
        body.classList.toggle("dark-mode");

        const header = document.querySelector("header");
        header.classList.toggle("dark-mode");

        const footer = document.querySelector("footer");
        footer.classList.toggle("dark-mode");

        const cards = document.querySelectorAll(".card");
        cards.forEach(card => {
            card.classList.toggle("dark-mode");
        });
    }
</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz"
    crossorigin="anonymous"></script>

</html>