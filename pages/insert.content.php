<?php


require_once dirname(__FILE__) . '/../utils/database.utils.php';


$database->exec('INSERT INTO `customers` (`customerNumber`, `customerName`, `contactLastName`, `contactFirstName`, `phone`, `addressLine1`, `addressLine2`, `city`, `state`, `postalCode`, `country`, `salesRepEmployeeNumber`, `creditLimit`)
VALUES ('987', 'Amigraf', 'Raphael', 'De Freitas', '????', '24 Place John Kennedy', '', 'Moubaux', NULL, '59420', 'France', NULL, NULL);')

?>
