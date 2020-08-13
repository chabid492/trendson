@extends("ecommerce.layout.master")

@section("title","Product")



@section("body")
     <div class="container-fluid px-xl-5">
          <section class="py-5">
            <div class="row">
         
              <!-- Form Elements -->
              <div class="col-lg-12 mb-5 stl_card">
                <div class="card card_width">
                  <div class="card-header">
                    <h3 class="h6 text-uppercase mb-0">Product Form</h3>
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

                    <form class="form-horizontal p-3" method="post" action="/insertPro" enctype="multipart/form-data">
                      {{ csrf_field() }}
                      <div class="form-group row">
                        <label class="col-md-3 form-control-label">Product Name</label>
                        <div class="col-md-9">
                          <input type="text" name="name" value="{{ old("name") }}" class="form-control">
                        </div>
                      </div>
                      <div class="line"></div>
                      <div class="form-group row">
                        <label class="col-md-3 form-control-label">Model No.</label>
                        <div class="col-md-9">
                          <input type="text" name="model" value="{{ old("model") }}" class="form-control">
                        </div>
                      </div>
                      <div class="line"></div>
                      <div class="form-group row">
                        <label class="col-md-3 form-control-label">Product Description</label>
                        <div class="col-md-9">
                          <input type="text" name="desc" value="{{ old("desc") }}" class="form-control"><small class="form-text text-muted ml-3">Write a short description about product.</small>
                        </div>
                      </div>
                      
                      <div class="line"></div>
                      <div class="form-group row">
                        <label class="col-md-3 form-control-label">Select Category</label>
                        <div class="col-md-9 select mb-3">
                          <select name="category[]" id="category" class="form-control">
                              <option value="" disabled selected>--Select Category--</option>
                              @foreach($records as $rec)
                                <option value="{{ $rec->id }}">{{ $rec->name }}</option>
                              @endforeach

                          </select>

                        </div>
                        
                      </div>

                      <div class="line"></div>
                      <div class="form-group row">
                        <label class="col-md-3 form-control-label">Select SubCategory</label>
                        <div class="col-md-9 select mb-3">
                          <select name="subcategory[]" class="form-control" id="subcategory">
                              <option value="" disabled selected>--Select SubCategory--</option>

                          </select>

                        </div>
                        
                      </div>

                      <div class="line"></div>
                      <div class="form-group row">
                        <label class="col-md-3 form-control-label">Price</label>
                        <div class="col-md-9">
                          <input type="text" name="price" value="{{ old("price") }}" class="form-control">
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
                          <a href="{{ url("admin") }}" class="btn btn-secondary">Cancel</a>
                          
                          <button type="submit" class="btn btn-primary">Save</button>

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

@section('productScript')

  <script>
  $(document).ready(function() {
    $('#category').change(function(){

        $.ajaxSetup({ headers: { 'csrftoken' : '{{ csrf_token() }}' } });

        var id =$(this).val();

        $.ajax({
          type : 'get',
          url : '{{URL::to('search')}}',
          data:{id},
          datatype: 'json',
          success:function(data){
            
              $('#subcategory').empty();
                $.each(data, function(create,subcatObj){
  
                    $('#subcategory').append('<option value ="'+subcatObj.id+'">'+subcatObj.name+'</option>');
                });

            }
          });
 

    });
  });  
 
</script>

@endsection