<?php
/* 
 * Generated by CRUDigniter v3.2 
 * www.crudigniter.com
 */
 
class Servicio_model extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }
    
    /*
     * Get servicio by id_servicio
     */
    function get_servicio($id_servicio)
    {
        return $this->db->get_where('servicios',array('id_servicio'=>$id_servicio))->row_array();
    }
        
    /*
     * Get all servicios
     */
    function get_all_servicios()
    {
        $this->db->order_by('id_servicio', 'desc');
        return $this->db->get('servicios')->result_array();
    }
        
    /*
     * function to add new servicio
     */
    function add_servicio($params)
    {
        $this->db->insert('servicios',$params);
        return $this->db->insert_id();
    }
    
    /*
     * function to update servicio
     */
    function update_servicio($id_servicio,$params)
    {
        $this->db->where('id_servicio',$id_servicio);
        return $this->db->update('servicios',$params);
    }
    
    /*
     * function to delete servicio
     */
    function delete_servicio($id_servicio)
    {
        return $this->db->delete('servicios',array('id_servicio'=>$id_servicio));
    }
}
