<?php

namespace App\Repository;

use App\Entity\LineaPedido;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method LineaPedido|null find($id, $lockMode = null, $lockVersion = null)
 * @method LineaPedido|null findOneBy(array $criteria, array $orderBy = null)
 * @method LineaPedido[]    findAll()
 * @method LineaPedido[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class LineaPedidoRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, LineaPedido::class);
    }

    // /**
    //  * @return LineaPedido[] Returns an array of LineaPedido objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('l')
            ->andWhere('l.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('l.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?LineaPedido
    {
        return $this->createQueryBuilder('l')
            ->andWhere('l.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
