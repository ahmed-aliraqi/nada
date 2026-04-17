@include('dashboard.errors')

@multilingualFormTabs
{{ BsForm::text('name') }}
{{ BsForm::textarea('description')->attribute('class', 'form-control textarea') }}
@endMultilingualFormTabs

{{ BsForm::select('name')->options($categories) }}

{{ BsForm::price('price')->currency('SAR') }}


{{ BsForm::checkbox('active')->value(1)->checked(isset($fee) && $fee->active) }}
