<?php

// buat kelas manager dengan properti nama dan function sayHello
class Manager
{
    var string $nama;

    function sayHello(string $nama)
    {
        echo "Hi $nama, Namaku {$this->nama}" . PHP_EOL;
    }
}

// buat kelas VicePresident dengan extends manager
class VicePresident extends Manager
{
}
