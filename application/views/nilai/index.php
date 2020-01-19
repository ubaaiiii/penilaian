<?php
    defined('BASEPATH') OR exit('No direct script access allowed');

    $user = $this->session->userdata('user');
    extract($user);

    $nilai = "";

    function gantiWarna($angka,$atribut=""){
        switch(true){
            case $angka <= 25:
                return ($atribut=="BEN" or $atribut=="")?("pink"):("blue");
                break;
            case $angka <= 60:
                return ($atribut=="BEN" or $atribut=="")?("yellow"):("green");
                break;
            case $angka <= 75:
                return ($atribut=="BEN" or $atribut=="")?("blue"):("yellow");
                break;
            case $angka <= 100:
                return ($atribut=="BEN" or $atribut=="")?("green"):("pink");
                break;
        }
    };
    $angka = 50;
    // var_dump($nilaiall);

    $js_nilai = json_encode($nilaiall);
    echo "<script> var nilai = ".$js_nilai."; </script>";
    if ($nilaiku==null or in_array(null, $nilaiku) or in_array("0", $nilaiku)) {
    ?>
    <div class="alert alert-danger background-danger">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <i class="icofont icofont-close-line-circled text-white"></i>
        </button>
        <strong>Nilai Invalid! <hr></strong>
        Nilai anda bermasalah, salah satu masalahnya:<br>
        <ul>
            <li>
                <code><i class="icofont icofont-bubble-right"></i> Anda belum dinilai.</code>
            </li>
            <li>
                <code><i class="icofont icofont-bubble-right"></i> Data nilai anda masih ada yang kosong.</code>
            </li>
            <li>
                <code><i class="icofont icofont-bubble-right"></i> HRD sedang menginput nilai, tetapi tombol <button class="btn btn-success btn-round btn-mini"><i class="icofont icofont-check-circled"></i>Simpan</button> belum ditekan.</code>
            </li>
        </ul>
    </div>
    <?php

    } else {
?>
<div class="row">
    <div class="col-sm-5"></div>
    <div class="col-sm-2">
      <select id="ttahun" name="tahun" class="form-control selectd col-sm-12">
        <option disabled selected>Pilih Tahun ..</option>
        <option value='All'>All</option>
            <?php foreach($tahun_kriteria as $tk){
               echo "<option value='{$tk['tahun']}'>{$tk['tahun']}</option>";
            } ;?>
        </select>
    </div>
    <div class="col-sm-5"></div>
</div>
<br>
<div class="row">
  <?php
    foreach ($tahun_kriteria as $tk) :
  ?>
    <div class="col-md-6 col-lg-12 <?=$tk['tahun'];?> Nil">
        <div class="card statustic-card">
            <div class="card-header">
                <h5>Nilai Keseluruhan</h5>
            </div>
            <div class="card-block text-center">
                <span class="d-block text-c-<?=gantiWarna($nilaiall['Nil'.$tk['tahun']]);?> f-36" id="nilaiKeseluruhan"><?= str_replace('.',',',$nilaiall['Nil'.$tk['tahun']]); ?></span>
                <?php
                  if($nilaiall['Nil'.$tk['tahun']]==$nilaiall['Max'.$tk['tahun']]){
                ?>
                <p class="m-b-0" id="terbaik">
                Terbaik <i class="feather icon-star-on" style="color:gold;"></i>
                &nbsp;</p>
              <?php
                }
              ?>
                <div class="progress">
                    <div class="progress-bar bg-c-<?=gantiWarna($nilaiall['Nil'.$tk['tahun']]);?>" style="width:100%"></div>
                </div>
            </div>
            <div class="card-footer bg-c-<?=gantiWarna($nilaiall['Nil'.$tk['tahun']]);?>">
                <h6 id="nilaiTerbaik" class="text-white m-b-0">Nilai Terbaik: <?=$nilaiall['Max'.$tk['tahun']];?></h6>
            </div>
        </div>
    </div>
    <?php
      endforeach;
    ?>
    <div class="col-md-6 col-lg-12 All Nil">
        <div class="card statustic-card">
            <div class="card-header">
                <h5>Nilai Keseluruhan</h5>
            </div>
            <div class="card-block text-center">
                <span class="d-block text-c-<?=gantiWarna($nilaiall['NilAll']);?> f-36" id="nilaiKeseluruhan"><?=str_replace('.',',',$nilaiall['NilAll']);?></span>
                <?php
                  if($nilaiall['NilAll']==$nilaiall['MaxAll']){
                ?>
                <p class="m-b-0" id="terbaik">
                Terbaik <i class="feather icon-star-on" style="color:gold;"></i>
                &nbsp;</p>
              <?php
                }
              ?>
                <div class="progress">
                    <div class="progress-bar bg-c-<?=gantiWarna($nilaiall['NilAll']);?>" style="width:100%"></div>
                </div>
            </div>
            <div class="card-footer bg-c-<?=gantiWarna($nilaiall['NilAll']);?>">
                <h6 id="nilaiTerbaik" class="text-white m-b-0">Nilai Terbaik: <?=$nilaiall['MaxAll'];?></h6>
            </div>
        </div>
    </div>
    <?php
        foreach ($all_kriteria as $ak):
    ?>
    <div class="col-md-6 col-lg-3 <?=substr($ak['kode'],1,4);?> All">
        <div class="card statustic-card">
            <div class="card-header">
                <h5><?=$ak['deskripsi'];?></h5>
            </div>
            <div class="card-block text-center">
                <span class="d-block text-c-<?=gantiWarna($nilaiku[$ak['kode']],$ak['atribut']);?> f-36"><?=$nilaiku[$ak['kode']];?></span>
                <p class="m-b-0">
                    <?php
                        if($nilaiku[$ak['kode']]==$nilai_pivot[$ak['kode']]){
                    ?>
                    Terbaik <i class="feather icon-star-on" style="color:gold;"></i>
                    <?php
                        }
                    ?>
                &nbsp;</p>
                <div class="progress">
                    <div class="progress-bar bg-c-<?=gantiWarna($nilaiku[$ak['kode']],$ak['atribut']);?>" style="width:<?=($ak['atribut']=="BEN")?($nilaiku[$ak['kode']]/$nilai_pivot[$ak['kode']]*100):($nilai_pivot[$ak['kode']]/$nilaiku[$ak['kode']]*100);?>%"></div>
                </div>
            </div>
            <div class="card-footer bg-c-<?=gantiWarna($nilaiku[$ak['kode']],$ak['atribut']);?>">
                <h6 class="text-white m-b-0">Terbaik: <?=$nilai_pivot[$ak['kode']];?> <span class="float-right"><?= ($ak['atribut']=="BEN")?"Benefit":"Cost"; ?></span></h6>
            </div>
        </div>
    </div>
    <?php
        endforeach;
        }
    ?>
    <button hidden id="buka" type="button" class="btn btn-info btn-outline-info waves-effect md-trigger" data-modal="modal-12">Just Me</button>
</div>
<div class="md-modal md-effect-12" id="modal-12">
    <div class="md-content">
        <h3><span class=" text-center" style="color:orange;">Perhatian!</span></h3>
        <div>
            <p style="text-transform: capitalize;"><h5><b>Data Nilai Anda tidak muncul</b>, dapat disebabkan oleh beberapa faktor berikut:</h5></p>
            <ul>
                <li><u>Teknis:</u>
                    <ul>
                        <li>Database tidak terpanggil dengan benar.</li>
                    </ul>
                </li>
                <li><u>Human Error:</u>
                    <ul>
                        <li>Anda belum dinilai.</li>
                        <li>Data nilai Anda masih kosong.</li>
                        <li>Anda sudah pernah dinilai, tetapi tombol <a class="btn btn-success btn-sm btn-round" disabled style="color:white;"><b>Simpan</b></a> belum ditekan.</li>
                    </ul>
                </li>
            </ul>
            <button type="button" class="btn btn-primary waves-effect md-close" onclick="">Close</button>
        </div>
    </div>
</div>
<div class="md-overlay"></div>
<script>
    $(document).ready(function(){
        $('.Nil').hide();
        $('.All.Nil').show();
        $('#ttahun').on('change',function(){
          var thisValue = '.'+$('#ttahun option:selected').val();
          $('.All').hide();
          $('.Nil').hide();
          $(thisValue).show();
          // $('#nilaiKeseluruhan').html(nilai.Max2019);
          console.log(thisValue);
        });

        $('.selectd').select2({
          placeholder: "Pilih salah satu .."
        });
    });

</script>
