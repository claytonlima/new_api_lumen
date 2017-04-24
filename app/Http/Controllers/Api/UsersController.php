<?php
/**
 * Created by PhpStorm.
 * User: clayton
 * Date: 14/04/17
 * Time: 21:56
 */

namespace app\Http\Controllers\Api;


use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Http\Request;

class UsersController extends Controller
{
    public function index(){
        $users = User::paginate();
        return $users;
    }

    public function show($id){
        $user = User::findOrFail($id);
        return $user;
    }

    public function store(Request $request){
        $user = User::create($request->all());
        return $user;
    }

    public function update(Request $request, $id){
        $user = User::findOrFail($id);
        $user->update($request->all());
        return $user;
    }

    public function destroy($id){
        $user = User::findOrFail($id);
        $user->delete();
        return $user;
    }
}