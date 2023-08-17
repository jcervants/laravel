@extends('master')
@section('title', 'Inicio')

@section('content')
<div class="container"> 
        <div class="row banner">
            <div class="col-md-12">
                <h1 class="text-center mt-5 editContent">
                   Soluciones y mejores a tus procesos de informáticos.
                </h1>
                <h3 class="text-center mt-2 editContent">Diseño de sistemas y páginas Web.</h3>
                <div class="text-center">
                    <img src="{{ asset('images/ingenia-portada.png') }}" width="700" height="500" alt="Portada">
                </div>
            </div>
            <div class="col-md-12">
                <h1 class="text-center mt-5 editContent">
                    Sistema de Inventario Web
                </h1>
                <h3 class="text-center mt-2 editContent">Escala Profesionalmente tu Inventario y Ventas</h3>
                <div class="text-center">
                    <img src="https://learninglaravel.net/img/LearningLaravel5_cover7.png" width="302" height="391" alt="">
                </div>
            </div>
        </div>

    <section data-bs-version="5.1" class="features4 cid-tJS7nWOnZE" id="features04-2">
	        <div class="container">
                <div class="mbr-section-head mb-5">
                    <h4 class="mbr-section-title mbr-fonts-style align-left mb-3 display-2">
                        <strong>Nuestros Servicios</strong>
                    </h4>
                    <h5 class="mbr-section-subtitle mbr-fonts-style align-left mb-3 display-7">Brindamos servicios en base a nuestra experiencia, calidad y especialización, con innovación.</h5>
                </div>
           <div class="row">
                <div class="item features-image col-12 col-md-6 col-lg-4">
                    <div class="item-wrapper">
                            <div class="item-img">
                                <img src="{{ asset('images\websites.png')}}" width="100%" height="86%" alt="Diseño de Páginas Web">
                            </div>
                            <div class="item-content">
                                <h5 class="item-title mbr-fonts-style display-5"><strong>Páginas Web</strong></h5>
                                
                                <p class="mbr-text mbr-fonts-style display-7">
                                    Desarrollo a medida, enfocados en la marca de la empresa.
                                </p>
                                <div class="mbr-section-btn item-footer"><a href="" class="btn item-btn btn-white display-7">Más información</a></div>
                            </div>
                        </div>
                    </div>
                    <div class="item features-image col-12 col-md-6 col-lg-4">
                        <div class="item-wrapper">
                            <div class="item-img">
                                <img src="{{ asset('images\ingenia-portada.png')}}" width="100%" height="86%" alt="Mobirise Website Builder">
                            </div>
                            <div class="item-content">
                                <h5 class="item-title mbr-fonts-style display-5"><strong>Sistema de Inventario y Ventas</strong></h5>
                                
                                <p class="mbr-text mbr-fonts-style display-7">
                                    Gestiona tu empresa optimizando tus procesos.
                                </p>
                                <div class="mbr-section-btn item-footer"><a href="" class="btn item-btn btn-white display-7">Learn More</a></div>
                            </div>
                        </div>
                    </div>
                    <div class="item features-image col-12 col-md-6 col-lg-4">
                            <div class="item-wrapper">
                                <div class="item-img">
                                    <img src="{{ asset('images\apple_supp.png')}}" width="100%" height="86%" alt="Mobirise Website Builder">
                                </div>
                                <div class="item-content">
                                    <h5 class="item-title mbr-fonts-style display-5"><strong>Soporte Técnico</strong></h5>
                                    
                                    <p class="mbr-text mbr-fonts-style display-7">
                                        Potenciación de computadoras y laptops
                                    </p>
                                    <div class="mbr-section-btn item-footer"><a href="" class="btn item-btn btn-white display-7">Más info.</a></div>
                                </div>
            
                            </div>
                        </div>
                </div>
            </div>
    </section>
@endsection

