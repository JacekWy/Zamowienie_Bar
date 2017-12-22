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
<?php
require_once ('form.php');
form();
?>
</body>
</html>

<?php
if(isset($_POST['order']))
{
    if(isset($_POST['Frytki'])){
        $frytki = $_POST['Frytki'];
        $iloscf = $_POST['ilosc_Frytki'];
        $wynik1 = $frytki * $iloscf;

    }
    if(isset($_POST['Kebab'])){
        $kebab = $_POST['Kebab'];
        $ilosck = $_POST['ilosc_kebab'];
        $wynik2 = $kebab * $ilosck;

    }
    if(isset($_POST['Hamburger'])){
        $hamburger = $_POST['Hamburger'];
        $ilosch = $_POST['ilosc_hamburger'];
        $wynik3 = $hamburger * $ilosch;

    }

    $reszta = $_POST['reszta'];

    $suma = $wynik1 + $wynik2 + $wynik3;

    $r=$reszta - $suma;


    if ($suma >=100){
        echo 'Skorzystales z promocji 20% za zakup powyzej 100zl'.'<br>';
        $procent = $suma * 0.20;
        $suma -=$procent;
    }
    
    echo "Do zaplaty: ".$suma.' zl'.'<br>';
    echo 'Reszta z '.$reszta.' wynosi: '.$r.'zl';
}




