<?php
return array(
    'router' => array(
        'routes' => array(
            'ecommerce.rest.category' => array(
                'type' => 'Segment',
                'options' => array(
                    'route' => '/category[/:category_id]',
                    'defaults' => array(
                        'controller' => 'ecommerce\\V1\\Rest\\Category\\Controller',
                    ),
                ),
            ),
            'ecommerce.rest.customer' => array(
                'type' => 'Segment',
                'options' => array(
                    'route' => '/customer[/:customer_id]',
                    'defaults' => array(
                        'controller' => 'ecommerce\\V1\\Rest\\Customer\\Controller',
                    ),
                ),
            ),
            'ecommerce.rest.order' => array(
                'type' => 'Segment',
                'options' => array(
                    'route' => '/order[/:order_id]',
                    'defaults' => array(
                        'controller' => 'ecommerce\\V1\\Rest\\Order\\Controller',
                    ),
                ),
            ),
            'ecommerce.rest.product' => array(
                'type' => 'Segment',
                'options' => array(
                    'route' => '/product[/:product_id]',
                    'defaults' => array(
                        'controller' => 'ecommerce\\V1\\Rest\\Product\\Controller',
                    ),
                ),
            ),
        ),
    ),
    'zf-versioning' => array(
        'uri' => array(
            0 => 'ecommerce.rest.category',
            1 => 'ecommerce.rest.customer',
            2 => 'ecommerce.rest.order',
            3 => 'ecommerce.rest.product',
        ),
    ),
    'zf-rest' => array(
        'ecommerce\\V1\\Rest\\Category\\Controller' => array(
            'listener' => 'ecommerce\\V1\\Rest\\Category\\CategoryResource',
            'route_name' => 'ecommerce.rest.category',
            'route_identifier_name' => 'category_id',
            'collection_name' => 'category',
            'entity_http_methods' => array(
                0 => 'GET',
                1 => 'PATCH',
                2 => 'PUT',
                3 => 'DELETE',
            ),
            'collection_http_methods' => array(
                0 => 'GET',
                1 => 'POST',
            ),
            'collection_query_whitelist' => array(),
            'page_size' => 25,
            'page_size_param' => null,
            'entity_class' => 'ecommerce\\V1\\Rest\\Category\\CategoryEntity',
            'collection_class' => 'ecommerce\\V1\\Rest\\Category\\CategoryCollection',
            'service_name' => 'category',
        ),
        'ecommerce\\V1\\Rest\\Customer\\Controller' => array(
            'listener' => 'ecommerce\\V1\\Rest\\Customer\\CustomerResource',
            'route_name' => 'ecommerce.rest.customer',
            'route_identifier_name' => 'customer_id',
            'collection_name' => 'customer',
            'entity_http_methods' => array(
                0 => 'GET',
                1 => 'PATCH',
                2 => 'PUT',
                3 => 'DELETE',
            ),
            'collection_http_methods' => array(
                0 => 'GET',
                1 => 'POST',
            ),
            'collection_query_whitelist' => array(),
            'page_size' => 25,
            'page_size_param' => null,
            'entity_class' => 'ecommerce\\V1\\Rest\\Customer\\CustomerEntity',
            'collection_class' => 'ecommerce\\V1\\Rest\\Customer\\CustomerCollection',
            'service_name' => 'customer',
        ),
        'ecommerce\\V1\\Rest\\Order\\Controller' => array(
            'listener' => 'ecommerce\\V1\\Rest\\Order\\OrderResource',
            'route_name' => 'ecommerce.rest.order',
            'route_identifier_name' => 'order_id',
            'collection_name' => 'order',
            'entity_http_methods' => array(
                0 => 'GET',
                1 => 'PATCH',
                2 => 'PUT',
                3 => 'DELETE',
            ),
            'collection_http_methods' => array(
                0 => 'GET',
                1 => 'POST',
            ),
            'collection_query_whitelist' => array(),
            'page_size' => 25,
            'page_size_param' => null,
            'entity_class' => 'ecommerce\\V1\\Rest\\Order\\OrderEntity',
            'collection_class' => 'ecommerce\\V1\\Rest\\Order\\OrderCollection',
            'service_name' => 'order',
        ),
        'ecommerce\\V1\\Rest\\Product\\Controller' => array(
            'listener' => 'ecommerce\\V1\\Rest\\Product\\ProductResource',
            'route_name' => 'ecommerce.rest.product',
            'route_identifier_name' => 'product_id',
            'collection_name' => 'product',
            'entity_http_methods' => array(
                0 => 'GET',
                1 => 'PATCH',
                2 => 'PUT',
                3 => 'DELETE',
            ),
            'collection_http_methods' => array(
                0 => 'GET',
                1 => 'POST',
            ),
            'collection_query_whitelist' => array(),
            'page_size' => 25,
            'page_size_param' => null,
            'entity_class' => 'ecommerce\\V1\\Rest\\Product\\ProductEntity',
            'collection_class' => 'ecommerce\\V1\\Rest\\Product\\ProductCollection',
            'service_name' => 'product',
        ),
    ),
    'zf-content-negotiation' => array(
        'controllers' => array(
            'ecommerce\\V1\\Rest\\Category\\Controller' => 'Json',
            'ecommerce\\V1\\Rest\\Customer\\Controller' => 'HalJson',
            'ecommerce\\V1\\Rest\\Order\\Controller' => 'HalJson',
            'ecommerce\\V1\\Rest\\Product\\Controller' => 'HalJson',
        ),
        'accept_whitelist' => array(
            'ecommerce\\V1\\Rest\\Category\\Controller' => array(
                0 => 'application/vnd.ecommerce.v1+json',
                1 => 'application/hal+json',
                2 => 'application/json',
            ),
            'ecommerce\\V1\\Rest\\Customer\\Controller' => array(
                0 => 'application/vnd.ecommerce.v1+json',
                1 => 'application/hal+json',
                2 => 'application/json',
            ),
            'ecommerce\\V1\\Rest\\Order\\Controller' => array(
                0 => 'application/vnd.ecommerce.v1+json',
                1 => 'application/hal+json',
                2 => 'application/json',
            ),
            'ecommerce\\V1\\Rest\\Product\\Controller' => array(
                0 => 'application/vnd.ecommerce.v1+json',
                1 => 'application/hal+json',
                2 => 'application/json',
            ),
        ),
        'content_type_whitelist' => array(
            'ecommerce\\V1\\Rest\\Category\\Controller' => array(
                0 => 'application/vnd.ecommerce.v1+json',
                1 => 'application/json',
            ),
            'ecommerce\\V1\\Rest\\Customer\\Controller' => array(
                0 => 'application/vnd.ecommerce.v1+json',
                1 => 'application/json',
            ),
            'ecommerce\\V1\\Rest\\Order\\Controller' => array(
                0 => 'application/vnd.ecommerce.v1+json',
                1 => 'application/json',
            ),
            'ecommerce\\V1\\Rest\\Product\\Controller' => array(
                0 => 'application/vnd.ecommerce.v1+json',
                1 => 'application/json',
            ),
        ),
    ),
    'zf-hal' => array(
        'metadata_map' => array(
            'ecommerce\\V1\\Rest\\Category\\CategoryEntity' => array(
                'entity_identifier_name' => 'id',
                'route_name' => 'ecommerce.rest.category',
                'route_identifier_name' => 'category_id',
                'hydrator' => 'Zend\\Hydrator\\ArraySerializable',
            ),
            'ecommerce\\V1\\Rest\\Category\\CategoryCollection' => array(
                'entity_identifier_name' => 'id',
                'route_name' => 'ecommerce.rest.category',
                'route_identifier_name' => 'category_id',
                'is_collection' => true,
            ),
            'ecommerce\\V1\\Rest\\Customer\\CustomerEntity' => array(
                'entity_identifier_name' => 'id',
                'route_name' => 'ecommerce.rest.customer',
                'route_identifier_name' => 'customer_id',
                'hydrator' => 'Zend\\Hydrator\\ArraySerializable',
            ),
            'ecommerce\\V1\\Rest\\Customer\\CustomerCollection' => array(
                'entity_identifier_name' => 'id',
                'route_name' => 'ecommerce.rest.customer',
                'route_identifier_name' => 'customer_id',
                'is_collection' => true,
            ),
            'ecommerce\\V1\\Rest\\Order\\OrderEntity' => array(
                'entity_identifier_name' => 'id',
                'route_name' => 'ecommerce.rest.order',
                'route_identifier_name' => 'order_id',
                'hydrator' => 'Zend\\Hydrator\\ArraySerializable',
            ),
            'ecommerce\\V1\\Rest\\Order\\OrderCollection' => array(
                'entity_identifier_name' => 'id',
                'route_name' => 'ecommerce.rest.order',
                'route_identifier_name' => 'order_id',
                'is_collection' => true,
            ),
            'ecommerce\\V1\\Rest\\Product\\ProductEntity' => array(
                'entity_identifier_name' => 'id',
                'route_name' => 'ecommerce.rest.product',
                'route_identifier_name' => 'product_id',
                'hydrator' => 'Zend\\Hydrator\\ArraySerializable',
            ),
            'ecommerce\\V1\\Rest\\Product\\ProductCollection' => array(
                'entity_identifier_name' => 'id',
                'route_name' => 'ecommerce.rest.product',
                'route_identifier_name' => 'product_id',
                'is_collection' => true,
            ),
        ),
    ),
    'zf-apigility' => array(
        'db-connected' => array(
            'ecommerce\\V1\\Rest\\Category\\CategoryResource' => array(
                'adapter_name' => 'apigility_ecommerce',
                'table_name' => 'category',
                'hydrator_name' => 'Zend\\Hydrator\\ArraySerializable',
                'controller_service_name' => 'ecommerce\\V1\\Rest\\Category\\Controller',
                'entity_identifier_name' => 'id',
                'table_service' => 'ecommerce\\V1\\Rest\\Category\\CategoryResource\\Table',
            ),
            'ecommerce\\V1\\Rest\\Customer\\CustomerResource' => array(
                'adapter_name' => 'apigility_ecommerce',
                'table_name' => 'customer',
                'hydrator_name' => 'Zend\\Hydrator\\ArraySerializable',
                'controller_service_name' => 'ecommerce\\V1\\Rest\\Customer\\Controller',
                'entity_identifier_name' => 'id',
            ),
            'ecommerce\\V1\\Rest\\Order\\OrderResource' => array(
                'adapter_name' => 'apigility_ecommerce',
                'table_name' => 'order',
                'hydrator_name' => 'Zend\\Hydrator\\ArraySerializable',
                'controller_service_name' => 'ecommerce\\V1\\Rest\\Order\\Controller',
                'entity_identifier_name' => 'id',
            ),
            'ecommerce\\V1\\Rest\\Product\\ProductResource' => array(
                'adapter_name' => 'apigility_ecommerce',
                'table_name' => 'product',
                'hydrator_name' => 'Zend\\Hydrator\\ArraySerializable',
                'controller_service_name' => 'ecommerce\\V1\\Rest\\Product\\Controller',
                'entity_identifier_name' => 'id',
            ),
        ),
    ),
    'zf-content-validation' => array(
        'ecommerce\\V1\\Rest\\Category\\Controller' => array(
            'input_filter' => 'ecommerce\\V1\\Rest\\Category\\Validator',
        ),
        'ecommerce\\V1\\Rest\\Customer\\Controller' => array(
            'input_filter' => 'ecommerce\\V1\\Rest\\Customer\\Validator',
        ),
        'ecommerce\\V1\\Rest\\Order\\Controller' => array(
            'input_filter' => 'ecommerce\\V1\\Rest\\Order\\Validator',
        ),
        'ecommerce\\V1\\Rest\\Product\\Controller' => array(
            'input_filter' => 'ecommerce\\V1\\Rest\\Product\\Validator',
        ),
    ),
    'input_filter_specs' => array(
        'ecommerce\\V1\\Rest\\Category\\Validator' => array(
            0 => array(
                'name' => 'name',
                'required' => true,
                'filters' => array(
                    0 => array(
                        'name' => 'Zend\\Filter\\StringTrim',
                    ),
                    1 => array(
                        'name' => 'Zend\\Filter\\StripTags',
                    ),
                ),
                'validators' => array(
                    0 => array(
                        'name' => 'ZF\\ContentValidation\\Validator\\DbNoRecordExists',
                        'options' => array(
                            'adapter' => 'apigility_ecommerce',
                            'table' => 'category',
                            'field' => 'name',
                        ),
                    ),
                    1 => array(
                        'name' => 'Zend\\Validator\\StringLength',
                        'options' => array(
                            'min' => 1,
                            'max' => '50',
                        ),
                    ),
                ),
            ),
        ),
        'ecommerce\\V1\\Rest\\Customer\\Validator' => array(
            0 => array(
                'name' => 'name',
                'required' => true,
                'filters' => array(
                    0 => array(
                        'name' => 'Zend\\Filter\\StringTrim',
                    ),
                    1 => array(
                        'name' => 'Zend\\Filter\\StripTags',
                    ),
                ),
                'validators' => array(
                    0 => array(
                        'name' => 'Zend\\Validator\\StringLength',
                        'options' => array(
                            'min' => 1,
                            'max' => '250',
                        ),
                    ),
                ),
            ),
            1 => array(
                'name' => 'email',
                'required' => true,
                'filters' => array(
                    0 => array(
                        'name' => 'Zend\\Filter\\StringTrim',
                    ),
                    1 => array(
                        'name' => 'Zend\\Filter\\StripTags',
                    ),
                ),
                'validators' => array(
                    0 => array(
                        'name' => 'ZF\\ContentValidation\\Validator\\DbNoRecordExists',
                        'options' => array(
                            'adapter' => 'apigility_ecommerce',
                            'table' => 'customer',
                            'field' => 'email',
                        ),
                    ),
                    1 => array(
                        'name' => 'Zend\\Validator\\StringLength',
                        'options' => array(
                            'min' => 1,
                            'max' => '250',
                        ),
                    ),
                ),
            ),
        ),
        'ecommerce\\V1\\Rest\\Order\\Validator' => array(
            0 => array(
                'name' => 'product_id',
                'required' => true,
                'filters' => array(
                    0 => array(
                        'name' => 'Zend\\Filter\\StripTags',
                    ),
                    1 => array(
                        'name' => 'Zend\\Filter\\Digits',
                    ),
                ),
                'validators' => array(
                    0 => array(
                        'name' => 'ZF\\ContentValidation\\Validator\\DbRecordExists',
                        'options' => array(
                            'adapter' => 'apigility_ecommerce',
                            'table' => 'product',
                            'field' => 'id',
                        ),
                    ),
                ),
            ),
            1 => array(
                'name' => 'customer_id',
                'required' => true,
                'filters' => array(
                    0 => array(
                        'name' => 'Zend\\Filter\\StripTags',
                    ),
                    1 => array(
                        'name' => 'Zend\\Filter\\Digits',
                    ),
                ),
                'validators' => array(
                    0 => array(
                        'name' => 'ZF\\ContentValidation\\Validator\\DbRecordExists',
                        'options' => array(
                            'adapter' => 'apigility_ecommerce',
                            'table' => 'customer',
                            'field' => 'id',
                        ),
                    ),
                ),
            ),
        ),
        'ecommerce\\V1\\Rest\\Product\\Validator' => array(
            0 => array(
                'name' => 'category_id',
                'required' => true,
                'filters' => array(
                    0 => array(
                        'name' => 'Zend\\Filter\\StripTags',
                    ),
                    1 => array(
                        'name' => 'Zend\\Filter\\Digits',
                    ),
                ),
                'validators' => array(
                    0 => array(
                        'name' => 'ZF\\ContentValidation\\Validator\\DbRecordExists',
                        'options' => array(
                            'adapter' => 'apigility_ecommerce',
                            'table' => 'category',
                            'field' => 'id',
                        ),
                    ),
                ),
            ),
            1 => array(
                'name' => 'name',
                'required' => true,
                'filters' => array(
                    0 => array(
                        'name' => 'Zend\\Filter\\StringTrim',
                    ),
                    1 => array(
                        'name' => 'Zend\\Filter\\StripTags',
                    ),
                ),
                'validators' => array(
                    0 => array(
                        'name' => 'Zend\\Validator\\StringLength',
                        'options' => array(
                            'min' => 1,
                            'max' => '250',
                        ),
                    ),
                ),
            ),
            2 => array(
                'name' => 'price',
                'required' => true,
                'filters' => array(),
                'validators' => array(),
            ),
        ),
    ),
);
