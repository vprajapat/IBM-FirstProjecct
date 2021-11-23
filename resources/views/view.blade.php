@include('header')

<div class="container">

<div class="row m-5 p-3">
    <div class="col">
        <p class="h3 text-center m-3 border rounded p-3 text-uppercase" >Registered Trainee Details</p>
        <table class="table table-bordered table-striped">
            <thead>
                <tr> 
                    <th> First Name</th>
                    <th> Last Name</th>
                    <th>Email</th>
                    <th>DOB</th>
                    <th>Address</th>
                    <th>City</th>
                    <th>State</th>
                    <th>ZIP</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
             @foreach ($register as $item)
                    
              
                <tr>
                    <td >{{$item->fname}}</td>
                    <td>{{$item->lname}}</td>
                    <td>{{$item->email}}</td>
                    <td>{{$item->dob}}</td>
                    <td>{{$item->address}}</td>
                    <td>{{$item->city}}</td>
                    <td>{{$item->state}}</td>
                    <td>{{$item->zip}}</td>
                    <td> <a href="{{route('student.edit',['id'=>$item->id])}}"><button class="btn btn-primary">Edit</button>
                         </a> 
                            <a href="{{route('student.destroy',['id'=>$item->id])}}"><button class="btn btn-danger">Delete
                            </button>
                               
                            </a>
                        
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>

    </div>
</div>


</div>

@include('footer')