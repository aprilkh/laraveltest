<?php

namespace App\Http\Controllers;
namespace App\Movies;

use Illuminate\Http\Request;

class MoviesController extends Controller
{
    //
    //
    public function index()
    {
    	//mengambil data tabel mhs;
    	$movies = DB::table('movies')->get();
    	//mengirim data ke view mhs
    	return view('movies', ['movies' => $movies]);
    }

    public function tambahData()
    {
    	return view('newmovies');
    }

    public function simpan(Request $request)
    {
    	DB::table('movies')->insert([
    		'id' => $request->id,
    		'titleType' => $request->titleType,
    		'primaryTitle' => $request->primaryTitle,
            'originalTitle' => $request->originalTitle,
            'isAdult' => $request->isAdult,
            'startYear' => $request->startYear,
            'endYear' => $request->endYear,
            'runtimeMinutes' => $request->runtimeMinutes,
            'genres' => $request->genres
    	]);
    	return redirect('/home');
    }

    public function edit($id)
    {
    	//mengambil data movie berdasarkan id yang dipilih
    	$movies = DB::table('movies')->where('id', $id)->get();
    	//passing data movie yang didapat ke view edit.blade.php
    	return view('updatemovies', ['movies' => $movies]);
    }

    public function update(Request $request)
    {
    	//update data mahasiswa berdasarkan if
    	DB::table('movies')->where('id', $request->id)->update([
    		'titleType' => $request->titleType,
            'primaryTitle' => $request->primaryTitle,
            'originalTitle' => $request->originalTitle,
            'isAdult' => $request->isAdult,
            'startYear' => $request->startYear,
            'endYear' => $request->endYear,
            'runtimeMinutes' => $request->runtimeMinutes,
            'genres' => $request->genres,
    	]);
    	return redirect('/home');
    }
    public function detail($id)
    {
        $movies = DB::table('movies')->where('id', $id)->get();
        return view('detailmovies', ['movies' => $movies]);
    }
    public function delete($id)
    {
        $movies = DB::table('movies')->where('id', $id)->delete();
        return "data berhasil dihapus";
    }
}
