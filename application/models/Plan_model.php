<?php 

    if ( ! defined('BASEPATH')) exit('No direct script access allowed');
    class Plan_model extends CI_Model
    {
        private $nombre_tabla = 'plan';
        function __construct()
        {
            parent::__construct();
        }

        function get_planes($where="", $limit="")
        {
            $sql = "SELECT * FROM $this->nombre_tabla ".$where." ".$limit."";
            $query = $this->db->query($sql);
            return $query->result();
        }

        function get_plan($Pla_IdPlan)
        {           

            $sql = "SELECT * FROM $this->nombre_tabla WHERE Pla_IdPlan = $Pla_IdPlan";
            $query = $this->db->query($sql);
            return $query->row();
        }

        function get_plan_tiendas()
        {           
            $sql = "SELECT * FROM plan as pla INNER JOIN pago_plan as pat ON pat.Pap_Plan = pla.Pla_IdPlan";
            $query = $this->db->query($sql);
            return $query->result();
        }



    }

?>