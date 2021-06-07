<?php
/**
 * Copyright (c) Emile Silas Sare <emile.silas@gmail.com>
 *
 * This file is part of OZone (O'Zone) package.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

return [
	'dy_companies' => [
		'plural_name'   => 'dy_companies',
		'singular_name' => 'dy_company',
		'column_prefix' => 'company',
		'relations'     => [
			'owner'      => ['type' => 'one-to-one', 'target' => 'oz_users'],
			'employees'  => ['type' => 'one-to-many', 'target' => 'dy_employees'],
			'deliverers' => ['type' => 'one-to-many', 'target' => 'dy_deliverers'],
			'products'   => ['type' => 'one-to-many', 'target' => 'dy_products']
		],
		'constraints'   => [
			['type' => 'primary_key', 'columns' => ['id']],
			[
				'type'      => 'foreign_key',
				'reference' => 'oz_users',
				'columns'   => ['owner_id' => 'id'],
				'delete'    => 'cascade',
				'update'    => 'cascade'
			],
		],
		'columns'       => [
			'id'       => [
				'type'           => 'int',
				'auto_increment' => true,
				'unsigned'       => true
			],
			'owner_id' => 'ref:oz_users.id',

			'type' => ['type' => 'string', 'max' => 30],// RESTAURANT | DELIVERY ...

			'name'              => ['type' => 'string', 'max' => 255],
			'short_description' => ['type' => 'string', 'max' => 255],
			'description'       => "string",
			'image'             => [
				'type'       => 'file',
				'mime_types' => ["image/jpeg"],
				'default'    => '0_0'
			],

			'data'        => ['type' => 'string', 'default' => '[]'],
			'add_time'    => ['type' => 'timestamp', 'auto' => true],
			'update_time' => ['type' => 'timestamp', 'auto' => true],
			'valid'       => ['type' => 'bool', 'default' => true]
		]
	],
	'dy_employees' => [
		'plural_name'   => 'dy_employees',
		'singular_name' => 'dy_employee',
		'column_prefix' => 'employee',
		'relations'     => [
			'user'    => ['type' => 'one-to-one', 'target' => 'oz_users'],
			'company' => ['type' => 'many-to-one', 'target' => 'dy_companies'],
		],
		'constraints'   => [
			['type' => 'primary_key', 'columns' => ['id']],
			[
				'type'      => 'foreign_key',
				'reference' => 'oz_users',
				'columns'   => ['user_id' => 'id'],
				'delete'    => 'cascade',
				'update'    => 'cascade'
			],
			[
				'type'      => 'foreign_key',
				'reference' => 'dy_companies',
				'columns'   => ['company_id' => 'id'],
				'delete'    => 'cascade',
				'update'    => 'cascade'
			]
		],
		'columns'       => [
			'id'         => [
				'type'           => 'int',
				'auto_increment' => true,
				'unsigned'       => true
			],
			'user_id'    => 'ref:oz_users.id',
			'company_id' => ['type' => 'ref:dy_companies.id', 'null' => true],

			'role'   => ['type' => 'string', 'max' => 30],
			'access' => ['type' => 'string', 'default' => '[]'],

			'data'        => ['type' => 'string', 'default' => '[]'],
			'add_time'    => ['type' => 'timestamp', 'auto' => true],
			'update_time' => ['type' => 'timestamp', 'auto' => true],
			'valid'       => ['type' => 'bool', 'default' => true]
		]
	],

	'dy_deliverers' => [
		'plural_name'   => 'dy_deliverers',
		'singular_name' => 'dy_deliverer',
		'column_prefix' => 'deliverer',
		'relations'     => [
			'user'    => ['type' => 'one-to-one', 'target' => 'oz_users'],
			'company' => ['type' => 'many-to-one', 'target' => 'dy_companies'],
		],
		'constraints'   => [
			['type' => 'primary_key', 'columns' => ['id']],
			[
				'type'      => 'foreign_key',
				'reference' => 'oz_users',
				'columns'   => ['user_id' => 'id'],
				'delete'    => 'cascade',
				'update'    => 'cascade'
			],
			[
				'type'      => 'foreign_key',
				'reference' => 'dy_companies',
				'columns'   => ['company_id' => 'id'],
				'delete'    => 'cascade',
				'update'    => 'cascade'
			]
		],
		'columns'       => [
			'id'         => [
				'type'           => 'int',
				'auto_increment' => true,
				'unsigned'       => true
			],
			'user_id'    => 'ref:oz_users.id',
			'company_id' => ['type' => 'ref:dy_companies.id', 'null' => true],

			'available' => ['type' => 'bool', 'default' => true],

			'data'        => ['type' => 'string', 'default' => '[]'],
			'add_time'    => ['type' => 'timestamp', 'auto' => true],
			'update_time' => ['type' => 'timestamp', 'auto' => true],
			'valid'       => ['type' => 'bool', 'default' => true]
		]
	],

	'dy_accounts' => [
		'plural_name'   => 'dy_accounts',
		'singular_name' => 'dy_account',
		'column_prefix' => 'account',
		'relations'     => [
			'user' => ['type' => 'one-to-one', 'target' => 'oz_users'],
		],
		'constraints'   => [
			['type' => 'primary_key', 'columns' => ['id']],
			[
				'type'      => 'foreign_key',
				'reference' => 'oz_users',
				'columns'   => ['user_id' => 'id'],
				'delete'    => 'cascade',
				'update'    => 'cascade'
			],
			[
				'type'      => 'foreign_key',
				'reference' => 'dy_currencies',
				'columns'   => ['currency_code' => 'code'],
				'delete'    => 'cascade',
				'update'    => 'cascade'
			]
		],
		'columns'       => [
			'id'      => [
				'type'           => 'int',
				'auto_increment' => true,
				'unsigned'       => true
			],
			'user_id' => 'ref:oz_users.id',

			'balance'       => ['type' => 'float', 'default' => 0],
			'currency_code' => 'ref:dy_currencies.code',

			'data'        => ['type' => 'string', 'default' => '[]'],
			'add_time'    => ['type' => 'timestamp', 'auto' => true],
			'update_time' => ['type' => 'timestamp', 'auto' => true],
			'valid'       => ['type' => 'bool', 'default' => true]
		]
	],

	'dy_categories' => [
		'plural_name'   => 'dy_categories',
		'singular_name' => 'dy_category',
		'column_prefix' => 'category',
		'relations'     => [
			'products' => ['type' => 'one-to-many', 'target' => 'dy_products']
		],
		'constraints'   => [
			['type' => 'primary_key', 'columns' => ['id']]
		],
		'columns'       => [
			'id' => [
				'type'           => 'int',
				'auto_increment' => true,
				'unsigned'       => true
			],

			'type' => ['type' => 'string', 'max' => 255],

			'name'              => ['type' => 'string', 'max' => 255],
			'slug'              => ['type' => 'string', 'max' => 255, 'default'=> ''],
			'short_description' => ['type' => 'string', 'max' => 255],
			'description'       => 'string',
			'image'             => [
				'type'       => 'file',
				'mime_types' => ["image/jpeg"],
				'default'    => '0_0'
			],

			'data'        => ['type' => 'string', 'default' => '[]'],
			'add_time'    => ['type' => 'timestamp', 'auto' => true],
			'update_time' => ['type' => 'timestamp', 'auto' => true],
			'valid'       => ['type' => 'bool', 'default' => true]
		]
	],
	'dy_products'   => [
		'plural_name'   => 'dy_products',
		'singular_name' => 'dy_product',
		'column_prefix' => 'product',
		'relations'     => [
			'category' => ['type' => 'many-to-one', 'target' => 'dy_categories'],
			'company'  => ['type' => 'many-to-one', 'target' => 'dy_companies']
		],
		'constraints'   => [
			['type' => 'primary_key', 'columns' => ['id']],
			['type' => 'unique', 'columns' => ['ref']],
			[
				'type'      => 'foreign_key',
				'reference' => 'dy_companies',
				'columns'   => ['company_id' => 'id'],
				'delete'    => 'cascade',
				'update'    => 'cascade'
			],
			[
				'type'      => 'foreign_key',
				'reference' => 'dy_categories',
				'columns'   => ['category_id' => 'id'],
				'delete'    => 'cascade',
				'update'    => 'cascade'
			],
			[
				'type'      => 'foreign_key',
				'reference' => 'dy_currencies',
				'columns'   => ['currency_code' => 'code'],
				'delete'    => 'cascade',
				'update'    => 'cascade'
			],
			[
				'type'      => 'foreign_key',
				'reference' => 'dy_vats',
				'columns'   => ['vat_id' => 'id'],
				'delete'    => 'set_null',
				'update'    => 'cascade'
			]
		],
		'columns'       => [
			'id'          => [
				'type'           => 'bigint',
				'auto_increment' => true,
				'unsigned'       => true
			],
			'company_id'  => 'ref:dy_companies.id',
			'category_id' => 'ref:dy_categories.id',
			// code bar, etc, should be unique
			'ref'         => ['type' => 'string', 'max' => 255, 'null' => true],

			'name'              => ['type' => 'string', 'max' => 255],
			'slug'              => ['type' => 'string', 'max' => 255, 'default'=> ''],
			'short_description' => ['type' => 'string', 'max' => 255],
			'description'       => 'string',
			'images'            => [
				'type'       => 'file',
				'multiple'   => true,
				'mime_types' => ["image/jpeg"]
			],

			'price'         => ['type' => 'float', 'min' => 0],
			'currency_code' => 'ref:dy_currencies.code',
			'vat_id'        => ['type' => 'ref:dy_vats.id', 'null' => true],

			'data'        => ['type' => 'string', 'default' => '[]'],
			'add_time'    => ['type' => 'timestamp', 'auto' => true],
			'update_time' => ['type' => 'timestamp', 'auto' => true],
			'valid'       => ['type' => 'bool', 'default' => true]
		]
	],

	'dy_orders' => [
		'plural_name'   => 'dy_orders',
		'singular_name' => 'dy_order',
		'column_prefix' => 'order',
		'relations'     => [
			'client'      => ['type' => 'many-to-one', 'target' => 'oz_users'],
			'delivery'    => ['type' => 'one-to-many', 'target' => 'dy_deliveries'],
			'order_lines' => ['type' => 'one-to-many', 'target' => 'dy_order_lines'],
			'fees'        => ['type' => 'one-to-many', 'target' => 'dy_fees'],
			'discounts'   => ['type' => 'one-to-many', 'target' => 'dy_discounts'],
		],
		'constraints'   => [
			['type' => 'primary_key', 'columns' => ['id']],
			[
				'type'      => 'foreign_key',
				'reference' => 'oz_users',
				'columns'   => ['user_id' => 'id'],
				'delete'    => 'cascade',
				'update'    => 'cascade'
			]
		],
		'columns'       => [
			'id'      => [
				'type'           => 'int',
				'auto_increment' => true,
				'unsigned'       => true
			],
			'user_id' => 'ref:oz_users.id',

			// ACTIVE / CANCELED / DONE
			'state'   => ['type' => 'string', "max" => 30],

			'data'        => ['type' => 'string', 'default' => '[]'],
			'add_time'    => ['type' => 'timestamp', 'auto' => true],
			'update_time' => ['type' => 'timestamp', 'auto' => true],
			'valid'       => ['type' => 'bool', 'default' => true]
		]
	],

	'dy_order_lines' => [
		'plural_name'   => 'dy_order_lines',
		'singular_name' => 'dy_order_line',
		'column_prefix' => 'order_line',
		'relations'     => [
			'order'     => ['type' => 'one-to-one', 'target' => 'dy_orders'],
			'product'   => ['type' => 'one-to-one', 'target' => 'dy_products'],
			'discounts' => ['type' => 'one-to-many', 'target' => 'dy_discounts'],
		],
		'constraints'   => [
			['type' => 'primary_key', 'columns' => ['id']],
			[
				'type'      => 'foreign_key',
				'reference' => 'dy_orders',
				'columns'   => ['order_id' => 'id'],
				'delete'    => 'cascade',
				'update'    => 'cascade'
			],
			[
				'type'      => 'foreign_key',
				'reference' => 'dy_products',
				'columns'   => ['product_id' => 'id'],
				'delete'    => 'cascade',
				'update'    => 'cascade'
			],
			[
				'type'      => 'foreign_key',
				'reference' => 'dy_companies',
				'columns'   => ['company_id' => 'id'],
				'delete'    => 'cascade',
				'update'    => 'cascade'
			],
			[
				'type'      => 'foreign_key',
				'reference' => 'dy_exchanges',
				'columns'   => ['exchange_id' => 'id'],
				'delete'    => 'cascade',
				'update'    => 'cascade'
			]
		],
		'columns'       => [
			'id'            => [
				'type'           => 'int',
				'auto_increment' => true,
				'unsigned'       => true
			],
			'order_id'      => 'ref:dy_orders.id',
			'product_id'    => 'ref:dy_products.id',
			'company_id'    => 'ref:dy_companies.id',

			// float pour par exemple démi portion (0.5)
			'quantity'      => ['type' => 'float', 'min' => 0, 'default' => 1],

			// le prix lors de l'achat
			'price'         => ['type' => 'float', 'min' => 0],
			'currency_code' => 'ref:dy_currencies.code',
			'exchange_id'   => 'ref:dy_exchanges.id',

			// UNAVAILABLE, RECEIVED, COOKING, READY,
			'state'         => ['type' => 'string', "max" => 30],

			'data'        => ['type' => 'string', 'default' => '[]'],
			'add_time'    => ['type' => 'timestamp', 'auto' => true],
			'update_time' => ['type' => 'timestamp', 'auto' => true],
			'valid'       => ['type' => 'bool', 'default' => true]
		]
	],
	'dy_fees'        => [
		'plural_name'   => 'dy_fees',
		'singular_name' => 'dy_fee',
		'column_prefix' => 'fee',
		'relations'     => [],
		'constraints'   => [
			['type' => 'primary_key', 'columns' => ['id']],
			[
				'type'      => 'foreign_key',
				'reference' => 'dy_orders',
				'columns'   => ['order_id' => 'id'],
				'delete'    => 'cascade',
				'update'    => 'cascade'
			],
			[
				'type'      => 'foreign_key',
				'reference' => 'dy_order_lines',
				'columns'   => ['order_line_id' => 'id'],
				'delete'    => 'cascade',
				'update'    => 'cascade'
			],
			[
				'type'      => 'foreign_key',
				'reference' => 'dy_exchanges',
				'columns'   => ['exchange_id' => 'id'],
				'delete'    => 'cascade',
				'update'    => 'cascade'
			],
			[
				'type'      => 'foreign_key',
				'reference' => 'dy_vats',
				'columns'   => ['vat_id' => 'id'],
				'delete'    => 'cascade',
				'update'    => 'cascade'
			],
			[
				'type'      => 'foreign_key',
				'reference' => 'dy_deliveries',
				'columns'   => ['delivery_id' => 'id'],
				'delete'    => 'cascade',
				'update'    => 'cascade'
			]
		],
		'columns'       => [
			'id'            => [
				'type'           => 'int',
				'auto_increment' => true,
				'unsigned'       => true
			],
			'order_id'      => 'ref:dy_orders.id',
			'order_line_id' => ['type' => 'ref:dy_order_lines.id', 'null' => true],
			'vat_id'        => ['type' => 'ref:dy_vats.id', 'null' => true],
			'delivery_id'   => ['type' => 'ref:dy_deliveries.id', 'null' => true],

			// DELIVERY, VAT, TIP, PLATFORM_COMPANY_FEE, PLATFORM_DELIVERER_FEE
			'type'          => ['type' => 'string', 'max' => 30],

			'amount'        => ['type' => 'float', 'min' => 0],
			'currency_code' => 'ref:dy_currencies.code',
			'exchange_id'   => 'ref:dy_exchanges.id',
			'before_vat'    => 'bool',

			'data'        => ['type' => 'string', 'default' => '[]'],
			'add_time'    => ['type' => 'timestamp', 'auto' => true],
			'update_time' => ['type' => 'timestamp', 'auto' => true],
			'valid'       => ['type' => 'bool', 'default' => true]
		]
	],
	'dy_vats'        => [
		'plural_name'   => 'dy_vats',
		'singular_name' => 'dy_vat',
		'column_prefix' => 'vat',
		'relations'     => [],
		'constraints'   => [
			['type' => 'primary_key', 'columns' => ['id']]
		],
		'columns'       => [
			'id'         => [
				'type'           => 'int',
				'auto_increment' => true,
				'unsigned'       => true
			],
			'company_id' => ['type' => 'ref:dy_companies.id', 'null' => true],

			'type'  => ['type' => 'string', 'max' => 30],// DEFAULT | CLIENT_COUNTRY | COMPANY_COUNTRY
			'name'  => ['type' => 'string', 'max' => 140],
			'value' => ['type' => 'float', 'min' => 0, 'max' => 100],

			'data'        => ['type' => 'string', 'default' => '[]'],
			'add_time'    => ['type' => 'timestamp', 'auto' => true],
			'update_time' => ['type' => 'timestamp', 'auto' => true],
			'valid'       => ['type' => 'bool', 'default' => true]
		]
	],
	'dy_discounts'   => [
		'plural_name'   => 'dy_order_discounts',
		'singular_name' => 'dy_order_discount',
		'column_prefix' => 'order_discount',
		'relations'     => [],
		'constraints'   => [
			['type' => 'primary_key', 'columns' => ['id']],
			[
				'type'      => 'foreign_key',
				'reference' => 'dy_promos',
				'columns'   => ['promo_id' => 'id'],
				'delete'    => 'cascade',
				'update'    => 'cascade'
			],
			[
				'type'      => 'foreign_key',
				'reference' => 'dy_orders',
				'columns'   => ['order_id' => 'id'],
				'delete'    => 'cascade',
				'update'    => 'cascade'
			],
			[
				'type'      => 'foreign_key',
				'reference' => 'dy_order_lines',
				'columns'   => ['order_line_id' => 'id'],
				'delete'    => 'cascade',
				'update'    => 'cascade'
			],
			[
				'type'      => 'foreign_key',
				'reference' => 'dy_exchanges',
				'columns'   => ['exchange_id' => 'id'],
				'delete'    => 'cascade',
				'update'    => 'cascade'
			],
			[
				'type'      => 'foreign_key',
				'reference' => 'oz_users',
				'columns'   => ['user_id' => 'id'],
				'delete'    => 'cascade',
				'update'    => 'cascade'
			],
		],
		'columns'       => [
			'id'            => [
				'type'           => 'int',
				'auto_increment' => true,
				'unsigned'       => true
			],
			'user_id'       => 'ref:oz_users.id',
			'order_id'      => 'ref:dy_orders.id',
			'order_line_id' => ['type' => 'ref:dy_order_lines.id', 'null' => true],
			'promo_id'      => ['type' => 'ref:dy_promos.id', 'null' => true],

			'amount'        => ['type' => 'float', 'min' => 0],
			'currency_code' => 'ref:dy_currencies.code',
			'exchange_id'   => 'ref:dy_exchanges.id',
			'before_vat'    => 'bool',

			'data'        => ['type' => 'string', 'default' => '[]'],
			'add_time'    => ['type' => 'timestamp', 'auto' => true],
			'update_time' => ['type' => 'timestamp', 'auto' => true],
			'valid'       => ['type' => 'bool', 'default' => true]
		]
	],

	'dy_refunds'  => [
		'plural_name'   => 'dy_refunds',
		'singular_name' => 'dy_refund',
		'column_prefix' => 'refund',
		'relations'     => [],
		'constraints'   => [
			['type' => 'primary_key', 'columns' => ['id']],
			[
				'type'      => 'foreign_key',
				'reference' => 'dy_orders',
				'columns'   => ['order_id' => 'id'],
				'delete'    => 'cascade',
				'update'    => 'cascade'
			],
			[
				'type'      => 'foreign_key',
				'reference' => 'dy_order_lines',
				'columns'   => ['order_line_id' => 'id'],
				'delete'    => 'cascade',
				'update'    => 'cascade'
			],
			[
				'type'      => 'foreign_key',
				'reference' => 'dy_payments',
				'columns'   => ['payment_id' => 'id'],
				'delete'    => 'cascade',
				'update'    => 'cascade'
			],
			[
				'type'      => 'foreign_key',
				'reference' => 'dy_transactions',
				'columns'   => ['transaction_id' => 'id'],
				'delete'    => 'cascade',
				'update'    => 'cascade'
			],
			[
				'type'      => 'foreign_key',
				'reference' => 'dy_exchanges',
				'columns'   => ['exchange_id' => 'id'],
				'delete'    => 'cascade',
				'update'    => 'cascade'
			],
		],
		'columns'       => [
			'id'             => [
				'type'           => 'int',
				'auto_increment' => true,
				'unsigned'       => true
			],
			'order_id'       => 'ref:dy_orders.id',
			'order_line_id'  => ['type' => 'ref:dy_order_lines.id', 'null' => true],
			'payment_id'     => ['type' => 'ref:dy_payments.id', 'null' => true],
			'transaction_id' => ['type' => 'ref:dy_transactions.id', 'null' => true],

			'type'   => ['type' => 'string', 'max' => 30],// ORDER_LINE_REFUND, ORDER_REFUND, PAYMENT_REFUND
			'reason' => 'string',

			'amount'        => ['type' => 'string', 'min' => 6, 'max' => 32],
			'currency_code' => 'ref:dy_currencies.code',
			'exchange_id'   => 'ref:dy_exchanges.id',

			'data'        => ['type' => 'string', 'default' => '[]'],
			'add_time'    => ['type' => 'timestamp', 'auto' => true],
			'update_time' => ['type' => 'timestamp', 'auto' => true],
			'valid'       => ['type' => 'bool', 'default' => true]
		]
	],

	// de l'argent appliqué à une commande
	'dy_payments' => [
		'plural_name'   => 'dy_payments',
		'singular_name' => 'dy_payment',
		'column_prefix' => 'payment',
		'relations'     => [],
		'constraints'   => [
			['type' => 'primary_key', 'columns' => ['id']],
			['type' => 'unique', 'columns' => ['ref']],
			[
				'type'      => 'foreign_key',
				'reference' => 'dy_orders',
				'columns'   => ['order_id' => 'id'],
				'delete'    => 'cascade',
				'update'    => 'cascade'
			],
			[
				'type'      => 'foreign_key',
				'reference' => 'dy_exchanges',
				'columns'   => ['exchange_id' => 'id'],
				'delete'    => 'cascade',
				'update'    => 'cascade'
			],
		],
		'columns'       => [
			'id'       => [
				'type'           => 'int',
				'auto_increment' => true,
				'unsigned'       => true
			],
			'ref'     => ['type' => 'string', 'max' => 140, 'null' => true],
			'order_id' => 'ref:dy_orders.id',

			'amount'        => ['type' => 'float', 'min' => 0],
			'currency_code' => 'ref:dy_currencies.code',
			'exchange_id'   => 'ref:dy_exchanges.id',

			'data'        => ['type' => 'string', 'default' => '[]'],
			'add_time'    => ['type' => 'timestamp', 'auto' => true],
			'update_time' => ['type' => 'timestamp', 'auto' => true],
			'valid'       => ['type' => 'bool', 'default' => true]
		]
	],

	'dy_transactions' => [
		'plural_name'   => 'dy_transactions',
		'singular_name' => 'dy_transaction',
		'column_prefix' => 'transaction',
		'relations'     => [],
		'constraints'   => [
			['type' => 'primary_key', 'columns' => ['id']],
			['type' => 'unique', 'columns' => ['ref']],
			[
				'type'      => 'foreign_key',
				'reference' => 'dy_exchanges',
				'columns'   => ['exchange_id' => 'id'],
				'delete'    => 'cascade',
				'update'    => 'cascade'
			],
			[
				'type'      => 'foreign_key',
				'reference' => 'oz_users',
				'columns'   => ['user_id' => 'id'],
				'delete'    => 'cascade',
				'update'    => 'cascade'
			],
		],
		'columns'       => [
			'id'      => [
				'type'           => 'int',
				'auto_increment' => true,
				'unsigned'       => true
			],
			'ref'     => ['type' => 'string', 'max' => 140, 'null' => true],
			'user_id' => ['type' => 'ref:oz_users.id', 'null' => true],

			// IN, OUT
			'type'    => ['type' => 'string', 'max' => 30],

			'amount'        => ['type' => 'float', 'min' => 0],
			'currency_code' => 'ref:dy_currencies.code',
			'exchange_id'   => 'ref:dy_exchanges.id',

			// PENDING, VALID, REFUNDED
			'state'         => ['type' => 'string', 'max' => 30],

			'data'        => ['type' => 'string', 'default' => '[]'],
			'add_time'    => ['type' => 'timestamp', 'auto' => true],
			'update_time' => ['type' => 'timestamp', 'auto' => true],
			'valid'       => ['type' => 'bool', 'default' => true]
		]
	],

	'dy_exchanges' => [
		'plural_name'   => 'dy_exchanges',
		'singular_name' => 'dy_exchange',
		'column_prefix' => 'exchange',
		'relations'     => [],
		'constraints'   => [
			['type' => 'primary_key', 'columns' => ['id']],
			[
				'type'      => 'foreign_key',
				'reference' => 'dy_currencies',
				'columns'   => ['from' => 'code'],
				'delete'    => 'cascade',
				'update'    => 'cascade'
			],
			[
				'type'      => 'foreign_key',
				'reference' => 'dy_currencies',
				'columns'   => ['to' => 'code'],
				'delete'    => 'cascade',
				'update'    => 'cascade'
			]
		],
		'columns'       => [
			'id' => [
				'type'           => 'int',
				'auto_increment' => true,
				'unsigned'       => true
			],

			'from' => 'ref:dy_currencies.code',
			'to'   => 'ref:dy_currencies.code',
			'rate' => ['type' => 'float', 'min' => 0],

			'data'        => ['type' => 'string', 'default' => '[]'],
			'add_time'    => ['type' => 'timestamp', 'auto' => true],
			'update_time' => ['type' => 'timestamp', 'auto' => true],
			'valid'       => ['type' => 'bool', 'default' => true]
		]
	],

	'dy_addresses'  => [
		'plural_name'   => 'dy_addresses',
		'singular_name' => 'dy_address',
		'column_prefix' => 'address',
		'relations'     => [],
		'constraints'   => [
			['type' => 'primary_key', 'columns' => ['id']]
		],
		'columns'       => [
			'id'        => [
				'type'           => 'int',
				'auto_increment' => true,
				'unsigned'       => true
			],
			'target'    => ['type' => 'string', 'max' => 255, "default" => ''],
			'target_id' => ['type' => 'int', 'unsigned' => true],

			'is_main' => ['type' => 'bool', "default" => false],

			'longitude' => ['type' => 'string', 'max' => 255, "default" => ''],
			'latitude'  => ['type' => 'string', 'max' => 255, "default" => ''],
			'address'   => 'string',

			'data'        => ['type' => 'string', 'default' => '[]'],
			'add_time'    => ['type' => 'timestamp', 'auto' => true],
			'update_time' => ['type' => 'timestamp', 'auto' => true],
			'valid'       => ['type' => 'bool', 'default' => true]
		]
	],
	'dy_deliveries' => [
		'plural_name'   => 'dy_deliveries',
		'singular_name' => 'dy_delivery',
		'column_prefix' => 'delivery',
		'relations'     => [
			'deliverer' => ['type' => 'one-to-one', 'target' => 'oz_users'],
			'order'     => ['type' => 'many-to-one', 'target' => 'dy_orders']
		],
		'constraints'   => [
			['type' => 'primary_key', 'columns' => ['id']],
			[
				'type'      => 'foreign_key',
				'reference' => 'oz_users',
				'columns'   => ['user_id' => 'id'],
				'delete'    => 'cascade',
				'update'    => 'cascade'
			],
			[
				'type'      => 'foreign_key',
				'reference' => 'dy_orders',
				'columns'   => ['order_id' => 'id'],
				'delete'    => 'cascade',
				'update'    => 'cascade'
			]
		],
		'columns'       => [
			'id'       => [
				'type'           => 'int',
				'auto_increment' => true,
				'unsigned'       => true
			],
			'user_id'  => 'ref:oz_users.id',
			'order_id' => 'ref:dy_orders.id',

			// PENDING / IN_PROGRESS / REJECTED / DELIVERED / CONFIRMED (by the client)
			'state'    => ['type' => 'string', 'max' => 30],
			'stars'    => ['type' => 'int', 'min' => 0, 'max' => 5, 'null' => true],

			'data'        => ['type' => 'string', 'default' => '[]'],
			'add_time'    => ['type' => 'timestamp', 'auto' => true],
			'update_time' => ['type' => 'timestamp', 'auto' => true],
			'valid'       => ['type' => 'bool', 'default' => true]
		]
	],

	'dy_promos'         => [
		'plural_name'   => 'dy_promos',
		'singular_name' => 'dy_promo',
		'column_prefix' => 'promo',
		'relations'     => [
			'promo_products' => ['type' => 'one-to-one', 'target' => 'dy_promo_products']
		],
		'constraints'   => [
			['type' => 'primary_key', 'columns' => ['id']],
			['type' => 'unique', 'columns' => ['ref']],
			[
				'type'      => 'foreign_key',
				'reference' => 'dy_companies',
				'columns'   => ['company_id' => 'id'],
				'delete'    => 'cascade',
				'update'    => 'cascade'
			]
		],
		'columns'       => [
			'id'         => [
				'type'           => 'int',
				'auto_increment' => true,
				'unsigned'       => true
			],
			'ref'     => ['type' => 'string', 'max' => 140, 'null' => true],
			'company_id' => ['type' => 'ref:dy_companies.id', 'null' => true],

			'title'             => ['type' => 'string', 'max' => 140],
			'short_description' => ['type' => 'string', 'max' => 255],
			'description'       => 'string',

			'type' => ['type' => 'string', 'max' => 30],
			// PRODUCT_DISCOUNT_PROMO, ORDER_DISCOUNT_PROMO ...

			'code'       => ['type' => 'string', 'min' => 6, 'max' => 32],
			'auto_apply' => ['type' => 'bool', 'default' => false],
			// should this promo auto applied on order or require user enter the code first

			'total_applied'  => ['type' => 'int', 'min' => 0, 'default' => 0],
			// nombre de réductions déjà appliquées pour cette promos
			'max_apply'      => ['type' => 'int', 'min' => 1, 'default' => 1],
			// nombre total de réductions pouvant etre appliquées pour cette promo
			'max_user_apply' => ['type' => 'int', 'min' => 1, 'default' => 1],
			// nombre de fois un même client peut profiter de la promo

			'before_vat' => 'bool',

			'amount'        => ['type' => 'float', 'min' => 0, 'default' => 0],
			'percent'       => ['type' => 'float', 'min' => 0, 'max' => 100, 'default' => 0],
			'currency_code' => 'ref:dy_currencies.code',

			'start_time' => ['type' => 'timestamp', 'null' => true],
			'end_time'   => ['type' => 'timestamp', 'null' => true],

			// ACTIVE, SUSPENDED, CANCELED...
			'state'      => ['type' => 'string', "max" => 30],

			'data'        => ['type' => 'string', 'default' => '[]'],
			'add_time'    => ['type' => 'timestamp', 'auto' => true],
			'update_time' => ['type' => 'timestamp', 'auto' => true],
			'valid'       => ['type' => 'bool', 'default' => true]
		]
	],
	'dy_promo_products' => [
		'plural_name'   => 'dy_promo_products',
		'singular_name' => 'dy_promo_product',
		'column_prefix' => 'pp',
		'relations'     => [
			'product' => ['type' => 'many-to-one', 'target' => 'dy_products']
		],
		'constraints'   => [
			['type' => 'primary_key', 'columns' => ['promo_id', 'product_id']],
			[
				'type'      => 'foreign_key',
				'reference' => 'dy_promos',
				'columns'   => ['promo_id' => 'id'],
				'delete'    => 'cascade',
				'update'    => 'cascade'
			],
			[
				'type'      => 'foreign_key',
				'reference' => 'dy_products',
				'columns'   => ['product_id' => 'id'],
				'delete'    => 'cascade',
				'update'    => 'cascade'
			]
		],
		'columns'       => [
			'promo_id'   => 'ref:dy_promos.id',
			'product_id' => 'ref:dy_products.id',

			'data'        => ['type' => 'string', 'default' => '[]'],
			'add_time'    => ['type' => 'timestamp', 'auto' => true],
			'update_time' => ['type' => 'timestamp', 'auto' => true],
			'valid'       => ['type' => 'bool', 'default' => true]
		]
	],

	'dy_chats'    => [
		'plural_name'   => 'dy_chats',
		'singular_name' => 'dy_chat',
		'column_prefix' => 'chat',
		'relations'     => [
			'creator'  => ['type' => 'many-to-one', 'target' => 'oz_users'],
			'company'  => ['type' => 'many-to-one', 'target' => 'dy_companies'],
			'messages' => ['type' => 'one-to-many', 'target' => 'dy_messages'],
		],
		'constraints'   => [
			['type' => 'primary_key', 'columns' => ['id']],
			[
				'type'      => 'foreign_key',
				'reference' => 'oz_users',
				'columns'   => ['created_by' => 'id'],
				'delete'    => 'cascade',
				'update'    => 'cascade'
			],
			[
				'type'      => 'foreign_key',
				'reference' => 'dy_companies',
				'columns'   => ['company_id' => 'id'],
				'delete'    => 'cascade',
				'update'    => 'cascade'
			]
		],
		'columns'       => [
			'id' => [
				'type'           => 'int',
				'auto_increment' => true,
				'unsigned'       => true
			],

			'created_by' => 'ref:oz_users.id',

			'company_id' => ['type' => 'ref:dy_companies.id', 'null' => true],
			'target_id'  => ['type' => 'ref:oz_users.id', 'null' => true],

			'data'        => ['type' => 'string', 'default' => '[]'],
			'add_time'    => ['type' => 'timestamp', 'auto' => true],
			'update_time' => ['type' => 'timestamp', 'auto' => true],
			'valid'       => ['type' => 'bool', 'default' => true]
		]
	],
	'dy_messages' => [
		'plural_name'   => 'dy_messages',
		'singular_name' => 'dy_message',
		'column_prefix' => 'message',
		'relations'     => [
			'sender'      => ['type' => 'many-to-one', 'target' => 'oz_users'],
			'chat'        => ['type' => 'many-to-one', 'target' => 'dy_chats'],
			'ref_message' => ['type' => 'many-to-one', 'target' => 'dy_messages'],
		],
		'constraints'   => [
			['type' => 'primary_key', 'columns' => ['id']],
			[
				'type'      => 'foreign_key',
				'reference' => 'dy_chats',
				'columns'   => ['chat_id' => 'id'],
				'delete'    => 'cascade',
				'update'    => 'cascade'
			],
			[
				'type'      => 'foreign_key',
				'reference' => 'oz_users',
				'columns'   => ['sender_id' => 'id'],
				'delete'    => 'cascade',
				'update'    => 'cascade'
			],
			[
				'type'      => 'foreign_key',
				'reference' => 'dy_messages',
				'columns'   => ['ref_id' => 'id'],
				'delete'    => 'cascade',
				'update'    => 'cascade'
			]
		],
		'columns'       => [
			'id'        => [
				'type'           => 'int',
				'auto_increment' => true,
				'unsigned'       => true
			],
			'sender_id' => 'ref:oz_users.id',
			'chat_id'   => 'ref:dy_chats.id',

			'ref_id' => ['type' => 'ref:dy_messages.id', 'null' => true],

			'type' => ['type' => 'string', 'max' => 30],// DEFAULT, NOTIFICATION

			'content' => 'string',
			'read'    => ['type' => 'bool', 'default' => false],

			'data'        => ['type' => 'string', 'default' => '[]'],
			'add_time'    => ['type' => 'timestamp', 'auto' => true],
			'update_time' => ['type' => 'timestamp', 'auto' => true],
			'valid'       => ['type' => 'bool', 'default' => true]
		]
	],

	'dy_pubs' => [
		'plural_name'   => 'dy_pubs',
		'singular_name' => 'dy_pub',
		'column_prefix' => 'pub',
		'constraints'   => [
			['type' => 'primary_key', 'columns' => ['id']],
			['type' => 'unique', 'columns' => ['ref']],
		],
		'columns'       => [
			'id'    => [
				'type'           => 'int',
				'auto_increment' => true,
				'unsigned'       => true
			],'ref'     => ['type' => 'string', 'max' => 140, 'null' => true],
			'title' => ['type' => 'string', 'max' => 255],
			'link'  => ['type' => 'string', 'max' => 500, 'null' => true],
			'image' => [
				'type'       => 'file',
				'mime_types' => ["image/jpeg"]
			],

			'data'        => ['type' => 'string', 'default' => '[]'],
			'add_time'    => ['type' => 'timestamp', 'auto' => true],
			'update_time' => ['type' => 'timestamp', 'auto' => true],
			'valid'       => ['type' => 'bool', 'default' => true]
		]
	],

	'dy_currencies' => [
		'plural_name'   => 'dy_currencies',
		'singular_name' => 'dy_currency',
		'column_prefix' => 'currency',
		'relations'     => [],
		'constraints'   => [['type' => 'primary_key', 'columns' => ['code']]],
		'columns'       => [
			'code'      => [
				'type' => 'string',
				'max'  => 6,
			],
			'symbol'    => [
				'type' => 'string',
				'max'  => 30,
			],
			'name'      => [
				'type' => 'string',
				'max'  => 60,
			],
			'name_real' => [
				'type' => 'string',
				'max'  => 60,
			],
			// number of digit after the floating point
			'mantissa'  => [
				'type'    => 'int',
				'min'     => 0,
				'default' => 2
			],
			'data'      => [
				'type'    => 'string',
				'default' => '[]',
			],
			'add_time'  => [
				'type' => 'timestamp',
				'auto' => true,
			],
			'update_time'  => [
				'type' => 'timestamp',
				'auto' => true,
			],
			'valid'     => [
				'type'    => 'bool',
				'default' => true,
			],
		]
	],

	'dy_devices' => [
		'plural_name'   => 'dy_devices',
		'singular_name' => 'dy_device',
		'column_prefix' => 'dv',
		'relations'     => [
			'user' => ['type' => 'one-to-one', 'target' => 'oz_users']
		],
		'constraints'   => [
			['type' => 'primary_key', 'columns' => ['id']],
			[
				'type'      => 'foreign_key',
				'reference' => 'oz_users',
				'columns'   => ['user_id' => 'id'],
				'delete'    => 'cascade',
				'update'    => 'cascade'
			]
		],
		'columns'       => [
			'id'      => ['type' => 'bigint', 'unsigned' => true, 'auto_increment' => true],
			'user_id' => ['type' => 'ref:oz_users.id', 'null' => true],

			'os'  => ['type' => 'string', 'min' => 3, 'max' => 30],
			'app' => ['type' => 'string', 'min' => 3, 'max' => 30],
			'key' => 'string',

			'data'        => ['type' => 'string', 'default' => '[]'],
			'add_time'    => ['type' => 'timestamp', 'auto' => true],
			'update_time' => ['type' => 'timestamp', 'auto' => true],
			'valid'       => ['type' => 'bool', 'default' => true]
		]
	]
];