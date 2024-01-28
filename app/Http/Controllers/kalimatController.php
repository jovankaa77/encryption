<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\enkripsi;
use Illuminate\Support\Facades\Crypt;

class kalimatController extends Controller
{
    public function index(){
        return view('kalimat/index');
    }

    public function halamanUtama(){
        return view('kalimat/halamanUtama');
    }
    public function addText(Request $request) {
    $input = $request->kalimat;

    // Query the 'enkripsi' table for a record where 'kalimat' equals the input 'kalimat'
    $seea = enkripsi::where('kalimat', $input)->first();
    $model = new enkripsi;

    if ($seea) {
        return redirect('kalimat')->with('pesan', 'enkripsi sudah ada');
    } else {
        $model->kalimat = Crypt::encryptString($request->kalimat);
    }

    $model->password = $request->password;
    $model->save();

    // Mengembalikan model setelah menyimpannya
    return redirect('kalimat')->with('pesan', 'Kalimat/URL baru telah ditambahkan')->with('model', $model);
    }


    public function seeText(){
        return view('kalimat/seeText');
    }
    public function postText(Request $request){
        // $inputP = $request->password;
        // $input = $request->kalimat;
        // $see = enkripsi::where('kalimat', $input)->first();
        // $seeP = enkripsi::where('password', $inputP)->first();
        // if($see && $seeP){
        //     if($see->kalimat !== $seeP->password){
        //         return redirect('kalimat/seeText')->with('pesan', 'Password tidak cocok');
        //     }
        //     $decrypted = Crypt::decryptString($see->kalimat);
        //     return redirect('kalimat/seeText')->with('pesan', $decrypted);

        // }else{
        //     return redirect('kalimat/seeText')->with('pesan', 'tidak ada pesan');
        // }

         // Get the 'password' and 'kalimat' fields from the request
        $inputP = $request->password;
        $input = $request->kalimat;

        // Query the 'enkripsi' table for a record where 'kalimat' equals the input 'kalimat'
        $see = enkripsi::where('kalimat', $input)->first();

        if ($see) {
            // Decrypt the 'kalimat' field from the database
            $decrypted = Crypt::decryptString($see->kalimat);

            // Check if the provided 'password' matches the 'password' in the database
            if ($inputP === $see->password) {
                return redirect('kalimat/seeText')->with('pesan', $decrypted);
            } else {
                // Password does not match
                return redirect('kalimat/seeText')->with('pesan', 'Password salah');
            }
        } else {
            // No matching 'kalimat' found in the database
            return redirect('kalimat/seeText')->with('pesan', 'Kalimat tidak ditemukan');
        }
    }

    public function postOrder(Request $request){
        $see = enkripsi::all();
    }



}
