<?php
if(isset($_POST['order']))
{
    if(isset($_POST['Frytki'])){
        $frytki = 0;
        $frytki = $_POST['Frytki'];
        $iloscf = $_POST['ilosc_Frytki'];

    }
    if(isset($_POST['Kebab'])){
        $kebab = 0;
        $kebab = $_POST['Kebab'];
        $ilosck = $_POST['ilosc_kebab'];

    }
    if(isset($_POST['Hamburger'])){
        $hamburger =0;
        $hamburger = $_POST['Hamburger'];
        $ilosch = $_POST['ilosc_hamburger'];
    }

}




echo "Do zaplaty: ";
echo ($frytki * $iloscf) + ($kebab * $ilosck) + ($hamburger * $ilosch);
echo " zl";

