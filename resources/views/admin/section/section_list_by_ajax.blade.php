
    @foreach($section as $key => $sections)
        <tr>
            <td>{{ $key + 1}}</td>
            <td>{{ $sections->section_name}}</td>
            <td>{{ $sections->lavel_name}}</td>
            <td>
                @if($sections->teacher_id == NULL)

                @else
                    {{ $sections->teachers_name}}
                @endif
                
            </td>
            <td></td>
        </tr>
    @endforeach
                                            