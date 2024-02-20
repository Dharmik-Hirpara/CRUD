<!-- <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css"> -->
<!-- <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script> -->
<!-- <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script> -->
<!------ Include the above in your HEAD tag ---------->

<!-- <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.8/css/all.css"> -->
<?php 
require_once('header.php');
?>

<style>
    header {
        padding-top: 50px; /* Adjust the value as needed */
        padding-bottom: 50px; /* Adjust the value as needed */
    }
</style>

    <div class="card bg-light">
        <article class="card-body mx-auto" style="max-width: 400px;">
        <h4 class="card-title mt-3 text-center">Create new Student Account</h4>
        
        
        <p class="divider-text">
            <span class="bg-light"></span>
        </p>
        <form>
        <div class="form-group input-group">
                <div class="input-group-prepend">
                    <span class="input-group-text"> <i class="fa fa-user"></i> </span>
                </div>
                <input name="" class="form-control" placeholder="Full name" type="text">
        </div> <!-- form-group// -->
    
    <div class="form-group input-group">
            <div class="input-group-prepend">
                <span class="input-group-text"> <i class="fa fa-envelope"></i> </span>
            </div>
            <input name="" class="form-control" placeholder="Email address" type="email">
        </div> <!-- form-group// -->
        <div class="form-group input-group">
            <div class="input-group-prepend">
                    <span class="input-group-text"> <i class="fa fa-phone"></i> </span>
            </div>
        </select>
            <input name="" class="form-control" placeholder="Phone number" type="text">
    </div> <!-- form-group// -->
        <div class="form-group input-group">
        <div class="input-group-prepend">
            <span class="input-group-text"> <i class="fa fa-gamepad"></i> </span>
        </div>

    <div class="form-control">
            <label>Hobbies:</label><br>
            <input type="checkbox" name="hobby[]" value="Cricket">Cricket<br>
            <input type="checkbox" name="hobby[]" value="Football"> Football<br>
            <input type="checkbox" name="hobby[]" value="Kabaddi">  Kabaddi<br>
        </div>
    </div>


    <div class="form-group input-group">
        <div class="input-group-prepend">
            <span class="input-group-text"> <i class="fa fa-venus-mars"></i> </span>
        </div>
            <select class="form-control" name="gender_ratio">
                <option selected="">Select Gender Ratio</option>
                <option value="male">Male</option>
                <option value="female">Female</option>
                <!-- Add more options as needed -->
            </select>
    </div>


    <div class="form-group input-group">
        <div class="input-group-prepend">
            <span class="input-group-text"> <i class="fa fa-calendar"></i> </span>
        </div>
        <input type="date" class="form-control" name="dob">
    </div>

    <div class="form-group input-group">
        <div class="input-group-prepend">
            <span class="input-group-text"> <i class="fa fa-home"></i> </span>
        </div>
        <textarea class="form-control" name="address" placeholder="Enter address"></textarea>
    </div>

    <div class="form-group input-group">
        <div class="input-group-prepend">
            <span class="input-group-text"> <i class ="fa fa-building"></i> </span>
        </div>
        <select class="form-control" name="city">
            <option selected="">Select City</option>
            <option value="surat">Surat</option>
            <option value="amravati">Amravati</option>
            <option value="pune">Pune</option>
            <option value="nagour">Nagpur</option>
        </select>
    </div>

    <div class="form-group input-group">
        <div class="input-group-prepend">
            <span class="input-group-text"> <i class="fa fa-upload"></i> </span>
        </div>
        <input type="file" class="form-control" name="passport_image" accept="image/*">
    </div>


    <div class="form-group input-group">
    	<div class="input-group-prepend">
		    <span class="input-group-text"> <i class="fa fa-lock"></i> </span>
		</div>
        <input class="form-control" placeholder="Create password" type="password">
    </div> <!-- form-group// -->
    <div class="form-group input-group">
    	<div class="input-group-prepend">
		    <span class="input-group-text"> <i class="fa fa-lock"></i> </span>
		</div>
        <input class="form-control" placeholder="Repeat password" type="password">
    </div>   
    <div class="row">
        <div class="col-md-6">
            <div class="form-group">
                <button type="submit" class="btn btn-primary btn-block"> Create Account</button>
            </div>
        </div>

        <div class="col-md-6">
            <div class="form-group">
                <a href="index.php" class="btn btn-secondary btn-block"> Create Back</a>
            </div>
        </div>
    </div>

    <p class="text-center">Have an account? <a href="">Log In</a> </p>                                                                 
</form>
</article>
</div> 
</div> 

<?php 
require_once('footer.php');
?>