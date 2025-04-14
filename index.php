<?php
require("Autoload.php");

use Characters\Heroes\Heroes;

try {
Handler::StartForestWay(Heroes::Wizard, "Albus");
}
catch(InvalidArgumentException $e) {
    $message = $e->getMessage();
    Handler::AddErrorLog($message);
    echo $message;
}
catch(Error $e) {
    $message = $e->getMessage();
    Handler::AddErrorLog($message);
    echo $message;
}

