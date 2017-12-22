<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <title>Zamowienie</title>
    <link rel="stylesheet" type="text/css" href="order.css">
</head>
<body>
<header>
<h1>Zamowienie</h1>
</header>
<div class="form">
    <form action="order.php" method="post">
        <div class="btn">
            <input type="checkbox" name="Frytki" id="frytki" value="3.50" >
            <label for="frytki">Frytki</label>
            <p>3.50 zl</p>
        </div>
        <div class="btn">
            <input type="checkbox" name="Kebab" id="kebab" value="9.50" >
            <label for="kebab">Kebab</label>
            <p>9.50 zl</p>
        </div>
        <div class="btn">
            <input type="checkbox" name="Hamburger" id="hamburger" value="10" >
            <label for="hamburger">Hamburger</label>
            <p>10 zl</p>
        </div>
</div>

<div id="button">
    <input type="submit" name="order" value="Zamow">
    </form>
</div>


<section>


</section>
</body>
</html>
