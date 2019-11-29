<?php
$config = [

              'category' => [
              
                                    [
                                            'field' => 'cat_name',
                                            'label' => 'Category Name',
                                            'rules' => 'trim|required',
                                            "errors" => [
                                                'required' => ' %s Can Not be Blank.',
                                               
                                            ],
                                    ]
                                
                            ],


           'subcategory' => [
              
                                [
                                        'field' => 'sub_category_name',
                                        'label' => 'Sub Category',
                                        'rules' => 'required',
                                        "errors" => [
                                            'required' => ' %s Can Not be Blank.',
                                        ],
                                ],



                                [
                                        'field' => 'cat_id',
                                        'label' => 'Category',
                                        'rules' => 'required',
                                        "errors" => [
                                            'required' => ' Please Select %s .',
                                        ],
                                ]
                            
                 ],


                 'brand' => [
              
                        [
                                'field' => 'brand',
                                'label' => 'Brand Name',
                                'rules' => 'required',
                                "errors" => [
                                    'required' => ' %s Can Not be Blank.',
                                ],
                        ]

                        
                    
                        ],


        'attribute' => [
              
                                [
                                        'field' => 'attribute',
                                        'label' => 'Attribute Name',
                                        'rules' => 'required',
                                        "errors" => [
                                            'required' => ' %s Can Not be Blank.',
                                        ],
                                ]
        
                                ],


                         'attribute_value' => [
              
                                [
                                        'field' => 'value_name',
                                        'label' => 'Value',
                                        'rules' => 'required',
                                        "errors" => [
                                            'required' => ' %s Can Not be Blank.',
                                        ],
                                ]
        
                         ],

                        
            'product' => [
              
                                [
                                        'field' => 'cat_id',
                                        'label' => 'Category Name',
                                        'rules' => 'required',
                                        "errors" => [
                                            'required' => 'Please select %s.',
                                        ],
                                ],

                                [
                                        'field' => 'subcat_id',
                                        'label' => 'Sub Category',
                                        'rules' => 'required',
                                        "errors" => [
                                            'required' => 'Please select %s .',
                                        ],
                                ],

                                [
                                        'field' => 'brand_id',
                                        'label' => 'Brand Name',
                                        'rules' => 'required',
                                        "errors" => [
                                            'required' => 'Please select  %s .',
                                        ],
                                ],

                                [
                                        'field' => 'description',
                                        'label' => 'Product Description',
                                        'rules' => 'required',
                                        "errors" => [
                                            'required' => ' %s Can Not be Blank.',
                                        ],
                                ],

                                [
                                        'field' => 'product',
                                        'label' => 'Product Name',
                                        'rules' => 'required',
                                        "errors" => [
                                            'required' => 'Enter  %s .',
                                        ],
                                ]
                            
                         ],


                         'pin' => [
              
                                [
                                        'field' => 'pin',
                                        'label' => 'Pin Code',
                                        'rules' => 'required',
                                        "errors" => [
                                            'required' => ' %s Can Not be Blank.',
                                        ],
                                ]
        
                                ],

                       'userdata' => [
              
                        [
                                'field' => 'userfile',
                                'label' => 'File',
                                'rules' => 'required',
                                "errors" => [
                                    'required' => 'Please Select %s .',
                                ],
                        ]

                        ],

                        'place' => 
                        [
                                [
                                        'field' => 'type',
                                        'label' => 'Location type',
                                        'rules' => 'required',
                                        "errors" =>
                                         [
                                            'required' => 'Please Select %s .',
                                        ],
                                ],


                                [
                                        'field' => 'placename',
                                        'label' => 'Place name',
                                        'rules' => 'required',
                                        "errors" =>
                                         [
                                            'required' => 'Please enter %s .',
                                        ],
                                ]
                                ],

                                'productadd' => [
              
                                        [
                                                'field' => 'product',
                                                'label' => 'Product',
                                                'rules' => 'trim|required',
                                                "errors" =>
                                                 [
                                                    'required' => ' %s Can Not be Blank.',
                                                ],
                                        ]
                                    
                                ],

           ];
           
            ?>
            