@extends('layouts.app')

@section('content')
<div class="banner">
     <div class="bg-color">
       <div class="container">
         <div class="row">
           <div class="banner-text text-center">
             <div class="text-border">
               <h2 class="text-dec">BE HEARD</h2>
             </div>
             <div class="intro-para text-center quote">
               <p class="big-text">Your Voice . . . Your Power.</p>
               <p class="small-text">Yogera is a CItizen Engagement Platform. A joint initiative by Technologists, Civil Society Organizations and Activists to support improved service delivery by connecting citizens to their government and increasing government responsiveness to raised issues in communities. </p>
               <a href="/about-us" class="btn">Learn more</a>
             </div>
             <a href="#feature" class="mouse-hover"><div class="mouse"></div></a>
           </div>
         </div>
       </div>
     </div>
   </div>
<section id ="feature" class="section-padding">
  <div class="container">
    <div class="row">
      <div class="header-section text-center">
        <h2>Features</h2>
        <p>Together our voice can bring the change we want. <br />Speak out! Yogera</p>

        <hr class="bottom-line">
      </div>
      <div class="feature-info">
        <div class="fea">
          <div class="col-md-4">
            <div class="heading pull-right">
              <h4>Celebrate a hero</h4>
              <p>Know someone in a public office who is doing their best to serve their community? Appreciate them by celebrating them here. Don't let them go un-noticed!</p>
              <a href="/heros" class="btn btn-success">See our heros</a>
            </div>
            <div class="fea-img pull-left">
              <i class="fa fa-birthday-cake"></i>
            </div>
          </div>
        </div>
        <div class="fea">
          <div class="col-md-4">
            <div class="heading pull-right">
              <h4>Report a situtation</h4>
              <p>Seen something that is not right in your community hospital, school, public office, community and the neighborhood? Do not be quiet speak out. </p>
              <a href="/reported-situations" class="btn btn-success">See Reported situation</a>
            </div>
            <div class="fea-img pull-left">
              <i class="fa fa-bell"></i>
            </div>
          </div>
        </div>
        <div class="fea">
          <div class="col-md-4">
            <div class="heading pull-right">
              <h4>Know Your rights</h4>
              <p>Did you know that if a traffic officer stops you, they are not allowed to get into your car? If an officer tries to do that, they are breaking the law!</p>
              <a href="/know-your-rights" class="btn btn-success">Know your rights</a>
            </div>
            <div class="fea-img pull-left">
              <i class="fa fa-user-secret"></i>
            </div>
          </div>
        </div>
    </div>
    </div>
  </div>
</section>
<!--/ feature-->
<!--Cta-->
<section id="testimonial" style="min-height: 200px;">
  <div class="container">
    <div class="row">
        <div class="col-lg-12">
          <h1 class="text-center">Want to stay in the loop?</h1>
          <p class="cta-2-txt">Sign up for our free weekly newsletter, we’ll keep you posted.</p>
         <div class="cta-2-form text-center">
          <form action="#" method="post" id="workshop-newsletter-form">
                <input name="" placeholder="Enter Your Email Address" type="email">
                <input class="cta-2-form-submit-btn" value="Subscribe" type="submit">
            </form>
         </div>
        </div>
    </div>
  </div>
</section>
<!--/ Cta-->
<!--work-shop-->
<section id="work-shop" class="section-padding">
  <div class="container">
    <div class="row">
      <div class="header-section text-center">
        <h1>Our campaigns</h1>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Exercitationem nesciunt vitae,<br> maiores, magni dolorum aliquam.</p>

        <hr class="bottom-line">
      </div>
      @foreach($campaigns as $campaign)
        <div class="col-md-4 col-sm-6">
          <div class="service-box text-center">
            <!-- <div class="icon-box">
              <i class="fa fa-html5 color-green"></i>
            </div> -->
            <div class="icon-text">
              <h5 class="ser-text">{{ $campaign['title']}}</h5>
              <p class="center-justify">{!! substr($campaign['content'],0, 400) !!}....</p>
              <a href="/campaigns" class="btn btn-success">Learn more</a>
            </div>
          </div>
        </div>
      @endforeach    
      
    </div>
  </div>
</section>
@endsection
