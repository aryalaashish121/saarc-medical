{{-- extended from home --}}
<admin-component />
{{-- <table class="table">
    <thead class="thead-dark">
      <tr>
        <th scope="col">#</th>
        <th scope="col">Application no.</th>
        <th scope="col">Name</th>
        <th scope="col">Nationality</th>
        <th scope="col">Address</th>
        <th scope="col">Action</th>
      </tr>
    </thead>
    <tbody>
      <tr>
          @foreach (\App\Models\Member::all() as $members)
              
     
        <th scope="row">1</th>
        <td>{{$members->application_no}}</td>
        <td>{{$members->first_name_en}} {{$members->last_name_en}}</td>
        <td>{{$members->nationality}}</td>
        <td>{{$members->p_municipality}}-{{$members->p_ward_no}}, {{$members->p_village_name}}</td>
        
        <td><a href="route(">View</a> </td>
        @endforeach
      </tr>
     
    </tbody>
  </table>
   --}}