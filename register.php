<?php


if(isset($_POST["register"]))
{
 
 $username = trim($_POST["username"]);
 $password = trim($_POST["password"]);
 $nama=trim($_POST['nama']);
 $hak=trim($_POST['hak']);

 $check_query = "
 SELECT * FROM login 
 WHERE username = :username
 ";
 $statement = $connect->prepare($check_query);
 $check_data = array(
  ':username'  => $username
 );
 if($statement->execute($check_data)) 
 {
  if($statement->rowCount() > 0)
  {
   $message .= '<p><label>Username already taken</label></p>';
  }
  else
  {
   if(empty($username))
   {
    $message .= '<p><label>Username is required</label></p>';
   }
   if(empty($password))
   {
    $message .= '<p><label>Password is required</label></p>';
   }
   }

    $data = array(
      ':nama'  => $nama,
      ':hak'  => $hak,
     ':username'  => $username,
     ':password'  => password_hash($password, PASSWORD_DEFAULT)
    );

    $query = "
    INSERT INTO login 
    (user_id,username, password,nama,hak) 
    VALUES (null,:username, :password,:nama,:hak)
    ";
    $statement = $connect->prepare($query);
    if($statement->execute($data))
    {
     $message = "<label>Registration Completed</label>";
    }

  }
 }


?>
 <!-- page content -->
        <div class="right_col" role="main">
          <div class="">
           <div class="clearfix"></div>
            <div class="row">

            <div class="col-md-8 ">
              <div class="x_panel">
                <div class="x_title">
                  <h2>Register User WEB<small>DC Purwakarta</small></h2>
                  <ul class="nav navbar-right panel_toolbox">
                    <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                    </li>
                    <li><a class="close-link"><i class="fa fa-close"></i></a>
                    </li>
                  </ul>
                  <div class="clearfix"></div>
                </div>
                <div class="x_content">
                  <br />

                 <form method="post">
                     <div class="form-group row">
                      <label class="control-label col-md-3 col-sm-3 ">USERNAME </label>
                      <div class="col-md-9 col-sm-9 ">
                        <input type="text" class="form-control" name="username" required placeholder="Masukan Username">
                      </div>
                    </div>
                    <div class="form-group row">
                      <label class="control-label col-md-3 col-sm-3 ">PASSWORD</label>
                      <div class="col-md-9 col-sm-9 ">
                        <input type="password" class="form-control" name="password" required placeholder="Masukan Password">
                      </div>
                    </div>
                    <div class="form-group row">
                      <label class="control-label col-md-3 col-sm-3 ">NAMA LENGKAP <span class="required">*</span>
                      </label>
                      <div class="col-md-9 col-sm-9 ">
                        <input type="text" class="form-control"  name="nama" required placeholder="Masukan Nama Lengkap">
                      </div>
                    </div>
                    <div class="form-group row">
                      <label class="control-label col-md-3 col-sm-3 ">HAK AKSES</label>
                      <div class="col-md-9 col-sm-9 ">
                        <select class="form-control" name="hak"  required>
                          <option value="ADMIN">ADMIN</option>
                          <option value="ADM">ADM</option>
                          <option value="SUPPORT">SUPPORT</option>
                          <option value="DC">DC</option>
                        </select>
                      </div>
                    </div>

                    <div class="ln_solid"></div>
                    <div class="form-group">
                      <div class="col-md-9 col-sm-9  offset-md-3">
                      <input type="submit" name="register" class="btn btn-info" value="Register" />
                      </div>
                    </div>
                  </div>
                  </form>

                </div>
              </div>
            </div>



            </div>
          </div>
        </div>
