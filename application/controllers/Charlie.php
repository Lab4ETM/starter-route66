<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Charlie extends Application
{

	function __construct()
	{
		parent::__construct();
	}

	/**
	 * Homepage for our app
	 */
	public function brown()
	{

		// pass on the data to present, as the "authors" view parameter
		$this->show(3);
	}

}