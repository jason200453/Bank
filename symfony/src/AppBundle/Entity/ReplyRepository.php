<?php

namespace AppBundle\Entity;

use Doctrine\ORM\EntityRepository;

class ReplyRepository extends EntityRepository
{
    public function selectAllReply()
    {
        $allReply = $this->getEntityManager()
            ->createQueryBuilder()
            ->select('r, m, e')
            ->from('AppBundle:Reply', 'r')
            ->join('r.message', 'm')
            ->join('r.messager', 'e')
            ->getQuery()
            ->getResult();

        return $allReply;
    }
}
