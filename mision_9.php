
<script type="text/javascript">
    function limelightPlayerCallback(playerId, eventName, data){
      
      var id = "player";
      if (eventName == 'onPlayerLoad' && (LimelightPlayer.getPlayers() == null || LimelightPlayer.getPlayers().length == 0)) {
        LimelightPlayer.registerPlayer(id);
      }
      if(eventName == 'onPlayerLoad'){
        if(!inicio){
          LimelightPlayer.doLoadMedia('eadc8c849a7d4b0b921e0fba885d672e', true, 0);
        }else{
          LimelightPlayer.doLoadMedia('f5837b9ccd3b44beaaf3a4a08f3968d3', true, 0)
        }
      }
      if(eventName == 'onMediaComplete'){
        $('#continuar2').show();
      }
      
  }
</script>

<div class="container principal" id="contenedorPrincipal">
  <!-- Primera parte primer video de la mision Viedo Bliss como marinero-->
  <div class="row mision-video" id="video1" style="text-align:center; display:none;">
    <!-- <div id="iframe-container">
      <div id="player"></div>
        <script src="//video.limelight.com/player/embed.js"></script>
        <object type="application/x-shockwave-flash" id="limelight_player_156792" name="limelight_player_156792" class="LimelightEmbeddedPlayerFlash swfPrev-beforeswfanchor0 swfNext-afterswfanchor0" width="640" height="390" data="//video.limelight.com/player/loader.swf" tabindex="0">
        <param name="movie" value="//video.limelight.com/player/loader.swf">
        <param name="wmode" value="window">
        <param name="allowScriptAccess" value="always">
        <param name="allowFullScreen" value="true">
        <param name="flashVars" value="playerForm=Player&amp;deepLink=true"></object>
        <a id="afterswfanchor0" href="#limelight_player_156792" tabindex="0" title="Flash end" style="border:0;clip:rect(0 0 0 0);display:block;height:1px;margin:-1px;outline:none;overflow:hidden;padding:0;position:absolute;width:1px;" data-related-swf="limelight_player_156792"></a>
        <script>LimelightPlayerUtil.initEmbed('limelight_player_156792');</script>
    </div>
    <iframe title="Video" class="row mision-video" type="text/html" width="640" height="390" src="http://www.youtube.com/embed/KjFg16nhsLo" frameborder="0" allowFullScreen></iframe>
    <br>
    <br>
    <a class="btn btn-normal" href="<?php echo base_url('home')?>"><span class="glyphicon glyphicon-home"></span> Ir al Home</a>
    <input style="display:none; position:relative;" id="continuar" type="button" value="Continuar" class="btn btn-normal"> -->
  </div>

  <!-- segunda vista animacion del barco que se mueve por el mapa-->
  <div class="row mision-video" id="video2" style="text-align:center; display:block;">
    <div id="iframe-container">
      <div id="player"></div>
        <script src="//video.limelight.com/player/embed.js"></script>
        <object type="application/x-shockwave-flash" id="limelight_player_156792" name="limelight_player_156792" class="LimelightEmbeddedPlayerFlash swfPrev-beforeswfanchor0 swfNext-afterswfanchor0" width="640" height="390" data="//video.limelight.com/player/loader.swf" tabindex="0">
        <param name="movie" value="//video.limelight.com/player/loader.swf">
        <param name="wmode" value="window">
        <param name="allowScriptAccess" value="always">
        <param name="allowFullScreen" value="true">
        <param name="flashVars" value="playerForm=Player&amp;deepLink=true"></object>
        <a id="afterswfanchor0" href="#limelight_player_156792" tabindex="0" title="Flash end" style="border:0;clip:rect(0 0 0 0);display:block;height:1px;margin:-1px;outline:none;overflow:hidden;padding:0;position:absolute;width:1px;" data-related-swf="limelight_player_156792"></a>
        <script>LimelightPlayerUtil.initEmbed('limelight_player_156792');</script>
    </div>
    <!-- <iframe title="Video" class="row mision-video" type="text/html" width="640" height="390" src="http://www.youtube.com/embed/KjFg16nhsLo" frameborder="0" allowFullScreen></iframe> -->
    <br>
    <br>
    <a class="btn btn-normal" href="<?php echo base_url('home')?>"><span class="glyphicon glyphicon-home"></span> Ir al Home</a>
    <input style="display:none; position:relative;" id="continuar2" type="button" value="Continuar" class="btn btn-normal">
  </div>


<!-- Tercera Vista Actividad de la madera y herramientas de carpinteria -->
  <div class="row form" id="contenedorActividadMadera" style="display:none;"> 
    <form action="" id="actividadMadera" >
      <fieldset id="contenedorDrag">
      
        <!--Primera columna con texto y bilss-->
        <div class="col-md-4" id="colInformacion">
          <label class="texto-blanco" id="textoMadera">Las maderas: El barco se construye con dos tipos de maderas, él y ella, quienes se eligen y se conocen. Hay muchos tipos de maderas. Arrastra la madera que mejor encaje.</label>
          <br>
          <br>
          <img id="bliss" src="<?php echo base_url('assets/img/mpyc2/m9/bliss_1.png');?>" width="200px"/>
         </div>

        <!--Segunda columna con el area para la madera-->
        <div class="col-md-5 relativa"> 
          <img class="absoluta" id="maderaBase" src="<?php echo base_url('assets/img/mpyc2/m9/madera_sup_1.png');?>"/>
          <img class="absoluta maderaComplemento" id="maderaComplemento" src="<?php echo base_url('assets/img/mpyc2/m9/madera_inf_1.png');?>"/>
          <img class="absoluta" id="cintas" src="<?php echo base_url('assets/img/mpyc2/m9/cintaSB.png');?>"/>
          <img class="absoluta" id="grapas" src="<?php echo base_url('assets/img/mpyc2/m9/grapadoraSB.png');?>"/>
          <img class="absoluta"  id="colbon" src="<?php echo base_url('assets/img/mpyc2/m9/pegamentoSB.png');?>"/>

        </div>
      
        <!--Terecera columna con las erramineta y boton sigiente-->
        <div class="col-md-3">
          <div class="barraLateral contornoIzquierdo contornoInferior sombra" id="elmentosSeleccion">
            <span class="titulo-verde">ELEMENTOS</span>
            <div class"relativa" id="maderas">
              <img class="madera" id="madera1" src="<?php echo base_url('assets/img/mpyc2/m9/madera_inf_1.png');?>">
              <br>
              <img class="madera" id="madera2" src="<?php echo base_url('assets/img/mpyc2/m9/madera_inf2.png');?>">
              <br>
              <img class="madera" id="madera3" src="<?php echo base_url('assets/img/mpyc2/m9/madera_inf3.png');?>">
            </div>

            <div id="procesos">
              <div class="procesoContainer" >
                <img class="procesoOn" id="proceso1" src="<?php echo base_url('assets/img/mpyc2/m9/cortar.png');?>">
                <br>
                <span class="texto-blanco">Cortar defectos</span>  
              </div>
              <div class="procesoContainer" >
                <img class="procesoOff" id="proceso2"src="<?php echo base_url('assets/img/mpyc2/m9/limar.png');?>">
                <br>
                <span class="texto-blanco">Limar temperamentos</span>  
              </div>
              <div class="procesoContainer" >
                <img class="procesoOff" id="proceso3"src="<?php echo base_url('assets/img/mpyc2/m9/pulir.png');?>">
                <br>
                <span class="texto-blanco">Pulir prioridades vitales</span>  
              </div>
            </div>

            <div id="pegamentos">
              <img class="pegamento" id="pegamento2" src="<?php echo base_url('assets/img/mpyc2/m9/cinta.png');?>">
              <br>
              <span class="texto-blanco">Estar juntos</span>  
              <br>
              <img class="pegamento" id="pegamento3" src="<?php echo base_url('assets/img/mpyc2/m9/grapadora.png');?>">
              <br>
              <span class="texto-blanco">Unión de hecho</span> 
              <br>
              <img class="pegamento" id="pegamento1" src="<?php echo base_url('assets/img/mpyc2/m9/pegamento.png');?>">
            </div>
              
                       

          </div>
          <input type="button" class="btn btn-normal" id="siguienteMadera" value="Siguiente" disabled> 
        </div>
      
      </fieldset>
         
    </form>
  </div>

  <!-- Cuarta viasta Actividad de los radares-->
  <div class="row form relativa" id="contenedorActividadRadares" style="display:none;">
    <form action="" id="actividadRadares"  >

      <!--Contenedor de bilss y cuador de texto, absoluto para mover con fcilidad-->
      <div class="absoluta" id="blissRadar">
        <div>
          <p class="texto-blanco" >
            Selecciona cada radar para que veas hacia dónde debe apuntar
          </p>
        </div>
        <img src="<?php echo base_url('assets/img/mpyc2/m9/bliss_1.png');?>" width="200px"/>
      </div>

      <!--Contenedor con los textos-->
      <div class="text-center center-block" id="textoRadar">
        <span class="titulo-magenta" id="tituloBrujula" ></span>
        <p class="texto-blanco" id="textoBrujula"></p>
      </div>

      <!--Contenerdo con los radares, abosulo para poderlo mover con facilidad-->
      <div class="absoluta" id="panelBrujulas">
      
        <div class="col-md-3">
          <img class="brujula" id="brujulaDignidad" data-titulo="DIGNIDAD" data-texto="Respetarse. No utilizarse ni manipularse mutuamente." data-color="#00fffc" data-nobrujula="0" src="<?php echo base_url('assets/img/mpyc2/m9/brujula_dignidad.png');?>"/>
        </div>
        <div class="col-md-3">
          <img class="brujula" id="brujulaIdentidad" data-titulo="IDENTIDAD" data-texto="Conocimiento. Hacerse experto en la otra persona. Querer al otro en tanto otro." data-color="#a2ff00" data-nobrujula="1" src="<?php echo base_url('assets/img/mpyc2/m9/brujula_identidad.png');?>"/>
        </div>
        <div class="col-md-3" >
          <img class="brujula" id="brujulaIntimidad" data-titulo="INTIMIDAD" data-texto="El mundo interior de cada uno pone en común en la comunicación." data-color="#ffae00" data-nobrujula="2" src="<?php echo base_url('assets/img/mpyc2/m9/brujula_intimidad.png');?>"/>
        </div>
        <div class="col-md-3">
          <img class="brujula" id="brujulaLibertad" data-titulo="LIBERTAD" data-texto="Tener el control del rumbo. Autogobernarse para amar." data-color="#f846ff" data-nobrujula="3" src="<?php echo base_url('assets/img/mpyc2/m9/brujula_libertad.png');?>" />
        </div>
        
      </div>

      <input type="button" class="btn btn-normal absoluta"  id="siguienteRadar" value="Siguiente" disabled> 
    </form>  
  </div>

    <!-- Quinta Vista Actividad para buscar letras A-->
  <div class="row form" id="contenendorActividadA" style="display: none;">
    <form action="" id="actividadA" style="position:relative;">
    <div class="HUD">
      <fieldset>
        <div class="col-md-2">
          <span class="digital absoluta" id="contador">10</span>
          <img src="<?php echo base_url('assets/img/mpyc2/m9/caja_contador.png');?>"/>  
        </div>
        <div class="col-md-10" id="tituloInstrucciones">
          <span class="titulo-azul">La afectividad positiva se relaciona con diez aspectos que inician con la letra A. Encuntra las 10 letras A que están escondidas en la imagen para hacer avanzar el barco</span>
        </div>
      </fieldset>
    </div>
    
    <div class="contorno sombra relativa overflowhidden" id="contenedorImagen">
      <img class"fondoCont" src="<?php echo base_url('assets/img/mpyc2/m9/Fondo_amistad_01.png');?>"/>

      <div class="contedorBote absoluta">
        <img class="absoluta" id="aguaBote" src="<?php echo base_url('assets/img/mpyc2/m9/agua_bote.png');?>" width="355px"/>
        <img class="absoluta" id="bote" src="<?php echo base_url('assets/img/mpyc2/m9/bote.png');?>" width="258px"/>
        <div class="seleccionA absoluta" id="A10" data-titulo="Apertura." data-texto="Hacer el bien juntos. Trascenderse. Servir a los demás juntos.">
          <img class="circuloA" src="<?php echo base_url('assets/img/mpyc2/m9/circulo.png');?>">              
        </div>
      </div>

      <div class="seleccionA absoluta" id="A01" data-titulo="Amistad" data-texto="La amistad afecta positivamente en el presente y genera buenos recuerdos.">
        <img class="circuloA" src="<?php echo base_url('assets/img/mpyc2/m9/circulo.png');?>">
      </div>
      <div class="seleccionA absoluta" id="A02" data-titulo="Afecto" data-texto="Para que cada uno se sienta realmente querido, el desafío es conocer las maneras prioritarias de sentirse querido del otro (a). Lo que se dice al otro, lo que se hace por el otro, la atención o tiempo de calidad, la ternura, los regalos.">
        <img class="circuloA" src="<?php echo base_url('assets/img/mpyc2/m9/circulo.png');?>">
      </div>
      <div class="seleccionA absoluta" id="A03" data-titulo="Atractivo físico" data-texto="Como somos personas corpóreas, es importantante que exista y se cuide el atractivo físico.">
        <img class="circuloA" src="<?php echo base_url('assets/img/mpyc2/m9/circulo.png');?>">
      </div>
      <div class="seleccionA absoluta" id="A04" data-titulo="Armonía sexual" data-texto="Vivir juntos el sentido unitivo y procreativo del acto sexual.">
        <img class="circuloA" src="<?php echo base_url('assets/img/mpyc2/m9/circulo.png');?>">
      </div>
      <div class="seleccionA absoluta" id="A05" data-titulo="Admiración" data-texto="Sentirse reconocido y reconocer al otro por sus acciones positivas.">
        <img class="circuloA" src="<?php echo base_url('assets/img/mpyc2/m9/circulo.png');?>">
      </div>
      <div class="seleccionA absoluta" id="A06" data-titulo="Ayuda" data-texto="Colaborarse en el día a día de acuerdo a sus necesidades.">
        <img class="circuloA" src="<?php echo base_url('assets/img/mpyc2/m9/circulo.png');?>">
      </div>
      <div class="seleccionA absoluta" id="A07" data-titulo="Alegría ahora" data-texto="Estar en paz por hacer lo que debo hacer conforme a mis convicciones">
        <img class="circuloA" src="<?php echo base_url('assets/img/mpyc2/m9/circulo.png');?>">
      </div>
      <div class="seleccionA absoluta" id="A08" data-titulo="Aceptación o adaptación" data-texto="Aceptarnos y adaptarnos para ayudarnos a ser nuestra mejor versión.">
        <img class="circuloA" src="<?php echo base_url('assets/img/mpyc2/m9/circulo.png');?>">
      </div>
      <div class="seleccionA absoluta" id="A09" data-titulo="Acción" data-texto="No basta desearse el bien, sino el desafío es hacerse el bien.">
        <img class="circuloA" src="<?php echo base_url('assets/img/mpyc2/m9/circulo.png');?>">
      </div>
    </div>

    <div class="absoluta" id="emergenteA">
      <div class="contorno sombra relativa">
        <span class="titulo-azul" id="tituloA">Amistad</span>
        <p class="texto-blanco" id="textoA">La amistad afecta positivamente, genera buenos recuerdos</p>
        <input type="button" class="btn btn-normal relativa"  id="siguienteA" value="Continuar buscando."> 
      </div>
    </div>
      
    </form>
  </div>

  <!--Sexta vista Actividad del motor fuera de borda-->
  <div class="row form relativa" id="contenendorActividadMotor" style="display: none;">
    <form action="" id="actividadMotor">
      <div>
        <fieldset>

          <!--Primera columna con texto y bilss-->
          <div class="col-md-4 relativa" id="colInformacion">

            <label class="texto-blanco" id="instruccionesMotor" style="position:relative; top:-70px;">Para asegurar el buen funcionamiento de los dos motores y ponerlos en marcha da clic en la lupa y revisa la gasolina y el aceite.</label>
            <br>
            <br>
            <img class="relativa" id="blissMotor"src="<?php echo base_url('assets/img/mpyc2/m9/bliss_1.png');?>" width="200px"/>
          </div>

          <!--Segunda Columna para motor y lupa-->
          <div class="col-md-8 relativa" id="colMotor">

            <div id="contenedorLupa" >
              <img class="absoluta" id="fondoAzul1" src="<?php echo base_url('assets/img/mpyc2/m9/fondo_azul.png');?>"/>
              <img class="absoluta" id="fondoAzul2" src="<?php echo base_url('assets/img/mpyc2/m9/fondo_azul.png');?>"/>

              <span class="titulo-azul" id="lupa">Activar lupa</span>
              
              <img class="absoluta" id="imagAceite" src="<?php echo base_url('assets/img/mpyc2/m9/aceite.png');?>" data-zoom-image="<?php echo base_url('assets/img/mpyc2/m9/aceite.png');?>"/>
              <img class="absoluta" id="imagGasolina" src="<?php echo base_url('assets/img/mpyc2/m9/gas.png');?>" data-zoom-image="<?php echo base_url('assets/img/mpyc2/m9/gas.png');?>"/>
            </div>
            
            <div id="contenedorPrenderMotor" >
              <div class="absoluta "id="areaPrenderMotor">
                <span class="texto-azul">Encender Motor</span>
                <br>
                  <div id="llegadaMano"></div>
                  <img id="flecha" src="<?php echo base_url('assets/img/mpyc2/m9/flecha_motor.png');?>"/>
                  <img id="mano" src="<?php echo base_url('assets/img/mpyc2/m9/mano_motor.png');?>"/>
                </div>

                <div id="HUDMotor" class="relativa">
                  <div  id="zonaIntentos">
                    <span class="texto-azul" style="position:relative; top:-8px;">Intentos</span>

                     <div class="contorno sombra">
                        <img class="punto-azul relativa" id="punto1" src="<?php echo base_url('assets/img/mpyc2/m9/punto.png');?>"/>
                        <img class="punto-azul relativa" id="punto2" src="<?php echo base_url('assets/img/mpyc2/m9/punto.png');?>"/>
                        <img class="punto-azul relativa" id="punto3" src="<?php echo base_url('assets/img/mpyc2/m9/punto.png');?>"/>
                        <img class="punto-azul relativa" id="punto4" src="<?php echo base_url('assets/img/mpyc2/m9/punto.png');?>"/>
                        <img class="punto-azul relativa" id="punto5" src="<?php echo base_url('assets/img/mpyc2/m9/punto.png');?>"/>
                    </div>
                  </div>
              </div>
            </div>

            <img class="absoluta" id="imagMotor" src="<?php echo base_url('assets/img/mpyc2/m9/motor.png');?>" />
            <br>
            <input type="button" class="btn btn-normal absoluta"  id="siguienteMotor" value="Siguiente" disabled> 
          </div>
        </fieldset>
        <div class="absoluta" id="emergenteMotor">
        <div class="contorno sombra relativa" id="zonaTextos">
          <span class="texto-naranja" style="font-weight: 800;">ACCIONES DE VOLUNTAD QUE MUEVEN EL MOTOR</span>
          <br>
          <br>
          <span class="texto-blanco" id="tituloMotor">Humildad</span>
          <br>
          <p id="textoMotor" class="texto-blanco">Reconocer los aspectos positivos y negativos de la propia personalidad y conducta.</p>
          <br> 
           <input type="button" class="btn btn-normal"  id="continuarMotor" value="Continuar" >  
        </div>
      </div>
      </div>
      
    </form>
  </div>

  <!-- Septima vista animacion de los viejos en el barco-->
  <div class="row mision-video" id="video3" style="text-align:center; display:none;">
    <div id="iframe-container">
      <div id="player"></div>
        <script src="//video.limelight.com/player/embed.js"></script>
        <object type="application/x-shockwave-flash" id="limelight_player_156792" name="limelight_player_156792" class="LimelightEmbeddedPlayerFlash swfPrev-beforeswfanchor0 swfNext-afterswfanchor0" width="640" height="390" data="//video.limelight.com/player/loader.swf" tabindex="0">
        <param name="movie" value="//video.limelight.com/player/loader.swf">
        <param name="wmode" value="window">
        <param name="allowScriptAccess" value="always">
        <param name="allowFullScreen" value="true">
        <param name="flashVars" value="playerForm=Player&amp;deepLink=true"></object>
        <a id="afterswfanchor0" href="#limelight_player_156792" tabindex="0" title="Flash end" style="border:0;clip:rect(0 0 0 0);display:block;height:1px;margin:-1px;outline:none;overflow:hidden;padding:0;position:absolute;width:1px;" data-related-swf="limelight_player_156792"></a>
        <script>LimelightPlayerUtil.initEmbed('limelight_player_156792');</script>
    </div>
    <!-- <iframe title="Video" class="row mision-video" type="text/html" width="640" height="390" src="http://www.youtube.com/embed/8jKP57IQldM" frameborder="0" allowFullScreen></iframe> -->
    <br>
    <br>
    <input style="display:block; position:relative; left:520px;" id="continuar3" type="button" value="Continuar" class="btn btn-normal">
  </div>

   <!--Ocatava vista Meroria de la misison-->

  <div class="row form memoria" id="contenedor-memoria" style="display:none;">
    <form action="" id="form-memoria_m1">
      <fieldset>
        <label class="memo-title2">MEMORIA DE LA MISIÓN</label>
        <label class="quote texto-azul" style="width:500px;">“La libertad sin compromiso es una libertad inmadura; el amor sin compromiso es un amor inmaduro”.<br><span><strong>-  Gerardo Castillo</strong></span></label><br>
        <label>¿Qué pensamiento te surge después de esta misión?</label>
        <textarea class="input" r="<?php echo $memoria_id?>" rows="6" id="memoria" name="memoria" required><?php echo $memoria ?></textarea>
      </fieldset>
      
      <br>
      
      <a class="btn btn-normal bot-ir-al-home-misiones" href="<?php echo base_url('home2')?>"><span class="glyphicon glyphicon-home"></span> Regresar al Home</a>
      
      <input type="button" class="btn btn-normal salir" id="guardar_memo" value="Guardar">              
    </form>
  </div>   
  
</div>        