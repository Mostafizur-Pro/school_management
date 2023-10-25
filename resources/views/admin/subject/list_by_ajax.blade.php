
    @foreach($subject as $key => $subjects)
        <tr>
            <td>{{ $key + 1}}</td>
            <td>{{ $subjects->subject_name}}</td>
            <td>{{ $subjects->subject_code}}</td>
            <td>{{ $subjects->subject_type == 1?'Mandatory':'Optional'}}</td>
            <td>{{ $subjects->lavel_name}}</td>
            <td>{{ $subjects->teachers_name}}</td>
            <td>
                @if($subjects->status == '1')
                <a href="#"><i class="fa fa-arrow-circle-down" style="font-size: 16px;color:#d517d8;"></i></a>
                @else
                <a href="#"><i class="fa fa-arrow-circle-up" style="font-size: 15px;color:#e032c3;"></i></a>
                @endif
                <a href=""><i class="fa fa-edit" style="color:#1239c5;font-size: 15px"></i></a>
                <a href=""><i class="fa fa-eye" style="color:#12c56a;font-size: 18px"></i></a>
                <a href="#"><i class="fa fa-trash" aria-hidden="true" style="color:red;font-size: 16px;"></i></a>
            </td>
        </tr>
    @endforeach
                                            