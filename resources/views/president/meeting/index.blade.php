@extends('layouts.president')
@section('title', 'Meetings')
@section('content')
    <div class="card card-default">
        <div class="card-header d-flex  justify-content-md-between justify-content-center p-3"
             style="background-color: #4c84ff !important">
            <div class="text-leftt text-white pb-1 pb-md-0">
                <h1>All Meeting</h1>
            </div>
                <div class="text-right">
                    <a href="{{ route('president.event.create') }}">
                        <button type="button" class="btn btn-success"><i
                                class="fa-light fa-plus"></i> Create An Meeting
                        </button>
                    </a>
                        <button type="button" class="btn btn-secondary">Back</button>
                </div>
            </div>
            <br>
            <div class="justify-content-md-between justify-content-center p-3 shadow p-3 mb-3 bg-white rounded mx-3">
                
                        <dt>Meeting Name</dt> 
                            <div class="float-right">
                                <a href="#" class="pl-1">
                                    <button type="button" class="btn btn-success"><i
                                            class="fa-duotone fa-paper-plane-top mr-1 t"></i>Publish
                                    </button>
                                </a>
                                <a href="#" class="pl-1">         
                                    <button type="button-right" class="btn btn-dark"><i
                                            class="fa-duotone fa-pen-circle mr-1 "></i>Edit
                                    </button>
                                </a>
                                <a href="#deleteModal" data-toggle="modal" class="pl-1">
                                    <button type="submit" class="btn btn-danger"><i
                                           class="fa-duotone fa-circle-trash mr-1"></i>Delete
                                    </button>
                                </a>
                            </div>
                        <dd>ABC</dd>
                            <p> <i class="fa-duotone fa-calendar-day"></i>
                        
                                2022.05.22
                            
                            </p>
                            <p> <i class="fa-solid fa-clock"></i>

                                21.40.00
                            
                            </p>
                        
                        </div>
             
  
             <div class="justify-content-md-between justify-content-center p-3 shadow p-3 mb-3 bg-white rounded mx-3">
                
                        <dt>Meeting Name</dt> 
                            <div class="float-right">
                                <a href="#" class="pl-1">
                                    <button type="button" class="btn btn-success"><i
                                            class="fa-duotone fa-paper-plane-top mr-1 t"></i>Publish
                                    </button>
                                </a>
                                <a href="#" class="pl-1">         
                                    <button type="button-right" class="btn btn-dark"><i
                                            class="fa-duotone fa-pen-circle mr-1 "></i>Edit
                                    </button>
                                </a>
                                <a href="#deleteModal" data-toggle="modal" class="pl-1">
                                    <button type="submit" class="btn btn-danger"><i
                                           class="fa-duotone fa-circle-trash mr-1"></i>Delete
                                    </button>
                                </a>
                            </div>
                        <dd>ABC</dd>
                            <p> <i class="fa-duotone fa-calendar-day"></i>
                        
                                2022.05.22
                            
                            </p>
                            <p> <i class="fa-solid fa-clock"></i>

                                21.40.00
                            
                            </p>
                        
                        </div>
            

            <div class="justify-content-md-between justify-content-center p-3 shadow p-3 mb-3 bg-white rounded mx-3">
                
                        <dt>Meeting Name</dt> 
                            <div class="float-right">
                                <a href="#" class="pl-1">
                                    <button type="button" class="btn btn-success"><i
                                            class="fa-duotone fa-paper-plane-top mr-1 t"></i>Publish
                                    </button>
                                </a>
                                <a href="#" class="pl-1">         
                                    <button type="button-right" class="btn btn-dark"><i
                                            class="fa-duotone fa-pen-circle mr-1 "></i>Edit
                                    </button>
                                </a>
                                <a href="#deleteModal" data-toggle="modal" class="pl-1">
                                    <button type="submit" class="btn btn-danger"><i
                                           class="fa-duotone fa-circle-trash mr-1"></i>Delete
                                    </button>
                                </a>
                            </div>
                        <dd>ABC</dd>
                            <p> <i class="fa-duotone fa-calendar-day"></i>
                        
                                2022.05.22
                            
                            </p>
                            <p> <i class="fa-solid fa-clock"></i>

                                21.40.00
                            
                            </p>
                        
                        </div>
             
                    
            <div class="justify-content-md-between justify-content-center p-3 shadow p-3 mb-3 bg-white rounded mx-3">
                
                        <dt>Meeting Name</dt> 
                            <div class="float-right">
                                <a href="#" class="pl-1">
                                    <button type="button" class="btn btn-success"><i
                                            class="fa-duotone fa-paper-plane-top mr-1 t"></i>Publish
                                    </button>
                                </a>
                                <a href="#" class="pl-1">         
                                    <button type="button-right" class="btn btn-dark"><i
                                            class="fa-duotone fa-pen-circle mr-1 "></i>Edit
                                    </button>
                                </a>
                                <a href="#deleteModal" data-toggle="modal" class="pl-1">
                                    <button type="submit" class="btn btn-danger"><i
                                           class="fa-duotone fa-circle-trash mr-1"></i>Delete
                                    </button>
                                </a>
                            </div>
                        <dd>ABC</dd>
                            <p> <i class="fa-duotone fa-calendar-day"></i>
                        
                                2022.05.22
                            
                            </p>
                            <p> <i class="fa-solid fa-clock"></i>

                                21.40.00
                            
                            </p>
                        
                        </div>
              
                
            <div class="justify-content-md-between justify-content-center p-3 shadow p-3 mb-3 bg-white rounded mx-3">
                
                        <dt>Meeting Name</dt> 
                            <div class="float-right">
                                <a href="#" class="pl-1">
                                    <button type="button" class="btn btn-success"><i
                                            class="fa-duotone fa-paper-plane-top mr-1 t"></i>Publish
                                    </button>
                                </a>
                                <a href="#" class="pl-1">         
                                    <button type="button-right" class="btn btn-dark"><i
                                            class="fa-duotone fa-pen-circle mr-1 "></i>Edit
                                    </button>
                                </a>
                                <a href="#deleteModal" data-toggle="modal" class="pl-1">
                                    <button type="submit" class="btn btn-danger"><i
                                           class="fa-duotone fa-circle-trash mr-1"></i>Delete
                                    </button>
                                </a>
                            </div>
                        <dd>ABC</dd>
                            <p> <i class="fa-duotone fa-calendar-day"></i>
                        
                                2022.05.22
                            
                            </p>
                            <p> <i class="fa-solid fa-clock"></i>

                                21.40.00
                            
                            </p>
                        
                        </div>
                














































































                        

            <div class="justify-content-md-between justify-content-center p-3 shadow p-3 mb-3 bg-white rounded mx-3 ">
                
            
            

                        <dt>Meeting Name</dt> 
                            <div class="float-right">
                                <a href="#" class="pl-1">
                                    <button type="button" class="btn btn-success"><i
                                            class="fa-duotone fa-paper-plane-top mr-1 t"></i>Publish
                                    </button>
                                </a>
                                <a href="#" class="pl-1">         
                                    <button type="button-right" class="btn btn-dark"><i
                                            class="fa-duotone fa-pen-circle mr-1 "></i>Edit
                                    </button>
                                </a>
                                <a href="#deleteModal" data-toggle="modal" class="pl-1">
                                    <button type="submit" class="btn btn-danger"><i
                                           class="fa-duotone fa-circle-trash mr-1"></i>Delete
                                    </button>
                                </a>
                            </div>
                        <dd>ABC</dd>
                            <p> <i class="fa-duotone fa-calendar-day"></i>
                        
                                2022.05.22
                            
                            </p>
                            <p> <i class="fa-solid fa-clock"></i>

                                21.40.00
                            
                            </p>
                        
                        
                
            </div>





           
@endsection
