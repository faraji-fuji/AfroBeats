<?php

/**
 * Model: Base Model Class
 */
class Model
{
    /**
     * select_item($column1, $column2, $value): Generic method to get an item
     *  from a table/model
     * 
     * Params:
     *  $column: The  column from which to select data
     *  $row: 
     *  $value:
     * 
     * Returns:
     *  $item: if succesful
     *  False: if an error occurs
     */
    function select_item($column1, $column2, $value)
    {
        global $conn;
        $sql = "SELECT `$column1` FROM `user` WHERE `$column2` = '$value'";
        $result = $conn->query($sql);
        if ($result) {
            $data = $result->fetch_assoc();
            $item = $data[$column1];
            return $item;
        }
        return FALSE;
    }
}
