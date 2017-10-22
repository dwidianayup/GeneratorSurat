<?php 
include 'header.php'; ?>


      <!-- **********************************************************************************************************************************************************
      MAIN CONTENT
      *********************************************************************************************************************************************************** -->
      <!--main content start-->
      <section id="main-content">
          <section class="wrapper">

              <div class="row">
                  <div class="col-lg-9 main-chart">
<h3><center>Daftar surat yang pernah dibuat </center> </h3>                  	
<h4>Surat Peminjaman Bendera</h4>
<table class="table table-stripped table-hover">
    <tr>
        <td>No</td>
        <td>No Surat</td>
        <td>Tanggal</td>
        <td>Kategori</td>
        <td>Aksi</td>
    </tr>
    <?php $sql="select * from surat where kategori='bendera'";
    $hasil=mysqli_query($con,$sql);
    $no=1;
    while ($data=mysqli_fetch_assoc($hasil)) {
        ?>
        <tr>
            <td><?php echo $no; ?></td>
            <td><?php echo $data['no']; ?></td>
            <td><?php echo $data['tanggal'] ?></td>
            <td><?php echo $data['kategori']; ?></td>
            <td><a href='surat_bendera.php?id=<?php echo $data['no']; ?>'>lihat pdf</a></td>
        </tr>
        <?php  
        $no++;
    }
     ?>
</table>

<br>
<h4>Surat Open Stand</h4>
<table class="table table-stripped table-hover">
    <tr>
        <td>No</td>
        <td>No Surat</td>
        <td>Tanggal</td>
        <td>Kategori</td>
        <td>Aksi</td>
    </tr>
    <?php $sql="select * from surat where kategori='stand'";
    $hasil=mysqli_query($con,$sql);
    $no=1;
    while ($data=mysqli_fetch_assoc($hasil)) {
        ?>
        <tr>
            <td><?php echo $no; ?></td>
            <td><?php echo $data['no']; ?></td>
            <td><?php echo $data['tanggal'] ?></td>
            <td><?php echo $data['kategori']; ?></td>
            <td><a href='surat_stand.php?id=<?php echo $data['no']; ?>'>lihat pdf</a></td>
        </tr>
        <?php  
        $no++;
    }
     ?>
</table>
                      
<br>
<h4>Surat Peminjaman Kabel</h4>
<table class="table table-stripped table-hover">
    <tr>
        <td>No</td>
        <td>No Surat</td>
        <td>Tanggal</td>
        <td>Kategori</td>
        <td>Aksi</td>
    </tr>
    <?php $sql="select * from surat where kategori='kabel'";
    $hasil=mysqli_query($con,$sql);
    $no=1;
    while ($data=mysqli_fetch_assoc($hasil)) {
        ?>
        <tr>
            <td><?php echo $no; ?></td>
            <td><?php echo $data['no']; ?></td>
            <td><?php echo $data['tanggal'] ?></td>
            <td><?php echo $data['kategori']; ?></td>
            <td><a href='surat_kabel.php?id=<?php echo $data['no']; ?>'>lihat pdf</a></td>
        </tr>
        <?php  
        $no++;
    }
     ?>
</table>

<br>
<h4>Surat Media Partner</h4>
<table class="table table-stripped table-hover">
    <tr>
        <td>No</td>
        <td>No Surat</td>
        <td>Tanggal</td>
        <td>Kategori</td>
        <td>Aksi</td>
    </tr>
    <?php $sql="select * from surat where kategori='mediapartner'";
    $hasil=mysqli_query($con,$sql);
    $no=1;
    while ($data=mysqli_fetch_assoc($hasil)) {
        ?>
        <tr>
            <td><?php echo $no; ?></td>
            <td><?php echo $data['no']; ?></td>
            <td><?php echo $data['tanggal'] ?></td>
            <td><?php echo $data['kategori']; ?></td>
            <td><a href='surat_mediapartner.php?id=<?php echo $data['no']; ?>'>lihat pdf</a></td>
        </tr>
        <?php  
        $no++;
    }
     ?>
</table>

      <!--main content end-->
      <!--footer start-->
      <!--footer end-->
  </section>

    <!-- js placed at the end of the document so the pages load faster -->
    <script src="assets/js/jquery.js"></script>
    <script src="assets/js/jquery-1.8.3.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script class="include" type="text/javascript" src="assets/js/jquery.dcjqaccordion.2.7.js"></script>
    <script src="assets/js/jquery.scrollTo.min.js"></script>
    <script src="assets/js/jquery.nicescroll.js" type="text/javascript"></script>
    <script src="assets/js/jquery.sparkline.js"></script>


    <!--common script for all pages-->
    <script src="assets/js/common-scripts.js"></script>

    <script type="text/javascript" src="assets/js/gritter/js/jquery.gritter.js"></script>
    <script type="text/javascript" src="assets/js/gritter-conf.js"></script>

    <!--script for this page-->
    <script src="assets/js/sparkline-chart.js"></script>
	  <script src="assets/js/zabuto_calendar.js"></script>

    <!-- angular -->
    <script src="assets/js/angular/angular.min.js" charset="utf-8"></script>

	<script type="text/javascript">
        $(document).ready(function () {
        var unique_id = $.gritter.add({
            // (string | mandatory) the heading of the notification
            title: 'Welcome, ',
            // (string | mandatory) the text inside the notification
            text: 'Hover me to enable the Close Button. You can hide the left sidebar clicking on the button next to the logo. ',
            // (string | optional) the image to display on the left
            image: 'assets/img/ui-sam.jpg',
            // (bool | optional) if you want it to fade out on its own or just sit there
            sticky: false,
            // (int | optional) the time you want it to be alive for before fading out
            time: 3000,
            // (string | optional) the class name you want to apply to that specific message
            class_name: 'my-sticky-class'
        });

        return false;
      });
	</script>

	<script type="application/javascript">
        $(document).ready(function () {
            $("#date-popover").popover({html: true, trigger: "manual"});
            $("#date-popover").hide();
            $("#date-popover").click(function (e) {
                $(this).hide();
            });

            $("#my-calendar").zabuto_calendar({
                action: function () {
                    return myDateFunction(this.id, false);
                },
                action_nav: function () {
                    return myNavFunction(this.id);
                },
                ajax: {
                    url: "show_data.php?action=1",
                    modal: true
                },
                legend: [
                    {type: "text", label: "Special event", badge: "00"},
                    {type: "block", label: "Regular event", }
                ]
            });
        });


        function myNavFunction(id) {
            $("#date-popover").hide();
            var nav = $("#" + id).data("navigation");
            var to = $("#" + id).data("to");
            console.log('nav ' + nav + ' to: ' + to.month + '/' + to.year);
        }
    </script>


  </body>
</html>
