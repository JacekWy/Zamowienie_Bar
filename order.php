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



}
$ilosc = $iloscf + $ilosck + $ilosch;
$suma = $wynik1 + $wynik2 + $wynik3;

if($suma >= 70){
    echo 'Skorzystales z promocji 15% za zakup powyzej 100zl'.'<br>';
    $procent = $suma * 0.1;
    $suma -=$procent;

}



echo "Do zaplaty: ".$suma.' zl';

