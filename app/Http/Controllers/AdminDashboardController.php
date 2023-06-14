<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Requests\UserRequest;
use App\Models\AdminDashboardModel;

class AdminDashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $users=User::all();
        return view('index',compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        return view('create');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(UserRequest $request)
    {
        $inputs=$request->all();
        $userDB=User::where('mobile',$inputs['mobile'])->first();

        if($userDB != null){
            return redirect()->route('home')->with('swal-error', 'کاربر شما قبلا ساخته شده است');
        }else{
            $user = User::create($inputs);
        return redirect()->route('home')->with('swal-success', 'کاربر جدید شما با موفقیت ساخته شد');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {

        $user=User::where('id',$user->id)->first();
        return view('edit',compact('user'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UserRequest $request,User $user)
    {


        $inputs=$request->all();

       $user->update($inputs);

       return redirect()->route('home')->with('swal-success', 'کاربر شما با موفقیت به روزرسانی شد');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        $dlUser = $user->delete();
        return redirect()->route('home')->with('swal-success', 'کاربر شما با موفقیت حذف شد');
    }
}
