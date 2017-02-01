<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests;

class LegalController extends Controller
{

    /**
     * View terms and condition of koll.com.ph
     * @return \Illuminate\View\View
     */
    public function terms()
    {
        return view('legal.terms');
    }

    /**
     * View privacy policy of koll.com.ph
     * @return \Illuminate\View\View
     */
    public function privacy()
    {
        return view('legal.privacy');
    }
}
