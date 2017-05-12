<?php
	// src/AppBundle/Controller/HelloController.php
	namespace AppBundle\Controller;
	use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
	use Symfony\Bundle\FrameworkBundle\Controller\Controller;

	use Symfony\Component\HttpFoundation\Response;
	class HelloController extends Controller
	{
		/**
		* @Route("/hello/{name}/{surname}", name="hello")
		*/
		public function indexAction($name, $surname = 'noone')
		{

			$this->addFlash
			(
				'notice',
				'Your changes were saved!'
			);

//			return new Response('<html><body>Hello '.$name.' '.$surname.'!</body></html>');
			return $this->render(
				'lucky/hello.html.twig'
			);


		}
	}
?>
