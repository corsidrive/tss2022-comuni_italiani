<?php

function cercaComune($cerca,$confronta)
{
    $cerca = trim(strtolower($cerca));
    $confronta = trim(strtolower($confronta));

    $result = strpos($confronta,$cerca) === 0;

    return $result;
}