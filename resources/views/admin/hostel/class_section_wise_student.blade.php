@foreach($student as $key =>$students)
<option value="{{ $students->id}}" >{{ $students->student_name}}</option>
@endforeach