<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

 if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/**
 * custom loader file extends CI_Loader
 */
 
class MY_Loader extends CI_Loader {
    public function template($template_name, $vars = array(), $return = FALSE)
    {
       
        $content  = $this->view('header', $vars, $return); // header
        $content .= $this->view($template_name, $vars, $return); // view
        $content .= $this->view('footer', $vars, $return); // footer

        if ($return)
        {
            return $content;
        }
    }
    
    public function template_admin($template_name, $vars = array(), $return = FALSE)
    {
       
        $content  = $this->view('admin/header', $vars, $return); // header
        $content .= $this->view($template_name, $vars, $return); // view
        $content .= $this->view('admin/footer', $vars, $return); // footer

        if ($return)
        {
            return $content;
        }
    }
    
    
}