<div class = "modal fade" id = "info-detail" tabindex = "-1" role = "dialog" aria-labelledby ="info-detailLabel" aria-hidden = "true">
     <div class = "modal-dialog" role = "document">
        <div class = "modal-content">
           <div class = "modal-header">
              {{-- <h5 class = "modal-title" id = "info-detailLabel">Terms & Conditions</h5> --}}
              <button type = "button" class = "close" data-dismiss = "modal" aria-label = "Close">
                 <span aria-hidden = "true">×</span>
              </button>
           </div>
           <div class = "modal-body">
               <div class="row" style="margin :0px 10px">
                    @foreach($department as $departments)
                         @if($departments->id==4)
                         <div class="col-12">
                              <div class="card" style="margin:10px 5px">
                                   <div style="text-align: center">
                                        <a href="/vacancy?country_id=&department_id=4&category_id=">
                                             <h2 style="font-family: GenghisKhan;font-size: 35px;color:#113c69;text-align:center"><b>{{$departments->dept_name}}</b></h2>
                                        </a>
                                        <p>Available For Jobs : {{$avail_jobs_4}}</p>
                                   </div>
                              </div>
                         </div>
                         @endif
                    @endforeach
               </div>
               <div class="row" style="margin :0px 10px">
                    @foreach($department as $departments)
                         @if($departments->id==5)
                         <div class="col-12">
                              <div class="card" style="margin:10px 5px">
                                   <div style="text-align: center">
                                        <a href="/vacancy?country_id=&department_id=5&category_id=">
                                             <h2 style="font-family: GenghisKhan;font-size: 35px;color:#113c69;text-align:center"><b>{{$departments->dept_name}}</b></h2>
                                        </a>
                                        <p>Available For Jobs : {{$avail_jobs_5}}</p>
                                   </div>
                              </div>
                         </div>
                         @endif
                    @endforeach
               </div>
               <div class="row" style="margin :0px 10px">
                    @foreach($department as $departments)
                         @if($departments->id==6)
                         <div class="col-12">
                              <div class="card" style="margin:10px 5px">
                                   <div style="text-align: center">
                                        <a href="/vacancy?country_id=&department_id=6&category_id=">
                                             <h2 style="font-family: GenghisKhan;font-size: 35px;color:#113c69;text-align:center"><b>{{$departments->dept_name}}</b></h2>
                                        </a>
                                        <p>Available For Jobs : {{$avail_jobs_6}}</p>
                                   </div>
                              </div>
                         </div>
                         @endif
                    @endforeach
               </div>
               <div class="row" style="margin :0px 10px">
                    @foreach($department as $departments)
                         @if($departments->id==7)
                         <div class="col-12">
                              <div class="card" style="margin:10px 5px">
                                   <div style="text-align: center">
                                        <a href="/vacancy?country_id=&department_id=7&category_id=">
                                             <h2 style="font-family: GenghisKhan;font-size: 35px;color:#113c69;text-align:center"><b>{{$departments->dept_name}}</b></h2>
                                        </a>
                                        <p>Available For Jobs : {{$avail_jobs_7}}</p>
                                   </div>
                              </div>
                         </div>
                         @endif
                    @endforeach
               </div>
               <div class="row" style="margin :0px 10px">
                    @foreach($department as $departments)
                         @if($departments->id==8)
                         <div class="col-12">
                              <div class="card" style="margin:10px 5px">
                                   <div style="text-align: center">
                                        <a href="/vacancy?country_id=&department_id=8&category_id=">
                                             <h2 style="font-family: GenghisKhan;font-size: 35px;color:#113c69;text-align:center"><b>{{$departments->dept_name}}</b></h2>
                                        </a>
                                        <p>Available For Jobs : {{$avail_jobs_8}}</p>
                                   </div>
                              </div>
                         </div>
                         @endif
                    @endforeach
               </div>
               <div class="row" style="margin :0px 10px">
                    @foreach($department as $departments)
                         @if($departments->id==9)
                         <div class="col-12">
                              <div class="card" style="margin:10px 5px">
                                   <div style="text-align: center">
                                        <a href="/vacancy?country_id=&department_id=9&category_id=">
                                             <h2 style="font-family: GenghisKhan;font-size: 35px;color:#113c69;text-align:center"><b>{{$departments->dept_name}}</b></h2>
                                        </a>
                                        <p>Available For Jobs : {{$avail_jobs_9}}</p>
                                   </div>
                              </div>
                         </div>
                         @endif
                    @endforeach
               </div>
               <div class="row" style="margin :0px 10px">
                    @foreach($department as $departments)
                         @if($departments->id==10)
                         <div class="col-12">
                              <div class="card" style="margin:10px 5px">
                                   <div style="text-align: center">
                                        <a href="/vacancy?country_id=&department_id=10&category_id=">
                                             <h2 style="font-family: GenghisKhan;font-size: 35px;color:#113c69;text-align:center"><b>{{$departments->dept_name}}</b></h2>
                                        </a>
                                        <p>Available For Jobs : {{$avail_jobs_10}}</p>
                                   </div>
                              </div>
                         </div>
                         @endif
                    @endforeach
               </div>
           </div>
        </div>
     </div>
    </div>