<?php
  require('script.php');
?>
<html>
  <head>
    <title>Encrypt/Decrypt File</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/style.css">
  </head>
  <body>
    <div class="container">
      <div class="row">
        <div class="col-12">
          <div class="title">DESIGN & IMPLEMENTATION OF QUANTUM CRYPTOGRAPHY BASED MEDICAL INFORMATION SECURITY SYSTEM</div>
        </div>

        <div class="col-sm-6 text-center">
          <img src="images/logo.png" alt="">

          <div class="col-12">
            <div class="text-left text-muted small">
              <hr/>
              <b>Project Student:</b> ADELAJA GABRIEL OLUWAKAYODE<br/>
              <b>Registration Number:</b> S219202014<br/>
              <b>Project Supervisor:</b> Mr Lasisi, I. O.
              <hr/>
              <div class="text-center">Submitted to the Department of Computer Science, College of Information and Communication Technology, Crescent University, Abeokuta.<br/><br/></div>
            </div>
          </div>
        </div>

        <div class="col-sm-6" style="border-left: 1px solid #999;">
          <div class="row">
              <div class="col-12">
                <div class="title2">Encryption / Decryption</div>
              </div>
          </div>

          <?php if ($error != '') { ?>
            <div class="row">
              <div class="col-12">
                <div class="col-12 alert alert-danger" role="alert">
                  <?php echo ($error); ?>
                </div>
              </div>
            </div>
          <?php } ?>

          <div class="row">
              <div class="col-12">
                <div class="col-12">
                  <form class="form" enctype="multipart/form-data" method="post" id="form1" name="form1" auto-complete="off">
                    <fieldset>
                      <legend>File</legend> 
                      <input type="file" name="file" id="file" placeholder="Choose a file" required class="form-control"/>
                    </fieldset>

                    <fieldset>
                      <legend>Security Action</legend> 
                      <div class="row">
                        <div class="col-sm-6">
                          <div class="form-group">
                            <label for="password">Password</label>
                            <input type="password" name="password" id="password" placeholder="Insert password" required class="form-control" />
                          </div>
                        </div>
                        <div class="col-sm-6">
                          <div class="form-group">
                            <label for="action">Action</label>
                            <select name="action" id="action" required class="form-control">
                              <option value="">-- Choose --</option>
                              <option value="c">Encrypt</option>
                              <option value="d">Decrypt</option>
                            </select>
                          </div>
                        </div>
                      </div>
                    </fieldset>

                    <div class="row">
                      <div class="col-8">
                        <button type="submit" class="btn btn-success btn-block" onclick="setTimeout('document.form1.reset();',1000)">Execute</button>
                      </div>
                      <div class="col-4">
                        <button type="reset" class="btn btn-reset btn-danger">Reset</button>
                      <div>
                    </div>
                  </form>
                </div>
              </div>
          </div>
        </div>
      </div>
    </div>
    <script type="text/javascript" src="js/jquery.js"></script>
    <script type="text/javascript" src="js/bootstrap.js"></script>
  </body>
</html>