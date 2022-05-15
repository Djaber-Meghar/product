<?php
require('db.php');

function get_product($extra="") {
    global $conn;
        $query = sprintf("SELECT * FROM product %s", $extra);
        $qresult = mysqli_query($conn, $query); 
        if (!$qresult) 
            return false;
        
        $rcount = mysqli_num_rows($qresult);
        
        if ($rcount == 0) 
            return NULL;
        

        $products = array();
        for ($i = 0;$i < $rcount; $i++) 
            $products[count($products)] = mysqli_fetch_object($qresult);
            
            
          
        return $products;
        mysqli_free_result($qresult); 
        
}

    function get_colors($extra="") {
    global $conn;
        $query = sprintf("SELECT * FROM color %s", $extra);
        $qresult = mysqli_query($conn, $query); 
        if (!$qresult) 
            return false;
        
        $rcount = mysqli_num_rows($qresult);
        
        if ($rcount == 0) 
            return NULL;
        

        $color = array();
        for ($i = 0;$i < $rcount; $i++) 
            $color[count($color)] = mysqli_fetch_object($qresult);
            
            
          
        return $color;
        mysqli_free_result($qresult); 
        
    }

    function get_capacity($extra="") {
        global $conn;
            $query = sprintf("SELECT * FROM capacity %s", $extra);
            $qresult = mysqli_query($conn, $query); 
            if (!$qresult) 
                return false;
            
            $rcount = mysqli_num_rows($qresult);
            
            if ($rcount == 0) 
                return NULL;
            
    
            $capacity = array();
            for ($i = 0;$i < $rcount; $i++) 
                $capacity[count($capacity)] = mysqli_fetch_object($qresult);
                
                
              
            return $capacity;
            mysqli_free_result($qresult); 
            
        }
?>