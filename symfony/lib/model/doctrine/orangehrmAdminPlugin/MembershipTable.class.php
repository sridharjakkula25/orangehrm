<?php

/**
 * MembershipTable
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 */
class MembershipTable extends PluginMembershipTable
{
    /**
     * Returns an instance of this class.
     *
     * @return object MembershipTable
     */
    public static function getInstance()
    {
        return Doctrine_Core::getTable('Membership');
    }
}