
-- CRUD
--Create
INSERT INTO roles (name, value) VALUE ('Super',44);

--READ
SELECT id, name FROM roles ORDER BY name DESC LIMIT 3;

--Update
UPDATE roles SET name = 'Editor' WHERE id =2;

--Delete 
DELETE FROM roles WHERE id=2;


SELECT users.id, users.name, users.role_id, roles.name As role FROM users LEFT JOIN roles
ON users.role_id = roles.id;