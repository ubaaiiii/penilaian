<?php
    $js_tahunKriteria = json_encode($tahun_kriteria);
    echo "<script> var tahunKriteria = {$js_tahunKriteria}; </script>";

    $user = $this->session->userdata('user');
    extract($user);
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
            <div class="dt-responsive table-responsive">
                <table id="table-kriteria" class="table table-striped table-bordered nowrap">
                    <thead>
                        <tr>
                            <th>Kode</th>
                            <th>Deskripsi</th>
                            <th>Bobot</th>
                            <th>Atribut</th>
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

        var table_kriteria = $('#table-kriteria').DataTable({
            dom: 'Bfrtip',
            responsive: true,
            autoWidth: false,
            buttons: ['copy', 'csv', 'excel', 'pdf', 'print'],
            ajax:{
                url: "<?=base_url('data/kriteria');?>",
                type:"POST",
                dataSrc: ""
            },
            columns:[
            {data:"kode"},
            {data:"deskripsi"},
            {data:"bobot"},
            {data:"atribut",
             render: function(data,type,row){
                return (data=="BEN")?("<label data-toggle='tooltip' class='tooltip-effect-1' title='Lebih Besar Lebih Baik'>Benefit</label>"):("<label data-toggle='tooltip' title='Lebih Kecil Lebih Baik'>Cost</label>");
             }}
          ]
        });

        $('#table-kriteria tbody').on('click', 'tr', function() {
            if(<?=$role;?>==1){
                if(table_kriteria.rows().count()!==0){
                    var data = table_kriteria.row(this).data();
                    $('#load-modal-here').load('modal/kriteria/e/'+data.kode);
                    $('#trigger-modal').click();
                };
            }
        });

        $('#ttahun').on('change',function(){
          table_kriteria.columns(0).search(this.value).draw();
        });

        $('.selectd').select2({
          placeholder: "Pilih salah satu .."
        });
    })
</script>