<?php
	// src/AppBundle/Controller/Hello.php
	namespace AppBundle\Controller;
	use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
	use Symfony\Bundle\FrameworkBundle\Controller\Controller;

	use Symfony\Component\HttpFoundation\Response;

	class Hello extends Controller
	{
		/**
		* @Route("/Hello")
		*/

		public function helloAction()
		{
//			return new Response('Hello world!');
			return $this->render(
				'lucky/hello.html.twig'
			);
		}
	}
?>
