<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserRequest;
use App\Http\Requests\UserRespuest;
use App\Models\Blog;
use App\Models\Propriete;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function index()
    {
        $user = Auth::user();

        if ($user) {
            $profile = $user->profile;

            return view('dashboard.user.edit', compact('user', 'profile'));
        } else {
            return redirect()->route('login');
        }
    }

    public function create()
    {
        return view('dashboard.user.create');
    }

    public function store(UserRespuest $request)
    {
        $user = new User();
        $user->user_id = null;
        $user->name = $request->input('name');
        $user->last_name = $request->input('last_name');
        $user->email = $request->input('email');
        $user->number = $request->input('number');
        $user->message = $request->input('message');
        $user->save();

        return redirect()->back();
    }



    public function show(string $id)
    {
        $users = User::withCount('proprietes')->findOrFail($id);
        $proprietes = Propriete::findOrFail($id);


        return view('user.show', compact('users', 'proprietes'));
    }


    public function update(UserRespuest $request, $profile)
    {
        $user = User::findOrFail($profile);
        $user->name = $request->input('name');
        $user->prenom = $request->input('prenom');
        $user->email = $request->input('email');
        $user->number = $request->input('number');
        $user->number_2 = $request->input('number_2');
        $user->ville = $request->input('ville');
        $user->pays = $request->input('pays');
        $user->quartier = $request->input('quartier');

        if ($request->hasFile('photo_profile')) {
            $imagePath = $request->file('photo_profile')->store('public/profile_images');
            $user->profile_image = $imagePath;
        }

        $user->save();

        return redirect()->back()->with('success', 'Profil mis à jour avec succès!');
    }


    public function home()
    {
        $users = User::paginate(10);
        $blogs = Blog::paginate(10);
        $proprietes = Propriete::with('images')->paginate(10);
        $userCount = User::count();

        return view('accueil', compact('proprietes', 'blogs', 'users', 'userCount'));
    }

    function apropos()
    {
        $users = User::paginate(10);
        $blogs = Blog::paginate(10);
        $proprietes = Propriete::with('images')->paginate(10);
        $userCount = User::count();

        return view('apropos', compact('proprietes', 'blogs', 'users', 'userCount'));
    }


    function paiement()
    {
        return view('paiement');
    }
    function pricingPlan()
    {
        return view('pricing_plan');
    }
    function privacyPolicy()
    {
        return view('privacy_policy');
    }
    function propertyDetails()
    {
        return view('property_details');
    }
    function propertyGridView()
    {
        return view('property_grid_view');
    }
    function propertyLeftSidebar()
    {
        return view('property_left_sidebar');
    }
    function propertyListView()
    {
        return view('property_list_view');
    }
    function propertyRightSidebar()
    {
        return view('property_right_sidebar');
    }
    function forgotPassword()
    {
        return view('forgot_password');
    }
    function faq()
    {
        return view('faq');
    }
    function error()
    {
        return view('error');
    }
    function contact()
    {
        return view('contact');
    }
    function checkout()
    {
        return view('checkout');
    }


    function agent()
    {
        return view('agent');
    }
    function agentDetails()
    {
        return view('agent_details');
    }
    function agencies()
    {
        return view('agencies');
    }
    function agenciesDetails()
    {
        return view('agencies_details');
    }
}
