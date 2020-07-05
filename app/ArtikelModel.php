<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class ArtikelModel extends Model
{
    public static function artikel()
    {
        return DB::table('artikles')->get();
    }
    public static function store($data)
    {
        $slug = str_replace(" ", "-", $data["judul"]);
        return DB::table('artikles')->insert([
            'slug' => $slug,
            'judul' => $data["judul"],
            'isi' => $data["isi"],
            'tag' => $data["tag"],
            'users_idusers' => 1
        ]);
    }
    public static function detil($id)
    {
        return DB::table('artikles')->where('idartikles', $id)->get();
    }
    public static function storeEdit($data, $id)
    {
        unset($data['_token'], $data['_method']);
        return DB::table('artikles')
            ->where('idartikles', $id)
            ->update($data);
    }
    public static function hapus($id)
    {
        return DB::table('artikles')->where('idartikles', $id)->delete();
    }
}
