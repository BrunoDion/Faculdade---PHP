<?php
$logo = "https://cghimbau.com.br/wp-content/uploads/2024/01/imagem_2024-01-12_143727071.png";
$km = "42";
if(@$_GET['imbau'] == 2){
$logo = "https://cghimbau.com.br/wp-content/uploads/2024/01/imagem_2024-01-16_145800970.png";
$km = "40";
}
?>
<footer class="flex" style="background-color: #000;padding: 20px;align-items: center;justify-content: center;gap: 50px">
    <img class="MobNone" src="<?php echo $logo; ?>" width="300px" alt="">
    <img class="MobBlock" src="<?php echo $logo; ?>" width="100px" style="margin: auto;" alt="">
    <h2 class="MobNone" style="color: #FFF;font-weight: 300;">Rio Imbaú, km <?php echo $km; ?>, Divisa Imbaú e Tibagi, Paraná</h2>
    <br>
    <h6 class="MobBlock" style="color: #FFF;text-align: center;font-weight: 300;">Rio Imbaú, km <?php echo $km; ?>, Divisa Imbaú e Tibagi, Paraná</h6>
  </footer>