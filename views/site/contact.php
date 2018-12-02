<?php include ROOT . '/views/layouts/header.php'; ?>

<!-- start main -->
<div class="main_bg">
    <div class="wrap">
        <div class="main">
            <div class="contact">
                <div class="contact_info">
                    <h2>get in touch</h2>
                    <div class="map">
                        <iframe width="100%" height="250" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.co.in/maps?f=q&amp;source=s_q&amp;hl=en&amp;geocode=&amp;q=Lighthouse+Point,+FL,+United+States&amp;aq=4&amp;oq=light&amp;sll=26.275636,-80.087265&amp;sspn=0.04941,0.104628&amp;ie=UTF8&amp;hq=&amp;hnear=Lighthouse+Point,+Broward,+Florida,+United+States&amp;t=m&amp;z=14&amp;ll=26.275636,-80.087265&amp;output=embed"></iframe><br><small><a href="https://maps.google.co.in/maps?f=q&amp;source=embed&amp;hl=en&amp;geocode=&amp;q=Lighthouse+Point,+FL,+United+States&amp;aq=4&amp;oq=light&amp;sll=26.275636,-80.087265&amp;sspn=0.04941,0.104628&amp;ie=UTF8&amp;hq=&amp;hnear=Lighthouse+Point,+Broward,+Florida,+United+States&amp;t=m&amp;z=14&amp;ll=26.275636,-80.087265" style="color:#777777;text-align:left;font-size:13px;font-family: 'Source Sans Pro', sans-serif;">View Larger Map</a></small>
                    </div>
                </div>
                <?php if ($result): ?>
                    <h2>We will answer you soon! Please wait for answer!</h2>
                <?php else: ?>
                <div class="contact-form">
                    <h2>Contact Us</h2>
                    <?php if (isset($errors) && is_array($errors)): ?>
                        <ul>
                            <?php foreach ($errors as $error): ?>
                                <li style="color: #ff0905; font-size: 25px;"> <?php echo $error; ?></li>
                            <?php endforeach; ?>
                        </ul>
                    <?php endif; ?>
                    <form method="post" action="#">
                        <div>
                            <span><label>Name</label></span>
                            <span><input name="userName" type="text" class="textbox"></span>
                        </div>
                        <div>
                            <span><label>E-mail</label></span>
                            <span><input name="userEmail" type="text" class="textbox"></span>
                        </div>
                        <div>
                            <span><label>Subject</label></span>
                            <span><textarea name="userMsg"> </textarea></span>
                        </div>
                        <div>
                            <span><input type="submit" name="submit" value="Submit us"></span>
                        </div>
                    </form>
                </div>
                <?php endif; ?>
                <div class="clear"></div>
            </div>
        </div>
    </div>
</div>


<?php include ROOT . '/views/layouts/footer.php'; ?>

