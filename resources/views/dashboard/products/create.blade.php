<x-layout :title="__('products.actions.create')" :breadcrumbs="['dashboard.products.create']">
    {{ BsForm::resource('products')->post(route('dashboard.products.store')) }}
    @component('dashboard::components.box')
        @slot('title', __('products.actions.create'))

        @include('dashboard.products.partials.form')

        @slot('footer')
            {{ BsForm::submit()->label(__('products.actions.save')) }}
        @endslot
    @endcomponent
    {{ BsForm::close() }}
</x-layout>