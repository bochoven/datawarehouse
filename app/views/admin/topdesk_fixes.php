<?$this->view('partials/head')?>

<div class="container">
      <div class="row">
          <h3 class="col-lg-12"><i class="icon-wrench"></i> Topdesk fixes <a href="<?=url('admin/dump_xls')?>" class="btn btn-default">Create export</a></h3>
      </div><!--/row-->


      <div class="row">

        <div class="col-md-12">

          <div class="table-responsive">

            <table class="table">
              <thead>
                <tr>
                  <th>Actie</th>
                  <th>Aantal objecten</th>
                  <th>Uitleg</th>
              </thead>
              <tbody>
                <tr class="orgeen_fix">
                  <td><a href="<?=url('admin/fix/orgeencode')?>" class="btn btn-default ajax">Fix Orgeencode</a></td>
                  <td class=""><span class="badge alert-info"></span></td>
                  <td>Voeg orgeencodes toe aan objecten die aan een vunet-id gekoppeld zijn.<br>
                    Alleen voor vunet-id's die maar onder 1 orgeencode vallen.<br>
            Afdelingsafkorting moet matchen met de afkorting in topdesk.</td>
                </tr>
                <tr class="fixed">
                  <td>                <a href="<?=url('admin/reset/fixed')?>" class="btn btn-default ajax">Leeg fixed tabel</a></td>
                  <td><span class="badge alert-info"></span></td>
                  <td>Maak de fixed tabel leeg.<br>
            Hiermee reset je alle topdesk fixes
            Dit gaat automatisch als een nieuwe topdesk tabel wordt geïmporteerd.</td>
                </tr>
              </tbody>  
            </table>

          </div>


        </div>  



      </div><!-- row -->
       

      <hr>

<?$this->view('partials/foot')?>

<script>
  // Make ajax buttons
  $(document).ready(function() {
    $('a.ajax').click(function(e){
      // store ref to button
      var me = this
      e.preventDefault();
      $.getJSON( this.href, function() {
        // JSON request sent
      })
        .done(function(data) {
          alert( data.info);
          reload_fixes()
        })
        .fail(function() {
          alert( "error" );
        })
        .always(function() {
          // Run always when done
        });
    });

    function reload_fixes()
    {
      // Loop over table
      $('tbody>tr').each(function(){
        var url = "<?=url('admin/get_count/')?>" + this.className
        var me = this
        var counter = $(this).find('.badge');
        $.getJSON( url, function() {
          // JSON request sent
        })
          .done(function(data) {
            if(data.count)
            {
              $(counter).html(data.count);
              $(me).show();
            }
            else
            {
              $(me).hide();
            }
          })
          .fail(function() {
            alert( "error" );
          })
          .always(function() {
            // Run always when done
          });
      })
    }

    reload_fixes()

  });

</script>

  </body>
</html>
