$(document).ready(function() {
    $('#tblProdi').dataTable();
    var table = $('#tblProdi').DataTable();

    $('#tblProdi tbody').on( 'click', 'tr', function () {
        if ( $(this).hasClass('selected') ) {
            $(this).removeClass('selected');
        }
        else {
            table.$('tr.selected').removeClass('selected');
            $(this).addClass('selected');
        }
    } );

    $('#tblProdi tbody').on('click', 'tr', function () {
        var tkode = $('td', this).eq(0).text();            
        var tprodi = $('td', this).eq(1).text();

        $('#formTabelProdi').modal({
          show: true
        });

        document.getElementById("tkode").value=tkode;
        document.getElementById("tprodi").value=tprodi;
    } );

    $("#bSimpanProdi").click(function(){
        var kode=$("#tkode1").val();
        var prodi=$("#tprodi1").val();

        $.ajax({
            url: "TambahProdi",
            type: "POST",
            data:{
                kode:kode,
                prodi:prodi
            },
            cache: false,
            success: function(){
                
            }
        });
    });


    $("#bUbahProdi").click(function(){
        var kode=$("#tkode").val();
        var prodi=$("#tprodi").val();

        $.ajax({
            url: "UbahProdi",
            type: "POST",
            data:{
                kode:kode,
                prodi:prodi
            },
            cache: false,
            success: function(){
                
            }
        });
    });

    $("#bHapusProdi").click(function(){
        var kode=$("#tkode").val();        

        $.ajax({
            url: "HapusProdi",
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