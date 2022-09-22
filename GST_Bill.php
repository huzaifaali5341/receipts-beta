<?php include 'resources/header.php'; ?>

<body>
  <button id="button" class="btn btn-primary btn-block" onclick="downloadPDF()">Download PDF</button>

  <!-- <div class="col-xl-3 float-end">
    <a href="javascript:downloadPDF()" id="downloadButton" class="btn btn-light text-capitalize"
      data-mdb-ripple-color="dark"><i class="far fa-file-pdf text-danger"></i> Click to Download</a>
  </div> -->
  <div id="whatToPrint" class="A4">
    <div class="card">
      <div class="card-body">
        <div class="container mb-5 mt-3">
          <div class="row d-flex align-items-baseline">
            <div class="col-xl-9">
              <!-- <p style="color: #7e8d9f;font-size: 20px;">Invoice >> <strong>DOS/B  #123-123</strong></p> -->
            </div>
            <hr>
          </div>
          <div class="container">
            <?php include 'resources/components/top.php'; ?>
            <?php include 'resources/components/middle.php'; ?>
            <?php include 'resources/components/end.php'; ?>

          </div>
        </div>
      </div>
    </div>


    <?php include 'resources/components/end_footer.php'; ?>
  </div>

  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script> -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/html2pdf.js/0.10.1/html2pdf.bundle.min.js" integrity="sha512-GsLlZN/3F2ErC5ifS5QtgpiJtWd43JWSuIgh7mbzZ8zBps+dvLusV+eNQATqgA/HdeKFVgA5v3S/cIrLF7QnIg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
</body>
<?php include 'resources/footer.php'; ?>