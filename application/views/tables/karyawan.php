<?php
    $user = $this->session->userdata('user');
    extract($user);
?>

<div class="page-body">
    <!-- DOM/Jquery table start -->
    <div class="card">
        <div class="card-block">
            <div class="dt-responsive table-responsive">
                <table id="table-karyawan" class="table table-striped table-bordered nowrap">
                    <thead>
                        <tr>
                            <th>NIK</th>
                            <th>Nama</th>
                            <th>Jenis Kelamin</th>
                            <th>Tanggal Lahir</th>
                            <th>Agama</th>
                            <th>Nomor Handphone</th>
                            <th>Email</th>
                            <th>Alamat</th>
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
        var table_karyawan = $('#table-karyawan').DataTable({
            dom: 'Bfrtip',
            responsive: true,
            autoWidth: false,
            buttons: ['copy', 'csv', 'excel', 'pdf', 'print'],
            ajax:{
                url: "<?=base_url('data/karyawan');?>",
                type:"POST",
                dataSrc: ""
            },
            columns:[
            {data:"nik"},
            {data:"nama"},
            {data:"jenisKelamin",
             render: function(data,type,row){
                return (data=="L")?("Laki-Laki"):("Perempuan");
             }},
            {data:"tanggalLahir"},
            {data:"agama",
             render: function(data,type,row){
                switch(data){
                    case "ISL": return "Islam";
                    case "KK": return "Kristen Katholik";
                    case "KP": return "Kristen Protestan";
                    case "KO": return "Kristen Ortodoks";
                    case "HIN": return "Hindu";
                    case "BUD": return "Budha";
                    case "KON": return "Konghucu";
                    default : return "non";
                }
             }},
            {data:"nomorHandphone",
             render: function(data,type,row,meta){
                return "<a href='tel:"+data+"'>"+data+"</a>";
             }},
            {data:"email",
             render: function(data,type,row,meta){
                return "<a href='mailto:"+data+"'>"+data+"</a>";
             }},
            {data:"alamat",
             render: function(data,type,row,meta){
                var alamats = data.replace(/\s/g , "+");
                return "<a href='https://www.google.com/maps?q="+alamats+"' data-toggle='tooltip' title='Search Map' target='_blank'>"+data+"</a>";
             }}
          ]
        });

        $('#table-karyawan tbody').on('click', 'tr', function() {
            if(<?=$role;?>==1){
                if(table_karyawan.rows().count()!==0){
                    var data = table_karyawan.row(this).data();
                    $('#trigger-modal').click();
                    $('#load-modal-here').load('modal/karyawan/e/'+data.nik);
                    
                };
            }
        });
    })
</script>