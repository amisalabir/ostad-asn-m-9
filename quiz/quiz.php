Task 1: 

Write a SQL query to retrieve all the orders from the 'orders' table and their corresponding customer names from the 'customers' table. Use an INNER JOIN to combine the tables.

SELECT  Orders.*, Customers.CustomerName 
FROM Orders
INNER JOIN Customers
ON Orders.CustomerID=Customers.CustomerID
ORDER BY Customers.CustomerName;

Task 2: .

Write a SQL query to retrieve all the products from the 'products' table and their corresponding category names from the 'categories' table. Use a LEFT JOIN to combine the tables and include all products, even if they don't have a category.

SELECT Products.*, categories.CategoryName
FROM Products
LEFT JOIN categories
ON categories.CategoryID=Products.CategoryID;