 <!DOCTYPE html>
 <html>
 <head>
   <title>Index page</title>

   <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <script type="text/javascript" src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
  <script type="text/javascript" src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>

 </head>
 <body>


       <div class="container mt-4">

       <div class="card">

              <div class="card-header">

                Manage Information
                
              </div>


              <div class="card-body">

                  @include('messages')

                  <a href="{{ route('crud.create') }}" class="btn btn-primary " style="float:center">Add Information</a>


                <table class="table table-bordered table-hover mt-3">
                  
                    <tr>

                      <th>#</th>
                      <th>Name</th>
                      <th>Email</th>
                      <th>Phone Number</th>
                      <th>Action</th>

                    </tr>

                   <!-- Catch the variable array categories by using foreach loop -->

                   @php $i=1; @endphp

                   @foreach($crud as $cr)

                   <tr>

                     
                     <td>{{ $i++ }}</td>
                     <td>{{ $cr->name }}</td>
                     <td>{{ $cr->email }}</td>
                     <td>{{ $cr->phone }}</td>
                  

                     <td>
                  
                      <a href="{{ route('crud.edit', $cr->id) }}" class="btn btn-info">Edit</a>

                      <form action="{{ route('crud.delete',$cr->id) }}" method="post" style="float:right;">
                        @csrf

                        <button type="submit" class="btn btn-danger">Delete</button>

                      </form>




                    </td>

                   </tr>

                  

                   @endforeach

                </table>

                

              </div>

            </div>

          </div>

    </body>

 </html>