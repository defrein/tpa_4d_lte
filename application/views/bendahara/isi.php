<?php
//==================================== HOME ====================================
if ($page == 'home') {
?>
<div class="content-wrapper">
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1><?php echo  $judul; ?></h1>
                </div>
            </div>
        </div>
    </section>

    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-6 col-12">
                    <div class="small-box bg-info">
                        <div class="inner">
                            <h3><?php echo $jml_santri; ?></h3>

                            <p>Jumlah Santri</p>
                        </div>
                        <div class="icon">
                            <i class="ion ion-android-people"></i>
                        </div>
                        <a href="<?php echo base_url('bendahara/santri') ?>" class="small-box-footer">More info <i
                                class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>
                <!-- ./col -->
                <div class="col-lg-6 col-12">
                    <!-- small box -->
                    <div class="small-box bg-success">
                        <div class="inner">
                            <h3><?php echo $jml_guru; ?></h3>

                            <p>Jumlah Guru</p>
                        </div>
                        <div class="icon">
                            <i class="ion ion-person"></i>
                        </div>
                        <a href="<?php echo base_url('bendahara/guru') ?>" class="small-box-footer">More info <i
                                class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="content">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Selamat Datang bendahara</h3>
                <div class="card-tools">
                    <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                        <i class="fas fa-minus"></i>
                    </button>
                    <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
                        <i class="fas fa-times"></i>
                    </button>
                </div>
            </div>

            <div class="card-body">
                <h2>Info</h2>
                <p>Ini adalah contoh sistem informasi menggunakan CI3 dengan sistem login,
                    dan menggunakan data yang berelasi. Didalamnya juga menggunakan sistem
                    multilogin untuk membedakan level user tertentu.<br>
                    Besar harapan contoh coding ini bermanfaat sebagai start awal memahami
                    membangun sebuah sistem informasi yang lebih rumit.</p>
                <p>Dosen pengampu: Agus SBN</p>

            </div>
            <div class="card-footer">
                Create By Agus SBN @2022
            </div>
        </div>

    </section>
</div>
<?php
}

//==================================== SANTRI ====================================
else if ($page == 'santri') {
?>
<div class="content-wrapper">
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1><?php echo  $judul; ?></h1>
                </div>
            </div>
        </div>
    </section>

    <section class="content">
        <div class="card">
            <div class="card-body">
                <table id="datatable_01" class="table table-bordered">
                    <thead>
                        <tr>
                            <th>Id Santri</th>
                            <th>Nama</th>
                            <th>Kelas</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <?php
                        foreach ($santri as $d) { ?>
                    <tr>
                        <td><?php echo $d['id_santri'] ?></td>
                        <td><?php echo $d['nama_santri'] ?></td>
                        <td><?php echo $d['nama_kelas'] ?></td>
                        <td>

                            <a href=<?php echo base_url("bendahara/santri_detil/") . $d['id_santri']; ?>>
                                <i class="fas fa-search-plus"></i></a>

                        </td>
                    </tr>
                    <?php
                        }
                        ?>
                </table>

            </div>
    </section>
</div>

<?php
}

//--------------------------------- Detil ---------------------------------
else if ($page == 'santri_detil') {
?>
<div class="content-wrapper">
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1><?php echo  $judul; ?></h1>
                </div>
            </div>
        </div>
    </section>

    <section class="content">
        <div class="card">
            <div class="card-body">

                <dl class="row">
                    <dt class="col-sm-2">Id Santri</dt>
                    <dd class="col-sm-10"><?php echo $d['id_santri']; ?></dd>
                    <dt class="col-sm-2">Nama Santri</dt>
                    <dd class="col-sm-10"><?php echo $d['nama_santri']; ?></dd>
                    <dt class="col-sm-2">Nama Alias</dt>
                    <dd class="col-sm-10"><?php echo $d['nama_alias']; ?></dd>
                    <dt class="col-sm-2">Nama Guru</dt>
                    <dd class="col-sm-10"><?php echo $d['nama_guru']; ?></dd>
                    <dt class="col-sm-2">Kelas</dt>
                    <dd class="col-sm-10"><?php echo $d['nama_kelas']; ?></dd>
                </dl>

            </div>
        </div>
    </section>
</div>
<?php


}

//==================================== GURU ====================================
else if ($page == 'guru') {
?>
<div class="content-wrapper">
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1><?php echo  $judul; ?></h1>
                </div>
            </div>
        </div>
    </section>

    <section class="content">
        <div class="card">
            <div class="card-body">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>Id guru</th>
                            <th>Nama</th>
                        </tr>
                    </thead>

                    <?php
                        foreach ($guru as $d) { ?>
                    <tr>
                        <td><?php echo $d['id_guru'] ?></td>
                        <td><?php echo $d['nama_guru'] ?></td>
                    </tr>
                    <?php
                        }
                        ?>
                </table>

            </div>
        </div>
    </section>
</div>

<?php
}


//==================================== kelas ====================================
else if ($page == 'kelas') {
?>
<div class="content-wrapper" style="padding-left:10px">

    <h1><?php echo  $judul; ?></h1>
    <table border=1>
        <tr>
            <th>Id kelas</th>
            <th>Nama</th>
        </tr>
        <?php
            foreach ($kelas as $d) { ?>
        <tr>
            <td><?php echo $d['id_kelas'] ?></td>
            <td><?php echo $d['nama_kelas'] ?></td>
        </tr>
        <?php
            }
            ?>
    </table>
    <br><i>Halaman Kelas ini sengaja tanpa Style CSS agar tampak Core Coding nya</i>

</div>
<?php
}

//================================ LIST DATA SANTRI PER KELAS ================================
else if ($page == 'list_santri_per_kelas') {
?>
<div class="content-wrapper">
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1><?php echo  $judul; ?></h1>
                </div>
            </div>
        </div>
    </section>

    <section class="content">
        <div class="card">
            <div class="card-body">
                <div class="form-group">
                    <div class="row">
                        <div class="col-sm-2">
                            Pilih Kelas
                        </div>
                        <div class="col-sm-2">
                            <?php echo form_dropdown('id_kelas', $ddkelas, set_value('id_kelas'), 'id="pd_kelas" class="form-control"'); ?>
                        </div>
                    </div>
                    <div class="col-sm-8">
                    </div>
                </div>
                <!-- <button id="pilih_kelas" class='btn btn-info btn-sm' style="margin-bottom: 5px">Tampilkan</button> -->
                <table id="datatable_01" class="table table-bordered">
                    <thead>
                        <tr>
                            <th>Id Santri</th>
                            <th>Nama</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <?php
                        foreach ($santri as $d) { ?>
                    <tr>
                        <td><?php echo $d['id_santri'] ?></td>
                        <td><?php echo $d['nama_santri'] ?></td>
                        <td>
                            <a href=<?php echo base_url("bendahara/santri_detil/") . $d['id_santri']; ?>>
                                <i class="fas fa-search-plus"></i></a>
                        </td>
                    </tr>
                    <?php
                        }
                        ?>
                </table>

            </div>
    </section>
</div>

<?php
}

//==================================== Sumbangan ====================================
else if ($page == 'sumbangan') {
?>
<div class="content-wrapper">
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1><?php echo  $judul; ?></h1>
                </div>
            </div>
        </div>
    </section>

    <section class="content">
        <div class="card">
            <div class="card-body">
                <a href=<?php echo base_url("bendahara/sumbangan_tambah") ?> class="btn btn-primary"
                    style="margin-bottom:15px">Tambah Sumbangan</a>
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>Id Sumbangan</th>
                            <th>Tanggal</th>
                            <th>Nama Santri</th>
                            <th>Kelas</th>
                            <th>Jumlah</th>
                            <th>Bendahara</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>

                    <?php
                        foreach ($sumbangan as $d) { ?>
                    <tr>
                        <td><?php echo $d['id_sumbangan'] ?></td>
                        <td><?php echo $d['tanggal'] ?></td>
                        <td><?php echo $d['nama_santri'] ?></td>
                        <td><?php echo $d['nama_kelas'] ?></td>
                        <td><?php echo $d['jumlah'] ?></td>
                        <td><?php echo $d['username'] ?></td>
                        <td>
                            <a href=<?php echo base_url("bendahara/sumbangan_edit/") . $d['id_sumbangan']; ?>> <i
                                    class="fas fa-pencil-alt"></i> </a>
                            <a href=<?php echo base_url("bendahara/sumbangan_detil/") . $d['id_santri']; ?>>
                                <i class="fas fa-search-plus"></i></a>
                            <a href=<?php echo base_url("bendahara/sumbangan_hapus/") . $d['id_sumbangan']; ?>
                                onclick="return confirm('Yakin menghapus Sumbangan : <?php echo $d['nama_santri']; ?> ?');"
                                ;><i class="fas fa-trash-alt"></i></a>

                        </td>
                    </tr>
                    <?php
                        }
                        ?>
                </table>

            </div>
        </div>
    </section>
</div>

<?php
}

//--------------------------------- Detil Sumbangan ---------------------------------
else if ($page == 'sumbangan_detil') {
?>
<div class="content-wrapper">
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1><?php echo  $judul; ?></h1>
                </div>
            </div>
        </div>
    </section>
    <section class="content">
        <div class="card">
            <div class="card-body">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>Id Sumbangan</th>
                            <th>Tanggal</th>
                            <th>Nama Santri</th>
                            <th>Kelas</th>
                            <th>Jumlah</th>
                            <th>Bendahara</th>
                        </tr>
                    </thead>

                    <?php
                        foreach ($sumbangan as $d) { ?>
                    <tr>
                        <td><?php echo $d['id_sumbangan'] ?></td>
                        <td><?php echo $d['tanggal'] ?></td>
                        <td><?php echo $d['nama_santri'] ?></td>
                        <td><?php echo $d['nama_kelas'] ?></td>
                        <td><?php echo $d['jumlah'] ?></td>
                        <td><?php echo $d['username'] ?></td>
                    </tr>
                    <?php
                        }
                        ?>
                </table>

            </div>
        </div>
    </section>
</div>
<?php
}


//--------------------------------- TAMBAH SUMBANGAN---------------------------------
else if ($page == 'sumbangan_tambah') {
?>
<div class="content-wrapper">
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1><?php echo  $judul; ?></h1>
                </div>
            </div>
        </div>
    </section>

    <section class="content">
        <div class="card">
            <div class="card-body">

                <form method="POST" action="<?php echo base_url('bendahara/sumbangan_tambah'); ?>"
                    class="form-horizontal">

                    <div class="card-body">

                        <div class="form-group row">
                            <label for="tanggal" class="col-sm-2 col-form-label">Tanggal</label>
                            <div class="col-sm-10">
                                <input type="date" class="form-control" name="tanggal" id="tanggal"
                                    value="<?php echo set_value('tanggal'); ?>">
                                <span
                                    class="badge badge-warning"><?php echo strip_tags(form_error('tanggal')); ?></span>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="nama_alias" class="col-sm-2 col-form-label">Pilih Santri</label>
                            <div class="col-sm-10">
                                <?php echo form_dropdown('id_santri', $ddsantri, set_value('id_santri')); ?>
                                <span
                                    class="badge badge-warning"><?php echo strip_tags(form_error('id_santri')); ?></span>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="jumlah" class="col-sm-2 col-form-label">Jumlah</label>
                            <div class="col-sm-10">
                                <input type="number" class="form-control" name="jumlah" id="jumlah"
                                    value="<?php echo set_value('jumlah'); ?>" placeholder="Masukkan jumlah sumbangan">
                                <span class="badge badge-warning"><?php echo strip_tags(form_error('jumlah')); ?></span>
                            </div>
                        </div>
                        <?php $useraktif = $this->session->userdata('username'); ?>
                        <div class="form-group row">
                            <label for="username" class="col-sm-2 col-form-label">Bendahara</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="username" id="username"
                                    value="<?php echo set_value('username', $useraktif) ?>" readonly>
                            </div>

                        </div>

                    </div>
                    <div class="card-footer">
                        <button type="submit" class="btn btn-info">Simpan</button>
                    </div>
                </form>


            </div>
    </section>
</div>
<?php
}
//--------------------------------- Edit ---------------------------------
else if ($page == 'sumbangan_edit') {
?>
<div class="content-wrapper">
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1><?php echo  $judul; ?></h1>
                </div>
            </div>
        </div>
    </section>

    <section class="content">
        <div class="card">
            <div class="card-body">

                <form method="POST" action="<?php echo base_url('bendahara/sumbangan_edit/' . $d['id_santri']); ?>"
                    class="form-horizontal">

                    <div class="card-body">

                        <div class="form-group row">
                            <label for="tanggal" class="col-sm-2 col-form-label">Tanggal</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="tanggal" id="tanggal"
                                    value="<?php echo set_value('tanggal', $d['tanggal']); ?>">
                                <span
                                    class="badge badge-warning"><?php echo strip_tags(form_error('tanggal')); ?></span>
                            </div>
                        </div>



                        <div class="form-group row">
                            <label for="id_santri" class="col-sm-2 col-form-label">Pilih Santri</label>
                            <div class="col-sm-10">
                                <?php echo form_dropdown('id_santri', $ddsantri, set_value('id_santri', $d['id_santri']), 'class=form-control'); ?>
                                <span
                                    class="badge badge-warning"><?php echo strip_tags(form_error('id_santri')); ?></span>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="jumlah" class="col-sm-2 col-form-label">Jumlah</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="jumlah" id="jumlah"
                                    value="<?php echo set_value('jumlah', $d['jumlah']); ?>">
                                <span
                                    class="badge badge-warning"><?php echo strip_tags(form_error('nama_alias')); ?></span>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="username" class="col-sm-2 col-form-label">Username</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="username" id="username"
                                    value="<?php echo set_value('username', $d['username']); ?>" readonly>
                                <span
                                    class="badge badge-warning"><?php echo strip_tags(form_error('nama_alias')); ?></span>
                            </div>
                        </div>


                    </div>
                    <div class="card-footer">
                        <button type="submit" class="btn btn-info">Simpan</button>
                    </div>
                </form>


            </div>
    </section>
</div>
<?php
}


?>