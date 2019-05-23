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
          'name' => array(
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
        )
      );

      $this->dbforge->add_key('id', TRUE);
      $this->dbforge->create_table('PC_Order');
    }

    public function down()
    {
      $this->dbforge->drop_table('PC_order');
    }
}
