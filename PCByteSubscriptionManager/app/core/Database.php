<?php

Trait Database
{
    public function connect()
    {
        $string = "mysql:host=localhost;dbname=pcbyte_sub_manager";
        $con = new PDO($string, 'root', '');
        return $con;
    }

    public function query($query, $params = [])
    {
        $con = $this->connect();
        $stmt = $con->prepare($query);

        // Execute the query
        $check = $stmt->execute($params);

        // Check if the query was successful
        if (!$check) {
            return false; // Return false if execution fails
        }

        // Determine if the query is a SELECT statement
        if (stripos($query, 'SELECT') === 0) {
            // Fetch and return results for SELECT queries
            return $stmt->fetchAll(PDO::FETCH_ASSOC);
        } elseif (stripos($query, 'INSERT') === 0 || stripos($query, 'UPDATE') === 0 || stripos($query, 'DELETE') === 0) {
            // Return true for INSERT, UPDATE, DELETE queries
            return true;
        }

        // Default return for other types of queries
        return false;
    }



}