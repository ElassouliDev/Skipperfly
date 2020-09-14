<?php

return [
    /**
     * Control if the seeder should create a user per role while seeding the data.
     */
    'create_users' => false,

    /**
     * Control if all the laratrust tables should be truncated before running the seeder.
     */
    'truncate_tables' => true,

    'roles_structure' => [
        'superadministrator' => [
            'users' => 'c,r,u,d',
            'admin' => 'c,r,u,d',
            'tags' => 'c,r,u,d',
            'category' => 'c,r,u,d',
            'article' => 'c,r,u,d',
        ],
        'administrator' => [
            'users' => 'c,r,u,d',
            'admin' => 'r',
            'tags' => 'r',
            'category' => 'r',
            'article' => 'c,r,u,d',
        ],
        'user' => [

        ],

    ],

    'permissions_map' => [
        'c' => 'create',
        'r' => 'read',
        'u' => 'update',
        'd' => 'delete'
    ]
];
