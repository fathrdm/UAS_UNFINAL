<?php
namespace App\Models;

use CodeIgniter\Model;

class TanyaFTModel extends Model
{
    protected $table = 'tanyaft';
    protected $primaryKey = 'id_tanyaft';
    protected $useAutoIncrement = true;
    protected $allowedFields = ['nama_lengkap', 'nim', 'prodi', 'no_handphone', 'pertanyaan', 'tanggal_pengajuan', 'file_berkas'];

    //validation
    protected $validationRules = [

    ];
}
?>