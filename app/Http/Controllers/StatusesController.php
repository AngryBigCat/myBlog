<?php

namespace App\Http\Controllers;

use App\Models\Status;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class StatusesController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth', [
            'only' => ['store', 'destroy']
        ]);
    }

    public function index()
    {
        $user = Auth::user();
        $statuses = $user->statuses()
            ->orderBy('created_at', 'desc')
            ->paginate(30);
        return view('statuses.index', compact('user','statuses'));
    }

    public function store(Request $request)
    {
        $user = Auth::user();
        $status = Status::create([
            'content' => $request->status_content,
            'user_id' => $user->id
        ]);
        return back();
    }

    public function destroy($id)
    {
        Status::destroy($id);
        return 1;
    }
}
