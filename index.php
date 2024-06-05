<?php

require __DIR__ . '/vendor/autoload.php';

// use function Stringy\create as s;
// echo(s('fòô     bàř')->collapseWhitespace()->swapCase());

use Elastic\Elasticsearch\ClientBuilder;

$client = ClientBuilder::create()->build();

// // Index a document
// $params = [
// 	'index' => 'my_index',
// 	'type' => 'my_type',
// 	'id' => 'my_id',
// 	'body' => [
// 		'testField' => 'abc',
// 		'k' => 123123,
// 		'val' => 'demo for value of test field'
// 	]
// ];

// $params_2 = [
// 	'index' => 'my_index_2',
// 	'type' => 'my_type',
// 	'id' => 'my_id_2',
// 	'body' => [
// 		'testField' => 'abc',
// 		'k' => 123123,
// 		'val' => 'demo for value of test field'
// 	]
// ];

// $response = $client->index($params_2);

// // Search for a document
$p = [
	'index' => 'my_index',
	'type' => 'my_type',
	'body' => [
		'query' => [
			'match' => [
				'testField' => 'abc'
			]
		]
	]
];

$response = $client->search()->asArray();
echo ('<pre>');
print_r($response);
echo ('</pre>');
