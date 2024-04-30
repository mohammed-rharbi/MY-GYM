<div class="container justify-content-center p-5 mr-5 mt-5 ">
    <div class="row">
        <form action="{{ route('search') }}" method="GET">
        <div class="col-md-8">
            <div class="input-group mb-3">
                <input type="text" class="form-control input-text" name="query" id="query" placeholder="Search ...."  aria-describedby="basic-addon2">
                <div class="input-group-append">
                    <button class="btn btn-outline-warning btn-lg" type="submit"><i class="fa fa-search"></i></button>
                </div>
            </div>    
        </div>  
       </form>      
    </div>
</div>


