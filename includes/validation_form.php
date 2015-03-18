<?php 

	function has_presence($value){
		return isset($value) && $value !== "";
	}

	function has_max_length($value, $max){
		return strlen($value) <= $max;
	}

	function has_inclusion_in($value, $set){
		return in_array($value, $isset);
	}

	function validate_max_lengths($fields_with_max_lengths){
		global $errors;
		foreach($fields_with_max_lengths as $field => $max){
			$value = trim($_POST[$field]);
			if (!has_max_length($value, $max)){
				$errors[$field] = ucfirst($field) . " is too long";
			}
		}
	}

	function form_errors($errors=array()){
		$output = "";
		if (!empty($errors)){
			$output .= "<div class=\"error\">";
			$output .= "Please fix the following errors:";
			$output .= "<ul>";
			foreach ($errors as $key => $error) {
				$output .= "<li>{$error}</li>";
			}	
			$output .= "</ul>";
			$output .= "</div>";
		}
		return $output;
	}
?>