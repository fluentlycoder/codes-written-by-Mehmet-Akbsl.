<?php


 
 
//Defining class template
 
class Template {
	//Path to template
    protected $template;
    //Variables passed in
    protected $vars = array();
 
    
	
	
    // Class Constructor 
     public function __construct($template){
        $this->template = $template;
    }
 
    
    // Get template variables   // Reading the data
    public function __get($key){
        return $this->vars[$key];
    }
 
    
    // Set template variables  // set is gonna be run when running data into  inaccessible properties like the protected templates  etc.
     
    public function __set($key, $value){
        $this->vars[$key] = $value;
    }
    
    
    // Convert Object To String // echo out a template
    
   public function __toString(){
    	extract($this->vars);
    	chdir(dirname($this->template));
    	ob_start();
    
    	include basename($this->template);
    
    	return ob_get_clean();
    }

}