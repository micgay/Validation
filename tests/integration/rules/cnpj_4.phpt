--FILE--
<?php

require_once 'vendor/autoload.php';

use Respect\Validation\Exceptions\CnpjException;
use Respect\Validation\Validator as v;

try {
    v::not(v::cnpj())->check('65.150.175/0001-20');
} catch (CnpjException $e) {
    echo $e->getMessage();
}
?>
--EXPECTF--
"65.150.175/0001-20" must not be a valid CNPJ number
