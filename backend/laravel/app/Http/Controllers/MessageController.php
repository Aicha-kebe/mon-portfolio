<?php
namespace App\Http\Controllers;


use App\Models\Message;
use Illuminate\Http\Request;

class MessageController extends Controller
{
    public function store(Request $request)
    {
        $validated = $request->validate([
            'nom' => 'required|string|max:100',
            'email' => 'required|email|max:150',
            'message' => 'required|string',
        ]);

        Message::create($validated);

        return response()->json([
            'success' => true,
            'message' => 'Votre message a été envoyé avec succès.',
        ], 201)
            ->header('Access-Control-Allow-Origin', '*')
            ->header('Access-Control-Allow-Methods', 'POST, OPTIONS')
            ->header('Access-Control-Allow-Headers', 'Content-Type, X-Requested-With, Accept');
    }
}
