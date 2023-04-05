<?php

function singleselect($conn, $what, $tablename)
{
    $sql = "SELECT $what FROM $tablename";
    $result = $conn->query($sql);
    $row = $result->fetch_assoc();
    return $row["$what"];
}

function certain_word($str, $number)
{
    $array_str = explode(" ", $str);
    if (isset($array_str[$number])) {
        return implode(" ", array_slice($array_str, 0, $number));
    }
    return $str;
}

function countdb($table, $conn)
{
    $sql = "select count(*) as total from $table";
    $result = $conn->query($sql);
    $row = $result->fetch_assoc();
    return $row['total'];
}

?>