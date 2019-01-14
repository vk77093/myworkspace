@extends('adminPanel.dashbord')
@section('adminWorkingSection')
<h4>Add the Post Here</h4>
    <form>
        
                <div class="form-group">
                <label for="inputState">Category</label>
                    <select id="inputState" class="form-control">
                      <option selected disabled>Choose...</option>
                      <option>Acedamic</option>
                      <option>Addmission</option>
                      <option>Research And Enduction</option>
                      <option>Course</option>
                      <option>Exam Time Line</option>
                      <option>Seminar</option>
                      <option>Latest News And Alerts</option>
                    </select>
                    </div>
                    <div class="form-group">
                            <label for="exampleFormControlTextarea1">Write Overview</label>
                            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                          </div>
                          <div class="form-group">
                                <button type="submit" class="btn btn-success btn-lg">POST</button>
                          </div>
        
    </form>
@endsection