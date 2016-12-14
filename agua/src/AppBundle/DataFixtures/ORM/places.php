<?php

namespace AppBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use AppBundle\Entity\Place;

class Places implements FixtureInterface
{
    public function load(ObjectManager $manager)
    {
        $places = array(
            array(
                'name'=>'Embalse de la Almendra',
                'description' => 'Al noroeste de Salamanca, poco antes de unirse a la intensidad del padre Duero, el río Tormes ve detenido su curso en una formidable pantalla: es la presa de Almendra, que da origen a un auténtico mar interior con sus casi 8.000 hectáreas de superficie inundada. Su singularidad radica en que la central hidroeléctrica, el salto, se encuentra a 15 kilómetros de distancia en Villarino de los Aires, donde el agua llega a través de un túnel de siete metros de diámetro excavado en la roca. El embalse y la presa de Almendra (también conocidos como salto de Villarino) son una obra de ingeniería hidroeléctrica construida en el curso inferior del río Tormes. Está situada a 5 km de la localidad salmantina de Almendra y a 7 km de la zamorana población de Cibanal, en Castilla y León, España.
                                Constituye la presa más alta y uno de los embalses más extensos de España.<br>
                                El tramo en el que se sitúa se conoce como los arribes del Tormes, una profunda depresión geográfica originada por la erosión milenaria del río.
                                Forma parte del sistema Saltos del Duero junto con las infraestructuras instaladas en Aldeadávila, Castro, Ricobayo, Saucelle y Villalcampo.',
                'location' => '',
                'picture' => '',
                'town' => 'Almendra',
                'province' => 'Salamanca'
            ),
            array(
                'name'=>'Bletisa Aventura',
                'description' => 'Empresas de turismo activo en Salamanca hay varias, algunas con muchos años de experiencia, 
                                  otras enfocadas a actividades de mayor riesgo y otras jóvenes, como la nuestra -Bletisaventura- 
                                  que diseñamos nuestras actividades pensando en toda la familia, para que puedas disfrutar en esos
                                   días de descanso o vacaciones junto con tus hijos, amigos o abuelos.
                                  <br><br>
                                  Tenemos una pequeña oferta pero seguro que alguna de nuestras actividades es lo que buscas 
                                  para disfrutar de la naturaleza practicando algún deporte o simplemente paseando para conocer
                                   mejor este bello entorno de la Villa medieval protegida por el río Tormes y rodeada por el 
                                   terreno adehesado propio de estas latitudes y moldeado por el ser humano a lo largo de los siglos.
                                  <br><br>
                                  Picando sobre las diferentes imágenes puedes enlazar con la descripción detallada de cada una de estas actividades.',
                'location' => '',
                'picture' => '',
                'town' => 'Ledesma',
                'province' => 'Salamanca'
            ),
            array(
                'name'=>'Balneario de Ledesma',
                'description' => '',
                'location' => '',
                'picture' => '',
                'town' => 'Baños de Ledesma',
                'province' => 'Salamanca'
            ),
            array(
                'name'=>'Fundacion Tormes',
                'description' => 'La Fundación Tormes-EB es una entidad sin ánimo de lucro, preocupada por la calidad de nuestro entorno,
                                 es decir, por tu calidad de vida. Creemos en la conservación y restauración del medio natural como forma de desarrollo 
                                 rural y urbano, apostando por el presente y el futuro, pero sin olvidar nuestro pasado. Desarrollamos nuestra actividad 
                                 en el ámbito de la consultoría ambiental junto con toda clase de programas ambientales de comunicación, sensibilización
                                  y educación ambiental en nuestro Eco-Albergue "CIAM El Tormes" , en Almenara de Tormes, a escasos 15 km de Salamanca.',
                'location' => '',
                'picture' => '',
                'town' => 'Almenara de Tormes',
                'province' => 'Salamanca'
            ),
            array(
                'name'=>'Poza Mina de Golpejas',
                'description' => 'La vieja mina de estaño de Golpejas se ha convertido en una laguna artificial para el baño.  
                                  Es una mina de extracción a cielo abierto de estaño, niobio y tántalo (tantalio). Actualmente,
                                  se ha convertido en una zona de recreo donde se practica incluso el buceo.',
                'location' => '',
                'picture' => '',
                'town' => 'Golpejas',
                'province' => 'Salamanca'
            ),
        );

        foreach($places as $place){
            $entity = new Place();
            $entity->setName($place['name']);
            $entity->setDescription($place['description']);
            $entity->setLocation($place['location']);
            $entity->setPicture($place['picture']);
            $entity->setTown($place['town']);
            $entity->setProvince($place['province']);
            $manager->persist($entity);
        }
        $manager->flush();
    }
}