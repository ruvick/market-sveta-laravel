

    <div style="@if (empty($param_list)) display:none; @endif" class="page__sidebar-navigation-col spollers-block__item">


        <div wire:click="toggleElement" class="page__sidebar-navigation-name spollers-block__title @if ($show) _active @endif"  >{{ $property_text }}</div>
        

            <div class="page__sidebar-navigation-body spollers-block__body @if ($show) _showed @endif">

                <div class="page__sidebar-navigation-body-menu">

                    <input wire:model="search_str" type="text" placeholder="Поиск по списку" class="page__sidebar-navigation-body-menu-search">
                    
                    <div class="page__sidebar-navigation-body-menu-options options">
                        @foreach ($param_list as $key => $value)
                            
                        
                            @if (($search_str !== "") && (!mb_strpos(mb_strtoupper($key), mb_strtoupper($search_str))))
                                @continue
                            @endif
                            <label class="page__sidebar-navigation-body-menu-options-item options__item">
                                <input  type="checkbox" @if (!empty($extend_request[$key])) checked @endif value="{{$key}}" name="{{$property_name}}[{{$key}}]" class="page__sidebar-navigation-body-menu-options-item-input options__input" >
                                <span class="page__sidebar-navigation-body-menu-options-item-input-text options__text">
                                <span class="page__sidebar-navigation-body-menu-options-item-input-text-main options__text-main">{{$key}}</span>{{$value}}</span>
                            </label>

                        @endforeach
                        
                    </div>
                </div>
            </div>
        
    </div>

