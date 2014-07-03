$(document).ready(function() {
    $('#tblKelas').dataTable();
    var table = $('#tblKelas').DataTable();

    $('#tblKelas tbody').on( 'click', 'tr', function () {
        if ( $(this).hasClass('selected') ) {
            $(this).removeClass('selected');
        }
        else {
            table.$('tr.selected').removeClass('selected');
            $(this).addClass('selected');
        }
    } );

    $('#tblKelas tbody').on('click', 'tr', function () {
        var tkode = $('td', this).eq(0).text();            
        var tkelas = $('td', this).eq(1).text();
        var tjurusan = $('td', this).eq(2).text();

        $('#formTabelKelas').modal({
          show: true
        });

        document.getElementById("tkode").value=tkode;
        document.getElementById("tkelas").value=tkelas;
        document.getElementById("tjurusan").value=tjurusan;                        
    } );    

    $("#bSimpanKelas").click(function(){
        var kode=$("#tkode1").val();
        var kelas=$("#tkelas1").val();
        var jurusan=$("#tjurusan1").val();
        
        $.ajax({
            url: "TambahKelas",
            type: "POST",
            data:{
                kode:kode,
                kelas:kelas,
                jurusan:jurusan
            },
            cache: false,
            success: function(){
                
            }
        });
    });


    $("#bUbahKelas").click(function(){
        var kode=$("#tkode").val();
        var kelas=$("#tkelas").val();
        var jurusan=$("#tjurusan").val();
        
        $.ajax({
            url: "UbahKelas",
            type: "POST",
            data:{
                kode:kode,
                kelas:kelas,
                jurusan:jurusan
            },
            cache: false,
            success: function(){
                
            }
        });
    });

    $("#bHapusKelas").click(function(){
        var kode=$("#tkode").val();
        
        $.ajax({
            url: "HapusKelas",
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