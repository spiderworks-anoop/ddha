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
                        <h2 class="pageTitle">MEP WORKS</h2>
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
                            <h3>  <span class="color">MEP WORKS</span></h3>
                            <p style="color:white">MEP WORK is a field of mechanical, electrical, and plumbing works. Mechanical (HVAC), Electrical (fire alarm, lighting, cabling, elevators..etc.), 
and Plumbing ( firefighting, domestic water supply, sanitary, rainwater drainage) and steam distribution, and medical gas piping in case of hospitals.Our MEP Engineer is a professionaly designation helps for planning and design in the field of Mechanical, Electrical, and plumbing (MEP) practice, including developing policies standards, inspection procedure and evaluation tools for MEP concerns along with preparing, reviewing drawing, specification, and cost .</p>
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

               <!-- <h3>  Interior Fit-Out Works</h3>
                <h3> Design Services</h3>

                <h3>  Suspended Ceiling</h3>
                <h3> Partition Works</h3>
                <h3> Wall Cladding – Tile/Marble/Wood</h3>
                <h3> Flooring – Tile/Marble/Granite/Carpet</h3>
                <h3>  Painting/Wall Paper</h3>
                <h3> Raised Access Floors</h3>
                <h3> Glass Works</h3>
                <h3> Joinery Works</h3>
                <!--<h3> Glass Works</h3>
                <h3>
                    MEP Work
                </h3>-->
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
                                <img class="img-responsive" src="{{asset('assets/img/mep%20works.jpg')}}" alt="MEP WORKS">
                                <span class="card-title">MEP WORKS</span>
                            </div>
                          <!--  <div class="card-content">
                                <p>
                                    Our experienced  team delivers creative interior solutions that combine extreme design using the latest technology.
                                </p>
                                <!--<p>
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolores quae porro consequatur aliquam, incidunt
                            </p>
                            </div>-->
                        </div>
                    </div>
                    <div class="col-md-4 md-margin-bottom-40">
                        <div class="card small">
                            <div class="card-image">
                                <img class="img-responsive" src="{{asset('assets/img/MEP.jpg')}}" alt="MEP WORKS">
                                <span class="card-title">MEP WORKS</span>
                            </div>
                           <!-- <div class="card-content">
                                <p>
                                    Our Team is highly experienced and professional in their
                                </p>
                                <p>
                                    individual domain and are used to deliver their best.
                                </p>
                            </div>-->
                        </div>
                    </div>
                    <div class="col-md-4 md-margin-bottom-40">
                        <div class="card small">
                            <div class="card-image">
                                <img class="img-responsive" src="{{asset('assets/img/mep%201.jpg')}}" alt="MEP WORKS">
                                <span class="card-title">MEP WORKS</span>
                            </div>
                           <!-- <div class="card-content">
                                <p>
                                    Our Team is highly experienced and professional in their
                                </p>
                                <p>
                                    individual domain and are used to deliver their best.
                                </p>
                            </div>-->
                        </div>
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