<?php

include("ZboziKonverze.php");

try {

    $zbozi = new ZboziKonverze(1234567890, "fedcba9876543210123456789abcdef");
    $zbozi->useSandbox(true);
    $zbozi->setEmail('jan.novak@example.com');
    $zbozi->addOrderId(123456);
    $zbozi->addProductItemId('B1234');
    $zbozi->addProduct("iPhone 7S");
    $zbozi->send();

} catch (ZboziKonverzeException $e) {
    // handle errors
    print "Error: " . $e->getMessage();
}

?>
