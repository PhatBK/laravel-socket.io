<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\TheLoai;
use App\Models\NguyenLieu;
use App\Models\MonAnNguyenLieu;
use App\Models\MonAn;
use Goutte\Client;
use GuzzleHttp\Client as GuzzleClient;
use Symfony\Component\DomCrawler\Crawler;
use Symfony\Component\CssSelector\CssSelectorConverter;
use Symfony\Component\BrowserKit\Client as BaseClient;
use Symfony\Component\BrowserKit\Response;

class NangCapHeThongController extends Controller
{
    protected $BMR_Nam = 0 ;
    protected $BMR_Nu = 0 ;
    protected $BMR_Child = 0 ;

    public function tinhBMR($cannang,$chieucao,$tuoi,$gioitinh){
        $calo = 4.186;
        $bmr = 0;
        if(Auth::user()){
            $user = Auth::user();
            $tuoi = $user->tuoi;

            if(changeTitle($user->gioitinh) == "nam"){
                $cannang = 0;
                $chieucao = 0;
                $gioitinh = 1;

                if($tuoi < 18){
                    $cannang = rand(30,60);
                    $chieucao = rand(130,165);
                }
                if($tuoi >= 18){
                    $cannang = rand(50,80);
                    $chieucao = rand(160,185);
                }

                $bmr = 10*$cannang + 6.25*$chieucao - 5*$tuoi + 5;
                echo "Ban la : Nam";
                echo "<br>";

            }
            if(changeTitle($user->$gioitinh) == "nu"){
                $cannang = 0;
                $chieucao = 0;
                $gioitinh = 0;
                if($tuoi < 18){
                    $cannang = rand(30,50);
                    $chieucao = rand(120,150);
                }
                if($tuoi >= 18){
                    $cannang = rand(40,60);
                    $chieucao = rand(140,170);
                }
                $bmr = 10*$cannang + 6.25*$chieucao - 5*$tuoi - 161;
                echo "Ban la :Nu";
                echo "<br>";
            }if(changeTitle($user->gioitinh) == "khong xac dinh"){
                $cannang = 0;
                $chieucao = 0;
                if($tuoi < 18){
                    $cannang = (rand(30,50) + rand(30,60))/2;
                    $chieucao = (rand(120,150) + rand(130,165))/2;
                }
                if($tuoi >= 18){
                    $cannang = (rand(40,60) + rand(50,80))/2;
                    $chieucao = (rand(140,170) + rand(160,185))/2;
                }
                $bmrNam = 10*$cannang + 6.25*$chieucao - 5*$tuoi + 5;
                $bmrNu  = 10*$cannang + 6.25*$chieucao - 5*$tuoi - 161;

                $bmr    = rand($bmrNu + 50 ,$bmrNam - 50);
                echo "Ban la : Khong Xac Dinh";
                echo "<br>";
            }
           
            echo "Cam on ban da login";
            echo "<br>";

        }
        else{

            $cannang    = (float)   $cannang;
            $chieucao   = (float)   $chieucao;
            $tuoi       = (int)     $tuoi;
            $gioitinh   = (int)     $gioitinh;
            if($gioitinh == 0){
                $bmr = 10*$cannang + 6.25*$chieucao - 5*$tuoi - 161;
            }else if($gioitinh == 1){
                $bmr = 10*$cannang + 6.25*$chieucao - 5*$tuoi + 5;
            }else{
                $bmrNam = 10*$cannang + 6.25*$chieucao - 5*$tuoi + 5;
                $bmrNu  = 10*$cannang + 6.25*$chieucao - 5*$tuoi - 161;
                $bmr    = rand($bmrNu + 50 ,$bmrNam - 50);
            }
            
            echo "Ban chua login";
            echo "<br>";
        }
        return $bmr;
    }
    public function goiYBuaAn($id){

    }
    public function getMonAn($id){
        $monan = MonAn::find($id);
        $nguyenlieus = $monan->monan_nguyenlieu();
        return $monan;
    }
    public function getNguyenLieu($id){
        $monan = MonAn::find($id);
        $monan_nguyenlieus = $monan->monan_nguyenlieu();
    }
    public function getChannel(){
    	return view('customer.channel');
    }
    public function crawlerAction()
    {

        $url = "https://vi.wikipedia.org/wiki/Trang_Ch%C3%ADnh";
        $client = new Client();

        $crawler = $client->request('GET', $url);
        $links_count = $crawler->filter('a')->count();
        $title_count = $crawler->filter('title')->count();
        
        $all_titles = array();
        $all_links = array();
        if($title_count > 0){
            $titles = $crawler->filter('title');
            foreach($titles as $title){
                $all_titles[] = $title;
            }
            $all_titles = array_unique($all_titles);
            print_r($all_titles);
        }else{
            echo " không tìm thấy title nào ..";
        }
        if($links_count > 0){
            $links = $crawler->filter('a')->links();
            foreach ($links as $link) {
                $all_links[] = $link->getURI();
            }
            $all_links = array_unique($all_links);
            echo "Tất cả các link có sẵn từ trang: $url   <pre>"; print_r($all_links);echo "</pre>";
        } else {
            echo "không có link nào !!";
        }
        die;
    }
    public function getAPI(){
        $users = User::all();
        $theloais = TheLoai::all();
        return [$users,$theloais];
    }
    public function getTest(){

    }
}
