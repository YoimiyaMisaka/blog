<?php
return [
    'App\Entities\Admin\UserEntity' => [
        'type'  => 'entity',
        'table' => 'user',
        'id'     => [
            'id' => [
                'type'     => 'integer',
                'strategy' => 'identity'
            ],
        ],
        'fields' => [
            'email' => [
                'type' => 'string'
            ],
            'password' => [
                'type' => 'string'
            ],
            'is_deleted' => [
                'type' => 'integer'
            ],
            'date_add' => [
                'type' => 'string'
            ],
        ]
    ],
    'App\Entities\Admin\RoleEntity' => [
        'type'   => 'entity',
        'table'  => 'role',
        'id'     => [
            'id' => [
                'type'     => 'integer',
                'strategy' => 'identity'
            ],
        ],
        'fields' => [
            'name' => [
                'type' => 'string'
            ],
            'is_super_admin' => [
                'type' => 'integer'
            ],
            'is_deleted' => [
                'type' => 'integer'
            ],
            'date_add' => [
                'type' => 'string'
            ],
        ],
    ],
    'App\Entities\Admin\MenuEntity' => [
        'type'   => 'entity',
        'table'  => 'menu',
        'id'     => [
            'id' => [
                'type'     => 'integer',
                'strategy' => 'identity'
            ],
        ],
        'fields' => [
            'title' => [
                'type' => 'string'
            ],
            'parent_id' => [
                'type' => 'integer'
            ],
            'module_id' => [
                'type' => 'integer'
            ],
            'icon' => [
                'type' => 'string'
            ],
            'url' => [
                'type' => 'string'
            ],
            'num_sort' => [
                'type' => 'integer'
            ],
            'is_show_on_sidebar' => [
                'type' => 'integer'
            ],
            'is_dev' => [
                'type' => 'integer'
            ],
            'is_deleted' => [
                'type' => 'integer'
            ],
            'date_add' => [
                'type' => 'string'
            ],
        ],
    ],
    'App\Entities\Admin\ModuleEntity' => [
        'type'   => 'entity',
        'table'  => 'module',
        'id'     => [
            'id' => [
                'type'     => 'integer',
                'strategy' => 'identity'
            ],
        ],
        'fields' => [
            'name' => [
                'type' => 'string'
            ],
            'icon' => [
                'type' => 'string'
            ],
            'num_sort' => [
                'type' => 'integer'
            ],
            'is_deleted' => [
                'type' => 'integer'
            ],
            'date_add' => [
                'type' => 'string'
            ],
        ],
    ],
    'App\Entities\Admin\UserRoleEntity' => [
        'type'   => 'entity',
        'table'  => 'user_role',
        'fields' => [
            'user_id' => [
                'type' => 'integer'
            ],
            'role_id' => [
                'type' => 'integer'
            ],
        ],
    ],
    'App\Entities\Admin\RoleMenuEntity' => [
        'type'   => 'entity',
        'table'  => 'role_menu',
        'fields' => [
            'role_id' => [
                'type' => 'integer'
            ],
            'menu_id' => [
                'type' => 'integer'
            ],
        ],
    ],
    'App\Entities\Admin\LogEntity' => [
        'type'   => 'entity',
        'table'  => 'log',
        'id'     => [
            'id' => [
                'type'     => 'integer',
                'strategy' => 'identity'
            ],
        ],

        'fields' => [
            'openid' => [
                'type' => 'string'
            ],
            'url' => [
                'type' => 'string'
            ],
            'data' => [
                'type' => 'string'
            ],
            'message' => [
                'type' => 'string'
            ],
            'ip_address' => [
                'type' => 'string'
            ],
            'user_agent' => [
                'type' => 'string'
            ],
            'browser' => [
                'type' => 'string'
            ],
            'browser_version' => [
                'type' => 'string'
            ],
            'mobile' => [
                'type' => 'string'
            ],
            'platform' => [
                'type' => 'string'
            ],
            'ip_country' => [
                'type' => 'string'
            ],
            'ip_province' => [
                'type' => 'string'
            ],
            'ip_city' => [
                'type' => 'string'
            ],
            'ip_district' => [
                'type' => 'string'
            ],
            'ip_isp' => [
                'type' => 'string'
            ],
            'year' => [
                'type' => 'integer'
            ],
            'month' => [
                'type' => 'integer'
            ],
            'day' => [
                'type' => 'integer'
            ],
            'hour' => [
                'type' => 'integer'
            ],
            'minute' => [
                'type' => 'integer'
            ],
            'timestamp' => [
                'type' => 'integer'
            ],
            'date_add' => [
                'type' => 'string'
            ],
        ],
    ],
];