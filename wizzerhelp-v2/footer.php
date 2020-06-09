

<?php wp_footer(); ?>
<footer>
        <div id="search_footer">
            <h2>Ajudando seu cliente a encontrar a casa perfeita!</h2>
            <div id="search">
                <input type="text" placeholder="Pesquise por cidade">
                <button>Pesquisar</button>
            </div>
        </div>
        <div class="footer">
            <div class="content">
                <div class="wizzer">
                    <div class="logo">
                        <img src="<?php bloginfo( 'template_directory' ); ?>/assets/wizzer_imoveis.svg" alt="Wizzer">
                        <h2>Viva o aluguel fácil!</h2>
                    </div>
                    <div class="network">
                        <ul>
                            <li>
                                <a href="#">
                                <img src="<?php bloginfo( 'template_directory' ); ?>/assets/facebook.svg" alt="Wizzer">
                                </a>
                            </li>
                            <li>
                              <img src="<?php bloginfo( 'template_directory' ); ?>/assets/linkedin.svg" alt="Wizzer">
                            </li>
                            <li>
                              <img src="<?php bloginfo( 'template_directory' ); ?>/assets/instagram.svg" alt="Wizzer">
                            </li>
                            <li>
                              <img src="<?php bloginfo( 'template_directory' ); ?>/assets/whatsapp.svg" alt="Wizzer">
                              
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="infos">
                    <ul>
                        <li>EXPLORE</li>
                        <li>
                            <a href="#">SEJA CORRETOR</a>
                        </li>
                        <li>
                            <a href="#">SEJA INQUILINO</a>
                        </li>
                        <li>
                            <a href="#">SEJA PROPRIETÁRIO</a>
                        </li>
                        <!-- <li>
                            <a href="#">REGIÕES ATENDIDAS</a>
                        </li> -->
                        <!-- <li>
                            <a href="#">TRABALHE CONOSCO</a>
                        </li> -->
                        <!-- <li>
                            <a href="#">CONHEÇA A WIZZER</a>
                        </li> -->
                        <li>
                            <a href="#">BLOG</a>
                        </li>
                    </ul>
                    <div class="contact">
                        <ul>
                            <li>CONTATO</li>
                            <li>(35) 99708-1186</li>
                            <li>suporte@wizzer.com.br</li>
                        </ul>
                        <ul>
                            <li>ENDEREÇO</li>
                            <li>Av. Princesa do Sul - 890, Varginha - MG</li>
                        </ul>
                    </div>
                    <div class="about">
                        <small>
                            Acreditamos em poder modernizar a vida
                            de milhares que estão em
                            um processo de decisão de comprar sua nova moradia, seu lar.
                        </small>
                        <p>W.Digital Serviços de Internet LTDA, - 31.822.245/0001-28 CRECI - 6410</p>
                        <a href="#">Termos de Uso e Política de Privacidade</a>
                    </div>
                </div>

            </div>
            <div class="terms">
                <p>© 2020 Wizzer, Inc. Todos os direitos reservados.</p>
            </div>
        </div>
    </footer>
</body>
<style>
 @import "reset.css";

footer {
  display: flex;
  flex-direction: column;
  width: 100%;
  margin-top: 60px;
}

footer #search_footer {
  padding: 40px;
  background-color: #f9f9f9;
  display: flex;
  justify-content: center;
  flex-direction: column;
  align-items: center;
}

footer #search_footer h2 {
  color: #353d40;
  font-size: 32px;
  font-weight: bold;
  text-align: center;
  margin-bottom: 24px;
}

footer #search_footer #search {
  background-color: white;
  border: 1px solid #c7c7c7;
  border-radius: 6px;
  height: 45px;
  width: 600px;
  display: flex;
  justify-content: space-between;
}

footer #search_footer #search input {
  height: 100%;
  padding: 10px;
  border-radius: 6px;
  border: 1px solid transparent;
  color: #353d40;
}

footer #search_footer #search button {
  height: 100%;
  background-color: #055eff;
  padding: 0 16px;
  color: #fff;
  border-radius: 0 6px 6px 0;
}

footer #search_footer #search input::placeholder {
  font-size: 14px;
}

.footer {
  background-color: #353d40;
  display: flex;
  flex-direction: column;
}

.footer .content {
  padding: 50px;
  display: flex;
  flex-direction: column;
}

.footer .content .wizzer {
  display: flex;
  justify-content: space-between;
  align-items: center;
}

.footer .content .wizzer .network ul {
  display: flex;
  margin-right: 100px;
}

.footer .content .wizzer .network ul li {
  padding: 0 16px;
}

.footer .content .wizzer .network ul li img {
  width: 20px;
  height: 20px;
}

.footer .content .wizzer .logo h2 {
  color: #fff;
  font-weight: 300;
  font-size: 24px;
  margin: 20px 0;
}

.footer .content .infos ul li:first-child {
  color: #fff;
  margin: 16px 0;
  font-weight: bold;
  font-size: 18px;
}

.footer .content .infos {
  display: flex;
  justify-content: space-between;
}

.footer .content .infos ul {
  flex: 1;
}

.footer .content .infos ul li {
  color: #fff;
  margin: 20px 0;
}

.footer .content .infos ul li a {
  color: #fff;
  text-decoration: none;
  font-size: 1em;
}

.footer .content .infos .contact {
  color: #fff;
  text-decoration: none;
  font-size: 1em;
  flex: 1;
  margin-right: 20px;
}

.footer .terms {
  border-top: 1px solid #ffffff;
  padding: 16px;
  display: flex;
  justify-content: center;
}

.footer .terms p {
  color: #fff;
  font-size: 1em;
}

.footer .content .infos .about {
  color: #fff;
  text-decoration: none;
  font-size: 16px;
  display: flex;
  flex-direction: column;
  flex: 1;
}

.footer .content .infos .about small {
  color: #fff;
  text-decoration: none;
  font-size: 1em;
  margin: 10px 0;
}

.footer .content .infos .about a {
  color: #fff;
  text-decoration: none;
  font-size: 1em;
  margin: 10px 0;
}

@media screen and (max-width: 768px) {
  .footer .content {
    padding: 30px;
  }

  .logo {
    display: flex;
    flex-direction: column;
    align-items: center;
    margin-bottom: 20px;
  }

  .footer .content .wizzer {
    flex-direction: column;
  }

  .footer .content .wizzer .network ul {
    margin: 0;
  }

  .footer .content .wizzer .network {
    margin-bottom: 20px;
  }

  .footer .content .infos {
    flex-direction: column;
    text-align: center;
  }

  .footer .content .infos .contact {
    margin-right: 0;
  }

  footer #search_footer #search {
    width: 400px;
  }

  footer #search_footer #search {
    width: 300px;
  }
}

</style>
</html>