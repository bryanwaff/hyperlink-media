<?php

namespace App\Http\Controllers;

use App\Models\Inquiry;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class InquiryController extends Controller
{
    /**
     * Store a newly created inquiry in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'nullable|string|max:50',
            'company' => 'nullable|string|max:255',
            'service' => 'nullable|string|max:100',
            'budget' => 'nullable|string|max:50',
            'message' => 'required|string|max:5000',
        ]);

        try {
            $inquiry = Inquiry::create($validated);
            Log::info("New inquiry saved to database [ID: {$inquiry->id}]", [
                'name' => $inquiry->name,
                'email' => $inquiry->email,
                'service' => $inquiry->service,
            ]);
        } catch (\Throwable $e) {
            Log::error('Inquiry database save failed: ' . $e->getMessage());
            Log::info('Inquiry fallback log payload:', $validated);
        }

        return redirect()->route('contact')->with('success', 'Thank you for reaching out! We have received your inquiry and our technical production team will get in touch with you within 24 hours.');
    }
}
