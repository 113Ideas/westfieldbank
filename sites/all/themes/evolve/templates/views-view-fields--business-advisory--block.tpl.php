<?php

$linkedin = $fields["field_linkedin_advisor"]->content;
?>

<div id="head-advisory">
    <div class="container">
        <div class="row">
            <div class="region region-body-advisory col-xs-12 col-sm-12 col-md-12 col-lg-12">
                <div class="subtitle-advisory">MEET <strong>OUR</strong> TEAM</div>
                <?php print $fields["field_header_advisory"]->content; ?>
            </div>
        </div>
    </div>
</div>
    
<div id="body-advisory">
    <div class="container">
        <div class="row">
            <div class="region region-body-advisory col-xs-12 col-sm-12 col-md-6 col-lg-6">
                <?php print $fields["field_photo_advisor"]->content; ?>
            </div>
            <div class="region region-body-advisory col-xs-12 col-sm-12 col-md-6 col-lg-6">
                
                <div class="select-city-advisory">
                    <select>
                        <option>Akron</option>
                    </select> 
                </div>
                <div class="title_advisor">
                    <?php print $fields["title"]->content; ?>
                </div>
                <div class="position_advisor">
                    <?php print $fields["field_position_advisor"]->content; ?>
                </div>
                <div class="icon-mail-adv">
                    <?php print $fields["field_email_advisor"]->content; ?>
                </div>
                <div class="icon-phone-adv">
                    <?php print $fields["field_phone_advisor"]->content; ?>
                </div>
                <div class="icon-linkedin-adv">
                    <a href="http://<?php echo 'Linkedin.com/'.$linkedin; ?>" target="_blank"><?php echo 'Linkedin.com/'.$linkedin; ?></a>
                </div>
            </div>
        </div>
    </div>
</div>

<div id="foot-advisory">
    <div class="container">
        <div class="row">
            <div class="region region-foot-advisory col-xs-12 col-sm-12 col-md-12 col-lg-12">
                <h4>We'd Love to Talk! <a href="<?php print $fields["path"]->content; ?>" class="connect-with">Connect With Us</a></h4>
            </div>
        </div>
    </div>
</div>

