<div class="content">
		<div class="itemSorter"></div><!-- / itemSorter -->
		<div class="contentListings">
			<ul class="media-list">
			  <?php if(count($movies)): ?>
			  <?php foreach($movies as $movie): ?>
			  <li class="media">
			    <a class="pull-left imgThumb" href="single-movie.html">
			      <img class="media-object" data-src="holder.js/120x140">
			    </a>
			    <div class="media-body">
			      <a href="<?php echo $this->Html->url('/movies/view/' .  $movie['Movie']['id']); ?>"><h2 class="movie-title"><?php echo $movie['Movie']['name']; ?></h4></a>
			      <div class="meta"><span class="pg-ratings">PG-13</span>  |  <span class="duration">1hr 27mins</span></div>
			      <div class="excerpt">
			      	<p><?php echo $movie['Movie']['description']; ?></p>
			      </div>			      
			    </div>
			  </li>
			  <?php endforeach; ?>
			  <?php endif; ?>
		
			</ul>
		</div><!-- / contentListings -->
</div><!-- / content -->