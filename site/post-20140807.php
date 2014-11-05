<?php include('head.php'); ?>
<?php include('menu-page-clean.php'); ?>

	<div id="post" class="page">

        <div id="post-image" class="row" style="background-image: url('http://placehold.it/1920x1080');">
        
            <div class="header-page padd-y-75">
        
                <div class="header-layer-page padd-y-75 bg-wh-alpha">
                
                    <div class="title-page padd-x-25 fs-clr">Bitshares Play, PLS and Chips Inner Exchange Model Introduction.</div>
                    <div class="meta-page padd-x-25 fs-clr">HackFisher / 07 aug / tech</div>
                    
                </div>
                
            </div>
            
        </div>
        
        <div class="post-wrap padd-y-50 boxed">
                            
            <article class="row">
            
                <div class="post-content padd-x-25">
        
                    <h3>Bitshares Play, PLS and chips inner exchange model introduction</h3>
                    
                    <p>PLS is the main token of the DAC, and chips are special assets issued by the games. <br></p>
                     
                    <p>It is different from Bitshares market issued asset like BitUSD, also different from Bitshares user issued asset. There is an exchange model between PLS and chips, which is part the DAC consensus:<br>
                    Every chip asset are created with some pls collateral recorded by the system, and a total supply. After created, the collateral pls amount will be frozen in the system balance.<br>
                    The game itself is free to adjust its supply according to its own business model, but there will be a system convert price between the chip and pls, according to the pls collateral and chip supply:<br>

<blockquote>1 chip = ( pls collateral amount / chip supply amount) * 1 pls</blockquote><br>

This means anyone can buy/sell (in other word create/destroy) chips according to the price of current block, the amount of pls used to buy chip will be added to that collateral of the chips, and new chips will increase the chips supply. In next block, there will be a new price, according to the updated pls collateral supply and chip supply.<br>

In this way, the best games which are welcome will have more collateral, the best profitable game will have better chip prize increasing related to pls and thus other equity. The games with unrestrained dilution similar to Tencent's Q Coin is free and ok, but will have their price of potential drop down.<br>

One more thing, every game want to use chips as their game tokens requires:<br>
<blockquote>1. Provable total supply of the game tokens</blockquote><br>
<blockquote>2. One way of 1: 1 transfer between chips in Bitshares Play and their system, using cross chain or support system escrow. Or more easily, develop games inside Play Platform.</blockquote><br>
                    </p>
                    
                </div>
                
                <!--?php include('comments.php'); ?-->
                
            </article>
                              
        </div>
        
        <div class="blog-nav bg-fs-clr padd-25">
        
        	<ul>
            
            	<li class="blog-prev brd-wh-clr wh-clr bg-wh-clr-hov fs-clr-hov">
                    <a href="#"><i class="icon-arrow-left"></i></a>
                </li>
                
                <li class="blog-home brd-wh-clr wh-clr bg-wh-clr-hov fs-clr-hov">
                    <a href="blog-page-1.php"><i class="icon-menu"></i></a>
                </li>
                        
                <li class="blog-next brd-wh-clr wh-clr bg-wh-clr-hov fs-clr-hov">
                    <a href="#"><i class="icon-arrow-right"></i></a>
                </li>
            
            </ul>
        
        </div>
                            
    </div>
    
<?php include('copy.php'); ?>
<?php include('foot.php'); ?>