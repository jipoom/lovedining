<?php 

return array( 
	
	/*
	|--------------------------------------------------------------------------
	| oAuth Config
	|--------------------------------------------------------------------------
	*/

	/**
	 * Storage
	 */
	'storage' => 'Session', 

	/**
	 * Consumers
	 */
	'consumers' => array(

		/**
		 * Facebook
		 */
        'Facebook' => array(
            'client_id'     => '566302246824631',
            'client_secret' => 'd09cd2de0c9d3605c3422b5f2b3420fd',
            'scope'         => array('email','read_friendlists','user_online_presence'),
        ),		

	)

);