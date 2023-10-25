<div id="PrimaryModalhdbgcl" class="modal modal-edu-general default-popup-PrimaryModal fade" role="dialog">
          <div class="modal-dialog">
              <div class="modal-content">
                  <div class="modal-header header-color-modal bg-color-1">
                      <h4 class="modal-title">Create Section</h4>
                      <div class="modal-close-area modal-close-df">
                          <a class="close" data-dismiss="modal" href="#"><i class="fa fa-close"></i></a>
                      </div>
                  </div>
                  <div class="modal-body" style="padding:12px;">
                      
                  
                  <form action="{{ route('admin.section.store') }}" method="post">
                      @csrf
                    <div class="form-group row">
                        <label for="inputEmail3" class="col-sm-3 col-form-label" style="text-align: left;">Section Name</label>
                        <div class="col-sm-9">
                        <input type="text" class="form-control" id="inputEmail3" name="section_name"  required >
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="inputPassword3" class="col-sm-3 col-form-label" style="text-align: left;">Class</label>
                        <div class="col-sm-9">
                         <select class="form-control"  name="class_id" id="class_id" required >
                                <option value="">Select Class</option>
                                @foreach($lavel as $lavels)
                                    <option value="{{$lavels->id}}">{{$lavels->lavel_name}}</option>
                                @endforeach
                                                
                          </select>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="inputPassword3" class="col-sm-3 col-form-label" style="text-align: left;">Teacher</label>
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