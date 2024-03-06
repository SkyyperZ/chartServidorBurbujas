<?php
require __DIR__ . '/vendor/autoload.php';

$pusher = new Pusher\Pusher("6253e1d2da9856ef52a5", "8a8f75304a9f310b16c7", "1767383", ['cluster' => 'eu']);


while (true) {
    $bitcoinPrice = rand(40000, 50000); 
    $pusher->trigger('my-channel', 'crypto-update', ['bitcoinPrice' => $bitcoinPrice]);
    sleep(5); 
}
?>

