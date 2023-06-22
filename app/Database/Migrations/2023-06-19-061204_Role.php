<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Role extends Migration
{
    public function up()
    {
        //will have role_id, role_name,role_description , role_status
        $this->forge->addField([
                'role_id' => [
                    'type'=> 'INT',
                    'constraint' => 11,
                    'unsigned' => true,
                    'auto_increment' => true 
                ],
                'role_name' => [
                    'type' => 'VARCHAR',
                    'constraint' => '20'
                ],
                'role_description' => [
                    'type' => 'VARCHAR',
                    'constraint' => '100'
                ],
                'role_status' =>[
                    'type' => 'INT',
                    'constraint' => 1
                ],

            ]
        );
        $this->forge->addPrimaryKey('role_id');
        $this->forge->createTable('tbl_roles');
        
    }

    public function down()
    {
        //
        $this->forge()->dropTable('tbl_roles');
    }
}
