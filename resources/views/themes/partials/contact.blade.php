<div class="contact_area">
  <div class="container">
    <div class="row">
      <div class="contact_section">
          <h1>Contact us</h1>
          <p>OUR TEAM INCLUDES GREAT THINKERS. YOU WOULD LOVE TO WORK WITH THEM AS THEY ARE JUST AMAZING PEOPLE.</p>

                    <div class="col-md-6">
                        <div class="contact_form">
                        <fieldset id="contact_form">
                            <div id="result"></div>
                                @if ($errors->any())
                                <div class="alert alert-danger">
                                    {!! @implode($errors->all('<p>:message</p>')) !!}
                                </div>
                                @endif
                                <label for="name">
                                {!! Form::text('name', null, ['id' => 'name', 'placeholder' => 'Enter your name']) !!}
                                </label>
                                
                                <label for="email">
                                {!! Form::text('email', null, ['id' => 'email', 'placeholder' => 'Enter Your Email']) !!}
                                </label>
                                
                                <label for="phone">
                                {!! Form::text('phone', null, ['id' => 'phone', 'placeholder' => 'Phone Number']) !!}
                                </label>
                                
                                <label for="message">
                                {!! Form::textarea('message', null, ['id' => 'message', 'placeholder' => 'Enter Your Message']) !!}
                                </label>
                                <button class="submit_btn" id="submit_btn" href=".contact_area">Submit</button>
                                </label>
                        </fieldset>                           
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="contact_text">
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                            quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo</p>
                            <h3>contact info</h3>
                            <ul class="contact_info">
                                <li>saya@indodesign.tk</li>
                                <li>Semarang,Jawa-Tengah</li>
                                <li>+880174120000,+880174120000,</li>
                            </ul>
                            <h3>follow us</h3>
                            <ul class="contact_social">
                                <a href="#"><li><i class="fb fa fa-facebook-square"></i></li></a>
                                <a href="#"><li><i class="tw fa fa-twitter-square"></i></li></a>
                                <a href="#"><li><i class="rss fa fa-rss-square"></i></li></a>
                                <a href="#"><li><i class="gp fa fa-google-plus-square"></i></li></a>
                            </ul>                            
                        </div>
                    </div>
      </div>
    </div>
  </div> 
</div><!-- contact area end   -->