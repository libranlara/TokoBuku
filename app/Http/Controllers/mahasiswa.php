<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class mahasiswa extends Controller
{
    //
    public function insert(){
        //seperti query builder
    //     $data = [
    //         'usermame' => 'libran',
    //         'fakultas' => 'fakultas',
    //         'university' => 'pamulang',
    //         'address'=>'bojongsari'
    //     ];
    //  DB::table('mahasiswas')->insert($data);

    //seperti query php native
    DB::insert('insert into mahasiswas (usermame,fakultas,university,address) values (?,?,?,?)', ['oka' , 'teknik' , 'undip' ,'depok']);

        echo "sukssess";

    }
    public function read(){
        //query seperti builder
        // $view= DB::table('mahasiswas')->get();

        //query seperti native
$view=        DB::select('select * from mahasiswas');
                return $view;

            }


            public function update(){
                //seperti php native
            //   $edit = DB::update('update mahasiswas set usermame= "daivd" where id =?', [2] );
                

            //seperti query builder
            $data=[
                'usermame'=>'rui',
                'fakultas'=>'teknik'
            ];
                $edit = DB::table('mahasiswas')->where('id', [1])->update($data);

              return $edit;
            }
            public function delete()
            {
                # code...

                $apus = DB::table('mahasiswas')->where('id', [3])->delete();
                return $apus;
            }
}
