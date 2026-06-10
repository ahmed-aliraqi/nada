@props(['status'])
@php
$colors = [
    'pending'    => 'warning',
    'confirmed'  => 'info',
    'processing' => 'primary',
    'shipped'    => 'secondary',
    'delivered'  => 'success',
    'cancelled'  => 'danger',
];
$color = $colors[$status] ?? 'secondary';
@endphp
<span class="badge badge-{{ $color }}">@lang('orders.statuses.' . $status)</span>
