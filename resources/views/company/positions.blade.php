@extends('company.layouts.app')

@section('content')
<div id="toplink" class="mainNoBorder">
<h3>Positions</h3>
<span class=" ml-auto"> Stats: Positions 1 Candidates 4</span>
</div>
<section >
<!-- <div class="mainNoBorder">
  <h3 class="ca">Applicants</h3>
</div> -->
<div class="row">

<div class="col-sm-3 mainFullWidth">
  <h3> Filter</h3>
</div>
  <div class="mainFullWidth col-sm-9" >

    <table class="table table-striped">
      <thead>
        <tr>
          <th scope="col"></th>
          <th scope="col">Role</th>
          <th scope="col">Location</th>
          <th scope="col">Candidates</th>
          <th scope="col">Posted</th>
          <th scope="col"></th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <th scope="row">1</th>
          <td>Mark</td>
          <td>Otto</td>
          <td>@mdo</td>
          <td>@mdo</td>
          <td>@mdo</td>
        </tr>
        <tr>
          <th scope="row">2</th>
          <td>Jacob</td>
          <td>Thornton</td>
          <td>@fat</td>
          <td>@mdo</td>
          <td>@mdo</td>
        </tr>
        <tr>
          <th scope="row">3</th>
          <td>Larry</td>
          <td>the Bird</td>
          <td>@twitter</td>
          <td>@mdo</td>
          <td>
            <div class="dropdown">
              <!-- <a class="btn btn-outline-success" href="#" role="button" id="dropEdit" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><span class="icon icon-cog"><i class="fa fa-cog" aria-hidden="true"></i></span></a></td> -->
              <button class="btn btn-secondary dropdown-toggle" type="button" id="dropEdit" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <span class="icon icon-cog"><i class="fa fa-cog" aria-hidden="true"></i></span>
              </button>
              <div class="dropdown-menu" aria-labelledby="dropEdit" >
                <a class="dropdown-item" href="#">Edit</a>
                <a class="dropdown-item" href="#">Duplicate</a>
                <a class="dropdown-item" href="#">Share</a>
                <a class="dropdown-item" href="#">View</a>
              </div>
            </div>

        </tr>
      </tbody>
      </table>

  </div>
</div>
<div class="mainCenterStay">
<div class="ca">
<nav aria-label="Page navigation example">
<ul class="pagination">
<li class="page-item">
  <a class="page-link" href="#" aria-label="Previous">
    <span aria-hidden="true">&laquo;</span>
    <span class="sr-only">Previous</span>
  </a>
</li>
<li class="page-item"><a class="page-link" href="#">1</a></li>
<li class="page-item"><a class="page-link" href="#">2</a></li>
<li class="page-item"><a class="page-link" href="#">3</a></li>
<li class="page-item">
  <a class="page-link" href="#" aria-label="Next">
    <span aria-hidden="true">&raquo;</span>
    <span class="sr-only">Next</span>
  </a>
</li>
</ul>
</nav>
</div>
</div>
</section>
@endsection
