<?php

/**
 * Quotations of legendry engineer Mr. M
 */
class Kushimoto_CLI extends WP_CLI_Command {

	private $fields = array(
		'No.',
		'Quotation',
	);

	public function say( $args, $assoc_args ) {
		/**
		 * @var  Hello_Kushimoto_Random_Speaker
		 */
		$speaker = apply_filters( 'hello_kushimoto_speaker', new Miyasan() );

		$chosen = $speaker->say();
		WP_CLI::line( $chosen );

	}


	/**
	 * Show list of Quotations
	 *
	 * @subcommand list
	 */
	public function list_( $args, $assoc_args ) {

		/**
		 * @var Hello_Kushimoto_Random_Speaker
		 */
		$speaker = apply_filters( 'hello_kushimoto_speaker', new Miyasan() );
		$words   = $speaker->get_words();
		foreach ( $words as $key => $v ) {
			$words[ $key ] = array(
					'No.'   => $key,
					'Quotation' => $v,
			);
		}

		$formatter = new \WP_CLI\Formatter( $assoc_args, $this->fields );
		$formatter->display_items( $words );

	}


}

WP_CLI::add_command( 'kushimoto', 'Kushimoto_CLI' );


