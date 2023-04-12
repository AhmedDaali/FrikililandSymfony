<?php

namespace App\Controller;
use App\Entity\Post;
use App\Entity\User;
use App\Form\PostType;
use Doctrine\ORM\EntityManagerInterface;
use phpDocumentor\Reflection\Types\This;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\BrowserKit\Request;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request as HttpFoundationRequest;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

//Clase controladora que se usa en el modelo de negocio.
class PostController extends AbstractController
{
    private $em; 

    public function __construct(EntityManagerInterface $em)
    {
        $this->em = $em;
    }

    #[Route('/post/{id}', name: 'post')]
    public function getPost($id): Response
    {
        $post1 =$this->em->getRepository(Post::class)->find($id);
        $posts1 =$this->em->getRepository(Post::class)->findAll();
        $custom_post =$this->em->getRepository(Post::class)->find($id);
        return $this->render('post/index.html.twig', [
            'controller_name' => [
                'saludo'=>'Hola mundo', 
                'nombre'=>'Diego Bastidas'],
                'post'=>$post1,
                'posts'=>$posts1,
                'custom_post'=>$custom_post
        ]);
    }

   /* #[Route('/user/{id}', name: 'user')]
    public function index($id): Response
    {
        $user1 =$this->em->getRepository(User::class)->find($id);
        return $this->render('user/index.html.twig', [
            'user'=>$user1
        ]);
    }

    #[Route('/insert/post', name: 'insert_post')]
    public function insert(): Response
    {
        $user = $this->em->getRepository(User::class)->find(1);
        
        $post = new Post($user, "Mi post insertado2", "Opinión2",  "Hola todos2", "Hola",null, "mi url2" );
      
        /*$post->setTitle("Mi post insertado")
        ->setDescription("Hola todos")
        ->setCreationDate(new \DateTime())
        ->setUrl("mi url")
        ->setFile("Hola todos")
        ->setType("Opinión")*/
        //$post->setUser($user);
   /* $this->em->persist($post);
    $this->em->flush();  
    return new JsonResponse(['succes'=>true]); 
    }


    #[Route('/update/post', name: 'update_post')]
    public function update(): Response
    {
        $post = $this->em->getRepository(Post::class)->find(5);
        $post->setTitle("Mi post actualizado");  
    $this->em->flush();  
    return new JsonResponse(['succes'=>true]); 
    }*/

    #[Route('/delete_post/', name: 'delete_post')]
    public function delete(): Response
    {
        $post = $this->em->getRepository(Post::class)->find(8);

    $this->em->remove($post);  
    $this->em->flush();  
    return new JsonResponse(['succes'=>true]); 
    }

    #[Route('/formulario/', name: 'post_form')]
    public function postForm(HttpFoundationRequest $request): Response
    {
        $user = $this->em->getRepository(User::class)->find(1);
        $post = new Post($user, "", "",  "", "",null, "");
        $form = $this->createForm(PostType::class, $post);
        $form->handleRequest($request);
        if($form->isSubmitted()&& $form->isValid()){
            $this->em->persist($post);
            $this->em->flush();
            return $this->redirectToRoute('post');
        }
        return $this->render('post/form.html.twig', [
            'form' =>$form->createView()
    
        ]);
    }
    #[Route('/post/form2/', name: 'post_form2')]
    public function postForm2(HttpFoundationRequest $request): Response
    {
        
        $post = new Post();
        $form = $this->createForm(PostType::class, $post);
        $form->handleRequest($request);

        if($form->isSubmitted()&& $form->isValid()){
            $user = $this->em->getRepository(User::class)->find(1);
            $post->setUser($user);
            $this->em->persist($post);
            $this->em->flush();
            return $this->redirectToRoute('post');
        }
        return $this->render('post/index.html.twig', [
            'form' =>$form->createView()
    
        ]);
    }
}
