<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Http\Requests\User\StoreUserRequest;
use App\Http\Requests\User\UpdateUserRequest;
use Illuminate\Http\Request;
use Illuminate\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Hash;

use App\Models\User;

class UserController extends Controller
{
	/**
	 * Display a listing of the resource.
	 */
	public function index(Request $request): View
	{

		// search input
		$searchVal = $request->search ?? null;

		// users
		// paginate with query
		$users = User::where('name', 'LIKE', '%'.$searchVal.'%')->whereNot('id', auth()->user()->id)->paginate(5)->withQueryString();
		
		return view('user.index', compact('users', 'searchVal'));
	}

	/**
	 * Show the form for creating a new resource.
	 */
	public function create(): View
	{
		return view('user.create');
	}

	/**
	 * Store a newly created resource in storage.
	 */
	public function store(StoreUserRequest $request): RedirectResponse
	{
		// Retrieve the validated input...
		$validated = $request->validated();

		// store new User to database
		$user 							= new User;
		$user->name 				= $validated['name'];
		$user->email 				= $validated['email'];
		$user->password 		= Hash::make($validated['password']);
		$user->save();

		// redirect to users page
		return redirect()->route('users.index')->with('status', 'User has been successfully added.');
	}

	/**
	 * Display the specified resource.
	 */
	public function show(User $user): View
	{
		return view('user.show', compact('user'));
	}

	/**
	 * Show the form for editing the specified resource.
	 */
	public function edit(string $id)
	{
		// 
	}

	/**
	 * Update the specified resource in storage.
	 */
	public function update(UpdateUserRequest $request, User $user): RedirectResponse
	{
		// Retrieve the validated input...
		$validated = $request->validated();

		// update User
		$user->name 				= $validated['name'];
		$user->email 				= $validated['email'];

		if ($request->has('password')) {
			// dd($request->password);
			$user->password 	= Hash::make($validated['password']);
		}

		$user->update();

		// redirect to users page
		return redirect()->route('users.index')->with('status', 'User has been successfully updated.');
	}

	/**
	 * Remove the specified resource from storage.
	 */
	public function destroy(User $user): RedirectResponse
	{
		// delete User
		$user->delete();

		// redirect to users page
		return redirect()->route('users.index')->with('status', 'User has been successfully deleted.');

	}
}
