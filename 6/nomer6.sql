SELECT product_categories.id, product_categories.name,
COUNT(products.category_id) as Jumlah_product
FROM products INNER JOIN
product_categories ON products.category_id = product_categories.id
GROUP BY product_categories.id
