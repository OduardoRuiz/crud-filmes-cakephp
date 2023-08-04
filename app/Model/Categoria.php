<?php
class Categoria extends AppModel {
    public $hasMany = array(
        'Filme' => array(
            'className' => 'Filme',
            'foreignKey' => 'categoria_id'
        )
    );
}
