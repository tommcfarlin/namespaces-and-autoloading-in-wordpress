<?php
/**
 * The file writer is responsible for writing files to the disk.
 *
 * @package WCATL\File
 */

namespace WCATL\File;

/**
 * The file writer is responsible for writing files to the disk.
 *
 * This class is used purely as an example and will only display an administration
 * message once it has been instanatiated and initialized.
 *
 * It does not actually writer anything from the disk.
 *
 * @package WCATL\File
 */
class File_Writer {

	/**
	 * Initializes the plugin by registering the function responsible for displaying the
	 * message to the proper hook.
	 */
	public function init() {
		add_action( 'admin_notices', array( $this, 'display_loaded_message' ) );
	}

	/**
	 * Renders a santized administration notice.
	 */
	public function display_loaded_message() {

		$class   = 'notice notice-success is-dismissable';
		$message = 'The file writer has been successfully autoloaded.';

		printf(
			'<div class="%1$s"><p><strong>%2$s</strong>&nbsp;%3$s</p></div>',
			esc_attr( $class ),
			esc_html( 'Success!' ),
			esc_html( $message )
		);
	}

	/**
	 * A function defined just to demonstrate how this class might perform in production.
	 *
	 * @param mixed  $data     The data to write to a file.
	 * @param string $filename The filename to which the specified data will be written.
	 */
	public function write( $data, $filename ) {
		// Method implementation exlcuded as it's not part of the demo.
	}
}
