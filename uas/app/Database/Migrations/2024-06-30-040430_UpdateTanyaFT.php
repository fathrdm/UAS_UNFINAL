<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class UpdateTanyaFT extends Migration
{
    public function up()
    {
        $fields = [
            'tanggal_pengajuan' => [
                'type'    => 'TIMESTAMP',
                'null'    => false,
                'default' => 'CURRENT_TIMESTAMP',
            ],
        ];
        $this->forge->modifyColumn('tanyaft', $fields);
    }

    public function down()
    {
        $fields = [
            'tanggal_pengajuan' => [
                'type' => 'DATETIME',
                'null' => true,
            ],
        ];
        $this->forge->modifyColumn('tanyaft', $fields);
    }
}
