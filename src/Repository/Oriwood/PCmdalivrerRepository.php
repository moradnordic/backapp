<?php

namespace App\Repository\Oriwood;

use App\Entity\oriwood\PCmdalivrer;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<PCmdalivrer>
 *
 * @method PCmdalivrer|null find($id, $lockMode = null, $lockVersion = null)
 * @method PCmdalivrer|null findOneBy(array $criteria, array $orderBy = null)
 * @method PCmdalivrer[]    findAll()
 * @method PCmdalivrer[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class PCmdalivrerRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, PCmdalivrer::class);
    }

//    /**
//     * @return PCmdalivrer[] Returns an array of PCmdalivrer objects
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

//    public function findOneBySomeField($value): ?PCmdalivrer
//    {
//        return $this->createQueryBuilder('a')
//            ->andWhere('a.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
