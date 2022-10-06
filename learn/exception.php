<?php

/**
 * @throws Exception
 */
function helloException($test) {
    if ($test === 1) {
        throw new Exception("coucou");
    }
}

try {
    helloException(1);
} catch (Exception $e) {
    echo $e->getMessage();
}
