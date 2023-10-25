@foreach($hostels as $key =>$hostel)
     <tr>
        <td>{{ $key + 1 }}</td>
        <td>{{$hostel->student_name}}</td>
        <td>{{$hostel->room_no}}</td>
        <td>{{$hostel->monthly_fee}}</td>
        <td>{{$hostel->joining_date}}</td>
        <td>{{$hostel->leave_date}}</td>
        <td>@if($hostel->status == 1)
           Active
           @else
            Un-ctive
           @endif

        </td>
        <td></td>
     </tr>
@endforeach