<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Client;
use Illuminate\Http\Request;

use App\Models\Delivery;
use App\Models\Order;
use App\Models\Sale;
use Carbon\Carbon;

class AdminController extends Controller
{
    public function index()
    {
        $fromDate = Carbon::now()->startOfMonth();
        $todate = Carbon::now()->today();

        $totalDeliveries = Delivery::whereBetween('created_at', array($fromDate, $todate))->count();

        $totalOrders = Order::whereBetween('created_at', array($fromDate, $todate))->count();

        // How much we make per month
        $totalSalesPerMonth = Sale::whereBetween('created_at', array($fromDate, $todate))->avg('price');

        // Total clients
        $totalClients = Client::count();

        return view('dashboard', compact('totalDeliveries', 'totalOrders', 'totalSalesPerMonth', 'totalClients'));
    }
}
