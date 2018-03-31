<?php

namespace App\Http\Controllers;
use App\Slide;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function getIndex() {
        // slide nam trong index
        $slide = Slide::all();
        // print_r($slide);
        // exit;
        return view('page.trangchu',compact('slide'));
    }
    // loai san pham
    public function getCategory() {
        return view('page.loai_sanpham');
    }
    // chi tiet san pham
    public function getProductDetail() {
        return view('page.chitiet_sanpham');
    }
    // lien he
    public function getContact() {
        return view('page.lienhe');
    }
}
