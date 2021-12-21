<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<style>
    body {
        margin: 0;
        padding: 0;
    }

    th {
        background-color: #6cabd6;
        font-weight: normal;
        color: white;
    }

    th,
    td {
        text-align: center;
    }
</style>
<div class="container">
    <div class="jumbotron" style="background-image:url(https://i.pinimg.com/736x/aa/1a/f3/aa1af3ebe92f9bd6c9bb1bf43f3f43c0.jpg); background-size:cover;  background-position: 0px -210px;">
        <h1 class="display-4  text-white">Daftar Nama Orang Jepang</h1>
        <p class="lead text-white">
            Faker is a PHP library that generates fake data for you. Whether you need to bootstrap your database, create good-looking XML documents, fill-in your persistence to stress test it, or anonymize data taken from a production service, Faker is for you.
        </p>
        <hr class="my-4 " color="white">
    </div>

    <form action="" method="post">
        <div class="input-group w-50 float-right mt-n4 mb-2 ">
            <input type="text" class="form-control" placeholder="Cari Nama atau Alamat" aria-describedby="button-addon2" name="keyword">
            <div class="input-group-append">
                <button class="btn btn-outline-primary" type="submit" name="submit" id="button-addon2">Search</button>
            </div>
        </div>
    </form>

    <table class="table table-bordered ">
        <thead>
            <tr>
                <th scope=" col">No</th>
                <th scope="col">Name</th>
                <th scope="col">Address</th>
                <th scope="col">Create</th>
                <th scope="col">Update</th>
            </tr>
        </thead>
        <tbody>
            <?php $i = 1 + (9 * ($currentPage - 1)); ?>
            <?php foreach ($orang as $o) : ?>
                <tr>
                    <td scope="row"><?= $i++; ?></th>
                    <td><?= $o['nama']; ?></td>
                    <td><?= $o['alamat']; ?></td>
                    <td><?= $o['created_at']; ?></td>
                    <td><?= $o['updated_at']; ?></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <?= $pager->links('orang', 'orang_pagination'); ?>
</div>
<?= $this->endSection();
