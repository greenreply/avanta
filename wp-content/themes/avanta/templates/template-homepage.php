<?php
/**
 * Template Name: Home Page Template
 * Template Post Type: post, page
 *
 * @package WordPress
 * @subpackage Avanta
 * @since Avanta 1.0
 */

get_header();
?>

<!-- HERO -->
<?php if(get_field('enable_header_section')): ?>
<?php $header_banner_section_group = get_field('header_banner_section_group'); ?>
<section class="hero">
  <div class="hero-bg">
    <video autoplay muted loop playsinline preload="metadata" poster="<?php echo $header_banner_section_group['header_banner_bg_image']['url']; ?>">
      <source src="<?php echo $header_banner_section_group['header_banner_video_link']; ?>" type="video/mp4">
      <!-- Fallback image if video not supported -->
      <img src="<?php echo $header_banner_section_group['header_banner_bg_image']['url']; ?>" alt="<?php echo $header_banner_section_group['header_banner_bg_image']['alt']; ?>" width="<?php echo $header_banner_section_group['header_banner_bg_image']['width']; ?>" height="<?php echo $header_banner_section_group['header_banner_bg_image']['height']; ?>">
    </video>
  </div>
  <div class="hero-content">
    <?php echo $header_banner_section_group['header_location']; ?>
    <?php echo $header_banner_section_group['header_banner_title']; ?>
    <?php echo $header_banner_section_group['header_banner_tagline']; ?>
    <?php echo $header_banner_section_group['header_banner_sub_title']; ?>
      <?php 
      $header_banner_hotel_benefits = $header_banner_section_group['header_banner_hotel_benefits'];
      if( $header_banner_hotel_benefits ) { ?>
      <div class="hero-pills">
        <?php foreach( $header_banner_hotel_benefits as $header_banner_hotel_benefit ) { ?>
        <span class="hero-pill"><?php echo $header_banner_hotel_benefit['header_banner_hotel_benefits_title']; ?></span>
        <?php } ?>
      </div>
      <?php } ?>
    </div>
    <div class="hero-actions">
      <a href="<?php echo $header_banner_section_group['reserve_stay_button']['url']; ?>" class="btn-primary"><?php echo $header_banner_section_group['reserve_stay_button']['title']; ?></a>
      <a href="<?php echo $header_banner_section_group['discover_rooms_button']['url']; ?>" class="btn-outline"><?php echo $header_banner_section_group['discover_rooms_button']['title']; ?></a>
    </div>
  </div>
</section>
<?php endif; ?>

<!-- BOOKING BAR -->
<div class="booking-bar reveal">
  <div class="booking-field">
    <label>Check-in</label>
    <input type="date" id="bookCheckin" />
  </div>
  <div class="booking-field">
    <label>Check-out</label>
    <input type="date" id="bookCheckout" />
  </div>
  <div class="booking-field">
    <label>Guests</label>
    <select id="bookGuests">
      <option>1 Adult</option>
      <option selected>2 Adults</option>
      <option>2 Adults, 1 Child</option>
      <option>2 Adults, 2 Children</option>
      <option>3 Adults</option>
      <option>4 Adults</option>
    </select>
  </div>
  <div class="booking-field">
    <label>Rooms</label>
    <select id="bookRooms">
      <option>1 Room</option>
      <option>2 Rooms</option>
      <option>3 Rooms</option>
    </select>
  </div>
  <button class="btn-primary" onclick="goToRooms()">Check Availability</button>
</div>

<!-- WHY US -->
<?php if(get_field('enable_why_choose_us')): ?>
<?php $why_choose_us_group = get_field('why_choose_us_group'); ?>
<section class="section why-section" id="why">
  <div class="section-header reveal">
    <?php echo $why_choose_us_group['why_choose_us_sub_title']; ?>
    <?php echo $why_choose_us_group['why_choose_us_title']; ?>
    <div class="section-divider"></div>
    <?php echo $why_choose_us_group['why_choose_us_description']; ?>
  </div>
  <?php 
  $why_choose_us_list = $why_choose_us_group['why_choose_us_list'];
  if( $why_choose_us_list ) { ?>
  <div class="why-grid">
    <?php foreach( $why_choose_us_list as $why_choose_us ) { ?>
    <div class="why-card reveal">
      <?php echo $why_choose_us['why_choose_us_icon']; ?>
      <?php echo $why_choose_us['why_choose_us_name']; ?>
      <?php echo $why_choose_us['why_choose_us_desc']; ?>
    </div>
    <?php } ?>
  </div>
  <?php } ?>
</section>
<?php endif; ?>

<!-- ROOMS -->
<?php if(get_field('enable_accommodations')): ?>
<?php $accommodations_group = get_field('accommodations_group'); ?>
<section class="section rooms-section" id="rooms">
  <div class="section-header reveal">
    <?php echo $accommodations_group['accommodations_sub_title']; ?>
    <?php echo $accommodations_group['accommodations_title']; ?>
    <div class="section-divider"></div>
    <?php echo $accommodations_group['accommodations_description']; ?>
  </div>
  <?php 
  $accommodations_list = $accommodations_group['accommodations_list'];
  if( $accommodations_list ) { ?>
  <div class="rooms-grid">
    <?php foreach( $accommodations_list as $accommodations ) { ?>
    <div class="room-card reveal">
      <div class="room-img">
        <img src="<?php echo $accommodations['accommodation_image']['url']; ?>" alt="<?php echo $accommodations['accommodation_image']['alt']; ?>" width="<?php echo $accommodations['accommodation_image']['width']; ?>" height="<?php echo $accommodations['accommodation_image']['height']; ?>" loading="lazy" />
        <?php echo $accommodations['accommodation_size']; ?>
      </div>
      <div class="room-body">
        <?php echo $accommodations['accommodation_tag']; ?>
        <?php echo $accommodations['accommodation_name']; ?>
        <?php echo $accommodations['accommodation_desc']; ?>
        <?php 
        $accommodation_amenities = $accommodations['accommodation_amenities'];
        if( $accommodation_amenities ) { ?>
        <div class="room-features">
          <?php foreach( $accommodation_amenities as $amenities ) { ?>
            <span class="room-feat"><?php echo $amenities['accommodation_aminities_name']; ?></span>
          <?php } ?>
        </div>
        <?php } ?>
        <div class="room-footer">
          <?php echo $accommodations['accommodation_price']; ?>
          <button class="room-book" onclick="selectRoom('lake-view', 8499)">Book</button>
        </div>
      </div>
    </div>
    <?php } ?>
  </div>
  <?php } ?>
</section>
<?php endif; ?>

<!-- EXPERIENCES -->
<?php if(get_field('enable_curated_expriences')): ?>
<?php $curated_expriences_group = get_field('curated_expriences_group'); ?>
<section class="section exp-section" id="experiences">
  <div class="section-header reveal">
    <?php echo $curated_expriences_group['curated_expriences_sub_title']; ?>
    <?php echo $curated_expriences_group['curated_expriences_title']; ?>
    <div class="section-divider"></div>
    <?php echo $curated_expriences_group['curated_expriences_description']; ?>
  </div>
  <?php 
  $curated_expriences_list = $curated_expriences_group['curated_expriences_list'];
  if( $curated_expriences_list ) { ?>
  <div class="exp-grid">
    <?php foreach( $curated_expriences_list as $curated_expriences ) { ?>
    <div class="exp-card reveal">
      <img src="<?php echo $curated_expriences['curated_experiences_image']['url']; ?>" alt="<?php echo $curated_expriences['curated_experiences_image']['alt']; ?>" width="<?php echo $curated_expriences['curated_experiences_image']['width']; ?>" height="<?php echo $curated_expriences['curated_experiences_image']['height']; ?>" loading="lazy" />
      <?php $curated_expriences_badge = $curated_expriences['curated_expriences_badge']; 
        if(!empty($curated_expriences_badge)) { ?>
          <span class="exp-badge"><?php echo $curated_expriences_badge; ?></span>
      <?php } ?>
      <div class="exp-overlay"><?php echo $curated_expriences['curated_expriences_name']; ?><?php echo $curated_expriences['curated_expriences_desc']; ?></div>
    </div>
    <?php } ?>
  </div>
  <?php } ?>
</section>
<?php endif; ?>

<!-- GALLERY -->
<?php if(get_field('enable_moments_at_avanta')): ?>
<?php $moments_at_avanta_group = get_field('moments_at_avanta_group'); ?>
<section class="section gallery-section" id="gallery">
  <div class="section-header reveal">
    <?php echo $moments_at_avanta_group['moments_at_avanta_sub_title']; ?>
    <?php echo $moments_at_avanta_group['moments_at_avanta_title']; ?>
    <div class="section-divider"></div>
  </div>
  <?php 
  $images = $moments_at_avanta_group['moments_at_avanta_gallery_list'];
  if( $images ): ?>
    <div class="gallery-grid">
      <?php foreach( $images as $image ): ?>
        <div class="gallery-item reveal">
          <a href="<?php echo esc_url($image['url']); ?>" data-fancybox="gallery">
            <img src="<?php echo esc_url($image['sizes']['medium_large']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" loading="lazy" />
            <div class="gallery-overlay">
              <span class="gallery-icon">
                <svg viewBox="0 0 24 24">
                  <path d="M14 3h7v7h-2V6.41l-9.29 9.3-1.42-1.42
                  9.3-9.29H14V3zM5 5h5V3H3v7h2V5zm14
                  14h-5v2h7v-7h-2v5zM5 19v-5H3v7h7v-2H5z"/>
                </svg>
              </span>
            </div>
          </a>
        </div>
      <?php endforeach; ?>
    </div>
  <?php endif; ?>
  <div class="gallery-btn">
    <a href="https://avanta.ashishoza.co.in/gallery/" class="btn-primary">View Full Gallery</a>
  </div>
</section>
<?php endif; ?>

<!-- REELS -->
<section class="section reels-section" id="reels">
  <div class="section-header reveal">
    <p class="section-tag">Follow Along</p>
    <h2 class="section-title">Our Reels</h2>
    <div class="section-divider"></div>
    <p class="section-sub">Moments from Kashmir — live on Instagram</p>
  </div>
  <div class="reels-carousel">
    <button class="reels-nav prev" onclick="slideReels(-1)">‹</button>
    <div class="reels-track" id="reelsTrack">

      <!-- Reel 1 -->
      <div class="reel-phone side reveal" data-reel="0">
        <div class="reel-top"><div class="reel-top-left"><span class="reel-back">‹</span><span class="reel-label">Reels</span></div><span class="reel-cam">📷</span></div>
        <div class="reel-media">
          <img src="https://images.unsplash.com/photo-1597074866923-dc0589150458?w=400&q=80" alt="Kashmir Reel" />
          <div class="reel-media-overlay">
            <span class="reel-caption">10 Places to visit in Kashmir</span>
            <div class="reel-play"><svg viewBox="0 0 24 24" fill="currentColor"><polygon points="5 3 19 12 5 21 5 3"/></svg></div>
            <span class="reel-watch">Watch on Instagram</span>
          </div>
        </div>
        <div class="reel-bottom">
          <a class="reel-view-link" href="#">View more on Instagram</a>
          <div class="reel-actions">
            <div class="reel-actions-left">
              <svg class="reel-action-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20.84 4.61a5.5 5.5 0 00-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 00-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 000-7.78z"/></svg>
              <svg class="reel-action-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M21 15a2 2 0 01-2 2H7l-4 4V5a2 2 0 012-2h14a2 2 0 012 2z"/></svg>
              <svg class="reel-action-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><line x1="22" y1="2" x2="11" y2="13"/><polygon points="22 2 15 22 11 13 2 9 22 2"/></svg>
            </div>
            <svg class="reel-action-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M19 21l-7-5-7 5V5a2 2 0 012-2h10a2 2 0 012 2z"/></svg>
          </div>
          <div class="reel-likes">139,248 likes</div>
        </div>
        <div class="reel-footer-bar">
          <div class="reel-footer-icons"><div class="reel-footer-icon">A</div><span>15.2K</span></div>
          <span>⏱ 20</span>
        </div>
      </div>

      <!-- Reel 2 (Center) -->
      <div class="reel-phone center reveal" data-reel="1">
        <div class="reel-top"><div class="reel-top-left"><span class="reel-back">‹</span><span class="reel-label">Reels</span></div><span class="reel-cam">📷</span></div>
        <div class="reel-media">
          <img src="https://images.unsplash.com/photo-1506905925346-21bda4d32df4?w=400&q=80" alt="Valley Reel" />
          <div class="reel-media-overlay">
            <span class="reel-caption">This is India's most beautiful valley</span>
            <div class="reel-play"><svg viewBox="0 0 24 24" fill="currentColor"><polygon points="5 3 19 12 5 21 5 3"/></svg></div>
            <span class="reel-watch">Watch on Instagram</span>
          </div>
        </div>
        <div class="reel-bottom">
          <a class="reel-view-link" href="#">View more on Instagram</a>
          <div class="reel-actions">
            <div class="reel-actions-left">
              <svg class="reel-action-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20.84 4.61a5.5 5.5 0 00-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 00-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 000-7.78z"/></svg>
              <svg class="reel-action-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M21 15a2 2 0 01-2 2H7l-4 4V5a2 2 0 012-2h14a2 2 0 012 2z"/></svg>
              <svg class="reel-action-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><line x1="22" y1="2" x2="11" y2="13"/><polygon points="22 2 15 22 11 13 2 9 22 2"/></svg>
            </div>
            <svg class="reel-action-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M19 21l-7-5-7 5V5a2 2 0 012-2h10a2 2 0 012 2z"/></svg>
          </div>
          <div class="reel-likes">194,805 likes</div>
        </div>
        <div class="reel-footer-bar">
          <div class="reel-footer-icons"><div class="reel-footer-icon">A</div><span>15.2K</span></div>
          <span>⏱ 20</span>
        </div>
      </div>

      <!-- Reel 3 -->
      <div class="reel-phone side reveal" data-reel="2">
        <div class="reel-top"><div class="reel-top-left"><span class="reel-back">‹</span><span class="reel-label">Reels</span></div><span class="reel-cam">📷</span></div>
        <div class="reel-media">
          <img src="https://images.unsplash.com/photo-1585136917228-05e4a1e8d4e9?w=400&q=80" alt="Mountains Reel" />
          <div class="reel-media-overlay">
            <span class="reel-caption">Dal Lake sunrise views 🌅</span>
            <div class="reel-play"><svg viewBox="0 0 24 24" fill="currentColor"><polygon points="5 3 19 12 5 21 5 3"/></svg></div>
            <span class="reel-watch">Watch on Instagram</span>
          </div>
        </div>
        <div class="reel-bottom">
          <a class="reel-view-link" href="#">View more on Instagram</a>
          <div class="reel-actions">
            <div class="reel-actions-left">
              <svg class="reel-action-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20.84 4.61a5.5 5.5 0 00-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 00-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 000-7.78z"/></svg>
              <svg class="reel-action-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M21 15a2 2 0 01-2 2H7l-4 4V5a2 2 0 012-2h14a2 2 0 012 2z"/></svg>
              <svg class="reel-action-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><line x1="22" y1="2" x2="11" y2="13"/><polygon points="22 2 15 22 11 13 2 9 22 2"/></svg>
            </div>
            <svg class="reel-action-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M19 21l-7-5-7 5V5a2 2 0 012-2h10a2 2 0 012 2z"/></svg>
          </div>
          <div class="reel-likes">433,863 likes</div>
        </div>
        <div class="reel-footer-bar">
          <div class="reel-footer-icons"><div class="reel-footer-icon">A</div><span>15.2K</span></div>
          <span>⏱ 20</span>
        </div>
      </div>

      <!-- Reel 4 (hidden, for carousel) -->
      <div class="reel-phone side reveal" data-reel="3" style="display:none;">
        <div class="reel-top"><div class="reel-top-left"><span class="reel-back">‹</span><span class="reel-label">Reels</span></div><span class="reel-cam">📷</span></div>
        <div class="reel-media">
          <img src="https://images.unsplash.com/photo-1540541338287-41700c6e5e5e?w=400&q=80" alt="Houseboat Reel" />
          <div class="reel-media-overlay">
            <span class="reel-caption">Life on a houseboat 🛶</span>
            <div class="reel-play"><svg viewBox="0 0 24 24" fill="currentColor"><polygon points="5 3 19 12 5 21 5 3"/></svg></div>
            <span class="reel-watch">Watch on Instagram</span>
          </div>
        </div>
        <div class="reel-bottom">
          <a class="reel-view-link" href="#">View more on Instagram</a>
          <div class="reel-actions">
            <div class="reel-actions-left">
              <svg class="reel-action-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20.84 4.61a5.5 5.5 0 00-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 00-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 000-7.78z"/></svg>
              <svg class="reel-action-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M21 15a2 2 0 01-2 2H7l-4 4V5a2 2 0 012-2h14a2 2 0 012 2z"/></svg>
              <svg class="reel-action-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><line x1="22" y1="2" x2="11" y2="13"/><polygon points="22 2 15 22 11 13 2 9 22 2"/></svg>
            </div>
            <svg class="reel-action-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M19 21l-7-5-7 5V5a2 2 0 012-2h10a2 2 0 012 2z"/></svg>
          </div>
          <div class="reel-likes">87,421 likes</div>
        </div>
        <div class="reel-footer-bar">
          <div class="reel-footer-icons"><div class="reel-footer-icon">A</div><span>15.2K</span></div>
          <span>⏱ 20</span>
        </div>
      </div>

    </div>
    <button class="reels-nav next" onclick="slideReels(1)">›</button>
  </div>
</section>

<!-- STATS -->
<?php if(get_field('enable_hotel_avanta_stats')): ?>
<?php $hotel_avanta_stats_group = get_field('hotel_avanta_stats_group'); ?>
<section class="stats-section reveal">
  <?php 
  $hotel_avanta_stats_list = $hotel_avanta_stats_group['hotel_avanta_stats_list'];
  if( $hotel_avanta_stats_list ) { ?>
  <div class="stats-grid">
    <?php foreach( $hotel_avanta_stats_list as $hotel_avanta_stats ) { ?>
      <div><?php echo $hotel_avanta_stats['hotel_avanta_stats_name']; ?><?php echo $hotel_avanta_stats['hotel_avanta_stats_number']; ?></div>
    <?php } ?>
  </div>
  <?php } ?>
</section>
<?php endif; ?>

<!-- TESTIMONIALS -->
<?php if(get_field('enable_client_testimonials', 'option')): ?>
<?php $client_testimonials_group = get_field('client_testimonials_group', 'option'); ?>
<section class="section test-section">
  <div class="section-header reveal">
    <?php echo $client_testimonials_group['client_testimonial_sub_title']; ?>
    <?php echo $client_testimonials_group['client_testimonial_title']; ?>
    <div class="section-divider"></div>
  </div>
  <?php 
  $client_testimonials_list = $client_testimonials_group['client_testimonials_list'];
  if( $client_testimonials_list ) { ?>
  <div class="swiper testSwiper">
    <div class="swiper-wrapper">
      <?php foreach( $client_testimonials_list as $client_testimonials ) { ?>
        <div class="swiper-slide">
          <div class="test-card reveal">
            <div class="test-quote">"</div>
            <div class="test-rating">
              <?php 
                $rating = (int) $client_testimonials['client_testimonial_rating'];

                for ($i = 1; $i <= 5; $i++) {
                  if ($i <= $rating) {
                    echo '<svg class="star filled" viewBox="0 0 24 24">
                      <path d="M12 17.27L18.18 21l-1.64-7.03L22 9.24
                      l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46
                      4.73L5.82 21z"/>
                    </svg>';
                  } else {
                    echo '<svg class="star empty" viewBox="0 0 24 24">
                      <path d="M12 17.27L18.18 21l-1.64-7.03L22 9.24
                      l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46
                      4.73L5.82 21z"/>
                    </svg>';
                  }
                }
              ?>
            </div>
            <?php echo $client_testimonials['client_testimonial_desc']; ?>

            <div class="test-divider"></div>

            <?php echo $client_testimonials['client_testimonial_name']; ?>
            <?php echo $client_testimonials['client_testimonial_location']; ?>
          </div>
        </div>
      <?php } ?>
    </div>

    <!-- Arrows -->
    <div class="swiper-button-next"></div>
    <div class="swiper-button-prev"></div>
  </div>
  <?php } ?>
</section>
<?php endif; ?>

<?php
get_footer();