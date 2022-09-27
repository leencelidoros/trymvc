
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
     rel="stylesheet" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" 
    crossorigin="anonymous">
  </head>
  <body>
    <h3 class="text-center text-white pt-5">Create Page</h3>
    <div class="container">
        <div id="login-row" class="row justify-content-center align-items-center">
            <div id="login-column" class="col-md-6">
                <div id="login-box" class="col-md-12">
                    <form action=""id="login-form"method="post" class="form">
                        <h3 class="txt-center text-info">Create Page</h3>

                        <div class="form-group">
                            <label for="countrycode" class="text-info"> Country Code<input type="text" name="countrycode"  id="ucountrycode"class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="district" class="text-info">District</label>
                            <input type="text" name="district"  id="district"class="form-control">
                        </div>

                        <div class="form-group">
                            <label for="id" class="text-info">ID</label>
                            <input type="text" name="id"  id="id"class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="name" class="text-info">Name</label>
                            <input type="text" name="name"  id="name"class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="population" class="text-info">Population</label>
                            <input type="text" name="population"  id="population"class="form-control">
                        </div>


                        <div class="form-group">
                            <input type="submit" name="CreateSubmit" class="btn btn-info btn-md" value="submit">
                        </div>

                        
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>
<?php include('status.php') ?>
<?php include('footer.php') ?>