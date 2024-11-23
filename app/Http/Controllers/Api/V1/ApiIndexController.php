<?php

namespace App\Http\Controllers\Api\v1;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Filters\ProductFilter;
use App\Models\Product;
use App\Models\Category;
use Illuminate\Support\Facades\Storage;

class ApiIndexController extends Controller
{
    public function get_search_pds(Request $request) {
        
        $result_array = ["products" => [], "categories" => [], "img_prefix" => Storage::url('public/products_galery/')];

        $search_str = $request->get('search_str');
        
        if (empty($search_str)) return $result_array;

        $products = Product::where('name', 'LIKE', "%".$search_str."%")
        ->orWhere('collection', 'LIKE', "%".$search_str."%")
        ->orWhere('description', 'LIKE', "%".$search_str."%")
        ->orWhere('sku', 'LIKE', "%".$search_str."%")
        ->take(70)
        ->get();

        $result_array["products"] = $products;

        $cat = Category::where('name', 'LIKE', "%".$search_str."%")
        ->orWhere('description', 'LIKE', "%".$search_str."%")
        ->take(20)
        ->get();

        $result_array["categories"] = $cat;

        return $result_array;
    }

    public function get_sorted_category_filter($catid,Request $request) {
         

        $requMain = new Request();
    
        $requMain->query->add((array)json_decode($request->get('filter')));
        

        $pf = new ProductFilter($requMain);
        $catProducts = Product::where('cat1', $catid)
        ->orWhere('cat2', $catid) 
        ->orWhere('cat3', $catid)
        ->orWhere('cat4', $catid)->filter($pf)->get();

        
        $zap_filter = json_decode($request->get('filter_empty'));

        foreach ($catProducts as $elem) {
            if (!empty($elem->style))
                $zap_filter->style->{$elem->style} = $zap_filter->style->{$elem->style}+1; 
      

            if (!empty($elem->brand))
                $zap_filter->brand->{$elem->brand} = $zap_filter->brand->{$elem->brand}+1;
   
            
            if (!empty($elem->state))
                $zap_filter->state->{$elem->state} = $zap_filter->state->{$elem->state}+1;
    
            
            if (!empty($elem->forma))
                $zap_filter->forma->{$elem->forma} = $zap_filter->forma->{$elem->forma}+1;
            
            if (!empty($elem->arm_color))
                $zap_filter->arm_color->{$elem->arm_color} = $zap_filter->arm_color->{$elem->arm_color}+1;
                
            
            if (!empty($elem->plaf_color))
                $zap_filter->plaf_color->{$elem->plaf_color} = $zap_filter->plaf_color->{$elem->plaf_color}+1;
            
            if (!empty($elem->arm_material))
                $zap_filter->arm_material->{$elem->arm_material} = $zap_filter->arm_material->{$elem->arm_material}+1;
            
            if (!empty($elem->plaf_material))
                $zap_filter->plaf_material->{$elem->plaf_material} = $zap_filter->plaf_material->{$elem->plaf_material}+1; 
             
        }

    
        
        return array("products"=>$catProducts, "filter"=>$zap_filter);
    }

    public function get_category_filter($catid, Request $request) {
        $requMain = new Request();
        // $requMain->query->add(['style'=>'хай-тек']);

        $pf = new ProductFilter($requMain);
        $catProducts = Product::where('cat1', $catid)
        ->orWhere('cat2', $catid) 
        ->orWhere('cat3', $catid)
        ->orWhere('cat4', $catid)->filter($pf)->get();

        $brand = [];
        $style = [];
        $state = [];
        $forma = [];
        $arm_color = [];
        $plaf_color = [];
        $arm_material = [];
        $plaf_material = [];

        $empty_brand = [];
        $empty_style = [];
        $empty_state = [];
        $empty_forma = [];
        $empty_arm_color = [];
        $empty_plaf_color = [];
        $empty_arm_material = [];
        $empty_plaf_material = [];

        $max_price = 0;

        foreach ($catProducts as $elem) {
            if (!empty($elem->style))
            {
                $style[$elem->style] = (empty($style[$elem->style]))?1:$style[$elem->style]+1; 
                $empty_style[$elem->style] = 0; 
            }

            if (!empty($elem->brand))
            {
                $brand[$elem->brand] = (empty($brand[$elem->brand]))?1:$brand[$elem->brand]+1;
                $empty_brand[$elem->brand] = 0;
            }    
            
            if (!empty($elem->state))
            {
                $state[$elem->state] = (empty($state[$elem->state]))?1:$state[$elem->state]+1;
                $empty_state[$elem->state] = 0;
            } 
            
            if (!empty($elem->forma))
            {
                $forma[$elem->forma] = (empty($forma[$elem->forma]))?1:$forma[$elem->forma]+1;
                $empty_forma[$elem->forma] = 0;
            } 
            
            if (!empty($elem->arm_color))
            {
                $arm_color[$elem->arm_color] = (empty($arm_color[$elem->arm_color]))?1:$arm_color[$elem->arm_color]+1;
                $empty_arm_color[$elem->arm_color] = 0;
            } 
            
            if (!empty($elem->plaf_color))
            {
                $plaf_color[$elem->plaf_color] = (empty($plaf_color[$elem->plaf_color]))?1:$plaf_color[$elem->plaf_color]+1;
                $empty_plaf_color[$elem->plaf_color] = 0;
            } 
            
            if (!empty($elem->arm_material))
            {
                $arm_material[$elem->arm_material] = (empty($arm_material[$elem->arm_material]))?1:$arm_material[$elem->arm_material]+1;
                $empty_arm_material[$elem->arm_material] = 0;
            } 
            
            if (!empty($elem->plaf_material))
            {
                $plaf_material[$elem->plaf_material] = (empty($plaf_material[$elem->plaf_material]))?1:$plaf_material[$elem->plaf_material]+1; 
                $empty_plaf_material[$elem->plaf_material] = 0; 
            }
        
            if ($max_price < $elem->price) {
                $max_price = $elem->price;
            } 
        }
        
        $filter_zn["style"] = $style;
        $filter_zn["brand"] = $brand;
        $filter_zn["state"] = $state;
        $filter_zn["forma"] = $forma;
        $filter_zn["arm_color"] = $arm_color;
        $filter_zn["plaf_color"] = $plaf_color;
        $filter_zn["arm_material"] = $arm_material;
        $filter_zn["plaf_material"] = $plaf_material;
        $filter_zn["max_price"] = $max_price;
        
        $empty_filter["style"] = $empty_style;
        $empty_filter["brand"] = $empty_brand;
        $empty_filter["state"] = $empty_state;
        $empty_filter["forma"] = $empty_forma;
        $empty_filter["arm_color"] = $empty_arm_color;
        $empty_filter["plaf_color"] = $empty_plaf_color;
        $empty_filter["arm_material"] = $empty_arm_material;
        $empty_filter["plaf_material"] = $empty_plaf_material;

        return ["incount" => $filter_zn, "empty" => $empty_filter];
    }
}
