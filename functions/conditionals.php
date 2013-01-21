<?php
	
	// Plugin Active Check
	// if (plugin_is_active('pluginDirectory/pluginFile.php')) { }
	
	function plugin_is_active($plugin_path) {
		$return_var = in_array( $plugin_path, 	
		apply_filters( 'active_plugins', get_option( 'active_plugins' ) ) );
		return $return_var;
	}
	
	
	
	// If is Ajax Request

	function is_ajax_request() 
	{
		if ( isset($_SERVER['HTTP_X_REQUESTED_WITH']) && !empty($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest' )
			{
		       return true;
		    }
	
		else 
			{
				return false;
			}
	}
	
	
	// If is Mobile Device
	
	function is_mobile()
	{
		$user_agent = isset($_SERVER['HTTP_USER_AGENT'])?$_SERVER['HTTP_USER_AGENT']:'';
		if ( FALSE !== stripos($user_agent,'safari') && FALSE !== stripos($user_agent,'mobile') && FALSE == stripos($user_agent,'ipad') )
		{
			return true;
		}
		return false;
	}
	
?>