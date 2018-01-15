@extends('devs.layouts.app')

@section('content')

<!-- Modal -->
<div class="modal fade"  id="companyModal" tabindex="-1" role="dialog" aria-labelledby="companyModal" aria-hidden="true">
<div class="modal-dialog featureModal" role="document">
<div class="modal-content">
  <div class="modal-header">
    <h5 class="modal-title" id="companyModalLabel">Learn more </h5>
    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
      <span aria-hidden="true">&times;</span>
    </button>
  </div>
  <div class="modal-body">
    <form method="post" action="{{ route('addCompany') }}" />
      {{ csrf_field() }}
      <div class="form-group">
        <div>
          <label>Full Name</label>
        </div>
        <div>
          <input type="text" class="input form-control" name="name"  />
          <div class="invalid-feedback">
          Please enter your full name.
          </div>
        </div>
        </div>
        <div class="form-group">
          <div>
            <label>Company Email</label>
          </div>
          <div>
            <input type="text" class="input form-control" name="email"  />
            <div class="invalid-feedback">
            Please enter your email.
            </div>
          </div>

        </div>



      <div class="form-group">
        <div>
          <label>Phone Number</label>
        </div>
        <div>
          <input type="text" class="input form-control" name="phone"  />
          <div class="invalid-feedback">
          Please enter your email.
          </div>
        </div>

      </div>

      <div class="form-group">
        <div>
          <label>Head Quarters</label>
        </div>
        <div>
          <input type="text" class="input form-control" name="location"  />

        </div>

      </div>

      <div class="form-group">
        <div>
          <label>How many developers do you want to hire in the next 3 months?</label>
        </div>
        <select name="hire" class="input custom-select" >
          <option value="0">

          </option>
          <option value="1">
            1
          </option>
          <option value="2">
            2
          </option>
          <option value="3">
            3
          </option>
          <option value="4">
            4
          </option>
          <option value="5">
            5
          </option>
          <option value="10">
            10
          </option>
        </select>
        <div class="invalid-feedback">
        Please select your stack.
        </div>

      </div>

      <div class="">
        <div>
          <button class="btn btn-success inp" type="submit" style="width: 400px">Submit</button>
        </div>


      </div>
  </form>
  </div>
  <!-- <div class="modal-footer">
    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
    <button type="button" class="btn btn-primary">Save changes</button>
  </div> -->
</div>
</div>
</div>

@endsection
