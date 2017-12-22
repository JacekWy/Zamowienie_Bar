<?php
function form()
{
    echo '<div class="form">
    <form action="Zamowienie.php" method="post">

        <div class="btn">
            <input type="checkbox" name="Frytki" id="frytki" value="3.50" >
            <label for="frytki">Frytki</label>
            <p>3.50 zl</p>
            <p>Ilosc:<input type="number" name="ilosc_Frytki" size="2" value="1"></p>
        </div>

        <div class="btn">
            <input type="checkbox" name="Kebab" id="kebab" value="9.50" >
            <label for="kebab">Kebab</label>
            <p>9.50 zl</p>
            <p>Ilosc:<input type="number" name="ilosc_kebab" size="2" value="1"></p>
        </div>

        <div class="btn">
            <input type="checkbox" name="Hamburger" id="hamburger" value="10" >
            <label for="hamburger">Hamburger</label>
            <p>10 zl</p>
            <p>Ilosc:<input type="number" name="ilosc_hamburger" size="2" value="1"></p>
        </div>
</div>

<div id="button">
    Reszta: <input type="number" name="reszta"> 
    <input type="submit" name="order" value="Zamow">
    </form>
</div>';
}




?>