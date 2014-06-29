<?php	class RoomModel extends CI_Model
	{
		public function __construct()
		{
			parent::__construct();
		}
		public final function index()
		{
			$this->db->select('r.*');
			$this->db->from('rooms r');
			return $this->db->get();
		}
		public final function create()
		{
			$i = $this->input;
			if($i->post())
			{
				$this->db->insert
				(
					'rooms', 
					getPostValuePair()
				);
				return $this->read($this->db->insert_id());
			}
		}
		public final function read($id)
		{
      return $this->db->get_where
      (
        'r', 
        array('id' => $id)
      );
		}
		public final function update()
		{
			$i = $this->input;
			$id = $i->post('id');
			$this->db->where('id', $id);
			$this->db->update
      (
        'rooms', 
        getPostValuePair()
      );
			return $this->db->affected_rows() > 0;
		}
		public final function delete($id)
    {
      $this->db->where('r.id', $id);
			return $this->db->delete();
    }
	}