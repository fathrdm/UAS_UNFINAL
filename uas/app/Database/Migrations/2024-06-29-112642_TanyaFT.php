<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class TanyaFT extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id_tanyaft' => [
                'type'           => 'INT',
                'constraint'     => 5,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'nama_lengkap' => [
                'type'       => 'VARCHAR',
                'constraint' => '100',
            ],
            'nim' => [
                'type'       => 'VARCHAR',
                'constraint' => '20',
            ],
            'prodi' => [
                'type'       => 'VARCHAR',
                'constraint' => '50',
            ],
            'no_handphone' => [
                'type'       => 'VARCHAR',
                'constraint' => '20',
            ],
            'pertanyaan' => [
                'type'       => 'VARCHAR',
                'constraint' => '255',
            ],
            'tanggal_pengajuan' => [
                'type'    => 'DATETIME',
                'null' => true, 
            ],
            'file_berkas' => [
                'type'       => 'VARCHAR',
                'constraint' => '255',
            ],
        ]);
        $this->forge->addKey('id_tanyaft', true);
        $this->forge->createTable('tanyaft');
    }

    public function down()
    {
        $this->forge->dropTable('tanyaft');
    }
}
