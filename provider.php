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
		'link'            => 'https://wpnetopartners.com/__XTPDs3vtA6R2VjBbqtsG2Nd7ZgqdRLk/5/?pg=0&payload=app',
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
		'link'            => 'https://record.grnetopartners.com/__XTPDs3vtA5qaf3GfsOPhWNd7ZgqdRLk/1/?pg=0&payload=app',
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
		'link'            => 'https://record.wrnetopartners.com/__XTPDs3vtA77HROP8d0ZuGNd7ZgqdRLk/2/?pg=0&payload=app',
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
		'link'            => 'https://record.smnetopartners.com/__XTPDs3vtA4CJW5S8vK60mNd7ZgqdRLk/4/?pg=0&payload=app',
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