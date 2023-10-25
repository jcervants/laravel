@extends('master')
@section('title', 'Inicio')
{{-- せんせいです。
[sensei desu]
She's a teacher. / He's a teacher. --}}
@section('content')
<div class="container"> 
        <div class="row banner">
            <div class="col-md-12">
                <h3 class="mbr-fonts-style align-left mb-3 display-3">
                 Enfocados en brindar productos de calidad.
                </h3>
                <h3 class="mbr-fonts-style align-left mb-3 display-3">Asesoramiento y desarrollo de sistemas.</h3>
                <div class="text-center">
                    <img src="{{ asset('images/ingenia-portada.png') }}" width="700" height="500" alt="Portada">
                </div>
            </div>
        </div>

    <section data-bs-version="5.1" class="features4 cid-tJS7nWOnZE" id="features04-2">
	        <div class="container">
                <div class="mbr-section-head mb-5">
                    <h4 class="mbr-section-title mbr-fonts-style align-left mb-3 display-2">
                        Servicios
                    </h4>
                    <h5 class="mbr-section-subtitle mbr-fonts-style align-left mb-3 display-7">Calidad y especialización, con innovación.</h5>
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
                                    Desarrollo a medida, enfocados en las fortalezas de la empresas.
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
                                    Asesoramiento para gestionar tu empresa optimizando tus procesos.
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
                                    {{-- <div class="mbr-section-btn item-footer"><a href="" class="btn item-btn btn-white display-7">Más info.</a></div> --}}
                                </div>
            
                            </div>
                        </div>
                </div>
            </div>
    </section>
    @include('contact')
@endsection


