@extends('template')

@section('content')
<div class="container py-5" id="featured-3">
    <h2 class="pb-2 border-bottom">Algorithme et Programmation 2</h2>
    <div class="row g-5 py-5">
        <div class="feature col-md-4">
            <div class="card border-0 shadow">
                <img src="../img/code/{{rand(1,8)}}.png" class="card-img-top" alt="...">
                <div class="card-body text-center">
                    <div class="card-text text-black-50">
                        <a href="https://drive.google.com/file/d/1Di2-WgCP8rdNsr71oda2xBHWwaSWxV2b/view?usp=sharing">
                            Apprendre à programmer en C(pdf)
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="feature col-md-4">
            <div class="card border-0 shadow">
                <img src="../img/code/{{rand(1,8)}}.png" class="card-img-top" alt="...">
                <div class="card-body text-center">
                    <div class="card-text text-black-50">
                        <a
                            href="https://www.youtube.com/watch?v=eQD6uAO9NH4&list=PLA6zApbO92QbZ5gJaGcfgzmtuPMdJTOkQ&index=3">Introduction
                            au langage de programmation C 1</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="feature col-md-4">
            <div class="card border-0 shadow">
                <img src="../img/code/{{rand(1,8)}}.png" class="card-img-top" alt="...">
                <div class="card-body text-center">
                    <div class="card-text text-black-50">
                        <a
                            href="https://www.youtube.com/watch?v=kgyqJ_oXN6M&list=PLA6zApbO92QbZ5gJaGcfgzmtuPMdJTOkQ&index=4">
                            Introduction
                            au langage de programmation C 2
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
