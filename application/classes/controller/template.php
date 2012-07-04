<?php

	defined('SYSPATH') or die('No direct script access.');

    /**
     * @author  : Ralph Daniel Tapac
     * @name    : Controller_Template
     * @purpose : To Have An Abstract Class For Controllers
     *
     */


     Abstract class Controller_Template extends Controller
     {    		

		/**
		 * @var  string  page template
		 */
		protected $template;

		/**
		 * @var  boolean  auto render template
		 */

		protected $auto_render = TRUE;

		/**
		 * @var  array  json data
		 */
		protected $data = array();

		/**
		 * @var  object  session data
		 */
		protected $session;

		/**
		 * @var  array  variable config
		 */
		protected $config;

		/**
		 * @var  array  variable messages
		 */
		protected $messages;

		/**
		 * @var  string  variable styles
		 */
		protected $styles;
    

		/**
		 * @var  string  variable scripts
		 */
		protected $scripts;
	        

		/**
		 * Loads the template [View] object.
		 */

		public function before()
		{
			$this->config = Kohana::$config->load( 'main_config' );

			$this->session = Session :: instance();

			$this->data['success'] = FALSE;
			$this->data['message'] = '';

			// If AJAX Request, Do Not render Full Template ...
			$this->auto_render = Request::current()->is_ajax() ? FALSE : TRUE;

			if ( $this->auto_render === TRUE )
			{

                $this->template = ! empty( $this->template ) ? $this->template : $this->config['main_template'];
                // Load the template
                $this->template = View::factory( $this->template );		

			}

            View::set_global( 'config', $this->config );

            return parent::before();
		}

        protected function _do_json()
        {
            exit( json_encode( $this->data ) );
        }


        protected function _set_style( $style_file = '', $return = FALSE )
        {
        	if( $return )
        	{
        		return "<link rel='stylesheet' type='text/css' href='../{$this->config['theme']}css/{$style_file}' media='all'>";
        	}

            if( empty( $this->styles ) ) 
            {
                $this->styles = '';
            }

            if( is_array( $style_file ) ) 
            {
                foreach( $style_file as $style ) 
                {
                    $this->styles .= "<link rel='stylesheet' type='text/css' href='../{$this->config['theme']}css/{$style}' media='all'>";
                }
            } 
            else 
            {
                $this->styles .= "<link rel='stylesheet' type='text/css' href='../{$this->config['theme']}css/{$style_file}' media='all'>";
            }

        }


        protected function _set_script( $script_file = '', $return = FALSE ) 
        {

            if( $return ) 
            {
                return "<script type='text/javascript' src='../scripts/{$script_file}'></script>";
            }

            if( empty( $this->scripts ) ) 
            {
                $this->scripts = '';
            }
            
            if( is_array( $script_file ) ) 
            {
                foreach( $script_file as $script ) 
                {
                    $this->scripts .= strstr( $script, 'http' ) ? "<script type='text/javascript' src='{$script}'></script>" : "<script type='text/javascript' src='../scripts/{$script}'></script>";
                }
            } 
            else 
            {
                $this->scripts .= strstr( $script_file, 'http' ) ? "<script type='text/javascript' src='{$script_file}'></script>" : "<script type='text/javascript' src='../scripts/{$script_file}'></script>";
            }

        }

        protected function _set_javascript_messages( $file = '', $return_json = FALSE ) 
        {
            $messages = Kohana::message( $file );
            $this->template->javascript_messages = json_encode( $messages );
        }


		/**
		 * Assigns the template [View] as the request response.
		 */
		public function after() {

		    if ( $this->auto_render === TRUE ) 
		    {
		        $this->template->styles = $this->styles;
		        $this->template->scripts = $this->scripts;

		        $this->template->site_title = ! empty( $this->template->site_title ) ? $this->template->site_title : $this->config['site_title'];

		        $this->response->body( $this->template->render() );
		    }

		    return parent::after();
		}


     			
     }
