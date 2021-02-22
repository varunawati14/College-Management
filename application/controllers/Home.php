<?php

class Home extends CI_Controller {

	public function index()
	{
		$this->load->model('Crudmodel');
		$records = $this->Crudmodel->getRecords();
		$this->load->view('home',['records'=>$records]);
	}

	public function create() {
		$this->load->view('create');
	}

	public function save() {
		
                $this->form_validation->set_rules('student_name', 'Student Name', 'required');
				$this->form_validation->set_rules('student_branch', 'Branch', 'required');
				$this->form_validation->set_rules('student_college', 'College Name', 'required');
				$this->form_validation->set_rules('student_address', 'Address', 'required');

                if ($this->form_validation->run() )
                {
					$data = $this->input->post();
                    $this->load->model('Crudmodel');
					if( $this->Crudmodel->saveRecord( $data ) ) {
						$this->session->set_flashdata('response','Record Saved Successfully.');
					}
					else{
						$this->session->set_flashdata('response','Record Failed to save!.');
					}
					return redirect('home');
                }
                else
                {
                        $this->load->view('create');
                }
	}

	
	
	public function edit( $record_id ) {
		$this->load->model('Crudmodel');
        $record = $this->Crudmodel->getAllRecords( $record_id );
		$this->load->view('update',['record'=>$record]);
	}


	public function update( $record_id ) {

                $this->form_validation->set_rules('student_name', 'Student Name', 'required');
				$this->form_validation->set_rules('student_branch', 'Branch', 'required');
				$this->form_validation->set_rules('student_college', 'College Name', 'required');
				$this->form_validation->set_rules('student_address', 'Address', 'required');

                if ($this->form_validation->run() )
                {
					$data = $this->input->post();
                    $this->load->model('Crudmodel');
					if( $this->Crudmodel->updateRecords( $record_id, $data )) {
						$this->session->set_flashdata('response','Record Updated Successfully.');
					}
					else{
						$this->session->set_flashdata('response','Record Updated Successfully..');
					}
					return redirect('home');
                }
                else
                {
                        $this->load->view('update');
                }
	}

	public function delete( $record_id ){
		$this->load->model('Crudmodel');
		if($this->Crudmodel->deleteRecord( $record_id )){
			$this->session->set_flashdata('response','Record Deleted Successfully.');
		}
		else{
			$this->session->set_flashdata('response','Failed to Delete.');
		}
		return redirect('home');
	}
}
