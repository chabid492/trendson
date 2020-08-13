@extends("ecommerce.layout.master")

@section("title","Contact us")



@section("body")
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script>
      $(document).ready(function(){
        $('div.alert').not('.alert-important').delay(1000).fadeOut(1000);
      });
    </script>
     <div class="container-fluid px-xl-5" id="mdiv">
          <section class="py-3">
            <div class="row">
              <div class="col-lg-12 mb-1">
                @if(session()->has('msgError'))
                    <div class="alert alert-danger">
                        {{ session()->get('msgError') }}
                    </div>
                @endif

                @if(session()->has('message'))
                  <div class="alert alert-success">
                    {{ Session::get('message') }}
                 </div>
                @endif
              <!-- categories -->
                <table class="table table-striped w-100 text-center">
                  <thead>
                    <tr>
                      <th>Sr#</th>
                      <th>Address</th>
                      <th >Phone No.</th>
                      <th>Email</th>
                    </tr>
                  </thead>
                  <tbody>
                    @php
                      $no=1;
                    @endphp
                  @foreach($result as $res)
                  
                    <tr>
                      <td>{{ $no }}</td>
                      <td>{{ $res->address }}</td>
                      <td>{{ $res->no }}</td>
                      <td>{{ $res->email }}</td>

                      <td><a href="{{ url("edit/".$res->id."/contact") }}" class="btn btn-outline-info">Edit</a></td>
                      <td><a href="{{ url("delete/".$res->id."/contact") }}" class="btn btn-outline-danger">Delete</a></td>
                      
                    </tr>
                      
                        @php
                          $no++;
                        @endphp
                  @endforeach
                  </tbody>
                </table>
              </div>
            </div>
          </section>
        </div>
@endsection


