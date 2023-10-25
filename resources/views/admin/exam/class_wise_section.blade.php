<option value="" selected >--Select Section--</option>
@foreach($section as $sections)
     <option value="{{ $sections->id }}">{{ $sections->section_name }}</option>
 @endforeach