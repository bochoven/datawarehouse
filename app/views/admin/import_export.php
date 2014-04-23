<?$this->view('partials/head')?>

<div class="container">
      <div class="row">
          <h2 class="col-lg-12"><i class="icon-wrench"></i> Administration</h2>
      </div><!--/row-->


      <div class="row">

       
        <div class="col-md-4">

          <form id="uploadForm" class="well" action="<?=url('admin/submit')?>" enctype="multipart/form-data"  method="post" accept-charset="utf-8">

            <p><b>Upload csv file</b></p>
            <p><input type="file" name="file"></p>

            <p class="uploadbutton hide"><button class="btn btn-primary" type="submit"><i class="icon-upload-alt"></i> Upload</button></p>

          </form>


        </div>  

        <div class="col-md-4">

          <p class="well">

            <a href="<?=url('admin/get_users')?>" class="btn btn-primary" >Get LDAP Users</a>

          </p>


        </div>  


      </div>
       

      <hr>

<?$this->view('partials/foot')?>

<script>
  $(function(){

    $('input[name=file]').change(function(e){
      $('p.uploadbutton').removeClass('hide');
    })

    $('form#uploadForm').submit(function(e)
    {
      $('button[type=submit]').addClass('btn-success').text('Uploading...');
    })

  });
</script> 

  </body>
</html>
