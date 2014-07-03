$(document).ready(function() {
    $('#tblRuangan').dataTable();
    var table = $('#tblRuangan').DataTable();

    $('#tblRuangan tbody').on( 'click', 'tr', function () {
        if ( $(this).hasClass('selected') ) {
            $(this).removeClass('selected');
        }
        else {
            table.$('tr.selected').removeClass('selected');
            $(this).addClass('selected');
        }
    } );

    $('#tblRuangan tbody').on('click', 'tr', function () {
        var tkode = $('td', this).eq(0).text();            
        var truangan = $('td', this).eq(1).text();
        var tkapasitas = $('td', this).eq(2).text();
        var tjenis = $('td', this).eq(3).text();
        var tlokasi = $('td', this).eq(4).text();
        $('#formTabelRuangan').modal({
          show: true
        });

        document.getElementById("tkode").value=tkode;
        document.getElementById("truangan").value=truangan;
        document.getElementById("tkapasitas").value=tkapasitas;
        document.getElementById("tjenis").value=tjenis;
        document.getElementById("tlokasi").value=tlokasi;
    } );

    $("#bSimpanRuangan").click(function(){
        var kode=$("#tkode1").val();
        var ruangan=$("#truangan1").val();
        var kapasitas=$("#tkapasitas1").val();
        var jenis=$("#tjenis1").val();
        var lokasi=$("#tlokasi1").val();

        $.ajax({
            url: "TambahRuangan",
            type: "POST",
            data:{
                kode:kode,
                ruangan:ruangan,
                kapasitas:kapasitas,
                jenis:jenis,
                lokasi:lokasi
            },
            cache: false,
            success: function(){
                
            }
        });
    } );


    $("#bUbahRuangan").click(function(){
        var kode=$("#tkode").val();
        var ruangan=$("#truangan").val();
        var kapasitas=$("#tkapasitas").val();
        var jenis=$("#tjenis").val();
        var lokasi=$("#tlokasi").val();

        $.ajax({
            url: "UbahRuangan",
            type: "POST",
            data:{
                kode:kode,
                ruangan:ruangan,
                kapasitas:kapasitas,
                jenis:jenis,
                lokasi:lokasi
            },
            cache: false,
            success: function(){
                
            }
        });  
    } );

    $("#bHapusRuangan").click(function(){
        var kode=$("#tkode").val();

        $.ajax({
            url: "HapusRuangan",
            type: "POST",
            data:{
                kode:kode
            },
            cache: false,
            success: function(){
                
            }
        });
    });

});