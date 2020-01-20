<div class="modal-header">
	<h4 class="modal-title"><?=$judul_modal;?></h4>
	<button type="button" class="close" data-dismiss="modal" aria-label="Close">
	<span aria-hidden="true"><i class="icofont icofont-ui-close"></i></span>
	</button>
</div>
<?php
    $user = $this->session->userdata('user');
    extract($user);

    $js_karyawan = json_encode($all_karyawan);
    $js_detail_karyawan = json_encode($karyawanNik);
    echo "<script>
            var karyawan = ".$js_karyawan.";\n
            var detail_karyawan = ".$js_detail_karyawan.";\n
          </script>";
    if($sebagai=="tambah"){
        echo "  <script>
                    var today = new Date();
                    var bulan = today.getMonth()+1;
                    var tahun = today.getFullYear();
                    for(a=1;a<=karyawan.length;a++){
                        var cari_nik = tahun+('0'+bulan).slice(-2)+('000'+a).slice(-4);
                        if(karyawan.some(data => data.nik === cari_nik)==false){
                            $('#nik').val(cari_nik);
                            break;
                        }
                    }\n
                </script>";
    } else if($sebagai=="editD") {
			if ($karyawanNik['nik']==$nik){
				echo "<script>
                    $('#field-user').removeAttr('style');
              </script>";
			}
        echo "<script>
                    $('button#delete').removeAttr('hidden');
                    $('button#submit').html('Save Changes');
              </script>";
    } else if($sebagai=="editP") {
        echo "<script>
                    $('button#submit').html('Save Changes');
                    $('#field-user').removeAttr('style');
              </script>";
    } else if($sebagai=="view") {
        echo "<script>
                    $('#field-karyawan').prop('disabled',true);
                    $('#agama').prop('disabled',true);
                    $('#submit').prop('hidden',true);
                    $('button#cancel').html('Close');
              </script>";
    }
?>

<script>
    function togglePassword() {
        var x = document.getElementById('password');
        if (x.type === "password") {
            x.type = "text";
            $('#eye').removeClass('icon-eye');
            $('#eye').addClass('icon-eye-off');
        } else {
            x.type = "password";
            $('#eye').removeClass('icon-eye-off');
            $('#eye').addClass('icon-eye');
        }
    }
</script>
<fieldset id="field-karyawan">
<form id="form-karyawan">
    <fieldset id="field-karyawan">
        <div class="modal-body">
        	<div class="card">
        		<div class="card-block">
        			<div class="form-group row">
        	            <label class="col-sm-3 col-form-label">NIK</label>
        	            <div class="col-sm-9">
        	                <input required id="nik" name="nik" type="text" class="form-control" placeholder="Nomor Induk Karyawan" readonly="">
        	            </div>
        	        </div>
        	        <div class="form-group row">
                        <label class="col-sm-3 col-form-label">Nama Lengkap</label>
                        <div class="col-sm-9">
                            <input required id="nama" name="nama" type="text" class="form-control" placeholder="Nama Lengkap" autocomplete="off" style="text-transform: capitalize;" maxlength="50">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-3 col-form-label">Jenis Kelamin</label>
                        <div class="col-sm-9 form-radio">
                            <div class="group-add-on">
                                <div class="radio radiofill radio-inline">
                                    <label>
                                        <input required id="L" type="radio" name="jenisKelamin" value="L"><i class="helper"></i> Laki-Laki
                                    </label>
                                </div>
                                <div class="radio radiofill radio-inline">
                                    <label>
                                        <input required id="P" type="radio" name="jenisKelamin" value="P"><i class="helper"></i> Perempuan
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-3 col-form-label">Tanggal Lahir</label>
                        <div class="col-sm-9">
                            <input required id="tanggalLahir" name="tanggalLahir" class="form-control" type="date">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-3 col-form-label">Agama</label>
                        <div class="col-sm-9">
                            <select required id="agama" name="agama" class="form-control selectd col-sm-12">
                                <option disabled selected>Pilih Salah Satu ..</option>
        	                    <option value="ISL">Islam</option>
        	                    <option value="KK">Kristen Katholik</option>
        	                    <option value="KP">Kristen Protestan</option>
        	                    <option value="HIN">Hindu</option>
        	                    <option value="BUD">Budha</option>
        	                    <option value="KON">Konghucu</option>
        		            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-3 col-form-label">Nomor Handphone</label>
                        <div class="col-sm-9">
                            <input required id="nomorHandphone" name="nomorHandphone" type="text" class="form-control" placeholder="Nomor Handphone" autocomplete="off" maxlength="13">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-3 col-form-label">Email</label>
                        <div class="col-sm-9">
                            <input required id="email" name="email" type="email" class="form-control" placeholder="Email" autocomplete="off">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-3 col-form-label">Alamatnya</label>
                        <div class="col-sm-9">
                            <textarea required id="alamat" name="alamat" class="form-control max-textarea" maxlength="255" rows="4"></textarea>
                        </div>
                    </div>
        			<fieldset id="field-user" style="display: none;">
                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Username</label>
                            <div class="col-sm-9">
                                <input id="username" name="username" type="text" class="form-control" placeholder="Username" autocomplete="off">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Password</label>
                            <div class="col-sm-9 input-group">
                                <input id="password" name="password" type="password" class="form-control" placeholder="Password" autocomplete="off">
                                <span class="input-group-addon" onclick="togglePassword();"><i id="eye" class="feather icon-eye"></i></span>
                            </div>
                        </div>
                    </fieldset>
                    <div id="row-role" class="form-group row">
                        <label class="col-sm-3 col-form-label">Sebagai</label>
                        <div class="col-sm-9">
                            <select id="role" name="role" class="form-control selectd col-sm-12">
                                <option disabled selected>Pilih Salah Satu ..</option>
                                <option value="1">Penilai (HRD)</option>
                                <option value="0">Karyawan</option>
                            </select>
                        </div>
                    </div>
        		</div>
        	</div>
        </div>
    </fieldset>
    <div class="modal-footer">
    	<button id="cancel" type="button" class="btn btn-default waves-effect" data-dismiss="modal">Cancel</button>
        <button hidden id="delete" type="button" class="btn btn-warning waves-effect">Delete</button>
    	<button id="submit" type="submit" class="btn btn-primary waves-effect waves-light ">Save</button>
    </div>
</form>
</fieldset>
<script>
	$(document).ready(function(){
        if(<?=$role;?>===1){
            $('#row-role').show();
        } else {
            $('#row-role').hide();
        }
        if(detail_karyawan!==null){
            var mydate = detail_karyawan.tanggalLahir;
            var str_date = mydate.toString("yyyy-mm-dd");
            $('#nik').val(detail_karyawan.nik);
            $('#nama').val(detail_karyawan.nama);
            (detail_karyawan.jenisKelamin=="L")?($('#L').prop("checked", true)):($('#P').prop("checked", true));
            $('#agama').val(detail_karyawan.agama);
            $('#agama').trigger('change');
            // console.log(data.tanggalLahir);
            $('#tanggalLahir').val(detail_karyawan.tanggalLahir);
            $('#nomorHandphone').val(detail_karyawan.nomorHandphone);
            $('#email').val(detail_karyawan.email);
            $('#alamat').val(detail_karyawan.alamat);
            $('#username').val(detail_karyawan.username);
            $('#password').val(detail_karyawan.password);
            $('#role').val(detail_karyawan.role);
            $('#role').change();

        }

        $('#form-karyawan').submit('click',function(e){
            e.preventDefault();
            var nik2 = $('#nik').val();
            var nama2 = $('#nama').val();
            var email2 = $('#email').val();
            nama2 = nama2.toLowerCase().replace(/\b[a-z]/g, function(letter) {
                return letter.toUpperCase();
            });
            var found = karyawan.find(function(e){
                return e.nik==nik2;
            });
            if (found==undefined){
                var tipes = "save";
            } else {
                var tipes = "update";
            }
						var kirimData = "tipe="+tipes+"&"+$(this).serialize();
            // console.log(kirimData);
            $('#field-karyawan').attr('disabled',true);
						$('#field-karyawan select').attr('disabled',true);
            $('#submit').html("<i class='fa fa-spinner fa-pulse'></i> Processing...");
            $.ajax({
                url: "<?=base_url('proses/simpan/karyawan');?>",
                type:"post",
                data: kirimData,
                success: function(data1){
                    var datanya1 = JSON.parse(data1);
										// console.log(datanya1);
										if(datanya1.hasil==="adaUsernames"){
                        Swal.fire(
                          'Cancelled',
                          'Username <strong>'+$('#username').val()+'</strong> sudah digunakan!',
                          'error'
                        );
												$('#field-karyawan').attr('disabled',false);
												$('#field-karyawan select').attr('disabled',false);
						            $('#submit').html("Save");
                    } else if(datanya1.hasil==="adaUsername"){
                        Swal.fire(
                          'Cancelled',
                          'Karyawan <strong>'+nama2+'</strong> sudah ada!',
                          'error'
                        );
												$('#field-karyawan').attr('disabled',false);
												$('#field-karyawan select').attr('disabled',false);
						            $('#submit').html("Save");
                    } else if(datanya1.hasil==="adaEmail"){
                        Swal.fire(
                          'Cancelled',
                          'Email <strong>'+email2+'</strong> sudah terpakai!',
                          'error'
                        );
												$('#field-karyawan').attr('disabled',false);
												$('#field-karyawan select').attr('disabled',false);
												$('#submit').html("Save");
                    } else {
                        var datanya = JSON.parse(data1);
												// console.log(datanya);
                        Swal.fire(
                          'Berhasil!',
                          'Data Karyawan <strong>'+nama2+'</strong> Telah Tersimpan!',
                          'success'
                        );
                        $('#table-karyawan').DataTable().ajax.reload();
                        $('#large-Modal').modal('hide');
                        if(tipes=="save"){
                            $.ajax({
                                url : "<?=base_url('send/mail/create');?>",
                                type: "post",
                                data: datanya,
                                success: function(datas){
                                    $.growl.notice({ title: "Success!", message: "Informasi Akun Telah Dikirim ke Email "+email2+"." });
                                }
                            })
                        }
                    }
                }

            })

        });

        $('button#delete').click(function(e){
            e.preventDefault();
            var nik2 = $('#nik').val();
            var nama2 = $('#nama').val();
            Swal.fire({
              title: 'Yakin ingin menghapus?',
              html: "Data <strong>"+nama2+"</strong> tidak akan dapat dikembalikan!",
              type: 'warning',
              showCancelButton: true,
              confirmButtonText: 'Ya, Hapus data!',
              cancelButtonText: 'Tidak, batalkan!',
              reverseButtons: true
            }).then((result) => {
              if (result.value) {
								$('#delete').html("<i class='fa fa-spinner fa-pulse'></i> Processing...");
								$('#field-karyawan').attr('disabled',true);
								$('#field-karyawan select').attr('disabled',true);
                $.ajax({
                    url: "<?=base_url('proses/simpan/karyawan');?>",
                    type:"post",
                    data:"tipe=delete&nik="+nik2,
                    success: function(data){
                        Swal.fire(
                          'Berhasil!',
                          'Karyawan <strong>'+nama2+'</strong> telah dihapus.',
                          'success'
                        );
                        $('#table-karyawan').DataTable().ajax.reload();
												$('#large-Modal').modal('hide');
                    }
                });
              } else if (
                /* Read more about handling dismissals below */
                result.dismiss === Swal.DismissReason.cancel
              ) {
								$('#delete').html("Delete");
                Swal.fire(
                  'Cancelled',
                  'Karyawan <strong>'+nik2+'</strong> tidak jadi dihapus :)',
                  'error'
                );
              }

            })
        })

		$('.selectd').select2({
			placeholder: "Pilih salah satu .."
		});
		$('input[maxlength]').maxlength({
			threshold: 100
		});
        $('textarea[maxlength]').maxlength({
            threshold: 255
        })
	})
</script>
