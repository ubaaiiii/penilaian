<style type="text/css">
    .tooltips{
      position:relative;
    }

    .tooltiptexts{
      display:none;
      position:absolute; 
      z-index:10;
      border:1px;
      background-color:#eee;
      border-style:solid;
      border-width:1px;
      border-color:#00B5B8;
      border-radius: 6px;
      padding:3px;
      color:#00B5B8; 
      top:20px; 
      left:20px;
    }

    .tooltips:hover span.tooltiptexts{
      display:block;
    }
</style>

<?php 
    $user = $this->session->userdata('user');
    extract($user);

    $js_karyawan = json_encode($all_karyawan);
    $js_kriteria = json_encode($all_kriteria);
    $js_tahunKriteria = json_encode($tahun_kriteria);
    echo "<script> var karyawan = {$js_karyawan}; </script>";
    echo "<script> var kriteria = {$js_kriteria}; </script>";
    echo "<script> var tahunKriteria = {$js_tahunKriteria}; </script>";

?>
<div class="page-body">
    <!-- DOM/Jquery table start -->
    <div class="card">
        <div class="card-block">
          <div class="row">
            <div class="col-sm-5"></div>
            <div class="col-sm-2">
              <select id="ttahun" name="tahun" class="form-control selectd col-sm-12">
                <option disabled selected>Pilih Tahun ..</option>
                <option value='0'>All</option>
                <?php foreach($tahun_kriteria as $tk){
                  echo "<option value='K{$tk['tahun']}'>{$tk['tahun']}</option>";
                } ;?>
              </select>
            </div>
            <div class="col-sm-5"></div>
          </div>
            <div class="table-responsive dt-responsive">
                <table id="table-penilaian" class="table table-striped table-bordered nowrap">
                    <thead>
                        <tr>
                            <th rowspan="2">NIK</th>
                            <th rowspan="2">Nama</th>
                            <th colspan="<?=$num_kriteria;?>">Kriteria Nilai</th>
                        </tr>
                        <tr>
                            <?php
                                foreach($all_kriteria as $ak){
                                    echo "<th class='tooltips'>".$ak['kode']."<span class='tooltiptexts'> ".$ak['deskripsi']." (".$ak['atribut'].")</span></th>";
                                }
                            ?>
                        </tr>
                    </thead>
                    <tbody style="cursor:pointer;">
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<script>
    $(document).ready(function(){

        var all_kriteria = <?= json_encode($all_kriteria);?>;
        var kolom = [{"data":"nik"},{"data":"nik",render: function(data,type,row,meta){
            var found = karyawan.find(function(element) {
              return element.nik == data;
            });
            return found.nama;
         }}];
        $.each(all_kriteria,function(i,item){
            kolom.push({"data":item.kode,
             render: function(data,type,row){
                return (data=="0"||data===null)?("Belum dinilai"):(data);
             }});
        })
        // console.log(kolom);
        var table_penilaian = $('#table-penilaian').DataTable({
            dom: 'Bfrtip',
            responsive: true,
            autoWidth: false,
            buttons: ['copy', 'csv', 'excel', 'pdf', 'print'],
            ajax:{
                url: "<?=base_url('data/penilaian');?>",
                type:"POST",
                dataSrc: ""
            },
            columns: kolom
        });

        // console.log($("th:contains('K2019')").index()+2);

        $('#table-penilaian tbody').on('click', 'tr', function() {
           if(<?=$role;?>==1){
            if(table_penilaian.rows().count()!==0){
                var data = table_penilaian.row(this).data();
                $('#trigger-modal').click();
                $('#load-modal-here').load('modal/penilaian/e/'+data.nik);
                // console.log(data.nik);
                // setTimeout(function(){
                //     $('#nik').val(data.nik).change();
                //     // console.log(data.nik)
                // }, 500);
            };
          }
        });

        $('#ttahun').on('change',function(){
          table_penilaian.columns().visible(false);
          table_penilaian.columns([0,1]).visible(true);
          table_penilaian.columns("th:contains("+this.value+")").visible(true);
        });

        $('.selectd').select2({
          placeholder: "Pilih salah satu .."
        });
    })
</script>