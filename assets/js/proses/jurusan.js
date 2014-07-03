$(document).ready(function() {
    $('#tblJurusan').dataTable();
    var table = $('#tblJurusan').DataTable();

    $('#tblJurusan tbody').on( 'click', 'tr', function () {
        if ( $(this).hasClass('selected') ) {
            $(this).removeClass('selected');
        }
        else {
            table.$('tr.selected').removeClass('selected');
            $(this).addClass('selected');
        }
    } );

    $('#tblJurusan tbody').on('click', 'tr', function () {
        var tkode = $('td', this).eq(0).text();            
        var tjurusan = $('td', this).eq(1).text();
        var tjenjang = $('td', this).eq(2).text();            
        var tprodi = $('td', this).eq(3).text();

        $('#formTabelJurusan').modal({
          show: true
        });

        document.getElementById("tkode").value=tkode;
        document.getElementById("tjurusan").value=tjurusan;
        document.getElementById("tjenjang").value=tjenjang;
        document.getElementById("tprodi").value=tprodi;
    } );

    $("#bSimpanJurusan").click(function(){
        var kode=$("#tkode1").val();
        var jurusan=$("#tjurusan1").val();
        var jenjang=$("#tjenjang1").val();
        var prodi=$("#tprodi1").val();

        $.ajax({
            url: "TambahJurusan",
            type: "POST",
            data:{
                kode:kode,
                jurusan:jurusan,
                jenjang:jenjang,
                prodi:prodi
            },
            cache: false,
            success: function(){
                
            }
        });
    });


    $("#bUbahJurusan").click(function(){
        var kode=$("#tkode").val();
        var jurusan=$("#tjurusan").val();
        var jenjang=$("#tjenjang").val();
        var prodi=$("#tprodi").val();

        $.ajax({
            url: "UbahJurusan",
            type: "POST",
            data:{
                kode:kode,
                jurusan:jurusan,
                jenjang:jenjang,
                prodi:prodi
            },
            cache: false,
            success: function(){
                
            }
        });
    });

    $("#bHapusJurusan").click(function(){
        var kode=$("#tkode").val();        

        $.ajax({
            url: "HapusJurusan",
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