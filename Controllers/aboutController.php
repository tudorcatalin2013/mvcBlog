<?php
   
    class aboutController extends Controller
    {
        public function __construct(){
                new headerController;
				new menuController;
				
            	//if user registerd/logged in sees special message
	            $data_general=array("about"=>"Everything you want to know about me , you will find after loging in...");
	            $data=array("about"=>"Congratulations on creating an account and loging in . You will now benefit special offers");
	            
	           
	           if(isset($_SESSION["login"])){ 
	            	echo $this->render(VIEWS.'aboutView.php', $data);
	           }else {
	           		echo $this->render(VIEWS.'aboutView.php', $data_general);
	           }
	           
	           
                new footerController;
                            
        }
    }