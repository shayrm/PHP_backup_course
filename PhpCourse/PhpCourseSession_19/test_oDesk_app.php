<?php

//echo "\$_SERVER output information:<br>";
//var_dump($_SERVER);

//echo "\$_SESSION output information:<br>";
//var_dump($_SESSION);


//header('Content-type: application/json');
//$ip = $_GET['ip'];

$ip="31.154.12.14";
echo "<h3>Your IP address is: $ip";

// Loading the asn table (netmask => asn).
// You want to cache this across requests!
$asn_table = array();
echo "<h2>Loading.";
$fh = fopen('data-raw-table.txt', 'r');
while ($line = fgets($fh)) {
  $match = array();
  if (preg_match("%([0-9.]+)/\d+\s+(\d+)%", $line, $match)) {
      $tmp=preg_match("%([0-9.]+)/\d+\s+(\d+)%", $line, $match);
      $asn_table[ip2long($match[1])] = $match[2];
    echo ".";
    
  }
}
 
// Loading the owners table (asn => owner)
// You want to also cache this across requests!
$asn_owners = array();
$fh = fopen('data-used-autnums.txt', 'r');
while ($line = fgets($fh)) {
  $match = array();
  if (preg_match("%\s*(\d+)\s+(.*)%", $line, $match)) {
    $asn_owners[$match[1]] = $match[2];
    
  }
}
 
// The actual lookup
$ip_value = ip2long($ip);
$result = 'sorry, not found...';
for ($i=0; $i<32; $i++) {
    
  $ip2 = ($ip_value >> $i) << $i;
  
  if (isset($asn_table[$ip2])) {
    $asn = $asn_table[$ip2];
    $result = $ip . ' maps to asn ' . $asn;
    if (isset($asn_owners[$asn])) {
      $result .= ' (' . $asn_owners[$asn] . ')';
    }
    break;
  }
}
 
// Returning the response as JSONP
//$arr = array('result' => $result);
//echo 'ip_to_asn(' . json_encode($arr) . ')';
echo "<br>";
echo "<h3>$result</h3>";

?>