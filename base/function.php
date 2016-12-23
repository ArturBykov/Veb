<?php
    $mysqli = false;
    function connectDB () {
        global $mysqli;
        $mysqli = new $mysqli("localhost", "root", "", "testbd");
        $mysqli -> query("SET NAMES 'utf-8'"); 
    }
    
    function closeDB () {
        global $mysqli;
        $mysqli-> close();
    }
    
    function getNews($limit){
        global $mysqli;
        connectDB ();
        $result = $mysqli->query("SELECT* FROM 'news' ORDER BY 'id' DESEC LIMIT $limit");
        closeDB();
        return resultArray($result);
    }
    function resultArray ($result){
        $array = array();
        while(($row = $result->fetch_assoc()) != false)
            $array[] = $row;
    return $array;
}
    
?>