@extends('layouts.admin')
@section('title', 'Club Category')
@section('content')
<h3 class="text-start">All Club Category</h3>
<div class="col-md-12">
    <div class="row">
        <div class="col-md-8" >
            <div class="card text-white bg-primary mb-3" style="max-width: 18rem;">
                <div class="card-header">Theater & The Arts
                  <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                    <button type="button" class="btn btn-dark">Edit</button>
                    <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                      <button type="button" class="btn btn-dark">Delete</button>   
                    </div>  
                  </div> 
                </div>     
           </div>

              <div class="card text-white bg-primary mb-3" style="max-width: 18rem;">
                <div class="card-header">Sports & Recreation.</div>
                <div class="card-body">
                </div>
              </div>

              <div class="card text-white bg-primary mb-3" style="max-width: 18rem;">
                <div class="card-header">Community Service & Social Justice</div>
                <div class="card-body">
                </div>
              </div>

              <div class="card text-white bg-primary mb-3" style="max-width: 18rem;">
                <div class="card-header">Community Service & Social Justice.</div>
                <div class="card-body">
                </div>
              </div>

              <div class="d-grid gap-2 d-md-flex justify-content-md-start">
                <button class="btn btn-outline-primary me-md-2" type="button">1</button>    
              <div class="d-grid gap-2 d-md-flex justify-content-md-start">
                <button class="btn btn-outline-primary me-md-2" type="button">2</button>
              <div class="d-grid gap-2 d-md-flex justify-content-md-start">
                <button class="btn btn-outline-primary me-md-2" type="button">3</button>  
              <div class="d-grid gap-2 d-md-flex justify-content-md-start">
                <button class="btn btn-outline-primary me-md-2" type="button">4</button>   
              </div>   
              </div>   
              </div>  
              </div>
        </div>

                <div class="col-md-4">
                 <form>
                  <div class="card">
                      <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                          <button class="btn btn-outline-primary me-md-2" type="button">Back</button>   
                      </div>
                    <div class="card-body">
                        <h5 class="card-title">Add a Club Category</h5>
                        <p class="card-text"></p>
                        <label for="formGroupExampleInput" class="form-label">Category Name</label>
                        <input type="text" class="form-control">
                     </div>
                        <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                          <button class="btn btn-outline-primary me-md-2" type="button">Register</button>   
                        </div>
                  </div>
                 </form>            
                </div>
    </div>        
</div>


@endsection