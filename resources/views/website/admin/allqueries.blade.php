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
                      <th>Name</th>
                      <th >Eamil</th>
                      <th>Subject</th>
                      <th>Message</th>
                      <th></th>
                      <th></th>
                    </tr>
                  </thead>
                  <tbody>
                    @php
                      $no=1;
                    @endphp
                  @foreach($result as $res)
                  
                    <tr>
                      <td>{{ $no }}</td>
                      <td>{{ $res->name }}</td>
                      <td>{{ $res->email }}</td>
                      <td>{{ $res->subject }}</td>
                      <td   >
                        <div style="overflow: hidden;text-overflow: clip;white-space: nowrap;width: 50px;">
                          {{ $res->message }}
                        </div>
                        
                      </td>

                      <td>
                        <button type="button" class="btn btn-outline-info" data-toggle="modal" data-target="#myModal{{ $res->id }}">
                          Show Message
                        </button>

                          <!-- The Modal -->
                            <div class="modal" id="myModal{{ $res->id }}">
                              <div class="modal-dialog modal-dialog-scrollable modal-lg">
                                <div class="modal-content">
                                
                                  <!-- Modal Header -->
                                  <div class="modal-header">
                                    
                                    <div class="d-flex justify-content-around w-100">
                                      <p class="modal-title">From: <strong class="text-gray">{{ $res->name }}</strong></p>

                                      <p class="modal-title">Email: <strong class="text-gray">{{ $res->email }}</strong></p>

                                      <p class="modal-title">Subject: <strong class="text-gray">{{ $res->subject }}</strong></p>

                                    </div>

                                    <button type="button" class="close" data-dismiss="modal">×</button>
                                  </div>
                                  
                                  <!-- Modal body -->
                                  <div class="modal-body">
                                    
                                    <p>{{ $res->message }}</p>
                                  </div>
                                  
                                  <!-- Modal footer -->
                                  <div class="modal-footer">
                                    <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                                  </div>
                                  
                                </div>
                              </div>
                            </div>

                      </td>

                      <td><a href="{{ url("delete/".$res->id."/query") }}" class="btn btn-outline-danger">Delete</a></td>
                      
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


