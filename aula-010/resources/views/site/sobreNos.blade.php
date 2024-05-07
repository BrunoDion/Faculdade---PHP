<?php
	$textos = ['Central Geradora Hidrelétrica Imbaú I','A Central Geradora Hidrelétrica (CGH) Imbaú I representa um marco importante no aproveitamento sustentável de recursos hidrelétricos na região. Localizada estrategicamente entre os municípios de Imbaú e Tibagi, no Paraná, a usina hidrelétrica aproveita um desnível natural do Rio Imbaú,localizado a 42 km da foz do Rio Tibagi.','A CGH Imbaú I foi projetada para gerar energia com eficiência e responsabilidade ambiental. Com uma potência instalada de 1 MW (1.000 kW), esta central opera com duas turbinas tubulares tipo “S” com eixo horizontal e
 rotor Kaplan, além de contar com uma subestação elevadora equipada com transformadores. Este design permite a geração de energia elétrica suficiente para suprir as necessidades locais, contribuindo significativamente para o abastecimento energético da região.','A CGH Imbaú I foi concebida levando em conta um equilíbrio entre desenvolvimento industrial e sustentabilidade ambiental. Os estudos e planejamentos focaram na maximização da função benefício/custo, resultando em uma solução energética que alia eficiência e baixo impacto ambiental. Esta abordagem reflete nosso compromisso com o desenvolvimento sustentável, tanto em termos ambientais quanto econômicos, atendendo às necessidades energéticas da região de maneira responsável e eficaz.','Nossa visão é estar na vanguarda da geração de energia renovável, mantendo sempre o compromisso com a sustentabilidade e o respeito ao meio ambiente. A CGH Imbaú I é mais do que uma usina hidrelétrica; é um exemplo de como a tecnologia e o respeito à natureza podem andar juntos, criando um futuro mais sustentável e promissor para as comunidades locais e para o meio ambiente.'];
	$map = "https://cghimbau.com.br/wp-content/uploads/2024/01/imagem_2024-01-15_141547720-e1705950295648.png";
	$bannerLink = "https://cghimbau.com.br/wp-content/uploads/2024/02/Rectangle-175.png";
if(isset($_GET['imbau']) && $_GET['imbau'] == 2){
	$textos = ['Central Geradora Hidrelétrica Imbaú II','A Central Geradora Hidrelétrica (CGH) Imbaú II é um exemplo notável do uso sustentável de recursos hídricos para geração de energia. Situada entre os municípios de Imbaú e Tibagi, no estado do Paraná, a usina utiliza de forma eficiente um desnível natural do Rio Imbaú, localizado a 40 km da foz do Rio Tibagi, na sub-bacia do mesmo.','Projetada com foco em eficiência e sustentabilidade, a CGH Imbaú II tem uma potência instalada de 2,5 MW (2.500 kW), operando com duas turbinas tubulares tipo “S” de eixo horizontal e rotor Kaplan. Esta configuração foi escolhida após uma análise detalhada para maximizar a relação benefício/custo, garantindo uma geração de energia eficaz com impacto ambiental reduzido. A localização e o design da usina permitem atender às demandas energéticas da região, reforçando a infraestrutura local de forma responsável.','A CGH Imbaú II foi desenvolvida alinhando o crescimento industrial com a proteção ambiental. Seu planejamento e implementação foram orientados pela maximização do benefício em relação ao custo, resultando em um projeto que não só produz energia de maneira eficiente, mas também minimiza os impactos ambientais. Esse compromisso reflete a dedicação da usina ao desenvolvimento sustentável, considerando tanto os aspectos econômicos quanto os ambientais, fornecendo energia de forma consciente e eficiente para a região.','A CGH Imbaú II representa a nossa aspiração de ser líderes na geração de energia renovável, mantendo o compromisso constante com a sustentabilidade e o respeito ao meio ambiente. Mais do que uma central hidrelétrica, ela simboliza a harmonia entre tecnologia avançada e conservação ambiental, apontando para um futuro mais verde e próspero para as comunidades locais e para o ecossistema.'];
	$map = "https://cghimbau.com.br/wp-content/uploads/2024/01/imagem_2024-01-22_155700743.png";
	$bannerLink = "https://cghimbau.com.br/wp-content/uploads/2024/02/Rectangle-175-1-e1707413084129.png";
}

?>
<section
    style="background-image: url(<?php echo $bannerLink; ?>);background-repeat: no-repeat;background-size: cover;padding: 250px 5% 50px;color: #ff0;background-position: 100%;">
    <h1 class="h00" style="font-weight: 300;">Sobre Nós</h1>
    <h3 style="font-weight: 300;"><?php echo $textos[0] ?></h3>

  </section>
  <section style="background-color: #fff;">
	  <br>
    <div class="flex p50 box" style="justify-content: space-between;align-items: center;max-width: 1220px;margin: auto;border-radius: 37px;gap: 55px">
      <div class="MobBlock"
		   style="width: 100%;height: 150px;border-radius: 37px;background: url(<?php echo $map; ?>);background-repeat: no-repeat;background-size: cover;background-position: 100%;" alt=""></div>
		<br>
      <p class="w50"><?php echo $textos[1] ?></p>
      <div class="MobNone" style="width: 520px;height: 350px;border-radius: 37px;background: url(<?php echo $map; ?>);background-repeat: no-repeat;background-size: cover;background-position: 100%;" alt=""></div>
    </div>
	<br><br>
    <div class="flex" style="justify-content: center;gap: 10px;">
      <div class="p50 box">
        <h4 style="font-weight: 700">Características <br> Técnicas</h4>
        <p><?php echo $textos[2] ?></p>
      </div>
      <br>
      <div class="p50 box">
        <h4 style="font-weight: 700">Compromisso Ambiental <br> e Econômico</h4>
        <p><?php echo $textos[3] ?></p>
      </div>
    </div>
    <br>
    <div class="flex" style="justify-content: center;gap: 20px;align-items: center;">
      <div class="p50 box" style="max-width: 1200px">
        <h4 style="font-weight: 700">Visão de Futuro</h4>
        <p><?php echo $textos[4] ?></p>
      </div>
    </div>
    <br>
  </section>