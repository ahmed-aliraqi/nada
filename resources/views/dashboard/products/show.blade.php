<x-layout :title="$product->name" :breadcrumbs="['dashboard.products.show', $product]">
<div class="row">
        <div class="col-md-6">
            @component('dashboard::components.box')
                @slot('class', 'p-0')
                @slot('bodyClass', 'p-0')

                <table class="table table-striped table-middle">
                    <tbody>
                    <tr>
                        <th width="200">@lang('products.attributes.name')</th>
                        <td>{{ $product->name }}</td>
                    </tr>
                    <tr>
                        <th width="200">@lang('products.attributes.category_id')</th>
                        <td>{{ $product->category->name }}</td>
                    </tr>
                    @if($product->description)
                        <tr>
                            <th width="200">@lang('products.attributes.description')</th>
                            <td>{!! $product->description !!}</td>
                        </tr>
                    @endif
                    <tr>
                        <th width="200">@lang('products.attributes.price')</th>
                        <td>{{ $product->getPriceWithCurrency() }}</td>
                    </tr>
                    <tr>
                        <th width="200">@lang('products.attributes.active')</th>
                        <td>
                            <x-boolean is="{{ $product->active }}"></x-boolean>
                        </td>
                    </tr>
                    @if($product->getFirstMedia())
                        <tr>
                            <th width="200">@lang('products.attributes.images')</th>
                            <td>
                                <file-preview :media="{{ $product->getMediaResource() }}"></file-preview>
                            </td>
                        </tr>
                    @endif
                    </tbody>
                </table>

                @slot('footer')
                    @include('dashboard.products.partials.actions.edit')
                    @include('dashboard.products.partials.actions.delete')
                    @include('dashboard.products.partials.actions.restore')
                    @include('dashboard.products.partials.actions.forceDelete')
                @endslot
            @endcomponent
        </div>
    </div>
</x-layout>
