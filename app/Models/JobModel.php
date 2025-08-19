<?php

namespace App\Models;

use CodeIgniter\Model;

class JobModel extends Model
{
    protected $table      = 'jobs';
    protected $primaryKey = 'id';

    protected $useSoftDeletes = true; // Habilita soft deletes
    protected $allowedFields = [
        'name', 'company', 'location', 'description', 
        'salary', 'application_deadline', 'experience', 'benefits', 'status'
    ];

    protected $useTimestamps = true; // Habilita created_at e updated_at
    protected $deletedField  = 'deleted_at';

    public function getCreatedAtFormatted()
{
    return date('d-m-Y', strtotime($this->created_at));
}
}