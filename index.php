<?php

require __DIR__ . '/vendor/autoload.php';

// use function Stringy\create as s;
// echo(s('fòô     bàř')->collapseWhitespace()->swapCase());

use Elastic\Elasticsearch\ClientBuilder;

$client = ClientBuilder::create()->build();
print_r($client->info());

exit();

// // Index a document
// $params = [
//     'index' => 'my_index',
//     'type' => 'my_type',
//     'id' => 'my_id',
//     'body' => ['testField' => 'abc']
// ];

// $response = $client->index($params);
// print_r($response);

// // Search for a document
// $params = [
//     'index' => 'my_index',
//     'type' => 'my_type',
//     'body' => [
//         'query' => [
//             'match' => [
//                 'testField' => 'abc'
//             ]
//         ]
//     ]
// ];

// $response = $client->search($params);
// print_r($response);
