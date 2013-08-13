<?php

return array(

    /*
    |--------------------------------------------------------------------------
    | Default Permission Provider
    |--------------------------------------------------------------------------
    |
    | This option controls what provider will ACL use.
    | Currently there is only one provider "eloquent".
    |
    | Supported: "eloquent"
    |
    */
    'provider' => 'test',

    /*
    |--------------------------------------------------------------------------
    | Permissions in the application
    |--------------------------------------------------------------------------
    |
    | This option need to contain all system wide permissions.
    |
    | Example:
    | array(
    |     'id' => 'PERMISSION_ID',
    |     'allowed' => true|false,
    |     'route' => array('GET:/resource/(\d+)/edit', 'PUT:/resource/(\d+)'),
    |     'resource_id_required' => true|false,
    |     'name' => 'Permission name'
    | ), array(
    |     'id' => 'PERMISSION_ID_2',
    |     'allowed' => true|false,
    |     'route' => 'GET:/resource/(\d+)',
    |     'resource_id_required' => true|false,
    |     'name' => 'Permission 2 name'
    | ),...
    |
    */
    'permissions' => array(
        array(
            'id' => 'EDIT_PRODUCT',
            'allowed' => true,
            'route' => array('GET:/products/(\d+)/edit', 'PUT:/products/(\d+)'),
            'resource_id_required' => true,
            'name' => 'Edit product',
            'group_id' => 'MANAGE_PRODUCTS'
        ),
        array(
            'id' => 'VIEW_PRODUCT',
            'allowed' => true,
            'route' => 'GET:/products/(\d+)$',
            'resource_id_required' => true,
            'name' => 'View product',
            'group_id' => 'MANAGE_PRODUCTS'
        ),
        array(
            'id' => 'CREATE_PRODUCT',
            'allowed' => true,
            'route' => array('GET:/products/create', 'POST:/products'),
            'resource_id_required' => false,
            'name' => 'Create product',
            'group_id' => 'MANAGE_PRODUCTS'
        ),
        array(
            'id' => 'LIST_PRODUCTS',
            'allowed' => true,
            'route' => 'GET:/products',
            'resource_id_required' => false,
            'name' => 'List products',
        ),
        array(
            'id' => 'EDIT_USER',
            'allowed' => true,
            'route' => array('GET:/users/(\d+)/edit', 'PUT:/users/(\d+)'),
            'resource_id_required' => true,
            'name' => 'Edit user',
            'group_id' => 'MANAGE_USERS'
        ),
        array(
            'id' => 'VIEW_USER',
            'allowed' => false,
            'route' => 'GET:/users/(\d+)$',
            'resource_id_required' => true,
            'name' => 'View user',
            'group_id' => 'MANAGE_USERS'
        ),
        array(
            'id' => 'LIST_ASSETS',
            'allowed' => false,
            'route' => 'GET:/assets$',
            'resource_id_required' => false,
            'name' => 'List assets',
            'group_id' => 'MANAGE_STUFF'
        ),
        array(
            'id' => 'SPEC_USER',
            'allowed' => false,
            'route' => 'GET:/spec-user$',
            'resource_id_required' => false,
            'name' => 'Spec user',
            'group_id' => 'STUFF_PRIVILEGES'
        ),
    ),

    'groups' => array(
        array(
            'id' => 'ADMIN_PRIVILEGES',
            'name' => 'Administrator Privileges',
            'children' => array(
                array(
                    'id' => 'MANAGE_STUFF',
                    'name' => 'Manage Stuff'
                ),
                array(
                    'id' => 'MANAGE_PRODUCTS',
                    'name' => 'Manage Products'
                ),
                array(
                    'id' => 'MANAGE_USERS',
                    'name' => 'Manage Users',
                    'children' => array(
                        array(
                            'id' => 'MANAGE_SPEC_USER',
                            'name' => 'Manage spec user'
                        )
                    )
                )
            )
        ),
        array(
            'id' => 'STUFF_PRIVILEGES',
            'name' => 'Stuff Privileges',
        )
    )

);
