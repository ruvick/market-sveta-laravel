<?php

namespace App\Filters;

class ProductFilter extends QueryFilter {
    public function style($style = []) {
        if (!empty($style))
            $this->builder->whereIn("style", $style);
    }

    public function brand($brand = []) {
        if (!empty($brand))
            $this->builder->whereIn("brand", $brand);
    }

    public function state($state = []) {
        if (!empty($state))
            $this->builder->whereIn("state", $state);
    }

    public function arm_color($arm_color = []) {
        if (!empty($arm_color))
            $this->builder->whereIn("arm_color", $arm_color);
    }

    public function plaf_color($plaf_color = []) {
        if (!empty($plaf_color))
            $this->builder->whereIn("plaf_color", $plaf_color);
    }

    public function arm_material($arm_material = []) {
        if (!empty($arm_material))
            $this->builder->whereIn("arm_material", $arm_material);
    }

    public function minprice($minprice) {
        if (!empty($minprice))
            $this->builder->where("price", '>', $minprice);
    }

    public function maxprice($maxprice) {
        if (!empty($maxprice))
            $this->builder->where("price", '<', $maxprice);
    }

    public function insales($insales = "off") {
        if ($insales === 'on')
            $this->builder->where("price_old", '>', 0);
    }
}