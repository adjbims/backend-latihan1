<?php

namespace App\Models;
use CodeIgniter\Model;

class ProductModel extends Model {
    protected $table = 'products';
    protected $returnType = 'object';
    protected $primaryKey = 'id';
    protected $allowedFields = ['id', 'nama_product', 'description'];

    public function insertProductORM($data){
        return $this->insert($data);
    }
}