<?php

namespace App\Repository\Oriwood;

use App\Entity\oriwood\FEscenario;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<FEscenario>
 *
 * @method FEscenario|null find($id, $lockMode = null, $lockVersion = null)
 * @method FEscenario|null findOneBy(array $criteria, array $orderBy = null)
 * @method FEscenario[]    findAll()
 * @method FEscenario[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class FEscenarioRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, FEscenario::class);
    }

//    /**
//     * @return FEscenario[] Returns an array of FEscenario objects
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

//    public function findOneBySomeField($value): ?FEscenario
//    {
//        return $this->createQueryBuilder('a')
//            ->andWhere('a.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
