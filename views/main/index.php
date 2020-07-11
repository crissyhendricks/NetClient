<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Client Portal</title>
  <!-- BOOTSTRAP -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
  <link rel="stylesheet" href="<?php echo constant('URL'); ?>public/css/style.css">
  <link rel="icon" type="image/png" href="<?php echo constant('URL'); ?>public/assets/earth.svg">
</head>

<body id="main">
  <?php require 'views/header.php'; ?>
  <main>
    <div class="container mt-5">
      <h2 id="table-head-options"><span class="bd-content-title">Listado de contratos<a class="anchorjs-link " aria-label="Anchor" data-anchorjs-icon="#" href="#table-head-options" style="padding-left: 0.375em;"></a></span></h2>
      <div class="row mt-3 mb-3">
        <div class="col-sm-3">
          <label for="clientName">Filtrar por Cliente</label>
          <select class="form-control" id="clientName">
            <option value="-1">Todos</option>
            <?php
            foreach ($this->clientFilter as $filter) {
            ?>
              <option value="<?php echo $filter; ?>"><?php echo $filter; ?></option>
            <?php
            }
            ?>
          </select>
        </div>
      </div>

      <div id='contractList'>
        <table class="table">
          <thead class="thead-dark">
            <tr>
              <th scope="col">#</th>
              <th>SAP id</th>
              <th>Cliente</th>
              <th>Descripción</th>
              <th>Fecha Inicio</th>
              <th>Fecha Fin</th>
            </tr>
          </thead>
          <tbody>
            <?php
            if (isset($this->contracts)) {
              foreach ($this->contracts as $key => $row) {
                $contract = new Contract();
                $contract = $row;

            ?>
                <tr>
                  <th scope="row"><?php echo $key; ?></th>
                  <td><?php echo $contract->contract_sap_id; ?></td>
                  <td><?php echo $contract->client_name; ?></td>
                  <td><?php echo $contract->contract_description; ?></td>
                  <td><?php echo $contract->contract_start_date; ?></td>
                  <td><?php echo $contract->contract_end_date; ?></td>
                </tr>
            <?php }
            } ?>
          </tbody>
        </table>
      </div>
      <button type="button" class="btn btn-secondary btn-sm m-1" id="previousPage" disabled>
        <</button> Pag.<span id="pageNumber">1</span>
          <?php if (isset($this->contracts) &&  count($this->contracts) < 10) { ?>
            <button type="button" class="btn btn-secondary btn-sm m-1" id="nextPage" disabled>>
            </button>
          <?php } else { ?>
            <button type="button" class="btn btn-secondary btn-sm m-1" id="nextPage">>
            </button>
          <?php } ?>
    </div>

  </main>


  <!-- JS, Popper.js, and jQuery -->
  <!-- <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script> -->
  <script src=" https://code.jquery.com/jquery-3.1.1.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
  <script src="<?php echo constant('URL'); ?>public/js/general.js"></script>

</body>

</html>