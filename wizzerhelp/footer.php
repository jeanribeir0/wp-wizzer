

<?php wp_footer(); ?>
<footer>
<div class="main_informations">
            <div class="brand_links">
               <div class="brand">
                    <img src="<?php bloginfo( 'template_directory' ); ?>/assets/Logo.svg" alt="Instagram Wizzer">
                    <strong>Viva o aluguel fácil!</strong>
                </div>
          
            </div>
            <div class="terms_links">
                <small>Acreditamos em poder modernizar a vida 
                de milhares que estão em 
                um processo de decisão de alugar a sua nova moradia, seu lar.</small> 
                <p>W.Digital Serviços de Internet LTDA, - 31.822.245/0001-28</p>
                <a href="#">Termos de Uso e Política de Privacidade</a>
                <strong>Siga-nos</strong>
                <ul>
                    <li>
                        <a href="https://www.linkedin.com/company/wizzer-imoveis/" target="blank">
                            <img src="<?php bloginfo( 'template_directory' ); ?>/assets/linkedin.png" alt="Linkedin Wizzer">
                        </a>
                    </li>
                    <li>
                        <a href="https://blog.wizzer.com.br/" target="blank">
                            <img src="<?php bloginfo( 'template_directory' ); ?>/assets/behance.png" alt="Blog Wizzer">
                        </a>
                    </li>
                    <li>
                        <a href="https://www.facebook.com/wizzer.imoveis/" target="blank">
                            <img src="<?php bloginfo( 'template_directory' ); ?>/assets/facebook.png" alt="Facebook Wizzer">
                        </a>
                    </li>
                    <li>
                        <a href="https://www.instagram.com/wizzerimoveis/" target="blank">
                        <img src="<?php bloginfo( 'template_directory' ); ?>/assets/instagram.png" alt="Instagram Wizzer">
                        </a>
                    </li>
                </ul>
                <div class="address_contact">
                   <ul>
                        <li>Contato</li>
                        <li><img src="<?php bloginfo( 'template_directory' ); ?>/assets/phone.svg" alt="Instagram Wizzer">(35) 9992-3456</li>
                        <li><img src="<?php bloginfo( 'template_directory' ); ?>/assets/e-mail.svg" alt="Instagram Wizzer">suporte@wizzer.com.br</li>
                    </ul>
                     <ul>
                        <li>Endereço</li>
                        <li>Av. Princesa do Sul - 890, Varginha - MG</li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="rights-reserve">
            <p>© 2020 Wizzer, Inc. Todos os direitos reservados.</p>
        </div>
</footer>
</body>
<style>
    a{
      text-decoration: none;
    }
    footer{
      background-color: #f9f9f9;
      display: flex;
      flex-direction: column;
      
    }
    .brand img{
        width: 300px;
        margin-bottom: 12px;
    }
    .rights-reserve{
      padding: 32px;
      display: flex; 
      justify-content: center;
      align-items: center;
      border-top: 0.1px solid #E0E0E0;
    }
    footer p{
      font-style: normal;
      font-weight: normal;
      font-size: 14px;
      line-height: 16px;
      display: flex;
      align-items: center;
      color: #3D3E40;
      margin: 5px 0;
    }
    .main_informations{
      padding: 60px;
      display: flex;
    }

    .brand_links .brand{
      display: flex;
      flex-direction: column;
    }

    .brand_links .brand strong{
        font-family: Roboto;
        font-style: normal;
        font-weight: bold;
        font-size: 24px;
        line-height: 28px;
        color: #555555;
        margin-bottom: 12px;
    }

    .brand_links, .terms_links{
      flex: 0 0 49%;
    }

    .terms_links small{
      font-family: Roboto;
      font-style: normal;
      font-weight: normal;
      font-size: 12px;
      line-height: 14px;
      color: #3D3E40;
      margin-bottom: 21px;
      width: 50%;
    }

    .terms_links strong{
     font-weight: bold;
      font-size: 16px;
      line-height: 18px;
      color: #3D3E40;
    }

    .terms_links a{
      font-style: normal;
      font-weight: normal;
      font-size: 14px;
      line-height: 16px;
      /* identical to box height, or 133% */
      display: flex;
      align-items: center;
      color: #055EFF;
      text-decoration: none;
      margin: 10px 0;
    }

    ul {
      list-style-type: none;
    }
    footer .main_informations .terms_links > ul {
      display: flex;
      flex-direction: row;
      margin-bottom: 30px;
    }
    footer .main_informations .terms_links > ul li {
      margin-right: 24px;
    }
    footer .main_informations .terms_links .address_contact {
      display: flex;
    }
    footer .main_informations .terms_links .address_contact ul:first-child {
      padding-right: 40px;
      border-right: 1px solid rgba(0, 0, 0, 0.24);
      margin-right: 40px;
    }
    footer .main_informations .terms_links .address_contact ul li {
      color: #353d40;
      font-size: 1em;
      display: flex;
      align-items: center;
      margin-bottom: 10px;
    }
    footer .main_informations .terms_links .address_contact ul li img {
      margin-right: 10px;
    }
    footer .main_informations .terms_links .address_contact ul li:first-child {
      font-weight: bold;
      color: #353d40;
      font-size: 1em;
      margin-bottom: 20px;
    }
    footer .main_informations .brand_links .link_list {
      display: flex;
    }
    footer .main_informations .brand_links .link_list ul:first-child {
      margin-right: 40px;
    }
    footer .main_informations .brand_links .link_list ul li {
      margin-bottom: 10px;
    }
    footer .main_informations .brand_links .link_list ul li a {
      color: #3d3f40;
    }
    footer .main_informations .brand_links .link_list ul li a:hover {
      color: #2693ff;
    }


</style>
</html>