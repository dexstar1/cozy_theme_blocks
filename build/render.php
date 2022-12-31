<section class="top-banner-wrap">

	<div id="video-background" class="video-background" data-vide-bg=""></div>
        <div class="align-self-center flex-fill">
            <div class="banner-caption">
            <h1>	
                <?php esc_html_e( 'We Are Devoted to Providing Your Daydream Home', 'hero-video-block' ); ?>
            </h1>   
            <div class="search-tabs">
                <div class="tab-button">ALL STATUS</div>
                <div class="tab-button">FOR SLAE</div>
                <div class="tab-button">INVEST</div>
                <div class="tab-button">LEASE</div>
            </div>
            <form class="houzez-search-form-js" method="get" autocomplete="off" action="">
                <div class="search-banner-wrap">
                    
                    <div class="d-flex flex-sm-max-column">
                        
                        <div class="d-flex flex-sm-max-column">

                            <div class="form-group">
                                <div class="search-icon">
                                    <input name="keyword" type="text" data-type="banner" class="houzez-keyword-autocomplete form-control" value="" placeholder="Search for City, Neighbourhood, Zip Code">
                                </div>
                            </div>

                            <div class="form-group">
                                <select name="location[]" data-target="houzezFourthList" data-size="5" class="houzezSelectFilter houzezCityFilter houzezThirdList selectpicker <?php houzez_ajax_search(); ?> houzez-city-js form-control bs-select-hidden" title="<?php echo houzez_option('srh_cities', 'All Cities'); ?>" data-selected-text-format="count > 1" data-live-search="true" data-actions-box="true" <?php houzez_multiselect(houzez_option('ms_city', 0)); ?> data-select-all-text="<?php echo houzez_option('cl_select_all', 'Select All'); ?>" data-deselect-all-text="<?php echo houzez_option('cl_deselect_all', 'Deselect All'); ?>" data-none-results-text="<?php echo houzez_option('cl_no_results_matched', 'No results matched');?> {0}" data-count-selected-text="{0} <?php echo houzez_option('srh_cities_selected', 'Cities'); ?>" data-container="body">
                                    
                                    <?php
                                    global $post;
                                    if( !houzez_is_multiselect(houzez_option('ms_city', 0)) ) {
                                        echo '<option value="">'.houzez_option('srh_cities', 'All Cities').'</option>';
                                    }

                                    $fave_locations = get_post_meta(houzez_postid(), 'fave_locations', false);
                                    $default_locations = isset($fave_locations) && is_array($fave_locations) ? $fave_locations : array();

                                    $city = isset($_GET['location']) ? $_GET['location'] : $default_locations;
                                    houzez_get_search_taxonomies('property_city', $city );

                                    ?>
                                </select><!-- selectpicker -->
                            </div>

                            <div class="form-group">
                                <select name="rooms" data-size="5" class="selectpicker <?php houzez_ajax_search(); ?> form-control bs-select-hidden" title="<?php echo houzez_option('srh_rooms', 'Rooms'); ?>" data-live-search="false">
                                    <option value=""><?php echo houzez_option('srh_rooms', 'Rooms'); ?></option>
                                    <?php houzez_number_list('rooms'); ?>
                                </select><!-- selectpicker -->
                            </div>
                            
                        </div>
                        
                        <div class="flex-search">
                            <button type="submit" class="btn btn-search btn-secondary btn-full-width">Search</button>
                        </div>
                    </div>
                    
                </div>
            </form>
        </div>
    </div>
</section>
