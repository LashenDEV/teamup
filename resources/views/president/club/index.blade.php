@extends('layouts.president')
@section('title', 'club')
@section('content')
{{-- //show the club here please remove this comment after done the job
//Add a href button as "Add Your Club" --}}
<style>
    h1{text-align:center; }
</style>

<!-- Button -->
<div class="text-right">
  <button type="button" class="btn btn-primary btn-sm">+Add Your Club</button>
  <button type="button" class="btn btn-secondary btn-sm">Back</button>
</div><br>
<!-- Button -->

<h1 >ART CLUB</h1><br>

<!-- Background image -->
<div
  class="bg-image"
  style="
    background-image:https://www.stonnington.vic.gov.au/files/assets/public/community/events/art-club.jpg?dimension=pageimagefullwidth&w=1140;
    height: 50vh;
  "
></div> <br>
<!-- Background image -->

<!-- Card -->
<div class="card-deck">
    <div class="card">
      <img src="..." class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">Description:</h5>
        <p class="card-text">The Art Club is a place for practicing artists to hone in on their skills, develop their techniques and portfolios, collaborate with other artists like themselves, create bonds with the community through the arts, and learn how to work together through group projects that will beautify the university and community.</p>
      </div>
    </div>
    <div class="card">
      <img src="..." class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">Goals of Club:</h5>
        <p class="card-text">To provide students with a safe environment to explore the visual arts; To create experiences that are not provided in a regular classroom environment for art students; To enhance connections to the arts between our students and the community at large.</p>
      </div>
    </div>
    <div class="card">
      <img src="..." class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">Mission:</h5>
        <p class="card-text">Our mission is to provide art club members with an opportunity to express their individuality through the creation of artworks and give back to our community, school, and others, using our talents and gifts in unique ways.</p>
      </div>
    </div>
  </div> <br>
  <!-- card -->

<!-- Insert Image -->
<label for="avatar"><h5>Insert Image:</h5></label>
<input type="file"
       id="avatar" name="avatar"
       accept="image/png, image/jpeg">
<!-- Insert Image -->

@endsection