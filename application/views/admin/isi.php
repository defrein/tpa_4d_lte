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
                        <a href="<?php echo base_url('admin/santri') ?>" class="small-box-footer">More info <i
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
                        <a href="<?php echo base_url('admin/guru') ?>" class="small-box-footer">More info <i
                                class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="content">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Selamat Datang Admin</h3>
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
                <a href=<?php echo base_url("admin/santri_tambah") ?> class="btn btn-primary"
                    style="margin-bottom:15px">
                    Tambah Santri</a>
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
                            <a href=<?php echo base_url("admin/santri_edit/") . $d['id_santri']; ?>> <i
                                    class="fas fa-pencil-alt"></i> </a>
                            <a href=<?php echo base_url("admin/santri_detil/") . $d['id_santri']; ?>>
                                <i class="fas fa-search-plus"></i></a>
                            <a href=<?php echo base_url("admin/santri_hapus/") . $d['id_santri']; ?>
                                onclick="return confirm('Yakin menghapus Santri : <?php echo $d['nama_santri']; ?> ?');"
                                ;><i class="fas fa-trash-alt"></i></a>

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

    //--------------------------------- Tambah ---------------------------------
} else if ($page == 'santri_tambah') {
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

                <form method="POST" action="<?php echo base_url('admin/santri_tambah'); ?>" class="form-horizontal">

                    <div class="card-body">

                        <div class="form-group row">
                            <label for="nama_santri" class="col-sm-2 col-form-label">Nama Santri</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="nama_santri" id="nama_santri"
                                    value="<?php echo set_value('nama_santri'); ?>" placeholder="Masukkan Nama Santri">
                                <span
                                    class="badge badge-warning"><?php echo strip_tags(form_error('nama_santri')); ?></span>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="nama_alias" class="col-sm-2 col-form-label">Nama Alias</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="nama_alias" id="nama_alias"
                                    value="<?php echo set_value('nama_alias'); ?>" placeholder="Masukkan Nama Alias">
                                <span
                                    class="badge badge-warning"><?php echo strip_tags(form_error('nama_alias')); ?></span>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="nama_alias" class="col-sm-2 col-form-label">Pilih Guru</label>
                            <div class="col-sm-10">
                                <?php echo form_dropdown('id_guru', $ddguru, set_value('id_guru')); ?>
                                <span
                                    class="badge badge-warning"><?php echo strip_tags(form_error('id_guru')); ?></span>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="id_kelas" class="col-sm-2 col-form-label">Pilih Kelas</label>
                            <div class="col-sm-10">
                                <?php echo form_dropdown('id_kelas', $ddkelas, set_value('id_kelas')); ?>
                                <span
                                    class="badge badge-warning"><?php echo strip_tags(form_error('id_kelas')); ?></span>
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

    //--------------------------------- Edit ---------------------------------
} else if ($page == 'santri_edit') {
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

                <form method="POST" action="<?php echo base_url('admin/santri_edit/' . $d['id_santri']); ?>"
                    class="form-horizontal">

                    <div class="card-body">

                        <div class="form-group row">
                            <label for="nama_santri" class="col-sm-2 col-form-label">Nama Santri</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="nama_santri" id="nama_santri"
                                    value="<?php echo set_value('nama_santri', $d['nama_santri']); ?>"
                                    placeholder="Masukkan Nama Santri">
                                <span
                                    class="badge badge-warning"><?php echo strip_tags(form_error('nama_santri')); ?></span>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="nama_alias" class="col-sm-2 col-form-label">Nama Alias</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="nama_alias" id="nama_alias"
                                    value="<?php echo set_value('nama_alias', $d['nama_alias']); ?>"
                                    placeholder="Masukkan Nama Alias">
                                <span
                                    class="badge badge-warning"><?php echo strip_tags(form_error('nama_alias')); ?></span>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="id_guru" class="col-sm-2 col-form-label">Pilih Guru</label>
                            <div class="col-sm-10">
                                <?php echo form_dropdown('id_guru', $ddguru, set_value('id_guru', $d['id_guru']), 'class=form-control'); ?>
                                <span
                                    class="badge badge-warning"><?php echo strip_tags(form_error('id_guru')); ?></span>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="id_kelas" class="col-sm-2 col-form-label">Pilih Kelas</label>
                            <div class="col-sm-10">
                                <?php echo form_dropdown('id_kelas', $ddkelas, set_value('id_kelas', $d['id_kelas']), 'class=form-control'); ?>
                                <span
                                    class="badge badge-warning"><?php echo strip_tags(form_error('id_kelas')); ?></span>
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
                <a href=<?php echo base_url("admin/guru_tambah") ?> class="btn btn-primary"
                    style="margin-bottom:15px">Tambah guru</a>
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>Id guru</th>
                            <th>Nama</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>

                    <?php
                        foreach ($guru as $d) { ?>
                    <tr>
                        <td><?php echo $d['id_guru'] ?></td>
                        <td><?php echo $d['nama_guru'] ?></td>
                        <td>
                            <a href=<?php echo base_url("admin/guru_edit/") . $d['id_guru']; ?>>Edit </a>
                            <a href=<?php echo base_url("admin/guru_hapus/") . $d['id_guru']; ?>
                                onclick="return confirm('Yakin menghapus Guru : <?php echo $d['nama_guru']; ?> ?');" ;>
                                Hapus</a>

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

//--------------------------------- TAMBAH ---------------------------------
else if ($page == 'guru_tambah') {
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
            <div class="card-header">
                <h3 class="card-title">Isikan Data Dengan Benar</h3>
            </div>
            <div class="card-body">

                <?php echo validation_errors(); ?>

                <form method="POST" action="<?php echo base_url('admin/guru_tambah'); ?>" class="form-horizontal">

                    <div class="card-body">

                        <div class="form-group row">
                            <label for="nama_guru" class="col-sm-2 col-form-label">Nama Guru</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="nama_guru" id="nama_guru"
                                    value="<?php echo set_value('nama_guru'); ?>" placeholder="Masukkan Nama Guru">
                                <span
                                    class="badge badge-warning"><?php echo strip_tags(form_error('nama_guru')); ?></span>
                            </div>
                        </div>

                    </div>
                    <div class="card-footer">
                        <button type="submit" class="btn btn-info">Simpan</button>
                    </div>
                </form>

            </div>
            <div class="card-footer">
                Create By Agus SBN @2022
            </div>
        </div>
    </section>
</div>

<?php
}

//--------------------------------- EDIT ---------------------------------
else if ($page == 'guru_edit') {
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
            <div class="card-header">
                <h3 class="card-title">Isikan Data Dengan Benar</h3>
            </div>
            <div class="card-body">

                <?php echo validation_errors(); ?>

                <form method="POST" action="<?php echo base_url('admin/guru_edit/' . $d['id_guru']); ?>"
                    class="form-horizontal">

                    <div class="card-body">

                        <div class="form-group row">
                            <label for="nama_guru" class="col-sm-2 col-form-label">Nama Guru</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="nama_guru" id="nama_guru"
                                    value="<?php echo set_value('nama_guru', $d['nama_guru']); ?>"
                                    placeholder="Masukkan Nama Guru">
                                <span
                                    class="badge badge-warning"><?php echo strip_tags(form_error('nama_guru')); ?></span>
                            </div>
                        </div>

                    </div>
                    <div class="card-footer">
                        <button type="submit" class="btn btn-info">Simpan</button>
                    </div>
                </form>

            </div>
            <div class="card-footer">
                Create By Agus SBN @2022
            </div>
        </div>
    </section>
</div>

<?php
}

//==================================== kelas ====================================
else if ($page == 'kelas') {
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
                <a href=<?php echo base_url("admin/kelas_tambah") ?> class="btn btn-primary"
                    style="margin-bottom:15px">Tambah Kelas</a>
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>Id Kelas</th>
                            <th>Nama Kelas</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>

                    <?php
                        foreach ($kelas as $d) { ?>
                    <tr>
                        <td><?php echo $d['id_kelas'] ?></td>
                        <td><?php echo $d['nama_kelas'] ?></td>
                        <td>
                            <a href=<?php echo base_url("admin/kelas_edit/") . $d['id_kelas']; ?>>Edit </a>
                            <a href=<?php echo base_url("admin/kelas_hapus/") . $d['id_kelas']; ?>
                                onclick="return confirm('Yakin menghapus kelas : <?php echo $d['nama_kelas']; ?> ?');"
                                ;> Hapus</a>
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
//--------------------------------- TAMBAH ---------------------------------
else if ($page == 'kelas_tambah') {
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
            <div class="card-header">
                <h3 class="card-title">Isikan Data Dengan Benar</h3>
            </div>
            <div class="card-body">

                <?php echo validation_errors(); ?>

                <form method="POST" action="<?php echo base_url('admin/kelas_tambah'); ?>" class="form-horizontal">

                    <div class="card-body">

                        <div class="form-group row">
                            <label for="nama_kelas" class="col-sm-2 col-form-label">Nama Kelas</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="nama_kelas" id="nama_kelas"
                                    value="<?php echo set_value('nama_kelas'); ?>" placeholder="Masukkan Nama Kelas">
                                <span
                                    class="badge badge-warning"><?php echo strip_tags(form_error('nama_kelas')); ?></span>
                            </div>
                        </div>

                    </div>
                    <div class="card-footer">
                        <button type="submit" class="btn btn-info">Simpan</button>
                    </div>
                </form>

            </div>
            <div class="card-footer">
                Create By Agus SBN @2022
            </div>
        </div>
    </section>
</div>
<?php
}
//--------------------------------- EDIT ---------------------------------
else if ($page == 'kelas_edit') {
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
            <div class="card-header">
                <h3 class="card-title">Isikan Data Dengan Benar</h3>
            </div>
            <div class="card-body">

                <?php echo validation_errors(); ?>

                <form method="POST" action="<?php echo base_url('admin/kelas_edit/' . $d['id_kelas']); ?>"
                    class="form-horizontal">

                    <div class="card-body">

                        <div class="form-group row">
                            <label for="nama_guru" class="col-sm-2 col-form-label">Nama Kelas</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="nama_kelas" id="nama_kelas"
                                    value="<?php echo set_value('nama_kelas', $d['nama_kelas']); ?>"
                                    placeholder="Masukkan Nama Kelas">
                                <span
                                    class="badge badge-warning"><?php echo strip_tags(form_error('nama_kelas')); ?></span>
                            </div>
                        </div>

                    </div>
                    <div class="card-footer">
                        <button type="submit" class="btn btn-info">Simpan</button>
                    </div>
                </form>

            </div>
            <div class="card-footer">
                Create By Agus SBN @2022
            </div>
        </div>
    </section>
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
                            <a href=<?php echo base_url("admin/santri_detil/") . $d['id_santri']; ?>>
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


?>