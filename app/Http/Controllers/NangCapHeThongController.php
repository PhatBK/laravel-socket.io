<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\TheLoai;
use App\Models\NguyenLieu;
use App\Models\MonAn;
use Goutte\Client;
use GuzzleHttp\Client as GuzzleClient;
use Symfony\Component\DomCrawler\Crawler;
use Symfony\Component\CssSelector\CssSelectorConverter;
use Symfony\Component\BrowserKit\Client as BaseClient;
use Symfony\Component\BrowserKit\Response;

class NangCapHeThongController extends Controller
{
    public function tinhBMR($cannang,$chieucao,$tuoi,$gioitinh){
        $calo = 4.186;
        $bmr = 0;
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
        return $bmr;
    }
    public function getMonAn($id){
        $monan = MonAn::find($id);
        $nguyenlieus = $monan->nguyenlieu();
        // dd($nguyenlieus);
        // dd($monan);

        return $monan;
    }
    public function goiYBuaAn($id){
    }
    public function getChannel(){
    	return view('customer.channel');
    }
    public function getNguyenLieu($id){
        $monan = MonAn::find($id);
    	$nguyenlieus = $monan->nguyenlieu();
        dd($nguyenlieus);
    	// return $nguyenlieus;
    }
    public function getCrawler(){
        $client = new Client([
            'timeout'  => 2.0,
        ]);
        $crawler_get = $client->request('GET', 'http://sieuthicobap.com');
        $crawler_post = $client->request('POST','https://www.cooky.vn/');
        $status_code = $client->getResponse()->getStatus();
        if($status_code == 200){
            // dd($crawler_get);
        }
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
