@use(AhmedAliraqi\Ui\Layout)
@use(AhmedAliraqi\Ui\Section)
@component('dashboard::components.table-box')
    @slot('title')
        {{ Layout::sectionName($routeSection) }}
    @endslot

    <thead>
    </thead>
    <tbody>
    @foreach($uiSections as $uiSection)
        <tr>
            <td>
                <a href="{{ route('dashboard.ui.edit', [$group, $routeSection, $uiSection->id]) }}"
                   class="text-decoration-none text-ellipsis">
                    {{ $uiSection->name }}
                </a>
            </td>
            <td style="width: 70px">
                <a href="#section-{{ $uiSection->id }}-delete-model"
                   class="btn btn-outline-danger btn-sm"
                   data-toggle="modal">
                    <i class="fas fa fa-fw fa-user-times"></i>
                </a>


                <!-- Modal -->
                <div class="modal fade" id="section-{{ $uiSection->id }}-delete-model" tabindex="-1" role="dialog"
                     aria-labelledby="modal-title-{{ $uiSection->id }}" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title"
                                    id="modal-title-{{ $uiSection->id }}">@lang('ui.dialogs.delete.title')</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                @lang('ui.dialogs.delete.info')
                            </div>
                            <div class="modal-footer">
                                {{ BsForm::delete(route('dashboard.ui.destroy', [$group, $uiSection->section, $uiSection])) }}
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">
                                    @lang('ui.dialogs.delete.cancel')
                                </button>
                                <button type="submit" class="btn btn-danger">
                                    @lang('ui.dialogs.delete.confirm')
                                </button>
                                {{ BsForm::close() }}
                            </div>
                        </div>
                    </div>
                </div>
            </td>
        </tr>
    @endforeach

@endcomponent
@if(Layout::canAddMore($routeSection))
    {{ BsForm::post(route('dashboard.ui.store', [$group, $routeSection])) }}
    @component('dashboard::components.box')
        @slot('title', trans('ui.actions.create'))

        {{ BsForm::text('name')->label(__('ui.section_name')) }}

        @foreach(Layout::fields($routeSection) as $field => $class)
            @include('dashboard.ui.partials.input', [
                'section' => $routeSection,
                 'field' => $field,
                 'uiSection' => null,
                 'hideNotes' => true,
            ])
        @endforeach

        @slot('footer')
            {{ BsForm::submit()->label(trans('ui.actions.save')) }}
        @endslot
    @endcomponent
@endif
{{ BsForm::close() }}
