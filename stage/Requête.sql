--CREATE TABLE contact(namecontact VARCHAR(50), first_name  VARCHAR(50))

SELECT   COUNT(*) AS nbr_doublon, first_name, name,
FROM     table
GROUP BY first_name, name
HAVING   COUNT(*) > 1

DELETE FROM TABLE
LEFT OUTER JOIN (
        SELECT MIN(id) as id, first_name, name
        FROM table
        GROUP BY first_name,name
    ) as t1 
    ON table.id = t1.id
WHERE t1.id IS NULL