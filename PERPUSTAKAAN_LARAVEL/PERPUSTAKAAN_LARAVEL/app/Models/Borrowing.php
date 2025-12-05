<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Model;


class Borrowing extends Model
{
protected $fillable = ['mahasiswa_id','book_id','tgl_pinjam','tgl_kembali','kembali'];


public function mahasiswa(){ return $this->belongsTo(Mahasiswa::class); }
public function book(){ return $this->belongsTo(Book::class); }
}