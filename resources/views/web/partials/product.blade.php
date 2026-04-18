<div class="product-card">
    <div class="product-card-image">
        <img src="{{ $product->getFirstMediaUrl() }}" alt="{{ $product->name }}">
        <span class="product-badge badge-best">{{ $product->category->name }}</span>
        <div class="product-card-actions">
            <a href="{{ route('products.show', $product) }}" class="product-card-action-btn">
                {{ __('Quick View') }}
            </a>
            <button class="product-card-action-btn icon-only">
                <i class="bi bi-heart"></i>
            </button>
        </div>
    </div>
    <div class="product-card-body">
        <span class="product-card-category">{{ $product->category->name }}</span>
        <h4 class="product-card-title">
            <a href="{{ route('products.show', $product) }}">
                {{ $product->name }}
            </a>
        </h4>
        <div class="product-card-rating">
            <i class="bi bi-star-fill star"></i>
            <i class="bi bi-star-fill star"></i>
            <i class="bi bi-star-fill star"></i>
            <i class="bi bi-star-fill star"></i>
            <i class="bi bi-star-fill star"></i>
            <span class="count">(204)</span>
        </div>
        <div class="product-card-price">
            <span class="current">{{ $product->getPriceWithCurrency() }}</span>
        </div>
    </div>
</div>
