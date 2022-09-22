<?php echo " " ?>
<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="stylesheet" href="css/style.css">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css"
    integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

  <title> </title>
 
<script src="https://cdnjs.cloudflare.com/ajax/libs/html2pdf.js/0.10.1/html2pdf.bundle.min.js" integrity="sha512-GsLlZN/3F2ErC5ifS5QtgpiJtWd43JWSuIgh7mbzZ8zBps+dvLusV+eNQATqgA/HdeKFVgA5v3S/cIrLF7QnIg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

</head>

<body>
  <button id="button" class="btn btn-primary btn-block" onclick="downloadPDF()">Download PDF</button>


<!-- <div class="col-xl-3 float-end">
  <a class="btn btn-light text-capitalize border-0" data-mdb-ripple-color="dark"><i
        class="fas fa-print text-primary"></i> Print</a>
  <a href="javascript:generatePDF()" id="downloadButton" class="btn btn-light text-capitalize"
    data-mdb-ripple-color="dark"><i class="far fa-file-pdf text-danger"></i> Click to Download</a>
</div> -->


  <div id="whatToPrint" class="A4">
    <div class="card">
      <div class="card-body">
        <div class="container mb-5 mt-3">
          <div class="row d-flex align-items-baseline">
            
            
            <hr>
          </div>

          <div class="container">
            <div class="col-md-12">
              <div class="text-center">
                <i class="fab fa-mdb fa-4x ms-0" style="color:#5d9fc5 ;"></i>
                <img src="header.PNG" class="img-fluid" alt="Responsive image">
                <p class="pt-0 font-weight-bold h3">BILL</p>
              </div>

            </div>


            <div class="row">
              <div class="col-xl-8">
                <ul class="list-unstyled">

                  <li class="font-weight-bold">To: <span style="color:#5d9fc5 ;">
                      <p>
                        <u> sir syed public school</u>
                      </p>
                    </span></li>
                  <li class="font-weight-bold">P.O No :<span style="color:#5d9fc5 ;">
                      <p><u>2359/A/Q-93(C) 117</u>
                      </p>
                    </span></li>
                  <li class="font-weight-bold">Address :<span style="color:#5d9fc5 ;">
                      <p><u>Railway scheme 4, Rawalpindi</u>
                      </p>
                    </span></li>
                </ul>
              </div>
              <div class="col-xl-4 d-flex">
                <ul class="list-unstyled ml-auto">
                  <li class=""><i class="fas fa-circle" style="color:#84B0CA ;"></i> <span class="fw-bold">DOS/B
                    </span>#123-456
                  </li>
                  <li class=""><i class="fas fa-circle" style="color:#84B0CA ;"></i> <span class="fw-bold">Vendor
                      #</span>
                    30140453</li>
                  <li class=""><i class="fas fa-circle" style="color:#84B0CA ;"></i> <span class="fw-bold">NTN #</span>
                    4121191-0</li>
                  <li class=""><i class="fas fa-circle" style="color:#84B0CA ;"></i> <span class="fw-bold">GST #</span>
                    23-00-4121-191-11</li>
                  <li class=""><i class="fas fa-circle" style="color:#84B0CA ;"></i> <span class="fw-bold">A/C No
                      #</span>
                    12057900399303 HBL </li>
                  <li class=""><i class="fas fa-circle" style="color:#84B0CA ;"></i> <span class="fw-bold">Date:
                    </span>Jun 23,2021</li>

                </ul>
              </div>
            </div>

            <div class="row my-2 mx-1 justify-content-center">
              <table class="table table-striped table-borderless">
                <thead style="background-color:#84B0CA ;" class="text-white">
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">Description</th>
                    <th scope="col">Qty</th>
                    <th scope="col">Unit Price</th>
                    <th scope="col">Amount</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <th scope="row">1</th>
                    <td>Pro Package</td>
                    <td>4</td>
                    <td>Rs 200</td>
                    <td>Rs 800</td>
                  </tr>
                  <tr>
                    <th scope="row">2</th>
                    <td>Web hosting</td>
                    <td>1</td>
                    <td>Rs 10</td>
                    <td>Rs 10</td>
                  </tr>
                  <tr>
                    <th scope="row">3</th>
                    <td>Consulting</td>
                    <td>1 year</td>
                    <td>Rs 300</td>
                    <td>Rs 300</td>
                  </tr>
                  <tr>
                    <th scope="row">4</th>
                    <td>Web hosting</td>
                    <td>1</td>
                    <td>Rs 10</td>
                    <td>Rs 10</td>
                  </tr>
                  <tr>
                    <th scope="row">5</th>
                    <td>Consulting</td>
                    <td>1 year</td>
                    <td>Rs 300</td>
                    <td>Rs 300</td>
                  </tr>
                  <tr>
                    <th scope="row">6</th>
                    <td>Web hosting</td>
                    <td>1</td>
                    <td>Rs 10</td>
                    <td>Rs 10</td>
                  </tr>
                  <tr>
                    <th scope="row">7</th>
                    <td>Consulting</td>
                    <td>1 year</td>
                    <td>Rs 300</td>
                    <td>Rs 300</td>
                  </tr>
                  <!-- <tr>
                      <th scope="row">8</th>
                      <td>Web hosting</td>
                      <td>1</td>
                      <td>Rs 10</td>
                      <td>Rs 10</td>
                    </tr>
                    <tr>
                      <th scope="row">9</th>
                      <td>Consulting</td>
                      <td>1 year</td>
                      <td>Rs 300</td>
                      <td>Rs 300</td>
                    </tr>
                    <tr>
                      <th scope="row">10</th>
                      <td>Web hosting</td>
                      <td>1</td>
                      <td>Rs 10</td>
                      <td>Rs 10</td>
                    </tr>
                    <tr>
                      <th scope="row">11</th>
                      <td>Consulting</td>
                      <td>1 year</td>
                      <td>Rs 300</td>
                      <td>Rs 300</td>
                    </tr>
                    <tr>
                      <th scope="row">12</th>
                      <td>Web hosting</td>
                      <td>1</td>
                      <td>Rs 10</td>
                      <td>Rs 10</td>
                    </tr>
                    <tr>
                      <th scope="row">13</th>
                      <td>Consulting</td>
                      <td>1 year</td>
                      <td>Rs 300</td>
                      <td>Rs 300</td>
                    </tr>
                    <tr>
                      <th scope="row">14</th>
                      <td>Web hosting</td>
                      <td>1</td>
                      <td>Rs 10</td>
                      <td>Rs 10</td>
                    </tr>
                    <tr>
                      <th scope="row">15</th>
                      <td>Consulting</td>
                      <td>1 year</td>
                      <td>Rs 300</td>
                      <td>Rs 300</td>
                    </tr><tr>
                      <th scope="row">11</th>
                      <td>Consulting</td>
                      <td>1 year</td>
                      <td>Rs 300</td>
                      <td>Rs 300</td>
                    </tr>
                    <tr>
                      <th scope="row">12</th>
                      <td>Web hosting</td>
                      <td>1</td>
                      <td>Rs 10</td>
                      <td>Rs 10</td>
                    </tr>
                    <tr>
                      <th scope="row">13</th>
                      <td>Consulting</td>
                      <td>1 year</td>
                      <td>Rs 300</td>
                      <td>Rs 300</td>
                    </tr>
                    <tr>
                      <th scope="row">14</th>
                      <td>Web hosting</td>
                      <td>1</td>
                      <td>Rs 10</td>
                      <td>Rs 10</td>
                    </tr>
                    <tr>
                      <th scope="row">15</th>
                      <td>Consulting</td>
                      <td>1 year</td>
                      <td>Rs 300</td>
                      <td>Rs 300</td>
                    </tr> -->

                </tbody>

              </table>
            </div>
            <div class="row">
              <div class="col-xl-8">
                <p class="ms-3 font-weight-bold">Rupees in Words:</p>
                <p>
                  <u> One lac Seventy Four thousand only.One lac Seventy Four thousand only.</u>
                </p>
                <p class="ms-3 font-weight-bold">Received By: </p>
                <p>_____________________________________________________________________________</p>

              </div>
              <div class="col-xl-3">
                <ul class="list-unstyled">
                  <li class="text-muted ms-3"><span class="text-black me-4">SubTotal</span>Rs 1110</li>
                  <li class="text-muted ms-3 mt-2"><span class="text-black me-4">Tax(17%) </span> Rs 111</li>
                </ul>
                <p class="text-black float-start"><span class="text-black me-3"> Total Amount </span><span
                    style="font-size: 25px;"> Rs 1221</span></p>
              </div>
            </div>
            <hr>

            <div class=" d-flex">
              <div class=" ml-auto ">
                <p>For Digital Office Solution</p>

              </div>
            </div>


          </div>
        </div>
      </div>
    </div>
    <div class="container">
      <div class="col-md-12">
        <div class="text-center">
          <i class="fab fa-mdb fa-4x ms-0" style="color:#5d9fc5 ;"></i>
          <img src="footer.jpeg" class="img-fluid" alt="Responsive image">

        </div>

      </div>
    </div>
  </div>






  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
    integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
    crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js"
    integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
    crossorigin="anonymous"></script>
  

 
</body>

<script>
  function downloadPDF(){
    document.getElementById('button').style.visibility = 'hidden';
    window.print();
  }

</script>

</html>