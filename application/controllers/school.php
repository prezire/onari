<?php if(!defined('BASEPATH')) exit('No direct script access allowed');
class School extends CI_Controller 
{
	public function __construct()
	{
		parent::__construct();
    $this->load->model('schoolmodel');
	}
  public final function index()
  {
    $o = $this->schoolmodel->index()->result();
    showView('schools/index', array('schools' => $o));
  }
  public final function create()
  {
    if($this->input->post())
    {
      if($this->form_validation->run())
      {
        $o = $this->schoolmodel->create()->row();
        if($o->id)
        {
          redirect(site_url('school/read/' . $o->id));
        }
        else
        {
          show_error('Error creating school.');
        }
      }
      else
      {
        showView('schools/create');
      }
    }
    else
    {
      showView('schools/create');
    }
  }
	public final function read($id)
	{
		showView('schools/read', array('school' => $this->schoolmodel->read($id)->row()));
	}
	public final function update($id = null)
  {
    $o = $this->schoolmodel->read($id)->row();
    $a = array('school' => $o);
    if($this->input->post())
    {
      if($this->form_validation->run())
      {
        $b = $this->schoolmodel->update()->row();
        if($b)
        {
          redirect(site_url('school/read/' . $o->id));
        }
        else
        {
          show_error('Error updating school.');
        }
      }
      else
      {
        showView('schools/update', $a);
      }
    }
    else
    {
      showView('schools/update', $a);
    }
  }
	public final function delete($id)
  {
    showJsonView(array('school' => $this->school_model->delete($id)->row()));
  }
}