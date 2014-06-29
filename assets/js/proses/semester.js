$(document).ready(function() {
    $('#tblSemester').dataTable();
    var table = $('#tblSemester').DataTable();

    $('#tblSemester tbody').on( 'click', 'tr', function () {
        if ( $(this).hasClass('selected') ) {
            $(this).removeClass('selected');
        }
        else {
            table.$('tr.selected').removeClass('selected');
            $(this).addClass('selected');
        }
    } );

    $('#tblSemester tbody').on('click', 'tr', function () {
        var tkode = $('td', this).eq(0).text();            
        var tketerangan = $('td', this).eq(1).text();

        $('#formTabelSemester').modal({
          show: true
        });

        document.getElementById("tkode").value=tkode;
        document.getElementById("tketerangan").value=tketerangan;
    } );

    $("#bSimpanSemester").click(function(){
        var kode=$("#tkode1").val();
        var keterangan=$("#tketerangan1").val();

        $.ajax({
            url: "TambahSemester",
            type: "POST",
            data:{
                kode:kode,
                keterangan:keterangan
            },
            cache: false,
            success: function(){
                
            }
        });
    });


    $("#bUbahSemester").click(function(){
        var kode=$("#tkode").val();
        var keterangan=$("#tketerangan").val();

        $.ajax({
            url: "UbahSemester",
            type: "POST",
            data:{
                kode:kode,
                keterangan:keterangan
            },
            cache: false,
            success: function(){
                
            }
        });
    });

    $("#bHapusSemester").click(function(){
        var kode=$("#tkode").val();        

        $.ajax({
            url: "HapusSemester",
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