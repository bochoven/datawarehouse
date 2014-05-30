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
                  <td><a href="<?=url('admin/fix/orgeencode')?>" class="btn btn-default ajax">Fix Orgeencode</a></td>
                  <td class=""><span class="badge alert-info"></span></td>
                  <td>Voeg orgeencodes toe aan objecten die aan een vunet-id gekoppeld zijn.<br>
                    Alleen voor vunet-id's die maar onder 1 orgeencode vallen.<br>
            Afdelingsafkorting moet matchen met de afkorting in topdesk.</td>
                </tr>

                <tr class="fco_fix" style="display: none">
                  <td><a href="<?=url('admin/fix/fco')?>" class="btn btn-default ajax">FCO correctie</a></td>
                  <td class=""><span class="badge alert-info"></span></td>
                  <td>Voeg orgeencodes en afkortingen toe aan objecten die <b>niet</b> aan een vunet-id gekoppeld zijn.<br>
                    Deze correctie maakt gebruik van de FCO tabel, objecten worden gematcht op lokatie.<br>
            De correctie neemt geen objecten mee die in de ruimte_correctie tabel voorkomen.</td>
                </tr>

                <tr class="macadres_fix" style="display: none">
                  <td><a href="<?=url('admin/fix/mac')?>" class="btn btn-default ajax">Fix Mac adres</a></td>
                  <td class=""><span class="badge alert-info"></span></td>
                  <td>Maak lowercase mac adressen uppercase.</td>
                </tr>                

                <tr class="ruimte_correctie" style="display: none">
                  <td><a href="<?=url('admin/fix/ruimte_correctie')?>" class="btn btn-default ajax">Ruimte correctie</a></td>
                  <td class=""><span class="badge alert-info"></span></td>
                  <td>Zoek hardware in de ruimtecorrectie tabel.</td>
                </tr>


                <tr class="walloutlet_location_fix" style="display: none">
                  <td>                <a href="<?=url('admin/fix/walloutlet_location')?>" class="btn btn-default ajax">Lokatie correctie</a></td>
                  <td><span class="badge alert-info"></span></td>
                  <td>Pas de lokatie aan op grond van de walloutlet.<br>
            Walloutlet wordt gedetecteerd in de NBD tabel. Via Outlet_room wordt de juiste lokatie bij de outlet gezocht.<br>
            Outlets met meer dan 1 lokatie worden niet meegenomen.</td>
                </tr>

                <tr class="prijs_fix" style="display: none">
                  <td>                <a href="<?=url('admin/fix/prijs')?>" class="btn btn-default ajax">Prijs correctie</a></td>
                  <td><span class="badge alert-info"></span></td>
                  <td>Pas de prijs aan op grond van de <a href="<?=url('/show/listing/prijs')?>">Prijzentabel</a>.</td>
                </tr>

                <tr class="walloutlet_fix" style="display: none">
                  <td>                <a href="<?=url('admin/fix/walloutlet')?>" class="btn btn-default ajax">Walloutlet correctie</a></td>
                  <td><span class="badge alert-info"></span></td>
                  <td>Pas de walloutlet aan op grond van het macadres in de <a href="<?=url('/show/listing/nbd')?>">Netwerk tabel</a>.<br>
                    Wordt alleen toegepast op macadressen die maar op 1 poort zijn gezien.
                  </td>
                </tr>

                <tr class="fixed" style="display: none">
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
