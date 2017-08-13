











@foreach($schools as $school )
  <div>
    <div class="">
      <span>{{ $school->school_name }}</span><br>
    </div>
    <span>{{ $school->address }}</span><br>
    <span>{{ $school->contact_info }}</span><br>
  </div>
  <br>
  <br>
@endforeach
