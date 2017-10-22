<!DOCTYPE html>
<html>
<head>
  <title></title>
</head>
<body>
  <section id="main-content">
            <section class="wrapper site-min-height">
              <h3><i class="fa fa-angle-right"></i> Form Pembuatan Surat</h3>
              <div class="row mt">
                <div class="col-lg-12">
                  <div class="form-panel">
                    <h4>
                      <i class="fa fa-angle-right"></i> Komposisi
                    </h4>
                    <form class="form-horizontal style-form" action="" method="">
                      <!-- TANGGAL -->
                      <div class="form-group col-sm-12">
                        <label class="col-sm-1 control-label"> Tanggal Surat</label>
                        <div class="col-sm-3">
                            <input ng-model="date" type="text" name="" class="form-control" value="" id="datepicker" required>
                        </div>
                      </div>
                      <div class="form-group col-sm-12">
                        <label class="col-sm-1 control-label">No surat</label>
                        <div class="col-sm-8">
                          <input type="text" class="form-control" min="1" name="no" value="" ng-model="nosurat" required>
                        </div>
                      </div>
                      <!-- Hal -->
                      <div class="form-group col-sm-12">
                        <label class="col-sm-1 control-label"> Hal</label>
                        <div class="col-sm-2 ">
                          <input type="text" class="form-control" ng-model="hal" required="" ng-model="hal">
                        </div>
                      </div>
                      <div class="form-group col-sm-12">
                        <label class="col-sm-1 control-label"> Lampiran</label>
                        <div class="col-sm-3">
                          <input type="text" class="form-control" name="" value="" ng-model="lampiran" required="">
                        </div>
                      </div>

                      <div clas="form-group col-sm-12">
                        <label class="col-sm-1 control-label"> Kepada</label>
                        <div class="col-sm-3">
                          <input type="text" name="" value="Yth. " ng-model="kepada" class="form-control" maxlength="30" required>
                        </div>
                      </div>
                      <div class="form-group col-sm-12"></div>
                      <div class="form-group col-sm-12">
                        <label class="control-label col-sm-1"> Isi</label>
                        <div class="col-sm-11"><br>
                          <textarea required style="text-align:justify;height:1em;" id="text" name="isisurat" class="form-control" ng-model="isi"></textarea>
                        </div>
                      </div>
                      <!-- TTD -->
                      <div class="form-group">
                        <label class="control-label col-sm-1">TTD</label>
                        <div class="col-sm-2">
                          <input required class="form-control" placeholder="nama terang" type="text" name="ttd" value="" style="text-transform:uppercase" ng-model="ttd">
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
                      <p class="col-sm-12"><h2 align="center">INI HEADER</h2></p>
                      <p align="center">ini sub header</p>
                      <hr>
                      <p align="right">{{date}}</p>
                      <p><br>No Surat : {{nosurat}}</p>
                      <p>Hal : {{hal}}</p>
                      <p>Lampiran : {{lampiran}}</p>
                      <p>Kepada : {{kepada}}</p>
                      <p style="text-align:justify;">
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        {{isi}}</p><br><br>
                      <p align="right">Nama Terang</p>
                      <p align="right" style="text-transform:uppercase"><br><br><br>{{ttd}}</p>
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
</body>
</html>