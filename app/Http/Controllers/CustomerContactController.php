<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\CustomerContact;

class CustomerContactController extends Controller
{
    public function index()
    {
        $customerContacts = CustomerContact::all();
        return view('customer_contacts.index', compact('customerContacts'));
    }

    public function create()
    {
        return view('customer_contacts.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'customerContact_id' => 'required',
            'name' => 'required',
            'phone' => 'required',
        ]);

        CustomerContact::create($request->all());

        return redirect()->route('customer_contacts.index')
            ->with('success', 'Customer contact created successfully.');
    }

    public function show(CustomerContact $customerContact)
    {
        return view('customer_contacts.show', compact('customerContact'));
    }

    public function edit(CustomerContact $customerContact)
    {
        return view('customer_contacts.edit', compact('customerContact'));
    }

    public function update(Request $request, CustomerContact $customerContact)
    {
        $request->validate([
            'customerContact_id' => 'required',
            'name' => 'required',
            'phone' => 'required',
        ]);

        $customerContact->update($request->all());

        return redirect()->route('customer_contacts.index')
            ->with('success', 'Customer contact updated successfully.');
    }

    public function destroy(CustomerContact $customerContact)
    {
        $customerContact->delete();

        return redirect()->route('customer_contacts.index')
            ->with('success', 'Customer contact deleted successfully.');
    }
}