<div class="container">
    <div class="tg-blog-grid tg-haslayout">
        <main id="tg-main" class="tg-main tg-haslayout">
            <div class="row">
                <div class="col-sm-3">
                    <aside id="tg-sidebar-upper" class="tg-sidebar tg-haslayout">
                        <div class="tg-widget">
                            <div class="search-box">
                                <h3>Search Member</h3>
                                <form method="get" action="<?php echo base_url().'membership'; ?>">
                                    <div class="form-group">
                                        <input type="text" name="id" class="form-control" placeholder="Enter Membership ID..." value="<?php echo $this->input->get('id')?>">
                                    </div>
                                    <div class="form-group">
                                        <input type="text" name="name" class="form-control" placeholder="Enter Member Name..." value="<?php echo $this->input->get('name')?>">
                                    </div>
                                    <div class="form-group">
                                        <input type="text" name="mobile" class="form-control" placeholder="Enter Member Mobile No..." value="<?php echo $this->input->get('mobile')?>">
                                    </div>
                                    <button type="submit" class="btn btn-success btn-block"><i class="fa fa-search"></i> Search</button>
                                </form>
                            </div>
                        </div>

                        <?php
                        if (!empty($events)) {
                        ?>
                        <div class="tg-widget tg-slider-widget">
                            <div class="tg-section-heading">
                                <h2>News & Events</h2>
                            </div>
                            <div id="tg-widget-slider" class="tg-widget-slider tg-haslayout">
                                <div class="item">
                                    <?php
                                    foreach ($events as $ev) {
                                    ?>
                                    <article class="tg-theme-post tg-category-small">
                                        <div class="tg-postdata">
                                            <h3><a href="<?php echo base_url().'news-event-details/'.$ev->id; ?>"><?php echo $ev->event_head; ?></a></h3>
                                            <ul class="tg-postmetadata">
                                                <li>
                                                    <a href="<?php echo base_url().'news-event-details/'.$ev->id; ?>">
                                                        <i class="fa fa-clock-o"></i>
                                                        <span><?php echo dateFormat($ev->event_date); ?></span>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </article>
                                    <?php
                                    }
                                    ?>
                                </div>
                            </div>
                        </div>
                        <?php
                        }
                        ?>
                    </aside>
                </div>

                <div class="col-sm-9">
                    <div class="tg-breadcrumbs tg-haslayout">
                        <h2>Member List</h2>
                    </div>

                    <div class="tg-haslayout" style="padding-top: 10px;">
                        <div class="tg-paddingbottomzero tg-haslayout tg-categories-posts">
                            <div class="row">
                                <?php
                                foreach ($members as $val) {
                                    $image = viewImg('members', $val->member_image, 'style="height:200px; border:1px solid #acacac;"');
                                ?>
                                <div class="col-md-3 col-sm-4 tg-bloggrid-width">
                                    <div class="tg-category-posts">
                                        <article class="tg-theme-post tg-category-full">
                                            <a href="<?php echo base_url().'membership/details/'.$val->membership_number; ?>">
                                                <?php echo ($image!='')?$image:'<img src="'.base_url().'web-assets/img/no-image.jpg" style="height:200px; border:1px solid #acacac;">'; ?>
                                                <p style="height:40px; overflow:hidden;">#<?php echo $val->membership_number; ?><br><?php echo $val->member_name; ?></p>
                                            </a>
                                        </article>
                                    </div>
                                </div>
                                <?php    
                                }
                                ?>
                            </div>
                        </div>

                        <?php echo $paginationLinks; ?>
                    </div>
                </div>
            </div>
        </main>
    </div>
</div>