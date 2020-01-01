<?php
/* 
 * Generated by CRUDigniter v3.2 
 * www.crudigniter.com
 */
 
class Tb_dokuman_model extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }
    
    /*
     * Get tb_dokuman by idDokumen
     */
    function get_tb_dokuman($idDokumen)
    {
        return $this->db->get_where('tb_dokumen',array('idDokumen'=>$idDokumen))->row_array();
    }
        
    /*
     * Get all tb_dokumen
     */
    function get_all_tb_dokumen()
    {
        $this->db->order_by('idDokumen', 'desc');
        return $this->db->get('tb_dokumen')->result_array();
    }
        
    /*
     * function to add new tb_dokuman
     */
    function add_tb_dokuman($params)
    {
        $this->db->insert('tb_dokumen',$params);
        return $this->db->insert_id();
    }
    
    /*
     * function to update tb_dokuman
     */
    function update_tb_dokuman($idDokumen,$params)
    {
        $this->db->where('idDokumen',$idDokumen);
        return $this->db->update('tb_dokumen',$params);
    }
    
    /*
     * function to delete tb_dokuman
     */
    function delete_tb_dokuman($idDokumen)
    {
        return $this->db->delete('tb_dokumen',array('idDokumen'=>$idDokumen));
    }
}