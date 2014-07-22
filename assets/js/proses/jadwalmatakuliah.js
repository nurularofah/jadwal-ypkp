$(document).ready(function() {

    function loadData(args) {
        $("#tampil").load("<?php echo base_url('pengaturan/jadwalmatakuliah');?>");
    }
    loadData();

    $('#tblJadwalMatkul').dataTable();    
    var table = $('#tblJadwalMatkul').DataTable();
    var tblvjadwal = $('#tblvjadwal').DataTable({
        "columnDefs": [
        {
            "targets": [ 7 ],
            "visible": false
        },{
            "targets": [ 8 ],
            "visible": false
        }]
    });

    $('#tblJadwalMatkul tbody').on( 'click', 'tr', function () {
        if ( $(this).hasClass('selected') ) {
            $(this).removeClass('selected');
        }
        else {
            table.$('tr.selected').removeClass('selected');
            $(this).addClass('selected');
        }
    } );

    $(function(){
        $("#ttahun").datepicker({
            viewMode: 'years',
            "format": "yyyy-mm-dd",
            'startView': 2
        });

        $("#tJamMulaiDetail").datepicker({            
            viewMode: 'years',
            "format": "yyyy-mm-dd",
            'startView': 2
        });

        $("#tJamAkhirDetail").datepicker({
            viewMode: 'years',
            "format": "yyyy-mm-dd",
            'startView': 2
        }); 

        $('.clockpicker').clockpicker({
            autoclose: true
        });
   
    })

    $('#tblJadwalMatkul2 tbody').on('click', 'tr', function () {
        var tnip = $('td', this).eq(0).text();

        $('#formBaruJadwalMatkul').modal({
          show: true
        });

        document.getElementById("tnip").value=tnip;
    });


    $("#tkelas").click(function(){
        var kelas=$("#tkelas").val();
        
        $.ajax({
            url:"CariJurusan",
            type:"POST",
            data:{
                kelas:kelas
            },
            cache:false,
            success:function(html){
                $("#tjurusan").val(html);
            }
        })
    });
   

    $("#bSimpanVJadwal").click(function(){
        var kode=$("#tkode").val();
        var tahun=$("#ttahun").val();
        var kdkelas=$("#tkelas").val();
        var kdsemester=$("#tsemester").val();

        var tdetail = $('#tblvjadwal').dataTable();
        var vkode=$("#tkode").val();
        var hari= tdetail.fnGetColumnData(0);
        var matakuliah= tdetail.fnGetColumnData(1);
        var sks= tdetail.fnGetColumnData(2);
        var jam= tdetail.fnGetColumnData(3);
        var ruangan= tdetail.fnGetColumnData(4);
        var dosen= tdetail.fnGetColumnData(5);

        $.ajax({
            url: "simpanJadwalMatakuliah",
            type: "POST",
            data:{
                kode:kode,
                tahun:tahun,
                kdkelas:kdkelas,
                kdsemester:kdsemester,

                vkode:vkode,
                hari:hari
            },
            cache: false,
            success: function(){
                location.reload();
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

   
    $("#bTambahDetailJadwalKuliah").click(function(){
        var hari=$("#tvhari").val();
        var matakuliah=$("#tvmatakuliah").val();
        var matakuliah2=document.getElementById("tvmatakuliah");
        var sks=$("#tvsks").val();
        var mulai=$("#tvjammulai").val();
        var selesai=$("#tvjamselesai").val();
        var ruangan=$("#tvruangan").val();
        var dosen=$("#tvdosen").val();
        var dosen2=document.getElementById("tvdosen");
       
        tblvjadwal.row.add( [
            hari,
            matakuliah2.options[matakuliah2.selectedIndex].text,
            sks,
            mulai + ' - ' + selesai,
            ruangan,
            dosen2.options[dosen2.selectedIndex].text,
            '<a href=""><i class="fa fa-trash-o"></i></a> | <a href=""><i class="fa fa-share-square"></i></a>',
            matakuliah,
            dosen
        ] ).draw();

    });

} );