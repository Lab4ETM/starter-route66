<?php
defined('BASEPATH') or exit('No direct script access allowed');
/**
 *    India controller
 */
class India extends CI_Controller
{
    /**
     * Ctor
     */
    public function __construct()
    {
        parent::__construct();
    }
    /**
     *  India index
     */
    public function index()
    {
        // source destination of the image
        $source = '../data/popeye.png';
        // note that we could have referenced an image anywhere on our system

        // set the mime type for that image (jpeg, png, etc)
        header("Content-type: image/png");
        header('Content-Disposition: inline');
        readfile($source); // dish it
  }
}
?>