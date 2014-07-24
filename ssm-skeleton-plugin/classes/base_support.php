<?php

class __CLASSNAMEPREFIX_Base_Support {

	const API_HOST = 'rest.akismet.com';
	const API_PORT = 80;
	const MAX_DELAY_BEFORE_MODERATION_EMAIL = 86400; // One day in seconds
	private static $class_name = "ssm_Skeleton_Admin_Support";
	
	public static $this_plugin_dir;
	
	/**
	* Logs anything the author of this plugin wants to log. Puts it into logfile.txt
	* located in the "log" subdirectory below the main directory for this plugin directory.
	*
	* @since 1.0
	*
	* @param string $message
	*/
	public static function log($message) 
	{
		$file 	= $this->this_plugin_dir."log/logfile.txt";
		file_put_contents($file, $message, FILE_APPEND | LOCK_EX);
	}
	
		public static function get_ip_address() {
		return isset( $_SERVER['REMOTE_ADDR'] ) ? $_SERVER['REMOTE_ADDR'] : null;
	}
	

	private static function get_user_agent() {
		return isset( $_SERVER['HTTP_USER_AGENT'] ) ? $_SERVER['HTTP_USER_AGENT'] : null;
	}

	private static function get_referer() {
		return isset( $_SERVER['HTTP_REFERER'] ) ? $_SERVER['HTTP_REFERER'] : null;
	}


}

?>