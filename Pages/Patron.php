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
    
    <!--HeadNavBarBootstrap-->
    <?php $IPATH = $_SERVER["DOCUMENT_ROOT"]."/cseconference/Assets/"; include($IPATH."headnavbar.php"); ?>

  
    <!-- Toogle Right Canvas  -->
    <button class="btn btn-danger bttn-custom" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight" aria-controls="offcanvasRight">Important Dates</button>
    <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasRight" aria-labelledby="offcanvasRightLabel">
      <div class="offcanvas-header">
        <h5 id="offcanvasRightLabel">Important Dates</h5>
        <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
      </div>
      <div class="offcanvas-body">
        
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

    
      <!-- Content -->
      <div class="container ">
        <div class="row">
          <div class="col-md-12">
            <div class="shadowsubpage">
              <br>
              <div class="heading_main">Patron</div>
              <div class="padding_size15 bgcolor_paleyellow">
                <div class="modilepadding content_main">
                    <img src="/Images/Patron.jpg" alt="mrr photo">
                    <h3>Dr. K. Srinivas Rao</h3>
                    <p>Dr. K. Srinivas Rao, has been serving the noblest of the professions with great devotion from the past 20 years. He proves himself as a special leader by the equality of his action and integrity of his intent. The courage to make tough decisions and the compassion to listen to the need of others is an art of our Principal. It is his sense of commitment which creates an apt platform for the staff and the students to grow academically, mentally and spiritually. He believes that students should inculcate not only academic qualifications but also qualities like leadership, 
                    teamwork, determination, confidence, self -belief, respect and consideration. He looks forward for the betterment of the students and constantly extends his support in all the high prospects of our institution.</p>
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
      <!-- Footter-->
      <?php $IPATH = $_SERVER["DOCUMENT_ROOT"]."/cseconference/Assets/"; include($IPATH."footer.php"); ?>
</body>
</html>