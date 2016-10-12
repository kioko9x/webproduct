<div class="box-right">
     <div class="title tittle-box-right" style="margin-top: -119px;">
	        <h2> Hỗ trợ trực tuyến </h2>
	</div>
	    <div class="content-box">
	        
	         <div class='support'>
                    <?php foreach ($supports as $row):?>
                    <strong><?php echo $row->name?> </strong>				
          	      <p>
          	         <img style="margin-bottom:-3px" src="<?php echo public_url()?>/site/images/phone.png"> <?php echo $row->phone?>
          	      </p>
          	      
          		  <p>
          			<a rel="nofollow" href="mailto:<?php echo $row->gmail?>">
          			    <img style="margin-bottom:-3px" src="<?php echo public_url()?>/site/images/email.png"> Email: <?php echo substr($row->gmail, 0,12)?>...
          		    </a>
          		  </p>
          		  <p>
          			<a rel="nofollow" href="skype:<?php echo $row->skype?>">
          			     <img style="margin-bottom:-3px" src="<?php echo public_url()?>/site/images/skype.png"> Skype: <?php echo $row->skype?>
          			</a>
          		</p>	
          		<?php endforeach;?>
          </div>	
	    </div>
</div>