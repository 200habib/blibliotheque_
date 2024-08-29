<?php

namespace App\Repository;

use App\Entity\Book;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;
use Doctrine\ORM\QueryBuilder;

class BookRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Book::class);
    }

    public function searchBooks(string $query): array
    {
        $qb = $this->createQueryBuilder('b')
            ->where('b.titre LIKE :query')
            ->setParameter('query', '%'.$query.'%')
            ->getQuery();

        return $qb->getResult();
    }
}
