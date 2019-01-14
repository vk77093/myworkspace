@extends('adminPanel.dashbord')
@section('adminWorkingSection')
<h4>Add Photo Here :)</h4>
    <form action="{{url('adminPhoto')}}" method="POST" enctype="multipart/form-data">
      @method('post')
      @csrf
        <div class="form-group">
            <label for="inputState">Choose Photo</label>
                <input type="file" class="form-control" id="inputState" name="photo_id">
                </div>

                <div class="form-group">
                <label for="inputState">Photo Category</label>
                    <select id="inputState" class="form-control" name="category">
                      <option selected disabled>---Choose...</option>
                      <option value="Activities">Activities</option>
                      <option value="Annual Function">Annual Function</option>
                      <option>Celebration Days</option>
                      <option>Camp</option>
                      <option>Festivals</option>
                      <option>Outstanding Result</option>
                      <option>Events</option>
                      <option>Competion</option>
                      <option>Achivements</option>
                      <option>Sports</option>
                      <option>debete</option>
                    </select>
                    </div>
                    <div class="form-group">
                      <label for="haeader">Add Heade</label>
                      <input type="text" id="haeader" class="form-control" name="header" />
                    </div>

                          <div class="form-group">
                                <button type="submit" class="btn btn-success btn-lg">POST</button>
                          </div>

    </form>
@endsection
