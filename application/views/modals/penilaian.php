<div class="modal-header">
    <h4 class="modal-title"><?=$judul_modal;?></h4>
    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
    <span aria-hidden="true"><i class="icofont icofont-ui-close"></i></span>
    </button>
</div>
<?php
    $js_karyawan = json_encode($all_karyawan);
    $js_detail_karyawan = json_encode($detail_karyawan);
    $js_kriteria = json_encode($all_kriteria);
    $js_nilai = json_encode($list_nilai);
    echo "<script>var list_nilai = ".$js_nilai.";\n</script>";
    echo "<script>var detail_karyawan = ".$js_detail_karyawan.";\n</script>";
    echo "<script>
            function helps(e,clicked_object){
                e.preventDefault();
                var kode = clicked_object.getAttribute('data-kode');
                var deskripsi = clicked_object.getAttribute('data-deskripsi');
                var bobot = clicked_object.getAttribute('data-bobot');
                var atribut = clicked_object.getAttribute('data-atribut');
                if (atribut=='BEN'){
                    var strings = '<strong>Benefit</strong> (Lebih besar lebih baik)';
                } else {
                    var strings = '<strong>Cost</strong> (Lebih kecil lebih baik)';
                }
                Swal.fire(
                    '<strong>'+deskripsi+'</strong>',
                    '<table align=\'center\'><tr align=\'left\'><td>Kode</td><td>&nbsp;:&nbsp;</td><td>'+kode+'</td></tr><tr align=\'left\'><td>Tipe</td><td>&nbsp;:&nbsp;</td><td>'+strings+'</td></tr><tr align=\'left\'><td>Bobot</td><td>&nbsp;:&nbsp;</td><td>[<b>'+bobot+'/10</b>]</td></tr></table>',
                    'info'
                );
            }
          </script>";
    if ($sebagai=="tambah"){
        $niknya = $karyawan_belum_dinilai;
        $namanya = $karyawan_belum_dinilais;
    } else if ($sebagai=="edit"){
        $niknya = $all_karyawan;
        $namanya = $all_karyawans;
        echo "<script>
                $('#delete').removeAttr('hidden');
                $('#form-nilai select').attr('disabled',true);
              </script>";
    } else if ($sebagai=="view"){

    }
?>
<script>
    function bukatahun(args) {
        if (args == 0){
            $('#tahun').val(1).change();
            $('#tahun').select2();
        }
    }
</script>

<form id="form-nilai">
    <fieldset id="field-nilai">
        <div class="modal-body">
            <div class="card">
                <div class="card-block">
                    <div class="form-group row">
                        <label class="col-sm-3 col-form-label">NIK</label>
                        <div class="col-sm-9">
                            <select id="nik" name="nik" class="form-control selectd col-sm-12" required>
                                <option value="0" disabled selected>Nomor Induk Karyawan ..</option>
                                <?php foreach($niknya as $akar): ?>
                                <option value="<?=$akar['nik'];?>" value2="<?=$akar['nama'];?>"><?=$akar['nik'];?></option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-3 col-form-label">Nama Lengkap</label>
                        <div class="col-sm-9">
                            <select id="nama" class="form-control selectd col-sm-12" required>
                                <option value="0" disabled selected>Nama Lengkap ..</option>
                                <?php foreach($namanya as $akars): ?>
                                <option value="<?=$akars['nama'];?>" value2="<?=$akars['nik'];?>"><?=$akars['nama'];?></option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-sm-5"></div>
                        <div class="col-sm-2">
                            <select id="tahun" class="form-control selectd col-sm-3 float-right" required>
                                <option value="0" disabled selected>Tahun</option>
                                <option value=".all">All</option>
                                <?php foreach($tahun_kriteria as $thk): ?>
                                <option value=".K<?=$thk['tahun'];?>"><?=$thk['tahun'];?></option>
                                <?php endforeach; ?>
                            </select>
                                    <!-- <?php foreach ($tahun_kriteria as $thk) : ?>
                                    <a class="dropdown-item waves-light waves-effect"><?=$thk['tahun'];?></a>
                                    <?php endforeach; ?> -->
                        </div>
                        <div class="col-sm-5"></div>
                    </div>
                    <div class="form-group row kesini">
                        <?php foreach($all_kriteria as $ak): ?>
                            <label  class="col-sm-3 col-form-label K<?=substr($ak['kode'],1,4);?> all" data-toggle="tooltip" title="?" style="cursor:pointer;display:none;"><?=$ak['kode'];?>
                                <button hidden onclick="helps(event,this);" class="form-control" data-kode="<?=$ak['kode'];?>" data-deskripsi="<?=$ak['deskripsi'];?>" data-bobot="<?=$ak['bobot'];?>" data-atribut="<?=$ak['atribut'];?>"></button>&nbsp;
                            <i style="position:absolute;top:0px;" class="feather icon-info"></i></label>
                            <div style="display:none;" class="col-sm-9 K<?=substr($ak['kode'],1,4);?> all">
                                <input id="nil<?=$ak['kode'];?>" name="nil<?=$ak['kode'];?>" type="range" value="0" min="1" max="100" class="nilai-range form-control" required>
                            </div>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>
        </div>
    </fieldset>
    <div class="modal-footer">
        <button id="cancel" type="button" class="btn btn-default waves-effect" data-dismiss="modal">Cancel</button>
        <button hidden id="delete" type="button" class="btn btn-warning waves-effect" data-dismiss="modal">Delete</button>
        <button hidden id="submit" type="submit" class="btn btn-primary waves-effect waves-light">Save</button>
    </div>
</form>
<script>
    $(document).ready(function(){
        if(detail_karyawan!==null){
            $('#nik').val(detail_karyawan.nik);
            $('#nama').val(detail_karyawan.nama);
            setTimeout(function(){$('#nik').select2().change();});
            // console.log();
        }

        $('#form-nilai').submit('click',function(e){
            e.preventDefault();
            $("#field-nilai").prop('disabled',true);
            $("#form-nilai #submit").html("<i class='fa fa-spinner fa-pulse'></i> Processing...");
            var nik2 = $('#nik').val();
            // console.log(list_nilai);
            var found = list_nilai.find(function(e){
                return e.nik==nik2
            });
            if (found==undefined){
                var tipes = "save";
            } else {
                var tipes = "update";
            }
            var dataForm = "tipe="+tipes+"&"+$(this).serialize();
            console.log($('#form-nilai').serialize());
            $.ajax({
                url: "<?=base_url('proses/simpan/nilai');?>",
                type:"post",
                data: dataForm,
                success: function(data){
                    Swal.fire(
                      'Berhasil!',
                      'Data Nilai Yang Baru Telah Tersimpan!',
                      'success'
                    );
                    console.log(data);
                    $('#table-penilaian').DataTable().ajax.reload();
                    $('#large-Modal').modal('hide');
                }
            });
        });

        $('#delete').on('click',function(e){
            e.preventDefault();
            var datanya = "tipe=delete&"+$('#form-nilai').serialize();
            $("#field-nilai").attr('disabled',true);
            $("#form-nilai #submit").html("<i class='fa fa-spinner fa-pulse'></i> Processing...");
            var nik2 = $('#nik').val();
            console.log(datanya);
            $.ajax({
                url: "<?=base_url('proses/simpan/nilai');?>",
                type:"post",
                data:datanya,
                success: function(data){
                    Swal.fire(
                      'Berhasil!',
                      'Data Nilai '+nik2+' Telah Dihapus!',
                      'success'
                    );
                    console.log(data);
                    $('#table-penilaian').DataTable().ajax.reload();
                    $('#large-modal').modal('hide');
                }
            });
        });

        $('#tahun').on('change',function(){
            var thisValue = $('#tahun option:selected').val();
            var nikValue = $('#nik option:selected').val()
            $('.all').css('display','none');
            // console.log($('#nik option:selected').val());
            if($('#nik option:selected').val()!=="0"){
              $('#submit').removeAttr('hidden');
            }
            $(thisValue).css('display','');
        });


        $('#nik').on('change',function(){
            // $('#nama').select2($('#nik option:selected').attr('value2'),null);
            var nikValue = $('#nik option:selected').val();
            var tahunValue = $('#tahun option:selected').val();
            bukatahun(tahunValue);
            $('#nama').val($('#nik option:selected').attr('value2'));
            $('#nama').select2();
            $('#tahun').val('.all');
            $('#tahun').select2().change();
            // console.log(thisValue);

            $.ajax({
                url : '<?=base_url('cari/nilai');?>',
                data: 'nik='+nikValue,
                success: function(data){

                    var objData = JSON.parse(data);

                    if (objData.length!=0){
                        // console.log(objData);
                        $.each(objData,function(i,v){
                            // console.log(i+':'+v.nilai);
                            if(v.nilai==null){
                                $('#nil'+v.kriteria).val("0").change();
                            } else {
                                $('#nil'+v.kriteria).val(v.nilai).change();
                            }
                        });
                    } else {
                        // console.log(objData);
                        $('input.nilai-range').val('0').change();
                    }
                }
            });
        });

        $('#nama').on('change',function() {
            var nikValue = $('#nik option:selected').val();
            var tahunValue = $('#tahun option:selected').val();
            bukatahun(tahunValue);
            $('#nik').val($('#nama option:selected').attr('value2'));
            $('#nik').select2().change();
            $('#tahun').val('.all');
            $('#tahun').select2().change();
        });

        $('#nama').on('click',function() {
            $('#nik').select2.change();
        });

        $('#nik').on('click',function() {
            $('#nik').select2.change();
        });

        $('#tahun').on('click',function() {
            $('#nik').select2.change();
        });

        $('.selectd').select2({
            placeholder: "Pilih salah satu .."
        });
        $('input[maxlength]').maxlength({
            threshold: 100
        });
        $('textarea[maxlength]').maxlength({
            threshold: 255
        })
        $('input[type="range"]').rangeslider({
            polyfill : false,
            onInit : function() {
                this.output = $( '<div class="range-output" />' ).insertAfter( this.$range ).html( this.$element.val() );
            },
            onSlide : function( position, value ) {
                this.output.html( value );
            }
        });


    })
</script>
