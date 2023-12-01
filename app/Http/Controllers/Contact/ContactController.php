<?php

namespace App\Http\Controllers\Contact;

use App\Http\Controllers\Controller;
use App\Http\Requests\Contact\StoreContactRequest;
use App\Http\Requests\Contact\UpdateContactRequest;
use Illuminate\Http\Request;
use Illuminate\View\View;
use Illuminate\Http\RedirectResponse;

use App\Models\Contact\Contact;

class ContactController extends Controller
{
  /**
   * Display a listing of the resource.
   */
  public function index(Request $request): View
  {
    //search input
    $searchVal = $request->search ?? null;

    // users
    // paginate with query
    $contacts = Contact::where('first_name', 'LIKE', '%'.$searchVal.'%')->orWhere('middle_name', 'LIKE', '%'.$searchVal.'%')->paginate(5)->withQueryString();

    //$contacts = Contact::all(); //->paginate(5)->withQueryString();
    return view('contact.index', compact('contacts', 'searchVal'));
  }

  /**
   * Show the form for creating a new resource.
   */
  public function create()
  {
    //
    return view('contact.create');
  }

  /**
   * Store a newly created resource in storage.
   */
  public function store(StoreContactRequest $request): RedirectResponse
  {
    // Retrieve the validated input...
    $validated = $request->validated();

    // store new User to database
    $contact                     = new Contact;
    $contact->first_name         = $validated['first_name'];
    $contact->middle_name        = $validated['middle_name'];
    $contact->last_name          = $validated['last_name'];
    $contact->barangay           = $validated['barangay'];
    $contact->street             = $validated['street'];
    $contact->email_address      = $validated['email_address'];
    $contact->save();
    return redirect()->route('contacts.index')->with('status', 'Contact has been successfully added.');
  }

  /**
   * Display the specified resource.
   */
  public function show(Contact $contact): View
  {
    return view('contact.show', compact('contact'));
  }

  /**
   * Show the form for editing the specified resource.
   */
  public function edit(Contact $contact)
  {
    return view('contact.edit', compact('contact'));
  }

  /**
   * Update the specified resource in storage.
   */
  public function update(UpdateContactRequest $request, Contact $contact): RedirectResponse
  {
    // Retrieve the validated input...
    $validated = $request->validated();

    // update User
    $contact->first_name        = $validated['first_name'];
    $contact->middle_name       = $validated['middle_name'];
    $contact->last_name         = $validated['last_name'];
    $contact->barangay          = $validated['barangay'];
    $contact->street            = $validated['street'];
    $contact->email_address     = $validated['email_address'];

    $contact->update();

    // redirect to users page
    return redirect()->route('contacts.index')->with('status', 'Contact has been successfully updated.');
  }

  /**
   * Remove the specified resource from storage.
   */
  public function destroy(Contact $contact): RedirectResponse
  {
    // delete User
    $contact->delete();

    // redirect to users page
    return redirect()->route('contacts.index')->with('status', 'Oh naurr! Contact has been successfully deleted.');
  }
}
