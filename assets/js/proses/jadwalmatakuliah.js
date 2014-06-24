$(document).ready(function() {
    $('#tblJadwalMatkul').dataTable();
    var table = $('#tblJadwalMatkul').DataTable();

    $('#tblJadwalMatkul tbody').on( 'click', 'tr', function () {
        if ( $(this).hasClass('selected') ) {
            $(this).removeClass('selected');
        }
        else {
            table.$('tr.selected').removeClass('selected');
            $(this).addClass('selected');
        }
    } );

    $('#tblJadwalMatkul2 tbody').on('click', 'tr', function () {
        var tnip = $('td', this).eq(0).text();

        $('#formBaruJadwalMatkul').modal({
          show: true
        });

        document.getElementById("tnip").value=tnip;
    } );
   

    $("#bSimpanDosen").click(function(){
        var nip=$("#tnip1").val();
        var nama=$("#tnama1").val();
        var jabatan=$("#tjabatan1").val();
        var pendidikan=$("#tpendidikan1").val();
        var tempatlahir=$("#ttempatlahir1").val();
        var tanggallahir=$("#ttanggallahir1").val();
        var telepon=$("#ttelepon1").val();
        var handphone=$("#thandphone1").val();
        var alamat=$("#talamat1").val();

        $.ajax({
            url: "TambahDosen",
            type: "POST",
            data:{
                nip:nip,
                nama:nama,
                jabatan:jabatan,
                pendidikan:pendidikan,
                tempatlahir:tempatlahir,
                tanggallahir:tanggallahir,
                telepon:telepon,
                handphone:handphone,
                alamat:alamat
            },
            cache: false,
            success: function(){
                
            }
        });
    });


    $("#bUbahDosen").click(function(){
        var nip=$("#tnip").val();
        var nama=$("#tnama").val();
        var jabatan=$("#tjabatan").val();
        var pendidikan=$("#tpendidikan").val();
        var tempatlahir=$("#ttempatlahir").val();
        var tanggallahir=$("#ttanggallahir2").val();
        var telepon=$("#ttelepon").val();
        var handphone=$("#thandphone").val();
        var alamat=$("#talamat").val();

        $.ajax({
            url: "UbahDosen",
            type: "POST",
            data:{
                nip:nip,
                nama:nama,
                jabatan:jabatan,
                pendidikan:pendidikan,
                tempatlahir:tempatlahir,
                tanggallahir:tanggallahir,
                telepon:telepon,
                handphone:handphone,
                alamat:alamat
            },
            cache: false,
            success: function(){
                
            }
        });
    });

    $("#bHapusDosen").click(function(){
        var nip=$("#tnip").val();        

        $.ajax({
            url: "HapusDosen",
            type: "POST",
            data:{
                nip:nip
            },
            cache: false,
            success: function(){
                
            }
        });
    });

} );