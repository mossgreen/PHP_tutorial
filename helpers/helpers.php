<?php 
	function display_errors($errors){
		$display = '<ul class="bg-danger">';
		foreach ($error as $error) {
			$display .= '<li class="text-danger">'.$error.'</li>';
		}

		$display .= '</ul>';
		return $display;
	}
 ?>