<?php

namespace App\Http\Livewire\Home;

use App\Enums\PaymentStatus;
use App\Models\Order;
use App\Models\User;
use Illuminate\Support\Collection;
use Livewire\Component;

class Dashboard extends Component
{
    public $filterTime = [
        'hace 7 dias' => 7,
        '1 mes' => 30,
        '2 meses' => 60,
        '6 meses' => 120,
        '12 meses' => 360,
        // 'Todo' => 30,
    ];
    public $activeTab = 7;

    public $productCategory = [];
    public $usersChart = [];


    public function render()
    {

        $lastDays = now()->subDays($this->activeTab);
        // dd($lastDays);
        $orders = Order::with('payment', 'order_products.product.category')
            ->where('updated_at', '>=', $lastDays)
            ->orderBy('id', 'desc')
            ->get();

        $orderSuccessful = $orders->filter(function ($order) {
            return $order->payment->status == PaymentStatus::SUCCESSFUL;
        });

        $totalIncome = $orderSuccessful->sum('total');

        $productsQuantity = (int) $orderSuccessful->sum('quantity');

        $usersRegister = User::select('id', 'created_at')
            ->where('created_at', '>=', $lastDays)
            ->orderBy('created_at')
            ->get();

        $registeredUserMonth = $usersRegister->groupBy(function ($user, $key) {
            return ucfirst($user->created_at->isoFormat('MMMM'));
        })->map(function ($item) {
            return $item->count();
        });

        $ordersRecent = $orders->take(6);
        $ordersRecent->load('payment');

        $this->usersChart = [
            'labels' => $registeredUserMonth->keys()->toArray(),
            'data' => $registeredUserMonth->values()->toArray(),
        ];

        $orderProducts = $orderSuccessful->pluck('order_products')->collapse();

        $productCategory = $orderProducts->groupBy('product.category.name')->map(function ($item) {
            return $item->count();
        });

        $this->productCategory = [
            'labels' => $productCategory->keys()->toArray(),
            'data' => $productCategory->values()->toArray(),
        ];

        return view('livewire.home.dashboard', [
            'totalIncome' => $totalIncome,
            'productsQuantity' => $productsQuantity,
            'ordersCompleted' => $orderSuccessful->count(),
            'registeredUserCount' => $registeredUserMonth->sum(),
            'productCategory' => $productCategory,
            'ordersRecent' => $ordersRecent,
        ]);
    }
}
