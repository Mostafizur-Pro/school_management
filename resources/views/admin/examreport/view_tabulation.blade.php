<div class="sparkline10-list mt-b-30">
        <div class="sparkline10-graph">
            <div class="basic-login-form-ad">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="basic-login-inner inline-basic-form" >

                        <table class="table table-bordered table-striped">
                    <thead>
                        
                    </thead>
                    <tbody>
                        
                        <tr style="text-align:center; line-height:0px;">
                            
                            <th rowspan="3">SL</th>
                            <th rowspan="3">Name</th>
                            <th rowspan="3">Roll</th>
                            <th colspan="3">Bangla</th>
                            <th colspan="3">English</th>
                            <th colspan="3">Math</th>
                            <th rowspan="3">Total Mark</th>
                            <th rowspan="3">GP</th>
                            <th rowspan="3">LGP</th>
                        
                        </tr>

                        <tr style="text-align:center; line-height:0px;">
                            
                            <td colspan="2">CQ</td>
                            <td colspan="1">MCQ</td>
                            
                            <td colspan="2">CQ-M</td>
                            <td colspan="1">MCQ</td>
                            
                            <td colspan="2">CQ</td>
                            <td colspan="1">MCQ</td>
                            
                        </tr>

                        <tr style="text-align:center; line-height:0px;">
                            
                            <td>Total</td>
                            <td>GP</td>
                            <td>LG</td>
                            
                            <td>Total</td>
                            <td>GP</td>
                            <td>LG</td>

                            <td>Total</td>
                            <td>GP</td>
                            <td>LG</td>
                            
                        </tr>

                        
                    @foreach($marks as $key => $mark)

                    <?php 

                        
                        $bangla_gpa = '';
                        $bangla_lg = '';
                        $eng_1st_gpa = '';
                        $eng_1st_lg = '';
                        $math_gpa  = '';
                        $math_lg = '';
                        $finel_gp ='';
                        $tatal_gpa = '';

                        if($mark->bang_1st_total < 33)
                        {
                            $bangla_gpa = 'F';
                            $bangla_lg = 0 ;
                        }else if($mark->bang_1st_total > 32 && $mark->bang_1st_total < 40)
                        {
                            $bangla_gpa = 'D';
                            $bangla_lg = 1 ;
                        }else if($mark->bang_1st_total > 39 && $mark->bang_1st_total < 50)
                        {
                            $bangla_gpa = 'C';
                            $bangla_lg = 2 ;
                        }else if($mark->bang_1st_total > 49 && $mark->bang_1st_total < 60)
                        {
                            $bangla_gpa = 'B';
                            $bangla_lg = 3 ;
                        }else if($mark->bang_1st_total > 59 && $mark->bang_1st_total < 70)
                        {
                            $bangla_gpa = 'A-';
                            $bangla_lg = 3.5 ;
                        }else if($mark->bang_1st_total > 69 && $mark->bang_1st_total < 80)
                        {
                            $bangla_gpa = 'A';
                            $bangla_lg = 4 ;
                        }else if($mark->bang_1st_total > 79 && $mark->bang_1st_total < 100)
                        {
                            $bangla_gpa = 'A';
                            $bangla_lg = 5 ;
                        }


                        if($mark->eng_1st_total  < 33)
                        {
                            $eng_1st_gpa = 'F';
                            $eng_1st_lg = 0 ;
                        }else if($mark->eng_1st_total  > 32 && $mark->eng_1st_total  < 40)
                        {
                            $eng_1st_gpa = 'D';
                            $eng_1st_lg = 1 ;
                        }else if($mark->eng_1st_total  > 39 && $mark->eng_1st_total  < 50)
                        {
                            $eng_1st_gpa = 'C';
                            $eng_1st_lg = 2 ;
                        }else if($mark->eng_1st_total  > 49 && $mark->eng_1st_total  < 60)
                        {
                            $eng_1st_gpa = 'B';
                            $eng_1st_lg = 3 ;
                        }else if($mark->eng_1st_total  > 59 && $mark->eng_1st_total  < 70)
                        {
                            $eng_1st_gpa = 'A-';
                            $eng_1st_lg = 3.5 ;
                        }else if($mark->eng_1st_total  > 69 && $mark->eng_1st_total  < 80)
                        {
                            $eng_1st_gpa = 'A';
                            $eng_1st_lg = 4 ;
                        }else if($mark->eng_1st_total  > 79 && $mark->eng_1st_total  < 100)
                        {
                            $eng_1st_gpa = 'A';
                            $eng_1st_lg = 5 ;
                        }


                        if($mark->math_total < 33)
                        {
                            $math_gpa = 'F';
                            $math_lg = 0 ;
                        }else if($mark->math_total > 32 && $mark->math_total < 40)
                        {
                            $math_gpa = 'D';
                            $math_lg = 1 ;
                        }else if($mark->math_total > 39 && $mark->math_total < 50)
                        {
                            $math_gpa = 'C';
                            $math_lg = 2 ;
                        }else if($mark->math_total > 49 && $mark->math_total < 60)
                        {
                            $math_gpa = 'B';
                            $math_lg = 3 ;
                        }else if($mark->math_total > 59 && $mark->math_total < 70)
                        {
                            $math_gpa = 'A-';
                            $math_lg = 3.5 ;
                        }else if($mark->math_total > 69 && $mark->math_total < 80)
                        {
                            $math_gpa = 'A';
                            $math_lg = 4 ;
                        }else if($mark->math_total > 79 && $mark->math_total < 100)
                        {
                            $math_gpa = 'A';
                            $math_lg = 5 ;
                        }


                        $tatal_lg =  ($bangla_lg + $eng_1st_lg +$math_lg) / 3 ;

                        if($tatal_lg >= 1 && $tatal_lg < 2)
                        {
                            $finel_gp = 'D';
                        }else if($tatal_lg >= 2 && $tatal_lg < 3)
                        {
                            $finel_gp = 'C';
                        }else if($tatal_lg >= 3 && $tatal_lg < 3.5)
                        {
                            $finel_gp = 'B';
                        }else if($tatal_lg >= 3.5 && $tatal_lg < 4)
                        {
                            $finel_gp = 'A-';
                        }else if($tatal_lg >= 4 && $tatal_lg < 5)
                        {
                            $finel_gp = 'A';
                        }else if($tatal_lg >= 5)
                        {
                            $finel_gp = 'A+';
                        }
                        $t = $mark->bang_1st_total + $mark->eng_1st_total + $mark->math_total;
                        
                        
                    ?>
                        <tr style="text-align:center; line-height:0px;">
                            
                            <td rowspan="2">{{ $key + 1 }}</td>
                            <td rowspan="2">{{ $mark->student_name }}</td>
                            <td rowspan="2">{{ $mark->roll }}</td>
                            

                            <td colspan="2">{{ $mark->bang_1st_cq }}</td>
                            <td colspan="1">{{ $mark->bang_1st_mcq }}</td>

                            <td colspan="2">{{ $mark->eng_1st_cq  }}</td>
                            <td colspan="1">{{ $mark->eng_1st_mcq  }}</td>
                            
                            <td colspan="2">{{ $mark->math_cq  }}</td>
                            <td colspan="1">{{ $mark->math_mcq  }}</td>

                            

                            <td rowspan="2">{{ $mark->bang_1st_total + $mark->eng_1st_total + $mark->math_total}}</td>
                            <td rowspan="2">{{ $finel_gp }} </td>
                            <td rowspan="2">{{ round($tatal_lg, 2) }}</td>
                            
                        
                        </tr>
                        <tr style="text-align:center; line-height:0px;">
                            
                            
                            <td>{{ $mark->bang_1st_total  }}</td>
                            <td>{{ $bangla_gpa }}</td>
                            <td>{{ $bangla_lg }}</td>
                            
                            <td>{{ $mark->eng_1st_total }}</td>
                            <td>{{ $eng_1st_gpa }}</td>
                            <td>{{ $eng_1st_lg }}</td>

                            <td>{{ $mark->math_total }}</td>
                            <td>{{ $math_gpa }}</td>
                            <td>{{ $math_lg }} </td>
                            
                        </tr>
                        @endforeach
                    </tbody>
                    </table>
                                
                        </div>
                   </div>
               </div>
            </div>
        </div>
    </div>