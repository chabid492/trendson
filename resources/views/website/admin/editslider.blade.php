@extends("website.layout.master")

@section("title","Edit Slider")



@section("body")

      <div class="container-fluid px-xl-5">
          <section class="py-5">
            <div class="row">
         
              <!-- Form Elements -->
              <div class="col-lg-12 mb-5 stl_card">
                <div class="card card_width">
                  <div class="card-header">
                    <h3 class="h6 text-uppercase mb-0">Slider Product Form</h3>
                  </div>
                  <div class="card-body">
                    <!--error message start-->
                    @if($errors->any())
                      <ul class="list-group">
                      @foreach($errors->all() as $error)

                          <li class="alert alert-danger fade show">
                            {{ $error }}
                          </li>
                        
                      @endforeach
                      </ul>
                    @endif

                    @if(session()->has('message'))
                      <div class="alert alert-success">
                          {{ session()->get('message') }}
                      </div>
                    @endif
                    @if(session()->has('msgError'))
                      <div class="alert alert-danger">
                          {{ session()->get('msgError') }}
                      </div>
                    @endif

                    <!--error message end-->
                    @foreach($result as $res)

                    

                    <form class="form-horizontal p-3" method="post" action="{{ url('/slider/'.$res->id)}}" enctype="multipart/form-data">

                      {{ csrf_field() }}

                      @method('PUT')

                      <div class="form-group row">
                        <label class="col-md-3 form-control-label">Product Name</label>
                        <div class="col-md-9">
                          <input type="text" name="name" value="{{ $res->name }}" class="form-control">
                        </div>
                      </div>
                      
                      <div class="line"></div>
                      <div class="form-group row">
                        <label class="col-md-3 form-control-label">Product Description</label>
                        <div class="col-md-9">
                          <input type="text" name="desc" value="{{ $res->desc }}" class="form-control"><small class="form-text text-muted ml-3">Write a short description about product.</small>
                        </div>
                      </div>
                      
                      

                      <div class="line"></div>
                      <div class="form-group row">
                        <label class="col-md-3 form-control-label">Price</label>
                        <div class="col-md-9">
                          <input type="text" name="price" value="{{ $res->price }}" class="form-control">
                        </div>
                      </div>
                      <div class="line"></div>
                      <div class="form-group row">
                        <label class="col-md-3 form-control-label">Chose Image</label>
                        <div class="col-md-9">
                          <input type="file" name="img" value="{{ old("img") }}" class="form-control">
                        </div>
                      </div>

                      
                      <div class="line"></div>
                      <div class="form-group row">
                        <div class="col-md-9 ml-auto">
                          <a href="{{ url("/show/slider") }}" class="btn btn-secondary">Cancel</a>
                          
                          <button type="submit" class="btn btn-primary ml-4">Save</button>

                        </div>
                      </div>
                    </form>

                    @endforeach
                  </div>
                </div>
              </div>
             
            </div>
          </section>
        </div>
@endsection




