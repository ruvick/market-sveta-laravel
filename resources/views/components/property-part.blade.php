<div class="select-prod__specifications-column">
    <h4 class="select-prod__specifications-column-title">{{$name}}</h4>
    <div class="select-prod__specifications-card">

      @foreach ($prop as $vl)
        <div class="select-prod__specifications-card-list d-flex">
            <div class="select-prod__specifications-card-list-item">{{$vl->name}}</div>
            <div class="select-prod__specifications-card-list-item">{{$vl->value}}</div>
        </div>
      @endforeach

    </div>
  </div>