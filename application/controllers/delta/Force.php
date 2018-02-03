<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Force extends Application
{

	function __construct()
	{
		parent::__construct();
	}

	/**
	 * Homepage for our app
	 */
	public function index()
	{

		// pass on the data to present, as the "authors" view parameter
		$this->show(4);
	}

}