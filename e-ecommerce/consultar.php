<?php

include __DIR__ . '/vendor/autoload.php';

$pagarme = new PagarMe\Client('ak_test_oT5sWZFJxlbJ35u1S2LamwWEReyTWg');

$transacao = $pagarme->transactions()->get([
    'id' => '#6337495'
]);

