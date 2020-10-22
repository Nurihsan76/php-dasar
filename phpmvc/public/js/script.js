$(function() {
    
    $('.tomboltambahdata').on('click', function () {
       
        $('#formmodallabel').html('tambah data santri');
        $('.modal-footer button[type=submit]').html('tambah data');

    });

    $('.tampilmodalubah').on('click', function () {
       
        $('#formmodallabel').html('ubah data santri');
        $('.modal-footer button[type=submit]').html('ubah data');
        $('.modal-body form').attr('action', 'http://localhost/php-dasar/phpmvc/public/santri/ubah');

        const id = $(this).data('id');
        $.ajax({
            url: 'http://localhost/php-dasar/phpmvc/public/santri/getubah',
            data: {id : id},
            method: 'post',
            dataType: 'json',
            success: function(data){
                $('#nama').val(data.nama);
                $('#asal').val(data.asal);
                $('#umur').val(data.umur);
                $('#id').val(data.id);


            }
        })

    });

} );