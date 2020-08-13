@extends("website.layout.master")

@section("title","Trend'son home")



@section("body")
     <div class="container-fluid px-xl-5">
          <section class="py-5">
            <div class="row">
              <div class="col-12">
                <div class="d-flex justify-content-center">
                  <h5 class="text-muted">Control Links</h5>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-xl-3 col-lg-6 mb-4 mb-xl-0">
                <div class="bg-white shadow roundy p-4 h-50 d-flex align-items-center justify-content-between">
                  <div class="flex-grow-1 d-flex align-items-center">
                    <div class="dot mr-3 bg-violet"></div>
                    <div class="text">
                      <a href="{{ url('allCat') }}" title="">
                        <h6 class="mb-0">All Categories</h6>
                      </a>
                    </div>
                  </div>
                  <div class="icon text-white bg-violet"><i class="fas fa-server"></i></div>
                </div>
              </div>
              <div class="col-xl-3 col-lg-6 mb-4 mb-xl-0">
                <div class="bg-white shadow roundy p-4 h-50 d-flex align-items-center justify-content-between">
                  <div class="flex-grow-1 d-flex align-items-center">
                    <div class="dot mr-3 bg-green"></div>
                    <div class="text">
                      <a href="{{ url('allPro') }}" title="">
                        <h6 class="mb-0">All Products</h6>
                      </a>
                    </div>
                  </div>
                  <div class="icon text-white bg-green"><i class="fas fa-server"></i></div>
                </div>
              </div>

              <div class="col-xl-3 col-lg-6 mb-4 mb-xl-0">
                <div class="bg-white shadow roundy p-4 h-50 d-flex align-items-center justify-content-between">
                  <div class="flex-grow-1 d-flex align-items-center">
                    <div class="dot mr-3 bg-red"></div>
                    <div class="text">
                      <a href="{{ url('/hide/products') }}" title="">
                        <h6 class="mb-0">Hide Products</h6>
                      </a>
                    </div>
                  </div>
                  <div class="icon text-white bg-red"><i class="fas fa-receipt"></i></div>
                </div>
              </div>

              <div class="col-xl-3 col-lg-6 mb-4 mb-xl-0">
                <div class="bg-white shadow roundy p-4 h-50 d-flex align-items-center justify-content-between">
                  <div class="flex-grow-1 d-flex align-items-center">
                    <div class="dot mr-3 bg-blue"></div>
                    <div class="text">
                      <a href="{{ url('/show/contact') }}" title="">
                        <h6 class="mb-0">Contact us</h6>
                      </a>
                    </div>
                  </div>
                  <div class="icon text-white bg-blue"><i class="fas fa-server"></i></div>
                </div>
              </div>

              

            </div>
          </section>

          <!--categories sections-->
          {{-- <section class="py-3">
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
                      <th>Category Name</th>
                      <th >Edit</th>
                      <th>Delete</th>
                    </tr>
                  </thead>
                  <tbody>
                    @php
                      $no=1;
                    @endphp
                  @foreach($result as $res)
                  
                    <tr>
                      <td>{{ $no }}</td>
                      <td>
                        <a href="{{ url("show/".$res->id."/products") }}" title="">{{ $res->name }}</a>
                      </td>
                      <td><a href="{{ url("edit/".$res->id."/category") }}" class="btn btn-outline-info">Edit</a></td>
                      <td><a href="{{ url("delete/".$res->id) }}" class="btn btn-outline-danger">Delete</a></td>
                      
                    </tr>
                      
                        @php
                          $no++;
                        @endphp
                  @endforeach
                  </tbody>
                </table>
              </div>
            </div>
          </section> --}}
        </div>
@endsection




