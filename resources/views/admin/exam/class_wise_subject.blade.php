<option value="" selected >--Select Subject--</option>
@foreach($subject as $subjects)
     <option value="{{ $subjects->id }}">{{ $subjects->subject_name }}</option>
 @endforeach