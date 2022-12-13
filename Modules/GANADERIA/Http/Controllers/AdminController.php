<?php

namespace Modules\GANADERIA\Http\Controllers;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Modules\SICA\Entities\Person;
use Modules\SICA\Entities\Apprentice;
use Modules\SICA\Entities\App;

use App\Models\User;
use Modules\SICA\Entities\Role;
use Modules\SICA\Entities\Course;


class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return Renderable
     */
    public function dashboard()
    {
        $people = Person::count();
        $apprentices = Apprentice::count();
        $apps = App::count();
        $users = User::count();
        $roles = Role::count();
        $courses = Course::count();
        $data = ['title'=>trans('ganaderia::menu.Dashboard'),'people'=>$people,'apprentices'=>$apprentices,'apps'=>$apps,'users'=>$users,'roles'=>$roles,'courses'=>$courses];
        return view('ganaderia::admin.dashboard',$data);
    }

}
