<?php

namespace App\Http\Controllers;

use App\Models\Package;
use App\Models\Reservation;
use App\Models\ReservationItem;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Schema;

class BoothController extends Controller
{
    public function home()
    {
        $packages = Schema::hasTable('packages')
            ? Package::latest()->take(6)->get()
            : collect();

        return view('front', compact('packages'));
    }

    public function catalog()
    {
        if (Schema::hasTable('packages')) {
            $packages = Package::orderBy('price_per_day')->get();
        } else {
            $packages = collect([
                (object) [
                    'id' => 1,
                    'name' => 'Starter Booth',
                    'slug' => 'starter-booth',
                    'description' => 'Paket hemat untuk UMKM dan pameran kecil.',
                    'category' => 'booth',
                    'price_per_day' => 5000000,
                    'total_stock' => 12,
                    'photo' => 'https://images.unsplash.com/photo-1511578314322-379afb476865?auto=format&fit=crop&w=900&q=80',
                ],
                (object) [
                    'id' => 2,
                    'name' => 'Growth Booth',
                    'slug' => 'growth-booth',
                    'description' => 'Paket serbaguna dengan area display lebih luas.',
                    'category' => 'booth',
                    'price_per_day' => 8000000,
                    'total_stock' => 8,
                    'photo' => 'https://images.unsplash.com/photo-1492684223066-81342ee5ff30?auto=format&fit=crop&w=900&q=80',
                ],
                (object) [
                    'id' => 3,
                    'name' => 'Premium Booth',
                    'slug' => 'premium-booth',
                    'description' => 'Paket premium untuk brand activation dan launch event.',
                    'category' => 'booth',
                    'price_per_day' => 12000000,
                    'total_stock' => 5,
                    'photo' => 'https://images.unsplash.com/photo-1529156069898-49953e39b3ac?auto=format&fit=crop&w=900&q=80',
                ],
            ]);
        }

        return view('catalog', compact('packages'));
    }

    public function customerDashboard()
    {
        $reservations = Reservation::with('items.package')
            ->where('customer_id', Auth::id())
            ->latest()
            ->get();

        return view('customer.dashboard', compact('reservations'));
    }

    public function adminDashboard()
    {
        return view('admin.dashboard', [
            'packages' => Package::count(),
            'reservations' => Reservation::count(),
            'pending' => Reservation::where('status', 'pending')->count(),
            'paid' => Reservation::where('status', 'paid')->count(),
            'revenue' => Reservation::where('status', 'paid')->sum('total_amount'),
        ]);
    }

    public function storeReservation(Request $request)
    {
        $validated = $request->validate([
            'package_id' => ['required', 'exists:packages,id'],
            'start_date' => ['required', 'date'],
            'end_date' => ['required', 'date', 'after_or_equal:start_date'],
            'delivery_address' => ['required', 'string', 'max:255'],
            'notes' => ['nullable', 'string', 'max:1000'],
            'quantity' => ['required', 'integer', 'min:1'],
        ]);

        $package = Package::findOrFail($validated['package_id']);
        $duration = (new \DateTime($validated['start_date']))->diff(new \DateTime($validated['end_date']))->days + 1;
        $totalAmount = $package->price_per_day * $duration * $validated['quantity'];

        $reservation = Reservation::create([
            'customer_id' => Auth::id(),
            'invoice_number' => 'INV-' . now()->format('YmdHis') . rand(100, 999),
            'start_date' => $validated['start_date'],
            'end_date' => $validated['end_date'],
            'total_amount' => $totalAmount,
            'status' => 'pending',
            'delivery_address' => $validated['delivery_address'],
            'notes' => $validated['notes'] ?? null,
        ]);

        ReservationItem::create([
            'reservation_id' => $reservation->id,
            'package_id' => $package->id,
            'quantity' => $validated['quantity'],
            'unit_price' => $package->price_per_day,
        ]);

        return redirect()->route('customer.dashboard')->with('success', 'Reservasi berhasil dibuat.');
    }
}
