<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\TransportRoute;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Http\Request;
use App\Vehicle;
use Session;

class TransportController extends Controller
{
    // Transport Route
        public function transport_route()
        {
            Session::put('page', 'transport_route');
            $transport_routes = TransportRoute::all();
            return view('admin.transport.transport_route',compact('transport_routes'));
        }
        public function transport_route_create()
        {
            return view('admin.transport.transport_route_create');
        }
        public function transport_route_store(Request $request)
        {
            $request->validate([
                'route_name' => 'required|max:255',
            ]);
            
            TransportRoute::create($request->all());
            Toastr::success('Transport Route Successfully created', 'success');
            return redirect()->back();
        }
    // end
    // vehicle
        public function vehicle()
        {
            Session::put('page', 'vehicle');

            $vehicles = Vehicle::all();
            return view('admin.transport.vehicle',compact('vehicles'));
        }
        public function vehicleCreate()
        {
            $transport_routes = TransportRoute::all();
            return view('admin.transport.vehicle_create',compact('transport_routes'));
        }

        public function vehicleStore(Request $request, Vehicle $vehicle)
        {
            $request->validate([
                'vehicle_number' => 'required|unique:vehicles|max:255', 
                'vehicle_model' => 'required|unique:vehicles|max:255', 
                'route_id' => 'required', 
                'driver_name' => 'required|max:255',
                'driver_license' => 'required|unique:vehicles|max:255', 
                'driver_contact' => 'required|unique:vehicles|max:255', 
            ]);
            $vehicle->create($request->all());
            Toastr::success('Vehicle Successfully Added', 'success');
            return redirect()->back();
            
        }
    // vehicle end

}
