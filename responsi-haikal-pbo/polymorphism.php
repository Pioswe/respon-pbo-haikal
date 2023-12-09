<?php

require_once "data/programmer.php";

$company = new Company();
$company->programmer = new Programmer("haikal");
var_dump($company);

$company->programmer = new BackendProgrammer("haikal");
var_dump($company);

$company->programmer = new FrontendProgrammer("haikal");
var_dump($company);

sayHelloProgrammer(new Programmer("haikal putra"));
sayHelloProgrammer(new BackendProgrammer("haikal putra"));
sayHelloProgrammer(new FrontendProgrammer("haikal putra"));
