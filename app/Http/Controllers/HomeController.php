<?php

namespace App\Http\Controllers;



use App\Models\User;
use Illuminate\Foundation\Application;
use Illuminate\View\View;
use Illuminate\Contracts\View\Factory;



class HomeController extends Controller
{
    public function __invoke(): Factory|View|Applicationlications
    {
        $users = User::query()
            ->select(['id', 'name', 'email'])
            ->paginate(5);

        return view('home', compact('users'));
    }
}
