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
                        <h2 class="pageTitle">WALL CLADDING</h2>
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
                            <h3> Best <span class="color">Wall Cadding </span></h3>
                            <p style="color:white">Cladding  is a material applied over another to provide  layer and used to provide a degree of thermal insulation and weather resistance, and to improve the appearance of buildings.</p>
							<p style="color:white">Different types of cladding<br>
							Tile Cladding<br>
							Marble Cladding<br>
							Wood Cladding<br>
							</p>
							<p style="color:white">  Our experienced  team delivers creative cladding solutions that combine extreme design using the latest technology<br>
							 Our Team is highly experienced and professional in their  individual domain and are used to deliver their best.</p>
							
				
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

                <!--<h3>  Interior Fit-Out Works</h3>
                <h3> Design Services</h3>

                <h3>  Suspended Ceiling</h3>
                <h3> Partition Works</h3>
                <h3> Wall Cladding – Tile/Marble/Wood</h3>
                <h3> Flooring – Tile/Marble/Granite/Carpet</h3>
                <h3>  Painting/Wall Paper</h3>
                <h3> Raised Access Floors</h3>
                <h3> Glass Works</h3>
                <h3> Joinery Works</h3>
                <!--<h3> Glass Works</h3>-->
               <!-- <h3>
                    MEP Work
                </h3>
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
                                <img class="img-responsive" src="{{asset('assets/img/wall%20cladding%20.jpg')}}" alt="WALL CLADDING">
                                <span class="card-title">WALL CLADDING</span>
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
                                <img class="img-responsive" src="{{asset('assets/img/Marble%20cladding.jpg')}}" alt="MARBLE CLADDING">
                                <span class="card-title">MARBLE CLADDING</span>
                            </div>
                            <!--<div class="card-content">
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
                                <img class="img-responsive" src="{{asset('assets/img/wood%20cladding.jpg')}}" alt="WOOD CLADDING">
                                <span class="card-title">WOOD CLADDING</span>
                            </div>
                          <!--  <div class="card-content">
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