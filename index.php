<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--fafa-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- Bootstrap -->
    


    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    



    <!-- Local Styles -->
    <link rel="stylesheet" href="Styles/css1.css">

    <title>CSE-Conference</title>

    
</head>
<body>
    
    <!-- HeadNavBarBootstrap -->
    <?php $IPATH = $_SERVER["DOCUMENT_ROOT"]."/cseconference/Assets/"; include($IPATH."headnavbar.php"); ?>
  
    <!-- Toogle Right Canvas  -->
    <button class="btn btn-danger bttn-custom" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight" aria-controls="offcanvasRight">Important Dates</button>
    <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasRight" aria-labelledby="offcanvasRightLabel">
      <div class="offcanvas-header">
        <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
      </div>
      <div class="offcanvas-body">
        <div class="container">
          <h5 class="bg_green txt_w">Important Dates</h5>
          <style type="text/css">
            .tg_tab1  {border-collapse:collapse;border-spacing:0;}
            .tg_tab1 td{border-color:black;border-style:solid;border-width:1px;font-family:Arial, sans-serif;font-size:14px;
              overflow:hidden;padding:10px 5px;word-break:normal;}
            .tg_tab1 th{border-color:black;border-style:solid;border-width:1px;font-family:Arial, sans-serif;font-size:14px;
              font-weight:normal;overflow:hidden;padding:10px 5px;word-break:normal;}
            .tg_tab1 .tg-wppm{background-color:#faedb7;border-color:inherit;text-align:left;vertical-align:bottom}
            .tg_tab1 .tg-pii6{background-color:#ff9600;border-color:inherit;text-align:left;vertical-align:middle}
            </style>
            <table class="tg_tab1">
            <thead>
              <tr>
                <th class="tg-wppm">   <br>Submission   deadline for Full-Text Paper /Abstract   </th>
                <th class="tg-pii6">   <br>15.10.2022   </th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td class="tg-wppm">   <br>Notification of   Acceptance/Rejection     </td>
                <td class="tg-pii6">   <br>30.10.2022   </td>
              </tr>
              <tr>
                <td class="tg-wppm">   <br>Last date for   Camera ready Full paper submission (with modification) &amp; Registration   with Fees   </td>
                <td class="tg-pii6">   <br>15.11.2022   </td>
              </tr>
            </tbody>
            </table>
          <br>
          <h5 class="bg_green txt_w">Programme Schedule</h5>
          <table class="tg">
          <thead>
            <tr>
              <th class="tg-pii6">   <br><span style="color:black">S.No</span>   </th>
              <th class="tg-pii6">   <br><span style="color:black">Date</span>   </th>
              <th class="tg-pii6">   <br><span style="color:black">Time</span>   </th>
              <th class="tg-pii6" colspan="3">   <br><span style="color:black">Session</span>   </th>
              <th class="tg-pii6">   <br><span style="color:black">Participants</span>   </th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td class="tg-nw00">   <br><span style="color:black">1</span>   </td>
              <td class="tg-nw00" rowspan="8">   <br><span style="color:black">25.11.2022</span>   </td>
              <td class="tg-nw00">   <br><span style="color:black">09:30AM – 10:00AM</span>   </td>
              <td class="tg-nw00" colspan="3">   <br><span style="color:black">Inaugural Function</span>   </td>
              <td class="tg-nw00" rowspan="3">   <br><span style="color:black">Common to all</span>   </td>
            </tr>
            <tr>
              <td class="tg-nw00">   <br><span style="color:black">2</span>   </td>
              <td class="tg-nw00">   <br><span style="color:black">10:00AM – 11:00AM</span>   </td>
              <td class="tg-nw00" colspan="3">   <br><span style="color:black">Keynote 1</span>   </td>
            </tr>
            <tr>
              <td class="tg-nw00">   <br><span style="color:black">3</span>   </td>
              <td class="tg-nw00">   <br><span style="color:black">11:00AM – 11:15AM</span>   </td>
              <td class="tg-nw00" colspan="3">   <br><span style="color:black">Tea and Coffee</span>   </td>
            </tr>
            <tr>
              <td class="tg-nw00">   <br><span style="color:black">4</span>   </td>
              <td class="tg-nw00">   <br><span style="color:black">11:15AM – 01:15PM</span>   </td>
              <td class="tg-nw00" colspan="2">   <br><span style="color:black">Paper Presentation</span>   </td>
              <td class="tg-nw00">   <br><span style="color:black">Venue</span><br>   <br> <span style="color:black">MG301, MG302 </span><br>   <br><span style="color:black">MG303, MG304</span>   </td>
              <td class="tg-nw00">   <br><span style="color:black">Stream Wise</span>   </td>
            </tr>
            <tr>
              <td class="tg-nw00">   <br><span style="color:black">5</span>   </td>
              <td class="tg-nw00">   <br><span style="color:black">01:15PM – 02:00PM</span>   </td>
              <td class="tg-nw00" colspan="3">   <br><span style="color:black">Lunch</span>   </td>
              <td class="tg-nw00" rowspan="3">   <br><span style="color:black">Common to all</span>   </td>
            </tr>
            <tr>
              <td class="tg-nw00">   <br><span style="color:black">6 </span>   </td>
              <td class="tg-nw00">   <br><span style="color:black">02:00PM – 03:00PM</span>   </td>
              <td class="tg-nw00" colspan="3">   <br><span style="color:black">Keynote 2</span>   </td>
            </tr>
            <tr>
              <td class="tg-nw00">   <br><span style="color:black"> 7</span>   </td>
              <td class="tg-nw00">   <br><span style="color:black">03:00PM – 03:15PM</span>   </td>
              <td class="tg-nw00" colspan="3">   <br><span style="color:black">Tea and Coffee</span>   </td>
            </tr>
            <tr>
              <td class="tg-nw00">   <br><span style="color:black">8</span>   </td>
              <td class="tg-nw00">   <br><span style="color:black">03:15PM – 05:15PM</span>   </td>
              <td class="tg-nw00">   <br><span style="color:black">Paper Presentation</span>   </td>
              <td class="tg-nw00" colspan="2">   <br><span style="color:black">Venue</span><br>   <br> <span style="color:black">MG301, MG302 </span><br>   <br><span style="color:black">MG303, MG304,</span>   </td>
              <td class="tg-nw00">   <br><span style="color:black">Stream Wise</span>   </td>
            </tr>
            <tr>
              <td class="tg-nw00">   <br><span style="color:black">9</span>   </td>
              <td class="tg-nw00" rowspan="8">   <br><span style="color:black">26.11.2022</span>   </td>
              <td class="tg-nw00">   <br><span style="color:black">10:00AM – 11:00AM</span>   </td>
              <td class="tg-nw00" colspan="3">   <br><span style="color:black">Keynote 3</span>   </td>
              <td class="tg-nw00" rowspan="2">   <br><span style="color:black">Common to all</span>   </td>
            </tr>
            <tr>
              <td class="tg-nw00">   <br><span style="color:black"> 10</span>   </td>
              <td class="tg-nw00">   <br><span style="color:black">11:00AM – 11:15AM</span>   </td>
              <td class="tg-nw00" colspan="3">   <br><span style="color:black">Tea and Coffee</span>   </td>
            </tr>
            <tr>
              <td class="tg-nw00">   <br><span style="color:black"> 11</span>   </td>
              <td class="tg-nw00">   <br><span style="color:black">11:15AM – 01:15PM</span>   </td>
              <td class="tg-nw00">   <br><span style="color:black">Paper Presentation</span>   </td>
              <td class="tg-nw00" colspan="2">   <br><span style="color:black">Venue</span><br>   <br> <span style="color:black">MG301, MG302 </span><br>   <br><span style="color:black">MG303, MG304</span>   </td>
              <td class="tg-nw00">   <br><span style="color:black">Stream Wise</span>   </td>
            </tr>
            <tr>
              <td class="tg-nw00">   <br><span style="color:black"> 12</span>   </td>
              <td class="tg-nw00">   <br><span style="color:black">01:15PM – 02:00PM</span>   </td>
              <td class="tg-nw00" colspan="3">   <br><span style="color:black">Lunch</span>   </td>
              <td class="tg-nw00" rowspan="3">   <br><span style="color:black">Common to all</span>   </td>
            </tr>
            <tr>
              <td class="tg-nw00">   <br><span style="color:black"> 13</span>   </td>
              <td class="tg-nw00">   <br><span style="color:black">02:00PM – 03:00PM</span>   </td>
              <td class="tg-nw00" colspan="3">   <br><span style="color:black">Keynote 4</span>   </td>
            </tr>
            <tr>
              <td class="tg-nw00">   <br><span style="color:black"> 14</span>   </td>
              <td class="tg-nw00">   <br><span style="color:black">03:00PM – 03:15PM</span>   </td>
              <td class="tg-nw00" colspan="3">   <br><span style="color:black">Tea and Coffee</span>   </td>
            </tr>
            <tr>
              <td class="tg-nw00">   <br><span style="color:black"> 15</span>   </td>
              <td class="tg-nw00">   <br><span style="color:black">03:15PM – 05:15PM</span>   </td>
              <td class="tg-nw00">   <br><span style="color:black">Paper Presentation</span>   </td>
              <td class="tg-nw00" colspan="2">   <br><span style="color:black">Venue</span><br>   <br> <span style="color:black">MG301, MG302 </span><br>   <br><span style="color:black">MG303, MG304</span>   </td>
              <td class="tg-nw00">   <br><span style="color:black">Stream Wise</span>   </td>
            </tr>
            <tr>
              <td class="tg-nw00">   <br><span style="color:black"> 16</span>   </td>
              <td class="tg-nw00">   <br><span style="color:black">05:15PM – 06:00PM</span>   </td>
              <td class="tg-nw00" colspan="3">   <br><span style="color:black">Valedictory</span>   </td>
              <td class="tg-nw00">   <br><span style="color:black">Common to all</span>   </td>
            </tr>
          </tbody>
          </table>
        </div>
      </div>
    </div>

    <!--SliderBootstrap-->
    <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="Images\nikhat.jpg" class="d-block w-100" alt="...">
          </div>
          <div class="carousel-item">
            <img src="Images\slider1.jpg" class="d-block w-100" alt="...">
          </div>
          <div class="carousel-item">
            <img src="Images\bg7.jpg" class="d-block w-100" alt="...">
          </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>
      <!-- Content -->
      <div class="container ">
        <div class="row">
          <div class="col-md-12">
            <div class="shadowsubpage">
              <br>
              <div class="heading_main">Home</div>
              <div class="padding_size15 bgcolor_paleyellow">
                <div class="modilepadding content_main">

                    <p> Artificial Intelligence and Cognitive Computing is a region of software engineering that emphasizes the production of intelligent machines that work and respond like Human. Research in Artificial intelligence and Cognitive Computing is a study of how the human brain thinks, learn, decide, and work while trying to solve a problem, and then using the products of this study as a source of increasing smart software and systems. In real-life, knowledge has some undesirable properties. AI is different from hardware-driven, robotic automation. Artificial Intelligence performs frequent, high-capacity, electronic tasks consistently and without exhaustion instead of automating manual tasks. In the modern world, Artificial Intelligence can be used in many ways to control robots, Sensors, actuators, etc.
                      AICC 2022 provides a major international forum where the creation and exchange of ideas related to artificial intelligence and Cognitive Computing are fostered among academia, industry, and government agencies. The conference facilitates the cross-fertilization of these ideas and promotes their transfer into practical tools, for developing intelligent systems and pursuing artificial intelligence applications. 
                      </p>
                </div>
              </div>
              <br>
            </div>
          </div>
        </div>
      </div>
      <!-- <div class="row1">
        <br>
        <div class=""col-lg-12  col-sm-12>
          <h4 class="text-uppercase title">HOME</h4>
          <div class="double-line-bottom-theme-colored-2">
            
          </div>
          <div class="para">
            Artificial Intelligence and Cognitive Computing is a region of software engineering that emphasizes the production of intelligent machines that work and respond like Human. Research in Artificial intelligence and Cognitive Computing is a study of how the human brain thinks, learn, decide, and work while trying to solve a problem, and then using the products of this study as a source of increasing smart software and systems. In real-life, knowledge has some undesirable properties. AI is different from hardware-driven, robotic automation. Artificial Intelligence performs frequent, high-capacity, electronic tasks consistently and without exhaustion instead of automating manual tasks. In the modern world, Artificial Intelligence can be used in many ways to control robots, Sensors, actuators, etc.
AICC 2022 provides a major international forum where the creation and exchange of ideas related to artificial intelligence and Cognitive Computing are fostered among academia, industry, and government agencies. The conference facilitates the cross-fertilization of these ideas and promotes their transfer into practical tools, for developing intelligent systems and pursuing artificial intelligence applications. 

          </div>
        </div>
    </div> -->

    <!-- Footer  -->
    <?php $IPATH = $_SERVER["DOCUMENT_ROOT"]."/cseconference/Assets/"; include($IPATH."footer.php"); ?>
</body>
</html>