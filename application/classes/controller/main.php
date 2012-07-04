<?php


	class Controller_Main extends Controller_Frontend
	{

		public function before()
		{
			parent::before();

            if( Request::current()->is_ajax() == FALSE )
            {
				$this->template->header_block = View::factory('layout/header_block')
												->set( 'header_title' , 'Sample Photo Demo' );
	            $this->template->body = View::factory( 'body/interface' );
        	}
		}

		public function action_index()
		{

			$string_image = $this->_get_image( 1 );
            $this->template->body = View::factory( 'body/interface' )->set('image_source', URL::base().'upload/'.$string_image);

		}


		/**
		 * Perform ajax request
		 */
		public function action_ajax()
		{		
			$string_command = $_POST['command'];

			if( $string_command == 'get_image' )
			{
				$string_image = $this->_get_image( 1 );				
				$this->data['success'] = true;
				$this->data['return_data'] = URL::base().'upload/'.$string_image;
			}
			
			$this->_do_json();
			exit();
		}


		/**
		 * Upload image and save image details in the datbase
		 */
		public function action_upload()
		{

			$string_directory = Upload::$default_directory;

			//get file extension
			$string_orig_filename = strtolower( $_FILES['file-image']['name'] ); 
			$array_extension_split = explode( ".", $string_orig_filename ); 
			$integer_ext_index = count( $array_extension_split ) - 1; 
			$string_extension = $array_extension_split[ $integer_ext_index ]; 

			$string_filename = 'current_image.'.$string_extension;

			//save image
			Upload::save( $_FILES['file-image'], $string_filename  );
			$string_file = realpath($string_directory).'\\'.$string_filename;

			//resize image
			$object_image = Image::factory( $string_file );
			$object_image->resize( 500 )->save();

			//save image details to database
			$array_image_maindata = array( 	'image' 	=> $string_filename,
											'width' 	=> $object_image->width,
											'height' 	=> $object_image->height,
											'ext'		=> $string_extension
										);

			$this->_save_image_data( $array_image_maindata, 1 );

			$this->request->redirect( 'main/index' );

			exit();
		}


		/**
		 * Function responsible for saving the image data
		 */
		private function _save_image_data( $array_image_data, $integer_key = NULL )
		{

			$new_image = ORM::factory( 'image', $integer_key );
			$new_image->values( $array_image_data )->save();

		}

		/**
		 * Function responsible for retrieving the image data
		 */
		private function _get_image( $integer_image_id )
		{
			$images = ORM::factory( 'image', $integer_image_id );
			return $images->image;
		}

		public function after()
		{
			parent::after();
		}



	}


?>