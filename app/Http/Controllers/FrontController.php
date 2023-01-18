<?php

namespace App\Http\Controllers;

use App\Mail\Contactus;
use App\Models\Ads;
use App\Models\Cms;
use App\Models\Mutualtransfer;
use App\Models\Package;
use App\Models\Slider;
use App\Models\Subject;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class FrontController extends Controller
{
    public function index()
    {
        $teacher = User::with('teacherdatail')->where('role_id', 3)->orderByRaw('RAND()')->take(10)->get();
        $ads = Ads::where('status', 1)->orderByRaw('RAND()')->take(10)->get();
        $subject = Subject::all();
        $sliders = Slider::all();
        $about = Cms::where('slug', 'about')->first();
        return view('welcome', compact('teacher','ads','subject','sliders','about'));
    }
    public function ourteacher(Request $request)
    {
        $data = User::with('teacherdatail')->where('role_id', 3);
        if($request->name != ''){
            $data->where('name','LIKE', '%'.$request->name.'%');
        }
        if($request->area != ''){
            $data->whereHas('teacherdatail', function($q){

                $q->where('area', 'LIKE', '%'.request()->area.'%');
            
            });
        }
        if($request->subject != ''){
            $data->whereHas('teacherdatail', function($q){

                $q->where('subject', 'LIKE', '%'.request()->subject.'%');
            
            });
        }
        if($request->class != ''){
            $data->whereHas('teacherdatail', function($q){

                $q->where('class', 'LIKE', '%'.request()->class.'%');
            
            });
        }
        $data = $data->latest()->paginate(10);
        $subject = Subject::all();
        return view('our-teacher', compact('data','subject'));
    }
    public function searchteacher(Request $request)
    {
        $data = User::with('teacherdatail')->where('role_id', 3);
        if($request->subject != ''){
            $data->whereHas('teacherdatail', function($q){

                $q->where('subject', 'LIKE', '%'.request()->subject.'%');
            
            });
        }
        if($request->address != ''){
            $data->where(function($q){
                $q->where('address', 'LIKE', '%'.request()->address.'%');
                $q->orwhereHas('teacherdatail', function($p){

                    $p->where('pin', 'LIKE', '%'.request()->address.'%');
                    $p->orwhere('area', 'LIKE', '%'.request()->address.'%');
                    $p->orwhere('district', 'LIKE', '%'.request()->address.'%');
                    $p->orwhere('schoolAddress', 'LIKE', '%'.request()->address.'%');
                
                });
            
            });
        }
        $data = $data->latest()->paginate(10);
        $subject = Subject::all();
        return view('our-teacher', compact('data','subject'));
    }
    public function mutualtransfer()
    {
        $data = Mutualtransfer::with('user','user.teacherdatail')->get();
        return view('mutual-transfer', compact('data'));
    }
    public function pricing()
    {
        $data = Package::all();
        return view('package', compact('data'));
    }
    public function contact()
    {
        try {
            Mail::to("svn292@gmail.com")->send(new Contactus(request()->all()));
         } catch (\Exception $e) {
            
         }
         return redirect()->back()->with('success', 'Thank you for contacting us');
    }
}
