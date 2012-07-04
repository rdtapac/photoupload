<?php

    class Controller_Frontend extends Controller_Template {
        
        public function before() 
        {
            parent::before();

            if( Request::current()->is_ajax() == FALSE )
            {
                $this->_set_default_blocks();
                $this->_set_public_style_and_scripts();
            }

        }
        
        protected function _set_default_blocks() 
        {
            $this->template->header_block       = View::factory( 'layout/header_block' );
            $this->template->submenu_block      = View::factory( 'layout/submenu_block' );
            $this->template->footer_block       = View::factory( 'layout/footer_block' );
        }
        
        private function _set_public_style_and_scripts() 
        {

            $this->_set_style(
                array(
                    'bootstrap.css',
                    'bootstrap-responsive.css',
                    'jquery.tag.css',
                    'jquery-ui.custom.css',
                    'style.css'
                )
            );
            
            $this->_set_script(
                array(
                    'jquery.js',
                    'jquery.functions.js',
                    'jquery.modal.js',
                    'jquery.main.js',
                    //'jquery.tag.min.js',
                    'jquery.tag.js',
                    'jquery-ui-1.8.21.custom.min.js',
                    'bootstrap/bootstrap-transition.js',
                    'bootstrap/bootstrap-alert.js',
                    'bootstrap/bootstrap-modal.js',
                    'bootstrap/bootstrap-dropdown.js',
                    'bootstrap/bootstrap-scrollspy.js',
                    'bootstrap/bootstrap-tab.js',
                    'bootstrap/bootstrap-tooltip.js',
                    'bootstrap/bootstrap-popover.js',
                    'bootstrap/bootstrap-button.js',
                    'bootstrap/bootstrap-collapse.js',
                    'bootstrap/bootstrap-carousel.js',
                    'bootstrap/bootstrap-typeahead.js',
                )//
            );
        }
        
        public function after() {
            $this->_set_javascript_messages( 'public_messages' );
            parent::after();
        }
        
    }