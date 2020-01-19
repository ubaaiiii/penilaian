<?php
    $user = $this->session->userdata('user');
    extract($user);

    // $nilai = $this->db->get()->result_array();

    $nilai = "";
    // $nilai = $this->db->query('SELECT
    //                             a.nik,a.kriteria,a.nilai,b.deskripsi,c.pivot
    //                            FROM
    //                             list_nilai a
    //                            LEFT JOIN
    //                             list_kriteria b on b.kriteria = a.kriteria
    //                            LEFT JOIN
    //                             nilai_pivot c on c.kriteria = a.kriteria
    //                            WHERE
    //                             a.nik = ?',$nik)->result_array();
    // $nilai = $this->db->get_where('list_nilai',array('nik'=>$nik))->result_array();
    // var_dump($nilai);
    function gantiWarna($angka){
        switch(true){
            case $angka <= 25:
                return "pink";
                break;
            case $angka <= 50:
                return "yellow";
                break;
            case $angka <= 75:
                return "green";
                break;
            case $angka <= 100:
                return "blue";
                break;
        }
    };
    $angka = 50;

    if(!empty($num_kriteria) or $num_kriteria=""){
        
?>
<div class="row">
    <div class="col-md-6 col-lg-12">
        <div class="card statustic-card">
            <div class="card-header">
                <h5>Nilai Keseluruhan</h5>
            </div>
            <div class="card-block text-center">
                <span class="d-block text-c-green f-36">90</span>
                <p class="m-b-0">
                Terbaik <i class="feather icon-star-on" style="color:gold;"></i>
                &nbsp;</p>
                <div class="progress">
                    <div class="progress-bar bg-c-green" style="width:90%"></div>
                </div>
            </div>
            <div class="card-footer bg-c-green">
                <h6 class="text-white m-b-0">Terbaik: 90</h6>
            </div>
        </div>
    </div>
    <?php
        foreach ($all_kriteria as $ak):
    ?>
    <div class="col-md-6 col-lg-3">
        <div class="card statustic-card">
            <div class="card-header">
                <h5><?=$ak['deskripsi'];?></h5>
            </div>
            <div class="card-block text-center">
                <span class="d-block text-c-green f-36">85</span>
                <p class="m-b-0">
                    Terbaik <i class="feather icon-star-on" style="color:gold;"></i>
                &nbsp;</p>
                <div class="progress">
                    <div class="progress-bar bg-c-green" style="width:85%"></div>
                </div>
            </div>
            <div class="card-footer bg-c-green">
                <h6 class="text-white m-b-0">Terbaik: 85 <span class="float-right"><?= ($ak['atribut']=="BEN")?"Benefit":"Cost"; ?></span></h6>
            </div>
        </div>
    </div>
    <?php
        endforeach;
        } else {
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
                <code><i class="icofont icofont-bubble-right"></i> Data nilai anda masih kosong.</code>
            </li>
            <li>
                <code><i class="icofont icofont-bubble-right"></i> HRD sedang menginput nilai, tetapi tombol <button class="btn btn-success btn-round btn-mini"><i class="icofont icofont-check-circled"></i>Simpan</button> belum ditekan.</code>
            </li>
        </ul>
    </div>
    <?php
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
    });

</script>