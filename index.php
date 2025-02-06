<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/estilo.css">
    <title>Churrascaria da Chuletada Quente</title>
</head>
<body class="fundofixo">
<!-- Area de Menu -->
 <?php 
 include 'menu_publico.php;'
 ?>
 <a name="home">&nbsp;</a>
 <main class="container">
    <!-- Area de carousel -->
     <?php 
     include 'carousel.php;'?>
     <!-- Area de destaque -->
      <a  class="pt-6" name="destaques">&nbsp;</a>
      <?php include 'produtos_destaque.php;'?>
      <!-- Area Geral de Produtos -->
       <a  class="pt-6" name="produtos">&nbsp;</a>
       <?php include 'produtos_geral.php;'?>
       <!-- RodaPé -->
        <footer class="panel-footer" style="background: none;">
        <?php include 'rodape.php;'?>
        <a names="contato"></a>
        </footer>
 </main>
</body>
</html>
