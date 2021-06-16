<header class="bg-white">
    <div class="container d-flex align-items-center justify-content-center p-3">
        <div class="col-md-9 col-12 topo">
            <a class="navbar-brand" href="#">        
                <img src="img/agencia-mestre-logo.png" class="w-100" alt="Agência Mestre">
            </a>
        </div>

        <div class="col-md-3 col-12 button-default d-flex">
            <button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#exampleModal">Baixe já o seu guia!</button>
        </div>
    </div>  
    
    <div id="carouselExampleCaptions" class="carousel slide bg-black p-5" data-ride="carousel">   
        <div class="carousel-inner container">
            <div class="carousel-item active d-flex align-items-center justify-content-center">
                <img src="img/ebook-guia-para-criar.png" class="d-block" alt="ebook guia para criar">
                <div class="text-white">
                    <h1>Quer saber como criar uma <strong>Agência digital lucrativa?</strong></h1>
                    <p>Siga os passos certos e garanta uma vida longa e estável para o seu negócio.</p>
                    <div class="button-default">                        
                        <button type="button" class="btn btn-success btn-lg" data-toggle="modal" data-target="#exampleModal">QUERO RECEBER O GUIA</button>
                    </div>
                </div>
            </div>          
        </div>  
    </div>

    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
        <div class="modal-header" style="flex-direction: column;">
             <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>            
            <h4>Preencha o formulário abaixo</h4>
            <p>O material vai chegar no seu e-mail</p>           
        </div>
        <div class="modal-body">
            <form>
                <div class="form-group"> 
                    <label for="exampleFormControlInput1">Email*</label>                   
                    <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="Email">
                </div>

                <div class="form-group">
                    <label for="exampleFormControlInput1">Telefone*</label>
                    <input type="tel" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
                </div>

                <div class="form-group">     
                    <label for="exampleFormControlSelect1">O que falta para você começar sua agência?</label>               
                    <div class="form-check"> 
                        <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1" checked>
                        <label class="form-check-label" for="exampleRadios1">Formalizar o negócio</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios2" value="option2">
                        <label class="form-check-label" for="exampleRadios2">Conseguir clientes</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios3" value="option3">
                        <label class="form-check-label" for="exampleRadios3">Montar um time</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios3" value="option3">
                        <label class="form-check-label" for="exampleRadios3">Precificar os serviços</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios3" value="option3">
                        <label class="form-check-label" for="exampleRadios3">Conhecimento sobre gestão</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios3" value="option3">
                        <label class="form-check-label" for="exampleRadios3">Outra opção</label>
                    </div>
                </div>

                <div class="form-group">
                    <label for="exampleFormControlInput1">Qual o seu MAIOR DESEJO profissional?</label>
                    <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
                </div>              

                <div class="form-group">
                    <label for="exampleFormControlInput1">Contando com você, quantas pessoas trabalham na sua empresa (seu CNPJ)?</label>
                    <select class="form-control">
                        <option>1</option>
                        <option>2-5</option>
                        <option>25-50</option>
                    </select>
                </div>

                <div class="form-group">
                    <label for="exampleFormControlInput1">9+6*</label>
                    <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
                </div>
                                
            </form>
        </div>
        <div class="modal-footer">            
            <button type="button" class="btn btn-primary">QUERO RECEBER O GUIA</button>
        </div>
        </div>
    </div>
    </div>

</header>