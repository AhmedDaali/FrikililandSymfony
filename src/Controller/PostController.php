<?php

namespace App\Controller;
use App\Entity\Post;
use App\Entity\User;
use Doctrine\ORM\EntityManagerInterface;
use phpDocumentor\Reflection\Types\This;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class PostController extends AbstractController
{
    private $em; 

    public function __construct(EntityManagerInterface $em)
    {
        $this->em = $em;
    }

    #[Route('/post/{id}', name: 'post')]
    public function index($id): Response
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
    /*#[Route('/user/{id}', name: 'user')]
    public function index($id): Response
    {
        $user1 =$this->em->getRepository(User::class)->find($id);
        return $this->render('user/index.html.twig', [
            'user'=>$user1
        ]);
    }*/
    #[Route('/insert/post', name: 'insert_post')]
    public function insert(): Response
    {
        $post = new Post();
        $user = $this->em->getRepository(User::class)->find(1);
        $post->setTitle("Mi post insertado")
        ->setDescription("Hola todos")
        ->setCreationDate(new \DateTime())
        ->setUrl("mi url")
        ->setFile("Hola todos")
        ->setType("Opinión")
        ->setUser($user);
    $this->em->persist($post);
    $this->em->flush();  
    return new JsonResponse(['succes'=>true]); 
    }
}
