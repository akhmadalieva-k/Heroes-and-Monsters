<?php
require("Autoload.php");

use Characters\Heroes\Heroes;

try {
Handler::StartForestWay(Heroes::Wizard, "");
}
catch(InvalidArgumentException $e) {
    echo $e->getMessage();
}
catch(Error $e) {
    echo "something wrong: " . $e->getMessage();
}

