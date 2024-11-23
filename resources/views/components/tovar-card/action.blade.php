<div class="prod-card__old-price-block d-flex">
    @if ($oldprice != 0)
        <div class="prod-card__old-price price_formator rub">{{$oldprice}}</div>
        <div class="prod-card__sale-icon">-{{round((($oldprice - $price) /$price) * 100)}}%</div>
    @endif
</div>