<div class="row">
    <div class="col-md-12 my-3">
        <h1>{{$type}}</h1>
    </div>
    <div class="col-md-12">
        <div class="row row-cols-2 row-cols-md-3 g-5">
            @foreach ($products as $index => $product)
                <div class="col">
                    <div class="card">
                    @if (!$product->images->isEmpty())
                        <img src="{{url($product->images->first()->path)}}" class="card-img-top" alt="{{$product->name}}">
                    @else
                        <img src="https://via.placeholder.com/500?text=Product+Image+Missing" class="card-img-top" alt="Image Not Found">
                    @endif
                    <div class="card-body">
                        <h5 class="card-title">{{$product->name}}</h5>
                        <p class="card-text">{{$product->description}}</p>
                    </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</div>
