<div class="page__main-catCard subCatInCat slider _swiper">
  @foreach ($subcat as $item)
    <div data-slug="{{$item->slug}}" data-catid="{{$item->baseid}}" class="page__main-catCard-column swiper-slide slider__slide">
      <a href="{{route('category', ['slug' => $item->slug])}}" class="circleCard">
        <div class="circleCard__img">
          <div class="circleCard__img-nuar_blk nuar_blk"></div>
            <img src="{{get_cat_img_url($item->slug)}}" alt="{{$item->name}}">
          </div>
          <div class="circleCard__name"> 
          {{$item->name}} 
          </div>
      </a>
    </div>    
  @endforeach
</div>
