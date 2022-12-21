<?php

	include("config.php");

	
	$query=mysqli_query($conn,"select count(id) from `products`");

	$row = mysqli_fetch_row($query);

	$rows = $row[0];
	
	$rreshta_per_faqe = 1;

	$last = ceil($rows/$rreshta_per_faqe);

	if($last < 1){
		$last = 1;
	}

	$num_faqeve = 1;

	if(isset($_GET['pn'])){
		$num_faqeve = preg_replace('#[^0-9]#', '', $_GET['pn']);
	}

	if ($num_faqeve < 1) { 
		$num_faqeve = 1; 
	} 
	else if ($num_faqeve > $last) { 
		$num_faqeve = $last; 
	}

	$limit = 'LIMIT ' .($num_faqeve - 1) * $rreshta_per_faqe .',' .$rreshta_per_faqe;
	
	$nquery=mysqli_query($conn,"select * from `products` $limit");

	$paginationCtrls = '';

	if($last != 1){
		
	if ($num_faqeve > 1) {
        $kthehu = $num_faqeve - 1;
		$paginationCtrls .= '<a href="'.$_SERVER['PHP_SELF'].'?pn='.$kthehu.'" class="btn btn-default">kthehu</a> &nbsp; &nbsp; ';
		
		for($i = $num_faqeve-4; $i < $num_faqeve; $i++){
			if($i > 0){
		        $paginationCtrls .= '<a href="'.$_SERVER['PHP_SELF'].'?pn='.$i.'" class="btn btn-default">'.$i.'</a> &nbsp; ';
			}
	    }
    }
	
	$paginationCtrls .= ''.$num_faqeve.' &nbsp; ';
	
	for($i = $num_faqeve+1; $i <= $last; $i++){
		$paginationCtrls .= '<a href="'.$_SERVER['PHP_SELF'].'?pn='.$i.'" class="btn btn-default">'.$i.'</a> &nbsp; ';
		if($i >= $num_faqeve+2){
			break;
		}
	}

    if ($num_faqeve != $last) {
        $tjetra = $num_faqeve + 1;
        $paginationCtrls .= ' &nbsp; &nbsp; <a href="'.$_SERVER['PHP_SELF'].'?pn='.$tjetra.'" class="btn btn-default">tjetra</a> ';
    }
	}

?>