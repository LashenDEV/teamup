@extends('layouts.admin')
@section('title', 'Admin Dashboard')
@section('content')
    <div class="py-12 px-3 ">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="container">
                <div class="d-sm-flex align-items-center justify-content-between mt-4 mb-4">
                    <h2>Dashboard</h2>
                </div>
                <div class="row">
                                      
                    <div class="col-xl-3 col-sm-6">
                      <div class="card card-mini mb-4 shadow bg-body rounded">
                        <div class="card-body">
                          <h2 class="mb-1">71,503</h2>
                          <p>Total President Count</p>
                          <div class="chartjs-wrapper"><div class="chartjs-size-monitor" style="position: absolute; inset: 0px; overflow: hidden; pointer-events: none; visibility: hidden; z-index: -1;"><div class="chartjs-size-monitor-expand" style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;"><div style="position:absolute;width:1000000px;height:1000000px;left:0;top:0"></div></div><div class="chartjs-size-monitor-shrink" style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;"><div style="position:absolute;width:200%;height:200%;left:0; top:0"></div></div></div>
                            <canvas id="barChart" width="204" height="100" style="display: block; width: 204px; height: 100px;" class="chartjs-render-monitor"></canvas>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="col-xl-3 col-sm-6">
                      <div class="card card-mini mb-4 shadow bg-body rounded">
                        <div class="card-body">
                          <h2 class="mb-1">9,503</h2>
                          <p>Total Members Count</p>
                          <div class="chartjs-wrapper"><div class="chartjs-size-monitor" style="position: absolute; inset: 0px; overflow: hidden; pointer-events: none; visibility: hidden; z-index: -1;"><div class="chartjs-size-monitor-expand" style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;"><div style="position:absolute;width:1000000px;height:1000000px;left:0;top:0"></div></div><div class="chartjs-size-monitor-shrink" style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;"><div style="position:absolute;width:200%;height:200%;left:0; top:0"></div></div></div>
                            <canvas id="dual-line" width="204" height="100" style="display: block; width: 204px; height: 100px;" class="chartjs-render-monitor"></canvas>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="col-xl-3 col-sm-6">
                      <div class="card card-mini mb-4 shadow bg-body rounded">
                        <div class="card-body">
                          <h2 class="mb-1">71,503</h2>
                          <p>Total Clubs Count</p>
                          <div class="chartjs-wrapper"><div class="chartjs-size-monitor" style="position: absolute; inset: 0px; overflow: hidden; pointer-events: none; visibility: hidden; z-index: -1;"><div class="chartjs-size-monitor-expand" style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;"><div style="position:absolute;width:1000000px;height:1000000px;left:0;top:0"></div></div><div class="chartjs-size-monitor-shrink" style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;"><div style="position:absolute;width:200%;height:200%;left:0; top:0"></div></div></div>
                            <canvas id="area-chart" width="204" height="100" style="display: block; width: 204px; height: 100px;" class="chartjs-render-monitor"></canvas>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="col-xl-3 col-sm-6">
                      <div class="card card-mini mb-4 shadow bg-body rounded">
                        <div class="card-body">
                          <h2 class="mb-1">9,503</h2>
                          <p>New Visitors Today</p>
                          <div class="chartjs-wrapper"><div class="chartjs-size-monitor" style="position: absolute; inset: 0px; overflow: hidden; pointer-events: none; visibility: hidden; z-index: -1;"><div class="chartjs-size-monitor-expand" style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;"><div style="position:absolute;width:1000000px;height:1000000px;left:0;top:0"></div></div><div class="chartjs-size-monitor-shrink" style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;"><div style="position:absolute;width:200%;height:200%;left:0; top:0"></div></div></div>
                            <canvas id="line" width="204" height="100" style="display: block; width: 204px; height: 100px;" class="chartjs-render-monitor"></canvas>
                          </div>
                        </div>
                      </div>
                    </div>
                </div>
                <div class="row mt-3">
                    <div class="col-xl-8 col-md-12">
                        <!-- Registration Graph -->
                        <div class="card card-default shadow bg-body rounded" data-scroll-height="675">
                            <div class="card-header">
                            <h2>Overview of registration for the year</h2>
                            </div>
                            <div class="card-body">
                            <canvas id="linechart" class="chartjs"></canvas>
                            </div>
                            <div class="card-footer d-flex flex-wrap bg-white p-0">
                                <div class="col-6 px-0">
                                    <div class="text-center p-4">
                                    <h4>6,308</h4>
                                    <p class="mt-2">Total clubs registered in the year</p>
                                    </div>
                                </div>
                                <div class="col-6 px-0">
                                    <div class="text-center p-4 border-left">
                                    <h4>70,506</h4>
                                    <p class="mt-2">Total members registered in the year</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-md-12">
                        <!-- Doughnut Chart -->
                        <div class="card card-default shadow bg-body rounded" data-scroll-height="675">
                            <div class="card-header justify-content-center">
                            <h2>Most Engaged Clubs</h2>
                            </div>
                            <div class="card-body" >
                            <canvas id="doChart"></canvas>
                            </div>
                            <a href="#" class="pb-5 d-block text-center text-muted"><i class="mdi mdi-download mr-2"></i> Download overall report</a>
                            <div class="card-footer d-flex flex-wrap bg-white p-0">
                            <div class="col-6">
                                <div class="py-4 px-4">
                                <ul class="d-flex flex-column justify-content-between">
                                    <li class="mb-2"><i class="mdi mdi-checkbox-blank-circle-outline mr-2" style="color: #4c84ff"></i>Rotract Club</li>
                                    <li><i class="mdi mdi-checkbox-blank-circle-outline mr-2" style="color: #80e1c1 "></i>Leo Club</li>
                                </ul>
                                </div>
                            </div>
                            <div class="col-6 border-left">
                                <div class="py-4 px-4 ">
                                <ul class="d-flex flex-column justify-content-between">
                                    <li class="mb-2"><i class="mdi mdi-checkbox-blank-circle-outline mr-2" style="color: #8061ef"></i>Art Club</li>
                                    <li><i class="mdi mdi-checkbox-blank-circle-outline mr-2" style="color: #ffa128"></i>English Club</li>
                                </ul>
                                </div>
                            </div>
                            </div>
                        </div>
                     </div>
                </div>
            <div class="row mt-3">
							<div class="col-12"> 
                  <!-- Recently created clubs Table -->
                  <div class="card card-table-border-none shadow bg-body rounded" id="recent-orders">
                    <div class="card-header justify-content-between">
                      <h2>Recent Club Status</h2>
                      <div class="date-range-report ">
                        <span>May 19, 2022 - Jun 17, 2022</span>
                      </div>
                    </div>
                    <div class="card-body pt-0 pb-5">
                      <table class="table card-table table-responsive table-responsive-large" style="width:100%">
                        <thead>
                          <tr>
                            <th>President ID</th>
                            <th>Club Name</th>
                            <th class="d-none d-md-table-cell">Created Date</th>
                            <th class="d-none d-md-table-cell">Category</th>
                            <th>Status</th>
                            <th></th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <td>24541</td>
                            <td>
                              <a class="text-dark" href=""> Foriegn Club</a>
                            </td>
                            <td class="d-none d-md-table-cell">Oct 20, 2018</td>
                            <td class="d-none d-md-table-cell">Academic</td>  
                            <td>
                              <span class="badge badge-success">Active</span>
                            </td>                          
                            <td class="text-right">
                              <div class="dropdown show d-inline-block widget-dropdown">
                                <a class="dropdown-toggle icon-burger-mini" href="" role="button" id="dropdown-recent-order1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" data-display="static"></a>
                                <ul class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdown-recent-order1">
                                  <li class="dropdown-item">
                                    <a href="#">View</a>
                                  </li>
                                  <li class="dropdown-item">
                                    <a href="#">Remove</a>
                                  </li>
                                </ul>
                              </div>
                            </td>
                          </tr>
                          <tr>
                            <td>24541</td>
                            <td>
                              <a class="text-dark" href=""> Foriegn Club</a>
                            </td>
                            <td class="d-none d-md-table-cell">Oct 20, 2018</td>
                            <td class="d-none d-md-table-cell">Academic</td> 
                            <td>
                              <span class="badge badge-warning">Edited</span>
                            </td>
                            <td class="text-right">
                              <div class="dropdown show d-inline-block widget-dropdown">
                                <a class="dropdown-toggle icon-burger-mini" href="#" role="button" id="dropdown-recent-order2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" data-display="static"></a>
                                <ul class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdown-recent-order2">
                                  <li class="dropdown-item">
                                    <a href="#">View</a>
                                  </li>
                                  <li class="dropdown-item">
                                    <a href="#">Remove</a>
                                  </li>
                                </ul>
                              </div>
                            </td>
                          </tr>
                          <tr>
                            <td>24541</td>
                            <td>
                              <a class="text-dark" href=""> Foriegn Club</a>
                            </td>
                            <td class="d-none d-md-table-cell">Oct 20, 2018</td>
                            <td class="d-none d-md-table-cell">Academic</td> 
                            <td>
                              <span class="badge badge-success">Active</span>
                            </td>
                            <td class="text-right">
                              <div class="dropdown show d-inline-block widget-dropdown">
                                <a class="dropdown-toggle icon-burger-mini" href="#" role="button" id="dropdown-recent-order3" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" data-display="static"></a>
                                <ul class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdown-recent-order3">
                                  <li class="dropdown-item">
                                    <a href="#">View</a>
                                  </li>
                                  <li class="dropdown-item">
                                    <a href="#">Remove</a>
                                  </li>
                                </ul>
                              </div>
                            </td>
                          </tr>
                          <tr>
                            <td>24541</td>
                            <td>
                              <a class="text-dark" href=""> Foriegn Club</a>
                            </td>
                            <td class="d-none d-md-table-cell">Oct 20, 2018</td>
                            <td class="d-none d-md-table-cell">Academic</td> 
                            <td>
                              <span class="badge badge-danger">Deleted</span>
                            </td>
                            <td class="text-right">
                              <div class="dropdown show d-inline-block widget-dropdown">
                                <a class="dropdown-toggle icon-burger-mini" href="#" role="button" id="dropdown-recent-order4" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" data-display="static"></a>
                                <ul class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdown-recent-order4">
                                  <li class="dropdown-item">
                                    <a href="#">View</a>
                                  </li>
                                  <li class="dropdown-item">
                                    <a href="#">Remove</a>
                                  </li>
                                </ul>
                              </div>
                            </td>
                          </tr>
                          <tr>
                            <td>24541</td>
                            <td>
                              <a class="text-dark" href=""> Foriegn Club</a>
                            </td>
                            <td class="d-none d-md-table-cell">Oct 20, 2018</td>
                            <td class="d-none d-md-table-cell">Academic</td> 
                            <td>
                              <span class="badge badge-success">Active</span>
                            </td>
                            <td class="text-right">
                              <div class="dropdown show d-inline-block widget-dropdown">
                                <a class="dropdown-toggle icon-burger-mini" href="#" role="button" id="dropdown-recent-order5" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" data-display="static"></a>
                                <ul class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdown-recent-order5">
                                  <li class="dropdown-item">
                                    <a href="#">View</a>
                                  </li>
                                  <li class="dropdown-item">
                                    <a href="#">Remove</a>
                                  </li>
                                </ul>
                              </div>
                            </td>
                          </tr>
                        </tbody>
                      </table>
                    </div>
                  </div>
              </div>
						</div> 
            </div>
        </div>
    </div>

@endsection
