<?php

namespace App\Models;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class ArtikelModel {
    public static function get_all(){
        $artikel = DB::table('articles')->get();
        return $artikel;
    }

    public static function save($data){
        $slug = Str::slug($data['judul'],"-");
        $data += ['slug' => $slug];
        $artikel = DB::table('articles')->insert($data);
        return $artikel;
    }

    public static function find_by_id($id)
    {
        $artikel = DB::table('articles')->where('id',$id)->first();
        return $artikel;
    }

    public static function update($id, $request)
    {
        $slug = Str::slug($request['judul'],"-");
        $artikel = DB::table('articles')
                        ->where('id',$id)
                        ->update([
                            'judul' => $request['judul'],
                            'isi'   => $request['isi'],
                            'slug'   => $slug,
                            'tag'   => $request['tag']
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