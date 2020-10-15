<?php

class Moduleaccess_model extends MY_Model {

    public $useraccess;
    public $maplikasi;
    public $maplikasigroup;
    public $maplikasigroupmenu;
    public $maplikasigroupmenubutton;
    public $maplikasigroupuser;
    public $maplikasigroupuserproyekpt;
    public $mbutton;
    public $mmenu;
    public $proyek;
    public $proyekpt;
    public $pt;
    public $userlog;

    function __construct() {
        parent::__construct();
        $this->db = $this->load->database('am', true);
        $this->useraccess = 'useraccess';
        $this->maplikasi = 'maplikasi';
        $this->maplikasigroup = 'maplikasigroup';
        $this->maplikasigroupmenu = 'maplikasigroupmenu';
        $this->maplikasigroupmenubutton = 'maplikasigroupmenubutton';
        $this->maplikasigroupuser = 'maplikasigroupuser';
        $this->maplikasigroupuserproyekpt = 'maplikasigroupuserproyekpt';
        $this->mbutton = 'mbutton';
        $this->mmenu = 'mmenu';
        $this->proyek = 'proyek';
        $this->proyekpt = 'proyekpt';
        $this->pt = 'pt';
        $this->userlog = 'userlog';
    }
    public function getallbutton(){
        $this->db->where("statusdata",'active');
        $this->db->select('btncode');                    
        $result = $this->db->get($this->mbutton);
        return $this->returndata($result,'array');
    }

    public function gethirarcymenubygroup($id_maplikasigroup) {
        $sql = "
                select 
                    a.*,
                    b.id_maplikasi,
                    b.nama_menu,
                    b.icon,
                    b.id_parent,
                    b.urutan,
                    b.url_menu
                 from $this->maplikasigroupmenu a
                 inner join $this->mmenu b on b.id_$this->mmenu = a.id_$this->mmenu  
                 where
                  a.statusdata='active'
                  and b.statusdata='active'
                  and a.id_maplikasigroup='$id_maplikasigroup' 
                  order by b.id_parent,b.urutan asc   
              ";
        $result = $this->db->query($sql);
        return $this->returndata($result, 'array');
    }
    public function gethirarcymenubygroupbutton($id_maplikasigroup) {
        $sql = "
                select 
                    a.id_mmenu,
                    c.id_mbutton,
                    d.btncode,
                    d.btnname
                 from $this->maplikasigroupmenu a
                 left join $this->mmenu b on b.id_$this->mmenu = a.id_$this->mmenu  
                 left join $this->maplikasigroupmenubutton c on a.id_$this->maplikasigroupmenu = c.id_$this->maplikasigroupmenu  
                 left join $this->mbutton d on c.id_$this->mbutton = d.id_$this->mbutton  
                 where
                  a.statusdata='active'
                  and b.statusdata='active'
                  and c.statusdata='active'
                  and d.statusdata='active'
                  and a.id_maplikasigroup='$id_maplikasigroup' 
                  order by a.id_mmenu asc   
              ";
        $result = $this->db->query($sql);
        return $this->returndata($result, 'array');
    }
    public function gethirarcymenubygroupbuttonbyidmenu($id_maplikasigroup,$id_mmenu) {
        $sql = "
                select                    
                    d.btncode
                 from $this->maplikasigroupmenu a
                 left join $this->mmenu b on b.id_$this->mmenu = a.id_$this->mmenu  
                 left join $this->maplikasigroupmenubutton c on a.id_$this->maplikasigroupmenu = c.id_$this->maplikasigroupmenu  
                 left join $this->mbutton d on c.id_$this->mbutton = d.id_$this->mbutton  
                 where
                  a.statusdata='active'
                  and b.statusdata='active'
                  and c.statusdata='active'
                  and d.statusdata='active'
                  and a.id_maplikasigroup='$id_maplikasigroup' 
                  and a.id_mmenu='$id_mmenu' 
                  order by a.id_mmenu asc   
              ";
        $result = $this->db->query($sql);
        return $this->returndata($result, 'array');
    }

    public function getuserstatus($id_maplikasi, $id_user) {
        $sql = "
               SELECT 
                a.*,
                b.kode_group,
                b.nama_group,
                b.spesialgroup
               FROM $this->maplikasigroupuser a
               INNER JOIN $this->maplikasigroup b on b.id_$this->maplikasigroup = a.id_$this->maplikasigroup     
               INNER JOIN $this->maplikasi c on c.id_$this->maplikasi = b.id_$this->maplikasi
               WHERE
                 a.statusdata='active'
              AND b.statusdata='active'
              AND c.statusdata='active'
              AND a.id_user='$id_user'
              AND b.id_maplikasi='$id_maplikasi'             
              ORDER BY a.id_maplikasigroup DESC
              LIMIT 1
              ";
        $result = $this->db->query($sql);
        return $this->returndata($result, 'row');
    }

    public function gethirarcymenu($id_maplikasi = 0) {
        $this->db->where("statusdata", "active");
        if ($id_maplikasi > 0) {
            $this->db->where("id_maplikasi", $id_maplikasi);
        }
        $this->db->order_by("id_parent", 'asc');
        $this->db->order_by("urutan", 'asc');
        $result = $this->db->get($this->mmenu);
        return $this->returndata($result, "array");
    }

    public function getmoduleaccess($id_user) {
        $sql = "
               SELECT 
                a.id_user,
                b.id_maplikasi,
                c.kode_aplikasi,
                c.nama_aplikasi,
                c.icon  
               FROM $this->maplikasigroupuser a
               INNER JOIN $this->maplikasigroup b on b.id_$this->maplikasigroup = a.id_$this->maplikasigroup     
               INNER JOIN $this->maplikasi c on c.id_$this->maplikasi = b.id_$this->maplikasi
               WHERE
               a.statusdata='active'
              AND b.statusdata='active'
              AND c.statusdata='active'
              AND a.id_user='$id_user'
              GROUP BY   
                a.id_user,
                b.id_maplikasi,
                c.kode_aplikasi,
                c.nama_aplikasi  
              ORDER BY c.sortdata ASC
              
              ";
        $result = $this->db->query($sql);
        return $this->returndata($result, 'array');
    }

}
