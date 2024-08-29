<?php

namespace App\Controller;


use App\Form\SearchType;
use App\Model\SearchModel;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Repository\BookRepository;

class HomeController extends AbstractController
{
    #[Route('/', name: 'home')]
    public function index(Request $request, BookRepository $bookRepository): Response
    {
        $searchModel = new SearchModel();
        
        $form = $this->createForm(SearchType::class, $searchModel);
        $form->handleRequest($request);

        $books = [];
        if ($form->isSubmitted() && $form->isValid()) {
            $query = $searchModel->getQuery();
            if ($query) {
                $books = $bookRepository->searchBooks($query);
            }
        }

        return $this->render('home/index.html.twig', [
            'form' => $form->createView(),
            'books' => $books,
        ]);
    }
}
