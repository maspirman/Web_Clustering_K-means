       <?php $ambil=$koneksi->query("SELECT * FROM tb_clustering join tb_kriteria where tb_clustering.id_kriteria = tb_kriteria.id_kriteria"); ?>

       <form method='POST' >
         <?php  while ($data=$ambil->fetch_array()){ ?>
            <label><b>Tentukan Nilai Titik Pusat Kriteria <?php echo $data['id_kriteria']; ?> (<?php echo $data['jenis_kriteria']; ?>)</b></label>
            <div class="row">
                <div class='form-group'>
                    <label><center>C1</center></label>
                    <div class='col-12'>
                        <input type="text" class="form-control" name="c1_<?php echo $data['id_kriteria']; ?>" value="<?php echo $data['c1']; ?>">
                    </div>
                </div>
                <div class='form-group'>
                    <label>C2</label>
                    <div class='col-12'>
                        <input type='text' class='form-control' name="c2_<?php echo $data['id_kriteria']; ?>" value="<?php echo $data['c2']; ?>">
                    </div>
                </div>
                <div class='form-group'>
                    <label>C3</label>
                    <div class='col-12'>
                        <input type='text' class='form-control' name="c3_<?php echo $data['id_kriteria']; ?>" value="<?php echo $data['c3']; ?>">
                    </div>
                </div>

            </div>

        <?php }; ?>


        <button type='submit' name='set' class='btn btn-primary'>
            Set
        </button>

    </form>


    <?php 
    $tanggal=date('y-m-d');
    if (isset($_POST['set']))
    {

        $koneksi->query("UPDATE tb_clustering set c1 ='$_POST[c1_1]', c2='$_POST[c2_1]', c3='$_POST[c3_1]' where id_kriteria='1'");
        $koneksi->query("UPDATE tb_clustering set c1 ='$_POST[c1_2]', c2='$_POST[c2_2]', c3='$_POST[c3_2]' where id_kriteria='2'");
        $koneksi->query("UPDATE tb_clustering set c1 ='$_POST[c1_3]', c2='$_POST[c2_3]', c3='$_POST[c3_3]' where id_kriteria='3'");
        $koneksi->query("UPDATE tb_clustering set c1 ='$_POST[c1_4]', c2='$_POST[c2_4]', c3='$_POST[c3_4]' where id_kriteria='4'");

        echo "<script type='text/javascript'>
        setTimeout(function () { 
            swal({
                title: 'Data berhasil tersimpan.',
                type: 'success',
                timer: 3200,
                showConfirmButton: true
                });   
                },10);  
                window.setTimeout(function(){ 
                    window.location.replace('clustering.php');
                    } ,3200); 
                    </script>";
                }


                ?>

