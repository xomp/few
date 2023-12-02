<?php

class View {

	public static function render($view, $data = null) {
		if($data) extract($data);
		include_once(VIEW_PATH . $view . '.php');
	}

}