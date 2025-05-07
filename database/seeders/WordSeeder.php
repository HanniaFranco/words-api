<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Word;
use App\Models\Category;

class WordSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        /**
         * Palabras de la caregoría Biología
         */
        $biologia = Category::where('name', 'Biología')->first();

        Word::create([
            'word' => 'Ósmosis',
            'correct' => 'Movimiento de moléculas de agua a través de una membrana semipermeable desde una región de menor concentración de solutos a una de mayor concentración.',
            'incorrect_1' => 'Proceso de división celular que resulta en dos células hijas idénticas.',
            'incorrect_2' => 'Intercambio de gases entre los organismos y su entorno.',
            'incorrect_3' => 'Forma en que las plantas generan alimento usando la luz solar.',
            'explanation' => 'La ósmosis es fundamental para el transporte de agua en las células.',
            'category_id' => $biologia->id,
        ]);

        Word::create([
            'word' => 'Fotosíntesis',
            'correct' => 'Proceso por el cual las plantas convierten la luz solar en energía química.',
            'incorrect_1' => 'Respiración celular.',
            'incorrect_2' => 'Digestión.',
            'incorrect_3' => 'Evaporación.',
            'explanation' => 'La fotosíntesis produce oxígeno y glucosa.',
            'category_id' => $biologia->id,
        ]);

        Word::create([
            'word' => 'ADN',
            'correct' => 'Molécula que contiene la información genética de los seres vivos.',
            'incorrect_1' => 'Proteína que transporta oxígeno en la sangre.',
            'incorrect_2' => 'Organelo celular que produce energía.',
            'incorrect_3' => 'Molécula que almacena energía en las células.',
            'explanation' => 'El ADN se encuentra en el núcleo de las células y contiene los genes.',
            'category_id' => $biologia->id,
        ]);

        Word::create([
            'word' => 'Mitosis',
            'correct' => 'Proceso de división celular que resulta en dos células hijas idénticas.',
            'incorrect_1' => 'Proceso de formación de gametos.',
            'incorrect_2' => 'Intercambio de material genético entre cromosomas.',
            'incorrect_3' => 'División del citoplasma durante la división celular.',
            'explanation' => 'La mitosis es esencial para el crecimiento y la reparación de tejidos.',
            'category_id' => $biologia->id,
        ]);

        Word::create([
            'word' => 'Clorofila',
            'correct' => 'Pigmento verde en las plantas que absorbe la luz para la fotosíntesis.',
            'incorrect_1' => 'Hormona que regula el crecimiento de las plantas.',
            'incorrect_2' => 'Enzima que cataliza reacciones químicas en las células.',
            'incorrect_3' => 'Molécula que almacena energía en las plantas.',
            'explanation' => 'La clorofila se encuentra en los cloroplastos de las células vegetales.',
            'category_id' => $biologia->id,
        ]);

        Word::create([
            'word' => 'Ecosistema',
            'correct' => 'Conjunto de organismos y su entorno físico que interactúan en un área determinada.',
            'incorrect_1' => 'Grupo de organismos de la misma especie que viven en un área.',
            'incorrect_2' => 'Proceso de descomposición de materia orgánica.',
            'incorrect_3' => 'Ciclo de nutrientes en el suelo.',
            'explanation' => 'Los ecosistemas pueden ser terrestres, acuáticos o marinos.',
            'category_id' => $biologia->id,
        ]);

        Word::create([
            'word' => 'Mutación',
            'correct' => 'Cambio en la secuencia de ADN de un organismo.',
            'incorrect_1' => 'Proceso de adaptación de los organismos a su entorno.',
            'incorrect_2' => 'Interacción entre diferentes especies en un ecosistema.',
            'incorrect_3' => 'Transferencia de energía entre niveles tróficos.',
            'explanation' => 'Las mutaciones pueden ser beneficiosas, perjudiciales o neutras.',
            'category_id' => $biologia->id,
        ]);

        Word::create([
            'word' => 'Homeostasis',
            'correct' => 'Mantenimiento de un ambiente interno estable en un organismo.',
            'incorrect_1' => 'Proceso de eliminación de desechos del cuerpo.',
            'incorrect_2' => 'Intercambio de gases entre los organismos y su entorno.',
            'incorrect_3' => 'Producción de energía a partir de nutrientes.',
            'explanation' => 'La homeostasis es esencial para el funcionamiento adecuado de los organismos.',
            'category_id' => $biologia->id,
        ]);

        Word::create([
            'word' => 'Genoma',
            'correct' => 'Conjunto completo de genes o material genético de un organismo.',
            'incorrect_1' => 'Molécula que transporta oxígeno en la sangre.',
            'incorrect_2' => 'Organelo celular que produce energía.',
            'incorrect_3' => 'Molécula que almacena energía en las células.',
            'explanation' => 'El genoma incluye todo el ADN de un organismo, incluyendo genes y secuencias no codificantes.',
            'category_id' => $biologia->id,
        ]);

        Word::create([
            'word' => 'Selección natural',
            'correct' => 'Proceso por el cual los organismos mejor adaptados a su entorno tienen más probabilidades de sobrevivir y reproducirse.',
            'incorrect_1' => 'Transferencia de energía entre niveles tróficos.',
            'incorrect_2' => 'Interacción entre diferentes especies en un ecosistema.',
            'incorrect_3' => 'Cambio en la secuencia de ADN de un organismo.',
            'explanation' => 'La selección natural es un mecanismo clave de la evolución.',
            'category_id' => $biologia->id,
        ]);

        /**
         * Palabras de la caregoría Historia
         */

        $historia = Category::where('name', 'Historia')->first();

        Word::create([
            'word' => 'Renacimiento',
            'correct' => 'Movimiento cultural europeo que marcó el fin de la Edad Media y el inicio de la Edad Moderna.',
            'incorrect_1' => 'Periodo en el que se construyeron las pirámides de Egipto.',
            'incorrect_2' => 'Época en la que cayó el Imperio Romano de Oriente.',
            'incorrect_3' => 'Conflicto bélico entre Alemania y Francia.',
            'explanation' => 'El Renacimiento impulsó el arte, la ciencia y la filosofía.',
            'category_id' => $historia->id,
        ]);

        Word::create([
            'word' => 'Revolución Francesa',
            'correct' => 'Movimiento social y político en Francia que resultó en la caída de la monarquía y el establecimiento de una república.',
            'incorrect_1' => 'Guerra civil en Estados Unidos.',
            'incorrect_2' => 'Conflicto entre España y sus colonias americanas.',
            'incorrect_3' => 'Periodo de expansión del Imperio Romano.',
            'explanation' => 'La Revolución Francesa tuvo un impacto profundo en la historia de Europa y el mundo.',
            'category_id' => $historia->id,
        ]);

        Word::create([
            'word' => 'Edad Media',
            'correct' => 'Periodo histórico que abarca desde la caída del Imperio Romano de Occidente hasta el Renacimiento.',
            'incorrect_1' => 'Época de la construcción de las pirámides de Egipto.',
            'incorrect_2' => 'Periodo de la Revolución Industrial.',
            'incorrect_3' => 'Era de los descubrimientos geográficos.',
            'explanation' => 'La Edad Media se caracteriza por el feudalismo y la influencia de la Iglesia.',
            'category_id' => $historia->id,
        ]);

        Word::create([
            'word' => 'Ilustración',
            'correct' => 'Movimiento intelectual del siglo XVIII que promovió la razón, la ciencia y los derechos humanos.',
            'incorrect_1' => 'Periodo de expansión del Imperio Romano.',
            'incorrect_2' => 'Movimiento artístico del siglo XIX.',
            'incorrect_3' => 'Conflicto bélico entre Alemania y Francia.',
            'explanation' => 'La Ilustración influyó en la Revolución Francesa y en la formación de las democracias modernas.',
            'category_id' => $historia->id,
        ]);

        Word::create([
            'word' => 'Guerra Fría',
            'correct' => 'Periodo de tensión política y militar entre Estados Unidos y la Unión Soviética después de la Segunda Guerra Mundial.',
            'incorrect_1' => 'Conflicto armado entre Alemania y Francia.',
            'incorrect_2' => 'Guerra civil en Estados Unidos.',
            'incorrect_3' => 'Periodo de expansión del Imperio Romano.',
            'explanation' => 'La Guerra Fría se caracterizó por la carrera armamentista y la competencia espacial.',
            'category_id' => $historia->id,
        ]);

        Word::create([
            'word' => 'Imperio Romano',
            'correct' => 'Estado que dominó gran parte de Europa, el norte de África y el Medio Oriente desde el siglo I a.C. hasta el siglo V d.C.',
            'incorrect_1' => 'Civilización que construyó las pirámides de Egipto.',
            'incorrect_2' => 'Reino medieval en Europa.',
            'incorrect_3' => 'Confederación de tribus germánicas.',
            'explanation' => 'El Imperio Romano dejó un legado duradero en la cultura, el derecho y la arquitectura.',
            'category_id' => $historia->id,
        ]);

        Word::create([
            'word' => 'Revolución Industrial',
            'correct' => 'Periodo de cambios tecnológicos y económicos en el siglo XVIII y XIX que transformó la producción y la sociedad.',
            'incorrect_1' => 'Movimiento artístico del siglo XIX.',
            'incorrect_2' => 'Conflicto bélico entre Alemania y Francia.',
            'incorrect_3' => 'Periodo de expansión del Imperio Romano.',
            'explanation' => 'La Revolución Industrial marcó el inicio de la era moderna y la economía de mercado.',
            'category_id' => $historia->id,
        ]);

        Word::create([
            'word' => 'Descubrimiento de América',
            'correct' => 'Evento histórico en 1492 cuando Cristóbal Colón llegó al continente americano.',
            'incorrect_1' => 'Viaje de Marco Polo a China.',
            'incorrect_2' => 'Exploración de África por los europeos.',
            'incorrect_3' => 'Colonización de Australia por los británicos.',
            'explanation' => 'El descubrimiento de América tuvo un impacto profundo en la historia mundial.',
            'category_id' => $historia->id,
        ]);

        Word::create([
            'word' => 'Reforma Protestante',
            'correct' => 'Movimiento religioso del siglo XVI que resultó en la creación de iglesias protestantes y la división del cristianismo occidental.',
            'incorrect_1' => 'Periodo de expansión del Imperio Romano.',
            'incorrect_2' => 'Conflicto bélico entre Alemania y Francia.',
            'incorrect_3' => 'Movimiento artístico del siglo XIX.',
            'explanation' => 'La Reforma Protestante fue iniciada por Martín Lutero y tuvo un impacto duradero en la religión y la política.',
            'category_id' => $historia->id,
        ]);

        Word::create([
            'word' => 'Antiguo Egipto',
            'correct' => 'Civilización que se desarrolló a lo largo del río Nilo y es conocida por sus pirámides y faraones.',
            'incorrect_1' => 'Imperio que dominó gran parte de Europa.',
            'incorrect_2' => 'Civilización que construyó la Gran Muralla China.',
            'incorrect_3' => 'Reino medieval en Europa.',
            'explanation' => 'El Antiguo Egipto dejó un legado duradero en la arquitectura, la escritura y la religión.',
            'category_id' => $historia->id,
        ]);
        
         /**
         * Palabras de la caregoría Tecnología
         */

         $tecnologia = Category::where('name', 'Tecnología')->first();

         Word::create([
            'word' => 'Algoritmo',
            'correct' => 'Conjunto de instrucciones definidas y ordenadas que permiten realizar una actividad.',
            'incorrect_1' => 'Dispositivo electrónico para reproducir música.',
            'incorrect_2' => 'Lenguaje de programación de alto nivel.',
            'incorrect_3' => 'Código que almacena imágenes en una base de datos.',
            'explanation' => 'Los algoritmos son fundamentales en la informática y la programación.',
            'category_id' => $tecnologia->id,
        ]);
        
        Word::create([
            'word' => 'Inteligencia Artificial',
            'correct' => 'Campo de estudio que busca crear sistemas capaces de realizar tareas que requieren inteligencia humana.',
            'incorrect_1' => 'Método de almacenamiento de datos.',
            'incorrect_2' => 'Proceso de fabricación de hardware.',
            'incorrect_3' => 'Lenguaje de programación específico.',
            'explanation' => 'La inteligencia artificial está revolucionando múltiples industrias.',
            'category_id' => $tecnologia->id,
        ]);
        
        Word::create([
            'word' => 'Blockchain',
            'correct' => 'Tecnología de registro distribuido que asegura la integridad de las transacciones.',
            'incorrect_1' => 'Sistema operativo para computadoras.',
            'incorrect_2' => 'Algoritmo de compresión de datos.',
            'incorrect_3' => 'Red social para profesionales.',
            'explanation' => 'El blockchain es la base de las criptomonedas como Bitcoin.',
            'category_id' => $tecnologia->id,
        ]);
        
        Word::create([
            'word' => 'Big Data',
            'correct' => 'Conjunto de datos tan grandes y complejos que requieren tecnologías avanzadas para su procesamiento.',
            'incorrect_1' => 'Pequeños conjuntos de datos.',
            'incorrect_2' => 'Algoritmo de búsqueda en internet.',
            'incorrect_3' => 'Sistema de gestión de bases de datos.',
            'explanation' => 'El análisis de Big Data permite obtener insights valiosos para las empresas.',
            'category_id' => $tecnologia->id,
        ]);
        
        Word::create([
            'word' => 'Ciberseguridad',
            'correct' => 'Práctica de proteger sistemas, redes y programas de ataques digitales.',
            'incorrect_1' => 'Desarrollo de aplicaciones móviles.',
            'incorrect_2' => 'Diseño de interfaces de usuario.',
            'incorrect_3' => 'Optimización de motores de búsqueda.',
            'explanation' => 'La ciberseguridad es crucial para proteger la información sensible.',
            'category_id' => $tecnologia->id,
        ]);
        
        Word::create([
            'word' => 'Internet de las Cosas',
            'correct' => 'Red de dispositivos conectados que pueden interactuar entre sí y con el entorno.',
            'incorrect_1' => 'Sistema de gestión de contenido.',
            'incorrect_2' => 'Algoritmo de inteligencia artificial.',
            'incorrect_3' => 'Lenguaje de programación web.',
            'explanation' => 'El Internet de las Cosas está transformando hogares y ciudades.',
            'category_id' => $tecnologia->id,
        ]);
        
        Word::create([
            'word' => 'Machine Learning',
            'correct' => 'Subcampo de la inteligencia artificial que permite a las máquinas aprender de los datos.',
            'incorrect_1' => 'Proceso de diseño de hardware.',
            'incorrect_2' => 'Método de almacenamiento de datos.',
            'incorrect_3' => 'Sistema operativo para computadoras.',
            'explanation' => 'El Machine Learning se utiliza en aplicaciones como el reconocimiento de voz.',
            'category_id' => $tecnologia->id,
        ]);
        
        Word::create([
            'word' => 'Cloud Computing',
            'correct' => 'Entrega de servicios informáticos a través de internet.',
            'incorrect_1' => 'Desarrollo de software local.',
            'incorrect_2' => 'Diseño de redes físicas.',
            'incorrect_3' => 'Optimización de motores de búsqueda.',
            'explanation' => 'El Cloud Computing permite acceder a recursos informáticos desde cualquier lugar.',
            'category_id' => $tecnologia->id,
        ]);
        
        Word::create([
            'word' => 'Realidad Virtual',
            'correct' => 'Tecnología que permite crear entornos simulados interactivos.',
            'incorrect_1' => 'Sistema de gestión de bases de datos.',
            'incorrect_2' => 'Algoritmo de compresión de datos.',
            'incorrect_3' => 'Red social para profesionales.',
            'explanation' => 'La Realidad Virtual se utiliza en videojuegos y simulaciones.',
            'category_id' => $tecnologia->id,
        ]);
        
        Word::create([
            'word' => 'Redes Neuronales',
            'correct' => 'Modelos computacionales inspirados en el cerebro humano que se utilizan en el aprendizaje automático.',
            'incorrect_1' => 'Sistema operativo para computadoras.',
            'incorrect_2' => 'Método de almacenamiento de datos.',
            'incorrect_3' => 'Proceso de fabricación de hardware.',
            'explanation' => 'Las redes neuronales son fundamentales en el campo de la inteligencia artificial.',
            'category_id' => $tecnologia->id,
        ]);

         /**
         * Palabras de la caregoría Cocina
         */

        $cocina = Category::where('name', 'Cocina')->first();

        Word::create([
            'word' => 'Emulsionar',
            'correct' => 'Mezclar dos líquidos que normalmente no se mezclan, como aceite y vinagre.',
            'incorrect_1' => 'Hervir alimentos durante largo tiempo.',
            'incorrect_2' => 'Tostar pan en un horno especial.',
            'incorrect_3' => 'Cortar en tiras delgadas un vegetal.',
            'explanation' => 'Emulsionar es clave para hacer salsas como la mayonesa.',
            'category_id' => $cocina->id,
        ]);
        
        Word::create([
            'word' => 'Sofreír',
            'correct' => 'Cocinar alimentos a fuego medio en aceite hasta que estén dorados.',
            'incorrect_1' => 'Hervir alimentos en agua.',
            'incorrect_2' => 'Cocinar al vapor.',
            'incorrect_3' => 'Asar alimentos en el horno.',
            'explanation' => 'Sofreír es una técnica básica en la cocina para resaltar sabores.',
            'category_id' => $cocina->id,
        ]);
        
        Word::create([
            'word' => 'Blanquear',
            'correct' => 'Sumergir alimentos en agua hirviendo brevemente y luego en agua fría.',
            'incorrect_1' => 'Cocinar alimentos en el horno.',
            'incorrect_2' => 'Freír alimentos en aceite.',
            'incorrect_3' => 'Cortar alimentos en cubos pequeños.',
            'explanation' => 'Blanquear ayuda a mantener el color y textura de los vegetales.',
            'category_id' => $cocina->id,
        ]);
        
        Word::create([
            'word' => 'Roux',
            'correct' => 'Mezcla de harina y grasa que se cocina y se usa para espesar salsas.',
            'incorrect_1' => 'Salsa hecha con tomate y especias.',
            'incorrect_2' => 'Método de cocción al vapor.',
            'incorrect_3' => 'Técnica de marinar carnes.',
            'explanation' => 'El roux es la base de muchas salsas clásicas como la bechamel.',
            'category_id' => $cocina->id,
        ]);
        
        Word::create([
            'word' => 'Brunoise',
            'correct' => 'Corte de vegetales en cubos muy pequeños y uniformes.',
            'incorrect_1' => 'Corte de vegetales en tiras largas.',
            'incorrect_2' => 'Corte de vegetales en rodajas gruesas.',
            'incorrect_3' => 'Corte de vegetales en trozos irregulares.',
            'explanation' => 'El corte brunoise se utiliza en preparaciones como la mirepoix.',
            'category_id' => $cocina->id,
        ]);
        
        Word::create([
            'word' => 'Caramelizar',
            'correct' => 'Cocinar azúcar hasta que se derrita y se vuelva dorada.',
            'incorrect_1' => 'Hervir azúcar en agua.',
            'incorrect_2' => 'Mezclar azúcar con harina.',
            'incorrect_3' => 'Cortar azúcar en cubos.',
            'explanation' => 'Caramelizar es esencial para hacer postres como el flan.',
            'category_id' => $cocina->id,
        ]);
        
        Word::create([
            'word' => 'Desglasar',
            'correct' => 'Añadir líquido a una sartén caliente para disolver los restos de alimentos y hacer una salsa.',
            'incorrect_1' => 'Cocinar alimentos en agua.',
            'incorrect_2' => 'Freír alimentos en aceite.',
            'incorrect_3' => 'Cortar alimentos en cubos pequeños.',
            'explanation' => 'Desglasar es una técnica utilizada para hacer salsas sabrosas.',
            'category_id' => $cocina->id,
        ]);
        
        Word::create([
            'word' => 'Macerar',
            'correct' => 'Dejar alimentos en un líquido para que absorban su sabor.',
            'incorrect_1' => 'Cocinar alimentos en el horno.',
            'incorrect_2' => 'Freír alimentos en aceite.',
            'incorrect_3' => 'Cortar alimentos en tiras largas.',
            'explanation' => 'Macerar es común en la preparación de frutas para postres.',
            'category_id' => $cocina->id,
        ]);
        
        Word::create([
            'word' => 'Escalfar',
            'correct' => 'Cocinar alimentos en agua caliente pero no hirviendo.',
            'incorrect_1' => 'Hervir alimentos en agua.',
            'incorrect_2' => 'Freír alimentos en aceite.',
            'incorrect_3' => 'Cocinar alimentos al vapor.',
            'explanation' => 'Escalfar es ideal para cocinar huevos y pescados delicados.',
            'category_id' => $cocina->id,
        ]);
        
        Word::create([
            'word' => 'Glasear',
            'correct' => 'Cubrir alimentos con una capa brillante de azúcar o salsa.',
            'incorrect_1' => 'Hervir alimentos en agua.',
            'incorrect_2' => 'Freír alimentos en aceite.',
            'incorrect_3' => 'Cortar alimentos en cubos pequeños.',
            'explanation' => 'Glasear se utiliza en la preparación de postres y carnes.',
            'category_id' => $cocina->id,
        ]);
    
        
        /**
         * Palabras de la caregoría Física
         */

        $fisica = Category::where('name', 'Física')->first();

        Word::create([
            'word' => 'Inercia',
            'correct' => 'Tendencia de un cuerpo a mantener su estado de reposo o movimiento si no se aplica una fuerza externa.',
            'incorrect_1' => 'Fuerza que empuja hacia abajo un objeto pesado.',
            'incorrect_2' => 'Capacidad de un objeto para emitir calor.',
            'incorrect_3' => 'Cambio de dirección de un rayo de luz.',
            'explanation' => 'La inercia es una propiedad fundamental de la materia.',
            'category_id' => $fisica->id,
        ]);
        
        Word::create([
            'word' => 'Gravedad',
            'correct' => 'Fuerza de atracción entre dos cuerpos debido a su masa.',
            'incorrect_1' => 'Fuerza que empuja hacia arriba un objeto ligero.',
            'incorrect_2' => 'Capacidad de un objeto para emitir luz.',
            'incorrect_3' => 'Cambio de dirección de un rayo de sonido.',
            'explanation' => 'La gravedad es responsable de mantener los planetas en órbita.',
            'category_id' => $fisica->id,
        ]);
        
        Word::create([
            'word' => 'Energía Cinética',
            'correct' => 'Energía que posee un cuerpo debido a su movimiento.',
            'incorrect_1' => 'Energía almacenada en un objeto en reposo.',
            'incorrect_2' => 'Capacidad de un objeto para emitir calor.',
            'incorrect_3' => 'Cambio de dirección de un rayo de luz.',
            'explanation' => 'La energía cinética depende de la masa y la velocidad del objeto.',
            'category_id' => $fisica->id,
        ]);
        
        Word::create([
            'word' => 'Fuerza',
            'correct' => 'Interacción que cambia el estado de movimiento de un objeto.',
            'incorrect_1' => 'Capacidad de un objeto para emitir luz.',
            'incorrect_2' => 'Cambio de dirección de un rayo de sonido.',
            'incorrect_3' => 'Energía almacenada en un objeto en reposo.',
            'explanation' => 'La fuerza se mide en newtons y puede ser de contacto o a distancia.',
            'category_id' => $fisica->id,
        ]);
        
        Word::create([
            'word' => 'Trabajo',
            'correct' => 'Producto de la fuerza aplicada a un objeto y la distancia que recorre.',
            'incorrect_1' => 'Energía almacenada en un objeto en reposo.',
            'incorrect_2' => 'Capacidad de un objeto para emitir calor.',
            'incorrect_3' => 'Cambio de dirección de un rayo de luz.',
            'explanation' => 'El trabajo se mide en joules y es una forma de transferencia de energía.',
            'category_id' => $fisica->id,
        ]);
        
        Word::create([
            'word' => 'Potencia',
            'correct' => 'Cantidad de trabajo realizado por unidad de tiempo.',
            'incorrect_1' => 'Energía almacenada en un objeto en reposo.',
            'incorrect_2' => 'Capacidad de un objeto para emitir luz.',
            'incorrect_3' => 'Cambio de dirección de un rayo de sonido.',
            'explanation' => 'La potencia se mide en watts y es una medida de la rapidez con la que se realiza el trabajo.',
            'category_id' => $fisica->id,
        ]);
        
        Word::create([
            'word' => 'Presión',
            'correct' => 'Fuerza ejercida por unidad de área.',
            'incorrect_1' => 'Capacidad de un objeto para emitir calor.',
            'incorrect_2' => 'Cambio de dirección de un rayo de luz.',
            'incorrect_3' => 'Energía almacenada en un objeto en reposo.',
            'explanation' => 'La presión se mide en pascales y es importante en fluidos.',
            'category_id' => $fisica->id,
        ]);
        
        Word::create([
            'word' => 'Temperatura',
            'correct' => 'Medida de la energía cinética promedio de las partículas en un objeto.',
            'incorrect_1' => 'Capacidad de un objeto para emitir luz.',
            'incorrect_2' => 'Cambio de dirección de un rayo de sonido.',
            'incorrect_3' => 'Energía almacenada en un objeto en reposo.',
            'explanation' => 'La temperatura se mide en grados Celsius, Fahrenheit o Kelvin.',
            'category_id' => $fisica->id,
        ]);
        
        Word::create([
            'word' => 'Velocidad',
            'correct' => 'Cambio de posición de un objeto por unidad de tiempo.',
            'incorrect_1' => 'Capacidad de un objeto para emitir calor.',
            'incorrect_2' => 'Cambio de dirección de un rayo de luz.',
            'incorrect_3' => 'Energía almacenada en un objeto en reposo.',
            'explanation' => 'La velocidad se mide en metros por segundo y tiene dirección.',
            'category_id' => $fisica->id,
        ]);
        
        Word::create([
            'word' => 'Aceleración',
            'correct' => 'Cambio de velocidad de un objeto por unidad de tiempo.',
            'incorrect_1' => 'Capacidad de un objeto para emitir luz.',
            'incorrect_2' => 'Cambio de dirección de un rayo de sonido.',
            'incorrect_3' => 'Energía almacenada en un objeto en reposo.',
            'explanation' => 'La aceleración se mide en metros por segundo al cuadrado.',
            'category_id' => $fisica->id,
        ]);
        
        /**
        * Palabras de la caregoría Música
        */

        $musica = Category::where('name', 'Música')->first();

        Word::create([
            'word' => 'Acorde',
            'correct' => 'Conjunto de tres o más notas musicales que suenan simultáneamente.',
            'incorrect_1' => 'Ritmo marcado por una batería.',
            'incorrect_2' => 'Nota musical más alta de una escala.',
            'incorrect_3' => 'Silencio dentro de una partitura.',
            'explanation' => 'Un acorde es una combinación de notas que suenan bien juntas.',
            'category_id' => $musica->id,
        ]);
        
        Word::create([
            'word' => 'Sinfonía',
            'correct' => 'Composición musical para orquesta, generalmente en cuatro movimientos.',
            'incorrect_1' => 'Canción popular de corta duración.',
            'incorrect_2' => 'Pieza musical para un solo instrumento.',
            'incorrect_3' => 'Obra musical con letra.',
            'explanation' => 'Las sinfonías son obras extensas y complejas.',
            'category_id' => $musica->id,
        ]);
        
        Word::create([
            'word' => 'Pentagrama',
            'correct' => 'Conjunto de cinco líneas y cuatro espacios donde se escriben las notas musicales.',
            'incorrect_1' => 'Instrumento de percusión.',
            'incorrect_2' => 'Tipo de acorde.',
            'incorrect_3' => 'Escala musical.',
            'explanation' => 'El pentagrama es esencial para la notación musical.',
            'category_id' => $musica->id,
        ]);
        
        Word::create([
            'word' => 'Arpegio',
            'correct' => 'Notas de un acorde tocadas en sucesión, no simultáneamente.',
            'incorrect_1' => 'Ritmo rápido y repetitivo.',
            'incorrect_2' => 'Cambio de tonalidad en una pieza.',
            'incorrect_3' => 'Silencio prolongado en una obra.',
            'explanation' => 'Los arpegios son comunes en la música clásica y moderna.',
            'category_id' => $musica->id,
        ]);
        
        Word::create([
            'word' => 'Crescendo',
            'correct' => 'Aumento gradual del volumen de la música.',
            'incorrect_1' => 'Disminución del tempo.',
            'incorrect_2' => 'Cambio de tonalidad.',
            'incorrect_3' => 'Repetición de un tema musical.',
            'explanation' => 'El crescendo añade emoción y dinamismo a la música.',
            'category_id' => $musica->id,
        ]);
        
        Word::create([
            'word' => 'Fuga',
            'correct' => 'Composición polifónica basada en un tema principal que se repite en diferentes voces.',
            'incorrect_1' => 'Pieza musical para piano solo.',
            'incorrect_2' => 'Canción con letra romántica.',
            'incorrect_3' => 'Obra musical de corta duración.',
            'explanation' => 'Las fugas son conocidas por su complejidad y estructura.',
            'category_id' => $musica->id,
        ]);
        
        Word::create([
            'word' => 'Intervalo',
            'correct' => 'Distancia entre dos notas musicales.',
            'incorrect_1' => 'Parte de una sinfonía.',
            'incorrect_2' => 'Instrumento de cuerda.',
            'incorrect_3' => 'Tipo de ritmo.',
            'explanation' => 'Los intervalos son fundamentales para la armonía.',
            'category_id' => $musica->id,
        ]);
        
        Word::create([
            'word' => 'Octava',
            'correct' => 'Intervalo de ocho notas en una escala musical.',
            'incorrect_1' => 'Parte de una ópera.',
            'incorrect_2' => 'Tipo de acorde.',
            'incorrect_3' => 'Ritmo rápido.',
            'explanation' => 'La octava es un intervalo muy común en la música.',
            'category_id' => $musica->id,
        ]);
        
        Word::create([
            'word' => 'Tonalidad',
            'correct' => 'Organización de una composición musical alrededor de una nota principal.',
            'incorrect_1' => 'Cambio de ritmo.',
            'incorrect_2' => 'Repetición de un tema.',
            'incorrect_3' => 'Aumento del volumen.',
            'explanation' => 'La tonalidad define la estructura armónica de una pieza.',
            'category_id' => $musica->id,
        ]);
        
        Word::create([
            'word' => 'Contrapunto',
            'correct' => 'Técnica de composición que combina dos o más líneas melódicas independientes.',
            'incorrect_1' => 'Cambio de tempo.',
            'incorrect_2' => 'Repetición de un acorde.',
            'incorrect_3' => 'Aumento del volumen.',
            'explanation' => 'El contrapunto es una técnica avanzada en la música.',
            'category_id' => $musica->id,
        ]);

        /**
        * Palabras de la caregoría Swift
        */

        $swift = Category::where('name', 'Swift')->first();

        Word::create([
            'word' => 'Optional',
            'correct' => 'Tipo de variable que puede contener un valor o “nil”.',
            'incorrect_1' => 'Función que se ejecuta automáticamente.',
            'incorrect_2' => 'Estructura que crea clases en Swift.',
            'incorrect_3' => 'Variable constante que no cambia nunca.',
            'explanation' => 'Los optionals son fundamentales para manejar valores nulos en Swift.',
            'category_id' => $swift->id,
        ]);
        
        Word::create([
            'word' => 'Closure',
            'correct' => 'Bloque de código que puede ser pasado y ejecutado en cualquier parte del programa.',
            'incorrect_1' => 'Función que se ejecuta al inicio del programa.',
            'incorrect_2' => 'Variable que almacena un valor constante.',
            'incorrect_3' => 'Estructura que define una clase.',
            'explanation' => 'Los closures son muy útiles para manejar callbacks y funciones anónimas.',
            'category_id' => $swift->id,
        ]);
        
        Word::create([
            'word' => 'Enum',
            'correct' => 'Tipo de dato que define un grupo de valores relacionados.',
            'incorrect_1' => 'Variable que almacena un valor constante.',
            'incorrect_2' => 'Función que se ejecuta automáticamente.',
            'incorrect_3' => 'Estructura que define una clase.',
            'explanation' => 'Los enums son útiles para manejar valores predefinidos en Swift.',
            'category_id' => $swift->id,
        ]);
        
        Word::create([
            'word' => 'Protocol',
            'correct' => 'Definición de métodos y propiedades que pueden ser adoptados por una clase o estructura.',
            'incorrect_1' => 'Variable que almacena un valor constante.',
            'incorrect_2' => 'Función que se ejecuta automáticamente.',
            'incorrect_3' => 'Estructura que define una clase.',
            'explanation' => 'Los protocols permiten definir interfaces comunes para diferentes tipos.',
            'category_id' => $swift->id,
        ]);
        
        Word::create([
            'word' => 'Struct',
            'correct' => 'Estructura que permite agrupar datos y funciones relacionadas.',
            'incorrect_1' => 'Variable que almacena un valor constante.',
            'incorrect_2' => 'Función que se ejecuta automáticamente.',
            'incorrect_3' => 'Tipo de dato que define un grupo de valores relacionados.',
            'explanation' => 'Las structs son útiles para agrupar datos relacionados en Swift.',
            'category_id' => $swift->id,
        ]);
        
        Word::create([
            'word' => 'Guard',
            'correct' => 'Declaración que permite salir de una función si una condición no se cumple.',
            'incorrect_1' => 'Función que se ejecuta automáticamente.',
            'incorrect_2' => 'Variable que almacena un valor constante.',
            'incorrect_3' => 'Estructura que define una clase.',
            'explanation' => 'La declaración guard es útil para manejar condiciones de error.',
            'category_id' => $swift->id,
        ]);
        
        Word::create([
            'word' => 'Deinit',
            'correct' => 'Método que se llama cuando una instancia de una clase se está desinicializando.',
            'incorrect_1' => 'Función que se ejecuta automáticamente.',
            'incorrect_2' => 'Variable que almacena un valor constante.',
            'incorrect_3' => 'Estructura que define una clase.',
            'explanation' => 'El método deinit es útil para liberar recursos en Swift.',
            'category_id' => $swift->id,
        ]);
        
        Word::create([
            'word' => 'Extension',
            'correct' => 'Permite agregar funcionalidad a una clase, estructura o protocolo existente.',
            'incorrect_1' => 'Función que se ejecuta automáticamente.',
            'incorrect_2' => 'Variable que almacena un valor constante.',
            'incorrect_3' => 'Estructura que define una clase.',
            'explanation' => 'Las extensiones son útiles para agregar métodos a tipos existentes.',
            'category_id' => $swift->id,
        ]);
        
        Word::create([
            'word' => 'Lazy',
            'correct' => 'Propiedad que no se inicializa hasta que se accede a ella por primera vez.',
            'incorrect_1' => 'Función que se ejecuta automáticamente.',
            'incorrect_2' => 'Variable que almacena un valor constante.',
            'incorrect_3' => 'Estructura que define una clase.',
            'explanation' => 'Las propiedades lazy son útiles para inicializar valores de manera diferida.',
            'category_id' => $swift->id,
        ]);
        
        Word::create([
            'word' => 'Subscript',
            'correct' => 'Permite acceder a los elementos de una colección, lista o secuencia de una manera conveniente.',
            'incorrect_1' => 'Función que se ejecuta automáticamente.',
            'incorrect_2' => 'Variable que almacena un valor constante.',
            'incorrect_3' => 'Estructura que define una clase.',
            'explanation' => 'Los subscripts son útiles para acceder a elementos de colecciones en Swift.',
            'category_id' => $swift->id,
        ]);

        /**
        * Palabras de la caregoría Libros
        */

        $libros = Category::where('name', 'Libros')->first();

        Word::create([
            'word' => 'Prólogo',
            'correct' => 'Texto introductorio que precede al cuerpo de una obra literaria.',
            'incorrect_1' => 'Último capítulo de una novela.',
            'incorrect_2' => 'Diálogo entre personajes.',
            'incorrect_3' => 'Parte del libro donde va el índice.',
            'explanation' => 'El prólogo ofrece contexto y antecedentes sobre la obra.',
            'category_id' => $libros->id,
        ]);
        
        Word::create([
            'word' => 'Epílogo',
            'correct' => 'Sección final de una obra literaria que resume y concluye la historia.',
            'incorrect_1' => 'Capítulo introductorio.',
            'incorrect_2' => 'Nota del autor.',
            'incorrect_3' => 'Parte del libro donde se encuentran las referencias.',
            'explanation' => 'El epílogo proporciona una conclusión y cierre a la narrativa.',
            'category_id' => $libros->id,
        ]);
        
        Word::create([
            'word' => 'Metáfora',
            'correct' => 'Figura retórica que compara dos cosas diferentes sin usar "como".',
            'incorrect_1' => 'Descripción detallada de un personaje.',
            'incorrect_2' => 'Diálogo entre dos personajes.',
            'incorrect_3' => 'Narración de eventos históricos.',
            'explanation' => 'Las metáforas enriquecen el lenguaje y la expresión literaria.',
            'category_id' => $libros->id,
        ]);
        
        Word::create([
            'word' => 'Narrador',
            'correct' => 'Voz que cuenta la historia en una obra literaria.',
            'incorrect_1' => 'Personaje principal de la historia.',
            'incorrect_2' => 'Autor del libro.',
            'incorrect_3' => 'Editor de la obra.',
            'explanation' => 'El narrador puede ser en primera, segunda o tercera persona.',
            'category_id' => $libros->id,
        ]);
        
        Word::create([
            'word' => 'Antagonista',
            'correct' => 'Personaje que se opone al protagonista en una obra literaria.',
            'incorrect_1' => 'Personaje secundario.',
            'incorrect_2' => 'Narrador de la historia.',
            'incorrect_3' => 'Autor del libro.',
            'explanation' => 'El antagonista crea conflicto y tensión en la narrativa.',
            'category_id' => $libros->id,
        ]);
        
        Word::create([
            'word' => 'Clímax',
            'correct' => 'Punto de mayor tensión o interés en una obra literaria.',
            'incorrect_1' => 'Inicio de la historia.',
            'incorrect_2' => 'Desenlace de la trama.',
            'incorrect_3' => 'Descripción de un personaje.',
            'explanation' => 'El clímax es el momento culminante de la narrativa.',
            'category_id' => $libros->id,
        ]);
        
        Word::create([
            'word' => 'Género',
            'correct' => 'Categoría que clasifica las obras literarias según su contenido y estilo.',
            'incorrect_1' => 'Nombre del autor.',
            'incorrect_2' => 'Título del libro.',
            'incorrect_3' => 'Capítulo de la obra.',
            'explanation' => 'Los géneros literarios incluyen ficción, no ficción, poesía, etc.',
            'category_id' => $libros->id,
        ]);
        
        Word::create([
            'word' => 'Trama',
            'correct' => 'Secuencia de eventos que conforman la historia en una obra literaria.',
            'incorrect_1' => 'Descripción de un personaje.',
            'incorrect_2' => 'Diálogo entre personajes.',
            'incorrect_3' => 'Nota del autor.',
            'explanation' => 'La trama es el esqueleto de la narrativa.',
            'category_id' => $libros->id,
        ]);
        
        Word::create([
            'word' => 'Protagonista',
            'correct' => 'Personaje principal de una obra literaria.',
            'incorrect_1' => 'Narrador de la historia.',
            'incorrect_2' => 'Autor del libro.',
            'incorrect_3' => 'Personaje secundario.',
            'explanation' => 'El protagonista es el centro de la acción y el conflicto.',
            'category_id' => $libros->id,
        ]);
        
        Word::create([
            'word' => 'Diálogo',
            'correct' => 'Intercambio de palabras entre dos o más personajes en una obra literaria.',
            'incorrect_1' => 'Descripción de un paisaje.',
            'incorrect_2' => 'Nota del autor.',
            'incorrect_3' => 'Título del libro.',
            'explanation' => 'El diálogo revela la personalidad y las intenciones de los personajes.',
            'category_id' => $libros->id,
        ]);
        
        
        /**
        * Palabras de la caregoría Paises
        */

        $paises = Category::where('name', 'Países')->first();

        Word::create([
            'word' => 'Japón',
            'correct' => 'País insular del este de Asia conocido por su tecnología y cultura milenaria.',
            'incorrect_1' => 'País europeo donde se habla portugués.',
            'incorrect_2' => 'Territorio africano sin salida al mar.',
            'incorrect_3' => 'Nación sudamericana donde se encuentra el Amazonas.',
            'explanation' => 'Japón es famoso por su tecnología avanzada y su rica historia cultural.',
            'category_id' => $paises->id,
        ]);
        
        Word::create([
            'word' => 'Brasil',
            'correct' => 'País sudamericano conocido por su carnaval y la selva amazónica.',
            'incorrect_1' => 'País asiático famoso por sus templos antiguos.',
            'incorrect_2' => 'Nación europea con una gran tradición de ópera.',
            'incorrect_3' => 'Territorio africano conocido por sus safaris.',
            'explanation' => 'Brasil es el país más grande de América del Sur y tiene una biodiversidad increíble.',
            'category_id' => $paises->id,
        ]);
        
        Word::create([
            'word' => 'Canadá',
            'correct' => 'País norteamericano conocido por su vasto territorio y su diversidad cultural.',
            'incorrect_1' => 'País europeo famoso por su gastronomía.',
            'incorrect_2' => 'Nación asiática con una gran población.',
            'incorrect_3' => 'Territorio africano con una gran variedad de fauna.',
            'explanation' => 'Canadá es el segundo país más grande del mundo y tiene dos idiomas oficiales: inglés y francés.',
            'category_id' => $paises->id,
        ]);
        
        Word::create([
            'word' => 'Australia',
            'correct' => 'País insular de Oceanía conocido por su fauna única y la Gran Barrera de Coral.',
            'incorrect_1' => 'País europeo con una gran tradición de fútbol.',
            'incorrect_2' => 'Nación asiática famosa por sus rascacielos.',
            'incorrect_3' => 'Territorio africano con una gran variedad de desiertos.',
            'explanation' => 'Australia es famosa por sus canguros y koalas, así como por su impresionante naturaleza.',
            'category_id' => $paises->id,
        ]);
        
        Word::create([
            'word' => 'India',
            'correct' => 'País asiático conocido por su rica historia y diversidad cultural.',
            'incorrect_1' => 'País europeo famoso por sus castillos.',
            'incorrect_2' => 'Nación sudamericana con una gran tradición de tango.',
            'incorrect_3' => 'Territorio africano conocido por sus pirámides.',
            'explanation' => 'India es el segundo país más poblado del mundo y tiene una gran variedad de idiomas y religiones.',
            'category_id' => $paises->id,
        ]);
        
        Word::create([
            'word' => 'Egipto',
            'correct' => 'País africano conocido por sus antiguas pirámides y su historia faraónica.',
            'incorrect_1' => 'País europeo famoso por sus museos.',
            'incorrect_2' => 'Nación asiática con una gran tradición de artes marciales.',
            'incorrect_3' => 'Territorio sudamericano conocido por sus playas.',
            'explanation' => 'Egipto es famoso por sus monumentos antiguos, como las pirámides de Giza y la Esfinge.',
            'category_id' => $paises->id,
        ]);
        
        Word::create([
            'word' => 'Francia',
            'correct' => 'País europeo conocido por su gastronomía, moda y la Torre Eiffel.',
            'incorrect_1' => 'País asiático famoso por sus templos budistas.',
            'incorrect_2' => 'Nación sudamericana con una gran tradición de samba.',
            'incorrect_3' => 'Territorio africano conocido por sus reservas naturales.',
            'explanation' => 'Francia es famosa por su cultura, arte y arquitectura, especialmente en París.',
            'category_id' => $paises->id,
        ]);
        
        Word::create([
            'word' => 'China',
            'correct' => 'País asiático conocido por su gran población y su historia milenaria.',
            'incorrect_1' => 'País europeo famoso por sus canales.',
            'incorrect_2' => 'Nación sudamericana con una gran tradición de fútbol.',
            'incorrect_3' => 'Territorio africano conocido por sus montañas.',
            'explanation' => 'China es el país más poblado del mundo y tiene una historia rica y diversa.',
            'category_id' => $paises->id,
        ]);
        
        Word::create([
            'word' => 'México',
            'correct' => 'País norteamericano conocido por su comida, música y cultura vibrante.',
            'incorrect_1' => 'País europeo famoso por sus óperas.',
            'incorrect_2' => 'Nación asiática con una gran tradición de sumo.',
            'incorrect_3' => 'Territorio africano conocido por sus safaris.',
            'explanation' => 'México es famoso por su cocina, música y festivales, como el Día de los Muertos.',
            'category_id' => $paises->id,
        ]);
        
        Word::create([
            'word' => 'Italia',
            'correct' => 'País europeo conocido por su arte, historia y gastronomía.',
            'incorrect_1' => 'País asiático famoso por sus jardines zen.',
            'incorrect_2' => 'Nación sudamericana con una gran tradición de carnaval.',
            'incorrect_3' => 'Territorio africano conocido por sus desiertos.',
            'explanation' => 'Italia es famosa por su comida, arte y arquitectura, especialmente en ciudades como Roma y Venecia.',
            'category_id' => $paises->id,
        ]);

        /**
        * Palabras de la caregoría Deportes
        */

        $deportes = Category::where('name', 'Deportes')->first();

        Word::create([
            'word' => 'Maratón',
            'correct' => 'Carrera de larga distancia de 42.195 kilómetros.',
            'incorrect_1' => 'Prueba de ciclismo de montaña.',
            'incorrect_2' => 'Partido de fútbol de dos tiempos.',
            'incorrect_3' => 'Juego de raqueta sobre césped.',
            'explanation' => 'El maratón es una prueba de resistencia que se corre en todo el mundo.',
            'category_id' => $deportes->id,
        ]);
        
        Word::create([
            'word' => 'Fútbol',
            'correct' => 'Deporte de equipo que se juega con un balón y dos porterías.',
            'incorrect_1' => 'Juego de mesa con fichas.',
            'incorrect_2' => 'Deporte acuático con tablas.',
            'incorrect_3' => 'Competencia de atletismo.',
            'explanation' => 'El fútbol es el deporte más popular del mundo y se juega en casi todos los países.',
            'category_id' => $deportes->id,
        ]);
        
        Word::create([
            'word' => 'Tenis',
            'correct' => 'Deporte de raqueta que se juega en una cancha dividida por una red.',
            'incorrect_1' => 'Deporte de contacto con guantes.',
            'incorrect_2' => 'Juego de cartas.',
            'incorrect_3' => 'Competencia de natación.',
            'explanation' => 'El tenis es un deporte que se puede jugar individualmente o en parejas.',
            'category_id' => $deportes->id,
        ]);
        
        Word::create([
            'word' => 'Baloncesto',
            'correct' => 'Deporte de equipo que se juega con un balón y dos canastas.',
            'incorrect_1' => 'Juego de mesa con dados.',
            'incorrect_2' => 'Deporte de invierno con esquís.',
            'incorrect_3' => 'Competencia de ciclismo.',
            'explanation' => 'El baloncesto es conocido por su dinamismo y la altura de sus jugadores.',
            'category_id' => $deportes->id,
        ]);
        
        Word::create([
            'word' => 'Natación',
            'correct' => 'Deporte acuático que consiste en desplazarse en el agua usando el cuerpo.',
            'incorrect_1' => 'Deporte de contacto con pelotas.',
            'incorrect_2' => 'Juego de mesa con cartas.',
            'incorrect_3' => 'Competencia de atletismo.',
            'explanation' => 'La natación es uno de los deportes más completos y se practica en piscinas y en aguas abiertas.',
            'category_id' => $deportes->id,
        ]);
        
        Word::create([
            'word' => 'Ciclismo',
            'correct' => 'Deporte que consiste en montar y competir en bicicleta.',
            'incorrect_1' => 'Deporte de contacto con guantes.',
            'incorrect_2' => 'Juego de mesa con fichas.',
            'incorrect_3' => 'Competencia de natación.',
            'explanation' => 'El ciclismo es un deporte muy popular y se practica en carretera y montaña.',
            'category_id' => $deportes->id,
        ]);
        
        Word::create([
            'word' => 'Boxeo',
            'correct' => 'Deporte de contacto en el que dos personas luchan usando los puños.',
            'incorrect_1' => 'Deporte acuático con tablas.',
            'incorrect_2' => 'Juego de cartas.',
            'incorrect_3' => 'Competencia de atletismo.',
            'explanation' => 'El boxeo es conocido por su intensidad y requiere mucha preparación física.',
            'category_id' => $deportes->id,
        ]);
        
        Word::create([
            'word' => 'Golf',
            'correct' => 'Deporte que consiste en golpear una pelota con un palo para introducirla en hoyos.',
            'incorrect_1' => 'Deporte de contacto con guantes.',
            'incorrect_2' => 'Juego de mesa con fichas.',
            'incorrect_3' => 'Competencia de natación.',
            'explanation' => 'El golf es un deporte que se juega en grandes campos y requiere precisión y estrategia.',
            'category_id' => $deportes->id,
        ]);
        
        Word::create([
            'word' => 'Voleibol',
            'correct' => 'Deporte de equipo que se juega con un balón y una red en el centro de la cancha.',
            'incorrect_1' => 'Deporte de invierno con esquís.',
            'incorrect_2' => 'Juego de mesa con cartas.',
            'incorrect_3' => 'Competencia de ciclismo.',
            'explanation' => 'El voleibol es un deporte muy dinámico y se juega tanto en interiores como en exteriores.',
            'category_id' => $deportes->id,
        ]);
        
        Word::create([
            'word' => 'Atletismo',
            'correct' => 'Conjunto de disciplinas deportivas que incluyen carreras, saltos y lanzamientos.',
            'incorrect_1' => 'Deporte de contacto con pelotas.',
            'incorrect_2' => 'Juego de mesa con dados.',
            'incorrect_3' => 'Competencia de natación.',
            'explanation' => 'El atletismo es uno de los deportes más antiguos y se practica en todo el mundo.',
            'category_id' => $deportes->id,
        ]);

    }
}
