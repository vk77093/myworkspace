@extends('adminPanel.dashbord')
@section('adminWorkingSection')
<h4>Add the Latest News And Events Here</h4>
    <form method="post" action="/">

                <div class="form-group">
                <label for="inputState">Some Tpoic</label>
                    <input type="text" class="form-control" id="inputState">
                    </div>
                    <div class="form-group">
                            <label for="exampleFormControlTextarea1">Write Brif</label>
                            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                          </div>
                          <div class="form-group">
                                <button type="submit" class="btn btn-success btn-lg">POST IT</button>
                          </div>

    </form>
@endsection
