<?php
$blockObject = block_load('views', 'testimonials-block_1');
$block = _block_get_renderable_array(_block_render_blocks(array($blockObject)));
$testimonialsB = drupal_render($block);

$blockObject = block_load('views', 'features-sidebar_plans');
$block = _block_get_renderable_array(_block_render_blocks(array($blockObject)));
$sidebar = drupal_render($block);

$block = module_invoke('module_name', 'block_view', 'block_delta');


$Cols =0;
$NCols= 12;
if( isset($field_icon_featured_1[0]) &&  $field_icon_featured_1[0]['filename']!='') $Cols ++;
if( isset($field_icon_featured_1[1]) &&  $field_icon_featured_1[1]['filename']!='') $Cols ++;
if( isset($field_icon_featured_1[2]) &&  $field_icon_featured_1[2]['filename']!='') $Cols ++;
if( $Cols > 0) $NCols= 12 / $Cols;

?>
<article class="node-<?php print $node->nid; ?> <?php print $classes; ?> clearfix" <?php print $attributes; ?> >

	<div class="container">
		<div class="row">
                    <div class="col-xs-12 col-sm-12">
                        <?php
                             // We hide the comments and links now so that we can render them later.
                             hide($content['comments']);
                             hide($content['links']);
                              ?>
                              <h2 class="title1"><?php print $title; ?></h2>

                    </div>
                    <?php if (  isset( $field_description[0]) and $field_description[0]['value'] !=''):?>
                    <div class="region region-description-page col-xs-12 col-sm-12 col-md-12 col-lg-12">
                         <div class="summary_text"><?php print $field_description[0]['value']; ?></div>
                    </div>
                    <?php endif; ?>
                </div>
            <?php if ($Cols > 0): ?>
		<div class="row row-feature-detail-plan">
                    <?php 
                    if( isset($field_icon_featured_1[0]) &&  $field_icon_featured_1[0]['filename']!=''):
                    ?>
			<div class="col-xs-12 col-sm-<?php echo $NCols;?>">
                            <div class="image-feature-detail-plan">
                                <img src="<?php print $GLOBALS['base_url'].'/sites/default/files/'.$field_icon_featured_1[0]['filename']; ?>" />
                            </div>
			</div>
                    <?php endif; ?>
                    <?php 
                    if( isset($field_icon_featured_1[1]) &&  $field_icon_featured_1[1]['filename']!=''):
                    ?>
			<div class="col-xs-12 col-sm-<?php echo $NCols;?>">
                            <div class="image-feature-detail-plan">
                                <img src="<?php print $GLOBALS['base_url'].'/sites/default/files/'.$field_icon_featured_1[1]['filename']; ?>" />
                            </div>
			</div>
                    <?php endif; ?> <?php 
                    if( isset($field_icon_featured_1[2]) &&  $field_icon_featured_1[2]['filename']!=''):
                    ?>
			<div class="col-xs-12 col-sm-<?php echo $NCols;?>">
                            <div class="image-feature-detail-plan">
                                <img src="<?php print $GLOBALS['base_url'].'/sites/default/files/'.$field_icon_featured_1[2]['filename']; ?>" />
                            </div>
			</div>
                    <?php endif; ?>
		</div>
            <?php endif; ?>
        </div>
     <?php  
     if( isset($content['field_testimonial']) and $field_testimonial[0]['value']==1 ): ?>
  
		<div class="row">
			<div class="col-xs-12">
                            <div class="">
				 <?php 
                                 print $testimonialsB;
                                 ?>
                            </div>
			</div>
		</div>
                    <?php endif; ?>
    
	<div class="container">
		<div class="row">
			<div class="col-xs-12 col-sm-6 col-md-8">
                            <div class="content-detail-plant">
                                
                                <?php if( isset($content['field_features']) ): ?>
                                <div class="features-detail-plan">
                                    <?php print render($content['field_features']);?>
                                </div>
                                <?php endif; ?>
                                    <?php print render($content['body']);?>
                            </div>
			</div>
			<aside class="col-xs-12 col-sm-6 col-md-4">
                            <div class="sidebar-detail-plan">
                                
     <?php  if( isset($content['field_show_login']) and $field_show_login[0]['value']==1 ): ?>
            <div class="inside-login">
                <h4 class="panel-title">Premium Finance Log-in</h4>
                <form id="premium-login">
                    <table>
                        <tr>
                            <td>
                                <input type="radio" id="agent-log" value="https://www.pbsnetaccess.com/EntityLogin.aspx?portfolio=wfb" name="p-log">
                                <label for="agent-log">Agent Login</label>
                            </td>
                            <td>
                                <input type="radio" id="customer-log" value="https://www.pbsnetaccess.com/CustomerLogin.aspx?portfolio=wfb" name="p-log">
                                <label for="customer-log">Customer Login</label>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="2"><input type="button" class="btn form-submit" value="Lets Go"></td>
                        </tr>
                    </table>
                    
                </form>
            </div>
         <?php endif;?>
                                
     <?php  if( isset($content['field_show_login_businnss']) and $field_show_login_businnss[0]['value']==1 ): ?>
            <div class="inside-login">
                <h4 class="panel-title">Premium Business Log-in</h4>
                <form id="business-login">
                    <table>
                        <tr>
                            <td>
                                <input type="radio" id="remote-log" value="https://ssl.selectpayment.com/mp/westfield-bank/login/page.aspx" name="p-log">
                                <label for="remote-log">Remote Check Capture</label>
                            </td>
                            <td>
                                <input type="radio" id="positive-log" value="https://www.centrixsecure1.com/WestfieldBankPositivePay/Pages/login.aspx" name="p-log">
                                <label for="positive-log">Positive Pay</label>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="2"><input type="button" class="btn form-submit" value="Lets Go"></td>
                        </tr>
                    </table>
                    
                </form>
            </div>
         <?php endif;?>
                                
     <?php  if( isset($content['field_show_login_personal']) and $field_show_login_personal[0]['value']==1 ): ?>
            <div class="inside-login">
                <h4 class="panel-title">Premium Personal Log-in</h4>
                <form id="business-login">
                    <table>
                        <tr>
                            <td>
                                <input type="radio" id="remote-log" value="https://ssl.selectpayment.com/mp/westfield-bank/login/page.aspx" name="p-log">
                                <label for="remote-log">Agent Login</label>
                            </td>
                            <td>
                                <input type="radio" id="positive-log" value="https://www.centrixsecure1.com/WestfieldBankPositivePay/Pages/login.aspx" name="p-log">
                                <label for="positive-log">Agent Login</label>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="2"><input type="button" class="btn form-submit" value="Lets Go"></td>
                        </tr>
                    </table>
                    
                </form>
            </div>
         <?php endif;?>
                                
     <?php  if( isset($content['field_show_chat_button']) and $field_show_chat_button[0]['value']==1 ): ?>
                                <div class="need-help">
                                <img src="<?php print $GLOBALS['base_url'].'/sites/all/themes/evolve/assets/images/need-help.png' ?>"> 
                                <script type="text/javascript" src="https://chat.westfield-bank.com/SightMaxAgentInterface/sightmax.smjs?accountID=1&siteID=1&queueID=1&jquery=True&json=True&v=0"></script>
<div id="SightMaxImgDiv">&nbsp;</div>
<script type="text/javascript" src="https://chat.westfield-bank.com/SightMaxAgentInterface/ChatButton.smjs?accountID=1&siteID=1&queueID=1&jquery=True&json=True&skipsurvey=false"></script>    
                                </div>
                         <?php endif;?>
                     
     <?php  if( isset($content['field_show_banners']) and $field_show_banners[0]['value']==1 ): ?>           
                                
                                <?php 
                                 print $sidebar;
                                 ?>
                                
                         <?php endif;?>
                            </div>
			</aside>
		</div>
	</div>
</article>