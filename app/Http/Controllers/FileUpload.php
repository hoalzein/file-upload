<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\File;
use Vaites;

class FileUpload extends Controller {

    public function index() {
        $files = File::all();
        return view('file-upload', compact('files'));
    }

    public function fileView($file_id) {
        $file = File::findOrFail($file_id);
        $file_path = $file->file_path . '/' . $file->name;
        if (file_exists($file_path)) {
            $client = Vaites\ApacheTika\Client::prepare('localhost', 9998);
            $html = $client->getHTML($file_path);
            return view('file-view', compact('html'));
        }
    }

    public function fileUpload(Request $request) {
        $request->validate([
            'file' => 'required|mimes:doc,docx,pdf|max:2048'
        ]);
        $file_model = new File;
        if ($request->file()) {
            $file_name = time() . '_' . $request->file->getClientOriginalName();
            $file = $request->file('file')->move(storage_path() . '/app/public/files/', $file_name);
            $file_model->name = $file->getFilename();
            $file_model->file_path = $file->getPath();
            $file_model->save();
            return back()->with('success', 'File has been successfully uploaded.')->with('file', $file_name);
        }
    }

}
