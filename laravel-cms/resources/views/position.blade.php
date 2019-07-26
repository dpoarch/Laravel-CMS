@include('header/head')
         <!-- partial -->
         <div class="page-content-wrapper">
            <div class="page-content-wrapper-inner">
               <div class="viewport-header">
                  <nav aria-label="breadcrumb">
                     <ol class="breadcrumb has-arrow">
                        <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
                        <li class="breadcrumb-item active"><a href="#">Positions</a></li>
                     </ol>
                  </nav>
               </div>
               <div class="row">
                  <div class="col-md-12">
                     <div class="btn btn-success has-icon mb-5" data-toggle="modal" data-target="#large-modal"><i class="mdi mdi-account-plus-outline"></i>Add</div>
                      <div class="modal fade" tabindex="-1" role="dialog" id="large-modal">
                                       <div class="modal-dialog modal-lg" role="document">
                                           <form action="/addpositon" method="POST">
                                                   @csrf
                                          <div class="modal-content">
                                             <div class="modal-header">
                                                <h5 class="modal-title">New Position</h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                             </div>
                                             <div class="modal-body">
                                               
                                                   <div class="col-md-8 mx-auto">
                                                      <div class="form-group row showcase_row_area">
                                                         <div class="col-md-3 showcase_text_area"><label for="inputType1">Name</label></div>
                                                         <div class="col-md-9 showcase_content_area"><input type="text" name="name" class="form-control" required autofocus id="inputType1" value="Sara Watson"></div>
                                                      </div>
                                                      <div class="form-group row showcase_row_area">
                                                         <div class="col-md-3 showcase_text_area"><label for="inputType12">Position</label></div>
                                                         <div class="col-md-9 showcase_content_area"><select name="position" class="form-control" required="">
                                                            <option value="">Select Position</option>
                                                            <option value="Software Engineer">Software Engineer</option>
                                                            <option value="Pre Sales Support">Pre Sales Support</option>
                                                            <option value="Integration Specialist">Integration Specialist</option>
                                                            <option value="Chief Executive Officer (CEO)">Chief Executive Officer (CEO)</option>
                                                            <option value="Junior Technical Author">Junior Technical Author</option>
                                                            <option value="Senior Javascript Developer">Senior Javascript Developer</option>
                                                         </select></div>
                                                      </div>
                                                      <div class="form-group row showcase_row_area">
                                                         <div class="col-md-3 showcase_text_area"><label for="inputType13">Office</label></div>
                                                         <div class="col-md-9 showcase_content_area"><input name="office" type="text" class="form-control" required id="inputType3" value=""></div>
                                                      </div>
                                                      <div class="form-group row showcase_row_area">
                                                         <div class="col-md-3 showcase_text_area"><label for="inputType1">Age</label></div>
                                                         <div class="col-md-9 showcase_content_area"><input name="age" type="number" min="1" max="99" required class="form-control" id="inputType4" value=""></div>
                                                      </div>
                                                      <div class="form-group row showcase_row_area">
                                                         <div class="col-md-3 showcase_text_area"><label for="inputType5">Startdate</label></div>
                                                         <div class="col-md-9 showcase_content_area"><input name="startdate" type="date" class="form-control" required id="inputType5" value="Hulda Stevenson"></div>
                                                      </div>
                                                      <div class="form-group row showcase_row_area">
                                                         <div class="col-md-3 showcase_text_area"><label for="inputType7">Salary</label></div>
                                                         <div class="col-md-9 showcase_content_area"><input name="salary" type="text" class="form-control" required id="inputType7"></div>
                                                      </div>
                                                   </div>
                                                
                                             </div>
                                             <div class="modal-footer"><button type="button" class="btn btn-link btn-sm" data-dismiss="modal">Close</button> <button type="submit" class="btn btn-primary btn-sm">Create</button></div>
                                          </div>
                                          </form>
                                       </div>
                                    </div>
                  </div>
               </div>
               <div class="content-viewport">
                  @if(Session::has('success'))
                  <div class="alert alert-info dismissible-alert" role="alert">Postion has been saved successfully !</div>
                  @elseif(Session::has('delete'))
                  <div class="alert alert-danger dismissible-alert" role="alert">The Selected position has been deleted !<i class="alert-close mdi mdi-close"></i></div>
                  @endif


                  <div class="row">
                     <div class="col-lg-12">
                        <div class="grid">
                           <div class="grid-body">
                              <div class="item-wrapper">
                                 <div class="table-responsive">
                                    <table id="sample-data-table" class="data-table table table-striped">
                                       <thead>
                                          <tr>
                                             <th>Name</th>
                                             <th>Position</th>
                                             <th>Office</th>
                                             <th>Age</th>
                                             <th>Start date</th>
                                             <th>Salary</th>
                                             <th></th>
                                          </tr>
                                       </thead>
                                       <tbody>
                                          @if($positions == null)
                                             <tr>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                             </tr>
                                          @else
                                             @foreach($positions as $position)
                                             <tr>
                                                <td>{{ $position->name }}</td>
                                                <td>{{ $position->position }}</td>
                                                <td>{{ $position->office }}</td>
                                                <td>{{ $position->age }}</td>
                                                <td>{{ $position->startdate }}</td>
                                                <td>$ {{$position->salary }}</td>
                                                <td><a href="/positiondelete/{{$position->id}}"><span class="mdi mdi-delete"></span></a></td>
                                             </tr>
                                             @endforeach
                                          @endif
                                       </tbody>
                                       <tfoot>
                                          <tr>
                                             <th>Name</th>
                                             <th>Position</th>
                                             <th>Office</th>
                                             <th>Age</th>
                                             <th>Start date</th>
                                             <th>Salary</th>
                                             <th></th>
                                          </tr>
                                       </tfoot>
                                    </table>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
@include('footer/footer')