<?php

/**
 * TemplateTable
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 */
class TemplateTable extends Doctrine_Table
{
    /**
     * Returns an instance of this class.
     *
     * @return TemplateTable The table instance
     */
    public static function getInstance()
    {
        return Doctrine_Core::getTable('Template');
    }

    /**
     * Este método busca y retorna una plantilla de la base de datos buscandolo por el id.
     * @param $id
     * @return Doctrine_Collection
     */

    public static function getTemplateById($id)
    {
        $query = Doctrine_Query::create()
            ->from('Template t')
            ->where('t.id = ?', $id);
        return $query->fetchOne();
    }
}
