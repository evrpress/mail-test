<?php
/**
 * Class MailTest
 *
 * @package Mail_Test
 */

/**
 * Sample test case.
 */
class MailTest extends WP_UnitTestCase {

	/**
	 * A single example test.
	 */
	public function test_mail() {
		// Replace this with some actual testing code.

		$to          = 'dummy@example.com';
		$subject     = 'This is a Test 2';
		$message     = 'This is the body text of the text message';
		$headers     = '';
		$attachments = array();

		$success = wp_mail( $to, $subject, $message, $headers, $attachments );
		
		$this->assertTrue( $success );

		// this must return an array on success and a WP_Error on failure. 

		$response = wp_remote_get('http://localhost:1080/api/messages/');

		$this->assertIsArray($response, '$response is not an array');

	}

	public function test_fails() {

		$this->assertTrue( false );

	}
}
