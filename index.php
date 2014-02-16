<?php
include "vendor/autoload.php";

Aotoki\HelloWorld::setHeader();

new Aotoki\HelloWorld();
new Aotoki\HelloWorld("Guest");

echo Aotoki\HelloWorld::flush();
