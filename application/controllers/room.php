<?php if(!defined('BASEPATH')) exit('No direct script access allowed');
class Room extends CI_Controller 
{
	public function __construct()
	{
		parent::__construct();
    $this->load->model('roommodel');
	}
  public final function index()
  {
    $o = $this->roommodel->index()->result();
    showView('rooms/index', array('rooms' => $o));
  }
  public final function create()
  {
    if($this->input->post())
    {
      if($this->form_validation->run())
      {
        $o = $this->roommodel->create()->row();
        if($o->id)
        {
          redirect(site_url('room/read/' . $o->id));
        }
        else
        {
          show_error('Error creating room.');
        }
      }
      else
      {
        showView('rooms/create');
      }
    }
    else
    {
      showView('rooms/create');
    }
  }
	public final function read($id)
	{
		showView('rooms/read', array('room' => $this->roommodel->read($id)->row()));
	}
	public final function update($id = null)
  {
    $o = $this->roommodel->read($id)->row();
    $a = array('room' => $o);
    if($this->input->post())
    {
      if($this->form_validation->run())
      {
        $b = $this->roommodel->update()->row();
        if($b)
        {
          redirect(site_url('room/read/' . $o->id));
        }
        else
        {
          show_error('Error updating room.');
        }
      }
      else
      {
        showView('rooms/update', $a);
      }
    }
    else
    {
      showView('rooms/update', $a);
    }
  }
	public final function delete($id)
  {
    showJsonView(array('room' => $this->room_model->delete($id)->row()));
  }
}