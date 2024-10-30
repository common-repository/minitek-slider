<?php
/**
 * Provide a admin area view for the plugin
 *
 * This file is used to markup the admin-facing aspects of the plugin.
 *
 * @since      1.1.0
 * @package    Minitek-Slider
 * @subpackage Minitek-Slider/admin/partials
 */

$dl_id = isset($this->options['download-id']) && $this->options['download-id'] ? $this->options['download-id'] : false;
?>

<div class="minitek-dashboard">

    <div class="row">

        <div class="ms-col-12 ms-col-8">
            <div class="media">
                <div class="pull-left">
                    <img class="media-object" src="<?php echo MSLIDER__ADMIN_PLUGIN_URL.'/images/logo.png'; ?>">
                </div>
                <div class="media-body">
                    <h2 class="media-heading">
                        <?php echo __('Minitek Slider', 'minitek-slider'); ?>
                        <span class="badge badge-success"><?php echo __('Free', 'minitek-slider'); ?></span>
                    </h2>
                    <?php echo __('A powerful responsive slider for WordPress.', 'minitek-slider'); ?>
                </div>
            </div>

            <div class="dashboard-thumbnails">
                <div class="thumbnail">
                    <a href="<?php echo get_admin_url().'post-new.php?post_type=mslider'; ?>">
                        <i class="icon fa fa-plus"></i>
                        <span class="thumbnail-title">
                            <?php echo __('New Slider', 'minitek-slider'); ?>
                        </span>
                    </a>
                </div>

                <div class="thumbnail">
                    <a href="<?php echo get_admin_url().'edit.php?post_type=mslider'; ?>">
                        <i class="icon fa fa-th-large"></i>
                        <span class="thumbnail-title">
                            <?php echo __('Sliders', 'minitek-slider'); ?>
                        </span>
                    </a>
                </div>

                <div class="thumbnail">
                    <a href="https://www.minitek.gr/wordpress/plugins/minitek-slider" target="_blank">
                        <i class="icon fa fa-folder"></i>
                        <span class="thumbnail-title">
                            <?php echo __('Items Groups', 'minitek-slider'); ?>
                            <span class="badge badge-info"><?php echo __('Pro', 'minitek-slider'); ?></span>
                        </span>
                    </a>
                </div>

                <div class="thumbnail">
                    <a href="https://www.minitek.gr/wordpress/plugins/minitek-slider" target="_blank">
                        <i class="icon fa fa-pencil"></i>
                        <span class="thumbnail-title">
                            <?php echo __('Custom Items', 'minitek-slider'); ?>
                            <span class="badge badge-info"><?php echo __('Pro', 'minitek-slider'); ?></span>
                        </span>
                    </a>
                </div>

                <div class="thumbnail">
                    <a href="https://www.minitek.gr/wordpress/plugins/minitek-slider" target="_blank">
                        <i class="icon fa fa-trash"></i>
                        <span class="thumbnail-title">
                            <?php echo __('Delete Cropped Images', 'minitek-slider'); ?>
                            <span class="badge badge-info"><?php echo __('Pro', 'minitek-slider'); ?></span>
                        </span>
                    </a>
                </div>

                <div class="thumbnail">
                    <a href="https://wordpress.org/plugins/minitek-slider/" target="_blank">
                        <i class="icon fa fa-thumbs-up"></i>
                        <span class="thumbnail-title">
                            <?php echo __('Like this plugin?', 'minitek-slider'); ?><br>
                            <span class="small">
                                <?php echo __('Please leave a review', 'minitek-slider'); ?>
                            </span>
                        </span>
                    </a>
                </div>
            </div>
        </div>

        <div class="ms-col-12 ms-col-4">

            <div class="dashboard-module">
                <div class="card">
                    <div class="card-header">
                        <h4><?php echo __('About', 'minitek-slider'); ?></h4>
                    </div>
                    <div class="card-body">
                        <ul class="list-group">
                            <li class="list-group-item">
                                <div><h4><?php echo __('Plugin', 'minitek-slider'); ?></h4></div>
                                <div><a href="https://www.minitek.gr/wordpress/plugins/minitek-slider" target="_blank"><?php echo __('Minitek Slider', 'minitek-slider'); ?></a></div>
                            </li>
                            <li class="list-group-item">
                                <div><h4><?php echo __('Version', 'minitek-slider'); ?></h4></div>
                                <div>
                                    <span class="badge badge-success"><?php echo $this->version; ?></span>
                                    <span class="badge badge-success"><?php echo __('Free', 'minitek-slider'); ?></span>
                                </div>
                            </li>
                            <li class="list-group-item">
                                <div><h4><?php echo __('Developer', 'minitek-slider'); ?></h4></div>
                                <div><a href="https://www.minitek.gr/" target="_blank">Minitek</a></div>
                            </li>
                            <li class="list-group-item">
                                <div><h4><?php echo __('License', 'minitek-slider'); ?></h4></div>
                                <div><a href="https://www.gnu.org/licenses/gpl-3.0.en.html" target="_blank">GNU GPLv3</a></div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="dashboard-module">
                <div class="card mb-3">
                    <div class="card-header">
                        <h4><?php echo __('Quick Links', 'minitek-slider'); ?></h4>
                    </div>
                    <div class="card-body">
                        <ul class="list-group">
                            <li class="list-group-item">
                                <span class="fa fa-book" aria-hidden="true"></span>&nbsp;
                                <span>
                                    <a href="https://www.minitek.gr/support/documentation/wordpress/minitek-slider" target="_blank"><?php echo __('Documentation', 'minitek-slider'); ?></a>
                                </span>
                            </li>
                            <li class="list-group-item">
                                <span class="fa fa-list" aria-hidden="true"></span>&nbsp;
                                <span>
                                    <a href="https://www.minitek.gr/support/changelogs/wordpress/minitek-slider" target="_blank"><?php echo __('Changelog', 'minitek-slider'); ?></a>
                                </span>
                            </li>
                            <li class="list-group-item">
                                <span class="fa fa-support" aria-hidden="true"></span>&nbsp;
                                <span>
                                    <a href="https://wordpress.org/support/plugin/minitek-slider/" target="_blank"><?php echo __('Technical Support', 'minitek-slider'); ?></a>
                                </span>
                            </li>
                            <li class="list-group-item">
                                <span class="fa fa-question" aria-hidden="true"></span>&nbsp;
                                <span>
                                    <a href="https://www.minitek.gr/support/documentation/wordpress/minitek-slider/free-vs-pro" target="_blank"><?php echo __('Free vs Pro', 'minitek-slider'); ?></a>
                                </span>
                            </li>
                            <li class="list-group-item">
                                <span class="fa fa-lock" aria-hidden="true"></span>&nbsp;
                                <span>
                                    <a href="https://www.minitek.gr/wordpress/plugins/minitek-slider#subscriptionPlans" target="_blank"><?php echo __('Upgrade to Pro', 'minitek-slider'); ?></a>
                                </span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

        </div>

    </div>

</div>
