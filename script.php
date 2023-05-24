<?php
// List of 2048 words
include 'bip39.php';

// Initial entropy - Replace with your own words
$seed = "cement prize defense toss address sunny cute rug clean wink judge trend rail bottom embark future pioneer artist evil guard half fan have"; // 23 words
$seed_words = explode(' ', $seed);
$seed_nb = count($seed_words);

if($seed_nb!=23) {
    echo "23 words are required to generate the 24th.";
    exit;
}

for($i=0; $i<$seed_nb; $i++) {
    if(array_search($seed_words[$i], $words)===false) {
        echo $seed_words[$i]." is not part of the BIP39 wordlist.";
        exit;
    }
}

// Checksum
$words_concat = '';
for($i=0; $i<$seed_nb; $i++) {
	$words_concat .= str_pad(decbin(array_search($seed_words[$i], $words)), 11, '0', STR_PAD_LEFT);
}

// Calculate checksum - 8 bits of the hash
$hash = hash('sha256', $words_concat);
$checksum = substr($hash, 0, 2);  // 2 hex digits = 8 bits

// Convert checksum to binary
$checksumBinary = str_pad(decbin(hexdec($checksum)), 8, '0', STR_PAD_LEFT);

// Concatenate binary entropy with binary checksum
$sequence = $words_concat.$checksumBinary;

// Divide the sequence into 24 equal parts, each of 11 bits
$parts = str_split($sequence, 11);

// Convert each 11-bit sequence to a number and map it to a word
$seedFinal = array();
foreach ($parts as $part) {
    $index = bindec($part);
    $seedFinal[] = $words[$index];
}

// Output the new 24-word seed
echo implode(' ', $seedFinal);
exit;
?>
