<?php
$config = [

              'signup' => [
              
                                    [
                                            'field' => 'name',
                                            'label' => 'Name',
                                            'rules' => 'trim|required',
                                            "errors" => 
                                            [
                                                'required' => ' %s Cannot be Blank.',  
                                            ],
                                        ],
                                    
                                    [
                                        'field' => 'mobile',
                                        'label' => 'Mobile',
                                        'rules' => 'trim|required|is_unique[users.mobile]|exact_length[10]|numeric',
                                        "errors" => 
                                        [
                                            'required' => ' %s Cannot be Blank.', 
                                            'exact_length' => 'Mobile Number Should Be 10 Digit',
                                            'is_unique'=> 'Mobile Number Already Registed',
                                        ],
                                     ],

                                    [
                                        'field' => 'email',
                                        'label' => 'Email',
                                        'rules' => 'trim|required|is_unique[users.email]|valid_emails',
                                        "errors" => 
                                        [
                                            'required' => ' %s Cannot be Blank.', 
                                            'is_unique'=> 'This %s Already Registed',
                                        ],
                                    ] ,

                                    [
                                        'field' => 'password',
                                        'label' => 'Password',
                                        'rules' => 'required',
                                        "errors" => 
                                        [
                                            'required' => ' %s Cannot be Blank.', 
                                           
                                            
                                        ],
                                    ] ,


                                    [
                                        'field' => 'conpassword',
                                        'label' => 'Confirm Password',
                                        'rules' => 'required',
                                        "errors" => 
                                        [
                                            'required' => ' %s Cannot be Blank.', 
                                           
                                            
                                        ],
                                    ] 
                                    ],


                                    'checkout' => [
              
                                        [
                                                'field' => 'name',
                                                'label' => 'Name',
                                                'rules' => 'trim|required',
                                                "errors" => 
                                                [
                                                    'required' => ' %s Cannot be Blank.',  
                                                ],
                                            ],

                                            [
                                                'field' => 'city',
                                                'label' => 'City',
                                                'rules' => 'trim|required',
                                                "errors" => 
                                                [
                                                    'required' => ' %s Cannot be Blank.',  
                                                ],
                                            ],

                                            [
                                                'field' => 'streetaddress',
                                                'label' => 'Street Address',
                                                'rules' => 'trim|required',
                                                "errors" => 
                                                [
                                                    'required' => ' %s Cannot be Blank.',  
                                                ],
                                            ],

                                            [
                                                'field' => 'postcode',
                                                'label' => 'Postel Code',
                                                'rules' => 'trim|required',
                                                "errors" => 
                                                [
                                                    'required' => ' %s Cannot be Blank.',  
                                                ],
                                            ],
                                        
                                        [
                                            'field' => 'mobile',
                                            'label' => 'Mobile',
                                            'rules' => 'trim|required|is_unique[users.mobile]|exact_length[10]|numeric',
                                            "errors" => 
                                            [
                                                'required' => ' %s Cannot be Blank.', 
                                                'exact_length' => 'Mobile Number Should Be 10 Digit',
                                                'is_unique'=> 'Mobile Number Already Registerd',
                                            ],
                                         ],
    
                                        [
                                            'field' => 'email',
                                            'label' => 'Email',
                                            'rules' => 'trim|required|is_unique[users.email]|valid_emails',
                                            "errors" => 
                                            [
                                                'required' => ' %s Cannot be Blank.', 
                                                'is_unique'=> 'This %s Already Registerd',
                                            ],
                                        ] ,
    
                                        [
                                            'field' => 'password',
                                            'label' => 'Password',
                                            'rules' => 'required',
                                            "errors" => 
                                            [
                                                'required' => ' %s Cannot be Blank.', 
                                               
                                                
                                            ],
                                        ]  
                                ]
           ];
           
            ?>
            