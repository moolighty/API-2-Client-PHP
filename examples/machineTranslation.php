<?php

require_once '../lib/OHTAPI.php';
try {
    OHTAPI::config(array(
        'public_key' => OHT_API_PUBLIC_KEY,
        'secret_key' => OHT_API_SECRET_KEY,
        'sandbox' => true
    ));
    $oht = OHTAPI::getInstance();

    $result = $oht->machineTranslation(
            'en-us', //from English
            'fr-fr', //to French
            'A book is a set of printed sheets of paper held together between two covers. 
				The sheets of paper are usually covered with a text: 
				language and illustrations: that is the main point of a printed book. 
				A book can also be a text in a larger collection of texts. 
				This text has some features that do not apply to the collection as a whole. 
				aps written by one author, or it only treats one subject area. 
				Books in this sense can often be understood without knowing the whole collection.'
    );

    var_dump($result);
} catch (Exception $e) {
    echo $e;
}
