<?php

    $js_tahunKriteria = json_encode($tahun_kriteria);
    echo "<script> var tahun_kriteria = {$js_tahunKriteria}; </script>";

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
                           echo "<option value='{$tk['tahun']}'>{$tk['tahun']}</option>";
                        } ;?>
                    </select>
                </div>
                <div class="col-sm-5"></div>
            </div>
            <div class="dt-responsive table-responsive">
                <table id="table-rangking" class="table table-striped table-bordered nowrap">
                    <thead>
                        <tr>
                            <th rowspan="2">Nik</th>
                            <th rowspan="2">Nama</th>
                            <th colspan="<?=$jumlah_tahun_kriteria;?>">Nilai Total Tahun</th>
                            <th colspan="<?=$jumlah_tahun_kriteria;?>" align="center">Rangking Tahun</th>
                        </tr>
                        <tr>
                            <?php
                                foreach($tahun_kriteria as $tk){
                                    echo "<th class='tooltips'>".$tk['tahun']."</th>";
                                }
                                foreach($tahun_kriteria as $tk){
                                    echo "<th class='tooltips'>".$tk['tahun']."</th>";
                                }
                            ?>
                        </tr>
                    </thead>
                    <tbody>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<button hidden id="trigger-modal" data-toggle="modal" data-target="#large-Modal"></button>
<script>
    $(document).ready(function(){

        var kolom = [{data:"nik"},
                    {data:"nama"}];

        $.each(tahun_kriteria,function(i,item){
            kolom.push({"data":"T"+item.tahun,
             render: function(data,type,row){
                return (data===0||data===null)?("Belum dinilai"):((1 * data).toFixed(2));
             }});
        })

        $.each(tahun_kriteria,function(i,item){
            kolom.push({"data":"R"+item.tahun,
             render: function(data,type,row){
                return (data===0||data===null)?("Belum dinilai"):(data);
             }});
        })

        var table_rangking = $('#table-rangking').DataTable({
            dom: 'Bfrtip',
            responsive: true,
            autoWidth: false,
            buttons: ['copy', 'csv', 'excel', 'pdf', 'print'],
            ajax:{
                url: "<?=base_url('data/rangking');?>",
                type:"POST",
                dataSrc: ""
            },
            columns:kolom
        });

        $('#ttahun').on('change',function(){
          table_rangking.columns().visible(false);
          table_rangking.columns([0,1]).visible(true);
          table_rangking.columns("th:contains("+this.value+")").visible(true);
        });

        $('.selectd').select2({
          placeholder: "Pilih salah satu .."
        });

    })
</script>