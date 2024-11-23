<?php

namespace App\Http\Livewire;

use Livewire\Component;

use Illuminate\Http\Request;

class PropertyPropertyMultySelect extends Component
{

    public $property_text;

    public $property_name;

    public $all_list;

    public $param_list = [];

    public $show = false;

    public $listeners = ['filterUpdatet'];

    public $search_str = "";

    public $extend_request;

    public function toggleElement() {
        $this->show =! $this->show;
        
    }

    public function filterUpdatet($filterValues, $ext) {
        $this->param_list = $filterValues[$this->property_name];
        $this->extend_request = isset($ext[$this->property_name])?$ext[$this->property_name]:[];
        $this->show = !empty($this->extend_request)?true:false;
    }

    public function render() {
       
        return view('livewire.property-property-multy-select');
    }


}
