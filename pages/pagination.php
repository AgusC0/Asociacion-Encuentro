<?php
	include("conn.php");
	
	// Verificar si hay categoría en la URL
	$categoria = "";
	if(isset($_GET['categoria']) && $_GET['categoria'] != ""){
		$categoria = mysqli_real_escape_string($conn, $_GET['categoria']);
		$query = mysqli_query($conn,"SELECT COUNT(*) FROM `noticias` WHERE categoriaNoticia = '$categoria'");
	} else {
		$query = mysqli_query($conn,"SELECT COUNT(*) FROM `noticias`");
	}

	$row = mysqli_fetch_row($query);
	$rows = $row[0];
	
	$page_rows = 5;
	$last = ceil($rows/$page_rows);

	if($last < 1){
		$last = 1;
	}

	$pagenum = 1;

	if(isset($_GET['pn'])){
		$pagenum = preg_replace('#[^0-9]#', '', $_GET['pn']);
	}

	if ($pagenum < 1) { 
		$pagenum = 1; 
	} else if ($pagenum > $last) { 
		$pagenum = $last; 
	}

	$limit = 'LIMIT ' .($pagenum - 1) * $page_rows .',' .$page_rows;

	// Consulta principal
	if($categoria != ""){
		$nquery = mysqli_query($conn,"SELECT * FROM `noticias` WHERE categoriaNoticia = '$categoria' ORDER BY id DESC $limit");
	} else {
		$nquery = mysqli_query($conn,"SELECT * FROM `noticias` ORDER BY id DESC $limit");
	}

	// Controles de paginación
	$paginationCtrls = '';

	if($last != 1){
		
		if ($pagenum > 1) {
			$previous = $pagenum - 1;
			$paginationCtrls .= '<a href="'.$_SERVER['PHP_SELF'].'?pn='.$previous.($categoria ? '&categoria='.$categoria : '').'" class="btn btn-success"><i class="fa-solid fa-arrow-left"></i></a> &nbsp; &nbsp; ';
			
			for($i = $pagenum-4; $i < $pagenum; $i++){
				if($i > 0){
					$paginationCtrls .= '<a href="'.$_SERVER['PHP_SELF'].'?pn='.$i.($categoria ? '&categoria='.$categoria : '').'" class="btn btn-outline-success">'.$i.'</a> &nbsp; ';
				}
			}
		}
		
		$paginationCtrls .= ''.$pagenum.' &nbsp; ';
		
		for($i = $pagenum+1; $i <= $last; $i++){
			$paginationCtrls .= '<a href="'.$_SERVER['PHP_SELF'].'?pn='.$i.($categoria ? '&categoria='.$categoria : '').'" class="btn btn-outline-success">'.$i.'</a> &nbsp; ';
			if($i >= $pagenum+4){
				break;
			}
		}

		if ($pagenum != $last) {
			$next = $pagenum + 1;
			$paginationCtrls .= ' &nbsp;  <a href="'.$_SERVER['PHP_SELF'].'?pn='.$next.($categoria ? '&categoria='.$categoria : '').'" class="btn btn-success"><i class="fa-solid fa-arrow-right"></i></a> ';
		}
	}
?>
