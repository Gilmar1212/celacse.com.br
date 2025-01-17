 <footer>
     <div class="container">
         <div class="wrapper">
             <div class="row flex-md-column justify-content-md-center align-items-md-center">
                 <div class="col-4 col-md-12 d-flex-md justify-content-md-center flex-md-column align-items-md-center">
                     <div class="logo">
                         <img src="<?= $url ?>imagens/logo-branca.png" alt="Logo" title="Logo">
                         <p class="light">A Azure se destaca como uma das promotoras de crédito de crescimento mais rápido em Porto Alegre, capital do Rio Grande do Sul, com atuação em todo o território nacional.</p>
                         <div class="social-medias">
                             <a class="social__icons" href="https://www.instagram.com/azure.promotora/" title="Instagram" target="_blank">
                                 <i class="fab fa-instagram"></i>
                             </a>
                             <a class="social__icons" href="https://www.facebook.com/azurepromotora" title="Facebook" target="_blank">
                                 <i class="fab fa-facebook"></i>
                             </a>
                             <a class="social__icons" href="https://www.linkedin.com/company/azurepromotora/" title="Linkedin" target="_blank">
                                 <i class="fab fa-linkedin"></i>
                             </a>
                         </div>
                     </div>
                 </div>
                 <div class="col-4 col-md-12 d-flex-md justify-content-md-center flex-md-column align-items-md-center">
                     <h2 class="light fs-18">Menu</h2>
                     <nav class="menu-footer">
                         <ul>
                             <li><a href="<?= $url ?>index.php" title="Contato">HOME </a></li>
                             <li><a href="<?= $url ?>#nossos-parceiros" title="Contato">NOSSOS PARCEIROS </a></li>
                             <li><a href="<?= $url ?>#nossos-servicos" title="Contato">NOSSOS SERVIÇOS </a></li>                             
                             <li><a href="<?= $url ?>contato" title="Contato">CONTATO </a></li>
                         </ul>
                     </nav>
                 </div>
                 <div class="col-4 col-md-12 d-flex-md justify-content-md-center flex-md-column align-items-md-center">
                     <h2 class="light fs-18">Contato</h2>
                     <p class="light"><i class="fa-solid fa-map-marker-alt"></i>Rua Jaime Telles, 62 - Petrópolis,<br> Porto Alegre - RS, 90460-030</p>
                     <a href="mailto:contato@azurepromotora.com.br" title="Email" class="light d-block mb-2"><i class="fa-solid fa-envelope"></i> contato@azurepromotora.com.br</a>
                     <a href="tel:51981442999" title="Telefone" class="light d-block"><i class="fa-solid fa-phone"></i> (51) 98144-2999</a>
                 </div>
             </div>
         </div>
     </div>
     <div class="bg-primary-color">
         <div class="wrapper">
             <div class="container d-flex flex-row gap-20">                 
                 <div class="text-left"><span class="white text-center freepik">Creditos de imagem: www.freepik.com</span></div>
             </div>
             <p class="light politica">
                 A Azure Promotora opera como correspondente bancário, facilitando a contratação de empréstimos. Não somos uma instituição financeira e não realizamos operações de crédito diretamente. Cumprimos rigorosamente as normas do Banco Central e a Lei de Sigilo Bancário (Lei Complementar 105/2001).
                 A avaliação de crédito é feita de acordo com a política de crédito da instituição financeira escolhida pelo cliente. Você receberá todas as informações sobre o produto escolhido de maneira transparente antes de concluir a contratação. As práticas relativas a empréstimos consignados seguem as diretrizes específicas de cada convênio.
                 Azure Promotora LTDA - CNPJ: 24.737.146/0001-82
             </p>
         </div>
     </div>
 </footer> 
<a href="https://web.whatsapp.com/send?phone=555189732020&amp;text=<?=rawurlencode("Olá Gostaria de saber mais sobre os serviços da Azure Promotora ?")?>" style="" target="_blank" class="whats-fixed hide-mobile">
<i style="margin-top:16px" class="fab fa-whatsapp"></i>
</a>
<a href="https://api.whatsapp.com/send?phone=555189732020&amp;text=<?=rawurlencode("Olá Gostaria de saber mais sobre os serviços da Azure Promotora ?")?>" style="" target="_blank" class="whats-fixed show-mobile">
<i style="margin-top:16px" class="fab fa-whatsapp"></i>
</a>
 <script>
    var activeMenuTop = document.querySelector(".active-menu-mobile");
    activeMenuTop.addEventListener("click",(e)=>{
        e.preventDefault;
        let menuTop = document.querySelector(".menu-mobile");
        menuTop.classList.toggle("menu-mobile-actived");
    });
 </script>