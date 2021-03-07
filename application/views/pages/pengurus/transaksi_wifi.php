<div id="layoutSidenav_content">
    <main>
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <button class="btn btn-link btn-sm order-1 order-lg-0" id="sidebarToggle" href="#"><i class="fas fa-bars"></i></button>
        </nav>
        <div class="container-fluid contentpengurus">
            <div class="headcontent">
                <h2>Transaksi Wifi</h2>
                <div class="px-3">
                    <button type="button" class="btn btn-primary" id="tambahtagihan">
                        Tagihan <i class="fas fa-plus-circle"></i>
                    </button>
                </div>
            </div>
            <div class="row boxtagihanbaru" style="visibility:hidden; display:none">
                <div class="col-xl ">
                    <div class="card bodycontent shadow">
                        <div class="card-body d-flex">
                            <div class="col-xl-3">
                                <select class="form-control border-primary nokamarwifi">
                                    <option value="zero" selected>Pilih Kamar</option>
                                    <?php foreach ($kamar as $k) : ?>
                                        <option value="<?php echo $k['id_kamar'] ?>"><?php echo $k['no_kamar']; ?></option>
                                    <?php endforeach; ?>
                                </select>
                            </div>
                            <div class="col-xl-3">
                                <input type="text" class="form-control  border-primary nama" placeholder="Kosong" value="Kosong">
                            </div>
                            <div class="col-xl-3">
                                <input type="text" class="form-control  border-primary jum" placeholder="0" value="0,00">
                            </div>
                            <div class="ml-auto">
                                <button class="btn btn-primary" id="">Tambah <i class="fas fa-plus-circle"></i></button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xl">
                    <div class="card bodycontent shadow">
                        <div class="card-body">
                            <div class="tab-pane table-responsive">
                                <table id="tabletransaksiwifi_peng" class="table table-striped table-bordered hover " width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <td>ID Tagihan</td>
                                            <td>No Kamar</td>
                                            <td>Tagihan</td>
                                            <td>Status</td>
                                            <td>#</td>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php foreach ($det_tagihan_wifi as $detwifi) : ?>
                                            <tr>
                                                <td><?php echo $detwifi['idtagih']; ?></td>
                                                <td><?php echo $detwifi['nokamar']; ?></td>
                                                <td><?php echo $detwifi['harga']; ?></td>
                                                <td>
                                                    <?php if ($detwifi['status'] == '200') : ?><span class='badge bg-success' style='color:white'>Lunas</span>
                                                    <?php elseif ($detwifi['status'] == '201') : ?><span class='badge bg-warning' style='color:black'>Pending</span>
                                                    <?php else : ?> <span class='badge bg-danger' style='color:white'>Belum Bayar</span>
                                                    <?php endif; ?>
                                                </td>
                                                <td><a class="btn btn-success text-white">Invoice</a></td>
                                            </tr>
                                        <?php endforeach; ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <div class="vectorimg">
        <img class="imgupdate" src="<?= base_url('asset/image/updatevector.png') ?>" alt="">
    </div>
</div>