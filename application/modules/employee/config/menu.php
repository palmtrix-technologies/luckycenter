
   <?php

// module name
$HmvcMenu["employee"] = array(
    //set icon
    "icon"           => "<i class='fa fa-users'></i>", 
    
   
 "position" => array(
            "controller" => "Employees",
            "method"     => "create_position",
            "permission" => "create"
      
    ), 
    //group level name
    "direct_empl" => array(
   "add_employee" => array(
        //menu name
  
            "controller" => "Employees",
            "method"     => "viewEmhistory",
            "permission" => "create"
       
       
    ), 
  "manage_employee" => array(
        //menu name
  
            "controller" => "Employees",
            "method"     => "manageemployee",
            "permission" => "read"
       
       
    ), 
    
       
    ), 
    
   

     "emp_performance" => array(
        //menu name
       
          
            "controller" => "Employees",
            "method"     => "create_emp_performance",
            "permission" => "create"
        
    ),     

    "emp_document" => array(
        //menu name
       
          
            "controller" => "Employees",
            "method"     => "update_emp_document",
            "permission" => "read"
        
    ),   
    
    "view_emp_document_expiry" => array(
      //menu name
     
        
          "controller" => "Employees",
          "method"     => "view_emp_document_expiry",
          "permission" => "read"
      
    ),   

);

 