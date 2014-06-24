$(document).ready(function() {
    $('#gMatkul').dataTable();
    var table = $('#gMatkul').DataTable();

    $('#gMatkul tbody').on( 'click', 'tr', function () {
        if ( $(this).hasClass('selected') ) {
            $(this).removeClass('selected');
        }
        else {
            table.$('tr.selected').removeClass('selected');
            $(this).addClass('selected');
        }
    } );

    $('#gMatkul tbody').on('click', 'tr', function () {
        var kode = $('td', this).eq(0).text();            
        var matakuliah = $('td', this).eq(1).text();
        var sks = $('td', this).eq(2).text();
        
        $('#formTabelMatkul').modal({
          show: true
        });

        document.getElementById("tkodematkul1").value=kode;
        document.getElementById("tmatkul1").value=matakuliah;
        document.getElementById("tsks1").value=sks;
    } );
           
    $("#bSimpanMatkul").click(function(){
        var kode=$("#tkodematkul").val();
        var matakuliah=$("#tmatkul").val();
        var sks=$("#tsks").val();
        
        $.ajax({
            url: "TambahMatkul",
            type: "POST",
            data:{
                kode:kode,
                matakuliah:matakuliah,
                sks:sks
            },
            cache: false,
            success: function(){
                
            }
        });
    });


    $("#bUbahMatkul").click(function(){
        var kode=$("#tkodematkul1").val();
        var matakuliah=$("#tmatkul1").val();
        var sks=$("#tsks1").val();

        $.ajax({
            url: "UbahMatkul",
            type: "POST",
            data:{
                kode:kode,
                matakuliah:matakuliah,
                sks:sks
            },
            cache: false,
            success: function(){
                
            }
        });
    });

    $("#bHapusMatkul").click(function(){
        var kode=$("#tkodematkul1").val();        

        $.ajax({
            url: "HapusMatkul",
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