<?php 

namespace Origami\User\Controllers\Admin;

use \Validator;
use Carbon\Carbon;
use \Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Session;
// use Origami\User\Repositories\Admin\UserRepository;

class UserAuthController extends Controller {

    // protected $user;

    // function __construct(UserRepository $user){
    //     $this->user = $user;
    // }

    /**
     * Display a listing of the users.
     *
     * @return Response
     */
    public function getLogin()
    {
      // dd('show all users');  
      return view('user::admin.login');
    }

    /**
     * Display a listing of the users.
     *
     * @return Response
     */
    public function postLogin(Request $request)
    {
      // dd('show all users');  
      // return view('user::admin.index');
    }

}