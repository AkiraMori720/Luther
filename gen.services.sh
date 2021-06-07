#!/usr/bin/env bash
rm -r ./api/app/Services
oz service generate users oz_users -o
oz service generate products dy_products -o
oz service generate categories dy_categories -o
oz service generate companies dy_companies -o
oz service generate employees dy_employees -o
oz service generate accounts dy_accounts -o
oz service generate deliveries dy_deliveries -o
oz service generate deliverers dy_deliverers -o
oz service generate orders dy_orders -o
oz service generate order-lines dy_order_lines -o
oz service generate fees dy_fees -o
oz service generate vats dy_vats -o
oz service generate discounts dy_discounts -o
oz service generate refunds dy_refunds -o
oz service generate payments dy_payments -o
oz service generate transactions dy_transactions -o
oz service generate exchanges dy_exchanges -o
oz service generate addresses dy_addresses -o
oz service generate promos dy_promos -o
# oz service generate promo-products dy_promo_products -o
oz service generate chats dy_chats -o
oz service generate messages dy_messages -o
oz service generate pubs dy_pubs -o
oz service generate currencies dy_currencies -o
oz service generate devices dy_devices -o