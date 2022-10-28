@extends('client.ui.base')
@section('head')
<style>
   

   body { 
    background: #080808;
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
                        <h2 class="pageTitle">Services</h2>
                    </div>
                </div>
            </div>
        </section>
        <section id="content">
            <div class="container content">
                <!-- Service Blcoks -->

                <div class="row">
                    <div class="col-md-12">
                        <div class="about-logo">
                            <h3>Our Best <span class="color">Services</span></h3>
                            <p style="color:white">Perfect space utilization for the project and experienced approach to each nook and corner.Quality of execution in a premium level with a hassle free coordination and gives a perfect completion Individual customized Design developed for your project which is unique in ideas and design from an experienced design panel for a tailor made finish.</p>
                            <p></p>
                        </div>
                    </div>
                </div>

                <!-- Info Blcoks -->
                <!--<div class="row">
                <div class="col-sm-4 info-blocks">
                    <i class="icon-info-blocks fa fa-bell-o"></i>
                    <div class="info-blocks-in">
                        <h3>Interior Fit-Out Work</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolores quae porro consequatur aliquam, incidunt</p>
                    </div>
                </div>
                <div class="col-sm-4 info-blocks">
                    <i class="icon-info-blocks fa fa-hdd-o"></i>
                    <div class="info-blocks-in">
                        <h3>Design Services</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolores quae porro consequatur aliquam, incidunt</p>
                    </div>
                </div>
                <div class="col-sm-4 info-blocks">
                    <i class="icon-info-blocks fa fa-lightbulb-o"></i>
                    <div class="info-blocks-in">
                        <h3>Suspended Ceiling</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolores quae porro consequatur aliquam, incidunt</p>
                    </div>
                </div>
            </div>-->
                <!-- End Info Blcoks -->
                <!-- Info Blcoks -->
                <!--<div class="row">
            <div class="col-sm-4 info-blocks">
                <i class="icon-info-blocks fa fa-code"></i>
                <div class="info-blocks-in">
                    <h3>Partition Work</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolores quae porro consequatur aliquam, incidunt</p>
                </div>
            </div>
            <div class="col-sm-4 info-blocks">
                <i class="icon-info-blocks fa fa-compress"></i>
                <div class="info-blocks-in">
                    <h3>Wall Cladding – Tile/Marble/Wood</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolores quae porro consequatur aliquam, incidunt</p>
                </div>
            </div>
            <div class="col-sm-4 info-blocks">
                <i class="icon-info-blocks fa fa-compress"></i>
                <div class="info-blocks-in">
                    <h3> Painting/Wall Paper</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolores quae porro consequatur aliquam, incidunt</p>
                </div>
            </div>
            <div class="col-sm-4 info-blocks">
                <i class="icon-info-blocks fa fa-compress"></i>
                <div class="info-blocks-in">
                    <h3>
                        Glass Works
                    </h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolores quae porro consequatur aliquam, incidunt</p>
                </div>
            </div>
            <div class="col-sm-4 info-blocks">
                <i class="icon-info-blocks fa fa-compress"></i>
                <div class="info-blocks-in">
                    <h3>
                        Joinery Works
                    </h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolores quae porro consequatur aliquam, incidunt</p>
                </div>
            </div>
            <div class="col-sm-4 info-blocks">
                <i class="icon-info-blocks fa fa-compress"></i>
                <div class="info-blocks-in">
                    <h3> Raised Access Floors</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolores quae porro consequatur aliquam, incidunt</p>
                </div>
            </div>
            <div class="col-sm-4 info-blocks">
                <i class="icon-info-blocks fa fa-compress"></i>
                <div class="info-blocks-in">
                    <h3> MEP Work</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolores quae porro consequatur aliquam, incidunt</p>
                </div>
            </div>-->

               
                <!--<div class="col-sm-4 info-blocks">
                                    <i class="icon-info-blocks fa fa-html5"></i>
                                    <div class="info-blocks-in">
                                        <h3> Flooring – Tile/Marble/Granite/Carpet</h3>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolores quae porro consequatur aliquam, incidunt</p>
                                    </div>
                                </div>
            </div>-->
                <!-- End Info Blcoks -->
                <div class="row service-v1 margin-bottom-40">
                    <div class="col-md-4 md-margin-bottom-40">
                        <div class="card small">
                            <div class="card-image">
                             <a class="para-link" href="interior-fit-out-works" > <img class="img-responsive" src="{{asset('assets/img/premium-room.jpg')}}" alt="Interior Fit-Out Works"></a>
                                
                            </div>
                            <div class="card-content">
                               <h3> <a class="service_title" href="interior-fit-out-works" >Interior Fit-Out Works</a></h3>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 md-margin-bottom-40">
                        <div class="card small">
                            <div class="card-image">
                               <a class= "para-link" href="design-service" > <img class="img-responsive" src="{{asset('assets/img/MEP%20drawing.jpg')}}" alt="Design Services"></a>
                              
                            </div>
                            <div class="card-content">
                                 <h3><a class= "service_title" href="design-services">Design Services</a></h3>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 md-margin-bottom-40">
                        <div class="card small">
                            <div class="card-image">
                                <a class= "para-link" href="suspended-ceiling"> <img class="img-responsive" src="{{asset('assets/img/suspentedceiling3.jpg')}}" alt="Suspended Ceiling"></a>
                               
                            </div>
                            <div class="card-content">
                                <h3>  <a class= "service_title" href="suspended-ceiling">Suspended Ceiling</a></h3>
                            </div>
                        </div>
                    </div>
                </div>
				<div class="col-md-4 md-margin-bottom-40">
                        <div class="card small">
                            <div class="card-image">
                               <a class= "para-link" href="partition-works"> <img class="img-responsive" src="{{asset('assets/img/wall%20partition1.jpg')}}" alt="Partition Works"></a>
                              
                            </div>
                            <div class="card-content">
                                 <h3> <a class= "service_title" href="partition-works ">Partition Works</a></h3>
                            </div>
                        </div>
                    </div><div class="col-md-4 md-margin-bottom-40">
                        <div class="card small">
                            <div class="card-image">
                              <a class= "para-link" href="wall-cladding ">  <img class="img-responsive" src="{{asset('assets/img/wall%20cladding%20.jpg')}}" alt="Wall Cladding"></a>
                                
                            </div>
                            <div class="card-content">
                                <h3> <a class= "service_title" href="wall-cladding ">Wall Cladding</a></h3>
                            </div>
                        </div>
                    </div>
					<div class="col-md-4 md-margin-bottom-40">
                        <div class="card small">
                            <div class="card-image">
                                <a class= "para-link" href="flooring " ><img class="img-responsive" src="{{asset('assets/img/marble%20flooring.jpg')}}" alt="Flooring"></a>
                               
                            </div>
                            <div class="card-content">
                                   <h3> <a class= "service_title" href="flooring ">Flooring</a></h3>
                            </div>
                        </div>
                    </div>
					
					<div class="col-md-4 md-margin-bottom-40">
                        <div class="card small">
                            <div class="card-image">
                                 <a class= "para-link" href="painting " ><img class="img-responsive" src="{{asset('assets/img/wall%20painting.jpg')}}" alt="Painting / Wall Paper"></a>
                                
                            </div>
                            <div class="card-content">
                                 <h3>  <a class= "service_title" href="painting "> Painting / Wall Paper</a></h3>
                            </div>
                        </div>
                    </div>
					<div class="col-md-4 md-margin-bottom-40">
                        <div class="card small">
                            <div class="card-image">
                                <a class= "para-link" href="raised-access-floors "><img class="img-responsive" src="{{asset('assets/img/raised%20access%20floor.jpg')}}" alt=" Raised Access Floors"></a>
                              
                            </div>
                            <div class="card-content">
                                <h3> <a class= "service_title" href="raised-access-floors " > Raised Access Floors</a></h3>
                            </div>
                        </div>
                    </div>
					<div class="col-md-4 md-margin-bottom-40">
                        <div class="card small">
                            <div class="card-image">
                                 <a class= "para-link" href="glass-works " ><img class="img-responsive" src="{{asset('assets/img/interior-photo1.jpg')}}" alt="Glass Works"></a>
                                
                            </div>
                            <div class="card-content">
                                 <h3> <a class= "service_title" href="glass-works " >Glass Works</a></h3>
                            </div>
                        </div>
                    </div>
					<div class="col-md-4 md-margin-bottom-40">
                        <div class="card small">
                            <div class="card-image">
                               <a class= "para-link" href="joinery-works " > <img class="img-responsive" src="{{asset('assets/img/joinery.jpg')}}" alt="Joinery Works"></a>
                              
                            </div>
                            <div class="card-content">
                               <h3><a class= "service_title" href="joinery-works "> Joinery Works</a></h3>
                            </div>
                        </div>
                    </div>
					<div class="col-md-4 md-margin-bottom-40">
                        <div class="card small">
                            <div class="card-image">
                               <a class= "para-link" href="mep-work " >  <img class="img-responsive" src="{{asset('assets/img/mep%20works.jpg')}}" alt="MEP Works "></a>
                              
                            </div>
                            <div class="card-content">
                               <h3><a class= "service_title" href="mep-work " > MEP Works </a> </h3>
                 
               
                        </div>
                    </div>
					
                <!-- End Service Blcoks -->




            </div>
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