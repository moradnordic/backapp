<?php

namespace App\Repository\SageSystem;

use App\Entity\SageSystem\Clientsnotes;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Clientsnotes>
 *
 * @method Clientsnotes|null find($id, $lockMode = null, $lockVersion = null)
 * @method Clientsnotes|null findOneBy(array $criteria, array $orderBy = null)
 * @method Clientsnotes[]    findAll()
 * @method Clientsnotes[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ClientsnotesRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Clientsnotes::class);
    }

//    /**
//     * @return Clientsnotes[] Returns an array of Clientsnotes objects
//     */
//    public function findByExampleField($value): array
//    {
//        return $this->createQueryBuilder('a')
//            ->andWhere('a.exampleField = :val')
//            ->setParameter('val', $value)
//            ->orderBy('a.id', 'ASC')
//            ->setMaxResults(10)
//            ->getQuery()
//            ->getResult()
//        ;
//    }

//    public function findOneBySomeField($value): ?Clientsnotes
//    {
//        return $this->createQueryBuilder('a')
//            ->andWhere('a.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
