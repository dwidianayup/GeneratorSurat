<?php 
include 'header.php'; ?>
        <!--sidebar end-->

        <!-- **********************************************************************************************************************************************************
        MAIN CONTENT
        *********************************************************************************************************************************************************** -->
        <!--main content start-->
        <section id="main-content">
            <section class="wrapper site-min-height">
            	<h3><i class="fa fa-angle-right"></i> Form Pembuatan Surat Peminjaman Bendera</h3>
            	<div class="row mt">
            		<div class="col-lg-12">
                  <div class="form-panel">
                    <h4>
                      <i class="fa fa-angle-right"></i> Komposisi
                    </h4>
                    <form class="form-horizontal style-form" action="surat.php" method="post">
                      <!-- TANGGAL -->
                      <div class="form-group col-sm-12">
                        <label class="col-sm-1 control-label"> Tanggal Surat</label>
                        <div class="col-sm-3">
                          <input ng-model="date" type="text" name="tanggal" class="form-control" value="" id="datepicker" required>
                        </div>
                      </div>
                      <div class="form-group col-sm-12">
                        <label class="col-sm-1 control-label">No surat</label>
                        <div class="col-sm-2">
                          <input type="text" class="form-control" min="1" name="no" value="" ng-model="nosurat" required>
                        </div>
                      </div>
                      <!-- Hal -->
                      <div class="form-group col-sm-12">
                        <label class="col-sm-1 control-label"> Hal</label>
                        <div class="col-sm-3">
                          <input type="text" class="form-control" name="hal" ng-model="hal" required="" ng-model="hal">
                        </div>
                      </div>
                      <div class="form-group col-sm-12">
                        <label class="col-sm-1 control-label"> Lampiran</label>
                        <div class="col-sm-2">
                          <input type="text" class="form-control" name="lampiran" value="" ng-model="lampiran" required="">
                        </div>
                      </div>

                      <div clas="form-group col-sm-12">
                        <label class="col-sm-1 control-label"> Kepada</label>
                        <div class="col-sm-3">
                          <input type="text" name="kepada" value="Yth. " ng-model="kepada" class="form-control" maxlength="30" required>
                        </div>
                      </div>
                      <!-- TTD -->
                      <div class="form-group">
                        <label class="control-label col-sm-1">Ketua Pelaksana</label>
                        <div class="col-sm-2">
                          <input required class="form-control" placeholder="nama terang" type="text" name="ttd" value="" ng-model="ttd">
                        </div>
                      </div>
                      <div class="form-group">
                        <div class="col-sm-12">
                          <input type="submit" class="btn btn-large alert-success" name="" value="submit">
                          <input type="reset" class="btn btn-large alert-danger" name="" value="reset">
                        </div>
                      </div>
                    </form>
                  </div>
            		</div>
            	</div>

              <div class="row mt">
                <div class="col-sm-12">
                  <div class="form-panel">
                    <h4>
                      <i class="fa fa-angle-right"></i>
                      Generate
                    </h4>
                    <div class="">
                      <p class="col-sm-12"><h2 align="center">DINUS OPENSOURCE COMMUNITY</h2></p>
                      <p align="center">UNIVERSITAS DIAN NUSWANTORO</p>
                      <hr>
                      <p align="right">Semarang, {{date}}</p>
                      <p><br>No Surat &nbsp;&nbsp;: {{nosurat}}/Release Party/VII/2017</p>
                      <p>Hal&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: {{hal}}</p>
                      <p>Lampiran &nbsp;&nbsp;: {{lampiran}}</p>
                      <p>Kepada &nbsp;&nbsp;&nbsp;&nbsp;: {{kepada}}</p>
                      <p style="text-align:justify;">
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        Dengan hormat, 
                      <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Sehubungan dengan akan diadakannya Seminar Nasional Release Party TeaLinuxOS 9 “Open Source dan Kehidupan” oleh Dinus Open Source Community (DOSCOM), kami atas nama panitia bermaksud memohon izin untuk meminjam bendera Universitas Dian Nuswantoro sebagai perlengkapan pada acara tersebut yang akan dilaksanakan pada : </p>
                      <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Hari/Tanggal  &nbsp;&nbsp;&nbsp;: Sabtu, 13 Mei 2017</p>
                      <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Waktu   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: 07.00 – 13.00 WIB</p>
                      <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Tempat  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: Astoria Ballroom Hotel Dafam Jl. Imam Bonjol 188 Semarang</p>
                      <p>Demikian surat permohonan ini kami sampaikan. Atas perhatian Bapak/Ibu kami ucapkan terima kasih.
                      </p><br><br>
                      <p align="right">Hormat kami</p>
                      <p align="right" style="text-transform:uppercase"><br><br><br>{{ttd}}</p>
                      <p align="right">Ketua Pelaksana</p>
                      <br><br><br>
                    </div>
                  </div>
                </div>
              </div>

      		</section><!--/wrapper -->
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
