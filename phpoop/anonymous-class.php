<?php 

$migration = new class 
{
    public function up($db)
    {
        return $db->execute([
            'string' => 'name'
        ]);
    }

    public function down($db)
    {
        $db->execute('DROP TABLE ?', ['users']);
    }
};