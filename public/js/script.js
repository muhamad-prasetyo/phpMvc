$(function() {

    // untuk bagian clik tambah data
    $('.tombolTambahData').on('click', function() {
        $('#formModalLabel').html('Tambah Data Murid');
        // untuk button
        $('.modal-footer button[type=submit]').html('Tambah Data');
    });



    // untuk bagian click edit 
    $('.tampilModalEdit').on('click', function(){
        
        $('#formModalLabel').html('Edit Data Murid');

        // untuk button
        $('.modal-footer button[type=submit]').html('Ubah Data');
        
        // untuk mengubah action edit 
        $('.modal-body form').attr('action', 'http://localhost/phpmvc/public/murid/edit');

        const id = $(this).data('id');
        // console.log(id);

        
        $.ajax({
            url: 'http://localhost/phpmvc/public/murid/getedit',
            data: {id : id},
            method: 'post',
            dataType: 'json',
            success: function(data) {
               $('#nama').val(data.nama);
               $('#nim').val(data.nim);
               $('#email').val(data.email);
               $('#materi').val(data.materi);
               $('#id').val(data.id);
           
            }
        });

    });


});