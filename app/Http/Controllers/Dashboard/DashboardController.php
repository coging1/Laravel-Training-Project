<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use Illuminate\View\View;

use App\Models\User;
use App\Models\Contact\Contact;
use App\Models\Category\Category;

class DashboardController extends Controller
{

  public function index(): View
  {
        // Count all
        $usersCount = User::count();
        $contactsCount = Contact::count();
        $categoriesCount = Category::count();
    
        return view('dashboard', compact('usersCount', 'contactsCount', 'categoriesCount'));
  }

}
