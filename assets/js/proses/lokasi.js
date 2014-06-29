$(document).ready(function() {
    $('#tblLokasi').dataTable();
    var table = $('#tblLokasi').DataTable();

    $('#tblLokasi tbody').on( 'click', 'tr', function () {
        if ( $(this).hasClass('selected') ) {
            $(this).removeClass('selected');
        }
        else {
            table.$('tr.selected').removeClass('selected');
            $(this).addClass('selected');
        }
    } );

    $('#tblLokasi tbody').on('click', 'tr', function () {
        var tkode = $('td', this).eq(0).text();            
        var tlokasi = $('td', this).eq(1).text();

        $('#formTabelLokasi').modal({
          show: true
        });

        document.getElementById("tkode").value=tkode;
        document.getElementById("tlokasi").value=tlokasi;
    } );

    $("#bSimpanLokasi").click(function(){
        var kode=$("#tkode1").val();
        var lokasi=$("#tlokasi1").val();

        $.ajax({
            url: "TambahLokasi",
            type: "POST",
            data:{
                kode:kode,
                lokasi:lokasi
            },
            cache: false,
            success: function(){
                
            }
        });
    });


    $("#bUbahLokasi").click(function(){
        var kode=$("#tkode").val();
        var lokasi=$("#tlokasi").val();

        $.ajax({
            url: "UbahLokasi",
            type: "POST",
            data:{
                kode:kode,
                lokasi:lokasi
            },
            cache: false,
            success: function(){
                
            }
        });
    });

    $("#bHapusLokasi").click(function(){
        var kode=$("#tkode").val();        

        $.ajax({
            url: "HapusLokasi",
            type: "POST",
            data:{
                kode:kode
            },
            cache: false,
            success: function(){
                
            }
        });
    });

} );