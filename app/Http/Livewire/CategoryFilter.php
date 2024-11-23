<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithPagination;

use Illuminate\Http\Request;
use App\Filters\ProductFilter;

use App\Models\Product;

class CategoryFilter extends Component
{
    use WithPagination;
    
    public $cat_id;
    public $cat_url;
    public $cat_name;
    public $sub_cat;

    public $filter_zn = [];
    public $extend_request = [];

    public function get_filter(Request $rq) {
        $requMain = new Request();
        // $requMain->query->add(['style'=>'хай-тек']);

        $pf = new ProductFilter($requMain);
        $catProducts = Product::where('cat1', $this->cat_id)
        ->orWhere('cat2', $this->cat_id) 
        ->orWhere('cat3', $this->cat_id)
        ->orWhere('cat4', $this->cat_id)->filter($pf)->get();

        $brand = [];
        $style = [];
        $state = [];
        $forma = [];
        $arm_color = [];
        $plaf_color = [];
        $arm_material = [];
        $plaf_material = [];

        $max_price = 0;

        foreach ($catProducts as $elem) {
            if (!empty($elem->style))
                $style[$elem->style] = (empty($style[$elem->style]))?1:$style[$elem->style]+1; 
            
            if (!empty($elem->brand))
                $brand[$elem->brand] = (empty($brand[$elem->brand]))?1:$brand[$elem->brand]+1; 
            
            if (!empty($elem->state))
                $state[$elem->state] = (empty($state[$elem->state]))?1:$state[$elem->state]+1; 
            
            if (!empty($elem->forma))
                $forma[$elem->forma] = (empty($forma[$elem->forma]))?1:$forma[$elem->forma]+1; 
            
            if (!empty($elem->arm_color))
                $arm_color[$elem->arm_color] = (empty($arm_color[$elem->arm_color]))?1:$arm_color[$elem->arm_color]+1; 
            
            if (!empty($elem->plaf_color))
                $plaf_color[$elem->plaf_color] = (empty($plaf_color[$elem->plaf_color]))?1:$plaf_color[$elem->plaf_color]+1; 
            
            if (!empty($elem->arm_material))
                $arm_material[$elem->arm_material] = (empty($arm_material[$elem->arm_material]))?1:$arm_material[$elem->arm_material]+1; 
            
            if (!empty($elem->plaf_material))
                $plaf_material[$elem->plaf_material] = (empty($plaf_material[$elem->plaf_material]))?1:$plaf_material[$elem->plaf_material]+1; 
        
            if ($max_price < $elem->price) {
                $max_price = $elem->price;
            } 
        }
        
        $this->filter_zn["style"] = $style;
        $this->filter_zn["brand"] = $brand;
        $this->filter_zn["state"] = $state;
        $this->filter_zn["forma"] = $forma;
        $this->filter_zn["arm_color"] = $arm_color;
        $this->filter_zn["plaf_color"] = $plaf_color;
        $this->filter_zn["arm_material"] = $arm_material;
        $this->filter_zn["plaf_material"] = $plaf_material;

        $this->emit('filterUpdatet', $this->filter_zn, $this->extend_request);
    }

    public function do_do() {
        $this->emit('filterUpdatet', $this->filter_zn, $this->extend_request);
    }

    public function render(Request $rq)
    {   
        $this->extend_request = $rq->query();
        return view('livewire.category-filter');
    }
}
