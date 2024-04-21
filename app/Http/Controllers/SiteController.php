<?php

namespace App\Http\Controllers;
use App\Models\Site;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use PhpParser\Node\Expr\Cast;
use PHPUnit\TextUI\XmlConfiguration\ConvertLogTypes;

class SiteController extends Controller
{
    public function index()
    {
        $sites=DB::table('sites')->get();
        dump($sites);
        //calculer la moyenne des coordonnees pour initialiser la carte autour de cette position moyenne
        $totalSites=$sites->count();
        $totalLatitude=$sites->sum(floatval('Coordonnée Lambert X'));
        dd($totalLatitude);
        $totalLongitude=$sites->sum(floatval('Coordonnée Lambert Y'));
        
        //s`il ya des sites dans la base ,le centre de la carte sera defini sur les coordonnees des sites sinon le centre sera sur les coordonnees [0,0]
        $center = $totalSites > 0 ?[$totalLatitude / $totalSites, $totalLongitude / $totalSites] :[0,0];
        return view("sites.site",["sites"=>$sites,'center'=>$center]);
    }
}
