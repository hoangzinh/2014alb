<?php

class View {

	function __construct() {
            //echo 'this is the view';
	}

	public function render($name, $include = false)
	{
            if ($include == false) {
                    require 'views/' . $name . '.php';	                    
            }
            else {
                    require 'views/masterpage/'.$include.'.php';
                    require 'views/' . $name . '.php';
                    require 'views/masterpage/footer.php';	
            }
	}

}