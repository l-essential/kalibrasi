<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Migration_lessential extends CI_Migration {

        public function up()
        {
                # Tabel location
                $this->dbforge->add_field(array(
                        'id_location' => array(
                                'type' => 'INT',
                                'constraint' => 11,
                                'null' => FALSE,
                                'unsigned' => TRUE,
                                'auto_increment' => TRUE
                        ),
                        'location_code' => array(
                                'type' => 'VARCHAR',
                                'null' => FALSE,
                                'constraint' => '7',
                        ),
                        'location_name' => array(
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
                $this->dbforge->add_key('id_location', TRUE);
                $this->dbforge->create_table('location');

                # Tabel position
                $this->dbforge->add_field(array(
                    'id_position' => array(
                            'type' => 'INT',
                            'constraint' => 11,
                            'null' => FALSE,
                            'unsigned' => TRUE,
                            'auto_increment' => TRUE
                    ),
                    'id_position' => array(
                        'type' => 'INT',
                        'constraint' => 11,
                        'null' => FALSE,
                    ),
                    'location_code' => array(
                            'type' => 'VARCHAR',
                            'null' => FALSE,
                            'constraint' => '11',
                    ),
                    'location_name' => array(
                            'type' => 'VARCHAR',
                            'constraint' => '25',
                            'null' => FALSE,
                    ),
                    'location_name' => array(
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
            $this->dbforge->add_key('id_location', TRUE);
            $this->dbforge->create_table('location');
        }

        public function down()
        {
                $this->dbforge->drop_table('location');
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