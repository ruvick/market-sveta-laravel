<aside wire:init="get_filter" class="page__sidebar">   
    
        <div class="page__sidebar-body">
            <div wire:loading >
                Загружаем фильтры...
            </div>

            
            
                <div wire:loading.remove  class="page__sidebar-navigation">
                    <div class="spollers-block" data-spollers data-one-spoller>
        
                        <div class="page__sidebar-navigation-col">
                            <div class="page__sidebar-navigation-block-name d-flex">
                                <div wire:click="do_do" class="page__sidebar-navigation-name">Категории</div>
                            </div>
                            <ul class="page__sidebar-navigation-menu sidebar-navigation-catMenu">
                                @foreach ($sub_cat as $item)
                                    <li class="sidebar-navigation-catMenu-item">
                                        <a href="{{route('category', $item->slug)}}" class="sidebar-navigation-catMenu-item-link">{{$item->name}}</a>
                                    </li>    
                                @endforeach
                                

                            </ul>
                        </div>
        
                        <form method="GET" action="{{$cat_url}}">
                               
                            @livewire('property-price-select')
                            @livewire('property-property-multy-select', ["property_name" => 'brand', 'property_text' => "Бренд"])
                            @livewire('property-property-multy-select', ["property_name" => 'style', 'property_text' => "Стиль"])
                            @livewire('property-property-multy-select', ["property_name" => 'state', 'property_text' => "Страна"])
                            @livewire('property-property-multy-select', ["property_name" => 'forma', 'property_text' => "Форма"])
                            @livewire('property-property-multy-select', ["property_name" => 'arm_color', 'property_text' => "Цвет арматуры"])
                            @livewire('property-property-multy-select', ["property_name" => 'plaf_color', 'property_text' => "Цвент плафона"])
                            @livewire('property-property-multy-select', ["property_name" => 'arm_material', 'property_text' => "Материал арматуры"])
                            @livewire('property-property-multy-select', ["property_name" => 'plaf_material', 'property_text' => "Материал плафона"])
                            
                            <div class="">
                                <button type="submit" class="btn">Выбрать</button>
                            </div>
                        </form>
        
                    </div>
        
                </div>

           
        </div>
    
    </aside>