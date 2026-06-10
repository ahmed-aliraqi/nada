<?php

namespace App\Http\Controllers\Dashboard;

use App\Models\Order;
use App\Models\OrderStatus;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class OrderController extends Controller
{
    public function index(): View
    {
        $orders = Order::with('latestStatus')->latest()->paginate(20);

        return view('dashboard.orders.index', compact('orders'));
    }

    public function show(Order $order): View
    {
        $order->load(['products', 'statuses']);

        return view('dashboard.orders.show', compact('order'));
    }

    public function updateStatus(Request $request, Order $order): RedirectResponse
    {
        $request->validate([
            'status' => 'required|in:' . implode(',', OrderStatus::STATUSES),
        ]);

        $order->statuses()->create(['status' => $request->input('status')]);

        flash()->success(__('orders.messages.status_updated'));

        return back();
    }
}
