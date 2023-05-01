<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Algod Credentials
    |--------------------------------------------------------------------------
    |
    */
    'algod' => [
        'api_url' => 'http://node.testnet.algoexplorerapi.io/',
        'api_key' => 'ORNfISB9lu6bN9AbdvXA5518L4BBXcVO795LYihb',
        'api_token_header' => 'X-API-Key',
    ],

    /*
    |--------------------------------------------------------------------------
    | Indexer Credentials
    |--------------------------------------------------------------------------
    |
    */
    'indexer' => [
        'api_url' => 'https://algoindexer.testnet.algoexplorerapi.io/',
        'api_key' => 'ORNfISB9lu6bN9AbdvXA5518L4BBXcVO795LYihb',
        'api_token_header' => 'X-API-Key',
        'ipfs_url' => 'http://localhost:5001',
        'timeout' => 6000, // timeout in seconds
    ],
];

// return [

//     /*
//     |--------------------------------------------------------------------------
//     | Algod Credentials
//     |--------------------------------------------------------------------------
//     |
//     */
//     'algod' => [
//         'api_url' => 'https://testnet-algorand.api.purestake.io/ps2/v2/',
//         'api_key' => 'ORNfISB9lu6bN9AbdvXA5518L4BBXcVO795LYihb',
//         'api_token_header' => 'X-API-Key',
//     ],

//     /*
//     |--------------------------------------------------------------------------
//     | Indexer Credentials
//     |--------------------------------------------------------------------------
//     |
//     */
//     'indexer' => [
//         'api_url' => 'https://testnet-algorand.api.purestake.io/idx2/v2/',
//         'api_key' => 'ORNfISB9lu6bN9AbdvXA5518L4BBXcVO795LYihb',
//         'api_token_header' => 'X-API-Key',
//     ],
// ];
