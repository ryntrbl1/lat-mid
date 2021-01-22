<?php

namespace App\Http\Controllers;

use App\Lyric;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function WelcomePage() {
        $datas = Lyric::all();
        return view('welcome', compact('datas'));
    }

    public function lyrics() {
        return view('create');
    }

   public function stores(Request $request) {
       $data = request();
        if($data->hasFile('Photo')){
            $fileNameWithExt = $data->file('Photo')->getClientOriginalName();
            $fileName = pathinfo($fileNameWithExt, PATHINFO_FILENAME);
            $extension = $data->file('Photo')->getClientOriginalExtension();
            $fileNameToStore = $fileName.'_'.time().'_'.'.'.$extension;
            $path = $data->file('Photo')->storeAs('public/Photo', $fileNameToStore);
        }else{
            $fileNameToStore = 'no-image.jpg';
        }
        Lyric::Create([
            'Judul_Lagu' => $request -> Judul_Lagu,
            'Penyanyi' => $request ->  Penyanyi,
            'Tahun' => $request -> Tahun,
            'Lirik' => $request -> Lirik,
            'Photo' => $fileNameToStore
        ]); 
        return redirect('/');
    }

    Public function lirik($id) {
        $data = Lyric::findorfail($id);
        return view('detail', compact('data'));
    }

    Public function delete($id){
        Lyric::destroy($id);
        return back();
    }

    Public function update($id){
        $data = Lyric::findorfail($id);
        return view('update', compact('data'));
    }

    Public function storelagu(Request $request, $id){
        Lyric::findorfail($id) -> update([
            'Judul_Lagu' => $request -> Judul_Lagu,
            'Penyanyi' => $request -> Penyanyi,
            'Tahun' => $request -> Tahun,
            'Lirik' => $request -> Lirik,
        ]);
        return redirect('/');
    }

}