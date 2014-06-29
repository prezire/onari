<?php if(!defined('BASEPATH')) exit('No direct script access allowed');
class Teacher extends CI_Controller 
{
	public function __construct()
	{
		parent::__construct();
    $this->load->model('teachermodel');
	}
  public final function index()
  {
    $o = $this->teachermodel->index()->result();
    showView('teachers/index', array('teachers' => $o));
  }
  public final function create()
  {
    if($this->input->post())
    {
      if($this->form_validation->run())
      {
        $o = $this->teachermodel->create()->row();
        if($o->id)
        {
          redirect(site_url('teacher/read/' . $o->id));
        }
        else
        {
          show_error('Error creating teacher.');
        }
      }
      else
      {
        showView('teachers/create');
      }
    }
    else
    {
      showView('teachers/create');
    }
  }
	public final function read($id)
	{
		showView('teachers/read', array('teacher' => $this->teachermodel->read($id)->row()));
	}
	public final function update($id = null)
  {
    $o = $this->teachermodel->read($id)->row();
    $a = array('teacher' => $o);
    if($this->input->post())
    {
      if($this->form_validation->run())
      {
        $b = $this->teachermodel->update()->row();
        if($b)
        {
          redirect(site_url('teacher/read/' . $o->id));
        }
        else
        {
          show_error('Error updating teacher.');
        }
      }
      else
      {
        showView('teachers/update', $a);
      }
    }
    else
    {
      showView('teachers/update', $a);
    }
  }
	public final function delete($id)
  {
    showJsonView(array('teacher' => $this->teacher_model->delete($id)->row()));
  }
}