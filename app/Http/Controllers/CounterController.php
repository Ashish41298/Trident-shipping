<?php

namespace App\Http\Controllers;

use App\Models\Cardbox;
use App\Models\Cards;
use App\Models\Counter;
use App\Models\Slider;
use App\Models\User;
use Illuminate\Http\Request;

class CounterController extends Controller
{
   /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $allcounter = Counter::orderBy('created_at', 'desc')->get();
         $totalslides = Slider::all()->count() ?? 0;
         $totalusers = User::all()->count() ?? 0;
         $totalboxcards = Cardbox::all()->count() ?? 0;
        $totalcounters = $allcounter->count() ?? 0;
        return view('admdash.counter.index',compact('allcounter', 'totalusers', 'totalslides','totalcounters','totalboxcards'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admdash.counter.add');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            "title"=> "required",
            "numbers"=>"required",
            "icon"=>"required|image|mimes:svg"
        ],
        ["icon.required" => "The icon image field is required!",
            "icon.image"=>"The icon image field must be an image.",
            "icon.mimes"=> "The icon image field must be a file of type:svg."]);
        
            $file = $request->file('icon');
            $filename = "";

            if(!empty($file) && $file !==""){
                $path = public_path()."/icon/";
                $filename = "icon_".time()."_".$file->getClientOriginalName();
                $moved = $file->move($path,$filename);
            }
            
            $data = [
                "title"=>$request->title,
                "numbers"=>$request->numbers,
                "icon"=> $filename
            ];
        $counter = Counter::create($data);

        if(!empty($counter)){
         return redirect()->route('counter.index')->with('success','Counter created Successfull.');
        }else{
            return redirect()->route('counter.index')->with('error','something whent to wrong! try again.');
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Slider $slider)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $counter = Counter::find($id);
        return view('admdash.counter.edit', compact("counter"));   
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $counter = Counter::find($id);
        $validated = $request->validate([
            "title"=> "required",
            "numbers"=>"required",
            "icon"=>"image|mimes:svg"
        ],
        ["icon.required" => "The icon image field is required!",
            "icon.image"=>"The icon image field must be an image.",
            "icon.mimes"=> "The icon image field must be a file of type:svg."]);

            $file = $request->file('icon');
            $filename = "";
            if(!empty($file) && $file !==""){
                $path = public_path()."/icon/";
                if(file_exists($data = $path.$counter->icon)){
                    $counter->icon ? unlink($data) : "";
                }
                $filename = "slide_".time()."_".$file->getClientOriginalName();
                $moved = $file->move($path,$filename);
            }else{
                $filename = $counter->icon;
            }

        $counters = $counter->update([
            "title"=>$request->title,
            "numbers"=>$request->numbers,
            "icon"=> $filename
        ]);

        if(!empty($counters) && $counters == true){
         return redirect()->route('counter.index')->with('success','Counter update Successfull.');
        }else{
            return redirect()->route('counter.index')->with('error','something whent to wrong! try again.');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $counter = Counter::find($id);
        if($counter){
            $path = public_path()."/icon/";
            if(file_exists($data = $path.$counter->icon)){
                $counter->icon ? unlink($data) : "";
            }
            $counter->delete();
            return redirect()->route('counter.index')->with('success','counter deleted Successfull.');
        }else{return redirect()->route('counter.index')->with('error','something whent to wrong! try again.');
        }
    }
}
