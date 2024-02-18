<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Laporan;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(Request $request){
        $laporan = laporan::all();
        
        if ($request->has('search')) {
            $laporan = Laporan::where('id', 'like', '%' . $request->search . '%')->get();            
        }
        return view('Process',compact('laporan'));
    }

    public function adminTable(){
        return view('admin', [
            'laporan' => Laporan::all()
        ]);
    }

    public function show($id)
    {
        $user = Auth::user(); 
        $laporan = Laporan::findOrFail($id);
        return view('show', compact('laporan'));
    }

    public function updateStatus(Request $request, $id)
    {
        $laporan = Laporan::findOrFail($id);
        $laporan->status = $request->input('status');
        $laporan->feedback = $request->input('feedback');
        $laporan->save();

        return redirect()->route('show', $laporan->id)->with('success', 'Status berhasil diperbarui.');
    }

    public function destroy($id)
    {
        $laporan = laporan::find($id);

        if (!$laporan) {
            return response()->json(['message' => 'laporan not found'], 404);
        }
        $laporan->delete();

        return Redirect('/admin')->with('success', 'Laporan Berhasil Dihapus!');
    }
}
