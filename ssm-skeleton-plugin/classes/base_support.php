<?php

class __CLASSNAMEPREFIX_Base_Support {

	const SOME_CONST = 'BLAH BLAH';
	
	/**
	 * The $plugin object contains basic information that support objects can access.  For example the directory of the plugin is 
	 * $this->plugin->dir.
	 */
	public $plugin;

	/**
	 * The $plugin object contains basic information that support objects can access.  For example the directory of the plugin is 
	 * $this->plugin->dir.
	 */	private $initiated 	= false;
	
	/**
	 * Constructor.
	 */
	public function __construct($plugin) {
		$this->plugin = $plugin;
	}
	
	/**
	 * Logs anything the author of this plugin wants to log. Puts it into logfile.txt
	 * located in the "log" subdirectory below the main directory for this plugin directory.
	 *
	 * @since 1.0
	 *
	 * @param string $message
	 */
	public function log($message) 
	{
		$file 	= $this->plugin->dir."log/logfile.txt";
		$file 	= "C:\wamp\www\wp\wp-content\plugins\ssm-skeleton-plugin\log\logfile.txt";
		$file 	= "C:/wamp/www/wp/wp-content/plugins/ssm-skeleton-plugin/log/logfile.txt";
		file_put_contents($file, $message, FILE_APPEND | LOCK_EX);
	}
	
	public function get_ip_address() {
		return isset( $_SERVER['REMOTE_ADDR'] ) ? $_SERVER['REMOTE_ADDR'] : null;
	}
	

	private function get_user_agent() {
		return isset( $_SERVER['HTTP_USER_AGENT'] ) ? $_SERVER['HTTP_USER_AGENT'] : null;
	}

	private function get_referer() {
		return isset( $_SERVER['HTTP_REFERER'] ) ? $_SERVER['HTTP_REFERER'] : null;
	}


}

?>