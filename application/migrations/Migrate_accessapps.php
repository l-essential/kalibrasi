<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Migration_accessapps extends CI_Migration {

        public function up()
        {
                # Tabel maplikasi
                $this->dbforge->add_field(array(
                        'id_maplikasi' => array(
                                'type' => 'INT',
                                'constraint' => 11,
                                'null' => FALSE,
                                'unsigned' => TRUE,
                                'auto_increment' => TRUE
                        ),
                        'sortdata' => array(
                                'type' => 'INT',
                                'null' => FALSE,
                                'constraint' => '3',
                        ),
                        'kode_aplikasi' => array(
                                'type' => 'VARCHAR',
                                'constraint' => '20',
                                'null' => FALSE,
                        ),
                        'nama_aplikasi' => array(
                            'type' => 'VARCHAR',
                            'constraint' => '80',
                            'null' => FALSE,
                        ),
                        'icon' => array(
                                'type' => 'VARCHAR',
                                'constraint' => '25',
                                'null' => FALSE,
                        ),
                        'statusdata' => array(
                            'type' => 'ENUM',
                            'null' => TRUE,
                        ),
                        'createby' => array(
                                'type' => 'INT',
                                'constraint' => '11',
                                'null' => TRUE,
                        ),
                        'createtime' => array(
                            'type' => 'DATETIME',
                            'null' => TRUE,
                        ),
                        'updateby' => array(
                                'type' => 'INT',
                                'constraint' => '11',
                                'null' => TRUE,
                        ),
                        'updatetime' => array(
                            'type' => 'DATETIME',
                            'null' => TRUE,
                            
                        ),
                        'deleteby' => array(
                                'type' => 'INT',
                                'constraint' => '11',
                                'null' => TRUE,
                        ),
                        'deletetime' => array(
                                'type' => 'DATETIME',
                                'null' => TRUE,
                        ),
                ));
                $this->dbforge->add_key('id_maplikasi', TRUE);
                $this->dbforge->create_table('maplikasi');

                # Table Maplikasigroup
                $this->dbforge->add_field(array(
                        'id_maplikasigroup' => array(
                                'type' => 'INT',
                                'constraint' => 11,
                                'null' => FALSE,
                                'unsigned' => TRUE,
                                'auto_increment' => TRUE
                        ),
                        'id_maplikasi' => array(
                                'type' => 'INT',
                                'null' => FALSE,
                                'constraint' => '11',
                        ),
                        'kode_group' => array(
                                'type' => 'VARCHAR',
                                'constraint' => '20',
                                'null' => FALSE,
                        ),
                        'nama_group' => array(
                            'type' => 'VARCHAR',
                            'constraint' => '60',
                            'null' => FALSE,
                        ),
                        'spesialgroup' => array(
                                'type' => 'VARCHAR',
                                'constraint' => '1',
                                'null' => FALSE,
                        ),
                        'statusdata' => array(
                            'type' => 'ENUM',
                            'null' => TRUE,
                        ),
                        'createby' => array(
                                'type' => 'INT',
                                'constraint' => '11',
                                'null' => TRUE,
                        ),
                        'createtime' => array(
                            'type' => 'DATETIME',
                            'null' => TRUE,
                        ),
                        'updateby' => array(
                                'type' => 'INT',
                                'constraint' => '11',
                                'null' => TRUE,
                        ),
                        'updatetime' => array(
                            'type' => 'DATETIME',
                            'null' => TRUE,
                            
                        ),
                        'deleteby' => array(
                                'type' => 'INT',
                                'constraint' => '11',
                                'null' => TRUE,
                        ),
                        'deletetime' => array(
                                'type' => 'DATETIME',
                                'null' => TRUE,
                        ),
                ));
                $this->dbforge->add_key('id_maplikasigroup', TRUE);
                $this->dbforge->create_table('maplikasigroup');

                # Table Maplikasigroupmenu
                $this->dbforge->add_field(array(
                        'id_maplikasigroupmenu' => array(
                                'type' => 'INT',
                                'constraint' => 11,
                                'null' => FALSE,
                                'unsigned' => TRUE,
                                'auto_increment' => TRUE
                        ),
                        'id_maplikasigroup' => array(
                                'type' => 'INT',
                                'null' => FALSE,
                                'constraint' => '11',
                        ),
                        'id_mmenu' => array(
                                'type' => 'INT',
                                'constraint' => '11',
                                'null' => FALSE,
                        ),
                        'statusdata' => array(
                            'type' => 'ENUM',
                            'null' => TRUE,
                        ),
                        'createby' => array(
                                'type' => 'INT',
                                'constraint' => '11',
                                'null' => TRUE,
                        ),
                        'createtime' => array(
                            'type' => 'DATETIME',
                            'null' => TRUE,
                        ),
                        'updateby' => array(
                                'type' => 'INT',
                                'constraint' => '11',
                                'null' => TRUE,
                        ),
                        'updatetime' => array(
                            'type' => 'DATETIME',
                            'null' => TRUE,
                            
                        ),
                        'deleteby' => array(
                                'type' => 'INT',
                                'constraint' => '11',
                                'null' => TRUE,
                        ),
                        'deletetime' => array(
                                'type' => 'DATETIME',
                                'null' => TRUE,
                        ),
                ));
                $this->dbforge->add_key('id_maplikasigroupmenu', TRUE);
                $this->dbforge->create_table('maplikasigroupmenu');

                # Table Maplikasigroupmenubutton
                $this->dbforge->add_field(array(
                        'id_maplikasigroupmenubutton' => array(
                                'type' => 'INT',
                                'constraint' => 11,
                                'null' => FALSE,
                                'unsigned' => TRUE,
                                'auto_increment' => TRUE
                        ),
                        'id_maplikasigroupbutton' => array(
                                'type' => 'INT',
                                'null' => FALSE,
                                'constraint' => '11',
                        ),
                        'id_mbutton' => array(
                                'type' => 'INT',
                                'constraint' => '11',
                                'null' => FALSE,
                        ),
                        'statusdata' => array(
                            'type' => 'ENUM',
                            'null' => TRUE,
                        ),
                        'createby' => array(
                                'type' => 'INT',
                                'constraint' => '11',
                                'null' => TRUE,
                        ),
                        'createtime' => array(
                            'type' => 'DATETIME',
                            'null' => TRUE,
                        ),
                        'updateby' => array(
                                'type' => 'INT',
                                'constraint' => '11',
                                'null' => TRUE,
                        ),
                        'updatetime' => array(
                            'type' => 'DATETIME',
                            'null' => TRUE,
                            
                        ),
                        'deleteby' => array(
                                'type' => 'INT',
                                'constraint' => '11',
                                'null' => TRUE,
                        ),
                        'deletetime' => array(
                                'type' => 'DATETIME',
                                'null' => TRUE,
                        ),
                ));
                $this->dbforge->add_key('id_maplikasigroupmenubutton', TRUE);
                $this->dbforge->create_table('maplikasigroupmenubutton');

                # Table Maplikasigroupuser
                $this->dbforge->add_field(array(
                        'id_maplikasigroupuser' => array(
                                'type' => 'INT',
                                'constraint' => 11,
                                'null' => FALSE,
                                'unsigned' => TRUE,
                                'auto_increment' => TRUE
                        ),
                        'id_maplikasigroup' => array(
                                'type' => 'INT',
                                'null' => FALSE,
                                'constraint' => '11',
                        ),
                        'id_user' => array(
                                'type' => 'INT',
                                'constraint' => '11',
                                'null' => FALSE,
                        ),
                        'statusdata' => array(
                            'type' => 'ENUM',
                            'null' => TRUE,
                        ),
                        'createby' => array(
                                'type' => 'INT',
                                'constraint' => '11',
                                'null' => TRUE,
                        ),
                        'createtime' => array(
                            'type' => 'DATETIME',
                            'null' => TRUE,
                        ),
                        'updateby' => array(
                                'type' => 'INT',
                                'constraint' => '11',
                                'null' => TRUE,
                        ),
                        'updatetime' => array(
                            'type' => 'DATETIME',
                            'null' => TRUE,
                            
                        ),
                        'deleteby' => array(
                                'type' => 'INT',
                                'constraint' => '11',
                                'null' => TRUE,
                        ),
                        'deletetime' => array(
                                'type' => 'DATETIME',
                                'null' => TRUE,
                        ),
                ));
                $this->dbforge->add_key('id_maplikasigroupuser', TRUE);
                $this->dbforge->create_table('maplikasigroupuser');

                # Table Mbutton
                $this->dbforge->add_field(array(
                        'id_mbutton' => array(
                                'type' => 'INT',
                                'constraint' => 11,
                                'null' => FALSE,
                                'unsigned' => TRUE,
                                'auto_increment' => TRUE
                        ),
                        'id_maplikasi' => array(
                                'type' => 'INT',
                                'null' => FALSE,
                                'constraint' => '11',
                        ),
                        'btncode' => array(
                                'type' => 'VARCHAR',
                                'constraint' => '20',
                                'null' => FALSE,
                        ),
                        'btnname' => array(
                                'type' => 'VARCHAR',
                                'constraint' => '50',
                                'null' => FALSE,
                        ),
                        'icon' => array(
                                'type' => 'VARCHAR',
                                'constraint' => '50',
                                'null' => FALSE,
                        ),
                        'statusdata' => array(
                            'type' => 'ENUM',
                            'null' => TRUE,
                        ),
                        'createby' => array(
                                'type' => 'INT',
                                'constraint' => '11',
                                'null' => TRUE,
                        ),
                        'createtime' => array(
                            'type' => 'DATETIME',
                            'null' => TRUE,
                        ),
                        'updateby' => array(
                                'type' => 'INT',
                                'constraint' => '11',
                                'null' => TRUE,
                        ),
                        'updatetime' => array(
                            'type' => 'DATETIME',
                            'null' => TRUE,
                            
                        ),
                        'deleteby' => array(
                                'type' => 'INT',
                                'constraint' => '11',
                                'null' => TRUE,
                        ),
                        'deletetime' => array(
                                'type' => 'DATETIME',
                                'null' => TRUE,
                        ),
                ));
                $this->dbforge->add_key('id_mbutton', TRUE);
                $this->dbforge->create_table('mbutton');

                # Table Mmenu
                $this->dbforge->add_field(array(
                        'id_mmenu' => array(
                                'type' => 'INT',
                                'constraint' => 11,
                                'null' => FALSE,
                                'unsigned' => TRUE,
                                'auto_increment' => TRUE
                        ),
                        'id_maplikasi' => array(
                                'type' => 'INT',
                                'null' => FALSE,
                                'constraint' => '11',
                        ),
                        'id_parent' => array(
                                'type' => 'INT',
                                'null' => FALSE,
                                'constraint' => '11',
                        ),
                        'urutan' => array(
                                'type' => 'VARCHAR',
                                'constraint' => '5',
                                'null' => FALSE,
                        ),
                        'nama_menu' => array(
                                'type' => 'VARCHAR',
                                'constraint' => '100',
                                'null' => FALSE,
                        ),
                        'icon' => array(
                                'type' => 'VARCHAR',
                                'constraint' => '50',
                                'null' => FALSE,
                        ),
                        'url_menu' => array(
                            'type' => 'VARCHAR',
                            'constraint' => '50',
                            'null' => TRUE,
                        ),
                        'statusdata' => array(
                            'type' => 'ENUM',
                            'null' => TRUE,
                        ),
                        'createby' => array(
                                'type' => 'INT',
                                'constraint' => '11',
                                'null' => TRUE,
                        ),
                        'createtime' => array(
                            'type' => 'DATETIME',
                            'null' => TRUE,
                        ),
                        'updateby' => array(
                                'type' => 'INT',
                                'constraint' => '11',
                                'null' => TRUE,
                        ),
                        'updatetime' => array(
                            'type' => 'DATETIME',
                            'null' => TRUE,
                            
                        ),
                        'deleteby' => array(
                                'type' => 'INT',
                                'constraint' => '11',
                                'null' => TRUE,
                        ),
                        'deletetime' => array(
                                'type' => 'DATETIME',
                                'null' => TRUE,
                        ),
                ));
                $this->dbforge->add_key('id_mmenu', TRUE);
                $this->dbforge->create_table('mmenu');

                # Table roleapps
                $this->dbforge->add_field(array(
                        'id_role' => array(
                                'type' => 'INT',
                                'constraint' => 11,
                                'null' => FALSE,
                                'unsigned' => TRUE,
                                'auto_increment' => TRUE
                        ),
                        'roleapps' => array(
                                'type' => 'VARCHAR',
                                'null' => FALSE,
                                'constraint' => '60',
                        ),
                        'statusdata' => array(
                            'type' => 'ENUM',
                            'null' => TRUE,
                        ),
                        'createby' => array(
                                'type' => 'INT',
                                'constraint' => '11',
                                'null' => TRUE,
                        ),
                        'createtime' => array(
                            'type' => 'DATETIME',
                            'null' => TRUE,
                        ),
                        'updateby' => array(
                                'type' => 'INT',
                                'constraint' => '11',
                                'null' => TRUE,
                        ),
                        'updatetime' => array(
                            'type' => 'DATETIME',
                            'null' => TRUE,
                            
                        ),
                        'deleteby' => array(
                                'type' => 'INT',
                                'constraint' => '11',
                                'null' => TRUE,
                        ),
                        'deletetime' => array(
                                'type' => 'DATETIME',
                                'null' => TRUE,
                        ),
                ));
                $this->dbforge->add_key('id_role', TRUE);
                $this->dbforge->create_table('roleapps');

                # Table useraccess
                $this->dbforge->add_field(array(
                        'id_user' => array(
                                'type' => 'INT',
                                'constraint' => 11,
                                'null' => FALSE,
                                'unsigned' => TRUE,
                                'auto_increment' => TRUE
                        ),
                        'id_role' => array(
                                'type' => 'INT',
                                'constraint' => 11,
                                'null' => FALSE,
                        ),
                        'register_date' => array(
                                'type' => 'DATE',
                        ),
                        'register_code' => array(
                                'type' => 'VARCHAR',
                                'constraint' => 15,
                        ),
                        'nik' => array(
                                'type' => 'INT',
                                'constraint' => 15,
                                'null' => FALSE,
                        ),
                        'pin' => array(
                                'type' => 'INT',
                                'constraint' => 6,
                                'null' => FALSE,
                        ),
                        'namakaryawan' => array(
                            'type' => 'VARCHAR',
                            'constraint' => 200,
                            'null' => FALSE,
                        ),
                        'kodedepartment' => array(
                            'type' => 'INT',
                            'constraint' => 11,
                            'null' => FALSE,
                        ),
                        'kodedivisi' => array(
                            'type' => 'VARCHAR',
                            'constraint' => 11,
                            'null' => FALSE,
                        ),
                        'kodeseksi' => array(
                            'type' => 'VARCHAR',
                            'constraint' => 7,
                            'null' => FALSE,
                        ),
                        'namaseksi' => array(
                            'type' => 'VARCHAR',
                            'constraint' => 10,
                            'null' => FALSE,
                        ),
                        'kodejabatan' => array(
                            'type' => 'INT',
                            'constraint' => 6,
                            'null' => FALSE,
                        ),
                        'username' => array(
                            'type' => 'VARCHAR',
                            'constraint' => 50,
                            'null' => FALSE,
                        ),
                        'password' => array(
                            'type' => 'TEXT',
                            'null' => FALSE,
                        ),
                        'email' => array(
                            'type' => 'VARCHAR',
                            'constraint' => 120,
                            'null' => FALSE,
                        ),
                        'status_login' => array(
                            'type' => 'INT',
                            'constraint' => 1,
                            'null' => FALSE,
                        ),
                        'id_position' => array(
                            'type' => 'INT',
                            'constraint' => 3,
                            'null' => FALSE,
                        ),
                        'user_address' => array(
                            'type' => 'VARCHAR',
                            'constraint' => 255,
                            'null' => FALSE,
                        ),
                        'department_name' => array(
                            'type' => 'VARCHAR',
                            'constraint' => 25,
                            'null' => FALSE,
                        ),
                        'notif_email' => array(
                            'type' => 'INT',
                            'constraint' => 1,
                            'null' => FALSE,
                        ),
                        'no_handphone' => array(
                            'type' => 'VARCHAR',
                            'constraint' => 15,
                            'null' => TRUE,
                        ),
                        'note' => array(
                            'type' => 'TEXT',
                            'null' => FALSE,
                        ),
                        'latitude' => array(
                            'type' => 'DOUBLE',
                            'null' => FALSE,
                        ),
                        'longitude' => array(
                            'type' => 'DOUBLE',
                            'null' => FALSE,
                        ),
                        'nama_gambar' => array(
                            'type' => 'VARCHAR',
                            'constraint' => 255,
                            'null' => FALSE,
                        ),
                        'lokasi_gambar' => array(
                            'type' => 'VARCHAR',
                            'constraint' => 255,
                            'null' => FALSE,
                        ),
                        'status_online' => array(
                            'type' => 'INT',
                            'constraint' => 1,
                            'null' => FALSE,
                        ),
                        'date_in' => array(
                            'type' => 'datetime',
                            'null' => FALSE,
                        ),
                        'date_out' => array(
                            'type' => 'datetime',
                            'null' => FALSE,
                        ),
                        'ipaddress' => array(
                            'type' => 'ENUM',
                            'null' => FALSE,
                        ),
                        'statusdata' => array(
                            'type' => 'ENUM',
                            'null' => TRUE,
                        ),
                        'createby' => array(
                                'type' => 'INT',
                                'constraint' => '11',
                                'null' => TRUE,
                        ),
                        'createtime' => array(
                            'type' => 'DATETIME',
                            'null' => TRUE,
                        ),
                        'updateby' => array(
                                'type' => 'INT',
                                'constraint' => '11',
                                'null' => TRUE,
                        ),
                        'updatetime' => array(
                            'type' => 'DATETIME',
                            'null' => TRUE,
                            
                        ),
                        'deleteby' => array(
                                'type' => 'INT',
                                'constraint' => '11',
                                'null' => TRUE,
                        ),
                        'deletetime' => array(
                                'type' => 'DATETIME',
                                'null' => TRUE,
                        ),
                ));
                $this->dbforge->add_key('id_user', TRUE);
                $this->dbforge->create_table('useraccess');

                # Table userlog
                $this->dbforge->add_field(array(
                        'id_userlog' => array(
                                'type' => 'INT',
                                'constraint' => 11,
                                'null' => FALSE,
                                'unsigned' => TRUE,
                                'auto_increment' => TRUE
                        ),
                        'id_useraccess' => array(
                                'type' => 'INT',
                        ),
                        'url' => array(
                                'type' => 'VARCHAR',
                                'constraint' => 255,
                        ),
                        'requestdata' => array(
                                'type' => 'TEXT',
                                'null' => TRUE,
                        ),
                        'ipaddress' => array(
                                'type' => 'VARCHAR',
                                'constraint' => 20,
                        ),
                        'browser' => array(
                                'type' => 'VARCHAR',
                                'constraint' => 160,
                        ),
                        'systemdevice' => array(
                                'type' => 'VARCHAR',
                                'constraint' => 50,
                        ),
                        'accesstime' => array(
                            'type' => 'TIMESTAMP',
                        ),
                ));
                $this->dbforge->add_key('id_userlog', TRUE);
                $this->dbforge->create_table('userlog');
        }

        public function down()
        {
                $this->dbforge->drop_table('maplikasi');
                $this->dbforge->drop_table('mapikasigroup');
                $this->dbforge->drop_table('maplikasigroupmenu');
                $this->dbforge->drop_table('maplikasigroupmenubutton');
                $this->dbforge->drop_table('maplikasigroupuser');
                $this->dbforge->drop_table('mbutton');
                $this->dbforge->drop_table('mmenu');
                $this->dbforge->drop_table('roleapps');
                $this->dbforge->drop_table('useraccess');
                $this->dbforge->drop_table('userlog');

        }
}