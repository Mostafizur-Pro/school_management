@foreach($student as $key => $students)
     <tr>
        <td>{{ $key + 1 }}</td>
        <td>{{ $students->student_name}}</td>
        <td>{{ $students->roll}}</td>
        <td>{{ $students->lavel_name}}</td>
        <td>{{ $students->section_name}}</td>
        <td>
        <button type="button" class="btn btn-primary" onclick="model()" >Large modal</button>
        </td>
     </tr>

@endforeach

<div class="modal fade bd-example-modal-lg mymodel" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      
        

    </div>
  </div>
</div>

<script>
    function model(){
        $('#mymodel').toggle();
    }
</script>