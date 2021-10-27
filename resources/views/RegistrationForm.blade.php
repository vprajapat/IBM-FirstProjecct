@include('header')
<div class="container">
    <div class="row">
        <div class="col-2"></div>
        <div class="col-lg-8 col-sm-8 mt-5 mb-5 border border-dark rounded p-3 ">
            <div class="jumbotron jumbotron-fluid">
              <p class="h3 text-center text-white bg-primary border rounded p-2 m-2">Student Registration Form</p>
               
              <form class="row g-3" action="{{url('/RegistrationForm')}}" method="POST">
                @csrf
                <div class="col-md-6">
                  <label  class="form-label">First Name</label>
                  <input type="text" class="form-control" id="inputEmail4 " name="fname">
                </div>
                <div class="col-md-6">
                  <label  class="form-label">Last Name</label>
                  <input type="text" class="form-control" name="lname" >
                </div>
                <div class="col-md-4">
                  <label for="inputEmail4" class="form-label">Email</label>
                  <input type="email" class="form-control" id="inputEmail4">
                </div>
                <div class="col-md-4">
                  <label  class="form-label">DOB</label>
                  <input type="date" class="form-control" name="dob">
                </div>
                <div class="col-md-4">
                  <label class="form-label">Trade</label>
                  <select  class="form-select"  name="trade">
                    <option selected>Choose...</option>
                    <option value="ELECTRONIC MECHANIC">ELECTRONIC MECHANIC</option>
                    <option value="ICTSM">ICTSM</option>
                    <option value="ELECTRICIAN">ELECTRICIAN</option>
                    <option value="MMV">MMV</option>
                    <option value="FITTER">FITTER</option>
                    <option value="WELDER">WELDER</option>
                  </select>
                </div>
                <div class="col-12">
                  <label  class="form-label">Address</label>
                  <input type="text" class="form-control" id="inputAddress" placeholder="1234 Main St" name="address">
                </div>
                
                <div class="col-md-6">
                  <label for="inputCity" class="form-label">City</label>
                  <input type="text" class="form-control" id="inputCity">
                </div>
                <div class="col-md-4">
                  <label for="inputState" class="form-label">State</label>
                  <select name="state" id="state" class="form-control">
                    <option value="" selected>Choose....</option>
                    <option value="Andhra Pradesh">Andhra Pradesh</option>
                    <option value="Andaman and Nicobar Islands">Andaman and Nicobar Islands</option>
                    <option value="Arunachal Pradesh">Arunachal Pradesh</option>
                    <option value="Assam">Assam</option>
                    <option value="Bihar">Bihar</option>
                    <option value="Chandigarh">Chandigarh</option>
                    <option value="Chhattisgarh">Chhattisgarh</option>
                    <option value="Dadar and Nagar Haveli">Dadar and Nagar Haveli</option>
                    <option value="Daman and Diu">Daman and Diu</option>
                    <option value="Delhi">Delhi</option>
                    <option value="Lakshadweep">Lakshadweep</option>
                    <option value="Puducherry">Puducherry</option>
                    <option value="Goa">Goa</option>
                    <option value="Gujarat">Gujarat</option>
                    <option value="Haryana">Haryana</option>
                    <option value="Himachal Pradesh">Himachal Pradesh</option>
                    <option value="Jammu and Kashmir">Jammu and Kashmir</option>
                    <option value="Jharkhand">Jharkhand</option>
                    <option value="Karnataka">Karnataka</option>
                    <option value="Kerala">Kerala</option>
                    <option value="Madhya Pradesh">Madhya Pradesh</option>
                    <option value="Maharashtra">Maharashtra</option>
                    <option value="Manipur">Manipur</option>
                    <option value="Meghalaya">Meghalaya</option>
                    <option value="Mizoram">Mizoram</option>
                    <option value="Nagaland">Nagaland</option>
                    <option value="Odisha">Odisha</option>
                    <option value="Punjab">Punjab</option>
                    <option value="Rajasthan">Rajasthan</option>
                    <option value="Sikkim">Sikkim</option>
                    <option value="Tamil Nadu">Tamil Nadu</option>
                    <option value="Telangana">Telangana</option>
                    <option value="Tripura">Tripura</option>
                    <option value="Uttar Pradesh">Uttar Pradesh</option>
                    <option value="Uttarakhand">Uttarakhand</option>
                    <option value="West Bengal">West Bengal</option>
                    </select>
                </div>
                <div class="col-md-2">
                  <label for="inputZip" class="form-label">Zip</label>
                  <input type="text" class="form-control" id="inputZip">
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