<?php

namespace App\Http\Controllers\Admin\Prospects;

use App\Models\Prospect;
use Illuminate\Http\Request;
use App\Models\ProspectContact;
use App\Http\Controllers\Controller;
use App\Http\Requests\Prospects\Contacts\StoreContactRequest;
use App\Http\Requests\Prospects\Contacts\UpdateContactRequest;

class ProspectContactsController extends Controller
{
    public function create(Prospect $prospect)
    {
        return view('admin.prospects.contacts.create', compact('prospect'));
    }

    public function store(StoreContactRequest $request, Prospect $prospect)
    {
        $contact = ProspectContact::updateOrCreate(['prospect_id' => $prospect->id], $request->validated());

        return redirect()->route('admin.prospects.show', $prospect->id)->with('success', 'Successfully created a new prospect!');
    }

    public function update(UpdateContactRequest $request, Prospect $prospect)
    {
        $prospect->contact->update($request->validated());

        return redirect()->route('admin.prospects.edit', $prospect->id)->with('success', 'Successfully updated prospect contact details!');
    }
}
