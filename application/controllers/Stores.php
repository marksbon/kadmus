<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Stores extends CI_Controller {
    
  /************************************ Constructor ******************************/
  	/*******************************
  		    Stores Index 
  	*******************************/
  	public function index() 
    {
  		# Permission Check
      if ( isset($_SESSION['username']) )
      {
        if( in_array('New Stock',$_SESSION['rows_exploded']) ) 
        {
        	# Redirect to Manage Stock
      		redirect('Stores/Manage_Stock');
        }
        else
        {
          # Redirect to Dashboard
          redirect('Dashboard');
        }
      }
      else
      {
        # Redirect to Access
        redirect('Access');
      }
  	}
    
	/***************************************	Interfaces 	***********************************/
    /***************************************
			   New Stock - Check 
    ***************************************/
    public function New_Stock() 
    {
		  # Permission Check
		  if ( isset($_SESSION['username']) )
      {
        if(in_array('Stock-Intake',$_SESSION['rows_exploded'])) 
        {
          # Loading models...
          $this->load->model('Model_Access'); /*Needed By header, nav*/
          $this->load->model('Universal_Retrieval');
          
          # Loading Functions
          $data['suppliers_info']     = $this->Universal_Retrieval->All_Info('product_suppliers');
          $data['category_info']      = $this->Universal_Retrieval->All_Info('product_category');
          $data['Description_info']   = $this->Universal_Retrieval->All_Info('product_desc');
          $data['item_names']         = $this->Universal_Retrieval->All_Info('product_desc');
          
          //$id_unexploded              = $this->Universal_Retrieval->GenerateID('product_category','cat_id');
          //$id_unexploded              = $this->Universal_Retrieval->GenerateID('product_desc','desc_id');
            
          #################### Generating New Category ID ####################
          if(!empty($id_unexploded)) 
          {
            foreach ($id_unexploded as $ret_id) 
            {
            	$id_exploded = explode('/', $ret_id);
            }
            
            (($id_exploded[2] == NULL) ? $id_exploded[2] = 1 : $id_exploded[2]+=1 );

            if( $id_exploded[2] < 10)
            	$data['cat_id'] = "KAD/CAT/00".$id_exploded[2];
            elseif( $id_exploded[2] < 99)
            	$data['cat_id'] = "KAD/CAT/0".$id_exploded[2];
            elseif( $id_exploded[2] >= 100)
            	$data['cat_id'] = "KAD/CAT/".$id_exploded[2];
          } 
          else
            $data['cat_id'] = "KAD/CAT/001";
          #################### Generating New Desecription(ProductType) ID ####################
          if(!empty($id_unexploded)) 
          {
            foreach ($id_unexploded as $ret_id) 
            {
            	# code...
            	$id_exploded = explode('/', $ret_id);
            }
            
            (($id_exploded[2] == NULL) ? $id_exploded[2] = 1 : $id_exploded[2]+=1 );

            if( $id_exploded[2] < 10)
            	$data['desc_id'] = "KAD/DESC/00".$id_exploded[2];
            elseif( $id_exploded[2] < 99)
            	$data['desc_id'] = "KAD/DESC/0".$id_exploded[2];
            elseif( $id_exploded[2] >= 100)
            	$data['desc_id'] = "KAD/DESC/".$id_exploded[2];
          } 
          else
            $data['desc_id'] = "KAD/DESC/001";

          /********** Interface ***********************/    
          $headertag['title'] = "New Stock";
          $this->load->view('headtag',$headertag);
          $this->load->view('header');
          $this->load->view('nav');
          $this->load->view('stores/new_stock',$data);
          $this->load->view('footer');
          /********** Interface ***********************/
		    } 
        else 
        {
          # No Permission
          $_SESSION['error'] = "Permission Denied. Contact Administrator";
          redirect('Dashboard');
		    }
      }
      else
      {
        # redirect to Dashboard
        redirect('Dashboard');
      }
    }
    /***********************************************
      Purchase order
    ************************************************/
    public function Purchase_Order() 
    {
      if(isset($_SESSION['username']))
      {
        if(in_array('Process Requests',$_SESSION['rows_exploded'])) 
        {
          # Loading models...
          $this->load->model('Model_Access'); /*Needed By header, nav*/
          $this->load->model('Universal_Retrieval');
              
          /********** Interface ***********************/    
          $headertag['title'] = "Purchase Order";
          $this->load->view('headtag',$headertag);
          $this->load->view('header');
          $this->load->view('nav');
          $this->load->view('stores/purchaseorder');
          $this->load->view('footer');
          /********** Interface ***********************/
        } 
        else 
        {
          $this->session->set_flashdata('error',"Permission Denied. Contact Administrator");
          redirect('Dashboard');
        }
      }
      else
      {
        redirect('Access');
      }
    }

     /***********************************************
     Sallsorder order
    ************************************************/
    public function SalesOrder() 
    {
      if(isset($_SESSION['username']))
      {
        if(in_array('Process Requests',$_SESSION['rows_exploded'])) 
        {
          # Loading models...
          $this->load->model('Model_Access'); /*Needed By header, nav*/
          $this->load->model('Universal_Retrieval');
              
          /********** Interface ***********************/    
          $headertag['title'] = "Purchase Order";
          $this->load->view('headtag',$headertag);
          $this->load->view('header');
          $this->load->view('nav');
          $this->load->view('stores/sallsorder');
          $this->load->view('footer');
          /********** Interface ***********************/
        } 
        else 
        {
          $this->session->set_flashdata('error',"Permission Denied. Contact Administrator");
          redirect('Dashboard');
        }
      }
      else
      {
        redirect('Access');
      }
    }

    /****************************************
	       Manage Stock
    *****************************************/
    public function Manage_Stock() 
    {
  		# Permission Check
  		if ( isset($_SESSION['username']) )
      {
        if( in_array('Manage Stock',$_SESSION['rows_exploded']) ) 
        {
  			  # Loading model...
          $this->load->model('Universal_Retrieval');
          $this->load->model('Model_Access');
          
          #Extracting Data For Display
          $data['all_prod'] = $this->Universal_Retrieval->All_Info('prod_details');

          /********** Interface ***********************/    
          $headertag['title'] = "Manage Stock";
          $this->load->view('headtag',$headertag);
          $this->load->view('header');
          $this->load->view('nav');
          $this->load->view('stores/manage_stock',$data);
          $this->load->view('footer');
          /********** Interface ***********************/
  		  } 
        else 
        {
          //No Permission
          $_SESSION['error'] = "Permission Denied. Contact Administrator";
          redirect('Dashboard');
  		  }
      }
      else
      {
        # redirect to Dashboard
        redirect('Dashboard');
      }
  	}
    
    /*****************************************
			   Suppliers
    ******************************************/
    public function Vendors() 
    {
		  # Permission Check
		  if ( isset($_SESSION['username']) )
      {
        if( in_array('Vendors',$_SESSION['rows_exploded']) )
        { 
          # Loading model...
          $this->load->model('Model_Access');/*Needed By header, nav*/
          $this->load->model('Universal_Retrieval');
          $this->load->model('Model_HR');
          
          # Loading Functions
          $last_sup_id  = $this->Universal_Retrieval->LastID('general_last_ids','sup_id');
          $data['retrieve_suppliers'] = "Yes";
          #################### Generating New Supplier Id #################### 
          if( !empty($last_sup_id) )
          {
            if($last_sup_id->sup_id == NULL || $last_sup_id->sup_id == 0) 
              $data['next_sup_id'] = "KAD/SUP/001";
            
            elseif( strlen($last_sup_id->sup_id) == 1 )
              $data['next_sup_id'] = "KAD/SUP/00".($last_sup_id->sup_id + 1);

            elseif( strlen($last_sup_id->sup_id) == 2 )
              $data['next_sup_id'] = "KAD/SUP/0".($last_sup_id->sup_id + 1);

            elseif( strlen($last_sup_id->sup_id) == 3 )
              $data['next_sup_id'] = "KAD/SUP/".($last_sup_id->sup_id + 1);
          }
          else
          {
            $this->session->set_flashdata('error',"Error In Retrieving Last Supplier ID");
            $data['next_sup_id'] = "ERROR";
          }
          /********** Interface ***********************/   
          $headertag['title'] = "Suppliers";
          $this->load->view('headtag',$headertag);
          $this->load->view('header');
          $this->load->view('nav');
          $this->load->view('stores/suppliers',$data);
          $this->load->view('footer');
          /********** Interface ***********************/
		    } 
        else 
        {
          # Permission Denied
          $_SESSION['error'] = "Permission Denied. Contact Administrator";
          redirect('Dashboard');
		    }
      }
      else
      {
        redirect('Access');
      }
    }

    public function Suppliers_API() 
    {
      # Permission Check
      if ( isset($_SESSION['username']) )
      {
        if( in_array('Vendors',$_SESSION['rows_exploded']) )
        { 
          # Loading model...
          $this->load->model('Universal_Retrieval');

          print $this->Universal_Retrieval->All_Info_API('product_suppliers');
        }
        else 
        {
          # Permission Denied
          $_SESSION['error'] = "Permission Denied. Contact Administrator";
          redirect('Dashboard');
        }
      }
      else
      {
        # Not Logged In
        redirect('Access');
      }
    }
    
    /*****************************************
			Register New Product
    *****************************************/
    public function Register_Product() 
    {
  		# Permission Check
  		if ( isset($_SESSION['username']) )
      {
        if( in_array('Register New',$_SESSION['rows_exploded']) ) 
        {
          # Loading model...
          $this->load->model('Model_Access'); /*Needed By header, nav*/
          $this->load->model('Universal_Retrieval');
          
          # Loading Functions
          $data['category_info']      = $this->Universal_Retrieval->All_Info('product_category');
          $data['Description_info']   = $this->Universal_Retrieval->All_Info('product_desc');
          
          /********** Generating New Product ID ************/
          $last_prod_id  = $this->Universal_Retrieval->LastID('general_last_ids','prod_id');

          if( !empty($last_prod_id) )
          {
            if($last_prod_id->prod_id == NULL || $last_prod_id->prod_id == 0) 
              $data['next_prod_id'] = "PROD#001";
            
            elseif( strlen($last_prod_id->prod_id) == 1 )
              $data['next_prod_id'] = "PROD#00".($last_prod_id->prod_id + 1);

            elseif( strlen($last_prod_id->prod_id) == 2 )
              $data['next_prod_id'] = "PROD#0".($last_prod_id->prod_id + 1);

            elseif( strlen($last_prod_id->prod_id) == 3 )
              $data['next_prod_id'] = "PROD#".($last_prod_id->prod_id + 1);
          }
          else
          {
            $this->session->set_flashdata('error',"Error In Retrieving Last Product ID");
            $data['next_prod_id'] = "ERROR";
          }  
          /********** Generating New Product ID ************/

          /********** Interface ***********************/    
          $headertag['title'] = "Register New";
          $this->load->view('headtag',$headertag);
          $this->load->view('header');
          $this->load->view('nav');
          $this->load->view('stores/register_product',$data);
          $this->load->view('footer');
          /********** Interface ***********************/
  		  } 
        else 
        {
          # Permission Denied
          $this->session->set_flashdata('error',"Permission Denied. Contact Administrator");
          redirect('Dashboard');
  		  }
      }
      else 
      {
        # Not Logged In
        redirect('Access');
      }
  	}

	/***************************	Data Insertion	*****************************/
    
    /****************************************
	       New Supplier
    *****************************************/
    public function New_Vendor() 
    {
      # Permission Check 
      if( in_array('Vendors',$_SESSION['rows_exploded']) )
      {
        if( isset($_POST['sup_save']) ) 
        {
	    	  # Setting validation rules
          $this->form_validation->set_rules('sup_id','Supplier ID','required|trim');
          $this->form_validation->set_rules('name','Supplier Name','required|trim|is_unique[suppliers.name]',array('is_unique' => 'Supplier Name Already Exists'));
          $this->form_validation->set_rules('tel1','Telephone No.','required|trim|min_length[10]');
          $this->form_validation->set_rules('tel2','Alt Telephone No.','trim|min_length[10]');
          $this->form_validation->set_rules('addr','Address','trim');
          $this->form_validation->set_rules('email','Email','trim');
          $this->form_validation->set_rules('fax','Fax','trim');
          
          # If Failed
          if ($this->form_validation->run() === FALSE) 
          {
            #Redirecting With Error
            $_SESSION['error'] = "Vendors Already Exist";
            $this->Suppliers();
          }
          
          # If Passed
          else 
          {
            # Variables Assignment
            $data['sup_id'] = $this->input->post('sup_id');
            $data['name']   = ucwords($this->input->post('name'));
            $data['tel1']   = $this->input->post('tel1');
            $data['tel2']   = $this->input->post('tel2');
            $data['addr']   = ucwords($this->input->post('addr'));
            $data['email']  = $this->input->post('email');
            $data['fax']    = $this->input->post('fax');
            
            # Loading model...
            $this->load->model('Insertion');
            
            $result = $this->Insertion->FullInsert('suppliers',$data);
		            
            if($result) 
            {
		          $_SESSION['success'] = "New Supplier Added";
              redirect('Stores/Suppliers');
            }
	          else 
            {
		          $_SESSION['error'] = "Adding Supplier Failed.";
              redirect('Stores/Suppliers');
            }
          } # End of Validation Rule Check
        } 
        else
        {
          # Submit Button Not Clicked
          redirect('Stores/Suppliers');
        } 
      } 
      else
      {
		 	  # No Permission 
        redirect('Dashboard');
      } # End of row
    } # End of function
    
    /****************************************
         New Category
    *****************************************/
    public function New_Category() 
    {
      # Permission Check 
      if( in_array('Register New',$_SESSION['rows_exploded']) )
      {
        if( in_array('Register New-Can Add Prod / Cat / Desc',$_SESSION['priv_exploded']) ) 
        { 
          if( isset($_POST['cat_save']) ) 
          {
	    	    # Setting validation rules
            $this->form_validation->set_rules('cat_id','Category ID','required|trim');
            $this->form_validation->set_rules('cat_name','Category','required|trim|is_unique[product_category.cat_name]',array('is_unique' => 'Category Already Exists'));
            
            #Checking Form Validation Rule Result
            # Failed
            if ($this->form_validation->run() === FALSE) 
            {
              #Redirecting With Error
              $_SESSION['error'] = "Category Already Exist";
              $this->Register_Product();
            }
            # Passed
            else 
            {
	            #Variables Assignment
	            $data['cat_id'] = $this->input->post('cat_id');
              $data['cat_name'] = ucwords($this->input->post('cat_name'));
	            
              # Loading model...
	            $this->load->model('Insertion');
                
	            $result = $this->Insertion->FullInsert('product_category',$data);
		            
	            if($result) 
              {
                $_SESSION['success'] = "New Category Added";
                redirect('Stores/Register_Product');
	            }
              else 
              {
		            $_SESSION['error'] = "Adding Category Failed.";
                redirect('Stores/Register_Product');
	            }
		        }   
          }
          else
          {
            # Submit Button Not Clicked
            redirect('Stores/Register_Product');
    		  }
        } 
        else
        {
			    $_SESSION['error'] = "Permission Denied. Contact The Administrator";      
          redirect('Stores/Register_Product');
		    } # End of Priv
      }
      else
      {
        $_SESSION['error'] = "Permission Denied. Contact Administrator";
        redirect('Dashboard');
      } # End of Row
    } # End of function
    
    /****************************************
         New Description
    *****************************************/
    public function New_Description() 
    {
      if( in_array('Register New',$_SESSION['rows_exploded']) )
      {
        if( in_array('Register New-Can Add Prod / Cat / Desc',$_SESSION['priv_exploded']) ) 
        { 
          if( isset($_POST['desc_save']) ) 
          {
	    	    # Setting validation rules
            $this->form_validation->set_rules('desc_id','Description ID','required|trim');
            $this->form_validation->set_rules('desc','Description','required|trim|is_unique[product_desc.desc]',array('is_unique' => 'Description Already Exists'));
            
            #Checking Form Validation Rule Result
            # If Failed
            if ($this->form_validation->run() === FALSE) 
            {
              #Redirecting With Error
              $_SESSION['error'] = "Description Already Exist";
              $this->Register_Product();
            }
            # If Passed
            else 
            {
	            #Variables Assignment
	            $data['desc_id'] = $this->input->post('desc_id');
              $data['desc'] = ucwords($this->input->post('desc'));
	            
              # Loading model...
	            $this->load->model('Insertion');
                
	            $result = $this->Insertion->FullInsert('product_desc',$data);
		            
	            if($result) 
              {
                $_SESSION['success'] = "New Description Added";
                redirect('Stores/Register_Product');
	            } 
              else 
              {
		            $_SESSION['error'] = "Adding Description Failed.";
                redirect('Stores/Register_Product');
              }
            } # End of Validation Check
          } 
          else
          {
            # Submit Button Not Clicked
            redirect('Stores/Register_Product');
		      }
        } 
        else 
        {
          $_SESSION['error'] = "Permission Denied. Contact The Administrator";
          redirect('Stores/Register_Product');
        } # End of Priv
      }
      else
      {
        $_SESSION['error'] = "Permission Denied. Contact Administrator";
        redirect('Dashboard');
      } # End of Row
    } # End of function
    
    /****************************************
         New Stock
    *****************************************/
    public function Save_Stock() 
    {
      if( in_array('Stock-Intake',$_SESSION['rows_exploded']) )
      {
        if( in_array('Stock-Intake-Can Add Stock',$_SESSION['priv_exploded']) ) 
        { 
          if( isset($_POST['stock_save']) ) 
          {
	    	    # Setting validation rules
            $this->form_validation->set_rules('date_recv','Date Recieved','required|trim');
            $this->form_validation->set_rules('vendor','Vendor','required|trim');
            $this->form_validation->set_rules('sup_id','Supplier','required|trim');
            $this->form_validation->set_rules('inv_no','Invoice No.','required|trim');
            $this->form_validation->set_rules('tot_cost','Total cost','required|trim');
            $this->form_validation->set_rules('cat_id[]','Category','required|trim');
            $this->form_validation->set_rules('prod_id[]','Item Name','required|trim');
            $this->form_validation->set_rules('desc_id[]','Item Type','required|trim');
            $this->form_validation->set_rules('qty[]','Quanity','required|trim');
            $this->form_validation->set_rules('unit[]','Unit Price','required|trim');
            $this->form_validation->set_rules('expiry[]','Expiry Date','required|trim');
            #Checking Form Validation Rule Result
            # If Failed
            if ($this->form_validation->run() === FALSE) 
            {
              #Redirecting With Error
              $this->New_Stock();
            }
            # If Passed
            else 
            {
	            # Varaiable Assignment
	            $data['invoice_no'] = $this->input->post('inv_no');
              $data['total_cost'] = $this->input->post('tot_cost');
              $data['sup_id']     = $this->input->post('sup_id');
              $data['vendor']     = $this->input->post('vendor');
              $cat_arr            = $this->input->post('cat_id[]');
                    
              # Combining All Category ID
              foreach($cat_arr As $cat_id) 
              {
                $data['comb_cat_id'] .= '*'.$cat_id;
              }
              $prod_arr           = $this->input->post('prod_id[]');
              
              # Combining All Product ID
              foreach($prod_arr As $prod_id) 
              {
                $data['comb_prod_id'] .= '*'.$prod_id;
              }
              $desc_arr           = $this->input->post('desc_id[]');
              
              # Combining All Description ID
              foreach($desc_arr As $desc_id) 
              {
                $data['comb_desc_id'] .= '*'.$desc_id;
              }
              $exp_arr           = $this->input->post('expiry[]');
              
              # Combining All Expiry ID
              foreach($exp_arr As $expiry) 
              {
                $data['comb_expiry'] .= '*'.$expiry;
              } 
              $data['employee_id'] = $_SESSION['employee_id'];
	            
              # Loading model...
	            $this->load->model('Insertion');
                
              # Calling Stored Procedure
              
              if($result) 
              {
		            #Keeping Record in Audit
                $audit_result = $this->Insertion->FullInsert('product_audit',$data);    
                
                if($audit_result)
                {
                  $_SESSION['success'] = "Stock Updated Successful";
                  redirect('Stores/New_Stock');
                }
                else
                {
                  $_SESSION['error'] = "Stock Updated Failed.";
                  redirect('Stores/New_Stock');
                }
              }
	            else 
              {
		            $_SESSION['error'] = "Stock Update Failed";
                redirect('Stores/New_Stock');
	            }
            } # End of Validation Check
          }
          else
          {
            # Submit Button Not Clicked
            redirect('Stores/New_Stock');
          }
        }
        else
        {
          $_SESSION['error'] = "Permission Denied. Contact Administrator";
          redirect('Stores/New_Stock');
        } # End of priv
      }
      else
      {
        $_SESSION['error'] = "Permission Denied. Contact Administrator";
        redirect('Dashboard');
      } # End of row
    }
    
    /****************************************
         Register Single Product
    *****************************************/
    
    public function Register_Single_Product() 
    {
      if( in_array('Register New',$_SESSION['rows_exploded']) )
      {
        if( in_array('Register New-Can Add Prod / Cat / Desc',$_SESSION['priv_exploded']) ) 
        { 
          if( isset($_POST['single_add']) ) 
          {
	    	    # Setting validation rules
            $this->form_validation->set_rules('itm_code','Item Code','required|trim');
            $this->form_validation->set_rules('item_name','Item Name','required|trim');
            $this->form_validation->set_rules('item_loc','Item Location','required|trim');
            $this->form_validation->set_rules('cat_id','Category','required|trim');
            $this->form_validation->set_rules('desc_id','Description','required|trim');
            
            #Checking Form Validation Rule Result
            if ($this->form_validation->run() === FALSE) 
            {
              #Redirecting With Error
              $this->Register_Product();
            } 
            else 
            {
	            #Variables Assignment
	            $data['prod_id'] = $this->input->post('itm_code');
              $data['prod_name'] = ucwords($this->input->post('item_name'));
              $data['location'] = ucwords($this->input->post('item_loc'));
              $data['cat_id'] = $this->input->post('cat_id');
              $data['desc_id'] = $this->input->post('desc_id');
	            
              # Loading Model  
              $this->load->model('Insertion');
              
              $result = $this->Insertion->Single_Prod($data);
		            
	            if($result) 
              {
		            $_SESSION['success'] = "Registration Successful";
                redirect('Stores/Register_Product');
	            }  
              else 
              {
                $_SESSION['error'] = "Registration Failed.";
                redirect('Stores/Register_Product');
	            }    
            } # End of Validation Check
          } 
          else
          {
            # Submit Button Not Clicked
            redirect('Stores/Register_Product');
          } 
        } 
        else
        {
    		 	$_SESSION['error'] = "Permission Denied. Contact Administrator.";
    			redirect('Stores/Register_Product');
    	  } # End of priv
      } 
      else
      {
        $_SESSION['error'] = "Permission Denied. Contact Administrator.";
        redirect('Dashboard');
      } # End of row
    }
    
    /***********************************************
	       New Description
    ************************************************/
    public function Register_Product_Bulk() 
    {
      if( in_array('Register New',$_SESSION['rows_exploded']) )
      {
        if( in_array('Register New-Can Add Prod / Cat / Desc',$_SESSION['priv_exploded']) ) 
        {
          if( isset($_POST['bulk_add']) ) 
          {
	    	    # Setting validation rules
            $this->form_validation->set_rules('prod_id','Product ID','required|trim');
            
            # Checking Form Validation Rule Result
            # If Failed
            if ($this->form_validation->run() === FALSE) 
            {
              # Redirecting With Error
              $this->Register_Product();
            }
            # If Passed
            else 
            {
	            # Variables Assignment
	            $data['prod_id'] = $this->input->post('prod_id');

	            # Parsing File Data For Processing 
              $this->file_restriction($_FILES['prod_file'],"Register Bulk Stock",$data['prod_id']);
            }
          } 
          else
          {
            # Subnit Button Not Clicked
            redirect('Stores/Register_Product');
          } 
        }
        else
        {
          # Permission Denied
          $_SESSION['error'] = "Permission Denied. Contact Administrator";
          redirect('Stores/Register_Product');
        }
      }
      else
      {
        # Permission Denied
        $_SESSION['error'] = "Permission Denied. Contact Administrator";
        redirect('Stores/Register_Product');
      }
    }
    
    /*********************************	Data Update	****************************/

    /******************************
				Supplier Update
	******************************/
    
    public function Update_Supplier() {
        
        if( isset($_POST['sup_update']) ) {
	    	//Setting validation rules
            $this->form_validation->set_rules('sup_id','Supplier ID','required|trim');
			$this->form_validation->set_rules('name','Supplier Name','required|trim');
            $this->form_validation->set_rules('tel1','Telephone No.','required|trim|min_length[10]');
            $this->form_validation->set_rules('tel2','Alt Telephone No.','trim|min_length[10]');
            $this->form_validation->set_rules('addr','Address','trim');
            $this->form_validation->set_rules('email','Email','trim');
            $this->form_validation->set_rules('fax','Fax','trim');
            #Checking Form Validation Rule Result
            # If Failed
            if ($this->form_validation->run() === FALSE) {
                #Redirecting With Error
                $_SESSION['error'] = "Validation Error Occured.";
                $this->Suppliers();
            }
            # If Passed
            else {
	            #Variables Assignment
	            $data['sup_id'] = $this->input->post('sup_id');
                $data['name'] = ucwords($this->input->post('name'));
	            $data['tel1'] = $this->input->post('tel1');
	            $data['tel2'] = $this->input->post('tel2');
                $data['addr'] = ucwords($this->input->post('addr'));
                $data['email'] = $this->input->post('email');
                $data['fax'] = $this->input->post('fax');
	            
                # Loading model...
	            $this->load->model('Update');
                
	            $result = $this->Update->supplier($data);
		            
	            if($result) {
                    $_SESSION['success'] = "Supplier's Info Updated";
                    redirect('Stores/Suppliers');
	            }
	            
                else {
                    $_SESSION['error'] = "Supplier's Info Update Failed.";
                    redirect('Stores/Suppliers'); 
	            }
		            
            }
    	} 
            else{
    		 	
    			redirect('Stores/Suppliers');
    		}
    }
    
    /*************************************
				Category Update
	*************************************/
    
    public function Update_Category() {
        
        if( isset($_POST['cat_update']) ) {
	    	//Setting validation rules
            $this->form_validation->set_rules('cat_id','Supplier ID','required|trim');
			$this->form_validation->set_rules('cat_name','Supplier Name','required|trim|is_unique[product_category.cat_name]',array('is_unique' => 'Category Already Exists'));
            #Checking Form Validation Rule Result
            # If Failed
            if ($this->form_validation->run() === FALSE) {
                #Redirecting With Error
                $this->New_Stock();
            }
            # If Passed
            else {
	            #Variables Assignment
	            $data['cat_id'] = $this->input->post('cat_id');
                $data['cat_name'] = $this->input->post('cat_name');
	            
                # Loading model...
	            $this->load->model('Update');
                
	            $result = $this->Update->OneFieldUpdate('product_category','cat_id','cat_name',$data);
		            
	            if($result) {
                    $_SESSION['success'] = "Category Info Updated";
                    redirect('Stores/Register_Product');
	            }
	            
                else {
                    $_SESSION['error'] = "Category Info Update Failed.";
                    redirect('Stores/Register_Product'); 
	            }
		            
            }
    	} 
            else{
    		 	
    			redirect('Stores/Register_Product');
    		}
    }
    
    /*************************************
				Category Update
	*************************************/
    
    public function Update_Description() {
        
        if( isset($_POST['desc_update']) ) {
	    	//Setting validation rules
            $this->form_validation->set_rules('desc_id','Description ID','required|trim');
			$this->form_validation->set_rules('desc','Description','required|trim|is_unique[product_category.cat_name]',array('is_unique' => 'Category Already Exists'));
            #Checking Form Validation Rule Result
            # If Failed
            if ($this->form_validation->run() === FALSE) {
                #Redirecting With Error
                $this->New_Stock();
            }
            # If Passed
            else {
	            #Variables Assignment
	            $data['desc_id'] = $this->input->post('desc_id');
                $data['desc'] = $this->input->post('desc');
	            
                # Loading model...
	            $this->load->model('Update');
                
	            $result = $this->Update->OneFieldUpdate('product_desc','desc_id','desc',$data);
		            
	            if($result) {
                    $_SESSION['success'] = "Description Info Updated";
                    redirect('Stores/Register_Product');
	            }
	            
                else {
                    $_SESSION['error'] = "Description Update Failed.";
                    redirect('Stores/Register_Product'); 
	            }
		            
            }
    	} 
            else{
    		 	
    			redirect('Stores/Register_Product');
    		}
    }

  /******************************************************	Data Delete	****************************************/
    /************************************
				Suppliers
    ************************************/
    public function Delete_Supplier() 
    {
      if(isset($_SESSION['username']))
      {
        if(in_array('Suppliers-Can Delete',$_SESSION['priv_exploded']) && isset($_POST['deletebutton']))
        {
          $this->form_validation->set_rules('deleteid','Supplier','required|trim');

          if($this->form_validation->run() === FALSE) 
          {
            $this->session->set_flashdata('error','No Supplier Selected');
            redirect('Stores/Suppliers');
          }
          else
          {
            $this->load->model('Universal_Deletion');

            $data = [
                      'IdField'   => "sup_id",
                      'deleteid'  => $this->input->post('deleteid')
            ]; 

            $result = $this->Universal_Deletion->Delete_Row('product_suppliers',$data);

            if($result) 
              $this->session->set_flashdata('success',"Supplier Deleted");
            
            else 
              $this->session->set_flashdata('error','Delete Supplier Failed');
            
            redirect('Stores/Suppliers');
          }
        }
        else
        {
          $this->session->set_flashdata('error','Permission Denied. Contact Administrator');
          redirect('Stores/Suppliers');
        }
      }
      else
        redirect('Access');
    }
    
   /***********************************************
				Category
	************************************************/
    
    public function Delete_Category() {
        #
        if( isset($_POST['cat_del']) ) {
            
	    	//Setting validation rules
			$this->form_validation->set_rules('cat_id','Category','required|trim');
			
            #Checking Form Validation Rule Result
            # If Failed
            if ($this->form_validation->run() === FALSE) {
                #Redirecting With Error
                $this->Register_Product();
            }
            # If Passed
            else {
                # Loading model
                $this->load->model('Deletion');
    			//Variables Assignment
    			$data['cat_id']	= $this->input->post('cat_id');
                #
                $result         = $this->Deletion->AllData('product_category','cat_id',$data);
                #
                if($result) {
                    $_SESSION['success'] = "Category Deleted";
                    redirect('Stores/Register_Product');
	            }
	            #
                else {
                    $_SESSION['error'] = "Deleting Category Failed.";
                    redirect('Stores/Register_Product'); 
	            }
            }    
                
        } else {
            #
            redirect('Stores/Register_Product');
        }
   }
   /***********************************************
				Description
	************************************************/
    
    public function Delete_Description() {
        #
        if( isset($_POST['desc_del']) ) {
            
	    	//Setting validation rules
			$this->form_validation->set_rules('desc_id','Description','required|trim');
			
            #Checking Form Validation Rule Result
            # If Failed
            if ($this->form_validation->run() === FALSE) {
                #Redirecting With Error
                $this->New_Stock();
            }
            # If Passed
            else {
                # Loading model
                $this->load->model('Deletion');
    			//Variables Assignment
    			$data['desc_id']	= $this->input->post('desc_id');
                #
                $result         = $this->Deletion->AllData('product_desc','desc_id',$data);
                #
                if($result) {
                    $_SESSION['success'] = "Description Deleted";
                    redirect('Stores/Register_Product');
	            }
	            #
                else {
                    $_SESSION['error'] = "Deleting Description Failed.";
                    redirect('Stores/Register_Product'); 
	            }
            }    
                
        } else {
            #
            redirect('Stores/Register_Product');
        }
   }
  
  /*********************** Other Relevant Function *********************/ 
    /***********************************************
	       AJAX Request to Fetch Item Name
    ************************************************/
    public function Ajax_Load_ITM_Name() 
    {
        # Loading Model
        $this->load->model('Retrieval');
        
        # Assigning Data For Query
        $data['CategoryID'] = "KAD/CAT/".$this->input->post('cat_id');

        $tablename = "prod_details";
        
        $IdField = "CategoryID";
        
        $result = $this->Retrieval->ret_data_with_s_cond($tablename,$IdField,$data);
        
        print "<option></option>";
        
        foreach($result As $res)
        {
          $prodid = explode('/', $res->Product_ID);
          print "<option value='".@$prodid[3]."'>".@$res->Item_Name."</option>";
        }
        
        exit;
    }

    /***********************************************
      File Upload Function
    ************************************************/
    public function file_restriction($file_array,$upload_type,$atmId) 
    {
      if( $_SESSION['username'])
      {
        # Loading Model
        $this->load->model('Insertion');
        $this->load->model('Retrieval');
       
        # File Upload Restrictions
        $csv_mimetypes = array('csv');
        
        $extension = explode('.',$file_array['name']);
        
        $filetype = $extension[1];
        
        if(in_array($filetype,$csv_mimetypes )) 
        {
          if($file_array['size'] > 0 && $file_array['size'] < 10000000) 
          {
            #Opening File into a Resource Variable
            $handle = fopen($file_array['tmp_name'], "r");
       
            #Performing File / Database Field Comparism
            $upload_fields = fgetcsv($handle, 1000, ",");
              
            fclose($handle);
            
            # Request From Register Bulk 
            if($upload_type == "Register Bulk Stock") 
            {
              $db_fields = $this->Retrieval->ret_table_fields('prod_details');
            }

            foreach ($upload_fields as $value) 
            {
              if( in_array($value, $db_fields) )
                $res = "True";
              else
              {
                $res = "False";
                break;
              }
            }

            if ($res) 
            {
              //$tablename = "";
              $result = $this->Insertion->Bulk_Product_Upload($file_array[''],$tablename,$data);

              if($result)
                $_SESSION['success'] = "Product Info Updated";
              else
                $_SESSION['error'] = "Product Info Update Failed";
            }
            else
            {
              $_SESSION['error'] = "Product Info Update Failed";
            }
            
            redirect('Reconciliation/Upload');
          } 
          else 
          {
            $_SESSION['error'] = "File Size Too Large.<br>Please Check File Again";
            redirect('Reconciliation/Upload');
          }                    
        } 
        else 
        {
          $_SESSION['error'] =  "File Type Not Supported.<br>Please Upload a CSV File  ";
          redirect('Reconciliation/Upload');
        }
      }
      else
      {
        # User Bot Logged In
        redirect('Access');
      }                    
    }
    
    /***********************************************
      File Upload
    ************************************************
    public function upload_file(&$file_array,$upload_type,$atmId) 
    {
      if( $_SESSION['username'])
      {
        # Loading Model
        $this->load->model('EventsModel');

        # Retrieving info about atm 
        $result = $this->EventsModel->retrieve_info('full_atminfo','TerminalId',$atmId);

        foreach($result As $res)
        {
          $AtmName  = $res->AtmName;
        }
        
        $target_dir = "Recon Files Upload/".$upload_type;
        # target_dir = Recon Files Upload/( ATMH/ BANKH )
        
        if(file_exists($target_dir)) 
        {
          ContinueUpload:
          
          if (file_exists($target_dir)) 
          {
            $target_dir .= "/".$AtmName.".csv"; 
            #target_dir = Recon Files Upload/( ATMH/ BANKH )/AtmName.csv
                  
            if(!move_uploaded_file($file_array['tmp_name'], $target_dir))
            {
              $_SESSION['error'] = "Error uploading file - Check Destination Directory is Writeable.')";
            } 
            else 
            {
              $_SESSION['success'] = "File Uploaded";
                       
              if($upload_type == "ATMH")
                $result = $this->EventsModel->dbinsert($target_dir,"atmswitch",$atmId);
              else if($upload_type == "BANKH") 
                $result = $this->EventsModel->dbinsert($target_dir,"bankswitch",$atmId);
                          
              if ($result) 
              {
                # code...
                $_SESSION['success'] .= "<br><br>Database Updated" ;
              }  
              else 
              {
                #code
                $_SESSION['error'] = $_SESSION['success']."<br><br>Database Update Failed";
              }
          
              redirect('Reconciliation/Upload');
            }
          } 
          else 
          {
            $_SESSION['error'] = "Upload Directory Creation Failed.Contact Administrator";
            redirect('ReConciliation/Upload');
          }
        }  
        else
        {
          //Send Confirmation For 
          if(mkdir($target_dir,0755))
            goto ContinueUpload;
        }
      }
      else
      {
        redirect('Access');
      }
    }
    
    /***********************************************
      File Upload Function
    ************************************************

  public function file_restriction($file_array,$upload_type,$prod_d) {
     
            
            #Computing Differences in array 
            $comparism_result = in_array($db_fields, $file_fields);
            #Fields Match Check
            if($comparism_result) {
                $_SESSION['success'] = "Right File";
                # Inserting into Various Product Tables
                
                return true;
            }
            else {
                $_SESSION['error'] = "Please Upload The Right CSV File";
                return false;
            }
            
        } else {
         #Returning Failure Message
           $_SESSION['error'] = "File Size Too Large. Please Check File Again";
           
           return false; 
        }
                           
       } else {
      $_SESSION['error'] =  "File Type Not Supported. Please Upload a CSV File  ";
            
            return false;
     }                    
                           
    }*/

}//End of Class
