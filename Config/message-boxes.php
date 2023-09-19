<?php
return [
//    '__useless__'       => [
//        'datatable' => [
//            // delete box
//            'delete'    => [
//                'title'   => 'Delete Item',
//                'content' => 'ask_delete_item',
//                // constant names from defaultActions[] or closure
//                'actions' => [
//                    'cancel',
//                    'deleteItem',
//                ],
//            ],
//        ],
//    ],
    'deployment'       => [
        'datatable' => [
            // launch
            'launchItem'    => [
                'title'   => 'Launch Item',
                'content' => 'ask_launch_item',
                // constant names from defaultActions[] or closure
                'actions' => [
                    'cancel',
                    'launchItem',
                ],
            ],
            // simulate
            'simulateItem'    => [
                'title'   => 'Simulate Item',
                'content' => 'ask_simulate_item',
                // constant names from defaultActions[] or closure
                'actions' => [
                    'cancel',
                    'simulateItem',
                ],
            ],
        ],

    ],
];
