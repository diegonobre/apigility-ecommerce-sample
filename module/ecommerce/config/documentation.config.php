<?php
return array(
    'ecommerce\\V1\\Rest\\Category\\Controller' => array(
        'description' => 'Categories of products',
        'collection' => array(
            'GET' => array(
                'description' => 'List all categories',
            ),
            'POST' => array(
                'description' => 'Create a new category',
            ),
        ),
        'entity' => array(
            'description' => 'Product category',
            'GET' => array(
                'description' => 'Select category by id',
            ),
            'PATCH' => array(
                'description' => 'Override category by id',
            ),
            'PUT' => array(
                'description' => 'Update category by id',
            ),
            'DELETE' => array(
                'description' => 'Remove category by id',
            ),
        ),
    ),
);
