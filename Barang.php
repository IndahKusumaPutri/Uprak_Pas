<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class barang extends Model
{
    protected $primaryKey = "id_barang";
    protected $table    = 'barangs';
    protected $fillable = ['nama_barang','stock_barang','merk'];
}
