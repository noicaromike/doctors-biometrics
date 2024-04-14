<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="<?php echo URLROOT; ?>/public/css/print.css">
  <title>Doctor's Biometric</title>

</head>

<body>

  <div class="btn-container">
    <button class="form__btn" id="print">Print</button>
  </div>
  <?php foreach ($data['doctors'] as $doc) : ?>
    <div class="print-container">

      <div class="card dtr">
        <div class="content">
          <div class="img-holder">
            <img src="<?php echo URLROOT; ?>/public/img/eac.png" alt="">
          </div>

        </div>
        <div class="align-text-center">
          <h3>Emilio Aguinaldo College Medical Center - Cavite</h3>
        </div>
        <div class="center">
          <p>Automated Monitoring System</p>
          <h4>EMPLOYEE DETAILED TIME IN/OUT TRAILS</h4>

        </div>


        <div class="space-round">
          <p>Period</p>
          <?php $dateFormatted = formatDate($data['startDate'], $data['endDate']); ?>

          <p><?php echo $dateFormatted; ?></p>
        </div>

        <table class="tbl-class" border="1" style="width:460px;">
          <tr>
            <th class="th-head">EMPLOYEE NAME</th>
            <th class="th-head">EMPLOYEE ID</th>
            <th class="th-head">POSITION</th>
            <th class="th-head">REG. SCHEDULE</th>
          </tr>
          <tr>
            <td class="td-class" data-cell="EMPLOYEE NAME"><?php echo $doc->EMPNAME; ?></td>
            <td class="td-class" data-cell="EMPLOYEE ID"><?php echo $doc->BNo; ?></td>
            <td class="td-class" data-cell="POSITION"><?php echo $doc->POSITION; ?></td>
            <td class="td-class" data-cell="REG. SCHEDULE"></td>
          </tr>
        </table>


        <table border="1">
          <tr>
            <th rowspan="2">Day</th>
            <th colspan="2">Morning</th>
            <th colspan="2">Afternoon</th>
            <th colspan="2">Evening</th>
          </tr>
          <tr>
            <th>IN</th>
            <th>OUT</th>
            <th>IN</th>
            <th>OUT</th>
            <th>IN</th>
            <th>OUT</th>
          </tr>
          <tr>
            <th>16</th>
            <td style="width: 16.67%;">&nbsp;</td>
            <td style="width: 16.67%;">&nbsp;</td>
            <td style="width: 16.67%;">&nbsp;</td>
            <td style="width: 16.67%;">&nbsp;</td>
            <td style="width: 16.67%;">&nbsp;</td>
            <td style="width: 16.67%;">&nbsp;</td>
          </tr>
          <tr>
            <th>1/17</th>
            <td style="width: 16.67%;">&nbsp;</td>
            <td style="width: 16.67%;">&nbsp;</td>
            <td style="width: 16.67%;">&nbsp;</td>
            <td style="width: 16.67%;">&nbsp;</td>
            <td style="width: 16.67%;">&nbsp;</td>
            <td style="width: 16.67%;">&nbsp;</td>
          </tr>
          <tr>
            <th>2/18</th>
            <td style="width: 16.67%;">&nbsp;</td>
            <td style="width: 16.67%;">&nbsp;</td>
            <td style="width: 16.67%;">&nbsp;</td>
            <td style="width: 16.67%;">&nbsp;</td>
            <td style="width: 16.67%;">&nbsp;</td>
            <td style="width: 16.67%;">&nbsp;</td>
          </tr>
          <tr>
            <th>3/19</th>
            <td style="width: 16.67%;">&nbsp;</td>
            <td style="width: 16.67%;">&nbsp;</td>
            <td style="width: 16.67%;">&nbsp;</td>
            <td style="width: 16.67%;">&nbsp;</td>
            <td style="width: 16.67%;">&nbsp;</td>
            <td style="width: 16.67%;">&nbsp;</td>
          </tr>
          <tr>
            <th>4/20</th>
            <td style="width: 16.67%;">&nbsp;</td>
            <td style="width: 16.67%;">&nbsp;</td>
            <td style="width: 16.67%;">&nbsp;</td>
            <td style="width: 16.67%;">&nbsp;</td>
            <td style="width: 16.67%;">&nbsp;</td>
            <td style="width: 16.67%;">&nbsp;</td>
          </tr>
          <tr>
            <th>5/21</th>
            <td style="width: 16.67%;">&nbsp;</td>
            <td style="width: 16.67%;">&nbsp;</td>
            <td style="width: 16.67%;">&nbsp;</td>
            <td style="width: 16.67%;">&nbsp;</td>
            <td style="width: 16.67%;">&nbsp;</td>
            <td style="width: 16.67%;">&nbsp;</td>
          </tr>
          <tr>
            <th>6/22</th>
            <td style="width: 16.67%;">&nbsp;</td>
            <td style="width: 16.67%;">&nbsp;</td>
            <td style="width: 16.67%;">&nbsp;</td>
            <td style="width: 16.67%;">&nbsp;</td>
            <td style="width: 16.67%;">&nbsp;</td>
            <td style="width: 16.67%;">&nbsp;</td>
          </tr>
          <tr>
            <th>7/23</th>
            <td style="width: 16.67%;">&nbsp;</td>
            <td style="width: 16.67%;">&nbsp;</td>
            <td style="width: 16.67%;">&nbsp;</td>
            <td style="width: 16.67%;">&nbsp;</td>
            <td style="width: 16.67%;">&nbsp;</td>
            <td style="width: 16.67%;">&nbsp;</td>
          </tr>
          <tr>
            <th>8/24</th>
            <td style="width: 16.67%;">&nbsp;</td>
            <td style="width: 16.67%;">&nbsp;</td>
            <td style="width: 16.67%;">&nbsp;</td>
            <td style="width: 16.67%;">&nbsp;</td>
            <td style="width: 16.67%;">&nbsp;</td>
            <td style="width: 16.67%;">&nbsp;</td>
          </tr>
          <tr>
            <th>9/25</th>
            <td style="width: 16.67%;">&nbsp;</td>
            <td style="width: 16.67%;">&nbsp;</td>
            <td style="width: 16.67%;">&nbsp;</td>
            <td style="width: 16.67%;">&nbsp;</td>
            <td style="width: 16.67%;">&nbsp;</td>
            <td style="width: 16.67%;">&nbsp;</td>
          </tr>
          <tr>
            <th>10/26</th>
            <td style="width: 16.67%;">&nbsp;</td>
            <td style="width: 16.67%;">&nbsp;</td>
            <td style="width: 16.67%;">&nbsp;</td>
            <td style="width: 16.67%;">&nbsp;</td>
            <td style="width: 16.67%;">&nbsp;</td>
            <td style="width: 16.67%;">&nbsp;</td>
          </tr>
          <tr>
            <th>11/27</th>
            <td style="width: 16.67%;">&nbsp;</td>
            <td style="width: 16.67%;">&nbsp;</td>
            <td style="width: 16.67%;">&nbsp;</td>
            <td style="width: 16.67%;">&nbsp;</td>
            <td style="width: 16.67%;">&nbsp;</td>
            <td style="width: 16.67%;">&nbsp;</td>
          </tr>
          <tr>
            <th>12/28</th>
            <td style="width: 16.67%;">&nbsp;</td>
            <td style="width: 16.67%;">&nbsp;</td>
            <td style="width: 16.67%;">&nbsp;</td>
            <td style="width: 16.67%;">&nbsp;</td>
            <td style="width: 16.67%;">&nbsp;</td>
            <td style="width: 16.67%;">&nbsp;</td>
          </tr>
          <tr>
            <th>13/29</th>
            <td style="width: 16.67%;">&nbsp;</td>
            <td style="width: 16.67%;">&nbsp;</td>
            <td style="width: 16.67%;">&nbsp;</td>
            <td style="width: 16.67%;">&nbsp;</td>
            <td style="width: 16.67%;">&nbsp;</td>
            <td style="width: 16.67%;">&nbsp;</td>
          </tr>
          <tr>
            <th>14/30</th>
            <td style="width: 16.67%;">&nbsp;</td>
            <td style="width: 16.67%;">&nbsp;</td>
            <td style="width: 16.67%;">&nbsp;</td>
            <td style="width: 16.67%;">&nbsp;</td>
            <td style="width: 16.67%;">&nbsp;</td>
            <td style="width: 16.67%;">&nbsp;</td>
          </tr>
          <tr>
            <th>15/31</th>
            <td style="width: 16.67%;">&nbsp;</td>
            <td style="width: 16.67%;">&nbsp;</td>
            <td style="width: 16.67%;">&nbsp;</td>
            <td style="width: 16.67%;">&nbsp;</td>
            <td style="width: 16.67%;">&nbsp;</td>
            <td style="width: 16.67%;">&nbsp;</td>
          </tr>

          <!-- Repeat for other rows -->
        </table>
        <div class="sometext">
          Lorem ipsum dolor sit amet consectetur adipisicing elit. Quas harum aut dolores repudiandae praesentium voluptatem vel iste! Corporis ab ad pariatur esse tenetur dolore, deserunt explicabo debitis fugit dicta commodi.
        </div>

      </div>


    </div>
    <div class="breaker"></div>
  <?php endforeach; ?>






  <script src="<?php echo URLROOT; ?>/public/javascript/html2canvas.js"></script>
  <script src="<?php echo URLROOT; ?>/public/javascript/javascript.js"></script>

</body>

</html>