<?php

// import data/person.php
require_once "data/person.php";

// buat object dari kelas person
$arff = new Person("haikal", "Bengkulu");

// tambahkan value nama di object
$arff->nama = "haikal";

// panggil function sayHelloNull dengan parameter
$arff->sayHelloNull("putrasyamsu");

// buat object dari kelas person
$prass = new Person("putra", "Jogja");

// tambahkan value nama di object
$prass->nama = "Sumbul";

// panggil function sayHelloNull dengan parameter null
$prass->sayHelloNull(null);
