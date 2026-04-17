<x-layout :title="__('products.plural')" :breadcrumbs="['dashboard.products.index']">
    @include('dashboard.errors')
    @include('dashboard.products.partials.filter')

    @component('dashboard::components.table-box')
        @slot('title')
            @lang('products.actions.list') ({{ $products->total() }})
        @endslot

        <thead>
        <tr>
          <th colspan="100">
            <div class="d-flex justify-content-between">
                <div class="d-flex" style="gap: .5rem">
                    @include('dashboard.products.partials.actions.create')

                    <x-excel-export model="App\Models\Product"></x-excel-export>
                    <x-excel-import model="App\Models\Product"></x-excel-import>
                    @include('dashboard.products.partials.actions.trashed')
                </div>
                <div>
                    <x-check-all-delete
                            type="{{ \App\Models\Product::class }}"
                            :resource="__('products.plural')"></x-check-all-delete>
                </div>
            </div>
          </th>
        </tr>
        <tr>
            <th style="width: 30px;" class="text-center">
              <x-check-all></x-check-all>
            </th>
            <th>@lang('products.attributes.name')</th>
            <th>@lang('products.attributes.category_id')</th>
            <th>@lang('products.attributes.price')</th>
            <th>@lang('products.attributes.active')</th>
            <th style="width: 160px">...</th>
        </tr>
        </thead>
        <tbody>
        @forelse($products as $product)
            <tr>
                <td class="text-center">
                  <x-check-all-item :model="$product"></x-check-all-item>
                </td>
                <td>
                    <a href="{{ route('dashboard.products.show', $product) }}"
                       class="text-decoration-none text-ellipsis">

                        <img src="{{ $product->getFirstMediaUrl() }}"
                             alt="{{ __('products.singular') }}"
                             class="img-circle img-size-32 mr-2" style="height: 32px;">
                        {{ $product->name }}
                    </a>
                </td>
                <td>{{ $product->category->name }}</td>
                <td>{{ $product->getPriceWithCurrency() }}</td>
                <td>
                    <x-boolean is="{{ $product->active }}"></x-boolean>
                </td>

                <td style="width: 160px">
                    @include('dashboard.products.partials.actions.show')
                    @include('dashboard.products.partials.actions.edit')
                    @include('dashboard.products.partials.actions.delete')
                </td>
            </tr>
        @empty
            <tr>
                <td colspan="100" class="text-center">@lang('products.empty')</td>
            </tr>
        @endforelse

        @if($products->hasPages())
            @slot('footer')
                {{ $products->links() }}
            @endslot
        @endif
    @endcomponent
</x-layout>
