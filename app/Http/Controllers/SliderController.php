<?php

namespace App\Http\Controllers;

use App\Models\Cardbox;
use App\Models\Counter;
use App\Models\Slider;
use App\Models\User;
use Illuminate\Http\Request;

class SliderController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
         $allslides = Slider::orderBy('created_at', 'desc')->get();
         $totalusers = User::all()->count() ?? 0;
         $totalcounters = Counter::all()->count() ?? 0;
         $totalboxcards = Cardbox::all()->count() ?? 0;
        $totalslides = $allslides->count() ?? 0;
        return view('admdash.slider.index',compact('allslides', 'totalusers', 'totalslides','totalcounters','totalboxcards'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admdash.slider.add');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            "name"=> "",
            "description"=>"",
            "slide"=>"required|image|mimes:png,jpeg,jpg,gif,svg"
        ],
            ["slide.required" => "The slide image field is required!",
                "slide.image"=>"The slide image field must be an image.",
                "slide.mimes"=> "The slide image field must be a file of type: png, jpeg, jpg, gif, svg."]);

        $file = $request->file('slide');
        $filename = "";
        if(!empty($file) && $file !==""){
            $path = public_path()."/slide/";
            $filename = "slide_".time()."_".$file->getClientOriginalName();
            $moved = $file->move($path,$filename);
        }

        $slide = Slider::create([
            "name"=>$request->name,
            "description"=>$request->description,
            "slide"=> $filename
        ]);

        if(!empty($slide)){
         return redirect()->route('slider.index')->with('success','Slide created Successfull.');
        }else{
            return redirect()->route('slider.index')->with('error','something whent to wrong! try again.');
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
        $slide = Slider::find($id);
        return view('admdash.slider.edit', compact("slide"));   
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $slide = Slider::find($id);
        $validated = $request->validate([
            "name"=> "",
            "description"=>"",
            "slide"=>"image|mimes:jpeg,jpg,gif,svg"
        ],
            ["slide.required" => "The slide image field is required!",
                "slide.image"=>"The slide image field must be an image.",
                "slide.mimes"=> "The slide image field must be a file of type: png, jpeg, jpg, gif, svg."]);

                $file = $request->file('slide');
                $filename = "";
                if(!empty($file) && $file !==""){
                    $path = public_path()."/slide/";
                    if(file_exists($data = $path.$slide->slide)){
                        $slide->slide ? unlink($data) : "";
                    }
                    $filename = "slide_".time()."_".$file->getClientOriginalName();
                    $moved = $file->move($path,$filename);
                }else{
                    $filename = $slide->slide;
                }
        $slides = $slide->update([
            "name"=>$request->name,
            "description"=>$request->description,
            "slide"=> $filename
        ]);

        if(!empty($slides) && $slides == true){
         return redirect()->route('slider.index')->with('success','Slide update Successfull.');
        }else{
            return redirect()->route('slider.index')->with('error','something whent to wrong! try again.');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $slide = Slider::find($id);
        if($slide){
            $path = public_path()."/slide/";
            if(file_exists($data = $path.$slide->slide)){
                $slide->slide ? unlink($data) : "";
            }
            $slide->delete();
            return redirect()->route('slider.index')->with('success','Slide deleted Successfull.');
            
        }else{return redirect()->route('slider.index')->with('error','something whent to wrong! try again.');
        }
    }
}
