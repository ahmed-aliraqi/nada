<x-layout :title="'#' . $order->id" :breadcrumbs="['dashboard.orders.show', $order]">

    <div class="row">

        <!-- Customer & Order Info -->
        <div class="col-md-6">
            @component('dashboard::components.box')
                @slot('title', __('orders.singular') . ' #' . $order->id)
                @slot('class', 'p-0')
                @slot('bodyClass', 'p-0')

                <table class="table table-striped table-middle">
                    <tbody>
                    <tr>
                        <th width="200">@lang('orders.attributes.full_name')</th>
                        <td>{{ $order->full_name }}</td>
                    </tr>
                    <tr>
                        <th>@lang('orders.attributes.phone')</th>
                        <td>{{ $order->phone }}</td>
                    </tr>
                    @if($order->email)
                        <tr>
                            <th>@lang('orders.attributes.email')</th>
                            <td>{{ $order->email }}</td>
                        </tr>
                    @endif
                    <tr>
                        <th>@lang('orders.attributes.address')</th>
                        <td>{{ $order->address }}</td>
                    </tr>
                    @if($order->delivery_notes)
                        <tr>
                            <th>@lang('orders.attributes.delivery_notes')</th>
                            <td>{{ $order->delivery_notes }}</td>
                        </tr>
                    @endif
                    <tr>
                        <th>@lang('orders.attributes.created_at')</th>
                        <td>{{ $order->created_at->format('Y-m-d H:i') }}</td>
                    </tr>
                    </tbody>
                </table>
            @endcomponent
        </div>

        <!-- Order Totals & Status -->
        <div class="col-md-6">
            @component('dashboard::components.box')
                @slot('title', __('orders.attributes.status'))
                @slot('class', 'p-0')
                @slot('bodyClass', 'p-0')

                <table class="table table-striped table-middle">
                    <tbody>
                    <tr>
                        <th width="200">@lang('orders.attributes.subtotal')</th>
                        <td>{{ config('app.currency') }} {{ number_format($order->subtotal, 2) }}</td>
                    </tr>
                    <tr>
                        <th>@lang('orders.attributes.shipping_price')</th>
                        <td>{{ config('app.currency') }} {{ number_format($order->shipping_price, 2) }}</td>
                    </tr>
                    @if($order->discount > 0)
                        <tr>
                            <th>@lang('orders.attributes.discount')</th>
                            <td>− {{ config('app.currency') }} {{ number_format($order->discount, 2) }}</td>
                        </tr>
                    @endif
                    <tr>
                        <th>@lang('orders.attributes.total')</th>
                        <td><strong>{{ $order->total_with_currency }}</strong></td>
                    </tr>
                    <tr>
                        <th>@lang('orders.attributes.status')</th>
                        <td>
                            @if($order->latestStatus)
                                <x-order-status-badge :status="$order->latestStatus->status" />
                            @endif
                        </td>
                    </tr>
                    </tbody>
                </table>

                @slot('footer')
                    <form action="{{ route('dashboard.orders.status', $order) }}" method="POST" class="d-flex gap-2 align-items-center">
                        @csrf
                        @method('PATCH')
                        <select name="status" class="form-control form-control-sm" style="max-width: 200px;">
                            @foreach(\App\Models\OrderStatus::STATUSES as $status)
                                <option value="{{ $status }}"
                                        {{ optional($order->latestStatus)->status === $status ? 'selected' : '' }}>
                                    @lang('orders.statuses.' . $status)
                                </option>
                            @endforeach
                        </select>
                        <button type="submit" class="btn btn-primary btn-sm">
                            @lang('orders.actions.update_status')
                        </button>
                    </form>
                @endslot
            @endcomponent
        </div>

    </div>

    <!-- Order Products -->
    <div class="row">
        <div class="col-12">
            @component('dashboard::components.table-box')
                @slot('title', __('products.plural'))

                <thead>
                <tr>
                    <th>@lang('products.attributes.name')</th>
                    <th>@lang('orders.attributes.subtotal')</th>
                    <th>{{ __('Qty') }}</th>
                    <th>@lang('orders.attributes.total')</th>
                </tr>
                </thead>
                <tbody>
                @foreach($order->products as $item)
                    <tr>
                        <td>{{ $item->name }}</td>
                        <td>{{ config('app.currency') }} {{ number_format($item->price, 2) }}</td>
                        <td>{{ $item->quantity }}</td>
                        <td>{{ config('app.currency') }} {{ number_format($item->total, 2) }}</td>
                    </tr>
                @endforeach
                </tbody>
            @endcomponent
        </div>
    </div>

    <!-- Status History -->
    @if($order->statuses->count() > 1)
        <div class="row">
            <div class="col-md-6">
                @component('dashboard::components.box')
                    @slot('title', __('orders.attributes.status') . ' ' . __('History'))

                    <ul class="list-unstyled mb-0">
                        @foreach($order->statuses as $statusRecord)
                            <li class="d-flex align-items-center gap-2 mb-2">
                                <x-order-status-badge :status="$statusRecord->status" />
                                <small class="text-muted">{{ $statusRecord->created_at->format('Y-m-d H:i') }}</small>
                            </li>
                        @endforeach
                    </ul>
                @endcomponent
            </div>
        </div>
    @endif

</x-layout>
