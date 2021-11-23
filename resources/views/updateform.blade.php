@include('header')
<div class="container">
    <div class="row">
        <div class="col-2"></div>
        <div class="col-lg-8 col-sm-8 mt-5 mb-5 border border-dark rounded p-3 ">
            <div class="jumbotron jumbotron-fluid">
              <p class="h3 text-center text-white bg-primary border rounded p-2 m-2">{{$title}}</p>
               
              <form class="row g-3" action="{{$url}}" method="POST">
                @csrf
                
                <div class="col-md-6">
                  <label  class="form-label">First Name <span class="text-danger font-weight-bold">*</span></label>
                  <input type="text" class="form-control" id="inputEmail4 " name="fname" value="{{$register->fname}}">
                  <span class="text-danger">
                    @error('fname')
                        {{$message}}
                    @enderror
                  </span>
                </div>
                <div class="col-md-6">
                  <label  class="form-label">Last Name <span class="text-danger font-weight-bold">*</span></label>
                  <input type="text" class="form-control" name="lname"   value="{{$register->lname}}">
                  <span class="text-danger">
                    @error('lname')
                        {{$message}}
                    @enderror
                  </span>
                </div>
                <div class="col-md-4">
                  <label for="inputEmail4" class="form-label">Email <span class="text-danger font-weight-bold">*</span></label>
                  <input type="email" class="form-control" id="inputEmail4" name="email" value="{{$register->email}}">
                  <span class="text-danger">
                    @error('email')
                        {{$message}}
                    @enderror
                  </span>
                </div>
                <div class="col-md-4">
                  <label  class="form-label">DOB <span class="text-danger font-weight-bold">*</span></label>
                  <input type="date" class="form-control" name="dob" value="{{$register->dob}}">
                  <span class="text-danger">
                    @error('dob')
                        {{$message}}
                    @enderror
                  </span>
                </div>
                <div class="col-md-4">
                  <label class="form-label">Trade <span class="text-danger font-weight-bold">*</span></label>
                  <select  class="form-select"  name="trade"  >
{{-- 
                        @foreach($register as $category)
                        <option value="{{$category->id}}">{{$category->trade}}     </option>
                        @endforeach


                    <option selected>....Choose...</option> --}}
                    <option value="ELECTRONIC MECHANIC">ELECTRONIC MECHANIC</option>
                    <option value="ICTSM">ICTSM</option>
                    <option value="ELECTRICIAN">ELECTRICIAN</option>
                    <option value="MMV">MMV</option>
                    <option value="FITTER">FITTER</option>
                    <option value="WELDER">WELDER</option>
                  </select>
                  <span class="text-danger">
                    @error('trade')
                        {{$message}}
                    @enderror
                  </span>
                </div>
                <div class="col-12">
                  <label  class="form-label">Address <span class="text-danger font-weight-bold" >*</span></label>
                  <input type="text" class="form-control" id="inputAddress"  name="address"  value="{{$register->address}}" >
                  <span class="text-danger">
                    @error('address')
                        {{$message}}
                    @enderror
                  </span>
                </div>
                
                <div class="col-md-6 ">
                  <label for="inputCity" class="form-label">City <span class="text-danger font-weight-bold">*</span></label>
                  <input type="text" class="form-control" id="inputCity" name="city"  value="{{$register->city}}">
                  <span class="text-danger">
                    @error('city')
                        {{$message}}
                    @enderror
                  </span>
                </div>
                <div class="col-md-4 mt-4">
                  
                    <label for="state">State<span class="text-danger font-weight-bold">*</span></label>
                    <select id="state" name="state" class="form-control"  value="{{$register->state}}">
                        <option value="" selected >...Select State... </option>
                       
                            <option value="Rajasthan1"> Rajasthan1</option>
                            <option value="Rajasthan2"> Rajasthan2</option>
                            <option value="Rajasthan3">Rajasthan3 </option>
                            <option value="Rajasthan4">Rajasthan4 </option>
                       
                    </select>
                </div>
                <div class="col-md-2">
                  <label for="inputZip" class="form-label">Zip <span class="text-danger font-weight-bold" >*</span></label>
                  <input type="text" class="form-control" id="inputZip" name="zip"  value="{{$register->zip}}">
                  <span class="text-danger">
                    @error('zip')
                        {{$message}}
                    @enderror
                  </span>
                </div>
                
                <div class="col-12">
                  <button type="submit" class="btn btn-primary form-control">Submit</button>
                </div>
              </form>
               
              </div>
        </div>
        <div class="col-2"></div>
    </div>
</div>

@include('footer')