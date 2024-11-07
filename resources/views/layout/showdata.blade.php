@include('layout.header')
<br>
<br>
 
  <div class="container">
    <h1>All Users Data</h1>
  <div
        class="table-responsive"
    >
        <table
            class="table"
        >
            <thead>
                <tr>
                    <th scope="col">First Name</th>
                    <th scope="col">Last Name</th>
                    <th scope="col">Email</th>
                    <th scope="col">Message</th>

                    
                    <th scope="col">Actions</th>
                    
                </tr>
            </thead>
            @foreach($students as $studata)
            <tbody>
           
                <tr>
                    <td>{{$studata->first_name}}</td>
                    <td>{{$studata->last_name}}</td>
                    <td>{{$studata->email}}</td>
                    <td>{{$studata->msg}}</td>
                    <td><a href="{{url('delete/'.$studata->id)}}" style="color: #fff" ><i class="fa-solid fa-trash"></i></a>
                    <a href="{{url('edit/'.$studata->id)}}" style="color: #fff" ><i class="fa-solid fa-pen-to-square"></i></a>
                </td>
                

                </tr>
            </tbody>
            @endforeach
        </table>
    </div>
    
  </div>
      <br>
      <br>
      <br>
      <br>    
      <br>
      <br>    
      <br>    
      <br>    
      <br>    
      <br>
  @include('layout.footer')