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
            <div class="container" style="margin-top:30px">
                <div class="row">
                    <div class="col-lg-12">
                        <h2 class="pageTitle">Safety Policy</h2>
                    </div>
                </div>
            </div>
        </section>

        <section id="content">
            <section class="section-padding">
                <div class="container">
                    <!--<div class="row showcase-section">-->
                    <!--<div class="col-md-12 center">
                    <img src="img/dev1.png" alt="showcase image">
                </div>-->
                    <div class="col-md-12 center">
                        <div class="about-text">
                            <p style="color:white">
                                ARBAH TECHNICAL WORKS is committed to ensure safety along  with compliance of health, safety and protection of  environment along   with Quality assurance.It is the policy of the company to provide working conditions that are  safe and healthy for all employees.The management is  fully committed to train and educate all our staff to equip themselves







                                to follow safety policies implemented by the company
                                which will have continuous improvement in compliance with the local
                                authorities.
                                Performance shall be monitored and objectives set by the management
                                for achieving standards and proposals for continuous improvement of
                                standards achieved with rewards to staff to motivate them to maintain safety.
                            </p>
                        </div>
                    </div>
                    <!--</div>-->
                </div>
            </section>

        </section>

        <section id="inner-headline">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <h2 class="pageTitle">Quality Policy</h2>
                    </div>
                </div>
            </div>
        </section>


        <section id="content">
            <section class="section-padding">
                <div class="container">
                    <!--<div class="row showcase-section">-->
                    <!--<div class="col-md-12 center">
                    <img src="img/0.jpeg" alt="showcase image">
                </div>-->
                    <div class="col-md-12 center">
                        <div class="about-text">
                            <!--<h3> <span class="color"></span></h3>-->
                            <p style=" color:white">
                                “ARBAH TECHNICAL WORKS” is committed to attain standards with the highest possible quality service to all clients. In this process we are committed  to provide a reliable, cost effective and trouble free product as we deliver the project.To reinforce this commitment, quality is monitored, reviewed with effective,corrective and preventive action. This is to ensure that the company operates effectively and efficiently to  meet the needs of customers with quality assurance.
                            </p>
                         </div>
                    </div>
                    <!--</div>-->
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