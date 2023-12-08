<div class="container mt-4">
    <div class="card">
        <div class="card-header">
            <h5 class="card-title">Edit Kategori</h5>
        </div>
        <div class="card-body">
            <?php foreach($ipp_kategori as $row){?>
            <form action="<?= base_url('kategori/edit'); ?>" id="formTambahKategori" method="post">
                <div class="form-group">
                    <label for="nama_kategori">Nama Kategori:</label>
                    <input type="hidden" name="ktg_id" value="<?php echo $row->ktg_id?>">
                    <input type="text" name="nama_kategori" class="form-control" value="<?php echo $row->ktg_nama?>" required>
                </div>
                <div class="form-group">
                <label for="status">Status:</label>
                <select class="form-control" id="status" name="status" required>
                    <?php foreach ($ipp_kategori as $row) { ?>
                        <option value="<?= $row->ktg_status ?>" 
                        <?php if ($row->ktg_status == "1") { echo 'selected'; } ?>>
                        <?= ($row->ktg_status == "1") ? 'Aktif' : 'Tidak Aktif'; ?>
                       </option>
                    <?php } ?>
                    <option value="1">Aktif</option>
                    <option value="0">Tidak Aktif</option>
                </select>
            </div>
                <button type="submit" class="btn btn-primary">Simpan</button>
                <button type="button" id="cancel" class="btn btn-primary" onclick="batalEdit()">Batal</button>
            </form>
            <?php } ?>
        </div>
    </div>
</div>
