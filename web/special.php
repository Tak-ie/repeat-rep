<?php


    if(array_key_exists('sp',$_GET));
        $act = $_GET['sp'];
        $user = new User();
        $values = $user->selectProperties('special', $_GET['sp']);
    
    
        var_dump($_GET);
        
        if(array_key_exists('steak', $_POST)){
        

            $data = [
               'name' => $_POST['sp']['name'],
                'title' => $_POST['sp']['title'],
                'price' => $_POST['sp']['price'],
                'image' => $_POST['sp']['image'],
                'description' => $_POST['sp']['description'],
            ];
                //var_dump($data);
            // $errors = UserValidator::validate($obj);
             
            if(empty($errors)){
                
                $obj = new Product();
                $obj->setParam($data);
    
               $user =new User();
               $values = $user->selectProperties($data);
            }
        }
        else if(array_key_exists('stew', $_POST)){
    
            $data = [
                'name' => $_POST['sp']['name'],
                'title' => $_POST['sp']['title'],
                'price' => $_POST['sp']['price'],
                'image' => $_POST['sp']['image'],
                'description' => $_POST['sp']['description'],
            ];
    
            // $errors = UserValidator::validate($obj);
             
            if(empty($errors)){
    
               $user =new User();
               $values = $user->selectProperties();
    
            }
        }
        else if( array_key_exists('vegies', $_POST)){
    
            $data = ['name' =>$_POST['sp']['name'],
                'title' =>$_POST ['sp']['title'],
                'price' => $_POST['sp']['price'],
                'image' =>$_POST ['sp']['image'],
                'description' =>$_POST['sp']['description'],
            ];
    
            //$errors = UserValidator::validate($obj);
             
            if(empty($errors)){
                
               $user =new User();
                $values = $user->selectProperties();
                
                
            }
        }
    