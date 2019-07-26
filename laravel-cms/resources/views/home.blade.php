@include('header.head')
      
         <!-- partial -->
         <div class="page-content-wrapper">
            <div class="page-content-wrapper-inner">
               <div class="viewport-header">
                  <nav aria-label="breadcrumb">
                     <ol class="breadcrumb has-arrow">
                        <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Overview</li>
                     </ol>
                  </nav>
               </div>
               <div class="content-viewport">
                  <div class="row">
                     <div class="col-md-7 equel-grid order-md-2">
                        <div class="grid d-flex flex-column justify-content-between overflow-hidden">
                           <div class="grid-body">
                              <div class="d-flex justify-content-between">
                                 <p class="card-title">Sales Revenue</p>
                                 <div class="chartjs-legend" id="sales-revenue-chart-legend"></div>
                              </div>
                              <div class="d-flex">
                                 <p class="d-none d-xl-block">12.5% Growth compared to the last week</p>
                                 <div class="ml-auto">
                                    <h2 class="font-weight-medium text-gray"><i class="mdi mdi-menu-up text-success"></i><span class="animated-count">25.04</span>%</h2>
                                 </div>
                              </div>
                           </div>
                           <canvas class="mt-4" id="sales-revenue-chart" height="245"></canvas>
                        </div>
                     </div>
                     <div class="col-md-5 order-md-0">
                        <div class="row">
                           <div class="col-6 equel-grid">
                              <div class="grid d-flex flex-column align-items-center justify-content-center">
                                 <div class="grid-body text-center">
                                    <div class="profile-img img-rounded bg-inverse-primary no-avatar component-flat mx-auto mb-4"><i class="mdi mdi-account-group mdi-2x"></i></div>
                                    <h2 class="font-weight-medium"><span class="animated-count">{{$count}}</span></h2>
                                    <small class="text-gray d-block mt-3">Total Positions</small> <small class="font-weight-medium text-success"><i class="mdi mdi-menu-up"></i><span class="animated-count">0</span>%</small>
                                 </div>
                              </div>
                           </div>
                           <div class="col-6 equel-grid">
                              <div class="grid d-flex flex-column align-items-center justify-content-center">
                                 <div class="grid-body text-center">
                                    <div class="profile-img img-rounded bg-inverse-danger no-avatar component-flat mx-auto mb-4"><i class="mdi mdi-airballoon mdi-2x"></i></div>
                                    <h2 class="font-weight-medium"><span class="animated-count">{{ $user_count }}</span></h2>
                                    <small class="text-gray d-block mt-3">Users</small> <small class="font-weight-medium text-danger"><i class="mdi mdi-menu-down"></i><span class="animated-count">0</span>%</small>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="row">
                           <div class="col-6 equel-grid">
                              <div class="grid d-flex flex-column align-items-center justify-content-center">
                                 <div class="grid-body text-center">
                                    <div class="profile-img img-rounded bg-inverse-warning no-avatar component-flat mx-auto mb-4"><i class="mdi mdi-fire mdi-2x"></i></div>
                                    <h2 class="font-weight-medium animated-count">0</h2>
                                    <small class="text-gray d-block mt-3">Reach</small> <small class="font-weight-medium text-danger"><i class="mdi mdi-menu-down"></i><span class="animated-count">0</span>%</small>
                                 </div>
                              </div>
                           </div>
                           <div class="col-6 equel-grid">
                              <div class="grid d-flex flex-column align-items-center justify-content-center">
                                 <div class="grid-body text-center">
                                    <div class="profile-img img-rounded bg-inverse-success no-avatar component-flat mx-auto mb-4"><i class="mdi mdi-charity mdi-2x"></i></div>
                                    <h2 class="font-weight-medium"><span class="animated-count">0</span>%</h2>
                                    <small class="text-gray d-block mt-3">Engagement Rate</small> <small class="font-weight-medium text-success"><i class="mdi mdi-menu-up"></i><span class="animated-count">51.03</span>%</small>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="row">
                     <div class="col-md-8 equel-grid">
                        <div class="grid">
                           <div class="grid-body py-3">
                              <p class="card-title ml-n1">Order History</p>
                           </div>
                           <div class="table-responsive">
                              <table class="table table-hover table-sm">
                                 <thead>
                                    <tr class="solid-header">
                                       <th colspan="2" class="pl-4">Customer</th>
                                       <th>Order No</th>
                                       <th>Purchased On</th>
                                    </tr>
                                 </thead>
                                 <tbody>
                                    <tr>
                                       <td class="pr-0 pl-4"></td>
                                       <td class="pl-md-0"></td>
                                       <td></td>
                                       <td></td>
                                    </tr>
                                   
                                 </tbody>
                              </table>
                           </div>
                           <a class="border-top px-3 py-2 d-block text-gray" href="#"><small class="font-weight-medium"><i class="mdi mdi-chevron-down mr-2"></i>View All Order History</small></a>
                        </div>
                     </div>
                     <div class="col-md-4 equel-grid">
                        <div class="row flex-grow">
                           <div class="col-12 equel-grid">
                              <div class="grid widget-revenue-card">
                                 <div class="grid-body d-flex flex-column h-100">
                                    <div class="split-header">
                                       <p class="card-title">Server Load</p>
                                       <div class="content-wrapper v-centered"><small class="text-muted"></small> <span class="btn action-btn btn-refresh btn-xs component-flat"><i class="mdi mdi-autorenew"></i></span></div>
                                    </div>
                                    <div class="mt-auto">
                                       <h3 class="font-weight-medium mt-2">0%</h3>
                                       <p class="text-gray">Storage is getting full</p>
                                       <div class="d-flex justify-content-between text-muted mt-3"><small>Usage</small> <small>0GB / 2 TB</small></div>
                                       <div class="progress progress-slim mt-2">
                                          <div class="progress-bar bg-primary" role="progressbar" style="width: 0%" aria-valuenow="68" aria-valuemin="0" aria-valuemax="100"></div>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <div class="col-12 equel-grid">
                              <div class="grid widget-sales-card d-flex flex-column">
                                 <div class="grid-body pb-3">
                                    <div class="wrapper d-flex">
                                       <p class="card-title">Performance</p>
                                       <div class="badge badge-success ml-auto">0</div>
                                    </div>
                                    <div class="wrapper mt-2">
                                       <h3>0</h3>
                                       <small class="text-gray">More traffic in this week</small>
                                    </div>
                                 </div>
                                 <div class="mt-auto">
                                    <canvas class="w-100" id="sales-conversion" height="70"></canvas>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                 
               </div>
            </div>
@include('footer/footer')
