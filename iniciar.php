<html id="fondo">
<head>
    <meta charset="utf-8">
    <meta name="description" content="Hotel El Bosque">
    <meta name="keywords" content="hotel">
    <meta http‐equiv="refresh" content="20;URL=./2PantillaBasica.htm" >
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/estiloEquBlog.css?1.0" media="all" >
    <link rel="stylesheet" href="css/login.css" media="all"> 
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.0.0/animate.min.css">
</head>
<body>
<h1 class="animate__animated animate__backInLeft" >Información sobre el COVID-19</h1>
<ul>
  <li><a href="index.html">Inicio</a></li>
  <li><a href="covid.html"> ¿Qué es el COVID-19? </a></li>
  <li><a href="medidas.html"> Medidas preventivas </a></li>
  <li><a href="test.php" id="selected">¿Tengo o no COVID-19?</a></li>
  <li><a href="hospitales.html">Hospitales en México</a></li>
</ul>
<br><br>

<form action="respuestas.php" method="POST" class="animate__animated animate__backInLeft">
   <h1 class="animate__animated animate__backInLeft">TEST COVID-19</h1>

   <p>Nombre(s)<input type="nombre" placeholder="ej, Barry Allen, Bruce Wayne" name="nombre"></p>

   <p>Apellidos<input type="apellido" placeholder="ej, Pendragon, Garcia, O'Conner" name="apellidos"></p>
   <br><br><br>
   <h2>Marque la casilla correspondiente en caso de haber o no presentado uno de los siguientes síntomas en los útimos días</h2>

   <center><table id="admin">
      <tr>
        <th><b>Tos</b></th>
        <th><b><?php $clase = array(
              'si' => 'SI',
              'no' => 'NO',
              );?>

              <?php foreach($clase as $key => $opcion) {
                echo "<div class='campo'>";
                echo "<input type='checkbox' name='tos' value='$key'>$opcion&nbsp</div>";} ?>
            </b></th>
        
        <th><b>Dolor de garganta</b></th>
        <th><b><?php $clase = array(
              'si' => 'SI',
              'no' => 'NO',
              );?>

              <?php foreach($clase as $key => $opcion) {
                echo "<div class='campo'>";
                echo "<input type='checkbox' name='garganta' value='$key'>$opcion&nbsp</div>";} ?>
          </b></th>
        
        <th><b>Escalofrios</b></th>
        <th><b><?php $clase = array(
              'si' => 'SI',
              'no' => 'NO',
              );?>

              <?php foreach($clase as $key => $opcion) {
                echo "<div class='campo'>";
                echo "<input type='checkbox' name='escalofrios' value='$key'>$opcion&nbsp</div>";} ?>
          </b></th>
      </tr>

      <tr>
        <th><b>Malestar estomacal<br> ó diarrea</b></th>
        <th><b><?php $clase = array(
             'si' => 'SI',
             'no' => 'NO',
              );?>

              <?php foreach($clase as $key => $opcion) {
                echo "<div class='campo'>";
                echo "<input type='checkbox' name='estomago' value='$key'>$opcion&nbsp</div>";} ?>
            </b></th>
        
        <th><b>Dolor corporal general</b></th>
        <th><b><?php $clase = array(
              'si' => 'SI',
              'no' => 'NO',
              );?>

              <?php foreach($clase as $key => $opcion) {
                echo "<div class='campo'>";
                echo "<input type='checkbox' name='corporal' value='$key'>$opcion&nbsp</div>";} ?>
          </b></th>
        
        <th><b>Fiebre</b></th>
        <th><b><?php $clase = array(
              'si' => 'SI',
              'no' => 'NO',
              );?>

              <?php foreach($clase as $key => $opcion) {
                echo "<div class='campo'>";
                echo "<input type='checkbox' name='fiebre' value='$key'>$opcion&nbsp</div>";} ?>
          </b></th>
      </tr>

      <tr>
        <th><b>Dificultad para<br>respirar</b></th>
        <th><b><?php $clase = array(
              'si' => 'SI',
              'no' => 'NO',
              );?>

              <?php foreach($clase as $key => $opcion) {
                echo "<div class='campo'>";
                echo "<input type='checkbox' name='respirar' value='$key'>$opcion&nbsp</div>";} ?>
            </b></th>
        
        <th><b>Escurrimiento nasal</b></th>
        <th><b><?php $clase = array(
              'si' => 'SI',
              'no' => 'NO',
              );?>

              <?php foreach($clase as $key => $opcion) {
                echo "<div class='campo'>";
                echo "<input type='checkbox' name='nasal' value='$key'>$opcion&nbsp</div>";} ?>
          </b></th>
        
        <th><b>Ojos rojos</b></th>
        <th><b><?php $clase = array(
              'si' => 'SI',
              'no' => 'NO',
              );?>

              <?php foreach($clase as $key => $opcion) {
                echo "<div class='campo'>";
                echo "<input type='checkbox' name='ojos' value='$key'>$opcion&nbsp</div>";} ?>
          </b></th>
      </tr>
    </table></center>

    <center><table id="admin">
      <tr>
        <th><b>¿Presenta dolor de cabeza?</b></th>
        <th>
          <select name="dolorCabeza">
              <option selected>- Selecciona una respueta -</option>
              <option value="Si">Si</option>
              <option value="Mas o menos">Mas o menos</option>
              <option value="No">No</option>
          </select>
        </th>
      </tr>

      <tr>
        <th><b>¿Ha perdido el olfato o durante el día tiene la nariz tapada?</b></th>
        <th>
          <b><select name="olfato">
              <option selected>- Selecciona una respueta -</option>
              <option value="Si">Si</option>
              <option value="Mas o menos">Mas o menos</option>
              <option value="No">No</option>
             </select><b>
        </th>
      </tr>

      <tr>
        <th><b>¿Se le dificulta respirar o siente que le hace falta el aire?</b></th>
        <th>
          <b><select name="respirarr">
              <option selected>- Selecciona una respueta -</option>
              <option value="Si">Si</option>
              <option value="Mas o menos">Mas o menos</option>
              <option value="No">No</option>
             </select><b>
        </th>
      </tr>

      <tr>
        <th><b>¿Siente cansancio y que normalmente no puede hacer sus actividades?</b></th>
        <th>
          <b><select name="cansancio">
              <option selected>- Selecciona una respueta -</option>
              <option value="Si">Si</option>
              <option value="Mas o menos">Mas o menos</option>
              <option value="No">No</option>
             </select><b>
        </th>
      </tr>
    </table></center>
    
    <center>
      <div class="textarea">
        <div class="campo">
          <label for="mensaje"> ¿Algún otro sintoma que tenga? <br/>
            <textarea name="mensaje" rows="8" cols="40" id="mensaje"></textarea>
          </label>
        </div>
      </div>
    </center>

    <input type="submit" value="Finalizar Test">
</form>
</body>
</html>