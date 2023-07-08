<!-- Titlebar
================================================== -->
<section class="page-crumb">
    <div class="container">
        <div class="page-crumb-block">
            <div class="row">
                <div class="col-md-6 text-left">
                    <h1>Konsultasi</h1>
                </div>
                <div class="col-md-6 text-right">
                    <div class="bread">
                        <ol class="breadcrumb">
                            <li><a href="<?php echo site_url() ?>"><i class="pe-7s-home"></i>Home</a></li>
                            <li class="active">Konsultasi</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>

    </div>
</section>

<div class="container">
    <div class="row">
        <div class="col-md-12 text-right">
            <button class="btn btn-success att-ticket" onclick="window.location = '<?php echo site_url('dashboard/ticket') ?>'">
                <i class="fa fa-plus"></i> Konsultasi Disini
            </button>
        </div>
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-body">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="btn-group">
                                <button type="button" class="btn btn-info btn-filter" data-filter="all">Semua</button>
                                <button type="button" class="btn btn-warning btn-filter" data-filter="important">Penting</button>
                                <button type="button" class="btn btn-success btn-filter" data-filter="buka">Buka</button>
                                <button type="button" class="btn btn-danger btn-filter" data-filter="selesai">Selesai</button>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="table-container">
                                <div class="table-responsive">
                                    <table class="table table-filter">
                                        <tbody>
                                            <?php foreach ($items as $item): ?>
                                                <tr class="filter <?php echo $item->status ?> <?php if ($item->important == '1'): ?>important<?php endif ?>">
                                                    <td>
                                                        <?php if ($item->important == '0'): ?>
                                                            <a href="<?php echo site_url('dashboard/important/' . $item->pengaduan_id); ?>">
                                                            <?php else: ?>
                                                                <a href="<?php echo site_url('dashboard/un_important/' . $item->pengaduan_id); ?>" class="star-ticket">
                                                                <?php endif ?>
                                                                <i class="fa fa-star"></i> #<?php echo $item->pengaduan_id ?>
                                                            </a>
                                                    </td>
                                                    <td>
                                                        <div class="media">
                                                            <a href="<?php echo site_url('dashboard/ticket/' . $item->pengaduan_id) ?>" class="media-body">
                                                                <h4 class="title">
                                                                    <span class="dep-title"><b>Jenis Konsultasi:</b> <?php echo $item->category ?></span> <?php echo $item->subject ?>
                                                                </h4>
                                                                <p class="summary"><?php if (strlen($item->message) > 35): ?> <?php echo substr($item->message, 0, 50) . ".."; ?> <?php else: ?> <?php echo $item->message; ?> <?php endif ?></p>
                                                            </a>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <span class="ticket_<?php echo $item->status ?>">
                                                            <?php if ($item->status == "buka"): ?> 
                                                                Buka
                                                            <?php else: ?>
                                                                Selesai
                                                            <?php endif ?>
                                                        </span>
                                                    </td>
                                                    <td>
                                                        <span class="media-meta"><?php echo $item->created ?></span>
                                                    </td>
                                                </tr>
                                            <?php endforeach ?>
                                            <?php if (!$items): ?>
                                                <tr>
                                                    <td colspan="6" class="textcenter">Belum ada Konsultasi</td>
                                                </tr>
                                            <?php endif ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>