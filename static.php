<?php

class CobaStatik
{

    public static $angka = 2;

    public static function halo()
    {
        return "Halooooo " . self::$angka++ . " kali";
    }
}

echo CobaStatik::$angka;
echo "<br>";
echo CobaStatik::halo() . "<hr>";
echo CobaStatik::halo() . "<hr>";


class Coba
{

    public static $angka = 1;

    public function halo()
    {
        return "Halo " . self::$angka++ . " kali";
    }
}

$obj = new Coba;

echo $obj->halo() . "<br>";
echo $obj->halo() . "<br>";
echo $obj->halo() . "<br>";

$obj2 = new Coba;

echo $obj2->halo() . "<br>";
echo $obj2->halo() . "<br>";
echo $obj2->halo() . "<br>";
