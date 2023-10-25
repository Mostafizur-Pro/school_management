@foreach($student as $key =>$student)
     <tr>
        <td data-field="id">{{ $key + 1 }}</td>
        <td data-field="id">{{ $student->student_name}}</td>
        <td data-field="id">{{ $student->roll}}</td>
        <td data-field="id">{{ $student->student_email}}</td>
        <td data-field="id">{{ $student->student_mobile}}</td>
        <td data-field="id">{{ $student->lavel_name }}</td>
        <td data-field="id">{{ $student->section_name }}</td>
        <td>
        <a href="{{route('admin.student.edit',$student->id)}}"><i class="fa fa-edit" style="color:green;"></i></a>
        <a href="{{route('admin.student.view',$student->id)}}"><i class="fa fa-eye" style="color:#12c56a;"></i></a>
        <a href="{{route('admin.student.delete',$student->id)}}"><i class="fa fa-trash" aria-hidden="true" style="color:red;"></i></a>
        </td>
     </tr>
@endforeach

