<!-- Start Banner Area -->
    <section class="generic-banner relative">
     <div class="container">
        <div class="row height align-items-center justify-content-center">
          <div class="col-lg-10">
            <div class="banner-content text-center">
              <h2><b>Masukan Identitas Diri</b></h2>
              <p>Sebelum melakukan analisa, silahkan masukan identitas diri agar sistem dapat mengetahui
               bahwa kamu adalah calon mahasiswa yang akan memilih program studi. :) </p>
            </div><br>


            <div class="subscription-area">
              <div class="row justify-content-center">
                <div class="col-lg-6">

                  <form action="application/front/modules/pilihprodi/save.php" method="post" enctype="multipart/form-data" class="subscription relative" role="form" id="form">

                    <div class="mt-10">
                      <input type="text" name="nama_siswa" placeholder="Nama" required="true" class="single-input-primary">
                    </div>
                    
                    <div class="mt-10">
                      <input type="text" name="asal" placeholder="Asal Sekolah" required="true" class="single-input-primary">
                    </div>

                    <div class="button-group-area mt-10 ">
                      <button type="submit" name="submit" class="genric-btn primary circle">Lanjut <span class="lnr lnr-arrow-right"></button>
                    </div>

                  </form>
                </div>
              </div>
            </div>

          </div>
        </div>
      </div>
    </section>


    <div class="white-bg">
      <div class="container">
          <div class="row">
            <div class="col-lg-8 col-md-8">
              <h3 class="mb-30"></h3>
              
            </div>
          </div>
      </div>
    </div>
    <div class="white-bg">
      <div class="container">
          <div class="row">
            <div class="col-lg-8 col-md-8">
              <h3 class="mb-30"></h3>
              
            </div>
          </div>
      </div>
    </div>
    <div class="white-bg">
      <div class="container">
          <div class="row">
            <div class="col-lg-8 col-md-8">
              <h3 class="mb-30"></h3>
              
            </div>
          </div>
      </div>
    </div>
    <div class="white-bg">
    <div class="container">
        <div class="row">
          <div class="col-lg-8 col-md-8">
            <h3 class="mb-30"></h3>
            
          </div>
        </div>
      </div>
    </div>
    <div class="white-bg">
    <div class="container">
        <div class="row">
          <div class="col-lg-8 col-md-8">
            <h3 class="mb-30"></h3>
            
          </div>
        </div>
      </div>
    </div>

<script type="text/javascript">
  var frm = $('#form');
  $("#menunggu").css('display', 'none', 'important');

  frm.submit(function (ev) {
      for ( instance in CKEDITOR.instances) {
        CKEDITOR.instances[instance].updateElement();
      }
      var formData = new FormData($(this)[0]);
      $.ajax({
        type: frm.attr('method'),
        url: frm.attr('action').
        //data: frm.serialize(),
        data: formData,
        async: false,
        success: function (output) {
          if(output=="true"){
            window.location.href = "m_ahp";
          }else{
            window.location.href = "pilihprodi";
          }
        },
      beforeSend:function()
      {
        $("#menunggu").css('display', 'inline', 'important');
        $("#menunggu").html("<img src='media/img/loading.gif' /> Menunggu...")
      },
      cache: false,
      contentType: false,
      processData: false
      });
      ev.preventDefault();
  });
</script>

   