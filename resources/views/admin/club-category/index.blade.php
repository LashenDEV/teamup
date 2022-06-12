@extends('layouts.admin')
@section('title', 'Club Category')
@section('content')

    <!-- Button -->
    
    <div class="card-header d-flex flex-column flex-md-row justify-content-between p-4"
             style="background-color: #4c84ff !important">
            <div class="text-leftt text-white">
                <h2>All Club Categories</h2>
            </div>
  
    <div class="text-right ">
        <a href="" class="btn btn-success">
            <i class="fa-solid fa-pen-to-square"></i>
            Create Club</a>
        <a href="#deleteModal" class="btn btn-secondary" data-toggle="modal"
            class="btn btn-danger item-center">
            Back</a>
    </div></div>
    {{-- @if ($your_club != null) --}}
    <!-- Button -->
    
    <div class="card card-deafault rounded">
        <div class="card body">
            <div class="col-md-12 p-4">
                <div class="row">
                    <div class="col-md-8">
                       <div class="row">
                         <div class="col">
                           <div class="card text-white bg-primary mb-3" style="max-width: 18rem;">
                            <div class="card-header">Theater & The Arts 

                             <div class="text-right py-2">
                              <button type="button" class="btn btn-dark"><i
                                class="fa-duotone fa-pen-circle mr-1"></i>Edit
                              </button>
                               <a href="#deleteModal" data-toggle="modal" class="pl-1">
                              <button type="submit" class="btn btn-danger"><i
                                class="fa-duotone fa-circle-trash mr-1"></i>Delete
                              </button>
                               </a> 
                             </div>
                           </div>     
                         </div>
                       </div>
 
                    <div class="col">
                       <div class="card text-white bg-primary mb-3" style="max-width: 18rem;">
                          <div class="card-header">Sports & Recreation.</div>
                            <div class="text-right py-2">
                                  <button type="button" class="btn btn-dark"><i
                                    class="fa-duotone fa-pen-circle mr-1"></i>Edit
                                </button>
                          <a href="#deleteModal" data-toggle="modal" class="pl-1">
                                  <button type="submit" class="btn btn-danger"><i
                                    class="fa-duotone fa-circle-trash mr-1"></i>Delete
                                  </button>
                          </a> 
                     
                            </div>
                           </div> 
                        </div>
                     </div>
                   
                  <div class="row">
                     <div class="col">
                       <div class="card text-white bg-primary mb-3" style="max-width: 18rem;">
                          <div class="card-header">Community Service & Social Justice
                            <div class="text-right py-2">
                                <button type="button" class="btn btn-dark"><i
                                  class="fa-duotone fa-pen-circle mr-1"></i>Edit
                              </button> 
                            <a href="#deleteModal" data-toggle="modal" class="pl-1">
                                <button type="submit" class="btn btn-danger"><i
                                      class="fa-duotone fa-circle-trash mr-1"></i>Delete
                                </button>
                            </a> 
                          </div>
                        </div>
                      </div>
                   </div>
 
                     <div class="col">
                        <div class="card text-white bg-primary mb-3" style="max-width: 18rem;">
                           <div class="card-header">Sports & Recreation.</div>
                              <div class="text-right py-2">
                                        <button type="button" class="btn btn-dark"><i
                                          class="fa-duotone fa-pen-circle mr-1"></i>Edit
                                        </button>
                      
                              <a href="#deleteModal" data-toggle="modal" class="pl-1">
                                 <button type="submit" class="btn btn-danger"><i
                                    class="fa-duotone fa-circle-trash mr-1"></i>Delete
                                 </button>
                              </a> 
                               </div> 
                             </div>
                           </div> 
                       </div>   
                    </div>

                    <div class="col-md-4 p-6">
                        <form>
                            <div class="card"><div class="card-header">Add a Club Category</div>
                                <div class="card-body">
                                    <p class="card-text"></p>
                                    <label for="formGroupExampleInput" class="form-label">Category Name</label>
                                    <input type="text" class="form-control">
                                </div>
                                <div class="p-4">
                                <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                                  <a href="" class="btn btn-success">Create Club </a>
                                </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- card -->
        <!-- Confirm Deletion Modal -->
        <div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="deleteModalCenterTitle"
            aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content text-center">
                    <div class="modal-body">
                        <i class="fa-thin fa-circle-xmark fa-10x text-danger"></i>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                        <div class="m-2">
                            <h2>Are you sure?</h2>
                            <p>Do you really want to delete these records? This process cannot be undone.</p>
                        </div>
                        <div class="modal-footer border-0 justify-content-center">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                            <form method="POST" action="">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger"><i class="fa-solid fa-trash-can"></i>
                                    Delete</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Confirm Deletion Model -->
    </div>
    {{-- @else
        <div class="d-flex justify-content-center flex-column align-items-center p-5" style="height: 61vh">
            <h1 class="text-center">
                {{ __('Please Add Your Club') }}</h1>
            <a href="{{ route('president.club.create') }}"><i class="fa-solid fa-folder-plus fa-10x m-5"></i></a>
        </div>
    @endif --}}







 






@endsection
