<?php
    /*
     *      Osclass – software for creating and publishing online classified
     *                           advertising platforms
     *
     *                        Copyright (C) 2014 OSCLASS
     *
     *       This program is free software: you can redistribute it and/or
     *     modify it under the terms of the GNU Affero General Public License
     *     as published by the Free Software Foundation, either version 3 of
     *            the License, or (at your option) any later version.
     *
     *     This program is distributed in the hope that it will be useful, but
     *         WITHOUT ANY WARRANTY; without even the implied warranty of
     *        MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
     *             GNU Affero General Public License for more details.
     *
     *      You should have received a copy of the GNU Affero General Public
     * License along with this program.  If not, see <http://www.gnu.org/licenses/>.
     */

    // meta tag robots
    osc_add_hook('header','bender_black_follow_construct');

    bender_black_add_body_class('home');


    $buttonClass = '';
    $listClass   = '';
    if(bender_black_show_as() == 'gallery'){
          $listClass = 'listing-grid';
          $buttonClass = 'active';
    }
?>
<?php osc_current_web_theme_path('header.php') ; ?>
<div class="clear"></div>
<div class="latest_ads">
<h1><strong><?php _e('Latest Listings', 'bender_black') ; ?></strong></h1>
 <?php if( osc_count_latest_items() == 0) { ?>
    <div class="clear"></div>
    <p class="empty"><?php _e("There aren't listings available at this moment", 'bender_black'); ?></p>
<?php } else { ?>
    <div class="actions">
      <span class="doublebutton <?php echo $buttonClass; ?>">
           <a href="<?php echo osc_base_url(true); ?>?sShowAs=list" class="list-button" data-class-toggle="listing-grid" data-destination="#listing-card-list"><span><?php _e('List', 'bender_black'); ?></span></a>
           <a href="<?php echo osc_base_url(true); ?>?sShowAs=gallery" class="grid-button" data-class-toggle="listing-grid" data-destination="#listing-card-list"><span><?php _e('Grid', 'bender_black'); ?></span></a>
      </span>
    </div>
    
    <?php
    View::newInstance()->_exportVariableToView("listType", 'latestItems');
    
    View::newInstance()->_exportVariableToView("listClass",$listClass);
    osc_current_web_theme_path('loop.php');
    ?>
    
    <div class="clear"></div>
    
    <?php if( osc_count_latest_items() == osc_max_latest_items() ) { ?>
        <p class="see_more_link"><a href="<?php echo osc_search_show_all_url() ; ?>">
            <strong><?php _e('See all listings', 'bender_black') ; ?> &raquo;</strong></a>
        </p>
    <?php } ?>
<?php } ?>
</div>
</div><!-- main -->

<div id="sidebar">
<div class="a2a_kit a2a_kit_size_32 a2a_default_style">
<a class="a2a_dd" href="https://www.addtoany.com/share_save"></a>
<a class="a2a_button_facebook"></a>
<a class="a2a_button_twitter"></a>
<a class="a2a_button_google_plus"></a>
</div>
<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<!-- smaller rec -->
<ins class="adsbygoogle"
     style="display:inline-block;width:300px;height:250px;margin-bottom:10px;"
     data-ad-client="ca-pub-7592316401695950"
     data-ad-slot="9789525820"></ins>
<script>
(adsbygoogle = window.adsbygoogle || []).push({});
</script>
<script type="text/javascript" src="//static.addtoany.com/menu/page.js"></script>
    <div class="widget-box">
        <?php if(osc_count_list_regions() > 0 ) { ?>
        <div class="box location">
            <h3><strong><?php _e("Location", 'bender_black') ; ?></strong></h3>
            <ul>
            <?php while(osc_has_list_regions() ) { ?>
                <li><a href="<?php echo osc_list_region_url(); ?>"><?php echo osc_list_region_name() ; ?> <em>(<?php echo osc_list_region_items() ; ?>)</em></a></li>
            <?php } ?>
            </ul>
        </div>
        <?php } ?>
    </div>
</div>
<div class="clear"><!-- do not close, use main clossing tag for this case -->
<?php osc_current_web_theme_path('footer.php') ; ?>