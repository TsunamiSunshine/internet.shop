<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\SliderFormRequest;
use App\Models\Slider;
use Illuminate\Http\Request;

class SliderController extends Controller
{
    public function index(){
        return view('auth.slider.index');
    }

    public function create(){
        return view('auth.slider.create');
    }

    public function store(SliderFormRequest $request){
        $validatedDate = $request->validated();

        if($request->hasFile('image')){
            $file = $request->file('image');
            $ext = $file->getClientOriginalExtension();
            $filename = time() . '.' . $ext;
            $file->move('uploads/slider/', $filename);
            $validatedDate['image'] = "uploads/slider/$filename";
        }

        $validatedDate['status'] = $request->status == true ? '1' : '0';

        Slider::created([
            'title' => $validatedDate['title'],
            'description' => $validatedDate['description'],
            'image' => $validatedDate['image'],
            'status' => $validatedDate['status'],
        ]);
        return redirect('sliders')->with('message', 'Слайдер добавлен успешно');
    }
}
