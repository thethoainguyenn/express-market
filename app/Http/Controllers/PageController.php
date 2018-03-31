<?php

namespace App\Http\Controllers;
use App\Slide;
use App\SanPham;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function getIndex() {
        // slide nam trong index
        $slide = Slide::all();
        // print_r($slide);
        // exit;

        // show new product computer
        $new_product_computer = SanPham::where('sp_moi',1)-> where('id_loai',1) -> get();
        print_r($new_product_computer);

        // end show new product
        return view('page.trangchu',compact('slide','new_product_computer'));
    }
    // loai san pham
    public function getCategory($type) {
        // sản phẩm theo loại
        $sp_theoloai = SanPham::where('id_loai',$type) -> get();
        return view('page.loai_sanpham',compact('sp_theoloai'));
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
