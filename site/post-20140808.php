<?php include('head.php'); ?>
<?php include('menu-page-clean.php'); ?>

  <div id="post" class="page">

        <div id="post-image" class="row" style="background-image: url('http://placehold.it/1920x1080');">

            <div class="header-page padd-y-75">

                <div class="header-layer-page padd-y-75 bg-wh-alpha">

                    <div class="title-page padd-x-25 fs-clr">The Way To Resolve "The Last Evil Delegate Problem"</div>
                    <div class="meta-page padd-x-25 fs-clr">HackFisher / 08 aug / tech</div>

                </div>

            </div>

        </div>

        <div class="post-wrap padd-y-50 boxed">

            <article class="row">

                <div class="post-content padd-x-25">

                    <h3>The way to resolve "The Last Evil Delegate Problem" in DPOS</h3>

                    <p>In DPOS RNG algorithm, an evil delegate can only choose to throw away an unfavorable random result by intentionally missing block on his slot turn.<br>

This could only be a problem, when the ticket draw interval is less than 101 blocks, because delegate can predict which block he will produce. Then he can choose to buy ticket which will draw in that block.<br>

If the ticket draw interval is larger than 101 blocks, which means there will be at least one shuffle in that period, then the evil delegate can not predict which block he will produce. Then his only strategy is to guess or put tickets in each of the 101 blocks. If guess, his chance is 1/101, the *expect* return he can get back by attacking is the price of that ticket when he lose, because the delegate after him will continue to replace him and draw randomly. If he choose to put ticket in each blocks, his attack cost is (101 * block_ticket_sale), but what's the expected return, still the ticket sale he put in one block, he will lose.<br>

Maybe for some games 101 blocks draw interval is too long for their requirement, and need shorter draw time, the solution is as following:<br>

                    <blockquote>Ticket result will be drawn by 2 delegates:</blockquote><br>

The first delegate's random number is only in charge of producing a number X, which is between 1 to 3, and that X will determine the Xth block after him will draw the result random for the ticket. The 2th delegate could be the evil guy who is trying to attack, but he can not predict who will produce the right drawing block before 4 blocks, his attack cost is (3 * block_ticket_sale), but his expect return is still only 1 block_ticket_sale. The only thing game rule need is to set the draw interval 1 block before the first delegate.<br>

Note: block_ticket_sale means all the ticket sale the evil delegate buy in one block.<br></p>

                </div>

                <?php include('comments.php'); ?>
            </article>

        </div>

        <div class="blog-nav bg-fs-clr padd-25">

          <ul>

              <li class="blog-prev brd-wh-clr wh-clr bg-wh-clr-hov fs-clr-hov">
                    <a href="#"><i class="icon-arrow-left"></i></a>
                </li>

                <li class="blog-home brd-wh-clr wh-clr bg-wh-clr-hov fs-clr-hov">
                    <a href="blogs.php"><i class="icon-menu"></i></a>
                </li>

                <li class="blog-next brd-wh-clr wh-clr bg-wh-clr-hov fs-clr-hov">
                    <a href="#"><i class="icon-arrow-right"></i></a>
                </li>

            </ul>

        </div>

    </div>

<?php include('copy.php'); ?>
<script type="text/javascript">
/* * * DON'T EDIT BELOW THIS LINE * * */
(function() {
  /* * * CONFIGURATION VARIABLES: EDIT BEFORE PASTING INTO YOUR WEBPAGE * * */
  var disqus_shortname = 'bitshareplay';
  var disqus_title = jQuery('#post .title-page').text();
  var disqus_url = document.location.href;

  var dsq = document.createElement('script'); dsq.type = 'text/javascript'; dsq.async = true;
  dsq.src = '//' + disqus_shortname + '.disqus.com/embed.js';
  (document.getElementsByTagName('head')[0] || document.getElementsByTagName('body')[0]).appendChild(dsq);
})();
</script>
<?php include('foot.php'); ?>