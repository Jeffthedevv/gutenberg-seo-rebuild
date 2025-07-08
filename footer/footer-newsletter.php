<section class="footer-newsletter col-sm-12">
  <div class="video-overlay">
    <video autoplay muted loop id="bg-video">
      <source 
        src="<?php echo get_template_directory_uri(); ?>/img/blocks/newsletter/newsletter-bg.mp4" 
        type="video/mp4"
      >
    </video>
		<span class="dark-overlay"></span>
  </div>
  <div class="container newsletter-content-wrapper">
    <div class="heading-wrapper col-sm-12">
      <h2>Subscribe to Our Newsletter</h2>
    </div>
    <div class="prompt-wrapper row">
    	<div class="form-wrapper col-sm-6">
        <span class="input-wrapper col-sm-12 col-md-8">
          <input 
            type="email" 
            class="form-control" 
            id="InputEmail" 
            aria-describedby="emailHelp" 
            placeholder="Email Address"
          >
        </span>
        <span class="button-wrapper  col-sm-12 col-md-3">
          <button 
            type="submit" 
            class="btn btn-primary"
          >Subscribe
          </button>
        </span>
      </div>
      <div class="contact-wrapper col-sm-6">
        <p>Ready to experience the future?</p>
        <div class="button-wrapper">
          <a href="/contact-us" class="btn btn-primary">Contact us</a>
        </div>
      </div>
    </div>
  </div>
</section>