@include('dashboard.errors')

@multilingualFormTabs
{{ BsForm::text('name') }}
{{ BsForm::textarea('description')->attribute('class', 'form-control textarea') }}
@endMultilingualFormTabs

{{ BsForm::select('category_id')->options($categories->toArray()) }}

{{ BsForm::price('price')->currency('SAR') }}


{{ BsForm::checkbox('active')->value(1)->checked(isset($fee) && $fee->active) }}

@isset($product)
    <file-uploader :media="{{ $product->getMediaResource() }}"
                   name="images"
                   collection="default"
                   :max="5"
                   :tokens="{{ json_encode(old('images', [])) }}"
                   label="{{ __('products.attributes.images') }}"
                   notes="Supported types: jpeg, png,jpg,gif"
                   accept="image/jpeg,image/png,image/jpg,image/gif"
    ></file-uploader>
@else
    <file-uploader
        :media="[]"
        name="images"
        collection="default"
        :max="5"
        :tokens="{{ json_encode(old('images', [])) }}"
        label="{{ __('products.attributes.images') }}"
        notes="Supported types: jpeg, png,jpg,gif"
        accept="image/jpeg,image/png,image/jpg,image/gif"
    ></file-uploader>
@endisset
