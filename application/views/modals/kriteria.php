<div class="modal-header">
	<h4 class="modal-title"><?=$judul_modal;?></h4>
	<button type="button" class="close" data-dismiss="modal" aria-label="Close">
	<span aria-hidden="true"><i class="icofont icofont-ui-close"></i></span>
	</button>
</div>
<?php
    $js_kriteria = json_encode($all_kriteria);
    $js_detail_kriteria = json_encode($detail_kriteria);
    echo "<script>
    		var kriteria = ".$js_kriteria.";\n
    		var detail_kriteria = ".$js_detail_kriteria.";\n
    	  </script>";
    if($sebagai=="tambah"){

        echo "  <script>
                    for(a=1;a<=kriteria.length+1;a++){
                        var cari_kode = 'K'+". date("Y") ."+('000'+a).slice(-3);
                        if(kriteria.find(function(e){return e.kode == cari_kode;})==undefined){
                    		$('#kode').val(cari_kode);
                    		break;
                    	}
                    }\n
                </script>";
    } else if($sebagai=="edit") {
    	echo "<script>
    				$('button#delete').removeAttr('hidden');
    				$('button#submit').html('Save Changes');
    		  </script>";
    } else if($sebagai=="view") {

    }
?>
<form id="form-kriteria">
	<fieldset id="field-kriteria">
		<div class="modal-body">
			<div class="card">
				<div class="card-block">
					<div class="form-group row">
			            <label class="col-sm-3 col-form-label">Kode</label>
			            <div class="col-sm-9">
			                <input required id="kode" name="kode" type="text" class="form-control" placeholder="ID Kriteria" readonly="">
			            </div>
			        </div>
			        <div class="form-group row">
		                <label class="col-sm-3 col-form-label">Deskripsi</label>
		                <div class="col-sm-9">
		                    <textarea required id="deskripsi" name="deskripsi" class="form-control max-textarea" maxlength="255" rows="2"></textarea>
		                </div>
		            </div>
		            <div class="form-group row">
		                <label class="col-sm-3 col-form-label">Bobot</label>
		                <div class="col-sm-9">
		                    <input required id="bobot" name="bobot" type="range" value="0" min="1" max="10" class="form-control">
		                </div>
		            </div>
		            <div class="form-group row">
		                <label class="col-sm-3 col-form-label">Atribut</label>
		                <div class="col-sm-9">
		                    <select required id="atribut" name="atribut" class="form-control selectd col-sm-12">
			                    <option disabled selected>Pilih Salah Satu ..</option>
			                    <option value="BEN">Benefit (Lebih besar lebih baik)</option>
			                    <option value="COS">Cost (Lebih kecil lebih baik)</option>
				            </select>
		                </div>
		            </div>
				</div>
			</div>
		</div>
	<div class="modal-footer">
		<button type="button" class="btn btn-default waves-effect" data-dismiss="modal">Cancel</button>
		<button id="delete" hidden type="button" class="btn btn-warning waves-effect">Delete</button>
		<button id="submit" type="submit" class="btn btn-primary waves-effect waves-light ">Save</button>
	</div>
</fieldset>
</form>

<script>
	$(document).ready(function(){
		if(detail_kriteria!==null){
			$('#kode').val(detail_kriteria.kode);
            $('#deskripsi').val(detail_kriteria.deskripsi);
            $('#bobot').val(detail_kriteria.bobot);
            $('#bobot').change();
            $('#atribut').val(detail_kriteria.atribut);
            $('#atribut').trigger('change');
			// console.log();
		}

		$('#form-kriteria').submit('click',function(e){
			e.preventDefault();
			var kode2 = $('#kode').val();
			var found = kriteria.find(function(e){
				return e.kode==kode2
			});
			if (found==undefined){
				var tipes = "save";
			} else {
				var tipes = "update";
			}
			var datanya = "tipe="+tipes+"&"+$(this).serialize();
			$('#submit').html("<i class='fa fa-spinner fa-pulse'></i> Processing...");
			$('#field-kriteria').attr('disabled',true);
			$('#field-kriteria select').attr('disabled',true);
			// console.log(datanya);
			$.ajax({
				url: "<?=base_url('proses/simpan/kriteria');?>",
				type:"post",
				data:datanya,
				success: function(data){
					if(data=="true"){

					// console.log(data);
						Swal.fire(
						  'Berhasil!',
						  'Data Kriteria Yang Baru Telah Tersimpan!',
						  'success'
						);
						$('#submit').attr('disabled',false);
						$('#table-kriteria').DataTable().ajax.reload();
						$('#table-penilaian').DataTable().ajax.reload();
						$('#large-Modal').modal('hide');
					} else {
						$('#submit').html("Save");
						$('#field-kriteria').attr('disabled',false);
						$('#field-kriteria select').attr('disabled',false);
						Swal.fire(
							'Gagal!',
							'Data yang dikirim salah!',
							'error'
						);
					}
				}
			})
		});

		$('button#delete').click(function(e){
			e.preventDefault();
			var kode2 = $('#kode').val();
			Swal.fire({
			  title: 'Yakin ingin menghapus?',
			  text: "Data tidak akan dapat dikembalikan!",
			  type: 'warning',
			  showCancelButton: true,
			  confirmButtonText: 'Ya, Hapus data!',
			  cancelButtonText: 'Tidak, batalkan!',
			  reverseButtons: true
			}).then((result) => {
			  if (result.value) {
			  	$.ajax({
					url: "<?=base_url('proses/simpan/kriteria');?>",
					type:"post",
					data:"tipe=delete&kode="+kode2,
					success: function(data){
						console.log(data);
						Swal.fire(
					      'Berhasil!',
					      'Kriteria <strong>'+kode2+'</strong> telah dihapus.',
					      'success'
					    );
						$('#table-kriteria').DataTable().ajax.reload();
						$('#large-Modal').modal('hide');
					}
				});
			  } else if (
			    /* Read more about handling dismissals below */
			    result.dismiss === Swal.DismissReason.cancel
			  ) {
			    Swal.fire(
			      'Cancelled',
			      'Kriteria <strong>'+kode2+'</strong> tidak jadi dihapus :)',
			      'error'
			    );
			  }
			})
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
