<?php

namespace App\Models;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class ArtikelModel {
    public static function get_all(){
        $artikel = DB::table('articles')->get();
        $artikel += ['slug' => Str::slug($artikel['judul'],"-")];
        return $artikel;
    }

    public static function save($data){
        $artikel = DB::table('articles')->insert($data);
        return $artikel;
    }

    public static function find_by_id($id)
    {
        $artikel = DB::table('articles')->where('id',$id)->get();
        return $artikel;
    }

    public static function update($id, $request)
    {
        $artikel = DB::table('articles')
                        ->where('id',$id)
                        ->update([
                            'judul' => $request['judul'],
                            'isi'   => $request['isi'],
                            'slug'   => Str::slug($request['judul'],"-"),
                            'tag'   => $request['tag'],
                        ]);
        return $artikel;
    }

    public static function destroy($id)
    {
        $artikel = DB::table('articles')
                        ->where('id',$id)
                        ->delete();
        return $artikel;
    }
}