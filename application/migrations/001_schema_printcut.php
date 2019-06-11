<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Migration_Schema_Printcut extends CI_Migration
{
    public function up()
    {
      $this->dbforge->add_field(
        array(
          'id' => array(
             'type' => 'INT',
             'constraint' => 5,
             'unsigned' => true,
             'auto_increment' => true
          ),
          'nama' => array(
             'type' => 'VARCHAR',
             'constraint' => '500',
          ),
          'email' => array(
             'type' => 'VARCHAR',
             'constraint' => '500',
             'null' => true,
          ),
          'kontak' => array(
            'type' => 'TEXT',
            'null' => true
          ),
          'file' => array(
            'type' => 'TEXT',
            'null' => true,
          ),
          'created_at' => array(
            'type' => 'DATETIME',
            'null' => true,
          ),
        )
      );

      $this->dbforge->add_key('id', TRUE);
      $this->dbforge->create_table('PC_Order_Upload');

      /*----------------------------------------*/

      $this->dbforge->add_field(
        array(
          'id' => array(
             'type' => 'INT',
             'constraint' => 5,
             'unsigned' => true,
             'auto_increment' => true
          ),
          'nama' => array(
             'type' => 'VARCHAR',
             'constraint' => '500',
          ),
          'ukuran' => array(
             'type' => 'VARCHAR',
             'constraint' => '300',
             'null' => true,
          ),
          'jenis' => array(
            'type' => 'VARCHAR',
            'constraint' => '300',
            'null' => true
          ),
          'warna' => array(
            'type' => 'VARCHAR',
            'constraint' => '500',
            'null' => true,
          ),
          'deskripsi' => array(
            'type' => 'TEXT',
            'null' => true,
          ),
          'link_os' => array(
            'type' => 'TEXT',
            'null' => true,
          ),
          'gambar' => array(
            'type' => 'TEXT',
            'null' => true,
          ),
          'created_at' => array(
            'type' => 'DATETIME',
            'null' => true,
          ),
        )
      );

      $this->dbforge->add_key('id', TRUE);
      $this->dbforge->create_table('PC_Stiker');

      /*----------------------------------------*/

      $this->dbforge->add_field(
        array(
          'id' => array(
             'type' => 'INT',
             'constraint' => 5,
             'unsigned' => true,
             'auto_increment' => true
          ),
          'username' => array(
             'type' => 'VARCHAR',
             'constraint' => '500',
          ),
          'password' => array(
             'type' => 'TEXT',
             'null' => false
          ),
          'type' => array(
            'type' => 'INT',
            'constraint' => 2,
            'null' => false
          ),
          'created_at' => array(
            'type' => 'DATETIME',
            'null' => true,
          ),
        )
      );

      $this->dbforge->add_key('id', TRUE);
      $this->dbforge->create_table('User');
    }

    public function down()
    {
      $this->dbforge->drop_table('PC_Order_Upload');
      $this->dbforge->drop_table('PC_Stiker');
      $this->dbforge->drop_table('User');
    }
}
