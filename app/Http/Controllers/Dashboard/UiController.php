<?php

namespace App\Http\Controllers\Dashboard;

use AhmedAliraqi\Ui\Facades\Ui;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use AhmedAliraqi\Ui\Layout;
use AhmedAliraqi\Ui\Section;
use Illuminate\View\View;

class UiController extends Controller
{
    use AuthorizesRequests, ValidatesRequests;

    /**
     * LookupController constructor.
     */
    public function __construct()
    {
        //$this->authorize('', UiSection::class);
    }

    /**
     * Display a listing of the resource.
     */
    public function index($group, $routeSection = null): View|RedirectResponse
    {
        $sections = Layout::sections($group);

        if ($sections->first() && ! in_array($routeSection, $sections->toArray())) {
            return redirect()->route('dashboard.ui.index', [$group, $sections->first()]);
        }

        $uiSections = Section::make($routeSection);

        return view('dashboard.ui.index', compact('group', 'sections', 'routeSection', 'uiSections'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request, $group, $section, $id = null): RedirectResponse
    {
        $uiSection = null;

        if ($id) {
            $uiSection = app('ui.section')->firstWhere('id', $id);
        }

        $ui = Ui::section($section)
            ->setUiSection($uiSection)
            ->setFields($request->input('fields', []));

        if (Layout::hasManyValues($section)) {
            $ui->setName($request->name);
        }

        $ui->build();

        flash()->success(trans('ui.messages.updated'));

        return redirect()->route('dashboard.ui.index', [Layout::group($section), $section]);
    }

    public function edit($group, $routeSection, $id): View
    {
        $uiSection = app('ui.section')->firstWhere('id', $id);

        $sections = Layout::sections($group);

        return view('dashboard.ui.edit', compact('group', 'routeSection', 'uiSection', 'sections'));
    }

    public function destroy($group, $section, $id): RedirectResponse
    {
        $uiSection = app('ui.section')->firstWhere('id', $id);

        if ($uiSection && Layout::hasManyValues($section)) {
            $uiSection->delete();
            flash()->success(trans('ui.messages.deleted'));
        }

        return redirect()->route('dashboard.ui.index', [Layout::group($section), $section]);
    }

    public function download($section, $collection): RedirectResponse
    {
        if (! Section::make($section) || ! $file = Section::make($section)->field($collection)->getUrl()) {
            abort(404);
        }

        return redirect()->away($file);
    }
}
