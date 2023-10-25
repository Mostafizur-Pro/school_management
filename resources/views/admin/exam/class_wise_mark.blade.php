<div class="sparkline10-list mt-b-30">
                <div class="sparkline10-graph">
                    <div class="basic-login-form-ad">
                        <div class="row">
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <div class="basic-login-inner inline-basic-form" >
                            @if($mark_type === '1')
                             <form method="post" action="{{ route('admin.mark.update') }}" >
                            @else
                             <form method="post" action="{{ route('admin.mark.store') }}" >
                            @endif    
                            @csrf
                                <table class="table table-bordered">
                                    <thead>
                                        <tr>
                                        <th scope="col">#</th>
                                        <th scope="col">Name</th>
                                        <th scope="col">Roll</th>
                                        <th scope="col">Class</th>
                                        <th scope="col">CQ</th>
                                        <th scope="col">MCQ</th>
                                        <th scope="col">Practical</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                     
                                        @foreach($student as $key => $students)
                                        <tr>
                                            <?php
                                                $oldcq = '';
                                                $oldmcq = '';
                                                $oldpractical = '';

                                                if($mark_type == 1){

                                                    if($subject->subject_id == 1)
                                                    {
                                                        $oldcq = $students->bang_1st_cq;
                                                        $oldmcq = $students->bang_1st_mcq;
                                                    }else if($subject->subject_id == 2)
                                                    {
                                                        $oldcq = $students->bang_2nd_cq;
                                                        $oldmcq = $students->bang_2nd_mcq;
                                                    }else if($subject->subject_id == 3)
                                                    {
                                                        $oldcq = $students->eng_1st_cq;
                                                        $oldmcq = $students->eng_1st_mcq;
                                                    }else if($subject->subject_id == 4)
                                                    {
                                                        $oldcq = $students->eng_2nd_cq;
                                                        $oldmcq = $students->eng_2nd_mcq;
                                                    }else if($subject->subject_id == 5)
                                                    {
                                                        $oldcq = $students->math_cq;
                                                        $oldmcq = $students->math_mcq;
                                                    }else if($subject->subject_id == 6)
                                                    {
                                                        $oldcq = $students->religion_cq;
                                                        $oldmcq = $students->religion_mcq;
                                                    }else if($subject->subject_id == 7)
                                                    {
                                                        $oldcq = $students->ict_cq;
                                                        $oldmcq = $students->ict_mcq;
                                                        $oldpractical = $students->ict_practical;
                                                    }else if($subject->subject_id == 8)
                                                    {
                                                        $oldcq = $students->homs_cq;
                                                        $oldmcq = $students->homs_mcq;
                                                        $oldpractical = $students->homs_practical;
                                                    }else if($subject->subject_id == 9)
                                                    {
                                                        $oldcq = $students->gk_cq;
                                                        $oldmcq = $students->gk_mcq;
                                                    }else if($subject->subject_id == 10)
                                                    {
                                                        $oldcq = $students->phed_cq;
                                                        $oldmcq = $students->phed_mcq;
                                                        $oldpractical = $students->phed_practical;
                                                    }else if($subject->subject_id == 11)
                                                    {
                                                        $oldcq = $students->bgs_cq;
                                                        $oldmcq = $students->bgs_mcq;
                                                    }else if($subject->subject_id == 12)
                                                    {
                                                        $oldcq = $students->science_cq;
                                                        $oldmcq = $students->science_mcq;
                                                        $oldpractical = $students->science_practical;
                                                    }else if($subject->subject_id == 13)
                                                    {
                                                        $oldcq = $students->acc_cq;
                                                        $oldmcq = $students->acc_mcq;
                                                    }else if($subject->subject_id == 14)
                                                    {
                                                        $oldcq = $students->bent_cq;
                                                        $oldmcq = $students->bent_mcq;
                                                    }else if($subject->subject_id == 15)
                                                    {
                                                        $oldcq = $students->fin_cq;
                                                        $oldmcq = $students->fin_mcq;
                                                    }else if($subject->subject_id == 16)
                                                    {
                                                        $oldcq = $students->bio_cq;
                                                        $oldmcq = $students->bio_mcq;
                                                        $oldpractical = $students->bio_practical;
                                                    }else if($subject->subject_id == 17)
                                                    {
                                                        $oldcq = $students->hmath_cq;
                                                        $oldmcq = $students->hmath_mcq;
                                                        $oldpractical = $students->hmath_practical;
                                                    }else if($subject->subject_id == 18)
                                                    {
                                                        $oldcq = $students->chemestry_cq;
                                                        $oldmcq = $students->chemestry_mcq;
                                                        $oldpractical = $students->chemestry_practical;
                                                    }else if($subject->subject_id == 19)
                                                    {
                                                        $oldcq = $students->phy_cq;
                                                        $oldmcq = $students->phy_mcq;
                                                        $oldpractical = $students->phy_practical;
                                                    }

                                                }

                                            
                                            ?>
                                            <input type="hidden" name="student_id[]" value="{{$students->id}}" >
                                            <input type="hidden" name="exam_id" value="{{$exam_id}}" >
                                            <input type="hidden" name="class_id" value="{{$students->class_id}}" >
                                            <input type="hidden" name="section_id" value="{{$students->section_id}}" >
                                            <input type="hidden" name="subject_id" value="{{$subject->subject_id}}" >
                                            

                                            <th scope="row">{{ $key + 1}}</th>
                                            <td>{{ $students->student_name }}</td>
                                            <td>{{ $students->roll }}</td>
                                            <td>{{ $students->lavel_name }}({{ $students->section_name }})</td>
                                            <td style="text-align:center">
                                                        <input type="text" name="cq[{{$students->id}}]" id="cq" class="form-control" style="text-align:center" value="{{ $oldcq }}">
                                            </td>
                                                    
                                            <td style="text-align:center">
                                                        <input type="text" name="mcq[{{$students->id}}]" id="mcq" class="form-control" style="text-align:center" value="{{ $oldmcq }}">
                                            </td>
                                                    
                                            <td style="text-align:center">
                                                        <input type="text" name="practical[{{$students->id}}]" id="practical" class="form-control" style="text-align:center" value="{{ $oldpractical }}">
                                            </td>

                                        </tr>
                                        @endforeach
                                        
                                    </tbody>
                                    </table>
                                <button type="submit" class="btn btn-md btn-success">Save</button>
                            </form>
                            </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
                        


     <!-- <script>
        $("#studentMarkSubmit").submit(function(e){
            e.preventDefault();
            var url     = $(this).attr('action');
            var data    = $(this).serialize();
            var method  = $(this).attr('method');
            $.ajax({
                data    : data,
                type    : method,
                url     : url,
                success : function(data){
                    alert('success');
                }
            })
        })
    </script> -->

