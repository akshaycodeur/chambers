<div class="container">
  <div class="row">
    <div class="com-md-12">
    <div class="post-header">
        <div class="post-date">
        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path d="M0 0h24v24H0z" stroke="none"></path><path d="M11.795 21H5a2 2 0 01-2-2V7a2 2 0 012-2h12a2 2 0 012 2v4"></path><circle cx="18" cy="18" r="4"></circle><path d="M15 3v4M7 3v4M3 11h16M18 16.496V18l1 1"></path></svg>
          <?php
          the_date();
          ?>
        </div>
        <div class="various-tags">
          <?php
            the_tags( '<span></span>','<span></span>','<span></span>');
          ?>
        </div>
      </div>
    </div>
    <div class="col-md-12">

      <h2 class="post-title">
      <?php
        the_title();       
      ?>
      </h2>

      <?php
        the_content();       
      ?>
      
    </div>
  </div>
</div>