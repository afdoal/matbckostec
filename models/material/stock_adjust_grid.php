<?php
require_once "../abspath.php";
require_once "pdocon.php";
require_once "function.php";

$req = $_REQUEST["req"];

if ($req=='menu') {	
	$pilcari = $_REQUEST["pilcari"];
	$txtcari = $_REQUEST["txtcari"];
	$q = "SELECT *,DATE_FORMAT(opname_date,'%d/%m/%Y') AS opname_date
		  FROM mat_opnamehdr a
		  LEFT JOIN mat_warehouse b ON b.wh_id=a.wh_id 
		  WHERE mat_type='0' AND status='1' ";
	if ($txtcari != ""){		  
		if ($pilcari == "opname_date"){		  
			$q .= "AND $pilcari LIKE '%".dmys2ymd($txtcari)."%' ";	  
		} else {
			$q .= "AND $pilcari LIKE '%$txtcari%' ";	  
		}
	}
	$q .= "ORDER BY opname_date ASC";
} else if ($req=='list') {	
	$bln = $_REQUEST["bln"];
	$thn = $_REQUEST["thn"];
	$wh_id = $_REQUEST["wh_id"];
	$opname_date1=$thn."-".$bln."-01";
	$opname_date2=$thn."-".$bln."-".GetLastDayofMonth($thn, $bln);
	
	$q = "SELECT KdBarang AS KdBarang3,KdBarang AS KdBarang2, PartNo, NmBarang AS NmBarang2,HsNo AS HsNo2,Sat AS Sat2,FORMAT(qty, 2) AS qty, FORMAT(qty_bal, 2) AS qty_bal
		  FROM mat_opnamedet a 
		  LEFT JOIN mst_barang b ON KdBarang = mat_id 
		  LEFT JOIN mat_opnamehdr c ON c.opname_id=a.opname_id
		  WHERE c.mat_type='0' AND c.status='1' AND c.wh_id = '".$wh_id."' AND opname_date BETWEEN '$opname_date1' AND '$opname_date2' 
		  ORDER BY child_no ASC";
} else if ($req=='listrpt') {	
	$opname_id = $_REQUEST["opname_id"];
	$q = "SELECT KdBarang AS KdBarang3,KdBarang AS KdBarang2, PartNo, NmBarang AS NmBarang2,HsNo AS HsNo2,Sat AS Sat2,FORMAT(qty, 2) AS qty, FORMAT(qty_bal, 2) AS qty_bal, FORMAT(qty_diff, 2) AS qty_diff
		  FROM mat_opnamedet a 
		  LEFT JOIN mst_barang b ON KdBarang = mat_id 
		  WHERE opname_id='$opname_id' 
		  ORDER BY child_no ASC";
} else if ($req=='load') {
	$bln = $_REQUEST["bln"];
	$thn = $_REQUEST["thn"];
	$wh_id = $_REQUEST["wh_id"];
	$opname_date1=$thn."-".$bln."-01";
	$opname_date2=$thn."-".$bln."-".GetLastDayofMonth($thn, $bln);
	
	$q = "SELECT KdBarang AS KdBarang3,KdBarang AS KdBarang2, PartNo, NmBarang AS NmBarang2,HsNo AS HsNo2,Sat AS Sat2,FORMAT(qty, 2) AS qty,
		  (
		  (SELECT IF(SUM(qty)>0,SUM(qty),0) FROM mat_stockcard s WHERE date < '".$opname_date2."' AND s.mat_id = a.mat_id AND type IN ('B','I') AND wh_id = '".$wh_id."')
		  -
		  (SELECT IF(SUM(qty)>0,SUM(qty),0) FROM mkt_dodet da LEFT JOIN mkt_dohdr db ON db.do_id=da.do_id WHERE do_date <= '".$opname_date2."' AND da.fg_id = a.mat_id)
		  ) AS qty_bal
		  FROM mat_opnamedet a 
		  LEFT JOIN mst_barang b ON KdBarang = mat_id 
		  LEFT JOIN mat_opnamehdr c ON c.opname_id=a.opname_id
		  WHERE c.mat_type='0' AND c.wh_id = '".$wh_id."' AND opname_date BETWEEN '$opname_date1' AND '$opname_date2' 
		  ORDER BY child_no ASC";
}



$run=$pdo->query($q);	
$rs=$run->fetchAll(PDO::FETCH_ASSOC);
echo json_encode($rs);
?>