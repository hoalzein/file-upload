<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\File;

class FileUpload extends Controller {

    public function createForm() {
        return view('file-upload');
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
