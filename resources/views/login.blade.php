@include('header')
<div class="container">
    <div class="row">
        <div class="col-3"></div>
        <div class="col-lg-5 col-sm-12 mt-5 mb-5 border border-dark rounded p-3 ">
            <div class="jumbotron jumbotron-fluid">
               
                    <form >
                        <div class="form-group">
                          <label for="exampleInputEmail1">Email address</label>
                          <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                         
                        </div>
                        <div class="form-group mb-3">
                          <label for="exampleInputPassword1">Password</label>
                          <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                        </div>
                       
                        <button type="submit" class="btn btn-primary form-control ">Submit</button>
                      </form>
               
              </div>
        </div>
        <div class="col-3"></div>
    </div>
</div>

@include('footer')