<div>
	<x-customer-layout>
    <div class="static-page">
            <div class="container">
                <h1 class="h1">{{$pages->title}}</h1>
                <div class="row">
                   <!--  <div class="col-md-4">
                        <ul class="nav nav-tabs" id="myTab" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" data-toggle="tab" href="#tab1" role="tab" aria-controls="home">Hoe werkt gratis retourneren?</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-toggle="tab" href="#tab2" role="tab" aria-controls="profile">Hoe kan ik mijn retour gratis afgeven? </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-toggle="tab" href="#tab3" role="tab" aria-controls="messages">Hoe kan ik mijn retour laten ophalen?</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-toggle="tab" href="#tab4" role="tab" aria-controls="settings">Hoe maak ik een retourafspraak?</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-toggle="tab" href="#tab5" role="tab" aria-controls="settings">Wat is ophalen plus?</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-toggle="tab" href="#tab6" role="tab" aria-controls="settings">Wanneer is mijn retour verwerkt?</a>
                            </li>
                        </ul>
                    </div>
 -->
                    <div class="col-md-8">
                        <div class="tab-content">
                            <div class="tab-pane active" id="tab1" role="tabpanel">
                                <h4 class="h4">{{$pages->title}}</h4>
                                <p>{{$pages->content}}</p>
                                <p>It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</p>

                                <a href="#" class="site-btn">button name</a>
                            </div>
                            <div class="tab-pane" id="tab2" role="tabpanel">..2</div>
                            <div class="tab-pane" id="tab3" role="tabpanel">..3</div>
                            <div class="tab-pane" id="tab4" role="tabpanel">..4</div>
                            <div class="tab-pane" id="tab5" role="tabpanel">..5</div>
                            <div class="tab-pane" id="tab6" role="tabpanel">..6</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </x-customer-layout>  
</div>
