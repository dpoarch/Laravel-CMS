
@include('header/head')
         <!-- partial -->
         <div class="page-content-wrapper">
            <div class="page-content-wrapper-inner">
               <div class="viewport-header">
                  <nav aria-label="breadcrumb">
                     <ol class="breadcrumb has-arrow">
                        <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
                        <li class="breadcrumb-item active"><a href="#">Accounts</a></li>
                     </ol>
                  </nav>
               </div>
               <div class="content-viewport">
                  <div class="row">
                     <div class="col-lg-12">
                        <div class="grid">
                           <div class="grid-body">
                              <div class="item-wrapper">
                                 <div class="table-responsive">
                                    <table id="complex-header-table" class="data-table table">
                                       <thead>
                                          <tr class="header-grouping-label">
                                             <th rowspan="1">Info</th>
                                             <th colspan="2">HR Information</th>
                                             <th colspan="3">Contact</th>
                                          </tr>
                                          <tr>
                                             <th>Profile</th>
                                             <th>Name</th>
                                             <th>Email</th>
                                             <th>Password</th>
                                             <th>Created at.</th>
                                          </tr>
                                       </thead>
                                       <tbody>
                                          @foreach($user as $users)
                                          <tr>
                                             <td><img src="{{$users->profile}}" width="35px"></td>
                                             <td>{{$users->name}}</td>

                                             <td><a href="https://uxcandy.co/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="5f2b7131362730311f3b3e2b3e2b3e3d333a2c71313a2b">[email&#160;protected]</a></td>
                                             <td><a href="https://uxcandy.co/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="5f2b7131362730311f3b3e2b3e2b3e3d333a2c71313a2b">[Password&#160;protected]</a></td>
                                             <td>{{$users->created_at}}</td>
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
               </div>
            </div>
@include('footer/footer')