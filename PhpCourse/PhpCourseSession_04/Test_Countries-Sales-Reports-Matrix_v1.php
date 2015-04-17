<?php


    /**
     * Returns the values from a single column of the input array, identified by
     * the $columnKey.
     *
     * Optionally, you may provide an $indexKey to index the values in the returned
     * array by the values from the $indexKey column in the input array.
     *
     * @param array $input A multi-dimensional array (record set) from which to pull
     *                     a column of values.
     * @param mixed $columnKey The column of values to return. This value may be the
     *                         integer key of the column you wish to retrieve, or it
     *                         may be the string key name for an associative array.
     * @param mixed $indexKey (Optional.) The column to use as the index/keys for
     *                        the returned array. This value may be the integer key
     *                        of the column, or it may be the string key name.
     * @return array

     * 
     * @param array $input
     * @param mixed $columnKey
     * @param mixed $indexKey
     * @return boolean|null|array
     */     

     function array_column($input = null, $columnKey = null, $indexKey = null)
     
    {
        // Using func_get_args() in order to check for proper number of
        // parameters and trigger errors exactly as the built-in array_column()
        // does in PHP 5.5.
        $argc = func_num_args();
        $params = func_get_args();

        if ($argc < 2) {
            trigger_error("array_column() expects at least 2 parameters, {$argc} given", E_USER_WARNING);
            return null;
        }

        if (!is_array($params[0])) {
            trigger_error('array_column() expects parameter 1 to be array, ' . gettype($params[0]) . ' given', E_USER_WARNING);
            return null;
        }

        if (!is_int($params[1])
            && !is_float($params[1])
            && !is_string($params[1])
            && $params[1] !== null
            && !(is_object($params[1]) && method_exists($params[1], '__toString'))
        ) {
            trigger_error('array_column(): The column key should be either a string or an integer', E_USER_WARNING);
            return false;
        }

        if (isset($params[2])
            && !is_int($params[2])
            && !is_float($params[2])
            && !is_string($params[2])
            && !(is_object($params[2]) && method_exists($params[2], '__toString'))
        ) {
            trigger_error('array_column(): The index key should be either a string or an integer', E_USER_WARNING);
            return false;
        }

        $paramsInput = $params[0];
        $paramsColumnKey = ($params[1] !== null) ? (string) $params[1] : null;

        $paramsIndexKey = null;
        if (isset($params[2])) {
            if (is_float($params[2]) || is_int($params[2])) {
                $paramsIndexKey = (int) $params[2];
            } else {
                $paramsIndexKey = (string) $params[2];
            }
        }

        $resultArray = array();

        foreach ($paramsInput as $row) {

            $key = $value = null;
            $keySet = $valueSet = false;

            if ($paramsIndexKey !== null && array_key_exists($paramsIndexKey, $row)) {
                $keySet = true;
                $key = (string) $row[$paramsIndexKey];
            }

            if ($paramsColumnKey === null) {
                $valueSet = true;
                $value = $row;
            } elseif (is_array($row) && array_key_exists($paramsColumnKey, $row)) {
                $valueSet = true;
                $value = $row[$paramsColumnKey];
            }

            if ($valueSet) {
                if ($keySet) {
                    $resultArray[$key] = $value;
                } else {
                    $resultArray[] = $value;
                }
            }

        }

        return $resultArray;
    }



function tableSale(array $arr)
    {
        //--------Add data--------
        $newRow = count($arr);
        $newCol = count($arr[0]);
        $arr[] = array();
        $arr[0][] = "Total sales in<br> all countries";
        $arr[$newRow][0] = "Total sales<br> in country";
        //--------Option 1--------
        /*for($row = 1; $row <= $newRow; $row++)
        {
            for($col = 1, $sum = 0; $col < $newCol; $col++)
            {
                $sum += $arr[$row][$col];
                if($row != $newRow)
                    $arr[$newRow][$col] += $arr[$row][$col];
            }
            $arr[$row][$col] = $sum;
        }*/
        //--------Option 2--------
        for($row = 1; $row < $newRow; $row++)
        {
            $arr[$row][] = array_sum($arr[$row]);
        }
        for($col =1; $col <= $newCol; $col++)
        {
            $arr[$newRow][$col] = array_sum(array_column($arr, $col));
        }

        //--------Printing to string--------
        $html = '';
        $html .= "<table border=1>";
        foreach($arr as $val)
        {
            $html .= "<tr>";
            foreach($val as $v)
            {
                $html .= "<td>$v</td>";
            }
            $html .= "</tr>";
        }
        $html .= "</table>";
        return $html;
    }
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Countries sales reports matrix</title>
</head>
<body>
<h3>&laquo Countries sales reports matrix &raquo</h3>

    <?php
        $sales = [
            ['','France','Germany','Israel','Canada','Turkey'],
            ['Ducks Hunting',23,53,2,34,12],
            ['Bugz Busters',12,23,1,54,22],
            ['Coastal Forse',3,4,9,11,4],
            ['Omega Mission',5,3,6,2,2]
        ];
        echo tableSale($sales);
    ?>
</body>
</html>
