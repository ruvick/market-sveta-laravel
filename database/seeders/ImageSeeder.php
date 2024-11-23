<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Storage;

use Illuminate\Support\Str;

use DB;

class ImageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        $adding_files = [
            'https://marketsveta.su/product_base/xml/119047.xml', //Varton
            'https://marketsveta.su/product_base/xml/100615.xml', //legrand
            'https://marketsveta.su/product_base/xml/100620.xml', //LUCIDE
            'https://marketsveta.su/product_base/xml/100625.xml', //ST-Luce	
            'https://marketsveta.su/product_base/xml/100626.xml',	
            'https://marketsveta.su/product_base/xml/100629.xml',	
            'https://marketsveta.su/product_base/xml/100632.xml',	
            'https://marketsveta.su/product_base/xml/100634.xml',	
            'https://marketsveta.su/product_base/xml/100648.xml',	
            'https://marketsveta.su/product_base/xml/100652.xml',	
            'https://marketsveta.su/product_base/xml/100659.xml',	
            'https://marketsveta.su/product_base/xml/100661.xml',	
            'https://marketsveta.su/product_base/xml/100667.xml',	
            'https://marketsveta.su/product_base/xml/100673.xml',	
            'https://marketsveta.su/product_base/xml/100678.xml',	
            'https://marketsveta.su/product_base/xml/100679.xml',	
            'https://marketsveta.su/product_base/xml/100684.xml',	
            'https://marketsveta.su/product_base/xml/100693.xml',	
            'https://marketsveta.su/product_base/xml/100696.xml',	
            'https://marketsveta.su/product_base/xml/100699.xml',	
            'https://marketsveta.su/product_base/xml/100701.xml',	
            'https://marketsveta.su/product_base/xml/100711.xml',	//--f
            'https://marketsveta.su/product_base/xml/100713.xml',	
            'https://marketsveta.su/product_base/xml/100715.xml',	
            'https://marketsveta.su/product_base/xml/100725.xml',	
            'https://marketsveta.su/product_base/xml/100727.xml',	
            'https://marketsveta.su/product_base/xml/100729.xml',	
            'https://marketsveta.su/product_base/xml/100731.xml',	
            'https://marketsveta.su/product_base/xml/100735.xml',	
            'https://marketsveta.su/product_base/xml/100741.xml',	
            'https://marketsveta.su/product_base/xml/100752.xml',	
            'https://marketsveta.su/product_base/xml/100753.xml',	
            'https://marketsveta.su/product_base/xml/100758.xml',	
            'https://marketsveta.su/product_base/xml/100759.xml', 	
            'https://marketsveta.su/product_base/xml/100766.xml',	
            'https://marketsveta.su/product_base/xml/100767.xml',	
            'https://marketsveta.su/product_base/xml/100775.xml',	
            'https://marketsveta.su/product_base/xml/100777.xml',	
            'https://marketsveta.su/product_base/xml/100778.xml',	
            'https://marketsveta.su/product_base/xml/100798.xml',	
            'https://marketsveta.su/product_base/xml/100802.xml',	
            'https://marketsveta.su/product_base/xml/100816.xml',	
            'https://marketsveta.su/product_base/xml/100817.xml',	
            'https://marketsveta.su/product_base/xml/100821.xml',	
            'https://marketsveta.su/product_base/xml/100830.xml',	
            'https://marketsveta.su/product_base/xml/119048.xml',	
            'https://marketsveta.su/product_base/xml/119167.xml',	
            'https://marketsveta.su/product_base/xml/119385.xml',	
            'https://marketsveta.su/product_base/xml/119929.xml',	
            'https://marketsveta.su/product_base/xml/123473.xml',	
            'https://marketsveta.su/product_base/xml/123663.xml',	
            'https://marketsveta.su/product_base/xml/123759.xml',	
            'https://marketsveta.su/product_base/xml/123773.xml',	
            'https://marketsveta.su/product_base/xml/125845.xml',	
            'https://marketsveta.su/product_base/xml/127107.xml',	
            'https://marketsveta.su/product_base/xml/127750.xml',

            'https://marketsveta.su/product_base/xml/100745.xml',	//---
            'https://marketsveta.su/product_base/xml/100774.xml',   //---	
            'https://marketsveta.su/product_base/xml/100810.xml',	//---
            'https://marketsveta.su/product_base/xml/100814.xml',	//---
            'https://marketsveta.su/product_base/xml/100782.xml',	//---
            'https://marketsveta.su/product_base/xml/100795.xml',	//---
        ];

        for ($i=0; $i<count($adding_files); $i++ ) {
            add_picture($adding_files[$i]);
        }


    
    }
}
