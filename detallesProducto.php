<?php
  require_once("includes/head.php");
?>
<!-- Fin Navegacion -->

<!-- contenido -->
<div class="container mt-5">

  <div class="row">
    <?php
      require_once("includes/aside.php");
    ?>
    


    <div class="col-lg-9 ">

      <div class="card mt-4">
        <img class="card-img-top img-fluid" src="img/banner/harry_potter_banner.png" alt="">
        <div class="card-body">
          <h3 class="card-title">Harry Potter y el caliz de fuego</h3>
          <h4>$1699</h4>
          <p class="card-text">Tras otro abominable verano con los Dursley, Harry se dispone a iniciar el cuarto curso en Hogwarts, la famosa escuela de magia y hechicería. A sus catorce años, a Harry le gustaría ser un joven mago como los demás, sin embargo, al llegar al colegio, le espera una gran sorpresa que lo obligará a enfrentarse a los desafíos más temibles de toda su vida</p>
          <span class="text-warning">&#9733; &#9733; &#9733; &#9733; &#9734;</span>
          4.0 stars
        </div>
      </div>


      <div class="card card-outline-secondary my-4">
        <div class="card-header">
          Product Reviews
        </div>
        <div class="card-header">
          <p>Editorial</p> <!-- poner arriba editorial y genero de forma linda -->
        </div>
        <div>
          <p class="card-header">Genero</p>
        </div>
        <div class="card-body">
          <p>Es uno de los mejores libros de la saga, junto con el tres y el siete, es un formato mucho más largo y complejo, la historia tiene mucho más detalles que la otra, pero por eso no deja de ser entretenida, incluso, se llegan a tocar temas mucho más serios y profundos, como la muerte, la traición, etc, etc. Es un libro estupendo, lo recomiendo ampliamente.</p>
          <small class="text-muted">Posted by Anonymous on 3/1/17</small>
          <hr>
          <p>La saga Potter crece a la par que el lector y profundiza en los personajes, sus conflictos y sus historias individuales. Sin embargo, al intentar variar aquello que le salió tan bien en las primeras entregas y darle un matiz más oscuro y adulto (que incluso se acerca al terror) J. K. Rowling iría perdiendo espontaneidad hasta írsele la saga de las manos. Sin ir más lejos, aspectos como el del enamoramiento y el paso de la infancia a la adolescencia de Potter los encuentro muy poco logrados. Magia, fantasía y aventuras que no falten.</p>
          <small class="text-muted">Posted by Anonymous on 3/1/17</small>
          <hr>
          <p>Este cuarto libro inicia la maduración de la saga, pensando tal vez en el crecimiento de los lectores, ademas cuenta con la competición que le da un ritmo ameno respecto a los anteriores libros. Que buen ritmo para contar la historia tiene la autora para no hacerlo pesado.</p>
          <small class="text-muted">Posted by Anonymous on 3/1/17</small>
          <hr>
          <a href="#" class="btn btn-success">Leave a Review</a>
        </div>
      </div>
    </div>
  </div>
</div>



<?php
  $a_multi_comentarios = array('20200903225522'=> array( 'id_producto' => '1', 'Es uno de los mejores libros de la saga, junto con el tres y el siete, es un formato mucho más largo y complejo, la historia tiene mucho más detalles que la otra, pero por eso no deja de ser entretenida, incluso, se llegan a tocar temas mucho más serios y profundos, como la muerte, la traición, etc, etc. Es un libro estupendo, lo recomiendo ampliamente.' => 'Excelente', 'valoracion' => '5'),
  '20200903225524'=> array( 'id_producto' => '1', 'La saga Potter crece a la par que el lector y profundiza en los personajes, sus conflictos y sus historias individuales. Sin embargo, al intentar variar aquello que le salió tan bien en las primeras entregas y darle un matiz más oscuro y adulto (que incluso se acerca al terror) J. K. Rowling iría perdiendo espontaneidad hasta írsele la saga de las manos. Sin ir más lejos, aspectos como el del enamoramiento y el paso de la infancia a la adolescencia de Potter los encuentro muy poco logrados. Magia, fantasía y aventuras que no falten.' => 'Bueno', 'valoracion' => '3'),
  '20200903225520'=> array( 'id_producto' => '1', 'Este cuarto libro inicia la maduración de la saga, pensando tal vez en el crecimiento de los lectores, ademas cuenta con la competición que le da un ritmo ameno respecto a los anteriores libros. Que buen ritmo para contar la historia tiene la autora para no hacerlo pesado.' => 'Muy bueno', 'valoracion' => '4'),
  '20200903225523'=> array( 'id_producto' => '1', 'La verdad es que es un pequeño paso atrás en calidad respecto al anterior por que la autora le da demasiada importancia (y páginas) al Torneo y no a la trama principal de la historia. Aun así el final es tan épico y fantástico que te deja con un gran sabor de boca, y deseando leer más.' => 'Muy bueno', 'valoracion' => '4'),
  '20200903225522'=> array( 'id_producto' => '2', 'En la línea de sus predecesoras, emocionante y emotiva, combinando los sentimientos y pasiones de los protagonistas con las fabulosas aventuras en esta nueva tierra. Pero siendo ya una seguidora incondicional de esta saga, me decepcionó un poco como se desarrolló la llegada de Brianna. Creo que la autora no le sacó todo el partido posible a lo que podría haber sido un encuentro realmente emotivo con sus padres y se centró más en las adversidades de su relación con Roger, la que tampoco está a la altura de lo que Diana Gabaldón nos tenía acostumbrados, sobre todo porque en esta entrega pasan a tener un protagonismo equivalente al de Jaimie y Claire. Sin embargo, sigue siendo una novela maravillosa, con un estilo narrativo inmejorable que te mantiene completamente atrapado en sus páginas.' => 'Excelente', 'valoracion' => '5'),
  '20200903225524'=> array( 'id_producto' => '2', 'La historia de los protagonistas, Jamie y Claire decae un poco en detrimento de la de su hija Brianna y Roger, y aunque es un poco más "tranquila" que las anteriores entregas, sigue siendo muy entrenida.' => 'Muy bueno', 'valoracion' => '4'),
  '20200903225520'=> array( 'id_producto' => '2', 'Al igual que los anteriores de la saga la lectura de este libro te hace desear en algún momento compartir todas las aventuras que viven los protagonistas.' => 'Muy bueno', 'valoracion' => '4'),
  '20200903225523'=> array( 'id_producto' => '2', 'Esta saga, a pesar de tantas buenas críticas, la abandoné hace tiempo y aunque parezca imposible, sigo disfrutando de la historia con la serie. Qué sin duda, y es mi humilde opinión, es superior a esta. Retomé la lectura con este libro, llevada por las ansias de conocer el desenlace de la temporada, y sigo opinando lo mismo; se extiende demasiado y no consigue que la lectura me atrape, me esfuerzo por acabar los libros.' => 'Bueno', 'valoracion' => '3'),
  '20200903225522'=> array( 'id_producto' => '3', 'La trama es muy sencilla igual que la investigación que me parece más una excusa para desarrollar al personaje principal y para realizar una muy buena ambientación sobre el Valle de Aosta. La novela me ha resultado entretenida sobre todo por el giro del guión que desarrolla matices más duros y personales de la historia.' => 'Bueno', 'valoracion' => '3'),
  '20200903225524'=> array( 'id_producto' => '3', 'Muy entretenida, aunque me gustó más la primera novela. A mi parecer, le falta algo más de acción. Aun así, totalmente recomendable por el humor y ‘el valle de Aosta’.' => 'Muy bueno', 'valoracion' => '4'),
  '20200903225520'=> array( 'id_producto' => '3', 'Muy entretenido y divertido. Se lee muy fácilmente. El personaje protagonista es total.' => 'Muy bueno', 'valoracion' => '4'),
  '20200903225523'=> array( 'id_producto' => '3', 'Segundo libro de la serie Rocco Schiavone. Lo recomiendo absolutamente. Hay espacio incluso para el humor.' => 'Muy bueno', 'valoracion' => '4'),
  '20200903225522'=> array( 'id_producto' => '4', 'Una novela corta, entretenida y muy agradable de leer nuevos episodios de Montalbano.' => 'Muy bueno', 'valoracion' => '4'),
  '20200903225524'=> array( 'id_producto' => '4', '"La Voz del violín" es la típica novela que te llevas a un viaje de 10 días. Pequeña, entretenida, personaje principal muy bien caracterizado y una historia a ratos intrigante, a ratos irónica... Un libro como cientos de miles. Si lo lees, ni te decepcionará, ni te apasionará. En mi humilde pero objetiva opinión. Un saludo!' => 'Regular', 'valoracion' => '2'),
  '20200903225520'=> array( 'id_producto' => '4', 'Un caso más del comisario Montalbano, divertido, rápido de leer y sin complicaciones.' => 'Bueno', 'valoracion' => '3'),
  '20200903225523'=> array( 'id_producto' => '4', 'Cuarta entrega de Montalbano, que sigue desvelando al lector facetas desconocidas de su personalidad, que lo hacen cada vez más cercano y admirable. Es muy interesante la relación que mantiene con sus subordinados, un muy divertido grupo de policías de Vigàta, ante el que Camilleri desata su aguda ironía sin piedad. Sicilia, su gastronomía y sus gentes, siguen muy presentes en toda la obra, marcada por los numerosos cambios de personal en la jefatura policial y en los científicos forenses, que obligan a Salvo a lidiar con más obstáculos de los deseados. Muy buena novela.' => 'Excelente', 'valoracion' => '5'),
  '20200903225522'=> array( 'id_producto' => '5', 'Está entretenido e interesante. El libro está escrito de manera sencilla, pero como habla de mitología griega a veces puede sonar un poco complicado. Aprendes mucho sobre las creencias, heroés y dioses en los que creían. Puedes llegar a identificarte con las personalidades de los personajes. Las aventuras que tienen los personajes hace la lectura fascinante. Cada libro de la saga tiene una parte que te sorprende ya que esperabas otra cosa. A mi en lo personal me ha gustado mucho porque he llegado a encariñarme con los personajes por el hecho de que son muchos libros.' => 'Bueno', 'valoracion' => '3'),
  '20200903225524'=> array( 'id_producto' => '5', 'Es una buena continuacion y el final me ha dejado impresionado, pero convencido que las peliculas son malas.' => 'Bueno', 'valoracion' => '3'),
  '20200903225520'=> array( 'id_producto' => '5', 'El libro es muy divertido y es interesante si te gusta la mitologia griega y tenes un cierto conocimiento de los hechos y personajes que nombra. Pero por otra parte el estilo es demasiado simple lo que convierte en una copia mitologica de Harry Potter' => 'Regular', 'valoracion' => '2'),
  '20200903225523'=> array( 'id_producto' => '5', 'Diré cosas que a los seguidores de Percy Jackson les molestará, pero este libro es bastante simple. La historia es normalita y sólo le salva el curioso final. Además, las numerosas similitudes de esta saga con la de Harry Potter hacen cuestionarme la originalidad de la serie...Prescindible.' => 'Malo', 'valoracion' => '1'),
  '20200903225522'=> array( 'id_producto' => '6', 'Excelente libro. Mezcla futbol, amistad y negocios. Me parecen fantasticas las conversaciones entre los amigos y los pensamientos de cada uno sobre el otro. Te atrapa en todo momento. Llega un punto en el que no podes parar de leer.' => 'Excelente', 'valoracion' => '5'),
  '20200903225524'=> array( 'id_producto' => '6', 'Me gusto mucho el libro y la forma de escribir de Sacheri. Se me hizo una lectura rapida y me divirtio muchola camaraderia de los amigos (algo que siempre envidie de los hombres) y la pasion del futbol. Ahora voy a ver la pelicula a ver que tal la adaptacion.' => 'Excelente', 'valoracion' => '5'),
  '20200903225520'=> array( 'id_producto' => '6', 'Una ternura absoluta de libro. Siempre Sacheri la dulzura justa. De todas maneras, este es sin duda su mejor libro.' => 'Excelente', 'valoracion' => '5'),
  '20200903225523'=> array( 'id_producto' => '6', 'Una gran historia la que nos cuenta Sacheri, con mucho fútbol, lealtad, compromiso y sobre todo amistad. Se lee fácil y no te aburre en ningún momento.' => 'Excelente', 'valoracion' => '5'),
  '20200903225522'=> array( 'id_producto' => '7', 'La historia es muy sencilla, casi cotidiana pero lo importante es la magnífica narración que hace Sacheri. Me ha encantado la ambientación, la descripción de personajes, la trama, el ritmo, el estilo literario…Lo peor :Me han sobrado algunas largas conversaciones referidas al contexto histórico.Lo mejor:Como el autor logra introducirte en la historia para no dejarte salir hasta que terminas el libro. Muy bueno!' => 'Muy bueno', 'valoracion' => '5'),
  '20200903225524'=> array( 'id_producto' => '7', 'Excelente Sacheri, como siempre. La historia me resultó atrapante desde el principio y me sorprendió mucho como encarna la trama desde la protagonista mujer. Muy buenas referencias históricas para situar al lector en la tumultosa Argentina post-peronismo. Muy recomendable.' => 'Excelente', 'valoracion' => '5'),
  '20200903225520'=> array( 'id_producto' => '7', 'Me ha gustado mucho. Una historia que al principio parece intrascendente pero que la maestría de Sacheri hace que te enganche con su hábil manejo de situaciones y personajes y en este caso, además, se mete en el alma y la piel de su protagonista, una voz femenina, que nos transmite sin paliativos todos sus sentimientos, carencias, dudas, pensamientos, contradicciones… Me han sobrado un poco las frecuentes conversaciones y discusiones sobre la política de Argentina en los años 50/60, pero en general es una novela amena , bien construída y excelentemente narrada.' => 'Excelente', 'valoracion' => '5'),
  '20200903225523'=> array( 'id_producto' => '7', 'Linda historia de una familia tipo de clase media de los 50 en argentina. Entretenida, con un dilema moral, un amor inapropiado y un final excelente e inesperado. A mi Criterio Un poco aburridos los capítulos que charlan y discuten de política pero buena historia' => 'Bueno', 'valoracion' => '3'),
  '20200903225522'=> array( 'id_producto' => '8', 'Excelente como toda la obra de bodoc' => 'Excelente', 'valoracion' => '5'),
  '20200903225524'=> array( 'id_producto' => '8', 'La historia es interesante y familiar, al menos para los latinoamericanos. Por momentos la narrativa es muy lenta, hay capítulos que realmente te dan ganas de no leerlos y pasar directo a la acción, pero todo es parte de la gestación de la revolución que se da en la historia, y ninguna revolución se hace de la noche a la mañana. Está bien pero no es tan atrapante como otros libros de la autora.' => 'Bueno', 'valoracion' => '3'),
  '20200903225520'=> array( 'id_producto' => '8', 'Me pareció un verdadero bodrio' => 'Malo', 'valoracion' => '1'),
  '20200903225523'=> array( 'id_producto' => '8', 'No ha sabido capturar las letras como en otras de sus obras, pero aun asi me parece un libro recomendable.' => 'Regular', 'valoracion' => '2'),
  '20200903225522'=> array( 'id_producto' => '9', 'Esta es una novela rara. No tiene un plot que te vuele la cabeza y en general los libros en los que no pasa nada me terminan embolando y los dejo, pero la poética con que Silvia te va narrando todo eso hace que estés enganchado y encuentres belleza en las metáforas, en las pequeñas cosas que nos presenta y terminemos encariñándonos del personaje. Una novela de iniciación muy bella.' => 'Muy bueno', 'valoracion' => '4'),
  '20200903225524'=> array( 'id_producto' => '9', 'Fantástica novela. La adolescencia en el extranjero, la adolescencia de las palabras, de las amistades, de los romances. Todo con dulce de leche en lata.' => 'Muy bueno', 'valoracion' => '4'),
  '20200903225520'=> array( 'id_producto' => '9', 'Gran libro! La forma de escribir de la autora es atrapante y me hizo recordar algunos momentos de mi adolescencia.' => 'Excelente', 'valoracion' => '5'),
  '20200903225523'=> array( 'id_producto' => '9', 'Si bien prefiero otro tipo de lecturas, este libro fue muy entretenido.' => 'Bueno', 'valoracion' => '3'),
  '20200903225522'=> array( 'id_producto' => '10', 'En esta nueva novela , la escritora aborda el tema del aborto en un marco familiar de profunda ortodoxia religiosa. El nudo narrativo gira en torno a ese aparente crimen no resuelto, que en realidad esconde un sinnúmero de sucesos causados por el dominio de ciertos prejuicios y valores dogmáticos . Cada protagonista da su versión ‘verosímil’ , trata de justificar en cierto modo sus propias actitudes y decisiones. En definitiva, casi todos tratan de desligarse lo más posible de sus propios demonios y evitar que la culpa actúe como una filosa espada de Damocles. Si bien pueden notarse ciertos estereotipos y algunas situaciones tal vez un tanto inverosímiles, la novela construye logradas relaciones conflictivas y la narración es ágil y engancha.' => 'Muy bueno', 'valoracion' => '4'),
  '20200903225524'=> array( 'id_producto' => '10', 'Una novela que me atrapó desde el primer momento. De esas que invitan a "devorar" y cada hoja te atrapa un poco más. El final se puede anticipar con el correr de los capítulos pero no por eso deja de ser atrapante. Bien escrita. Con un ida y vuelta del presente al pasado. Muy interesante' => 'Muy bueno', 'valoracion' => '4'),
  '20200903225520'=> array( 'id_producto' => '10', 'Catedrales es un libro en el que todo gira alrededor de un asesinato no resuelto cometido hace 30 años. A través de varios personajes involucrados se van desvelando hechos que nos dan una clara visión de lo que pasó. No es una novela con grandes sorpresas, enseguida se adivina lo sucedido, pero tampoco lo pretende. Se centra más en los personajes, en su relación y cómo les ha afectado la muerte de Ana. Muy buen libro para disfrutar de una prosa intimista y unos personajes potentes. Recomendado.' => 'Muy bueno', 'valoracion' => '4'),
  '20200903225523'=> array( 'id_producto' => '10', 'No empiecen este libro buscando un policial o un thriller porque no van a encontrar misterio y probablemente sientan predecible la cantidad de información con la que, como lectores, contamos en todo momento. Lo interesante y cautivante desde el inicio de esta novela es el realismo de los temas que toca, es como la autora se anima a hablar sin ser políticamente correcta acerca de religión, creencias, vínculos familiares, mentiras, entre tantos otros tópicos que no quiero adelantar para que los descubran de a poco y para que experimenten con el cuerpo la cantidad de emociones que el libro produce.' => 'Muy bueno', 'valoracion' => '4'),
  '20200903225522'=> array( 'id_producto' => '11', 'Volumen muy recomendable.' => 'Muy bueno', 'valoracion' => '4'),
  '20200903225524'=> array( 'id_producto' => '11', 'Es una de las mejores obras de Nabokov, para mí mejor incluso que Lolita, y disfruté mucho leyendo ambos...' => 'Muy bueno', 'valoracion' => '4'),
  '20200903225520'=> array( 'id_producto' => '11', '770 páginas de Nabokov cuentista, flojos abstenerse!' => 'Excelente', 'valoracion' => '5'),
  '20200903225523'=> array( 'id_producto' => '11', 'Un placer para los sentidos!!' => 'Excelente', 'valoracion' => '5'),
  '20200903225522'=> array( 'id_producto' => '12', 'Arundhati Roy prueba que es una pensadora apasionada, inteligente y documentada' => 'Muy bueno', 'valoracion' => '4'),
  '20200903225524'=> array( 'id_producto' => '12', '‘Mi corazón sedicioso’ es una recopilación de escritos políticos de Arundhati Roy.' => 'Muy bueno', 'valoracion' => '4'),
  '20200903225520'=> array( 'id_producto' => '12', 'Leerla siempre es estimulante por más que en ocasiones sus juicios puedan resultar demasiado sumarísimos, por ejemplo los que se refieren en abstracto a la democracia liberal. ' => 'Bueno', 'valoracion' => '3'),
  '20200903225523'=> array( 'id_producto' => '12', 'Da la sensación de que todo resulta más certero y particularmente inapelable cuando la autora se ocupa de asuntos concretos y cercanos a su realidad.' => 'Regular', 'valoracion' => '2'),
  '20200903225522'=> array( 'id_producto' => '13', 'Primer libro que leo de esta autora y me dejo con ganas de más. Desgarradora página a página. Simple. Breve. Dura. Se lee de un tirón. Muy recomendable. No es una novela de mujeres es una novela para mujeres.' => 'Excelente', 'valoracion' => '5'),
  '20200903225524'=> array( 'id_producto' => '13', 'Delicada disección del corazón de algunas madrastras de blancanieves. Novela lúcida de la no siempre, saludable relación madre e hija. Y llegadxs a este punto me pregunto: por qué el psicoanálisis no nos ha dejado un nombre para éste fenómeno como lo hizo con Edipo o Electra? O por qué la Biblia, rebosante de héroes y villanxs no nos deja muestras de este conflicto humano? Por qué en definitiva, las mujeres a estas alturas del S XXI debemos elaborar nuestra propia cosmogonía?' => 'Excelente', 'valoracion' => '5'),
  '20200903225520'=> array( 'id_producto' => '13', 'Lo encontré de casualidad y me llamó la atención el titulo y el precio barato. Realmente fue un descubrimiento exquisito. Es un libro bello. La historia, los personajes y los diálogos, concretos y consisos, muy bien logrados. Sencillo pero sumamente bien escrito. Hermoso final. Buscaré más libros de la autora.' => 'Muy bueno', 'valoracion' => '4'),
  '20200903225523'=> array( 'id_producto' => '13', 'Entretenida historia sobre la pasión, el amor infantil y la guerra. Se deja leer.' => 'Bueno', 'valoracion' => '3'),
  '20200903225522'=> array( 'id_producto' => '14', 'Literatura alcohólica, en ocasiones más bien diabólica, para un conjunto de relatos cortos sobre marginalidad y malditismo.' => 'Muy bueno', 'valoracion' => '4'),
  '20200903225524'=> array( 'id_producto' => '14', 'Irregular selección de relatos. En principio hay muchos con sexo y violencia, bastante flojitos, incluso alguno me ha molestado, no me parece divertida la violencia contra las mujeres. Después mejora con algunos cuentos mas realistas protagonizados por Chinaski que están bastante bien. Pero es solo al final, con los tres últimos relatos, mas largos y todos de Chinaski, cuando me he reencontrado con todo el sabor ácido y amargo del Bukowski que tanto me gusta. Me he divertido especialmente con aquel en que Hank narra su operación de hemorroides, todo su sufrimiento al tener que soportar a sus compañeros de habitación y lo que es peor, aguantar la tele.' => 'Muy bueno', 'valoracion' => '4'),
  '20200903225520'=> array( 'id_producto' => '14', 'Morador del underground, da una mirada corrosiva y cáustica de la vida. Horada con mordacidad y provocación el sórdido universo del que el propio autor es protagonista.' => 'Muy bueno', 'valoracion' => '4'),
  '20200903225523'=> array( 'id_producto' => '14', 'Bukowski en su maxima expresion. Siempre es un gusto encontrarlo.' => 'Excelente', 'valoracion' => '5'),
  '20200903225522'=> array( 'id_producto' => '15', 'Excepcional obra -una vez más, aunque seguramente habría que plantear "Mi lucha" como bloque inseparable- de un autor que aporta fuerza y frescura a un panorama internacional excesivamente cargado de intelectualismo formal. Las obras de Knausgard no se leen, se viven, se palpan, se siente en la piel y en lo más hondo de las entrañas. Indiscutiblemente, una obra maestra de nuestro tiempo.' => 'Excelente', 'valoracion' => '5'),
  '20200903225524'=> array( 'id_producto' => '15', 'Para mí de los que he leído-hasta el cuarto- tal vez sea el más flojo. Es una saga bien escrita, aunque por lo ambiciosa esperaba mucho más.' => 'Regular', 'valoracion' => '2'),
  '20200903225520'=> array( 'id_producto' => '15', 'Igual que con el primer volumen, se va leyendo, nada se avanza a nivel argumental, pasa de una situación a otra y a otra sin resolver ninguna, el argumento sigue sin avanzar, te pierdes (al menos yo) con sus discusiones filosóficas... pero no puedes dejar de leerlo.' => 'Bueno', 'valoracion' => '3'),
  '20200903225523'=> array( 'id_producto' => '15', 'Quizás es porque te sientes identificado con sus situaciones cotidianas, con sus frustraciones, con sus alegrías. Describe una vida con sus medianías, sus momentos buenos y sobre todo ese poso de frustración perpetua que nos atenaza. No sé si continuaré con la serie' => 'Malo', 'valoracion' => '1'),
  '20200903225522'=> array( 'id_producto' => '16', 'El libro es bueno, pero se hace un poquito extenso.' => 'Bueno', 'valoracion' => '3'),
  '20200903225524'=> array( 'id_producto' => '16', 'Si bien esta historia llegó a tener mucho reconocimiento por la película, considero que el libro está al menos entre los 3 mejores del autor. como único punto negativo: Los pasajes en que cuenta apariciones antiguas del payaso (como en el tiroteo o la fábrica) sirven y ayudan a comprender mejor todo, pero se hacen un poco densos. El punto que más resalto: La construcción de los lugares y personajes. Cuando vi la última película tenía más expectativa por saber como iban a representar a Derry y los Barrens que de ver la peli en si' => 'Muy bueno', 'valoracion' => '4'),
  '20200903225520'=> array( 'id_producto' => '16', 'Me ha costado muchísimo terminarlo. El principio del libro (las primeras 600 páginas) se me han hecho larguísimas, hasta que le he pillado el ritmo., Me molestan mucho los libros que dan tantos saltos temporales para contar dos historias paralelas, una en el presente y otra en el pasado, como en este caso. Personalmente prefiero que me cuenten la historia del pasado primero y la historia del presente después, máxime cuando no hay ninguna necesidad de ocultarla, pues nada de lo que ocurre en el pasado le puede quitar emoción a lo que ocurre en el presente. Es un recurso literario muy pobre que se ha puesto muy de moda (y ahora no lo digo por el Sr. King, que posiblemente fuera de los primeros en utilizarlo), pues se basa en la ocultación de información al lector, cosa que me molesta muchísimo, pues me siento tratado como un tonto.' => 'Malo', 'valoracion' => '1'),
  '20200903225523'=> array( 'id_producto' => '16', 'Una historia fantástica, con excelentes personajes y un canto a la amistad. Un poco flojo el final pero igual no deja de redondear una gran novela.' => 'Muy bueno', 'valoracion' => '4'),
  '20200903225522'=> array( 'id_producto' => '17', 'Es un buen libro, de aventuras, divertido, con muchos contrastes entre los personajes e historias con mucha imaginación. Sobre todo es un libros o libros (porque son 3) para adolescentes.; pero como adultos tambien puedes disfrutar.' => 'Muy bueno', 'valoracion' => '4'),
  '20200903225524'=> array( 'id_producto' => '17', 'Tres aventuras fantasticas, en la selva amazonica, en un reino enclavado en la cordillera del Himalaya, y en el corazon de Africa, maravillosa' => 'Excelente', 'valoracion' => '5'),
  '20200903225520'=> array( 'id_producto' => '17', 'Es muy interesante y divertido.Recomiendo leerlo' => 'Muy bueno', 'valoracion' => '4'),
  '20200903225523'=> array( 'id_producto' => '17', 'buenisimo...' => 'Muy bueno', 'valoracion' => '4'),
  '20200903225522'=> array( 'id_producto' => '18', 'Un libro para el que hay que tener ganas de leerlo, si no se hace pesado y tedioso. Me gusta más la segunda parte (diario de viajes) que la primera. Estoy contento con la compra :)' => 'Muy bueno', 'valoracion' => '4'),
  '20200903225524'=> array( 'id_producto' => '18', 'Es un tipico libro Kafkiano' => 'Bueno', 'valoracion' => '3'),
  '20200903225520'=> array( 'id_producto' => '18', 'Encantada con esta maravilla de la literatura. Amo la forma de escribir de Kafka. Desde que lei "La metamorfosis" no puedo parar de leerlo.' => 'Excelente', 'valoracion' => '5'),
  '20200903225523'=> array( 'id_producto' => '18', 'Es un libro muy raro.' => 'Regular', 'valoracion' => '2'),
  '20200903225522'=> array( 'id_producto' => '19', 'Lectura agradable y amena, entretenida' => 'Muy bueno', 'valoracion' => '4'),
  '20200903225524'=> array( 'id_producto' => '19', 'Un gran clásico de la literatura y por derecho propio, poco más se puede decir. Muy recomendable, sobre todo la primera parte que narra la infancia del protagonista, para mi gusto lo más potente del libro.' => 'Muy bueno', 'valoracion' => '4'),
  '20200903225520'=> array( 'id_producto' => '19', 'Es fabulosa la narrativa. El detalle a ultranza, la evocación de escenas, situaciones, personajes.. todo juega y suma en esta obra. No soy de clásicos pero este es sin duda un imperdible.' => 'Bueno', 'valoracion' => '3'),
  '20200903225523'=> array( 'id_producto' => '19', 'Creo que es un clásico infravalorado, sin duda uno de mis libros favoritos de Dickens' => 'Regular', 'valoracion' => '2'),
  '20200903225522'=> array( 'id_producto' => '20', 'Me gustó mucho, para mi parecer: aquí hubiera terminado la historia de Tatiana y Alexander. El jardín de verano fué innecesario, a mi gusto me resultó pesado terminarlo.' => 'Regular', 'valoracion' => '2'),
  '20200903225524'=> array( 'id_producto' => '20', 'muy recomendable, de fácil lectura, una historia muy conmovedora que no paras de leer' => 'Muy bueno', 'valoracion' => '4'),
  '20200903225520'=> array( 'id_producto' => '20', 'está bien, sobre todo me ha gustado la parte de alexander pero el primero era precioso.' => 'Muy bueno', 'valoracion' => '4'),
  '20200903225523'=> array( 'id_producto' => '20', 'Vaya pedazo de segunda parte para El Jinete de Bronce. MARAVILLOSO' => 'Excelente', 'valoracion' => '5'),
  '20200903225522'=> array( 'id_producto' => '21', 'Como siempre la autora nos lleva a la epoca y conocemos de nuestra historia de manera amena' => 'Muy bueno', 'valoracion' => '4'),
  '20200903225524'=> array( 'id_producto' => '21', 'Si bien el libro se explaya en acontecimientos conocidos, el verdadero sentir de Belgrano esta muy bien relatado, haciendonos ver el lado humano del procer. ' => 'Muy bueno', 'valoracion' => '4'),
  '20200903225520'=> array( 'id_producto' => '21', 'Excelente. Altamente recomendable.' => 'Excelente', 'valoracion' => '5'),
  '20200903225523'=> array( 'id_producto' => '21', 'Otra obra maestra de Canale.' => 'Excelente', 'valoracion' => '5'),
  '20200903225522'=> array( 'id_producto' => '22', 'En la línea del autor, que siempre nada en las mismas aguas. Es interesante, pero sobre todo te despierta las ganas de pasarte por El Prado y buscar todas las obras que menciona, y observarlas.' => 'Muy bueno', 'valoracion' => '4'),
  '20200903225524'=> array( 'id_producto' => '22', 'Esperaba algo mas....me ha dejado un poco decepcionada.He aprendido algo más del arte pictórico,eso si que es cierto,pero insisto un poco decepcionada Un saludo' => 'Regular', 'valoracion' => '2'),
  '20200903225520'=> array( 'id_producto' => '22', 'Una pequeña decepción, esperaba mucho más de este libro. Su mayor logro es aportar datos desconocidos de los cuadros, despertando la curiosidad, pero poco más.' => 'Regular', 'valoracion' => '2'),
  '20200903225523'=> array( 'id_producto' => '22', 'Las 3/4 partes del libro son buenas, pero en los capítulos finales la trama es complicdísima de seguir y desde luego el final es impropio de una novela de la que esperaba muchísimo más.' => 'Regular', 'valoracion' => '2'),
  '20200903225522'=> array( 'id_producto' => '23', 'Fabuloso, con una música y unos interpretes maravillosos.' => 'Exccelente', 'valoracion' => '5'),
  '20200903225524'=> array( 'id_producto' => '23', 'Me encanto. La música es impresionante, y el autor supo elegir a los intérpretes de su obra. Hago mención especial a Mercedes Sosa como La Pitonisa, estuvo brillante.' => 'Excelente', 'valoracion' => '5'),
  '20200903225520'=> array( 'id_producto' => '23', 'Una historia muy bella entre fantasía y realidad sobre lo que es el amor. Me ha dejado un buen sabor de boca.' => 'Muy bueno', 'valoracion' => '4'),
  '20200903225523'=> array( 'id_producto' => '23', '"yo no me olvido de nada, el olvido es para los que se van sin pagar. Yo ya pagué"' => 'Excelente', 'valoracion' => '5'),
  '20200903225522'=> array( 'id_producto' => '24', 'Es entretenido pero trata el tema del sexo de una manera burda y vasta(eso me parece a mi), el final ha quedado un poco abierto por lo que me temo que habrá más, pero yo no pienso leerlo, vamos que lo considero totalmente prescindible.' => 'Regular', 'valoracion' => '2'),
  '20200903225524'=> array( 'id_producto' => '24', 'De este libro me gusto la idea, una sociedad secreta para mujeres, creo que se podía haber sacado más jugo, pero la historia de la protagonista engancha. Me ha parecido entretenido, divertido y ameno. Tengo que decir que me ha parecido bastante más profundo que el sexo, es más de superación personal, aceptación de uno mismo, recuperar la confianza perdida y liberación.' => 'Muy bueno', 'valoracion' => '4'),
  '20200903225520'=> array( 'id_producto' => '24', 'Atrapa casi desde la primera página, entretiene mucho y es seductor. ' => 'Excelente', 'valoracion' => '5'),
  '20200903225523'=> array( 'id_producto' => '24', 'Impaciente por continuar la serie.' => 'Excelente', 'valoracion' => '5'),
 
 );


$fp = fopen('comentarios.json','w');
fwrite($fp,json_encode($a_multi_comentarios));
fclose($fp);
?>

<?

$a_multi_productos = array (
    1 => array ('id_producto' => '1', 
                'nombre' => 'Harry Potter y el caliz de fuego', 
                'descripcion_corta' => 'Tras otro abominable verano con los Dursley, Harry se dispone a iniciar el cuarto curso en Hogwarts, la famosa escuela de magia...',
                'descripcion_larga' => 'Tras otro abominable verano con los Dursley, Harry se dispone a iniciar el cuarto curso en Hogwarts, la famosa escuela de magia y hechicería. A sus catorce años, a Harry le gustaría ser un joven mago como los demás, sin embargo, al llegar al colegio, le espera una gran sorpresa que lo obligará a enfrentarse a los desafíos más temibles de toda su vida',
                'precio' => '$1699',
                'editorial' => 'Salamandra',
                'genero' => 'Fantasia',
                'destacado' => true,
                ),
    2 => array ('id_producto' => '2', 
                'nombre' => 'Tambores de otoño', 
                'descripcion_corta' => 'Despues de huir de Escocia, en 1766 Claire y Jamie emprenden un viaje hacia America.',
                'descripcion_larga' => 'Jamie y Claire no pueden volver a Escocia debido a que Jamie sigue con pedido de captura, por lo que deciden comenzar una nueva vida en las colonias americanas junto a Fergus y el Joven Ian. El grupo se dirige primero a Charleston y luego a Wilmington, antes de establecerse en los inhóspitos cerros boscosos de Carolina del Norte con la esperanza de construir una cabaña autosustentable. La esposa de Fergus, Marsali, se quedó en la isla de Jamaica esperando la llegada del primer hijo de ambos. Al mismo tiempo, Brianna Randall y su pretendiente, el historiador Roger MacKenzie, permanecen seguros en el siglo XX. Ahora huérfana por la partida de su madre al pasado, Brianna lucha por aceptar su pérdida y satisfacer su curiosidad por un padre que nunca ha conocido, solo para descubrir una trágica "historia" que amenaza la felicidad de sus padres en el pasado. Éste descubrimiento hace que Brianna viaje sola a través del tiempo en una misión para salvar a sus padres mientras Roger va tras ella.',
                'precio' => '$1399',
                'editorial' => 'Salamandra',
                'genero' => 'Ficcion',
                'destacado' => true,
                ),                            
    3 => array ('id_producto' => '3', 
                'nombre' => 'La costilla de Adan', 
                'descripcion_corta' => 'Forzado a abandonar su querida Roma natal debido a ciertas irregularidades en el desempeño de su labor policial, Rocco Schiavone...',
                'descripcion_larga' => 'Forzado a abandonar su querida Roma natal debido a ciertas irregularidades en el desempeño de su labor policial, Rocco Schiavone es enviado al valle de Aosta, que pese a estar situado en la península Itálica, para un meridional como él es lo más parecido a aterrizar en Marte. Rodeado de imponentes montañas, atenazado por un frío glacial y desconcertado ante el carácter circunspecto de los habitantes del lugar, Rocco encara su segundo caso con el mismo talante de siempre, irritable y transgresor hasta el límite de lo permisible, pero imbuido de un profundo sentido de la justicia. Cuando una mujer es hallada muerta en su casa y, en la penumbra, se extienden las secuelas de lo que en apariencia ha sido un robo violento, el subjefe Schiavone se resiste a la tentación de creer lo evidente. Una serie de coincidencias y divergencias, sumadas a la ambigüedad de algunos personajes, transformará gradualmente el escenario del crimen en una espesa niebla de misterios.',
                'precio' => '$1049',
                'editorial' => 'Salamandra',
                'genero' => 'Policial',
                'destacado' => true,
                ),
    4 => array ('id_producto' => '4', 
                'nombre' => 'La voz del violin', 
                'descripcion_corta' => 'El comisario Salvo Montalbano y su peculiar universo imaginario de Vigàta, en Sicilia, ya no son unos desconocidos en nuestro país.',
                'descripcion_larga' => 'La aparente paz siciliana se ve truncada por el asesinato de una extraña. Una joven hermosa, mujer de un médico boloñés, aparece muerta en el chalet de ambos. Pocas pertenencias la acompañaban en la escena del crimen, aparte de un misterioso violín guardado en su estuche. Su bolsa de joyas se ha esfumado y todas las miradas se centran en un pariente desequilibrado que ha desaparecido la misma noche del crimen. Montalbano, con su parsimonia habitual, inicia la investigación. No cree a nadie, no se fía de nadie. Tras la muerte de un sospechoso, sus superiores dan por cerrado el caso, pero él, ni hablar.
                Transitando los límites de la legalidad, como es su costumbre, Montalbano ha de relacionarse y pactar con los elementos más indeseables y abyectos del hampa, iniciando un viaje a lo más oscuro del alma humana, en el fondo, su territorio predilecto.',
                'precio' => '$1049',
                'editorial' => 'Salamandra',
                'genero' => 'Policial',
                'destacado' => true,
                ),
    5 => array ('id_producto' => '5', 
                'nombre' => 'El mar de los monstruos', 
                'descripcion_corta' => 'Desde que sabe que es hijo de un dios y una mortal, Percy Jackson espera que el destino le depare...',
                'descripcion_larga' => 'Desde que sabe que es hijo de un dios y una mortal, Percy Jackson espera que el destino le depare continuas aventuras. Y su expectativa se cumplirá con creces. Aunque el nuevo curso en la Escuela Meriwether transcurre con inusual normalidad, un simple partido de pelota quemada acaba en batalla campal contra una banda de feroces gigantes y el gimnasio del colegio convertido en pasto de las llamas. A partir de ahí las cosas se precipitan: el perímetro mágico que protege el Campamento Mestizo es emponzoñado por un misterioso enemigo y la única seguridad con que contaban los semidioses desaparece. Así, para impedir este daño irreparable, Percy y sus amigos inician la travesía del temible Mar de los Monstruos en busca de lo único que puede salvar el campamento: el Vellocino de Oro. Pero antes Percy descubrirá un secreto acerca de su familia, una inquietante revelación que lo hará preguntarse si ser hijo de Poseidón es un honor o simplemente una broma cruel. 
                El mar de los monstruos es la emocionante continuación de la serie de aventuras Percy Jackson y los Dioses del Olimpo, iniciada con El ladrón del rayo. En pleno siglo XXI, los antiguos dioses griegos han creado un mundo secreto a nuestro alrededor, donde el monte Olimpo se encuentra encima del Empire State y el reino de Hades en el subsuelo de Los Ángeles.',
                'precio' => '$999',
                'editorial' => 'Salamandra',
                'genero' => 'Fantasia',
                'destacado' => true,
                ),
    6 => array ('id_producto' => '6', 
                'nombre' => 'Papeles en el viento', 
                'descripcion_corta' => 'Alejandro, El Mono, ha muerto. Su hermano y sus amigos, un grupo de hierro desde la infancia, apenas se dan...',
                'descripcion_larga' => 'Alejandro, "El Mono", ha muerto. Su hermano y sus amigos, un grupo de hierro desde la infancia, apenas se dan tiempo para el dolor. Les preocupa Guadalupe, la hija del Mono. Quieren darle todo el amor que sentían por su amigo y asegurarle un futuro. Pero en el banco no quedó un peso. El Mono invirtió todo el dinero que tenía en la compra de un jugador de fútbol, un muchacho que prometía pero se quedó en promesa. Ahora está a préstamo en un club zaparrastroso del Interior. Y los trescientos mil dólares que costó su pase, a punto de evaporarse.¿Cómo vender a un delantero que no hace goles? ¿Cómo moverse en un mundo cuyas reglas se desconocen? ¿Cómo seguir siendo amigos si los fracasos van abriendo fisuras en las antiguas lealtades? Fernando, Mauricio y el Ruso, con las escasas herramientas que poseen, desplegarán una serie de estrategias nacidas del ingenio, la torpeza, el desconcierto o la inspiración, para conseguir su objetivo.Eduardo Sacheri demuestra una vez más su capacidad para construir personajes entrañables y contar historias que llegan de inmediato al lector. Papeles en el viento es un canto a la amistad, y una prueba de que el amor y el humor pueden más que la melancolía. Una invitación a pensar sobre el poder de la vida para abrirse paso a través del dolor y poner otra vez en marcha la rueda de los días.',
                'precio' => '$949',
                'editorial' => 'Alfaguara',
                'genero' => 'Ficcion',
                'destacado' => true,
                ),
    7 => array ('id_producto' => '7', 
                'nombre' => 'Lo mucho que te ame', 
                'descripcion_corta' => '«Creo que si alguien supiese la historia de mi vida la vería como una vida mal vivida, llena de secretos...',
                'descripcion_larga' => '«Creo que si alguien supiese la historia de mi vida la vería como una vida mal vivida, llena de secretos, traiciones, ocultamientos. Pero en esta historia en la que casi todo lo que hago lo hago mal, me permito creer que hay una cosa, una sola cosa, que hago bien.»
                Lo mucho que te amé es la nueva novela de Eduardo Sacheri. Una historia que nos lleva a la década del 50 en Buenos Aires, en el seno de una familia de origen español.
                Cuenta la historia de Ofelia, una de las cuatro hermanas Fernández Mollé, una muchacha formal, feliz, a punto de casarse. Pero una tarde su vida cambia abruptamente para convertirse en una maraña de sentimientos encontrados: delicia, inquietud, felicidad, incertidumbre, miedo y mucha culpa.
                Con grandes vaivenes interiores y a través de difíciles decisiones, se va convirtiendo en una mujer adulta que enfrenta a su propio modo las circunstancias que le han tocado.',
                'precio' => '$899',
                'editorial' => 'Alfaguara',
                'genero' => 'Novela historica',
                'destacado' => true,
                ),
    8 => array ('id_producto' => '8', 
                'nombre' => 'Memorias impuras', 
                'descripcion_corta' => 'El virrey ha muerto y, mientras preparan las exequias, en la ciudad de Álbora esperan un seguro estallido de violencia.',
                'descripcion_larga' => 'El virrey ha muerto y, mientras preparan las exequias, en la ciudad de Álbora esperan un seguro estallido de violencia. En castigo por haber sido la amante y el gran amor del virrey, Junia, la virreyna, encierra a Bérnaba en el calabozo del pueblo, donde cualquiera que lo desee puede pasar la noche con ella.
                Bérnaba, la hermosa, recluida con sus dos hijos y repudiada por todos, resiste y concibe la revolución en su propio cuerpo.
                Todas las razas que habitan el Virreynato se rebelan: los crudos, los mitimaes y los cue cués anhelan la independencia amparados en una profecía y bajo las órdenes de los maestros de la Logia Bagual. Pero las luchas internas entre los revolucionarios, sumadas al terror que encarnan la virreyna y su consejero, Cayo Catarina, y a las aspiraciones al poder de los hacendados, los prestamistas y el Protomedicato desatan una trama tan parecida a la nuestra que se lee con la avidez de quien asiste a su propia historia.',
                'precio' => '$1299',
                'editorial' => 'Alfaguara',
                'genero' => 'Novela historica',
                'destacado' => true,
                ),
    9 => array ('id_producto' => '9', 
                'nombre' => 'Ginebra', 
                'descripcion_corta' => '«El agua de la tierra se evapora, el viento raspa las piedras, las hojas caen de los árboles, las palabras...',
                'descripcion_larga' => '«El agua de la tierra se evapora, el viento raspa las piedras, las hojas caen de los árboles, las palabras... ¿a dónde van a parar las palabras?»
                Novela del exilio con reminiscencias punk, novela de soledades y lenguas entrelazadas, Ginebra explora las vetas de la memoria de una niña de 13 años que debe huir del país con su padre y aterriza en una ciudad extraña que, a pesar de lo incierto, le abre un mundo de posibilidades.
                Allí conocerá a Jo Haydn, coleccionista de uñas, hija del responsable del simulacro del big bang, huérfana de madre suicida. También a Oli Dusex, con quien tendrá su primera relación sexual y lo fortuito de su pérdida. El cuarteto se completa con Amo-a-quien-me-ame, una joven drogadicta, dueña de una motocicleta rosa de vetas plateadas que la protagonista roba, desconociendo las gozosas y nostálgicas consecuencias. Estos cuatro jinetes posapocalípticos giran alrededor del lago, como agujas de un reloj sumergido, dando rienda suelta a sus deseos y miedos, apurando la vida en una ciudad con huellas de Jorge Luis Borges y gusto a chocolate, nieve y soledad.
                ¿Cómo se establecen los vínculos más arraigados en la adolescencia? ¿Cuánto de la lengua permite ligarnos, perdernos, equivocarnos, renacer? ¿Qué es lo propio sino la pérdida? Porque así como el exilio puede ser una condena, el encuentro con lo distinto puede convertirse en la travesía de la sorpresa.',
                'precio' => '$979',
                'editorial' => 'Alfaguara',
                'genero' => 'Ficcion',
                'destacado' => true,
                ),
    10 => array ('id_producto' => '10', 
                'nombre' => 'Catedrales', 
                'descripcion_corta' => 'Hace treinta años, en un terreno baldío de un barrio tranquilo, apareció descuartizado y quemado el cadáver de una adolescente.',
                'descripcion_larga' => 'Hace treinta años, en un terreno baldío de un barrio tranquilo, apareció descuartizado y quemado el cadáver de una adolescente. La investigación se cerró sin culpables y su familia -de clase media educada, formal y católica- silenciosamente se fue resquebrajando Pero, pasado ese largo tiempo, la verdad oculta saldrá a la luz gracias al persistente amor del padre de la víctima.
                Esa verdad mostrará con crudeza lo que se esconde detrás de las apariencias; la crueldad a la que pueden llevar la obediencia y el fanatismo religioso; la complicidad de los temerosos e indiferentes, y también, la soledad y el desvalimiento de quienes se animan a seguir su propio camino, ignorando mandatos heredados.
                Como en Las viudas de los jueves, en Elena sabe y en Una suerte pequeña, Claudia Piñeiro ahonda con maestría en los lazos familiares, en los prejuicios sociales y en las ideologías e instituciones que marcan los mundos privados, y nos entrega una novela conmovedora y valiente, certera como una flecha clavada en el corazón de este drama secreto.',
                'precio' => '$899',
                'editorial' => 'Alfaguara',
                'genero' => 'Policial',
                'destacado' => true,
                ),
    11 => array ('id_producto' => '11', 
                'nombre' => 'Cuentos completos', 
                'descripcion_corta' => 'Un hombre que está escribiendo en su despacho es interrumpido por un duende del bosque, un concertista de piano se...',
                'descripcion_larga' => 'Un hombre que está escribiendo en su despacho es interrumpido por un duende del bosque, un concertista de piano se dispone a poner fin a su  carrera, un barbero afeita al hombre que lo torturó, un soñador tímido hace un pacto con el Diablo...
                Los sesenta y ocho relatos de Vladimir Nabokov que se incluyen en esta  edición definitiva de su obra cuentística, preparada por su hijo Dmitri, permiten disfrutar de su inconmensurable virtuosismo literario: de sus piruetas temáticas y formales, de sus inquietantes ambigüedades, de su elegante manejo del idioma, de la presencia de los  temas ?como el del doble? que lo fascinaban y de los muchos lugares que dejaron huella en él: la Rusia de su infancia, la Inglaterra de sus años de estudiante, la Alemania y la Francia del exilio y después esos Estados Unidos que siempre observó con sagaz y nada complaciente mirada de europeo.
                La incorporación de este libro al catálogo de Anagrama permite añadir una pieza más al puzle de la rica producción literaria de Nabokov, del  que hemos publicado el grueso de su obra novelística. Y, como en las novelas, en estos cuentos brilla la inagotable inventiva de uno de los  escritores auténticamente imprescindibles del siglo XX.',
                'precio' => '$2950',
                'editorial' => 'Anagrama',
                'genero' => 'Cuentos',
                'destacado' => true,
                ),
    12 => array ('id_producto' => '12', 
                'nombre' => '>Mi corazon sedicioso', 
                'descripcion_corta' => 'Arundhati Roy investiga y denuncia. Los imprescindibles ensayos políticos  de la escritora india.',
                'descripcion_larga' => 'Arundhati Roy investiga y denuncia.  Los imprescindibles ensayos políticos  de la escritora india.
                Este volumen reúne una amplia selección de los mejores textos de carácter político y social escritos por la autora. En estas páginas aborda temas como la retórica belicista que justifica guerras; la política exterior de los imperios–americano y soviético–; la corrupción política; el cambio climático; el capitalismo depredador; el terrorismo; los desequilibrios sociales de la India, ese país que vive al mismo tiempo en varios siglos, anclado en el pasado y proyectado hacia el futuro; los conflictos territoriales entre la India y Pakistán; el poder de las élites, el control de la tierra y los indiscriminados desplazamientos de población para la construcción de grandes presas; los claroscuros de la figura de Gandhi; la deriva nacionalista en la India; la energía nuclear utilizada con fines bélicos; las grietas de la democracia y la represión de la disidencia',
                'precio' => '$1799',
                'editorial' => 'Anagrama',
                'genero' => 'Ensayos',
                'destacado' => true,
                ),
    13 => array ('id_producto' => '13', 
                'nombre' => 'Amelie Nothomb', 
                'descripcion_corta' => 'Hija de diplomatico, Amelie Nothomb paso buena parte de su ninez en Oriente. De ahi le quedo una pasion por...',
                'descripcion_larga' => 'Hija de diplomatico, Amelie Nothomb paso buena parte de su ninez en Oriente. De ahi le quedo una pasion por Japon mezcla de deslumbramiento y encontronazo, de fascinacion por una cultura y choque con unas pautas sociales desquiciantes y humillantes. Este libro reune seis novelas autobiograficas de la escritora belga, en las que evoca episodios de su infancia y adolescencia la crueldad, la inocencia, el desconcierto, el hambre de conocer vividas en Oriente, y tambien varios viajes de regreso a Japon en los que se enfrenta al delirante mundo empresarial nipon, al amor de un joven avido lector de Stendhal, al reencuentro con la ninera que la cuido cuando era nina, a recorridos que la llevan del bullicioso Tokio a Hiroshima y al espiritual Monte Fuji. / This book combines six autobiographical novels by the Belgian writer, covering episodes from her childhood, adolescence, living in the East, and several trips to Japan where she faces their delirious business world, reunites with the nanny who cared for her as a child, and journeys to Mount Fuji.',
                'precio' => '$2950',
                'editorial' => 'Anagrama',
                'genero' => 'Biografia',
                'destacado' => true,
                ),
    14 => array ('id_producto' => '14', 
                'nombre' => 'Se busca una mujer', 
                'descripcion_corta' => 'En este libro ambientado en Los Ángeles se nota la continua presencia de la gran urbe en toda la escritura...',
                'descripcion_larga' => 'En este libro ambientado en Los Ángeles se nota la continua presencia de la gran urbe en toda la escritura de Charles Bukowski, ciudad infernal, a pesar de estar situada en medio de paraíso californiano, sueño de todo pobre ciudadano USA, con sus naranjas, su sol y su vino, vino del que Bukowski da buena cuenta toda su vida, como el whisky, como la cerveza, que habrán de ser, inevitablemente, su fuente de inspiración.',
                'precio' => '$895',
                'editorial' => 'Anagrama',
                'genero' => 'Ficcion',
                'destacado' => true,
                ),
    15 => array ('id_producto' => '15', 
                'nombre' => 'Un hombre enamorado', 
                'descripcion_corta' => 'De ser hijo a ser padre. Éste es el paso del autor en la segunda parte de las seis que conforman...',
                'descripcion_larga' => 'De ser hijo a ser padre. Éste es el paso del autor en la segunda parte de las seis que conforman Mi lucha, esa inmensa novela autobiográfica que la crítica ha descrito como «un proyecto demencial que sólo los verdaderos genios pueden alcanzar». Karl Ove deja a su mujer y se marcha a Estocolmo. Allí se hace amigo de Geir, otro noruego, intelectual y fanático del boxeo. Y vuelve a encontrarse con Linda, una poeta que le había fascinado en un encuentro de escritores, y que será su segunda mujer. Su mundo cambia mientras él escribe y cuenta cómo es volverse a enamorar, los goces y los engorros de la paternidad, la necesidad de escribir, la cotidianeidad de la vida en familia o el cómico fracaso de sus vacaciones, la humillación de las clases de preparación al parto, las peleas con los vecinos... Knausgård escribe con una veracidad punzante sobre los instantes que componen una vida, la de un hombre que anhela con igual intensidad la soledad y el amor.',
                'precio' => '$1095',
                'editorial' => 'Anagrama',
                'genero' => 'Ficcion',
                'destacado' => true,
                ),
    16 => array ('id_producto' => '16', 
                'nombre' => 'IT', 
                'descripcion_corta' => '¿Quien o que mutila y mata a los niños de un pequeño pueblo norteamericano? ¿Por que llega cíclicamente el horror...',
                'descripcion_larga' => '¿Quien o que mutila y mata a los niños de un pequeño pueblo norteamericano?
                ¿Por que llega cíclicamente el horror a Derry en forma de un payaso siniestro que va sembrando la destrucción a su paso?
                Esto es lo que se proponen averiguar los protagonistas de esta novela. Tras veintisiete años de tranquilidad y lejanía, una antigua promesa infantil les hace volver al lugar en el que vivieron su infancia y juventud como una terrible pesadilla. Regresan a Derry para enfrentarse con su pasado y enterrar definitivamente la amenaza que los amargó durante su niñez.
                Saben que pueden morir, pero son conscientes de que no conocerán la paz hasta que aquella cosa sea destruida para siempre.',
                'precio' => '$1899',
                'editorial' => 'DeBolsillo',
                'genero' => 'Terror',
                'destacado' => true,
                ),
    17 => array ('id_producto' => '17', 
                'nombre' => 'Memorias del aguila y del jaguar', 
                'descripcion_corta' => 'ISABEL ALLENDE nos invita a acompañar a Alex Cold y a su abuela Kate en sus aventuras por el mundo.',
                'descripcion_larga' => 'ISABEL ALLENDE nos invita a acompañar a Alex Cold y a su abuela Kate en sus aventuras por el mundo. En La Ciudad de las Bestias, se internan en la selva amazónica en busca de una extraña bestia semihumana; en El Reino del Dragón de Oro, descubren la sabiduría oriental en un recóndito reino del Himalaya, a la vez que hacen frente a unos desalmados traficantes de antigüedades; El Bosque de los Pigmeos nos sitúa en el corazón de una África misteriosa en la que se dan cita la solidaridad y la magia.',
                'precio' => '$1599',
                'editorial' => 'DeBolsillo',
                'genero' => 'Fantasia',
                'destacado' => true,
                ),
    18 => array ('id_producto' => '18', 
                'nombre' => 'Diarios', 
                'descripcion_corta' => 'Este volumen invita al lector a conocer el lado más íntimo del padre de la literatura del siglo XX...',
                'descripcion_larga' => 'Este volumen invita al lector a conocer el lado más íntimo del padre de la literatura del siglo XX a través de sus diarios, legajos y cuadernos de viaje, editados por orden cronológico y respetando fielmente los manuscritos originales del escritor checo, sin las supresiones y censuras de Max Brod.
                Estas páginas ofrecen una panorámica de la vida de Kafka, sus paseos por Praga, sus sueños, sus sentimientos hacia el padre idolatrado y la mujer con la que no lograba casarse, su contienda personal con la culpa y la percepción de sí mismo como un paria, en una rendición de cuentas de una intensidad casi insoportable.',
                'precio' => '$1699',
                'editorial' => 'DeBolsillo',
                'genero' => 'Biografia',
                'destacado' => true,
                ),
    19 => array ('id_producto' => '19', 
                'nombre' => 'Grandes esperanzas', 
                'descripcion_corta' => '«El corazón humano es un instrumento de muchas cuerdas; el perfecto conocedor de los hombres las sabe hacer vibrar todas...',
                'descripcion_larga' => '«El corazón humano es un instrumento de muchas cuerdas; el perfecto conocedor de los hombres las sabe hacer vibrar todas, como un buen músico.» Charles Dickens
                Kent, Inglaterra, finales del siglo XIX. El huérfano Pip vive una existencia humilde con su hermana y su cuñado, a quien ayuda en su taller de herrería. Cuando la rica señorita Havisham requiere a Pip como acompañante de ella y de su bella hija, el joven se dará cuenta de las penurias de su clase social y deseará cada vez con más fuerza subir posiciones en el escalafón social. Pip recibirá entonces la visita de un abogado de Londres, quien le informará de que un benefactor anónimo le quiere convertir en un caballero. Sin embargo, Pip descubrirá que el valor de la amistad y de la moral no se puede comprar con dinero.',
                'precio' => '$1599',
                'editorial' => 'DeBolsillo',
                'genero' => 'Biografia',
                'destacado' => true,
                ),
    20 => array ('id_producto' => '20', 
                'nombre' => 'Tatiana y Alexander', 
                'descripcion_corta' => 'Embarazada, enferma y absolutamente desolada, Tatiana ha logrado llegar a Estados Unidos. Entregada a la fuerza de las circunstancias y...',
                'descripcion_larga' => 'Embarazada, enferma y absolutamente desolada, Tatiana ha logrado llegar a Estados Unidos. Entregada a la fuerza de las circunstancias y alejada de su convulsionada tierra, la joven comenzará una nueva existencia con la secreta ilusión de que, en alguna parte, el hombre al que ama sea capaz de vencer a las oscuras garras del destino.
                Mientras, Alexander sufre el hostigamiento de las fuerzas represoras en las gelidas tierras de la Unión Sovietica, y tan solo el recuerdo de su esposa, junto con la velada esperanza de que siga con vida, alimenta su espíritu ante la adversidad.
                Al tiempo que la contienda llega a su final, ambos lucharán contra sus destinos y la desesperación en busca del amor perdido y la inquebrantable esperanza del reencuentro.',
                'precio' => '$1579',
                'editorial' => 'DeBolsillo',
                'genero' => 'Novela historica',
                'destacado' => true,
                ),
    21 => array ('id_producto' => '21', 
                'nombre' => 'Amores prohibidos', 
                'descripcion_corta' => 'Manuel fue acercándose de a poco a la damita de ojos negros, hasta que sus labios comenzaron a susurrarle frases...',
                'descripcion_larga' => 'Manuel fue acercándose de a poco a la damita de ojos negros, hasta que sus labios comenzaron a susurrarle frases bonitas al oído. Los ojos de Maruja se entornaron y sonrió levemente. ‘El joven americano sí que sabe hablarle a una dama. No me equivoqué. Ahora quiero su cuerpo pegado al mío’, pensó.” El primer romántico del Río de la Plata fue un incomprendido. Manuel Belgrano no era militar y debió ocupar un rol inesperado. Además de ser un intelectual de avanzada, fue responsable de cambios políticos y sociales mal vistos por lo más rancio de la sociedad porteña. Tampoco cumplía con las normas de la masculinidad de su época: no era autoritario ni arremetedor. Por el contrario, fue un hombre sensible, refinado, elegante. Adorado por las mujeres, vivió romances tórridos con españolas, argentinas y francesas. Sin embargo, fueron tres las que marcaron su piel a fuego. Con la primera, Pepa Ezcurra, una jovencita de la sociedad porteña, mantuvo una relación clandestina que no pudo hacerse pública y de la cual nació un hijo criado por el mismísimo Juan Manuel de Rosas. En su paso por Europa fue una francesa de armas tomar la que robó su corazón: Isabel Pichegru. Ya de adulto, se deja seducir por una “niña” de la burguesía tucumana, Dolores Helguero. Tampoco se compromete con ella, pero viven una pasión que también trajo una hija al mundo. Manuel Belgrano murió solo y pobre. Nunca supo que el “hijo” de Rosas era suyo y apenas conoció a Mónica Manuela, su hija mujer. Mucho es lo que se ha escrito sobre Manuel Belgrano, y un sinfín de versiones intentó recomponer una figura patria que poco tiene que ver con ese hombre de carne y hueso presa de sus deseos más ocultos. Hacia esa zona de luces y sombras parte Florencia Canale en su nueva novela, Amores secretos. Un libro que reconstruye la vida privada del prócer y que a la vez confirma a su autora como una de las más innovadoras en el género de la novela histórica en la Argentina.',
                'precio' => '$1330',
                'editorial' => 'Planeta',
                'genero' => 'Novela historica',
                'destacado' => true,
                ),
    22 => array ('id_producto' => '22', 
                'nombre' => 'El maestro del prado', 
                'descripcion_corta' => 'Descubre de la mano de Javier Sierra los secretos que se ocultan tras las pinturas más importantes del Museo del Prado.',
                'descripcion_larga' => 'Descubre de la mano de Javier Sierra los secretos que se ocultan tras las pinturas más importantes del Museo del Prado.
                Al más puro estilo de los relatos de enigmas de Javier Sierra.El maestro del Prado presenta un apasionante recorrido por las historias más desconocidas y secretas de una de las pinacotecas más importantes del mundo, el Museo del Prado.
                Una historia fascinante de cómo un aprendiz de escritor aprendió a mirar cuadros y a entender unos mensajes ocultos que difieren de la ortodoxia de la Iglesia católica, una institución que en el Renacimiento era visto más como opresores que como espiritual.
                Una nueva obra que entusiasmará a los miles de seguidores de Javier Sierra.',
                'precio' => '$1560',
                'editorial' => 'Planeta',
                'genero' => 'Novela historica',
                'destacado' => true,
                ),
    23 => array ('id_producto' => '23', 
                'nombre' => 'Lo que me costo el amor de Laura', 
                'descripcion_corta' => 'Esta operéta criolla en dos actos, cuenta la historia de Manuel, que al conocer a Laura se enamora desesperadamente.',
                'descripcion_larga' => 'Esta operéta criolla en dos actos, cuenta la historia de Manuel, que al conocer a Laura se enamora desesperadamente. Laura le pide que para conquistarla obtenga la llave del amor. Dicha llave se encuentra en algúnsítio del Barrio del Dolor, "un distrito siniestro del que nadie ha regresado jamás".
                Un locutor guiará al público en este viaje dantesco, donde el enamorado se encontrará con vecinos muy particulares, que ayudarán a conseguir la llave. Esta historia entre tangos y ritmos criollos denotan la alta capacidad creativa musical de su autor: Alejandro Dolina.',
                'precio' => '$1040',
                'editorial' => 'Planeta',
                'genero' => 'Opereta criolla',
                'destacado' => true,
                ),
    24 => array ('id_producto' => '24', 
                'nombre' => 'Secret', 
                'descripcion_corta' => 'Cassie Robichaud, una joven viuda, es  introducida en S.E.C.R.E.T., un selecto club underground de Nueva Orleans que ayuda a las mujeres...',
                'descripcion_larga' => 'Cassie Robichaud, una joven viuda, es  introducida en S.E.C.R.E.T., un selecto club underground de Nueva Orleans que ayuda a las mujeres a disfrutar al máximo de su sexualidad. Asesorada por una matriarca clandestina, Cassie es invitada a experimentar sus fantasías más íntimas siempre que respete los requisitos del club',
                'precio' => '$239',
                'editorial' => 'Planeta',
                'genero' => 'Ficcion',
                'destacado' => true,
                )
);


$fp = fopen('detalleproductos.json','w');
fwrite($fp,json_encode($a_multi_productos));
fclose($fp);

?>




<!-- inicio Footer -->
<?php
  require_once("includes/footer.php");
?>