<div id="PrimaryModalhdbgcl" class="modal modal-edu-general default-popup-PrimaryModal fade" role="dialog">
          <div class="modal-dialog">
              <div class="modal-content">
                  <div class="modal-header header-color-modal bg-color-1">
                      <h4 class="modal-title">Create Subject</h4>
                      <div class="modal-close-area modal-close-df">
                          <a class="close" data-dismiss="modal" href="#"><i class="fa fa-close"></i></a>
                      </div>
                  </div>
                  <div class="modal-body" style="padding:12px;">
                      
                  
                  <form action="{{ route('admin.subject.store') }}" method="post">
                      @csrf

                    <div class="form-group row">
                        <label for="subject_name" class="col-sm-3 col-form-label" style="text-align: left;">Subject</label>
                        <div class="col-sm-9">
                         <select class="form-control"  name="subject_name" id="subject_name" required >
                                <option value="">Select Subject Type</option>
                                
                                <option value="Bangla">Bangla</option>
                                <option value="Bangla 2nd paper">Bangla 2nd paper</option>
                                <option value="English">English</option>
                                <option value="English 2nd paper">English 2nd paper</option>
                                <option value="Mathematics">Mathematics</option>
                                <option value="Religion">Religion</option>
                                <option value="ICT">ICT</option>
                                <option value="Home Science">Home Science</option>
                                <option value="G.Knowledge">G.Knowledge</option>
                                <option value="Ph.Edu">Ph.Edu</option>
                                <option value="BGS">BGS</option>
                                <option value="Science">Science</option>
                                <option value="Accounting">Accounting</option>
                                <option value="Business Ent">Business Ent</option>
                                <option value="Finance">Finance</option>
                                <option value="Biology">Biology</option>
                                <option value="Higher Math">Higher Math</option>
                                <option value="Chemistry">Chemistry</option>
                                <option value="Physics">Physics</option>
                                
                                                
                          </select>
                        </div>
                    </div>

                    
                    
                    <div class="form-group row">
                        <label for="subject_code" class="col-sm-3 col-form-label" style="text-align: left;">Subject Code</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="subject_code" name="subject_code"  >
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="subject_type" class="col-sm-3 col-form-label" style="text-align: left;">Subject Type</label>
                        <div class="col-sm-9">
                         <select class="form-control"  name="subject_type" id="subject_type" required >
                                <option value="">Select Subject Type</option>
                                
                                <option value="1">Mandatory</option>
                                <option value="2">Optional</option>
                                
                                                
                          </select>
                        </div>
                    </div>
                    
                    <div class="form-group row">
                        <label for="class_id" class="col-sm-3 col-form-label" style="text-align: left;">Class</label>
                        <div class="col-sm-9">
                         <select class="form-control"  name="class_id" id="class_id"  >
                                <option value="">Select Class</option>
                                
                                @foreach($lavel as $lavels)
                                    <option value="{{$lavels->id}}">{{$lavels->lavel_name}}</option>
                                @endforeach
                                                
                          </select>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="teacher_id" class="col-sm-3 col-form-label" style="text-align: left;">Teacher</label>
                        <div class="col-sm-9">
                         <select class="form-control"  name="teacher_id" id="teacher_id">
                                    <option value="">Select Teacher</option>
                                
                                    @foreach($teacher as $teachers)
                                        <option value="{{$teachers->id}}">{{ $teachers->teachers_name }}</option>
                                    @endforeach
                                                
                          </select>
                        </div>
                    </div>

                    
                   


                  </div>
                  <div class="modal-footer">
                      <a data-dismiss="modal" href="#">Cancel</a>
                      <input class="btn btn-md btn-info" type="submit" value="Submit" style="height: 40px;background: #006df0;">
                  </div>
                </form>
              </div>
          </div>
      </div>
