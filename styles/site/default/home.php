<section id="home_wrapper" class="home-wrapper start-page">
    <div class="sub-block-inner">
        <div class="container"> 
            <div class="row">
                <div class="col-md-7">
                    <h1><?php echo config('home_banner_title') ?></h1>
                    <p>
                       <?php echo config('home_banner_description') ?>
                    </p>
                    <div class="ask_a_Question_button">
                        <?php if (!(user())): ?>
                            <a href="javascript:popup_switch('login')">
                                    <i class="fa fa-ticket"></i> Konsultasi Disini</a>
                        <?php else: ?>
                            <a href="<?php echo site_url('dashboard/ticket') ?>" >
                                    <i class="fa fa-ticket"></i> Konsultasi Disini
                            </a>
                        <?php endif ?>
                    </div>
                </div>
             
                <div class="col-md-5 hidden-xs">
                    <img src="<?php echo STYLE_IMAGES ?>/wehelp-bg.png" class="img-responsive" alt="<?php echo config('title') ?>" />
                </div>
            </div>
        </div>
    </div>
</section>
<section class="home-search clearfix hero">
    <div class="container">
        <div class="hero-inner">
            <h5 class="help-center-name">Topik Konsultasi</h5>
            <form class="search search-full" action="<?php echo site_url('home/search') ?>" method="get">
                <input class="form-control" type="search" placeholder="Perawatan Wajah" name="question" value="<?php echo set_value('question') ?>">
            </form>
        </div>
    </div>
</section>


<section class="frequently_asked_question section_padding_100 clearfix">
    <div class="container">
        <div class="row">
            <div class="col-12 text-center">
                <div class="heading_text">
                    <h2>Jenis Konsultasi</h2>
                    <div class="line-shape"></div>
                </div>
            </div>
        </div>

        <div class="faqs-categories">
            <div class="row">
                <?php foreach ($categories as $item): ?>
                    <div class="col-md-4 text-center">
                        <a href="<?php echo site_url('department/' . $item->category_id . '-' . permalink($item->title)) ?>" class="category-block">
                            <img src="<?php echo base_url() ?>/cdn/icons/<?php echo $item->icon ?>" alt="<?php echo $item->title ?>">
                            <h3><?php echo $item->title ?></h3>
                            <p>
                                <?php if (strlen($item->description) > 40): ?> 
                                    <?php echo substr($item->description, 0, 100) . ".."; ?>
                                <?php else: ?> 
                                    <?php echo $item->description; ?>
                                <?php endif ?>
                            </p>
                        </a>
                    </div>
                <?php endforeach; ?>
            </div>

        </div>
        <div class="random-faqs">
            <div class="row">
                <div class="col-12 text-center">
                    <!-- Heading Text  -->
                    <div class="heading_text">
                        <h2>Pertanyaan yang Sering Diajukan</h2>
                        <div class="line-shape"></div>
                    </div>
                </div>
                <?php foreach ($faqs as $item): ?>
                    <div class="col-md-6">
                        <a href="<?php echo site_url('topic/' . $item->faq_id . '-' . permalink($item->question)) ?>" class="single_faq">
                            <h5>
                                <i class="pe-7s-comment"></i>
                                <?php if (strlen($item->question) > 70): ?> 
                                    <?php echo substr($item->question, 0, 70) . ".."; ?>
                                <?php else: ?> 
                                    <?php echo $item->question; ?>
                                <?php endif ?>
                            </h5>
                        </a>
                    </div>
                <?php endforeach; ?>

            </div>
        </diV>

    </div>
</section>

<section class="still_have_a_question section_padding_100 clearfix">
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center">
                <div class="ask_a_Question_icon">
                    <i class=" pe-7s-help2"></i>
                </div>
                <div class="still_hq_heading">
                    <h2>Masih belum beruntung? Kami dapat membantu!</h2>
                    <p>Hubungi kami dan kami akan segera menghubungi Anda</p>
                </div>
                <div class="ask_a_Question_button">
                    <?php if (!(user())): ?>
                        <a href="javascript:popup_switch('login')"><i class="fa fa-ticket"></i>Konsultasi Disini</a>
                    <?php else: ?>
                        <a href="<?php echo site_url('dashboard/ticket') ?>"><i class="fa fa-ticket"></i> Konsultasi Disini</a>
                    <?php endif ?>
                </div>
            </div>
        </div>
    </div>
</section>
