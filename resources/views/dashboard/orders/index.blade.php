<x-layout :title="__('orders.plural')" :breadcrumbs="['dashboard.orders.index']">

    @component('dashboard::components.table-box')
        @slot('title')
            @lang('orders.actions.list') ({{ $orders->total() }})
        @endslot

        <thead>
        <tr>
            <th>@lang('orders.attributes.id')</th>
            <th>@lang('orders.attributes.full_name')</th>
            <th>@lang('orders.attributes.phone')</th>
            <th>@lang('orders.attributes.total')</th>
            <th>@lang('orders.attributes.status')</th>
            <th>@lang('orders.attributes.created_at')</th>
            <th style="width: 80px"></th>
        </tr>
        </thead>
        <tbody>
        @forelse($orders as $order)
            <tr>
                <td><strong>#{{ $order->id }}</strong></td>
                <td>{{ $order->full_name }}</td>
                <td>{{ $order->phone }}</td>
                <td>{{ $order->total_with_currency }}</td>
                <td>
                    @if($order->latestStatus)
                        <x-order-status-badge :status="$order->latestStatus->status" />
                    @else
                        <span class="badge badge-secondary">—</span>
                    @endif
                </td>
                <td>{{ $order->created_at->format('Y-m-d H:i') }}</td>
                <td>
                    <a href="{{ route('dashboard.orders.show', $order) }}" class="btn btn-outline-dark btn-sm">
                        <i class="fas fa-eye"></i>
                    </a>
                </td>
            </tr>
        @empty
            <tr>
                <td colspan="100" class="text-center">@lang('orders.empty')</td>
            </tr>
        @endforelse

        @if($orders->hasPages())
            @slot('footer')
                {{ $orders->links() }}
            @endslot
        @endif
    @endcomponent

</x-layout>
