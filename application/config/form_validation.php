<?php 



$config = [

		'login_form_validation'=>[

							[
							'field' => 'email',
							'label' => 'Email',
							'rules' => 'required|valid_email'
        
							],
							[
							
							'field' => 'password',
							'label' => 'password',
							'rules' => 'required'
        
							]

		]

];