<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Migration_Add_blog extends CI_Migration {

        public function up()
        {
                # Tabel lessential_accessapps
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
                $this->dbforge->add_key('blog_id', TRUE);
                $this->dbforge->create_table('blog');
        }

        public function down()
        {
                $this->dbforge->drop_table('blog');
        }
}