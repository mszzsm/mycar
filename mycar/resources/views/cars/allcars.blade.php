<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
   @include('layout.head')
<style>

.badge {
  position: absolute;
  z-index: 1;
  top: .9375rem;
  right: .9375rem;
  text-transform: uppercase;
}

.card {
    overflow: hidden;
    border-top-left-radius: 0.625rem;
    border-top-right-radius: 0.625rem;
    text-transform: uppercase;
}

.zoom {
  transition: transform 0.5s;
  z-index: 1;
}

.zoom:hover {
  transform: scale(1.1);
}

</style>
    <body>
   <h1> Here will be all <code>table name</code> </h1>

    <div class="row">
    @foreach ($cars as $car) 
        <div class="col-lg-3 col-md-4 col-sm-6">
            <div class="card bg-light border-secondary mb-1" style="width: 18rem;  margin-top: 5px; margin-bottom: 5px;">
                <span class="badge"> {{ $car -> year }} </span>
                <img class="card-img-top zoom">    

                <div class="card-body">
                        <h5 class="card-title" style="min-height: 10px;">{{ $car -> company_name }}</h5>
                        <p class="card-text"><b class="text-dark">{{ $car -> model_name }} {{ $car -> engine }} {{ $car -> fuel_type }}</b></p>
                <div class="row">

                <div class="col">
                    <a v-bind:href="post.link" class="btn btn-outline-secondary">więcej...</a>
                </div>

                <div class="col float-right">
                    <div class="float-right">
                        <svg aria-hidden="true" width="25" height="16" focusable="true" data-prefix="far" data-icon="eye" class="svg-inline--fa fa-eye fa-w-18" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512"><path fill="currentColor" d="M288 144a110.94 110.94 0 0 0-31.24 5 55.4 55.4 0 0 1 7.24 27 56 56 0 0 1-56 56 55.4 55.4 0 0 1-27-7.24A111.71 111.71 0 1 0 288 144zm284.52 97.4C518.29 135.59 410.93 64 288 64S57.68 135.64 3.48 241.41a32.35 32.35 0 0 0 0 29.19C57.71 376.41 165.07 448 288 448s230.32-71.64 284.52-177.41a32.35 32.35 0 0 0 0-29.19zM288 400c-98.65 0-189.09-55-237.93-144C98.91 167 189.34 112 288 112s189.09 55 237.93 144C477.1 345 386.66 400 288 400z"></path></svg>
                        <small class="float-right"> asd </small>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    @endforeach
    <div id="app">

    </div>
    
    <script src="{{asset('js/app.js')}}"></script>
 </div>
</body>
</html>
