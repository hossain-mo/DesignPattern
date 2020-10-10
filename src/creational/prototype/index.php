<?php
require_once 'vendor/autoload.php';
use App\Creational\Prototype\Employee;
use App\Creational\Prototype\ManagerEmployee;
use App\Creational\Prototype\RegularEmployee;
use App\Creational\Prototype\Address;

$regEmp = new RegularEmployee();
$regEmp->id = 1;
$regEmp->name = "ahmed";
$address = new Address(["street_number" => 114, "street_name" => "misr helwan",
"zone" => "maadi", "city" => "cairo"]);
$regEmp->address = $address;
$shallowCopy = $regEmp->shallowCopy($regEmp);
echo "shallow clone\n";
$shallowCopy->toString();

$deepCopy = $regEmp->deepClone($regEmp);
echo "deep clone\n";
$deepCopy->toString();

//after change address
$address->city = "Gize";
echo "after change address\n";

echo "shallow clone\n";
$shallowCopy->toString();


echo "deep clone\n";
$deepCopy->toString();