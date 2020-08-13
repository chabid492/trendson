@extends("website.layout.master")

@section("title","Show Slider")



@section("body")
      
     <div class="container-fluid px-xl-5">
          <section class="py-5">
            @if(session()->has('msgError'))
                    <div class="alert alert-danger">
                        {{ session()->get('msgError') }}
                    </div>
                @endif

                @if(session()->has('message'))
                    <div class="alert alert-success">
                        {{ session()->get('message') }}
                    </div>
                @endif
            <div class="row">
            
              <!-- Form Elements -->
              @foreach($result as $res)
                <div class="col-md-4 mb-2">
                  <div class="card card_width" style="max-height: 350px; overflow: hidden;">
                    <div class="flex justify-content-center text-center">
                    	<div style="height: 180px;">
                    		<img class="card-img-top" {{-- src="{{ URL::asset("assets/uploads/".$res->img) }}" --}} src="{{ URL::asset('storage/'.$res->img) }}" class="img-fluid" style="max-height: 180px; max-width: 180px">
                    	</div>
                    </div>
                    <div class="card-body">
                      <div class="flex flex-row justify-content-around mb-2">
                      	<span class="mr-3" style="font-size: 24px;color: #DAA520;">{{ $res->name }}</span>
                      	<span class="ml-3" >Price: <span style="color:green;">{{ $res->price }}</span></span>
                      </div>
                      
                      <div style="overflow: hidden;text-overflow: clip;white-space: nowrap;width: 100%;">
                        <p class="card-text text-gray">{{ $res->desc }}</p>
                      </div>

                      <div class="d-flex justify-content-between">
                        <a href="{{ url("/slider/$res->id/edit") }}" class="btn btn-primary btn-sm ">Edit</a>


                        <form action="{{ route('slider.destroy', $res->id) }}" method="POST">

                          @method('DELETE')
                          @csrf
                          <input type="submit" class="btn btn-danger btn-sm " name="" value="Delete">
                      </form>
                        
                      </div>
                    </div>
                  </div>
                </div>
              @endforeach
            </div>
          </section>
        </div>
@endsection
