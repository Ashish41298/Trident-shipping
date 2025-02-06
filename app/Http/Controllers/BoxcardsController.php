<?php

namespace App\Http\Controllers;

use App\Models\Cardbox;
use App\Models\Counter;
use App\Models\Slider;
use App\Models\User;
use Illuminate\Http\Request;

class BoxcardsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $allboxcards = Cardbox::orderBy('created_at', 'desc')->get();
        $totalusers = User::all()->count() ?? 0;
        $totalcounters = Counter::all()->count() ?? 0;
        $totalslides =Slider::all()->count() ?? 0;
       $totalboxcards = $allboxcards->count() ?? 0;
       return view('admdash.boxcard.index',compact('allboxcards', 'totalusers', 'totalslides','totalcounters','totalboxcards'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admdash.boxcard.add');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            "title1"=> "",
            "title2"=>"",
            "content"=>"",
            "image"=>"required|image|mimes:jpeg,jpg,gif,svg"
        ],
            ["image.required" => "The image field is required!",
                "image.image"=>"The image field must be an image.",
                "image.mimes"=> "The image field must be a file of type: png, jpeg, jpg, gif, svg."]);

        $file = $request->file('image');
        $filename = "";
        if(!empty($file) && $file !==""){
            $path = public_path()."/boxcard/";
            $filename = "boxcard_".time()."_".$file->getClientOriginalName();
            $moved = $file->move($path,$filename);
        }

        $boxcard = Cardbox::create([
            "title1"=>$request->title1,
            "title2"=>$request->title2,
            "content"=>$request->content,
            "image"=> $filename
        ]);

        if(!empty($boxcard)){
         return redirect()->route('boxcards.index')->with('success','boxcard created Successfull.');
        }else{
            return redirect()->route('boxcards.index')->with('error','something whent to wrong! try again.');
        }
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $boxcard = Cardbox::find($id);
        return view('admdash.boxcard.readmore',compact('boxcard'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit( $id)
    {
        $boxcard = Cardbox::find($id);
        return view('admdash.boxcard.edit', compact("boxcard"));   
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $boxcard = Cardbox::find($id);
        $validated = $request->validate([
            "title1"=> "",
            "title2"=>"",
            "content"=>"",
            "image"=>"image|mimes:png,jpeg,jpg,gif,svg"
        ],
            [
                "image.image"=>"The image field must be an image.",
                "image.mimes"=> "The image field must be a file of type: png, jpeg, jpg, gif, svg."]);

                $file = $request->file('image');
                $filename = "";
                if(!empty($file) && $file !==""){
                    $path = public_path()."/boxcard/";
                    if(file_exists($data = $path.$boxcard->image)){
                        $boxcard->image ? unlink($data) : "";
                    }
                    $filename = "boxcard_".time()."_".$file->getClientOriginalName();
                    $moved = $file->move($path,$filename);
                }else{
                    $filename = $boxcard->image;
                }
        $boxcards = $boxcard->update([
            "title1"=>$request->title1,
            "title2"=>$request->title2,
            "content"=>$request->content,
            "image"=> $filename
        ]);

        if(!empty($boxcards) && $boxcards == true){
         return redirect()->route('boxcards.index')->with('success','Boxcard update Successfull.');
        }else{
            return redirect()->route('boxcards.index')->with('error','something whent to wrong! try again.');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy( $id)
    {
        $boxcard = Cardbox::find($id);
        if($boxcard){
            $path = public_path()."/boxcard/";
            if(file_exists($data = $path.$boxcard->image)){
                $boxcard->image ? unlink($data) : "";
            }
            $boxcard->delete();
            return redirect()->route('boxcards.index')->with('success','Boxcard deleted Successfull.');
            
        }else{return redirect()->route('boxcards.index')->with('error','something whent to wrong! try again.');
        }
    }

}
