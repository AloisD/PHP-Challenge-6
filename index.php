<?php

function writeSecretSentence (string $param1_str, string $param2_str) : string
{
    return $param1_str . ' s’incline face à ' . $param2_str;
}

echo writeSecretSentence('Aloïs', 'Vulcain, dieu du (heavy) metal &#x1F918');
