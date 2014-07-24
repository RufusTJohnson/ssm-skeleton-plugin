<?php
/**
 * Plugin Support Class
 *
 * @package __PACKAGENAME
 * @since 1.0
 */
class __CLASSNAMEPREFIX_Support extends __CLASSNAMEPREFIX_Base_Support{

	private static $class_name 	= "__CLASSNAMEPREFIX_Support";
	private static $initiated 		= false;
	
	/**
	 * Initializes WordPress hooks
	 */
	public static function init() {
		if ( ! self::$initiated ) 
		{
			self::init_hooks();
		}
	}

	/**
	* Initializes WordPress hooks
	*/
	private static function init_hooks() {
		self::$initiated = true;
	}


	// return a comma-separated list of role names for the given user
	public static function get_user_roles( $user_id ) {
		$roles = false;

		if ( !class_exists('WP_User') )
			return false;

		if ( $user_id > 0 ) {
			$comment_user = new WP_User( $user_id );
			if ( isset( $comment_user->roles ) )
				$roles = join( ',', $comment_user->roles );
		}

		if ( is_multisite() && is_super_admin( $user_id ) ) {
			if ( empty( $roles ) ) {
				$roles = 'super_admin';
			} else {
				$comment_user->roles[] = 'super_admin';
				$roles = join( ',', $comment_user->roles );
			}
		}

		return $roles;
	}


	public static function _cmp_time( $a, $b ) {
		return $a['time'] > $b['time'] ? -1 : 1;
	}

	public static function _get_microtime() {
		$mtime = explode( ' ', microtime() );
		return $mtime[1] + $mtime[0];
	}



	/**
	 * Some commentmeta isn't useful in an export file. Suppress it (when supported).
	 *
	 * @param bool $exclude
	 * @param string $key The meta key
	 * @param object $meta The meta object
	 * @return bool Whether to exclude this meta entry from the export.
	 */

}
?>