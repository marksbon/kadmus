<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Project extends CI_Controller 
{
	/*************************************** Interfaces  ***********************************/
    /***********************************************
  		Constructor + Initialization
  	************************************************/
  	public function index() 
  	{
  		$this->Requests();
  	}

  	/***********************************************
  		Site Request Inbox
  	************************************************/
  	public function Requests() 
  	{
  		# Permission Check
  		if ( isset($_SESSION['username']) ) #User Login Check
      {
        if (TRUE) #Roles & Priviledges Check
        {
          # Loading models...
          $this->load->model('Model_Access'); /*Needed By header, nav*/
          $this->load->model('Model_Project'); 
          $this->load->helper('urlsanitize');
          $this->load->model('Universal_Retrieval');

          # Populating Data Array
          $data['allprojects'] = $this->Universal_Retrieval->All_Info('project_info');
          
          $allrequests = $this->Model_Project->User_Request();
          $req_counter = 0;
          if(!empty($allrequests)) :
            foreach($allrequests As $request):
              # All Pending Requests
              if($request->status == 0 && $request->save_code == "") :
                $data['Pending_Req'][$req_counter]['id'] = $request->id;
                $data['Pending_Req'][$req_counter]['requested_by'] = $request->requested_by;
                $data['Pending_Req'][$req_counter]['task_id'] = $request->task_id;
                $data['Pending_Req'][$req_counter]['tools_mat_id'] = $request->tools_mat_id;
                $data['Pending_Req'][$req_counter]['mach_equip_id'] = $request->mach_equip_id;
                $data['Pending_Req'][$req_counter]['labour_id'] = $request->labour_id;
                $data['Pending_Req'][$req_counter]['save_code'] = $request->save_code;
                $data['Pending_Req'][$req_counter]['approval_stat'] = $request->approval_stat;
                $data['Pending_Req'][$req_counter]['approval_emp'] = $request->approval_emp;
                $data['Pending_Req'][$req_counter]['dateOfrequest'] = $request->dateOfrequest;
                $data['Pending_Req'][$req_counter]['status'] = $request->status;
              endif;

              # All Saved Requests
              if($request->status == 0 && $request->save_code != "") :
                $data['Saved_Req'][$req_counter]['id'] = $request->id;
                $data['Saved_Req'][$req_counter]['requested_by'] = $request->requested_by;
                $data['Saved_Req'][$req_counter]['task_id'] = $request->task_id;
                $data['Saved_Req'][$req_counter]['tools_mat_id'] = $request->tools_mat_id;
                $data['Saved_Req'][$req_counter]['mach_equip_id'] = $request->mach_equip_id;
                $data['Saved_Req'][$req_counter]['labour_id'] = $request->labour_id;
                $data['Saved_Req'][$req_counter]['save_code'] = $request->save_code;
                $data['Saved_Req'][$req_counter]['approval_stat'] = $request->approval_stat;
                $data['Saved_Req'][$req_counter]['approval_emp'] = $request->approval_emp;
                $data['Saved_Req'][$req_counter]['dateOfrequest'] = $request->dateOfrequest;
                $data['Saved_Req'][$req_counter]['status'] = $request->status;
              endif;

              # All Processed Requests
              if($request->status == 1) :
                $data['Processed_Req'][$req_counter]['id'] = $request->id;
                $data['Processed_Req'][$req_counter]['requested_by'] = $request->requested_by;
                $data['Processed_Req'][$req_counter]['task_id'] = $request->task_id;
                $data['Processed_Req'][$req_counter]['tools_mat_id'] = $request->tools_mat_id;
                $data['Processed_Req'][$req_counter]['mach_equip_id'] = $request->mach_equip_id;
                $data['Processed_Req'][$req_counter]['labour_id'] = $request->labour_id;
                $data['Processed_Req'][$req_counter]['save_code'] = $request->save_code;
                $data['Processed_Req'][$req_counter]['approval_stat'] = $request->approval_stat;
                $data['Processed_Req'][$req_counter]['approval_emp'] = $request->approval_emp;
                $data['Processed_Req'][$req_counter]['dateOfrequest'] = $request->dateOfrequest;
                $data['Processed_Req'][$req_counter]['status'] = $request->status;
              endif;

              # All Rejected Requests
              if($request->status == 2) :
                $data['Rejected_Req'][$req_counter]['id'] = $request->id;
                $data['Rejected_Req'][$req_counter]['requested_by'] = $request->requested_by;
                $data['Rejected_Req'][$req_counter]['task_id'] = $request->task_id;
                $data['Rejected_Req'][$req_counter]['tools_mat_id'] = $request->tools_mat_id;
                $data['Rejected_Req'][$req_counter]['mach_equip_id'] = $request->mach_equip_id;
                $data['Rejected_Req'][$req_counter]['labour_id'] = $request->labour_id;
                $data['Rejected_Req'][$req_counter]['save_code'] = $request->save_code;
                $data['Rejected_Req'][$req_counter]['approval_stat'] = $request->approval_stat;
                $data['Rejected_Req'][$req_counter]['approval_emp'] = $request->approval_emp;
                $data['Rejected_Req'][$req_counter]['dateOfrequest'] = $request->dateOfrequest;
                $data['Rejected_Req'][$req_counter]['status'] = $request->status;
              endif;

              $req_counter++;
            endforeach;
          endif;

          /********** Interface ***********************/    
          $headertag['title'] = "Requests";
          $this->load->view('headtag',$headertag);
          $this->load->view('header');
          $this->load->view('nav');
          $this->load->view('project/request.php',$data);
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
      Site New Request
    ************************************************/
    public function New_Request() 
    {
      # Permission Check
      if ( isset($_SESSION['username']) )
      {
        if (TRUE) 
        {
          # Loading models...
          $this->load->model('Model_Access'); /*Needed By header, nav*/
          $this->load->model('Universal_Retrieval');
          $this->load->helper('urlsanitize');
          $data['project_name'] = $this->uri->segment(3);
          $data['taskid'] = substr($this->uri->segment(5), 40);

          /********** Interface ***********************/    
          $headertag['title'] = "New Request";
          $this->load->view('headtag',$headertag);
          $this->load->view('header');
          $this->load->view('nav');
          $this->load->view('project/new request.php',$data);
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
        New Project / Contract
    ************************************************/
    public function New_Project() 
    {
      # Checking For Permission
      if ( isset($_SESSION['username']) && in_array('Projects',$_SESSION['rows_exploded']))
      {
        # Loading models ...
        $this->load->model('Model_Access'); /*Needed By header, nav*/
        $this->load->model('Universal_Retrieval');
        $this->load->model('Model_Project');
        $this->load->helper('urlsanitize');

        $data['allproject'] = $this->Universal_Retrieval->All_Info('project_info');
        $data['completed'] = $data['Inprogress'] = [];

        if(!empty($data['allproject']))
        {
          $project_counter = 0;
          foreach($data['allproject'] As $proj)
          {
            $taskinfo = $this->Model_Project->Project_Total_Task($proj->proj_id);
            if($taskinfo['TotalTask'] != 0)
              $percentage = round($taskinfo['TaskCompleted'] * 100 / $taskinfo['TotalTask'],2);
            else
              $percentage = round($taskinfo['TaskCompleted'] * 100 / 1,2);
            /****** Completed Projects *********/ 
            if($percentage == 100)
            {
              # Project ID
              if(@array_key_exists('ProjectId',@$data['completed'][$project_counter]))
              {
                $data['completed'][$project_counter]['ProjectId'] = $proj->proj_id;
              }
              else
                $data['completed'][$project_counter]['ProjectId'] = $proj->proj_id;
              # Codename
              if(@array_key_exists('Codename',@$data['completed'][$project_counter]))
              {
                $data['completed'][$project_counter]['Codename'] = $proj->codename;
              }
              else
                $data['completed'][$project_counter]['Codename'] = $proj->codename;
              # Total Task
              if(@array_key_exists('TotalTask',@$data['completed'][$project_counter]))
              {
                $data['completed'][$project_counter]['TotalTask'] = $taskinfo['TotalTask'];
              } 
              else
                $data['completed'][$project_counter]['TotalTask'] = $taskinfo['TotalTask'];
              # Total Completed
              if(@array_key_exists('TaskCompleted',@$data['completed'][$project_counter]))
              {
                $data['completed'][$project_counter]['TaskCompleted'] = $taskinfo['TaskCompleted'];
              } 
              else
                $data['completed'][$project_counter]['TaskCompleted'] = $taskinfo['TaskCompleted'];
              # Total Percentage Completed
              if(@array_key_exists('Percentage',@$data['completed'][$project_counter]))
              {
                $data['completed'][$project_counter]['Percentage'] = $percentage;
              } 
              else
                $data['completed'][$project_counter]['Percentage'] = $percentage;
            }
            /****** Completed Projects *********/
            $datesplit    = explode(' To ', $proj->duration);
            $end_date     = new DateTime($datesplit[1]);
            $curr_date    = new DateTime("now"); 

            $cur_end_interval     = $end_date->diff($curr_date);

            /****** InProgress Projects *********/ 
            if($percentage != 100 && ($end_date->format('Y-m-d') > $curr_date->format('Y-m-d')))
            {
              # Project ID
              if(@array_key_exists('ProjectId',@$data['Inprogress'][$project_counter]))
              {
                $data['Inprogress'][$project_counter]['ProjectId'] = $proj->proj_id;
              }
              else
                $data['Inprogress'][$project_counter]['ProjectId'] = $proj->proj_id;
              # Codename
              if(@array_key_exists('Codename',@$data['Inprogress'][$project_counter]))
              {
                $data['Inprogress'][$project_counter]['Codename'] = $proj->codename;
              }
              else
                $data['Inprogress'][$project_counter]['Codename'] = $proj->codename;
              # Total Task
              if(@array_key_exists('TotalTask',@$data['Inprogress'][$project_counter]))
              {
                $data['Inprogress'][$project_counter]['TotalTask'] = $taskinfo['TotalTask'];
              } 
              else
                $data['Inprogress'][$project_counter]['TotalTask'] = $taskinfo['TotalTask'];
              # Total Completed
              if(@array_key_exists('TaskCompleted',@$data['Inprogress'][$project_counter]))
              {
                $data['Inprogress'][$project_counter]['TaskCompleted'] = $taskinfo['TaskCompleted'];
              } 
              else
                $data['Inprogress'][$project_counter]['TaskCompleted'] = $taskinfo['TaskCompleted'];
              # Total Percentage Completed
              if(@array_key_exists('Percentage',@$data['Inprogress'][$project_counter]))
              {
                $data['Inprogress'][$project_counter]['Percentage'] = $percentage;
              } 
              else
                $data['Inprogress'][$project_counter]['Percentage'] = $percentage;
            }
            /****** InProgress Projects *********/
            /****** InComplete Projects *********/
            if($percentage != 100 && ($end_date->format('Y-m-d') < $curr_date->format('Y-m-d')))
            {
              # Project ID
              if(@array_key_exists('ProjectId',@$data['Incomplete'][$project_counter]))
              {
                $data['Incomplete'][$project_counter]['ProjectId'] = $proj->proj_id;
              }
              else
                $data['Incomplete'][$project_counter]['ProjectId'] = $proj->proj_id;
              # Codename
              if(@array_key_exists('Codename',@$data['Incomplete'][$project_counter]))
              {
                $data['Incomplete'][$project_counter]['Codename'] = $proj->codename;
              }
              else
                $data['Incomplete'][$project_counter]['Codename'] = $proj->codename;
              # Total Task
              if(@array_key_exists('TotalTask',@$data['Incomplete'][$project_counter]))
              {
                $data['Incomplete'][$project_counter]['TotalTask'] = $taskinfo['TotalTask'];
              } 
              else
                $data['Incomplete'][$project_counter]['TotalTask'] = $taskinfo['TotalTask'];
              # Total Completed
              if(@array_key_exists('TaskCompleted',@$data['Incomplete'][$project_counter]))
              {
                $data['Incomplete'][$project_counter]['TaskCompleted'] = $taskinfo['TaskCompleted'];
              } 
              else
                $data['Incomplete'][$project_counter]['TaskCompleted'] = $taskinfo['TaskCompleted'];
              # Total Percentage Completed
              if(@array_key_exists('Percentage',@$data['Incomplete'][$project_counter]))
              {
                $data['Incomplete'][$project_counter]['Percentage'] = $percentage;
              } 
              else
                $data['Incomplete'][$project_counter]['Percentage'] = $percentage;
            }
            /****** InComplete Projects *********/
            $project_counter++;
          }
        }

        //print_r($data['completed']);

        /********** Interface ***********************/   
        $headertag['title'] = "New Project";
        $this->load->view('headtag',$headertag);
        $this->load->view('header');
        $this->load->view('nav');
        $this->load->view('project/allprojects',$data);
        $this->load->view('footer');
        /********** Interface ***********************/
      } 
      else 
      {
        # No Permission 
        $this->session->set_flashdata('error',"Permission Denied. Contact Administrator");
        redirect('Dashboard');
      }
    }

    /***********************************************
      Project Details
    ************************************************/
    public function Details($ProjectName) 
    {
      if( isset($_SESSION['username']) )
      {
        if(in_array('Projects',$_SESSION['rows_exploded']))
        {
          # Loading models...
          $this->load->model('Model_Access'); /*Needed By header, nav*/
          $this->load->model('Universal_Retrieval');
          $this->load->model('Model_Project');
          $this->load->helper('urlsanitize');

          # Project Name Check
          $proj['codename'] = urlunchange($ProjectName);

          if($this->Universal_Retrieval->ret_data_with_s_cond_boolean('project_info','codename',$proj))
          {
            $proj_info = $this->Model_Project->ret_proj_full_info($proj['codename']);
            
            $counter = 0;

            foreach ($proj_info as $project) 
            {
              # Project ID
              if(@array_key_exists('ProjectId',@$data['project']))
                TRUE;
              else
                $data['project']['ProjectId'] = $project->ProjectId;
              # Project Name
              if(@array_key_exists('ProjectName',@$data['project']))
                TRUE;
              else
                $data['project']['ProjectName'] = $project->ProjectName;
              # Project Code
              if(@array_key_exists('CodeName',@$data['project']))
                TRUE;
              else
                $data['project']['CodeName'] = $project->CodeName;
              # Project Duration
              if(@array_key_exists('Duration',@$data['project']))
                TRUE;
              else
                $data['project']['Duration'] = $project->Duration;
              # Project Budget
              if(@array_key_exists('Budget',@$data['project']))
                TRUE;
              else
                $data['project']['Budget'] = $project->Budget;
              # Project Region
              if(@array_key_exists('Region',@$data['project']))
                TRUE;
              else
                $data['project']['Region'] = $project->Region;  
              # Project Loc
              if(@array_key_exists('Loc',@$data['project']))
                TRUE;
              else
                $data['project']['Loc'] = $project->Loc;
              # Project Client
              if(@array_key_exists('Client',@$data['project']))
                TRUE;
              else
                $data['project']['Client'] = $project->Client;
              # Project Summary
              if(@array_key_exists('Summary',@$data['project']))
                TRUE;
              else
                $data['project']['Summary'] = $project->Summary;
              # Project Phase
              if(@array_key_exists('Phase',@$data['project']))
              {
                $data['project']['Phase'][$counter]['Id'] = $project->PhaseId;  
                $data['project']['Phase'][$counter]['Name'] = $project->PhaseName;  
                $data['project']['Phase'][$counter]['Time'] = $project->PhaseTime;  
                $data['project']['Phase'][$counter]['Artisan'] = explode('#', $project->Artisans);  
                $data['project']['Phase'][$counter]['Status'] = $project->PhaseStatus;  
              }
              else
              {
                $data['project']['Phase'][$counter]['Id'] = $project->PhaseId;
                $data['project']['Phase'][$counter]['Name'] = $project->PhaseName;  
                $data['project']['Phase'][$counter]['Time'] = $project->PhaseTime;  
                $data['project']['Phase'][$counter]['Artisan'] = explode('#', $project->Artisans);  
                $data['project']['Phase'][$counter]['Status'] = $project->PhaseStatus;  

              }
              $counter++;
            }
            /********** Interface ***********************/    
            $headertag['title'] = "Project Details";
            $this->load->view('headtag',$headertag);
            $this->load->view('header_alt');
            $this->load->view('nav');
            $this->load->view('project/project_details.php',$data);
            $this->load->view('footer');
            /********** Interface ***********************/
          }
          else
          {
            $this->session->set_flashdata('warning',"Project {$proj['project']} Not Found");
            redirect('Project/New_Project');
          } 
        }
        else 
        {
          $this->session->set_flashdata('error',"Permission Denied. Contact Administrator");
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
      Project Report
    ************************************************/
    public function New_Report() 
    {
      # Permission Check
      if ( isset($_SESSION['username']) )
      {
        if(TRUE) 
        {
          # Loading models...
          $this->load->model('Model_Access'); /*Needed By header, nav*/
          $this->load->model('Model_Project'); 
          $this->load->helper('urlsanitize');
          $this->load->model('Universal_Retrieval');

          # Variable Assignments
          $data = [
            'projectname' => $this->uri->segment(3),
            'phasename' => $this->uri->segment(4),
            'department' => $this->uri->segment(5),
            'phaseid'     => $this->uri->segment(6)
          ];

          /********** Interface ***********************/    
          $headertag['title'] = "Requests";
          $this->load->view('headtag',$headertag);
          $this->load->view('header');
          $this->load->view('nav');
          $this->load->view('project/project_report.php',$data);
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

  /***************************************  Interfaces  ***********************************/ 

  /***************************************  Insertion  ***********************************/ 
    /***********************************************
        New Project / Contract
    ************************************************/
    public function Register_Project()
    {
      if(isset($_SESSION['username']) )
      {
        if(in_array('Project-Create Project',$_SESSION['priv_exploded'])) 
        {
          if(TRUE) 
          {
            $this->form_validation->set_rules('proj_name','Project Name','required|trim|is_unique[project_info.name]',array('is_unique[project_info.name]' => 'Project Name Already Exists.'));
            $this->form_validation->set_rules('proj_code','Project Code','required|trim|is_unique[project_info.codename]',array('is_unique[project_info.codename]' => 'Code Name Already Exists.'));
            $this->form_validation->set_rules('region','Region','required|trim');
            $this->form_validation->set_rules('location','Location','required|trim');
            $this->form_validation->set_rules('duration','Project Duration','required|trim');
            $this->form_validation->set_rules('budget','Project Budget','trim|required');
            $this->form_validation->set_rules('desc','Project Summary','trim|required');
            $this->form_validation->set_rules('client','Clients Name','trim|required');
            $this->form_validation->set_rules('phase_name[]','Phase Name','trim|required');
            $this->form_validation->set_rules('phaseduration[]','Phase Duration','trim|required');
            $this->form_validation->set_rules('artisan[]','Artisan','required');

            # If Failed
            if($this->form_validation->run() === FALSE) 
            {
              redirect('Project/New_Project');
            }
            # If Passed
            else 
            {
              # Loading Model
              $this->load->model('Model_Project');
              $this->load->model('Universal_Insertion');
              $this->load->helper('file_restriction');

              $projectname = $this->input->post('proj_name');
        
              # Risk Assessment Document Upload
              if( !empty($_FILES['risk_doc']['tmp_name']) && !empty($this->input->post('proj_name')) ) 
              {
                if( $risk_doc_path = doc_restriction($_FILES['risk_doc'],"riskassessment","uploads/projects/$projectname/",'Project/New_Project') )
                {
                  # Assigning Result
                  if(!empty($risk_doc_path))
                    TRUE;
                  else
                    $risk_doc_path = "";
                }
                else
                  redirect('Project/New_Project');
              }
              else
                $risk_doc_path = ""; # Default Path
              # End of Risk Assessment Document Upload

              # Document Upload
              if( !empty($_FILES['proj_doc']['tmp_name']) && !empty($this->input->post('proj_name')) ) 
              {
                # Rearranging multiple file upload
                $files_rearray = reArrayFiles($_FILES['proj_doc']);

                foreach ($files_rearray as $value) 
                {
                  $filename = explode('.', $value['name']);

                  if( @$doc_path .= doc_restriction($value,$filename[0],"uploads/projects/$projectname/",'Project/New_Project')."~~" )
                  {
                    # Assigning Result
                    if(!empty($doc_path))
                      TRUE;
                    else
                      $doc_path .= "~~";
                  }
                  else
                    redirect('Project/New_Project');
                }
                
              }
              else
                $doc_path = ""; # Default Path
              # End of Document Upload

              # Variable Assignment
              $projectinfo_data = 
              [
                'name'      => ucwords($this->input->post('proj_name')),
                'codename'  => ucwords($this->input->post('proj_code')),
                'duration'  => $this->input->post('duration'),
                'budget'    => $this->input->post('budget'),
                'region'    => ucwords($this->input->post('region')),
                'location'  => ucwords($this->input->post('location')),
                'added_doc' => $doc_path,
                'client'    => ucwords($this->input->post('client')),
                'summary'   => ucwords($this->input->post('desc')),
                'risk_report' => $risk_doc_path
              ];

              $ph_name[] = $this->input->post('phase_name[]');
              $ph_duration[] = $this->input->post('phaseduration[]');
              $ph_artisans[] = $this->input->post('artisan[]');
              
              # Insertion
              $this->db->trans_start();
                $this->Universal_Insertion->DataInsert('project_info',$projectinfo_data);
                
                $last_proj_id = $this->db->insert_id();

                for($a=0; $a < sizeof($ph_name); $a++)
                {
                  for($b=0; $b < sizeof($ph_name[$a]); $b++) 
                  { 
                    for($c=0; $c < sizeof($ph_artisans[$a][$b]); $c++)
                    {
                      @$artisan .= $ph_artisans[$a][$b][$c]."#";
                      //$ph_artisans[$a][$b].= $ph_artisans[$a][$b][$c]."#";
                    }
                    
                    $project_phases[$b] =
                    [
                      'ph_name'       => ucwords($ph_name[$a][$b]),
                      'ph_duration'   => $ph_duration[$a][$b],
                      'ph_artisans'   => ucwords($artisan),
                      'proj_id'       => $last_proj_id
                    ];

                    unset($artisan);
                  }
                }
                $this->Model_Project->create_project_phase($project_phases);
              $this->db->trans_complete();
              # End of Transaction

              if($this->db->trans_status() === FALSE)
                $this->session->set_flashdata('error','Creating Project Failed');
              else
              {
                $this->session->set_flashdata('success','Project Created');
                if(!empty($risk_doc_path))
                  move_uploaded_file($_FILES['risk_doc']['tmp_name'], $risk_doc_path);
                
                if(!empty($doc_path))
                {
                  $multiple_files = explode('~~', $doc_path);
                  
                  for($a=0; $a<sizeof($files_rearray); $a++) 
                  {
                    move_uploaded_file($files_rearray[$a]['tmp_name'], $multiple_files[$a]);
                  }
                }
              }

              redirect('Project/New_Project');
            }
          }
        }
        else
        {
          $this->session->set_flashdata('error','Permission Denied. Contact Administrator');
          redirect('Dashboard');
        }
      }
      else
      {
        redirect('Access/Login');
      }
    }

    /***********************************************
      Add New / Edit Artisan Task 
    ************************************************/
    public function Task()
    {
      if(isset($_SESSION['username']) )
      {
        if(in_array('Project-Create Project',$_SESSION['priv_exploded'])) 
        {
          if(isset($_POST['save_task'])) 
          {
            $this->form_validation->set_rules('phaseid','Phase','required|trim');
            $this->form_validation->set_rules('taskid','Task','trim');
            $this->form_validation->set_rules('department','Artisan','required|trim');
            $this->form_validation->set_rules('taskname','Task','required|trim');
            $this->form_validation->set_rules('taskduration','Duration','required|trim');
            $this->form_validation->set_rules('action','','required|trim');
            $this->form_validation->set_rules('resulturl','','required|trim');
            $resulturl = $this->input->post('resulturl');

            # If Failed
            if($this->form_validation->run() === FALSE) 
            {
              $this->session->set_flashdata('error',"All Fields Required");
              redirect($resulturl);
            }
            # If Passed
            else 
            {
              # Loading Model
              $this->load->model('Universal_Insertion');
              $this->load->model('Model_Project');

              # Adding Task
              if($this->input->post('action') == "addtask")
              {
                $task_insert = 
                [
                  'tk_name'      => ucwords($this->input->post('taskname')),
                  'tk_duration'  => $this->input->post('taskduration'),
                  'ph_artisan'   => ucwords($this->input->post('department')),
                  'phase_id'     => base64_decode($this->input->post('phaseid'))
                ];

                $result = $this->Universal_Insertion->DataInsert('project_tasks',$task_insert);

                if($result)
                  $this->session->set_flashdata('success','Task Created');
                else
                  $this->session->set_flashdata('error','Creating Task Failed');
              }
              
              # Editing Task
              elseif($this->input->post('action') == "edittask")
              {
                $data_edit = 
                [
                  'tk_name'      => ucwords($this->input->post('taskname')),
                  'tk_duration'  => $this->input->post('taskduration'),
                ];

                $where = 
                [
                  'ph_artisan'   => $this->input->post('department'),
                  'phase_id'     => base64_decode($this->input->post('phaseid')),
                  'id'           => base64_decode($this->input->post('taskid'))
                ];

                $result = $this->Model_Project->update_artisan_task($data_edit,$where);

                if($result)
                  $this->session->set_flashdata('success','Task Updated');
                else
                  $this->session->set_flashdata('error','Task Update Failed');
              }

              redirect($resulturl);
            }
          }
        }
        else
        {
          $this->session->set_flashdata('error','Permission Denied. Contact Administrator');
          redirect('Dashboard');
        }
      }
      else
      {
        redirect('Access/Login');
      }
    }

    /***********************************************
      Activate / De-activate Phase
    ************************************************/
    public function Activate_Phase()
    {
      if(isset($_SESSION['username']) )
      {
        if(in_array('Project-Create Project',$_SESSION['priv_exploded'])) 
        {
          # Loading Model
            $this->load->model('Model_Project');

          if(isset($_POST['activate_phase'])) 
          {
            $this->form_validation->set_rules('phaseid','Phase','required|trim');
            $resulturl = $this->input->post('resulturl');

            # If Failed
            if($this->form_validation->run() === FALSE) 
            {
              $this->session->set_flashdata('error',"No Phase Selected");
              redirect($resulturl);
            }
            # If Passed
            else 
            {
              # Adding Task
              $phaseid = base64_decode($this->input->post('phaseid'));
              //print $phaseid."<br/>".$resulturl;
              $result = $this->Model_Project->activate_deactivate_phase($phaseid,'1');

              if($result)
                $this->session->set_flashdata('success','Phase Activated');
              else
                $this->session->set_flashdata('error','Phase Activation Failed');
            }
          }

          elseif(isset($_POST['deactivate_phase'])) 
          {
            $this->form_validation->set_rules('phaseid','Phase','required|trim');
            $resulturl = $this->input->post('resulturl');

            # If Failed
            if($this->form_validation->run() === FALSE) 
            {
              $this->session->set_flashdata('error',"No Phase Selected");
              redirect($resulturl);
            }
            # If Passed
            else 
            {
              # Adding Task
              $phaseid = base64_decode($this->input->post('phaseid'));

              $result = $this->Model_Project->activate_deactivate_phase($phaseid,'0');

              if($result)
                $this->session->set_flashdata('success','Phase Deactivated');
              else
                $this->session->set_flashdata('error','Phase Deactivation Failed');
            }
          }
              
          redirect($resulturl);
        }
        else
        {
          $this->session->set_flashdata('error','Permission Denied. Contact Administrator');
          redirect('Dashboard');
        }
      }
      else
      {
        redirect('Access/Login');
      }
    }

    /***********************************************
      New Report For Artisan
    ************************************************/
    public function Make_Report()
    {
      if(isset($_SESSION['username']) )
      {
        if(TRUE) 
        {
          if(isset($_POST['save_report'])) 
          {
            $this->form_validation->set_rules('phaseid','Phase','required|trim');
            $this->form_validation->set_rules('taskname','Phase','required|trim');
            $this->form_validation->set_rules('department','Artisan','required|trim');
            $this->form_validation->set_rules('report','Main Task','required|trim');
            $this->form_validation->set_rules('riskreport','Risk Report','trim');
            $this->form_validation->set_rules('resulturl','','required|trim');
            $this->form_validation->set_rules('redirecturl','','required|trim');
            
            $redirecturl = $this->input->post('redirecturl');
            $resulturl = $this->input->post('resulturl');

            # If Failed
            if($this->form_validation->run() === FALSE) 
            {
              $this->session->set_flashdata('error',"All Fields Required");
              redirect($resulturl);
            }
            # If Passed
            else 
            {
              # Loading Model $data['taskid'] = 
              $this->load->model('Universal_Insertion');
              $this->load->model('Model_Project');
              $this->load->helper('urlsanitize');

              # Re-writing report
              $task = explode('~', $this->input->post('taskname'));
              $taskid = $task[0];
              $taskname = ucwords($task[1]);
              $newreport = ucwords($this->input->post('report'));
              $artisan  = urlunchange(ucwords($this->input->post('department')));
              $phaseid  = base64_decode(substr($this->input->post('phaseid'), 80));

              # Creating Report Variable
              $report = 
                [
                  'report'       => $newreport,
                  'riskreport'   => ucwords($this->input->post('riskreport')),
                  'artisan'      => $artisan,
                  'phase_id'     => $phaseid,
                  'tk_id'        => $taskid,
                  'employee_id'  => $_SESSION['employee_personal_data']->EmployeeID
                ];

              $result = $this->Universal_Insertion->DataInsert('project_reports',$report);

              if($result)
                $this->session->set_flashdata('success','Report Saved');
              else
                $this->session->set_flashdata('error','Report Saving Failed');
              
              redirect($redirecturl);
            }
          }
        }
        else
        {
          $this->session->set_flashdata('error','Permission Denied. Contact Administrator');
          redirect('Dashboard');
        }
      }
      else
      {
        redirect('Access/Login');
      }
    }

    /***********************************************
      New Site Request
    ************************************************/
    public function Send_Request()
    {
      if(isset($_SESSION['username']) )
      {
        if(in_array('Project-Create Project',$_SESSION['priv_exploded'])) 
        {
          if(isset($_POST['send_request'])) 
          {
            $this->form_validation->set_rules('employee_id','Employee Name','required|trim');
            $this->form_validation->set_rules('taskid','Task Name','required|trim');

            $this->form_validation->set_rules('matrequest_type[]','Project Name','trim');
            $this->form_validation->set_rules('matname[]','Material/Tools Name','trim');
            $this->form_validation->set_rules('matdesc[]','Material/Tools Description','trim');
            $this->form_validation->set_rules('matqty[]','Material/Tools Quantity','trim');
            $this->form_validation->set_rules('matunit[]','Material/Tools Unit','trim');
            $this->form_validation->set_rules('matamt[]','Material/Tools Total Amount','trim');

            $this->form_validation->set_rules('Machprocesstype[]','Machine Request Type','trim');
            $this->form_validation->set_rules('machname[]','Project Code','trim');
            $this->form_validation->set_rules('machdesc[]','Project Code','trim');
            $this->form_validation->set_rules('machpurpose[]','Project Code','trim');
            $this->form_validation->set_rules('machtime[]','Project Code','trim');
            $this->form_validation->set_rules('machunit[]','Project Code','trim');

            $this->form_validation->set_rules('labname[]','Project Code','trim');
            $this->form_validation->set_rules('labtime[]','Project Code','trim');
            $this->form_validation->set_rules('labqty[]','Project Code','trim');
            $this->form_validation->set_rules('labunit[]','Project Code','trim');
            $this->form_validation->set_rules('labnote[]','Region','trim');
            //$this->form_validation->set_rules('resulturl','R','trim');

            //$resulturl = $this->input->post($resulturl);

            # If Failed
            if($this->form_validation->run() === FALSE) 
            {
              $this->session->set_flashdata('error','Error Found In Request.');
              redirect('Project/Requests');
            }
            # If Passed
            else 
            {
              # Loading Model
              $this->load->model('Model_Project');
              $this->load->model('Universal_Insertion');

              # Variable Assignment
              $employee_id = base64_decode($this->input->post('employee_id'));
              $task_id     = base64_decode($this->input->post('taskid'));

              $matreq_type = $this->input->post('matrequest_type[]');
              $matname     = $this->input->post('matname[]');
              $matdesc     = $this->input->post('matdesc[]');
              $matqty      = $this->input->post('matqty[]');
              $matunit     = $this->input->post('matunit[]');

              $machreq_type = $this->input->post('Machprocesstype[]');
              $machname     = $this->input->post('machname[]');
              $machdesc     = $this->input->post('machdesc[]');
              $machpurpose  = $this->input->post('machpurpose[]');
              $machtime     = $this->input->post('machtime[]');
              $machunit     = $this->input->post('machunit[]');

              $labname     = $this->input->post('labname[]');
              $labtime     = $this->input->post('labtime[]');
              $labqty      = $this->input->post('labqty[]');
              $labunit     = $this->input->post('labunit[]');
              $labnote     = $this->input->post('labnote[]');
              
              # Material Tools Request
              if(!empty($matname))
              {
                for($a = 0; $a < sizeof($matname); $a++) 
                {
                  if(!empty($matname[$a]))
                    @$mat_data['comb_name'].= ucwords($matname[$a]).'~~' ;
                  else
                    @$mat_data['comb_name'].= 'Null~~' ;
                  if(!empty($matdesc[$a]))
                    @$mat_data['comb_desc'].= ucwords($matdesc[$a]).'~~' ;
                  else
                    @$mat_data['comb_desc'].= 'Null~~' ;
                  if(!empty($matqty[$a]))
                    @$mat_data['comb_qty'].= ucwords($matqty[$a]).'~~';
                  else
                    @$mat_data['comb_qty'].= 'Null~~';
                  if(!empty($matunit[$a]))
                    @$mat_data['comb_unit'].= $matunit[$a].'~~';
                  else
                    @$mat_data['comb_unit'].= 'Null~~';
                  if(!empty($matreq_type[$a]))
                    @$mat_data['comb_req_type'].= ucwords($matreq_type[$a]).'~~';
                  else
                    @$mat_data['comb_req_type'].= 'Null~~';
                }
              }
              # Material Tools Request

              # Machine Equipment Request
              if(!empty($machname))
              {
                for($a = 0; $a < sizeof($machname); $a++) 
                {
                  if(!empty($machname[$a]))
                    @$mach_data['comb_name'].= ucwords($machname[$a]).'~~' ;
                  else
                    @$mach_data['comb_name'].= 'Null~~' ;
                  if(!empty($machdesc[$a]))
                    @$mach_data['comb_desc'].= ucwords($machdesc[$a]).'~~' ;
                  else
                    @$mach_data['comb_desc'].= 'Null~~' ;
                  if(!empty($machtime[$a]))
                    @$mach_data['comb_duration'].= $machtime[$a].'~~';
                  else
                    @$mach_data['comb_duration'].= 'Null~~';
                  if(!empty($machunit[$a]))
                    @$mach_data['comb_unit'].= $machunit[$a].'~~';
                  else
                    @$mach_data['comb_unit'].= 'Null~~';
                  if(!empty($machreq_type[$a]))
                    @$mach_data['comb_req_type'].= ucwords($machreq_type[$a]).'~~';
                  else
                    @$mach_data['comb_req_type'].= 'Null~~';
                  if(!empty($machpurpose[$a]))
                    @$mach_data['comb_purpose'].= ucwords($machpurpose[$a]).'~~';
                  else
                    @$mach_data['comb_purpose'].= 'Null~~';
                }
              }
              # Machine Equipment Request

              # Labour Request
              if(!empty($labname))
              {
                for($a = 0; $a < sizeof($labname); $a++) 
                {
                  if(!empty($labname[$a]))
                    @$lab_data['comb_name'].= ucwords($labname[$a]).'~~' ;
                  else
                    @$lab_data['comb_name'].= 'Null~~' ;
                  if(!empty($labtime[$a]))
                    @$lab_data['comb_duration'].= $labtime[$a].'~~' ;
                  else
                    @$lab_data['comb_duration'].= 'Null~~' ;
                  if(!empty($labqty[$a]))
                    @$lab_data['comb_persons'].= $labqty[$a].'~~';
                  else
                    @$lab_data['comb_persons'].= 'Null~~';
                  if(!empty($labunit[$a]))
                    @$lab_data['comb_per_charge'].= $labunit[$a].'~~';
                  else
                    @$lab_data['comb_per_charge'].= 'Null~~';
                  if(!empty($labnote[$a]))
                    @$lab_data['comb_note'].= ucwords($labnote[$a]).'~~';
                  else
                    @$lab_data['comb_note'].= 'Null~~';
                }
              }
              # Labour Request
              
              # Insertion
              $this->db->trans_start();
                if(@$mat_data) :
                  $this->Universal_Insertion->DataInsert('project_req_material',$mat_data);
                  $last_mat_id = $this->db->insert_id();
                else :
                  $last_mat_id = "Null";
                endif;

                if(@$mach_data) :
                  $this->Universal_Insertion->DataInsert('project_req_machine',$mach_data);
                  $last_mach_id = $this->db->insert_id();
                else :
                  $last_mach_id = "Null";
                endif;

                if(@$lab_data) :
                  $this->Universal_Insertion->DataInsert('project_req_labour',$lab_data);
                  $last_lab_id = $this->db->insert_id();
                else :
                  $last_lab_id = "Null";
                endif;

                $request_data =
                [
                  'requested_by'  => $employee_id,
                  'task_id'       => $task_id,
                  'tools_mat_id'  => $last_mat_id,
                  'mach_equip_id' => $last_mach_id,
                  'labour_id'     => $last_lab_id
                ];

                $this->Universal_Insertion->DataInsert('project_requests',$request_data);
              $this->db->trans_complete();
              # End of Transaction

              if($this->db->trans_status() === FALSE)
                $this->session->set_flashdata('error','Sending Request Failed');
              else
              {
                $this->session->set_flashdata('success','Request Sent');
              }

              redirect('Project/Requests');
            }
          }
        }
        else
        {
          $this->session->set_flashdata('error','Permission Denied. Contact Administrator');
          redirect('Dashboard');
        }
      }
      else
      {
        redirect('Access/Login');
      }
    }
  
  /***************************************  Insertion  ***********************************/

  /***************************************  Update  ***********************************/
    /***********************************
      Task Complete
    ************************************/
    public function Task_Complete_Status() 
    {
      if(isset($_SESSION['username']))
      {
        if(in_array('Project-Create Project',$_SESSION['priv_exploded']) && isset($_POST['confirmbtn']))
        {
          $this->form_validation->set_rules('taskid','Task','required|trim');
          $this->form_validation->set_rules('status','Status','required|trim');
          $this->form_validation->set_rules('resulturl','Result URL','required|trim');
          $resulturl = $this->input->post('resulturl');

          if($this->form_validation->run() === FALSE) 
          {
            $this->session->set_flashdata('error','No Task Selected');
            redirect($resulturl);
          }
          else
          {
            $this->load->model('Model_Project');

            $taskid = base64_decode($this->input->post('taskid'));

            if($this->input->post('status'))
            {
              $result = $this->Model_Project->task_completed($taskid,'1'); 

              if($result) 
                $this->session->set_flashdata('success',"Task Marked Completed");
              else
                $this->session->set_flashdata('error','Marking Complete Failed'); 
            }
            else
            {
              $result = $this->Model_Project->task_completed($taskid,'0'); 

              if($result) 
                $this->session->set_flashdata('success',"Task Marked Incompleted");
              else
                $this->session->set_flashdata('error','Marking Incomplete Failed'); 
            }
            
            redirect($resulturl);
          }
        }
        else
        {
          $this->session->set_flashdata('error','Permission Denied. Contact Administrator');
          redirect($resulturl);
        }
      }
      else
        redirect('Access');
    }

    /***********************************
      Report Update
    ************************************/
    public function Update_Report() 
    {
      if(isset($_SESSION['username']))
      {
        if(in_array('Project-Create Project',$_SESSION['priv_exploded']) && isset($_POST['save_report']))
        {
          $this->form_validation->set_rules('phaseid','Report','required|trim');
          $this->form_validation->set_rules('report','Status','required|trim');
          $this->form_validation->set_rules('resulturl','Result URL','required|trim');
          $resulturl = $this->input->post('resulturl');

          if($this->form_validation->run() === FALSE) 
          {
            $this->session->set_flashdata('error','No Report Selected');
            redirect($resulturl);
          }
          else
          {
            $this->load->model('Universal_Update');

            $setData = [
                      'dbField'     => 'report',
                      'updateVal'   => $this->input->post('report')
            ];

            $where_condition = ['id' => base64_decode($this->input->post('phaseid'))];

            $result = $this->Universal_Update->Single_Field_Update('project_reports',$setData,$where_condition);

            if($result) 
              $this->session->set_flashdata('success',"Report Updated");
            else
              $this->session->set_flashdata('error','Report Update Failed'); 
            
            redirect($resulturl);
          }
        }
        else
        {
          $this->session->set_flashdata('error','Permission Denied. Contact Administrator');
          redirect($resulturl);
        }
      }
      else
        redirect('Access');
    }

  /***************************************  Update  ***********************************/

  /***************************************  Deleteion  ***********************************/
    /***********************************
      Delete Task
    ************************************/
    public function Delete_Task() 
    {
      if(isset($_SESSION['username']))
      {
        if(in_array('Project-Create Project',$_SESSION['priv_exploded']) && isset($_POST['deletebutton']))
        {
          $this->form_validation->set_rules('deleteid','Task','required|trim');
          $this->form_validation->set_rules('resulturl','Result URL','required|trim');
          $resulturl = $this->input->post('resulturl');

          if($this->form_validation->run() === FALSE) 
          {
            $this->session->set_flashdata('error','No Task Selected');
            redirect($resulturl);
          }
          else
          {
            $this->load->model('Model_Project');

            $taskid = base64_decode($this->input->post('deleteid'));

            $result = $this->Model_Project->delete_task($taskid);
                
            if($result) 
              $this->session->set_flashdata('success',"Task Deleted");
            
            else 
              $this->session->set_flashdata('error','Task Delete Failed');
            
            redirect($resulturl);
          }
        }
        else
        {
          $this->session->set_flashdata('error','Permission Denied. Contact Administrator');
          redirect($resulturl);
        }
      }
      else
        redirect('Access');
    }
  
  /***************************************  Deleteion  ***********************************/

  /***************************************  Ajax Calls  ***********************************/
    /***********************************
      Retrieve Report
    ************************************/
    public function Get_Report() 
    {
      $this->form_validation->set_rules('phaseid','Phase ','required|trim');
      $this->form_validation->set_rules('department','Department','required|trim');

      if($this->form_validation->run() === FALSE) 
      {
        //$this->session->set_flashdata('error','No Report Found');
        print "Error Retrieving Report";
      }
      else
      {
        #Load Model
        $this->load->model('Universal_Retrieval');
        $this->load->model('Model_Project');

        $phaseid = base64_decode($this->input->post('phaseid'));
        $artisan = $this->input->post('department');

        $result = $this->Model_Project->ret_artisan_report($artisan,$phaseid);

        if($result)
        {
          $result = array_reverse($result);
          foreach($result As $report)
          {
            # Retrieveing  Employee Name
            $tempdata['EmployeeID'] = $report->employee_id;
            $employeeinfo = $this->Universal_Retrieval->ret_data_with_s_cond('employee_personal_data','EmployeeID',$tempdata);
            if(!empty($employeeinfo))
            {
              foreach ($employeeinfo as $value) 
              {
                $employeename = $value->FirstName." ".$value->LastName;
              }
            }
            
            # Retrieveing  Task Name
            $tempdata['id'] = $report->tk_id;
            $taskinfo = $this->Universal_Retrieval->ret_data_with_s_cond('project_tasks','id',$tempdata);
            if(!empty($taskinfo))
            {
              foreach ($taskinfo as $value) 
              {
                $taskname = $value->tk_name;
              }
            }
            # Retrieveing  Task Name
            $reportdate = new DateTime($report->date_created);
            $formattedDate = $reportdate->format('D M j, Y h:i:s a');
            @$reportbody .= <<<EOS
              <div class="box box-widget collapsed-box">
                  <div class="box-header with-border">
                    <div class="user-block">
                      <img class="img-circle" src="../../resources/theme/img/avatar.png" alt="user image">
                      <span class="username" data-widget="collapse"><a href="#">$taskname </a></span>
                      <span class="description">$employeename - $formattedDate</span>
                    </div><!-- /.user-block -->
                    <div class="box-tools">
                      <button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-plus"></i></button>
                      <button class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
                    </div><!-- /.box-tools -->
                  </div><!-- /.box-header -->
                  <div class="box-body" style="display: none;">
                    <!-- post text -->
                    $report->report
                    <!-- Attachment -->
                    <div class="attachment-block clearfix">
                      <img class="attachment-img" src="../dist/img/photo1.png" alt="attachment image">
                      <div class="attachment-pushed">
                        <h4 class="attachment-heading"><a href="http://www.lipsum.com/">Lorem ipsum text generator</a></h4>
                        <div class="attachment-text">
                          Description about the attachment can be placed here.
                          Lorem Ipsum is simply dummy text of the printing and typesetting industry... <a href="#">more</a>
                        </div><!-- /.attachment-text -->
                      </div><!-- /.attachment-pushed -->
                    </div><!-- /.attachment-block -->

                    <!-- Social sharing buttons -->
                    <button class="btn btn-default btn-xs"><i class="fa fa-share"></i> Share</button>
                    <button class="btn btn-default btn-xs"><i class="fa fa-thumbs-o-up"></i> Like</button>
                    <span class="pull-right text-muted">45 likes - 2 comments</span>
                  </div><!-- /.box-body -->
                  <div class="box-footer box-comments" style="display: none;">
                    <div class='box-comment'>
                      <!-- User image -->
                      <i class='img-circle img-sm fa fa-exclamation-triangle fa-3x' style="color:red"></i>
                      <div class='comment-text'>
                        <span class="username" style="color:red">
                          Risk Report
                        </span><!-- /.username -->
                        $report->riskreport
                      </div><!-- /.comment-text -->
                    </div><!-- /.box-comment -->
                  </div><!-- /.box-footer -->
                  <div class="box-footer" style="display: none;">
                  </div><!-- /.box-footer -->
                </div>
EOS;
          }
          print $reportbody;
        }
      }
    }

    /***********************************
      Retrieve Report
    ************************************/
    public function Get_Risk_Report() 
    {
      $this->form_validation->set_rules('proj_code','Project','required|trim');

      if($this->form_validation->run() === FALSE) 
      {
        //$this->session->set_flashdata('error','No Report Found');
        print "Error Retrieving Report";
      }
      else
      {
        #Load Model
        $this->load->model('Universal_Retrieval');

        $data = [ 'codename' => $this->input->post('proj_code') ];

        $result = $this->Universal_Retrieval->ret_data_with_s_cond('project_info','codename',$data);;

        if($result)
        {
          foreach($result As $riskreport)
          {
            # Retrieveing Risk Assessment Report
            if($riskreport->risk_report)
            {
              $report = file_get_contents($riskreport->risk_report);
              @$reportbody .= <<<EOS
                <label> Report </label>
                <textarea name="report" class="compose-textarea" style="width:100%;height:500px;">$report</textarea>
EOS;
              print($reportbody);
            }
          }
        }
      }
    }

  /***************************************  Ajax Calls  ***********************************/
}