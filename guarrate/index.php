<html><head>

  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="content-type" content="text/html; charset=UTF-8">
  <title>Captive Portal Login Page</title>
  	<script type="text/javascript">
		var wifi4euTimerStart = Date.now();
		var wifi4euNetworkIdentifier = 'ifFw6Bc0E68WT2ZB9Y7qc';
		var wifi4euLanguage = 'es';
	</script>
	<script type="text/javascript" src="https://collection.wifi4eu.ec.europa.eu/wifi4eu.min.js"></script>
	<style>
	  #content,.login,.login-card a,.login-card h1,.login-help{text-align:center}body,html{margin:0;width:100%;height:100%;display:table}#content{font-family:'Source Sans Pro',sans-serif;background-color:#1C1275;}.login-card{padding:40px;width:400px;background-color:#F7F7F7;margin:100px auto 10px;border-radius:2px;box-shadow:0 2px 2px rgba(0,0,0,.3);overflow:hidden}.login-card h1{font-weight:400;font-size:2.3em;color:#1383c6}.login-card h1 span{color:#f26721}.login-card img{width:70%;}.login-card input[type=submit]{width:100%;display:block;margin-bottom:10px;position:relative}.login-card input[type=text],input[type=password]{height:44px;font-size:16px;width:100%;margin-bottom:10px;-webkit-appearance:none;background:#fff;border:1px solid #d9d9d9;border-top:1px solid silver;padding:0 8px;box-sizing:border-box;}.login-card input[type=text]:hover,input[type=password]:hover{border:1px solid #b9b9b9;border-top:1px solid #a0a0a0;}.login{font-size:14px;font-family:Arial,sans-serif;font-weight:700;height:36px;padding:0 8px}.login-submit{-webkit-appearance:none;-moz-appearance:none;appearance:none;border:0;color:#fff;text-shadow:0 1px rgba(0,0,0,.1);background-color:#4d90fe}.login-submit:disabled{opacity:.6}.login-submit:hover{border:0;text-shadow:0 1px rgba(0,0,0,.3);background-color:#357ae8}.login-card a{text-decoration:none;color:#222;font-weight:400;display:inline-block;opacity:.6;}.login-card a:hover{opacity:1}.login-help{width:100%;font-size:12px}.list{list-style-type:none;padding:0}.list__item{margin:0 0 .7rem;padding:0}label{align-items:center;text-align:left;font-size:14px;}input[type=checkbox]{-webkit-box-flex:0;-webkit-flex:none;-ms-flex:none;flex:none;margin-right:10px;float:left}@media screen and (max-width:450px){.login-card{width:70%!important}.login-card img{width:30%;height:30%}}textarea{width:66%;margin:auto;height:120px;max-height:120px;background-color:#f7f7f7;padding:20px}#terms{display:none;padding-top:100px;padding-bottom:300px;}.auth_source{border: 1px solid lightgray; padding:20px 8px 0px 8px; margin-top: -2em; border-radius: 2px; }.auth_head{background-color:#f7f7f7;display:inline-block;}.auth_head_div{text-align:left;}#error-message{text-align:left;color:#ff3e3e;font-style:italic;}
	    #wifi4eubanner{width:60%}
        @media only screen and (max-width: 600px) {
                #wifi4eubanner{width:90%}
        }

  	</style>
</head>

 
<body>
<div id="content">
	<br><br>
	<img id="wifi4eubanner" src="WiFi4EU.svg"><br>
	<div class="login-card">
 		<h1></h1>
		<div id="error-message">
			
		</div>
	  <form name="login_form" method="post" action="<?php print $_GET['actionurl'];?>"><div class="login-help">
			<ul class="list">
				<li class="list__item">
				  <label class="label--checkbox">
					<input type="checkbox" class="checkbox" onchange="document.getElementById('login').disabled = !this.checked;">
					<span>Yo acepto los <a rel="noopener" href="#terms" onclick="document.getElementById('terms').style.display = 'block';">términos y condiciones</a></span>
				  </label>
				</li>
			</ul>
		  </div>
		<input type="hidden" name="userurl" value="<?php print $_GET['userurl'];?>">
		<input type="submit" name="accept" class="login login-submit" value="Acceso" id="login" disabled="">
	  </form>
	  <br>
	</div>


<div id="terms" style="color: white; text-align: center;">

<p><b><i><span style='font-size:18.0pt;line-height:107%'>Condiciones
de servicio para la conexión a la red WiFi4EU</span></i></b></p>

<p>&nbsp;</p>

<p><b><span style='font-size:12.0pt;line-height:107%'>EXENCIÓN
DE RESPONSABILIDAD</span></b></p>

<p><b>1. Condiciones generales</b></p>

<p>Por la presente el AYUNTAMIENTO DE GUARRATE (de ahora en
adelante AYUNTAMIENTO) le informa que las presentes condiciones de uso de los
servicios de acceso WiFi tienen como finalidad regular su utilización y
determinar las condiciones de acceso a los contenidos y servicios que se ponen
a disposición del usuario.</p>

<p>El acceso WiFi no tiene coste para los usuarios y se da
dentro de las instalaciones del AYUNTAMIENTO y en la vía pública, por tanto en
régimen de auto prestación, siendo el operador de red de comunicaciones competente
quien presta el servicio de comunicaciones electrónicas y acceso a internet que
usted está utilizando.</p>

<p>El usuario, al acceder al portal y utilizar el acceso WiFi,
acepta las presentes condiciones, que podrán ser modificadas, total o
parcialmente, por el AYUNTAMIENTO sin previo aviso y en cualquier momento, por
lo cual recomendamos que revise periódicamente estas condiciones.</p>

<p>El AYUNTAMIENTO se reserva el derecho de suspender el uso de
este servicio, por cualquier motivo y sin previo aviso. Después de tal
suspensión, todos los derechos que correspondan por este punto de acceso
terminarán.</p>

<p>El AYUNTAMIENTO dispone de un ancho de banda determinado
para el acceso a internet, y la velocidad de acceso y la fiabilidad del
servicio pueden variar dependiendo de diversos factores. Así pues, el AYUNTAMIENTO
no garantiza el acceso a internet en todo momento, ni de forma continua, segura
o libre de problemas. Asimismo, no se responsabiliza si el acceso es inestable,
inseguro, lento o no está disponible. El AYUNTAMIENTO declina cualquier
responsabilidad que de todo ello pudiera derivar.</p>

<p>La conexión a la red WiFi del AYUNTAMIENTO se realiza,
preferentemente, mediante la red WiFi4EU y con el usuario y contraseña
facilitados por la institución a la que pertenece cada usuario.</p>

<p>Para aquellos usuarios visitantes que no pertenezcan a una
institución con WiFi4EU, el AYUNTAMIENTO ofrece el servicio de conexión a la
red de visitantes con dispositivos inalámbricos mediante sus puntos de acceso
con el SSID WiFi4EU y con acceso abierto vía portal cautivo. Para utilizarlo, se
deben aceptar las condiciones, registrando en los servidores del AYUNTAMIENTO
la dirección MAC del equipo cliente el cual tendrá acceso durante 12 horas a la
red WiFi.</p>

<p>El uso de este servicio no tiene ningún coste asociado para
el usuario, pero implica el cumplimiento de sus condiciones de servicio y de la
política de uso del programa WiF4EU.</p>

<p>Con carácter enunciativo y no limitativo no se permiten
contenidos que incluyan: material que infrinja derechos de autor no autorizados
o que infrinjan cualquier otro derecho de propiedad intelectual o industrial,
material que haga apología al terrorismo, racismo u otras conductas ilegales,
material pornográfico, material amenazador, difamatorio o que incite a la
violencia.</p>

<p><b>2. Obligaciones de los usuarios</b></p>

<p>El usuario se compromete a utilizar el servicio de acceso WiFi
de forma diligente y correcta y se compromete a no utilizarlo para la
realización de actividades contrarias a la ley, la moral, a las buenas
costumbres aceptadas y/o con finalidades y/o efectos ilícitos, prohibidos o lesivos
de derechos e intereses de terceros, así como a no realizar ningún tipo de uso
que de cualquier forma pueda inutilizar, producir daños, sobrecargar,
deteriorar o impedir la normal utilización del servicio, los documentos,
archivos y toda clase de contenidos almacenados en cualquier equipo informático
accesible a través de internet. El AYUNTAMIENTO declina cualquier responsabilidad
que de todo aquello se pueda derivar con toda la extensión que permita el ordenamiento
jurídico.</p>

<p>El usuario debe notificar inmediatamente al AYUNTAMIENTO
cualquier uso no autorizado del servicio o cualquier violación de la seguridad.
El AYUNTAMIENTO asignará una dirección IP para cada acceso, que puede variar.</p>

<p>En ningún caso el usuario podrá configurar ninguna otra
dirección IP o MAC al dispositivo conectado al punto de acceso ni podrá
utilizar el servicio por cualquier otra razón, incluida la reventa de cualquier
aspecto del servicio.</p>

<p>El usuario se compromete a no utilizar, transmitir, difundir
o realizar:</p>

<p style='text-indent:-18.0pt'>-<span
style='font:7.0pt'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span>Intentar romper la seguridad, el acceso, interferir en/o utilizar
cualquier área no autorizada del servicio;</p>

<p style='text-indent:-18.0pt'>-<span
style='font:7.0pt'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span>Eliminar cualquier derecho de autor, marca registrada u otros derechos
de propiedad contenida en o sobre el servicio; </p>

<p style='text-indent:-18.0pt'>-<span
style='font:7.0pt'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span>Intentar cobrar o mantener cualquier información sobre los otros
usuarios del servicio (incluyendo nombres de usuario y/o direcciones de correo
electrónico) para fines no autorizados;</p>

<p style='text-indent:-18.0pt'>-<span
style='font:7.0pt'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span>Utilizar el servicio bajo falsas pretensiones o fraudulentas;</p>

<p style='text-indent:-18.0pt'>-<span
style='font:7.0pt'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span>Crear o transmitir comunicaciones electrónicas no deseadas como SPAM o
cartas en cadena a otros usuarios o interferir con otros usuarios que disfruten
del servicio;</p>

<p style='text-indent:-18.0pt'>-<span
style='font:7.0pt'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span>Transmitir cualquier tipo de virus, gusanos, defectos, troyanos u otros
elementos de naturaleza destructiva; o utilizar el servicio para cualquier
propósito fraudulento, acosador, abusivo, criminal o ilegal.</p>

<p style='text-indent:-18.0pt'>-<span
style='font:7.0pt'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span>Realizar un uso fraudulento de la dirección IP proporcionada.</p>

<p class=MsoListParagraphCxSpLast style='text-indent:-18.0pt'>-<span
style='font:7.0pt'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span>Cualquier otra forma que sea contraria, menosprecie o atente contra los
derechos fundamentales y las libertades públicas reconocidas en la legislación
nacional o europea.</p>

<p><b>3. Las responsabilidades del usuario</b></p>

<p>El usuario acepta y comprende que el acceso y uso del
servicio es bajo su responsabilidad. El AYUNTAMIENTO no asume ninguna
responsabilidad respecto de los usos que se hagan de este servicio, ni de los
datos o información transferidos desde internet.</p>

<p>El AYUNTAMIENTO no controla y no se hace responsable de los
datos, contenidos, servicios o productos a los cuales se acceden o se descargan
a través de este servicio. El AYUNTAMIENTO puede bloquear las transmisiones
para proteger a otros usuarios.</p>

<p>El usuario entiende que el servicio, que utiliza tecnologías
WiFi, no es intrínsecamente seguro, puesto que las comunicaciones WiFi pueden
ser interceptadas por tecnologías diseñadas y destinadas a este fin. A pesar de
que el AYUNTAMIENTO garantiza los esfuerzos razonables con tal de proporcionar
un servicio seguro, no se garantiza la eficacia de éstos. El AYUNTAMIENTO no se
hará responsable ante usted o cualquier otra persona de cualquier falta de
seguridad que pueda resultar del uso del servicio.</p>

<p>El usuario acepta que es responsable de proporcionar las
medidas de seguridad adecuadas para el uso previsto del servicio. Por ejemplo,
deberá asumir toda la responsabilidad de tomar medidas adecuadas para proteger
sus datos frente su pérdida. Además, a parte de la tecnología proporcionada por
el AYUNTAMIENTO, el usuario debe proporcionar todo el equipo, la tecnología y
el software para utilizar el servicio. </p>

<p><b>4. Exclusión de garantías. Limitación de responsabilidad</b></p>

<p>El AYUNTAMIENTO no asume ninguna responsabilidad respecto de
los usos que se hagan de este servicio, ni de los datos o informaciones
transferidas. Se excluye cualquier tipo de garantía o responsabilidad por la
utilización del portal, de los servicios y de los contenidos. A título
enunciativo, pero no limitativo, la exoneración de responsabilidades del AYUNTAMIENTO
comprende cualquier responsabilidad derivada de:</p>

<p style='text-indent:-18.0pt'>-<span
style='font:7.0pt'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span>La precisión, contenido, integridad, legalidad, fiabilidad, operatividad
o disponibilidad de la información o material que se muestra en o accesible a
través del servicio.</p>

<p style='text-indent:-18.0pt'>-<span
style='font:7.0pt'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span>La eliminación, falta de almacenamiento, entrega errónea, o la entrega
inoportuna de cualquier información o material.</p>

<p style='text-indent:-18.0pt'>-<span
style='font:7.0pt'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span>Cualquier daño resultante de descargar o acceder a cualquier información
o material de internet a través del servicio.</p>

<p style='text-indent:-18.0pt'>-<span
style='font:7.0pt'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span>La ausencia de disponibilidad y continuidad del funcionamiento del
servicio de acceso, la interrupción, suspensión o cancelación del acceso.</p>

<p style='text-indent:-18.0pt'>-<span
style='font:7.0pt'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span>La información transmitida por los usuarios a través del canal
suministrado por este servicio de acceso.</p>

<p style='text-indent:-18.0pt'>-<span
style='font:7.0pt'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span>Los daños y perjuicios de cualquier naturaleza derivados del uso
indebido de este servicio.</p>

<p style='text-indent:-18.0pt'>-<span
style='font:7.0pt'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span>La realización, por parte de los usuarios, de accesos no autorizados a
lugares protegidos de internet.</p>

<p style='text-indent:-18.0pt'>-<span
style='font:7.0pt'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span>La falta de servicio, lentitud del acceso.</p>

<p class=MsoListParagraphCxSpLast style='text-indent:-18.0pt'>-<span
style='font:7.0pt'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span>Los daños y perjuicios de cualquier naturaleza que se produzcan por el
conocimiento que puedan tener los terceros del uso de internet que pueda hacer
el usuario, y, en su caso, a la intercepción, eliminación, alteración,
modificación o manipulación, de cualquier contenido y comunicación que los
usuarios transmitan, difundan, almacenen, pongan a disposición, reciban u
obtengan a través del servicio.</p>

<p><b>5. Indemnizaciones</b></p>

<p>El usuario acepta mantener indemne e indemnizar al AYUNTAMIENTO,
sus proveedores y agentes contra cualquier reclamación de un tercero que surja
de o en cualquier manera relacionada con su uso del servicio, incluyendo la
responsabilidad o gasto ocasionado por las reclamaciones, pérdidas, daños
(reales o resultantes), litigios, resoluciones, costes procesales y honorarios
deabogados, de cualquier tipo y naturaleza.</p>

<p><b>6. Legislación aplicable</b></p>

<p>El presente Aviso Legal se rige en todos y cada uno de sus
extremos por la legislación vigente.</p>

<p>&nbsp;</p>

<p><b><span style='font-size:12.0pt;line-height:107%'>RECOMENDACIONES
DE USO</span></b></p>

<p><b>1. Legalidad</b></p>

<p>Los servicios que ofrece el AYUNTAMIENTO están sometidos a
las condiciones y los requisitos que se establecen en la presente declaración
de condiciones de uso. Y están supeditadas a la legislación aplicable y el ordenamiento
jurídico vigente que corresponda aplicar en cada momento.</p>

<p>El usuario del servicio se comprometen a no aceptar ni
estimular prácticas ilegales. Además, velarán especialmente por proteger:</p>

<p>a. El orden público: para evitar que la red WiFi4EU sea un
vehículo de mensajes que inciten al uso de la violencia o a la participación en
actividades delictivas.</p>

<p>b. La dignidad humana: para impedir cualquier clase de
discriminación social, religiosa, étnica, cultural, política, sexual o por
discapacidad física o psíquica.</p>

<p>c. La vida privada: para preservar los derechos y las
libertades fundamentales, tutelando la vida privada, los datos personales y el
secreto epistolar.</p>

<p>d. Los menores: para rechazar su utilización, especialmente
con objetivos sexuales, y para mantener una actitud de cautela en la difusión
de contenidos potencialmente nocivos para la infancia.</p>

<p>e. El consumidor: para respetar los principios de
transparencia y accesibilidad, sometiéndose a las normativas de protección del
consumidor.</p>

<p><b>2. Honradez</b></p>

<p>Los usuarios deberán utilizar correctamente los recursos
públicos que el AYUNTAMIENTO les suministra.</p>

<p>Los usuarios también deberán utilizar eficientemente la red,
con la finalidad de evitar en medida de lo posible su congestión. En ningún
caso se considera aceptable desarrollar actividades que persigan o tengan como
consecuencia:</p>

<p>a. La creación o transmisión de material que perjudique la
dinámica habitual de los usuarios de la red.</p>

<p>b. La congestión de los enlaces de comunicaciones o sistemas
informáticos.</p>

<p>c. La destrucción o modificación premeditada de la
información de otros usuarios.</p>

<p>d. La violación de privacidad e intimidad de otros usuarios.</p>

<p>e. El deterioro del trabajo de otros usuarios. </p>

<p><b>3. Confidencialidad</b></p>

<p>En su actividad ordinaria en la red, los usuarios tendrán
derecho a preservar su anonimato. No obstante, el AYUNTAMIENTO establece mecanismos
para poder identificar, los terminales de conexión a la red WiFi para fines
estadísticos, cumpliendo las exigencias del programa WiFi4EU. En ningún caso se
almacenarán datos personales.</p>

<p><b>4. Propiedad intelectual e industrial</b></p>

<p>Los usuarios de la red reconocerán, respetarán y defenderán
el derecho de los autores en sus creaciones intelectuales e industriales, de
acuerdo con la normativa vigente.</p>

<p>&nbsp;</p>

<p><b><span style='font-size:12.0pt;line-height:107%'>TRATAMIENTO
DE DATOS PERSONALES</span></b></p>

<p>Tratamiento de datos personales por parte del AYUNTAMIENTO:</p>

<p>El acceso a los datos se limitará a lo estrictamente
necesario para la ejecución, la gestión y el seguimiento del programa WiFi4EU
que en todo caso almacena datos estadísticos y de control de equipos (direcciones
MAC) y ningún dato de carácter personal de los usuarios. </p>

	</div>
	<br><br>
</div>


</body></html>
