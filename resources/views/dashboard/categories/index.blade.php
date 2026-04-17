<x-layout :title="__('categories.plural')" :breadcrumbs="['dashboard.categories.index']">
    @include('dashboard.categories.partials.filter')

    @component('dashboard::components.table-box')
        @slot('title')
            @lang('categories.actions.list') ({{ $categories->total() }})
        @endslot

        <thead>
        <tr>
          <th colspan="100">
            <div class="d-flex">
                <x-check-all-delete
                        type="{{ \App\Models\Category::class }}"
                        :resource="__('categories.plural')"></x-check-all-delete>

                <div class="ml-2 d-flex justify-content-between flex-grow-1">
                    @include('dashboard.categories.partials.actions.create')
                    @include('dashboard.categories.partials.actions.trashed')
                </div>
            </div>
          </th>
        </tr>
        <tr>
            <th style="width: 30px;" class="text-center">
              <x-check-all></x-check-all>
            </th>
            <th>@lang('categories.attributes.name')</th>
            <th style="width: 160px">...</th>
        </tr>
        </thead>
        <tbody>
        @forelse($categories as $category)
            <tr>
                <td class="text-center">
                  <x-check-all-item :model="$category"></x-check-all-item>
                </td>
                <td>
                    <a href="{{ route('dashboard.categories.show', $category) }}"
                       class="text-decoration-none text-ellipsis">

                        <img src="{{ $category->getFirstMediaUrl() }}"
                             alt="{{ __('categories.singular') }}"
                             class="img-circle img-size-32 mr-2" style="height: 32px;">
                        {{ $category->name }}
                    </a>
                </td>

                <td style="width: 160px">
                    @include('dashboard.categories.partials.actions.show')
                    @include('dashboard.categories.partials.actions.edit')
                    @include('dashboard.categories.partials.actions.delete')
                </td>
            </tr>
        @empty
            <tr>
                <td colspan="100" class="text-center">@lang('categories.empty')</td>
            </tr>
        @endforelse

        @if($categories->hasPages())
            @slot('footer')
                {{ $categories->links() }}
            @endslot
        @endif
    @endcomponent
</x-layout>
