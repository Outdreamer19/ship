<?php

namespace App\Http\Controllers;

use App\Models\Package;
use Illuminate\Http\Request;

class FileController extends Controller
{
    public function viewFile($id)
    {
        $file = Package::findOrFail($id); // Retrieve the file record from the database
        $filePath = storage_path('app/public/' . $file->invoice_path); // Assuming the file path is stored in the 'path' column

        return response()->file($filePath);
    }
}
