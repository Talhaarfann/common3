<?php

namespace App\Http\Controllers;

use App\Http\Requests\ContactRequest;
use App\Models\ContactEnquiry;
use App\Services\SendContactEnquiry;
use Illuminate\Database\QueryException;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Log;
use Illuminate\View\View;

class ContactController extends Controller
{
    public function index(): View
    {
        return view('contact');
    }

    public function thankYou(): View
    {
        return view('contact-thank-you');
    }

    public function store(ContactRequest $request, SendContactEnquiry $sender): RedirectResponse
    {
        try {
            $enquiry = ContactEnquiry::create($request->safe()->only(['name', 'company', 'email', 'phone', 'message']));
        } catch (QueryException $exception) {
            Log::error('Common3 enquiry could not be stored.');

            return redirect()->to(route('contact').'#contact-feedback', 303)->withInput($request->except('_token', 'website'))
                ->withErrors(['delivery' => 'We could not receive your enquiry right now. Please email info@common3.com directly.']);
        }

        if (! $sender->send($enquiry)) {
            return redirect()->to(route('contact').'#contact-feedback', 303)->withInput($request->except('_token', 'website'))
                ->withErrors(['delivery' => 'Your enquiry was saved, but its email notification could not be sent. Please email info@common3.com directly if your request is urgent.']);
        }

        return redirect()->route('contact.thank-you', [], 303);
    }
}
