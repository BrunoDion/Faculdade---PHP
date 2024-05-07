<?php
$textos = ["CGH Rio Imbaú I","Rio Imbaú, km 42, Divisa Imbaú e Tibagi, Paraná","Potência Instalada: 1,0 MW/H",'A Central Geradora Hidrelétrica (CGH) Imbaú I representa um marco importante no <br class="MobNone"> aproveitamento sustentável
        de recursos hidrelétricos na região. Localizada <br class="MobNone"> estrategicamente entre os municípios de Imbaú e Tibagi, no
        Paraná, a usina <br class="MobNone"> hidrelétrica aproveita um desnível natural do Rio Imbaú, localizado a 42 km da foz <br class="MobNone"> do
        Rio Tibagi.','Conheça também a Usina Imbaú II'];
$links = ["#",route('cgh'),"#",route('sobreNos'),route('principal').'?imbau=2'];
$donwloadSvg = ['<img loading="lazy" style="width: 20px;height: 20px;" src="data:image/png;base64,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" alt="">'];
$downloadLink = ["https://cghimbau.com.br/wp-content/uploads/2024/siteImbau1/Aprova├з├гo%20plano%20executivo%20Funai_CGH%20Imba├║%20I%20e%20II.pdf",
				 "https://cghimbau.com.br/wp-content/uploads/2024/siteImbau1/Autoriza├з├гo%20Iphan_CGH%20Imba├║%20I.pdf",
				 "https://cghimbau.com.br/wp-content/uploads/2024/siteImbau1/Plano de A├з├гo Emergencial_CGH Imba├║ I.pdf",
				 "https://cghimbau.com.br/wp-content/uploads/2024/siteImbau1/Licen├зa%20Ambiental%20Pr├йvia_CGH%20Imba├║%20I.pdf",
				 "https://cghimbau.com.br/wp-content/uploads/2024/siteImbau1/Memorial%20descritivo_CGH%20Imba├║%20I.pdf",				 
				 "https://cghimbau.com.br/wp-content/uploads/2024/siteImbau1/RAS_CGH%20Imba├║%20I.pdf",
				 "https://cghimbau.com.br/wp-content/uploads/2024/siteImbau1/RDPA,CGH%20Imba├║%20I.pdf"];
$downloadName = ["Plano executivo","Autorização Iphan","Plano de Ação Emergencial","Licença Ambiental Prévia","Memorial descritivo","RAS","RDPA"];
$bannerLink = "https://cghimbau.com.br/wp-content/uploads/2024/02/Rectangle-175.png";
if(isset($_GET['imbau']) && $_GET['imbau'] == 2){
	$textos = ["CGH Rio Imbaú II","Rio Imbaú, km 40, Divisa Imbaú e Tibagi, Paraná","Potência Instalada: 2,5 MW/H",'A Central Geradora Hidrelétrica (CGH) Imbaú II é um exemplo notável do uso <br class="MobNone"> sustentável de recursos hídricos para geração de energia. Situada entre os <br class="MobNone"> municípios de Imbaú e Tibagi, no estado do Paraná, a usina utiliza de forma eficiente <br class="MobNone"> um desnível natural do Rio Imbaú, localizado a 40 km da foz do Rio Tibagi,<br class="MobNone"> na sub-bacia do mesmo.','Conheça também a Usina Imbaú I'];			   
	$links = ["#",route('cgh').'?imbau=2',"#",route('sobreNos').'?imbau=2',route('principal')];
$downloadLink = ["https://cghimbau.com.br/wp-content/uploads/2024/siteImbau2/Aprova├з├гo%20plano%20executivo%20Funai_CGH%20Imba├║%20I%20e%20II.pdf",
				 "https://cghimbau.com.br/wp-content/uploads/2024/siteImbau2/Autoriza├з├гo%20Iphan_CGH%20Imba├║%20II.pdf",
				 "#",
				 "https://cghimbau.com.br/wp-content/uploads/2024/siteImbau2/Licen├зa%20Pr├йvia_CGH%20Imba├║%20II.pdf",
				 "https://cghimbau.com.br/wp-content/uploads/2024/siteImbau2/Memorial%20descritivo_CGH%20Imba├║%20II.pdf",
				 "https://cghimbau.com.br/wp-content/uploads/2024/siteImbau2/RAS_CGH%20Imba├║%20II.pdf",
				 "https://cghimbau.com.br/wp-content/uploads/2024/siteImbau2/RDPA_CGH%20Imba├║%20II.pdf"];
	$bannerLink = "https://cghimbau.com.br/wp-content/uploads/2024/02/Rectangle-175-1-e1707413084129.png";
}
?>

   <section
    style="background: linear-gradient(0deg, rgba(0, 0, 0, 0.48) 0%, rgba(0, 0, 0, 0.48) 100%), url(<?php echo $bannerLink; ?>), lightgray 50% / cover no-repeat;background-repeat: no-repeat;background-size: cover;text-align: center;padding: 250px 0 50px;background-position: 100%;">
    <h3 style="font-weight: 300;">
      <?php echo $textos[0]; ?>
    </h3>
    <h1 class="MobNone" style="font-weight: 300;color: #FFF;">
      <?php echo $textos[1]; ?>
    </h1>
    <h3 class="MobNone" style="font-weight: 300;">
      <?php echo $textos[2]; ?>
    </h3>
    <h4 class="MobBlock" style="font-weight: 300;color: #FFF;">
      <?php echo $textos[1]; ?>
    </h4>
    <h4 class="MobBlock" style="font-weight: 300;color: #FFFF00;">
      <?php echo $textos[2]; ?>
    </h4>
    <div style="height: 200px;"></div>
    <p style="color: #FFF;">Saiba Mais</p>
    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="26" viewBox="0 0 24 26" fill="none">
      <path
        d="M10.9393 25.0607C11.5251 25.6464 12.4749 25.6464 13.0607 25.0607L22.6066 15.5147C23.1924 14.9289 23.1924 13.9792 22.6066 13.3934C22.0208 12.8076 21.0711 12.8076 20.4853 13.3934L12 21.8787L3.51472 13.3934C2.92893 12.8076 1.97919 12.8076 1.3934 13.3934C0.807612 13.9792 0.807612 14.9289 1.3934 15.5147L10.9393 25.0607ZM10.5 5.46392e-08L10.5 24L13.5 24L13.5 -5.46392e-08L10.5 5.46392e-08Z"
        fill="white" />
    </svg>
  </section>
  <section class="p50"
    style="background-image: url(https://cghimbau.com.br/wp-content/uploads/2024/01/Rectangle-176.png);background-repeat: no-repeat;background-size: cover;color: #FFF;">
    <div class="cardBig">
      <h1 style="font-weight: 700;">Sobre Nós</h1>
      <br>
      <p>
        <?php echo $textos[3] ?>
      </p>
      <a href="<?php echo $links[3]; ?>" class="btoA">Saiba Mais</a>
      <br>
      <br class="MobBlock">
    </div>
    <div class="flex" style="justify-content: center;margin-top: 20px;gap: 20px;">
      <div>
        <div class="MobNone"
          style="background-image: url(https://cghimbau.com.br/wp-content/uploads/2024/01/Rectangle-174.png);width: 588px;height: 672px;display: flex;align-items: end;justify-content: center;">
          <div style="padding: 15px;margin-bottom: 50px;width: 75%;">
            <h2 style="font-weight: 700">Diversidade Biológica <br>
              no Rio Imbaú: Um <br>
              Mosaico de Vida e Cor</h2>
            <br>
            <p>A região do Rio Imbaú é um ecossistema vibrante e diversificado, abrigando uma rica variedade de fauna e
              flora. A região é um santuário para diversas espécies aquáticas e terrestres, além de uma flora
              exuberante, refletindo a complexidade e beleza dos ecossistemas locais.</p>
            <br>
            <br>
            <a href="<?php echo $links[0]; ?>" class="btoA">Saiba Mais</a>
          </div>
        </div>
        <div class="MobBlock">
          <div style="display: flex;gap: 14px;">
            <div
              style="width: 140px;height: 140px;background: linear-gradient(180deg, rgba(0, 0, 0, 0.00) 13%, rgba(0, 0, 0, 0.80) 100%), url(https://cghimbau.com.br/wp-content/uploads/2024/01/Rectangle-174.png), lightgray ;background-position: 78% 10%;border-radius: 40px;">
            </div>
            <div
              style="width: 180px;height: 140px;background: linear-gradient(180deg, rgba(0, 0, 0, 0.00) 13%, rgba(0, 0, 0, 0.80) 100%), url(https://cghimbau.com.br/wp-content/uploads/2024/01/imagem_2024-01-12_165047431.png), lightgray ;background-position: 60% 18%;border-radius: 40px;background-size: 200%;">
            </div>
          </div>
          <br>
          <div class="MobBlock"
            style="border-radius: 37px;background: linear-gradient(270deg, rgba(0, 0, 0, 0.00) -21.16%, rgba(0, 0, 0, 0.80) 78.67%), url(https://cghimbau.com.br/wp-content/uploads/2024/01/imagem_2024-01-15_162129639.png), lightgray -394.86px -81px / 316.698% 123.302% no-repeat;background-size: 500%;background-position: 55% 0%;width: 100%;height: 672px;display: flex;align-items: end;justify-content: center;">
            <div style="padding: 15px;margin-bottom: 50px;">
              <h4 style="font-weight: 700;">Diversidade Biológica no Rio Imbaú: Um Mosaico de Vida e Cor</h4>
              <h6>A região do Rio Imbaú é um ecossistema vibrante e diversificado, abrigando uma rica variedade de fauna
                e flora. A região é um santuário para diversas espécies aquáticas e terrestres, além de uma flora
                exuberante, refletindo a complexidade e beleza dos ecossistemas locais.</h6>
              <br>
              <a href="<?php echo $links[0]; ?>" class="btoA">Saiba Mais</a>
            </div>
          </div>
        </div>
        <div
          style="background-image: url(https://cghimbau.com.br/wp-content/uploads/2024/01/Rectangle-172.png);width: 100%;height: 426px;margin-top: 20px;display: flex;align-items: end;justify-content: center;max-width: 580px;background-size: cover;border-radius: 40px;">
          <div class="MobBlock" style="padding: 10px;margin-bottom: 15px;">
            <h4 style="font-weight: 700">O que é uma CGH?</h4>
            <h6>A Central Geradora Hidrelétrica (CGH) representa uma inovação significativa no campo da geração de
              energia, combinando eficiência e sustentabilidade. Mas, o que exatamente é uma CGH e como ela se
              diferencia no panorama energético?</h6>
            <br>
            <a href="<?php echo $links[1]; ?>" class="btoA">Saiba Mais</a>
          </div>
          <div class="MobNone" style="padding: 15px;margin-bottom: 50px;width: 75%;">
            <h1 style="font-weight: 700">O que é uma CGH?</h1>
            <br>
            <p>A Central Geradora Hidrelétrica (CGH) representa uma inovação significativa no campo da geração de
              energia, combinando eficiência e sustentabilidade. Mas, o que exatamente é uma CGH e como ela se
              diferencia no panorama energético?</p>
            <br>
            <br>
            <a href="<?php echo $links[1]; ?>" class="btoA">Saiba Mais</a>
          </div>
        </div>
      </div>
      <br>
      <div
        style="background-image: url(https://cghimbau.com.br/wp-content/uploads/2024/01/Rectangle-173.png);width: 100%;height: auto;display: flex;align-items: end;justify-content: center;max-width: 580px;min-height: 500px;background-size: cover;border-radius: 40px;">
        <div class="MobNone" style="padding: 15px;margin-bottom: 50px;width: 75%;">
          <h1 style="font-weight: 700">Rio Imbaú: Um Recurso Natural Vital para a Região</h1>
          <br>
          <br>
          <a href="<?php echo $links[2]; ?>" class="btoA">Saiba Mais</a>
        </div>
        <div class="MobBlock" style="padding: 15px;margin-bottom: 15px;">
          <h4 style="font-weight: 700;">Rio Imbaú: Um Recurso Natural Vital para a Região</h4>
          <br>
          <a href="<?php echo $links[2]; ?>" class="btoA">Saiba Mais</a>
        </div>
      </div>
    </div>
  </section>
  <section
    style="padding-top: 50px;background-image: url(https://cghimbau.com.br/wp-content/uploads/2024/01/Rectangle-177.png);background-size: cover;">
    <h1 style="text-align: center;color: #FFF;font-weight: 700;" id="doc">Documentações</h1>
    <br>
    <div class="MobNone" style="display: flex;justify-content: center;gap: 15px;width: 100%;">
      <div>
        <div class="card">
          <h5><?php echo $downloadName[0] ?></h5>
          <a href="<?php echo $downloadLink[0]; ?>" download="<?php echo $downloadName[0] ?>">
            <?php echo $donwloadSvg[0]; ?>
          </a>
        </div>
        <br>
        <div class="card">
          <h5><?php echo $downloadName[1] ?></h5>
          <a href="<?php echo $downloadLink[1]; ?>" download="<?php echo $downloadName[1] ?>">
            <?php echo $donwloadSvg[0]; ?>
          </a>
        </div>
        <br>
		 <?php if(@$_GET['imbau'] != 2) {?>
        <div class="card">
           <h5><?php echo $downloadName[2] ?></h5>
          <a href="<?php echo $downloadLink[2]; ?>" download="<?php echo $downloadName[2] ?>">
            <?php echo $donwloadSvg[0]; ?>
          </a>
        </div>
		  <?php } ?>
      </div>
      <br>
      <div>
        <div class="card">
         <h5><?php echo $downloadName[3] ?></h5>
         <a href="<?php echo $downloadLink[3]; ?>" download="<?php echo $downloadName[3] ?>">
            <?php echo $donwloadSvg[0]; ?>
          </a>
        </div>
        <br>
        <div class="card">
          <h5><?php echo $downloadName[4] ?></h5>
          <a href="<?php echo $downloadLink[4]; ?>" download="<?php echo $downloadName[4] ?>">
            <?php echo $donwloadSvg[0]; ?>
          </a>
        </div>
        <br>
        
      </div>
    </div>

    <div class="MobBlock">
      <div class="card">
        <h5><?php echo $downloadName[0] ?></h5>
          <a href="<?php echo $downloadLink[0]; ?>" download="<?php echo $downloadName[0] ?>">
			<?php echo $donwloadSvg[0]; ?>
        </a>
      </div>
      <br>
      <div class="card">
        <h5><?php echo $downloadName[1] ?></h5>
          <a href="<?php echo $downloadLink[1]; ?>" download="<?php echo $downloadName[1] ?>">
         <?php echo $donwloadSvg[0]; ?>
        </a>
      </div>
      <br>
      <div class="card">
        <h5 style="margin: 0;width: 160px;">Ver mais</h5>
        <button data-bs-toggle="collapse" data-bs-target="#verMais">
          <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 16 17" fill="none">
            <path d="M9 1C9 0.447715 8.55228 2.41412e-08 8 0C7.44772 -2.41412e-08 7 0.447715 7 1L9 1ZM7.29289 16.7071C7.68342 17.0976 8.31658 17.0976 8.70711 16.7071L15.0711 10.3431C15.4616 9.95262 15.4616 9.31946 15.0711 8.92893C14.6805 8.53841 14.0474 8.53841 13.6569 8.92893L8 14.5858L2.34315 8.92893C1.95262 8.53841 1.31946 8.53841 0.928932 8.92893C0.538407 9.31946 0.538407 9.95262 0.928932 10.3431L7.29289 16.7071ZM7 1L7 16L9 16L9 1L7 1Z" fill="black"/>
          </svg>
        </button>
      </div>
      <div id="verMais" class="collapse">
        <br>
		  <?php if(@$_GET['imbau'] != 2){ ?>
        <div class="card">
          <h5><?php echo $downloadName[2] ?></h5>
          <a href="<?php echo $downloadLink[2]; ?>" download="<?php echo $downloadName[2] ?>">
            <?php echo $donwloadSvg[0]; ?>
          </a>
        </div>
		  <?php } ?>
        <br>
        <div class="card">
          <h5><?php echo $downloadName[3] ?></h5>
          <a href="<?php echo $downloadLink[3]; ?>" download="<?php echo $downloadName[3] ?>">
            <?php echo $donwloadSvg[0]; ?>
          </a>
        </div>
        <br>
        <div class="card">
         <h5><?php echo $downloadName[4] ?></h5>
          <a href="<?php echo $downloadLink[4]; ?>" download="<?php echo $downloadName[4] ?>">
         <?php echo $donwloadSvg[0]; ?>
          </a>
        </div>
      </div>
    </div>
    <br>
    <br>
    <h1 style="text-align: center;color: #FFF;font-weight: 700;">Informações Ambientais</h1>,
    <div class="flex" style="justify-content: center;gap: 15px;width: 100%;">
      <div class="card">
        <h5>Relatório Ambiental <br class="MobBlock"> Simplificado</h5>
        <a href="<?php echo $downloadLink[5]; ?>" download="<?php echo $downloadName[5] ?>">
          <?php echo $donwloadSvg[0]; ?>
        </a>
      </div>
      <br>
      <div class="card">
        <h5>Projetos de Sustentabilidade</h5>
        <a href="<?php echo $downloadLink[6]; ?>" download="<?php echo $downloadName[6] ?>">
          <?php echo $donwloadSvg[0]; ?>
        </a>
      </div>
    </div>
    <div style="text-align: center;">
		<div style="height: 50px"></div>
    	<h1 style="color: #FFF;font-weight: 700;line-height: 80%;" class="h0 textCenter">Deseja falar com a gente?</h1>
        <br>
        <button data-bs-toggle="modal" data-bs-target="#formModal" class="btoC" style="border: none;">Entrar em
          contato</button>
    </div>
      <div style="height: 50px"></div>
	  <div style="display: flex;justify-content: center;">
		  <a href="<?php echo $links[4]; ?>" class="btn btn-outline-light"><?php echo $textos[4]; ?></a>
	  </div>
	  <br>
  </section>