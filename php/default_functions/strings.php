<?php
    $string = "The quick brown fox jumps over the lazy dog, near the river bank!";
    echo $string;
    echo "<br />";
    echo "Length " . strlen($string);

    echo "To split the string<br />";
    $astring = explode(" ", $string);
    print_r($astring);

    echo join(" ", $astring);

    echo "<br />";
    echo "<br /> Encrypting String<br />";
    echo md5($string);

    echo "<br />";
    echo "<br /> Encrypting String<br />";
    echo base64_encode("Pass1234!");
    echo "<br />";
    echo "<br /> Decrypting String<br />";
    echo base64_decode("UGFzczEyMzQh");

?>