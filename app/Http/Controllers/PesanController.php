<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Resepsionis;

class PesanController extends Controller
{
    public function processForm(Request $request)
    {
        // Validate the form data
        $validatedData = $request->validate([
            'nama_pemesan' => 'required|string',
            'email' => 'required|email',
            'notelp' => 'required|string',
            'nama_tamu' => 'required|string',
            'jumlah_kamar' => 'required|string', // adjust the validation rule as per your requirement
            'cekIn' => 'required|date',
            'cekOut' => 'required|date',
            // Add more validation rules as needed
        ]);

        // Assuming Resepsionis is your model
        Resepsionis::create($validatedData);

        // You can add a success message or redirect to a thank you page
        return redirect('/thank-you')->with('success', 'Form submitted successfully!');
    }
}
