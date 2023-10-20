<?php
include_once 'dbcon.php';

function filterData(&$str){
    $str = preg_replace("/\t/", "\\t", $str);
    $str = preg_replace("/\r?\n/", "\\n", $str);
    if(strstr($str, '"')) $str = '"' . str_replace('"', '""', $str) . '"';
}
$filename="ci_forms".date('Y-m-d') . ".xls"; //save our document name with date and

$fields = array ('case','evidence', 'appendix','Date Custody','Branch', 'Description');

$excelData = implode("\t", array_values($fields)) . "\n";

$query = $con->query("SELECT * FROM ci_forms");
if($query->num_rows > 0){
    while ($row=$query->fetch_assoc()){
        $lineData = array($row['id'],$row['evidence'], $row['appendix'], $row['dcustody'],$row['branch'], $row['description']);
        array_walk($lineData, 'filterData');
        $excelData .= implode("\t", array_values($lineData)) . "\n";
    }
    }else{
        echo "No data found.";   
}
header('Content-Disposition: attachment; filename="' . basename("$filename") .'"');
echo "$excelData";



?>