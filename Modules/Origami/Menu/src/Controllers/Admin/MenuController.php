<?php 

namespace Origami\Menu\Controllers\Admin;

use \Validator;
use Carbon\Carbon;
use \Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Session;
// use Origami\User\Repositories\Admin\UserRepository;

class MenuController extends Controller {

    // protected $user;

    // function __construct(UserRepository $user){
    //     $this->user = $user;
    // }

   /**
     * Display a listing of the users.
     *
     * @return Response
     */
    public function index(Request $request)
    {
      // dd('show all users');  
      return view('menu::admin.index');
    }

    /**
     * edit.
     *
     * @return id
     */
    public function edit($id)
    {

        //
    }
   
    /**
     * Create.
     *
     * @return Response
     */
    public function create()
    {
        //
    }

    /**
     * Destroy .
     *
     * @return Response
     */
    public function destroy($id){
        //
    }

    /**
     * Store.
     *
     * @return Response
     */
    public function store(SlotCreateRequest $request)
    {
          //
    }

    /**
     * Update
     *
     * @return Response
     */
    public function update(SlotUpdateRequest $request)
    {
        //
    }

}