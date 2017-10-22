<?php 
include 'header.php'; ?>
        <!--sidebar end-->

        <!-- **********************************************************************************************************************************************************
        MAIN CONTENT
        *********************************************************************************************************************************************************** -->
        <!--main content start-->
        <section id="main-content">
            <section class="wrapper site-min-height">
            	<h3><i class="fa fa-angle-right"></i> Daftar surat yang pernah dibuat </h3>
<br>
<h4>Surat Peminjaman Bendera</h4>
<table class="table table-stripped table-hover">
    <tr>
        <td>No</td>
        <td>No Surat</td>
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
            <td><?php echo $data['kategori']; ?></td>
            <td><a href='surat_bendera.php?id=<?php echo $data['no']; ?>'>lihat pdf</a> <a href='delete.php?id=<?php echo $data['no'];?>&kat=<?php echo $data['kategori']; ?>' class="btn btn-danger">hapus</a></td>
        </tr>
        <?php  
        $no++;
    }
     ?>
</table>

</section>
        </section><!-- /MAIN CONTENT -->

        <!--main content end-->
        <!--footer start-->
        <footer class="site-footer">
            <div class="text-center">
                2014 - Alvarez.is
                <a href="blank.html#" class="go-top">
                    <i class="fa fa-angle-up"></i>
                </a>
            </div>
        </footer>
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

    <!-- JQuery date picker -->
    <script type="text/javascript" src="assets/js/jquery-ui-1.9.2.custom.min.js">

    </script>
    <!--script for this page-->
    <script src="assets/js/sparkline-chart.js"></script>
      <script src="assets/js/zabuto_calendar.js"></script>

    <!-- angular -->
    <script src="assets/js/angular/angular.min.js" charset="utf-8"></script>

    <script type="application/javascript">
        var observe;
        if (window.attachEvent) {
            observe = function (element, event, handler) {
                element.attachEvent('on'+event, handler);
            };
        }
        else {
            observe = function (element, event, handler) {
                element.addEventListener(event, handler, false);
            };
        }
        function init () {
            var text = document.getElementById('text');
            function resize () {
                text.style.height = 'auto';
                text.style.height = text.scrollHeight+'px';
            }
            /* 0-timeout to get the already changed text */
            function delayedResize () {
                window.setTimeout(resize, 0);
            }
            observe(text, 'change',  resize);
            observe(text, 'cut',     delayedResize);
            observe(text, 'paste',   delayedResize);
            observe(text, 'drop',    delayedResize);
            observe(text, 'keydown', delayedResize);

            text.focus();
            text.select();
            resize();
        }

        $( function() {
          $( "#datepicker" ).datepicker();
        } );

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

        function tanggalSekarang() {
          var date = new Date();
          var tahun = date.getYear();
          return tahun;
        }
    </script>


  </body>
</html>