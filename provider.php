<?php
$provider = [
	[
		'image'           => 'images/WINSPARK.png',
		'iconeonetitle'   => 'Miglior nuovo arrivato 2020',
		'iconetwotitle'   => 'PUNTI VIP esclusivi - Soldi bonus!',
		'iconethreetitle' => 'Un jackpot di €200.000 sempre disponibile!',
		'bonus'           => '7€ Gratis + 100% di bonus di deposito fino a 200 €',
		'scale'           => '10.0',
		'linktext'        => 'Registrati',
		'link'            => 'https://wpnetopartners.com/__XTPDs3vtA6WAi_Llmloy2Nd7ZgqdRLk/13/?pg=0&payload=fb',
		'bookietitle'     => 'WINSPARK',
	],
	[
		'image'           => 'images/GRATORAMA.png',
		'iconeonetitle'   => 'Bonus esclusivo - SOLO qui!',
		'iconetwotitle'   => 'Oltre 150 giochi unici!',
		'iconethreetitle' => 'Le migliori opzioni di pagamento!',
		'bonus'           => '€7 Gratuito + fino a € 200 Match Bonus',
		'scale'           => '9.8',
		'linktext'        => 'Registrati',
		'link'            => 'https://record.grnetopartners.com/__XTPDs3vtA7fylSUNReTkmNd7ZgqdRLk/14/?pg=0&payload=fb',
		'bookietitle'     => 'GRATORAMA',
	],
	[
		'image'           => 'images/WINORAMA.png',
		'iconeonetitle'   => 'Miglior Bonus di benvenuto 2020',
		'iconetwotitle'   => 'Bonus a sorpresa settimanali!',
		'iconethreetitle' => 'Pagamenti e prelievi rapidi',
		'bonus'           => '70 Rotazioni gratuite + 100% 1° deposito bonus',
		'scale'           => '9.6',
		'linktext'        => 'Registrati',
		'link'            => 'https://record.wrnetopartners.com/__XTPDs3vtA4U9L81sNuehWNd7ZgqdRLk/15/?pg=0&payload=fb',
		'bookietitle'     => 'WINORAMA',
	],
	[
		'image'           => 'images/SCRATCHMANIA.png',
		'iconeonetitle'   => 'Top bonus di benvenuto',
		'iconetwotitle'   => 'Pagamenti veloci e sicuri',
		'iconethreetitle' => 'Nuova stella nascente 2020',
		'bonus'           => '7€ Gratis + 100% Nuovi bonus giocatori',
		'scale'           => '9.5',
		'linktext'        => 'Registrati',
		'link'            => 'https://record.smnetopartners.com/__XTPDs3vtA5XS91rSMuvHGNd7ZgqdRLk/16/?pg=0&payload=fb',
		'bookietitle'     => 'SCRATCHMANIA',
	],
];

function encode_to_greek_letters( $value ) {
	$value = str_replace( 'o', 'ο', $value );
	$value = str_replace( 'N', 'Ν', $value );
	$value = str_replace( 'P', 'Ρ', $value );
	$value = str_replace( 'B', 'Β', $value );
	$value = str_replace( 'T', 'Τ', $value );
	$value = str_replace( 'A', 'Α', $value );
	$value = str_replace( 'H', 'Η', $value );
	$value = str_replace( 'K', 'Κ', $value );
	$value = str_replace( 'M', 'Μ', $value );
	$value = str_replace( 'O', 'Ο', $value );

	return $value;
}