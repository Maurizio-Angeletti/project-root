<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class AddNameToUsers extends Migration
{
    public function up()
    {
       $this->forge->addColumn("users", ["name" => [

            'Type' => 'VARCHAR',
            'constraint' => 20,
            'null' => false,
            ]

       ]);
    }

    public function down()
    {
        $this->forge->dropColumn('users', 'name');
    }
    
}
