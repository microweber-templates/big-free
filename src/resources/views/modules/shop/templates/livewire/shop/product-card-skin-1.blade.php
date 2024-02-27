<div class="product">
    <a class="text-decoration-none" href="{{content_link($product->id)}}">
        <div class="background-image-holder" style="background-image: url('{{$product->thumbnail(1300,1300)}}'); height: 300px;">

            @if($product->hasCategories())
            <h6 class="product-category">{{$product->categoryName()}}</h6>
            @endif

            <div class="price-holder">
               <div class="price-wrapper">
                   @if($product->hasSpecialPrice())
                       <h6 class="price-old mb-0"><?php print currency_format($product->price); ?></h6>
                       <h6 class="price mb-0"><?php print currency_format($product->specialPrice); ?></h6>
                   @else
                       <h6 class="price mb-0"><?php print currency_format($product->price); ?></h6>
                   @endif
               </div>

            </div>
        </div>

        <div class="p-4">
            <label>{{user_name($product->created_by)}}</label>
            <h6 class="product-title mt-3">{{$product->title}}</h6>
        </div>
    </a>
</div>
