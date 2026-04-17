@include('dashboard.errors')

@multilingualFormTabs
{{ BsForm::text('name') }}
@endMultilingualFormTabs

@isset($category)
<file-uploader :media="{{ $category->getMediaResource() }}"
               name="image"
               :max="1"
               collection="default"
               :tokens="{{ json_encode(old('image', [])) }}"
               label="{{ __('categories.attributes.image') }}"
               notes="Supported types: jpeg, png,jpg,gif"
               accept="image/jpeg,image/png,image/jpg,image/gif"
></file-uploader>
@else
<file-uploader
        :media="[]"
        name="image"
        :max="1"
        collection="default"
        :tokens="{{ json_encode(old('image', [])) }}"
        label="{{ __('categories.attributes.image') }}"
        notes="Supported types: jpeg, png,jpg,gif"
        accept="image/jpeg,image/png,image/jpg,image/gif"
></file-uploader>
@endisset