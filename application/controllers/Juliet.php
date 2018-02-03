<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
 * Juliet controller
 * Service controller that returns JSON data
 */
class Juliet extends CI_Controller
{
    /**
     * Ctor
     */
	function __construct()
	{
		parent::__construct();
	}
	/**
     * Main operation
     * returns JSON data about the first quote record
	 */
	public function index()
	{
		$record = $this->quotes->get(1);
		header("Content-type: application/json");
		echo json_encode($record);
	}
}