<?php

return [
    // class of eloquent model
    "model"     => \Modules\WebsiteBase\Models\Navigation::class,
    // update data if exists and data differ (default false)
    "update"    => true,
    // columns to check if data already exists (AND WHERE)
    "uniques"   => ["code"],
    // relations to update/create
    "relations" => [
        "res" => [
            // relation method which have to exists
            "method" => "parent",
            // column to search #sync_relations items below
            "column" => "code",
            // delete items if not listed here (default: false)
            "delete" => false,
        ],
    ],
    // data rows itself
    "data"      => [
        [
            "label"           => "Klara Deployment",
            "code"            => "Admin-Klara-Deployment-Menu-L2",
            "position"        => 8000,
            "route"           => "manage-data-all",
            "route_params"    => ["Deployment"],
            "acl_resources"   => ["admin"],
            "#sync_relations" => [
                "res" => [
                    "Admin-Menu-L1",
                ]
            ]
        ],
        [
            "label"           => "Deployments",
            "code"            => "Admin-Klara-Deployment-Menu-Deployments-L3",
            "route"           => "manage-data-all",
            "route_params"    => ["Deployment"],
            "#sync_relations" => [
                "res" => [
                    "Admin-Klara-Deployment-Menu-L2",
                ]
            ]
        ],
        [
            "label"           => "Deployment Tasks",
            "code"            => "Admin-Klara-Deployment-Menu-Deployment-Tasks-L3",
            "route"           => "manage-data-all",
            "route_params"    => ["DeploymentTask"],
            "#sync_relations" => [
                "res" => [
                    "Admin-Klara-Deployment-Menu-L2",
                ]
            ]
        ],
    ]
];