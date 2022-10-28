@extends('client.ui.base')
@section('head') 
<link href="{{asset('assets/css/magnific-popup.css')}}" rel="stylesheet">
<link href="{{asset('assets/css/gallery-1.css')}}" rel="stylesheet">
<style>
   

   body { 
    background: #080808;
}
.gallery-zoom i{
    line-height:45px;
}
</style>
@endsection





@section('content')

 
<div id="wrapper">

@include('client.ui.common.header')

<section id="inner-headline">
            <div class="container">

                <div class="row">
                    <div class="col-lg-12">
                        <h2 class="pageTitle">Portfolios</h2>
                    </div>
                </div>
            </div>
        </section>
        <section id="content">
            <section id="pricing">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="about-logo">
                                <h3>Our Projects Portfolios<span class="color"></span></h3>
                                <p style="color:white">All our projects are carried out with our  project management system which includes group chat communication, order processing and project management tools. This allows our office and site staff to be in immediate communication and process changes, orders and general progress instantly between managers and operatives.</p>
                            </div>
                            
                        </div>
                    </div>
                    </div>
                  
                    <div class="row">
                        <div id="isotope-gallery-container">
                            <div class="col-md-4 col-sm-6 col-xs-12 gallery-item-wrapper artwork creative">
                                <div class="gallery-item">
                                    <div class="gallery-thumb">
                                        <img src="{{asset('assets/img/works/work.jpg')}}" class="img-responsive" alt="1st gallery Thumb">
                                        <div class="image-overlay"></div>
                                        <a href="{{asset('assets/img/works/work.jpg')}}" class="gallery-zoom"><i class="fa fa-eye"></i></a>

                                    </div>
                                    <div class="gallery-details">
                                        <div class="editContent">
                                            <h5>The Retreat Palm Dubai @Palm Jumeirah</h5>
                                        </div>
                                        <div class="editContent">
                                            <!--<p>Nullam id dolor id nibh ultricies vehicula.</p>-->
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- /.gallery-item-wrapper -->
                            <div class="col-md-4 col-sm-6 col-xs-12 gallery-item-wrapper nature outside">
                                <div class="gallery-item">
                                    <div class="gallery-thumb">
                                        <img src="{{asset('assets/img/premium-room.jpg')}}" class="img-responsive" alt="2nd gallery Thumb">
                                        <div class="image-overlay"></div>
                                        <a href="{{asset('assets/img/premium-room.jpg')}}" class="gallery-zoom"><i class="fa fa-eye"></i></a>

                                    </div>
                                    <div class="gallery-details">
                                        <div class="editContent">
                                            <h5>The Retreat Palm Dubai @Palm Jumeirah</h5>
                                        </div>
                                        <div class="editContent">
                                            <!--<p>Nullam id dolor id nibh ultricies vehicula.</p>-->
                                        </div>
                                    </div>
                                </div>
                            </div>
							  <div class="col-md-4 col-sm-6 col-xs-12 gallery-item-wrapper nature outside">
                                <div class="gallery-item">
                                    <div class="gallery-thumb">
                                        <img src="{{asset('assets/img/service2.jpg')}}" class="img-responsive" alt="2nd gallery Thumb">
                                        <div class="image-overlay"></div>
                                        <a href="{{asset('assets/img/service2.jpg')}}" class="gallery-zoom"><i class="fa fa-eye"></i></a>

                                    </div>
                                    <div class="gallery-details">
                                        <div class="editContent">
                                            <h5>The Royal Atlantis</h5>
                                        </div>
                                        <div class="editContent">
                                            <!--<p>Nullam id dolor id nibh ultricies vehicula.</p>-->
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- /.gallery-item-wrapper -->
                            <div class="col-md-4 col-sm-6 col-xs-12 gallery-item-wrapper photography artwork">
                                <div class="gallery-item">
                                    <div class="gallery-thumb">
                                        <img src="{{asset('assets/img/large_Rendering-of-a-gold-bedroom1.jpg')}}" class="img-responsive" alt="3rd gallery Thumb">
                                        <div class="image-overlay"></div>
                                        <a href="{{asset('assets/img/large_Rendering-of-a-gold-bedroom1.jpg')}}" class="gallery-zoom"><i class="fa fa-eye"></i></a>

                                    </div>
                                    <div class="gallery-details">
                                        <div class="editContent">
                                            <h5>The Retreat Palm Dubai @Palm Jumeirah</h5>
                                        </div>
                                        <div class="editContent">
                                            <!--<p>Nullam id dolor id nibh ultricies vehicula.</p>-->
                                        </div>
                                    </div>
                                </div>
                            </div>
                         
                            <div class="col-md-4 col-sm-6 col-xs-12 gallery-item-wrapper nature">
                                <div class="gallery-item">
                                    <div class="gallery-thumb">
                                        <img src="{{asset('assets/img/works/work9.jpg')}}" class="img-responsive" alt="5th gallery Thumb">
                                        <div class="image-overlay"></div>
                                        <a href="{{asset('assets/img/works/work9.jpg')}}" class="gallery-zoom"><i class="fa fa-eye"></i></a>

                                    </div>
                                    <div class="gallery-details">
                                        <div class="editContent">
                                            <h5>The Retreat Palm Dubai @Palm Jumeirah</h5>
                                        </div>
                                        <div class="editContent">
                                            <!--<p>Nullam id dolor id nibh ultricies vehicula.</p>-->
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- /.gallery-item-wrapper -->
                            <div class="col-md-4 col-sm-6 col-xs-12 gallery-item-wrapper artwork creative">
                                <div class="gallery-item">
                                    <div class="gallery-thumb">
                                        <img src="{{asset('assets/img/works/sevens.jpg')}}" class="img-responsive" alt="6th gallery Thumb">
                                        <div class="image-overlay"></div>
                                        <a href="{{asset('assets/img/works/sevens.jpg')}}" class="gallery-zoom"><i class="fa fa-eye"></i></a>

                                    </div>
                                    <div class="gallery-details">
                                        <div class="editContent">
                                            <h5>Sevens Saloon Business Bay</h5>
                                        </div>
                                        <div class="editContent">
                                            <!--<p>Nullam id dolor id nibh ultricies vehicula.</p>-->
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-6 col-xs-12 gallery-item-wrapper nature">
                                <div class="gallery-item">
                                    <div class="gallery-thumb">
                                        <img src="{{asset('assets/img/works/work4.jpg')}}" class="img-responsive" alt="5th gallery Thumb">
                                        <div class="image-overlay"></div>
                                        <a href="{{asset('assets/img/works/work4.jpg')}}" class="gallery-zoom"><i class="fa fa-eye"></i></a>

                                    </div>
                                    <div class="gallery-details">
                                        <div class="editContent">
                                            <h5>Hotel Indigo</h5>
                                        </div>
                                        <div class="editContent">
                                            <!--<p>Nullam id dolor id nibh ultricies vehicula.</p>-->
                                        </div>
                                    </div>
                                </div>
                            </div>
                           
                            <div class="col-md-4 col-sm-6 col-xs-12 gallery-item-wrapper nature">
                                <div class="gallery-item">
                                    <div class="gallery-thumb">
                                        <img src="{{asset('assets/img/metropolitan-hotel-dubai.jpg')}}" class="img-responsive" alt="5th gallery Thumb">
                                        <div class="image-overlay"></div>
                                        <a href="{{asset('assets/img/metropolitan-hotel-dubai.jpg')}}" class="gallery-zoom"><i class="fa fa-eye"></i></a>

                                    </div>
                                    <div class="gallery-details">
                                        <div class="editContent">
                                            <h5>Metropolitan Hotel Jumeirah</h5>
                                        </div>
                                        <div class="editContent">
                                            <!--<p>Nullam id dolor id nibh ultricies vehicula.</p>-->
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-4 col-sm-6 col-xs-12 gallery-item-wrapper nature">
                                <div class="gallery-item">
                                    <div class="gallery-thumb">
                                        <img src="{{asset('assets/img/slides/hotel-indigo-dubai-6633382169-2x1.jpg')}}" class="img-responsive" alt="5th gallery Thumb">
                                        <div class="image-overlay"></div>
                                        <a href="{{asset('assets/img/slides/hotel-indigo-dubai-6633382169-2x1.jpg')}}" class="gallery-zoom"><i class="fa fa-eye"></i></a>

                                    </div>
                                    <div class="gallery-details">
                                        <div class="editContent">
                                            <h5>Hotel Indigo Business Bay</h5>
                                        </div>
                                        <div class="editContent">
                                            <!--<p>Nullam id dolor id nibh ultricies vehicula.</p>-->
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-6 col-xs-12 gallery-item-wrapper nature">
                                <div class="gallery-item">
                                    <div class="gallery-thumb">
                                        <img src="{{asset('assets/img/slides/3807_ROYAL_ATLANTIS---VIEW_02---RESIDENCE_FACADE_REV04_DM.jpg')}}" class="img-responsive" alt="5th gallery Thumb">
                                        <div class="image-overlay"></div>
                                        <a href="{{asset('assets/img/slides/3807_ROYAL_ATLANTIS---VIEW_02---RESIDENCE_FACADE_REV04_DM.jpg')}}" class="gallery-zoom"><i class="fa fa-eye"></i></a>

                                    </div>
                                    <div class="gallery-details">
                                        <div class="editContent">
                                            <h5>The Royal Atlantis</h5>
                                        </div>
                                        <div class="editContent">
                                            <!--<p>Nullam id dolor id nibh ultricies vehicula.</p>-->
                                        </div>
                                    </div>
                                </div>
                            </div>
                       
                            <div class="col-md-4 col-sm-6 col-xs-12 gallery-item-wrapper nature">
                                <div class="gallery-item">
                                    <div class="gallery-thumb">
                                        <img src="{{asset('assets/img/WORK2%20(1).jpg')}}" class="img-responsive" alt="5th gallery Thumb">
                                        <div class="image-overlay"></div>
                                        <a href="{{asset('assets/img/WORK2%20(1).jpg')}}" class="gallery-zoom"><i class="fa fa-eye"></i></a>

                                    </div>
                                    <div class="gallery-details">
                                        <div class="editContent">
                                            <h5>Marhaba Home nursing & Spider Work</h5>
                                        </div>
                                        <div class="editContent">
                                            <!--<p>Nullam id dolor id nibh ultricies vehicula.</p>-->
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-4 col-sm-6 col-xs-12 gallery-item-wrapper nature">
                                <div class="gallery-item">
                                    <div class="gallery-thumb">
                                        <img src="{{asset('assets/img/MARHABA%20(1).jpg')}}" class="img-responsive" alt="5th gallery Thumb">
                                        <div class="image-overlay"></div>
                                        <a href="{{asset('assets/img/MARHABA%20(1).jpg')}}" class="gallery-zoom"><i class="fa fa-eye"></i></a>

                                    </div>
                                    <div class="gallery-details">
                                        <div class="editContent">
                                            <h5>Marhaba Home nursing & Spider Work</h5>
                                        </div>
                                        <div class="editContent">
                                            <!--<p>Nullam id dolor id nibh ultricies vehicula.</p>-->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /.isotope-gallery-container -->
                    </div>
                    <!-- /.row -->
                    <!-- /.container -->
                </div>
            </section>
            <!--// End Gallery 1-2 -->
    </div>
    </section>
    </section>




    @include('client.ui.common.footer')

@endsection

</div>
@section('bottom')
<script type="text/javascript">
   $(document).ready(function() {
   
   
    
   
   
   
      });
</script>
@endsection