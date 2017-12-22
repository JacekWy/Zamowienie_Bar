<?php
if(isset($_POST['order']))
{
    if(isset($_POST['Frytki'])){
        $frytki = $_POST['Frytki'];

    }
    if(isset($_POST['Kebab'])){
        $kebab = $_POST['Kebab'];

    }
    if(isset($_POST['Hamburger'])){
        $hamburger = $_POST['Hamburger'];
    }

}

function suma($f = 0 , $k = 0, $h = 0)
{
    echo "Do zaplaty: ";
    echo $f + $k + $h.' zl';
}

suma($frytki,$kebab,$hamburger);



