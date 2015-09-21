<?$this->view('partials/head')?>

<? new Fixed?>

<div class="container">
      <div class="row">
          <h3 class="col-lg-12"><i class="icon-wrench"></i> Topdesk correcties</h3>
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

                <tr class="orgeen_fix" style="display: none">
                  <td><a href="<?=url('admin/fix/orgeencode')?>" class="btn btn-default ajax">Orgeencode correctie</a></td>
                  <td class=""><span class="badge alert-info"></span></td>
                  <td>Corrigeert Kostenplaats en Faculteit/Dienst op grond van VUnetID (Objecten gekoppeld op naam). Bron(nen): <a href="<?=url('/show/listing/users')?>">Users</a>, <a href="<?=url('/show/listing/orgeen')?>">Orgeen</a></td>
                </tr>

                <tr class="fco_fix" style="display: none">
                  <td><a href="<?=url('admin/fix/fco')?>" class="btn btn-default ajax">FCO correctie</a></td>
                  <td class=""><span class="badge alert-info"></span></td>
                  <td>Corrigeert Kostenplaats en Faculteit/Dienst op grond van Kamer (Objecten gekoppeld op locatie). Bron(nen): <a href="<?=url('/show/listing/fco')?>">FCO</a>, <a href="<?=url('/show/listing/orgeen')?>">Orgeen</a>, <a href="<?=url('/show/listing/ruimte_correctie')?>">Ruimte correctie</a></td>
                </tr>

                <tr class="macadres_fix" style="display: none">
                  <td><a href="<?=url('admin/fix/mac')?>" class="btn btn-default ajax">Mac Adres correctie</a></td>
                  <td class=""><span class="badge alert-info"></span></td>
                  <td>Corrigeert Mac Adres(sen) met lower-case letters. Bron(nen): <a href="<?=url('/show/listing/topdesk')?>">Topdesk</a></td>
                </tr>                

                <tr class="ruimte_correctie" style="display: none">
                  <td><a href="<?=url('admin/fix/ruimte_correctie')?>" class="btn btn-default ajax">Ruimte correctie</a></td>
                  <td class=""><span class="badge alert-info"></span></td>
                  <td>Zet uitzonderingen (nav update FCO ruimtelijst) in ruimtecorrectietabel. Bron(nen): <a href="<?=url('/show/listing/ruimte_correctie')?>">Ruimte correctie</a></td>
                </tr>


                <tr class="walloutlet_location_fix" style="display: none">
                  <td>                <a href="<?=url('admin/fix/walloutlet_location')?>" class="btn btn-default ajax">Lokatie correctie</a></td>
                  <td><span class="badge alert-info"></span></td>
                  <td>Corrigeert Kamer op grond van wall outlet. Bron(nen): <a href="<?=url('/show/listing/nbd')?>">NBD</a>, <a href="<?=url('/show/listing/outlet_room')?>">Outlet_room</a></td>
                </tr>

                <tr class="prijs_fix" style="display: none">
                  <td>                <a href="<?=url('admin/fix/prijs')?>" class="btn btn-default ajax">Prijs correctie</a></td>
                  <td><span class="badge alert-info"></span></td>
                  <td>Corrigeert Abonnementsprijs. Bron(nen): <a href="<?=url('/show/listing/prijs')?>">Prijs</a></td>
                </tr>

                <tr class="walloutlet_fix" style="display: none">
                  <td>                <a href="<?=url('admin/fix/walloutlet')?>" class="btn btn-default ajax">Walloutlet correctie</a></td>
                  <td><span class="badge alert-info"></span></td>
                  <td>Corrigeert wall outlet op grond van mac adres. Bron(nen): <a href="<?=url('/show/listing/nbd')?>">NBD</a>
                  </td>
                </tr>
                
                <tr class="leegstand_fix" style="display: none">
                  <td>                <a href="<?=url('admin/fix/leegstand')?>" class="btn btn-default ajax">Leegstand correctie</a></td>
                  <td><span class="badge alert-info"></span></td>
                  <td>Corrigeert Hardware die in Ruimtes die in de FCO lijst op leegstand en verbouwing staan (LST*), zet deze op status onbekend: <a href="<?=url('/show/listing/fco')?>">FCO</a>
                  </td>
                </tr>


                <tr class="fixed" style="display: none">
                  <td>                <a href="<?=url('admin/reset/fixed')?>" class="btn btn-default ajax">Leeg fixed tabel</a></td>
                  <td><span class="badge alert-info"></span></td>
                  <td>Maak de fixed tabel leeg.<br>
            Hiermee reset je alle topdesk fixes
            Fixed tabel wordt ook gereset als een nieuwe topdesk tabel wordt geïmporteerd.</td>
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
        $(this).hide();
        $.getJSON( url, function() {
          // JSON request sent
        })
          .done(function(data) {
            if(data.count)
            {
              $(counter).html(data.count);
              $(me).show(500);
            }
            if(data.error)
            {
              alert(data.error)
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
