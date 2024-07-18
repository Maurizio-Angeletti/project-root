<?php

namespace App\Models;

use CodeIgniter\Model;
use App\Entities\AnnouncementEntity;

class Announcement extends Model
{
    protected $table            = 'announcements';
    protected $primaryKey       = 'id';
    protected $useAutoIncrement = true;
    protected $returnType       = AnnouncementEntity::class;
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields    = [
        "title",
        "description",
        "price"
    ];


    protected bool $allowEmptyInserts = false;
    protected bool $updateOnlyChanged = true;

    protected array $casts = [];
    protected array $castHandlers = [];

    // Dates
    protected $useTimestamps = false;
    protected $dateFormat    = 'datetime';
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';

    // Validation
    protected $validationRules      = [
        "title" => "required|max_length[50]",
        "description" => "max_length[250]",
        "price" => "required|greater_than[0]"
    ];
    protected $validationMessages   = [
        "title" => [
            "required" => "Il campo {field} è richiesto",
            "max_length" => "Il campo {field} non può avere più di {param} caratteri"
        ],
        "description" => [
            "max_length" => "Il campo {field} non può avere più di {param} caratteri"
        ],
        "price" => [
            "required" => "Il campo {field} è richiesto",
            "greater_than" => "Il campo {field} deve essere maggiore di {param}"
        ]
        
    ];
    protected $skipValidation       = false;
    protected $cleanValidationRules = true;

    // Callbacks
    protected $allowCallbacks = true;
    protected $beforeInsert   = [];
    protected $afterInsert    = [];
    protected $beforeUpdate   = [];
    protected $afterUpdate    = [];
    protected $beforeFind     = [];
    protected $afterFind      = [];
    protected $beforeDelete   = [];
    protected $afterDelete    = [];
}
