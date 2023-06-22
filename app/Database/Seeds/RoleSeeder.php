<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class RoleSeeder extends Seeder
{
    public function run()
    {
        //
        $data = [
            ['role_name'=>'admin','role_description'=>'The Default Role for Administrator'],
            ['role_name'=>'user','role_description'=>'The Default Role for User'],
            ['role_name'=>'other','role_description'=>'The Default Role for Other'],
        ];
        $this->db->table('tbl_roles')->insertBatch($data);
    }
}
