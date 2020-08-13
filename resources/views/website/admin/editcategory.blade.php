@extends("ecommerce.layout.master")

@section("title","Category")



@section("body")
    <div class="container-fluid px-xl-5">
          <section class="py-5">
            <div class="row">
              
              
              <!-- Horizontal Form-->
              <div class="offset-2 col-lg-6 mb-5 stl_card">
                <div class="card" style="width: 130%;">
                  <div class="card-header">
                    <h3 class="h6 text-uppercase mb-0">Category Form</h3>
                  </div>
                  <div class="card-body">
                    <p>Update your category that you want to display on user side.</p>

                    @if($errors->any())
                      <ul class="list-group">
                      @foreach($errors->all() as $error)

                          <li class="alert alert-danger fade show">
                            {{ $error }}
                          </li>
                        
                      @endforeach
                      </ul>
                    @endif

                    
                      
                    
                    @if(session()->has('msgError'))
                      <div class="alert alert-danger">
                          {{ session()->get('message') }}
                      </div>
                    @endif
                    
                    <form class="form-horizontal" action="/update/{{$result->id}}" method="post" enctype="multipart/form-data">
                      {{ csrf_field() }}
                      
                      <div class="form-group row">
                        <label class="col-md-3 form-control-label">Category</label>
                        <div class="col-md-8">
                          <input type="hidden"  name="id" value="{{ $result->id }}">
                          <input id="inputHorizontalSuccess" type="text" placeholder="Category Name" name="name" value="{{ $result->name }}" class="form-control form-control-success"><small class="form-text text-muted ml-3">Write category name.</small>
                          
                        </div>
                      </div>

                      <div class="form-group row">
                        <label class="col-md-3 form-control-label">Chose Image</label>
                        <div class="col-md-9">
                          <input type="file" name="img" value="{{ old("img") }}" class="form-control">
                        </div>
                      </div>
                      
                      <div class="form-group row">
                        <div class="col-md-9 ml-auto">
                          <a href="{{ url("admin") }}" class="btn btn-secondary">Cancel</a>
                          <button type="submit" class="btn btn-primary">Update</button>
                        </div>
                      </div>
                    </form>

                  </div>
                </div>
              </div>
             
            </div>
          </section>
        </div>
@endsection
