<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateAnnouncementsTable extends Migration
{
    public function up()
    {
        
   
        $this->forge->addField([
            "id" => [
                "type"          => "INT",
                "unsigned"      => true,
                "null"          => false,
                "auto_increment"=> true,
            ],
            "title" => [
                "type" => "VARCHAR",
                "constraint" => "50",
                "null" => false,

            ],
            "description" => [
                "type" => "TEXT",
                "constraint" => "250",
                "null" => true,
            ],
            "price" => [
                "type" => "NUMERIC",
                "null" => false,
            ],
            

        ]);

        $this->forge->addPrimaryKey("id");
        $this->forge->createTable("announcements");
    }

    public function down()
    {
        $this->forge->dropTable("announcements");
    }
}
