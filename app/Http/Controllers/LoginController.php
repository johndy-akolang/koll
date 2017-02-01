<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Redirect;
use Session;
use Auth;
use Input;
use View;

use App\Http\Requests;
use App\Http\Controllers\Controller;

/* add */
use App\AuthTraits\RedirectsUsers;

class LoginController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */

    use RedirectsUsers;

    protected $redirectTo = '/';

    public function __construct()
    {
        /*$this->middleware('guest', ['except' => 'logout']);*/

    }

    /**
     * show the application login form
     *
     * @return \Illuminate\Http\Response
     */
    public function showLogin()
    {
        // show the form
        return View::make('login');

    }

    /*
     * Handle a login request to the application
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function doLogin(Request $request)
    {
        $this->validate($request, [
            'email' => 'required|email', 'password' => 'required',
        ]);

        $credentials = $this->getCredentials($request);

        if (Auth::attempt($credentials, $request->has('remember'))) {
            return redirect()->intended($this->redirectPath());
        }

        return redirect($this->loginPath())
            ->withInput($request->only('email', 'remember'))
            ->withErrors([
                'email' => $this->getFailedLoginMessage(),
            ]);

    }

    /*
     * Get the failed login message.
     *
     * @return string
     */
    public function getCredentials(Request $request)
    {
        return $request->only('email', 'password');
    }

    protected function getFailedLoginMessage()
    {
        return 'These credentials do not match our records.';
    }

    /*
     * Log the user out of the application.
     *
     * @return \Illuminate\Http\Response
     *
     */
    public function doLogout()
    {
        Auth::logout(); // logout user

        return Redirect::to('/')->with('message', 'Your are now logged out!');
        /*Session::flush();

        return redirect(property_exists($this, 'redirectAfterLogout') ?
        $this->redirectAfterLogout : '/');*/

    }

    /*
     * Get the path to the login route.
     *
     * @return string
     */
    public function loginPath()
    {
        return property_exists($this, 'loginPath') ? $this->loginPath : '/login';
    }

    public function loginsuccess()
    {
        return view('loginsuccess');
    }

}
